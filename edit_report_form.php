<?php 

   /* Template Name: Edit Disaster Report */

    if ( is_user_logged_in() ) {

    get_header('new'); ?>

?>



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

       // $ownerInfo  = get_userdata($author_id);

        $ownerInfo  = get_userdata($current_user_id);

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

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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

        background: #fff!important;

        box-shadow: 0px 6px 16px #00000012;

    }

    .select2-container .select2-selection--multiple .select2-selection__rendered {

         display: block;

        list-style: none;

        padding: 0;

        background: #fff;

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

                                <h2>Edit  Report</h2>

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

                                          <form method = "POST" action ="" class="row mediadoc_form" enctype="multipart/form-data">

                                                <input type ="hidden" name ="group_id"  id="group_id"  value ="<?php echo get_post_meta($rf_id,'group_id',true)?>">

                                                <input type ="hidden" name ="rf_id"  id="rf_id"  value ="<?php echo $rf_id;?>">

                                                <input type="hidden" name="update_reportsforms" value="update_reportsforms"/>

                                                <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />

                                                <div id="step-1" class="main-form-section w-100">

                                                <div>

                                                    <div class="row ml-2 mr-2">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Disaster Details </h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group">

                                                                <label>Name of the Disaster *</label>

                                                               <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Enter " value="  <?php echo get_post_meta($rf_id,'rf_org',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Location of the Incident</h3>

                                                            </div>        

                                                        </div>

                                                        

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <select class="form-control" name ="rf_country" onchange="getCountries()" id="country">

                                                                    <option value="">Select Country*</option>

                                                                     <?php foreach($allCountry as $country){?>

                                                                      <option value ="<?=$country->name; ?>" 

                                                                       <?=get_post_meta($rf_id,'rf_country',true) == $country->name ? 'selected' : '';?> data-value="<?=$country->id; ?>"><?=$country->name; ?> </option>

                                                                    <?php } ?>

                                                                </select> 

                                                            </div>

                                                        </div>

                                                         <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <!--<label>State *</label>

                                                                <input type="text" class="form-control" id="rf_state" name="rf_state" placeholder="Enter state" value="<?//php echo get_post_meta($rf_id,'rf_state',true)?>" >-->

                                                                <select class="form-control" name ="rf_state" onchange="getCities()" id="state">

                                                                    <option value="">Select State*</option>

                                                                   

                                                                </select>    

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                               <!-- <label>City *</label>

                                                                <input type="text" class="form-control" id="rf_city" name="rf_city" placeholder="Enter city" value="<?//php echo get_post_meta($rf_id,'rf_city',true)?>">-->

                                                                 <select class="form-control" name ="rf_city" id="city">

                                                                    <option value="">Select City*</option>

                                                                </select> 

                                                            </div>

                                                        </div>

                                                       

                                                        <!--<div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Country *</label>

                                                                <input type="text" class="form-control" id="rf_country" name="rf_country" placeholder="Enter country" value="<?//php echo get_post_meta($rf_id,'rf_country',true)?>">

                                                            </div>

                                                        </div>-->

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Street Address *</label>

                                                                <input type="text" class="form-control" id="incident_location" name="incident_location" placeholder="Street Address" value="<?php echo get_post_meta($rf_id,'incident_location',true)?>">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                            <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-1">Next</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div id="step-2" class="main-form-section d-none w-100">

                                                <div class="row ml-2 mr-2">

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

                                                    </div> -->

                                                    <div class="col-lg-12 mb-3">

                                                        <div class="form-title">

                                                            <h3>Date and Time</h3>

                                                        </div>        

                                                    </div>

                                                    <div class="col-lg-4 mb-3">

                                                        <div class="form-group">

                                                            <label>Select Date</label>

                                                            <input type="date" class="form-control" id="rf_date" name="rf_date" placeholder="Enter date" value="<?php echo get_post_meta($rf_id,'rf_date',true)?>">

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-4 mb-3">

                                                        <div class="form-group">

                                                            <label>Time</label>

                                                            <input type="time" class="form-control" id="rf_time" name="rf_time" placeholder="Select time" value="<?php echo get_post_meta($rf_id,'rf_time',true)?>">

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-12 d-flex justify-content-center">

                                                        <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-2">Next</a>

                                                    </div>

                                                </div>

                                            </div>

                                            <div id="step-3" class="main-form-section d-none w-100">

                                                <div>

                                                    <div class="row ml-2 mr-2">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Contact Information</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Name of Organization *</label>

                                                                <input type="text" class="form-control" id="rf_org" name="rf_org" placeholder="Enter " value="<?php echo get_post_meta($rf_id,'rf_org',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Contact Person *</label>

                                                                <input type="text" class="form-control" id="rf_contact_person" name="rf_contact_person" placeholder="Enter Name" value="<?php echo get_post_meta($rf_id,'rf_contact_person',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Title *</label>

                                                                <input type="text" class="form-control" id="rf_title" name="rf_title" placeholder="Enter title" value="<?php echo get_post_meta($rf_id,'rf_title',true)?>">

                                                            </div>

                                                        </div>



                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Email Address *</label>

                                                                <input type="text" class="form-control" id="rf_email" name="rf_email" placeholder="Enter email" value="<?php echo get_post_meta($rf_id,'rf_email',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Phone *</label>

                                                                <input type="text" class="form-control" id="rf_phone" name="rf_phone" placeholder="Enter phone no." value="<?php echo get_post_meta($rf_id,'rf_phone',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Address *</label>

                                                                <input type="text" class="form-control" id="rf_address" name="rf_address" placeholder="Enter Address" value="<?php echo get_post_meta($rf_id,'rf_address',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <select class="form-control" name ="rf_country_ifo" onchange="getCountries2()" id="countries">

                                                                    <option value="">Select Country*</option>

                                                                    <?php foreach($allCountry as $country){?>

                                                                      <option value ="<?=$country->name; ?>" <?=get_post_meta($rf_id,'rf_country_ifo',true) == $country->name ? 'selected' : '';?> data-value="<?=$country->id; ?>"><?=$country->name; ?></option>

                                                                    <?php } ?>

                                                                </select> 

                                                            </div>

                                                        </div>

                                                          <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                               <select class="form-control" name ="rf_state_ifo" onchange="getCities2()" id="states">

                                                                    <option value="">Select State*</option>

                                                                   

                                                                </select> 

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <!--<label>City *</label>

                                                                <input type="text" class="form-control" id="rf_city2" name="rf_city2" placeholder="Enter City" value="<?//php echo get_post_meta($rf_id,'rf_city2',true)?>">-->

                                                                <select class="form-control" name ="rf_city_info" id="cities">

                                                                    <option value="">Select City*</option>

                                                                    

                                                                </select>

                                                            </div>

                                                        </div>

                                                      

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Zip Code *</label>

                                                                <input type="text" class="form-control" id="rf_zipcode2" name="rf_zipcode2" placeholder="Enter " value="<?php echo get_post_meta($rf_id,'rf_zipcode2',true)?>">

                                                            </div>
A Group I am a Member In
                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Website</label>

                                                                <input type="text" class="form-control" id="rf_website" name="rf_website" placeholder="Enter Website  Url " value="<?php echo get_post_meta($rf_id,'rf_website',true)?>">

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

                                                                <input type="text" class="form-control" id="_rf_org" name="_rf_org" placeholder="Enter " value="<?php echo get_post_meta($rf_id,'_rf_org',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Contact Person</label>

                                                                <input type="text" class="form-control" id="rf_contact_person2" name="rf_contact_person2" placeholder="Enter " value="<?php echo get_post_meta($rf_id,'rf_contact_person2',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Title</label>

                                                                <input type="text" class="form-control" id="rf_name_title" name="rf_name_title" placeholder="Enter title " value="<?php echo get_post_meta($rf_id,'rf_name_title',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Email Address</label>

                                                                <input type="text" class="form-control" id="rf_email2" name="rf_email2" placeholder="Enter email" value="<?php echo get_post_meta($rf_id,'rf_email2',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Phone</label>

                                                                <input type="text" class="form-control" id="rf_phone2" name="rf_phone2" placeholder="Enter " value="<?php echo get_post_meta($rf_id,'rf_phone2',true)?>">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                            <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-3">Next</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div id="step-4" class="main-form-section d-none w-100">

                                                <div>

                                                    <div class="row ml-2 mr-2">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Disaster Type</h3>

                                                            </div>        

                                                        </div>

                                                        

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Select all that Apply</h3>

                                                                <?//php echo get_post_meta($rf_id,'rf_apply',true) ?>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="row">

                                                                

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">



                                                                        <label class="form-check-label">

                                                                            <?php 

                                                                                $disastyer_type =  get_post_meta($rf_id,'rf_apply',true); 

                                                                                $all_disasters = explode (",",$disastyer_type);  

                                                                            ?>

                                                                             <input type="checkbox" <?php if (in_array('Hurricane',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" value="Hurricane" name="rf_apply[]">Hurricane



                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php if (in_array('Flooding',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" value="Flooding" name="rf_apply[]">Flooding



                                                                            

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php if (in_array('Earthquake',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Earthquake">Earthquake

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php if (in_array('Landslide',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Landslide"> Landslide

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php if (in_array('Severe Hea',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Severe Hea">Severe Heat

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php if (in_array('Snowstorm',$all_disasters)) { echo 'checked'; } ?>class="form-check-input" name="rf_apply[]" value="Snowstorm">Snowstorm

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php if (in_array('Tornado',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Tornado">Tornado

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-3 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php if (in_array('Fire Emergency',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Fire Emergency">Fire Emergency

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

                                                                            <input type="checkbox" <?php if (in_array('Hazardous Material/Spill/ Chemical Release',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Hazardous Material/Spill/ Chemical Release">Hazardous Material/Spill/ Chemical Release

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php if (in_array('Medical Emergency/Mass Casualty',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Medical Emergency/Mass Casualty">Medical Emergency/Mass Casualty

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                           <input type="checkbox" <?php if (in_array('Missing Persons',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Missing Persons">Missing Persons

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                           <input type="checkbox" <?php if (in_array('Utility Outage',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Utility Outage">Utility Outage

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php if (in_array('Structural Disaster',$all_disasters)) { echo 'checked'; } ?>  class="form-check-input" name="rf_apply[]" value="Structural Disaster">Structural Disaster

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

                                                                            <input type="checkbox" <?php if (in_array('Collapse',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Collapse">Collapse

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                           <input type="checkbox" <?php if (in_array('Weakened Structures',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Weakened Structures">Weakened Structures

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php if (in_array('Workplace Violence or Threat of Violence',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Workplace Violence or Threat of Violence">Workplace Violence or Threat of Violence

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="checkbox" <?php if (in_array('Epidemic / Pandemic Outbreak',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Epidemic / Pandemic Outbreak">Epidemic / Pandemic Outbreak

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-6 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                           <input type="checkbox" <?php if (in_array('Terrorist Attack',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Terrorist Attack">Terrorist Attack

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

                                                                            <input type="checkbox" onclick="show9();" <?php if (in_array('Nuclear Power Disasters',$all_disasters)) { echo 'checked'; } ?> class="form-check-input" name="rf_apply[]" value="Nuclear Power Disasters">Nuclear Power Disasters

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" onclick="show10();" <?php echo (get_post_meta($rf_id,'rf_apply_other',true)=="Other")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_apply_other" value="Other">Other

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group hides" id="div5">

                                                                <input type="text" class="form-control text-info" id="rf_apply_other" name="rf_apply_other" placeholder="Enter Comments">

                                                            </div>

                                                        </div>

                                                    </div>



                                                    <div class="row">

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                            <a href="javascript:void(0);" class="btn btn-primary" title="Next" id="step-btn-4">Next</a>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div id="step-5" class="main-form-section d-none w-100">

                                                <div>

                                                    <div class="row ml-2 mr-2">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Disaster Type</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-12 mb-4">

                                                            <div class="row">

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input type="radio" <?php echo (get_post_meta($rf_id,'rf_disaster_type1',true)=="Tunnels")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_disaster_type1" value="Tunnels">Tunnels

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

                                                                <select class="form-control set-postion" name="rf_security">

                                                                    <option value="No Issue" <?php echo (get_post_meta($rf_id,'rf_security',true)=="No Issue")?"selected='selected'":""?>>No Issue</option>

                                                                    <option value="Civil Unrest" <?php echo (get_post_meta($rf_id,'rf_security',true)=="Civil Unrest")?"selected='selected'":""?>>Civil Unrest</option>

                                                                    <option value="Other" <?php echo (get_post_meta($rf_id,'rf_security',true)=="Other")?"selected='selected'":""?>>Other</option>

                                                                </select>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class=" seletc-form-height">

                                                                 <label>Sheltering</label>

                                                                <!-- <label>Sheltering</label> -->

                                                                 <select  class="select2 js-example-placeholder-multiple-II set-postion" name="rf_sheltering" data-placeholder="Select Sheltering"  multiple="multiple"  style="width: 100%; box-shadow: unset; color: #000;">

                                                                    <option value="Survivor sheltering in place" <?php echo (get_post_meta($rf_id,'rf_sheltering',true)=="Survivor sheltering in place")?"selected='selected'":""?>>Survivor sheltering in place</option>

                                                                    <option value="Volunteer Housing in place" <?php echo (get_post_meta($rf_id,'rf_sheltering',true)=="Volunteer Housing in place")?"selected='selected'":""?>>Volunteer Housing in place</option>

                                                                </select>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class=" seletc-form-height">

                                                                 <label>Utilities</label>

                                                                <select  class="select2 js-example-placeholder-multiple-123 set-postion" name="rf_utilities" data-placeholder=" Select Utilities"  multiple="multiple"  style="width: 100%; box-shadow: unset; color: #000;">

                                                                 <option value="Gas Leaks" <?php echo (get_post_meta($rf_id,'rf_utilities',true)=="Gas Leaks")?"selected='selected'":""?>>Gas Leaks</option>

                                                                    <option value="Sewage/Biological Hazard" <?php echo (get_post_meta($rf_id,'rf_utilities',true)=="Sewage/Biological Hazard")?"selected='selected'":""?>>Sewage/Biological Hazard</option>



                                                                     <option value="Downed Wires" <?php echo (get_post_meta($rf_id,'rf_utilities',true)=="Downed Wires")?"selected='selected'":""?>>Downed Wires</option>



                                                                      <option value="No Electricity" <?php echo (get_post_meta($rf_id,'rf_utilities',true)=="No Electricity")?"selected='selected'":""?>>No Electricity</option>

                                                                </select>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group">

                                                            <label>Recommended airport or other points of entry:</label>

                                                                <input type="text" class="form-control" id="rf_recommended" name="rf_recommended" placeholder="Enter " value="<?php echo get_post_meta($rf_id,'rf_recommended',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group">

                                                                <label>Additional Comments:</label>

                                                                <input type="text" class="form-control" id="rf_comment" name="rf_comment" placeholder="Enter " value="<?php echo get_post_meta($rf_id,'rf_comment',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Publish Form to</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="row">

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                            <input onclick="show3();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Groups I Created")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish">Select From My Joined Group

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

                                                              <!--   <div class="col-12 col-lg-4 mb-3">

                                                                    <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">

                                                                        <input onclick="show1();" type="radio" <?//php echo (get_post_meta($rf_id,'rf_publish',true)=="keep_private")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish" value="keep_private">Me Only / Keep it Private

                                                                        </label>

                                                                    </div>

                                                                </div> -->

                                                                <div class="col-12 col-lg-4 mb-3">

                                                                   <div class="form-check d-flex align-items-center">

                                                                        <label class="form-check-label">



                                                                            <?php  $groupId= get_post_meta($rf_id,'rf_publish');

                                                                

                                                                                if(is_int($groupId)){ ?>

                                                                                 <input onclick="show2();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Groups I Created")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish">Groups I Created

                                                                                <?php } else { ?>

                                                                                 <input onclick="show2();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Groups I Created")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish" checked>Groups I Created

                                                                                <?php } ?>

                                                                            

                                                                        </label>

                                                                    </div>



                                                                    <div id="div44" class="hides">

                                                                    <select class="form-control mt-3 border" name ="rf_publish">

                                                                        <?php
                                                                              $current_user_id = get_current_user_id();  


                                                                            $args = array(

                                                                                    'numberposts'   => -1,

                                                                                    'post_type'     => 'groups',

                                                                                    'post_status'   => 'publish',

                                                                                    'author'        => $current_user_id,

                                                                                        'meta_query'    => array(
                                                                                                    'relation' => 'AND',
                                                                                                    array(
                                                                                                        'key'     => 'group_type',
                                                                                                        'value'   => 'closed',
                                                                                                        'compare' => '!='
                                                                                                    )
                                                                                                )
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

                                                                            <input  onclick="show1();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="all_rrn_users")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish" value="all_rrn_users">All RRN Users

                                                                        </label>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-lg-12 d-flex justify-content-center">

                                                             <button class="btn btn-outline-primary" value="save" name="save" title="Save Draft">Next</button>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                           <div id="step-6" class="main-form-section d-none w-100">

                                                <div>

                                                    <div class="row">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="bg-ligt-color">

                                                                <div class="form-title">

                                                                    <h3>Disaster Details</h3>

                                                                </div>            

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Name of the Disaster</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($post_title)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Street Address</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'incident_location',true)?> </p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Country</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_country',true)?> </p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>State</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_state',true)?> </p>

                                                                    </div>    

                                                                </div>

                                                                 <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>City</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_city',true)?> </p>

                                                                    </div>    

                                                                </div>

                                                                 

                                                                 <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Zip Code</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_zipcode2',true)?> </p>

                                                                    </div>    

                                                                </div>

                                                            </div>

                                                        </div>

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

                                                                        <h3>Name of Organization</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_org',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Contact Person</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_contact_person',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                 <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Email Address</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_email',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Address</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_address',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                  <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Country</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_country_ifo',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>State</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_state_ifo',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                  <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>City</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_city_info',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Title</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_title',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Phone</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_phone',true)?></p>

                                                                    </div>    

                                                                </div>

                                                              

                                                                 <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Zip code</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_zipcode2',true)?></p>

                                                                    </div>    

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="bg-ligt-color">

                                                                <div class="form-title">

                                                                    <h3>Official Point Of Contact At The Site If Different From Above</h3>

                                                                </div>            

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Disaster</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_apply',true)?></p>

                                                                    </div>    

                                                                </div>

                                                               <!-- <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Disaster Type</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?//php echo get_post_meta($rf_id,'rf_disaster_type1',true)?></p>

                                                                    </div>   

                                                                </div> -->

                                                            </div>

                                                        </div>



                                                         <div class="col-lg-12 mb-3">

                                                            <div class="bg-ligt-color">

                                                                <div class="form-title">

                                                                    <h3>Logistics and transportation situation</h3>

                                                                </div>            

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Transportation</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_disaster_type1',true)?></p>

                                                                    </div>    

                                                                </div>

                                                            </div>

                                                        </div>

                                                      

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="bg-ligt-color">

                                                                <div class="form-title">

                                                                    <h3>Description of situation on the ground</h3>

                                                                </div>            

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Security</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_security',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Sheltering</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                       <p><?php echo get_post_meta($rf_id,'rf_sheltering',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Utilities</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_utilities',true)?></p>

                                                                    </div>    

                                                                </div>

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Recommended airport or other points of entry</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_recommended',true)?></p>

                                                                    </div>    

                                                                </div> 

                                                            </div>

                                                        </div>

                                                         <div class="col-lg-12 mb-3">

                                                            <div class="bg-ligt-color">

                                                                <div class="form-title">

                                                                    <h3>Additional Comments</h3>

                                                                </div>            

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="d-flex">

                                                                <div class="box-area">

                                                                    <div class="title">

                                                                        <h3>Comment</h3>

                                                                    </div>

                                                                    <div class="content-para">

                                                                        <p><?php echo get_post_meta($rf_id,'rf_comment',true)?></p>

                                                                    </div>    

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">

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







<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>



<script type="text/javascript">

    $(function() {

        window.setTimeout(getCountries(),1000);

        window.setTimeout(function(){

            $('#state').val('<?=get_post_meta($rf_id,'rf_state',true)?>');

        },1500);

        window.setTimeout(getCities(),1000);

        window.setTimeout(function(){

            $('#city').val('<?=get_post_meta($rf_id,'rf_city',true)?>');

        },1500);

         window.setTimeout(getCountries2(),1000);

        window.setTimeout(function(){

            $('#states').val('<?=get_post_meta($rf_id,'rf_state_ifo',true)?>');

        },1500);

        window.setTimeout(getCities2(),1200);

        window.setTimeout(function(){

            $('#cities').val('<?=get_post_meta($rf_id,'rf_city_info',true)?>');

        },1700);

    });

     $(document).ready(function() {

        $('.js-example-placeholder-multiple-II').select2();

        placeholder: "Sheltering"

        $('.js-example-placeholder-multiple-123').select2();

        placeholder: "Sheltering"

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



        $("#back-4").addClass('d-none');

        $("#back-5").removeClass('d-none');

    });

    $("#step-btn-5").click(function(){

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





<!-- <script>

    

    function show1(){

      document.getElementById('div1').style.display ='none';

    }

    

    function show2(){

      document.getElementById('div1').style.display = 'block';

    }

 </script> -->



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

    function show11(){

      document.getElementById('div6').style.display ='none';

    }

    

    function show12(){

      document.getElementById('div6').style.display = 'block';

    }

 </script>

<script> 

    function show9(){

      document.getElementById('div5').style.display ='none';

    }

    

    function show10(){

      document.getElementById('div5').style.display = 'block';

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

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<?php get_footer('new'); } ?>