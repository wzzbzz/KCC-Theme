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

    protected $disaster_types =  [
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


    public function __construct($report_id = null)
    {
        $args = array();

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


    protected function country(){
        if(!empty($this->report_id)){
            return $this->report->country();
        }
        return '';
    }

    protected function state(){
        if(!empty($this->report_id)){
            return $this->report->state();
        }
        return '';
    }

    protected function city(){
        if(!empty($this->report_id)){
            return $this->report->city();
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

    public function render_text($field)
    {
    ?>
        <div class="<?= $field['class']; ?>">
            <div class="form-group">
                <label for="<?= $field['name']; ?>"><?= $field['label']; ?></label>
                <input class="form-control" type="text" name="<?= $field['name']; ?>" id="<?= $field['name']; ?>">
            </div>
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
        pre($field);
        die;
        return;
    }

    public function render_date($field)
    {
        return;
    }

    public function render_time($field)
    {
        return;
    }

    public function render_checkbox($field)
    {
        return;
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

                    <div class="audience-section-all col-12 col-lg-4 mb-3">

                        <div class="form-check d-flex align-items-center">

                            <label class="form-check-label">
                                <input id='audience-all' type="radio" class="form-check-input all_rrn rf_publish" name="audience" value="all-rnn-users" <?= ($audience == 'all-rnn-users') ? 'checked' : '' ?>>All RRN Users
                            </label>

                        </div>

                    </div>
                    <div class="audience-section-group col-12 col-lg-4 mb-3">

                        <div class="form-check d-flex align-items-center">

                            <label class="form-check-label">

                                <input id='audience-group' type="radio" class="form-check-input joined" value='group' name="audience" <?= ( ( $audience == 'group' ) ) ? "checked" : "" ?>>Publish to a group

                            </label>

                        </div>

                        <div class="form-check d-flex align-items-center">

                            <?php
                            $user = new User(get_current_user_id());
                            $myGroups = $user->allMyGroups();

                            ?>

                            <div id="" class="group-select-wrap" <?= ($audience == 'all-rnn-users') ? 'style="display:none;"' : '' ?>>

                                <select class="form-control mt-3 border" id="audience_group" name="group_id">

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

    public function render_disaster_types()
    {
    ?>

        <div>

            <div class="row">

                <div class="col-lg-12 mb-3">

                    <div class="form-title">

                        <h3>Disaster Type</h3>

                    </div>

                </div>


                <div class="col-lg-12 mb-3">

                    <div class="form-title">

                        <h3>Select all that Apply</h3>

                    </div>

                </div>

                <div class="col-lg-12 mb-3">

                    <div class="row">

                        <?php foreach ($this->disaster_types as $disaster_type) { ?>


                            <div class="col-12 col-lg-3 mb-3">

                                <div class="form-check d-flex align-items-center">

                                    <label class="form-check-label">

                                        <input type="checkbox" <?= $this->disaster_type_checked($disaster_type['value']); ?> class="form-check-input dis_apply" value="<?= $disaster_type['value']; ?>" name="disaster_type[]"><?= $disaster_type['label']; ?>

                                    </label>

                                </div>

                            </div>
                        <?php } ?>

                    </div>

                </div>



            </div>



            <div class="col-lg-12 mb-3">

                <div class="row">


                    <div class="col-12 col-lg-4 mb-3">

                        <div class="form-check d-flex align-items-center">

                            <label class="form-check-label">

                                <input type="radio" onclick="show4();" <?= $this->checkIfReportValueMatches("disaster_type_other", "Other") ?> class="form-check-input dis_huri" name="disaster_type_other" value="Other">Other

                            </label>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-6 mb-3">

                <div class="form-group hides" id="div2">

                    <input type="text" class="form-control text-info" id="disaster_type_other" name="disaster_type_other" placeholder="Enter Comments">

                </div>

            </div>

        </div>
<?php
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
        if ($this->report_post_id()) {
            if (!method_exists($this->report, $method)) {
                return '';
            }
            $meta = $this->report->$method();
            // split on comma 
            $meta = explode(',', $meta);

            if (in_array($value, $meta)) {
                return 'checked';
            }
        }
        return '';
    }
}
