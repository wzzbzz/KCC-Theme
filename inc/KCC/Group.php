<?php

namespace KCC;

class Group extends \jwc\Wordpress\WPPost{

    public function name(){
        return $this->title();
    }
    public function getMembers(){}
    public function getLeader(){
        // leader is the post author
        return new User($this->author_id());
    }
}
