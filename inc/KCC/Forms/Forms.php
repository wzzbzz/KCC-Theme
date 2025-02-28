<?php


namespace KCC\Forms;

use KCC\FlashMessages\FlashMessages;

class Forms extends \jwc\Wordpress\WPCollection
{


    public function __construct()
    {
        parent::__construct();
    }


    public function init(){
    
        parent::init();

        if(!empty($_POST['action']) && $_POST['action'] == 'submit_form'){

            $this->process_form();

        }

    }

    public function admin_init(){}

    public static function allCountries(){
        global $wpdb;

        $countries = $wpdb->get_results("SELECT * FROM `countries`");

        $countries = !empty($countries) ? array_map(function($item) {

            $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->name);

            return $item;

        }, $countries) : [];

        return $countries;
    }

    public static function allStates(){
        global $wpdb;

        $states = $wpdb->get_results("SELECT * FROM `wp_states`");

        $states = !empty($states) ? array_map(function($item) {

            $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->state);

            return $item;

        }, $states) : [];

        return $states;
    }

    public static function allCities(){
        global $wpdb;

        $cities = $wpdb->get_results("SELECT * FROM `wp_cities`");

        $cities = !empty($cities) ? array_map(function($item) {
            
            $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->city);

            return $item;

        }, $cities) : [];

        return $cities;
    }

    public function process_form(){

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";
        unset($_POST['group_id']);

        $report_id = ($_POST['report_id']) ? sanitize_text_field($_POST['report_id']) : "";
        unset($_POST['report_id']);

        // $rf_publish = ($_POST['rf_publish']) ? sanitize_text_field($_POST['rf_publish']) : "";
        // unset($_POST['rf_publish']);
        // $rf_private = ($_POST['rf_private']) ? sanitize_text_field($_POST['rf_private']) : "";
        // unset($_POST['rf_private']);
        
        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";
        unset($_POST['post_title']);

        unset($_POST['save']);

        $current_user_id = get_current_user_id();
        $group_title  = get_the_title($group_id);


        // M009: Disaster Situational Report Notification
        if (empty($rf_id)) {
            $reportsformsData = array(
                'post_title' => $post_title,
                'post_status' => 'publish',
                'post_author' => $current_user_id,
                'post_name' => $report_id,
                'post_type' => 'kcc_report',
            );

            $rf_id = wp_insert_post($reportsformsData);

            // add it to the taxonomy in $_POST['report_type']
            $term = get_term_by('slug', $_POST['report_type'], 'kcc_report_type');
            wp_set_post_terms($rf_id, $term->name, 'kcc_report_type');

            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    add_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }

            if (0){//$rf_private == 'keep_private') {
                add_post_meta($rf_id, 'rf_publish', @$_POST['rf_publish']);
            } elseif (0){//$rf_publish == 'all_rrn_users') {

                $all_users = get_users();

                foreach ($all_users as $value) {

                    $group_title  = get_the_title($group_id);

                    $subject = "Disaster Report Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@worldcares.org>' . "\r\n";

                    $message = "
                    Hi " . $value->display_name . ",\n
                    A new Disaster Situational Report  $post_title has just been published to the group $group_title.\n
                    Thank You, Admin";
                    $params = array(
                        'subject' => $subject,
                        'body' => $message,
                        'to' => $value->user_email,
                        'action_link' => site_url('disaster-situational-report/?id=' . $rf_id),
                        'user_id' => $value->ID,
                        'post_id' => $rf_id
                    );
                    // Call the emailHandler function to send email notifications
                    emailHandler($params);
                    // wp_mail($value->user_email, $subject, $message, $headers);
                }

                add_post_meta($rf_id, 'rf_publish', @$_POST['$rf_publish']);
            } else {

                $args = [
                    'group_id' => $group_id,
                    'report_post_id' => $rf_id
                ];

                $notification = new \KCC\Notifications\ReportNotification($args);
                $notification->send();

                FlashMessages::add('Report Created Successfully', 'success');
                $group = new \KCC\Group($group_id);
                header('Location: ' . $group->permalink());
                exit;
            }

            // unset($_POST['post_title'],$_POST['create_reportsforms'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);


            // $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            // $vpn1 = implode(',', $multiapply);

            // update_post_meta($rf_id, 'rf_apply', $vpn1);
        } else {


            // we are updating a report - 

            die("NOW DO THE UPDATE");
            $reportsformsData = array(

                'ID' => $rf_id,

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'reportsforms'

            );





            $rf_id = wp_insert_post($reportsformsData);

            unset($_POST['post_title'], $_POST['create_reportsforms'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $vpn1 = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $vpn1);
        }



        if ($submitType = "save") {

            /* header('Location: '.site_url('create-new-report')."?gid=".$group_id."&rf_id=".$rf_id);  */

            header('Location: ' . site_url('create-new-report') . "?gid=" . $group_id . "");
        } else {

            $pp = get_post_permalink($group_id);

            header('Location: ' . $pp);
        }

        exit;
    }
    
    
}