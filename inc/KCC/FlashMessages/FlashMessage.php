<?php

namespace KCC\FlashMessages;

class FlashMessage
{
    private $message;
    private $type;

    public function __construct($message, $type)
    {
        $this->message = $message;
        $this->type = $type;
    }

    public function get_type(){
        return $this->type;
    }

    public function get_message(){
        return $this->message;
    }
    
    public function set_type($type){
        $this->type = $type;
    }

    public function set_message($message){
        $this->message = $message;
    }

    public function class(){
        $matrix = ['success'=>'success', 'error'=>'danger', 'warning'=>'warning', 'info'=>'info'];
        return "alert-".$matrix[$this->type];
    }

    public function display(){
        echo "<div class='flash-message {$this->class()}'>{$this->message}</div>";
    }
}