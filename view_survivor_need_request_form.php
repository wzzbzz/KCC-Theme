<?php 

   /* Template Name: View Survivor Need Intake Request Form */

      get_header('new'); 

      $survivor_id =  $_GET['id'];

      $rdData = get_post($survivor_id);

      $postMeta = get_post_meta($survivor_id);

      $reportAuthor  = get_current_user_id();

   ?>

<!DOCTYPE html>

<html lang="en">

   <head>

      <meta charset="UTF-8">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Survivor Need Intake Request</title>

      <!-- Favicon -->    

      <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">

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

      <style>

         .title_create h4 { font-size: 16px; color: #132843; margin: 1rem 0 1rem 0; font-weight: 600;}  

         .title_create h4 span{ color: #F92903;}

         .title_create p{font-size: 13px;  color: #000000;}

         .radio_sec.flow_radio_Sec label{font-size: 14px; color: #132843;    font-weight: 500;}

         .radio_sec.flow_radio_Sec .container_radio .checkmark {top: 0px; left: -3px; height: 20px;

         width: 20px;  border: unset; border-radius: 50%;  background: #EEEEEE 0% 0% no-repeat padding-box;}

         .radio_sec.flow_radio_Sec .container_radio .checkmark:after { top: 0px; left: 0px;

         width: 20px; height: 20px; border-radius: 50%; background: #fff; border: 5px solid #F9671D;}

         .radio_right { margin: 0.5rem 1.5rem 0.5rem 0rem; }

         .input_sec .form-control{background: #FFFFFF 0% 0% no-repeat padding-box;

         box-shadow: 0px 6px 16px #00000012;  border-radius: 12px;   font-size: 13px;

         color: rgba(36, 36, 36, 0.35);  padding: 1rem 0.5rem;}

         .main_flow div { margin: 1rem 2rem 1rem 0rem;}

         .main_flow h4 { font-size: 14px; color: #132843; font-weight: 600; margin-bottom: 0.5rem;}

         .main_flow p {font-size: 13px; color: #71706F; font-weight: 500;}

         .main_flow{display: flex;}

         .situation_report {visibility: unset;}

         .print_btn a {

         background: #F9671D 0% 0% no-repeat padding-box;

         box-shadow: 0px 3px 99px #ccd6ff3e;

         border-radius: 9px;

         font-size: 13px;

         color: #FFFFFF;

         padding: 1rem 1.5rem;

         margin-right: 1rem;

         display:flex;

         }

         .g_donation_tab_pills .title_create {

         background: #f8f8f8;

         padding: 3px 26px;

         margin: 5px 0px 10px;

         }

         .Coordination_main .top_title h5{

         font-size: 27px;

         }

         .back_btn{

         margin-top:0;

         }

         @media only screen and (max-width:1024px){

         .Coordination_main .top_title h5 {

         font-size: 15px;

         }

         }

         @media only screen and (max-width:768px){

         .print_btn a {

         display: flex;

         justify-content:center;

         }

         .Coordination_main .top_title h5 {

         font-size: 18px;

         }

         .print_btn a img{

         margin-left:10px;

         }

         .notification_Sec_main h5 {

         font-size: 15px;

         }

         }

         @media only screen and (max-width:600px){

         .print_btn a {

         display: flex;

         justify-content:center;

         }

         .main_flow div{

         margin-right: 0;

         }

         .main_side_bar_left{

         position:fixed;

         height:100vh !important;

         }

         .main_content_disaster{

         padding-right:0;

         }

         .main_content_disaster .main_content_disaster_row{

         margin-left:0;

         }

         .back_btn{

         margin-top:1rem;

         }

         .print_btn a img{

         margin-left:10px;

         }

         }

         .disaster_p {padding: 15px 0px;}

         .disaster_p .row{padding: 0px 40px;}

         .situation_title {margin-bottom:30px;}

         .situation_contant{margin-bottom:50px;}

         .situation_report .modal-content{ max-width:714px;}

         .situation_contant p { font-size: 15px; color: #242424; font-family: 'Poppins'; margin: 0px 54px; text-align: center;}

      </style>

   </head>

   <body class="main_all_bg_Sec">

      <?php include('user_sidebar.php')?>

      <div class="col-xl-12 main_content_disaster create-report">

         <div class="row justify-content-end mt-3 main_content_disaster_row">

            <?php include('user_topbar.php')?>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap my-4">

               <div class="col-xl-7 col-lg-6 col-md-7 col-12">

                  <div class="notification_Sec_main">

                     <h5>Survivor Need Request</h5>

                  </div>

               </div>

               <div class="col-xl-4 col-lg-5 col-md-4 col-12 d-flex align-items-center justify-content-end">

                  <div class="print_btn">

                     <a href="<?php echo get_site_url(); ?>/message/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chat-icon.png"></a>

                  </div>

                  <div class="print_btn">

                     <a href=""  onclick="printDiv('reportPrint')"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/print_icon.png">Print</a>

                  </div>

                  <div class="back_btn">

                     <a href="#" onclick="history.go(-1);">Back</a>

                  </div>

               </div>



            <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-2">

               <div class="col-xl-11 col-lg-11 col-md-11 col-12 main_profile_form disaster_p donation_tab_pills  g_donation_tab_pills mb-5" id ="reportPrint">

                  <div class="title_create">

                     <h4>Information</h4>

                  </div>

                  <div class="col-xl-12 row">

                     <div class="main_flow flex-wrap">

                        <div>

                           <h4>Date</h4>

                           <p><?php echo get_post_meta($survivor_id,'intake_date',true)?></p>

                        </div>

                        <div>

                           <h4>Time</h4>

                           <p><?php echo get_post_meta($survivor_id,'intake_time',true)?></p>

                        </div>  

                     </div>

                  </div>

                  <div class="title_create">

                     <h4>Client Information</h4>

                  </div>

                  <div class="col-xl-12 row">

                     <div class="main_flow flex-wrap">

                       

                       <div>

                           <h4>Client First Name</h4>

                           <p><?php echo get_post_meta($survivor_id,'intake_firstName',true)?></p>

                        </div>

                        <div>

                           <h4>Client Last Name</h4>

                           <p><?php echo get_post_meta($survivor_id,'intake_lastName',true)?></p>

                        </div>

                        

                         <div>

                           <h4>Address</h4>

                           <p><?php echo get_post_meta($survivor_id,'intake_address',true)?></p>

                        </div>

                        

                        <div>

                           <h4>Country</h4>

                           <p><?php echo get_user_meta($reportAuthor,'country',true)?></p>

                        </div>

                        

                        <div>

                           <h4>State</h4>

                           <p><?php echo get_user_meta($reportAuthor,'state',true)?></p>

                        </div>

                        

                        

                        <div>

                           <h4>City</h4>

                           <p><?php echo get_user_meta($reportAuthor,'city',true)?></p>

                        </div>

                        

                        <div>

                           <h4>Zip</h4>

                           <p><?php echo get_post_meta($survivor_id,'intake_zip',true)?></p>

                        </div>

                        

                          

                          <div>

                           <h4>Primary Telephone</h4>

                           <p><?php echo get_post_meta($survivor_id,'intake_phone',true)?></p>

                        </div>

                          <div>

                           <h4>Best Time to Contact</h4>

                           <p><?php echo get_post_meta($survivor_id,'intake_contact_time',true)?></p>

                        </div>

                     </div>

                  </div>

                  <div class="title_create">

                     <h4>Disaster Information</h4>

                  </div>

                  <div class="col-xl-12 row">

                     <div class="main_flow flex-wrap">

                        <!--<div>

                           <h4>Name of Disaster</h4>

                           <p><?//php echo get_post_meta($survivor_id,'rf_apply',true)?></p>

                        </div>-->

                         <div>

                           <h4>Disaster Type</h4>

                           <p><?php echo get_post_meta($survivor_id,'rf_apply',true)?></p>

                        </div>

                         <div>

                           <h4>Client Needs</h4>

                           <p><?php echo get_post_meta($survivor_id,'client_need',true)?></p>

                        </div>

                         <div>

                           <h4>Household Age Demographic</h4>

                           <p><?php echo get_post_meta($survivor_id,'household_age',true)?></p>

                        </div>

                            <div>

                           <h4>Count: Male Under 41-65</h4>

                           <p><?php echo get_post_meta($survivor_id,'number_mail',true)?></p>

                        </div>

                            <div>

                           <h4>Count: Female Under 41-65</h4>

                           <p><?php echo get_post_meta($survivor_id,'number_female',true)?></p>

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

                           <p><?php echo get_post_meta($survivor_id,'property_type',true)?></p>

                        </div>

                          <div>

                           <h4>Is the property or home damaged due to the current disaster?</h4>

                           <p><?php echo get_post_meta($survivor_id,'property_condition',true)?></p>

                        </div>

                          <div>

                           <h4>Are there life safety issues present at the worksite?</h4>

                           <p><?php echo get_post_meta($survivor_id,'life_safety',true)?></p>

                        </div>

                          <div>

                           <h4>Recovery Status</h4>

                           <p><?php echo get_post_meta($survivor_id,'recovery_status',true)?></p>

                        </div>

                          <div>

                           <h4>Is the Client the property owner?</h4>

                           <p><?php echo get_post_meta($survivor_id,'property_owner',true)?></p>

                        </div>

                         <div>

                           <h4>Is the homeowner willing to sign a liability waiver releasing the volunteers of any damages?</h4>

                           <p><?php echo get_post_meta($survivor_id,'liability_waiver',true)?></p>

                        </div>

                         <div>

                           <h4>The client/property owner agrees to be present while volunteers are working</h4>

                           <p><?php echo get_post_meta($survivor_id,'owner_present',true)?></p>

                        </div>

                         <div>

                           <h4>The owner must agree to be present to oversee work being done to their property, secure valuables and contribute to the work when possible. Does the owner agree to these terms?</h4>

                           <p><?php echo get_post_meta($survivor_id,'agree_terms',true)?></p>

                        </div>

                         <div>

                           <h4>Are client family members or friends willing to help?</h4>

                           <p><?php echo get_post_meta($survivor_id,'willing_to_help',true)?></p>

                        </div>

                         <div>

                           <h4>What rooms/floors have been damaged?</h4>

                           <p><?php echo get_post_meta($survivor_id,'property_type',true)?></p>

                        </div>

                           <div>

                           <h4>Is there mud or sewage?</h4>

                           <p><?php echo get_post_meta($survivor_id,'is_mud',true)?></p>

                        </div>

                        <div>

                           <h4>Is there standing water in any of the rooms?</h4>

                           <p><?php echo get_post_meta($survivor_id,'is_water',true)?></p>

                        </div>

                          <div>

                           <h4>What Appliances & Contents have been damaged?</h4>

                           <p><?php echo get_post_meta($survivor_id,'damage_contents',true)?></p>

                        </div>

                          <div>

                           <h4>What type of insurance do you have?</h4>

                           <p><?php echo get_post_meta($survivor_id,'insurance_type',true)?></p>

                        </div>

                          <div>

                           <h4>Have you contacted other service provider for help.</h4>

                           <p><?php echo get_post_meta($survivor_id,'contacted_other',true)?></p>

                        </div>

                     </div>

                  </div>

                  <div class="title_create">

                     <h4>Service provider Information</h4>

                  </div>

                  <div class="col-xl-12 row">

                     <div class="main_flow flex-wrap">

                        <div>

                           <h4>Are you a service provider entering this information on behalf of your client?</h4>

                           <p><?php echo get_post_meta($survivor_id,'on_behalf',true)?></p>

                        </div>

                        

                     </div>

                  </div>

               <div class="row justify-content-center mb-5">

                     <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                        <div class="apply_btn ">

                           <a href="#" data-toggle="modal" data-target="#survivor_report"  onclick ='deleteActionSurvivor("<?php echo $survivor_id?>")';><button class="btn btn_apply">Delete</button></a>

                        </div>

                     </div>

                     <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                        <div class="apply_btn active">

                           <a href ="<?php echo site_url('edit-survivor-need-request-form')."?id=".$survivor_id; ?>"> <button class="btn btn_apply next" id="next1"><i class="fa fa-pencil"></i> Edit</button></a>

                        </div>

                     </div>

                  </div>

               </div>

               </div>

            </div>

           <?php include('common_user_footer.php');?>

         </div>

      </div>

      </div>

 









           <!-- delete modal -->





<div class="modal fade situation_report" id="survivor_report" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

            <div class="modal-content">

                <div class="modal-body">

                    <div class="situation_title d-flex justify-content-between">

                        <div class=" ">

                            <h4 style="color:#132843; font-size:26px; font-family:'poppins';margin-left: 100px;">Are you sure you want to Delete</h4>

                        </div>

                       

                    </div>

                    <div class="situation_contant">

                        <p>You will not be able to recover the deleted item. To avoid deleting this item, click the Cancel button below.</p>

                    </div>

                    <div class="row justify-content-center mb-5">

                                <div class="col-lg-3 col-md-4 col-6">

                                    <div class="apply_btn ">

                                    <a href="#" data-toggle="modal" data-target="#survivor_report"><button class="btn btn_apply">Cancel</button></a>

                                    </div>   

                                </div>

                                <div class="col-lg-3 col-md-4 col-6">

                                    <div class="apply_btn active">

                                          <form method = "POST" action ="" class="mediadoc_form" enctype="multipart/form-data">

                                            <input type="hidden" id = "survivor_report_id" name="report_id"  value= "">

                                            <input type="hidden" name="delete_survivorReport" value="delete_survivorReport"/>



                                            <button class="btn btn_apply next" id="next1"><i class="fa fa-pencil"></i> Delete</button>

                                         </form>   

                                    </div>

                                </div>

                            </div>

                        </div>

                     </div>

                  </div>

               </div>        



    

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

      <!-- Print Code -->

      <script>

         function printDiv(divName) {

             var printContents = document.getElementById(divName).innerHTML;

             var originalContents = document.body.innerHTML;

         

             document.body.innerHTML = printContents;

         

             window.print();

         

             document.body.innerHTML = originalContents;

         }

      </script>

      <!-- Delete Report -->

       <script>

         function deleteActionSurvivor(id){         

             $('#survivor_report_id').val(id);

             $('#survivor_report').modal('show');

         }

      </script>

   </body>

</html>