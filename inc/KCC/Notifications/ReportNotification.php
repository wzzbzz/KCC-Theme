<?php

namespace KCC\Notifications;

class ReportNotification extends Notification{
    
    protected $group_id;
    protected $group;
    protected $user;
    protected $report_post_id;
    protected $report;
    protected $audience = 'all-rrn-users';

    protected $emailLogId;

    public function __construct($args)
    {
        parent::__construct($args);

        $user_id = get_current_user_id();
        $this->user = new \KCC\User($user_id);

        $this->report_post_id = $args['report_post_id'] ?? '';

        if (empty($this->report_post_id)) {
            die("no report_post_id");
            return;
        }

        if(!empty($args['audience'])){
            $this->audience = $args['audience'];
        }
        else{
            \KCC\FlashMessages\FlashMessages::add('error', 'No audience specified in the notification');
            return;
        }

        if($this->audience == 'all-rrn-users'){
            $this->recipients['to'] = \KCC\Users::allKCCUsers();
        }
        else{
            // make sure group id is present
            if(empty($args['group_id'])){
                \KCC\FlashMessages\FlashMessages::add('error', 'No group specified in the group notification');
                return;
            }
            $this->group_id = $args['group_id'];
            $this->group = new \KCC\Group($this->group_id);
            $this->recipients['to'] = $this->group->everyone($user_id);
        }
        
        
        
        $this->report = new \KCC\Reports\Report($this->report_post_id);



    }

    public function send_email($recipient)
    {
        
        $this->subject = "New ". $this->report->report_type();
        // for logging

        switch($this->audience){
            case "all-rrn-users":
                $this->body = sprintf("Hi %s,<br>
                        %s has posted an %s <br>
                        Report: %s <br>
                        View report: <a href='%s'>%s</a><br>
                        Thank You,<br>
                        Tech Support at World Cares Center", $recipient->name(), $this->report->author()->name(), $this->report->report_type(), $this->report->title(), $this->report->permalink(), $this->report->permalink());
                break;

            case "group":
                $this->body = sprintf("Hi %s,<br>
                        %s has posted an %s in the group %s. <br>
                        Report: %s <br>
                        View report: <a href='%s'>%s</a><br>
                        Thank You,<br>
                        Tech Support at World Cares Center", $recipient->name(), $this->report->author()->name(), $this->report->report_type(), $this->group->name(), $this->report->title(), $this->report->permalink(), $this->report->permalink());
                break;
        }
        
        

        parent::send_email($recipient);
    }

    public function send_notification($recipient)
    {
        $this->subject = "New Disaster Situational Report";
        $this->actionlink = $this->report->permalink();

        switch($this->audience){
            case "all-rrn-users":
                $this->body = sprintf("%s has posted an report. <br>
                        Announcement: %s <br>", $this->report->author()->name(), $this->report->title());
                break;

            case "group":
                $this->body = sprintf("%s has posted an report in the group %s. <br>
                        Announcement: %s <br>", $this->report->author()->name(), $this->group->name(), $this->report->title());
                break;
        }

        parent::send_notification($recipient);
    }


}