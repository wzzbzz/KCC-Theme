<?php

/*
    * This is the notification that is sent to a user when their request to join a group is accepted
    */
    
namespace KCC\Notifications;

use KCC\Group;
use KCC\User;

class JoinRequestAcceptedNotification extends Notification
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

        // the recipient will be the user who requested the join
        $this->group = new Group($this->group_id);
        

        $this->user_id = $args['user_id'] ?? '';
        if(empty($this->user_id)){
            pre("no");
            die;
            return;
        }
        $user = new User($this->user_id);
        
        $this->recipients['to'] = [$user];

        // set the subject here for now
        $this->subject = "Request Approved";
    }

    public function send_email($recipient)
    {


        $this->subject = "Request Approved";
            $this->body = sprintf("Hi %s,<br>" .
                "Your request to join  <a href=\"%s\">%s</a> has been approved.<br>
                Click the link to go there now.<b>
                The KCC Notifications Droid", 
            $recipient->name(), $this->group->permalink(), $this->group->name());
        parent::send_email($recipient);
        
    }

    
    public function send_notification( $recipient )
    {
        global $wpdb;
    
        $this->body = sprintf("You are now a member of %s.", $this->group->name());
        $this->actionlink = $this->group->permalink();
        parent::send_notification($recipient);
    }
}
