<?php

namespace KCC\Notifications;

use KCC\Group;
use KCC\User;

class OpenGroupJoinNotification extends Notification
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

        $this->user = new User($this->user_id);

        // the recipient will be the groupLeader
        $this->group = new Group($this->group_id);
        $groupLeader = $this->group->getLeader();


        $this->recipients['to'] = [$groupLeader];
    }


    public function send_email($recipient)
    {

        $this->subject = "New Member Notification";

        $this->body = sprintf("Hi %s,<br>
                        %s has joined your open group <strong>%s</strong>. <br>
                        Say hello here: <a href=\"%s\">%s</a> <br>
                        Lead them well, <br>The KCC Notifications Droid", $recipient->name(), $this->user->name(), $this->group->name(), $this->group->permalink(), $this->group->permalink());

        parent::send_email($recipient);
    }


    public function send_notification($recipient)
    {
        $this->body = sprintf("%s has joined  your group <strong>%s</strong>.", $this->user->name(), $this->group->name());
        $this->actionlink = $this->group->permalink();
        parent::send_notification($recipient);
    }
}
