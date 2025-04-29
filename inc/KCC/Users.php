<?php


namespace KCC;

class Users extends \jwc\Wordpress\WPController{

    public static function getKCCAdmins(){
        // get all users with the role 'kcc_admin'
        $args = array(
            'role'    => 'kcc_admin',
            'orderby' => 'user_nicename',
            'order'   => 'ASC'
        );

        $users = get_users($args);

        return $users;
    }

    public static function get_by_role($role){
        // get all users with the role 'kcc_admin'
        $args = array(
            'role'    => $role,
            'orderby' => 'user_nicename',
            'order'   => 'ASC'
        );

        $users = get_users($args);

        $return = [];
        foreach($users as $user){
            $return[] = new User($user->ID);
        }

        return $return;
    }

    public static function allKCCUsers(){

        // get all users with the role Subscriber
        $args = array(
            'role'    => 'subscriber',
            'orderby' => 'user_nicename',
            'order'   => 'ASC'
        );

        $users = get_users($args);

        $return = [];
        foreach($users as $user){
            $return[] = new User($user->ID);
        }

        return $return;
        
    }

    public static function allKCCUserIds(){
        // get all users with the role Subscriber
        $args = array(
            'role'    => 'subscriber',
            'orderby' => 'user_nicename',
            'order'   => 'ASC'
        );

        $users = get_users($args);

        $return = [];
        foreach($users as $user){
            $return[] = $user->ID;
        }

        return $return;
    }

    public function init(){
        parent::init();
        $this->add_rewrites();
    }

    public function add_filters(){
        add_action('template_redirect', array($this,'template_redirect'));

    }

    public function add_rewrites(){
        add_rewrite_rule('^users/([^/]+)/?$', 'index.php?pagename=userprofile&author_name=$matches[1]', 'top');
    }

    public function template_redirect(){
        if(get_query_var('pagename') == 'userprofile'){
            // Load your custom create report template
            include get_template_directory() . '/template-userprofile.php';
            global $wp_query;
            $wp_query->is_404 = false;
            add_filter('wp_title', function($title){
                return 'User Profile';
            });
            exit;
        }
       
    }

    public static function get_user_by($field, $value){
        $user = get_user_by($field, $value);
        return new User($user->ID);
    }
}