<?php

namespace KCC\Communications;


class BlogPost extends \jwc\Wordpress\WPPost{

    public function author(){
        return new \KCC\User( $this->author_id() );
    }

    public function getAudience(){
        $audience = get_post_meta($this->id(), 'audience', true);
        return $audience;
    }

    public function getGroupId(){
        if(! $this->getAudience()=="group"){
            return false;
        }
        
        $group_id = get_post_meta($this->id(), 'group_id', true);
        if(empty($group_id)){
            return false;
        }
        return $group_id;
    }
}