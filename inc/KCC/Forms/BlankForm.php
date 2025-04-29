<?php 

namespace KCC\Forms;

class BlankForm extends Form{
    
    public function __construct( $post_id=0 ) {
        
    }
    
    public function id(){
        return 0;
    }

    public function title(){
        return '';
    }

    public function content(){
        return '';
    }

    public function excerpt(){
        return '';
    }

    public function date($fmt = 'F j, Y'){
        return '';
    }

    public function author_id(){
        return 0;
    }

    public function author(){
        return new \jwc\Wordpress\WPUser( 0 );
    }

    public function type(){
        return '';
    }

    public function meta($key){
        return '';
    }
    
}