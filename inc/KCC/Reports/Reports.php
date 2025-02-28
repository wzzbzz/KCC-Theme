<?php

namespace KCC\Reports;

class Reports extends \jwc\Wordpress\WPCollection
{

    public function register(){
        $this->register_post_type();
        $this->register_taxonomies();
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
            'rewrite' => array( 'slug' => 'kcc_report' ),
            'capability_type' => 'post',
            'has_archive' => true, 
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
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
}