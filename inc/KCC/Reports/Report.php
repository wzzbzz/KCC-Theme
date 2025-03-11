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

    public function report_id(){
        // report_id is the post_name
        return $this->slug();
    }

    public function report_type(){

        // get the term for the kcc_report_type taxonomy
        $terms = wp_get_post_terms($this->id(), 'kcc_report_type');
        if(!empty($terms)){
            return $terms[0]->name;
        }
        return '';
    }

    public function report_type_term(){
        // get the term for the kcc_report_type taxonomy
        $terms = wp_get_post_terms($this->id(), 'kcc_report_type');
        if(!empty($terms)){
            return $terms[0];
        }
        return '';
    }

    public function audience(){
        return $this->meta('audience');
    }

    public function event_date($fmt = 'F j, Y'){
        return parent::date($fmt);
    }

    public function event(){
        // return the post title
        return parent::title();
    }

    public function country(){
        die("wrong file");
        return $this->meta('country');
    }

    public function state(){
        return $this->meta('state');
    }

    public function city(){
        return $this->meta('city');
    }

    public function contact_name(){
        return $this->meta('contact_name');
    }

    public function group_id(){
        return $this->meta('group_id');
    }

    public function group(){
        if(empty($this->group_id())){
            return false;
        }
        return new \KCC\Group($this->group_id());
    }

    public static function factory($report_id){
        $report = new Report($report_id);

        $class = '\KCC\Reports\\' . str_replace(" ", "", $report->report_type());

        if(class_exists($class)){
            return new $class($report_id);
        }
        return $report;
        
    }

    public function render_view(){
        
        $class = '\KCC\Reports\\' . str_replace(" ", "", $this->report_type()) . 'View';
        if(class_exists($class)){
            $view = new $class($this);
            $view->render();
        }
    }

}