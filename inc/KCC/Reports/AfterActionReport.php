<?php

namespace KCC\Reports;


class AfterActionReport extends Report{

    
    private $form_data = "{
        'sections': [
            id: 'disaster_details',
            name: 'Disaster Details',
            gr
        ]
    }";
    
    
    public function disaster_name(){
        return $this->meta('disaster_name');
    }

    public function date_submitted($fmt='Y-m-d'){
        $date = $this->meta('date_submitted');
        if($date){
            return date($fmt, strtotime($date));
        }
        return false;
    }

    public function time_submitted($fmt = 'H:i:s'){
        $time = $this->meta('time_submitted');
        if($time){
            return date($fmt, strtotime($time));
        }
        return false;
    }

    public function organization_name(){
        return $this->meta('organization_name');
    }

    public function submitter_name(){
        return $this->meta('submitter_name');
    }

    public function contact_phone(){
        return $this->meta('contact_phone');
    }

    public function contact_email(){
        return $this->meta('contact_email');
    }

    public function supervisor_name(){
        return $this->meta('supervisor_name');
    }

    public function shift_reported_covers(){
        return $this->meta('shift_reported_covers');
    }

    public function shift_start_date($fmt='Y-m-d'){
        $date = $this->meta('shift_start_date');
        if($date){
            return date($fmt, strtotime($date));
        }
        return false;
    }

    public function shift_end_date($fmt='Y-m-d'){
        $date = $this->meta('shift_end_date');
        if($date){
            return date($fmt, strtotime($date));
        }
        return false;
    }

    public function assignment_title(){
        return $this->meta('assignment_title');
    }

    public function print_assignment_address(){
        $output = $this->meta('action_address')."<br>";
        $output .= $this->meta('city').", ";
        $output .= $this->meta('state').", ";
        
        $output .= $this->meta('country')."<br>";
        $output .= $this->meta('action_zipcode');
        return $output;

    }

    public function action_address(){
        return $this->meta('action_address');
    }

    public function action_zipcode(){
        return $this->meta('action_zipcode');
    }

    public function team_members(){
        return $this->meta('team_members');
    }

    public function tasks(){
        return $this->meta('tasks');
    }

    public function what_worked(){
        return $this->meta('what_worked');
    }

    public function what_needs_improvement(){
        return $this->meta('what_needs_improvement');
    }

    public function follow_up_actions(){
        return $this->meta('follow_up_actions');
    }

    public function supplies_needed(){
        return $this->meta('supplies_needed');
    }

    public function add_info(){
        return $this->meta('add_info');
    }




}