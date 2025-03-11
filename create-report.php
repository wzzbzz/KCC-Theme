<?php

/* Template Name: create report and forms */



global $wpdb;

if (is_user_logged_in()) {

    get_header('dashboard'); ?>



    <?php

   

    // get report_type from query var
    $report_type = get_query_var('kcc_report_type');



    $form = \KCC\Forms\Forms::form_factory($report_type);

    if(isset($_GET['gid']) && !empty($_GET['gid'])){
        $gid = $_GET['gid'];
        if(! \KCC\Groups::groupIdExists($gid)){
            \KCC\FlashMessages\FlashMessages::add('Group does not exist', 'error');
            header('Location: ' . site_url('dashboard-reports-and-forms'));
            exit;
        }
        $form->set_group($_GET['gid']);
    }
    

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