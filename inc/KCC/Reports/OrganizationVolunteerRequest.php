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








}