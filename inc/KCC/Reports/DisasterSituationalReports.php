<?php

namespace KCC\Reports;

class DisasterSituationalReports extends Reports{
    
    private $category = "dsr";

    public function init(){
        parent::init();

        $this->check_form_submission();
    }

    public function check_form_submission(){
        if(isset($_POST['action']) && $_POST['action'] == 'kcc_form_submit'){
            $this->process_form();
        }
    }

    public function process_form(){
        pre($_POST);
        die;
    }

    
}