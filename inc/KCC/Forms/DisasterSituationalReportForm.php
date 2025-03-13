<?php

namespace KCC\Forms;

use \KCC\User;
use \KCC\Group;

class DisasterSituationalReportForm extends Form
{

    protected $autofill = false;

    protected $report_type_slug = 'disaster-situational-report';


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
                                    "name" => "report_status",
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
                                            "name" => "incident_time",
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
                            "name" => "organization",
                            "label" => "Name of Organization",
                            "required" => true
                        ],
                        [
                            "type" => "text",
                            "name" => "contact_person",
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
                                    "name" => "_organization",
                                    "label" => "Name of Organization"
                                ],
                                [
                                    "type" => "text",
                                    "name" => "contact_person2",
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
                            "name" => "disaster_type[]",
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
                            "name" => "disaster_type_other",
                            "label" => "Other",
                            "triggers" => [
                                "field" => [
                                    "type" => "text",
                                    "name" => "disaster_type_other",
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
                            "name" => "disaster_type1",
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
                            "name" => "utilities",
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
                            "name" => "recommended_point_of_entry",
                            "label" => "Recommended airport or other points of entry"
                        ],
                        [
                            "type" => "text",
                            "name" => "additional_comment",
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

    public function __construct($report_id = null)
    {
        parent::__construct($report_id);

        if (get_current_user_id() == 847) {
            $this->autofill = true;
        }
    }


    public function render()
    {
        $this->render_title();
        $this->render_form_box();
    }

    public function selectDefaultCountry()
    {
        if ($this->report_post_id()) {
            $country = $this->report->incident_country();
        }
        else{
            // get the current user's country
            $user = new User(get_current_user_id());
            $country = $user->country();
        }

        return $this->selectIfReportValueMatches($country, 'incident_country');

    }

    public function incident_country()
    {
        if ($this->report_post_id()) {
            return $this->report->incident_country();
        }
        if ($this->autofill) {
            return 'United States';
        }
        return '';
    }

    public function incident_state()
    {
        if ($this->report_post_id()) {
            return $this->report->incident_state();
        }
        if ($this->autofill) {
            return 'New York';
        }
        return '';
    }

    public function incident_city()
    {
        if ($this->report_post_id()) {
            return $this->report->incident_city();
        }
        if ($this->autofill) {
            return 'New York';
        }
        return '';
    }

    public function incident_location()
    {
        if ($this->report_post_id()) {
            return $this->report->incident_location();
        }
        if ($this->autofill) {
            return "123 Main Street";
        }
        return '';
    }

    public function incident_zipcode()
    {
        if ($this->report_post_id()) {
            return $this->report->incident_zip();
        }
        if ($this->autofill) {
            return '10001';
        }
        return '';
    }

    public function incident_date()
    {
        if ($this->report_post_id()) {
            return $this->report->incident_date();
        }
        if ($this->autofill) {
            return date('Y-m-d');
        }
        return '';
    }

    public function incident_time()
    {
        if ($this->report_post_id()) {
            return $this->report->incident_time();
        }
        if ($this->autofill) {
            return date('H:i');
        }
        return '';
    }

    public function report_status()
    {
        if ($this->report_post_id()) {
            return $this->report->status();
        }
        if ($this->autofill) {
            return 'Initial Assessment';
        }
        return '';
    }

    public function organization()
    {

        if ($this->report_post_id()) {
            return $this->report->organization();
        }
        if ($this->autofill) {
            return 'Red Cross';
        }
        return '';
    }

    public function contact_name()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_person();
        }

        $user = new \KCC\User(get_current_user_id());
        return $user->first_name() . ' ' . $user->last_name();
    }

    public function contact_title()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_title();
        }
        if ($this->autofill) {
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
        if ($this->autofill) {
            return '1234567890';
        }
        return '';
    }

    public function contact_address()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_address();
        }
        if ($this->autofill) {
            return '123 Main Street';
        }
        return '';
    }

    public function contact_city()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_city();
        }
        if ($this->autofill) {
            return 'New York';
        }
        return '';
    }

    public function contact_state()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_state();
        }
        if ($this->autofill) {
            return 'New York';
        }
        return '';
    }

    public function contact_country()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_country();
        }
        if ($this->autofill) {
            return 'United States';
        }
        return '';
    }

    public function contact_zipcode()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_zipcode();
        }
        if ($this->autofill) {
            return '10001';
        }
        return '';
    }

    public function contact_website()
    {
        if ($this->report_post_id()) {
            return $this->report->contact_website();
        }
        if ($this->autofill) {
            return 'https://www.redcross.org';
        }
        return '';
    }

    public function alternate_contact_organization()
    {
        if ($this->report_post_id()) {
            return $this->report->alternate_contact_organization();
        }
        if ($this->autofill) {
            return 'FEMA';
        }
        return '';
    }

    public function alternate_contact_person()
    {
        if ($this->report_post_id()) {
            return $this->report->alternate_contact_person();
        }
        if ($this->autofill) {
            return 'John Doe';
        }
        return '';
    }

    public function alternate_contact_title()
    {
        if ($this->report_post_id()) {
            return $this->report->alternate_contact_title();
        }
        if ($this->autofill) {
            return 'Manager';
        }
        return '';
    }

    public function alternate_contact_email()
    {
        if ($this->report_post_id()) {
            return $this->report->alternate_contact_email();
        }
        if ($this->autofill) {
            return 'john@johndoe.com';
        }
        return '';
    }

    public function alternate_contact_phone()
    {
        if ($this->report_post_id()) {
            return $this->report->alternate_contact_phone();
        }
        if ($this->autofill) {
            return '1234567890';
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
            return $this->report->disaster_type_description();
        }
        return '';
    }

    public function logistic_is_checked($type)
    {
        if ($this->report_post_id()) {
            $logistic_type = $this->report->logistic_type();
            
            if (in_array($type, $logistic_type)) {
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
            $sheltering = $this->report->sheltering_options();
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
        if ($this->autofill) {
            return 'JFK Airport';
        }
        return '';
    }

    public function situational_report_comment()
    {

        if ($this->report_post_id()) {
            return $this->report->situational_report_comment();
        }
        if ($this->autofill) {
            return 'This is a test comment';
        }
        return '';
    }


    public function render_title()
    {
?>
        <div class="top-btn">

            <div class="d-flex justify-content-between">

                <div class="title">

                    <h2><?= $this->report_type->name(); ?></h2>

                </div>

                <div>

                    <a href="<?= $this->group_permalink(); ?>" id="form-backbutton" class="btn btn-outline-primary" title="Back">Back</a>

                </div>

            </div>

        </div>
    <?php
    }

    public function render_form_box()
    {
        if (isset($_GET['dumpmeta'])) {
            pre($this->report->dump_meta());
        }
    ?>
        <div class="form-box dsr">

            <div class="report-next-tab">

                <?= $this->render_progress_bar(); ?>

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

                                                    <h3>Disaster Details</h3>

                                                </div>

                                            </div>



                                            <div class="col-lg-6 mb-3">

                                                <div class="form-group">

                                                    <label>Name of the Disaster *</label>

                                                    <input type="text" class="form-control dis_name" name="post_title" Placeholder="Enter report name" value="<?= $this->report_title(); ?>" required>

                                                    <div class="marker form-error" id="post_title_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Location of the Incident</h3>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <select class="form-control dis_country" name="incident_country" onchange="getCountries()" id="country" required>

                                                        <option value="">Select Country*</option>

                                                        <?php foreach (Forms::allCountries() as $country) { ?>

                                                            <option value="<?= $country->name; ?>" <?= $this->selectIfReportValueMatches('incident_country',$country->name); ?> data-value="<?= $country->id; ?>"><?= $country->name; ?></option>

                                                        <?php } ?>

                                                    </select>

                                                </div>

                                                <div class="marker form-error" id="incident_country_error">Please Select a Country</div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <!--<label>State *</label>-->

                                                    <select class="form-control dis_state" name="incident_state" onchange="" id="state" required>

                                                        <option value="">Select State*</option>
                                                        <?php if (!empty($this->incident_state())):

                                                            $states = Forms::statesByCountryName($this->incident_country());
                                                            foreach ($states as $state): ?>
                                                                <option value="<?= $state->name; ?>" <?= $this->selectIfReportValueMatches("incident_state",$state->name); ?> data-value="<?= $state->id; ?>"><?= $state->name; ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>

                                                    </select>

                                                </div>

                                                <div class="marker form-error" id="incident_state_error">Please select a State</div>

                                            </div>





                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>City *</label>
                                                    <input type="text" class="form-control dis_city" name="incident_city" placeholder="City" value="<?= $this->incident_city(); ?>" required>

                                                </div>

                                                <div class="marker form-error" id="incident_city_error">Please enter the city</div>

                                            </div>

                                            <div class="col-lg-6 mb-3">

                                                <div class="form-group">

                                                    <label>Street Address *</label>

                                                    <input type="text" class="form-control dis_address" name="incident_location" placeholder="Street Address" value="<?= $this->incident_location(); ?>" required>

                                                    <div class="marker form-error" id="incident_address_error">Please enter the Address</div>

                                                </div>

                                            </div>
                                            <div class="col-lg-6 mb-3">

                                                <div class="form-group">

                                                    <label>Zip Code *</label>

                                                    <input type="text" class="form-control dis_address" name="incident_zip" placeholder="Zip Code" value="<?= $this->incident_zipcode(); ?>" required>

                                                    <div class="marker form-error" id="incident_zip_error">Please enter a valid zipcode</div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <!-- <div class="col-lg-5 d-flex justify-content-end">

                                     <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                </div> -->

                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-disabled step-button form-next" title="Next" id="step-btn-1">Next</a>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div id="step-2" class="main-form-section w-100 form-section">

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

                                                            <input type="radio" <?php echo ($this->report_status() == "Initial Assessment") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input" name="report_status" checked value="Initial Assessment">Initial Assessment

                                                        </label>

                                                    </div>



                                                </div>

                                                <div class="form-check d-flex align-items-center">

                                                    <label class="form-check-label">

                                                        <input type="radio" <?php echo ($this->report_status() == "Report") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input" name="report_status" value="Report">Report

                                                    </label>

                                                </div>

                                                <div class="form-check d-flex align-items-center">

                                                    <label class="form-check-label">

                                                        <input type="radio" <?php echo ($this->report_status() == "Status Update") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input" name="report_status" value="Status Update">Status Update

                                                    </label>

                                                </div>

                                                <div class="form-check d-flex align-items-center">

                                                    <label class="form-check-label">

                                                        <input type="radio" <?php echo ($this->report_status() == "Close Out Report") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input" name="report_status" value="Close Out Report">Close Out Report

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

                                                <input type="date" class="form-control dis_date" id="incident_date" name="incident_date" placeholder="Enter date" value="<?= $this->incident_date(); ?>" required>

                                            </div>

                                            <div class="marker form-error" id="incident_date_error">Please enter the incident date</div>

                                        </div>

                                        <div class="col-lg-4 mb-3">

                                            <div class="form-group">

                                                <label>Time *</label>

                                                <input type="time" class="form-control dis_time" id="incident_time" name="incident_time" placeholder="Select time" value="<?= $this->incident_time(); ?>">

                                            </div>

                                            <div class="marker form-error" id="incident_time_error">Please enter the incident time</div>

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

                                <div id="step-3" class="main-form-section w-100 form-section">

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

                                                    <input type="text" name="organization" class="form-control dis_org" placeholder="Enter " value="<?= $this->organization(); ?>" required>

                                                    <div class="marker form-error" id="org_error">Please enter the organization name</div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Contact Person *</label>

                                                    <input type="text" class="form-control dis_person" name="contact_person" placeholder="Enter Name" value="<?= $this->contact_name(); ?>" required>

                                                    <div class="marker form-error" id="person_error">Please enter the contact person name</div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Title *</label>

                                                    <input type="text" class="form-control dis_title" name="contact_title" placeholder="Enter title" value="<?= $this->contact_title(); ?>">

                                                    <div class="marker form-error" id="title_error">Please enter the contact's title</div>

                                                </div>

                                            </div>



                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Email Address *</label>

                                                    <input type="text" class="form-control" id="contact_email" name="contact_email" placeholder="Enter email" value="<?= $this->contact_email(); ?>">
                                                    

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Phone *</label>



                                                    <input type="number" id="phone" class="form-control dis_phone" name="contact_phone" placeholder="Enter phone no." value="<?= $this->contact_phone(); ?>">

                                                    <div class="marker form-error" id="phone_error">Please enter the contact's phone #</div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Address *</label>

                                                    <input type="text" class="form-control con_dis_address" name="contact_address" placeholder="Enter Address" value="<?= $this->contact_address(); ?>">

                                                    <div class="marker form-error" id="con_dis_address_error"></div>

                                                </div>



                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Country</label>

                                                    <input type="text" class="form-control dis_country" name="contact_country" value="<?= $this->contact_country(); ?>">

                                                </div>

                                            </div>



                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>State</label>

                                                    <input type="text" class="form-control dis_state" name="contact_state" value="<?= $this->contact_state(); ?>">

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>City</label>

                                                    <input type="text" class="form-control dis_city" name="contact_city" value="<?= $this->contact_city(); ?>">

                                                </div>

                                            </div>



                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Zip Code *</label>

                                                    <input type="number" class="form-control dis_zip" id="contact_zipcode" name="contact_zipcode" placeholder="Enter " value="<?= $this->contact_zipcode(); ?>">

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Website</label>

                                                    <input type="text" class="form-control dis_web" id="contact_website" name="contact_website" placeholder="Enter Website  Url " value="<?= $this->contact_website(); ?>">

                                                    <div class="marker form-error" id="web_error"></div>

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

                                                    <input type="text" class="form-control dis_conorg" id="alt_org" name="alt_org" value="<?= $this->alternate_contact_organization(); ?>">

                                                    <div class="marker form-error" id="conorg_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Contact Person</label>

                                                    <input type="text" class="form-control dis_conp" id="alt_contact_person" name="alt_contact_person" placeholder="Enter " value="<?= $this->alternate_contact_person(); ?>">

                                                    <div class="marker form-error" id="con_person_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Title</label>

                                                    <input type="text" class="form-control dis_cont" id="alt_contact_title" name="alt_contact_title" placeholder="Enter title " value="<?= $this->alternate_contact_title(); ?>">

                                                    <div class="marker form-error" id="con_title_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Email Address</label>

                                                    <input type="text" class="form-control dis_conemail" id="alt_contact_email" name="alt_contact_email" placeholder="Enter email" value="<?= $this->alternate_contact_email(); ?>">

                                                    <div class="marker form-error" id="con_email_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Phone</label>

                                                    <input type="number" id="phone" class="form-control dis_conphone" id="alt_contact_phone" name="alt_contact_phone" placeholder="Enter " value="<?= $this->alternate_contact_phone(); ?>">

                                                    <div class="marker form-error" id="con_phone_error"></div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <!-- <div class="col-lg-6 d-flex justify-content-end">

                                    <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                </div> -->

                                            <div class="col-lg-12 d-flex justify-content-center">
                                              <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                                <a href="javascript:void(0);" class="btn btn-primary step-button form-next" title="Next">Next</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div id="step-4" class="main-form-section w-100 form-section">

                                    <div>

                                       <?= $this->render_disaster_types(); ?>

                                        <div class="row">

                                            <div class="col-lg-12 d-flex justify-content-center">
                                               <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                               <a href="javascript:void(0);" class="btn btn-primary step-button form-next" title="Next" id="">Next</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div id="step-5" class="main-form-section w-100 form-section">

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

                                                                    <input type="checkbox" <?= $this->logistic_is_checked($logistic_type['value']) ?> class="form-check-input" name="logistic_type[]" value="<?= $logistic_type['value']; ?>"><?= $logistic_type['label']; ?>

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

                                                <div class="marker form-error" id="ground_error"></div>

                                            </div>

                                            <div class="col-lg-12 mb-3">

                                                <div class="row">

                                                    <?php foreach ($this->ground_situations as $ground_situation) { ?>
                                                        <div class="col-12 col-lg-6 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="checkbox" <?= $this->ground_situation_checked($ground_situation['value']); ?> class="form-check-input" name="ground_situation_description[]" value="<?= $ground_situation['value']; ?>"><?= $ground_situation['label']; ?>

                                                                </label>

                                                            </div>

                                                        </div>
                                                    <?php } ?>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group select-form-height">

                                                    <label>Security</label>

                                                    <select class="form-control set-postion security" name="security_concerns">

                                                        <?php foreach ($this->security_concerns as $security_concern) { ?>
                                                            <option value="<?= $security_concern['value']?>" <?= $this->security_concern_selected($security_concern['value']) ?>><?= $security_concern['label']; ?></option>
                                                        <?php } ?>

                                                    </select>

                                                    <div class="marker form-error" id="sec_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group select-form-height sheltring">

                                                    <label>Sheltering Available</label>

                                                    <!-- <select class="form-control set-postion" name="rf_sheltering">

                                            <option value="Survivor sheltering in place" <?php //echo (get_post_meta($rf_id,'rf_sheltering',true)=="Survivor sheltering in place")?"selected='selected'":""
                                                                                            ?>>Survivor sheltering in place</option>

                                            <option value="Volunteer Housing in place" <?php //echo (get_post_meta($rf_id,'rf_sheltering',true)=="Volunteer Housing in place")?"selected='selected'":""
                                                                                        ?>>Volunteer Housing in place</option>

                                        </select> -->



                                                    <select class="select2 js-example-placeholder-multiple-II set-postion" name="sheltering_options" data-placeholder="Sheltering" multiple="multiple" style="width: 100%; box-shadow: unset; color: #000;">

                                                        <?php
                                                        foreach ($this->sheltering_options as $sheltering_option) {
                                                        ?>
                                                            <option value="<?= $sheltering_option['value'] ?>" <?= $this->sheltering_option_is_selected($sheltering_option['value']); ?>><?= $sheltering_option['label'] ?></option>
                                                        <?php } ?>


                                                    </select>



                                                    <div class="marker form-error" id="shelter_error"></div>



                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group select-form-height">

                                                    <label>Utilities</label>

                                                    <select class="select2 js-example-placeholder-multiple-123 set-postion utility" name="utilities" data-placeholder="Utilities" multiple="multiple" style="width: 100%; box-shadow: unset; color: #000;">

                                                        <?php
                                                        foreach ($this->utilities as $utility) {
                                                        ?>
                                                            <option value="<?= $utility['value'] ?>" <?= $this->utility_is_selected($utility['value']); ?>><?= $utility['label'] ?></option>
                                                        <?php } ?>

                                                    </select>

                                                    <div class="marker form-error" id="uti_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-6 mb-3">

                                                <div class="form-group">

                                                    <label>Recommended airport or other points of entry:</label>

                                                    <input type="text" class="form-control" id="recommended_point_of_entry" name="recommended_point_of_entry" placeholder="Enter " value="<?= $this->recommended_point_of_entry(); ?>">

                                                </div>

                                            </div>

                                            <div class="col-lg-6 mb-3">

                                                <div class="form-group">

                                                    <label>Additional Comments:</label>

                                                    <input type="text" class="form-control" id="additional_comment" name="additional_comment" placeholder="Enter " value="<?= $this->situational_report_comment(); ?>">

                                                </div>

                                            </div>


                                        </div>

                                        <div class="row">

                                            <div class="col-lg-12 d-flex justify-content-center">
                                               <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                                <a href="javascript:void(0);" class="btn btn-primary step-button form-next" title="Next" id="">Next</a>

                                            </div>

                                        </div>


                                    </div>

                                </div>



                                <div id="step-6" class="main-form-section w-100 form-section">

                                    <div>

                                        <div class="row">

                                            <?= $this->render_audience_section(); ?>
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
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
