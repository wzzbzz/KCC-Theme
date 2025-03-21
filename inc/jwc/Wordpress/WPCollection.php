<?php

namespace jwc\Wordpress;

class WPCollection{
    public function __construct()
    {
        add_action('init', array($this, 'init'));
        add_action('admin_init', array($this, 'admin_init'));
    }

    public function init()
    {
        $this->register();
    }

    public function admin_init()
    {
        // add custom meta boxes
        add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
    }

    public function add_meta_boxes()
    {
        // here you will add your custom meta boxes
    }

    public function register(){
        // here you will register your custom post types, user roles, or taxonomies.
    }
}