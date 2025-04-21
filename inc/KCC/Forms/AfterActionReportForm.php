<?php

namespace KCC\Forms;

use \KCC\User;


class AfterActionReportForm extends Form
{

    protected $autofill = false;

    protected $report_type_slug = 'after-action-report';


    protected $schema =
    [
        "form" => [
            "title" => "After Action Report",
            "steps" => [
                [
                    "id" => "step-1",
                    "title" => "General information",
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
                    "title" => "Report Details",
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
                    "title" => "Feedback and Follow-up",
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
                    "title" => "Complete",
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
                ]
            ]
        ],
        "hidden_fields" => [
            ["type" => "hidden", "name" => "group_id", "value" => "dynamic"],
            ["type" => "hidden", "name" => "rf_id", "value" => "dynamic"],
            ["type" => "hidden", "name" => "report_id", "value" => "DSR-{random}"],
            ["type" => "hidden", "name" => "action", "value" => "kcc_form_submit"],
            ["type" => "hidden", "name" => "reportsforms_nonce", "value" => "dynamic"]
        ]

    ];

    private $form_fields = array(
        // Contact Information Section
        'disaster_name' => array(
            'label' => 'Name of Disaster',
            'type' => 'text',
            'required' => true,
            'section' => 'Contact Information'
        ),
        'date_submitted' => array(
            'label' => 'Date Submitted',
            'type' => 'date',
            'required' => true,
            'section' => 'Contact Information'
        ),
        'time_submitted' => array(
            'label' => 'Time Submitted',
            'type' => 'time',
            'required' => true,
            'section' => 'Contact Information'
        ),
        'organization_name' => array(
            'label' => 'Name of Organization',
            'type' => 'text',
            'required' => true,
            'section' => 'Contact Information'
        ),
        'submitter_name' => array(
            'label' => 'Submitted By',
            'type' => 'text',
            'required' => true,
            'readonly' => true,
            'section' => 'Contact Information'
        ),
        'submitter_phone' => array(
            'label' => 'Contact phone',
            'type' => 'number',
            'required' => true,
            'max_length' => 10,
            'section' => 'Contact Information'
        ),
        'submitter_email' => array(
            'label' => 'Contact E-mail',
            'type' => 'text',
            'required' => true,
            'readonly' => true,
            'section' => 'Contact Information'
        ),
        'submitter_supervisor' => array(
            'label' => 'Supervisor Name',
            'type' => 'text',
            'required' => true,
            'section' => 'Contact Information'
        ),

        // Report Details Section
        'shift_reported' => array(
            'label' => 'Shift Reported Covers',
            'type' => 'text',
            'required' => true,
            'section' => 'Report Details'
        ),
        'shift_start_date' => array(
            'label' => 'Start Date',
            'type' => 'date',
            'required' => true,
            'section' => 'Report Details'
        ),
        'shift_end_date' => array(
            'label' => 'End Date',
            'type' => 'date',
            'required' => true,
            'section' => 'Report Details'
        ),
        'assignment_title' => array(
            'label' => 'Assignment Title',
            'type' => 'text',
            'required' => true,
            'section' => 'Report Details'
        ),
        'work_address' => array(
            'label' => 'Address where work was conducted',
            'type' => 'text',
            'required' => false,
            'section' => 'Report Details'
        ),
        'team_members' => array(
            'label' => 'Team Members',
            'type' => 'text',
            'required' => true,
            'section' => 'Report Details'
        ),

        // Tasks Section
        'tasks' => array(
            'label' => 'Tasks',
            'type' => 'repeater',
            'fields' => array(
                'task' => array(
                    'label' => 'Task',
                    'type' => 'textarea',
                    'required' => true,
                ),
                'task_status' => array(
                    'label' => 'Task Status',
                    'type' => 'select',
                    'options' => array('Completed', 'Incomplete', 'Need Attention'),
                    'required' => true,
                ),
            ),
            'min' => 1,
            'max' => 3,
            'section' => 'Tasks'
        ),

        // What Worked Section
        'what_worked' => array(
            'label' => 'What Worked',
            'type' => 'repeater',
            'fields' => array(
                'worked_item' => array(
                    'label' => 'What worked',
                    'type' => 'textarea',
                    'required' => true,
                ),
            ),
            'min' => 1,
            'max' => 3,
            'section' => 'What worked'
        ),

        // What needs improvement Section
        'what_needs_improvement' => array(
            'label' => 'What Needs Improvement',
            'type' => 'repeater',
            'fields' => array(
                'improvement_item' => array(
                    'label' => 'What needs improvement',
                    'type' => 'textarea',
                    'required' => true,
                ),
            ),
            'min' => 1,
            'max' => 3,
            'section' => 'What needs improvement'
        ),

        // Follow-up actions Section
        'follow_up_actions' => array(
            'label' => 'Follow-up Actions',
            'type' => 'repeater',
            'fields' => array(
                'follow_up_action' => array(
                    'label' => 'Follow-up Action',
                    'type' => 'textarea',
                    'required' => true,
                ),
                'taken_by' => array(
                    'label' => 'Action will be taken by',
                    'type' => 'select',
                    'options' => array('My team will complete this action', 'Another team needs to complete this action'),
                    'required' => true,
                ),
            ),
            'min' => 1,
            'max' => 3,
            'section' => 'Follow-up actions'
        ),

        // Additional information Section
        'supplies_needed' => array(
            'label' => 'Supplies needed to complete the work',
            'type' => 'textarea',
            'required' => true,
            'section' => 'Additional information'
        ),
        'add_info' => array(
            'label' => 'Additional Information',
            'type' => 'textarea',
            'required' => false,
            'section' => 'Additional information'
        ),

    );

    protected $abbreviation = "AAR";


    public function __construct($report_id = null)
    {
        parent::__construct($report_id);
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
        } else {
            // get the current user's country
            $user = new User(get_current_user_id());
            $country = $user->country();
        }

        return $this->selectIfReportValueMatches($country, 'incident_country');
    }


    public function date_submitted()
    {
        if ($this->report_post_id()) {
            return $this->report->date_submitted();
        }
        if ($this->autofill) {
            return date('Y-m-d');
        }
        return date('Y-m-d');
    }

    public function time_submitted()
    {
        if ($this->report_post_id()) {
            return $this->report->time_submitted();
        }
        if ($this->autofill) {
            return date('H:i');
        }
        return date("H:i");
    }

    public function disaster_name()
    {

        if ($this->report_post_id()) {
            return $this->report->disaster_name();
        }
        if ($this->autofill) {
            return 'Hurricane Joe';
        }
        return '';
    }

    public function organization_name()
    {
        if ($this->report_post_id()) {
            return $this->report->organization_name();
        }
        if ($this->autofill) {
            return 'Organization Name';
        }
        return '';
    }

    public function submitter_name()
    {
        if ($this->report_post_id()) {
            return $this->report->submitter_name();
        }
        if ($this->autofill) {
            return 'Submitter Name';
        }
        return '';
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

    public function contact_email()
    {

        if ($this->report_post_id()) {
            return $this->report->contact_email();
        }
        if ($this->autofill) {
            return '1234567890';
        }
        return '';
    }

    public function supervisor_name(){
        if ($this->report_post_id()) {
            return $this->report->supervisor_name();
        }
        if ($this->autofill) {
            return 'Supervisor Name';
        }
        return '';
    }
    public function shift_reported_covers()
    {
        if ($this->report_post_id()) {
            return $this->report->shift_reported_covers();
        }
        if ($this->autofill) {
            return 'Shift Reported Covers';
        }
        return '';
    }

    public function action_address()
    {
        if ($this->report_post_id()) {
            return $this->report->action_address();
        }
        if ($this->autofill) {
            return 'Action Address';
        }
        return '';
    }

    public function action_zipcode()
    {
        if ($this->report_post_id()) {
            return $this->report->action_zipcode();
        }
        if ($this->autofill) {
            return '123456';
        }
        return '';
    }

    public function shift_start_date($fmt = 'Y-m-d')
    {
        if ($this->report_post_id()) {
            return $this->report->shift_start_date($fmt);
        }
        if ($this->autofill) {
            return date($fmt);
        }
        return false;
    }

    public function shift_end_date($fmt = 'Y-m-d')
    {
        if ($this->report_post_id()) {
            return $this->report->shift_end_date($fmt);
        }
        if ($this->autofill) {
            return date($fmt);
        }
        return false;
    }

    public function assignment_title()
    {
        if ($this->report_post_id()) {
            return $this->report->assignment_title();
        }
        if ($this->autofill) {
            return 'Assignment Title';
        }
        return '';
    }

    public function team_members()
    {
        if ($this->report_post_id()) {
            return $this->report->team_members();
        }
        if ($this->autofill) {
            return 'Bill<br>Joe<br>Mary<br>John';
        }
        return '';
    }



    public function render_hidden_fields()
    {
        parent::render_hidden_fields();
?>
        <input type="hidden" name="post_title" value="<?= strtoupper($this->report_slug()); ?>">
    <?php
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

                                                    <h3>General information</h3>


                                                </div>
                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Name of the Disaster *</label>

                                                    <input type="text" class="form-control dis_name" name="disaster_name" Placeholder="Enter report name" value="<?= $this->disaster_name(); ?>" required>

                                                    <div class="marker form-error" id="post_title_error"></div>

                                                </div>

                                            </div>


                                            <div class="col-lg-4 mb-3 ">

                                                <div class="form-group">

                                                    <label>Date Submitted *</label>

                                                    <input type="date" class="form-control sur_da" name="date_submitted" placeholder="Enter here" required="" value="<?= $this->date_submitted(); ?>">

                                                </div>

                                                <div class="marker" id="sur_da_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3 ">

                                                <div class="form-group">

                                                    <label>Time Submitted *</label>

                                                    <input type="time" class="form-control sur_ti" name="time_submitted" placeholder="Enter here" required="" value="<?= $this->time_submitted(); ?>">

                                                </div>

                                                <div class="marker" id="sur_ti_error"></div>

                                            </div>




                                            <div class="col-lg-4 mb-3 ">

                                                <div class="form-group">

                                                    <label>Name of Organization *</label>

                                                    <input type="text" class="form-control sur_na" name="organization_name" placeholder="Enter Organization Name" value="<?= $this->organization_name(); ?>" required>

                                                </div>

                                                <div class="marker" id="sur_na_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3 ">

                                                <div class="form-group">

                                                    <label>Submitted By *</label>

                                                    <input type="text" class="form-control" name="submitter_name" placeholder="Enter here" value="<?= $this->submitter_name(); ?>" required>

                                                </div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Supervisor Name *</label>

                                                    <input type="text" class="form-control sur_me" name="supervisor_name" placeholder="Enter here" valu="<?= $this->supervisor_name(); ?>" required>

                                                </div>

                                                <div class="marker" id="sur_me_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3 ">

                                                <div class="form-group">

                                                    <label>Contact phone *</label>

                                                    <input type="number" class="form-control con_ph" onkeypress="if(this.value.length==10) return false;" min="0" name="contact_phone" onclick="" placeholder="Enter here" value="<?= $this->contact_phone(); ?>" required>

                                                </div>

                                                <div class="marker" id="con_ph_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Contact E-mail *</label>

                                                    <input type="text" class="form-control sur_con" name="contact_email" placeholder="Enter here" value="<?= $this->contact_email(); ?>" required>

                                                </div>

                                                <div class="marker" id="sur_con_error"></div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-disabled step-button form-next" title="Next" id="step-btn-1">Next</a>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div id="step-2" class="main-form-section w-100 form-section">

                                    <div>


                                        <div class="row">
                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Report Details</h3>


                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Shift Reported Covers *</label>

                                                    <input type="text" class="form-control af_sh" name="shift_reported_covers" placeholder="Enter Shift Coverage" value="<?= $this->shift_reported_covers(); ?>">

                                                </div>

                                                <div class="marker" id="af_sh_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Start Date *</label>

                                                    <input type="date" class="form-control af_st" name="shift_start_date" placeholder="Enter here " value="<?= $this->shift_start_date(); ?>">

                                                </div>

                                                <div class="marker" id="af_st_error"></div>

                                            </div>
                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>End Date *</label>

                                                    <input type="date" class="form-control af_en" name="shift_end_date" placeholder="Enter here " value="<?= $this->shift_end_date(); ?>">

                                                </div>

                                                <div class="marker" id="af_en_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>Assignment Title *</label>

                                                    <input type="text" class="form-control af_as" name="assignment_title" placeholder="Enter here " value="">

                                                </div>

                                                <div class="marker" id="af_as_error"></div>

                                            </div>

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
                                                        echo Forms::countrySelect('country', 'country', $this->country(), 'state', true); 
                                                    ?>

                                                </div>

                                                <div class="marker" id="sur_coun_error"></div>

                                            </div>

                                            <div class="col-lg-4 mb-3">

                                                <div class="form-group">

                                                    <label>State</label>

                                                    <?php
                                                    $args = [
                                                        'country' => $this->country(),
                                                        'id' => 'state',
                                                        'name' => 'state',
                                                        'selected' => $this->state(),
                                                        'change_target' => null,
                                                        'required' => true,
                                                    ];
                                                    echo Forms::stateSelect('state', 'state', $this->state(), null, true);
                                                     ?>

                                                </div>

                                                <div class="marker" id="sur_sta_error"></div>

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



                                            <?php
                                            $args = array(
                                                'id' => 'action_address',
                                                'name' => 'action_address',
                                                'label' => 'Address *',
                                                'value' => $this->action_address(),
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

                                                    <label>Zip Code *</label>

                                                    <input type="number" class="form-control sur_zip" onKeyPress="if(this.value.length==6) return false;" min="0" name="action_zipcode" placeholder="Enter here" value="<?= $this->action_zipcode(); ?>">
                                                </div>

                                                <div class="marker" id="sur_zip_error"></div>

                                            </div>

                                            <div class="col-lg-6 mb-3">

                                                <div class="form-group">

                                                    <label>Team Members *</label>

                                                    <textarea class="form-control af_te" name="team_members" placeholder="Enter team members (one per line)" rows="4"></textarea>

                                                    <div class="marker" id="af_te_error"></div>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 mb-3">

                                                <div class="form-title">

                                                    <h3>Tasks</h3>

                                                </div>
                                            </div>

                                            <div class="col-lg-12 repeater-container">
                                                <div class="repeater-fields" data-min="1" data-max="3">
                                                    <div class="repeater-item row">
                                                        <div class="col-lg-4 mb-3">
                                                            <div class="form-group">
                                                                <label>Task *</label>
                                                                <input type="text" class="form-control task-field" name="tasks[0][task]" placeholder="Enter task description" required>
                                                                <div class="marker task-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-3">
                                                            <div class="form-group">
                                                                <label>Task Status *</label>
                                                                <select class="form-control task-status-field" name="tasks[0][task_status]" required>
                                                                    <option value="">Select status</option>
                                                                    <option value="Complete">Complete</option>
                                                                    <option value="Incomplete">Incomplete</option>
                                                                    <option value="Needs Attention">Needs Attention</option>
                                                                </select>
                                                                <div class="marker task-status-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-3 text-end">
                                                            <button type="button" class="btn btn-danger btn-sm remove-repeater-item">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <button type="button" class="btn btn-success btn-sm add-repeater-item">Add Another Task</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                                <a href="javascript:void(0);" class="btn btn-primary step-button form-next" title="Next" id="">Next</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div id="step-3" class="main-form-section w-100 form-section">
                                    <div>
                                        <div class="row">

                                            <div class="col-lg-12 mb-3">
                                                <div class="form-title">
                                                    <h3>What worked</h3>
                                                    <p>
                                                        Please provide a brief description of what worked well during the shift. This could include successful strategies, effective communication, or any other positive aspects of the shift.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 repeater-container">
                                                <div class="repeater-fields" data-min="1" data-max="3">
                                                    <div class="repeater-item row">
                                                        <div class="col-lg-8 mb-3">
                                                            <div class="form-group">
                                                                <label>What worked *</label>
                                                                <textarea class="form-control worked-field" name="what_worked[0][worked_item]" placeholder="Enter what worked well" rows="3" required></textarea>
                                                                <div class="marker worked-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-3 text-end">
                                                            <button type="button" class="btn btn-danger btn-sm remove-repeater-item">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <button type="button" class="btn btn-success btn-sm add-repeater-item">Add Another Item</button>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 mb-3">
                                                <div class="form-title">
                                                    <h3>What needs improvement</h3>
                                                    <p>
                                                        Please provide a brief description of what needs improvement. This could include challenges, inefficiencies, or areas that require attention.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 repeater-container">
                                                <div class="repeater-fields" data-min="1" data-max="3">
                                                    <div class="repeater-item row">
                                                        <div class="col-lg-8 mb-3">
                                                            <div class="form-group">
                                                                <label>What needs improvement *</label>
                                                                <textarea class="form-control improvement-field" name="what_needs_improvement[0]" placeholder="Enter what needs improvement" rows="3" required></textarea>
                                                                <div class="marker improvement-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-3 text-end">
                                                            <button type="button" class="btn btn-danger btn-sm remove-repeater-item">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <button type="button" class="btn btn-success btn-sm add-repeater-item">Add Another Item</button>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 mb-3">
                                                <div class="form-title">
                                                    <h3>Follow-up actions</h3>
                                                    <p>
                                                        Please list any actions that need to be taken as a result of this report.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 repeater-container">
                                                <div class="repeater-fields" data-min="1" data-max="3">
                                                    <div class="repeater-item row">
                                                        <div class="col-lg-6 mb-3">
                                                            <div class="form-group">
                                                                <label>Follow-up Action *</label>
                                                                <textarea class="form-control followup-field" name="follow_up_actions[0][follow_up_action]" placeholder="Enter follow-up action" rows="3" required></textarea>
                                                                <div class="marker followup-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 mb-3">
                                                            <div class="form-group">
                                                                <label>Action will be taken by *</label>
                                                                <select class="form-control taken-by-field" name="follow_up_actions[0][taken_by]" required>
                                                                    <option value="">Select</option>
                                                                    <option value="My team will complete this action">My team</option>
                                                                    <option value="Another team needs to complete this action">Another team</option>
                                                                </select>
                                                                <div class="marker taken-by-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-3 text-end">
                                                            <button type="button" class="btn btn-danger btn-sm remove-repeater-item">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <button type="button" class="btn btn-success btn-sm add-repeater-item">Add Another Action</button>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 mb-3">
                                                <div class="form-title">
                                                    <h3>Additional information</h3>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <div class="form-group">
                                                    <label>Supplies needed to complete the work *</label>
                                                    <textarea class="form-control supplies-field" name="supplies_needed" placeholder="Enter supplies needed" rows="3" required></textarea>
                                                    <div class="marker supplies-error"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <div class="form-group">
                                                    <label>Additional Information</label>
                                                    <textarea class="form-control additional-info-field" name="add_info" placeholder="Enter any additional information" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <a href="javascript:void(0);" class="btn btn-primary step-button form-back" title="Back">Back</a>
                                                <a href="javascript:void(0);" class="btn btn-primary step-button form-next" title="Next" id="">Next</a>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div id="step-4" class="main-form-section w-100 form-section">

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
