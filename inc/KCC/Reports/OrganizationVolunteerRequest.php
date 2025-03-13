<?php

namespace KCC\Reports;


class OrganizationVolunteerRequest extends Report{


    private $form_data = "{
        'sections': [
            id: 'disaster_details',
            name: 'Disaster Details',
            gr
        ]
    }";
    
    public function __construct( $post_id=0 ) {
        parent::__construct($post_id);
    }

   
    public function event_organizer(){
        return $this->meta('vol_event_organizer');
    }

    public function event_org_contact_name(){
        return $this->meta('vol_event_org_contact_name');
    }

    public function contact_name(){
        return $this->event_org_contact_name();
    }

    public function event_org_contact_title(){
        return $this->meta('vol_event_org_contact_title');
    }

    public function event_org_contact_email(){
        return $this->meta('vol_event_org_contact_email');
    }

    public function event_org_contact_phone(){
        return $this->meta('vol_event_org_contact_phone');
    }

    public function event_org_contact_address(){
        return $this->meta('vol_event_org_contact_address');
    }

    public function event_org_contact_zipcode(){
        return $this->meta('vol_event_org_contact_zipcode');
    }

    public function event_org_contact_city(){
        return $this->meta('vol_event_org_contact_city');
    }

    public function city(){
        return $this->event_org_contact_city();
    }

    public function event_org_contact_state(){
        return $this->meta('vol_event_org_contact_state');
    }

    public function state(){
        return $this->event_org_contact_state();
    }

    public function event_org_contact_country(){
        return $this->meta('vol_event_org_contact_country');
    }

    public function country(){
        return $this->event_org_contact_country();
    }

    public function event_org_website(){
        return $this->meta('vol_event_org_contact_website');
    }

    public function event_org_mission(){
        return $this->meta('vol_event_org_mission');
    }

    public function location_organizer(){
        return $this->meta('vol_loc_organizaton');
    }

    public function location_contact_name(){
        return $this->meta('vol_loc_contact_name');
    }

    public function location_contact_title(){
        return $this->meta('vol_loc_contact_title');
    }

    public function location_contact_email(){
        return $this->meta('vol_loc_contact_email');
    }

    public function location_contact_phone(){
        return $this->meta('vol_loc_contact_phone');
    }

    public function point_of_contact_organization(){
        return $this->meta('poc_org');
    }

    public function point_of_contact_name(){
        return $this->meta('poc_name');
    }
    
    public function point_of_contact_title(){
        return $this->meta('poc_title');
    }

    public function point_of_contact_email(){
        return $this->meta('poc_email');
    }

    public function point_of_contact_phone(){
        return $this->meta('poc_phone');
    }

    public function disaster_type(){
        $meta = $this->meta('disaster_type');
        // split on comma 
        return explode(',', $meta);
    }

    public function disaster_type_other(){
        return $this->meta('disaster_type_other');
    }

    public function disaster_type_other_comment(){
        return $this->meta('disaster_type_other_comment');
    }

    public function scope_of_work(){
        return $this->meta('vol_scope');
    } 

    public function start_date(){
        return $this->meta('vol_start_date');
    }

    public function end_date(){
        return $this->meta('vol_end_date');
    }

    public function shift_start_date(){
        return $this->meta('vol_shift_start_date');
    }

    public function shift_end_date(){
        return $this->meta('vol_shift_end_date');
    }

    public function geo_country(){
        return $this->meta('geo_country');
    }

    public function geo_state(){
        return $this->meta('geo_state');
    }

    public function geo_city(){
        return $this->meta('geo_city');
    }

    public function geo_neighborhood(){
        return $this->meta('geo_neighborhood');
    }

    public function geo_zipcode(){
        return $this->meta('geo_zipcode');
    }

    public function geo_other(){
        return $this->meta('geo_address');
    }

    public function disqualifiers(){
        return $this->meta('vol_skills_disqualifiers');
    }

    public function skills_needed(){
        return $this->meta('vol_skills_needed');
    }


    public function applications(){
        $applications = $this->meta('vol_applications');
        if(empty($applications)){
            return [];
        }
        return $applications;
    }

    public function add_user_application($user_id){

        if($this->find_user_application($user_id)){
            return false;
        }

        $application = [
            "user_id" => $user_id,
            "status" => "applied",
        ];

        $applications = $this->applications();
        $applications[] = $application;
        $this->update_meta('vol_applications', $applications);
        return true;
        
    }

    public function approve_user_application($user_id){
        $application = $this->find_user_application($user_id);
        if($application){
            $application['status'] = 'approved';
            $applications = $this->applications();
            foreach($applications as $key => $app){
                if($app['user_id'] == $user_id){
                    $applications[$key] = $application;
                    $this->update_meta('vol_applications', $applications);
                    return true;
                }
            }
        }
        return false;
    }

    public function decline_user_application($user_id){
        $application = $this->find_user_application($user_id);
        if($application){
            $application['status'] = 'declined';
            $applications = $this->applications();
            foreach($applications as $key => $app){
                if($app['user_id'] == $user_id){
                    $applications[$key] = $application;
                    $this->update_meta('vol_applications', $applications);
                    return true;
                }
            }
        }
        return false;
    }

    public function delete_user_application($user_id){
        $applications = $this->applications();
        foreach($applications as $key => $application){
            if($application['user_id'] == $user_id){
                unset($applications[$key]);
                $this->update_meta('vol_applications', $applications);
                return true;
            }
        }
        return false;
    }

    public function find_user_application($user_id){
        $applications = $this->applications();
        foreach($applications as $application){
            if($application['user_id'] == $user_id){
                return $application;
            }
        }
        return false;
    }

    public function user_application_status($user_id){
        $application = $this->find_user_application($user_id);
        if($application){
            return $application['status'];
        }
        return false;
    }

    public function user_has_applied($user_id){

        $application = $this->find_user_application($user_id);
        if($application){
            return $application['status'] == 'applied';
        }
        return false;

    }

    public function user_has_been_declined($user_id){
        $application = $this->find_user_application($user_id);
        if($application){
            return $application['status'] == 'declined';
        }
        return false;
    }

    public function user_has_been_approved($user_id){
        $application = $this->find_user_application($user_id);
        if($application){
            return $application['status'] == 'approved';
        }
        return false;
    }

    public function has_applications(){
        return !empty($this->applications());
    }

    public function pending_applications(){
        $applications = $this->applications();
        $pending = [];
        foreach($applications as $application){
            if($application['status'] == 'applied'){
                $pending[] = $application;
            }
        }
        return $pending;
    }

    public function approved_applications(){
        $applications = $this->applications();
        $approved = [];
        foreach($applications as $application){
            if($application['status'] == 'approved'){
                $approved[] = $application;
            }
        }
        return $approved;
    }

    public function declined_applications(){
        $applications = $this->applications();
        $declined = [];
        foreach($applications as $application){
            if($application['status'] == 'declined'){
                $declined[] = $application;
            }
        }
        return $declined;
    }

    public function has_pending_applications(){
        return !empty($this->pending_applications());
    }

    public function has_approved_applications(){
        return !empty($this->approved_applications());
    }

    public function has_declined_applications(){
        return !empty($this->declined_applications());
    }


}