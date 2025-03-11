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

                            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>-->

                            

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

                            <a href="<?php echo get_site_url(); ?>/survivors-needs-intake-form">View Form</a>

                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 ">

                        <div class="main_box_btm purple_box">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/report_4.png" class="img-fluid" alt="image">

                            <h5 class="purple">After Action Report</h5>

                            <p>This report details the disaster relief tasks completed and provides additional information.</p>                           

                            <a href="<?php echo get_site_url(); ?>/after-action-reports">View Report</a>

                        </div>

                    </div>

                 

                </div>

            </div>



          <!--  <div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex align-items-center  flex-wrap">

                <div class="col-xl-3 col-lg-3 col-md-3 col-12">

                    <div class="footer_logo">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.png" class="img-fluid logos">

                    </div>

                </div>

                <div class="col-xl-8 col-lg-9 col-md-9 col-12">

                    <div class="side_right_footer ">

                        <div class="social_icon_sec">

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_linkdin.png" class="img-fluid social"></a>

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_fb.png" class="img-fluid social"></a>

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_twitter.png" class="img-fluid social"></a>

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_instra.png" class="img-fluid social"></a>

                        </div>

                        <div class="linked_pages">

                            <a href="<?php echo get_site_url(); ?>/">HOME</a>

                            <a href="<?php echo get_site_url(); ?>/what-we-do/">WHAT WE DO</a>

                            <a href="<?php echo get_site_url(); ?>/world-cares-center/">WORLD CARES CENTER</a>

                            <a href="<?php echo get_site_url(); ?>/training/">TRAINING</a>

                            <a href="<?php echo get_site_url(); ?>/cordination/">COORDINATION</a>

                            <a href="<?php echo get_site_url(); ?>/blogs/">BLOG</a>

                            <a href="<?php echo get_site_url(); ?>/contact-us/">CONTACT US</a>

                            <a href="#">DONATE</a>

                        </div>

                        <div class="privercy_pag">

                            <a href="<?php echo get_site_url(); ?>/terms-of-use/">TERMS OF USE</a>

                            <a href="<?php echo get_site_url(); ?>/privacy-policy/">PRIVACY POLICY  </a>

                            <a href="#">SITEMAP</a>

                        </div>                            

                    </div>

                    <div class="copy_right_Sec">

                        <p>COPYRIGHT © 2020 ALL RIGHTS RESERVED</p>

                    </div>

                </div>

            </div>-->



        </div>

    <?php } ?>

    </div>
    <?php

    get_footer();


