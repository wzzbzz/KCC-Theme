<?php

namespace KCC;

class ClientSpecialNeeds extends FormFields
{

    protected $form_fields = [
        [
            "type" => "checkbox",
            "id" => "elderly",
            "name" => "client_special_needs[]",
            "value" => "elderly",
            "label" => "Elderly",
        ],
        [
            "type" => "checkbox",
            "id" => "financial_insufficiency",
            "name" => "client_special_needs[]",
            "value" => "financial_insufficiency",
            "label" => "Financial Insufficiency",
        ],
        [
            "type" => "checkbox_text",
            "id" => "medical_conditions",
            "name" => "client_special_needs[]",
            "value" => "medical_conditions",
            "label" => "Medical Condition(s)",
            "text" => [
                "id" => "medical_conditions_details",
                "name" => "medical_conditions_details",
                "placeholder" => "Please specify any medical conditions",
                "hide_if_unchecked" => true,
            ],
            "text_id" => "medical_conditions_details",
            "text_name" => "medical_conditions_details",
            "text_placeholder" => "Please specify any medical conditions",
            "hide_if_unchecked" => true,
        ],
        [
            "type" => "checkbox",
            "id" => "mentally_disabled",
            "name" => "client_special_needs[]",
            "value" => "mentally_disabled",
            "label" => "Mentally Disabled",
        ],
        [
            "type" => "checkbox",
            "id" => "physically_disabled",
            "name" => "client_special_needs[]",
            "value" => "physically_disabled",
            "label" => "Physically Disabled",
        ],
        [
            "type" => "checkbox",
            "id" => "single_parent",
            "name" => "client_special_needs[]",
            "value" => "single_parent",
            "label" => "Single Parent",
        ],
        [
            "type" => "checkbox_text",
            "id" => "other_special_needs",
            "name" => "client_special_needs[]",
            "value" => "other_special_needs",
            "label" => "Other Special Needs",
            "text" => [
                "id" => "other_special_needs_details",
                "name" => "other_special_needs_details",
                "placeholder" => "Please specify"
            ],
            "text_id" => "other_special_needs_details",
            "text_name" => "other_special_needs_details",
            "text_placeholder" => "Please specify"
        ]
    ];
}
