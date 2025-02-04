<?php

namespace KCC;

class User extends \jwc\Wordpress\WPUser{
    public function __construct($id){
        parent::__construct($id);
    }

    public function getGroupIds(){
        global $wpdb;
        $table_name = 'users_groups';
        $sql = "SELECT group_id FROM {$table_name} WHERE user_id = %d";
        $sql = $wpdb->prepare($sql, $this->id());
        return $wpdb->get_col($sql);
        
    }

    public function getGroups(){
        $group_ids = $this->getGroupIds();
        $groups = [];
        foreach($group_ids as $group_id){
            $groups[] = new Group($group_id);
        }
        return $groups;
    }

    public function addToGroup($group_id){

        $group = new Group($group_id);
        $group->addMember($this->id());

        return true;

    }

    public function userIsGroupMember($group_id){
        return in_array($group_id, $this->getGroupIds());
    }
    
}