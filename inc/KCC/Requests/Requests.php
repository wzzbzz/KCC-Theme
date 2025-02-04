<?php

namespace KCC\Requests;

use KCC\Groups, KCC\Users, KCC\Notifications;


class Requests{

    private $table;

    public function __construct()
    {
        $this->table = 'group_requests';
    }

    public function getPendingRequestsForUser($user_id)
    {
        global $wpdb;
        $sql = "SELECT * FROM {$this->table} WHERE user_id = %d AND status = 'pending'";
        $sql = $wpdb->prepare($sql, $user_id);
        return $wpdb->get_results($sql);
    }

}