<?php

namespace KCC\Reports;

class Report extends \jwc\Wordpress\WPPost
{
    protected $has_applications;

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

    public function hasGroup(){
        return !empty($this->group_id());
    }

    public function disaster_name(){
        return $this->meta('disaster_name');
    }

    /* disaster types */
    public function disaster_types(){

        $disaster_types_object= new \KCC\DisasterTypes();
        // should be an array
        $disaster_types =  $this->meta('disaster_types');
        
        // if it's a string, split it on the comma
        if(!is_array($disaster_types)){
            $disaster_types = explode(',', $disaster_types);
        }
        $return = [];
        // return the array
        foreach($disaster_types as $type_id){
            
            $type = $disaster_types_object->fieldById($type_id);
            
            if(!$type){
                continue;
            }
            $return[] = $type;
        }

        return $return;
    }
    

    public function disaster_type_checked($disaster_id){
        $disaster_types = $this->disaster_types();
        foreach($disaster_types as $disaster_type){
            if($disaster_type->id() == $disaster_id){
                return true;
            }
        }
        return false;
    }

    public function disaster_type_other(){
        // should be an array
        $disaster_type =  $this->meta('disaster_type_other');
        return $disaster_type;
    }

    public function disaster_type_other_comment(){
        return $this->meta('disaster_type_other_comment');
    }

    public function disaster_type_description(){
        return $this->meta('disaster_type_description');
    }

    public function other_disaster_details(){
        return $this->meta('other_disaster_details');
    }
    

    public static function factory($report_id){
        $report = new Report($report_id);

        $class = '\KCC\Reports\\' . str_replace(" ", "", $report->report_type());

        if(class_exists($class)){
            return new $class($report_id);
        }
        return $report;
        
        
    }


    /* Applications */
    public function applications(){
        $applications = $this->meta('applications');
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
        $this->update_meta('applications', $applications);
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
                    $this->update_meta('applications', $applications);
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
                    $this->update_meta('applications', $applications);
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
                $this->update_meta('applications', $applications);
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

    /* End Applications */

    public function render_view(){
        
        $class = $this->viewClass();
        if(class_exists($class)){
            $view = new $class($this);
            $view->render();
        }
    }

    public function viewClass(){
        return '\KCC\Reports\\' . str_replace(" ", "", $this->report_type()) . 'View';
    }

    public static function getInstance(){
        $class_name = get_called_class();
        if(class_exists($class_name)){
            return new $class_name();
        }
    }

}