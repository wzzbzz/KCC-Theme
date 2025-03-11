<?php

namespace KCC\Notifications;

use KCC\Group;

class GroupApprovalRequestSubmittedNotification extends Notification
{

    protected $group_id;
    protected $group;

    protected $emailLogId;

    public function __construct($args)
    {

        parent::__construct($args);


        $this->group_id = $args['group_id'] ?? '';

        if (empty($this->group_id)) {
            die("no");
            return;
        }

        // the recipient will be the groupLeader
        $this->group = new Group($this->group_id);
        $groupLeader = $this->group->getLeader();


        $this->recipients['to'] = [$groupLeader];
    }



    public function send_email($recipient)
    {
        // set the subject here for now
        $this->subject = "Group Approval Request Submitted";

        foreach ($this->recipients['to'] as $recipient) {
            $this->body = sprintf("Hi %s,<br>" .
                "Your group <strong>%s</strong> has been submitted for approval.  You will be notified when the admin takes action.<br>
                No action is required at this time.<br>
                With love,<br>
                Tech Support at World Cares Center", $recipient->name(), $this->group->name());

            parent::send_email($recipient);
        }
    }


    public function send_notification($recipient)
    {
        $this->subject = "Group Submitted for Approval";
        $this->body = sprintf("Your group,  %s, has been submitted for approval.", $this->group->name());
        $this->actionlink = esc_url(site_url('wp-admin/edit.php?post_type=groups'));

        parent::send_notification($recipient);
    }
}
