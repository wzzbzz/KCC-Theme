<?php

namespace KCC\Notifications;

class ReportNotification extends Notification{
    
    protected $group_id;
    protected $group;
    protected $user;
    protected $report_post_id;
    protected $report;

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

        if(!empty($args['group_id'])){
            $this->group_id = $args['group_id'];
            $this->group = new \KCC\Group($this->group_id);
            $this->recipients['to'] = $this->group->everyone($user_id);
        }
        
        $this->report = new \KCC\Reports\DisasterSituationalReport($this->report_post_id);

    }

    public function send_email($recipient)
    {
        
        $this->subject = "Disaster Situational Report Posted";
        // for logging
        $this->body = sprintf("Hi %s,<br>
                        %s has posted an report in the group %s. <br>
                        Report: %s <br>
                        View report: <a href='%s'>%s</a><br>
                        Thank You,<br>
                        The KCC Notifications Droid", $recipient->name(), $this->report->author()->name(), $this->group->name(), $this->report->title(), $this->report->permalink(), $this->report->permalink());

        parent::send_email($recipient);
    }

    public function send_notification($recipient)
    {
        $this->subject = "New Disaster Situational Report";
        $this->actionlink = $this->report->permalink();
        $this->body = sprintf("%s has posted an report in the group %s. <br>
                        Announcement: %s <br>", $this->report->author()->name(), $this->group->name(), $this->report->title());
        parent::send_notification($recipient);
    }


}