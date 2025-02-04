<?php 

   /* Template Name: Ukrainian Training Course List */

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

<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/css/style_new.min.css"/>

<style>

.Main_content { min-height:667px;}

.knolw_cen_cour .main_footer_sec {

    background: #134793 0% 0% no-repeat padding-box;

    border-radius: 50px 0px 0px 0px;

   /* padding: 1rem 0rem 2rem 0rem;*/

    margin-top: 40px;

    float: right;

}

.training .section-title {

    text-align: center;

    margin-top: 10px;

    margin-bottom: 10px;

}

.course-content h3 {

     width: 100%;

}

</style>



<div class="col-xl-12 coordination-center-tracking my-resources-temp knolw_cen_cour">

        <div class="row justify-content-end mt-3">



             <?php include('user_topbar.php')?>

        </div>



        

        <div class="mt-5">

          <div class="row">

            <div class="col-md-12 mb-4">

              <div class="course_listing ml-4">



                <?php echo do_shortcode('[ukrainian_training]');?>

              

            </div>

          </div>

        </div>

      </div>



        <?php include('common_user_footer.php');?>

   </div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<script>      



<?php get_footer('new'); } ?>