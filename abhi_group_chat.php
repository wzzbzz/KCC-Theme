<?php 

   /* Template Name: Abhi Group Chat */

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

    .my_resources_table .table{border:none;}

    .tracking-temp .main_footer_sec {

    background: #134793 0% 0% no-repeat padding-box;

    border-radius: 50px 0px 0px 0px;

    padding: 1rem 0rem 2rem 0rem;

    margin-top: 40px;

    float: right;

}

</style>



<!--Header-->



<div class="col-xl-12 coordination-center-tracking tracking-temp">

        <div class="row justify-content-end mt-3">

<?php include('user_topbar.php')?>





<div class="row d-flex justify-content-end serach-result-page">

      

</div>







<!--fOOTER-->



<div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex justify-content-between  flex-wrap">

            <div class="col-xl-3 col-lg-3 col-md-3 col-12">

                    <div class="footer_logo">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.png" class="img-fluid">

                    </div>

            </div>

             <div class="col-xl-8 col-lg-9 col-md-9 col-12">

                    <div class="side_right_footer ">

                    <div class="social_icon_sec">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_linkdin.png" class="img-fluid"></a>

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_fb.png" class="img-fluid"></a>

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_twitter.png" class="img-fluid"></a>

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_instra.png" class="img-fluid"></a>

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

    </div>



</div>



     

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>   

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>



<?php get_footer('new'); }?>