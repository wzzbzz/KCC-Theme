<?php

namespace KCC\Forms;

use \KCC\User;
use \KCC\Group;

class DisasterSituationalReportForm extends Form
{

    protected $autofill = true;

    protected $report_type='disaster-situational-report';


    protected $schema =
    [
        "form" => [
            "title" => "Disaster Situational Report",
            "steps" => [
                [
                    "id" => "step-1",
                    "title" => "Disaster Details",
                    "fields" => [
                        [
                            "type" => "section",
                            "title" => "Disaster Details",
                            "class" => "col-lg-12 mb-3",
                            "name" => "disaster_details",
                            "fields" => [
                                [
                                    "type" => "text",
                                    "name" => "post_title",
                                    "label" => "Name of the Disaster",
                                    "required" => true,
                                    "class" => "col-lg-6 mb-3"
                                ]
                            ]
                        ],
                        [
                            "type" => "section",
                            "title" => "Location of the Incident",
                            "class" => "col-lg-12 mb-3",
                            "fields" => [
                                [
                                    "type" => "select",
                                    "name" => "rf_country",
                                    "label" => "Country",
                                    "required" => true,
                                    "class" => "col-lg-4 mb-3",
                                    "option-zero" => "Select Country*",
                                    "options" => [
                                        "type" => "dynamic",
                                        "source" => "allCountries"
                                    ],
                                    "onchange" => "getCountries()"
                                ],
                                [
                                    "type" => "select",
                                    "name" => "rf_state",
                                    "label" => "State",
                                    "required" => true,
                                    "class" => "col-lg-4 mb-3",
                                    "option-zero" => "Select State*",
                                    "options" => [
                                        "type" => "explicit",
                                        "options" => [],
                                    ],
                                ],
                                [
                                    "type" => "select",
                                    "name" => "rf_city",
                                    "label" => "City",
                                    "required" => true,
                                    "class" => "col-lg-4 mb-3",
                                    "option-zero" => "Select City*",
                                    "options" => [
                                        "type" => "explicit",
                                        "options" => [],
                                    ],
                                ],
                                [
                                    "type" => "text",
                                    "name" => "incident_location",
                                    "class" => "col-lg-6 mb-3",
                                    "label" => "Street Address",
                                    "required" => true
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "id" => "step-2",
                    "title" => "Status",
                    "fields" => [
                        [
                            "type" => "section",
                            "title" => "Status",
                            "fields" => [
                                [
                                    "type" => "radio",
                                    "name" => "rf_status",
                                    "label" => "Status",
                                    "required" => true,
                                    "class" => "col-lg-12 mb-4",
                                    "wrapper-class" => "d-flex w-100",
                                    "options" => [
                                        "type" => "explicit",
                                        "options" => [
                                            ["value" => "Initial Assessment", "label" => "Initial Assessment", "default" => true],
                                            ["value" => "Report", "label" => "Report"],
                                            ["value" => "Status Update", "label" => "Status Update"],
                                            ["value" => "Close Out Report", "label" => "Close Out Report"]
                                        ]
                                    ]
                                ],
                                [
                                    "type" => "section",
                                    "title" => "Date and Time",
                                    "fields" => [
                                        [
                                            "type" => "date",
                                            "name" => "rf_date",
                                            "label" => "Select Date",
                                            "required" => true
                                        ],
                                        [
                                            "type" => "time",
                                            "name" => "rf_time",
                                            "label" => "Time",
                                            "required" => true
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "id" => "step-3",
                    "title" => "Contact Information",
                    "fields" => [
                        [
                            "type" => "text",
                            "name" => "rf_org",
                            "label" => "Name of Organization",
                            "required" => true
                        ],
                        [
                            "type" => "text",
                            "name" => "rf_contact_person",
                            "label" => "Contact Person",
                            "required" => true
                        ],
                        [
                            "type" => "text",
                            "name" => "rf_title",
                            "label" => "Title",
                            "required" => true
                        ],
                        [
                            "type" => "email",
                            "name" => "rf_email",
                            "label" => "Email Address",
                            "required" => true,
                            "readonly" => true
                        ],
                        [
                            "type" => "number",
                            "name" => "rf_phone",
                            "label" => "Phone",
                            "required" => true
                        ],
                        [
                            "type" => "text",
                            "name" => "rf_address",
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
                            "name" => "rf_zipcode2",
                            "label" => "Zip Code",
                            "required" => true,
                            "readonly" => true
                        ],
                        [
                            "type" => "text",
                            "name" => "rf_website",
                            "label" => "Website"
                        ],
                        [
                            "type" => "section",
                            "title" => "Official Point Of Contact At The Site If Different From Above",
                            "fields" => [
                                [
                                    "type" => "text",
                                    "name" => "_rf_org",
                                    "label" => "Name of Organization"
                                ],
                                [
                                    "type" => "text",
                                    "name" => "rf_contact_person2",
                                    "label" => "Contact Person"
                                ],
                                [
                                    "type" => "text",
                                    "name" => "rf_name_title",
                                    "label" => "Title"
                                ],
                                [
                                    "type" => "email",
                                    "name" => "rf_email2",
                                    "label" => "Email Address"
                                ],
                                [
                                    "type" => "number",
                                    "name" => "rf_phone2",
                                    "label" => "Phone"
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "id" => "step-4",
                    "title" => "Disaster Type",
                    "fields" => [
                        [
                            "type" => "checkbox",
                            "name" => "rf_disaster_type[]",
                            "label" => "Select all that Apply",
                            "required" => true,
                            "options" => [
                                ["value" => "Hurricane", "label" => "Hurricane"],
                                ["value" => "Flooding", "label" => "Flooding"],
                                ["value" => "Earthquake", "label" => "Earthquake"],
                                ["value" => "Landslide", "label" => "Landslide"],
                                ["value" => "Severe Heat", "label" => "Severe Heat"],
                                ["value" => "Snowstorm", "label" => "Snowstorm"],
                                ["value" => "Tornado", "label" => "Tornado"],
                                ["value" => "Fire Emergency", "label" => "Fire Emergency"],
                                ["value" => "Hazardous Material/Spill/ Chemical Release", "label" => "Hazardous Material/Spill/ Chemical Release"],
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
                            "name" => "rf_disaster_type_other",
                            "label" => "Other",
                            "triggers" => [
                                "field" => [
                                    "type" => "text",
                                    "name" => "rf_disaster_type_other",
                                    "label" => "Enter Comments",
                                    "condition" => "checked"
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "id" => "step-5",
                    "title" => "Logistics & Security",
                    "fields" => [
                        [
                            "type" => "radio",
                            "name" => "rf_disaster_type1",
                            "label" => "Logistic Type",
                            "options" => [
                                ["value" => "Tunnels", "label" => "Tunnels", "default" => true],
                                ["value" => "Roads", "label" => "Roads"],
                                ["value" => "Subways", "label" => "Subways"],
                                ["value" => "Bus Lines", "label" => "Bus Lines"],
                                ["value" => "Airports", "label" => "Airports"],
                                ["value" => "Availability of fuel", "label" => "Availability of fuel"],
                                ["value" => "Major logistics bottlenecks or problems", "label" => "Major logistics bottlenecks or problems"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "ground_1",
                            "label" => "Description of situation on the ground",
                            "required" => true,
                            "options" => [
                                ["value" => "People Injured or Deceased", "label" => "People Injured or Deceased"],
                                ["value" => "Vulnerable Population in need of Resources", "label" => "Vulnerable Population in need of Resources"],
                                ["value" => "Vulnerable Population in need of Medical Attention", "label" => "Vulnerable Population in need of Medical Attention"],
                                ["value" => "People Temporarily Evacuated due to repairable damage to dwellings", "label" => "People Temporarily Evacuated due to repairable damage to dwellings"],
                                ["value" => "Dwellings have been destroyed or irreparably damaged", "label" => "Dwellings have been destroyed or irreparably damaged"]
                            ]
                        ],
                        [
                            "type" => "select",
                            "name" => "rf_security",
                            "label" => "Security",
                            "options" => [
                                ["value" => "", "label" => "Select Option"],
                                ["value" => "No Issue", "label" => "No Issue"],
                                ["value" => "Civil Unrest", "label" => "Civil Unrest"],
                                ["value" => "Other", "label" => "Other"]
                            ]
                        ],
                        [
                            "type" => "select",
                            "name" => "rf_sheltering",
                            "label" => "Sheltering",
                            "multiple" => true,
                            "options" => [
                                ["value" => "", "label" => "Select Option"],
                                ["value" => "Survivor sheltering in place", "label" => "Survivor sheltering in place"],
                                ["value" => "Volunteer Housing in place", "label" => "Volunteer Housing in place"]
                            ]
                        ],
                        [
                            "type" => "select",
                            "name" => "rf_utilities",
                            "label" => "Utilities",
                            "multiple" => true,
                            "options" => [
                                ["value" => "", "label" => "Select Option"],
                                ["value" => "Gas Leaks", "label" => "Gas Leaks"],
                                ["value" => "Sewage/Biological Hazard", "label" => "Sewage/Biological Hazard"],
                                ["value" => "Downed Wires", "label" => "Downed Wires"],
                                ["value" => "No Electricity", "label" => "No Electricity"]
                            ]
                        ],
                        [
                            "type" => "text",
                            "name" => "rf_recommended_point_of_entry",
                            "label" => "Recommended airport or other points of entry"
                        ],
                        [
                            "type" => "text",
                            "name" => "rf_comment",
                            "label" => "Additional Comments"
                        ],
                        [
                            "type" => "radio",
                            "name" => "rf_publish",
                            "label" => "Publish Form to",
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
                                [
                                    "value" => "all_rrn_users",
                                    "label" => "All RRN Users"
                                ]
                            ]
                        ]
                    ]
                ],
                // [
                //     "id" => "step-6",
                //     "title" => "Complete",
                //     "fields" => [
                //         [
                //             "type" => "submit",
                //             "name" => "save",
                //             "label" => "Submit",
                //             "value" => "save"
                //         ]
                //     ]
                // ]
            ],
            "hidden_fields" => [
                ["type" => "hidden", "name" => "group_id", "value" => "dynamic"],
                ["type" => "hidden", "name" => "rf_id", "value" => "dynamic"],
                ["type" => "hidden", "name" => "report_id", "value" => "DSR-{random}"],
                ["type" => "hidden", "name" => "action", "value" => "kcc_form_submit"],
                ["type" => "hidden", "name" => "reportsforms_nonce", "value" => "dynamic"]
            ]
        ]
    ];

    protected $abbreviation = "DSR";

    private $disaster_types =  [
        ["value" => "Hurricane", "label" => "Hurricane"],
        ["value" => "Flooding", "label" => "Flooding"],
        ["value" => "Earthquake", "label" => "Earthquake"],
        ["value" => "Landslide", "label" => "Landslide"],
        ["value" => "Severe Heat", "label" => "Severe Heat"],
        ["value" => "Snowstorm", "label" => "Snowstorm"],
        ["value" => "Tornado", "label" => "Tornado"],
        ["value" => "Fire Emergency", "label" => "Fire Emergency"],
        ["value" => "Hazardous Material/Spill/ Chemical Release", "label" => "Hazardous Material/Spill/ Chemical Release"],
        ["value" => "Medical Emergency/Mass Casualty", "label" => "Medical Emergency/Mass Casualty"],
        ["value" => "Missing Persons", "label" => "Missing Persons"],
        ["value" => "Utility Outage", "label" => "Utility Outage"],
        ["value" => "Structural Disaster", "label" => "Structural Disaster"],
        ["value" => "Collapse", "label" => "Collapse"],
        ["value" => "Weakened Structures", "label" => "Weakened Structures"],
        ["value" => "Workplace Violence or Threat of Violence", "label" => "Workplace Violence or Threat of Violence"],
        ["value" => "Epidemic / Pandemic Outbreak", "label" => "Epidemic / Pandemic Outbreak"],
        ["value" => "Terrorist Attack", "label" => "Terrorist Attack"],
        ["value" => "Nuclear Power Disasters", "label" => "Nuclear Power Disasters"],
    ];


    private $logistic_types = [
        ["value" => "Tunnels", "label" => "Tunnels", "default" => true],
        ["value" => "Roads", "label" => "Roads"],
        ["value" => "Subways", "label" => "Subways"],
        ["value" => "Bus Lines", "label" => "Bus Lines"],
        ["value" => "Airports", "label" => "Airports"],
        ["value" => "Availability of fuel", "label" => "Availability of fuel"],
        ["value" => "Major logistics bottlenecks or problems", "label" => "Major logistics bottlenecks or problems"]
    ];

    private $ground_situations = [
        ["value" => "People Injured or Deceased", "label" => "People Injured or Deceased"],
        ["value" => "Vulnerable Population in need of Resources", "label" => "Vulnerable Population in need of Resources"],
        ["value" => "Vulnerable Population in need of Medical Attention", "label" => "Vulnerable Population in need of Medical Attention"],
        ["value" => "People Temporarily Evacuated due to repairable damage to dwellings", "label" => "People Temporarily Evacuated due to repairable damage to dwellings"],
        ["value" => "Dwellings have been destroyed or irreparably damaged", "label" => "Dwellings have been destroyed or irreparably damaged"]
    ];

    private $security_concerns = [
        ["value" => "", "label" => "Select Option"],
        ["value" => "No Issue", "label" => "No Issue"],
        ["value" => "Civil Unrest", "label" => "Civil Unrest"],
        ["value" => "Other", "label" => "Other"]
    ];

    private $sheltering_options =  [
        ["value" => "", "label" => "Select Option"],
        ["value" => "Survivor sheltering in place", "label" => "Survivor sheltering in place"],
        ["value" => "Volunteer Housing in place", "label" => "Volunteer Housing in place"]
    ];

    private $utilities =  [
        ["value" => "", "label" => "Select Option"],
        ["value" => "Gas Leaks", "label" => "Gas Leaks"],
        ["value" => "Sewage/Biological Hazard", "label" => "Sewage/Biological Hazard"],
        ["value" => "Downed Wires", "label" => "Downed Wires"],
        ["value" => "No Electricity", "label" => "No Electricity"]
    ];

    public function render()
    {
        $this->render_title();
        $this->render_form_box();
    }

    public function incident_location()
    {
        if ($this->report_post_id()) {
            return $this->report->incident_location();
        }
        if($this->autofill){
            return "123 Main Street";
        }
        return '';
    }

    public function incident_date()
    {
        if ($this->report_post_id()) {
            return $this->report->incident_date();
        }
        if($this->autofill){
            return date('Y-m-d');
        }
        return '';
    }

    public function incident_time()
    {
        if ($this->report_post_id()) {
            return $this->report->incident_time();
        }
        if($this->autofill){
            return date('H:i');
        }
        return '';
    }

    public function report_status()
    {
        if ($this->report_post_id()) {
            return $this->report->status();
        }
        if($this->autofill){
            return 'Initial Assessment';
        }
        return '';
    }

    public function organization()
    {

        if ($this->report_post_id()) {
            return $this->report->organization();
        }
        if($this->autofill){
            return 'Red Cross';
        }
        return '';
    }

    public function contact_name()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_name();
        }

        $user = new \KCC\User(get_current_user_id());
        return $user->first_name() . ' ' . $user->last_name();
    }

    public function contact_title()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_title();
        }
        if( $this->autofill){
            return 'Manager';
        }
        return '';
    }

    public function contact_email()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_email();
        }
        $user = new \KCC\User(get_current_user_id());
        return $user->email();
    }

    public function contact_phone()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_phone();
        }
        if($this->autofill){
            return '1234567890';
        }
        return '';
    }

    public function contact_address()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_address();
        }
        if($this->autofill){
            return '123 Main Street';
        }
        return '';
    }

    public function contact_city()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_city();
        }
        if($this->autofill){
            return 'New York';
        }
        return '';
    }

    public function contact_state()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_state();
        }
        if($this->autofill){
            return 'New York';
        }
        return '';
    }

    public function contact_country()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_country();
        }
        if($this->autofill){
            return 'United States';
        }
        return '';
    }

    public function contact_zipcode()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_zipcode();
        }
        if($this->autofill){
            return '10001';
        }
        return '';
    }

    public function contact_website()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_website();
        }
        if($this->autofill){
            return 'https://www.redcross.org';
        }
        return '';
    }

    public function alternate_contact_organization()
    {
        if ($this->report_post_id()) {
            return $this->report->alternate_contact_organization();
        }
        if($this->autofill){
            return 'FEMA';
        }
        return '';
    }

    public function alternate_contact_name()
    {
        if ($this->report_post_id()) {
            return $this->report->alternate_contact_name();
        }
        if($this->autofill){
            return 'John Doe';
        }
        return '';
    }

    public function alternate_contact_title()
    {
        if ($this->report_post_id()) {
            return $this->report->alternate_contact_title();
        }
        if($this->autofill){
            return 'Manager';
        }
        return '';
    }

    public function alternate_contact_email()
    {
        if ($this->report_post_id()) {
            return $this->report->alternate_contact_email();
        }
        if($this->autofill){
            return 'john@johndoe.com';
        }
        return '';
    }

    public function alternate_contact_phone()
    {
        if ($this->report_post_id()) {
            return $this->report->alternate_contact_phone();
        }
        if($this->autofill){
            return '1234567890';
        }
        return '';
    }

    public function disaster_type_checked($type)
    {
        if ($this->report_post_id()) {
            $disaster_type = $this->report->disaster_type();
            if (in_array($type, $disaster_type)) {
                return 'checked';
            }
        }
        return '';
    }

    public function disaster_type_other()
    {
        if ($this->report_post_id()) {
            return $this->report->disaster_type_other();
        }
        return '';
    }

    public function disaster_type_description()
    {
        if ($this->report_post_id()) {
            return $this->report->disaster_type_descrption();
        }
        return '';
    }

    public function logistic_is_checked($type)
    {
        if ($this->report_post_id()) {
            $logistic_type = $this->report->logistic_type();
            if ($logistic_type == $type) {
                return 'checked';
            }
        }
        return '';
    }

    public function ground_situation_checked($type)
    {
        if ($this->report_post_id()) {
            $ground_situation = $this->report->ground_situation_description();
            if ($ground_situation == $type) {
                return 'checked';
            }
        }
        return '';
    }

    public function security_concern_selected($type)
    {
        if ($this->report_post_id()) {
            $security = $this->report->security_concern();
            if ($security == $type) {
                return 'selected';
            }
        }
        return '';
    }

    public function sheltering_option_is_selected($type)
    {
        if ($this->report_post_id()) {
            $sheltering = $this->report->sheltering_option();
            if (in_array($type, $sheltering)) {
                return 'selected';
            }
        }
        return '';
    }

    public function utility_is_selected($type)
    {
        if ($this->report_post_id()) {
            $utilities = $this->report->utilities();
            if (in_array($type, $utilities)) {
                return 'selected';
            }
        }
        return '';
    }

    public function recommended_point_of_entry()
    {
        if ($this->report_post_id()) {
            return $this->report->recommended_point_of_entry();
        }
        if($this->autofill){
            return 'JFK Airport';
        }
        return '';
    }

    public function situational_report_comment()
    {

        if ($this->report_post_id()) {
            return $this->report->situational_report_comment();
        }
        if($this->autofill){
            return 'This is a test comment';
        }
        return '';
    }

    public function checkIfAudienceIs($audience_type){
        if($this->report_post_id()){
            $audience = $this->report->audience();
            if($audience == $audience_type){
                return 'checked';
            }
        }
        return '';
    }

    public function render_title()
    {
?>
        <div class="top-btn">

            <div class="d-flex justify-content-between">

                <div class="title">

                    <h2>Disaster Situational Report</h2>

                </div>

                <div>

                    <a href="<?= $this->group_permalink(); ?>" id="back-1" class="btn btn-outline-primary" title="Back">Back</a>

                    <a href="javascript:void(0);" id="back-2" class="btn btn-outline-primary d-none" title="Back">Back</a>

                    <a href="javascript:void(0);" id="back-3" class="btn btn-outline-primary d-none" title="Back">Back</a>

                    <a href="javascript:void(0);" id="back-4" class="btn btn-outline-primary d-none" title="Back">Back</a>

                    <a href="javascript:void(0);" id="back-5" class="btn btn-outline-primary d-none" title="Back">Back</a>

                    <a href="javascript:void(0);" id="back-6" class="btn btn-outline-primary d-none" title="Back">Back</a>

                </div>

            </div>

        </div>
    <?php
    }

    public function render_form_box()
    {
    ?>
        <div class="form-box">

            <div class="report-next-tab">

                <div class="row d-flex justify-content-center">

                    <div class="col-xl-10">

                        <div class="reports-top d-flex justify-content-center">

                            <div class="d-flex w-100">

                                <div class="main-box w-100">

                                    <div class="report-process text-center d-flex justify-content-center" id="bd-1">

                                        <div class="circle circle-red" id="red-1"></div>

                                    </div>

                                    <div class="circle-content text-center pt-lg-4 pt-3">

                                        Disaster Details

                                    </div>

                                </div>

                                <div class="main-box w-100">

                                    <div class="report-process text-center d-flex justify-content-center" id="bd-2">

                                        <div class="circle " id="red-2"></div>

                                    </div>

                                    <div class="circle-content text-center pt-lg-4 pt-3">

                                        Status

                                    </div>

                                </div>

                                <div class="main-box w-100">

                                    <div class="report-process text-center d-flex justify-content-center" id="bd-3">

                                        <div class="circle" id="red-3"></div>

                                    </div>

                                    <div class="circle-content text-center pt-lg-4 pt-3">

                                        Contact Information

                                    </div>

                                </div>

                                <div class="main-box w-100">

                                    <div class="report-process text-center d-flex justify-content-center" id="bd-4">

                                        <div class="circle" id="red-4"></div>

                                    </div>

                                    <div class="circle-content text-center pt-lg-4 pt-3">

                                        Disaster Type

                                    </div>

                                </div>

                                <div class="main-box w-100">

                                    <div class="report-process text-center d-flex justify-content-center" id="bd-5">

                                        <div class="circle" id="red-5"></div>

                                    </div>

                                    <div class="circle-content text-center pt-lg-4 pt-3">

                                        Logistics & Security

                                    </div>

                                </div>

                                <div class="main-box w-100">

                                    <div class="report-process text-center d-flex justify-content-center" id="bd-6">

                                        <div class="circle" id="red-6"></div>

                                    </div>

                                    <div class="circle-content text-center pt-lg-4 pt-3">

                                        Complete

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-xl-12">

                        <div class="all-form">

                            <form id="myForm" name="form" method="POST" action="" class="row mediadoc_form" id="disaster_media" enctype="multipart/form-data">

                                <input type="hidden" name="group_id" id="group_id" value="<?= $this->group_post_id(); ?>">

                                <input type="hidden" name="rf_id" id="rf_id" value="<?= $this->report_post_id(); ?>">

                                <input type="hidden" name="report_id" id="report_id" value="<?= $this->report_id() ?>">

                                <input type="hidden" name="action" value="submit_form" />

                                <input type="hidden" name="report_type" value="<?= $this->report_type;?>" />

                                <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />

                                <div id="step-1" class="main-form-section w-100">

                                    <div>

                                        <div class="row">

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Disaster Details</h3>

                                                </div>

                                            </div>



                                            <div class="col-lg-6 mb-3">

                                                <div class="form-group">

                                                    <label>Name of the Disaster *</label>

                                                    <input type="text" class="form-control dis_name" name="post_title" Placeholder="Enter report name" value="<?= $this->report_title(); ?>">

                                                    <div class="marker" id="post_title_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Location of the Incident</h3>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <select class="form-control dis_country" name="rf_country" onchange="getCountries()" id="country">

                                                        <option value="">Select Country*</option>

                                                        <?php foreach (Forms::allCountries() as $country) { ?>

                                                            <option value="<?= $country->name; ?>" data-value="<?= $country->id; ?>"><?= $country->name; ?> </option>

                                                        <?php } ?>

                                                    </select>

                                                </div>

                                                <div class="marker" id="country_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <!--<label>State *</label>-->

                                                    <select class="form-control dis_state" name="rf_state" onchange="getCities()" id="state">

                                                        <option value="">Select State*</option>

                                                    </select>

                                                </div>

                                                <div class="marker" id="state_error"></div>

                                            </div>





                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <!-- <label>City *</label>-->

                                                    <select class="form-control dis_city" name="rf_city" id="city">

                                                        <option value="">Select City*</option>

                                                    </select>

                                                </div>

                                                <div class="marker" id="city_error"></div>

                                            </div>

                                            <div class="col-lg-6 mb-3">

                                                <div class="form-group">

                                                    <label>Street Address *</label>

                                                    <input type="text" class="form-control dis_address" name="incident_location" placeholder="Street Address" value="<?= $this->incident_location(); ?>">

                                                    <div class="marker" id="dis_address_error"></div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <!-- <div class="col-lg-5 d-flex justify-content-end">

                                     <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                </div> -->

                                            <div class="col-lg-12 d-flex justify-content-center">

                                                <a href="javascript:void(0);" class="btn btn-primary btn-disabled" title="Next" id="step-btn-1">Next</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div id="step-2" class="main-form-section d-none w-100">

                                    <div class="row">

                                        <div class="col-lg-12 mb-3">

                                            <div class="form-title">

                                                <h3>Status *</h3>

                                            </div>

                                        </div>

                                        <div class="col-lg-12 mb-4">

                                            <div class="d-flex w-100">

                                                <div class="form-check d-flex align-items-center">

                                                    <div class="d-flex">

                                                        <label class="form-check-label">

                                                            <input type="radio" <?php echo ($this->report_status() == "Initial Assessment") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input" name="rf_status" checked value="Initial Assessment">Initial Assessment

                                                        </label>

                                                    </div>



                                                </div>

                                                <div class="form-check d-flex align-items-center">

                                                    <label class="form-check-label">

                                                        <input type="radio" <?php echo ($this->report_status() == "Report") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input" name="rf_status" value="Report">Report

                                                    </label>

                                                </div>

                                                <div class="form-check d-flex align-items-center">

                                                    <label class="form-check-label">

                                                        <input type="radio" <?php echo ($this->report_status() == "Status Update") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input" name="rf_status" value="Status Update">Status Update

                                                    </label>

                                                </div>

                                                <div class="form-check d-flex align-items-center">

                                                    <label class="form-check-label">

                                                        <input type="radio" <?php echo ($this->report_status() == "Close Out Report") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input" name="rf_status" value="Close Out Report">Close Out Report

                                                    </label>

                                                </div>

                                            </div>



                                        </div>


                                        <div class="col-lg-12 mb-3">

                                            <div class="form-title">

                                                <h3>Date and Time</h3>

                                            </div>

                                        </div>

                                        <div class="col-lg-4 mb-3">

                                            <div class="form-group">

                                                <label>Select Date *</label>

                                                <input type="date" class="form-control dis_date" id="rf_date" name="rf_date" placeholder="Enter date" value="<?= $this->incident_date(); ?>">

                                            </div>

                                            <div class="marker" id="date_error"></div>

                                        </div>

                                        <div class="col-lg-4 mb-3">

                                            <div class="form-group">

                                                <label>Time *</label>

                                                <input type="time" class="form-control dis_time" id="rf_time" name="rf_time" placeholder="Select time" value="<?= $this->incident_time(); ?>">

                                            </div>

                                            <div class="marker" id="time_error"></div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- <div class="col-lg-6 d-flex justify-content-end">

                                <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                            </div> -->

                                        <div class="col-lg-12 d-flex justify-content-center">

                                            <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-2">Next</a>

                                        </div>

                                    </div>

                                </div>

                                <div id="step-3" class="main-form-section d-none w-100">

                                    <div>

                                        <div class="row">

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Contact Information</h3>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Name of Organization *</label>

                                                    <input type="text" name="rf_org" class="form-control dis_org" placeholder="Enter " value="<?= $this->organization(); ?>">

                                                    <div class="marker" id="org_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Contact Person *</label>

                                                    <input type="text" class="form-control dis_person" name="rf_contact_person" placeholder="Enter Name" value="<?= $this->contact_name(); ?>">



                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Title *</label>

                                                    <input type="text" class="form-control dis_title" name="rf_title" placeholder="Enter title" value="<?= $this->contact_title(); ?>">

                                                    <div class="marker" id="tile_error"></div>

                                                </div>

                                            </div>



                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Email Address *</label>

                                                    <input type="text" class="form-control" id="rf_email" name="rf_email" placeholder="Enter email" value="<?= $this->contact_email(); ?>">

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Phone *</label>



                                                    <input type="number" id="phone" class="form-control dis_phone" name="rf_phone" placeholder="Enter phone no." value="<?= $this->contact_phone(); ?>">

                                                    <div class="marker" id="phone_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Address *</label>

                                                    <input type="text" class="form-control con_dis_address" name="rf_address" placeholder="Enter Address" value="<?= $this->contact_address(); ?>">

                                                    <div class="marker" id="con_dis_address_error"></div>

                                                </div>



                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Country</label>

                                                    <input type="text" class="form-control dis_country" name="rf_contact_country" value="<?= $this->contact_country(); ?>">

                                                </div>

                                            </div>



                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>State</label>

                                                    <input type="text" class="form-control dis_state" name="rf_contact_state" value="<?= $this->contact_state(); ?>">

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>City</label>

                                                    <input type="text" class="form-control dis_city" name="rf_contact_city" value="<?= $this->contact_city(); ?>">

                                                </div>

                                            </div>



                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Zip Code *</label>

                                                    <input type="number" class="form-control dis_zip" id="rf_contact_zipcode" name="contact_zipcode" placeholder="Enter " value="<?= $this->contact_zipcode(); ?>">

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Website</label>

                                                    <input type="text" class="form-control dis_web" id="rf_website" name="rf_website" placeholder="Enter Website  Url " value="<?= $this->contact_website(); ?>">

                                                    <div class="marker" id="web_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Official Point Of Contact At The Site If Different From Above</h3>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Name of Organization</label>

                                                    <input type="text" class="form-control dis_conorg" id="rf_alt_org" name="rf_alt_org" value="<?= $this->alternate_contact_organization(); ?>">

                                                    <div class="marker" id="conorg_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Contact Person</label>

                                                    <input type="text" class="form-control dis_conp" id="rf_alt_contact_person" name="rf_alt_contact_person" placeholder="Enter " value="<?= $this->alternate_contact_name(); ?>">

                                                    <div class="marker" id="con_person_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Title</label>

                                                    <input type="text" class="form-control dis_cont" id="rf_alt_contact_title" name="rf_alt_contact_title" placeholder="Enter title " value="<?= $this->alternate_contact_title(); ?>">

                                                    <div class="marker" id="con_title_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Email Address</label>

                                                    <input type="text" class="form-control dis_conemail" id="rf_alt_contact_email" name="rf_alt_contact_email" placeholder="Enter email" value="<?= $this->alternate_contact_email(); ?>">

                                                    <div class="marker" id="con_email_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Phone</label>

                                                    <input type="number" id="phone" class="form-control dis_conphone" id="rf_alt_contact_phone" name="rf_alt_contact_phone" placeholder="Enter " value="<?= $this->alternate_contact_phone(); ?>">

                                                    <div class="marker" id="con_phone_error"></div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <!-- <div class="col-lg-6 d-flex justify-content-end">

                                    <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                </div> -->

                                            <div class="col-lg-12 d-flex justify-content-center">

                                                <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-3">Next</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div id="step-4" class="main-form-section d-none w-100">

                                    <div>

                                        <div class="row">

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Disaster Type</h3>

                                                </div>

                                            </div>

                                            <!--<div class="col-lg-12 mb-4">

                                    <div class="col-12 col-lg-3 mb-3">

                                        <div class="form-check d-flex align-items-center">

                                            <label class="form-check-label">

                                                <input type="radio" <? //php echo (get_post_meta($rf_id,'rf_weather',true)=="Severe Weather")?"CHECKED='CHECKED'":""
                                                                    ?> class="form-check-input" name="rf_weather" id="rf_weather" value="Severe Weather">Severe Weather

                                            </label>

                                        </div>

                                    </div>

                                </div>-->

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Select all that Apply</h3>

                                                </div>

                                                <div class="marker" id="rf_disaster_type_error"></div>

                                            </div>

                                            <div class="col-lg-12 mb-3">

                                                <div class="row">

                                                    <?php foreach ($this->disaster_types as $disaster_type) { ?>


                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="checkbox" <?= $this->disaster_type_checked($disaster_type['value']); ?> class="form-check-input dis_apply" value="<?= $disaster_type['value']; ?>" name="rf_disaster_type[]"><?= $disaster_type['label']; ?>

                                                                </label>

                                                            </div>

                                                        </div>
                                                    <?php } ?>

                                                </div>

                                                <div class="col-lg-12 mb-3">

                                                    <div class="col-12 col-lg-4 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" <?= $this->disaster_type_checked("Other"); ?> class="form-check-input" name="rf_disaster_type_other" value="Other" id="other_age126">Other

                                                            </label>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-6 mb-3">

                                                    <div class="form-group" id="div15" style="display:none;">

                                                        <input type="text" class="form-control text-info" id="rf_disaster_type_other_description" name="rf_disaster_type_other_description" value="<?= $this->disaster_type_description(); ?>" placeholder="Disaster Description">

                                                    </div>

                                                </div>

                                            </div>



                                        </div>



                                        <div class="row">

                                            <!-- <div class="col-lg-6 d-flex justify-content-end">

                                    <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                </div> -->

                                            <div class="col-lg-12 d-flex justify-content-center">

                                                <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-4">Next</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div id="step-5" class="main-form-section d-none w-100">

                                    <div>

                                        <div class="row">

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Logistics</h3>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 mb-4">

                                                <div class="row">


                                                    <?php foreach ($this->logistic_types as $logistic_type) { ?>
                                                        <div class="col-12 col-lg-4 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?= $this->logistic_is_checked($logistic_type['value']) ?> class="form-check-input" name="rf_logistic_type" value="<?= $logistic_type['value']; ?>"><?= $logistic_type['label']; ?>

                                                                </label>

                                                            </div>

                                                        </div>
                                                    <?php } ?>


                                                </div>

                                            </div>

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Description of situation on the ground *</h3>

                                                </div>

                                                <div class="marker" id="ground_error"></div>

                                            </div>

                                            <div class="col-lg-12 mb-3">

                                                <div class="row">

                                                    <?php foreach ($this->ground_situations as $ground_situation) { ?>
                                                        <div class="col-12 col-lg-6 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?= $this->ground_situation_checked($ground_situation['value']); ?> class="form-check-input" name="ground_1" value="<?= $ground_situation['value']; ?>"><?= $ground_situation['label']; ?>

                                                                </label>

                                                            </div>

                                                        </div>
                                                    <?php } ?>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group seletc-form-height">

                                                    <label>Security</label>

                                                    <select class="form-control set-postion security" name="rf_security">

                                                        <?php foreach ($this->security_concerns as $security_concern) { ?>

                                                            <option value="" <?= $this->security_concern_selected($security_concern['value']) ?>><?= $security_concern['label']; ?></option>
                                                        <?php } ?>

                                                    </select>

                                                    <div class="marker" id="sec_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group seletc-form-height sheltring">

                                                    <label>Sheltering Available</label>

                                                    <!-- <select class="form-control set-postion" name="rf_sheltering">

                                            <option value="Survivor sheltering in place" <?php //echo (get_post_meta($rf_id,'rf_sheltering',true)=="Survivor sheltering in place")?"selected='selected'":""
                                                                                            ?>>Survivor sheltering in place</option>

                                            <option value="Volunteer Housing in place" <?php //echo (get_post_meta($rf_id,'rf_sheltering',true)=="Volunteer Housing in place")?"selected='selected'":""
                                                                                        ?>>Volunteer Housing in place</option>

                                        </select> -->



                                                    <select class="select2 js-example-placeholder-multiple-II set-postion" name="rf_sheltering_options" data-placeholder="Sheltering" multiple="multiple" style="width: 100%; box-shadow: unset; color: #000;">

                                                        <?php
                                                        foreach ($this->sheltering_options as $sheltering_option) {
                                                        ?>
                                                            <option value="<?= $sheltering_option['value'] ?>" <?= $this->sheltering_option_is_selected($sheltering_option['value']); ?>><?= $sheltering_option['label'] ?></option>
                                                        <?php } ?>


                                                    </select>



                                                    <div class="marker" id="shelter_error"></div>



                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group seletc-form-height">

                                                    <label>Utilities</label>

                                                    <select class="select2 js-example-placeholder-multiple-123 set-postion utility" name="rf_utilities" data-placeholder="Utilities" multiple="multiple" style="width: 100%; box-shadow: unset; color: #000;">

                                                        <?php
                                                        foreach ($this->utilities as $utility) {
                                                        ?>
                                                            <option value="<?= $utility['value'] ?>" <?= $this->utility_is_selected($utility['value']); ?>><?= $utility['label'] ?></option>
                                                        <?php } ?>

                                                    </select>

                                                    <div class="marker" id="uti_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-6 mb-3">

                                                <div class="form-group">

                                                    <label>Recommended airport or other points of entry:</label>

                                                    <input type="text" class="form-control" id="rf_recommended_point_of_entry" name="rf_recommended_point_of_entry" placeholder="Enter " <?= $this->recommended_point_of_entry(); ?>>

                                                </div>

                                            </div>

                                            <div class="col-lg-6 mb-3">

                                                <div class="form-group">

                                                    <label>Additional Comments:</label>

                                                    <input type="text" class="form-control" id="rf_comment" name="rf_comment" placeholder="Enter " <?= $this->situational_report_comment(); ?>>

                                                </div>

                                            </div>


                                        </div>

                                        <div class="row">

                                            <div class="col-lg-12 d-flex justify-content-center">

                                                <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-5">Next</a>

                                            </div>

                                        </div>


                                    </div>

                                </div>



                                <div id="step-6" class="main-form-section d-none w-100">

                                    <div>

                                        <div class="row">

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Publish Form to</h3>

                                                    <div class="marker" id="publish_error">

                                                    </div>

                                                </div>

                                                <div class="col-lg-12 mb-3">

                                                    <div class="row">

                                                        <div class="col-12 col-lg-4 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input onclick="show3();" id='vin_publish' type="radio" <?= $this->checkIfAudienceIs('my-joined-group');?> class="form-check-input joined" value='my-joined-group' name="rf_audience">Select From My Joined Group

                                                                </label>

                                                            </div>

                                                            <div class="form-check d-flex align-items-center">

                                                                <?php
                                                                $user = new User(get_current_user_id());
                                                                $myJoinedGroups = $user->myGroups();
                                                                
                                                        
                                                                ?>

                                                                <div id="div55" class="hides">

                                                                    <select class="form-control mt-3 border rf_group_id" name="rf_group_id">

                                                                        <option value="" selected>Select any group </option>

                                                                        <?php foreach ($myJoinedGroups as $group) {

                                                                        ?>
                                                                        <option value="<?= $group->id(); ?>"><?= $group->name(); ?></option>        
                                                                        <?php } ?>



                                                                    </select>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-4 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input onclick="show2();" type="radio" <?= $this->checkIfAudienceIs('my-group'); ?> class="form-check-input  my_group" name="rf_audience" value='my-group'>Select From My Group

                                                                </label>

                                                            </div>

                                                            <div id="div44" class="hides">

                                                                <select class="form-control mt-3 border my_group rf_group_id" name="rf_group_id">

                                                                    <option value="" selected> Select any group</option>

                                                                    <?php foreach ($user->groupsILead() as $group) { ?>

                                                                        <option value="<?= $group->id();?>"><?= $group->name(); ?></option>

                                                                    <?php } ?>

                                                                </select>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-4 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input onclick="show1();" type="radio" <?= $this->checkIfAudienceIs('all-rnn-users');?> class="form-check-input all_rrn rf_publish" name="rf_audience" value="all-rnn-users">All RRN Users

                                                                </label>



                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>



                                            </div>

                                            <div class="col-lg-12 d-flex justify-content-center">

                                                Ready to submit.

                                                <button class="btn btn-outline-primary" value="save" name="save" title="Save Draft">Submit</button>

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
