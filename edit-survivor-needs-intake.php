<?php

/* Template Name: Edit Survivor Needs Intake */



global $wpdb;

if (is_user_logged_in()) {

    get_header('dashboard'); ?>



    <?php

    $rf_id = empty($_GET['id'])?'':$_GET['id'];

    if(empty($rf_id)){
        wp_redirect(site_url('groups'));
    }

    $form = new \KCC\Forms\SurvivorNeedsIntakeForm($rf_id);
    

    ?>

    <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-0 ">

        <div class="mt-3 create-report">

            <div class="col-xl-11 col-lg-11 col-md-10 col-10 d-flex justify-content-between  flex-wrap">

                <div class="row w-100 mb-4">

                    <div class="col-md-12">

                        <?php $form->render();?>

                    </div>

                </div>

            </div>

        </div>

    </div>






<?php 
get_footer();
} ?>