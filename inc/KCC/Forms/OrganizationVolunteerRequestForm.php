<?php

namespace KCC\Forms;

use \KCC\User;
use \KCC\Group;

class OrganizationVolunteerRequestForm extends Form
{

    protected $report_type_slug = 'organization-volunteer-request';


    protected $schema =
    [
        "form" => [
            "title"=> "Organization Volunteer Request",
            "steps" => [
                [
                    "id" => "step-1",
                    "title" => "Contact Information",
                    "fields" => [
                        [
                            "type" => "text",
                            "name" => "post_title",
                            "label" => "Name of Event",
                            "required" => true
                        ],
                        [
                            "type" => "text",
                            "name" => "vol_event_organizer",
                            "label" => "Event Organizer",
                            "required" => true
                        ],
                        [
                            "type" => "text",
                            "name" => "vol_event_org_contact_name",
                            "label" => "Contact Person",
                            "required" => true,
                            "readonly" => true
                        ],
                        [
                            "type" => "text",
                            "name" => "vol_org_contact_title",
                            "label" => "Title",
                            "required" => true
                        ],
                        [
                            "type" => "email",
                            "name" => "vol_org_contact_email",
                            "label" => "Email Address",
                            "required" => true,
                            "readonly" => true
                        ],
                        [
                            "type" => "number",
                            "name" => "vol_org_contact_phone",
                            "label" => "Phone",
                            "required" => true
                        ],
                        [
                            "type" => "text",
                            "name" => "vol_org_contact_address",
                            "label" => "Address",
                            "required" => true
                        ],
                        [
                            "type" => "number",
                            "name" => "vol_org_contact_zipcode",
                            "label" => "Zip Code",
                            "required" => true,
                            "readonly" => true,
                            "maxLength" => 6
                        ],
                        [
                            "type" => "text",
                            "name" => "vol_org_country",
                            "label" => "Country",
                            "readonly" => true
                        ],
                        [
                            "type" => "text",
                            "name" => "vol_org_state",
                            "label" => "State",
                            "readonly" => true
                        ],
                        [
                            "type" => "text",
                            "name" => "vol_org_city",
                            "label" => "City",
                            "readonly" => true
                        ],
                        [
                            "type" => "text",
                            "name" => "vol_org_website",
                            "label" => "Website"
                        ],
                        [
                            "type" => "text",
                            "name" => "vol_org_mission",
                            "label" => "Mission"
                        ],
                        [
                            "type" => "section",
                            "title" => "Volunteer Service Location And Point Of Contact",
                            "fields" => [
                                [
                                    "type" => "text",
                                    "name" => "vol_loc_organizaton",
                                    "label" => "Organization Name"
                                ],
                                [
                                    "type" => "text",
                                    "name" => "vol_loc_contact_name",
                                    "label" => "Contact Person"
                                ],
                                [
                                    "type" => "email",
                                    "name" => "vol_loc_contact_email",
                                    "label" => "Email"
                                ],
                                [
                                    "type" => "text",
                                    "name" => "vol_loc_contact_title",
                                    "label" => "Title"
                                ],
                                [
                                    "type" => "number",
                                    "name" => "vol_loc_contact_phone",
                                    "label" => "Phone"
                                ]
                            ]
                        ],
                        [
                            "type" => "section",
                            "title" => "Point Of Contact",
                            "fields" => [
                                [
                                    "type" => "text",
                                    "name" => "poc_org",
                                    "label" => "Name of Organization"
                                ],
                                [
                                    "type" => "text",
                                    "name" => "poc_contact_name",
                                    "label" => "Contact Person"
                                ],
                                [
                                    "type" => "text",
                                    "name" => "poc_contact_title",
                                    "label" => "Title"
                                ],
                                [
                                    "type" => "email",
                                    "name" => "poc_contact_email",
                                    "label" => "Email Address"
                                ],
                                [
                                    "type" => "number",
                                    "name" => "poc_contact_phone",
                                    "label" => "Phone"
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "id" => "step-2",
                    "title" => "Disaster Type",
                    "fields" => [
                        [
                            "type" => "checkbox",
                            "name" => "disaster_type[]",
                            "label" => "Select all that Apply",
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
                                ["value" => "Weakened Structures", "label" => "Weakened Structures"],
                                ["value" => "Workplace Violence or Threat of Violence", "label" => "Workplace Violence or Threat of Violence"],
                                ["value" => "Epidemic / Pandemic Outbreak", "label" => "Epidemic / Pandemic Outbreak"],
                                ["value" => "Terrorist Attack", "label" => "Terrorist Attack"],
                                ["value" => "Nuclear Power Disasters", "label" => "Nuclear Power Disasters"]
                            ]
                        ],
                        [
                            "type" => "radio",
                            "name" => "disaster_type[]",
                            "label" => "Other",
                            "options" => [
                                ["value" => "Other", "label" => "Other"]
                            ],
                            "triggers" => [
                                "field" => [
                                    "type" => "text",
                                    "name" => "vol_disaster_type_other_comment",
                                    "label" => "Enter Comments",
                                    "condition" => "selected"
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "id" => "step-3",
                    "title" => "Volunteer Project Description",
                    "fields" => [
                        [
                            "type" => "text",
                            "name" => "vol_scope",
                            "label" => "Scope of Work"
                        ],
                        [
                            "type" => "section",
                            "title" => "Volunteer Service Details",
                            "fields" => [
                                [
                                    "type" => "date",
                                    "name" => "vol_start_date",
                                    "label" => "Start Date"
                                ],
                                [
                                    "type" => "date",
                                    "name" => "vol_end_date",
                                    "label" => "End Date"
                                ],
                                [
                                    "type" => "date",
                                    "name" => "vol_shift_start_date",
                                    "label" => "Shift Start Date"
                                ],
                                [
                                    "type" => "date",
                                    "name" => "vol_shift_end_date",
                                    "label" => "Shift End Date"
                                ]
                            ]
                        ],
                        [
                            "type" => "section",
                            "title" => "Geographic Area Volunteers Will Serve Within",
                            "fields" => [
                                [
                                    "type" => "select",
                                    "name" => "vol_geo_country",
                                    "label" => "Country",
                                    "required" => true,
                                    "options" => "dynamic" // Populated from $allCountry
                                ],
                                [
                                    "type" => "select",
                                    "name" => "vol_geo_state",
                                    "label" => "State",
                                    "required" => true,
                                    "options" => "dynamic" // Populated based on country selection
                                ],
                                [
                                    "type" => "select",
                                    "name" => "vol_geo_city",
                                    "label" => "City",
                                    "required" => true,
                                    "options" => "dynamic" // Populated based on state selection
                                ],
                                [
                                    "type" => "text",
                                    "name" => "vol_geo_neighborhood",
                                    "label" => "Neighborhood"
                                ],
                                [
                                    "type" => "number",
                                    "name" => "vol_geo_zipcode",
                                    "label" => "Zip Code",
                                    "maxLength" => 6
                                ],
                                [
                                    "type" => "text",
                                    "name" => "vol_geo_other",
                                    "label" => "Other"
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    "id" => "step-4",
                    "title" => "Skills & Disqualifiers",
                    "fields" => [
                        [
                            "type" => "text",
                            "name" => "vol_skills_disqualifiers",
                            "label" => "Disqualifiers"
                        ],
                        [
                            "type" => "section",
                            "title" => "Skills Needed",
                            "fields" => [
                                [
                                    "type" => "radio",
                                    "name" => "vol_skills_needed",
                                    "label" => "Skills Needed",
                                    "options" => [
                                        ["value" => "Emergency Service", "label" => "Emergency Service"],
                                        ["value" => "General Service Needed", "label" => "General Service Needed"],
                                        ["value" => "Repair and Rebuild", "label" => "Repair and Rebuild"],
                                        ["value" => "Evacuation", "label" => "Evacuation"],
                                        ["value" => "Crowd Control", "label" => "Crowd Control"],
                                        ["value" => "Property Reservation", "label" => "Property Reservation"],
                                        ["value" => "Health Services", "label" => "Health Services"],
                                        ["value" => "Food Services", "label" => "Food Services"],
                                        ["value" => "Volunteer Management", "label" => "Volunteer Management"],
                                        ["value" => "Other", "label" => "Other"]
                                    ]
                                ]
                            ]
                        ],
                        [
                            "type" => "section",
                            "title" => "Publish Form To",
                            "fields" => [
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
                                        [
                                            "value" => "all_rrn_users",
                                            "label" => "All RRN Users"
                                        ]
                                    ]
                                ]
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
                            "label" => "Finish",
                            "value" => "save"
                        ]
                    ]
                ]
            ],
            "hidden_fields" => [
                ["type" => "hidden", "name" => "group_id", "value" => "dynamic"],
                ["type" => "hidden", "name" => "rf_id", "value" => "dynamic"],
                ["type" => "hidden", "name" => "report_id", "value" => "ORG-{random}"],
                ["type" => "hidden", "name" => "create_volunteerReq", "value" => "volunteer_request"],
                ["type" => "hidden", "name" => "reportsforms_nonce", "value" => "dynamic"],
                ["type" => "hidden", "name" => "selected_groupid", "value" => ""]
            ]
        ]
    ];

    protected $abbreviation = "OVR";

    private $skills = [
        ["value" => "Emergency Service", "label" => "Emergency Service"],
        ["value" => "General Service Needed", "label" => "General Service Needed"],
        ["value" => "Repair and Rebuild", "label" => "Repair and Rebuild"],
        ["value" => "Evacuation", "label" => "Evacuation"],
        ["value" => "Crowd Control", "label" => "Crowd Control"],
        ["value" => "Property Reservation", "label" => "Property Reservation"],
        ["value" => "Health Services", "label" => "Health Services"],
        ["value" => "Food Services", "label" => "Food Services"],
        ["value" => "Volunteer Management", "label" => "Volunteer Management"],
        ["value" => "Other", "label" => "Other"]
    ];

    public function __construct($report_id = null)
    {

        // ini_set('display_errors', 1);
        // ini_set('display_startup_errors', 1);
        // error_reporting(E_ALL);


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

    public function event_organizer()
    {
        if ($this->report_post_id()) {
            return $this->report->event_organizer();
        }
        if ($this->autofill) {
            return 'Red Cross';
        }
        return '';
    }

    public function event_org_contact_name()
    {
        if ($this->report_post_id()) {
            return $this->report->event_org_contact_name();
        }
        $user = new \KCC\User(get_current_user_id());
        return $user->first_name() . ' ' . $user->last_name();
    }

    public function event_org_contact_title()
    {
        if ($this->report_post_id()) {
            return $this->report->event_org_contact_title();
        }
        if ($this->autofill) {
            return 'Manager';
        }
        return '';
    }

    public function event_org_contact_email()
    {
        if ($this->report_post_id()) {
            return $this->report->event_org_contact_email();
        }
        $user = new \KCC\User(get_current_user_id());
        return $user->email();
    }

    public function event_org_contact_phone()
    {
        if ($this->report_post_id()) {
            return $this->report->event_org_contact_phone();
        }
        if ($this->autofill) {
            return '1234567890';
        }
        return '';
    }

    public function event_org_contact_address()
    {
        if ($this->report_post_id()) {
            return $this->report->event_org_contact_address();
        }
        if ($this->autofill) {
            return '123 Main Street';
        }
        return '';
    }

    public function event_org_contact_zipcode()
    {
        if ($this->report_post_id()) {
            return $this->report->event_org_contact_zipcode();
        }
        if ($this->autofill) {
            return '10001';
        }
        return '';
    }

    public function event_org_contact_city()
    {
        if ($this->report_post_id()) {
            return $this->report->event_org_contact_city();
        }
        if ($this->autofill) {
            return 'New York';
        }
        return '';
    }

    public function event_org_contact_state()
    {
        if ($this->report_post_id()) {
            return $this->report->event_org_contact_state();
        }
        if ($this->autofill) {
            return 'New York';
        }
        return '';
    }

    public function event_org_contact_country()
    {
        if ($this->report_post_id()) {
            return $this->report->event_org_contact_country();
        }
        if ($this->autofill) {
            return 'United States';
        }
        return '';
    }

    public function event_org_website()
    {
        if ($this->report_post_id()) {
            return $this->report->event_org_website();
        }
        if ($this->autofill) {
            return 'https://www.redcross.org';
        }
        return '';
    }

    public function event_org_mission()
    {
        if ($this->report_post_id()) {
            return $this->report->event_org_mission();
        }
        return '';
    }

    public function location_organizer()
    {
        if ($this->report_post_id()) {
            return $this->report->location_organizer();
        }
        if ($this->autofill) {
            return 'FEMA';
        }
        return '';
    }

    public function location_contact_name()
    {
        if ($this->report_post_id()) {
            return $this->report->location_contact_name();
        }
        if ($this->autofill) {
            return 'John Doe';
        }
        return '';
    }

    public function location_contact_title()
    {
        if ($this->report_post_id()) {
            return $this->report->location_contact_title();
        }
        if ($this->autofill) {
            return 'Manager';
        }
        return '';
    }

    public function location_contact_email()
    {
        if ($this->report_post_id()) {
            return $this->report->location_contact_email();
        }
        if ($this->autofill) {
            return 'test@email.com';
        }
        return '';
    }

    public function location_contact_phone()
    {
        if ($this->report_post_id()) {
            return $this->report->location_contact_phone();
        }
        if ($this->autofill) {
            return '1234567890';
        }
        return '';
    }

    public function poc_org()
    {
        if ($this->report_post_id()) {
            return $this->report->point_of_contact_organization();
        }
        if ($this->autofill) {
            return 'FEMA';
        }
        return '';
    }

    public function poc_contact_name()
    {
        if ($this->report_post_id()) {
            return $this->report->point_of_contact_name();
        }
        if ($this->autofill) {
            return 'John Doe';
        }
        return '';
    }

    public function poc_contact_title()
    {
        if ($this->report_post_id()) {
            return $this->report->point_of_contact_title();
        }
        if ($this->autofill) {
            return 'Manager';
        }
        return '';
    }

    public function poc_contact_email()
    {
        if ($this->report_post_id()) {
            return $this->report->point_of_contact_email();
        }
        if ($this->autofill) {
            return 'test@test.com';
        }
        return '';
    }

    public function poc_contact_phone()
    {
        if ($this->report_post_id()) {
            return $this->report->point_of_contact_phone();
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

    public function scope()
    {
        if ($this->report_post_id()) {
            return $this->report->scope_of_work();
        }
        return '';
    }

    public function start_date()
    {
        if ($this->report_post_id()) {
            return $this->report->start_date();
        }
        return '';
    }

    public function end_date()
    {
        if ($this->report_post_id()) {
            return $this->report->end_date();
        }
        return '';
    }

    public function shift_start_date()
    {
        if ($this->report_post_id()) {
            return $this->report->shift_start_date();
        }
        return '';
    }

    public function shift_end_date()
    {
        if ($this->report_post_id()) {
            return $this->report->shift_end_date();
        }
        return '';
    }

    public function geo_country()
    {
        if ($this->report_post_id()) {
            return $this->report->geo_country();
        }
        return '';
    }

    public function geo_state()
    {
        if ($this->report_post_id()) {
            return $this->report->geo_state();
        }
        return '';
    }

    public function geo_city()
    {
        if ($this->report_post_id()) {
            return $this->report->geo_city();
        }
        return '';
    }

    public function geo_neighborhood()
    {
        if ($this->report_post_id()) {
            return $this->report->geo_neighborhood();
        }
        return '';
    }

    public function geo_zipcode()
    {
        if ($this->report_post_id()) {
            return $this->report->geo_zipcode();
        }
        return '';
    }

    public function geo_other()
    {
        if ($this->report_post_id()) {
            return $this->report->geo_other();
        }
        return '';
    }

    public function disqualifiers()
    {
        if ($this->report_post_id()) {
            return $this->report->disqualifiers();
        }
        return '';
    }

    public function skills_needed()
    {
        if ($this->report_post_id()) {
            return $this->report->skills_needed();
        }
        return '';
    }


    public function checkIfAudienceIs($audience_type)
    {
        if ($this->report_post_id()) {
            $audience = $this->report->audience();
            if ($audience == $audience_type) {
                return 'checked';
            }
        }
        return '';
    }


    public function render_form_box()
    {
        if (isset($_GET['dumpmeta'])) {
            pre($this->report->dump_meta());
        }
    ?>
        <div class="form-box">

            <div class="report-next-tab">

                <?php $this->render_progress_bar(); ?>

                <div class="row">

                    <div class="col-xl-12">

                        <div class="all-form">

                            <form method="POST" action="" class="row mediadoc_form" enctype="multipart/form-data">
                                <?php
                                    $this->render_hidden_fields();
                                ?>
                                <div id="step-1" class="main-form-section w-100 form-section active">

                                    <div>

                                        <div class="row">

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Contact Information</h3>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Name of Event *</label>

                                                    <!--<input type="text" class="form-control" id="vol_event" name="vol_event" placeholder="Enter here" value="<//?php echo get_post_meta($rf_id,'vol_event',true)?>">-->

                                                    <input type="text" class="form-control org_event" name="post_title" placeholder="Enter here" value="<?= $this->report_title() ?>">

                                                    <div class="marker" id="org_event_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Name of Organization *</label>

                                                    <input type="text" class="form-control org_name" name="vol_event_organizer" placeholder="Enter here" value="<?= $this->event_organizer() ?>">

                                                    <div class="marker" id="org_name_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Contact Person *</label>

                                                    <input type="text" class="form-control org_con" name="vol_event_org_contact_name" placeholder="Enter Name" value="<?= $this->event_org_contact_name(); ?>">

                                                    <div class="marker" id="org_con_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Title *</label>

                                                    <input type="text" class="form-control org_title" name="vol_event_org_contact_title" placeholder="Enter title" value="<?= $this->event_org_contact_title(); ?>">

                                                    <div class="marker" id="org_title_error"></div>

                                                </div>

                                            </div>



                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Email Address *</label>

                                                    <input type="email" class="form-control org_email" name="vol_event_org_contact_email" placeholder="Enter email" value="<?= $this->event_org_contact_email(); ?>">

                                                    <div class="marker" id="org_email_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Phone *</label>

                                                    <input type="number" id="phone" class="form-control org_phone" name="vol_event_org_contact_phone" placeholder="Enter phone no." value="<?= $this->event_org_contact_phone() ?>">

                                                    <div class="marker" id="org_phone_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Address *</label>

                                                    <input type="text" class="form-control org_address" name="vol_event_org_contact_address" placeholder="Enter Address" value="<?= $this->event_org_contact_address() ?>">

                                                    <div class="marker" id="org_address_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Zip Code *</label>

                                                    <input type="number" class="form-control org_zip" onKeyPress="if(this.value.length==6) return false;" min="0" name="vol_event_org_contact_zipcode" placeholder="Enter " value="<?= $this->event_org_contact_zipcode(); ?>">

                                                    <div class="marker" id="org_zip_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Country</label>

                                                    <input type="text" class="form-control org_country" name="vol_event_org_contact_country" value="<?= $this->event_org_contact_country() ?>">

                                                    <div class="marker" id="org_country_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>State</label>

                                                    <input type="text" class="form-control org_state" name="vol_event_org_contact_state" value="<?= $this->event_org_contact_state() ?>">

                                                    <div class="marker" id="org_state_error"></div>

                                                </div>

                                            </div>



                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>City</label>

                                                    <input type="text" class="form-control org_city" name="vol_event_org_contact_city" value="<?= $this->event_org_contact_city() ?>">

                                                    <div class="marker" id="org_city_error"></div>

                                                </div>

                                            </div>





                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Website</label>

                                                    <input type="text" class="form-control org_website" name="vol_event_org_contact_website" placeholder="Enter Website  Url " value="<?= $this->event_org_website() ?>">

                                                    <div class="marker" id="org_website_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Mission</label>

                                                    <input type="text" class="form-control org_mission" name="vol_event_org_mission" placeholder="Enter Mission " value="<?= $this->event_org_mission() ?>">

                                                    <div class="marker" id="org_mission_error"></div>

                                                </div>

                                            </div>



                                            <!-- volunteer service location starts -->



                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Volunteer Service Location And Point Of Contact</h3>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Organization Name</label>

                                                    <input type="text" class="form-control vol_name" name="vol_loc_organizaton" placeholder="Enter here" value="<?= $this->location_organizer() ?>">

                                                    <div class="marker" id="vol_name_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Contact Person</label>

                                                    <input type="text" class="form-control vol_con" name="vol_loc_contact_name" placeholder="Enter here " value="<?= $this->location_contact_name() ?>">

                                                    <div class="marker" id="vol_con_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Email</label>

                                                    <input type="email" class="form-control vol_email" name="vol_loc_contact_email" placeholder="Enter here " value="<?= $this->location_contact_email() ?>">

                                                    <div class="marker" id="vol_email_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Title</label>

                                                    <input type="text" class="form-control vol_title" name="vol_loc_contact_title" placeholder="Enter here" value="<?= $this->location_contact_title(); ?>">

                                                    <div class="marker" id="vol_title_error"></div>

                                                </div>

                                            </div>



                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Phone</label>

                                                    <input type="number" id="phone" class="form-control vol_phone" name="vol_loc_contact_phone" placeholder="Enter here" value="<?= $this->location_contact_phone(); ?>">

                                                    <div class="marker" id="vol_phone_error"></div>

                                                </div>

                                            </div>



                                            <!-- Volunteer service location ends  -->

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Point Of Contact</h3>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Name of Organization</label>

                                                    <input type="text" class="form-control vol_namep" name="poc_org" placeholder="Enter here" value="<?= $this->poc_org() ?>">

                                                    <div class="marker" id="vol_namep_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Contact Person</label>

                                                    <input type="text" class="form-control vol_conp" name="poc_name" placeholder="Enter here " value="<?= $this->poc_contact_name(); ?>">

                                                    <div class="marker" id="vol_conp_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Title</label>

                                                    <input type="text" class="form-control vol_titlep" name="poc_title" placeholder="Enter title " value="<?= $this->poc_contact_title() ?>">

                                                    <div class="marker" id="vol_titlep_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Email Address</label>

                                                    <input type="email" class="form-control vol_emailp" name="poc_email" placeholder="Enter email" value="<?= $this->poc_contact_email(); ?>">

                                                    <div class="marker" id="vol_emailp_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Phone</label>

                                                    <input type="number" class="form-control vol_phonep" id="phone" name="poc_phone" placeholder="Enter " value="<?= $this->poc_contact_phone() ?>">

                                                    <div class="marker" id="vol_phonep_error"></div>

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
                                    <?= $this->render_disaster_types();?>
                                    <div class="row">

                                        <!-- <div class="col-lg-6 d-flex justify-content-end">

                                    <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                </div> -->

                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                            <a href="javascript:void(0);" class="btn btn-primary step-button form-next" title="Next" id="step-btn-2">Next</a>
                                        </div>

                                    </div>

                                </div>

                        </div>





                        <div id="step-3" class="main-form-section w-100 form-section">

                            <div>

                                <div class="row">

                                    <div class="col-lg-12 mb-3">

                                        <div class="form-title">

                                            <h3>Volunteer Project Description</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-3">

                                        <div class="form-group">

                                            <label>Scope of Work</label>

                                            <!--  <textarea class="form-control" name="" placeholder="Enter here"></textarea> -->

                                            <input type="text" class="form-control vol_sco" name="vol_scope" placeholder="Enter here" value="<?= $this->scope(); ?>">

                                            <div class="marker" id="vol_sco_error"></div>

                                        </div>

                                    </div>



                                    <div class="col-lg-12 mb-3">

                                        <div class="form-title">

                                            <h3>Volunteer Service Details</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-3">

                                        <div class="form-group">

                                            <label>Start Date</label>

                                            <input type="date" class="form-control vol_start" name="vol_start_date" placeholder="Enter here" value="<?= $this->start_date(); ?>">

                                            <div class="marker" id="vol_start_error"></div>

                                        </div>

                                    </div>



                                    <div class="col-lg-4 mb-3">

                                        <div class="form-group">

                                            <label>End Date</label>

                                            <input type="date" class="form-control vol_end" name="vol_end_date" placeholder="Enter here" value="<?= $this->end_date(); ?>">

                                            <div class="marker" id="vol_end_error"></div>

                                        </div>

                                    </div>



                                    <div class="col-lg-4 mb-3">

                                        <div class="form-group">

                                            <label>Shift Start Date</label>

                                            <input type="date" class="form-control vol_shift" name="vol_shift_start_date" placeholder="Enter here" value="<?= $this->shift_start_date(); ?>">

                                            <div class="marker" id="vol_shift_error"></div>

                                        </div>

                                    </div>



                                    <div class="col-lg-4 mb-3">

                                        <div class="form-group">

                                            <label>Shift End Date</label>

                                            <input type="date" class="form-control vol_she" name="vol_shift_end_date" placeholder="Enter here" value="<?= $this->shift_end_date(); ?>">

                                            <div class="marker" id="vol_she_error"></div>

                                        </div>

                                    </div>



                                    <div class="col-lg-12 mb-3">

                                        <div class="form-title">

                                            <h3>Geographic Area Volunteers Will Serve Within</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-3">

                                        <div class="form-group">

                                            <select class="form-control vol_coun" name="geo_country" onchange="getCountries2()" id="countries">

                                                <option value="">Select Country*</option>

                                                <?php foreach (Forms::allCountries() as $country) { ?>

                                                    <option value="<?= $country->name; ?>" <?= $this->selectIfReportValueMatches("geo_country", $country->name); ?> data-value="<?= $country->id; ?>"><?= $country->name; ?></option>

                                                <?php } ?>
                                            </select>

                                            <div class="marker" id="vol_coun_error"></div>

                                        </div>

                                    </div>

                                    <div class="col-lg-4 mb-3">

                                        <div class="form-group">

                                            <select class="form-control vol_sel" name="geo_state" id="states">

                                                <option value="">Select State*</option>

                                                <?php if (!empty($this->geo_state())):

                                                    $states = Forms::statesByCountryName($this->geo_country());
                                                    foreach ($states as $state): ?>
                                                        <option value="<?= $state->name; ?>" <?= $this->selectIfReportValueMatches("geo_state", $state->name); ?> data-value="<?= $state->id; ?>"><?= $state->name; ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>

                                            <div class="marker" id="vol_sel_error"></div>

                                        </div>



                                    </div>

                                    <div class="col-lg-4 mb-3">

                                        <div class="form-group">

                                            <label>City</label>
                                            <input type="text" class="form-control vol_city" name="geo_city" placeholder="Enter here" value="<?= $this->geo_city() ?>">

                                            <div class="marker" id="vol_city_error"></div>

                                        </div>

                                    </div>



                                    <div class="col-lg-4 mb-3">

                                        <div class="form-group">

                                            <label>Neighborhood</label>

                                            <input type="text" class="form-control vol_nei" id="area_neighbour" name="geo_neighborhood" placeholder="Enter here" value="<?= $this->geo_neighborhood() ?>">

                                            <div class="marker" id="vol_nei_error"></div>

                                        </div>

                                    </div>



                                    <div class="col-lg-4 mb-3">

                                        <div class="form-group">

                                            <label>Zip Code</label>

                                            <input type="number" class="form-control vol_code" onKeyPress="if(this.value.length==6) return false;" min="0" name="geo_zipcode" placeholder="Enter here" value="<?= $this->geo_zipcode() ?>">

                                            <div class="marker" id="vol_code_error"></div>

                                        </div>

                                    </div>



                                    <div class="col-lg-4 mb-3">

                                        <div class="form-group">

                                            <label>Other</label>

                                            <input type="text" class="form-control vol_other" name="geo_other" placeholder="Enter here" value="<?= $this->geo_other(); ?>">

                                            <div class="marker" id="vol_other_error"></div>

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

                                <div class="row">

                                    <div class="col-lg-4 mb-3">

                                        <div class="form-title">

                                            <h3>Skills and Disqualifiers</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-12 mb-3">

                                        <div class="form-group">

                                            <label>Disqualifiers</label>



                                            <input type="text" class="form-control vol_disqu" name="vol_skills_disqualifiers" placeholder="Enter here" value="<?= $this->disqualifiers() ?>">

                                            <div class="marker" id="vol_disqu_error"></div>

                                        </div>

                                    </div>

                                    <div class="col-lg-12 mb-3">

                                        <div class="form-title">

                                            <h3>Skills Needed</h3>

                                        </div>

                                    </div>

                                    <div class="col-lg-12 mb-3">

                                        <div class="row">


                                            <?php foreach ($this->skills as $skill) { ?>

                                                <div class="col-12 col-lg-3 mb-3">

                                                    <div class="form-check d-flex align-items-center">

                                                        <label class="form-check-label">

                                                            <input type="checkbox" <?= $this->checkIfReportValueMatches("skills_needed", $skill); ?> class="form-check-input vol_eme" name="vol_skills_needed[]" value="<?php echo $skill['value'] ?>"><?php echo $skill['label'] ?>

                                                        </label>

                                                        <div class="marker" id="vol_eme_error"></div>



                                                    </div>

                                                </div>

                                            <?php } ?>

                                        </div>

                                    </div>


                                    <div class="row">

                                        <!-- <div class="col-lg-6 d-flex justify-content-end">

                                    <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                </div> -->

                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                            <a href="javascript:void(0);" class="btn btn-primary step-button form-next" name="save" value="save" title="Next" id="step-btn-4">Next</a>
                                            <!-- <button class="btn btn-outline-primary" id="step-btn-4" value="save" name="save" title="Next">Next</button>-->
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div id="step-5" class="main-form-section w-100 form-section">
                            <div>
                                <div class="row">
                                    <?php $this->render_audience_section(); ?>
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <div>                                                                        
                                        <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                        <button class="btn btn-outline-primary" value="save" name="save" title="Submit">Submit</button>
                                        </div>

                                    </div>

                                </div>

                            

                            </div>

                        </div>

                        </form>

                        <!--</div>-->

                    </div>

                </div>

            </div>

        </div>

        </div>


<?php

    }
}
