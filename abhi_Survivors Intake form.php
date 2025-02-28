<?php 

   /* Template Name: Abhi Survivors Intake form */

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

    .back_btn{margin:0px;}

    .g_donation_tab_pills .title_create {

    background: #f8f8f8;

    padding: 3px 26px;

    margin: 5px 0px 10px;

}

.donation_tab_pills {

    background: #FFFFFF 0% 0% no-repeat padding-box;

    box-shadow: 0px 10px 20px #00000029;

    border-radius: 20px;

    padding: 2rem 0;

}

.intake_F .main_flow div {

    margin: 1rem 1.5rem 1rem 0rem;

}

.intake_F .col-xl-12{padding:0px 0px 0 28px; margin: 0px;}

.intake_F .main_flow h4{font-size:16px;}

.intake-temp .main_footer_sec {

    background: #134793 0% 0% no-repeat padding-box;

    border-radius: 50px 0px 0px 0px;

    padding: 1rem 0rem 2rem 0rem;

    margin-top: 40px;

    float: right;

}

.intake_h{padding: 0px; justify-content: space-between; min-width:100%;}

</style>



<div class="col-xl-12 coordination-center-tracking intake-temp">

        <div class="row justify-content-end mt-3">



            <?php include('user_topbar.php')?>

        </div>



        <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 my-4">

                <div class=" col-xl-11 d-flex align-items-center justify-content-between flex-wrap px-0">

                <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center intake_h flex-wrap my-4">

                <div class="col-xl-7 col-lg-6 col-md-7 col-12">

                    <div class="notification_Sec_main">

                        <h5>Survivors Needs Intake form</h5>                                                   

                    </div>                    

                </div>

                <div class="col-xl-4 col-lg-5 col-md-4 col-12 d-flex align-items-center justify-content-end">

                <div class="print_btn">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/print_icon.png">Print</a>

                    </div>

				

                    <div class="back_btn">

                        <a href="#">Back</a>

                    </div>

                </div>

            </div>





                    

                </div>

            </div>

        </div>

        <div class="row justify-content-end mt-3">

        <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-2">                               

                <div class="col-xl-11 col-lg-11 col-md-11 col-12 main_profile_form intake_F donation_tab_pills  g_donation_tab_pills mb-5">

                    <div class="title_create">

                        <h4>Information</h4>

                    </div>  

                   <div class="col-xl-12 row">

                    <div class="main_flow flex-wrap">

                        <div>

                            <h4>Date</h4>

                            <p>2022-09-06</p>

                        </div>

                        <div>

                            <h4>Time</h4>

                            <p>00:06:45</p>

                        </div>                                 

                    </div>

                   </div>

                   <div class="title_create">

                        <h4>Contact Information</h4>

                    </div>

                    <div class="col-xl-12 row">

                        <div class="main_flow flex-wrap">

                            <div>

                                <h4>Client First Name</h4>

                                <p>Vaishali</p>

                            </div>                                                         

                            <div>

                                <h4>Client Last Name</h4>

                                <p>Sedani-Cassidy</p>

                            </div>                                                         

                            <div>

                                <h4>Address</h4>

                                <p>520 8th AVe</p>

                            </div>

							<div>

                                <h4>City</h4>

                                <p>New York</p>

                            </div>

							<div>

                                <h4>State</h4>

                                <p>NY</p>

                            </div>

							

                            <div>

                                <h4>Country</h4>

                                <p>United States</p>

                            </div>                                                         

                            <div>

                                <h4>Primary Telephone</h4>

                                <p>2125637570</p>

                            </div>

							 <div>

                            <h4>Best Time to Contact</h4>

                            <p>weekday mornings</p>

                        </div>

                                  

                        </div>

                    </div>  

                    <div class="title_create">

                        <h4>Disaster Information</h4>

                    </div>

                    <div class="col-xl-12 row">

                        <div class="main_flow flex-wrap">

                            <div>

                                <h4>Name of Disaster</h4>

                                <p>Bad Air Quality due to Keagan Landfill</p>

                            </div>

                            <div>

                                <h4>Disaster Type</h4>

                                <p>Hazardous Material/Spill/ Chemical Release</p>

                            </div>

                            <div>

                                <h4>Client needs</h4>

                                <p>Bug Repellent / Mosquito Nets</p>

                            </div>

                            <div>

                                <h4>Household Age Demographic</h4>

                                <p>41-65</p>

                            </div>

                            <div>

                                <h4>Count: Male Under 41-65</h4>

                                <p>1</p>

                            </div>

                            <div>

                                <h4>Count: Female Under 41-65</h4>

                                <p>0</p>

                            </div>

                        </div>

                    </div>  

                    <div class="title_create">

                        <h4>Property Assessment</h4>

                    </div>

                    <div class="col-xl-12 row">

                        <div class="main_flow flex-wrap">

                            <div>

                                <h4>Property Type</h4>

                                <p>Rented house/apartment</p>

                            </div>   

                            <div>

                                <h4>Other property type</h4>

                                <p>Apartment</p>

                            </div>   

                            <div>

                                <h4>Is the property or home damaged due to the current disaster?</h4>

                                <p>No</p>

                            </div>   

                            <div>

                                <h4>Are there life safety issues present at the worksite?</h4>

                                <p>No</p>

                            </div>   

                            <div>

                                <h4>Recovery Status</h4>

                                <p>Partially recovered - Still a lot of work to do</p>

                            </div> 

                            <div>

                                <h4>Is the Client the property owner?</h4>

                                <p>No</p>

                            </div> 

                            <div>

                                <h4>Is the homeowner willing to sign a liability waiver releasing the volunteers of any damages?</h4>

                                <p>Yes</p>

                            </div> 

                            <div>

                                <h4>The client/property owner agrees to be present while volunteers are working</h4>

                                <p>Yes</p>

                            </div> 

                            <div>

                                <h4>Are client family members or friends willing to help?</h4>

                                <p>Yes</p>

                            </div> 

                            <div>

                                <h4>What rooms/floors have been damaged?</h4>

                                <p>Yes</p>

                            </div> 

                            <div>

                                <h4>Other</h4>

                                <p>balcony</p>

                            </div> 

                            <div>

                                <h4>Is there standing water in any of the rooms?</h4>

                                <p>No</p>

                            </div> 

                            <div>

                                <h4>Are any of the following items NOT functioning?</h4>

                                <p>Central Air / Gas Service / Water</p>

                            </div>  

                            <div>

                                <h4>What Appliances & Contents have been damaged?</h4>

                                <p>Furniture</p>

                            </div>  

                            <div>

                                <h4>What type of insurance do you have?</h4>

                                <p>Renters</p>

                            </div>  

                            <div>

                                <h4>Have you contacted other service providers for help?</h4>

                                <p>No</p>

                            </div>  

                            <div>

                                <h4>Have you contacted select list</h4>

                                <p>Yes</p>

                            </div>  

                            <div>

                                <h4>Other service provider</h4>

                                <p>No</p>

                            </div>                    

                        </div>

                    </div>  

                    <div class="title_create">

                        <h4>Service provider Information</h4>

                    </div>

                    <div class="col-xl-12 row">

                        <div class="main_flow flex-wrap">

                            <div>

                                <h4>Service provider Information</h4>

                                <p>Yes</p>

                            </div> 

							

                        </div>

                    </div>  

                    <div class="title_create">

                        <h4>Service provider Details</h4>

                    </div>

                    <div class="col-xl-12 row">

                        <div class="main_flow flex-wrap">

                            <div>

                                <h4>Organization</h4>

                                <p>Management</p>

                            </div> 

                            <div>

                                <h4>First name</h4>

                                <p>Tirrell</p>

                            </div> 

                            <div>

                                <h4>Last name</h4>

                                <p>Richardson</p>

                            </div> 

                            <div>

                                <h4>Title</h4>

                                <p>Emergency Manager</p>

                            </div> 

                            <div>

                                <h4>Address</h4>

                                <p>123 Brooklyn</p>

                            </div>

                            <div>

                                <h4>City</h4>

                                <p>Brooklyn</p>

                            </div>

                            <div>

                                <h4>State</h4>

                                <p>New York</p>

                            </div>

                            <div>

                                <h4>Country</h4>

                                <p>United States</p>

                            </div>  

                            <div>

                                <h4>Zip</h4>

                                <p>11224</p>

                            </div>        

                        </div>

                    </div>

					

                    

                   

            </div>

					

				

				

        </div>

        </div>

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





<!-- js links -->

<script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/jquery.min.js"></script>

    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/popper.min.js"></script>

    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/bootstrap.min.js"></script>   

    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/owl.carousel.min.js"></script>



    <script>      

        $(document).ready(function() {  

       

        $(".next").click(function() {

            let previous = $(this).closest("fieldset").attr('id');

            let next = $('#'+this.id).closest('fieldset').next('fieldset').attr('id');

            if(previous == "step0"){

                console.log(previous);

               $('#'+next).show();

                $('#'+previous).hide();

            } 

            else if(previous == "step1"){

                $('#'+next).show();

                $('#'+previous).hide();

            }      

        }); 

        

    });

    $(".previous").click(function() {

        let current = $(this).closest("fieldset").attr('id');

        let previous = $('#'+this.id).closest('fieldset').prev('fieldset').attr('id');

        $('#'+previous).show();

        $('#'+current).hide();

    }); 

    </script>













<?php get_footer('new'); } ?>