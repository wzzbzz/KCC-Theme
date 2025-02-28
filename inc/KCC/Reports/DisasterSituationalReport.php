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
    
    public function __construct( $post_id=0 ) {
        parent::__construct($post_id);
    }

   
    public function date($fmt = 'F j, Y'){
        return parent::date($fmt);
    }

    public function incident_location(){
        return $this->meta('incident_location');
    }
    
    public function incident_date($fmt = 'F j, Y'){
        return $this->meta('incident_date');
    }

    public function incident_time(){
        return $this->meta('incident_time');
    }

    public function report_status(){
        return $this->meta('rf_status');
    }

    public function organization(){
        return $this->meta('rf_org');
    }

    public function contact_name(){
        return $this->meta('rf_contact_name');
    }

    public function contact_title(){
        return $this->meta('rf_contact_title');
    }

    public function contact_email(){
        return $this->meta('rf_contact_email');
    }

    public function contact_phone(){
        return $this->meta('rf_contact_phone');
    }

    public function contact_address(){
        return $this->meta('rf_address');
    }

    public function contact_city(){
        return $this->meta('rf_city');
    }

    public function contact_state(){
        return $this->meta('rf_state');
    }

    public function contact_zip(){
        return $this->meta('rf_zip');
    }

    public function contact_country(){
        return $this->meta('rf_country');
    }

    public function contact_website(){
        return $this->meta('rf_website');
    }

    public function alternate_contact_organization(){
        return $this->meta('rf_alt_org');
    }

    public function alternate_contact_name(){
        return $this->meta('rf_alt_contact_name');
    }

    public function alternate_contact_title(){
        return $this->meta('rf_alt_contact_title');
    }

    public function alternate_contact_email(){
        return $this->meta('rf_alt_contact_email');
    }

    public function alternate_contact_phone(){
        return $this->meta('rf_alt_contact_phone');
    }

    public function disaster_type(){
        return $this->meta('rf_disaster_type');
    }

    public function disaster_type_description(){
        return $this->meta('rf_disaster_type_description');
    }

    public function logistic_type(){
        return $this->meta('rf_logistic_type');
    }

    public function ground_situation_description(){
        return $this->meta('rf_ground_situation_description');
    }

    public function sheltering_options(){
        return $this->meta('rf_sheltering_options');
    }
    

    public function recommended_point_of_entry(){
        return $this->meta('rf_recommended_point_of_entry');
    }

    public function situational_report_comment(){
        return $this->meta('rf_situation_report_comment');
    }

    public function audience(){
        return $this->meta('rf_audience');
    }

    public function published_to_group(){
        return $this->meta('rf_group_id');
    }


}