<?php


namespace KCC\Forms;

use KCC\FlashMessages\FlashMessages;

class Forms extends \jwc\Wordpress\WPController
{


    public function __construct()
    {
        parent::__construct();
    }


    public function init()
    {

        parent::init();

        if (!empty($_POST['action']) && $_POST['action'] == 'submit_form') {

            $this->process_form();
        }

        if (!empty($_POST['action']) && $_POST['action'] == 'delete_report') {

            $this->delete_report();
        }
    }

    public function admin_init() {}

    public static function allCountries()
    {
        global $wpdb;

        $countries = $wpdb->get_results("SELECT * FROM `countries`");

        $countries = !empty($countries) ? array_map(function ($item) {

            $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->name);

            return $item;
        }, $countries) : [];

        // sort alphabetically
        usort($countries, function ($a, $b) {
            return $a->name <=> $b->name;
        });

        return $countries;
    }

    public static function countrySelect($args){

        $countries = self::allCountries();

        $defaults = [
            'id' => '',
            'name' => '',
            'selected' => '',
            'change_target' => null,
            'required' => false
        ];
        $args = wp_parse_args($args, $defaults);
        extract($args);
        
 
        $html = "<select class='form-control country' id='$id' name='$name' "
               . ($required ? 'required' : '') . " " . ( ($change_target) ? "data-change-target='" . $change_target . "'" : '') . ">";
        $html .= "<option value=''>Select Country</option>";
        foreach($countries as $country){
            $html .= "<option value='$country->name' data-value='{$country->id}' ".($selected==$country->name ? 'selected' : '').">{$country->name}</option>";
        }
        $html .= "</select>";

        return $html;
    }

    public static function stateSelect( $args = [] ){
        $defaults = [
            'id' => '',
            'name' => '',
            'selected' => '',
            'change_target' => null,
            'required' => false,
            'country' => ''
        ];
        
        $args = wp_parse_args($args, $defaults);
        extract($args);
        
        $states = self::statesByCountryName($country);
        
        $html = "<select class='form-control state' id='$id' name='$name' "
               . ($required ? 'required' : '') . " " . ($change_target ? "data-change-target='$change_target'" : '') . ">";
        $html .= "<option value=''>Select State</option>";
        
        foreach($states as $state){
            $html .= "<option value='$state->name' data-value='{$state->id}' " . ($selected == $state->name ? 'selected' : '') . ">{$state->name}</option>";
        }
        $html .= "</select>";

        $html .= "<!-- made by KCC.Forms.Forms::stateSelect -->";

        return $html;
    }


    public static function allStates()
    {
        global $wpdb;

        $states = $wpdb->get_results("SELECT * FROM `wp_states`");

        $states = !empty($states) ? array_map(function ($item) {

            $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->state);

            return $item;
        }, $states) : [];

        // sort alphabetically
        usort($states, function ($a, $b) {
            return $a->name <=> $b->name;
        });

        return $states;
    }

    public static function statesByCountryId($country_id)
    {
        global $wpdb;

        $states = $wpdb->get_results("SELECT * FROM `wp_states` WHERE country_id = $country_id");

        $states = !empty($states) ? array_map(function ($item) {

            $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->state);

            return $item;
        }, $states) : [];

        // sort alphabetically
        usort($states, function ($a, $b) {
            return $a->name <=> $b->name;
        });

        return $states;
    }

    public static function statesByCountryName($country_name)
    {
        global $wpdb;

        $country = $wpdb->get_row("SELECT * FROM `countries` WHERE name = '$country_name'");

        $states = $wpdb->get_results("SELECT * FROM `wp_states` WHERE country_id = $country->id");

        $states = !empty($states) ? array_map(function ($item) {

            $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->state);

            return $item;
        }, $states) : [];

        // sort alphabetically
        usort($states, function ($a, $b) {
            return $a->name <=> $b->name;
        });

        return $states;
    }

    public static function allCities()
    {
        global $wpdb;

        $cities = $wpdb->get_results("SELECT * FROM `wp_cities`");

        $cities = !empty($cities) ? array_map(function ($item) {

            $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->city);

            return $item;
        }, $cities) : [];

        // sort alphabetically
        usort($cities, function ($a, $b) {
            return $a->name <=> $b->name;
        });

        return $cities;
    }

    public static function citiesByStateName($state_name)
    {
        global $wpdb;

        $state = $wpdb->get_row("SELECT * FROM `wp_states` WHERE state = '$state_name'");

        $cities = $wpdb->get_results("SELECT * FROM `wp_cities` WHERE state_id = $state->id");

        $cities = !empty($cities) ? array_map(function ($item) {

            $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->city);

            return $item;
        }, $cities) : [];

        // sort alphabetically
        usort($cities, function ($a, $b) {
            return $a->name <=> $b->name;
        });

        return $cities;
    }

    public function process_form()
    {

        $current_user_id = get_current_user_id();

        if(empty($_POST['audience'])){
            FlashMessages::add('Please select an audience', 'error');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }

        
        $audience = $_POST['audience'];
        if($audience=='all-rrn-users'){
            unset($_POST['group_id']);
        }

        // get group id
        $group_id = (isset($_POST['group_id'])) ? sanitize_text_field($_POST['group_id']) : "";

        // report wordpress post id 
        $report_post_id = (isset($_POST['report_post_id'])) ? sanitize_text_field($_POST['report_post_id']) : "";
        unset($_POST['report_post_id']);

        //the report title
        $post_title = (isset($_POST['post_title'])) ? sanitize_text_field($_POST['post_title']) : "";
        unset($_POST['post_title']);

        // the unique identifier for the report will be the slug 
        $post_slug = (isset($_POST['report_slug'])) ? sanitize_text_field($_POST['report_slug']) : "";
        unset($_POST['report_slug']);

        unset($_POST['save']);

        // M009: Disaster Situational Report Notification
        if (empty($report_post_id)) {
            $reportsformsData = array(
                'post_title' => $post_title,
                'post_status' => 'publish',
                'post_author' => $current_user_id,
                'post_name' => $post_slug,
                'post_type' => 'kcc_report',
            );


            $report_post_id = wp_insert_post($reportsformsData);

            // add it to the taxonomy in $_POST['report_type']
            $term = get_term_by('slug', $_POST['report_type'], 'kcc_report_type');

            wp_set_post_terms($report_post_id, $term->term_id, 'kcc_report_type');

            foreach ($_POST as $key => $value) {

                if (!empty($value)) {
                    
                   // if it's a string, 
                    if (is_string($value)) {
                        $value = sanitize_text_field($value);
                    }

                    update_post_meta($report_post_id, $key, $value);
                }
                
            }

            
            if (0) { //$rf_private == 'keep_private') {
                $args = [
                    
                    'report_post_id' => $report_post_id,
                    "report_type" => $term->name
                ];

                add_post_meta($rf_id, 'rf_publish', @$_POST['rf_publish']);
            } elseif ( $audience == 'all-rrn-users') {

                $args = [
                    'audience' => $audience,
                    'report_post_id' => $report_post_id,
                    "report_type" => $term->name
                ];
                
                $notification = new \KCC\Notifications\ReportNotification($args);
                $notification->send();

                    
            } else {

                $args = [
                    'audience' => $audience,
                    'group_id' => $group_id,
                    'report_post_id' => $report_post_id,
                    "report_type" => $term->name
                ];

                $notification = new \KCC\Notifications\ReportNotification($args);
                $notification->send();

                FlashMessages::add('Report Created Successfully', 'success');
                $report = new \KCC\Reports\Report($report_post_id);

                header('Location: ' . $report->permalink());
                exit;
            }

            // unset($_POST['post_title'],$_POST['create_reportsforms'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);


            // $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            // $vpn1 = implode(',', $multiapply);

            // update_post_meta($rf_id, 'rf_apply', $vpn1);
        } else {;
            // we are updating a report - 


            $reportsformsData = array(

                'ID' => $report_post_id,
                'post_title' => $post_title,

            );

            wp_update_post($reportsformsData);

            // unset($_POST['post_title'], $_POST['create_reportsforms'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {
                    if (is_array($value)) {
                        $value = implode(',', $value);
                        // sanitize the array
                    }

                    update_post_meta($report_post_id, $key, sanitize_text_field($value));
                }
            }

            FlashMessages::add('Report Updated Successfully', 'success');

            // redirect to the report page
            $report = new \KCC\Reports\Report($report_post_id);

            header('Location: ' . $report->permalink());
            exit;
        }



        exit;
    }

    public function delete_report()
    {


        $report_id = (isset($_POST['report_id'])) ? sanitize_text_field($_POST['report_id']) : "";
        
        if (empty($report_id)) {
            FlashMessages::add('Report Id Empty', 'error');
            header('Location: ' . site_url('groups'));
            exit;
        }

        wp_delete_post($report_id);

        FlashMessages::add('Report Deleted Successfully', 'success');

        header('Location: ' . site_url('groups'));


        exit;
    }

    public static function form_factory($report_type)
    {
        // get the term with that slug
        $term = get_term_by('slug', $report_type, 'kcc_report_type');
        $class = '\KCC\Forms\\' . str_replace(" ", "", $term->name) . 'Form';

      
        if(class_exists($class)){
            return new $class();
        }
        return new Form();
    }
}
