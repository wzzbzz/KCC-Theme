   <?php 

   /* Template Name: Create Survivors need intake form */

   if ( is_user_logged_in() ) 

   {

     get_header('new'); ?>

    <?php 

        $rf_id=$_GET['rf_id'];

        $gid=$_GET['gid'];

        if(empty($gid)){

             wp_redirect( 'login' );

        }

        $checkGroupExist = get_post($gid);

        if( empty( $checkGroupExist)){

            wp_redirect( 'login' );

        }

        $rdData = get_post($rf_id);

        $postMeta = get_post_meta($rf_id);

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

    padding: 3rem 0rem 0rem 0rem;

    margin-top: 40px;

    float: right;

}



    .marker{float:right;color:red;}

    

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

                                <h2>Create New Report</h2>

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

                                            <input type ="hidden" name ="group_id"  id="group_id"  value ="<?php echo $gid;?>">

                                            <input type ="hidden" name ="rf_id"  id="rf_id"  value ="<?php echo $rf_id;?>">

                                            <input type ="hidden" name ="report_id"  id="report_id"  value ="<?php echo "SNI-$randomnumber";?>">

                                            <input type="hidden" name="create_needIntakeForm" value="reportsforms"/>

                                            <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />

                                            <!-- Hidden field to hold the selected group ID -->
                                            <input type="hidden" name="selected_groupid" id="selected_groupid" value="">

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

                                                                <input type="date" class="form-control sur_da" id="intake_date" name="intake_date" placeholder="Enter here">

                                                             <div class ="marker" id ="sur_da_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Time *</label>

                                                                <input type="time" class="form-control sur_ti" id="intake_time" name="intake_time" placeholder="Enter city" value="<?php echo get_post_meta($rf_id,'rf_city',true)?>">

                                                             <div class ="marker" id ="sur_ti_error"></div>

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

                                                                <input type="text" class="form-control sur_fri" id="client_firstName" name="client_firstName" placeholder="Enter here"value="<?php echo $userInfo->first_name;  ?>" readonly>

                                                            </div>

                                                             <div class ="marker" id ="sur_fri_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Client last name *</label>

                                                                <input type="text" class="form-control sur_last" id="client_lastName" name="client_lastName" placeholder="Enter here"value=" <?php echo $userInfo->last_name;  ?>" readonly>

                                                            </div>

                                                             <div class ="marker" id ="sur_last_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Address *</label>

                                                                <input type="text" class="form-control sur_add" id="client_address" name="client_address" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'rf_country',true)?>">

                                                            </div>

                                                             <div class ="marker" id ="sur_add_error"></div>

                                                        </div>

                                                         <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                  <label>Country</label>

                                                               <input type ="text" class ="form-control sur_coun" name ="country" value="<?php echo $userInfo->country;?>" readonly>

                                                            </div>

                                                             <div class ="marker" id ="sur_coun_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>State</label>

                                                               <input type ="text" class ="form-control sur_sta" name ="state" value="<?php echo $userInfo->state;?>" readonly>

                                                            </div>

                                                             <div class ="marker" id ="sur_sta_error"></div>

                                                        </div>

                                                        

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>City</label>

                                                               <input type ="text" class ="form-control sur_cit" name ="city" value="<?php echo $userInfo->city;?>" readonly>

                                                            </div>

                                                             <div class ="marker" id ="sur_cit_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Zip Code *</label>

                                                                <input type="number" class="form-control sur_zip" onKeyPress="if(this.value.length==6) return false;" min="0" name="intake_zip" placeholder="Enter here" value="<?php echo $userInfo->code;?>" readonly>

                                                            </div>

                                                             <div class ="marker" id ="sur_zip_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Other *</label>

                                                                <input type="text" class="form-control sur_oth" id="intake_other" name="intake_other" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'rf_country',true)?>">

                                                            </div>

                                                             <div class ="marker" id ="sur_oth_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Primary Telephone *</label>

                                                                <input type="number" class="form-control sur_pri" onKeyPress="if(this.value.length==10) return false;" min="0" name="client_phone" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'rf_country',true)?>">

                                                            </div>

                                                             <div class ="marker" id ="sur_pri_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Alternative Telephone</label>

                                                                <input type="number" class="form-control sur_alt"  onKeyPress="if(this.value.length==10) return false;" min="0" name="client_phone2" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'rf_country',true)?>">

                                                            </div>

                                                             <div class ="marker" id ="sur_alt_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group select-form-height">

                                                                <label>Best Time to Contact</label>

                                                                <select class="form-control set-postion sur_best" name="client_preferred_contact_time">

                                                                    <option value="" selected> Select any option</option>

                                                                    <option> Select Time</option>

                                                                    <option value="Weekday Mornings">Weekday Mornings</option>

                                                                    <option value="Weekday Afternoons">Weekday Afternoons</option>

                                                                    <option value="Weekday Nights">Weekday Nights</option>

                                                                    <option value="Weekend Mornings">Weekend Mornings</option>

                                                                    <option value="Weekend Afternoons">Weekend Afternoons</option>

                                                                    <option value="Weekend Nights">Weekend Nights</option>

                                                                    <option value="Other">Other</option>

                                                                </select>

                                                            </div>

                                                            <div class ="marker" id ="sur_best_error"></div>

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

                                                        <!--<div class="form-title opacity-low">

                                                            <h3>Select all that Apply</h3>

                                                        </div> -->

                                                         <div class ="marker" id ="sur_dis_error"></div>       

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Hurricane" name="rf_apply[]">Hurricane

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Flooding" name="rf_apply[]">Flooding

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Earthquake" name="rf_apply[]">Earthquake

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Landslide" name="rf_apply[]">Landslide

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Severe Heat" name="rf_apply[]">Severe Heat

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Snowstorm" name="rf_apply[]">Snowstorm

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Tornado" name="rf_apply[]">Tornado

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-4 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Fire Emergency" name="rf_apply[]">Fire Emergency

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-6 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Fire Hazardous Material/Spill/ Chemical Release" name="rf_apply[]">Fire Hazardous Material/Spill/ Chemical Release

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-6 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Medical Emergency/Mass Casualty" name="rf_apply[]">Medical Emergency/Mass Casualty

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Missing Persons" name="rf_apply[]">Missing Persons

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Utility Outage" name="rf_apply[]">Utility Outage

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Structural Disaster" name="rf_apply[]">Structural Disaster

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Structural Disaster" name="rf_apply[]">Structural Disaster

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Collapse" name="rf_apply[]">Collapse

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-6 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Weakened Structures" name="rf_apply[]">Weakened Structures

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-6 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Workplace Violence or Threat of Violence" name="rf_apply[]">Workplace Violence or Threat of Violence

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-6 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Epidemic / Pandemic Outbreak" name="rf_apply[]">Epidemic / Pandemic Outbreak

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Terrorist Attack" name="rf_apply[]">Terrorist Attack

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Nuclear Power Disasters" name="rf_apply[]">Nuclear Power Disasters

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" onclick="show6();" class="form-check-input sur_dis" value="Other" name="rf_apply_other">Other

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

                                                            <h3>Client Needs</h3>

                                                        </div>        

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Medical Assistance" name="client_need">Medical Assistance

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Child Services" name="client_need">Child Services

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Elder Care" name="client_need">Elder Care

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-4 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Support for persons with disabilities" name="client_need">Support for persons with disabilities

                                                            </label>

                                                        </div>

                                                    </div>

                                                    

                                                    <!-- Blank Col -->

                                                    <div class="col-12 col-lg-12 mb-3"></div>

                                                    <!-- Blank Col -->

                                                    

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Food" name="client_need">Food

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Temporary Shelter" name="client_need">Temporary Shelter

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Water" name="client_need">Water

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Tarps" name="client_need">Tarps

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Clothing" name="client_need">Clothing

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Blankets/Sleeping Bags" name="client_need">Blankets/Sleeping Bags

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Hurricane" name="Cleaning Supplies">Cleaning Supplies

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Hurricane" name="Space Heaters">Space Heaters

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Hurricane" name="Bug Repellent">Bug Repellent

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Hurricane" name="Hand Sanitizer">Hand Sanitizer

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Hurricane" name="Mobility Impaired">Mobility Impaired

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Hurricane" name="Single Parent">Single Parent

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Hurricane" name="clieSingle Othernt_need">Single Other

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-12 mb-3">

                                                        <div class="form-title">

                                                            <h3>Household Age Demographic</h3>

                                                        </div>        

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Infant" name="household_age">Infant

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Under 5 years old" name="household_age">Under 5 years old

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="5-12" name="household_age">5-12

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="13-18" name="household_age">13-18

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="19-40" name="household_age">19-40

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="41-65" name="household_age">41-65

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="66-80" name="household_age">66-80

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="81+" name="household_age">81+

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-2 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" class="form-check-input sur_dis" value="Other" name="household_age">Other

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 mb-5">

                                                        <div class="form-group">

                                                            <input type="text" class="form-control" id="rf_email2" name="number_mail" placeholder="Number of Male" value="">

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 mb-5">

                                                        <div class="form-group">

                                                            <input type="text" class="form-control" id="rf_email2" name="number_female" placeholder="Number of Female" value="">

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-12 mb-3">

                                                        <div class="form-check d-flex align-items-center">

                                                            <label class="form-check-label">

                                                                <input type="checkbox" id="other_age124" class="form-check-input sur_dis" value="do_not_say" name="other_age">Age of Other Dependents

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-lg-3 mb-3" id="div12"  style="display: none;">

                                                        <div class="form-group">

                                                            <input type="text" class="form-control"  name="" placeholder="Enter Age" value="">

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

                                                                 <div class="marker" id ="prop_type_error"> </div>

                                                                <select id="property_type" name="property_type" class="form-control propert_type">

                                                                   <option value ="" selected> Select Property Type </option>

                                                                   <option value="Rented House / Apartment">Rented House / Apartment</option>

                                                                    <option value="Owned House / Apartment">Owned House / Apartment</option>

                                                                    <option value="Landlord Property">Landlord Property</option>

                                                                    <option value="Business Owner">Business Owner</option>

                                                                    <option value="Other">Other</option>

                                                                </select>

                                                            </div>

                                                           

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input pro_con" value="Yes" name="property_condition">Yes

                                                                </label>

                                                            </div>

                                                            <div class ="marker" id ="pro_con_error"></div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="property_condition">No

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

                                                                    <input type="radio" class="form-check-input li_fe" value="Yes" name="life_safety">Yes

                                                                </label>

                                                            </div>

                                                            <div class ="marker" id ="li_fe_error"></div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="life_safety">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group select-form">

                                                                <div class ="marker" id ="rec_status_error"></div>

                                                                <select id="recovery_status" name="recovery_status" class="form-control rec_status" >

                                                                    <option value="" slected>Select any value</option>

                                                                    <option value="No Work has begun">No Work has begun</option>

                                                                     <option value="Partially Recovered - Still a lot of work to do ">Partially Recovered - Still a lot of work to do </option>

                                                                      <option value="Mostly Recovered - There are still problems">Mostly Recovered - There are still problems</option>

                                                                       <option value="Getting Worse - More problems have occured">Getting Worse - More problems have occured</option>

                                                                        <option value="Uninhabitable - Declared to be condemned">Uninhabitable - Declared to be condemned </option>

                                                                         <option value="Other">Other</option>

                                                                </select>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input pro_own" value="Yes" name="property_owner">Yes

                                                                </label>

                                                            </div>

                                                            <div class ="marker" id ="pro_own_error"></div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="property_owner">No

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

                                                                    <input type="radio" class="form-check-input lia_yes" value="Yes" name="liability_waiver">Yes

                                                                </label>

                                                            </div>

                                                            <div class ="marker" id ="lia_yes_error"></div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="liability_waiver">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input own_pr" value="Yes" name="owner_present">Yes

                                                                </label>

                                                            </div>

                                                            <div class ="marker" id ="own_pr_error"></div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="owner_present">No

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

                                                                    <input type="radio" class="form-check-input agr_yes" value="Yes" name="agree_terms">Yes

                                                                </label>

                                                            </div>

                                                            <div class ="marker" id ="agr_yes_error"></div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="agree_terms">No

                                                                </label>

                                              

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input wil_to" value="Yes" name="willing_to_help">Yes

                                                                </label>

                                                            </div>

                                                            <div class ="marker" id ="wil_to_error"></div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="willing_to_help">No

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

                                                                    <input type="radio" class="form-check-input" value="Basement" name="property_type">Basement

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="First Floor" name="property_type">First Floor

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Second Floor" name="property_type">Second Floor

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Attic" name="property_type">Attic

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Garage" name="property_type">Garage

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input prop_yes" value="Other" name="property_type">Other

                                                                </label>

                                                            </div>

                                                            <div class ="marker" id ="prop_yes_error"></div>

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

                                                                    <input type="radio" class="form-check-input is_wa" value="Yes" name="is_water">Yes

                                                                </label>

                                                            </div>

                                                            <div class ="marker" id ="is_wa_error"></div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="is_water">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input is_mus" value="Yes" name="is_mud">Yes

                                                                </label>

                                                            </div>

                                                            <div class ="marker" id ="is_mus_error"></div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="is_mud">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12"></div>



                                                        <!--  -->

                                                        <!--<div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Central Air" name="rf_apply[]" checked>Central Air

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

                                                        </div>-->

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>What Appliances & Contents have been damaged? *</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-12 col-lg-1 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Boiler" name="damage_contents">Boiler

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Furniture" name="damage_contents">Furniture

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Hot Water Heater" name="damage_contents">Hot Water Heater

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Refrigerator" name="damage_contents">Refrigerator

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Stove" name="damage_contents">Stove

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="Washer/Dryer" name="damage_contents">Washer/Dryer

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-1 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input da_oth" value="Other" name="damage_contents">Other

                                                                </label>

                                                            </div>

                                                            <div class ="marker" id ="da_oth_error"></div>

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

                                                                 <div class ="marker" id="ins_type_error"> </div>

                                                                <input type="text" class="form-control ins_type"  name="insurance_type" placeholder="Enter here">

                                                            </div>

                                                           

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input cont_yes" value="Yes" name="contacted_other">Yes

                                                                </label>

                                                            </div>

                                                            <div class ="marker" id ="cont_yes_error"></div>

                                                        </div>

                                                        <div class="col-12 col-lg-3 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="contacted_other">No

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

                                                                    <input type="radio" class="form-check-input" value="Yes" name="on_behalf">Yes

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-2 mb-3">

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" class="form-check-input" value="No" name="on_behalf">No

                                                                </label>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 my-4">

                                                            <div class="form-title">

                                                                <h3>Publish Form To</h3>

                                                            </div> 

                                                            <div class ="marker" id ="publish_error"></div>

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

                                                                            <select class="form-control mt-3 border" id="rf_publish_select_from_my_joined_group" name ="rf_publish">

                                                                                 <option>--Select any group--</option>

                                                                                <?php  foreach($myJoinedGroups as $joinedGrpupVal){

                                                                                       $author_id=$joinedGrpupVal->post_author;

                                                                                        if($current_user_id!=$author_id){

                                                                                ?>

                                                                                   

                                                                                   <option value='<?php echo $joinedGrpupVal->ID?>'> <?php echo $joinedGrpupVal->post_title?></option>

                                                                                <?php }} ?>

                                                                          

                                                                            </select>

                                                                        </div>    

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input onclick="show2();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish">Select From My Group

                                                                        </label>

                                                                    </div>

                                                                    <div id="div44" class="hides">

                                                                    <select class="form-control mt-3 border" id="rf_publish_select_from_my_group" name ="rf_publish">

                                                                        <option>--Select any group--</option>

                                                                        <?php

                                                                            $current_user_id = get_current_user_id();  

                                                                            $args = array(

                                                                                    'numberposts'   => -1,

                                                                                    'post_type'     => 'groups',

                                                                                    'post_status'   => 'publish',

                                                                                     'author'       =>  $current_user_id

                                                                                );

                                                                               //$all_groups = learndash_get_users_group_ids($current_user_id);

                                                                                $all_groups = get_posts( $args );

                                                                               // echo "<pre>";

                                                                                //print_r($all_groups);       

                                                                        ?>

                                                                        <?php foreach($all_groups as $value){ ?>

                                                                          <option value = "<?php echo $value->ID ?>" ><?php echo $value->post_title ?></option>

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

                                                            <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-4">Next</a>

                                                           <!-- <button class="btn btn-primary" title="Next" name="save" value="save">Next</button>-->

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div id="step-5" class="main-form-section d-none w-100">

                                                <div>

                                                    

                                                    <div class="row">

                                                         

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                            Are you ready to commit the form?

                                                          <button class="btn btn-outline-primary" value="save" name="save" title="Next">Finish</button>

                                                          <!-- <button class="btn btn-outline-primary" value="finish" name="finish" title="Finish">Finish</button>-->

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

    <?php include('common_user_footer.php')?>

</div>



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

    var surDa = $('.sur_da').val();

    var surTi = $('.sur_ti').val();

    var surFri = $('.sur_fri').val();

    var surLast = $('.sur_last').val();

    var surAdd = $('.sur_add').val();

    

    var surZip = $('.sur_zip').val();

    var surOth = $('.sur_oth').val();

    var surPri = $('.sur_pri').val();

  





    if(surDa ==''){

            $("#sur_da_error").text("Please enter date .");

        } 

        if(surTi ==''){

            $("#sur_ti_error").text("Please enter time .");

        } 

        if(surFri ==''){

            $("#sur_fri_error").text("Please enter first name .");

        }



        if(surLast ==''){

            $("#sur_last_error").text("Please enter last name .");

        } 



        if(surAdd ==''){

            $("#sur_add_error").text("Please enter address .");

        } 





        if(surZip ==''){

            $("#sur_zip_error").text("Please enter zip code .");

        }  



        if(surOth ==''){

            $("#sur_oth_error").text("Please enter other .");

        } 



         if(surPri ==''){

            $("#sur_pri_error").text("Please enter primary  .");

        }  



          





        else{

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

    }   

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

        var propType = $('.propert_type').val();

        var insType = $('.ins_type').val();

        var recoStatus = $('.rec_status').val();





          var PropertyCondition1 = document.getElementsByName('property_condition');

            for (let k of PropertyCondition1) {

                if(k.checked) {

                }

                else {

                    $("#pro_con_error").text("Select any option.");

                }

            }







        var LifeSafety2 = document.getElementsByName('life_safety');

            for (let h of LifeSafety2) {

                if(h.checked) {

                }

                else {

                    $("#li_fe_error").text("Select any option.");

                }

            }







        var PropertyOwner3 = document.getElementsByName('property_owner');

            for (let v of PropertyOwner3) {

                if(v.checked) {

                }

                else {

                    $("#pro_own_error").text("Select any option.");

                }

            }





        var PropertyOwner4 = document.getElementsByName('property_owner');

            for (let n of PropertyOwner4) {

                if(n.checked) {

                }

                else {

                    $("#pro_ow_error").text("Select any option.");

                }

            }





         var LiabilityWaiver6 = document.getElementsByName('liability_waiver');

            for (let r of LiabilityWaiver6) {

                if(r.checked) {

                }

                else {

                    $("#lia_yes_error").text("Select any option.");

                }

            }





         var OwnerPresent7 = document.getElementsByName('owner_present ');

            for (let p of OwnerPresent7) {

                if(p.checked) {

                }

                else {

                    $("#own_pr_error").text("Select any option.");

                }

            }



           



         var AgreeTerms8 = document.getElementsByName('agree_terms ');

            for (let s of AgreeTerms8) {

                if(s.checked) {

                }

                else {

                    $("#agr_yes_error").text("Select any option.");

                }

            }





         var WillingTohelp9 = document.getElementsByName('willing_to_help ');

            for (let c of WillingTohelp9) {

                if(c.checked) {

                }

                else {

                    $("#wil_to_error").text("Select any option.");

                }

            }





        var PropertyType10 = document.getElementsByName('property_type ');

            for (let g of PropertyType10) {

                if(g.checked) {

                }

                else {

                    $("#pro_yes_error").text("Select any option.");

                }

            }





         var IsWater11 = document.getElementsByName('is_water ');

            for (let z of IsWater11) {

                if(z.checked) {

                }

                else {

                    $("#is_wa_error").text("Select any option.");

                }

            }



         var IsMud12 = document.getElementsByName('is_mud ');

            for (let l of IsMud12) {

                if(l.checked) {

                }

                else {

                    $("#is_mus_error").text("Select any option.");

                }

            }





        var DamageContents13 = document.getElementsByName('damage_contents');

            for (let m of DamageContents13) {

                if(m.checked) {

                }

                else {

                    $("#da_oth_error").text("Select any option.");

                }

            }





        var ContactedOther14 = document.getElementsByName('contacted_other');

            for (let q of ContactedOther14) {

                if(q.checked) {

                }

                else {

                    $("#cont_yes_error").text("Select any option.");

                }

            }











        

        

        if(propType ==''){

            $("#prop_type_error").text("Please Select property type .");

        }

        

        if(insType ==''){

            $("#ins_type_error").text("Please enter insurance type .");

        }

        

         if(recoStatus ==''){

            $("#rec_status_error").text("Please select recovery status .");

        }

        

        else {

        

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

        }



    });

    

    

    

    $("#step-btn-4").click(function(){

        var publishFrom = document.getElementsByName('rf_publish');

        for (let i of publishFrom) {

    if(i.checked) {

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

    }

    else {

     $("#publish_error").text("Please select any group.");

        }

    }

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

<!--   <script>

    function show1(){

      document.getElementById('div1').style.display ='none';

    }

    

    function show2(){

      document.getElementById('div1').style.display = 'block';

    }

 </script> -->

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

 <script type="text/javascript">

      $(document).ready(function(){

        $('#other_age124').change(function(){

            if($(this).is(':checked')) {

                $('#div12').show();

            } else {

                $('#div12').hide();

            }

        });

    });

 </script>
<script>
    jQuery(document).ready(function() {

        // Add event listeners for the two dropdowns
        jQuery('#rf_publish_select_from_my_joined_group').on('change', function() {
            setSelectedGroupId(jQuery(this).val());
        });

        jQuery('#rf_publish_select_from_my_group').on('change', function() {
            setSelectedGroupId(jQuery(this).val());
        });

        // Function to set the hidden field with the selected group ID
        function setSelectedGroupId(value) {
            document.getElementById('selected_groupid').value = value;  // Set hidden input field

            console.log('Selected group ID set to:', value);
        }
    });  // <-- Missing closing parenthesis added here

</script>



<?php  } ?>