<?php

namespace KCC;

class User extends \jwc\Wordpress\WPUser{
    public function __construct($id){
        parent::__construct($id);
    }

    public function send_notification( $args ){

        $subject = $args['subject'] ?? '';
        $body = $args['body'] ?? '';
        $actionlink = $args['action_link'] ?? '';
        $post_id = $args['post_id'] ?? '';
        $emailLogId = $args['emailLogId'] ?? '';
        

        global $wpdb;
        $insert_result = $wpdb->insert(
            'kcc_notifications',
            array(
                'datecreated' => current_time('mysql'),
                'userId' => $this->id(),
                'originSystemPostId' => $post_id, // Set this as needed
                'icontodisplay' => 'fas fa-calendar-alt', // FontAwesome calendar icon
                'title' => $subject,
                'shorttext' => substr($body, 0, 50),
                'linkTo' => $actionlink,
                'emailLogId' => $emailLogId
            ),
            array('%s', '%s', '%d', '%s', '%s', '%s', '%s', '%d')
        );
   
        if ($insert_result === false) {
            echo 'Error inserting into kcc_notifications: ' . $wpdb->last_error;
        }

    }
    
}