<?php

namespace KCC;

class Groups extends \jwc\Wordpress\WPCollection
{

    public function __construct()
    {
        parent::__construct('groups');
    }
    public function init()
    {

        # approve and decline
        add_action('publish_groups', array($this, 'approve'));
        add_action('trash_groups', array($this, 'decline'));

        # join open group
        add_action('wp_ajax_join_open_group', array($this, 'ajaxUserJoinOpenGroup'));
        add_action('wp_ajax_nopriv_join_open_group', array($this, 'ajaxUserJoinOpenGroup'));

        #Request To Join Close Group
        add_action('wp_ajax_send_group_request', array($this, 'ajaxJoinClosedGroupRequest'));    // If called from admin panel
        add_action('wp_ajax_nopriv_send_group_request', array($this, 'ajaxJoinClosedGroupRequest'));    // If called from front end

        #accept Group application
        add_action('wp_ajax_accept_group_request', array($this, 'ajaxAcceptGroupJoinRequest'));
        add_action('wp_ajax_nopriv_accept_group_request', array($this, 'ajaxAcceptGroupJoinRequest'));

        # Send Invitation To Join closed group
        add_action('wp_ajax_invite_group_request', array($this, 'ajaxSendInvitation'));    // If called from admin panel
        add_action('wp_ajax_nopriv_invite_group_request', 'ajaxSendInvitation');    // If called from front end

        #accept Group invitation
        add_action('wp_ajax_accept_group_invite', array($this, 'ajaxAcceptGroupInvite'));
        add_action('wp_ajax_nopriv_accept_group_invite', array($this, 'ajaxAcceptGroupInvite'));



        $this->possiblyCreateGroup();
    }

    public function approve($group_id)
    {

        $args = ['group_id' => $group_id];
        $notification = new \KCC\Notifications\GroupApprovalNotification($args);
        $notification->send();
    }

    public function decline($id)
    {
        // do something when a group is deleted
        $args = ['group_id' => $id];
        $notification = new \KCC\Notifications\GroupDeclinedNotification($args);
        $notification->send();
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
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // create a post with type 'groups' and title $post_title
        $post_id = wp_insert_post(
            array(
                'post_title' => $post_title,
                'post_content' => $post_content,
                'post_status' => 'pending',
                'post_type' => 'groups'
            )
        );

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
        $notification = new \KCC\Notifications\GroupApprovalRequestSubmissionNotification($args);
        $notification->send();
    }

    public function possiblyCreateGroup()
    {

        if (!empty($_POST['ums_create_group'])) {

            $groups = new \KCC\Groups();
            $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

            if ($groups->groupExists($post_title)) {
                echo "<script>
    
                alert('This group name has been already taken. Please try with other name. ');
    
                window.location.href='" . site_url() . "/wccgroups';
    
                </script>";
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
                    echo "<script>

                    alert('Group creation failed, Please try again. ');

                    window.location.href='" . site_url() . "/wccgroups';

                    </script>";
                } else {
                    echo "<script>

                    alert('Group created successfully !');

                    window.location.href='" . site_url() . "/wccgroups';

                    </script>";
                }
            }
        }
    }

    public function ajaxUserJoinOpenGroup()
    {
        $current_date = date('Y-m-d');
        $group_id = $_POST['group_id'];
        $current_user_id = get_current_user_id();
        $responseData = array();
        $responseData['joinedStatus'] = ld_update_group_access($current_user_id, $group_id);

        /*$data = array(

              'group_id' => $group_id,

              'joined_open_user' => $current_user_id,

              'status'  => 'joined',

              'created_at'  => $current_date

            );

          $wpdb->insert( $tablename, $data);*/
        update_user_meta($current_user_id, 'joining_date', $current_date);
        $responseData['msg'] = "joined";
        $responseData['group_url'] =  get_permalink($group_id);
        $response = json_encode($responseData);

        // send notifications
        $args = ['group_id' => $group_id, 'user_id' => $user_id];
        $notification = new \KCC\Notifications\GroupJoinNotification($args);
        $notification->send();

        echo $response;
        die();
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


        $myArr = array();

        $sql = "SELECT * FROM group_invite WHERE group_id = '" . $group_id . "' AND invited_to = '" . $group->getLeader()->id() . "' AND invited_from ='" . $current_user_id . "' ";

        $check = $wpdb->get_results($sql, ARRAY_A);
        $myArr['sql'] = $sql;
        $myArr['ums'] = $check;

        if (count($check) > 0) {
            $myArr['msg'] = "Already Requested";
            $myJSON = json_encode($myArr);
            echo $myJSON;
            die();
        }

        $tablename =  'group_invite';
        $current_user_id = get_current_user_id();
        $group_id = ($_POST['group_id']) ? $group_id : "";

        $insertData = array(
            'invited_to' => $group->getLeader()->id(),
            'invited_from' => $current_user_id,
            'status' => 'pending',
            'request_type' => 'join_request',
            'group_id' => $group_id
        );

        $dd = $wpdb->insert('group_invite', $insertData);

        //CLEANUP POINT B

        /* M001: User Join Notification to Group Owner */

        $args = ['group_id' => $group_id, 'user_id' => $current_user_id];
        $notification = new \KCC\Notifications\ClosedGroupJoinRequestNotification($args);
        $notification->send();

        $myArr['sql'] = $dd;
        $myArr['msg'] = "Request sent successfully";
        $myJSON = json_encode($myArr);
        echo $myJSON;

        die();
    }

    public function ajaxAcceptGroupJoinRequest()
    {

        global $wpdb;

        $group_id = $_POST['group_id'];
        $member_id = $_POST['uid'];
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

    public function ajaxSendInvitation()
    {
        global $wpdb;

        $responseData = array();

        $group_id = sanitize_text_field($_POST['group_id']);

        $group = new Group($group_id);


        $member_id = sanitize_text_field($_POST['mid']);
        $invitee = new User($member_id);
        $inviter = $group->getLeader();


        if($this->inviteHasBeenSent($group_id, $member_id, $inviter->id())){
            $responseData['msg'] = "Already Requested";
            $responseJson = json_encode($responseData);
            echo $responseJson;
            die();
        }

        $args = array(
            'invited_to' => $member_id,
            'invited_from' => $inviter->id(),
            'status' => 'pending',
            'group_id' => $group_id,
        );

        $wpdb->insert('group_invite', $args);

        $responseData['responseData'] = $responseData;
        $responseData['msg'] = "Invited";
        $responseData['success'] = "User Invited Successfully.";
        $responseJson = json_encode($responseData);

        /* M002: Group Member Invitation Notification to Invited User */
        $notification = new \KCC\Notifications\GroupInvitationNotification(['group_id' => $group_id, 'user_id' => $member_id]);

        $notification->send();

        $user = get_user_by('id', $member_id);
        $userEmail = $user->user_email;
        $subject = "Group Member Invitation  Notification";
        $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";
        $message = "
                Hi " . $user->display_name . ",\n
                You are invited in the group $group_title. Please accept/reject invitation from My Contacts in My Dashboard section. \n
                View Invitation: " . site_url('my-dashboard') . "\n
                Thank You, Admin";
        $params = array(
            'subject' => $subject,
            'body' => $message,
            'to' => $userEmail,
            'action_link' => site_url('my-dashboard'),
            'user_id' => $user->ID
        );
        // Call the emailHandler function to send email notifications
        emailHandler($params);
        // wp_mail($userEmail, $subject, $message, $headers);
        /*send email too invited user*/
        echo $responseJson;
        die();
    }

    private function inviteHasBeenSent($group_id, $member_id, $inviter_id)
    {
        global $wpdb;

        $sql = "SELECT * FROM group_invite WHERE group_id = '" . $group_id . "' AND invited_to = '" . $member_id . "' AND invited_from ='" . $inviter_id . "' ";

        $check = $wpdb->get_results($sql, ARRAY_A);

        return count($check) > 0;
    }
}
