<?php


namespace KCC;

class ClientNeeds extends FormFields
{

    protected $form_fields = [
        [

            "type" => "checkbox_checkboxes",
            "id" => "medical_assistance",
            "name" => "client_needs[]",
            "value" => "medical_assistance",
            "label" => "Medical Assistance",
            "checkboxes" => [
                "class" => "",
                "name" => "medical_assistance_needed[]",
                "options" => [
                    ["value" => "Medication", "label" => "Medication", "type" => "checkbox", "parent"=>"client_needs", "parent_value"=>"medical_assistance", "disabled_if_parent_unchecked" => true],
                    ["value" => "Medical Care", "label" => "Medical Care", "type" => "checkbox", "parent"=>"client_needs", "parent_value"=>"medical_assistance",  "disabled_if_parent_unchecked" => true],
                    ["value" => "Rehydration Solution", "label" => "Rehydration Solution", "type" => "checkbox", "parent"=>"client_needs", "parent_value"=>"medical_assistance",  "disabled_if_parent_unchecked" => true],
                    [
                        "value" => "Nonprescription Treatments",
                        "label" => "Nonprescription Treatments",
                        "type" => "checkbox_text",
                        "disable_if_unchecked" => true,
                        "parent"=>"client_needs",
                        "parent_value"=>"medical_assistance",
                        "disabled_if_parent_unchecked" => true,
                        "text" => [
                            "id" => "nonprescription_treatments_details",
                            "name" => "nonprescription_treatments_details",
                            "placeholder" => "Please specify",
                            "parent"=>"client_needs",
                            "parent_value"=>"medical_assistance",
                            "disabled_if_parent_unchecked" => true,

                        ],
                        "text_id" => "nonprescription_treatments_details",
                        "text_name" => "nonprescription_treatments_details",
                        "text_placeholder" => "Please specify"
                    ]
                ]
            ]

        ],
        [
            "type" => "checkbox_checkboxes",
            "id" => "child_services",
            "name" => "client_needs[]",
            "value" => "child_services",
            "label" => "Child Services",
            "checkboxes" => [
                "class" => "",
                "name" => "child_services_needed[]",
                "disable_if_field_unchecked" => true,
                "options" => [
                    ["value" => "Child Care", "label" => "Child Care", "type" => "checkbox", "parent"=>"client_needs", "disabled_if_parent_unchecked" => true],
                    ["value" => "Baby Food", "label" => "Baby Food", "type" => "checkbox", "disable_if_unchecked" => true],
                    ["value" => "Diapers", "label" => "Diapers", "type" => "checkbox", "disable_if_unchecked" => true],
                ]
            ]

        ],
        [
            "type" => "checkbox",
            "id" => "elder_care",
            "name" => "client_needs[]",
            "value" => "elder_care",
            "label" => "Elder Care",
        ],
        [
            "type" => "checkbox",
            "id" => "support_for_disabilities",
            "name" => "client_needs[]",
            "value" => "support_for_persons_with_disabilities",
            "label" => "Support For Persons With Disabilities",
        ],
        [
            "type" => "checkbox_checkboxes",
            "id" => "food_needed",
            "name" => "client_needs[]",
            "value" => "food_needed",
            "label" => "Food Needed",
            "checkboxes" => [
                "class" => "",
                "name" => "food_needed[]",
                "options" => [
                    ["value" => "Prepared Meals", "label" => "Prepared Meals", "type" => "checkbox", "disable_if_unchecked" => true],
                    ["value" => "Canned Food", "label" => "Canned Food", "type" => "checkbox", "disable_if_unchecked" => true],
                    ["value" => "Rice", "label" => "Rice", "type" => "checkbox", "disable_if_unchecked" => true],
                    ["value" => "Beans", "label" => "Beans", "type" => "checkbox", "disable_if_unchecked" => true],
                ]
            ]
        ],

        [
            "type" => "checkbox_checkboxes",
            "id" => "water_needed",
            "name" => "client_needs[]",
            "value" => "water_needed",
            "label" => "Water Needed",
            "checkboxes" => [
                "class" => "",
                "name" => "water_needed[]",
                "options" => [
                    ["value" => "Water", "label" => "Water", "type" => "checkbox", "disable_if_unchecked" => true],
                    ["value" => "Water Filters", "label" => "Water Filters", "type" => "checkbox", "disable_if_unchecked" => true],
                    ["value" => "Aquatabs", "label" => "Aquatabs", "type" => "checkbox", "disable_if_unchecked" => true]
                ]
            ]
        ],
        [
            "type" => "checkbox",
            "id" => "temporary_shelter",
            "name" => "client_needs[]",
            "value" => "Temporary Shelter",
            "label" => "Temporary Shelter",
        ],
        [
            "type" => "checkbox",
            "id" => "tarps",
            "name" => "client_needs[]",
            "value" => "Tarps",
            "label" => "Tarps",
        ],
        [
            "type" => "checkbox",
            "id" => "clothing",
            "name" => "client_needs[]",
            "value" => "Clothing",
            "label" => "Clothing",
        ],
        [
            "type" => "checkbox",
            "id" => "cleaning_supplies",
            "name" => "client_needs[]",
            "value" => "Cleaning Supplies",
            "label" => "Cleaning Supplies",
        ],
        [
            "type" => "checkbox",
            "id" => "space_heaters",
            "name" => "client_needs[]",
            "value" => "Space Heaters",
            "label" => "Space Heaters",
        ],
        [
            "type" => "checkbox_text",
            "id" => "other_needs",
            "name" => "client_needs[]",
            "value" => "other_needs",
            "label" => "Other Needs",
            "text" => [
                "id" => "other_needs",
                "name" => "other_needs",
                "placeholder" => "Please specify",
                "hide_if_unchecked" => true,
                "parent" => "client_needs",
                "parent_value" => "other_needs",
                "disabled_if_parent_unchecked" => true,
            ],
            "text_id" => "other_needs_details",
            "text_name" => "other_needs_details",
            "text_placeholder" => "Please specify"
        ],

    ];
}
