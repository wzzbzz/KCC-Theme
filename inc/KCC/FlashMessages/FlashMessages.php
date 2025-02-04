<?php

namespace KCC\FlashMessages;

class FlashMessages{

    public function __construct()
    {
        if(!session_id())
            session_start();
        
        if (!isset($_SESSION['flash_messages'])) {
            $_SESSION['flash_messages'] = [];
        }

        add_action('flash_msg', array($this, 'display'));

    }

    public static function add($message, $type = 'success')
    {
        $_SESSION['flash_messages'][] = new FlashMessage($message, $type);
    }

    public function get()
    {

        if (!isset($_SESSION['flash_messages'])) {
            return [];
        }

        $messages = $_SESSION['flash_messages'];
        unset($_SESSION['flash_messages']);

        return $messages;
    }
    
    public function display()
    {
        $messages = $this->get();
        foreach ($messages as $message) {
            $message->display();
        }
    }


}