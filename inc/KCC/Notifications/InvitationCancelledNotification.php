<?php

/* sends a notification to a user when they are invited to join a group */


namespace KCC\Notifications;

use KCC\Group;
use KCC\User;

class InvitationCancelledNotification extends Notification
{

    protected $group_id;
    protected $group;
    protected $user_id;
    protected $user;

    protected $emailLogId;

    public function __construct($args)
    {
        parent::__construct($args);


        $this->group_id = $args['group_id'] ?? '';

        if (empty($this->group_id)) {
            die("no group_id");
            return;
        }

        $this->group = new Group($this->group_id);

        $this->user_id = $args['user_id'] ?? '';

        if (empty($this->user_id)) {
            die("no user_id");
            return;
        }


        // set recipient 
        $this->user = new User($this->user_id);



        $this->recipients['to'] = [$this->user];


    }

    public function send_email($recipient)
    {
        // for logging

        $this->subject = "Invitation Cancelled";
        $this->body = sprintf("Hi %s,<br>
                        The invitation to join <strong>%s</strong> has been cancelled. <br>
                        with heartfelt apologies<br>
                        The KCC Notifications Droid", $recipient->name(), $this->group->name());

        parent::send_email($recipient);
    }


    public function send_notification($recipient)
    {
        global $wpdb;

        $this->body = sprintf("Your invitation to join <strong>%s</strong> has been cancelled.", $this->group->name());
        $this->actionlink = "";

        parent::send_notification($recipient);
    }
}
