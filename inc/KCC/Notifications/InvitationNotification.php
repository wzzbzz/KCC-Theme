<?php

/* sends a notification to a user when they are invited to join a group */


namespace KCC\Notifications;

use KCC\Group;
use KCC\User;

class InvitationNotification extends Notification
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
        
        $this->group = new Group($this->group_id);

        $this->user_id = $args['user_id'] ?? '';

        if (empty($this->user_id)) {
            die("no");
            return;
        }

        
        // set recipient 
        $this->user = new User($this->user_id);
        $this->recipients['to'] = [$this->user];


    }

    public function send_email($recipient)
    {
        $this->subject = "Invitation";
        // for logging
        $this->body = sprintf("Hi %s,<br>
                        %s has invited you to join their group %s. Please accept/reject user invitation from your dashboard.<br>
                        View Invitation: " . site_url('groups') . "?tab=requests<br>
                        Thank You,<br>
                        Tech Support at World Cares Center", $recipient->name(), $this->group->getLeader()->name(), $this->group->name());

        parent::send_email($recipient);
    }


    public function send_notification($recipient)
    {
        global $wpdb;

        $this->body = sprintf("%s has invited you to join their group %s.", $this->group->getLeader()->name(), $this->group->name());
        $this->actionlink = "";

        parent::send_notification($recipient);
    }
}
