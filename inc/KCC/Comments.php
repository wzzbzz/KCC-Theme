<?php

class Comments extends \jwc\Wordpress\WPComments{
    public function __construct(){
        add_filter( 'comment_form_defaults', [$this, 'leave_a_comment_title_tag'] );
    }
}