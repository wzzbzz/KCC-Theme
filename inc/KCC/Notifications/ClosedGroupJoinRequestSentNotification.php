<?php

namespace KCC\Notifications;

use KCC\Group;
use KCC\User;

class ClosedGroupJoinRequestSentNotification extends Notification
{

    protected $group_id;
    protected $group;
    protected $user_id;
    protected $user;

    private $emailLogId;

    public function __construct($args)
    {

        parent::__construct($args);
        
        $this->group_id = $args['group_id'] ?? '';

        if (empty($this->group_id)) {
            die("no");
            return;
        }

        $this->user_id = $args['user_id'] ?? '';

        if(empty($this->user_id)){
            die("no");
            return;
        }

        $this->user = new User($this->user_id);


        
        $this->recipients['to'] = [$this->user];


        // set the subject here for now
        $this->subject = "Your Request has been sent";
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

        foreach ($this->recipients['to'] as $recipient) {
            $this->send_email($recipient);
        }
    }

    public function send_email($recipient)
    {

        // for logging
        global $wpdb;

        foreach ($this->recipients['to'] as $recipient) {
    
            $this->body = sprintf("Hi %s,<br>
                        Your request to join  <strong>%s</strong> has been sent. <br>
                        There is nothing more you need to do at this time. <br>
                        Thank You,<br>
                        The KCC Notifications Droid", $recipient->name(), $this->group->name());

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
        global $wpdb;

        $this->body = sprintf("Your request has been sent to <strong>%s</strong>.", $this->group->name());
        $this->actionlink = "";

        // insert into kcc_notifications
        $insert_result = $wpdb->insert(
            'kcc_notifications',
            array(
                'datecreated' => current_time('mysql'),
                'userId' => $recipient->id(),

                'originSystemPostId' => $this->group_id,
                'icontodisplay' => 'fas fa-calendar-alt',
                'title' => $this->subject,
                'shorttext' => $this->body,
                'linkTo' => $this->actionlink,
                'emailLogId' => $this->emailLogId
            ),
            array('%s', '%s', '%d', '%s', '%s', '%s', '%s', '%d')
        );

    }
}
