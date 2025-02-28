<?php

namespace KCC\Communications;


class Announcement extends \jwc\Wordpress\WPPost{

    public function group_id(){
        return $this->meta('announcement_group_id');
    }

}