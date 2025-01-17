<?php 

   /* Template Name: Disaster Situational Report Updated */

      get_header('new'); 

      $report_id =  $_GET['id'];

      $rdData = get_post($report_id);

      $postMeta = get_post_meta($report_id);

      $reportAuthor  = get_current_user_id();

      

   ?>

<!DOCTYPE html>

<html lang="en">

   <head>

      <meta charset="UTF-8">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Diaster Situational Report</title>

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

                     <h5>Disaster Situational Report</h5>

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

                      <a href="javascript:history.go(-1)">Back</a>

                    

                  </div>

               </div>



            <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-2">

               <div class="col-xl-11 col-lg-11 col-md-11 col-12 main_profile_form disaster_p donation_tab_pills  g_donation_tab_pills mb-5" id ="reportPrint">

                  <div class="title_create">

                     <h4>Disaster Details</h4>

                  </div>

                  <div class="col-xl-12 row">

                     <div class="main_flow flex-wrap">

                        <div>

                           <h4>Name of the Disaster</h4>

                           <p><?php echo $rdData->post_title; ?>

                            </p>

                        </div>

                        

                        <div>

                           <h4>Street Address</h4>

                           <p><?php echo get_post_meta($report_id,'incident_location',true)?></p>

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

                           <h4>Zip Code</h4>

                           <p><?php echo get_post_meta($report_id,'rf_zipcode2',true)?></p>

                        </div>

                        

                       

                     </div>

                  </div>

                  <div class="title_create">

                     <h4>Contact Information</h4>

                  </div>

                  <div class="col-xl-12 row">

                     <div class="main_flow flex-wrap">

                       

                       <div>

                           <h4>Name of Organization</h4>

                           <p><?php echo get_post_meta($report_id,'rf_org',true)?></p>

                        </div>

                        

                        <!--<div>

                           <h4>Street Address</h4>

                           <p><?//php echo get_post_meta($report_id,'incident_location',true)?></p>

                        </div>-->

                        <div>

                           <h4>Contact Person</h4>

                           <p><?php echo get_post_meta($report_id,'rf_contact_person',true)?></p>

                        </div>

                        

                        <div>

                           <h4>Title</h4>

                           <p><?php echo get_post_meta($report_id,'rf_title',true)?></p>

                        </div>

                        

                         <div>

                           <h4>Email Address</h4>

                           <p><?php echo get_post_meta($report_id,'rf_email',true)?></p>

                        </div>

                        

                         <div>

                           <h4>Phone</h4>

                           <p><?php echo get_post_meta($report_id,'rf_phone',true)?></p>

                        </div>

                        

                        <!--<div>

                           <h4>Country</h4>

                           <p><?//php echo get_post_meta($report_id,'rf_country',true)?></p>

                        </div>-->

                        <br/>

                        

                        <div class="col-xl-12 row">

                          

                        <div>

                           <h4>Address</h4>

                           <p><?php echo get_post_meta($report_id,'rf_address',true)?></p>

                        </div>

                        <div>

                           <h4>Country</h4>

                           <p><?php echo get_post_meta($report_id,'country',true)?></p>

                        </div>

                         <div>

                             

                           <h4>State</h4>

                           <p><?php echo get_post_meta($report_id,'state',true)?></p>

                        </div>

                          

                         

                          <div>

                           <h4>City</h4>

                           <p><?php echo get_post_meta($report_id,'city',true)?></p>

                        </div>

                        

                          <div>

                           <h4>Zip code</h4>

                           <p><?php echo get_post_meta($report_id,'rf_zipcode2',true)?></p>

                        </div>

                        

                        </div>

                        

                        

                        

                        

                     </div>

                  </div>

                  <div class="title_create">

                     <h4>Official Point Of Contact At The Site If Different From Above</h4>

                  </div>

                  <div class="col-xl-12 row">

                     <div class="main_flow flex-wrap">

                        <div>

                           <h4>Disaster</h4>

                           <p><?php echo get_post_meta($report_id,'rf_apply',true)?></p>

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

                           <p><?php echo get_post_meta($report_id,'rf_disaster_type1',true)?></p>

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

                           <p><?php echo get_post_meta($report_id,'rf_security',true)?></p>

                        </div>

                        <div>

                           <h4>Sheltering</h4>

                           <p><?php echo get_post_meta($report_id,'rf_sheltering',true)?></p>

                        </div>

                        <div>

                           <h4>Utitlites</h4>

                           <p><?php echo get_post_meta($report_id,'rf_utilities',true)?></p>

                        </div>

                        <div>

                           <h4>Recommended airport of other points of entry</h4>

                           <p><?php echo get_post_meta($report_id,'rf_recommended',true)?></p>

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

                           <p><?php echo get_post_meta($report_id,'rf_comment',true)?></p>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="row justify-content-center mb-5">

                  <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                     <div class="apply_btn ">

                        <a href="#" data-toggle="modal" data-target="#disaster_report"  onclick ='deleteActiondisasterReport("<?php echo $report_id?>")';><button class="btn btn_apply">Delete</button></a>

                     </div>

                  </div>

                  <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                     <div class="apply_btn active">

                        <a href ="<?php echo site_url('edit-disaster-report')."?id=".$report_id; ?>"> <button class="btn btn_apply next" id="next1"><i class="fa fa-pencil"></i> Edit</button></a>

                     </div>

                  </div>

               </div>

            </div>



            </div>

            <div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec balaji_footer d-flex align-items-center  flex-wrap">

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

                        <a href="#">HOME</a>

                        <a href="#">WHAT WE DO</a>

                        <a href="#">WORLD CARES CENTER</a>

                        <a href="#">TRAINING</a>

                        <a href="#">COORDINATION</a>

                        <a href="#">BLOG</a>

                        <a href="#">CONTACT US</a>

                        <a href="#">DONATE</a>

                     </div>

                     <div class="privercy_pag">

                        <a href="#">TERMS OF USE</a>

                        <a href="#">PRIVACY POLICY  </a>

                        <a href="#">SITEMAP</a>

                     </div>

                  </div>

                  <div class="copy_right_Sec">

                     <p>COPYRIGHT © 2020 ALL RIGHTS RESERVED</p>

                  </div>

               </div>

            </div>

         </div>

      </div>

      </div>

 









  <div class="modal fade situation_report" id="disaster_report" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

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

                                    <a href="#" data-toggle="modal" data-target="#disaster_report"><button class="btn btn_apply">Cancel</button></a>

                                    </div>   

                                </div>

                                <div class="col-lg-3 col-md-4 col-6">

                                    <div class="apply_btn active">

                                          <form method = "POST" action ="" class="mediadoc_form" enctype="multipart/form-data">

                                            <input type="hidden" id = "disaster_report_id" name="report_id"  value= "">

                                            <input type="hidden" name="delete_disasterReport" value="delete_disasterReport"/>



                                            <button class="btn btn_apply next" id="next1"><i class="fa fa-pencil"></i> Delete</button>

                                         </form>   

                                    </div>

                                </div>

                            </div>

                </div>

            </div>

        </div>

    </div>

      <!-- js links -->

      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>

      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>   

      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

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

         function deleteActiondisasterReport(id){         

             $('#disaster_report_id').val(id);

             $('#disaster_report').modal('show');

         }

      </script>

   </body>

</html>