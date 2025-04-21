<?php

namespace KCC;

class FormField{

    private $form_field;

    public function __construct($form_field){
        $this->form_field = $form_field;
    }

    public function id(){
        return $this->form_field['id'];
    }

    public function type(){
        return $this->form_field['type'];
    }
    public function value(){
        return $this->form_field['value'];
    }
    public function label(){
        return $this->form_field['label'];
    }

    public function select(){
        if(!isset($this->form_field['select'])){
            return false;
        }
        return $this->form_field['select'];
    }

    public function text(){
        if(!isset($this->form_field['text'])){
            return false;
        }
        return $this->form_field['text'];
    }

    public function checkboxes(){
        if(!isset($this->form_field['checkboxes'])){
            return false;
        }
        return $this->form_field['checkboxes'];
    }
    

}