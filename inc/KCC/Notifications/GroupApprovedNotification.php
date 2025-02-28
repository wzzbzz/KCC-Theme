<?php

namespace KCC\Notifications;

use KCC\Group;

class GroupApprovedNotification extends Notification
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
        $this->subject = "Your Group Has Been Approved";
        $this->body = sprintf("Hi %s,<br>" .
            "Your group <strong>%s</strong> has been approved.
                 <br>Visit it here: <a href=\"%s\" target=\"_blank\">%s</a><br>
                 With Love,<br>
                 The KCC Notifications Droid", $recipient->name(), $this->group->name(), $this->group->permalink(), $this->group->permalink(), $this->group->permalink());
        parent::send_email($recipient);
    }


    public function send_notification($recipient)
    {
        global $wpdb;

        $this->body = sprintf("Your group,  %s, has been approved", $this->group->name());
        $this->actionlink = esc_url(site_url('wp-admin/edit.php?post_type=groups'));

        parent::send_notification($recipient);
    }
}
