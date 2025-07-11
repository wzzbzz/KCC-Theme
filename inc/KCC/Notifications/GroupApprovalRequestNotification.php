<?php

namespace KCC\Notifications;

use KCC\Users;
use KCC\Group;
use KCC\Groups;

class GroupApprovalRequestNotification extends Notification
{

    protected $group_id;
    protected $group;

    protected $emailLogId;
    private $actionLink;

    public function __construct($args)
    {


        parent::__construct($args);

        $this->actionLink = esc_url(site_url('wp-admin/edit.php?post_type=groups'));

        $this->group_id = $args['group_id'] ?? '';
        $this->group = new Group($this->group_id);

        if (empty($this->group_id)) {
            die("no");
            return;
        }

        // the recipients will be the kcc_admins
        $kcc_admins = Users::get_by_role('kcc_admin');
        $this->recipients['to'] = $kcc_admins;

        // set the subject here for now
        $this->subject = "Group Approval Request Notification";
    }


    public function send_email($recipient)
    {
       // for logging
        global $wpdb;
        
        $this->body = sprintf("Hi %s,<br>" .
            "A user has created the group with the title: %s. <br>Please approve it from your admin dashboard.<br>" .
            "<br>You can approve the group directly here: <a href=\"%s\" target=\"_blank\">%s</a><br>" .
            "To approve it, you need to select 'Edit' and from the Edit page, select 'Publish'. A Published group means it was approved.<br>" .
            "Thank you,<br>" .
            "Tech Support at World Cares Center",
            $recipient->name(),
            $this->group->name(),
            $this->actionLink,
            $this->actionLink
        );  

        parent::send_email($recipient);
    }

    public function send_notification($recipient)
    {
        global $wpdb;

        $this->subject = "Group Approval Request Notification";
        $this->body = sprintf("A user has created the group with the title: %s. Please approve it from your admin dashboard.", $this->group->name());
        $this->actionlink = esc_url(site_url('wp-admin/edit.php?post_type=groups'));

        parent::send_notification($recipient);
    }
}
