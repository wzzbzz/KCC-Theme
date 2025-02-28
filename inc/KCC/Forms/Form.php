<?php

namespace KCC\Forms;

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

    protected $autofill = false;

    public function __construct($report_id = null)
    {
        $this->report_id = $report_id;
        if($report_id){
            $report_class = 'KCC\Reports\\' . $this->report_class;
            $this->report = new $report_class($report_id);
        }
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

    public function group_permalink()
    {
        if ($this->group_id) {
            return $this->group->permalink();
        } else {
            return '';
        }
    }

    public function group_post_id(){
        if($this->group_id){
            return $this->group_id;
        }else{
            return '';
        }
    }

    public function report_post_id(){
        if($this->report_id){
            return $this->report_id;
        }else{
            return '';
        }
    }

    public function report_title(){
        if($this->report_id){
            return $this->report->post_title;
        }else
        if($this->autofill==true){
            return "Test Report";
        }
        else {
            return '';
        }
    }

    public function report_id(){
        // this will be the post name if report_id is set, otherwise it will be the abbreviation-group_post_id-current_user_id-timestamp
        if($this->report_id){
            // return the post_name of the post with report_id
            return $this->report->post_name;
        }else{
            return $this->abbreviation . '-' . $this->group_post_id() . '-' . get_current_user_id() . '-' . time();
        }
    }


    /* attempt at a mechanical approach to form generation.  Would not work with current build. */
    public function render_title()
    {
?>
        <div class="top-btn">

            <div class="d-flex justify-content-between">

                <div class="title">

                    <h2>Create New Report</h2>

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
    public function render()
    {
        $this->render_title();
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

                                                            <a href="javascript:void(0);" class="btn btn-primary btn-disabled" title="Next" id="<?= $next_btn_id;?>">Next</a>

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

    public function render_radio($field){
        pre($field);
        die;
        return;
    }

    public function render_date($field){
        return;
    }

    public function render_time($field){
        return;
    }

    public function render_checkbox($field){
        return;
    }

    public function render_email($field){
        return;
    }

    public function render_number($field){
        return;
    }

    public function render_submit($field){
        return;
    }
}

