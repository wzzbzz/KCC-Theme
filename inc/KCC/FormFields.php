<?php

namespace KCC;


class FormFields
{
    protected $form_fields = [];

    public function __construct()
    {
    }

    public function fieldById($id){
        foreach($this->form_fields as $type){
            if($type['id'] == $id){
                return new FormField($type);
            }
        }
        return false;
    }  
    public function getFormFields()
    {
        return $this->form_fields;
    }

    public function fieldsByIdArray( $field_ids )
    {
        $fields = [];
        foreach($this->form_fields as $field){
            if(in_array($field['id'], $field_ids)){
                $fields[] = new FormField($field);
            }
        }
        return $fields;
    }
}