<?php

namespace KCC\Reports;

class Report extends \jwc\Wordpress\WPPost
{
    public function __construct( $post_id=0 ) {
        parent::__construct($post_id);
    }

    public function report_number(){
        return $this->meta('report_number');
    }

    public function event_date($fmt = 'F j, Y'){
        
        return parent::date($fmt);
    }

    public function event(){
        return $this->meta('event');
    }

    public function country(){
        return $this->meta('country');
    }

    public function state(){
        return $this->meta('region');
    }

    public function city(){
        return $this->meta('city');
    }

    public function contact_person(){
        return $this->meta('contact_person');
    }

    public function organization(){
        return $this->meta('rf_org');
    }

    public function status(){
        return $this->meta('rf_status');
    }

}