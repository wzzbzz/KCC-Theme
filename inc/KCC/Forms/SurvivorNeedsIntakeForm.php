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
                                    "name" => "client_phone",
                                    "label" => "Primary Telephone",
                                    "required" => true,
                                    "maxLength" => 10
                                ],
                                [
                                    "type" => "text",
                                    "name" => "client_firstName",
                                    "label" => "Client First Name",
                                    "required" => true,
                                    "required" => true
                                ],
                                [
                                    "type" => "text",
                                    "name" => "client_lastName",
                                    "label" => "Client Last Name",
                                    "required" => true,
                                    "required" => true
                                ],
                                [
                                    "type" => "text",
                                    "name" => "client_address",
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
                                    "name" => "client_phone2",
                                    "label" => "Alternative Telephone",
                                    "maxLength" => 10
                                ],
                                [
                                    "type" => "select",
                                    "name" => "client_preferred_contact_time",
                                    "label" => "Best Time to Contact",
                                    "options" => [
                                        ["value" => "", "label" => "Select Time", "default" => true],
                                        ["value" => "Weekday Mornings", "label" => "Weekday Mornings"],
                                        ["value" => "Weekday Afternoons", "label" => "Weekday Afternoons"],
                                        ["value" => "Weekday Nights", "label" => "Weekday Nights"],
                                        ["value" => "Weekend Mornings", "label" => "Weekend Mornings"],
                                        ["value" => "Weekend Afternoons", "label" => "Weekend Afternoons"],
                                        ["value" => "Weekend Nights", "label" => "Weekend Nights"],
                                        ["value" => "Other", "label" => "Other Time"]
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
                            "name" => "owner_agrees_to_be_present_checked",
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
                    "id" => "step-5",
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


    private $client_preferred_contact_times = [
        ["value" => "", "label" => "Select Time", "default" => true],
        ["value" => "Weekday Mornings", "label" => "Weekday Mornings"],
        ["value" => "Weekday Afternoons", "label" => "Weekday Afternoons"],
        ["value" => "Weekday Nights", "label" => "Weekday Nights"],
        ["value" => "Weekend Mornings", "label" => "Weekend Mornings"],
        ["value" => "Weekend Afternoons", "label" => "Weekend Afternoons"],
        ["value" => "Weekend Nights", "label" => "Weekend Nights"],
        ["value" => "Other", "label" => "Other Contact Time"]
    ];

    private $property_types = [
        ["value" => "", "label" => "Select any option", "default" => true],
        ["value" => "Rented House / Apartment", "label" => "Rented House / Apartment"],
        ["value" => "Owned House / Apartment", "label" => "Owned House / Apartment"],
        ["value" => "Landlord Property", "label" => "Landlord Property"],
        ["value" => "Business Owner", "label" => "Business Owner"],
        ["value" => "Other", "label" => "Other Property Type"]
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
            return date("Y-m-d", strtotime($this->report->intake_date()));
        }

        if ($this->autofill) {
            return date('Y-m-d');
        }
        return date('Y-m-d');
    }

    private function intake_time()
    {
        if (!empty($this->report_id)) {
            return $this->report->intake_time("H:i");
        }
        if ($this->autofill) {
            return date('H:i');
        }
        return date('H:i');
    }

    private function client_phone()
    {
        if (!empty($this->report_id)) {
            return $this->report->client_phone();
        }

        if ($this->autofill) {
            return "1234567890";
        }
        return '';
    }

    private function client_firstName()
    {
        if (!empty($this->report_id)) {
            return $this->report->client_firstName();
        }
        if ($this->autofill) {
            return "John";
        }
        return '';
    }

    private function client_lastName()
    {
        if (!empty($this->report_id)) {
            return $this->report->client_lastName();
        }
        if ($this->autofill) {
            return "Doe";
        }
        return '';
    }

    private function client_address()
    {
        if (!empty($this->report_id)) {
            return $this->report->client_address();
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

    private function client_phone2()
    {
        if (!empty($this->report_id)) {
            return $this->report->client_phone2();
        }

        if ($this->autofill) {
            return "1234567890";
        }
        return '';
    }

    private function client_preferred_contact_time()
    {
        if (!empty($this->report_id)) {
            return $this->report->client_preferred_contact_time();
        }
        if ($this->autofill) {
            return "Weekday Mornings";
        }
        return '';
    }

    private function client_zipcode()
    {
        if (!empty($this->report_id)) {
            return $this->report->client_zipcode();
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
        if (empty($this->report_id)) {
            $user = new \KCC\User(get_current_user_id());
            return $user->country();
        } else {
            return $this->report->provider_country();
        }
    }

    private function provider_state()
    {
        if (empty($this->report_id)) {
            $user = new \KCC\User(get_current_user_id());
            return $user->state();
        } else {
            return $this->report->provider_state();
        }
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

    private function provider_email()
    {

        if (!empty($this->report_id)) {
            return $this->report->provider_email();
        }
        if ($this->autofill) {
            return "test@test.com";
        }
        return '';
    }

    private function provider_website()
    {
        if (!empty($this->report_id)) {
            return $this->report->provider_website();
        }
        if ($this->autofill) {
            return "https://www.example.com";
        }
        return '';
    }

    private function provider_notes()
    {
        if (!empty($this->report_id)) {
            return $this->report->provider_notes();
        }
        if ($this->autofill) {
            return "Notes about the provider";
        }
        return '';
    }

    protected function nonprescription_treatments_details()
    {
        if (!empty($this->report_id)) {
            return $this->report->nonprescription_treatments_details();
        }
        if ($this->autofill) {
            return "Details about non-prescription treatments";
        }
        return '';
    }

    protected function other_needs_details()
    {
        if (!empty($this->report_id)) {
            return $this->report->other_needs_details();
        }
        if ($this->autofill) {
            return "Details about other needs";
        }
        return '';
    }

    protected function medical_conditions_details()
    {
        if (!empty($this->report_id)) {
            return $this->report->medical_conditions_details();
        }
        if ($this->autofill) {
            return "Details about medical conditions";
        }
        return '';
    }

    protected function other_special_needs_details()
    {
        if (!empty($this->report_id)) {
            return $this->report->other_special_needs_details();
        }
        if ($this->autofill) {
            return "Details about other special needs";
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
                                                    <h3>Required permissions</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 mb-3 questionnaire">
                                                <div class="form-group w-100">

                                                    <div class="form-title mb-3">
                                                        <h3>Is the homeowner willing to sign a liability waiver releasing the volunteers of any damages? *</h3>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3 d-flex">
                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="radio" class="form-check-input questionnaire-radio pro_con" value="Yes" name="liability_waiver" required <?= $this->checkIfReportValueMatches("liability_waiver_checked", "Yes"); ?>>Yes

                                                            </label>

                                                        </div>
                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="radio" class="form-check-input questionnaire-radio" value="No" name="liability_waiver" <?= $this->checkIfReportValueMatches("liability_waiver_checked", "no"); ?>>No

                                                            </label>

                                                        </div>
                                                    </div>

                                                    <div class="form-error col-lg-12">
                                                        <em>The property owner must sign a liability waiver for work to be done.</em>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3 questionnaire">

                                                    <div class="form-title mb-3">

                                                        <h3>The client/property owner agrees to be present while volunteers are working *</h3>

                                                    </div>

                                                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3 d-flex">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="radio" class="form-check-input questionnaire-radio own_pr" value="Yes" name="owner_agrees_to_be_present" required <?= $this->checkIfReportValueMatches("owner_present_checked", "Yes"); ?>>Yes

                                                            </label>

                                                        </div>

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="radio" class="form-check-input  questionnaire-radio" value="No" name="owner_agrees_to_be_present" <?= $this->checkIfReportValueMatches("owner_present_checked", "No"); ?>>No

                                                            </label>

                                                        </div>

                                                    </div>
                                                    <div class="form-error col-lg-12">
                                                        <em>The owner must agree to be present to oversee work being done to their property, secure valuables and contribute to the work when possible.</em>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-lg-12 mb-3 d-lg-flex d-md-block d-sm-block">

                                                <div class="form-title mb-3">

                                                    <h3>Date & Time</h3>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 mb-3 d-lg-flex d-md-block d-sm-block">
                                                <?php
                                                $args = array(
                                                    'name' => 'intake_date',
                                                    'id' => 'intake_date',
                                                    'label' => 'Intake Date',
                                                    'value' => $this->intake_date(),
                                                    'required' => true,
                                                    'class' => 'form-control sur_da',
                                                    'containter-class' => 'col-lg-4 mb-3',
                                                    'disabled' => false
                                                );
                                                $this->render_date_picker($args);
                                                ?>

                                                <?php
                                                $args = array(
                                                    'name' => 'intake_time',
                                                    'id' => 'intake_time',
                                                    'label' => 'Intake Time',
                                                    'value' => $this->intake_time(),
                                                    'required' => true,
                                                    'class' => 'form-control sur_ti',
                                                    'containter-class' => 'col-lg-4 mb-3',
                                                    'disabled' => false
                                                );
                                                $this->render_time_picker($args);
                                                ?>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 mb-3 d-lg-flex d-md-block d-sm-block">

                                                <div class="form-title mb-3">

                                                    <h3>Client Information</h3>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 mb-3 d-lg-flex d-md-block d-sm-block">
                                                <?php
                                                $args = array(
                                                    'id' => 'client_firstName',
                                                    'name' => 'client_firstName',
                                                    'label' => 'Client First Name *',
                                                    'value' => $this->client_firstName(),
                                                    'required' => true,
                                                    'container-class' => 'col-lg-4 mb-3',
                                                    'class' => 'form-control',
                                                    'disabled' => false,
                                                    'error_message' => 'Please enter a valid first name',
                                                );
                                                $this->render_text_input($args);

                                                $args = array(
                                                    'id' => 'client_lastName',
                                                    'name' => 'client_lastName',
                                                    'label' => 'Client Last Name *',
                                                    'value' => $this->client_lastName(),
                                                    'required' => true,
                                                    'container-class' => 'col-lg-4 mb-3',
                                                    'class' => 'form-control',
                                                    'disabled' => false,
                                                    'error_message' => 'Please enter a valid last name',
                                                );

                                                $this->render_text_input($args);


                                                ?>
                                            </div>

                                            <div class="col-lg-12 mb-3 d-lg-flex d-md-block d-sm-blockp">

                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>Country</label>

                                                        <?php
                                                        $args = [
                                                            'id' => 'country',
                                                            'name' => 'country',
                                                            'selected' => $this->country(),
                                                            'change_target' => 'state',
                                                            'required' => true,
                                                        ];
                                                        echo Forms::countrySelect($args);
                                                        ?>

                                                    </div>

                                                    <div class="form-error" id="sur_coun_error">Please select a country</div>

                                                </div>

                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>State</label>

                                                        <?php
                                                        $args = [
                                                            'id' => 'state',
                                                            'name' => 'state',
                                                            'selected' => $this->state(),
                                                            'required' => true,
                                                            'country' => $this->country(),
                                                        ];
                                                        echo Forms::stateSelect($args);
                                                        ?>

                                                    </div>

                                                    <div class="form-error" id="sur_sta_error">Please select a state</div>

                                                </div>

                                                <?php

                                                $args = array(
                                                    'id' => 'city',
                                                    'name' => 'city',
                                                    'label' => 'City',
                                                    'value' => $this->city(),
                                                    'required' => true,
                                                    'container-class' => 'col-lg-4 mb-3',
                                                    'class' => 'form-control sur_cit',
                                                    'disabled' => false,
                                                    'error_message' => 'Please enter a valid city',
                                                );
                                                $this->render_text_input($args);
                                                ?>

                                            </div>
                                            <div class="col-lg-12 mb-3 d-lg-flex d-md-block d-sm-block">

                                                <?php
                                                $args = array(
                                                    'id' => 'client_address',
                                                    'name' => 'client_address',
                                                    'label' => 'Address *',
                                                    'value' => $this->client_address(),
                                                    'required' => true,
                                                    'container-class' => 'col-lg-4 mb-3',
                                                    'class' => 'form-control sur_add',
                                                    'disabled' => false,
                                                    'error_message' => 'Please enter a valid address',
                                                );
                                                $this->render_text_input($args);
                                                ?>

                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>Zip / Postal Code *</label>

                                                        <input type="number" class="form-control sur_zip" onKeyPress="if(this.value.length==6) return false;" min="0" name="client_zipcode" placeholder="Enter here" value="<?= $this->client_zipcode(); ?>" required>
                                                    </div>

                                                    <div class="form-error" id="sur_zip_error">Zip or postal code is required</div>

                                                </div>


                                                <?php
                                                $args = array(
                                                    "id" => 'intake_other_address',
                                                    "name" => 'intake_other',
                                                    "label" => 'Other Address Information',
                                                    "value" => $this->intake_other(),
                                                    "required" => false,
                                                    "container-class" => 'col-lg-4 mb-3',
                                                    "class" => 'form-control sur_oth',
                                                    "disabled" => false,
                                                    "error_message" => '',
                                                    "placeholder" => 'Enter here'
                                                );
                                                $this->render_text_input($args);
                                                ?>

                                            </div>

                                            <div class="col-lg-12 mb-3 d-lg-flex d-md-block d-sm-block">

                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>Primary Telephone *</label>

                                                        <input type="number" class="form-control sur_pri" onKeyPress="if(this.value.length==10) return false;" min="0" name="client_phone" placeholder="Enter here" value="<?= $this->client_phone(); ?>" required>

                                                    </div>

                                                    <div class="form-error" id="">Primary telephone # is required</div>

                                                </div>

                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group">

                                                        <label>Alternative Telephone</label>

                                                        <input type="number" class="form-control sur_alt" onKeyPress="if(this.value.length==10) return false;" min="0" name="client_phone2" placeholder="Enter here" value="<?= $this->client_phone2(); ?>">

                                                    </div>

                                                    <div class="form-error" id="sur_alt_error"></div>

                                                </div>

                                                <div class="col-lg-4 mb-3">

                                                    <div class="form-group select-form-height">

                                                        <label>Best Time to Contact</label>


                                                        <select class="form-control set-postion sur_be" name="client_preferred_contact_time">
                                                            <?php foreach ($this->client_preferred_contact_times as $time) : ?>
                                                                <option value="<?= $time['value'] ?>" <?= $this->client_preferred_contact_time() == $time['value'] ? 'selected' : '' ?>><?= $time['label'] ?></option>
                                                            <?php endforeach; ?>

                                                        </select>

                                                    </div>

                                                    <div class="form-error" id="sur_best_error"></div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-disabled step-button form-next" title="Next" id="step-btn-1">Next</a>
                                        </div>
                                    </div>
                                </div>

                                <div id="step-2" class="main-form-section form-section w-100">


                                    <?= $this->render_disaster_types(); ?>

                                    <div class="row">

                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                            <a href="javascript:void(0);" class="btn btn-primary  step-button form-next" title="Next">Next</a>

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
                                            <?php $this->render_client_needs(); ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-title mb-3">

                                                    <h3>Client Special Needs</h3>
                                                    <p>As best you can, please describe all special conditions that make it difficult or impossible for you or your family to access the resource that you need on your own.</p>

                                                </div>
                                            </div>
                                            <?= $this->render_client_special_needs(); ?>

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
                                                                'Infant' => 'infant',
                                                                'Under 5' => 'under_5',
                                                                'Ages 5-12' => '5-12',
                                                                'Ages 13-18' => '13-18',
                                                                'Ages 19-40' => '19-40',
                                                                'Ages 41-65' => '41-65',
                                                                'Ages 66-80' => '66-80',
                                                                'Ages 81+' => '81+'
                                                            ];


                                                            foreach ($age_groups as $label => $value) {

                                                                if (!empty($this->report)) {
                                                                    $checked = $this->checkIfReportValueMatches("household_demographics", $value);
                                                                    $is_checked = ($checked == "checked");
                                                                    $males_count = $this->report->demographic_count(sanitize_title($value) . "_male");
                                                                    $females_count = $this->report->demographic_count(sanitize_title($value) . "_female");
                                                                } else {
                                                                    $checked = '';
                                                                    $is_checked = false;
                                                                    $males_count = 0;
                                                                    $females_count = 0;
                                                                }
                                                            ?>
                                                                <div class="col-12 mb-3">
                                                                    <div class="form-check d-flex align-items-center mb-2">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox" class="form-check-input demographic-checkbox"
                                                                                value="<?php echo $value; ?>"
                                                                                name="household_demographics[]"
                                                                                data-group="<?php echo sanitize_title($value); ?>"
                                                                                <?= $checked; ?>>
                                                                            <?php echo $label; ?>
                                                                        </label>
                                                                    </div>
                                                                    <div class="demographic-counts" id="<?php echo sanitize_title($value); ?>_counts" <?php if (!$is_checked): ?>style="display: none; margin-left: 20px;" <?php endif; ?>>
                                                                        <div class="row">
                                                                            <div class="col-3">
                                                                                <div class="form-group">
                                                                                    <label>Number of Males:</label>
                                                                                    <input type="number" min="0" class="form-control"
                                                                                        name="<?php echo sanitize_title($value); ?>_male"
                                                                                        placeholder=""
                                                                                        value="<?= $is_checked ? $males_count : "0"; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-3">
                                                                                <div class="form-group">
                                                                                    <label>Number of Females:</label>
                                                                                    <input type="number" min="0" class="form-control"
                                                                                        name="<?php echo sanitize_title($value); ?>_female"
                                                                                        placeholder=""
                                                                                        value="<?= $is_checked ? $females_count : "0"; ?>">
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
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                            <a href="javascript:void(0);" class="btn btn-primary  step-button form-next" title="Next">Next</a>
                                        </div>
                                    </div>

                                </div>

                                <div id="step-4" class="main-form-section active form-section w-100">

                                    <div>

                                        <div class="row">

                                            <div class='radios-conditional w-100'>
                                                <div class="col-12 radios">

                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                        <div class="form-title mb-3">

                                                            <h3>Is the property or home damaged due to the current disaster? *</h3>

                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-sm-12 mb-3 d-flex">
                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Yes" name="property_is_damaged" <?= $this->checkIfReportValueMatches("property_is_damaged", "Yes"); ?>>Yes

                                                                </label>

                                                            </div>
                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="property_is_damaged" <?= $this->checkIfReportValueMatches("property_is_damaged", "No"); ?>>No

                                                                </label>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <?php
                                                $style = $this->checkIfReportValueMatches("property_is_damaged", "Yes") == "checked" ? "display:block" : "display:none";
                                                ?>
                                                <div class="col-lg-12 mb-3 conditional" data-conditional-value="Yes" style="<?= $style; ?>">
                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                        <div class="form-title mb-3">

                                                            <h3>Property Type *</h3>

                                                        </div>
                                                        <div class="form-error" id="prop_type_error"> </div>

                                                        <select id="property_type" name="property_type" class="form-control propert_type" data-require-condition="property_is_damaged=Yes">
                                                            <?php foreach ($this->property_types as $type) : ?>
                                                                <option value="<?= $type['value']; ?>" <?= ($this->property_type() == $type['value'] || (isset($type['default']) && $type['default'] && empty($this->property_type()))) ? 'selected' : ''; ?>>
                                                                    <?= $type['label']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>

                                                    </div>

                                                    <div class="form-group col-lg-12 mb-3">

                                                        <div class="form-title mb-3">

                                                            <h3>Are there life safety issues present at the worksite? *</h3>

                                                        </div>

                                                        <div class="col-lg-6 col-md-12 col-sm-12 mb-3 d-flex">

                                                            <div class="radios-possible-checkboxes-container">
                                                                <div class='radio-checkboxes-container d-flex justify-content-start'>
                                                                    <?php
                                                                    $checked = $this->checkIfReportValueMatches("life_safety_issues_present", "Yes");
                                                                    if ($checked == "checked") {
                                                                        $style = "display:block";
                                                                    } else {
                                                                        $style = "display:none";
                                                                    }

                                                                    ?>
                                                                    <div class="radio">
                                                                        <div class="form-check d-flex align-items-center">

                                                                            <label class="form-check-label">

                                                                                <input type="radio" class="form-check-input li_fe radio-checkboxes" value="Yes" name="life_safety_issues_present" <?= $checked ?> data-require-condition="property_is_damaged=Yes">Yes

                                                                            </label>

                                                                        </div>
                                                                    </div>
                                                                    <div class="checkboxes" style="<?= $style; ?>">

                                                                        <div class="form-check d-flex align-items-center">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox" class="form-check-input" value="Collapsed Foundation" name="life_safety_issues[]" <?= $this->checkIfReportValueMatches("life_safety_issues", "Collapsed Foundation"); ?>>
                                                                                Collapsed Foundation
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check d-flex align-items-center">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox" class="form-check-input" value="Exposed Electrical" name="life_safety_issues[]" <?= $this->checkIfReportValueMatches("life_safety_issues", "Exposed Electrical"); ?>>
                                                                                Exposed Electrical
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check d-flex align-items-center">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox" class="form-check-input" value="Gas Leaks" name="life_safety_issues[]" <?= $this->checkIfReportValueMatches("life_safety_issues", "Gas Leaks"); ?>>
                                                                                Gas Leaks
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check d-flex align-items-center">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox" class="form-check-input" value="Water Leaks" name="life_safety_issues[]" <?= $this->checkIfReportValueMatches("life_safety_issues", "Water Leaks"); ?>>
                                                                                Water Leaks
                                                                            </label>
                                                                        </div>

                                                                        <div class="checkbox-text-container">
                                                                            <div class="form-check d-flex align-items-center">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input checkbox-text" value="Other" name="life_safety_issues[]" <?= $this->checkIfReportValueMatches("life_safety_issues", "Other"); ?>>
                                                                                    Other
                                                                                </label>
                                                                            </div>

                                                                            <div class='text-container' <?= $this->hide_if_field_empty("other_life_safety_issues"); ?>>
                                                                                <input type="text" class="form-control" name="other_life_safety_issues" placeholder="Specify other safety issues" value="<?= !empty($this->report_id) ? $this->report->other_life_safety_issues() : ''; ?>">
                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                                <div class="radio-checkboxes-container">
                                                                    <?php
                                                                    $checked = $this->checkIfReportValueMatches("life_safety_issues_present", "No");
                                                                    if ($checked == "checked") {
                                                                        $style = "display:block";
                                                                    } else {
                                                                        $style = "display:none";
                                                                    }
                                                                    ?>
                                                                    <div class="radio">
                                                                        <div class="form-check d-flex align-items-center">

                                                                            <label class="form-check-label">

                                                                                <input type="radio" class="form-check-input radio-checkboxes" value="No" name="life_safety_issues_present" <?= $checked; ?>>No

                                                                            </label>

                                                                        </div>
                                                                    </div>
                                                                    <div class="checkboxes" style="<?= $style; ?>"></div>
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

                                                                <div class="form-error" id="rec_status_error"></div>

                                                                <select id="recovery_status" name="recovery_status" class="form-control rec_status" data-require-condition="property_is_damaged=Yes">

                                                                    <option value="" slected>Select any value</option>

                                                                    <?php
                                                                    $recovery_statuses = [
                                                                        "No Work has begun",
                                                                        "Partially Recovered - Still a lot of work to do",
                                                                        "Mostly Recovered - There are still problems",
                                                                        "Getting Worse - More problems have occurred",
                                                                        "Uninhabitable - Declared to be condemned",
                                                                        "Other"
                                                                    ];

                                                                    foreach ($recovery_statuses as $status) {
                                                                        $display = ($status == "Other") ? "Other Status" : $status;
                                                                        echo '<option value="' . $status . '" ' . $this->selectIfReportValueMatches("recovery_status", $status) . '>' . $display . '</option>';
                                                                    }
                                                                    ?>

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

                                                                    <input type="radio" class="form-check-input pro_con" value="Yes" name="client_is_property_owner" <?= $this->checkIfReportValueMatches("client_is_property_owner", "Yes"); ?>>Yes

                                                                </label>

                                                            </div>
                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="client_is_property_owner" <?= $this->checkIfReportValueMatches("client_is_property_owner", "No"); ?>>No

                                                                </label>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                        <div class="form-title mb-3">

                                                            <h3>Are client family members or friends willing to help? *</h3>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3 d-flex">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input wil_to" value="Yes" name="willing_to_help" <?= $this->checkIfReportValueMatches("family_willing_to_help", "Yes"); ?>>Yes

                                                                </label>

                                                            </div>

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="willing_to_help" <?= $this->checkIfReportValueMatches("family_willing_to_help", "No") ?>>No

                                                                </label>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                        <div class="form-title mb-3">

                                                            <h3>What room/floors have been damaged? Select all that apply.*</h3>

                                                        </div>

                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3 damaged-floors-container">
                                                            <?php
                                                            $damaged_floors = [
                                                                ["value" => "Basement", "label" => "Basement"],
                                                                ["value" => "First Floor", "label" => "First Floor"],
                                                                ["value" => "Second Floor", "label" => "Second Floor"],
                                                                ["value" => "Attic", "label" => "Attic"],
                                                                ["value" => "Garage", "label" => "Garage"]
                                                            ];

                                                            foreach ($damaged_floors as $floor) {
                                                                $checked = $this->checkIfReportValueMatches("damaged_floors", $floor['value']);
                                                            ?>
                                                                <div class="form-check d-flex align-items-center">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            value="<?php echo $floor['value']; ?>"
                                                                            name="damaged_floors[]"
                                                                            <?php echo $checked; ?>>
                                                                        <?php echo $floor['label']; ?>
                                                                    </label>
                                                                </div>
                                                            <?php
                                                            }

                                                            // Handle "Other" option
                                                            $other_checked = $this->checkIfReportValueMatches("damaged_floors", "Other");
                                                            $other_value = '';
                                                            if (!empty($this->report_id)) {
                                                                $other_value = $this->report->other_damaged_location();
                                                            }
                                                            $display_style = $other_checked ? '' : 'style="display:none;"';
                                                            ?>

                                                            <div class="checkbox-text-container">
                                                                <div class="form-check d-flex align-items-center">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input checkbox-text"
                                                                            value="Other"
                                                                            name="damaged_floors[]"
                                                                            <?php echo $other_checked; ?>>
                                                                        Other Location
                                                                    </label>
                                                                </div>
                                                                <div class="text-container" <?php echo $display_style; ?>>
                                                                    <input type="text" class="form-control"
                                                                        name="other_damaged_location"
                                                                        placeholder="Specify Other Location"
                                                                        value="<?php echo $other_value; ?>">
                                                                </div>
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

                                                                    <input type="radio" class="form-check-input is_wa" value="Yes" name="is_standing_water" <?= $this->checkIfReportValueMatches("is_standing_water", "Yes"); ?>>Yes

                                                                </label>

                                                            </div>
                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="is_standing_water" <?= $this->checkIfReportValueMatches("is_standing_water", "No"); ?>>No

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

                                                                    <input type="radio" class="form-check-input is_mus" value="Yes" name="is_mud" <?= $this->checkIfReportValueMatches("is_mud", "Yes"); ?>>Yes

                                                                </label>

                                                            </div>

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="is_mud" <?= $this->checkIfReportValueMatches("is_mud", "No"); ?>>No

                                                                </label>

                                                            </div>

                                                        </div>


                                                    </div>


                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3">

                                                        <div class="form-title mb-3">

                                                            <h3>What Appliances & Contents have been damaged? *</h3>

                                                        </div>

                                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 mb-3 damaged-appliances-container">
                                                            <?php
                                                            $damaged_appliances = [
                                                                ["value" => "Boiler", "label" => "Boiler"],
                                                                ["value" => "Furniture", "label" => "Furniture"],
                                                                ["value" => "Hot Water Heater", "label" => "Hot Water Heater"],
                                                                ["value" => "Refrigerator", "label" => "Refrigerator"],
                                                                ["value" => "Stove", "label" => "Stove"],
                                                                ["value" => "Washer/Dryer", "label" => "Washer/Dryer"]
                                                            ];

                                                            foreach ($damaged_appliances as $appliance) {
                                                                $checked = $this->checkIfReportValueMatches("damaged_appliances", $appliance['value']);
                                                            ?>
                                                                <div class="form-check d-flex align-items-center">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            value="<?php echo $appliance['value']; ?>"
                                                                            name="damaged_appliances[]"
                                                                            <?php echo $checked; ?>>
                                                                        <?php echo $appliance['label']; ?>
                                                                    </label>
                                                                </div>
                                                            <?php
                                                            }

                                                            // Handle "Other" option
                                                            $other_checked = $this->checkIfReportValueMatches("damaged_appliances", "Other");
                                                            $other_value = '';
                                                            if (!empty($this->report_id)) {
                                                                $other_value = $this->report->other_damaged_appliance();
                                                            }
                                                            $display_style = $other_checked ? '' : 'style="display:none;"';
                                                            ?>

                                                            <div class="checkbox-text-container">
                                                                <div class="form-check d-flex align-items-center">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input checkbox-text"
                                                                            value="Other"
                                                                            name="damaged_appliances[]"
                                                                            <?php echo $other_checked; ?>>
                                                                        Other Appliance
                                                                    </label>
                                                                </div>
                                                                <div class="text-container" <?php echo $display_style; ?>>
                                                                    <input type="text" class="form-control"
                                                                        name="other_damaged_appliance"
                                                                        placeholder="Specify Other Appliance"
                                                                        value="<?php echo $other_value; ?>">
                                                                </div>
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

                                                                    <input type="radio" class="form-check-input cont_yes" value="Yes" name="has_insurance" <?= $this->checkIfReportValueMatches("has_insurance", "Yes"); ?>>Yes

                                                                </label>

                                                            </div>
                                                            <div class="form-check d-flex align-items-center">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" value="No" name="has_insurance" <?= $this->checkIfReportValueMatches("has_insurance", "No"); ?>>No
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

                                                                    <input type="checkbox" class="form-check-input cont_yes" value="FEMA" name="contacted_others[]" <?= $this->checkIfReportValueMatches("contacted_others", "FEMA"); ?>>FEMA

                                                                </label>

                                                            </div>
                                                            <div class="checkbox-text-container">
                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="checkbox" class="form-check-input prop_yes checkbox-text" value="Other" name="contacted_others[]" <?= $this->checkIfReportValueMatches("contacted_others", "Other"); ?>>Other Contacts

                                                                    </label>

                                                                </div>
                                                                <div class='text-container' <?= $this->hide_if_field_unchecked("contacted_others", "Other"); ?>>
                                                                    <input type="text" class="form-control" name="others_contacted" placeholder="Specify other contacts" value="<?= !empty($this->report_id) ? $this->report->contacted_others() : ''; ?>">
                                                                </div>
                                                            </div>
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

                                    <div id="step-5" class="main-form-section form-section w-100">

                                        <div>

                                            <div class="row">

                                                <div class="col-lg-12 mb-3">

                                                    <div class="form-title mb-3">

                                                        <h3>Are you a service provider entering this information on behalf of your client? *</h3>

                                                    </div>

                                                </div>
                                                <div class='radios-conditional w-100'>
                                                    <div class="col-12 radios">
                                                        <div class="col-12 col-lg-6 mb-3 d-flex">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Yes" name="is_provider" <?= $this->checkIfReportValueMatches("is_provider", "Yes"); ?>>Yes

                                                                </label>

                                                            </div>

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="is_provider" <?= $this->checkIfReportValueMatches("is_provider", "No"); ?>>No

                                                                </label>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <?php
                                                    $style = $this->checkIfReportValueMatches("is_provider", "Yes") == "checked" ? "display:block" : "display:none";
                                                    ?>
                                                    <div class="col-lg-12 mb-3 conditional" data-conditional-value="Yes" style="<?= $style; ?>">

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Organization *</label>

                                                                <input type="text" class="form-control sur_fri" id="provider_organization" data-require-condition="is_provider=Yes" name="provider_organization" placeholder="Enter here" value=" <?= $this->provider_organization(); ?>">

                                                            </div>

                                                            <div class="form-error" id="sur_fri_error">Organization name is required</div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>First Name *</label>

                                                                <input type="text" class="form-control sur_fri" id="provider_firstName" data-require-condition="is_provider=Yes" name="provider_firstName" placeholder="Enter here" value=" <?= $this->provider_firstName(); ?>">

                                                            </div>

                                                            <div class="form-error" id="sur_fri_error">First name is required</div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Last name *</label>

                                                                <input type="text" class="form-control sur_last" id="provider_lastName" data-require-condition="is_provider=Yes" name="provider_lastName" placeholder="Enter here" value=" <?= $this->provider_lastName()  ?>">

                                                            </div>

                                                            <div class="form-error" id="sur_last_error">Last name is required</div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Title</label>

                                                                <input type="text" class="form-control sur_last" id="provider_title" data-require-condition="is_provider=Yes" name="provider_title" placeholder="Enter here" value=" <?= $this->provider_lastName()  ?>">

                                                            </div>

                                                            <div class="form-error" id="sur_last_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Address *</label>

                                                                <input type="text" class="form-control sur_add" id="provider_address" data-require-condition="is_provider=Yes" name="provider_address" placeholder="Enter here" value="<?= $this->provider_address(); ?>">

                                                            </div>

                                                            <div class="form-error" id="sur_add_error">Address is required</div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Country</label>

                                                                <?php
                                                                $args = [
                                                                    'name' => 'provider_country',
                                                                    'id' => 'provider_country',
                                                                    'selected' => $this->provider_country(),
                                                                    'class' => 'form-control'

                                                                ];
                                                                $args['data-attributes']['require-condition'] = 'is_provider=Yes';

                                                                echo Forms::countrySelect($args);
                                                                ?>

                                                            </div>

                                                            <div class="form-error" id="sur_coun_error">Country is required</div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>State</label>

                                                                <?php
                                                                $args = [
                                                                    'country' => $this->provider_country(),
                                                                    'name' => 'provider_state',
                                                                    'id' => 'provider_state',
                                                                    'selected' => $this->provider_state(),
                                                                    'class' => 'form-control'
                                                                ];
                                                                $args['data-attributes']['require-condition'] = 'is_provider=Yes';
                                                                echo Forms::stateSelect($args);
                                                                ?>

                                                            </div>

                                                            <div class="form-error" id="sur_sta_error">State is required</div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>City</label>

                                                                <input type="text" class="form-control sur_cit" name="provider_city" value="<?= $this->provider_city(); ?>" placeholder="Enter here" data-require-condition="is_provider=Yes">

                                                            </div>

                                                            <div class="form-error" id="sur_cit_error">City is required</div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Zip Code *</label>

                                                                <input type="number" class="form-control sur_zip" onKeyPress="if(this.value.length==6) return false;" min="0" name="provider_zipcode" placeholder="Enter here" value="<?= $this->provider_zipcode(); ?>" data-require-condition="is_provider=Yes">
                                                            </div>

                                                            <div class="form-error" id="sur_zip_error">Zipcode is required</div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Primary Telephone *</label>

                                                                <input type="number" class="form-control sur_pri" onKeyPress="if(this.value.length==10) return false;" min="0" name="provider_phone" placeholder="Enter here" value="<?= $this->provider_phone(); ?>" data-require-condition="is_provider=Yes">

                                                            </div>

                                                            <div class="form-error" id="sur_pri_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Alternative Telephone</label>

                                                                <input type="number" class="form-control sur_alt" onKeyPress="if(this.value.length==10) return false;" min="0" name="provider_phone2" placeholder="Enter here" value="<?= $this->provider_phone2(); ?>">

                                                            </div>

                                                            <div class="form-error" id="sur_alt_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">
                                                            <div class="form-group">
                                                                <label>Email Address *</label>
                                                                <input type="email" class="form-control sur_email" id="provider_email" data-require-condition="is_provider=Yes" name="provider_email" placeholder="Enter email address" value="<?= $this->provider_email(); ?>">
                                                            </div>
                                                            <div class="form-error" id="sur_email_error"></div>
                                                        </div>

                                                        <div class="col-lg-4 mb-3">
                                                            <div class="form-group">
                                                                <label>Website</label>
                                                                <input type="url" class="form-control" name="provider_website" placeholder="Enter website URL" value="<?= $this->provider_website(); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 mb-3">
                                                            <div class="form-group">
                                                                <label>Notes</label>
                                                                <textarea class="form-control" name="provider_notes" rows="4" placeholder="Enter any additional notes about the client or situation"><?= $this->provider_notes(); ?></textarea>
                                                            </div>
                                                        </div>

                                                    </div>

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

    public function render_client_needs()
    {
        $report = \KCC\Reports\SurvivorNeedsIntake::getInstance();
        $client_needs = $report->client_needs;
        foreach ($client_needs['rows'] as $row) {
            $this->render_row($row);
        }
    }

    public function render_client_special_needs()
    {
        $report = \KCC\Reports\SurvivorNeedsIntake::getInstance();
        $client_special_needs = $report->client_special_needs;
        foreach ($client_special_needs['rows'] as $row) {
            $this->render_row($row);
        }
    }
}
