<?php


namespace KCC;

class DisasterTypes extends FormFields{

    protected $form_fields = [
        [
            "type"=>"checkbox_select",
            "id"=>"severe_weather",
            "value"=>"severe_weather",
            "label"=>"Severe Weather",
            "select"=>[
                "id"=>"severe_weather_type",
                "name"=>"severe_weather_type",
                "options"=>[
                    ["value" => "Hurricane", "label" => "Hurricane"],
                    ["value" => "Flooding", "label" => "Flooding"],
                    ["value" => "Earthquake", "label" => "Earthquake"],
                    ["value" => "Landslide", "label" => "Landslide"],
                    ["value" => "Severe Heat", "label" => "Severe Heat"],
                    ["value" => "Snowstorm", "label" => "Snowstorm"],
                    ["value" => "Tornado", "label" => "Tornado"],
                ]
            ]
        ],
        [
            "type"=>"checkbox",
            "id"=>"fire_emergency",
            "value"=>"fire_emergency",
            "label"=>"Fire Emergency",
        ],
        [
            "type"=>"checkbox",
            "id"=>"hazardous_material",
            "value"=>"hazardous_material",
            "label"=>"Hazardous Material/Spill/ Chemical Release",
        ],
        [
            "type"=>"checkbox",
            "id"=>"medical_emergency",
            "value"=>"medical_emergency",
            "label"=>"Medical Emergency/Mass Casualty",
        ],
        [
            "type"=>"checkbox",
            "id"=>"missing_persons",
            "value"=>"missing_persons",
            "label"=>"Missing Persons",
        ],
        [
            "type"=>"checkbox",
            "id"=>"utility_outage",
            "value"=>"utility_outage",
            "label"=>"Utility Outage",
        ],
        [
            "type"=>"checkbox_select",
            "id"=>"structural_disaster",
            "value"=>"structural_disaster",
            "label"=>"Structural Disaster",
            "select"=>[
                "id"=>"structural_disaster_type",
                "name"=>"structural_disaster_type",
                "options"=>[
                    ["value" => "Collapse", "label" => "Collapse"],
                    ["value" => "Weakened Structures", "label" => "Weakened Structures"],
                ]
            ]
        ],
        [
            "type"=>"checkbox",
            "id"=>"workplace_violence",
            "value"=>"workplace_violence",
            "label"=>"Workplace Violence or Threat of Violence",
        ],
        [
            "type"=>"checkbox",
            "id"=>"epidemic_pandemic",
            "value"=>"epidemic_pandemic",
            "label"=>"Epidemic / Pandemic Outbreak",
        ],
        [
            "type"=>"checkbox_select",
            "id"=>"terrorist_attack",
            "value" => "terrorist_attack",
            "label"=>"Terrorist Attack",
            "select"=>[
                "id"=>"terrorist_attack_type",
                "name"=>"terrorist_attack_type",
                "options"=>[
                    ["value"=>"Bomb/Explosion","label"=>"Bomb/Explosion"],
                    ["value"=>"Shooting","label"=>"Shooting"],
                    ["value"=>"Biological Attack/Chemical Release", "label"=>"Biological Attack/Chemical Release"]
                ]
            ]
        ],
        [
            "type"=>"checkbox",
            "id"=>"radiological_event",
            "value"=>"radiological_event",
            "label"=>"Radiological Event",
        ],
        [
            "type"=>"checkbox",
            "id"=>"nuclear_power_disasters",
            "label"=>"Nuclear Power Disasters",
            "value"=>"nuclear_power_disasters"
        ],
        [
            "type" => "checkbox_text",
            "id" => "other_disaster",
            "class" => "col-lg-3 col-md-12 col-sm-12 mb-3",
            "name" => "disaster_types[]",
            "value" => "other_disaster",
            "label" => "Other",
            "text" => [
                "id" => "other_disaster",
                "name" => "other_disaster",
                "placeholder" => "Other Disaster Type",
                "hide_if_unchecked" => true,
                "parent" => "other_disaster"

            ],
            "text_id" => "other_disaster_details",
            "text_name" => "other_disaster_details",
            "text_placeholder" => "Disaster Details",
            "hide_if_unchecked" => true,
        ]

    ];


}