<?php

namespace KCC\Notifications;

class GroupAnnouncementNotification extends Notification{
    
    protected $group_id;
    protected $group;
    protected $user;
    protected $announcement_id;
    protected $announcement;

    protected $emailLogId;

    public function __construct($args)
    {
        parent::__construct($args);

        $this->group_id = $args['group_id'] ?? '';

        if (empty($this->group_id)) {
            die("no group_id");
            return;
        }

        $this->group = new \KCC\Group($this->group_id);

        $user_id = get_current_user_id();
        $this->user = new \KCC\User($user_id);

        $this->announcement_id = $args['post_id'] ?? '';

        if (empty($this->announcement_id)) {
            die("no announcement_id");
            return;
        }

        $this->announcement = new \KCC\Communications\Announcement($this->announcement_id);

        $this->recipients['to'] = $this->group->everyoneBut($user_id);

    }

    public function send_email($recipient)
    {
        
        $this->subject = "Group Announcement";
        // for logging
        $this->body = sprintf("Hi %s,<br>
                        %s has posted an announcement in the group %s. <br>
                        Announcement: %s <br>
                        View Announcement: <a href='" . $this->announcement->permalink() . "'>". $this->announcement->permalink()."</a><br>
                        Thank you,<br>
                        Tech Support at World Cares Center",
                        $recipient->name(), $this->announcement->author()->name(), $this->group->name(), $this->announcement->title());

        parent::send_email($recipient);
    }

    public function send_notification($recipient)
    {
        $this->subject = "Group Announcement";
        $this->actionlink = $this->announcement->permalink();
        $this->body = sprintf("%s has posted an announcement in the group %s. <br>
                        Announcement: %s <br>", $this->announcement->author()->name(), $this->group->name(), $this->announcement->title());
        parent::send_notification($recipient);
    }


}