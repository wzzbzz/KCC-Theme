<?php


namespace jwc\Wordpress;


class WPComments extends WPController{
    
    public function init(){
        add_filter( 'comment_form_defaults', [$this, 'leave_a_comment_title_tag'] );
    }

    public function admin_init(){
        parent::admin_init();
    }
}
