<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_header('register'); ?>

    <!-- Favicon -->    
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png">

    <!-- css links -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">

</head>
<body >

    <div class="container-fluid">
        <div class="login_nav">
            <nav class="navbar  justify-content-between">
                <a class="navbar-brand">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/login_logo.png" class="img-fluid" alt="img">
                </a>
                <form class="form-inline">
                    
                    
                        <button class="btn btn_account active"><a href="<?php echo get_site_url(); ?>/login/" color="#fff" >Login</a></button>                    
                    
                </form>
            </nav>
        </div>

        <section>
            <div class="row justify-content-between align-items-end center-text_sec">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="col-xl-7 mx-auto">
                        <div class="login_left_text">
                            <h4><span>Hello,</span> <br> Create an Account</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            <div class="main_profile_form mt-4">                            
                            <?php echo do_shortcode('[ultimatemember form_id="206"]') ?>                                 
                            </div>
                            <div class="login_with">
                                <p>Or Login With</p>
                            </div>
                            <div class="login_social">
                            <?php echo do_shortcode('[TheChamp-Login style="background-color:#fff;"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-8">
                    <div class="rigt_side_text">
                        <h5>DEVELOP CRITICAL SKILLS, GET CREDENTIALED, AND CONNECT WITH THE PEOPLE YOU NEED</h5>
                        <p>to prepare for, respond to, and recover from a disaster safely.</p>
                    </div>
                </div>
            </div>
        </section>

        
            <div class="copy_right mt-5">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <p>Copyright © 2020 All Rights Reserved</p>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 text-right">
                        <a href="<?php echo get_site_url(); ?>/terms-of-use/">Terms of Use  </a>
                        <a href="<?php echo get_site_url(); ?>/privacy-policy/">Privacy Policy   </a>
                        <a href="#">Sitemap </a>
                    </div>
                </div>
            </div>
       
    </div>



    
    


    




   
    <?php  get_footer('general');  ?>

  <!-- js links -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
  

</body>
</html>