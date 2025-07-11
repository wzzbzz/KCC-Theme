<?php

namespace KCC\Notifications;

use KCC\Group;

class GroupRemovedNotification extends Notification
{

    protected $group_id;
    protected $group;

    protected $emailLogId;

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
        $groupLeader = $this->group->getLeader();
        $this->recipients['to'] = [$groupLeader];

    }

    public function send_email($recipient)
    {

        $this->subject = "Your Group Has Been Removed";    

            $this->body = sprintf("Hi %s,<br>" .
                "Your group <strong>%s</strong> has been removed by the admin.<br>".
                "Thank you,<br>" .
                "Tech Support at World Cares Center
",
                $recipient->name(), $this->group->name());
        parent::send_email($recipient);
        
    }

    
    public function send_notification( $recipient )
    {
        
        $this->body = sprintf("Your group,  %s, has been removed by the Admin", $this->group->name());
        $this->actionlink = esc_url(site_url('wp-admin/edit.php?post_type=groups'));
        parent::send_notification($recipient);

    }
}
