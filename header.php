<?php
// Display file path for debugging
display_file_path();

ob_start();

error_reporting(E_ALL ^ E_NOTICE);

        session_start();  

/**

 * The header for Astra Theme.

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package Astra

 * @since 1.0.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}



?><!DOCTYPE html>

<?php astra_html_before(); ?>

<html <?php language_attributes(); ?>>

<head> 

<?php astra_head_top(); ?>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<link rel="icon" type="image/x-icon" href="<?= wp_upload_dir();?>/2023/08/wcc_favicon.png">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="https://gmpg.org/xfn/11">

<script type="text/javascript">

	document.addEventListener('wpcf7mailsent',function(event){

		location = 'https://checkout.stripe.com/c/pay/cs_test_a1qzMt46mq8BDQZq1YfeqlH8M8znSt5M8vO3h52qTjBjcaybI8I8JNLGnK#fidkdWxOYHwnPyd1blpxYHZxWmQyT21cbnFjMH83aWZGf0JIZmxIUVFMQzU1UjF8MDJCUm4nKSd1aWxrbkB9dWp2YGFMYSc%2FJ3FgdnFaYVczM2pdM2swMGM3YEJ2MG5uJyknd2BjYHd3YHdKd2xibGsnPydtcXF1dj8qKmZtYGZuanBxK3Zxd2x1YCtmamgqJ3gl'

	},false);

</script>

<?php wp_head(); ?>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style_new.min.css"/>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  

<?php astra_head_bottom(); ?>



<link href="<?= wp_plugin_dir();?>/elementor-pro/assets/css/widget-nav-menu.min.css" rel="stylesheet">

<style type="text/css">

	.elementor-10 .elementor-element.elementor-element-a40690b {

    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;

    margin-top: 0px !important;

    margin-bottom: 0px;

    padding: 0% 3% 0% 3%;

    z-index: 999;

}



.elementor-6 .elementor-element.elementor-element-4420f1b > .elementor-widget-container {

    margin: 200px 200px 0px 210px; !important;

}



:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {

  color: #707070;

 

}

</style>

</head>







<!-- wcc Header -->

<header>

	 <nav class="navbar navbar-expand-xl d-flex justify-content-center fixed-top navbar-scrolled" id="nav-main">

        <div class="container-fluid">

            <a class="navbar-brand" href="<?php echo site_url();?>">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wcc-logo.png" alt="" class="lazy">                

            </a>

           



            <button class="navbar-toggler menu-btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">

      <span class="icon-menu"></span>

    </button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav mx-xl-auto align-items-xl-center" id="menu"> 

                   

                 <li class="nav-item">

                        <a class="nav-link" href="<?php echo site_url();?>" title="Home">Home<span class="sr-only">(current)</span></a>

                    </li>

                    

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="<?php echo site_url('what-we-do');?>" data-bs-toggle="dropdown"  title="What We Do">What We Do</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="<?php echo site_url('about-ready-responders-network');?>" title="About Ready Responders Network">About Ready Responders Network</a>

                            <a class="dropdown-item" href="<?php echo site_url('about-disaster-volunteerism-academy')?>" title="About Disaster Volunteerism Academy">About Disaster Volunteerism Academy</a>

                            <a class="dropdown-item" href="<?php echo site_url('response');?>" title="Donation Drive">Response</a>

                        </div>

                    </li>





                    <li class="nav-item">

                        <a class="nav-link" href="<?php echo site_url('world-cares-center')?>" title="World Cares Center">World Cares Center</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link dropdown-toggle" href="<?php echo site_url('training-old')?>" data-bs-toggle="dropdown" title="Donate">  Training </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="<?php echo site_url('disaster-volunteer-training')?>" title="Ukraine">Disaster Volunteer Credentials</a>

                            <a class="dropdown-item" href="<?php echo site_url('stand-alone-tranning')?>" title="Covid-19 Response">Stand-alone Training</a>

                            <a class="dropdown-item" href="<?php echo site_url('covid-training')?>" title="Disaster">COVID Training</a>

							<a class="dropdown-item" href="<?php echo site_url('other-languages')?>" title="Disaster">Other Languages</a>

                        </div>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="<?php echo site_url('coordination')?>" title="Coordination">Coordination</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="<?php echo site_url('blogs')?>" title="Blog">Blog</a>

                    </li>

                    <li class="nav-item ">

                        <a class="nav-link" href="<?php echo site_url('contact-us')?>" title="Contact Us">Contact Us</a>

                    </li>

                     <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="<?php echo site_url('donate-2')?>" data-bs-toggle="dropdown" title="Donate">  Donate </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="<?php echo site_url('ukraine')?>" title="Ukraine">Ukraine</a>

                            <a class="dropdown-item" href="<?php echo site_url('ppe/')?>" title="PPE">PPE</a>

                           <!-- <a class="dropdown-item" href="<//?php echo site_url('disaster') ?>" title="Disaster">Disaster</a>-->

                        </div>

                    </li>





                </ul> 

                <div class="listdiv d-xl-flex align-items-xl-center">

                    <?php if(is_user_logged_in() ){  ?>



                    <div class="mr-lg-2  mr-0 ">                                

                        <!--<a href="<?php //echo site_url('logout')?>" class="btn btn-primary" title="Logout">Logout</a>-->

                        <a href="<?php echo wp_logout_url( 'login'); ?>" class="btn btn-primary" title="Logout">Logout</a>

                    </div>



                    <div class="mr-lg-2  mr-0 ">                                

                        <a href="<?php echo site_url('dashboard-home')?>" class="btn btn-primary" title="Dashboard">Dashboard</a>

                    </div>



                    <?php } else { ?>



                        <div class="mr-lg-3  mr-0 ">                                

                        <a href="<?php echo site_url('login')?>" class="btn btn-primary" title="Login">Login</a>

                    </div>

                    <div class="mt-2 mt-lg-3 mt-xl-0">                                

                        <a href="<?php echo site_url('registration')?>" class="btn btn-secondary" title="Sign Up">Sign Up</a>

                    </div>

                        <?php } ?>

                </div>              

            </div>

        </div>

    </nav>        

</header>



<!-- Vinay header -->



<body <?php astra_schema_body(); ?> <?php body_class(); ?>>

<?php astra_body_top(); ?>

<?php wp_body_open(); ?>



<a

	class="skip-link screen-reader-text"

	href="#content"

	role="link"

	title="<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>">

		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>

</a>



<div

<?php

	echo astra_attr(

		'site',

		array(

			'id'    => 'page',

			'class' => 'hfeed site',

		)

	);

	?>

>

    

  <?php

	astra_header_before();



	astra_header();



	astra_header_after();



	astra_content_before();

	?>

	 <div id="content" class="site-content">

		<div class="ast-container-fluid p-0">

		<?php astra_content_top(); ?>

