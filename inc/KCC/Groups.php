<?php

namespace KCC;

use KCC\FlashMessages\FlashMessage;
use KCC\FlashMessages\FlashMessages;

class Groups extends \jwc\Wordpress\WPCollection
{

    public function __construct()
    {
        parent::__construct('groups');

        add_filter('query_vars', array($this, 'add_query_vars'));
    }
    public function init()
    {
        add_action('publish_groups', array($this, 'sendApprovalNotification'));
        add_action('trash_groups', array($this, 'trashGroup'));

        // user joins open group
        add_action('wp_ajax_join_open_group', array($this, 'ajaxJoinOpenGroup'));
        //add_action('wp_ajax_nopriv_join_open_group', array($this, 'ajaxJoinOpenGroup'));

        // user requests to join a closed group
        add_action('wp_ajax_join_closed_group_request', array($this, 'ajaxJoinClosedGroupRequest'));
        //add_action('wp_ajax_nopriv_join_closed_group_request', array($this, 'ajaxJoinClosedGroupRequest'));

        // user cancels join group request 
        add_action('wp_ajax_cancel_join_group_request', array($this, 'ajaxCancelGroupJoinRequest'));
        //add_action('wp_ajax_nopriv_join_closed_group_request', array($this, 'ajaxJoinClosedGroupRequest'));

        // Leader accepts user request to join a group.  
        add_action('wp_ajax_accept_group_join_request', array($this, 'ajaxAcceptGroupJoinRequest'));
        //add_action('wp_ajax_nopriv_accept_group_request', array($this, 'ajaxAcceptGroupJoinRequest'));        

        // leader declines user request to join a group
        add_action('wp_ajax_decline_group_join_request', array($this, 'ajaxDeclineGroupJoinRequest'));
        

        // leader sends invite to member 
        add_action('wp_ajax_send_closed_group_invite', array($this, 'ajaxSendClosedGroupInvite'));
        //add_action('wp_ajax_nopriv_send_closed_group_invite', array($this, 'ajaxSendClosedGroupInvite'));

        // leader cancels group invite
        add_action('wp_ajax_cancel_group_invite', array($this, 'ajaxCancelGroupInvite'));
        //add_action('wp_ajax_nopriv_accept_group_request', array($this, 'ajaxAcceptGroupJoinRequest'));

        // user accepts invitation
        add_action('wp_ajax_accept_group_invite', array($this, 'ajaxAcceptGroupInvite'));
        //add_action('wp_ajax_nopriv_accept_group_invite', array($this, 'ajaxAcceptGroupInvite'));

        // user declines invitation
        add_action('wp_ajax_decline_group_invite', array($this, 'ajaxDeclineGroupInvite'));
    
        // user leaves group
        add_action('wp_ajax_leave_group', array($this, 'ajaxLeaveGroup'));

        // leader removes member
        add_action('wp_ajax_remove_group_member', array($this, 'ajaxRemoveGroupMember'));


        // add rewrite rule for manage-groups page 
        $this->add_rewrite_rules();

        $this->possiblyCreateGroup();

    }

    public function add_rewrite_rules(){
        add_rewrite_rule('^groups/([^/]*)/manage-requests/?$', 'index.php?pagename=group-members&group_slug=$matches[1]', 'top');
    }

    public function add_query_vars($vars)
    {
        $vars[] = 'group_slug';
        return $vars;
    }

    public function sendApprovalNotification($group_id)
    {
        $args = ['group_id' => $group_id];
        $notification = new \KCC\Notifications\GroupApprovedNotification($args);
        $notification->send();
    }


    public function trashGroup($group_id)
    {
        // In WordPress, when a post is trashed, you can check the previous state using the '_wp_trash_meta_status' post meta.
        $previous_status = get_post_meta($group_id, '_wp_trash_meta_status', true);

        switch($previous_status){
            case 'publish':
                $this->sendGroupRemovedNotification($group_id);
                break;
            case 'pending':
                $this->sendDeclineNotification($group_id);
                break;
        }

    }   

    public function sendGroupRemovedNotification($group_id){

        $args = ['group_id' => $group_id];
        $notification = new \KCC\Notifications\GroupRemovedNotification($args);
        $notification->send();

    }

    public function sendDeclineNotification($id)
    {
        // do something when a group is deleted
        $args = ['group_id' => $id];
        $notification = new \KCC\Notifications\GroupDeclinedNotification($args);
        $notification->send();
    }

    public function allGroups(){
        
    }

    // find out if a post with type 'groups' and title $title exists
    public function groupExists($title)
    {

        global $wpdb;

        $sql = $wpdb->prepare("SELECT * FROM $wpdb->posts WHERE post_title = %s AND post_type = 'groups'", $title);

        $results = $wpdb->get_results($sql);

        return count($results) > 0;
    }

    public function createGroup($post_title, $post_content, $meta_group_type, $user_id, $attachment_id)
    {
        $args = array(
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'pending',
            'post_type' => 'groups'
        );


        // create a post with type 'groups' and title $post_title
        $post_id = wp_insert_post($args);

        if ($post_id) {
            // add meta data to the post
            add_post_meta($post_id, 'group_type', $meta_group_type);
            add_post_meta($post_id, 'group_leader', $user_id);

            if ($attachment_id) {
                set_post_thumbnail($post_id, $attachment_id);
            }
        }

        // send notifications for approval
        $args = ['group_id' => $post_id];

        // send notification to admins to approve
        $notification = new \KCC\Notifications\GroupApprovalRequestNotification($args);
        $notification->send();

        // send notification that the approval has been requested to the user who requested it.
        $notification = new \KCC\Notifications\GroupApprovalRequestSubmittedNotification($args);
        $notification->send();
    }

    public function possiblyCreateGroup()
    {

        if (!empty($_POST['ums_create_group'])) {

            $groups = new \KCC\Groups();
            $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

            if ($groups->groupExists($post_title)) {

                FlashMessages::add('This group name has been already taken. Please try with other name.', 'error');

                return;
            } else {

                // grab post data
                $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";
                $group_type  = ($_POST['group_type']) ? sanitize_text_field($_POST['group_type']) : "";

                // check to see if $_FILES is set
                if (!isset($_FILES["group_image"])) {
                    $attach_id = 0;
                } else {
                    $file = $_FILES["group_image"]["name"];
                    $attach_id = handleFileUpload($file);
                }

                // group author is the current user
                $user_id = get_current_user_id();

                // create the group - should return the post id created
                $id = $this->createGroup($post_title, $post_content, $group_type, $user_id, $attach_id);

                // validate $id;  it will be the result of a WP create Post
                if (is_wp_error($id)) {

                    FlashMessages::add('Group creation failed, Please try again.', 'error');
    

                } else {
                   FlashMessages::add('Group created successfully. Please wait for approval.', 'success');
                   // redirect to the groups page
                     wp_redirect(site_url('groups'));

                    die();
                }
            }
        }
    }


    public function ajaxJoinOpenGroup()
    {

        $current_date = date('Y-m-d');
        $current_user_id = get_current_user_id();

        $group_id = $_POST['group_id'];
        if (empty($group_id)) {
            wp_send_json_error('Group ID is required');
        }

        $group = new Group($group_id);

        // check to see if it's an Open Group
        if ($group->isClosed()) {
            wp_send_json_error('This is a closed group');
        }
        $result = $group->addMember($current_user_id);

        $responseData = array();
        $responseData['result'] = $result;

        // update user meta?  this doesn't seem like it is very important, as it bears no relationship to the group
        //update_user_meta($current_user_id, 'joining_date', $current_date);
        $responseData['msg'] = "joined";
        $responseData['group_url'] =  get_permalink($group_id);


        // send notifications
        $args = ['group_id' => $group_id, 'user_id' => $current_user_id];
        $notification = new \KCC\Notifications\OpenGroupJoinNotification($args);
        $notification->send();

        wp_send_json_success($responseData);

    }

    public function ajaxJoinClosedGroupRequest()
    {

        global $wpdb;

        $group_id = $_POST['group_id'];
        if (empty($group_id)) {
            wp_send_json_error('Group ID is required');
        }

        $current_user_id = get_current_user_id();
        $user = new User($current_user_id);
        $group = new Group($group_id);

        if($group->currentUserIsLeader()){
            wp_send_json_error('You are the leader of this group');
        }

        if($group->currentUserIsMember()){
            wp_send_json_error('You are already a member of this group');
        }

        $myArr = array();

        if($group->userRequestAlreadySent($current_user_id)){
            FlashMessages::add('You have already requested to join this group.', 'error');
            wp_send_json_error('You have already requested to join this group');
        }

        // all invites are done in here.
        $result = $group->joinRequest($current_user_id);
        
        FlashMessages::add('Request sent successfully', 'success');
        
        $myArr['result'] = $result;
        $myArr['msg'] = "Request sent successfully";
        
        wp_send_json_success($myArr);

    }

    public function ajaxCancelGroupJoinRequest(){
        global $wpdb;

        $group_id = $_POST['group_id'];
        $user_id = get_current_user_id();
        $group = new Group($group_id);
        $responseData = $group->cancelUserJoinRequest($user_id);

        $myArr = array();


        $myArr['result'] = $responseData;
        $myArr['msg'] = "Cancelled";
        wp_send_json_success($myArr);
    }

    public function ajaxAcceptGroupJoinRequest()
    {
        $group_id = $_POST['group_id'];
        $request_id = $_POST['request_id'];
        $member_id = $_POST['user_id'];
        

        $group = new Group($group_id);
        $responseData = $group->acceptUserRequest($request_id);
        $myArr = array();

        $myArr['responseData'] = $responseData;
        $myArr['msg'] = "Accepted";
        $myJSON = json_encode($myArr);
        echo $myJSON;

        die();
    }

    public function ajaxDeclineGroupJoinRequest(){

        $group_id = $_POST['group_id'];
        $request_id = $_POST['request_id'];
        $member_id = $_POST['user_id'];

        $group = new Group($group_id);
        $responseData = $group->declineUserRequest($request_id);

        $args = ['group_id' => $group_id, 'user_id' => $member_id];
        $notification = new \KCC\Notifications\JoinRequestDeclinedNotification($args);
        $notification->send();

        $myArr = array();
        $myArr['responseData'] = $responseData;
        $myArr['msg'] = "Declined";
        $myJSON = json_encode($myArr);
        echo $myJSON;

        die();
    }

    public function ajaxSendClosedGroupInvite()
    {

        global $wpdb;

        $group_id = $_POST['group_id'];
        $member_id = $_POST['mid'];

        $myArr = array();

        $sql = "SELECT * FROM group_invite WHERE group_id = '" . $group_id . "' AND user_id='" . $member_id . "' AND status='pending'";

        $check = $wpdb->get_results($sql, ARRAY_A);

        if (count($check) > 0) {
            $myArr['msg'] = "Already Invited";
            $myJSON = json_encode($myArr);
            echo $myJSON;
            die();
        }

        $tablename =  'group_invite';
        $group_id = ($_POST['group_id']) ? $group_id : "";

        $data = array(
            'group_id' => $group_id,
            'user_id' => $member_id,
            'status' => 'pending',
            'request_type'=> 'invitation',
            'notification_sent' => 0
        );

        $wpdb->insert($tablename, $data);

    
        //CLEANUP POINT B

        /* M001: User Join Notification to Group Owner */

        $args = ['group_id' => $group_id, 'user_id' => $member_id];
        $notification = new \KCC\Notifications\InvitationNotification($args);
        $notification->send();

        // update the notification sent 
        $wpdb->update('group_invite', array('notification_sent' => 1), array('user_id' => $member_id, 'group_id' => $group_id));
        $myArr['msg'] = "Invited successfully";
        $myJSON = json_encode($myArr);
        echo $myJSON;

        die();
    }

    public function ajaxCancelGroupInvite(){

        global $wpdb;

        $group_id = $_POST['group_id'];
        $member_id = $_POST['user_id'];

        if(empty($group_id) || empty($member_id)){
            wp_send_json_error('Group ID and Member ID are required');
        }

        $group = new Group($group_id);
        $result = $group->removeMember($member_id);

        // delete the invite 
        $wpdb->delete('group_invite', array('group_id' => $group_id, 'user_id' => $member_id));

        $myArr = array();
        $myArr['result'] = $result;
        $myArr['msg'] = "Cancelled";

        // send notification to group owner
        $args = ['group_id' => $group_id, 'user_id' => $member_id];
        $notification = new \KCC\Notifications\InvitationCancelledNotification($args);
        $notification->send();

        wp_send_json_success($myArr);
    }

    public function ajaxAcceptGroupInvite()
    {
        global $wpdb;

        $group_id = $_POST['group_id'];
        $member_id = get_current_user_id();

        $group = new Group($group_id);
        $result = $group->addMember($member_id);

        // delete the invite
        $wpdb->delete('group_invite', array('group_id' => $group_id, 'user_id' => $member_id));

        $myArr = array();
        $myArr['result'] = $result;
        $myArr['msg'] = "Accepted";

        // send notification to group owner
        $args = ['group_id' => $group_id, 'user_id' => $member_id];
      
        $notification = new \KCC\Notifications\InvitationAcceptedNotification($args);
        $notification->send();

        wp_send_json_success($myArr);
    }

    public function ajaxDeclineGroupInvite(){
        global $wpdb;

        $group_id = $_POST['group_id'];
        $member_id = get_current_user_id();

        // delete the invite
        $wpdb->delete('group_invite', array('group_id' => $group_id, 'user_id' => $member_id));

        if($wpdb->last_error){
            wp_send_json_error($wpdb->last_error);
        }

        $myArr = array();
        $myArr['result'] = $result;
        $myArr['msg'] = "Declined";

        // send notification to group owner
        $args = ['group_id' => $group_id, 'user_id' => $member_id];
        $notification = new \KCC\Notifications\InvitationDeclinedNotification($args);
        $notification->send();

        wp_send_json_success($myArr);
    }

    public function ajaxLeaveGroup()
    {
    
        
        $group_id = $_POST['group_id'];
        
        $member_id = get_current_user_id();
        
        $group = new Group($group_id);
        $result = $group->removeMember($member_id);

        $notification = new \KCC\Notifications\GroupMemberLeftNotification(["group_id"=>$group_id, "user_id"=>$member_id]);
        $notification->send();

        $myArr['msg'] = "Left";
        $myArr['result'] = $result;


        wp_send_json_success($myArr);

    }

    public function ajaxRemoveGroupMember(){
        
        $group_id = $_POST['group_id'];
        $member_id = $_POST['member_id'];

        if(empty($group_id) || empty($member_id)){
            wp_send_json_error('Group ID and Member ID are required');
        }

        $group = new Group($group_id);

        if($group==false){
            wp_send_json_error('Group not found');
        }

        if(!$group->currentUserIsLeader()){
            wp_send_json_error('You are not the leader of this group');
        }

        if(!$group->userIsMember($member_id)){
            wp_send_json_error('User is not a member of this group');
        }


        $result = $group->removeMember($member_id);

        $notification = new \KCC\Notifications\GroupMemberRemovedNotification(["group_id"=>$group_id, "user_id"=>$member_id]);
        $notification->send();

        $myArr['msg'] = "Removed";
        $myArr['result'] = $result;

        wp_send_json_success($myArr);
    }

    public static function getGroupBySlug($slug)
    {
        $args = array(
            'name'        => $slug,
            'post_type'   => 'groups',
            'post_status' => 'publish',
            'numberposts' => 1
        );

        $posts = get_posts($args);

        if (count($posts) > 0) {
            return new Group($posts[0]->ID);
        }

        return null;
    }
}