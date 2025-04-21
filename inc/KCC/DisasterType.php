<?php

namespace KCC;

class DisasterType{

    private $disaster_type;

    public function __construct($disaster_type){
        $this->disaster_type = $disaster_type;
    }

    public function id(){
        return $this->disaster_type['id'];
    }

    public function type(){
        return $this->disaster_type['type'];
    }
    public function value(){
        return $this->disaster_type['value'];
    }
    public function label(){
        return $this->disaster_type['label'];
    }

    public function select(){
        if(!isset($this->disaster_type['select'])){
            return false;
        }
        return $this->disaster_type['select'];
    }

}