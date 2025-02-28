<?php

namespace KCC\Notifications;

use KCC\Group;
use KCC\User;

class GroupMemberLeftNotification extends Notification
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
            pre($args);
            die("1. no");
            return;
        }

        $this->user_id = $args['user_id'] ?? '';

        if (empty($this->user_id)) {
            pre($args);
            die("2. no");
            return;
        }

        $this->user = new User($this->user_id);

        // the recipient will be the groupLeader
        $this->group = new Group($this->group_id);
        $this->recipients['to'] = [$this->group->getLeader()];
    }

    public function send_email($recipient)
    {

        // set the subject here for now
        $this->subject = "User Left Notification";

        // set body
        $this->body = sprintf("Hi %s,<br>
                        %s has left group <strong>%s</strong>. There is nothing for you to do at this time.<br>
                        Thank You,<br>
                        The KCC Notifications Droid", $recipient->name(), $this->user->name(), $this->group->name());
                        
        $this->actionlink = "";
        // send email;  parent will send notification afterwards.

        parent::send_email($recipient);
    }


    public function send_notification($recipient)
    {
        $this->body = sprintf("%s has left join your group <strong>%s</strong>.", $this->user->name(), $this->group->name());
        $this->actionlink = "";

        parent::send_notification($recipient);
    }
}
