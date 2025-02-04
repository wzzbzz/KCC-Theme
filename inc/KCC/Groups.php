<?php

namespace KCC;

use KCC\FlashMessages\FlashMessage;
use KCC\FlashMessages\FlashMessages;

class Groups extends \jwc\Wordpress\WPCollection
{

    public function __construct()
    {
        parent::__construct('groups');
    }
    public function init()
    {
        add_action('publish_groups', array($this, 'sendApprovalNotification'));
        add_action('trash_groups', array($this, 'sendDeclineNotification'));

        add_action('wp_ajax_join_open_group', array($this, 'ajaxJoinOpenGroup'));
        //add_action('wp_ajax_nopriv_join_open_group', array($this, 'ajaxJoinOpenGroup'));

        add_action('wp_ajax_join_closed_group_request', array($this, 'ajaxJoinClosedGroupRequest'));
        //add_action('wp_ajax_nopriv_join_closed_group_request', array($this, 'ajaxJoinClosedGroupRequest'));

        add_action('wp_ajax_cancel_join_group_request', array($this, 'ajaxCancelGroupJoinRequest'));
        //add_action('wp_ajax_nopriv_join_closed_group_request', array($this, 'ajaxJoinClosedGroupRequest'));

        add_action('wp_ajax_send_closed_group_invite', array($this, 'ajaxSendClosedGroupInvite'));
        //add_action('wp_ajax_nopriv_send_closed_group_invite', array($this, 'ajaxSendClosedGroupInvite'));

        add_action('wp_ajax_accept_group_request', array($this, 'ajaxAcceptGroupJoinRequest'));
        //add_action('wp_ajax_nopriv_accept_group_request', array($this, 'ajaxAcceptGroupJoinRequest'));

        add_action('wp_ajax_leave_group', array($this, 'ajaxLeaveGroup'));

        $this->possiblyCreateGroup();

    }

    public function sendApprovalNotification($group_id)
    {
        $args = ['group_id' => $group_id];
        $notification = new \KCC\Notifications\GroupApprovedNotification($args);
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

        $result = $group->sendUserJoinRequest($current_user_id);
        
        //CLEANUP POINT B

        /* M001: User Join Notification to Group Owner */

        $args = ['group_id' => $group_id, 'user_id' => $current_user_id];
        $notification = new \KCC\Notifications\ClosedGroupJoinRequestNotification($args);
        $notification->send();
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
        $myArr['msg'] = "Accepted";
        wp_send_json_success($myArr);
    }

    public function ajaxAcceptGroupJoinRequest()
    {

        global $wpdb;

        $group_id = $_POST['group_id'];
        $member_id = $_POST['uid'];

        $group = new Group($group_id);
        $responseData = $group->acceptRequest($member_id);
        $id = $_POST['id'];
        $myArr = array();
        $responseData = $wpdb->update('group_invite', array('status' => 'accepted'), array('id' => $id, 'group_id' => $group_id));
        if (isset($member_id)) {
            if (! empty($group_id)) {
                ld_update_group_access($member_id, $group_id);
            }
        }

        // send notification to user 
        $args = ['group_id' => $group_id, 'user_id' => $member_id];
        $notification = new \KCC\Notifications\GroupJoinRequestAcceptedNotification($args);
        $notification->send();
        
        $myArr['responseData'] = $responseData;
        $myArr['msg'] = "Accepted";
        $myJSON = json_encode($myArr);
        echo $myJSON;

        die();
    }

    public function ajaxSendClosedGroupInvite()
    {

        global $wpdb;

        $group_id = $_POST['group_id'];
        $member_id = $_POST['uid'];
        $myArr = array();

        $sql = "SELECT * FROM group_invite WHERE group_id = '" . $group_id . "' AND invited_to = '" . $member_id . "' AND invited_from ='" . get_current_user_id() . "' ";

        $check = $wpdb->get_results($sql, ARRAY_A);

        if (count($check) > 0) {
            $myArr['msg'] = "Already Invited";
            $myJSON = json_encode($myArr);
            echo $myJSON;
            die();
        }

        $tablename =  'group_invite';
        $current_user_id = get_current_user_id();
        $group_id = ($_POST['group_id']) ? $group_id : "";

        $insertData = array(
            'invited_to' => $member_id,
            'invited_from' => $current_user_id,
            'status' => 'pending',
            'request_type' => 'invite',
            'group_id' => $group_id
        );

        $dd = $wpdb->insert('group_invite', $insertData);

        //CLEANUP POINT B

        /* M001: User Join Notification to Group Owner */

        $args = ['group_id' => $group_id, 'user_id' => $member_id];
        $notification = new \KCC\Notifications\ClosedGroupInviteNotification($args);
        $notification->send();

        $myArr['sql'] = $dd;
        $myArr['msg'] = "Invited successfully";
        $myJSON = json_encode($myArr);
        echo $myJSON;

        die();
    }

    public function ajaxLeaveGroup()
    {
    
        
        $group_id = $_POST['group_id'];
        
        $member_id = get_current_user_id();
        
        $group = new Group($group_id);
        $result = $group->removeMember($member_id);

        $notification = new \KCC\Notifications\GroupMemberLeftNotification($group_id, $member_id);

        $myArr['msg'] = "Left";
        $myArr['result'] = $result;


        wp_send_json_success($myArr);

    }
}