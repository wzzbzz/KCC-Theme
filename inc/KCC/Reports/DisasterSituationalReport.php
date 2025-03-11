<?php

namespace KCC\Reports;


class DisasterSituationalReport extends Report{


    private $form_data = "{
        'sections': [
            id: 'disaster_details',
            name: 'Disaster Details',
            gr
        ]
    }";
    

    public function incident_location(){
        return $this->meta('incident_location');
    }

    public function incident_country(){
        return $this->meta('incident_country');
    }
    
    public function country(){
        return $this->incident_country();
    }

    public function incident_state(){
        return $this->meta('incident_state');
    }

    public function state(){
        return $this->incident_state();
    }

    public function incident_city(){
        return $this->meta('incident_city');
    }

    public function city(){
        return $this->incident_city();
    }

    public function incident_zip(){
        return $this->meta('incident_zip');
    }
    
    public function incident_date($fmt = 'F j, Y'){
        return $this->meta('incident_date');
    }

    public function incident_time(){
        return $this->meta('incident_time');
    }

    public function report_status(){
        return $this->meta('report_status');
    }

    public function organization(){
        return $this->meta('organization');
    }

    public function contact_name(){
        return $this->meta('contact_name');
    }

    public function contact_person(){
        return $this->meta('contact_person');
    }

    public function contact_title(){
        return $this->meta('contact_title');
    }

    public function contact_email(){
        return $this->meta('contact_email');
    }

    public function contact_phone(){
        return $this->meta('contact_phone');
    }

    public function contact_address(){
        return $this->meta('contact_address');
    }

    public function contact_city(){
        return $this->meta('contact_city');
    }

    public function contact_state(){
        return $this->meta('contact_state');
    }

    public function contact_zipcode(){
        return $this->meta('contact_zipcode');
    }

    public function contact_country(){
        return $this->meta('contact_country');
    }

    public function contact_website(){
        return $this->meta('contact_website');
    }

    public function alternate_contact_organization(){
        return $this->meta('alt_org');
    }

    public function alternate_contact_name(){
        return $this->meta('alt_contact_name');
    }

    public function alternate_contact_person(){
        return $this->meta('alt_contact_person');
    }

    public function alternate_contact_title(){
        return $this->meta('alt_contact_title');
    }

    public function alternate_contact_email(){
        return $this->meta('alt_contact_email');
    }

    public function alternate_contact_phone(){
        return $this->meta('alt_contact_phone');
    }

    public function disaster_type(){
        // should be an array
        $disaster_type =  $this->meta('disaster_type');
        // split it on the comma
        $disaster_type = explode(',', $disaster_type);
        // return the array
        
        return $disaster_type;
    }

    public function disaster_type_description(){
        return $this->meta('disaster_type_description');
    }

    public function logistic_type(){
        $logistic_type = $this->meta('logistic_type');
        return explode(',', $logistic_type);
    }

    public function ground_situation_description(){
        return $this->meta('ground_situation_description');
    }

    public function sheltering_options(){
        // split on comma and return as array
        $options = $this->meta('sheltering_options');
        return explode(',', $options);
    }

    public function recommended_point_of_entry(){
        return $this->meta('recommended_point_of_entry');
    }

    public function additional_comment(){
        return $this->meta('additional_comment');
    }

    public function situational_report_comment(){
        return $this->additional_comment();
    }

    public function audience(){
        return $this->meta('audience');
    }

    public function group_id(){
        return $this->meta('group_id');
    }

    public function published_to_group(){
        return $this->meta('group_id');
    }

    public function security_concern(){
        return $this->meta('security_concerns');
    }

    public function utilities(){
        $utilities = $this->meta('utilities');
        return explode(',', $utilities);
    }


}