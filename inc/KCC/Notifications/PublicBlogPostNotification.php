<?php

namespace KCC\Notifications;

class PublicBlogPostNotification extends Notification{
    

    protected $user;
    protected $post_id;
    protected $blog_post;

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

        $this->blog_post = new \KCC\Communications\BlogPost($this->post_id);
        $this->recipients['to'] = \KCC\Users::allKCCUsers();

    }

    public function send_email($recipient)
    {

        // skip the email - too much spam
        $this->send_notification($recipient);
        return;
        $this->subject = "[KCC] New Post For All Users";
        // for logging
        $this->body = sprintf("Hi %s,<br>
                        There's a new post for all users<br>
                        Check it out here: <a href='" . $this->blog_post->permalink() . "'>". $this->blog_post->title()."</a><br>
                        Thank You,<br>
                        Tech Support at World Cares Center", $recipient->name(),  $this->blog_post->title());

        parent::send_email($recipient);
    }

    public function send_notification($recipient)
    {
        $this->subject = "New Post Notification";
        $this->actionlink = $this->blog_post->permalink();
        $this->body = "There is a new post in the World Cares Center. Check it out";
        parent::send_notification($recipient);
    }


}