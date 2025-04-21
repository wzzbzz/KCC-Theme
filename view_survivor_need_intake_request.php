<?php 

/* Template Name: View Survivor need intake request */

  

   get_header('new');

   $report_id  =  $_GET['rid'];

   $rdData     = get_post($report_id);

   $postMeta   = get_post_meta($report_id);

   $current_url =  home_url( $wp->request );

  

?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Survivor Need Intake Form Requests</title>



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



</head>

<body class="main_all_bg_Sec organization-vol">

     <?php include('user-sidebar.php')?>



    <div class="col-xl-12 main_content_disaster create-report situational-report">

        <div class="row justify-content-end mt-3 main_content_disaster_row">

            <?php include('user_topbar.php')?>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center justify-content-between flex-wrap my-4">

                <div class="col-xl-7 col-lg-6 col-md-7 col-12">

                    <div class="notification_Sec_main">

                        <h5>Survivor Need Intake Form Requests</h5>                                                   

                    </div>                    

                </div>

                <div class="col-xl-4 col-lg-5 col-md-4 col-12 d-flex align-items-center justify-content-end">

                    <div class="print_btn">

                        <a href="<?php echo get_site_url(); ?>/message/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chat-icon.png"></a>

                    </div>

                    <div class="print_btn">

                        <a href=""  onclick="printDiv('pills-report')"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/print_icon.png">Print</a>

                    </div>

                    <div class="back_btn">

                        <a href="#">Back</a>

                    </div>

                </div>

                

                <div class="col-12">

                    <div class="organization-vol">

                        <div class="tab-item">

                            <ul class="nav nav-pills" id="pills-tab" role="tablist">

                              <li class="nav-item">

                                <a class="nav-link active" id="pills-report-tab" data-toggle="pill" href="#pills-report" role="tab" aria-controls="pills-report" aria-selected="true">Report</a>

                              </li>

                              <li class="nav-item">

                                <a class="nav-link" id="pills-members-tab" data-toggle="pill" href="#pills-members" role="tab" aria-controls="pills-members" aria-selected="false">Members Info</a>

                              </li>

                              <li class="nav-item">

                                <a class="nav-link" id="pills-requests-tab" data-toggle="pill" href="#pills-requests" role="tab" aria-controls="pills-requests" aria-selected="false">Requests</a>

                              </li>

                               <li class="nav-item">

                                <a class="nav-link" id="pills-requests-tab" data-toggle="pill" href="#request-status" role="tab" aria-controls="request-status" aria-selected="false">Request Status</a>

                              </li>

                            </ul>

                        </div>

                    </div>

                </div> 

                <div class="col-12">

                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-report" role="tabpanel" aria-labelledby="pills-report-tab">

                            <div class="form-box" id ="reportPrint">

                                <div class="report-next-tab">

                                    <div class="row">

                                        <div class="col-xl-12">

                                            <div class="all-form">

                                                <div id="step-4" class="main-form-section w-100">

                                                    <div class="row">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="bg-ligt-color">

                                                                <div class="form-title">

                                                                    <h3>Contact Information</h3>

                                                                </div>            

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                  <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Report ID</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'report_id',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Name of event</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo $rdData->post_title?></p>

                                                                    </div>    

                                                                </div>

                                                              

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Contact Person</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'client_firstName',true)?> <?php echo get_post_meta($report_id,'client_lastName',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>City</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'city',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                 <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>State</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'state',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Country</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'country',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Address</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'client_address',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                              

                                                                

                                                                 <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Zip</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'intake_zip',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Contact</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'client_phone',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Alternative Contact</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'client_phone2',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                 <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Contact Time</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'client_preferred_contact_time',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Disaster Type</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'disaster_type',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                 <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Client Needs</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'client_need',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Household Age Demographic</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'household_age',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Age of dependent</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'other_age',true)?></p>

                                                                    </div>    

                                                                </div>

                                                    

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="bg-ligt-color">

                                                                <div class="form-title">

                                                                    <h3>Property Assesment</h3>

                                                                </div>            

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Propert type</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'property_type',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>

Is the property or home damaged due to the current disaster? </h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'property_condition',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Are there life safety issues present at the worksite? *</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'life_safety',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>What is the current recovery status of the property? </h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'recovery_status',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Is the Client the property owner?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'property_owner',true)?></p>

                                                                    </div>    

                                                                </div>

                                                            

                                                                

                                                                

                                                              

                                                              

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Is there mud or sewage? *</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'is_mud',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                               

                                                            </div>

                                                        </div>

                                                        

                       

                                   

                                                        <div class="col-lg-8 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>The owner must agree to be present to oversee work being done to their property, secure valuables and contribute to the work when possible. Does the owner agree to these terms? </h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($report_id,'agree_terms',true)?></p>

                                                                        </div>    

                                                                </div>

                                                                

                                                            </div>

                                                        </div>

                                                        

                                                        <div class="col-lg-8 mb-3">

                                                            <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Is the homeowner willing to sign a liability waiver releasing the volunteers of any damages? </h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'liability_waiver',true)?></p>

                                                                    </div>    

                                                            </div>

                                                        </div>

                                                        

                                                        

                                                        <div class="col-lg-8 mb-3">

                                                            <div class="box-area">

                                                                <div class="title">

                                                                    <h3>Have you contacted other service providers for help?</h3>

                                                                </div>

                                                                <div class="content-para">

                                                                    <p><?php echo get_post_meta($report_id,'contacted_other',true)?></p>

                                                                </div>    

                                                            </div>

                                                        </div>

                                                        

                                                        

                                                        <div class="col-lg-8 mb-3">

                                                            <div class="box-area">

                                                                <div class="title">

                                                                    <h3>What room/floors have been damaged? Select all that apply.</h3>

                                                                </div>

                                                                <div class="content-para">

                                                                    <p><?php echo get_post_meta($report_id,'property_type',true)?></p>

                                                                </div>    

                                                            </div>

                                                        </div>

                                                        

                                                        

                                                         <div class="col-lg-8 mb-3">

                                                             <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>The client/property owner agrees to be present while volunteers are working </h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'owner_present',true)?></p>

                                                                    </div>    

                                                                </div>

                                                        </div>

                                                        

                                                        

                                                        <div class="col-lg-8 mb-3">

                                                          <div class="box-area">

                                                                <div class="title">

                                                                    <h3>The client/property owner agrees to be present while volunteers are working </h3>

                                                                </div>

                                                                <div class="content-para">

                                                                    <p><?php echo get_post_meta($report_id,'owner_present',true)?></p>

                                                                </div>    

                                                            </div>

                                                        </div>

                                                        

                                                        

                                                         <div class="col-lg-8 mb-3">

                                                            <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Are client family members or friends willing to help?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($report_id,'willing_to_help',true)?></p>

                                                                    </div>    

                                                            </div>

                                                        </div>

                                                        

                                                        

                                                        <div class="col-lg-8 mb-3">

                                                            <div class="box-area">

                                                                <div class="title">

                                                                    <h3>What type of insurance do you have?</h3>

                                                                </div>

                                                                <div class="content-para">

                                                                    <p><?php echo get_post_meta($report_id,'insurance_type',true)?></p>

                                                                </div>    

                                                            </div>

                                                        </div>

                                                        

                                                         <div class="col-lg-8 mb-3">

                                                            <div class="box-area">

                                                                <div class="title">

                                                                    <h3>What Appliances & Contents have been damaged? *</h3>

                                                                </div>

                                                                <div class="content-para">

                                                                    <p><?php echo get_post_meta($report_id,'damage_contents',true)?></p>

                                                                </div>    

                                                            </div>

                                                        </div>

                                                        

                                                       

                                                    </div>

                                            

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                           <!-- <div class="row table-btn-edit">

                                <div class="col-xl-6 d-flex justify-content-end">

                                    <div class="btn-1">

                                        <a href="javascript:void(0)" title="Delete" class="btn btn-outline-primary">Delete</a>

                                    </div>

                                </div>

                                <div class="col-xl-6 d-flex justify-content-start">

                                    <div class="btn-2">

                                        <a href="javascript:void(0)" title="Edit" class="btn btn-primary"><i class="fa fa-edit px-2"></i> Edit</a>

                                    </div>

                                </div>

                            </div>-->

                        </div>

                        <div class="tab-pane fade" id="pills-members" role="tabpanel" aria-labelledby="pills-members-tab">

                            <div class="global-table mt-30">

                                <div class="table-responsive">

                                    <table class="table table-hover">

                                        <thead>

                                            <?php 

                                                global $wpdb;

                                                $results = $wpdb->get_results( "SELECT * FROM wp_postmeta WHERE `post_id`= $report_id AND `meta_value`='approved' " );

                                                if(!empty($results)){?>

                                            <tr>

                                                <th>Member Name</th>

                                                <th>Country</th>

                                                <th>State</th>

                                                <th>City</th>

                                                <th>Zip</th>

                                                

                                                <th>Email Address</th>

                                                <th>Education</th>

                                                

                                                <th>&nbsp;</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php foreach($results as $value) { 

                                                  $string = $value->meta_key;

                                                  $user_id = filter_var($string, FILTER_SANITIZE_NUMBER_INT);

                                                  $userInfo =   get_userdata($user_id);

                                                  $skillList = $wpdb->get_results( "SELECT * FROM user_skills WHERE user_id = '".$user_id."' ",ARRAY_A); 



                                                   $user_other_info = get_user_meta($user_id);

                                                    $List ='';

                                                    for($i=0;$i<count($skillList);$i++){ 

                                                     $List .= $skillList[$i]['skill_type'].","; 

                                                    }

                                            ?>

                                            

                                                <tr class="bg-color">

                                                <td><?php echo $userInfo->display_name?></td>

                                                  <td><?php echo get_user_meta($user_id,'country',true)?></td>

                                                  <td><?php echo get_user_meta($user_id,'state',true)?></td>

                                                  <td><?php echo get_user_meta($user_id,'city',true)?></td>

                                                  <td><?php echo get_user_meta($user_id,'code',true)?></td>

                                               

                                               <td>

                                                   <div class="organization">

                                                        <a href="mailto:<?php echo $userInfo->user_email; ?>"><?php echo $userInfo->user_email; ?></a>

                                                    </div>

                                                </td>

                                                <td><?php echo get_user_meta($user_id,'education',true)?></td>

                                              

                                                 

                                                <td style="width:12%;">

                                                    <a href="<?php echo site_url('view-user-profile/')."?userID=".$user_id; ?>" class="d-block" target="_blank">

                                                        <div class="orange-box report-btn">

                                                            <p>View</p>

                                                        </div>

                                                    </a>

                                                </td>

                                            </tr>

                                             <?php } } else {?>

                                               <span class="text-danger"><?php echo 'There are no members.'?></span>

                                             <?php } ?>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                            

                        </div>

                        <div class="tab-pane fade" id="pills-requests" role="tabpanel" aria-labelledby="pills-requests-tab">

                            <div class="global-table mt-30">

                                <div class="table-responsive">

                                    <table class="table table-hover">

                                        <thead>

                                            <?php 

                                                global $wpdb;

                                                $results = $wpdb->get_results( "SELECT * FROM wp_postmeta WHERE `post_id`= $report_id AND `meta_value`='applied' " );

                                                if(!empty($results)){?>

                                            <tr>

                                               <!-- <th>Date of Submission</th>-->

                                                <th>Contact Person</th>

                                                <th>Country</th>

                                                <th>State</th>

                                                <th>City</th>

                                                <td>Zip</td>

                                                <td>Email</td>

                                                <th>Accept</th>

                                                <th>Reject</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            

                                          <?php foreach($results as $value) {

                                            

                                                $reportAuthor = $value->post_author;

                                                $string = $value->meta_key;

                                                $user_id = filter_var($string, FILTER_SANITIZE_NUMBER_INT);

                                                $userInfo =   get_userdata($user_id);

                                                $user_other_info = get_user_meta($user_id);

                                          ?>

                                                <tr class="bg-color">

                                                 

                                                 <td><?php echo $userInfo->display_name; ?></td>

                                            

                                                <td><?php echo get_user_meta($user_id,'country',true)?></td>

                                                <td><?php echo get_user_meta($user_id,'state',true)?></td>

                                                <td><?php echo get_user_meta($user_id,'city',true)?></td>

                                                 <td><?php echo get_user_meta($user_id,'code',true)?></td>

                                                 <td>

                                                   <div class="organization">

                                                        <a href="mailto:<?php echo $userInfo->user_email; ?>"><?php echo $userInfo->user_email; ?></a>

                                                    </div>

                                                </td>

                                                <td>

                                                    <div>

                                                        

                                                         <?php 

                                                             $redirectedURL = "$current_url/?rid=".$report_id." ";

                                                        ?>

                                                        <form method = 'POST' action ='' class='row mediadoc_form' id='disaster_media' enctype='multipart/form-data'>

                                                           <input type="hidden" name="approve_organizationRequest"  value="approve_organizationRequest"/>

                                                           <input type="hidden" name ="report_id" value= "<?php echo $report_id ?>">

                                                           <input type ="hidden" name ="report_applied_by" value="<?php echo $value->meta_key;  ?>" >

                                                            <input type="hidden" name ="page_url"  value= "<?php echo $redirectedURL ?>">

                                                             <input type="hidden" name ="uniqueReportID" value="<?php echo get_post_meta($report_id,'report_id',true)?>">

                                                            <div class="orange-box report-btn">

                                                                <button type ="submit" class="orange-box btn-sm"><i class="fa fa-check"></i></button>

                                                            </div>

                                                        </form>

                                                    </div>

                                                </td>

                                                <td>

                                                    <div class="mx-2">

                                                        <form method = 'POST' action ='' class='row mediadoc_form' id='disaster_media' enctype='multipart/form-data'>

                                                            <input type="hidden" name="reject_organizationRequest"  value="reject_organizationRequest"/>

                                                            <input type="hidden" name ="report_id" value= "<?php echo $report_id ?>">

                                                            <input type ="hidden" name ="report_applied_by" value="<?php echo $value->meta_key;  ?>" >

                                                            <input type="hidden" name ="page_url"  value= "<?php echo $redirectedURL ?>">

                                                             <input type="hidden" name ="uniqueReportID" value="<?php echo get_post_meta($report_id,'report_id',true)?>">

                                                            <div class="orange-box report-btn">

                                                                <button type ="submit" class="orange-box btn-sm"><i class="fa fa-close"></i></button>

                                                            </div>

                                                        </form>

                                                    </div>

                                                </td>

                                            </tr>

                                             <?php } } else {?>

                                               <span class="text-danger py-2"><?php echo 'There are no requests yet.'?></span>

                                             <?php } ?>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                        

                        

                        

                         <div class="tab-pane fade" id="request-status" role="tabpanel" aria-labelledby="request-status-tab">

                            <div class="global-table mt-30">

                                <div class="table-responsive">

                                    <h5 class="py-2"> Approved Requests</h5>

                                        <table class="table table-hover">

                                        <thead>

                                            <?php 

                                                global $wpdb;

                                                $results = $wpdb->get_results( "SELECT * FROM wp_postmeta WHERE `post_id`= $report_id AND `meta_value`='approved' " );

                                                if(!empty($results)){?>

                                            <tr>

                                               <!-- <th>Date of Submission</th>-->

                                                <th>Contact Person</th>

                                                <th>Country</th>

                                                <th>State</th>

                                                <th>City</th>

                                                <th>Zip</th>

                                                <th>Email</th>

                                              

                                                <th>Status</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            

                                            <?php foreach($results as $value){

                                                $reportAuthor = $value->post_author;

                                                  $string = $value->meta_key;

                                                  $user_id = filter_var($string, FILTER_SANITIZE_NUMBER_INT);

                                                  $userInfo =   get_userdata($user_id);

                                                  

                                                 // $skillList = $wpdb->get_results( "SELECT * FROM user_skills WHERE user_id = '".$user_id."' ",ARRAY_A); 

                                                   $user_other_info = get_user_meta($user_id);

                                            ?>

                                                <tr class="bg-color">

                                               <td><?php echo $userInfo->display_name; ?></td>

                                                <td><?php echo get_user_meta($user_id,'country',true)?></td>

                                                <td><?php echo get_user_meta($user_id,'state',true)?></td>

                                                <td><?php echo get_user_meta($user_id,'city',true)?></td>

                                               <td><?php echo get_user_meta($user_id,'code',true)?></td>

                                                 <td>

                                                   <div class="organization">

                                                        <a href="mailto:<?php echo $userInfo->user_email; ?>"><?php echo $userInfo->user_email; ?></a>

                                                    </div>

                                                </td>

                                                <td>

                                                    <div class="mx-2">

                                                        <div class="orange-box report-btn">

                                                            <button type ="submit" class="orange-box btn-sm"><?php echo $value->meta_value;?></button>

                                                        </div>

                                                    </div>

                                                </td>

                                            </tr>

                                            

                                             <?php } } else {?>

                                               <span class="text-danger"><?php echo 'There are no approved requests yet.'?></span>

                                             <?php } ?>

                                             

                                        </tbody>

                                    </table>

                                </div>

                                

                                 <div class="table-responsive">

                                    <h5 class="py-2"> Rejected Requests</h5>

                                        <table class="table table-hover">

                                        <thead>

                                            <?php 

                                                global $wpdb;

                                                $results = $wpdb->get_results( "SELECT * FROM wp_postmeta WHERE `post_id`= $report_id AND `meta_value`='rejected' " );

                                                 if(!empty($results)){?>

                                            <tr>

                                               <!-- <th>Date of Submission</th>-->

                                                <th>Contact Person</th>

                                                <th>Country</th>

                                                <th>State</th>

                                                <th>City</th>

                                                <th>Zip</th>

                                                <th>Email</th>

                                                

                                                <th>Status</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            

                                                <?php foreach($results as $value){

                                                   $reportAuthor = $value->post_author;

                                                   

                                                    $string = $value->meta_key;

                                                  $user_id = filter_var($string, FILTER_SANITIZE_NUMBER_INT);

                                                  $userInfo =   get_userdata($user_id);

                                                  

                                                 // $skillList = $wpdb->get_results( "SELECT * FROM user_skills WHERE user_id = '".$user_id."' ",ARRAY_A); 

                                                   $user_other_info = get_user_meta($user_id);

                                                ?>

                                                <tr class="bg-color">

                                                 <td><?php echo $userInfo->display_name; ?></td>

                                                <td><?php echo get_user_meta($user_id,'country',true)?></td>

                                                <td><?php echo get_user_meta($user_id,'state',true)?></td>

                                                <td><?php echo get_user_meta($user_id,'city',true)?></td>

                                                 <td><?php echo get_user_meta($user_id,'code',true)?></td>

                                                 <td>

                                                   <div class="organization">

                                                        <a href="mailto:<?php echo $userInfo->user_email; ?>"><?php echo $userInfo->user_email; ?></a>

                                                    </div>

                                                </td>

                                              

                                                <td>

                                                    <div class="mx-2">

                                                        <div class="orange-box report-btn">

                                                            <button type ="submit" class="orange-box btn-sm"><?php echo $value->meta_value;?></button>

                                                        </div>

                                                    </div>

                                                </td>

                                            </tr>

                                              <?php } } else {?>

                                               <span class="text-danger"><?php echo 'There are no rejected requests yet.'?></span>

                                             <?php } ?>

                                        </tbody>

                                    </table>

                                    

                                </div>

                            </div>

                        </div>

                    </div>

                </div>   

            </div>



              

        <div class="col-md-12 mt-4 pt-2 pr-0 d-flex">

            <?php include('common_user_footer.php')?>

        </div> 

            </div>        

        </div>



    </div>



    

    <div class="modal fade situation_report" id="track_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

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

                                <a href="#" data-toggle="modal" data-target="#track_delete"><button class="btn btn_apply">Cancle</button></a>

                            </div>   

                        </div>

                        <div class="col-lg-3 col-md-4 col-6">

                            <div class="apply_btn active">

                                <button class="btn btn_apply next" id="next1"><i class="fa fa-pencil"></i> Delete</button>

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

    



  



</body>

</html>