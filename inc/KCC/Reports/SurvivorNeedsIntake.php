<?php

namespace KCC\Reports;

class SurvivorNeedsIntake extends Report
{

    protected $has_applications = true;


    public $client_needs = [

        "rows" => [
            [
                "form-groups" => [
                    [
                        "class" => "col-lg-6 col-md-12 col-sm-12 mb-3",
                        "group-elements" => [
                            [

                                "type" => "checkbox_checkboxes",
                                "id" => "client_needs",
                                "name" => "client_needs[]",
                                "value" => "medical_assistance",
                                "label" => "Medical Assistance",
                                "checkboxes" => [
                                    "class" => "",
                                    "name" => "medical_assistance_needed[]",
                                    "options" => [
                                        ["value" => "Medication", "label" => "Medication", "type" => "checkbox", "parent" => "client_needs", "parent_value" => "medical_assistance", "disabled_if_parent_unchecked" => true],
                                        ["value" => "Medical Care", "label" => "Medical Care", "type" => "checkbox", "parent" => "client_needs", "parent_value" => "medical_assistance",  "disabled_if_parent_unchecked" => true],
                                        ["value" => "Rehydration Solution", "label" => "Rehydration Solution", "type" => "checkbox", "parent" => "client_needs", "parent_value" => "medical_assistance",  "disabled_if_parent_unchecked" => true],
                                        [
                                            "value" => "Nonprescription Treatments",
                                            "label" => "Nonprescription Treatments",
                                            "type" => "checkbox_text",
                                            "disabled_if_parent_unchecked" => true,
                                            "parent" => "client_needs",
                                            "parent_value" => "medical_assistance",
                                            "text" => [
                                                "id" => "nonprescription_treatments_details",
                                                "name" => "nonprescription_treatments_details",
                                                "placeholder" => "Please specify",
                                                "parent" => "medical_assistance_needed",
                                                "parent_value" => "Nonprescription Treatments",
                                                "disabled_if_parent_unchecked" => true,
                                                "class" => "w-100",

                                            ],
                                        ]
                                    ]
                                ]

                            ]

                        ]

                    ],
                    [
                        "class" => "col-lg-6 col-md-12 col-sm-12 mb-3",
                        "group-elements" => [
                            [
                                "type" => "checkbox_checkboxes",
                                "id" => "client_needs",
                                "name" => "client_needs[]",
                                "value" => "child_services",
                                "label" => "Child Services",
                                "checkboxes" => [
                                    "class" => "",
                                    "name" => "child_services_needed[]",

                                    "options" => [
                                        [
                                            "value" => "Child Care",
                                            "label" => "Child Care",
                                            "type" => "checkbox",
                                            "disabled_if_parent_unchecked" => true,
                                            "parent" => "client_needs",
                                            "parent_value" => "child_services",
                                        ],
                                        [
                                            "value" => "Baby Food",
                                            "label" => "Baby Food",
                                            "type" => "checkbox",
                                            "disabled_if_parent_unchecked" => true,
                                            "parent" => "client_needs",
                                            "parent_value" => "child_services",
                                        ],
                                        [
                                            "value" => "Diapers",
                                            "label" => "Diapers",
                                            "type" => "checkbox",
                                            "disabled_if_parent_unchecked" => true,
                                            "parent" => "client_needs",
                                            "parent_value" => "child_services",
                                        ],
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
                            ]
                        ],

                    ]

                ],


            ],
            [
                "form-groups" => [
                    [
                        "class" => "col-lg-6 col-md-12 col-sm-12 mb-3",
                        "group-elements" => [
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
                                        ["value" => "Prepared Meals", "label" => "Prepared Meals", "type" => "checkbox","parent" => "client_needs", "parent_value" => "food_needed", "disabled_if_parent_unchecked" => true],
                                        ["value" => "Canned Food", "label" => "Canned Food", "type" => "checkbox","parent" => "client_needs", "parent_value" => "food_needed", "disabled_if_parent_unchecked" => true],
                                        ["value" => "Rice", "label" => "Rice", "type" => "checkbox", "parent" => "client_needs", "parent_value" => "food_needed", "disabled_if_parent_unchecked" => true],
                                        ["value" => "Beans", "label" => "Beans", "type" => "checkbox","parent" => "client_needs", "parent_value" => "food_needed", "disabled_if_parent_unchecked" => true],
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
                                        ["value" => "Water", "label" => "Water", "type" => "checkbox","parent" => "client_needs", "parent_value" => "water_needed", "disabled_if_parent_unchecked" => true],
                                        ["value" => "Water Filters", "label" => "Water Filters", "type" => "checkbox", "parent" => "client_needs", "parent_value" => "water_needed", "disabled_if_parent_unchecked" => true],
                                        ["value" => "Aquatabs", "label" => "Aquatabs", "type" => "checkbox", "parent" => "client_needs", "parent_value" => "water_needed", "disabled_if_parent_unchecked" => true]
                                    ]
                                ]
                            ],
                        ]
                    ],
                    [
                        "class" => "col-lg-6 col-md-12 col-sm-12 mb-3",

                        "group-elements" => [
                            [
                                "type" => "checkbox",
                                "id" => "temporary_shelter",
                                "name" => "client_needs[]",
                                "value" => "termporary_shelter",
                                "label" => "Temporary Shelter",
                            ],
                            [
                                "type" => "checkbox",
                                "id" => "tarps",
                                "name" => "client_needs[]",
                                "value" => "tarps",
                                "label" => "Tarps",
                            ],
                            [
                                "type" => "checkbox",
                                "id" => "clothing",
                                "name" => "client_needs[]",
                                "value" => "clothing",
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
                                "value" => "space_heaters",
                                "label" => "Space Heaters",
                            ],
                            [
                                "type" => "checkbox_text",
                                "id" => "other_needs",
                                "name" => "client_needs[]",
                                "value" => "other_needs",
                                "label" => "Other Needs",
                                "text" => [
                                    "id" => "other_needs_details",
                                    "name" => "other_needs_details",
                                    "placeholder" => "Please specify",
                                    "parent" => "client_needs",
                                    "parent_value" => "other_needs",
                                    "disabled_if_parent_unchecked" => true,
                                    "class" => "w-100",
                                ]

                            ],
                        ]

                    ]
                ],
            ]
        ],
    ];


    public $client_special_needs = [
        "rows" => [
            [
                "form-groups" => [
                    [
                        "class" => "col-lg-12 col-md-12 col-sm-12 mb-3",
                        "group-elements" => [
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
                                    "parent" => "client_special_needs",
                                    "parent_value" => "medical_conditions",
                                    "disabled_if_parent_unchecked" => true,
                                    "class" => "w-100",
                                ]

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
                                    "placeholder" => "Please specify",
                                    "parent" => "client_special_needs",
                                    "parent_value" => "other_special_needs",
                                    "disabled_if_parent_unchecked" => true,
                                    "class" => "w-100",
                                ],
                                "text_id" => "other_special_needs_details",
                                "text_name" => "other_special_needs_details",
                                "text_placeholder" => "Please specify"
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ];

    public $property_assessment = [];




    public function intake_date($fmt = 'F j, Y')
    {
        $date = $this->meta('intake_date');
        if (empty($date)) {
            return '';
        }
        return date($fmt, strtotime($date));
    }

    public function intake_time($fmt = 'HH:MM')
    {
        $time = $this->meta('intake_time');

        if (empty($time)) {
            return '';
        }
        return date($fmt, strtotime($time));
    }

    public function intake_datetime($fmt = 'F j, Y')
    {
        return $this->intake_date($fmt) . ' ' . $this->intake_time("H:i");
    }

    public function client_phone()
    {
        return $this->meta('client_phone');
    }

    public function client_firstName()
    {
        return $this->meta('client_firstName');
    }

    public function client_lastName()
    {
        return $this->meta('client_lastName');
    }

    public function client_fullName()
    {
        return $this->client_firstName() . ' ' . $this->client_lastName();
    }

    // country state and city use the common meta.
    public function client_country()
    {
        return $this->country();
    }

    public function client_state()
    {
        return $this->state();
    }

    public function client_city()
    {
        return $this->city();
    }

    public function client_address()
    {
        return $this->meta('client_address');
    }

    public function client_zipcode()
    {
        return $this->meta('client_zipcode');
    }

    public function intake_other()
    {
        return $this->meta('intake_other');
    }

    public function client_phone2()
    {
        return $this->meta('client_phone2');
    }

    public function client_preferred_contact_time()
    {
        return $this->meta('client_preferred_contact_time');
    }

    public function client_needs()
    {

        $client_needs_object = new \KCC\ClientNeeds();

        // needs are a comma separated list
        $needs = $this->meta('client_needs');

        if (empty($needs)) {
            return [];
        }

        return $client_needs_object->fieldsByIdArray($needs);
    }

    public function print_client_needs()
    {
        $client_needs = $this->client_needs();


        if (empty($client_needs)) {
            return '';
        }


        $output = '';

        foreach ($client_needs as $client_need) {


            switch ($client_need->type()) {
                case 'checkbox_select':
                    $output .= $client_need->label() . ': ';
                    $select = $client_need->select();

                    if ($select) {
                        $option = $this->meta($select['id']);
                        $output .= $option . '<br>';
                    }
                    break;

                case 'checkbox_text':
                    $text = $this->meta($client_need->id());
                    if (!empty($text)) {
                        $output .= $text . '<br>';
                    }
                    break;

                case 'checkbox_checkboxes':
                    $checkboxes = $client_need->checkboxes();

                    if (!empty($checkboxes)) {
                        $output .= $client_need->label() . ': ';
                        foreach ($checkboxes['options'] as $checkbox) {

                            $checked_boxes = $this->meta(str_replace('[]', '', $checkboxes['name']));
                            if (empty($checked_boxes)) {
                                continue;
                            }

                            foreach ($checked_boxes as $checked_box) {
                                if ($checkbox['value'] == $checked_box) {
                                    $output .= $checkbox['label'] . '<br>';
                                    break;
                                }
                            }
                        }
                    }

                    break;

                case 'checkbox':
                default:
                    $output .= $client_need->label() . '<br>';
                    break;
            }
        }

        return rtrim($output, '<br>');
    }

    public function medical_assistance_needed()
    {
        $medical_assistance_needed = $this->meta('medical_assistance_needed');
        if (empty($medical_assistance_needed)) {
            return '';
        }
        
    }

    public function nonprescription_treatments_details(){

        return $this->meta('nonprescription_treatments_details');
    }

    public function food_needed()
    {
        $food_needed = $this->meta('food_needed');
        if (empty($food_needed)) {
            return [];
        }
        return $food_needed;
    }

    public function water_needed()
    {
        $water_needed = $this->meta('water_needed');
        if (empty($water_needed)) {
            return [];
        }
        return $water_needed;
    }

    public function child_services_needed()
    {
        $child_services_needed = $this->meta('child_services_needed');
        if (empty($child_services_needed)) {
            return [];
        }
        return $child_services_needed;
    }

    public function other_needs_details(){
        $other_client_needs = $this->meta('other_needs_details');
        if (empty($other_client_needs)) {
            return '';
        }
        return $other_client_needs;
    }


    public function client_special_needs()
    {

        $client_needs_object = new \KCC\ClientSpecialNeeds();

        // needs are a comma separated list
        $needs = $this->meta('client_needs');

        if (empty($needs)) {
            return [];
        }

        return $client_needs_object->fieldsByIdArray($needs);
    }

    public function household_demographics(){
        $household_demographics = $this->meta('household_demographics');
        if (empty($household_demographics)) {
            return [];
        }
        return $household_demographics;
    }

    public function demographic_count($demographic){
        $count = $this->meta($demographic);
        if (empty($count)) {
            return 0;
        }
        return $count;
    }

    public function medical_conditions_details(){
        $medical_conditions_details = $this->meta('medical_conditions_details');
        if (empty($medical_conditions_details)) {
            return '';
        }
        return $medical_conditions_details;
        
    }

    public function other_special_needs_details(){
        $other_special_needs_details = $this->meta('other_special_needs_details');
        if (empty($other_special_needs_details)) {
            return '';
        }
        return $other_special_needs_details;
    }

    public function print_household_demographics()
    {

        $age_groups = [
            'Infant' => 'infant',
            'Under 5' => 'under_5',
            'Ages 5-12' => '5-12',
            'Ages 13-18' => '13-18',
            'Ages 19-40' => '19-40',
            'Ages 41-65' => '41-65',
            'Ages 66-80' => '66-80',
            'Ages 81+' => '81+'
        ];

        $genders = ['male', 'female'];
        $output = '';
        foreach ($age_groups as $age_group_label => $age_group) {
            foreach ($genders as $gender) {
                $count = $this->meta($age_group . '_' . $gender);
                if (!empty($count)) {
                    $output .= $age_group_label . ' ' . ucfirst($gender) . ': ' . $count . '<br>';
                }
            }
        }
        return $output;
    }

    public function property_type()
    {
        return $this->meta('property_type');
    }

    public function property_is_damaged()
    {
        return $this->meta('property_is_damaged');
    }

    public function life_safety_issues_present(){
        return $this->meta('life_safety_issues_present');
    }

    public function life_safety_issues(){
        $life_safety_issues = $this->meta('life_safety_issues');
        if (empty($life_safety_issues)) {
            return [];
        }
    }

    public function print_life_safety_issues_present()
    {
        $output = $this->life_safety_issues_present();

        if ($output == 'Yes') {
            $output .= ":";
            $issues = $this->life_safety_issues();
            if (!empty($issues)) {
                foreach ($issues as $issue) {
                    $output .= ' ' . $issue;
                    if ($issue == "Other") {
                        $other = $this->meta('other_life_safety_issues');
                        if (!empty($other)) {
                            $output .= ': ' . $other;
                        }
                    }
                    $output .= ', ';
                }
                return rtrim($output, ', ');
            } else {
                return $output;
            }
        }
    }

    public function recovery_status()
    {
        return $this->meta('recovery_status');
    }

    public function client_is_property_owner()
    {
        return $this->meta('client_is_property_owner');
    }

    public function liability_waiver_checked()
    {
        return $this->meta('liability_waiver');
    }

    public function owner_present_checked()
    {
        return $this->meta('owner_agrees_to_be_present');
    }

    public function owner_oversight_checked()
    {
        return $this->meta('owner_oversight_checked');
    }

    public function family_willing_to_help()
    {
        return $this->meta('willing_to_help');
    }

    public function damaged_floors()
    {


        $damaged_floors = $this->meta('damaged_floors');


        if (empty($damaged_floors)) {
            return [];
        }

        return $damaged_floors;

    }

    public function other_damaged_location()
    {
        return $this->meta('other_damaged_location');
    }

    public function print_damaged_floors(){

        $damaged_floors = $this->damaged_floors();
        foreach ($damaged_floors as $key => $damaged_floor) {
            if ($damaged_floor == 'Other') {
                $other = $this->meta('other_damaged_location');
                if (!empty($other)) {
                    $damaged_floors[$key] = $other;
                }
            } else {
                $damaged_floors[$key] = $key[$damaged_floor];
            }
        }


        return implode(', ', $damaged_floors);
    }

    public function is_standing_water()
    {
        return $this->meta('is_standing_water');
    }

    public function is_mud()
    {
        return $this->meta('is_mud');
    }

    public function damaged_appliances()
    {
        $damaged_appliances = $this->meta('damaged_appliances');
        if (empty($damaged_appliances)) {
            return [];
        }
        return $damaged_appliances;
    }

    public function print_damaged_appliances()
    {
        $damaged_appliances = $this->damaged_appliances();


        if (empty($damaged_appliances)) {
            return '';
        }
        $output = '';

        foreach ($damaged_appliances as $damaged_appliance) {
            $output .= $damaged_appliance;
            if ($damaged_appliance == "Other") {
                $other = $this->meta('other_damaged_appliance');
                if (!empty($other)) {
                    $output .= ': ' . $other;
                }
            }
            $output .= '<br>';
        }

        return preg_replace('/<br>$/', '', $output);
    }

    public function other_damaged_appliance()
    {
        return $this->meta('other_damaged_appliance');
    }

    public function has_insurance()
    {
        return $this->meta('has_insurance');
    }

    public function contacted_others()
    {
        return $this->meta('contacted_others');
    }

    public function print_contacted_others()
    {

        $others_contacted = $this->contacted_others();

        if (empty($others_contacted)) {
            return '';
        }
        $output = '';

        
        foreach ($others_contacted as $contact) {
            $output .= $contact;
            if ($contact == "Other") {
                $other = $this->meta('others_contacted');
                if (!empty($other)) {
                    $output .= ': ' . $other;
                }
            }
            $output .= '<br>';
        }
        return rtrim($output, '<br>');
    }

    public function is_provider()
    {
        return $this->meta('is_provider');
    }

    public function provider_firstName()
    {
        return $this->meta('provider_firstName');
    }
    public function provider_lastName()
    {
        return $this->meta('provider_lastName');
    }
    public function provider_fullName()
    {
        return $this->provider_firstName() . ' ' . $this->provider_lastName();
    }
    public function provider_phone()
    {
        return $this->meta('provider_phone');
    }

    public function provider_phone2()
    {
        return $this->meta('provider_phone2');
    }

    public function provider_email()
    {
        return $this->meta('provider_email');
    }
    public function provider_organization()
    {
        return $this->meta('provider_organization');
    }

    public function provider_website()
    {
        return $this->meta('provider_website');
    }
    public function provider_address()
    {
        return $this->meta('provider_address');
    }
    public function provider_zipcode()
    {
        return $this->meta('provider_zipcode');
    }
    public function provider_country()
    {
        return $this->meta('provider_country');
    }
    public function provider_state()
    {
        return $this->meta('provider_state');
    }
    public function provider_city()
    {
        return $this->meta('provider_city');
    }
    public function provider_other()
    {
        return $this->meta('provider_other');
    }

    public function provider_notes()
    {
        return $this->meta('provider_notes');
    }
}
