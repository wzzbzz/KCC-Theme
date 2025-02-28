<?php

/*
    * This is the notification that is sent to a user when their request to join a group is accepted
    */
    
namespace KCC\Notifications;

use KCC\Group;
use KCC\User;

class InvitationAcceptedNotification extends Notification
{

    protected $group_id;
    protected $group;
    protected $user_id;
    protected $user;
    
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
        

        $this->user_id = $args['user_id'] ?? '';
        if(empty($this->user_id)){
            pre("no");
            die;
            return;
        }
        $this->user = new User($this->user_id);
        $this->recipients['to'] = [$this->group->getLeader()];

        // set the subject here for now
        $this->subject = "Invitation Accepted";
    }

    public function send_email($recipient)
    {


        $this->subject = "Invitation Accepted";
            $this->body = sprintf("Hi %s,<br>" .
                "Your invitation to %s to join your group <a href=\"%s\">%s</a> has been accepted.<br>
                Click the link to go there now.<b>
                The KCC Notifications Droid", 
            $recipient->name(), $this->user->name(), $this->group->permalink(), $this->group->name());

        parent::send_email($recipient);
        
    }

    
    public function send_notification( $recipient )
    {
    
        $this->body = sprintf("%s has joined your group %s.", $recipient->name(), $this->group->name());
        $this->actionlink = $this->group->permalink();
        parent::send_notification($recipient);
    }
}
