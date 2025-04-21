<?php

namespace KCC\Forms;

use KCC\User;

class Form
{

    protected $group_id;
    protected $group;
    protected $report_id;
    protected $report;
    protected $schema;
    protected $form_name;
    protected $abbreviation;
    protected $report_class;

    protected $term;

    protected $report_type_slug;
    protected $report_type;

    protected $autofill = false;

    protected $disaster_types = [
        "rows" => [
            [
                "form-groups" => [
                    [
                        "class" => "col-lg-12 col-md-12 col-sm-12 mb-3",
                        "group-elements" => [
                            [
                                "type" => "checkbox_select",
                                "id" => "severe_weather",
                                "name" => "disaster_types[]",
                                "class" => "col-12 mb-3",
                                "value" => "severe_weather",
                                "label" => "Severe Weather",
                                "select" => [
                                    "id" => "severe_weather_type",
                                    "name" => "severe_weather_type",
                                    "class" => "col-12 mb-3",
                                    "disabled_if_parent_unchecked" => true,
                                    "parent" => "disaster_types",
                                    "parent_value" => "severe_weather",
                                    "options" => [
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
                                "type" => "checkbox",
                                "id" => "fire_emergency",
                                "name" => "disaster_types[]",
                                "class" => "col-12 mb-3",
                                "value" => "fire_emergency",
                                "label" => "Fire Emergency",
                            ],
                            [
                                "type" => "checkbox",
                                "id" => "hazardous_material",
                                "name" => "disaster_types[]",
                                "class" => "col-12 mb-3",
                                "value" => "hazardous_material",
                                "label" => "Hazardous Material/Spill/ Chemical Release",
                            ],
                            [
                                "type" => "checkbox",
                                "id" => "medical_emergency",
                                "name" => "disaster_types[]",
                                "class" => "col-12 mb-3",
                                "value" => "medical_emergency",
                                "label" => "Medical Emergency/Mass Casualty",
                            ],
                            [
                                "type" => "checkbox",
                                "id" => "missing_persons",
                                "name" => "disaster_types[]",
                                "class" => "col-12 mb-3",
                                "value" => "missing_persons",
                                "label" => "Missing Persons",
                            ],
                            [
                                "type" => "checkbox",
                                "id" => "utility_outage",
                                "name" => "disaster_types[]",
                                "class" => "col-12 mb-3",
                                "value" => "utility_outage",
                                "label" => "Utility Outage",
                            ],
                            [
                                "type" => "checkbox_select",
                                "id" => "structural_disaster",
                                "name" => "disaster_types[]",
                                "class" => "col-12 mb-3",
                                "value" => "structural_disaster",
                                "label" => "Structural Disaster",
                                "select" => [
                                    "id" => "structural_disaster_type",
                                    "name" => "structural_disaster_type",
                                    "class" => "col-12 mb-3",
                                    "disabled_if_parent_unchecked" => true,
                                    "parent" => "disaster_types",
                                    "parent_value" => "structural_disaster",
                                    "options" => [
                                        ["value" => "Collapse", "label" => "Collapse"],
                                        ["value" => "Weakened Structures", "label" => "Weakened Structures"],
                                    ]
                                ]
                            ],
                            [
                                "type" => "checkbox",
                                "id" => "workplace_violence",
                                "name" => "disaster_types[]",
                                "class" => "col-12 mb-3",
                                "value" => "workplace_violence",
                                "label" => "Workplace Violence or Threat of Violence",
                            ],
                            [
                                "type" => "checkbox",
                                "id" => "epidemic_pandemic",
                                "name" => "disaster_types[]",
                                "class" => "col-12 mb-3",
                                "value" => "epidemic_pandemic",
                                "label" => "Epidemic / Pandemic Outbreak",
                            ],
                            [
                                "type" => "checkbox_select",
                                "id" => "terrorist_attack",
                                "name" => "disaster_types[]",
                                "class" => "col-12 mb-3",
                                "value" => "terrorist_attack",
                                "label" => "Terrorist Attack",
                                "hide_if_unchecked" => true,
                                "select" => [
                                    "id" => "terrorist_attack_type",
                                    "name" => "terrorist_attack_type",
                                    "disabled_if_parent_unchecked"=>true,
                                    "parent"=>"disaster_types",
                                    "parent_value"=>"terrorist_attack",
                                    "options" => [
                                        ["value" => "Bomb/Explosion", "label" => "Bomb/Explosion"],
                                        ["value" => "Shooting", "label" => "Shooting"],
                                        ["value" => "Biological Attack/Chemical Release", "label" => "Biological Attack/Chemical Release"]
                                    ]
                                ]
                            ],
                            [
                                "type" => "checkbox",
                                "id" => "radiological_event",
                                "name" => "disaster_types[]",
                                "class" => "col-lg-6 col-md-12 col-sm-12 mb-3",
                                "value" => "radiological_event",
                                "label" => "Radiological Event",
                            ],
                            [
                                "type" => "checkbox",
                                "id" => "nuclear_power_disasters",
                                "name" => "disaster_types[]",
                                "class" => "col-12 mb-3",
                                "value"=> "nuclear_power_disasters",
                                "label" => "Nuclear Power Disasters"
                            ],
                            [
                                "type" => "checkbox_text",
                                "id" => "other_disaster",
                                "class" => "col-12 mb-3",
                                "name" => "disaster_types[]",
                                "value" => "other_disaster",
                                "label" => "Other",
                                "text" => [
                                    "id" => "other_disaster",
                                    "name" => "other_disaster",
                                    "placeholder" => "Other Disaster Type",
                                    "parent" => "disaster_types",
                                    "parent_value" => "other_disaster",
                                    "disabled_if_parent_unchecked" => true,
                                ],
                            ]
                        ]
                    ]
                ]
            ]
        ],



    ];

    public function __construct($report_id = null)
    {
        $args = array();


        if (isset($_GET['autofill'])) {
            $this->autofill = true;
        }

        $this->report_id = $report_id;
        if ($report_id) {

            $report_class =  get_class($this);
            // remove "Form" from the end of the class name
            $report_class = substr($report_class, 0, -4);

            // change Form to Report 
            $report_class = str_replace('Forms', 'Reports', $report_class);

            $this->report = new $report_class($report_id);
            $this->group_id = $this->report->group_id();
            $this->group = new \KCC\Group($this->group_id);
        }

        $this->report_type = \KCC\Reports\ReportType::fromSlug($this->report_type_slug);
    }



    public function set_group($group_id)
    {
        $this->group_id = $group_id;
        $this->group = new \KCC\Group($group_id);
    }

    public function set_report($report_post_id)
    {
        $this->report_id = $report_post_id;
        $report_class = 'KCC\Reports\\' . $this->report_class;
        $this->report = new $report_class($report_post_id);
    }

    public function schema()
    {
        return $this->schema;
    }

    public function back_link()
    {
        if ($this->report_post_id()) {
            return $this->report->permalink();
        }
        if (!empty($this->group)) {
            return $this->group->permalink();
        }
        return site_url('reports/' . $this->report_type_slug);
    }


    public function group_permalink()
    {
        if ($this->group_id) {
            return $this->group->permalink();
        } else {
            return '';
        }
    }

    public function group_post_id()
    {
        if ($this->group_id) {
            return $this->group_id;
        } else {
            return '0';
        }
    }

    public function abbreviation()
    {
        if ($this->abbreviation) {
            return $this->abbreviation;
        } else {
            return 'kcc';
        }
    }

    public function report_post_id()
    {
        if ($this->report_id) {
            return $this->report_id;
        } else {
            return '';
        }
    }

    public function report_title()
    {
        if ($this->report_id) {
            return $this->report->title();
        } else
        if ($this->autofill == true) {
            return "Test Report";
        } else {
            return '';
        }
    }

    public function report_slug()
    {
        // this will be the post name if report_id is set, otherwise it will be the abbreviation-group_post_id-current_user_id-timestamp
        if ($this->report_id) {
            // return the post_name of the post with report_id
            return $this->report->slug();
        } else {
            return $this->abbreviation() . '-' . $this->group_post_id() . '-' . get_current_user_id() . '-' . time();
        }
    }



    /* these functions are to help with the autofill of the form fields */

    protected function country()
    {
        if (!empty($this->report_id)) {
            return $this->report->country();
        }

        // for all country fields, return the user's country as default
        $user = new \KCC\User(get_current_user_id());
        $country = $user->country();
        if (empty($country)) {
            return '';
        }
        return $country;
    }

    protected function state()
    {
        if (!empty($this->report_id)) {
            return $this->report->state();
        }

        // for all state fields, return the user's state as default
        $user = new \KCC\User(get_current_user_id());
        $state = $user->state();
        if (empty($state)) {
            return '';
        }
        return $state;
    }

    protected function city()
    {
        if (!empty($this->report_id)) {
            return $this->report->city();
        }

        // for all city fields, return the user's city as default
        $user = new \KCC\User(get_current_user_id());
        $city = $user->city();
        if (empty($city)) {
            return '';
        }
        return $city;
    }

    public function disaster_name(){

        if($this->report_post_id()){
            return $this->report->disaster_name();
        }
        return '';

    }


    /* Disaster Type functions are common to many forms */
    public function disaster_type_checked($type)
    {

        if ($this->report_post_id()) {
            return ($this->report->disaster_type_checked($type)) ? 'checked' : '';
        }
        return '';
    }

    public function disaster_type_other_comment()
    {
        if ($this->report_post_id()) {
            return $this->report->disaster_type_other_comment();
        }
        return '';
    }


    // functions to help keep the markup clean and meaningful
    public function select_if_selected($select, $option)
    {
        if ($this->report_post_id()) {

            $meta = $this->report->meta($select['name']);
            if ($meta == $option) {
                return 'selected';
            }
        }
        return '';
    }

    // checks an array value to see if it's checked or not, and returns disabled. 
    public function disabled_if_field_unchecked($field, $checked)
    {
        if ($this->report_post_id()) {
            $meta = $this->report->meta($field);
            
            if(is_string($meta)){
                $meta = explode(',', $meta);
            }
            if (in_array($checked, $meta)) {
                return '';
            }
            return 'disabled';
        }
        return 'disabled';
    }

    public function hide_if_field_unchecked( $field, $checked)
    {
        if ($this->report_post_id()) {

            // remove [] from the field if it's there using regex.
            $field = preg_replace('/\[\]$/', '', $field);

            $meta = $this->report->meta($field);


            // if it's' a string split on comma

            if (is_string($meta)) {
                $meta = explode(',', $meta);
            }

            if (in_array($checked, $meta)) {
                return '';
            }
            return 'style="display:none;"';
        }
        return 'style="display:none;"';
    }

    // checks a singular value to see if it's checked or not, and returns disabled.
    public function disabled_if_field_empty($field)
    {
        if ($this->report_post_id()) {
            $meta = $this->report->meta($field);
            if (empty($meta)) {
                return 'disabled';
            }
            return '';
        }
        return 'disabled';
    }

    // checks a singular value to see if it's empty or not, and returns style="display:none;"
    public function hide_if_field_empty($field)
    {
        if ($this->report_post_id()) {
            $meta = $this->report->meta($field);
            if (empty($meta)) {
                return 'style="display:none;"';
            }
            return '';
        }
        return 'style="display:none;"';
    }

    // i don't know what this doees.
    public function disaster_type_select($type)
    {
        if ($this->report_post_id()) {
            return $this->report->disaster_type_select($type);
        }
        return '';
    }

    public function other_disaster_details(){
        if($this->report_post_id()){
            return $this->report->other_disaster_details();
        }
        return '';
    }


    /* 
        Methods for rendering form components in a programmatic way 
        Current implementation is using PHP arrays in the form class, on the way towards 
        running frm a JSON schema, which will then take you to your database.
    */

    public function render_row($row)
    {
?>
        <div class="col-lg-12 mb-3 d-lg-flex d-md-block d-sm-block">
            <?php foreach ($row['form-groups'] as $group) {
                $this->render_group($group);
            }
            ?>
        </div>
    <?

    }

    public function render_group($group)
    {
    ?>
        <div class="<?= $group['class']; ?>">
            <div class='form-group'>
                <?php
                foreach ($group['group-elements'] as $element) {
                    $function = "render_" . $element['type'];
                    $this->$function($element);
                }
                ?>
            </div>
        </div>
    <?php

    }

    /**
     * Renders a checkbox form element.
     *
     * This method creates a Bootstrap-styled checkbox with various configuration options:
     * - Can be disabled automatically if unchecked
     * - Can be disabled based on the state of a parent checkbox
     * - Supports custom control classes
     * - Auto-checks based on existing report values
     *
     * @param array $checkbox Configuration array with the following keys:
     *      - 'name' (string): Name attribute for the checkbox
     *      - 'value' (string): Value attribute for the checkbox
     *      - 'label' (string): Label text to display next to the checkbox
     *      - 'type' (string, optional): Type of control. Defaults to "checkbox"
     *      - 'disable_if_unchecked' (bool, optional): Whether to disable this checkbox when it's unchecked
     *      - 'disabled_if_parent_unchecked' (bool, optional): Whether to disable this checkbox when its parent is unchecked
     *      - 'parent' (string, optional): Name of the parent checkbox field (required if disabled_if_parent_unchecked is true)
     *      - 'parent_value' (string, optional): Value of the parent checkbox (required if disabled_if_parent_unchecked is true)
     * 
     * @return void Outputs HTML directly
     */
    public function render_checkbox($checkbox)
    {
        $disabled_if_unchecked = isset($checkbox['disable_if_unchecked']) && $checkbox['disable_if_unchecked'] == true;
        $disabled_if_parent_unchecked = isset($checkbox['disabled_if_parent_unchecked']) && $checkbox['disabled_if_parent_unchecked'] == true;
        
        if($disabled_if_parent_unchecked){
            $parent_method= $checkbox['parent'];
            $parent_value= $checkbox['parent_value'];
        }

        if($checkbox['type'] != "checkbox"){
            $control_class = str_replace("_","-", $checkbox['type']);
        }
        else{
            $control_class="";
        }

        $checked = $this->checkIfReportValueMatches($checkbox['name'], $checkbox['value']);
        
    ?>
        <div class="form-check d-flex align-items-center">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input <?= $control_class; ?>"
                    value="<?= $checkbox['value']; ?>"
                    name="<?= $checkbox['name']; ?>"
                    <?= ($disabled_if_unchecked) ? $this->disabled_if_field_unchecked($checkbox['name'], $checkbox['value']) : ''; ?>
                    <?= ($disabled_if_parent_unchecked) ? $this->disabled_if_field_unchecked($parent_method, $parent_value) : ''; ?>
                    <?= $checked ?>>
                <?= $checkbox['label']; ?>
            </label>
        </div>
    <?php

    }

    

    /**
     * Renders a text input field.
     *
     * This method creates an HTML text input field with various conditional behaviors
     * such as disabling or hiding based on the state of other fields.
     *
     * @param array $text An associative array containing the following keys:
     *      - name (string): The name attribute for the input field, also used as a method name to retrieve the value
     *      - class (string): CSS class(es) to apply to the input field
     *      - placeholder (string): Placeholder text for the input field
     *      - disable_if_unchecked (bool, optional): If true, disables this field when unchecked
     *      - disabled_if_parent_unchecked (bool, optional): If true, disables this field when its parent is unchecked
     *      - hide_if_parent_unchecked (bool, optional): If true, hides this field when its parent is unchecked
     *      - parent (string, optional): The name of the parent field (required if parent-related conditions are used)
     *      - parent_value (mixed, optional): The value of the parent field to check against
     *      - value (mixed, optional): The value to check against for disabling the field
     *
     * @return void Outputs HTML for the text input field
     */
    public function render_text($text)
    {
        
        /**
         * Check if text field should be disabled or hidden based on configuration
         * 
         * These flags determine whether the text input should:
         * - be disabled based on parent checkbox state
         * - be hidden based on parent checkbox state
         */
        $check_disabled = (isset($text['disabled_if_parent_unchecked']) && $text['disabled_if_parent_unchecked'] == true);
        

        if($check_disabled){
            $check_disabled = $this->disabled_if_field_unchecked($text['parent'], $text['parent_value']);
        }
        
        $check_hide = isset($text['hide_if_parent_unchecked']) && $text['hide_if_parent_unchecked'] == true;
        
        $function = $text['name'];
    ?>
        <div class='text-container' <?= ($check_hide) ? $this->hide_if_field_unchecked($text['parent'],$text['parent_value']) : ''; ?>>
            <input type="text" class="form-control <?= $text['class']; ?>"
                name="<?= $text['name']; ?>"
                placeholder="<?= $text['placeholder']; ?>"
                value="<?= $this->$function(); ?>"
                <?= $check_disabled; ?>
                >
        </div>
    <?php
    }

    public function render_checkbox_text($checkbox_text)
    {
    ?>
        <div class='checkbox-text-container'>
            <?= $this->render_checkbox($checkbox_text); ?>
            <?= $this->render_text($checkbox_text['text']); ?>
        </div>
    <?php
    }


    public function render_checkbox_textarea($checkbox_textarea)
    {
    ?>
        <div class='checkbox-textarea-container'>
            <div class="form-check d-flex align-items-center">
                <label class="form-check-label">
                    <input type="checkbox"
                        id="<?= $checkbox_textarea['id']; ?>"
                        class="form-check-input checkbox-textarea"
                        value="<?= $checkbox_textarea['value']; ?>"
                        name="<?= $checkbox_textarea['name']; ?>">
                    <?= $checkbox_textarea['label']; ?>
                </label>
            </div>
            <textarea
                id="<?= $checkbox_textarea['textarea_id']; ?>"
                class="form-control mt-2"
                name="<?= $checkbox_textarea['textarea_name']; ?>"
                placeholder="<?= $checkbox_textarea['textarea_placeholder']; ?>"
                style="display: none;"></textarea>
        </div>
    <?php
    }

    public function render_checkbox_checkboxes($checkbox_checkboxes)
    {

    ?>

        <div class='checkbox-checkboxes-container d-flex mb-3'>
            <div class='checkbox'>
                <div class="form-check d-flex align-items-center">

                    <label class="form-check-label">
                        <input
                            type="checkbox"
                            id="<?= $checkbox_checkboxes['id']; ?>"
                            class="form-check-input checkbox-checkboxes"
                            value="<?= $checkbox_checkboxes['value']; ?>"
                            name="<?= $checkbox_checkboxes['name']; ?>"
                            <?= $this->checkIfReportValueMatches($checkbox_checkboxes['name'], $checkbox_checkboxes['value']); ?>
                            >
                        <?= $checkbox_checkboxes['label']; ?>
                    </label>

                </div>
            </div>
            <div class='checkboxes'>
                <?php
                foreach ($checkbox_checkboxes['checkboxes']['options'] as $checkbox_option) {
                    $checkbox_option['name'] = $checkbox_checkboxes['checkboxes']['name'];
                    $function = "render_" . $checkbox_option['type'];
                    
                    $this->$function($checkbox_option);
                }
                ?>
            </div>
        </div>


    <?php
    }

    public function render_radio_checkboxes($radio_checkboxes)
    {
    ?>
        <div class='radio-checkboxes-container d-flex mb-3'>
            <div class='radio'>
                <div class="form-check d-flex align-items-center">
                    <label class="form-check-label">
                        <input
                            type="radio"
                            id="<?= $radio_checkboxes['id']; ?>"
                            class="form-check-input radio-checkboxes"
                            value="<?= $radio_checkboxes['value']; ?>"
                            name="<?= $radio_checkboxes['name']; ?>"
                            <?= $this->checkIfReportValueMatches($radio_checkboxes['name'], $radio_checkboxes['value']); ?>
                            >
                        <?= $radio_checkboxes['label']; ?>
                    </label>
                </div>
            </div>
            <div class='checkboxes'>
                <?php
                foreach ($radio_checkboxes['checkboxes']['options'] as $checkbox_option) {
                    $checkbox_option['name'] = $radio_checkboxes['checkboxes']['name'];
                    $function = "render_" . $checkbox_option['type'];
                    
                    $this->$function($checkbox_option);
                }
                ?>
            </div>
        </div>
    <?php
    }

    public function render_checkbox_select($checkbox_select)
    {

        $check_disabled = isset($checkbox_select['disable_if_unchecked']) && $checkbox_select['disable_if_unchecked'] == true;
        $check_hide = isset($checkbox_select['hide_if_unchecked']) && $checkbox_select['hide_if_unchecked'] == true;

    ?>
        <div class='checkbox-select-container mb-3'>
            <div class='checkbox'>
                <?= $this->render_checkbox($checkbox_select); ?>
            </div>
        </div>
    <?php
    }


    /* attempt at a mechanical approach to form generation.  Would not work with current build. */
    public function render_title()
    {
    ?>
        <div class="top-btn">

            <div class="d-flex justify-content-between">

                <div class="title">

                    <h2><?= $this->report_type->name(); ?></h2>

                </div>

                <div>

                    <?php foreach ($this->schema['form']['steps'] as $i => $step):
                        if ($i == 0) {
                            $href = $this->back_link();
                        } else {
                            $href = 'javascript:void(0);';
                        }
                    ?>
                    <?php endforeach; ?>

                    <a href="<?= $this->back_link(); ?>" id="back-1" class="btn btn-outline-primary" title="Back">Back</a>

                </div>

            </div>

        </div>
    <?php
    }
    public function render()
    {
    ?>
        <div class="form-box">

            <div class="report-next-tab">

                <div class="row d-flex justify-content-center">

                    <div class="col-xl-10">

                        <div class="reports-top d-flex justify-content-center">

                            <div class="d-flex w-100">

                                <?php
                                foreach ($this->schema()["form"]["steps"] as $i => $step):
                                    $id = "bd-" . ($i + 1);
                                    $circle_red = ($i == 0) ? 'circle-red' : '';
                                ?>
                                    <div class="main-box w-100">

                                        <div class="report-process text-center d-flex justify-content-center" id="<?= $id ?>">

                                            <div class="circle <?= $circle_red ?>" id="red-1"></div>

                                        </div>

                                        <div class="circle-content text-center pt-lg-4 pt-3">

                                            <?= $step["title"] ?>

                                        </div>

                                    </div>
                                <?php
                                endforeach;
                                ?>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-xl-12">

                        <div class="all-form">

                            <form id="myForm" name="form" method="POST" action="" class="row mediadoc_form" id="disaster_media" enctype="multipart/form-data">

                                <input type="hidden" name="group_id" id="group_id" value="<?php echo $this->group_id; ?>">
                                <input type="hidden" name="rf_id" id="rf_id" value="<?php echo $this->report_id; ?>">
                                <input type="hidden" name="report_id" id="report_id" value="<?php echo "DSR-12345"; ?>">
                                <input type="hidden" name="action" value="kcc_form_submit" />
                                <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />

                                <?php foreach ($this->schema()["form"]["steps"] as $i => $step):
                                    $div_id = "step-" . ($i + 1);
                                    $next_btn_id = "step-btn-" . ($i + 1);
                                ?>

                                    <div id="<?= $div_id; ?>" class="main-form-section w-100">

                                        <div>

                                            <div class="row">

                                                <?php foreach ($step['fields'] as $field): ?>


                                                    <?php $this->render_field($field); ?>

                                                <?php endforeach; ?>

                                            </div>
                                            <div class="row">

                                                <!-- <div class="col-lg-5 d-flex justify-content-end">

                                                             <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                                        </div> -->

                                                <div class="col-lg-12 d-flex justify-content-center">

                                                    <a href="javascript:void(0);" class="btn btn-primary btn-disabled" title="Next" id="<?= $next_btn_id; ?>">Next</a>

                                                </div>

                                            </div>

                                        </div>


                                    </div>

                                <?php endforeach; ?>

                        </div>



                        <div id="step-6" class="main-form-section d-none w-100">

                            <div>

                                <div class="row">

                                    <div class="col-lg-12 d-flex justify-content-center">

                                        Are you sure to submit form.

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
        <?php }


    public function render_hidden_fields()
    {

        if (!empty($this->group_post_id())) {
        ?>
            <input type="hidden" name="group_id" id="group_id" value="<?php echo $this->group->id(); ?>">
        <?php
        }

        if (!empty($this->report_post_id())) {
        ?>
            <input type="hidden" name="report_post_id" id="report_post_id" value="<?= $this->report_post_id(); ?>">
            <input type="hidden" name="report_id" id="report_id" value="<?php echo $this->report->id(); ?>">
        <?php

        }
        ?>

        <input type="hidden" name="report_slug" id="report_slug" value="<?= $this->report_slug(); ?>">
        <input type="hidden" name="action" value="submit_form" />
        <input type="hidden" name="report_type" value="<?= $this->report_type_slug; ?>" />
        <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />

        <!-- Hidden field to hold the selected group ID -->
        <input type="hidden" name="selected_groupid" id="selected_groupid" value="">
    <?php
    }

    public function render_field($field)
    {
        $render = 'render_' . $field['type'];
        $this->$render($field);
        return;
    ?>
        <div class="<?= $field['class']; ?>">
            <label for="<?= $field['id']; ?>"><?= $field['label']; ?></label>
            <?php
            pre($field['type']);
            die;
            ?>
        </div>
    <?php

    }


    public function render_select($field)
    {
        if ($field['options']['type'] == "dynamic") {
            $func = $field['options']["source"];
            $options = Forms::$func();
        } else {
            $options = $field['options']['options'];
        }



    ?>
        <div class="<?= $field['class']; ?>">

            <div class="form-group">

                <select class="form-control " name="<?= $field['name']; ?>" onchange="<?= $field['onchange']; ?>" id="<?= $field['name']; ?>">
                    <option value="">Select <?= $field['option-zero']; ?></option>
                    <?php foreach ($options as $option): ?>
                        <option value="<?= $option->shortname; ?>"><?= $option->name; ?></option>
                    <?php endforeach; ?>
                </select>

            </div>

            <!-- <div class="marker" id="country_error"></div> -->

        </div>
    <?php
    }

    public function render_section($field)
    {

    ?>
        <div class="col-lg-12 mb-3">
            <div class="form-title">
                <h3><?= $field['title']; ?></h3>
            </div>
        </div>
        <?php
        foreach ($field['fields'] as $field) {
            $this->render_field($field);
        }
    }

    public function render_radio($field)
    {
        return;
    }

    public function render_date_picker($field)
    {
        ?>
        <div class="col-lg-4 mb-3">

            <div class="form-group">

                <label>Date *</label>

                <input type="date" class="form-control" id="<?= $field['id']; ?>" name="<?= $field['name']; ?>" value="<?= $field['value'] ?>" <?= $field['disabled'] ?> <?= $field['required'] ?>>

                <div class="marker" id="sur_da_error"></div>

            </div>

        </div>
    <?php
    }

    public function render_time_picker($field)
    {
    ?>
        <div class="col-lg-4 mb-3">

            <div class="form-group">

                <label>Time *</label>

                <input type="time" class="form-control sur_ti" id="intake_time" name="intake_time" value="<?= $field['value'] ?>" <?= $field['disabled'] ?> <?= $field['required'] ?>>

                <div class="form-error marker" id="sur_ti_error">Please enter a valid time</div>

            </div>

        </div>
    <?php

    }


    public function render_text_input($args)
    {
    ?>
        <div class="<?= isset($args['container-class']) ? $args['container-class'] : ''; ?>">

            <div class="form-group">

                <label><?= isset($args['label']) ? $args['label'] : ''; ?></label>

                <input
                    type="text"
                    class="<?= isset($args['class']) ? $args['class'] : ''; ?>"
                    id="<?= isset($args['id']) ? $args['id'] : ''; ?>"
                    name="<?= isset($args['id']) ? $args['id'] : ''; ?>"
                    placeholder="<?= isset($args['placehlder']) ? $args['placehlder'] : ''; ?>"
                    value="<?= isset($args['value']) ? $args['value'] : ''; ?>"
                    style="<?= isset($args['style']) ? $args['style'] : ''; ?>"
                    <?= isset($args['disabled']) && $args['disabled']==true ? 'disabled' : ''; ?>
                    <?= isset($args['required']) && $args['required']==true ? 'required' : ''; ?>>

            </div>

            <div class="form-error" id="sur_fri_error"><?= $args['error_message'];?></div>

        </div>
    <?php
    }

    public function render_email($field)
    {
        return;
    }

    public function render_number($field)
    {
        return;
    }

    public function render_submit($field)
    {
        return;
    }

    public function get_user_audiences()
    {
        $user = new \KCC\User(get_current_user_id());
        $groups = $user->allMyGroups();
        $audiences = array();
        foreach ($groups as $group) {
            $audiences[$group->id()] = $group->name();
        }

        return $audiences;
    }


    public function render_audience_section()
    {

        if ($this->report_post_id()) {
            $audience = $this->report->audience();
        } else {
            if (isset($this->group_id)) {
                $audience = "group";
            } else {
                $audience = 'all-rnn-users';
            }
        }

        if (isset($this->group_id)) {
            $group_id = $this->group_id;
        } else {
            $group_id = '';
        }

    ?>
        <div class="col-lg-12 mb-3 audience-section">

            <div class="form-title">

                <h3>Publish Form to</h3>

                <div class="marker" id="publish_error">

                </div>



            </div>

            <div class="col-lg-12 mb-3">

                <div class="row">

                    <div class="audience-section-all col-12 col-lg-6 mb-3">

                        <div class="form-check d-flex align-items-center">

                            <label class="form-check-label">
                                <input id='audience-all' type="radio" class="form-check-input all_rrn rf_publish" name="audience" value="all-rnn-users" <?= ($audience == 'all-rnn-users') ? 'checked' : '' ?>>All RRN Users
                            </label>

                        </div>

                    </div>
                    <div class="audience-section-group col-12 col-lg-6 mb-3">

                        <div class="form-check d-flex align-items-center">

                            <label class="form-check-label">

                                <input id='audience-group' type="radio" class="form-check-input joined" value='group' name="audience" <?= (($audience == 'group')) ? "checked" : "" ?>>Publish to a group

                            </label>

                        </div>

                        <div class="form-check d-flex align-items-center">

                            <?php
                            $user = new User(get_current_user_id());
                            $myGroups = $user->allMyGroups();

                            ?>

                            <div id="" class="group-select-wrap" <?= ($audience == 'all-rnn-users') ? 'style="display:none;"' : '' ?>>

                                <select class="form-control mt-3 border" id="audience_group_id" name="group_id">

                                    <option value="">Select any group </option>

                                    <?php foreach ($myGroups as $group) {

                                    ?>
                                        <option value="<?= $group->id(); ?>" <?= ($group->id() == $group_id) ? 'selected' : '' ?>><?= $group->name(); ?></option>
                                    <?php } ?>

                                </select>

                            </div>

                        </div>

                    </div>


                </div>

            </div>



        </div>
    <?php
    }



    public function render_progress_bar()
    {
    ?>
        <div class="row d-flex justify-content-center">

            <div class="col-xl-10">

                <div class="reports-top d-flex justify-content-center">

                    <div class="d-flex w-100">

                        <?php
                        foreach ($this->schema['form']['steps'] as $index => $step) {
                            if ($index == 0) {
                                $active = 'active';
                            } else {
                                $active = '';
                            }

                        ?>

                            <div class="main-box w-100">

                                <div class="report-process <?= $active; ?> text-center d-flex justify-content-center" data-index="<?= $index; ?>">

                                    <div class="circle" id="red-1"></div>

                                </div>

                                <div class="circle-content text-center pt-lg-4 pt-3">

                                    <?= $step['title']; ?>

                                </div>

                            </div>
                        <?php } ?>

                    </div>

                </div>

            </div>

        </div>
    <?php
    }

    public function render_disaster_name()
    {
    ?>
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="form-title">
                    <h3>Disaster Name</h3>
                </div>
            </div>

            <div class="col-lg-12 mb-3">
                <div class="form-group">
                    <input
                        type="text"
                        class="form-control"
                        id="disaster_name"
                        name="disaster_name"
                        placeholder="Enter disaster name"
                        value="<?= ($this->report_post_id() && method_exists($this->report, 'disaster_name')) ? $this->report->disaster_name() : ''; ?>">
                </div>
            </div>
        </div>
    <?
    }
    public function render_disaster_types()
    {
    ?>

        <div>

            <?= $this->render_disaster_name(); ?>

            <div class="row">

                <div class="col-lg-12 mb-3">

                    <div class="form-title">

                        <h3>Disaster Type</h3>

                    </div>

                </div>



                <div class="col-lg-12 mb-3">

                    <div class="col-lg-12 mb-3 form-group">

                        <div class="form-title">

                            <h3>Select all that Apply</h3>

                        </div>




                        <div class="row">

                            <?php foreach ($this->disaster_types['rows'][0]['form-groups'][0]['group-elements'] as $disaster_type) { 
                                
                                
                                switch ($disaster_type['type']) {
                                    case 'checkbox_select':
                                        $container_class = 'checkbox-select-container';
                                        break;

                                    case 'checkbox_text':
                                        $container_class = 'checkbox-text-container';
                                        break;

                                    default:
                                        $container_class = 'checkbox-container';
                                        break;
                                }

                                if(isset($disaster_type['hide_if_unchecked']) && $disaster_type['hide_if_unchecked'] == true){
                                    $hide = $this->hide_if_field_unchecked($disaster_type['name'], $disaster_type['value']);
                                }
                                else{
                                    $hide = '';
                                }
                                
                                if(isset($disaster_type['disable_if_unchecked']) && $disaster_type['disable_if_unchecked'] == true){
                                    $disabled = $this->disabled_if_field_unchecked($disaster_type['name'], $disaster_type['value']);
                                }
                                else{
                                    $disabled = '';
                                }


                                ?>

                                <div class="<?= $disaster_type['class'];?> <?= $container_class;?> disaster_type_container">

                                   <?php $this->render_checkbox($disaster_type); ?>
                                   
                                    <?php switch ($disaster_type['type']) {
                                        
                                        case 'checkbox_select':

                                            if (is_array($disaster_type['select']) && !empty($disaster_type['select'])) {

                                                // show r hide the select based on the checkbox parameters.
                                                if(isset($disaster_type['select']['hide_if_parent_unchecked']) && $disaster_type['select']['hide_if_parent_unchecked'] == true){
                                                    $hide = $this->hide_if_field_unchecked($disaster_type['select']['parent'], $disaster_type['select']['parent_value']);                                                
                                                }
                                                else{
                                                    $hide = '';
                                                }
                                                if(isset($disaster_type['select']['disabled_if_parent_unchecked']) && $disaster_type['select']['disabled_if_parent_unchecked'] == true){
                                                    $disabled = $this->disabled_if_field_unchecked($disaster_type['select']['parent'], $disaster_type['select']['parent_value'])? 'disabled' : '';
                                                }
                                                else{
                                                    $disabled = '';
                                                }
                                                
                                    ?>
                                                <div class="mt-2 select-container col-lg-6" <?= $hide;?> id="<?= $disaster_type['select']['id']; ?>_container">
                                                    <select class="form-control" id="<?= $disaster_type['select']['id']; ?>" name="<?= $disaster_type['select']['name']; ?>" <?= $disabled; ?> required_if_parent_checked>
                                                        <option value="">Select type</option>
                                                        <?php foreach ($disaster_type['select']['options'] as $option) { ?>
                                                            <option value="<?= $option['value']; ?>" <?= $this->select_if_selected($disaster_type['select'], $option['value']); ?>><?= $option['label']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            <?php
                                            }
                                            break;

                                        case 'checkbox_text':
                                            
                                            if(isset($disaster_type['hide_if_unchecked']) && $disaster_type['hide_if_unchecked'] == true){
                                                $hide = $this->displayNoneIfReportValueDoesNotMatch($disaster_type['name'], $disaster_type['value']);
                                            }
                                            else{
                                                $hide = '';
                                            }
                                            
                                            if(isset($disaster_type['text']['disabled_if_parent_unchecked']) && $disaster_type['text']['disabled_if_parent_unchecked'] == true){
                                                $disabled = $this->disabled_if_field_unchecked($disaster_type['name'], $disaster_type['value']);
                                            }
                                            else{
                                                $disabled = '';
                                            }
                                            ?>
                                            <div class="mt-2 text-container col-lg-6" <?= $hide;?> id="<?= $disaster_type['id']; ?>_container">
                                                <input type="text" class="form-control" id="<?= $disaster_type['text']['id']; ?>" name="<?= $disaster_type['text']['name']; ?>" placeholder="" , <?= $disabled; ?> value="<?= $this->other_disaster_details(); ?>" <?= $disabled; ?> <?= $hide;?> >
                                            </div>
                                            <div class='form-error'></div>
                                    <?php
                                            break;

                                        case 'checkbox':
                                        default:
                                            // No additional fields for regular checkbox
                                            break;
                                    }
                                    ?>
                                    <div class='form-error'></div>
                                </div>
                            <?php } ?>

                            <!-- <div class="col-12 col-lg-4 mb-3 checkbox-text-container">

                <div class="form-check d-flex align-items-center checkbox-text-checkbox-container">

                    <label class="form-check-label">

                        <input type="checkbox" onclick="" <?= $this->checkIfReportValueMatches("disaster_type_other", "Other") ?> class="form-check-input dis_huri checkbox-text" name="disaster_type_other" value="Other">Other

                    </label>

                </div>

                <input type="text" class="form-control text-info" id="disaster_type_other" name="disaster_type_other_comment" placeholder="Enter other disaster type" value="<?= $this->disaster_type_other_comment(); ?>">

            </div> -->

                        </div>

                    </div>
                </div>
            </div>

        </div>

    <?php
    }

    public function reportValueMatches($method, $value)
    {
        if ($this->report_post_id()) {
            if (!method_exists($this->report, $method)) {
                return false;
            }
            $meta = $this->report->$method();
            if ($meta == $value) {
                return true;
            } else {
                return false;
            }
        }
        return '';
    }

    public function displayNoneIfReportValueDoesNotMatch($method, $value)
    {
        if ($this->report_post_id()) {
            if (!method_exists($this->report, $method)) {
                return '';
            }
            $meta = $this->report->$method();
            if ($meta == $value) {
                return '';
            } else {
                return 'style="display:none;"';
            }
        }
        return 'style="display:none;"';
    }

    public function displayNoneIfFieldUnchecked($field, $checked)
    {
        if ($this->report_post_id()) {
            $meta = $this->report->meta($field);
            // split on comma
            if (!is_array($meta)) {
                $meta = explode(',', $meta);
            }
            if (in_array($checked, $meta)) {
                return '';
            }
            return 'style="display:none;"';
        }
        return 'style="display:none;"';
    }

    public function selectIfReportValueMatches($method, $value)
    {
        if ($this->report_post_id()) {
            if (!method_exists($this->report, $method)) {
                return '';
            }
            $meta = $this->report->$method();
            if ($meta == $value) {
                return 'selected';
            }
        }
        return '';
    }


    public function checkIfReportValueMatches($method, $value)
    {
        // use RegEx to remve a possible [] from $method
        $method = preg_replace('/\[[^\]]*\]/', '', $method);
    
        if ($this->report_post_id()) {
            //pre(method_exists($this->report, $method));
            if (!method_exists($this->report, $method)) {
                return '';
            }
            $meta = $this->report->$method();
            
            if(!is_array($meta)){
                $meta = explode(',', $meta);
            }

            if(is_object($meta[0])){
                // it's a FormField object;  find the value in it
                foreach($meta as $m){
                    if($m->value() == $value){
                        return 'checked';
                    }
                }
                return '';
            }
            else{
                if (in_array($value, $meta)) {
                    return 'checked';
                }
            }
            
            
            
            
        }
        return '';
    }

    public static function renderFilterModal()
    {
    ?>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

            <form method="get" action="">

                <div class="modal-dialog modal-dialog-centered create_tickit" role="document">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title" id="exampleModalLongTitle">Filter by</h5>

                        </div>

                        <div class="modal-body main_profile_form">

                            <div class="form-group select_sec date_sec">

                                <label for="exampleFormControlSelect1">Filter by Date</label>

                                <input placeholder="Select date" type="date" name="bDate" id="bDate" class="form-control">

                            </div>

                            <div class="form-group">

                                <label for="exampleInputPassword1">Filter by Title</label>

                                <input

                                    type="text"

                                    class="form-control"

                                    id="btitle"

                                    name="btitle"

                                    placeholder="Type here" />

                            </div>

                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-md-6 col-6">

                                    <div class="apply_btn">

                                        <button

                                            class="btn btn_apply"

                                            data-dismiss="modal"

                                            aria-label="Close">

                                            Cancel

                                        </button>

                                    </div>

                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-6">

                                    <div class="apply_btn active">

                                        <button type="submit" class="btn btn_apply">Apply filter</button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>
<?php
    }
}
