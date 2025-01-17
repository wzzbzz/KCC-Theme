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

<style>
	.page-nav-container{text-align:center !important;}
.Main_content { min-height:667px;}

.knolw_cen_cour .main_footer_sec {

    background: #134793 0% 0% no-repeat padding-box;

    border-radius: 50px 0px 0px 0px;

/*    padding: 1rem 0rem 2rem 0rem;*/

    margin-top: 40px;

    float: right;

}



</style>

<div class="coordination-center-tracking my-resources-temp knolw_cen_cour">

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

                                    <h4>Just in Time</h4>

                                    <p>

                                       This training offers 15-minute lessons on specific topics using films and other media to increase skills and awareness of precautions and safety measures that can be taken before, during, and after a disaster. The goal of these trainings is to deliver information on a specific topic quickly, providing valuable disaster preparedness, response and recovery tips to keep you safe.

                                    </p>

                                    <a href="<?php echo get_site_url(); ?>/just-in-time-course-list/">

                                    <button class="btn btn-primary mt-4"> View Courses </button>

                                    </a>

                                </div>

                            </div>

                            <div class="col-md-6 mb-3 d-flex align-items-center">

                                <div class="">

                                    <h4>General Readiness</h4>

                                    <p>

                                        General Readiness Training was is developed with the general public in mind, as it provides awareness of disaster prevention, response, and recovery techniques and plans that everyone can use. Courses provide instruction and strategies for household hazard mitigation, disaster preparation and recovery, as well as information for those interested in becoming a disaster volunteer. The training will further educate, empower, and ensure safety and skills for everyone.

                                    </p>

                                    <a href="<?php echo get_site_url(); ?>/general-readiness-course-list/">

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

                                    <h4>DV Introductory Level Training</h4>

                                    <p>

                                        Disaster Volunteerism (DV) Introductory-level training increases awareness and skills regarding hazard identification and safety

                                        measures that can be taken before, during, and after a disaster. Disasters have an enormous impact on global, national, state-wide, and local environments both during and post-impact. The goal of these courses is to provide detailed information to effectively increase volunteer skills,

                                        understanding, and implementation of disasterresponse services.

                                    </p>

                                    <a href="<?php echo get_site_url(); ?>/dv-introductory-level-training-course-list/">

                                    <button class="btn btn-primary mt-4"> View Courses </button>

                                </a>

                                </div>

                            </div>

                            <div class="col-md-6 mb-3 d-flex align-items-center">

                                <div class="">

                                    <h4>DV Intermediate Level Training</h4>

                                    <p>

                                        This training is for volunteers who are looking to increase their knowledge on how to safely respond to specific disasters. This enhanced level offers more complex and detailed instruction to develop skills and prevent accidents and exposure to hazards. Topics include hazard identification, risk assessment and reduction, personal protection equipment, and safely assisting in extreme physical situations.

                                    </p>

                                    <a href="<?php echo get_site_url(); ?>/dv-intermediate-level-training-course-list/">

                                      <button class="btn btn-primary mt-4"> View Courses </button>

                                   </a>

                                </div>

                            </div>

                            <div class="col-md-6 mb-3">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dva-slide2-scaled-1.png" class="img-fluid">

                            </div>

                             <div class="col-md-6 mb-3">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dva-slide2-scaled-1.png" class="img-fluid">

                            </div>

                            <div class="col-md-6 mb-3 d-flex align-items-center">

                                <div class="">

                                    <h4>Leadership and Management Training</h4>

                                    <p>

                                        This course is designed for leaders who manage volunteers and workers. This level gives them the tools to assess their programs’ risks and safely place their teams in the right roles. Learners will acquire beneficial skills to perform risk assessments, develop plans and coordinate teams, and be ready to respond safely and effectively.

                                    </p>

                                    <a href="<?php echo get_site_url(); ?>/leadership-and-management-training-course-list/">

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

<!-- <script src="<?php //echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

<script src="<?php //echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>

<script src="<?php //echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php //echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<script> -->      



<?php get_footer('new'); } ?>