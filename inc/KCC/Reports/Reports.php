<?php

namespace KCC\Reports;
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL); 
class Reports extends \jwc\Wordpress\WPCollection
{

    public function register(){

        $this->register_post_type();
        $this->register_taxonomies();
        $this->add_rewrites();

        flush_rewrite_rules();
    }

    public function register_post_type(){

        // a post type called "KCC Reports" with the post_type "kcc_report"

        $args = array(
            'labels' => array(
                'name' => 'KCC Reports',
                'singular_name' => 'KCC Report',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New KCC Report',
                'edit_item' => 'Edit KCC Report',
                'new_item' => 'New KCC Report',
                'all_items' => 'All KCC Reports',
                'view_item' => 'View KCC Report',
                'search_items' => 'Search KCC Reports',
                'not_found' =>  'No KCC Reports found',
                'not_found_in_trash' => 'No KCC Reports found in Trash', 
                'parent_item_colon' => '',
                'menu_name' => 'KCC Reports'
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'show_in_menu' => true, 
            'query_var' => true,
            'rewrite' => ['slug' => 'reports/%kcc_report_type%', 'with_front' => false],
            'capability_type' => 'post',
            'has_archive' => true, 
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'taxonomies' => ['kcc_report_type'],
        );

        register_post_type( 'kcc_report', $args );
    

    }

    public function register_taxonomies(){
        
        // a taxonomy called "KCC Report Types" with the taxonomy "kcc_report_type"

        $labels = array(
            'name' => _x( 'KCC Report Types', 'taxonomy general name' ),
            'singular_name' => _x( 'KCC Report Type', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search KCC Report Types' ),
            'all_items' => __( 'All KCC Report Types' ),
            'parent_item' => __( 'Parent KCC Report Type' ),
            'parent_item_colon' => __( 'Parent KCC Report Type:' ),
            'edit_item' => __( 'Edit KCC Report Type' ), 
            'update_item' => __( 'Update KCC Report Type' ),
            'add_new_item' => __( 'Add New KCC Report Type' ),
            'new_item_name' => __( 'New KCC Report Type Name' ),
            'menu_name' => __( 'KCC Report Types' ),
        );    

        register_taxonomy('kcc_report_type',array('kcc_report'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            //'query_var' => true,
            //'rewrite' => array( 'slug' => 'kcc_report_type' ),
        ));
    }


    public static function factory($report_id){
        // get the post, and find out what kcc_report_type it is
        
        $report_type = wp_get_post_terms($report_id, 'kcc_report_type');
        

        
        switch( $report_type[0]->name){
            case "Disaster Situational Report":
                return new DisasterSituationalReport($report_id);
            case "Organization Volunteer Request":
                return new OrganizationVolunteerRequest($report_id);
            default:
                return new Report($report_id);
        }
    }

    public function add_filters(){
        add_filter('post_type_link', array($this,'link_structure'), 10, 2);
        add_filter('query_vars', array($this,'add_query_vars'));

        add_action('template_redirect', array($this,'template_redirect'));

    }

    public function add_rewrites(){
        add_rewrite_rule('^reports/([^/]+)/create/?$', 'index.php?post_type=kcc_report&report_create=1&kcc_report_type=$matches[1]', 'top');
        add_rewrite_rule('^reports/([^/]+)/([^/]+)/applications/?$', 'index.php?post_type=kcc_report&report_applications=1&kcc_report_type=$matches[1]&name=$matches[2]', 'top');
        add_rewrite_rule('^reports/([^/]+)/?$', 'index.php?post_type=kcc_report&kcc_report_type=$matches[1]', 'top');
    

    }

    public function add_query_vars($vars){
        $vars[] = 'report_create';
        $vars[] = 'report_applications';
        return $vars;
    }

    public function link_structure($post_link, $post) {
        
        if ($post->post_type === 'kcc_report') {
            $terms = get_the_terms($post->ID, 'kcc_report_type');
            if ($terms && !is_wp_error($terms)) {
                $report_type = array_shift($terms)->slug;
                return home_url("/reports/$report_type/{$post->post_name}/");
            }
        }
        return $post_link;
    }

    public function template_redirect(){
        global $wp_query;
        if (get_query_var('report_create') == 1) {
            // Load your custom create report template
            include get_template_directory() . '/create-report.php';
            exit;
        }

        if(get_query_var('report_applications') == 1){
            // Load your custom create report template
            include get_template_directory() . '/report-applications.php';
            exit;
        }
    }

}