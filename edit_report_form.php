<?php

/* Template Name: Edit Disaster Report */

global $wpdb;

if (is_user_logged_in()) {

    get_header('dashboard'); ?>



    <?php

    $report_post_id = empty($_GET['id'])?'':$_GET['id'];

    if(empty($report_post_id)){
        wp_redirect(site_url('groups'));
    }

    $report = \KCC\Reports\Reports::factory($report_post_id);

    $form = new \KCC\Forms\DisasterSituationalReportForm($report_post_id);
    
    

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