<?php

namespace KCC\Notifications;

use KCC\Users;
use KCC\Reports\Reports;


class OrganizationVolunteerRequestApplicationRecievedNotification extends Notification
{

    
    protected $emailLogId;

    private $report_id;
    protected $user_id;
    private $report;

    public function __construct($args)
    {


        parent::__construct($args);

        
        if (empty($this->user_id)) {
            die("no");
            return;
        }
        
        $this->report_id = $args['report_id'];
        $this->user_id = $args['user_id'];
        
        // the recipients will be the kcc_admins
        $this->report = Reports::factory($this->report_id);

        $this->actionlink = $this->report->permalink(). "applications";
        
        $this->recipients['to'] = [$this->report->author()];

        // set the subject here for now
        $this->subject = "Organization Volunteer Request Application Recieved";
    }


    public function send_email($recipient)
    {
       
        
        $this->body = sprintf("Hi %s,<br>" .
            "A user has responded to your Organization Volunteer Request. Please review the application and take action.<br>" .
            "<br>A: <a href=\"%s\" target=\"_blank\">%s</a><br>" .
            "Thank you,<br>" .
            "Tech Support at World Cares Center",
            $recipient->name(),
            $this->actionlink,
            $this->actionlink
        );  

        parent::send_email($recipient);
    }

    public function send_notification($recipient)
    {
        $this->subject = "Organization Volunteer Request Application Recieved";
        $this->body = sprintf("Manage it here");
        parent::send_notification($recipient);
    }
}
