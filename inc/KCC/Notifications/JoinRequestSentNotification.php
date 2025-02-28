<?php

/*
    * Notifies a user when they have sent a request to join a group
    */

namespace KCC\Notifications;

use KCC\Group;
use KCC\User;

class JoinRequestSentNotification extends Notification
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
            die("no");
            return;
        }

        $this->user_id = $args['user_id'] ?? '';

        if (empty($this->user_id)) {
            die("no");
            return;
        }

        $group = new Group($this->group_id);
        $this->group = $group;

        $this->user = new User($this->user_id);
        $this->recipients['to'] = [$this->user];
    }



    public function send_email($recipient)
    {
        // set the subject here for now
        $this->subject = "Your Request has been sent";

        $this->body = sprintf("Hi %s,<br>
                        Your request to join  <strong>%s</strong> has been sent. <br>
                        There is nothing more you need to do at this time. <br>
                        Thank You,<br>
                        The KCC Notifications Droid", $recipient->name(), $this->group->name());

        parent::send_email($recipient);
    }


    public function send_notification($recipient)
    {
        global $wpdb;

        $this->body = sprintf("Your request has been sent to <strong>%s</strong>.", $this->group->name());
        $this->actionlink = "";

        parent::send_notification($recipient);
    }
}
