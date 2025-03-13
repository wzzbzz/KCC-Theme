   <?php 

   /* Template Name: Edit Survivor need Request form */

   if ( is_user_logged_in() ) 

   {

     get_header('new'); ?>

    <?php 

    $rf_id=$_GET['id'];



        $gid   =  $group_id;

       $gid=$_GET['gid'];

     /*    if(empty($gid)){

             wp_redirect( 'login' );

        }*/



        /*$checkGroupExist = get_post($gid);

        if( empty( $checkGroupExist)){

            wp_redirect( 'login' );

        }*/



        $rdData = get_post($rf_id);

        $postMeta = get_post_meta($rf_id);



        /*echo "<pre>";

        print_r($postMeta);die();

       */

        $current_user_id = get_current_user_id();

        $randomnumber = mt_rand(10000,99999);

        $current_user_id = get_current_user_id();

        $ownerInfo  = get_userdata($author_id);

        $owner_name =$ownerInfo->display_name;

        $allCountry = $wpdb->get_results("SELECT * FROM `countries`");

        $allCountry = !empty($allCountry) ? array_map(function($item) {

            $item->name = preg_replace('/[^A-Z a-z0-9]/', '', $item->name);

            return $item;

        }, $allCountry) : [];

        $allStates = $wpdb->get_results("SELECT * FROM `wp_states`");

        $allStates = !empty($allStates) ? array_map(function($item) {

            $item->state = preg_replace('/[^A-Z a-z0-9]/', '', $item->state);

            return $item;

        }, $allStates) : [];

        $allCities = $wpdb->get_results("SELECT * FROM `wp_cities`");



        $allCities = !empty($allCities) ? array_map(function($item) {

            $item->city = preg_replace('/[^A-Z a-z0-9]/', '', $item->city);

            return $item;

        }, $allCities) : []; 

    ?>

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

    .course-details1-temp .main_footer_sec {

        background: #134793 0% 0% no-repeat padding-box;

        border-radius: 50px 0px 0px 0px;

        padding: 1rem 0rem 2rem 0rem;

        margin-top: 40px;

        float: right;

    }

    

    .hides{display:none;}

</style>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">     

<div class="col-xl-12 coordination-center-tracking course-details1-temp">

    <div class="row justify-content-end mt-3">

        <?php include('user_topbar.php')?>

    </div>

    <div class="row justify-content-end mt-3 create-report">    

        <div class="col-xl-11 col-lg-11 col-md-10 col-10 d-flex justify-content-between  flex-wrap">

            <div class="row w-100">

                <div class="col-md-12">

                    <div class="top-btn">

                        <div class="d-flex justify-content-between">

                            <div class="title">

                                <h2>Edit Report</h2>

                            </div>

                            <div>

                                <a href="<?php echo get_post_permalink($gid);?>" id="back-1" class="btn btn-outline-primary" title="Back">Back</a>

                                <a href="javascript:void(0);" id="back-2" class="btn btn-outline-primary d-none"  title="Back">Back</a>

                                <a href="javascript:void(0);" id="back-3" class="btn btn-outline-primary d-none" title="Back">Back</a>

                                <a href="javascript:void(0);" id="back-4" class="btn btn-outline-primary d-none" title="Back">Back</a>

                                <a href="javascript:void(0);" id="back-5" class="btn btn-outline-primary d-none" title="Back">Back</a>

                            </div>

                        </div>    

                    </div>

                    <div class="form-box">

                        <div class="report-next-tab">

                            <div class="row d-flex justify-content-center">

                                <div class="col-xl-10">

                                    <div class="reports-top d-flex justify-content-center">

                                        <div class="d-flex w-100">

                                            <div class="main-box w-100">

                                                <div class="report-process text-center d-flex justify-content-center" id="bd-1">

                                                    <div class="circle circle-red" id="red-1"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                    Information

                                                </div>   

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"  id="bd-2">

                                                    <div class="circle "  id="red-2"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                    Disaster Information

                                                </div>   

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"   id="bd-3">

                                                    <div class="circle" id="red-3"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                    Property Assessment

                                                </div>    

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"  id="bd-4">

                                                    <div class="circle" id="red-4"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                   Service Provider Information

                                                </div>   

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"  id="bd-5">

                                                    <div class="circle" id="red-5"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                   Complete

                                                </div>    

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xl-12">

                                    <div class="all-form">

                                        <form method = "POST" action ="" class="row mediadoc_form survieForm" enctype="multipart/form-data">

                                            <input type ="hidden" name ="group_id"  id="group_id"  value ="<?php echo get_post_meta($rf_id,'group_id',true)?>">

                                                <input type ="hidden" name ="rf_id"  id="rf_id"  value ="<?php echo $rf_id;?>">

                                           <!--  <input type ="hidden" name ="report_id"  id="report_id"  value ="<?//php echo "SNI-$randomnumber";?>"> -->

                                            <input type="hidden" name="update_SurvivorNeedIntakeForm" value="update_SurvivorNeedIntakeForm"/>

                                            <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />

                                            <div id="step-1" class="main-form-section w-100">

                                                <div>

                                                    <div class="row">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Date & Time</h3>

                                                            </div>        

                                                        </div>

                                                        

                                                        

                                                        

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Date *</label>

                                                                <input type="date" class="form-control" id="intake_date" name="intake_date" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'intake_date',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Time *</label>

                                                                <input type="time" class="form-control" id="intake_time" name="intake_time" placeholder="Enter city" value="<?php echo get_post_meta($rf_id,'intake_time',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Client Information</h3>

                                                            </div>        

                                                        </div>

                                                        

                                                         <?php

                                                            $current_user_id = get_current_user_id();

                                                            $userInfo =  get_userdata($current_user_id);

                                                            $all_userMeta  = get_user_meta($current_user_id);

                                                          

                                                        ?>

                                                       

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Client First Name *</label>

                                                                <input type="text" class="form-control" id="intake_firstName" name="intake_firstName" placeholder="Enter here" value="<?php echo $userInfo->first_name;  ?>" readonly>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Client last name *</label>

                                                                <input type="text" class="form-control" id="intake_lastName" name="intake_lastName" placeholder="Enter here" value="<?php echo $userInfo->last_name;  ?>" readonly>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Address *</label>

                                                                <input type="text" class="form-control" id="intake_address" name="intake_address" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'intake_address',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Country</label>

                                                               <input type ="text" class ="form-control" name ="country" value="<?php echo $userInfo->country;?>" readonly>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>State</label>

                                                               <input type ="text" class ="form-control" name ="state" value="<?php echo $userInfo->state;?>" readonly>    

                                                            </div>

                                                        </div>

                                                        

                                                        <div class="col-lg-4 mb-3">

                                                           <label>City</label>

                                                               <input type ="text" class ="form-control" name ="city" value="<?php echo $userInfo->city;?>" readonly>

                                                        </div>

                                                        

                                                        

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Zip Code *</label>

                                                                <input type="text" class="form-control" id="intake_zip" name="intake_zip" placeholder="Enter here" value="<?php echo $userInfo->code;?>" readonly>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Other *</label>

                                                                <input type="text" class="form-control" id="intake_other" name="intake_other" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'intake_other',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Primary Telephone *</label>

                                                                <input type="text" class="form-control" id="intake_phone" name="intake_phone" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'intake_phone',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Alternative Telephone</label>

                                                                <input type="text" class="form-control" id="intake_phone2" name="intake_phone2" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'intake_phone2',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group select-form-height">

                                                                <label>Best Time to Contact</label>

                                                                <select class="form-control set-postion" name="intake_contact_time" value="<?php echo get_post_meta($rf_id,'intake_contact_time',true)?>">

                                                                   

                                                                    <option value="Weekday Mornings" <?php echo (get_post_meta($rf_id,'intake_contact_time',true)=="Weekday Mornings")?"selected='selected'":""?>>Weekday Mornings</option>

                                                                    <option value="Weekday Afternoons" <?php echo (get_post_meta($rf_id,'intake_contact_time',true)=="Weekday Afternoons")?"selected='selected'":""?>>Weekday Afternoons</option>

                                                                    <option value="Weekday Nights" <?php echo (get_post_meta($rf_id,'intake_contact_time',true)=="Weekday Nights")?"selected='selected'":""?>>Weekday Nights</option>

                                                                    <option value="Weekend Mornings" <?php echo (get_post_meta($rf_id,'intake_contact_time',true)=="Weekend Mornings")?"selected='selected'":""?>>Weekend Mornings</option>

                                                                    <option value="Weekend Afternoons" <?php echo (get_post_meta($rf_id,'intake_contact_time',true)=="Weekend Afternoons")?"selected='selected'":""?>>Weekend Afternoons</option>

                                                                    <option value="Weekend Nights" <?php echo (get_post_meta($rf_id,'intake_contact_time',true)=="Weekend Nights")?"selected='selected'":""?>>Weekend Nights</option>

                                                                    <option value="Other" <?php echo (get_post_meta($rf_id,'intake_contact_time',true)=="Other")?"selected='selected'":""?>>Other</option>

                                                                </select>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                         <!-- <div class="col-lg-6 d-flex justify-content-end">

                                                            <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                                        </div> -->

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                            <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-1">Next</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div id="step-2" class="main-form-section d-none w-100">

                                                <div class="row">

                                                    <div class="col-lg-12 mb-3">

                                                        <div class="form-title">

                                                            <h3>Disaster Type</h3>

                                                        </div>        

                                                    </div>

                                                    <div class="col-lg-12 mb-3">

                                                        <div class="form-title opacity-low">

                                                            <h3>Select all that Apply</h3>

                                                        </div>        

                                                    </div>

                                                     <?php 

                                                            $disastyer_type =  get_post_meta($rf_id,'rf_apply',true); 

                                                            $all_disasters = explode (",",$disastyer_type);  

                                                        ?>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Hurricane" name="rf_apply[]" <?php if (in_array('Hurricane',$all_disasters)) { echo 'checked'; } ?>>Hurricane

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Flooding" name="rf_apply[]" <?php if (in_array('Flooding',$all_disasters)) { echo 'checked'; } ?>>Flooding

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Earthquake" name="rf_apply[]" <?php if (in_array('Earthquake',$all_disasters)) { echo 'checked'; } ?>>Earthquake

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Landslide" name="rf_apply[]" <?php if (in_array('Landslide',$all_disasters)) { echo 'checked'; } ?>>Landslide

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Severe Heat" name="rf_apply[]" <?php if (in_array('Severe Heat',$all_disasters)) { echo 'checked'; } ?>>Severe Heat

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Snowstorm" name="rf_apply[]" <?php if (in_array('Snowstorm',$all_disasters)) { echo 'checked'; } ?>>Snowstorm

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Tornado" name="rf_apply[]" <?php if (in_array('Tornado',$all_disasters)) { echo 'checked'; } ?>>Tornado

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-4 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Fire Emergency" name="rf_apply[]" <?php if (in_array('Fire Emergency',$all_disasters)) { echo 'checked'; } ?>>Fire Emergency

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-6 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Fire Hazardous Material/Spill/ Chemical Release" name="rf_apply[]" <?php if (in_array('Fire Hazardous Material/Spill/ Chemical Release',$all_disasters)) { echo 'checked'; } ?>>Fire Hazardous Material/Spill/ Chemical Release

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-6 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Medical Emergency/Mass Casualty" name="rf_apply[]" <?php if (in_array('Medical Emergency/Mass Casualty',$all_disasters)) { echo 'checked'; } ?>>Medical Emergency/Mass Casualty

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Missing Persons" name="rf_apply[]" <?php if (in_array('Missing Persons',$all_disasters)) { echo 'checked'; } ?>>Missing Persons

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Utility Outage" name="rf_apply[]" <?php if (in_array('Utility Outage',$all_disasters)) { echo 'checked'; } ?>>Utility Outage

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Structural Disaster" name="rf_apply[]" <?php if (in_array('Structural Disaster',$all_disasters)) { echo 'checked'; } ?>>Structural Disaster

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Structural Disaster" name="rf_apply[]" <?php if (in_array('Structural Disaster',$all_disasters)) { echo 'checked'; } ?>>Structural Disaster

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Collapse" name="rf_apply[]" <?php if (in_array('Collapse',$all_disasters)) { echo 'checked'; } ?>>Collapse

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-6 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Weakened Structures" name="rf_apply[]" <?php if (in_array('Weakened Structures',$all_disasters)) { echo 'checked'; } ?>>Weakened Structures

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-6 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Workplace Violence or Threat of Violence" name="rf_apply[]" <?php if (in_array('Workplace Violence or Threat of Violence',$all_disasters)) { echo 'checked'; } ?>>Workplace Violence or Threat of Violence

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-6 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Epidemic / Pandemic Outbreak" name="rf_apply[]" <?php if (in_array('Epidemic / Pandemic Outbreak',$all_disasters)) { echo 'checked'; } ?>>Epidemic / Pandemic Outbreak

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Terrorist Attack" name="rf_apply[]" <?php if (in_array('Terrorist Attack',$all_disasters)) { echo 'checked'; } ?>>Terrorist Attack

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Nuclear Power Disasters" name="rf_apply[]" <?php if (in_array('Nuclear Power Disasters',$all_disasters)) { echo 'checked'; } ?>>Nuclear Power Disasters

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" onclick="show6();" class="form-check-input" value="Other" name="rf_apply_other" <?php if (in_array('Other',$all_disasters)) { echo 'checked'; } ?>>Other

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-12"></div>

                                                    <div class="col-lg-6 mb-5">

                                                        <div class="form-group hides" id="div3">

                                                            <input type="text" class="form-control" id="rf_apply_other" name="rf_apply_other" placeholder="Enter Comments" value="">

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-12 mb-3">

                                                        <div class="form-title">

                                                            <h3>Client Needs *</h3>

                                                        </div>        

                                                    </div>

                                                     <?php 

                                                            $client_need =  get_post_meta($rf_id,'client_need',true); 

                                                            $all_clients = explode (",",$client_need);  

                                                        ?>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Medical Assistance" name="client_need[]" <?php if (in_array('Medical Assistance',$all_clients)) { echo 'checked'; } ?>>Medical Assistance

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Child Services" name="client_need[]" <?php if (in_array('Child Services',$all_clients)) { echo 'checked'; } ?>>Child Services

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Elder Care" name="client_need[]" <?php if (in_array('Elder Care',$all_clients)) { echo 'checked'; } ?>>Elder Care

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-4 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Support for persons with disabilities" name="client_need[]" <?php if (in_array('Support for persons with disabilities',$all_clients)) { echo 'checked'; } ?>>Support for persons with disabilities

                                                            </label>

                                                        </div>

                                                    </div>

                                                    

                                                    <!-- Blank Col -->

                                                    <div class="col-12 col-lg-12 mb-3"></div>

                                                    <!-- Blank Col -->

                                                    

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Food" name="client_need[]" <?php if (in_array('Food',$all_clients)) { echo 'checked'; } ?>>Food

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Temporary Shelter" name="client_need[]" <?php if (in_array('Temporary Shelter',$all_clients)) { echo 'checked'; } ?>>Temporary Shelter

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Water" name="client_need[]" <?php if (in_array('Water',$all_clients)) { echo 'checked'; } ?>>Water

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Tarps" name="client_need[]" <?php if (in_array('Tarps',$all_clients)) { echo 'checked'; } ?>>Tarps

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Clothing" name="client_need[]" <?php if (in_array('Clothing',$all_clients)) { echo 'checked'; } ?>>Clothing

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Blankets/Sleeping Bags" name="client_need[]" <?php if (in_array('Blankets/Sleeping Bags',$all_clients)) { echo 'checked'; } ?>>Blankets/Sleeping Bags

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Hurricane" name="client_need[]" <?php if (in_array('Cleaning Supplies',$all_clients)) { echo 'checked'; } ?>>Cleaning Supplies

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Space Heaters" name="client_need[]" <?php if (in_array('Space Heaters',$all_clients)) { echo 'checked'; } ?>>Space Heaters

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Bug Repellent" name="client_need[]" <?php if (in_array('Bug Repellent',$all_clients)) { echo 'checked'; } ?>>Bug Repellent

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Hand Sanitizer" name="client_need[]" <?php if (in_array('Hand Sanitizer',$all_clients)) { echo 'checked'; } ?>>Hand Sanitizer

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Mobility Impaired" name="client_need[]" <?php if (in_array('Mobility Impaired',$all_clients)) { echo 'checked'; } ?>>Mobility Impaired

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Single Parent" name="client_need[]" <?php if (in_array('Single Parent',$all_clients)) { echo 'checked'; } ?>>Single Parent

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Single Other" name="client_need[]" <?php if (in_array('Single Other',$all_clients)) { echo 'checked'; } ?>>Single Other

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-12 mb-3">

                                                        <div class="form-title">

                                                            <h3>Household Age Demographic *</h3>

                                                        </div>        

                                                    </div>

                                                    <?php 

                                                        $household_type =  get_post_meta($rf_id,'household_age',true); 

                                                        $all_household = explode (",",$household_type);  

                                                        ?>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Infant" name="household_age[]" <?php if (in_array('Infant',$all_household)) { echo 'checked'; } ?>>Infant

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Under 5 years old" name="household_age[]" <?php if (in_array('Under 5 years old',$all_household)) { echo 'checked'; } ?>>Under 5 years old

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="5-12" name="household_age[]" <?php if (in_array('5-12',$all_household)) { echo 'checked'; } ?>>5-12

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="13-18" name="household_age[]" <?php if (in_array('13-18',$all_household)) { echo 'checked'; } ?>>13-18

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="19-40" name="household_age[]" <?php if (in_array('19-40',$all_household)) { echo 'checked'; } ?>>19-40

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="41-65" name="household_age[]" <?php if (in_array('41-65',$all_household)) { echo 'checked'; } ?>>41-65

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="66-80" name="household_age[]" <?php if (in_array('66-80',$all_household)) { echo 'checked'; } ?>>66-80

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="81+" name="household_age[]" <?php if (in_array('81+',$all_household)) { echo 'checked'; } ?>>81+

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input" value="Other" name="household_age[]" <?php if (in_array('Other',$all_household)) { echo 'checked'; } ?>>Other

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 mb-5">

                                                        <div class="form-group">

                                                            <input type="text" class="form-control" id="rf_email2" name="number_mail" placeholder="Number of Male" value="<?php echo get_post_meta($rf_id,'number_mail',true)?>">

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 mb-5">

                                                        <div class="form-group">

                                                            <input type="text" class="form-control" id="rf_email2" name="number_female" placeholder="Number of Female" value="<?php echo get_post_meta($rf_id,'number_female',true)?>">

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-6 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="radio" <?php echo (get_post_meta($rf_id,'other_age',true)=="Age of Other Dependents")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Age of Other Dependents" name="other_age">Age of Other Dependents

                                                            </label>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                     <!-- <div class="col-lg-6 d-flex justify-content-end">

                                                        <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                                    </div> -->

                                                    <div class="col-lg-12 d-flex justify-content-center">

                                                        <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-2">Next</a>

                                                    </div>

                                                </div>

                                            </div>

                                            <div id="step-3" class="main-form-section d-none w-100">

                                                <div>

                                                    <div class="row">

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-title">

                                                                <h3>Property Type *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-title">

                                                                <h3>Is the property or home damaged due to the current disaster? *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group select-form">

                                                                <select id="property_type" name="property_type" class="form-control">

                                                                   <option value="Rented House / Apartment" <?php echo (get_post_meta($rf_id,'property_type',true)=="Rented House / Apartment")?"selected='selected'":""?>>Rented House / Apartment</option>

                                                                    <option value="Owned House / Apartment" <?php echo (get_post_meta($rf_id,'property_type',true)=="Owned House / Apartment")?"selected='selected'":""?>>Owned House / Apartment</option>

                                                                    <option value="Landlord Property" <?php echo (get_post_meta($rf_id,'property_type',true)=="Landlord Property")?"selected='selected'":""?>>Landlord Property</option>

                                                                    <option value="Business Owner" <?php echo (get_post_meta($rf_id,'property_type',true)=="Business Owner")?"selected='selected'":""?>>Business Owner</option>

                                                                    <option value="Other" <?php echo (get_post_meta($rf_id,'property_type',true)=="Other")?"selected='selected'":""?>>Other</option>

                                                                </select>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'property_condition',true)=="Yes")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Yes" name="property_condition">Yes

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'property_condition',true)=="No")?"CHECKED='CHECKED'":""?> class="form-check-input" value="No" name="property_condition">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-title">

                                                                <h3>Are there life safety issues present at the worksite? *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-title">

                                                                <h3>What is the current recovery status of the property? *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-title">

                                                                <h3>Is the Client the property owner? *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'life_safety',true)=="Yes")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Yes" name="life_safety">Yes

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'life_safety',true)=="No")?"CHECKED='CHECKED'":""?> class="form-check-input" value="No" name="life_safety">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group select-form">

                                                                <select id="recovery_status" name="recovery_status" class="form-control" >

                                                                   

                                                                    <option value="No Work has begun" <?php echo (get_post_meta($rf_id,'recovery_status',true)=="No Work has begun")?"selected='selected'":""?>>No Work has begun</option>

                                                                     <option value="Partially Recovered - Still a lot of work to do " <?php echo (get_post_meta($rf_id,'recovery_status',true)=="Partially Recovered - Still a lot of work to do")?"selected='selected'":""?>>Partially Recovered - Still a lot of work to do </option>

                                                                      <option value="Mostly Recovered - There are still problems" <?php echo (get_post_meta($rf_id,'recovery_status',true)=="Mostly Recovered - There are still problems")?"selected='selected'":""?>>Mostly Recovered - There are still problems</option>

                                                                       <option value="Getting Worse - More problems have occured" <?php echo (get_post_meta($rf_id,'recovery_status',true)=="Getting Worse - More problems have occured")?"selected='selected'":""?>>Getting Worse - More problems have occured</option>

                                                                        <option value="Uninhabitable - Declared to be condemned" <?php echo (get_post_meta($rf_id,'recovery_status',true)=="Uninhabitable - Declared to be condemned")?"selected='selected'":""?>>Uninhabitable - Declared to be condemned </option>

                                                                         <option value="Other" <?php echo (get_post_meta($rf_id,'recovery_status',true)=="Other")?"selected='selected'":""?>>Other</option>

                                                                </select>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'property_owner',true)=="Yes")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Yes" name="property_owner">Yes

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'property_owner',true)=="No")?"CHECKED='CHECKED'":""?> class="form-check-input" value="No" name="property_owner">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-title">

                                                                <h3>Is the homeowner willing to sign a liability waiver releasing the volunteers of any damages? *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-title">

                                                                <h3>The client/property owner agrees to be present while volunteers are working *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'liability_waiver',true)=="Yes")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Yes" name="liability_waiver">Yes

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'liability_waiver',true)=="No")?"CHECKED='CHECKED'":""?> class="form-check-input" value="No" name="liability_waiver">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'owner_present',true)=="Yes")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Yes" name="owner_present">Yes

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'owner_present',true)=="No")?"CHECKED='CHECKED'":""?> class="form-check-input" value="No" name="owner_present">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-title">

                                                                <h3>The owner must agree to be present to oversee work being done to their property, secure valuables and contribute to the work when possible. Does the owner agree to these terms?</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-title">

                                                                <h3>Are client family members or friends willing to help? *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'agree_terms',true)=="Yes")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Yes" name="agree_terms">Yes

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'agree_terms',true)=="No")?"CHECKED='CHECKED'":""?> class="form-check-input" value="No" name="agree_terms">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'willing_to_help',true)=="Yes")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Yes" name="willing_to_help">Yes

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'willing_to_help',true)=="No")?"CHECKED='CHECKED'":""?> class="form-check-input" value="No" name="willing_to_help">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>What room/floors have been damaged? Select all that apply.*</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'property_type',true)=="Basement")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Basement" name="property_type">Basement

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'property_type',true)=="First Floor")?"CHECKED='CHECKED'":""?> class="form-check-input" value="First Floor" name="property_type">First Floor

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'property_type',true)=="Second Floor")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Second Floor" name="property_type">Second Floor

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'property_type',true)=="Attic")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Attic" name="property_type">Attic

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'property_type',true)=="Garage")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Garage" name="property_type">Garage

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'property_type',true)=="Other")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Other" name="property_type">Other

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-title">

                                                                <h3>Is there standing water in any of the rooms? *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-title">

                                                                <h3>Is there mud or sewage? *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-12"></div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'is_water',true)=="Yes")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Yes" name="is_water">Yes

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'is_water',true)=="No")?"CHECKED='CHECKED'":""?> class="form-check-input" value="No" name="is_water">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'is_mud',true)=="Yes")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Yes" name="is_mud">Yes

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'is_mud',true)=="No")?"CHECKED='CHECKED'":""?> class="form-check-input" value="No" name="is_mud">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12"></div>



                                                        <!--  -->

                                                       <!--  <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Central Air" name="rf_apply[]">Central Air

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Electric Service" name="rf_apply[]">Electric Service

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Gas Service" name="rf_apply[]">Gas Service

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Water" name="rf_apply[]">Water

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Other" name="rf_apply[]">Other

                                                                </label>

                                                            </div>

                                                        </div> -->

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>What Appliances & Contents have been damaged? *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-12 col-lg-1 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'damage_contents',true)=="Boiler")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Boiler" name="damage_contents">Boiler

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'damage_contents',true)=="Furniture")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Furniture" name="damage_contents">Furniture

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'damage_contents',true)=="Hot Water Heater")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Hot Water Heater" name="damage_contents">Hot Water Heater

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'damage_contents',true)=="Refrigerator")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Refrigerator" name="damage_contents">Refrigerator

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'damage_contents',true)=="Stove")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Stove" name="damage_contents">Stove

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'damage_contents',true)=="Washer/Dryer")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Washer/Dryer" name="damage_contents">Washer/Dryer

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-1 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'damage_contents',true)=="Other")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Other" name="damage_contents">Other

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-title">

                                                                <h3>What type of insurance do you have? *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-title">

                                                                <h3>Have you contacted other service providers for help? *</h3>

                                                            </div>        

                                                        </div>



                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group select-form">

                                                                <input type="text" class="form-control"  name="insurance_type" value="<?php echo get_post_meta($rf_id,'insurance_type',true)?>" placeholder="Enter here">

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'contacted_other',true)=="Yes")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Yes" name="contacted_other">Yes

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'contacted_other',true)=="No")?"CHECKED='CHECKED'":""?> class="form-check-input" value="No" name="contacted_other">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                         <!-- <div class="col-lg-6 d-flex justify-content-end">

                                                            <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                                        </div> -->

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                            <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-3">Next</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div id="step-4" class="main-form-section d-none w-100">

                                                <div>

                                                    <div class="row">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Are you a service provider entering this information on behalf of your client? *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-12"></div>

                                                         <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'on_behalf',true)=="Yes")?"CHECKED='CHECKED'":""?> class="form-check-input" value="Yes" name="on_behalf">Yes

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'on_behalf',true)=="No")?"CHECKED='CHECKED'":""?> class="form-check-input" value="No" name="on_behalf">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 my-4">

                                                            <div class="form-title">

                                                                <h3>Publish Form To</h3>

                                                            </div>        

                                                        </div>

                                                         <div class="col-lg-12 mb-3">

                                                            <div class="row">

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input onclick="show3();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish">Select From My Joined Group

                                                                        </label>

                                                                    </div>

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <?php $joinGrp = learndash_get_users_group_ids( $current_user_id);

                                                                              $joinedArg= array(); 

                                                                                $joinedArg['post_type'] = 'groups';

                                                                                $joinedArg['post_status'] = 'publish';

                                                                                $joinedArg['paged'] = $currentPage;

                                                                                $joinedArg['posts_per_page'] = 50;

                                                                                $joinedArg['post__in'] = $joinGrp;

                                                                                $myJoinedGroups = get_posts( $joinedArg );

                                                                        ?>  

                                                                        <div id="div55" class="hides"> 

                                                                            <select class="form-control mt-3 border" name ="rf_publish">

                                                                                

                                                                                <?php  foreach($myJoinedGroups as $joinedGrpupVal){

                                                                                       $author_id=$joinedGrpupVal->post_author;

                                                                                        if($current_user_id!=$author_id){

                                                                                ?>

                                                                                   

                                                                                   <option> <?php echo $joinedGrpupVal->post_title?></option>

                                                                                <?php }} ?>

                                                                          

                                                                            </select>

                                                                        </div>    

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                             <?php  $groupId= get_post_meta($rf_id,'rf_publish');

                                                                

                                                                                if(is_int($groupId)){ ?>

                                                                                 <input onclick="show2();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish">Select From My Group

                                                                                <?php } else { ?>

                                                                                 <input onclick="show2();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish" checked>Select From My Group

                                                                                <?php } ?>

                                                                        </label>

                                                                    </div>

                                                                    <div id="div44" class="hides">

                                                                    <select class="form-control mt-3 border" name ="rf_publish">

                                                                        <?php

                                                                            $args = array(

                                                                                    'numberposts'   => -1,

                                                                                    'post_type'     => 'groups',

                                                                                    'post_status'   => 'publish'

                                                                                );

                                                                                $all_groups = get_posts( $args );

                                                                        ?>

                                                                        

                                                                       <?php foreach($all_groups as $value){ ?>



                                                                     <option value="<?php echo $value->ID ?>" <?php echo (get_post_meta($rf_id,'rf_publish',true)== $value->ID)?"selected='selected'":""?>><?php echo $value->post_title ?></option>

                                                                    <?php } ?>

                                                                    </select>      

                                                                </div>

                                                                </div>

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input  onclick="show1();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="all_users")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish" value="all_rrn_users">All RRN Users

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row mt-3">

                                                        <!-- <div class="col-lg-6 d-flex justify-content-end">

                                                            <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                                        </div> -->

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                            <button class="btn btn-primary" title="Next" name="save" value="save">Next</button>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div id="step-5" class="main-form-section d-none w-100">

                                                <div>

                                                    <div class="row">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="bg-ligt-color">

                                                                <div class="form-title">

                                                                    <h3>Information</h3>

                                                                </div>            

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Date</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'intake_date',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Time</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'intake_time',true)?></p>

                                                                    </div>    

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="bg-ligt-color">

                                                                <div class="form-title">

                                                                    <h3>Client Information</h3>

                                                                </div>            

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Client First Name</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'intake_firstName',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Client Last Name</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'intake_lastName',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                 <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Address</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'intake_address',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>City</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_city',true)?></p>



                                                                       

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>State</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_state',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Country</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'intake_country',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Primary Telephone</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'intake_phone',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Best Time to Contact</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'intake_contact_time',true)?></p>

                                                                    </div>    

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="bg-ligt-color">

                                                                <div class="form-title">

                                                                    <h3>Disaster Information</h3>

                                                                </div>            

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <!--<div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Name of Disaster</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'rf_apply',true)?></p>

                                                                    </div>    

                                                                </div>-->

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Disaster Type</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_apply',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                 <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Client needs</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'client_need',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Household Age Demographic</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'household_age',true)?></p>

                                                                    </div>    

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Count: Male Under 41-65</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'number_mail',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Count: Female Under 41-65</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'number_female',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="bg-ligt-color">

                                                                <div class="form-title">

                                                                    <h3>Property Assessment</h3>

                                                                </div>            

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Property Type</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'property_type',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <!-- <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Other property type</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'vol_event',true)?></p>

                                                                    </div>    

                                                                </div> -->

                                                                 <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Is the property or home damaged due to the current disaster?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'property_condition',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                 <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Are there life safety issues present at the worksite?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'life_safety',true)?></p>

                                                                    </div>    

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Recovery Status</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'recovery_status',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Is the Client the property owner?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'property_owner',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                 <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Is the homeowner willing to sign a liability waiver releasing the volunteers of any damages?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'liability_waiver',true)?></p>

                                                                    </div>    

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>The client/property owner agrees to be present while volunteers are working</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'owner_present',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>The owner must agree to be present to oversee work being done to their property, secure valuables and contribute to the work when possible. Does the owner agree to these terms?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'agree_terms',true)?></p>

                                                                    </div>    

                                                                </div>

                                                            </div>

                                                        </div>

                                                    

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Are client family members or friends willing to help?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'willing_to_help',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>What rooms/floors have been damaged?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'property_type',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Is there mud or sewage? </h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'is_mud',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Is there standing water in any of the rooms?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'is_water',true)?></p>

                                                                    </div>    

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <!-- <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Are any of the following items NOT functioning?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'vol_event',true)?></p>

                                                                    </div>    

                                                                </div> -->

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>What Appliances & Contents have been damaged?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'damage_contents',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>What type of insurance do you have?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'insurance_type',true)?></p>

                                                                    </div>    

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Have you contacted other service provider for help.</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'contacted_other',true)?></p>

                                                                    </div>    

                                                                </div>

                                                              <!--   <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Other service provider</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'vol_event',true)?></p>

                                                                    </div>    

                                                                </div> -->

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="bg-ligt-color">

                                                                <div class="form-title">

                                                                    <h3>Service provider Information</h3>

                                                                </div>            

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Are you a service provider entering this information on behalf of your client?</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'on_behalf',true)?></p>

                                                                    </div>    

                                                                </div>



                                                                  <!-- <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Publish Form to.</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'intake_publish_from',true)?></p>

                                                                    </div>    

                                                                </div> -->

                                                            </div>

                                                        </div>

                                                       <!--  <div class="col-lg-12 mb-3">

                                                            <div class="bg-ligt-color">

                                                                <div class="form-title">

                                                                    <h3>Service provider Details</h3>

                                                                </div>            

                                                            </div>

                                                        </div> -->

                                                        <!-- <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Organization</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'vol_event',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>First name</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'vol_event',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Last name</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'vol_event',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Title</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'vol_event',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Address</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'vol_event',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>City</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'vol_event',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>State</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'vol_event',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                

                                                            </div>

                                                        </div> -->

                                                        <!-- <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Country</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'vol_event',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Zip</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'vol_event',true)?></p>

                                                                    </div>    

                                                                </div>

                                                            </div>

                                                        </div> -->

                                                    </div>

                                                    <div class="row">

                                                         <!-- <div class="col-lg-6 d-flex justify-content-end">

                                                            <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                                        </div> -->

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                            

                                                           <button class="btn btn-outline-primary" value="finish" name="finish" title="Save Draft">Finish</button>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Footer-->

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





<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

<script type="text/javascript">



    $("#back-2").click(function(){

        $("#step-1").removeClass('d-none');

        $("#step-2").addClass('d-none');

        $("#step-3").addClass('d-none');

        $("#step-4").addClass('d-none');

        $("#step-5").addClass('d-none');



        // for circle color

        $("#bd-1").removeClass('orange-bd');

        $("#red-2").removeClass('circle-red');

        $("#red-1").removeClass('circle-orange');

        $("#red-1").addClass('circle-red');



        $("#back-1").removeClass('d-none');

        $("#back-2").addClass('d-none'); 

    });



    $("#back-3").click(function(){

        $("#step-1").addClass('d-none');

        $("#step-2").removeClass('d-none');

        $("#step-3").addClass('d-none');

        $("#step-4").addClass('d-none');

        $("#step-5").addClass('d-none');



        // for circle color

        // for circle color

        $("#bd-2").removeClass('orange-bd');

        $("#red-3").removeClass('circle-red');

        $("#red-2").removeClass('circle-orange');

        $("#red-2").addClass('circle-red');



        $("#back-1").addClass('d-none'); 

        $("#back-2").removeClass('d-none');

        $("#back-3").addClass('d-none'); 

    });



    $("#back-4").click(function(){

        $("#step-1").addClass('d-none');

        $("#step-3").removeClass('d-none');

        $("#step-2").addClass('d-none');

        $("#step-4").addClass('d-none');

        $("#step-5").addClass('d-none');



        // for circle color

        $("#bd-3").removeClass('orange-bd');

        $("#red-4").removeClass('circle-red');

        $("#red-3").removeClass('circle-orange');

        $("#red-3").addClass('circle-red');

        

        $("#back-1").addClass('d-none'); 

        $("#back-2").addClass('d-none');

        $("#back-3").removeClass('d-none'); 

        $("#back-4").addClass('d-none');

    });









    $("#step-btn-1").click(function(){

        $("#step-2").removeClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-3").addClass('d-none');

        $("#step-4").addClass('d-none');

        $("#step-5").addClass('d-none');

        $("#step-6").addClass('d-none');

        

        // for circle color

        $("#bd-1").addClass('orange-bd');

        $("#red-2").addClass('circle-red');

        $("#red-1").addClass('circle-orange');

        $("#red-1").removeClass('circle-red');



        $("#back-1").addClass('d-none');

        $("#back-2").removeClass('d-none');

        



    });

    $("#step-btn-2").click(function(){

        $("#step-3").removeClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-2").addClass('d-none');

        $("#step-4").addClass('d-none');

        $("#step-5").addClass('d-none');

        $("#step-6").addClass('d-none');



        // for circle color

        $("#bd-2").addClass('orange-bd');

        $("#red-3").addClass('circle-red');

        $("#red-2").addClass('circle-orange');

        $("#red-2").removeClass('circle-red');



        $("#back-2").addClass('d-none');

        $("#back-3").removeClass('d-none');

    });

    $("#step-btn-3").click(function(){

        $("#step-4").removeClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-2").addClass('d-none');

        $("#step-3").addClass('d-none');

        $("#step-5").addClass('d-none');

        $("#step-6").addClass('d-none');



        // for circle color

        $("#bd-3").addClass('orange-bd');

        $("#red-4").addClass('circle-red');

        $("#red-3").addClass('circle-orange');

        $("#red-3").removeClass('circle-red');



        $("#back-3").addClass('d-none');

        $("#back-4").removeClass('d-none');



    });

    $("#step-btn-4").click(function(){

        $("#step-5").removeClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-2").addClass('d-none');

        $("#step-3").addClass('d-none');

        $("#step-4").addClass('d-none');

        $("#step-6").addClass('d-none');

        

        // for circle color

        $("#bd-4").addClass('orange-bd');

        $("#red-5").addClass('circle-red');

        $("#red-4").addClass('circle-orange');

        $("#red-4").removeClass('circle-red');

    });

    // $("#step-btn-5").click(function(){

    //     $("#step-6").removeClass('d-none');

    //     $("#step-1").addClass('d-none');

    //     $("#step-2").addClass('d-none');

    //     $("#step-3").addClass('d-none');

    //     $("#step-4").addClass('d-none');

    //     $("#step-5").addClass('d-none');

        

       

    //     $("#bd-5").addClass('orange-bd');

    //     $("#red-6").addClass('circle-red');

    //     $("#red-5").addClass('circle-orange');

    //     $("#red-5").removeClass('circle-red');

    // });



    var rf_id="<?php echo $_GET['rf_id']?>";



    if(rf_id){

        $("#step-2").addClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-3").addClass('d-none');

        $("#step-4").addClass('d-none');

        $("#step-5").removeClass('d-none');

    

        // $("#bd-5").addClass('orange-bd');

        // $("#red-5").addClass('circle-red');

        // $("#red-1").removeClass('circle-red');



        $("#bd-1").addClass('orange-bd');

        $("#red-1").addClass('circle-red');

        $("#red-1").addClass('circle-orange');



        $("#bd-2").addClass('orange-bd');

        $("#red-2").addClass('circle-red');

        $("#red-2").addClass('circle-orange');



        $("#bd-3").addClass('orange-bd');

        $("#red-3").addClass('circle-red');

        $("#red-3").addClass('circle-orange');



        $("#bd-4").addClass('orange-bd');

        $("#red-4").addClass('circle-red');

        $("#red-4").addClass('circle-orange');





        $("#bd-5").addClass('orange-bd');

        $("#red-5").addClass('circle-red');

        $("#red-5").removeClass('circle-red');

        $("#red-5").addClass('circle-orange');

    }

    

</script>



<script>

    

    function show1(){

        $("#div55").addClass("hides");

        $("#div44").addClass("hides");

    }

    

    function show2(){

      $("#div44").removeClass("hides");

      $("#div55").addClass("hides");

    }

     function show3(){

      $("#div44").addClass("hides");

      $("#div55").removeClass("hides");

    }





 </script>

 <script>

    function show5(){

      document.getElementById('div3').style.display ='none';

    }

    

    function show6(){

      document.getElementById('div3').style.display = 'block';

    }

 </script>



  <script>

    const getCountries = () => {

        countryId = $('#country option:selected').data('value');

        let html = '<option value="">Select State*</option>';

        let html1 = '<option value="">Select City*</option>';

        if(countryId == undefined || countryId == 0 || countryId == '') {

            $('#state').html(html);

            $('#city').html(html1);

            return false;

        }



        let states = '<?=json_encode($allStates)?>';

        if(states == '' ) {

            $('#state').html(html);

            $('#city').html(html1);

            return false;

        }

        states = JSON.parse(states);

        if(states.length == 0 ) {

            $('#state').html(html);

            $('#city').html(html1);

            return false;

        }



        $.each(states,function(key, value){

            if(value.country_id == countryId) {

                html += '<option value="'+value.state+'" data-value="'+value.id+'">'+value.state+'</option>';

            }

        });

        $('#state').html(html);

        $('#city').html(html1);

    }









    const getCities = () => {



        stateId = $('#state option:selected').data('value');

        let html = '<option value="">Select City*</option>';

        if(stateId == undefined || stateId == 0 || stateId == '') {

            $('#city').html(html);

            return false;

        }

        var cities = '<?=json_encode($allCities)?>';



        if(cities == '' ) {

            $('#city').html(html);

            return false;

        }

        cities = JSON.parse(cities);

        if(cities.length == 0 ) {

            $('#city').html(html);

            return false;

        }

        $.each(cities,function(key, value){

            if(value.state_id == stateId) {

                html += '<option value="'+value.city+'">'+value.city+'</option>';

            }

        });

        $('#city').html(html);

    }

  

 </script>

<?php get_footer('new'); } ?>