<?php

namespace KCC\Notifications;

use KCC\Users;
use KCC\User;
use KCC\Reports\Reports;


class OrganizationVolunteerRequestApplicationAcceptedNotification extends Notification
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
        $user = new User($this->user_id);


        $this->recipients['to'] = [$user];

        $this->actionlink = $this->report->permalink();

        // set the subject here for now
        $this->subject = "Organization Volunteer Request Application Approved";
    }


    public function send_email($recipient)
    {
       
        
        $this->body = sprintf("Hi %s,<br>" .
            "You have been approved for the Organization Voluteer Request.  <br>" .
            "<br>See it here: <a href=\"%s\" target=\"_blank\">%s</a><br>" .
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
        $this->subject = "Organization Volunteer Request Approved";
        $this->body = sprintf("See it here");
        parent::send_notification($recipient);
    }
}
