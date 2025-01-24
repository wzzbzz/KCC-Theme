<?php

namespace jwc\Wordpress;

class WPPosts extends WPCollection{

    public function __construct()
    {
        add_action('init', array($this, 'init'));
        add_action('admin_init', array($this, 'admin_init'));
    }

    public function init()
    {
        // add custom post types
        $this->register_post_type();
    }

    public static function register_post_type()
    {
        // here you will register your custom post types
    }

    public function admin_init()
    {
        // add custom meta boxes
        add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
        add_action('save_post', array($this, 'save_post'));
    }

    public function add_meta_boxes()
    {
        // here you will add your custom meta boxes
    }

    public function save_post($post_id)
    {
        // here you will save your custom meta boxes
    }
}