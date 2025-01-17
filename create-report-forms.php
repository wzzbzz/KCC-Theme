<?php 

   /* Template Name: create report and forms */

   

   global $wpdb; 

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

   

        $current_user_id = get_current_user_id();

        $ownerInfo  = get_userdata($author_id);

        $owner_name =$ownerInfo->display_name;

        $randomnumber = mt_rand(10000,99999);

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

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet"/>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>

     .course-details1-temp .main_footer_sec {

    background: #134793 0% 0% no-repeat padding-box;

    border-radius: 50px 0px 0px 0px;

    padding: 3rem 0rem 0rem 0rem;

    margin-top: 40px;

    float: right;

}

    .create-report .form-box .report-next-tab .all-form .main-form-section .form-group .select2-search__field{

        top: 0px!important;

        padding: 0px 0px 25px 0px;

    }

    ::placeholder {

        color: #212529!important;

        

        opacity: 1; /* Firefox */

    }



    ::-ms-input-placeholder { /* Edge 12-18 */

        color: red;

    }

    .select2-container--default .select2-selection--multiple .select2-selection__rendered li{

        margin-top: 20px;

    }

    .select2-container{

        background: unset!important;

        box-shadow: unset!important;

    }

    

    .hides{display:none;}

    

    .marker{float:right;color:red;}

    

    <style>

    .glyphicon {

        font-size: 20px;

    }

    .glyphicon-remove {

        color: red;

    }

    .glyphicon-ok {

        color: green;

    }

    .btn-disabled.disabled {

      pointer-events: none;

      cursor: default;

    }

    

</style>

</style>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">     

<div class="coordination-center-tracking course-details1-temp">

    <div class="row justify-content-end mt-3">

        <?php include('user_topbar.php')?>

    </div>

    <div class="row justify-content-end mt-3 create-report">    

        <div class="col-xl-11 col-lg-11 col-md-10 col-10 d-flex justify-content-between  flex-wrap">

            <div class="row w-100 mb-4">

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

                                <a href="javascript:void(0);" id="back-6" class="btn btn-outline-primary d-none" title="Back">Back</a>

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

                                                    Disaster Details

                                                </div>   

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"  id="bd-2">

                                                    <div class="circle "  id="red-2"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                    Status

                                                </div>   

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"   id="bd-3">

                                                    <div class="circle" id="red-3"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                    Contact Information

                                                </div>    

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"  id="bd-4">

                                                    <div class="circle" id="red-4"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                   Disaster Type

                                                </div>   

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"  id="bd-5">

                                                    <div class="circle" id="red-5"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                    Logistics & Security

                                                </div>    

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"  id="bd-6">

                                                    <div class="circle" id="red-6"></div>

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

                                          <form id="myForm" name = "form" method = "POST" action ="" class="row mediadoc_form" id="disaster_media" enctype="multipart/form-data">

                                                <input type ="hidden" name ="group_id"  id="group_id"  value ="<?php echo $gid;?>">

                                                <input type ="hidden" name ="rf_id"  id="rf_id"  value ="<?php echo $rf_id;?>">

                                                <input type ="hidden" name ="report_id"  id="report_id"  value ="<?php echo "DSR-$randomnumber";?>">

                                                <input type="hidden" name="create_reportsforms" value="reportsforms"/>

                                                <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />

                                                <div id="step-1" class="main-form-section w-100">

                                                <div>

                                                    <div class="row">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Disaster Details</h3>

                                                            </div>        

                                                        </div>

                                                        

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group">

                                                                <label>Name of the Disaster *</label>

                                                                <input  type="text" class="form-control dis_name" name="post_title" Placeholder="Enter report name" value="<?php echo get_post_meta($rf_id,'post_title',true)?>">

                                                                 <div class ="marker" id ="post_title_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Location of the Incident</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                 <select class="form-control dis_country" name="rf_country" onchange="getCountries()" id="country">

                                                                    <option value="">Select Country*</option>

                                                                    <?php foreach($allCountry as $country){?>

                                                                      <option value ="<?=$country->name; ?>" data-value="<?=$country->id; ?>"><?=$country->name; ?> </option>

                                                                    <?php } ?>

                                                                </select> 

                                                            </div>

                                                            <div class ="marker" id ="country_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <!--<label>State *</label>-->

                                                                <select class="form-control dis_state" name ="rf_state" onchange="getCities()" id="state" >

                                                                    <option value="">Select State*</option>  

                                                                </select>    

                                                            </div>

                                                             <div class ="marker" id ="state_error"></div>

                                                        </div>

                                                       

                                                        

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                               <!-- <label>City *</label>-->

                                                                <select class="form-control dis_city" name ="rf_city" id="city">

                                                                    <option value="">Select City*</option>  

                                                                </select>

                                                            </div>

                                                            <div class ="marker" id ="city_error"></div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group">

                                                                <label>Street Address *</label>

                                                                <input type="text" class="form-control dis_address" name="incident_location" placeholder="Street Address" value="<?php echo get_post_meta($rf_id,'incident_location',true)?>">

                                                                <div class ="marker" id ="dis_address_error"></div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                         <!-- <div class="col-lg-5 d-flex justify-content-end">

                                                             <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                                        </div> -->

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                            <a href="javascript:void(0);" class="btn btn-primary btn-disabled" title="Next" id="step-btn-1">Next</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div id="step-2" class="main-form-section d-none w-100">

                                                <div class="row">

                                                    <div class="col-lg-12 mb-3">

                                                        <div class="form-title">

                                                            <h3>Status *</h3>

                                                        </div>        

                                                    </div>

                                                    <div class="col-lg-12 mb-4">

                                                        <div class="d-flex w-100">

                                                            <div class="form-check d-flex align-items-center">

                                                                <div class="d-flex">

                                                                    <label class="form-check-label">

                                                                        <input type="radio" <?php echo (get_post_meta($rf_id,'rf_status',true)=="Initial Assessment")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_status" checked value="Initial Assessment">Initial Assessment

                                                                    </label>    

                                                                </div>

                                                                

                                                             </div>

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'rf_status',true)=="Report")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_status" value="Report">Report

                                                                </label>

                                                            </div>

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'rf_status',true)=="Status Update")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_status" value="Status Update">Status Update

                                                                </label>

                                                            </div>

                                                            <div class="form-check d-flex align-items-center">

                                                                <label class="form-check-label">

                                                                    <input type="radio" <?php echo (get_post_meta($rf_id,'rf_status',true)=="Close Out Report")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_status" value="Close Out Report">Close Out Report

                                                                 </label>

                                                            </div>

                                                        </div>

                                                       

                                                    </div>

                                                   <!-- <div class="col-lg-6 mb-3">

                                                        <div class="form-group seletc-form">

                                                            <select id="rf_status" name="rf_status" class="form-control">

                                                                <option value="No Action Required 1" <?//php echo (get_post_meta($rf_id,'rf_status',true)=="No Action Required 1")?"selected='selected'":""?> >No Action Required 1</option>

                                                                <option value="No Action Required 2" <?//php echo (get_post_meta($rf_id,'rf_status',true)=="No Action Required 2")?"selected='selected'":""?> >No Action Required 2</option>

                                                            </select>

                                                        </div>

                                                    </div>-->

                                                    <div class="col-lg-12 mb-3">

                                                        <div class="form-title">

                                                            <h3>Date and Time</h3>

                                                        </div>        

                                                    </div>

                                                    <div class="col-lg-4 mb-3">

                                                        <div class="form-group">

                                                            <label>Select Date *</label>

                                                            <input type="date" class="form-control dis_date" id="rf_date" name="rf_date" placeholder="Enter date" value="<?php echo get_post_meta($rf_id,'rf_date',true)?>">

                                                        </div>

                                                         <div class ="marker" id ="date_error"></div>

                                                    </div>

                                                    <div class="col-lg-4 mb-3">

                                                        <div class="form-group">

                                                            <label>Time *</label>

                                                            <input type="time" class="form-control dis_time" id="rf_time" name="rf_time" placeholder="Select time" value="<?php echo get_post_meta($rf_id,'rf_time',true)?>">

                                                        </div>

                                                         <div class ="marker" id ="time_error"></div>

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

                                                                <label>Name of Organization *</label>

                                                                <input type="text"  name="rf_org" class="form-control dis_org" placeholder="Enter " value="<?php echo get_post_meta($rf_id,'rf_org',true)?>">

                                                                 <div class ="marker" id ="org_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Contact Person *</label>

                                                                <input type="text" class="form-control dis_person" name="rf_contact_person" placeholder="Enter Name" value="<?php echo $userInfo->first_name; ?><?php echo $userInfo->last_name; ?>" readonly>

                                                               

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Title *</label>

                                                                <input type="text" class="form-control dis_title"  name="rf_title" placeholder="Enter title" value="<?php echo get_post_meta($rf_id,'rf_title',true)?>">

                                                                <div class ="marker" id ="tile_error"></div>

                                                            </div>

                                                        </div>



                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Email Address *</label>

                                                                <input type="text" class="form-control" id="rf_email" name="rf_email" placeholder="Enter email" value="<?php echo $userInfo->user_email; ?>" readonly>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Phone *</label>

                                                                

                                                                <input type="number" id ="phone" class="form-control dis_phone"  name="rf_phone" placeholder="Enter phone no." value="<?php echo get_post_meta($rf_id,'rf_phone',true)?>">

                                                               <div class ="marker" id ="phone_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Address *</label>

                                                                <input type="text" class="form-control con_dis_address"  name="rf_address" placeholder="Enter Address" value="<?php echo get_post_meta($rf_id,'rf_address',true)?>">

                                                                <div class ="marker" id ="con_dis_address_error"></div>

                                                            </div>

                                                            

                                                        </div>





                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                               <label>Country</label>

                                                               <input type ="text" class ="form-control dis_country" name ="country" value="<?php echo $userInfo->country;?>" readonly>

                                                            </div>

                                                        </div>



                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                               <label>State</label>

                                                               <input type ="text" class ="form-control dis_state" name ="state" value="<?php echo $userInfo->state;?>" readonly>   

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                              <label>City</label>

                                                               <input type ="text" class ="form-control dis_city" name ="city" value="<?php echo $userInfo->city;?>" readonly>

                                                            </div>

                                                        </div>



                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Zip Code *</label>

                                                                <input type="number" class="form-control dis_zip" id="rf_zipcode2" name="rf_zipcode2" placeholder="Enter " value="<?php echo $userInfo->code;?>" readonly>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Website</label>

                                                                <input type="text" class="form-control dis_web" id="rf_website" name="rf_website" placeholder="Enter Website  Url " value="<?php echo get_post_meta($rf_id,'rf_website',true)?>">

                                                                <div class ="marker" id ="web_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Official Point Of Contact At The Site If Different From Above</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Name of Organization</label>

                                                                <input type="text" class="form-control dis_conorg" id="_rf_org" name="_rf_org"  value="<?php echo get_post_meta($rf_id,'_rf_org',true)?>">

                                                                 <div class ="marker" id ="conorg_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Contact Person</label>

                                                                <input type="text" class="form-control dis_conp" id="rf_contact_person2" name="rf_contact_person2" placeholder="Enter " value="<?php echo get_post_meta($rf_id,'rf_contact_person2',true)?>">

                                                                <div class ="marker" id ="con_person_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Title</label>

                                                                <input type="text" class="form-control dis_cont" id="rf_name_title" name="rf_name_title" placeholder="Enter title " value="<?php echo get_post_meta($rf_id,'rf_name_title',true)?>">

                                                                <div class ="marker" id ="con_title_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Email Address</label>

                                                                <input type="text" class="form-control dis_conemail" id="rf_email2" name="rf_email2" placeholder="Enter email" value="<?php echo get_post_meta($rf_id,'rf_email2',true)?>">

                                                                <div class ="marker" id ="con_email_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Phone</label>

                                                                <input type="number" id ="phone" class="form-control dis_conphone" id="rf_phone2" name="rf_phone2" placeholder="Enter " value="<?php echo get_post_meta($rf_id,'rf_phone2',true)?>">

                                                                <div class ="marker" id ="con_phone_error"></div>

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

                                                            <div class="marker" id ="rf_apply_error"></div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="row">

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Hurricane")?"CHECKED='CHECKED'":""?> class="form-check-input dis_apply" value="Hurricane" name="rf_apply[]">Hurricane

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Flooding")?"CHECKED='CHECKED'":""?> class="form-check-input dis_apply" value="Flooding" name="rf_apply[]">Flooding

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Earthquake")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Earthquake">Earthquake

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Landslide")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Landslide"> Landslide

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Severe Heat")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Severe Hea">Severe Heat

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Snowstorm")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Snowstorm">Snowstorm

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Tornado")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Tornado">Tornado

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Fire Emergency")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Fire Emergency">Fire Emergency

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

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Hazardous Material/Spill/ Chemical Release")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Hazardous Material/Spill/ Chemical Release">Hazardous Material/Spill/ Chemical Release

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Medical Emergency/Mass Casualty")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Medical Emergency/Mass Casualty">Medical Emergency/Mass Casualty

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)==">Missing Persons")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Missing Persons">Missing Persons

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Utility Outage")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Utility Outage">Utility Outage

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Structural Disaster")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Structural Disaster">Structural Disaster

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

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Collapse")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Collapse">Collapse

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Weakened Structures")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Weakened Structures">Weakened Structures

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Workplace Violence or Threat of Violence")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Workplace Violence or Threat of Violence">Workplace Violence or Threat of Violence

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Epidemic / Pandemic Outbreak")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Epidemic / Pandemic Outbreak">Epidemic / Pandemic Outbreak

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Terrorist Attack")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply[]" value="Terrorist Attack">Terrorist Attack

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

                                                                            <input type="checkbox" <?php echo (get_post_meta($rf_id,'rf_apply',true)=="Nuclear Power Disasters")?"CHECKED='CHECKED'":""?> class="form-check-input"  name="rf_apply[]" value="Nuclear Power Disasters">Nuclear Power Disasters

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                

                                                                 <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center" >

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox"  <?php echo get_post_meta($rf_id,'rf_apply_other',true)?> class="form-check-input" name="rf_apply_other" value="Other" id="other_age126">Other

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group" id="div15" style="display:none;">

                                                                <input type="text" class="form-control text-info" id="rf_apply_other" name="rf_apply_other" placeholder="Enter Comments">

                                                            </div>

                                                        </div>

                                                    </div>



                                                    <div class="row">

                                                        <!-- <div class="col-lg-6 d-flex justify-content-end">

                                                            <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                                        </div> -->

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                            <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-4">Next</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div id="step-5" class="main-form-section d-none w-100">

                                                <div>

                                                    <div class="row">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Logistic Type</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-12 mb-4">

                                                            <div class="row">

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'rf_disaster_type1',true)=="Tunnels")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_disaster_type1" value="Tunnels" checked>Tunnels

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'rf_disaster_type1',true)=="Roads")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_disaster_type1" value="Roads">Roads

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'rf_disaster_type1',true)=="Subways")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_disaster_type1" value="Subways">Subways

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'rf_disaster_type1',true)=="Bus Lines")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_disaster_type1" value="Bus Lines">Bus Lines

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'rf_disaster_type1',true)=="Airports")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_disaster_type1" value="Airports">Airports

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'rf_disaster_type1',true)=="Availability of fuel")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_disaster_type1" value="Availability of fuel">Availability of fuel

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'rf_disaster_type1',true)=="Major logistics bottlenecks or problems")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_disaster_type1" value="Major logistics bottlenecks or problems">Major logistics bottlenecks or problems

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Description of situation on the ground *</h3>

                                                            </div>  

                                                            <div class="marker" id ="ground_error"></div>      

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="row">

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'ground_1',true)=="People Injured or Deceased")?"CHECKED='CHECKED'":""?> class="form-check-input" name="ground_1" value="People Injured or Deceased">People Injured or Deceased

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'ground_1',true)=="Vulnerable Population in need of Resources")?"CHECKED='CHECKED'":""?> class="form-check-input" name="ground_1" value="Vulnerable Population in need of Resource">Vulnerable Population in need of Resources

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'ground_1',true)=="Vulnerable Population in need of Medical Attention")?"CHECKED='CHECKED'":""?> class="form-check-input" name="ground_1" value="Vulnerable Population in need of Medical Attention">Vulnerable Population in need of Medical Attention

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="row">

                                                                <div class="col-12 col-lg-12 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'ground_1',true)=="People Temporarily Evacuated due to repairable damage to dwellings")?"CHECKED='CHECKED'":""?> class="form-check-input" name="ground_1" value="People Temporarily Evacuated due to repairable damage to dwellings">People Temporarily Evacuated due to repairable damage to dwellings

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-12 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'ground_1',true)=="Dwellings have been destroyed or irreparably damaged")?"CHECKED='CHECKED'":""?> class="form-check-input" name="ground_1" value="Dwellings have been destroyed or irreparably damaged">Dwellings have been destroyed or irreparably damaged

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group seletc-form-height">

                                                                <label>Security</label>

                                                                <select class="form-control set-postion security" name="rf_security">

                                                                    <option value="">Select Option</option>

                                                                    <option value="No Issue" <?php echo (get_post_meta($rf_id,'rf_security',true)=="No Issue")?"selected='selected'":""?>>No Issue</option>

                                                                    <option value="Civil Unrest" <?php echo (get_post_meta($rf_id,'rf_security',true)=="Civil Unrest")?"selected='selected'":""?>>Civil Unrest</option>

                                                                    <option value="Other" <?php echo (get_post_meta($rf_id,'rf_security',true)=="Other")?"selected='selected'":""?>>Other</option>

                                                                </select>

                                                                <div class="marker" id ="sec_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group seletc-form-height sheltring">

                                                              <label>Sheltering</label> 

                                                                <!-- <select class="form-control set-postion" name="rf_sheltering">

                                                                    <option value="Survivor sheltering in place" <?php //echo (get_post_meta($rf_id,'rf_sheltering',true)=="Survivor sheltering in place")?"selected='selected'":""?>>Survivor sheltering in place</option>

                                                                    <option value="Volunteer Housing in place" <?php //echo (get_post_meta($rf_id,'rf_sheltering',true)=="Volunteer Housing in place")?"selected='selected'":""?>>Volunteer Housing in place</option>

                                                                </select> -->



                                                                <select  class="select2 js-example-placeholder-multiple-II set-postion" name="rf_sheltering" data-placeholder="Sheltering"  multiple="multiple"  style="width: 100%; box-shadow: unset; color: #000;">

                                                                    <option value="" selected>Select Option</option>

                                                                    <option value="Survivor sheltering in place" <?php echo (get_post_meta($rf_id,'rf_sheltering',true)=="Survivor sheltering in place")?"selected='selected'":""?>>Survivor sheltering in place</option>

                                                                    <option value="Volunteer Housing in place" <?php echo (get_post_meta($rf_id,'rf_sheltering',true)=="Volunteer Housing in place")?"selected='selected'":""?>>Volunteer Housing in place</option>

                                                                </select>



                                                                <div class="marker" id ="shelter_error"></div>



                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group seletc-form-height">

                                                                <label>Utilities</label>

                                                                 <select  class="select2 js-example-placeholder-multiple-123 set-postion utility" name="rf_utilities" data-placeholder="Utilities"  multiple="multiple"  style="width: 100%; box-shadow: unset; color: #000;">

                                                                   <option value="" selected>Select Option</option> 

                                                                    <option value="Gas Leaks" <?php echo (get_post_meta($rf_id,'rf_utilities',true)=="Gas Leaks")?"selected='selected'":""?>>Gas Leaks</option>

                                                                    <option value="Sewage/Biological Hazard" <?php echo (get_post_meta($rf_id,'rf_utilities',true)=="Sewage/Biological Hazard")?"selected='selected'":""?>>Sewage/Biological Hazard</option>

                                                                     <option value="Downed Wires" <?php echo (get_post_meta($rf_id,'rf_utilities',true)=="Downed Wires")?"selected='selected'":""?>>Downed Wires</option>

                                                                      <option value="No Electricity" <?php echo (get_post_meta($rf_id,'rf_utilities',true)=="No Electricity")?"selected='selected'":""?>>No Electricity</option>

                                                                 </select>

                                                                 <div class="marker" id ="uti_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group">

                                                                <label>Recommended airport or other points of entry:</label>

                                                                <input type="text" class="form-control" id="rf_recommended" name="rf_recommended" placeholder="Enter " <?php echo get_post_meta($rf_id,'rf_recommended',true)?>>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group">

                                                                <label>Additional Comments:</label>

                                                                <input type="text" class="form-control" id="rf_comment" name="rf_comment" placeholder="Enter " <?php echo get_post_meta($rf_id,'rf_comment',true)?>>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Publish Form to</h3>

                                                                <div class="marker" id="publish_error">

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="row">

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input onclick="show3();" id ='vin_publish' type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input joined" name="rf_publish">Select From My Joined Group

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

                                                                            <select class="form-control mt-3 border rf_publish" name ="rf_publish">

                                                                                

                                                                                <?php  foreach($myJoinedGroups as $joinedGrpupVal){

                                                                                       $author_id=$joinedGrpupVal->post_author;

                                                                                        if($current_user_id!=$author_id){

                                                                                ?>

                                                                                <option value ="" selected>Select any group </option>

                                                                                   

                                                                                   <option value='<?php echo $joinedGrpupVal->ID?>'> <?php echo $joinedGrpupVal->post_title?></option>

                                                                                <?php }} ?>

                                                                          

                                                                            </select>

                                                                        </div>    

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input onclick="show2();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input  my_group" name="rf_publish">Select From My Group

                                                                        </label>

                                                                    </div>

                                                                    <div id="div44" class="hides">

                                                                    <select class="form-control mt-3 border my_group rf_publish" name ="rf_publish">

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

                                                                        ?>

                                                                    <option value="" selected> Select any group</option>

                                                                        <?php foreach($all_groups as $value){ ?>

                                                                          <option value = "<?php echo $value->ID ?>" ><?php echo $value->post_title ?></option>

                                                                        <?php } ?>

                                                                    </select> 

                                                                </div>

                                                                </div>

                                                               

                                                                

                                                                

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input  onclick="show1();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="all_users")?"CHECKED='CHECKED'":""?> class="form-check-input all_rrn rf_publish" name="rf_publish" value="all_rrn_users">All RRN Users

                                                                        </label>

                                                                        

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                          <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-5">Next</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            </div>

                                            

                                           <div id="step-6" class="main-form-section d-none w-100">

                                                <div>

                                                    <div class="row">

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                            Are you sure to submit form.

                                                          <button  class="btn btn-outline-primary" value="save" name="save" title="Save Draft">Submit</button>

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

    <?php include('common_user_footer.php');?>

</div>







<script type="text/javascript">

    var post_title_val="";

    var rf_org_val ="";

    var rf_contact_person_val = ""; 

    var rf_title_val =""; 

     $(document).ready(function() {

        $('.js-example-placeholder-multiple-II').select2();

         placeholder: "Sheltering"

          $('.js-example-placeholder-multiple-123').select2();

         placeholder: "Utilities"

    });



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



    $("#back-5").click(function(){

        $("#step-1").addClass('d-none');

        $("#step-3").addClass('d-none');

        $("#step-2").addClass('d-none');

        $("#step-4").removeClass('d-none');

        $("#step-5").addClass('d-none');

        $("#step-6").addClass('d-none');



        // for circle color

        $("#bd-4").removeClass('orange-bd');

        $("#red-5").removeClass('circle-red');

        $("#red-4").removeClass('circle-orange');

        $("#red-4").addClass('circle-red');

        

        $("#back-1").addClass('d-none'); 

        $("#back-2").addClass('d-none');

        $("#back-3").addClass('d-none'); 

        $("#back-4").removeClass('d-none');

        $("#back-5").addClass('d-none');

    });

    

    

    



    $("#step-btn-1").click(function(){

         var disName = $('.dis_name').val();

         var disAdress = $('.dis_address').val();

         var country = $('.dis_country').val();

         var state = $('.dis_state').val();

         var city = $('.dis_city').val();

        if(disName ==''){

            $("#post_title_error").text("Please enter name.");

        } 

        

        if(country ==''){

            $("#country_error").text("Please enter Country.");

        }

        

        if(state ==''){

            $("#state_error").text("Please enter state.");

        }

        

        if(city ==''){

            $("#city_error").text("Please enter city.");

        }

        

        if(disAdress ==''){

            $("#dis_address_error").text("Please enter Address.");

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

        

    var disDate = $('.dis_date').val();

    var disTime = $('.dis_time').val();

        if(disDate == ''){

             $("#date_error").text("Please select date.");

        }

        if(disTime ==''){

            $('#time_error').text("Please select time.")

        }

    else {

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

    }

    });

    

    

    $("#step-btn-3").click(function(){

    

      var disOrg = $('.dis_org').val();

      var disTitle = $('.dis_title').val();

      var disPhone = $('.dis_phone').val(); 

      var disAddress2 = $('.con_dis_address').val(); 



    

      

     if(disOrg ==''){

         $('#org_error').text("Please enter organization.");

     }



      if(disTitle ==''){

         $('#tile_error').text("Please enter title name.");

     }



      if(disPhone ==''){

         $('#phone_error').text("Please enter phone number.");

     }

      if(disAddress2 ==''){

         $('#con_dis_address_error').text("Please enter address.");

     }



      



   

    else{  

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

    

            $("#back-4").addClass('d-none');

            $("#back-5").removeClass('d-none');

    });



    

    $("#step-btn-5").click(function(){

        

    var publishFrom = document.getElementsByName('rf_publish');

    var ground_situation = document.getElementsByName('ground_1');

    for (let j of ground_situation) {

        if(j.checked) {

        }

        else {

            $("#ground_error").text("Please select any option.");

        }

    }



    for (let i of publishFrom) {

    if(i.checked) {

                $("#step-6").removeClass('d-none');

                $("#step-1").addClass('d-none');

                $("#step-2").addClass('d-none');

                $("#step-3").addClass('d-none');

                $("#step-4").addClass('d-none');

                $("#step-5").addClass('d-none');

                

                // for circle color

                $("#bd-5").addClass('orange-bd');

                $("#red-6").addClass('circle-red');

                $("#red-5").addClass('circle-orange');

                $("#red-5").removeClass('circle-red');  

    }

    else {

     $("#publish_error").text("Please select any group.");

        }

    }

        



    });



 var rf_id="<?php echo $_GET['rf_id']?>";



    if(rf_id){

        $("#step-2").addClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-3").addClass('d-none');

        $("#step-4").addClass('d-none');

        $("#step-5").addClass('d-none');

        $("#step-6").removeClass('d-none'); 



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

        $("#red-5").addClass('circle-orange');

        

        $("#bd-6").addClass('orange-bd');

        $("#red-6").addClass('circle-red');

        $("#red-6").removeClass('circle-red');

        $("#red-6").addClass('circle-orange');

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

    function show7(){

      document.getElementById('div4').style.display ='none';

    }

    

    function show8(){

      document.getElementById('div4').style.display = 'block';

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

        

        

        post_title_val =  $("#post_title").val();

        if(post_title_val == ""){

            $("#post_title").css("background-color","#0F0");

            $("#post_title").focus();

        }

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

        

        var country_val = $('select[name="country"]').val();

        if(country_val == ""){

            $("#country_val").css("background-color","#0F0");

            $("#country_val").focus();

        }

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

 <script type="text/javascript">

     $(document).ready(function(){

        $('#other_age126').change(function(){

            if($(this).is(':checked')) {

                $('#div15').show();

            } else {

                $('#div15').hide();

            }

        });

    });

 </script>



<?php } ?>