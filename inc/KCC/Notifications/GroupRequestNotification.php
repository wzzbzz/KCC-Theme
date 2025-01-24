<?php

namespace KCC\Notifications;

class GroupRequestNotification extends Notification{

    public function __construct($args){
        parent::__construct($args);
    }

    public function send(){
        // send a notification to the group's leader that a user has requested to join the group.
        $group = new \KCC\Group($this->post_id);
        
        $args = [];
        $args['subject'] = 'Group Request';
        $args['body'] = 'A user has requested to join your group ' . $group->name() . '.';
        $args['post_id'] = $this->post_id;
        $args['action_link'] = get_permalink($this->post_id);

        $leader = $group->getLeader();

        $leader->send_notification($args);
    }
}