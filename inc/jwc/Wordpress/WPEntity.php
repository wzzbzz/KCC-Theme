<?php

namespace jwc\Wordpress;

class WPEntity{
    
    public function __construct()
    {
        add_action('init', array($this, 'init'));
        add_action('admin_init', array($this, 'admin_init'));
    }
    
    public function init(){}
    public function admin_init(){}

    // must be over-ridden by class that extends this class
    public function get_meta($key, $single = true){
        //return get_post_meta(get_the_ID(), $key, $single);
    }

    public function id(){}
    public function name(){}
    public function meta($field_name){}
}
?>
        