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

</style>



<div class="col-xl-12 coordination-center-tracking intake-temp">

        <div class="row justify-content-end mt-3">



             <?php include('user_topbar.php')?>

        </div>



        <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 my-4">

                <div class=" col-xl-11 d-flex align-items-center justify-content-between flex-wrap px-0">

                <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap my-4">

                <div class="col-xl-7 col-lg-6 col-md-7 col-12">

                    <div class="notification_Sec_main">

                        <h5>Survivors Needs intack form</h5>                                                   

                    </div>                    

                </div>

                <div class="col-xl-4 col-lg-5 col-md-4 col-12 d-flex align-items-center justify-content-end">

                    <div class="print_btn">

                        <a href="<?php echo get_site_url(); ?>/message/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chat-icon.png"></a>

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

                        <h4>Logistics and transportation situation</h4>

                    </div>

                    <div class="col-xl-12 row">

                        <div class="main_flow flex-wrap">

                            <div>

                                <h4>Transportation</h4>

                                <p>Subways</p>

                            </div>                    

                        </div>

                    </div>  

                    <div class="title_create">

                        <h4>Description of situation on the ground </h4>

                    </div>

                    <div class="col-xl-12 row">

                        <div class="main_flow flex-wrap">

                            <div>

                                <h4>Security</h4>

                                <p>No isshu</p>

                            </div> 

							<div>

                                <h4>Sheltering</h4>

                                <p>surviveor sheitoring in place</p>

                            </div> 

							<div>

                                <h4>utitlites</h4>

                                <p>sevage\blologoal hazard</p>

                            </div> 

							<div>

                                <h4>Recommended airport of other points of entry</h4>

                                <p>JFK</p>

                            </div> 

                        </div>

                    </div>  

                    <div class="title_create">

                        <h4>Additional Comments</h4>

                    </div>

                    <div class="col-xl-12 row">

                        <div class="main_flow flex-wrap">

                            <div>

                                <h4>Comments</h4>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                            </div>        

                        </div>

                    </div>

					

                    

                   

            </div>

					<div class="row justify-content-center mb-5">

                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                                <div class="apply_btn ">

                                    <button class="btn btn_apply">Delete</button>

                                </div>   

                            </div>

                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                                <div class="apply_btn active">

                                    <button class="btn btn_apply next" id="next1"><i class="fa fa-pencil"></i> Edit</button>

                                </div>

                            </div>

                        </div>

				

				

        </div>

        </div>





                  

    </div>





<!-- js links -->

<script src="<?= get_template_directory_uri();?>/assets/js/jquery.min.js"></script>

    <script src="<?= get_template_directory_uri();?>/assets/js/popper.min.js"></script>

    <script src="<?= get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>   

    <script src="<?= get_template_directory_uri();?>/assets/js/owl.carousel.min.js"></script>



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