<?php

/* this class will be used to manage roles within KCC */

namespace KCC;

class Roles extends \jwc\Wordpress\WPRoles{


    public function init() {
        parent::init();
        $this->create_kcc_admin_role();
    }

    public function create_kcc_admin_role()
    {
        // Get the Administrator role object
        $administrator = get_role('administrator');

        // If for some reason the administrator role doesn't exist, bail.
        if (! $administrator) {
            return;
        }

        // Retrieve all capabilities of the administrator role
        $admin_capabilities = $administrator->capabilities;

        // If a role with the 'kcc_admin' slug already exists, this will not overwrite it.
        add_role('kcc_admin', 'KCC Admin', $admin_capabilities);
    }

    

   
}
