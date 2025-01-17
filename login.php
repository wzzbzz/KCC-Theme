<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php get_header('general'); /* Template Name: Login User */ ?>

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

</head>
<style>
  .elementor-element-5638acf .elementor-element-populated .elementor-element-4f96e20 .elementor-widget-container { text-align:justify;}
.um-login div {
    color: #242424;
}
	.um-login ul.um-misc-ul {
    margin: 0;
}
		.um-login ul.um-misc-ul li {
    list-style: none;
    text-align: center;
}
		.um-login ul.um-misc-ul li a{
    color: #242424;
}
		.um-login.um-logout {
    margin-right: auto !important;
    margin-left: unset !important;
}
		.main_login_img {
    min-height: unset;
}
		.main_login_img section {
    padding-top: 30px;
}
		.rigt_side_text h5 {
    font-size: 30px;
}
		input#um-submit-btn {
    width: 100%;
}
		.um-col-alt-b {
    margin-top: 0px;
    margin-bottom: 0px;
}
		.um-half {
    width: 100%;
}
		a.navbar-brand img {
    width: 80%;
}
		.rigt_side_text p {
    font-size: 18px;
}
		.login_nav {
    padding: 0 40px;
}
/* 		section.login-body-part {
    padding-right: 55px;
} */
	.main_login_img:before {
    width: 50%;
}
		.rigt_side_text h5 {
    font-size: 42px;
    color: #FFFFFF;
    text-align: end;
    font-weight: 400;
}
	.social_image {
    height: 50px;
    width: 50px;
    box-shadow: 0px 3px 6px #00000029;
    border-radius: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
}
		.social_image a img {
    height: 30px;
    width: 30px;
}
		@media (max-width:1280px){
			.rigt_side_text h5 {
    font-size: 38px;
}
		}
		@media only screen and (max-width: 1199px){
			.copy_right a{
				color: #fff;
			}
			button.btn_account.active {
    width: 200px;
}
		}
		@media only screen and (max-width: 1023px){
			.main_login_img:before{
				display: none;
			}
			.um-207.um {
    max-width: 100% !important;
}
			.copy_right a {
    color: #000;
}
		}
		@media (max-width:769px){
/* 			.social_image a img {
    height: 30px;
    width: 30px;
} */
.rigt_side_text h5 {
    font-size: 20px;
    color: #000;
    text-align: center;
    margin-top: 3rem;
}
			.main_login_img:before {
    background-image: unset;
}
			.not_register a {
    color: #000;
}
		}
		@media only screen and (max-width: 767px){
			.login_left_text {
    text-align: center;
}
			.login_nav {
    padding: 0 0px;
}
			section.login-body-part {
    padding-right: 0px;
}
			.rigt_side_text h5 {
    font-size: 23px;
}
		}
		
		@media (max-width:600px){
			.rigt_side_text h5 {
    font-size: 18px;
}
			button.btn_account.active {
    width: 100%;
}
			.form-inline {
    display: block;
}
	button.btn_account a,.btn_account {
        font-size: 16px;
    }
}


.form-floating {
    position: relative;
}
.um-form .form-floating .form-control{
    background: #fff;
    box-shadow: 0px 10px 20px #00000029 !important;
    border-radius: 9px;
    opacity: 1;
    height: 60px!important;
}
.um-form .um-button{
    background-color:#F96703;
    color: #fff;
    min-height: 60px;
    border-radius: 9px!important;
}

.form-floating > .form-control, .form-floating > .form-select {
  height: calc(3.5rem + 2px);
  line-height: 1.25;
}
.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  padding: 2rem 0.75rem;
  pointer-events: none;
  border: 1px solid transparent;
  transform-origin: 0 0;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
  font-size: 16px;
  border: 3px solid transparent!important;
}
.form-floating > .form-control {
  padding: 1rem 0.75rem;
}
.form-floating > .form-control::-moz-placeholder {
  color: transparent;
}
.form-floating > .form-control::placeholder {
  color: transparent;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
  border: 3px solid #0E559F!important;
}
.form-floating > .form-control:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:focus ~ label, .form-floating > .form-control:not(:placeholder-shown) ~ label, .form-floating > .form-select ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:-webkit-autofill ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}
.input-group > .form-control, .input-group > .form-select {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}
.input-group > .form-control:focus, .input-group > .form-select:focus {
  z-index: 3;
}
.input-group .btn {
  position: relative;
  z-index: 2;
}
.input-group .btn:focus {
  z-index: 3;
}
.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.input-group-lg > .form-control, .input-group-lg > .form-select, .input-group-lg > .input-group-text, .input-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  border-radius: 0.3rem;
}
.input-group-sm > .form-control, .input-group-sm > .form-select, .input-group-sm > .input-group-text, .input-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem;
}
.input-group-lg > .form-select, .input-group-sm > .form-select {
  padding-right: 3rem;
}
.input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu), .input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n + 3) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation > :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu), .input-group.has-validation > .dropdown-toggle:nth-last-child(n + 4) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -1px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

@media (max-width: 576.98px) {  
    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{
        font-size: 14px!important;
    }
}





</style>
<body style="background-color:#F5F9FA;" class="nebody">

    <div class="container-fluid">
        <div class="login_nav">
            <nav class="navbar justify-content-between align-items-center">
                <a class="navbar-brand">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/login_logo.png" class="img-fluid" alt="img">
                </a>
                <form class="form-inline">
                    <p class="not_register btn_account"><a href="http://agstdev.online/registration/">Not registered yet?</a></p>
                    <button class="btn btn_account active"><a href="/registration/">Create an Account</a></button>
                </form>
            </nav>
        </div>

        <section class="login-body-part">
            <div class="row justify-content-between align-items-end center-text_sec">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="col-xl-9 mx-auto">
                        <div class="login_left_text">
                            <h4><span>Hello, hii</span> <br> Welcome Back Avni</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            <div class="main_profile_form mt-4">                            
                            <?php echo do_shortcode('[ultimatemember form_id="207"]') ?>                                 
                            </div>
                           
<!--                             <div class="login_social">
                            <?php //echo do_shortcode('[TheChamp-Login style="border-radius:20px;"]'); ?>
                            </div> -->
							
						
							<?php if(is_user_logged_in())  { ?>
								 
						  <?php }  else{     ?>
						<!--	 <div class="login_with">
                                <p>Or Login With</p>
                            </div>
								 <div class="login_social">
								<div class="social_image">
									<a href="#"><img src="<//?php echo get_site_url(); ?>/wp-content/uploads/2023/02/google.png" alt="google-image"></a>
								</div>
								<div class="social_image">
									<a href="#">
										<img src="<//?php echo get_site_url(); ?>/wp-content/uploads/2023/02/circle-facebook_-512.png" alt="facebook"></a>
								</div>
								<div class="social_image">
									<a href="#">
									<img src="<//?php echo get_site_url(); ?>/wp-content/uploads/2023/02/Instagram_icon.png.png" alt="instagram"></a>
								</div>
								<div class="social_image">
									<a href="#">
									<img src="<//?php echo get_site_url(); ?>/wp-content/uploads/2023/02/linked.png"></a>
								</div>
                                <div class="social_image">
									<a href="#">
									<img src="<//?php echo get_site_url(); ?>/wp-content/uploads/2023/02/icons8-twitter-circled-48.png"></a>
								</div>
							</div>-->
						  <?php }   ?>

							
							
							
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-8">
                    <div class="rigt_side_text">
                        <h5>DEVELOP CRITICAL SKILLS,<br> GET CREDENTIALED,<br> AND CONNECT WITH<br> THE PEOPLE YOU NEED</h5>
                        <p>to prepare for, respond to, and recover from a disaster safely.</p>
                    </div>
                </div>
            </div>
        </section>

        
            <div class="copy_right mt-5">
                <div class="row justify-content-between flex-md-row flex-column align-items-center">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <p class="text-md-left text-center">Copyright © 2020 All Rights Reserved</p>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 text-md-right text-center">
                        <a href="<?php echo get_site_url(); ?>/terms-of-use/">Terms of Use  </a>
                        <a href="<?php echo get_site_url(); ?>/privacy-policy/">Privacy Policy   </a>
                        <a href="#">Sitemap </a>
                    </div>
                </div>
            </div>
       
    </div>



    
    


    




   
    <?php get_footer('general');  ?>

    <!-- js links -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>   
    <script src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

  

</body>
</html>