<?php
/* encapsulates a row in the group_requests table */
namespace KCC\Requests;

use KCC\Groups, KCC\Users, KCC\Notifications;

class Request{

    protected $data;

    public function __construct( $data )
    {
        $this->data = $data;
    }

    public function id()
    {
        return $this->data->id;
    }

    public function group_id(){
        return $this->data->group_id;
    }

    public function invited_from(){
        return $this->data->invited_from;
    }

    public function invited_to(){
        return $this->data->invited_to;
    }

    public function joined_open_user(){
        return $this->data->joined_open_user;
    }

    public function status(){
        return $this->data->status;
    }

    public function request_type(){
        return $this->data->request_type;
    }

    public function create_at(){
        return $this->data->created_at;
    }
}