<?php 

   /* Template Name: Standalone or Elective Training Course List */

   if ( is_user_logged_in() ) {



    get_header('new'); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css">

<link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"/>

<!-- css links -->

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet"/>

<link rel="stylesheet" type="text/css" href="https://knowledge.communication.worldcares.org/wp-content/themes/astra/assets/css/style_new.min.css"/>

<style>

.Main_content { min-height:667px;}

.knolw_cen_cour .main_footer_sec {

    background: #134793 0% 0% no-repeat padding-box;

    border-radius: 50px 0px 0px 0px;

/*    padding: 1rem 0rem 2rem 0rem;*/

    margin-top: 40px;

    float: right;

}



</style>

<div class="col-xl-12 coordination-center-tracking my-resources-temp knolw_cen_cour">

    <div class="row justify-content-end mt-3">

         <?php include('user_topbar.php')?>

    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-12 mt-5 mb-4">

                <div class="course-info-course course_listing-1 d-flex align-items-center justify-content-center">

                    <div class="col-md-10 mt-5">

                        <div class="row mt-5">

                            <div class="col-md-6 mb-3">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dva-slide2-scaled-1.png" class="img-fluid">

                            </div>

                            <div class="col-md-6 mb-3 d-flex align-items-center">

                                <div class="">

                                    <h4>General Safety</h4>

                                    <p>

                                       With this training the general public can further their knowledge of COVID-19 safety. Individuals will be able to explain what coronavirus is, identify its symptoms, how it spreads, and define key concepts.

                                    </p>

                                    <a href="<?php echo get_site_url(); ?>/general-safety-course-list/">

                                    <button class="btn btn-primary mt-4"> View Courses </button>

                                    </a>

                                </div>

                            </div>

                            <div class="col-md-6 mb-3 d-flex align-items-center">

                                <div class="">

                                    <h4>Disaster Volunteer Training</h4>

                                    <p>

                                        These is an introductory course for disaster volunteers to understand the basic concepts of COVID-19 safety, including facts about coronavirus, volunteer protection, control measures to reduce COVID-19 such as the proper use of personal protective equipment, and the basic concepts of how to stay resilient during COVID-19.

                                    </p>

                                    <a href="<?php echo get_site_url(); ?>/disaster-volunteer-training-course-list/">

                                      <button class="btn btn-primary mt-4"> View Courses </button>

                                   </a>

                                </div>

                            </div>

                            <div class="col-md-6 mb-3">

                                 <img src="<?php echo site_url('/') ?>wp-content/uploads/2022/12/dva-slide3.png" class="img-fluid">

                            </div>



                            <div class="col-md-6 mb-3">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dva-slide2-scaled-1.png" class="img-fluid">

                            </div>

                            <div class="col-md-6 mb-3 d-flex align-items-center">

                                <div class="">

                                    <h4>Managers Training</h4>

                                    <p>

                                        Volunteer managers and organizational leaders will learn to apply techniques to manage and protect their volunteers during COVID-19 response. At the end of this enhanced training, leaders and managers will understand the risk associated with COVID-19, how these risks can be reduced, and key measures for protecting volunteers against exposure, including and the use of PPE.

                                    </p>

                                    <a href="<?php echo get_site_url(); ?>/managers-training-course-list/">

                                    <button class="btn btn-primary mt-4"> View Courses </button>

                                </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



        <?php include('common_user_footer.php'); ?>

   </div>







   <!--  <script src="/js/jquery.min.js"></script>

   <script src="/js/popper.min.js"></script>

   <script src="/js/bootstrap.min.js"></script>   

   <script src="/js/owl.carousel.min.js"></script> -->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<script>      



<?php get_footer('new'); } ?>