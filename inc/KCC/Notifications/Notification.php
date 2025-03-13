<?php

/*
*   This is the Notification class. 
*   There are two aspects to a Notification:
*   1. There is an email sent via wp_mail
*   2. There is a notification stored in the database, and reported in the user's dashboard header
*   
*   Some notifications use both, some only one.
*   This is the base class from which all notifications are derived.
*/

namespace KCC\Notifications;

class Notification{

    protected $headers;
    protected $subject;
    protected $body;
    protected $recipients;
    protected $to; // this is a hack to get the email address of the recipient
    protected $actionlink;
    protected $user_id;
    protected $cc;
    protected $bcc;
    protected $calledFrom;
    protected $post_id;
    protected $group_id;
    protected $emailLogId;


    // this constructor will pull all arguments, whether the notification needs them or not.
    public function __construct($args){

        // text
        $this->subject = $args['subject'] ?? '';
        // text
        $this->body = $args['body'] ?? '';
        // array of user objects
        $this->recipients = $args['recipients'] ?? [
            'to' => [],
            'cc' => [],
            'bcc' => []
        ];
        // text url
        $this->actionlink = $args['action_link'] ?? '';
        $this->calledFrom = $args['calledFrom'] ?? '';
        $this->post_id = $args['post_id'] ?? '';
        $this->group_id = $args['group_id'] ?? '';
        $this->user_id = $args['user_id'] ?? '';

    }

    // this will be implemented in each notification class, whether email, dashboard, or both.
    public function send(){
        // do send;
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

    public function send_email( $recipient ){

        global $wpdb;
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


    public function send_notification( $recipient){
        global $wpdb;
        
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