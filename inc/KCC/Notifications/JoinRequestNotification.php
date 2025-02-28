<?php

namespace KCC\Notifications;

use KCC\Group;
use KCC\User;

class JoinRequestNotification extends Notification
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


        // set recipient 
        $this->user = new User($this->user_id);

        // the recipient will be the groupLeader
        $this->group = new Group($this->group_id);
        $groupLeader = $this->group->getLeader();


        $this->recipients['to'] = [$groupLeader];


    }

    public function send_email($recipient)
    {
        $this->subject = "Join Request Notification";
        $this->actionlink = $this->group->permalink() . "/manage-requests";
        
        $this->body = sprintf("Hi %s,<br>
                        %s has requested to join your group %s. Please accept/reject user invitation from your My Dashboard section.<br>
                        View Invitation: <a href='%s'>Click Here</a><br>
                        Thank You,<br>
                        The KCC Notifications Droid", $recipient->name(), $this->user->name(), $this->group->name(), $this->actionlink);

        parent::send_email($recipient);
    }


    public function send_notification($recipient)
    {
        $this->body = sprintf("%s has requested to join your group %s.", $this->user->name(), $this->group->name());

        parent::send_notification($recipient);
    }
}
