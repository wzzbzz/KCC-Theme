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
                            "name" => "client_need[]",
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
                            "name" => "property_condition",
                            "label" => "Is the property or home damaged due to the current disaster?",
                            "required" => true,
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "life_safety",
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
                            "name" => "owner_present",
                            "label" => "The client/property owner agrees to be present while volunteers are working",
                            "required" => true,
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "agree_terms",
                            "label" => "The owner must agree to be present to oversee work being done to their property, secure valuables and contribute to the work when possible. Does the owner agree to these terms?",
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "willing_to_help",
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
                            "name" => "is_water",
                            "label" => "Is there standing water in any of the rooms?",
                            "required" => true,
                            "options" => [
                                ["value" => "Yes", "label" => "Yes"],
                                ["value" => "No", "label" => "No"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "is_mud",
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
                            "name" => "on_behalf",
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

        if($this->autofill){
            return date('Y-m-d');
        }
        return date('Y-m-d');
    }

    private function intake_time()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_time();
        }
        if($this->autofill){
            return date('H:i');
        }
        return date('H:i');
    }

    private function intake_phone()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_phone();
        }

        if($this->autofill){
            return "1234567890";
        }
        return '';
    }

    private function intake_firstName()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_firstName();
        }
        if($this->autofill){
            return "John";
        }
        return '';
    }

    private function intake_lastName()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_lastName();
        }
        if($this->autofill){
            return "Doe";
        }
        return '';
    }

    private function intake_address()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_address();
        }
        if($this->autofill){
            return "123 Main St";
        }
        return '';
    }

    private function intake_other()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_other();
        }

        if($this->autofill){
            return "Other";
        }
        return '';
    }

    private function intake_phone2()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_phone2();
        }

        if($this->autofill){
            return "1234567890";
        }
        return '';
    }

    private function intake_contact_time()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_contact_time();
        }
        if($this->autofill){
            return "Weekday Mornings";
        }
        return '';
    }

    private function intake_zipcode()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_zipcode();
        }

        if($this->autofill){
            return "12345";
        }
        return '';
    }

    private function property_type()
    {
        if (!empty($this->report_id)) {
            return $this->report->property_type();
        }
        if($this->autofill){
            return "Rented House / Apartment";
        }
        return '';
    }

    public function recovery_status()
    {
        if (!empty($this->report_id)) {
            return $this->report->recovery_status();
        }
        if($this->autofill){
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
    {
?>
        <div class="form-box">

            <div class="report-next-tab">

                <?php $this->render_progress_bar(); ?>

                <div class="row">

                    <div class="col-xl-12">

                        <div class="all-form">

                            <form id="myForm" name="form" method="POST" action="" class="row mediadoc_form" id="disaster_media" enctype="multipart/form-data">

                                <?= $this->render_hidden_fields(); ?>

                                <div id="step-1" class="main-form-section w-100 form-section active">

                                    <div>

                                        <div class="row">

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Date & Time</h3>

                                                </div>

                                            </div>



                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Date *</label>

                                                    <input type="date" class="form-control sur_da" name="intake_date" placeholder="Enter here" value="<?= $this->intake_date() ?>">

                                                </div>

                                                <div class="marker" id="sur_da_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Time *</label>

                                                    <input type="time" class="form-control sur_ti" name="intake_time" placeholder="Intake Time" value="<?= $this->intake_time() ?>">

                                                </div>

                                                <div class="marker" id="sur_ti_error"></div>

                                            </div>

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Client Information</h3>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Client First Name *</label>

                                                    <input type="text" class="form-control sur_cl" name="intake_firstName" placeholder="Enter here" value="<?= $this->intake_firstName() ?>" required>

                                                </div>

                                                <div class="marker" id="sur_cl_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Client last name *</label>

                                                    <input type="text" class="form-control sur_la" name="intake_lastName" placeholder="Enter here" value="<?= $this->intake_lastName() ?>" required>

                                                </div>

                                                <div class="marker" id="sur_la_error"></div>

                                            </div>


                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Country</label>

                                                    <input type="text" class="form-control sur_co" name="country" value="<?= $this->country() ?>" required>

                                                </div>

                                                <div class="marker" id="sur_co_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>State</label>

                                                    <input type="text" class="form-control sur_st" name="state" value="<?= $this->state() ?>" required>

                                                </div>

                                                <div class="marker" id="sur_st_error"></div>

                                            </div>



                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>City</label>

                                                    <input type="text" class="form-control sur_ci" name="city" value="<?= $this->city() ?>" required>

                                                </div>

                                            </div>


                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Address *</label>

                                                    <input type="text" class="form-control sur_add" name="intake_address" placeholder="Enter here" value="<?= $this->intake_address() ?>" required>

                                                </div>

                                                <div class="marker" id="sur_add_error"></div>

                                            </div>




                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Zip Code *</label>

                                                    <input type="number" class="form-control sur_zi" name="intake_zip" onKeyPress="if(this.value.length==6) return false;" min="0" placeholder="Enter here" value="<?= $this->intake_zipcode(); ?>" required>

                                                </div>

                                                <div class="marker" id="sur_zi_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Other *</label>

                                                    <input type="text" class="form-control sur_oth" name="intake_other" placeholder="Enter here" value="<?= $this->intake_other() ?>">

                                                </div>

                                                <div class="marker" id="sur_oth_error"></div>

                                            </div>




                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Primary Telephone *</label>

                                                    <input type="number" class="form-control sur_pr" name="intake_phone" onKeyPress="if(this.value.length==10) return false;" min="0" placeholder="Enter here" value="<?= $this->intake_phone() ?>" required>

                                                    <!--<input type="number"  onfocusout ="validatePhone()" class="form-control sur_pr"  name="intake_phone" placeholder="Enter here" value="<//?php echo get_post_meta($rf_id,'rf_country',true)?>">-->



                                                </div>

                                                <div class="marker" id="sur_pr_error"></div>

                                            </div>


                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Alternative Telephone</label>

                                                    <input type="number" class="form-control sur_al" onKeyPress="if(this.value.length==10) return false;" min="0" name="intake_phone2" placeholder="Enter here" value="<?= $this->intake_phone2(); ?>">

                                                </div>

                                                <div class="marker" id="sur_al_error"></div>

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

                                                <div class="marker" id="sur_be_error"></div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- <div class="col-lg-6 d-flex justify-content-end">

                                    <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                </div> -->

                                        <div class="col-lg-12 d-flex justify-content-center">

                                            <a href="javascript:void(0);" class="btn btn-primary step-button form-next" title="Next">Next</a>

                                        </div>

                                    </div>

                                </div>

                        </div>

                        <div id="step-2" class="main-form-section w-100 form-section">

                            <?= $this->render_disaster_types(); ?>
                            <div class="row">

                                <!-- <div class="col-lg-6 d-flex justify-content-end">

                                <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                            </div> -->

                                <div class="col-lg-12 d-flex justify-content-center">

                                <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                            <a href="javascript:void(0);" class="btn btn-primary  step-button form-next" title="Next">Next</a>


                                </div>

                            </div>

                        </div>

                        <div id="step-3" class="main-form-section w-100 form-section">

                            <div>

                                <div class="row">

                                    <div class="col-lg-6 mb-3">

                                        <div class="form-title">

                                            <h3>Property Type *</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 mb-3">

                                        <div class="form-title">

                                            <h3>Is the property or home damaged due to the current disaster? *</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 mb-3">

                                        <div class="form-group select-form">

                                            <select id="property_type" name="property_type" class="form-control sur_pro">

                                                <?php foreach ($this->property_types as $type) : ?>

                                                    <option value="<?= $type['value'] ?>" <?= $this->property_type() == $type['value'] ? 'selected' : '' ?>><?= $type['label'] ?></option>

                                                <?php endforeach; ?>

                                            </select>

                                        </div>

                                        <div class="marker" id="sur_pro_error"></div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input pro_con" value="Yes" name="property_condition">Yes

                                            </label>

                                        </div>

                                        <div class="marker" id="pro_con_error"></div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="No" name="property_condition">No

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-3">

                                        <div class="form-title">

                                            <h3>Are there life safety issues present at the worksite? *</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-3">

                                        <div class="form-title">

                                            <h3>What is the current recovery status of the property? *</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-3">

                                        <div class="form-title">

                                            <h3>Is the Client the property owner? *</h3>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input li_fe" value="Yes" name="life_safety">Yes

                                            </label>

                                        </div>

                                        <div class="marker" id="li_fe_error"></div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="No" name="life_safety">No

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-3">

                                        <div class="form-group select-form">

                                            <select id="recovery_status" name="recovery_status" class="form-control sur_se">

                                                <?php
                                                foreach($this->recovery_statuses as $status) :
                                                ?>
                                                    <option value="<?= $status['value'] ?>" <?= $this->recovery_status() == $status['value'] ? 'selected' : '' ?>><?= $status['label'] ?></option>
                                                <?php endforeach; ?>

                                            </select>

                                        </div>

                                        <div class="marker" id="sur_se_error"></div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input pro_ow" value="Yes" name="property_owner">Yes

                                            </label>

                                        </div>

                                        <div class="marker" id="pro_ow_error"></div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="No" name="property_owner">No

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 mb-3">

                                        <div class="form-title">

                                            <h3>Is the homeowner willing to sign a liability waiver releasing the volunteers of any damages? *</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 mb-3">

                                        <div class="form-title">

                                            <h3>The client/property owner agrees to be present while volunteers are working *</h3>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-3 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input la_yes" value="Yes" name="liability_waiver">Yes

                                            </label>

                                        </div>

                                        <div class="marker" id="la_yes_error"></div>

                                    </div>

                                    <div class="col-12 col-lg-3 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="No" name="liability_waiver">No

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-3 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input ow_pr" value="Yes" name="owner_present">Yes

                                            </label>

                                        </div>

                                        <div class="marker" id="pro_ow_error"></div>

                                    </div>

                                    <div class="col-12 col-lg-3 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="No" name="owner_present">No

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 mb-3">

                                        <div class="form-title">

                                            <h3>The owner must agree to be present to oversee work being done to their property, secure valuables and contribute to the work when possible. Does the owner agree to these terms?</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 mb-3">

                                        <div class="form-title">

                                            <h3>Are client family members or friends willing to help? *</h3>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-3 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input ag_yes" value="Yes" name="agree_terms">Yes

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-3 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="No" name="agree_terms">No

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-3 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input will_yes" value="Yes" name="willing_to_help">Yes

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-3 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="No" name="willing_to_help">No

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-lg-12 mb-3">

                                        <div class="form-title">

                                            <h3>What room/floors have been damaged? Select all that apply.*</h3>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="Basement" name="property_type">Basement

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="First Floor" name="property_type">First Floor

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="Second Floor" name="property_type">Second Floor

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="Attic" name="property_type">Attic

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="Garage" name="property_type">Garage

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input pro_yes" value="Other" name="property_type">Other

                                            </label>

                                        </div>

                                        <div class="marker" id="pro_yes_error"></div>

                                    </div>

                                    <div class="col-lg-4 mb-3">

                                        <div class="form-title">

                                            <h3>Is there standing water in any of the rooms? *</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-3">

                                        <div class="form-title">

                                            <h3>Is there mud or sewage? *</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-12"></div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input is_yes" value="Yes" name="is_water">Yes

                                            </label>

                                        </div>

                                        <div class="marker" id="is_yes_error"></div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input is_yes" value="No" name="is_water">No

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input mu_yes" value="Yes" name="is_mud">Yes

                                            </label>

                                        </div>

                                        <div class="marker" id="mu_yes_error"></div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="No" name="is_mud">No

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-lg-12"></div>



                                    <!--  -->

                                    <!--   <div class="col-12 col-lg-2 mb-3">

                                    <div class="form-check d-flex align-items-center">

                                        <label class="form-check-label">

                                            <input type="radio" class="form-check-input" value="Central Air" name="disaster_type[]">Central Air

                                        </label>

                                    </div>

                                </div>

                                <div class="col-12 col-lg-2 mb-3">

                                    <div class="form-check d-flex align-items-center">

                                        <label class="form-check-label">

                                            <input type="radio" class="form-check-input" value="Electric Service" name="disaster_type[]">Electric Service

                                        </label>

                                    </div>

                                </div>

                                <div class="col-12 col-lg-2 mb-3">

                                    <div class="form-check d-flex align-items-center">

                                        <label class="form-check-label">

                                            <input type="radio" class="form-check-input" value="Gas Service" name="disaster_type[]">Gas Service

                                        </label>

                                    </div>

                                </div>

                                <div class="col-12 col-lg-2 mb-3">

                                    <div class="form-check d-flex align-items-center">

                                        <label class="form-check-label">

                                            <input type="radio" class="form-check-input" value="Water" name="disaster_type[]">Water

                                        </label>

                                    </div>

                                </div>

                                <div class="col-12 col-lg-2 mb-3">

                                    <div class="form-check d-flex align-items-center">

                                        <label class="form-check-label">

                                            <input type="radio" class="form-check-input" value="Other" name="disaster_type[]">Other

                                        </label>

                                    </div>

                                </div> -->

                                    <div class="col-lg-12 mb-3">

                                        <div class="form-title">

                                            <h3>What Appliances & Contents have been damaged? *</h3>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-1 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="Boiler" name="damage_contents">Boiler

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="Furniture" name="damage_contents">Furniture

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="Hot Water Heater" name="damage_contents">Hot Water Heater

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="Refrigerator" name="damage_contents">Refrigerator

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="Stove" name="damage_contents">Stove

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="Washer/Dryer" name="damage_contents">Washer/Dryer

                                            </label>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-1 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input da_co" value="Other" name="damage_contents">Other

                                            </label>

                                        </div>

                                        <div class="marker" id="da_co_error"></div>

                                    </div>

                                    <div class="col-lg-6 mb-3">

                                        <div class="form-title">

                                            <h3>What type of insurance do you have? *</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-6 mb-3">

                                        <div class="form-title">

                                            <h3>Have you contacted other service providers for help? *</h3>

                                        </div>

                                    </div>



                                    <div class="col-lg-6 mb-3">

                                        <div class="form-group select-form">

                                            <input type="text" class="form-control ins_type" name="insurance_type" placeholder="Enter here">

                                        </div>

                                        <div class="marker" id="ins_type_error"></div>

                                    </div>

                                    <div class="col-12 col-lg-3 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input con_yes" value="Yes" name="contacted_other">Yes

                                            </label>

                                        </div>

                                        <div class="marker" id="con_yes_error"></div>

                                    </div>

                                    <div class="col-12 col-lg-3 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="No" name="contacted_other">No

                                            </label>

                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <!-- <div class="col-lg-6 d-flex justify-content-end">

                                    <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                </div> -->

                                    <div class="col-lg-12 d-flex justify-content-center">

                                    <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                            <a href="javascript:void(0);" class="btn btn-primary  step-button form-next" title="Next">Next</a>


                                    </div>

                                </div>

                            </div>

                        </div>

                        <div id="step-4" class="main-form-section w-100 form-section">

                            <div>

                                <div class="row">

                                    <div class="col-lg-12 mb-3">

                                        <div class="form-title">

                                            <h3>Are you a service provider entering this information on behalf of your client? *</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-12"></div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input on_be" value="Yes" name="on_behalf">Yes

                                            </label>

                                        </div>

                                        <div class="marker" id="on_be_error"></div>

                                    </div>

                                    <div class="col-12 col-lg-2 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" class="form-check-input" value="No" name="on_behalf">No

                                            </label>

                                        </div>

                                    </div>

                                </div>

                                <div class="row mt-3">

                                    <!-- <div class="col-lg-6 d-flex justify-content-end">

                                    <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                </div> -->

                                    <div class="col-lg-12 d-flex justify-content-center">

                                    <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                            <a href="javascript:void(0);" class="btn btn-primary  step-button form-next" title="Next">Next</a>


                                        <!-- <button class="btn btn-primary" title="Next" name="save" value="save">Next</button>-->

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div id="step-5" class="main-form-section w-100 form-section">

                            <div>


                                <?= $this->render_audience_section(); ?>
                                <div class="row">

                                    <div class="col-lg-12 mb-3">

                                        <div class="bg-ligt-color">

                                            <div class="form-title">

                                                <h3>Are you sure to submit form ?</h3>

                                            </div>

                                        </div>

                                    </div>



                                </div>

                                <div class="row">



                                    <div class="col-lg-12 d-flex justify-content-center">

                                        <button class="btn btn-primary" title="Next" name="save" value="save">Submit</button>

                                        <!--<button class="btn btn-outline-primary" value="finish" name="finish" title="Save Draft">Finish</button>-->

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
