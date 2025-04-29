<?php

namespace KCC\Forms;

class SurvivorNeedsIntakeForm extends Form
{
    protected $report_type_slug = 'survivor-needs-intake';

    protected $abbreviation = 'SNI';

    protected $schema = [
        "form" => [
            "steps" => [
                [
                    "id" => "step-1",
                    "title" => "Information",
                    "fields" => [
                        [
                            "type" => "section",
                            "title" => "Date & Time",
                            "fields" => [
                                [
                                    "type" => "date",
                                    "name" => "intake_date",
                                    "label" => "Date",
                                    "required" => true
                                ],
                                [
                                    "type" => "time",
                                    "name" => "intake_time",
                                    "label" => "Time",
                                    "required" => true
                                ]
                            ]
                        ],
                        [
                            "type" => "section",
                            "title" => "Client Information",
                            "fields" => [
                                [
                                    "type" => "number",
                                    "name" => "intake_phone",
                                    "label" => "Primary Telephone",
                                    "required" => true,
                                    "maxLength" => 10
                                ],
                                [
                                    "type" => "text",
                                    "name" => "intake_firstName",
                                    "label" => "Client First Name",
                                    "required" => true,
                                    "required" => true
                                ],
                                [
                                    "type" => "text",
                                    "name" => "intake_lastName",
                                    "label" => "Client Last Name",
                                    "required" => true,
                                    "required" => true
                                ],
                                [
                                    "type" => "text",
                                    "name" => "intake_address",
                                    "label" => "Address",
                                    "required" => true
                                ],
                                [
                                    "type" => "text",
                                    "name" => "country",
                                    "label" => "Country",
                                    "required" => true
                                ],
                                [
                                    "type" => "text",
                                    "name" => "state",
                                    "label" => "State",
                                    "required" => true
                                ],
                                [
                                    "type" => "text",
                                    "name" => "city",
                                    "label" => "City",
                                    "required" => true
                                ],
                                [
                                    "type" => "number",
                                    "name" => "intake_zip",
                                    "label" => "Zip Code",
                                    "required" => true,
                                    "maxLength" => 6,
                                    "required" => true
                                ],
                                [
                                    "type" => "text",
                                    "name" => "intake_other",
                                    "label" => "Other",
                                    "required" => true
                                ],
                                [
                                    "type" => "number",
                                    "name" => "intake_phone2",
                                    "label" => "Alternative Telephone",
                                    "maxLength" => 10
                                ],
                                [
                                    "type" => "select",
                                    "name" => "intake_contact_time",
                                    "label" => "Best Time to Contact",
                                    "options" => [
                                        ["value" => "", "label" => "Select Time", "default" => true],
                                        ["value" => "Weekday Mornings", "label" => "Weekday Mornings"],
                                        ["value" => "Weekday Afternoons", "label" => "Weekday Afternoons"],
                                        ["value" => "Weekday Nights", "label" => "Weekday Nights"],
                                        ["value" => "Weekend Mornings", "label" => "Weekend Mornings"],
                                        ["value" => "Weekend Afternoons", "label" => "Weekend Afternoons"],
                                        ["value" => "Weekend Nights", "label" => "Weekend Nights"],
                                        ["value" => "Other", "label" => "Other"]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "id" => "step-2",
                    "title" => "Disaster Information",
                    "fields" => [
                        [
                            "type" => "checkbox",
                            "name" => "disaster_type[]",
                            "label" => "Disaster Type - Select all that Apply",
                            "options" => [
                                ["value" => "Hurricane", "label" => "Hurricane"],
                                ["value" => "Flooding", "label" => "Flooding"],
                                ["value" => "Earthquake", "label" => "Earthquake"],
                                ["value" => "Landslide", "label" => "Landslide"],
                                ["value" => "Severe Heat", "label" => "Severe Heat"],
                                ["value" => "Snowstorm", "label" => "Snowstorm"],
                                ["value" => "Tornado", "label" => "Tornado"],
                                ["value" => "Fire Emergency", "label" => "Fire Emergency"],
                                ["value" => "Fire Hazardous Material/Spill/ Chemical Release", "label" => "Fire Hazardous Material/Spill/ Chemical Release"],
                                ["value" => "Medical Emergency/Mass Casualty", "label" => "Medical Emergency/Mass Casualty"],
                                ["value" => "Missing Persons", "label" => "Missing Persons"],
                                ["value" => "Utility Outage", "label" => "Utility Outage"],
                                ["value" => "Structural Disaster", "label" => "Structural Disaster"],
                                ["value" => "Collapse", "label" => "Collapse"],
                                ["value" => "Weakened Structures", "label" => "Weakened Structures"],
                                ["value" => "Workplace Violence or Threat of Violence", "label" => "Workplace Violence or Threat of Violence"],
                                ["value" => "Epidemic / Pandemic Outbreak", "label" => "Epidemic / Pandemic Outbreak"],
                                ["value" => "Terrorist Attack", "label" => "Terrorist Attack"],
                                ["value" => "Nuclear Power Disasters", "label" => "Nuclear Power Disasters"]
                            ]
                        ],
                        [
                            "type" => "checkbox",
                            "name" => "disaster_type_other",
                            "label" => "Other",
                            "options" => [
                                ["value" => "Other", "label" => "Other"]
                            ],
                            "triggers" => [
                                "field" => [
                                    "type" => "text",
                                    "name" => "disaster_type_other",
                                    "label" => "Enter Comments",
                                    "condition" => "checked"
                                ]
                            ]
                        ],
                        [
                            "type" => "checkbox",
                            "name" => "client_needs[]",
                            "label" => "Client Needs - Select all that apply",
                            "options" => [
                                ["value" => "Medical Assistance", "label" => "Medical Assistance"],
                                ["value" => "Child Services", "label" => "Child Services"],
                                ["value" => "Elder Care", "label" => "Elder Care"],
                                ["value" => "Support for persons with disabilities", "label" => "Support for persons with disabilities"],
                                ["value" => "Food", "label" => "Food"],
                                ["value" => "Temporary Shelter", "label" => "Temporary Shelter"],
                                ["value" => "Water", "label" => "Water"],
                                ["value" => "Tarps", "label" => "Tarps"],
                                ["value" => "Clothing", "label" => "Clothing"],
                                ["value" => "Blankets/Sleeping Bags", "label" => "Blankets/Sleeping Bags"],
                                ["value" => "Cleaning Supplies", "label" => "Cleaning Supplies"],
                                ["value" => "Space Heaters", "label" => "Space Heaters"],
                                ["value" => "Bug Repellent", "label" => "Bug Repellent"],
                                ["value" => "Hand Sanitizer", "label" => "Hand Sanitizer"],
                                ["value" => "Mobility Impaired", "label" => "Mobility Impaired"],
                                ["value" => "Single Parent", "label" => "Single Parent"],
                                ["value" => "Single Other", "label" => "Single Other"]
                            ]
                        ],
                        [
                            "type" => "checkbox",
                            "name" => "household_age[]",
                            "label" => "Household Age Demographic - Select all that apply",
                            "options" => [
                                ["value" => "Infant", "label" => "Infant"],
                                ["value" => "Under 5 years old", "label" => "Under 5 years old"],
                                ["value" => "5-12", "label" => "5-12"],
                                ["value" => "13-18", "label" => "13-18"],
                                ["value" => "19-40", "label" => "19-40"],
                                ["value" => "41-65", "label" => "41-65"],
                                ["value" => "66-80", "label" => "66-80"],
                                ["value" => "81+", "label" => "81+"],
                                ["value" => "Other", "label" => "Other"]
                            ]
                        ],
                        [
                            "type" => "text",
                            "name" => "number_mail",
                            "label" => "Number of Male"
                        ],
                        [
                            "type" => "text",
                            "name" => "number_female",
                            "label" => "Number of Female"
                        ],
                        [
                            "type" => "checkbox",
                            "name" => "other_age",
                            "label" => "Age of Other Dependents",
                            "options" => [
                                ["value" => "do_not_say", "label" => "Age of Other Dependents"]
                            ],
                            "triggers" => [
                                "field" => [
                                    "type" => "text",
                                    "name" => "",
                                    "label" => "Enter Age",
                                    "condition" => "checked"
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "id" => "step-3",
                    "title" => "Client Needs",
                    "fields" => ""
                ],
                [
                    "id" => "step-4",
                    "title" => "Property Assessment",
                    "fields" => [
                        [
                            "type" => "select",
                            "name" => "property_type",
                            "label" => "Property Type",
                            "required" => true,
                            "options" => [
                                ["value" => "", "label" => "Select any option", "default" => true],
                                ["value" => "Rented House / Apartment", "label" => "Rented House / Apartment"],
                                ["value" => "Owned House / Apartment", "label" => "Owned House / Apartment"],
                                ["value" => "Landlord Property", "label" => "Landlord Property"],
                                ["value" => "Business Owner", "label" => "Business Owner"],
                                ["value" => "Other", "label" => "Other"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "property_is_damaged",
                            "label" => "Is the property or home damaged due to the current disaster?",
                            "required" => true,
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "safety_issues_present",
                            "label" => "Are there life safety issues present at the worksite?",
                            "required" => true,
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "select",
                            "name" => "recovery_status",
                            "label" => "What is the current recovery status of the property?",
                            "required" => true,
                            "options" => [
                                ["value" => "", "label" => "Select any option", "default" => true],
                                ["value" => "No Work has begun", "label" => "No Work has begun"],
                                ["value" => "Partially Recovered - Still a lot of work to do", "label" => "Partially Recovered - Still a lot of work to do"],
                                ["value" => "Mostly Recovered - There are still problems", "label" => "Mostly Recovered - There are still problems"],
                                ["value" => "Getting Worse - More problems have occurred", "label" => "Getting Worse - More problems have occurred"],
                                ["value" => "Uninhabitable - Declared to be condemned", "label" => "Uninhabitable - Declared to be condemned"],
                                ["value" => "Other", "label" => "Other"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "property_owner",
                            "label" => "Is the Client the property owner?",
                            "required" => true,
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "liability_waiver",
                            "label" => "Is the homeowner willing to sign a liability waiver releasing the volunteers of any damages?",
                            "required" => true,
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "owner_present_checked",
                            "label" => "The client/property owner agrees to be present while volunteers are working",
                            "required" => true,
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "owner_oversight_checked",
                            "label" => "The owner must agree to be present to oversee work being done to their property, secure valuables and contribute to the work when possible. Does the owner agree to these terms?",
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "family_willing_to_help",
                            "label" => "Are client family members or friends willing to help?",
                            "required" => true,
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "property_damage_location",
                            "label" => "What room/floors have been damaged? Select all that apply.",
                            "required" => true,
                            "options" => [
                                ["value" => "Basement", "label" => "Basement"],
                                ["value" => "First Floor", "label" => "First Floor"],
                                ["value" => "Second Floor", "label" => "Second Floor"],
                                ["value" => "Attic", "label" => "Attic"],
                                ["value" => "Garage", "label" => "Garage"],
                                ["value" => "Other", "label" => "Other"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "standing_water",
                            "label" => "Is there standing water in any of the rooms?",
                            "required" => true,
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "is_mud_damage",
                            "label" => "Is there mud or sewage?",
                            "required" => true,
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "damaged_appliances",
                            "label" => "What Appliances & Contents have been damaged?",
                            "required" => true,
                            "options" => [
                                ["value" => "Boiler", "label" => "Boiler"],
                                ["value" => "Furniture", "label" => "Furniture"],
                                ["value" => "Hot Water Heater", "label" => "Hot Water Heater"],
                                ["value" => "Refrigerator", "label" => "Refrigerator"],
                                ["value" => "Stove", "label" => "Stove"],
                                ["value" => "Washer/Dryer", "label" => "Washer/Dryer"],
                                ["value" => "Other", "label" => "Other"]
                            ]
                        ],
                        [
                            "type" => "text",
                            "name" => "insurance_type",
                            "label" => "What type of insurance do you have?",
                            "required" => true
                        ],
                        [
                            "type" => "radio",
                            "name" => "contacted_other",
                            "label" => "Have you contacted other service providers for help?",
                            "required" => true,
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ]
                    ]
                ],
                [
                    "id" => "step-4",
                    "title" => "Service Provider Information",
                    "fields" => [
                        [
                            "type" => "radio",
                            "name" => "is_service_provider",
                            "label" => "Are you a service provider entering this information on behalf of your client?",
                            "required" => true,
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "rf_publish",
                            "label" => "Publish Form To",
                            "required" => true,
                            "options" => [
                                [
                                    "value" => "joined",
                                    "label" => "Select From My Joined Group",
                                    "triggers" => [
                                        "field" => [
                                            "type" => "select",
                                            "name" => "rf_publish",
                                            "label" => "Select any group",
                                            "options" => "dynamic" // Populated from joined groups
                                        ]
                                    ]
                                ],
                                [
                                    "value" => "my_group",
                                    "label" => "Select From My Group",
                                    "triggers" => [
                                        "field" => [
                                            "type" => "select",
                                            "name" => "rf_publish",
                                            "label" => "Select any group",
                                            "options" => "dynamic" // Populated from user's groups
                                        ]
                                    ]
                                ],
                                ["value" => "all_rrn_users", "label" => "All RRN Users"]
                            ]
                        ]
                    ]
                ],
                [
                    "id" => "step-5",
                    "title" => "Complete",
                    "fields" => [
                        [
                            "type" => "submit",
                            "name" => "save",
                            "label" => "Submit",
                            "value" => "save"
                        ]
                    ]
                ],

            ],
            "hidden_fields" => [
                ["type" => "hidden", "name" => "group_id", "value" => "dynamic"],
                ["type" => "hidden", "name" => "rf_id", "value" => "dynamic"],
                ["type" => "hidden", "name" => "report_id", "value" => "SNI-{random}"],
                ["type" => "hidden", "name" => "create_SurvivorNeedIntakeForm", "value" => "reportsforms"],
                ["type" => "hidden", "name" => "reportsforms_nonce", "value" => "dynamic"],
                ["type" => "hidden", "name" => "selected_groupid", "value" => ""]
            ]
        ]

    ];


    private $intake_contact_times = [
        ["value" => "", "label" => "Select Time", "default" => true],
        ["value" => "Weekday Mornings", "label" => "Weekday Mornings"],
        ["value" => "Weekday Afternoons", "label" => "Weekday Afternoons"],
        ["value" => "Weekday Nights", "label" => "Weekday Nights"],
        ["value" => "Weekend Mornings", "label" => "Weekend Mornings"],
        ["value" => "Weekend Afternoons", "label" => "Weekend Afternoons"],
        ["value" => "Weekend Nights", "label" => "Weekend Nights"],
        ["value" => "Other", "label" => "Other"]
    ];

    private $property_types = [
        ["value" => "", "label" => "Select any option", "default" => true],
        ["value" => "Rented House / Apartment", "label" => "Rented House / Apartment"],
        ["value" => "Owned House / Apartment", "label" => "Owned House / Apartment"],
        ["value" => "Landlord Property", "label" => "Landlord Property"],
        ["value" => "Business Owner", "label" => "Business Owner"],
        ["value" => "Other", "label" => "Other"]
    ];

    private $recovery_statuses = [
        ["value" => "", "label" => "Select any option", "default" => true],
        ["value" => "No Work has begun", "label" => "No Work has begun"],
        ["value" => "Partially Recovered - Still a lot of work to do", "label" => "Partially Recovered - Still a lot of work to do"],
        ["value" => "Mostly Recovered - There are still problems", "label" => "Mostly Recovered - There are still problems"],
        ["value" => "Getting Worse - More problems have occurred", "label" => "Getting Worse - More problems have occurred"],
        ["value" => "Uninhabitable - Declared to be condemned", "label" => "Uninhabitable - Declared to be condemned"],
        ["value" => "Other", "label" => "Other"]
    ];

    private $contacted_other_options = [
        ["value" => "Yes", "label" => "Yes"],
        ["value" => "No", "label" => "No"]
    ];

    private $property_damage_locations = [
        ["value" => "Basement", "label" => "Basement"],
        ["value" => "First Floor", "label" => "First Floor"],
        ["value" => "Second Floor", "label" => "Second Floor"],
        ["value" => "Attic", "label" => "Attic"],
        ["value" => "Garage", "label" => "Garage"],
        ["value" => "Other", "label" => "Other"]
    ];

    private $damaged_appliances = [
        ["value" => "Boiler", "label" => "Boiler"],
        ["value" => "Furniture", "label" => "Furniture"],
        ["value" => "Hot Water Heater", "label" => "Hot Water Heater"],
        ["value" => "Refrigerator", "label" => "Refrigerator"],
        ["value" => "Stove", "label" => "Stove"],
        ["value" => "Washer/Dryer", "label" => "Washer/Dryer"],
        ["value" => "Other", "label" => "Other"]

    ];


    private function intake_date()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_date();
        }

        if ($this->autofill) {
            return date('Y-m-d');
        }
        return date('Y-m-d');
    }

    private function intake_time()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_time();
        }
        if ($this->autofill) {
            return date('H:i');
        }
        return date('H:i');
    }

    private function intake_phone()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_phone();
        }

        if ($this->autofill) {
            return "1234567890";
        }
        return '';
    }

    private function intake_firstName()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_firstName();
        }
        if ($this->autofill) {
            return "John";
        }
        return '';
    }

    private function intake_lastName()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_lastName();
        }
        if ($this->autofill) {
            return "Doe";
        }
        return '';
    }

    private function intake_address()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_address();
        }
        if ($this->autofill) {
            return "123 Main St";
        }
        return '';
    }

    private function intake_other()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_other();
        }

        if ($this->autofill) {
            return "Other";
        }
        return '';
    }

    private function intake_phone2()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_phone2();
        }

        if ($this->autofill) {
            return "1234567890";
        }
        return '';
    }

    private function intake_contact_time()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_contact_time();
        }
        if ($this->autofill) {
            return "Weekday Mornings";
        }
        return '';
    }

    private function intake_zipcode()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_zipcode();
        }

        if ($this->autofill) {
            return "12345";
        }
        return '';
    }

    private function property_type()
    {
        if (!empty($this->report_id)) {
            return $this->report->property_type();
        }
        if ($this->autofill) {
            return "Rented House / Apartment";
        }
        return '';
    }

    private function provider_organization()
    {
        if (!empty($this->report_id)) {
            return $this->report->provider_organization();
        }
        if ($this->autofill) {
            return "Organization Name";
        }
        return '';
    }

    private function provider_firstName()
    {
        if (!empty($this->report_id)) {
            return $this->report->provider_firstName();
        }
        if ($this->autofill) {
            return "John";
        }
        return '';
    }

    private function provider_lastName()
    {
        if (!empty($this->report_id)) {
            return $this->report->provider_lastName();
        }
        if ($this->autofill) {
            return "Doe";
        }
        return '';
    }

    private function provider_address()
    {
        if (!empty($this->report_id)) {
            return $this->report->provider_address();
        }
        if ($this->autofill) {
            return "123 Main St";
        }
        return '';
    }

    private function provider_phone()
    {
        if (!empty($this->report_id)) {
            return $this->report->provider_phone();
        }
        if ($this->autofill) {
            return "1234567890";
        }
        return '';
    }

    private function provider_phone2()
    {
        if (!empty($this->report_id)) {
            return $this->report->provider_phone2();
        }
        if ($this->autofill) {
            return "1234567890";
        }
        return '';
    }

    private function provider_zipcode()
    {
        if (!empty($this->report_id)) {
            return $this->report->provider_zipcode();
        }
        if ($this->autofill) {
            return "12345";
        }
        return '';
    }

    private function provider_country()
    {
        if (!empty($this->report_id)) {
            return $this->report->provider_country();
        }
        if ($this->autofill) {
            return "USA";
        }
        return '';
    }

    private function provider_state()
    {
        if (!empty($this->report_id)) {
            return $this->report->provider_state();
        }
        if ($this->autofill) {
            return "NY";
        }
        return '';
    }

    private function provider_city()
    {
        if (!empty($this->report_id)) {
            return $this->report->provider_city();
        }
        if ($this->autofill) {
            return "New York";
        }
        return '';
    }




    public function recovery_status()
    {
        if (!empty($this->report_id)) {
            return $this->report->recovery_status();
        }
        if ($this->autofill) {
            return "No Work has begun";
        }
        return '';
    }


    public function render()
    {
        $this->render_title();
        $this->render_form_box();
    }

    public function render_hidden_fields()
    {
        parent::render_hidden_fields();
?>
        <input type="hidden" name="post_title" value="<?= strtoupper($this->report_slug()); ?>">
    <?php
    }

    public function render_form_box()
    { ?>
        <div class="form-box">

            <div class="report-next-tab">

                <?= $this->render_progress_bar(); ?>

                <div class="row">

                    <div class="col-xl-12">

                        <div class="all-form">

                            <form method="POST" action="" class="row mediadoc_form survieForm" enctype="multipart/form-data">

                                <?php $this->render_hidden_fields(); ?>

                                <div id="step-1" class="main-form-section form-section active w-100">

                                    <div>

                                        <div class="row">

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>Date & Time</h3>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Date *</label>

                                                    <input type="date" class="form-control sur_da" id="intake_date" name="intake_date" value="<?= $this->intake_date(); ?>" placeholder="Enter here">

                                                    <div class="marker" id="sur_da_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Time *</label>

                                                    <input type="time" class="form-control sur_ti" id="intake_time" name="intake_time" value="<?= $this->intake_time(); ?>" placeholder="Enter here">

                                                    <div class="marker" id="sur_ti_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>Client Information</h3>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Client First Name *</label>

                                                    <input type="text" class="form-control sur_fri" id="intake_firstName" name="intake_firstName" placeholder="Enter here" value=" <?= $this->intake_firstName(); ?>" required>

                                                </div>

                                                <div class="marker" id="sur_fri_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Client last name *</label>

                                                    <input type="text" class="form-control sur_last" id="intake_lastName" name="intake_lastName" placeholder="Enter here" value=" <?= $this->intake_lastName()  ?>" required>

                                                </div>

                                                <div class="marker" id="sur_last_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Address *</label>

                                                    <input type="text" class="form-control sur_add" id="intake_address" name="intake_address" placeholder="Enter here" value="<?= $this->intake_address(); ?>" required>

                                                </div>

                                                <div class="marker" id="sur_add_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Country</label>

                                                    <?= Forms::countrySelect('country', 'country', $this->country(), 'state', true); ?>

                                                </div>

                                                <div class="marker" id="sur_coun_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>State</label>

                                                    <?= Forms::stateSelect($this->country(), 'state', 'state', $this->state(), null, true); ?>

                                                </div>

                                                <div class="marker" id="sur_sta_error"></div>

                                            </div>



                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>City</label>

                                                    <input type="text" class="form-control sur_cit" name="city" value="<?= $this->city(); ?>" required>

                                                </div>

                                                <div class="marker" id="sur_cit_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Zip Code *</label>

                                                    <input type="number" class="form-control sur_zip" onKeyPress="if(this.value.length==6) return false;" min="0" name="intake_zipcode" placeholder="Enter here" value="<?= $this->intake_zipcode(); ?>" required>
                                                </div>

                                                <div class="marker" id="sur_zip_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Other *</label>

                                                    <input type="text" class="form-control sur_oth" id="intake_other" name="intake_other" placeholder="Enter here" value="<?= $this->intake_other(); ?>">

                                                </div>

                                                <div class="marker" id="sur_oth_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Primary Telephone *</label>

                                                    <input type="number" class="form-control sur_pri" onKeyPress="if(this.value.length==10) return false;" min="0" name="intake_phone" placeholder="Enter here" value="<?= $this->intake_phone(); ?>">

                                                </div>

                                                <div class="marker" id="sur_pri_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Alternative Telephone</label>

                                                    <input type="number" class="form-control sur_alt" onKeyPress="if(this.value.length==10) return false;" min="0" name="intake_phone2" placeholder="Enter here" value="<?= $this->intake_phone2(); ?>">

                                                </div>

                                                <div class="marker" id="sur_alt_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group select-form-height">

                                                    <label>Best Time to Contact</label>


                                                    <select class="form-control set-postion sur_be" name="intake_contact_time">
                                                        <?php foreach ($this->intake_contact_times as $time) : ?>
                                                            <option value="<?= $time['value'] ?>" <?= $this->intake_contact_time() == $time['value'] ? 'selected' : '' ?>><?= $time['label'] ?></option>
                                                        <?php endforeach; ?>

                                                    </select>

                                                </div>

                                                <div class="marker" id="sur_best_error"></div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-disabled step-button form-next" title="Next" id="step-btn-1">Next</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div id="step-2" class="main-form-section form-section w-100">

                                    <div>

                                        <?= $this->render_disaster_types(); ?>

                                        <div class="row">

                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                                <a href="javascript:void(0);" class="btn btn-primary  step-button form-next" title="Next">Next</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div id="step-3" class="main-form-section form-section w-100">
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-title mb-3">

                                                    <h3>Client Needs</h3>

                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3 d-flex">
                                                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                                    <div class='form-group'>
                                                        <div class='checkbox-checkboxes-container d-flex'>
                                                            <div class='checkbox'>
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input checkbox-checkboxes" value="Medical Assistance" name="client_needs[]">Medical Assistance

                                                                    </label>

                                                                </div>
                                                            </div>
                                                            <div class='checkboxes'>
                                                                <?php
                                                                $medical_assistance_options = [
                                                                    'Medication' => 'Medication',
                                                                    'Medical Care' => 'Medical Care',
                                                                    'Rehydration Solution' => 'Rehydration',
                                                                ];

                                                                foreach ($medical_assistance_options as $value => $label) {
                                                                ?>
                                                                    <div class="form-check d-flex align-items-center">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input"
                                                                                value="<?php echo $value; ?>"
                                                                                name="medical_assistance_needed[]"
                                                                                <?= $this->disabled_if_field_unchecked('medical_assistance_needed', $value); ?>>
                                                                            <?php echo $label; ?>
                                                                        </label>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>

                                                                <div class='checkbox-text-container'>
                                                                    <div class="form-check d-flex align-items-center">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input checkbox-text"
                                                                                value="Nonprescription Treatments"
                                                                                name="medical_assistance_needed[]"
                                                                                <?= $this->disabled_if_field_unchecked('medical_assistance_needed', 'Nonprescription Treatments'); ?>>
                                                                            Nonprescription Treatments
                                                                        </label>
                                                                    </div>
                                                                    <input type="text" class="form-control ins_type"
                                                                        name="non_prescription_treatments"
                                                                        placeholder="Enter treatments"
                                                                        <?= $this->disabled_if_field_empty('non_prescription_treatments'); ?>>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                                    <div class='form-group'>
                                                        <div class='checkbox-checkboxes-container d-flex'>
                                                            <div class='checkbox'>
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input checkbox-checkboxes" value="Child Services" name="client_needs[]">Child Services

                                                                    </label>

                                                                </div>
                                                            </div>
                                                            <div class='checkboxes'>

                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input" value="Baby Food" name="child_services_needed" <?= $this->disabled_if_field_unchecked('child_services_needed', 'Baby Food'); ?>>Baby Food

                                                                    </label>

                                                                </div>
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input" value="Diapers" name="child_services_needed" <?= $this->disabled_if_field_unchecked('child_services_needed', 'Diapers'); ?>>Diapers

                                                                    </label>

                                                                </div>
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input" value="Child Care" name="child_services_needed" <?= $this->disabled_if_field_unchecked('child_services_needed', 'Child Care'); ?>>Child Care

                                                                    </label>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input checkbox-checkboxes" value="Elder Care" name="client_needs[]">Elder Care

                                                            </label>

                                                        </div>
                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input checkbox-checkboxes" value="Support For Persons With Disabilities" name="client_needs[]">Support For Persons With Disabilities

                                                            </label>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3 d-flex">
                                                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                                    <div class='form-group'>
                                                        <div class='checkbox-checkboxes-container d-flex'>
                                                            <div class='checkbox'>
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input checkbox-checkboxes" value="Food" name="client_needs[]">Food

                                                                    </label>

                                                                </div>
                                                            </div>
                                                            <div class='checkboxes'>

                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input" value="Prepared Meals" name="food_needed[]" <?= $this->disabled_if_field_unchecked('food_needed', 'Prepared Meals'); ?>>Prepared Meals

                                                                    </label>

                                                                </div>
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input" value="Canned Food" name="food_needed[]" <?= $this->disabled_if_field_unchecked('food_needed', 'Canned Food'); ?>>Canned Food

                                                                    </label>

                                                                </div>
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input" value="Rice" name="food_needed[]" <?= $this->disabled_if_field_unchecked('food_needed', 'Rice'); ?>>Rice

                                                                    </label>

                                                                </div>
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input" value="Beans" name="food_needed[]" <?= $this->disabled_if_field_unchecked('food_needed', 'Beans'); ?>>Beans

                                                                    </label>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class='checkbox-checkboxes-container d-flex'>
                                                            <div class='checkbox'>
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input checkbox-checkboxes" value="Water" name="client_needs[]">Water

                                                                    </label>

                                                                </div>
                                                            </div>
                                                            <div class='checkboxes'>

                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input" value="Water" name="water_needed[]" <?= $this->disabled_if_field_unchecked('water_needed', 'Water'); ?>>Water

                                                                    </label>

                                                                </div>
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input" value="Water Filters" name="water_needed[]" <?= $this->disabled_if_field_unchecked('water_needed', 'Water Filters'); ?>>Water Filters

                                                                    </label>

                                                                </div>
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input" value="Aquatabs" name="water_needed[]" <?= $this->disabled_if_field_unchecked('water_needed', 'Aquatabs'); ?>>Aquatabs

                                                                    </label>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                                    <div class="form-group">
                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input checkbox-checkboxes" value="Temporary Shelter" name="client_needs[]">Temporary Shelter

                                                            </label>

                                                        </div>
                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input checkbox-checkboxes" value="Tarps" name="client_needs[]">Tarps

                                                            </label>

                                                        </div>
                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input checkbox-checkboxes" value="Clothing" name="client_needs[]">Clothing

                                                            </label>

                                                        </div>
                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input checkbox-checkboxes" value="Cleaning Supplies" name="client_needs[]">Cleaning Supplies

                                                            </label>

                                                        </div>
                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input checkbox-checkboxes" value="Space Heaters" name="client_needs[]">Space Heaters

                                                            </label>

                                                        </div>

                                                        <div class='checkbox-text-container'>
                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="checkbox" class="form-check-input checkbox-text" value="Other" name="client_needs[]">Other

                                                                </label>

                                                            </div>
                                                            <input type="text" class="form-control ins_type" name="other_client_needs" placeholder="Enter Other Client Needs" <?= $this->disabled_if_field_empty('non_prescription_treatments'); ?>>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-title mb-3">

                                                    <h3>Client Special Needs</h3>
                                                    <p>As best you can, please describe all special conditions that make it difficult or impossible for you or your family to access the resource that you need on your own.</p>

                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3 d-flex">
                                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                                    <div class='form-group'>
                                                        <div class='checkboxes'>

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="checkbox" class="form-check-input" value="Elderly" name="client_special_needs[]">Elderly

                                                                </label>

                                                            </div>
                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="checkbox" class="form-check-input" value="Financial Insufficiency" name="client_special_needs[]">Financial Insufficiency

                                                                </label>

                                                            </div>
                                                            <div class='checkbox-textarea-container mb-3'>
                                                                <div class="form-check d-flex align-items-center">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input checkbox-textarea" value="Medical Condition" name="client_special_needs[]">Medical Condition
                                                                    </label>
                                                                </div>
                                                                <div class="textarea-container" <?= $this->displayNoneIfFieldUnchecked('client_special_needs', 'Medical Condition'); ?>>
                                                                    <textarea class="form-control" name="medical_condition" rows="3" placeholder="Enter any medical conditions" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="checkbox" class="form-check-input" value="Mentally Disabled" name="client_special_needs[]">Mentally Disabled

                                                                </label>

                                                            </div>
                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="checkbox" class="form-check-input" value="Physically Disabled" name="client_special_needs[]">Physically Disabled

                                                                </label>

                                                            </div>
                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="checkbox" class="form-check-input" value="Single Parent" name="client_special_needs[]">Single Parent

                                                                </label>

                                                            </div>
                                                            <div class='checkbox-text-container'>
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input checkbox-text" value="Other" name="client_special_needs[]">Other

                                                                    </label>

                                                                </div>
                                                                <input type="text" class="form-control ins_type" name="other_special_needs" placeholder="Enter other needs">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-title mb-3">

                                                    <h3>Household Demographics</h3>

                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3 d-flex">
                                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                                    <div class='form-group'>
                                                        <div class="row">
                                                            <?php
                                                            $age_groups = [
                                                                'Infant' => 'Infant',
                                                                'Under 5' => 'Under 5 years old',
                                                                'Ages 5-12' => '5-12',
                                                                'Ages 13-18' => '13-18',
                                                                'Ages 19-40' => '19-40',
                                                                'Ages 41-65' => '41-65',
                                                                'Ages 66-80' => '66-80',
                                                                'Ages 81+' => '81+'
                                                            ];

                                                            foreach ($age_groups as $label => $value) {
                                                            ?>
                                                                <div class="col-lg-6 mb-3">
                                                                    <div class="form-check d-flex align-items-center mb-2">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input demographic-checkbox"
                                                                                value="<?php echo $value; ?>"
                                                                                name="household_demographics[]"
                                                                                data-group="<?php echo sanitize_title($value); ?>">
                                                                            <?php echo $label; ?>
                                                                        </label>
                                                                    </div>
                                                                    <div class="demographic-counts" id="<?php echo sanitize_title($value); ?>_counts" style="display: none; margin-left: 20px;">
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <div class="form-group">
                                                                                    <label>Number of Males:</label>
                                                                                    <input type="number" min="0" class="form-control"
                                                                                        name="<?php echo sanitize_title($value); ?>_male"
                                                                                        placeholder="Males">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <div class="form-group">
                                                                                    <label>Number of Females:</label>
                                                                                    <input type="number" min="0" class="form-control"
                                                                                        name="<?php echo sanitize_title($value); ?>_female"
                                                                                        placeholder="Females">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                                <a href="javascript:void(0);" class="btn btn-primary  step-button form-next" title="Next">Next</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="step-4" class="main-form-section form-section w-100">

                                    <div>

                                        <div class="row">

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>Property Type *</h3>

                                                </div>
                                                <div class="marker" id="prop_type_error"> </div>

                                                <select id="property_type" name="property_type" class="form-control propert_type">
                                                    <?php foreach ($this->property_types as $type) : ?>
                                                        <option value="<?= $type['value']; ?>" <?= ($this->property_type() == $type['value'] || (isset($type['default']) && $type['default'] && empty($this->property_type()))) ? 'selected' : ''; ?>>
                                                            <?= $type['label']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>

                                            </div>

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>Is the property or home damaged due to the current disaster? *</h3>

                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 mb-3 d-flex">
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input pro_con" value="Yes" name="property_condition">Yes

                                                        </label>

                                                    </div>
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input" value="No" name="property_condition">No

                                                        </label>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group col-lg-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>Are there life safety issues present at the worksite? *</h3>

                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 mb-3 d-flex">

                                                    <div class="radios-checkboxes-container">

                                                        <div class='radio-checkboxes-container d-flex justify-content-start'>
                                                            <div class="radio">
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="radio" class="form-check-input li_fe radio-checkboxes" value="Yes" name="has_life_safety">Yes

                                                                    </label>

                                                                </div>
                                                            </div>
                                                            <div class="checkboxes" style="display:none">

                                                                <div class="form-check d-flex align-items-center">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" value="Collapsed Foundation" name="life_safety_issues[]">
                                                                        Collapsed Foundation
                                                                    </label>
                                                                </div>
                                                                <div class="form-check d-flex align-items-center">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" value="Exposed Electrical" name="life_safety_issues[]">
                                                                        Exposed Electrical
                                                                    </label>
                                                                </div>
                                                                <div class="form-check d-flex align-items-center">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" value="Gas Leaks" name="life_safety_issues[]">
                                                                        Gas Leaks
                                                                    </label>
                                                                </div>
                                                                <div class="form-check d-flex align-items-center">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" value="Water Leaks" name="life_safety_issues[]">
                                                                        Water Leaks
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-text-container">
                                                                    <div class="form-check d-flex align-items-center">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input checkbox-text" value="Other" name="life_safety_issues[]">
                                                                            Other
                                                                        </label>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="other_life_safety_issues" placeholder="Specify other safety issues">
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="radio-checkboxes-container">
                                                            <div class="radio">
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="radio" class="form-check-input radio-checkboxes" value="No" name="has_life_safety">No

                                                                    </label>

                                                                </div>
                                                            </div>
                                                            <div class="checkboxes"></div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group col-lg-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>What is the current recovery status of the property? *</h3>

                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group select-form">

                                                        <div class="marker" id="rec_status_error"></div>

                                                        <select id="recovery_status" name="recovery_status" class="form-control rec_status">

                                                            <option value="" slected>Select any value</option>

                                                            <option value="No Work has begun">No Work has begun</option>

                                                            <option value="Partially Recovered - Still a lot of work to do ">Partially Recovered - Still a lot of work to do </option>

                                                            <option value="Mostly Recovered - There are still problems">Mostly Recovered - There are still problems</option>

                                                            <option value="Getting Worse - More problems have occured">Getting Worse - More problems have occured</option>

                                                            <option value="Uninhabitable - Declared to be condemned">Uninhabitable - Declared to be condemned </option>

                                                            <option value="Other">Other</option>

                                                        </select>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group col-lg-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>Is the Client the property owner? *</h3>

                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 mb-3 d-flex">
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input pro_con" value="Yes" name="client_is_property_owner">Yes

                                                        </label>

                                                    </div>
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input" value="No" name="client_is_property_owner">No

                                                        </label>

                                                    </div>
                                                </div>

                                            </div>



                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>Is the homeowner willing to sign a liability waiver releasing the volunteers of any damages? *</h3>
                                                    <p><em>The property owner must sign a liability waiver for work to be done.</em></p>


                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 mb-3 d-flex">
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input pro_con" value="Yes" name="liability_waiver">Yes

                                                        </label>

                                                    </div>
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input" value="No" name="liability_waiver">No

                                                        </label>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>The client/property owner agrees to be present while volunteers are working *</h3>
                                                    <p><em>Note: The owner must agree to be present to oversee work being done to their property, secure valuables and contribute to the work when possible.</em></p>

                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 mb-3 d-flex">

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input own_pr" value="Yes" name="owner_present">Yes

                                                        </label>

                                                    </div>

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input" value="No" name="owner_present">No

                                                        </label>

                                                    </div>


                                                    <div class="marker" id="own_pr_error"></div>

                                                </div>

                                            </div>

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>Are client family members or friends willing to help? *</h3>

                                                </div>

                                                <div class="col-12 col-lg-3 mb-3 d-flex">

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input wil_to" value="Yes" name="willing_to_help">Yes

                                                        </label>

                                                    </div>

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input" value="No" name="willing_to_help">No

                                                        </label>

                                                    </div>

                                                </div>

                                            </div>



                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>What room/floors have been damaged? Select all that apply.*</h3>

                                                </div>

                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input" value="Basement" name="property_type">Basement

                                                        </label>

                                                    </div>

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input" value="First Floor" name="property_type">First Floor

                                                        </label>

                                                    </div>

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input" value="Second Floor" name="property_type">Second Floor

                                                        </label>

                                                    </div>

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input" value="Attic" name="property_type">Attic

                                                        </label>

                                                    </div>

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input" value="Garage" name="property_type">Garage

                                                        </label>

                                                    </div>

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input prop_yes" value="Other" name="property_type">Other

                                                        </label>

                                                    </div>

                                                </div>

                                            </div>


                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>Is there standing water in any of the rooms? *</h3>

                                                </div>

                                                <div class="col-lg-6 mb-3 d-flex">
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input is_wa" value="Yes" name="is_standing_water">Yes

                                                        </label>

                                                    </div>
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input" value="No" name="is_standing_water">No

                                                        </label>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group col-lg-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>Is there mud or sewage? *</h3>

                                                </div>
                                                <div class="col-lg-6 mb-3 d-flex">
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input is_mus" value="Yes" name="is_mud">Yes

                                                        </label>

                                                    </div>

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input" value="No" name="is_mud">No

                                                        </label>

                                                    </div>

                                                </div>


                                            </div>


                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>What Appliances & Contents have been damaged? *</h3>

                                                </div>

                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input" value="Boiler" name="damaged_appliances[]">Boiler

                                                        </label>

                                                    </div>
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input" value="Furniture" name="damaged_appliances[]">Furniture

                                                        </label>

                                                    </div>
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input" value="Hot Water Heater" name="damaged_appliances[]">Hot Water Heater

                                                        </label>

                                                    </div>
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input" value="Refrigerator" name="damaged_appliances[]">Refrigerator

                                                        </label>

                                                    </div>
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input" value="Stove" name="damaged_appliances[]">Stove

                                                        </label>

                                                    </div>

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input" value="Washer/Dryer" name="damaged_appliances[]">Washer/Dryer

                                                        </label>

                                                    </div>

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input da_oth" value="Other" name="damaged_appliances[]">Other

                                                        </label>

                                                    </div>

                                                </div>

                                            </div>


                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                <div class="form-title mb-3">
                                                    <h3>Do you have insurance?</h3>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="radio" class="form-check-input cont_yes" value="Yes" name="has_insurance">Yes

                                                        </label>

                                                    </div>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" value="No" name="has_insurance">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>Have you contacted any other other service providers for help? *</h3>

                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" class="form-check-input cont_yes" value="FEMA" name="contacted_others[]">FEMA

                                                        </label>

                                                    </div>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" value="No" name="contacted_others[]">Other
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                                <a href="javascript:void(0);" class="btn btn-primary  step-button form-next" title="Next">Next</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div id="step-5" class="main-form-section form-section w-100">

                                    <div>

                                        <div class="row">

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title mb-3">

                                                    <h3>Are you a service provider entering this information on behalf of your client? *</h3>

                                                </div>

                                            </div>


                                            <div class="col-12 col-lg-6 mb-3 d-flex">

                                                <div class="form-check d-flex align-items-center">

                                                    <label class="form-check-label">

                                                        <input type="radio" class="form-check-input" value="Yes" name="on_behalf">Yes

                                                    </label>

                                                </div>

                                                <div class="form-check d-flex align-items-center">

                                                    <label class="form-check-label">

                                                        <input type="radio" class="form-check-input" value="No" name="on_behalf">No

                                                    </label>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 mb-3">

                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>Organization *</label>

                                                        <input type="text" class="form-control sur_fri" id="provider_organization" name="provider_organization" placeholder="Enter here" value=" <?= $this->provider_organization(); ?>" required>

                                                    </div>

                                                    <div class="marker" id="sur_fri_error"></div>

                                                </div>
                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>First Name *</label>

                                                        <input type="text" class="form-control sur_fri" id="provider_firstName" name="provider_firstName" placeholder="Enter here" value=" <?= $this->provider_firstName(); ?>" required>

                                                    </div>

                                                    <div class="marker" id="sur_fri_error"></div>

                                                </div>

                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>Last name *</label>

                                                        <input type="text" class="form-control sur_last" id="provider_lastName" name="provider_lastName" placeholder="Enter here" value=" <?= $this->provider_lastName()  ?>" required>

                                                    </div>

                                                    <div class="marker" id="sur_last_error"></div>

                                                </div>
                                            </div>
                                            <div class='col-lg-12 mb-3'>

                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>Address *</label>

                                                        <input type="text" class="form-control sur_add" id="provider_address" name="provider_address" placeholder="Enter here" value="<?= $this->provider_address(); ?>" required>

                                                    </div>

                                                    <div class="marker" id="sur_add_error"></div>

                                                </div>

                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>Country</label>

                                                        <?= Forms::countrySelect('provider_country', 'provicer_country', $this->provider_country(), 'provider_state', true); ?>

                                                    </div>

                                                    <div class="marker" id="sur_coun_error"></div>

                                                </div>

                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>State</label>

                                                        <?= Forms::stateSelect($this->country(), 'provider_state', 'provider_state', $this->provider_state(), null, true); ?>

                                                    </div>

                                                    <div class="marker" id="sur_sta_error"></div>

                                                </div>



                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>City</label>

                                                        <input type="text" class="form-control sur_cit" name="provider_city" value="<?= $this->provider_city(); ?>" required>

                                                    </div>

                                                    <div class="marker" id="sur_cit_error"></div>

                                                </div>

                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>Zip Code *</label>

                                                        <input type="number" class="form-control sur_zip" onKeyPress="if(this.value.length==6) return false;" min="0" name="provider_zipcode" placeholder="Enter here" value="<?= $this->provider_zipcode(); ?>" required>
                                                    </div>

                                                    <div class="marker" id="sur_zip_error"></div>

                                                </div>



                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>Primary Telephone *</label>

                                                        <input type="number" class="form-control sur_pri" onKeyPress="if(this.value.length==10) return false;" min="0" name="provider_phone" placeholder="Enter here" value="<?= $this->provider_phone(); ?>">

                                                    </div>

                                                    <div class="marker" id="sur_pri_error"></div>

                                                </div>

                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>Alternative Telephone</label>

                                                        <input type="number" class="form-control sur_alt" onKeyPress="if(this.value.length==10) return false;" min="0" name="provider_phone2" placeholder="Enter here" value="<?= $this->provider_phone2(); ?>">

                                                    </div>

                                                    <div class="marker" id="sur_alt_error"></div>

                                                </div>
                                            </div>


                                        </div>

                                        <div class="row mt-3">

                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                                <a href="javascript:void(0);" class="btn btn-primary  step-button form-next" title="Next">Next</a>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div id="step-6" class="main-form-section form-section w-100">

                                    <div>



                                        <div class="row">


                                            <?= $this->render_audience_section(); ?>
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                                <button class="btn btn-outline-primary" value="save" name="save" title="Submit">Submit</button>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>


<?php
    }
}
