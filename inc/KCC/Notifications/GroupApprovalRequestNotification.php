<?php

namespace KCC\Notifications;

use KCC\Users;
use KCC\Group;
use KCC\Groups;

class GroupApprovalRequestNotification extends Notification
{

    protected $group_id;
    protected $group;

    private $emailLogId;
    private $actionLink;

    public function __construct($args)
    {


        parent::__construct($args);

        $this->actionLink = esc_url(site_url('wp-admin/edit.php?post_type=groups'));

        $this->group_id = $args['group_id'] ?? '';
        $this->group = new Group($this->group_id);

        if (empty($this->group_id)) {
            die("no");
            return;
        }

        // the recipients will be the kcc_admins
        $kcc_admins = Users::get_by_role('kcc_admin');
        $this->recipients['to'] = $kcc_admins;

        // set the subject here for now
        $this->subject = "Group Approval Request Notification";
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
        
        $this->body = sprintf("Hi %s,<br>" .
            "A user has created the group with the title: %s. <br>Please approve it from your admin dashboard.<br>" .
            "<br>You can approve the group directly here: <a href=\"%s\" target=\"_blank\">%s</a><br>" .
            "To approve it, you need to select 'Edit' and from the Edit page, select 'Publish'. A Published group means it was approved.<br>" .
            "Thank you,<br>" .
            "KCC Notifications Droid",
            $recipient->name(),
            $this->group->name(),
            $this->actionLink,
            $this->actionLink
        );  

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

    public function send_notification($recipient)
    {
        global $wpdb;

        $this->subject = "Group Approval Request Notification";
        $this->body = sprintf("A user has created the group with the title: %s. Please approve it from your admin dashboard.", $this->group->name());
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
