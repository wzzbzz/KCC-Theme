<?php

namespace KCC\Notifications;

use KCC\Group;
use KCC\User;

class OpenGroupJoinNotification extends Notification
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

        // the recipient will be the groupLeader
        $this->group = new Group($this->group_id);
        $groupLeader = $this->group->getLeader();

        
        $this->recipients['to'] = [$groupLeader];


        // set the subject here for now
        $this->subject = "User Join Notification";
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
    
            $this->body = sprintf(" Hi %s,<br>
                        %s has joined your open group <strong>%s</strong>. <br>
                        Say hello here: <a href=\"%s\">%s</a> <br>
                        Lead them well, <br>The KCC Notifications Droid", $recipient->name(), $this->user->name(), $this->group->name(), $this->group->permalink(), $this->group->permalink());


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

        $this->body = sprintf("%s has joined  your group <strong>%s</strong>.",$this->user->name(), $this->group->name());
        $this->actionlink = $this->group->permalink();

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
