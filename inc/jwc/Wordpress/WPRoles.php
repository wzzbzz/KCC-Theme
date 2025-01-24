<?php
namespace jwc\Wordpress;

class WPRoles{

    public function __construct()
    {
        add_action('init', array($this, 'init'));
    }

    public function init() {
        // do something
    }

    public function roleExists($role)
    {
        return get_role($role) ? true : false;
    }

    public function createRole($role, $display_name, $capabilities = array())
    {
        if( ! $this->roleExists($role) ){
            add_role($role, $display_name, $capabilities);
        }
    }
}