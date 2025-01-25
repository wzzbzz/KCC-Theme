<?php

namespace KCC\Notifications;

use KCC\Group;
use KCC\User;

class GroupJoinRequestAcceptedNotification extends Notification
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
        $user = new User($this->user_id);
        
        $this->recipients['to'] = [$user];

        // set the subject here for now
        $this->subject = "Request Approved";
    }

    public function send()
    {
        if (empty($this->group_id)) {
            return;
        }

        $this->send_emails();
    }

    public function send_emails()
    {


        $this->headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";
        $this->headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";

        foreach ($this->recipients['to'] as $admin) {
            $this->send_email($admin);
        }
    }

    public function send_email($recipient)
    {
        // for logging
        global $wpdb;

        foreach ($this->recipients['to'] as $recipient) {
            $this->body = sprintf("Hi %s,\n" .
                "Your request to join  %s has been approved.\n", $recipient->name(), $this->group->name());
            $result = wp_mail($recipient->email(), $this->subject, $this->body, $this->headers);


            $this->to = $recipient->email();

            $result = $wpdb->insert(
                'emailLog',
                array(
                    'dateCreated' => current_time('mysql'),
                    'subject' => $this->subject,
                    'body' => $this->body,
                    'to_email' => $this->to,
                    'actionLink' => $this->actionlink,
                ),
                array('%s', '%s', '%s', '%s', '%s')
            );
            $this->emailLogId = $wpdb->insert_id;
            $this->send_notification($recipient);
        }
    }

    
    public function send_notification( $recipient )
    {

        $this->body = sprintf("You are now a member of %s.", $this->group->name());
        $this->actionlink = esc_url(site_url('tab-my-groups'));

        parent::send_notification($recipient);

    }
}
