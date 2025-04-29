<?php

namespace KCC\Notifications;

class PublicAnnouncementNotification extends Notification{
    

    protected $user;
    protected $post_id;
    protected $announcement;

    protected $emailLogId;

    public function __construct($args)
    {
        parent::__construct($args);

        $user_id = get_current_user_id();
        $this->user = new \KCC\User($user_id);

        $this->post_id = $args['post_id'] ?? '';

        if (empty($this->post_id)) {
            
            pre(debug_backtrace());
            die("no post_id");
            return;
        }

        $this->announcement = new \KCC\Communications\Announcement($this->post_id);
        $this->recipients['to'] = \KCC\Users::allKCCUsers();

    }

    public function send_email($recipient)
    {

        // skip the email - too much spam
        $this->send_notification($recipient);
        return;
        $this->subject = "[KCC] New Announcement For All Users";
        // for logging
        $this->body = sprintf("Hi %s,<br>
                        There's a new post for all users<br>
                        Check it out here: <a href='" . $this->announcement->permalink() . "'>". $this->announcement->title()."</a><br>
                        Thank You,<br>
                        Tech Support at World Cares Center", $recipient->name(),  $this->announcement->title());

        parent::send_email($recipient);
    }

    public function send_notification($recipient)
    {
        $this->subject = "New Announcement Notification";
        $this->actionlink = $this->announcement->permalink();
        $this->body = "There is a new post in the World Cares Center. Check it out";
        parent::send_notification($recipient);
    }


}