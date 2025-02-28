<?php

namespace KCC;

class User extends \jwc\Wordpress\WPUser{

    public function __construct($id){
        parent::__construct($id);
    }

    public function group_ids(){
        global $wpdb;
        $table_name = 'users_groups';
        $sql = "SELECT group_id FROM {$table_name} WHERE user_id = %d";
        $sql = $wpdb->prepare($sql, $this->id());
        return $wpdb->get_col($sql);
    }

    public function myGroups(){
        $group_ids = $this->group_ids();
        $groups = [];
        foreach($group_ids as $group_id){
            $groups[] = new Group($group_id);
        }
        return $groups;
    } 

    public function groupsILead(){
        // get posts of type "group" where the author is the current user
        $args = array(
            'post_type' => 'groups',
            'author' => $this->id(),
            'posts_per_page' => -1
        );
        $query = new \WP_Query($args);
        $groups = [];
        foreach($query->posts as $post){
            $groups[] = new Group($post->ID);
        }
        return $groups;
    }

    public function addToGroup($group_id){
        $group = new Group($group_id);
        $group->addMember($this->id());

        return true;
    }

    public function userIsGroupMember($group_id){
        return in_array($group_id, $this->group_ids());
    }

    public function default_image_url(){
        return get_template_directory_uri()."/avatar.png";
    }

    public function image(){
        $image = parent::user_avatar();
        if(empty($image)){
            return $this->default_image();
        }
        return $image;
    }

    public function image_url(){
        $image = parent::user_avatar_url();
        if(empty($image)){
            return $this->default_image_url();
        }
        return $image;
    }

    public function hasAnyInvitationsOrRequests(){
        global $wpdb;
        $table_name = 'group_invitations';
        $sql = "SELECT * FROM {$table_name} WHERE  user_id = %d";
        $sql = $wpdb->prepare($sql, $this->id());
        $result = $wpdb->get_row($sql);
        return $result;
    }


}