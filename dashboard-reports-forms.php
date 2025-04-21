<?php 

/* Template Name: Dashboard Reports and Forms */

if ( is_user_logged_in() ) {

    get_header('dashboard'); ?>

<div class=" ">

        <div class="row justify-content-end mt-3">



        <div class="col-xl-11 col-lg-11 col-md-11 col-10  ">

                <div class=" col-xl-11 top_center_main-course-content d-flex flex-wrap">

                    <div class="col-xl-8 col-lg-6">

                        <div class="side_left_sec">

                        </div>

                    </div>     

                    <div class="col-xl-4 col-lg-6 px-0">

                        <div class="right_coordination">

                        <div class="back_btn course_content">

                            <a href="<?php echo get_site_url(); ?>/dashboard-coordination-center/">Back</a>

                        </div>

                        </div>

                    </div>    

                </div>  

            </div>



            <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-4">

                <div class=" col-xl-11 d-flex flex-wrap px-0">

                    <div class="col-xl-3 col-lg-6 col-md-6 ">

                        <div class="main_box_btm">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/report_1.png" class="img-fluid" alt="image">

                            <h5>Disaster Situational Report</h5>

                            <p>These reports detail the location, type, and severity of disasters as well as critical logistics and transportation information.</p>                            

                            <a href="<?= site_url('reports/disaster-situational-report'); ?>">View Report</a>

                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 ">

                        <div class="main_box_btm parrot_Bg">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/report_2.png" class="img-fluid" alt="image">

                            <h5 class="parrot">Organization Volunteer Request</h5>

                            <p>This form is for registered organizations delivering services free of charge to disaster affected communities. Please be prepared to safely and effectively track and manage the volunteers that you are requesting.</p>                            

                            <a href="<?= site_url('reports/organization-volunteer-request'); ?>">View Request</a>

                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 ">

                        <div class="main_box_btm yellow_box">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/report_3.png" class="img-fluid" alt="image">

                            <h5 class="yellow">Survivors Needs Intake Form</h5>

                            <p>This form is submitted by an RRN member on behalf of a citizen who has survived a disaster and needs assistance to recover.</p>                            

                            <a href="<?php echo get_site_url(); ?>/reports/survivor-needs-intake">View Form</a>

                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 ">

                        <div class="main_box_btm purple_box">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/report_4.png" class="img-fluid" alt="image">

                            <h5 class="purple">After Action Report</h5>

                            <p>This report details the disaster relief tasks completed and provides additional information.</p>                           

                            <a href="<?php echo get_site_url(); ?>/reports/after-action-report">View Report</a>

                        </div>

                    </div>

                 

                </div>

            </div>


        </div>

    <?php } ?>

    </div>
    <?php

    get_footer();


