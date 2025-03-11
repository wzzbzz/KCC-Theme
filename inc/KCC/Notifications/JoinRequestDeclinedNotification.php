<?php

/*
    * This is the notification that is sent to a user when their request to join a group is accepted
    */
    
namespace KCC\Notifications;

use KCC\Group;
use KCC\User;

class JoinRequestDeclinedNotification extends Notification
{

    protected $group_id;
    protected $group;
    protected $user_id;
    
    public function __construct($args)
    {

        parent::__construct($args);


        $this->group_id = $args['group_id'] ?? '';

        if (empty($this->group_id)) {
            die("no");
            return;
        }

        // the recipient will be the user
        $this->group = new Group($this->group_id);
        

        $this->user_id = $args['user_id'] ?? '';
        if(empty($this->user_id)){
            pre("no");
            die;
            return;
        }
        $user = new User($this->user_id);
        
        $this->recipients['to'] = [$user];

        
    }

    public function send_email($recipient)
    {
        $this->subject = "Request Declined";
            $this->body = sprintf("Hi %s,<br>" .
                "Your request to join  <a href=\"%s\">%s</a> has been declined.<br>
                Thank you,<br>
                Tech Support at World Cares Center
", 
            $recipient->name(), $this->group->permalink(), $this->group->name());
        parent::send_email($recipient);
        
    }

    
    public function send_notification( $recipient )
    {
        global $wpdb;
    
        $this->body = sprintf("Your request to join <strong>%s<strong> has been declined.", $this->group->name());
        $this->actionlink = $this->group->permalink();
        parent::send_notification($recipient);
    }
}
