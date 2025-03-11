<?php


namespace KCC;

class Users{

    public function __construct()
    {
    }

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
}