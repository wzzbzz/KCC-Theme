<?php

namespace KCC\Notifications;

use KCC\Group;

class GroupApprovedNotification extends Notification
{

    protected $group_id;
    protected $group;

    private $emailLogId;

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

        // set the subject here for now
        $this->subject = "Your Group Has Been Approved";
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
            $this->body = sprintf("Hi %s,<br>" .
                "Your group <strong>%s</strong> has been approved.
                 <br>Visit it here: <a href=\"%s\" target=\"_blank\">%s</a><br>
                 With Love,<br>
                 The KCC Notifications Droid", $recipient->name(), $this->group->name(), $this->group->permalink(), $this->group->permalink(), $this->group->permalink());
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

        $this->body = sprintf("Your group,  %s, has been approved", $this->group->name());
        $this->actionlink = esc_url(site_url('wp-admin/edit.php?post_type=groups'));

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
