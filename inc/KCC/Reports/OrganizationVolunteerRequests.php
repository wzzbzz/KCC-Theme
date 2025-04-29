<?php

namespace KCC\Reports;

use KCC\FlashMessages\FlashMessages;

class OrganizationVolunteerRequests extends Reports{

    public function init(){
        parent::init();

        $this->check_application();
    }

    public function check_application(){
        if(isset($_POST['action'])){

            switch($_POST['action']){
                case 'ovr_apply':
                    $this->submit_application();
                    break;
                case 'accept_application':
                    $this->accept_application();
                    break;
                case 'decline_application':
                    $this->decline_application();
                    break;
                default:
                    break;  
            }

        }
    }

    public function submit_application(){
        // get user_id and report_id from $_POST;  if they are not present, and are not valid users or reports, set a flash message saying something is wrong, and redirect to the refeerer, and exit
        $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : false;
        $report_id = isset($_POST['report_id']) ? $_POST['report_id'] : false;

        $report_type = ReportType::fromSlug('organization-volunteer-request');


        if(!$user_id || !$report_id){
            FlashMessages::add('There was an error with your application.  Please try again.', 'error');
            header('Location: ' . $report_type->reports_link());
        
            exit;
        }

        $report = new OrganizationVolunteerRequest($report_id);

        if($report->user_has_applied($user_id)){
            FlashMessages::add('You have already applied to this request.', 'error');
            header('Location: ' . $report_type->reports_link());
        
            exit;
        }

        if($report->user_has_been_approved($user_id)){
            FlashMessages::add('You have already been approved for this request.', 'error');
            header('Location: ' . $report_type->reports_link());
        
            exit;
        }

        if($report->user_has_been_declined($user_id)){
            FlashMessages::add('You have already been declined for this request.', 'error');
            header('Location: ' . $report_type->reports_link());
        
            exit;
        }
        
        $result = $report->add_user_application($user_id);

        if($result){

            $args = [
                'user_id' => $user_id,
                'report_id' => $report_id
            ];

            $notification = new \KCC\Notifications\OrganizationVolunteerRequestApplicationRecievedNotification($args);
            $notification->send();
            FlashMessages::add( 'Your application has been submitted.', 'success' );

        }else{
            FlashMessages::add( 'There was an error with your application.  Please try again.', 'error');
        }

        header('Location: ' . $report_type->reports_link());
        
        exit;
    }

    public function accept_application(){
        $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : false;
        $report_id = isset($_POST['report_id']) ? $_POST['report_id'] : false;

        $report = new OrganizationVolunteerRequest($report_id);
        $result = $report->approve_user_application($user_id);

        if($result){

            $args = [
                'user_id' => $user_id,
                'report_id' => $report_id
            ];

            $notification = new \KCC\Notifications\OrganizationVolunteerRequestApplicationAcceptedNotification($args);
            $notification->send();
            FlashMessages::add( 'The application has been approved.', 'success' );
        }else{
            FlashMessages::add('error', 'There was an error with your application.  Please try again.');
        }


    }

    public function decline_application(){

        $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : false;
        $report_id = isset($_POST['report_id']) ? $_POST['report_id'] : false;

        $report = new OrganizationVolunteerRequest($report_id);
        $result = $report->decline_user_application($user_id);

        if($result){
            $args = [
                'user_id' => $user_id,
                'report_id' => $report_id
            ];
            $notification = new \KCC\Notifications\OrganizationVolunteerRequestApplicationDeclinedNotification($args);
            $notification->send();
            FlashMessages::add( 'The application has been rejected.', 'success' );
        }else{
            FlashMessages::add('error', 'There was an error with your action.  Please try again.');
        }
        

    }


   
    
}