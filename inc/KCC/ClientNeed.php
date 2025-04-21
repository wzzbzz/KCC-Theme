<?php

namespace KCC;

class ClientNeed{

    private $client_need;

    public function __construct($client_need){
        $this->client_need = $client_need;
    }

    public function id(){
        return $this->client_need['id'];
    }

    public function type(){
        return $this->client_need['type'];
    }
    public function value(){
        return $this->client_need['value'];
    }
    public function label(){
        return $this->client_need['label'];
    }

    public function select(){
        if(!isset($this->client_need['select'])){
            return false;
        }
        return $this->client_need['select'];
    }

    public function text(){
        if(!isset($this->client_need['text'])){
            return false;
        }
        return $this->client_need['text'];
    }

}