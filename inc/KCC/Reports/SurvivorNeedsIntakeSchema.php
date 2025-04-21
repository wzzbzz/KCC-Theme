<?php

$schema = [
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
                                "readonly" => true
                            ],
                            [
                                "type" => "text",
                                "name" => "client_lastName",
                                "label" => "Client Last Name",
                                "required" => true,
                                "readonly" => true
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
                                "readonly" => true
                            ],
                            [
                                "type" => "text",
                                "name" => "state",
                                "label" => "State",
                                "readonly" => true
                            ],
                            [
                                "type" => "text",
                                "name" => "city",
                                "label" => "City",
                                "readonly" => true
                            ],
                            [
                                "type" => "number",
                                "name" => "intake_zip",
                                "label" => "Zip Code",
                                "required" => true,
                                "maxLength" => 6,
                                "readonly" => true
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
                        "name" => "rf_apply[]",
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
                        "name" => "rf_apply_other",
                        "label" => "Other",
                        "options" => [
                            ["value" => "Other", "label" => "Other"]
                        ],
                        "triggers" => [
                            "field" => [
                                "type" => "text",
                                "name" => "rf_apply_other",
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
                    "name" => "property_type",
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
                    "name" => "damage_contents",
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
        "hidden_fields" => [
            ["type" => "hidden", "name" => "group_id", "value" => "dynamic"],
            ["type" => "hidden", "name" => "rf_id", "value" => "dynamic"],
            ["type" => "hidden", "name" => "report_id", "value" => "SNI-{random}"],
            ["type" => "hidden", "name" => "create_SurvivorNeedIntakeForm", "value" => "reportsforms"],
            ["type" => "hidden", "name" => "reportsforms_nonce", "value" => "dynamic"],
            ["type" => "hidden", "name" => "selected_groupid", "value" => ""]
        ]
    ]
    ]

];
