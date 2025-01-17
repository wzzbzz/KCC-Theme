 <?php 

   /* Template Name: create organization report */

   if ( is_user_logged_in() ) {



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

        padding: 1rem 0rem 2rem 0rem;

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

                                                    Contact Information

                                                </div>   

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"  id="bd-2">

                                                    <div class="circle "  id="red-2"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                    Disaster Type

                                                </div>   

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"   id="bd-3">

                                                    <div class="circle" id="red-3"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                    Volunteer Project Description

                                                </div>    

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"  id="bd-4">

                                                    <div class="circle" id="red-4"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                   Skills & Disqualifiers

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

                                        <form method = "POST" action ="" class="row mediadoc_form" enctype="multipart/form-data">

                                            <input type ="hidden" name ="group_id"  id="group_id"  value ="<?php echo $gid;?>">

                                            <input type ="hidden" name ="rf_id"  id="rf_id"  value ="<?php echo $rf_id;?>">

                                            <input type ="hidden" name ="report_id"  id="report_id"  value ="<?php echo "ORG-$randomnumber";?>">

                                            <input type="hidden" name="create_volunteerReq" value="volunteer_request"/>

                                            <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />

                                            <!-- Hidden field to hold the selected group ID -->
                                            <input type="hidden" name="selected_groupid" id="selected_groupid" value="">

                                            <div id="step-1" class="main-form-section w-100">

                                                 <div>

                                                    <div class="row">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Contact Information</h3>

                                                            </div>        

                                                        </div>

                                                        <?php

                                                            $current_user_id = get_current_user_id();

                                                            $userInfo =  get_userdata($current_user_id);

                                                            $all_userMeta  = get_user_meta($current_user_id);

                                                          

                                                        ?>

                                                        

                                                         <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Name of Event *</label>

                                                                <!--<input type="text" class="form-control" id="vol_event" name="vol_event" placeholder="Enter here" value="<//?php echo get_post_meta($rf_id,'vol_event',true)?>">-->

                                                                <input type="text" class="form-control org_event"  name="post_title" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'post_title',true)?>">

                                                                <div class ="marker" id ="org_event_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Name of Organization *</label>

                                                                <input type="text" class="form-control org_name" name="vol_org" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'vol_org',true)?>">

                                                                <div class ="marker" id ="org_name_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Contact Person *</label>

                                                                <input type="text" class="form-control org_con"  name="vol_person" placeholder="Enter Name" value="<?php echo $userInfo->first_name;  ?> <?php echo $userInfo->last_name;  ?>" readonly>

                                                                 <div class ="marker" id ="org_con_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Title *</label>

                                                                <input type="text" class="form-control org_title"  name="vol_title" placeholder="Enter title" value="<?php echo get_post_meta($rf_id,'vol_title',true)?>">

                                                                <div class ="marker" id ="org_title_error"></div>

                                                            </div>

                                                        </div>



                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Email Address *</label>

                                                                <input type="email" class="form-control org_email"  name="vol_email" placeholder="Enter email" value="<?php echo $userInfo->user_email; ?>" readonly>

                                                                <div class ="marker" id ="org_email_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Phone *</label>

                                                                <input type="number" id="phone" class="form-control org_phone"  name="vol_phone" placeholder="Enter phone no." value="<?php echo get_post_meta($rf_id,'vol_phone',true)?>">

                                                                <div class ="marker" id ="org_phone_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Address *</label>

                                                                <input type="text" class="form-control org_address"  name="vol_address" placeholder="Enter Address" value="<?php echo get_post_meta($rf_id,'vol_address',true)?>">

                                                                 <div class ="marker" id ="org_address_error"></div>

                                                            </div>

                                                        </div>

                                                           <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Zip Code *</label>

                                                                <input type="number" class="form-control org_zip"  onKeyPress="if(this.value.length==6) return false;" min="0" name="vol_zipcode2" placeholder="Enter " value="<?php echo $userInfo->code;?>" readonly>

                                                                <div class ="marker" id ="org_zip_error"></div>

                                                            </div>

                                                        </div>

                                                         <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                               <label>Country</label>

                                                               <input type ="text" class ="form-control org_country" name ="country" value="<?php echo $userInfo->country;?>" readonly>

                                                               <div class ="marker" id ="org_country_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                             <label>State</label>

                                                               <input type ="text" class ="form-control org_state" name ="state" value="<?php echo $userInfo->state;?>" readonly>

                                                               <div class ="marker" id ="org_state_error"></div>

                                                            </div>

                                                        </div>

                                                        

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                               <label>City</label>

                                                               <input type ="text" class ="form-control org_city" name ="city" value="<?php echo $userInfo->city;?>" readonly>

                                                               <div class ="marker" id ="org_city_error"></div>

                                                            </div>

                                                        </div>

                                                        

                                                     

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Website</label>

                                                                <input type="text" class="form-control org_website"  name="vol_website" placeholder="Enter Website  Url " value="<?php echo get_post_meta($rf_id,'vol_website',true)?>">

                                                                <div class ="marker" id ="org_website_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Mission</label>

                                                                <input type="text" class="form-control org_mission"  name="vol_mission" placeholder="Enter Mission " value="<?php echo get_post_meta($rf_id,'vol_mission',true)?>">

                                                                <div class ="marker" id ="org_mission_error"></div>

                                                            </div>

                                                        </div>



                                                        <!-- volunteer service location starts -->



                                                         <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Volunteer Service Location And Point Of Contact</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Orgnaization Name</label>

                                                                <input type="text" class="form-control vol_name"  name="volunteer_org" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'volunteer_org',true)?>">

                                                                <div class ="marker" id ="vol_name_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Contact Person</label>

                                                                <input type="text" class="form-control vol_con"  name="volunteer_contact_person" placeholder="Enter here " value="<?php echo get_post_meta($rf_id,'volunteer_contact_person',true)?>">

                                                                <div class ="marker" id ="vol_con_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Email</label>

                                                                <input type="email" class="form-control vol_email"  name="volunteer_pEmail" placeholder="Enter here " value="<?php echo get_post_meta($rf_id,'volunteer_pEmail',true)?>">

                                                                <div class ="marker" id ="vol_email_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Title</label>

                                                                <input type="text" class="form-control vol_title"  name="volnteer_pTitle" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'volnteer_pTitle',true)?>">

                                                                <div class ="marker" id ="vol_title_error"></div>

                                                            </div>

                                                        </div>



                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Phone</label>

                                                                <input type="number" id="phone" class="form-control vol_phone" name="volnteer_pPhone" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'volnteer_pPhone',true)?>">

                                                                <div class ="marker" id ="vol_phone_error"></div>

                                                            </div>

                                                        </div>

                                                      

                                                        <!-- Volunteer service location ends  -->

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Point Of Contact</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Name of Organization</label>

                                                                <input type="text" class="form-control vol_namep" name="point_org" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'point_org',true)?>">

                                                                <div class ="marker" id ="vol_namep_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Contact Person</label>

                                                                <input type="text" class="form-control vol_conp"  name="point_contact" placeholder="Enter here " value="<?php echo get_post_meta($rf_id,'point_contact',true)?>">

                                                                <div class ="marker" id ="vol_conp_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Title</label>

                                                                <input type="text" class="form-control vol_titlep"  name="point_title" placeholder="Enter title " value="<?php echo get_post_meta($rf_id,'point_title',true)?>">

                                                                <div class ="marker" id ="vol_titlep_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Email Address</label>

                                                                <input type="email" class="form-control vol_emailp"  name="point_email" placeholder="Enter email" value="<?php echo get_post_meta($rf_id,'point_email',true)?>">

                                                                <div class ="marker" id ="vol_emailp_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Phone</label>

                                                                <input type="number" class="form-control vol_phonep"  id="phone" name="point_phone" placeholder="Enter " value="<?php echo get_post_meta($rf_id,'point_phone',true)?>">

                                                                <div class ="marker" id ="vol_phonep_error"></div>

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

                                                <div>

                                                    <div class="row">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Disaster Type</h3>

                                                            </div>        

                                                        </div>

                                                        <!--<div class="col-lg-12 mb-4">

                                                            <div class="col-12 col-lg-3 mb-3">

                                                                <div class="form-check d-flex align-items-center">

                                                                    <label class="form-check-label">

                                                                        <input type="radio" <?//php echo (get_post_meta($rf_id,'rf_weather',true)=="Severe Weather")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_weather" id="rf_weather" value="Severe Weather">Severe Weather

                                                                    </label>

                                                                </div>

                                                            </div>

                                                        </div>-->

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Select all that Apply</h3>

                                                            </div>       

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="row">

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input id="huri" type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Hurricane")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" value="Hurricane" name="rf_apply[]">Hurricane

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Flooding")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" value="Flooding" name="rf_apply[]">Flooding

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Earthquake")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Earthquake">Earthquake

                                                                        </label> 

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Landslide")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Landslide"> Landslide

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Severe Heat")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Severe Hea">Severe Heat

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Snowstorm")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Snowstorm">Snowstorm

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Tornado")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Tornado">Tornado

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Fire Emergency")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Fire Emergency">Fire Emergency

                                                                        </label>

                                                                        

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="row">

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Hazardous Material/Spill/ Chemical Release")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Hazardous Material/Spill/ Chemical Release">Hazardous Material/Spill/ Chemical Release

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Medical Emergency/Mass Casualty")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Medical Emergency/Mass Casualty">Medical Emergency/Mass Casualty

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)==">Missing Persons")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Missing Persons">Missing Persons

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Utility Outage")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Utility Outage">Utility Outage

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Structural Disaster")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Structural Disaster">Structural Disaster

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="row">

                                                                

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Weakened Structures")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Weakened Structures">Weakened Structures

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Workplace Violence or Threat of Violence")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Workplace Violence or Threat of Violence">Workplace Violence or Threat of Violence

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Epidemic / Pandemic Outbreak")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Epidemic / Pandemic Outbreak">Epidemic / Pandemic Outbreak

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Terrorist Attack")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Terrorist Attack">Terrorist Attack

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="row">

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox"  <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Nuclear Power Disasters")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply[]" value="Nuclear Power Disasters">Nuclear Power Disasters

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" onclick="show4();"<?php echo (get_post_meta($rf_id,'rf_apply',true)=="Other")?"CHECKED='CHECKED'":""?> class="form-check-input dis_huri" name="rf_apply_other" value="Other" >Other

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group hides" id="div2" >

                                                                <input type="text" class="form-control text-info" id="rf_apply_other" name="rf_apply_other" placeholder="Enter Comments">

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

                                            </div>





                                            <div id="step-3" class="main-form-section d-none w-100">

                                                <div>

                                                    <div class="row">

                                                         <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Volunteer Project Description</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Scope of Work</label>

                                                               <!--  <textarea class="form-control" name="" placeholder="Enter here"></textarea> -->

                                                                 <input type="text" class="form-control vol_sco" name="vol_scope" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'vol_scope',true)?>"> 

                                                                 <div class ="marker" id ="vol_sco_error"></div>

                                                            </div>

                                                        </div>



                                                         <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Volunteer Service Details</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Start Date</label>

                                                                <input type="date" class="form-control vol_start" name="vol_start_date" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'vol_start_date',true)?>">

                                                                <div class ="marker" id ="vol_start_error"></div>

                                                            </div>

                                                        </div>



                                                          <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>End Date</label>

                                                                <input type="date" class="form-control vol_end" name="vol_end_date" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'vol_end_date',true)?>">

                                                                <div class ="marker" id ="vol_end_error"></div>

                                                            </div>

                                                        </div>



                                                          <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Shift Start Date</label>

                                                                <input type="date" class="form-control vol_shift" name="vol_shift_start_date" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'vol_shift_start_date',true)?>">

                                                                <div class ="marker" id ="vol_shift_error"></div>

                                                            </div>

                                                        </div>



                                                          <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Shift End  Date</label>

                                                                <input type="date" class="form-control vol_she"  name="vol_shift_end_date" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'vol_shift_end_date',true)?>">

                                                                <div class ="marker" id ="vol_she_error"></div>

                                                            </div>

                                                        </div>



                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Geographic Area Volunteers Will Serve Within</h3>

                                                            </div>        

                                                        </div>

                                                       <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <select class="form-control vol_coun" name ="rf_country_ifo" onchange="getCountries2()" id="countries">

                                                                    <option value="">Select Country*</option>

                                                                    <?php foreach($allCountry as $country){?>

                                                                      <option value ="<?=$country->name; ?>" data-value="<?=$country->id; ?>"><?=$country->name; ?> </option>

                                                                    <?php } ?>

                                                                </select> 

                                                                <div class ="marker" id ="vol_coun_error"></div>

                                                            </div>

                                                        </div>

                                                          <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <select class="form-control vol_sel" name ="rf_state_ifo" onchange="getCities2()" id="states">

                                                                    <option value="">Select State*</option> 

                                                                </select>    

                                                                <div class ="marker" id ="vol_sel_error"></div>

                                                            </div>

                                                            

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <select class="form-control vol_city" name ="rf_city_info" id="cities">

                                                                    <option value="">Select City*</option>

                                                                </select>

                                                                <div class ="marker" id ="vol_city_error"></div>

                                                            </div>

                                                        </div>



                                                         <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Neighborhood</label>

                                                                <input type="text" class="form-control vol_nei" id="area_neighbour" name="area_neighbour" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'area_neighbour',true)?>">

                                                                <div class ="marker" id ="vol_nei_error"></div>

                                                            </div>

                                                        </div>



                                                         <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Zip Code</label>

                                                                <input type="number" class="form-control vol_code"  onKeyPress="if(this.value.length==6) return false;" min="0"  name="area_zip" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'area_zip',true)?>">

                                                                <div class ="marker" id ="vol_code_error"></div>

                                                            </div>

                                                        </div>



                                                         <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Other</label>

                                                                <input type="text" class="form-control vol_other"  name="area_other" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'area_other',true)?>">

                                                                <div class ="marker" id ="vol_other_error"></div>

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

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-title">

                                                                <h3>Skills and Disqualifiers</h3>

                                                            </div>        

                                                        </div>

                                                         <div class="col-lg-12 mb-3">

                                                            <div class="form-group">

                                                                <label>Disqualifiers</label>

                                                               

                                                                <input type="text" class="form-control vol_disqu" name="vol_disq" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'vol_disq',true)?>">

                                                                 <div class ="marker" id ="vol_disqu_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Skills Needed</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="row">

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'vol_skills',true)=="Emergency Service")?"CHECKED='CHECKED'":""?> class="form-check-input vol_eme" value="Emergency Service" name="vol_skills">Emergency Service

                                                                        </label>

                                                                        <div class ="marker" id ="vol_eme_error"></div>



                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'vol_skills',true)=="General Service Needed")?"CHECKED='CHECKED'":""?> class="form-check-input vol_gen" value="General Service Needed" name="vol_skills">General Service Needed

                                                                        </label>

                                                                        <div class ="marker" id ="vol_gen_error"></div>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'vol_skills',true)=="Repair and Rebuild")?"CHECKED='CHECKED'":""?> class="form-check-input vol_req" name="vol_skills" value="Repair and Rebuild">Repair and Rebuild

                                                                        </label>

                                                                        <div class ="marker" id ="vol_req_error"></div>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'vol_skills',true)=="Evacuation")?"CHECKED='CHECKED'":""?> class="form-check-input vol_eva" name="vol_skills" value="Evacuation"> Evacuation

                                                                        </label>

                                                                        <div class ="marker" id ="vol_eva_error"></div>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'vol_skills',true)=="Crowd Control")?"CHECKED='CHECKED'":""?> class="form-check-input

                                                                            vol_cro" name="vol_skills" value="Crowd Control">Crowd Control

                                                                        </label>

                                                                        <div class ="marker" id ="vol_cro_error"></div>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'vol_skills',true)=="Property Reservation")?"CHECKED='CHECKED'":""?> class="form-check-input vol_pro" name="vol_skills" value="Property Reservation">Property Reservation

                                                                        </label>

                                                                        <div class ="marker" id ="vol_pro_error"></div>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'vol_skills',true)=="Health Services")?"CHECKED='CHECKED'":""?> class="form-check-input vol_hea" name="vol_skills" value="Health Services">Health Services

                                                                        </label>

                                                                        <div class ="marker" id ="vol_hea_error"></div>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'vol_skills',true)=="Food Services")?"CHECKED='CHECKED'":""?> class="form-check-input vol_food" name="vol_skills" value="Food Services">Food Services

                                                                        </label>

                                                                        <div class ="marker" id ="vol_food_error"></div>

                                                                    </div>

                                                                </div>



                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'vol_skills',true)=="Volunteer Management")?"CHECKED='CHECKED'":""?> class="form-check-input vol_man" name="vol_skills" value="Volunteer Management">Volunteer Management

                                                                        </label>

                                                                        <div class ="marker" id ="vol_man_error"></div>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'vol_skills',true)=="Other")?"CHECKED='CHECKED'":""?> class="form-check-input vol_oth" name="vol_skills" value="Other">Other

                                                                        </label>

                                                                        <div class ="marker" id ="vol_oth_error"></div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>





                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Publish Form To</h3>

                                                                <div class="marker" id ="publish_error">

                                                            </div>        

                                                        </div>

                                                       <div class="col-lg-12 mb-3">

                                                            <div class="row">

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input onclick="show33();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input vol_joi" name="rf_publish">Select From My Joined Group

                                                                        </label>

                                                                        <div class ="marker" id ="vol_joi_error"></div>

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

                                                                            <select class="form-control mt-3 border rf_publish1" id="rf_publish_select_from_my_group" name ="rf_publish">

                                                                                 <option value="" selected>Select any group</option>

                                                                                <?php  foreach($myJoinedGroups as $joinedGrpupVal){

                                                                                       $author_id=$joinedGrpupVal->post_author;

                                                                                        if($current_user_id!=$author_id){

                                                                                ?>

                                                                                  

                                                                                   <option value=' <?php echo $joinedGrpupVal->ID?>'> <?php echo $joinedGrpupVal->post_title?></option>

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

                                                                    <select class="form-control mt-3 border rf_publish2" id="rf_publish_select_from_my_joined_group" name ="rf_publish">

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

                                                                        <option value="" selected>Select any group</option>

                                                                        <?php foreach($all_groups as $value){ ?>

                                                                        

                                                                          <option value = "<?php echo $value->ID ?>" ><?php echo $value->post_title ?></option>

                                                                        <?php } ?>      

                                                                    </select>    

                                                                </div>

                                                                </div>

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input  onclick="show1();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="all_users")?"CHECKED='CHECKED'":""?> class="form-check-input rf_publish3 rrn_users" name="rf_publish" value="all_rrn_users">All RRN Users

                                                                           

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <!-- <div class="col-lg-6 d-flex justify-content-end">

                                                            <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                                        </div> -->

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                            <a href="javascript:void(0);" class="btn btn-primary" name = "save"  value="save" title="Next" id="step-btn-4">Next</a>

                                                           <!-- <button class="btn btn-outline-primary" id="step-btn-4" value="save" name="save" title="Next">Next</button>-->

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            </div>

                                              <div id="step-5" class="main-form-section d-none w-100">

                                                <div>

                                                    <div class="row">

                                                        <h5>Are you sure you are ready to submit this form?</h5>  <br/>

                                                    </div>

                                                    <div class="row">

                                                     <button class="btn btn-outline-primary" value="save" name="save" title="Next">Finish</button>    

                                                    </div>

                                                </div> 

                                             </div>

                                          </form>

                                       <!--</div>-->

                                    </div>

                                 </div>

                              </div>

                          </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Footer-->

    <?php include('common_user_footer.php');?>

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

        var orgEvent = $('.org_event').val();

        var orgName = $('.org_name').val();

        var orgTitle = $('.org_title').val();

        var orgPhone = $('.org_phone').val();

        var orgAddress = $('.org_address').val();

    



        if(orgEvent ==''){

            $("#org_event_error").text("Please Enter Event.");

        } 





        if(orgName ==''){

            $("#org_name_error").text("Please Enter Name.");

        }







         if(orgTitle ==''){

            $("#org_title_error").text("Please Enter Title.");

        }

        

         if(orgPhone ==''){

            $("#org_phone_error").text("Please Enter phone.");

            

        }

       

        if(orgAddress ==''){

            $("#org_address_error").text("Please Enter Address.");

        }



          

       

        else {

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

        

            // for circle color

            $("#bd-2").addClass('orange-bd');

            $("#red-3").addClass('circle-red');

            $("#red-2").addClass('circle-orange');

            $("#red-2").removeClass('circle-red');



            $("#back-2").addClass('d-none');

            $("#back-3").removeClass('d-none');

    

    });







    $("#step-btn-3").click(function(){

        

       var volCoun = $('.vol_coun').val();

        var volSel = $('.vol_sel').val();

        var volCity = $('.vol_city').val();

         if(volCoun ==''){

             $("#vol_coun_error").text("Please enter country.");

         }

        

         if(volSel ==''){

            $("#vol_sel_error").text("Please enter state.");

        }

         if(volCity ==''){

            $("#vol_city_error").text("Please enter city.");

        }



    else{

        $("#step-4").removeClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-2").addClass('d-none');

        $("#step-3").addClass('d-none');

        $("#step-5").addClass('d-none');

        

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

            if (i.checked) {

                 $("#step-5").removeClass('d-none');

                    $("#step-1").addClass('d-none');

                    $("#step-2").addClass('d-none');

                    $("#step-3").addClass('d-none');

                    $("#step-4").addClass('d-none');

                    

                    // for circle color

                    $("#bd-4").addClass('orange-bd');

                    $("#red-5").addClass('circle-red');

                    $("#red-4").addClass('circle-orange');

                    $("#red-4").removeClass('circle-red');

              }

          else{

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

        

    //     // for circle color

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

     function show33(){

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

    function show3(){

      document.getElementById('div2').style.display ='none';

    }

    

    function show4(){

      document.getElementById('div2').style.display = 'block';

    }

 </script>

 <script>



    //function getCountries(){

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



       const getCountries2 = () => {

        countryId = $('#countries option:selected').data('value');

        let html = '<option value="">Select State*</option>';

        let html1 = '<option value="">Select City*</option>';

        if(countryId == undefined || countryId == 0 || countryId == '') {

            $('#states').html(html);

            $('#cities').html(html1);

            return false;

        }



        let states = '<?=json_encode($allStates)?>';

        if(states == '' ) {

            $('#states').html(html);

            $('#cities').html(html1);

            return false;

        }

        states = JSON.parse(states);

        if(states.length == 0 ) {

            $('#states').html(html);

            $('#cities').html(html1);

            return false;

        }



        $.each(states,function(key, value){

            if(value.country_id == countryId) {

                html += '<option value="'+value.state+'" data-value="'+value.id+'">'+value.state+'</option>';

            }

        });

        $('#states').html(html);

        $('#cities').html(html1);

    }









    const getCities2 = () => {



        stateId = $('#states option:selected').data('value');

        let html = '<option value="">Select City*</option>';

        if(stateId == undefined || stateId == 0 || stateId == '') {

            $('#cities').html(html);

            return false;

        }

        var cities = '<?=json_encode($allCities)?>';



        if(cities == '' ) {

            $('#cities').html(html);

            return false;

        }

        cities = JSON.parse(cities);

        if(cities.length == 0 ) {

            $('#cities').html(html);

            return false;

        }

        $.each(cities,function(key, value){

            if(value.state_id == stateId) {

                html += '<option value="'+value.city+'">'+value.city+'</option>';

            }

        });

        $('#cities').html(html);

    }

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


        // Validate phone field on blur
        jQuery("#phone").on("blur", function () {
            validatePhone(jQuery(this).val());
        });

        // Phone validation function
        function validatePhone(phone) {
            var re = /^\d{10}$/; // for exact 10 digits
            var re1 = /^(\d{4}\s)?\d{7}$/; // for phone if you don't need space remove \s
            if (re.test(phone)) {
                jQuery('#phone').css('color', 'green');
                return true;
            } else {
                jQuery('#phone').css('color', 'red');
                jQuery('#phone').focus();
                return false;
            }
        }
        });

 </script>



<?php  } ?>