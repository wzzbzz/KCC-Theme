<?php

namespace KCC\Reports;

use KCC\FlashMessages\FlashMessages;

class SurvivorNeedsIntake extends Report{


    public function intake_date($fmt = 'F j, Y'){
        $date = $this->meta('intake_date');
        if(empty($date)){
            return '';
        }
        return date($fmt, strtotime($date));
    }

    public function intake_time($fmt = 'g:i a'){
        $time = $this->meta('intake_time');
        if(empty($time)){
            return '';
        }
        return date($fmt, strtotime($time));
    }

    public function intake_datetime($fmt = 'F j, Y g:i a'){
        return $this->intake_date($fmt) . ' ' . $this->intake_time($fmt);
    }

    public function intake_phone(){
        return $this->meta('intake_phone');
    }

    public function intake_firstName(){
        return $this->meta('intake_firstName');
    }

    public function intake_lastName(){
        return $this->meta('intake_lastName');
    }

    public function intake_address(){
        return $this->meta('intake_address');
    }

    public function intake_zipcode(){
        return $this->meta('intake_zipcode');
    }

    public function intake_other(){
        return $this->meta('intake_other');
    }

    public function intake_phone2(){
        return $this->meta('intake_phone2');
    }

    public function intake_contact_time(){
        return $this->meta('intake_contact_time');
    }
    
    
}