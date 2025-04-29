<?php

namespace KCC\Notifications;

class GroupBlogPostNotification extends Notification{
    
    protected $group_id;
    protected $group;
    protected $user;
    protected $post_id;
    protected $blog_post;

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

        $this->post_id = $args['post_id'] ?? '';

        if (empty($this->post_id)) {
            
            pre(debug_backtrace());
            die("no post_id");
            return;
        }

        $this->blog_post = new \KCC\Communications\BlogPost($this->post_id);

        $this->recipients['to'] = $this->group->everyone();

    }

    public function send_email($recipient)
    {
        $this->subject = "[KCC] New Post in " . $this->group->name();
        // for logging
        $this->body = sprintf("Hi %s,<br>
                        There's a new post in your group %s.<br>
                        Check it out here: <a href='" . $this->blog_post->permalink() . "'>". $this->blog_post->title()."</a><br>
                        Thank You,<br>
                        Tech Support at World Cares Center", $recipient->name(),  $this->group->name(), $this->blog_post->title());

        parent::send_email($recipient);
    }

    public function send_notification($recipient)
    {
        $this->subject = "New Post in " . $this->group->name();
        $this->actionlink = $this->blog_post->permalink();
        $this->body = "New post in " . $this->group->name() . ". Check it out";
        parent::send_notification($recipient);
    }


}