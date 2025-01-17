 <?php 

   /* Template Name: Create After Action Report */

   

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

    $allStates = $wpdb->get_results("SELECT * FROM `wp_states`");

  //  echo $wpdb->last_query;

 // print_r($allStates);

    

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

                                <a href="" onclick="history.go(-1);" id="back-1" class="btn btn-outline-primary" title="Back">Back</a>

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

                                                    Contact information

                                                </div>   

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"  id="bd-2">

                                                    <div class="circle "  id="red-2"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                    Report Details

                                                </div>   

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"   id="bd-3">

                                                    <div class="circle" id="red-3"></div>

                                                </div> 

                                                <div class="circle-content text-center pt-lg-4 pt-3">

                                                    Additional information

                                                </div>    

                                            </div>

                                            <div class="main-box w-100">

                                                 <div class="report-process text-center d-flex justify-content-center"  id="bd-4">

                                                    <div class="circle" id="red-4"></div>

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

                                        <form method = "POST" action ="" class="row mediadoc_form" enctype="multipart/form-data" id = "afterActionform">

                                                <input type ="hidden" name ="group_id"  id="group_id"  value ="<?php echo $gid;?>">

                                                <input type ="hidden" name ="rf_id"  id="rf_id"  value ="<?php echo $rf_id;?>">

                                                <input type ="hidden" name ="report_id"  id="report_id"  value ="<?php echo "AAR-$randomnumber";?>">

                                                <input type="hidden" name="after_ActionReport" value="reportsforms"/>

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

                                                            <div class="col-lg-4 mb-3 ">

                                                                <div class="form-group">

                                                                    <label>Name of Disaster *</label>

                                                                    <input type="text" class="form-control cr_na"  name="post_title" placeholder="Enter " required>

                                                                </div>

                                                                <div class ="marker" id ="cr_na_error"></div>

                                                            </div>

                                                           <!--  <div class="col-lg-12 mb-3">

                                                                <div class="form-title">

                                                                    <h3>Location of the Incident</h3>

                                                                </div>        

                                                            </div> -->

                                                            <div class="col-lg-4 mb-3 ">

                                                                <div class="form-group">

                                                                    <label>Date Submitted *</label>

                                                                    <input type="date" class="form-control cr_da" name="action_date" placeholder="Enter here" required>

                                                                </div>

                                                                <div class ="marker" id ="cr_da_error"></div>

                                                            </div>

                                                            <div class="col-lg-4 mb-3 ">

                                                                <div class="form-group">

                                                                    <label>Time Submitted *</label>

                                                                    <input type="time" class="form-control cr_ti"  name="action_time" placeholder="Enter here" required>

                                                                </div>

                                                                <div class ="marker" id ="cr_ti_error"></div>

                                                            </div>

                                                            <div class="col-lg-4 mb-3 ">

                                                                <div class="form-group">

                                                                    <label>Name of Organization *</label>

                                                                    <input type="text" class="form-control cr_or" name="action_org_name" placeholder="Enter here">

                                                                </div>

                                                                <div class ="marker" id ="cr_or_error"></div>

                                                            </div>

                                                            <div class="col-lg-4 mb-3 ">

                                                                <div class="form-group">

                                                                    <label>Submitted By *</label>

                                                                    <input type="text" class="form-control cr_su"  name="action_submit_by" placeholder="Enter here">

                                                                </div>

                                                                <div class ="marker" id ="cr_su_error"></div>

                                                            </div>

                                                            <div class="col-lg-4 mb-3 ">

                                                                <div class="form-group">

                                                                    <label>Contact phone *</label>

                                                                    <input type="number" id="phone" class="form-control cr_con" name="action_phone" placeholder="Enter here">

                                                                </div>

                                                                <div class ="marker" id ="cr_con_error"></div>

                                                            </div>

                                                             <div class="col-lg-4 mb-3">

                                                                <div class="form-group">

                                                                    <label>Contact E-mail *</label>

                                                                    <input type="email" class="form-control cr_e" name="action_email" placeholder="Enter here">

                                                                </div>

                                                                <div class ="marker" id ="cr_e_error"></div>

                                                            </div>

                                                             <div class="col-lg-4 mb-3">

                                                                <div class="form-group">

                                                                    <label>Supervisor Name *</label>

                                                                    <input type="text" class="form-control cr_sup"  name="action_supervisor" placeholder="Enter here">

                                                                </div>

                                                                <div class ="marker" id ="cr_sup_error"></div>

                                                            </div>

                                                        </div>

                                                        <div class="row">

                                                             <!-- <div class="col-lg-6 d-flex justify-content-end">

                                                                <button class="btn btn-outline-primary" title="Save Draft">Save Draft</button>

                                                            </div> -->

                                                            <div class="col-lg-12 d-flex justify-content-center">

                                                                <a href="javascript:void(0);" class="btn btn-primary " title="Next" id="step-btn-1">Next</a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div id="step-2" class="main-form-section d-none w-100">

                                                    <div class="row">

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Report Details</h3>

                                                            </div>        

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Shift Reported Covers *</label>

                                                                <input type="text" class="form-control cr_shi" id="shift_reported" name="shift_reported" placeholder="Enter here " value="">

                                                            </div>

                                                             <div class ="marker" id ="cr_shi_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Start Date *</label>

                                                                <input type="date" class="form-control cr_st" id="action_start_date" name="action_start_date" placeholder="Enter here " value="">

                                                            </div>

                                                             <div class ="marker" id ="cr_st_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>End Date *</label>

                                                                <input type="date" class="form-control cr_en" id="action_end_date" name="action_end_date" placeholder="Enter here " value="">

                                                            </div>

                                                             <div class ="marker" id ="cr_en_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Time Submitted *</label>

                                                                <input type="time" class="form-control cr_time" id="action_submit_time" name="action_submit_time" placeholder="Enter here " value="">

                                                            </div>

                                                             <div class ="marker" id ="cr_time_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Assignment Title *</label>

                                                                <input type="text" class="form-control cr_assi" id="assignment_title" name="assignment_title" placeholder="Enter here " value="">

                                                            </div>

                                                             <div class ="marker" id ="cr_assi_error"></div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Address where work was conducted</label>

                                                                <input type="text" class="form-control cr_add" id="work_address" name="work_address" placeholder="Enter here " value="">

                                                            </div>

                                                             <div class ="marker" id ="cr_add_error"></div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-group">

                                                                <label>Team Members *</label>

                                                                <input type="text" class="form-control cr_te" id="team_members" name="team_members" placeholder="Enter here " value="">

                                                            </div>

                                                             <div class ="marker" id ="cr_te_error"></div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Tasks</h3>

                                                            </div>        

                                                        </div>





                                                        <div class="col-lg-6 mb-5">

                                                            <div class="form-group">

                                                                <label>1 *</label>

                                                                <textarea type="text" rows="4" class="form-control ta_1"  name="task1" placeholder="Enter here " value=""></textarea>

                                                            <div class ="marker" id ="ta_1_error"></div>

                                                            </div>

                                                             

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group seletc-form-height">

                                                                <label>Task Status</label>

                                                                <select class="form-control set-postion af_ta" name="task_status1">

                                                                    <option value="" selected> Select any option</option>

                                                                   <option value="Completed">Completed</option>

                                                                    <option value="Incomplete">Incomplete</option>

                                                                    <option value="Need Attention">Need Attention</option>

                                                                </select>

                                                            </div>

                                                            <div class ="marker" id ="af_ta_error"></div>

                                                        </div>

                                                        <div class="col-lg-6 mb-5">

                                                            <div class="form-group">

                                                                <label>2 *</label>

                                                                <textarea type="text" rows="4" class="form-control ta_2" id="task2" name="task2" placeholder="Enter here " value=""></textarea>

                                                            <div class ="marker" id ="ta_2_error"></div>

                                                            </div>

                                                             

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group seletc-form-height">

                                                                <label>Task Status</label>

                                                                <select class="form-control set-postion af_st" name="task_status2">

                                                                     <option value="" selected> Select any option</option>

                                                                    <option value="Completed">Completed</option>

                                                                    <option value="Incomplete">Incomplete</option>

                                                                    <option value="Need Attention">Need Attention</option>

                                                                </select>

                                                            </div>

                                                            <div class ="marker" id ="af_st_error"></div>

                                                        </div>

                                                        

                                                        <div class="col-lg-6 mb-5">

                                                            <div class="form-group">

                                                                <label>3 *</label>

                                                                <textarea type="text" rows="4" class="form-control ta_3" id="task3" name="task3" placeholder="Enter here " value=""></textarea>

                                                            <div class ="marker" id ="ta_3_error"></div>

                                                            </div>

                                                             

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group seletc-form-height">

                                                                <label>Task Status</label>

                                                                <select class="form-control set-postion ta_st" name="task_status3">

                                                                    <option value="" selected> Select any option</option>

                                                                    <option value="Completed">Completed</option>

                                                                    <option value="Incomplete">Incomplete</option>

                                                                    <option value="Need Attention">Need Attention</option>

                                                                </select>

                                                            </div>

                                                            <div class ="marker" id ="ta_st_error"></div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>What worked *</h3>

                                                            </div>        

                                                        </div>

                                                        

                                                        <div class="col-lg-12 mb-3 ">

                                                            <div class="form-group">

                                                                <label>1 *</label>

                                                                <textarea type="text" rows="4" class="form-control wh_1"  name="what_worked1" placeholder="Enter here " value=""></textarea>

                                                            <div class ="marker" id ="wh_1_error"></div>

                                                            </div>

                                                             

                                                        </div>

                                                         <div class="col-lg-12 mb-3 ">

                                                            <div class="form-group">

                                                                <label>2 *</label>

                                                                <textarea type="text" rows="4" class="form-control wh_2"  name="what_worked2" placeholder="Enter here " value=""></textarea>

                                                            <div class ="marker" id ="wh_2_error"></div>

                                                            </div>

                                                             

                                                        </div>

                                                         <div class="col-lg-12 mb-3 ">

                                                            <div class="form-group">

                                                                <label>3 *</label>

                                                                <textarea type="text" rows="4" class="form-control wh_3" id="what_worked3" name="what_worked3" placeholder="Enter here " value=""></textarea>

                                                            <div class ="marker" id ="wh_3_error"></div>

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

                                                            <div class="col-lg-12 mb-3">

                                                                <div class="form-title">

                                                                    <h3>What needs improvement *</h3>

                                                                </div>        

                                                            </div>

                                                            <div class="col-lg-12 mb-5">

                                                                <div class="form-group">

                                                                    <label>1 *</label>

                                                                    <textarea type="text" rows="4" class="form-control ne_1" id="improve1" name="improve1" placeholder="Enter here " value=""></textarea>

                                                                 <div class ="marker" id ="ne_1_error"></div>

                                                                </div>

                                                                 

                                                            </div>

                                                            <div class="col-lg-12 mb-5">

                                                                <div class="form-group">

                                                                    <label>2 *</label>

                                                                    <textarea type="text" rows="4" class="form-control ne_2"  name="improve2" placeholder="Enter here " value=""></textarea>

                                                                <div class ="marker" id ="ne_2_error"></div>

                                                                </div>

                                                                  

                                                            </div>

                                                            <div class="col-lg-12 mb-5">

                                                                <div class="form-group">

                                                                    <label>3 *</label>

                                                                    <textarea type="text" rows="4" class="form-control ne_3"  name="improve3" placeholder="Enter here " value=""></textarea>

                                                                <div class ="marker" id ="ne_3_error"></div>

                                                                </div>

                                                                 

                                                            </div>

                                                            <div class="col-lg-12 mb-3">

                                                                <div class="form-title">

                                                                    <h3>Follow-up actions*</h3>

                                                                </div>        

                                                            </div>

                                                            <div class="col-lg-6 mb-5">

                                                                <div class="form-group">

                                                                    <label>1 *</label>

                                                                    <textarea type="text" rows="4" class="form-control fo_1" name="follow_up_action1" placeholder="Enter here " value=""></textarea>

                                                                <div class ="marker" id ="fo_1_error"></div>

                                                                </div>

                                                                  

                                                            </div>

                                                            

                                                            <div class="col-lg-6 mb-3">

                                                                <div class="form-group seletc-form-height">

                                                                    <label>Action will be taken by *</label>

                                                                    <select class="form-control set-postion ta_be" name="taken_by1">

                                                                         <option value="" selected> Select any option</option>

                                                                        <option value="My team will complete this action">My team will complete this action</option>

                                                                        <option value="Another team needs to complete this action">Another team needs to complete this action</option>

                                                                    </select>

                                                                </div>

                                                                 <div class ="marker" id ="ta_be_error"></div>

                                                            </div>

                                                            <div class="col-lg-6 mb-5">

                                                                <div class="form-group">

                                                                    <label>2 *</label>

                                                                    <textarea type="text" rows="4" class="form-control fo_2"  name="follow_up_action2" placeholder="Enter here " value=""></textarea>

                                                                <div class ="marker" id ="fo_2_error"></div>

                                                                </div>

                                                                  

                                                            </div>

                                                            <div class="col-lg-6 mb-3">

                                                                <div class="form-group seletc-form-height">

                                                                    <label>Action will be taken by *</label>

                                                                    <select class="form-control set-postion at_wi" name="taken_by2">

                                                                        <option value="" selected> Select any option</option>

                                                                         <option value="My team will complete this action">My team will complete this action</option>

                                                                        <option value="Another team needs to complete this action">Another team needs to complete this action</option>

                                                                    </select>

                                                                </div>

                                                                 <div class ="marker" id ="at_wi_error"></div>

                                                            </div>

                                                            <div class="col-lg-6 mb-5">

                                                                <div class="form-group">

                                                                    <label>3 *</label>

                                                                    <textarea type="text" rows="4" class="form-control fo_3" id="follow_up_action3" name="follow_up_action3" placeholder="Enter here " value=""></textarea>

                                                                <div class ="marker" id ="fo_3_error"></div>

                                                                </div>

                                                                

                                                            </div>

                                                            <div class="col-lg-6 mb-3">

                                                                <div class="form-group seletc-form-height">

                                                                    <label>Action will be taken by *</label>

                                                                    <select class="form-control set-postion ac_ta" name="taken_by3">

                                                                        <option value="" selected> Select any option</option>

                                                                         <option value="My team will complete this action">My team will complete this action</option>

                                                                        <option value="Another team needs to complete this action">Another team needs to complete this action</option>

                                                                    </select>

                                                                </div>

                                                                 <div class ="marker" id ="ac_ta_error"></div>

                                                            </div>

                                                            <div class="col-lg-12 mb-5">

                                                                <div class="form-group">

                                                                    <label>Supplies needed to complete the work *</label>

                                                                    <textarea type="text" rows="4" class="form-control su_nee"  name="supplies_needed" placeholder="Enter here " value=""></textarea>

                                                                </div>

                                                                <div class ="marker" id ="su_nee_error"></div>

                                                            </div>

                                                            <div class="col-lg-12 mb-5">

                                                                <div class="form-group">

                                                                    <label>Additional Information</label>

                                                                    <textarea type="text" rows="4" class="form-control add_in" name="add_info" placeholder="Enter here " value=""></textarea>

                                                                <div class ="marker" id ="add_in_error"></div>

                                                                </div>

                                                                

                                                            </div>

                                                              <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Publish Form to</h3>

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

                                                                            <select class="form-control mt-3 border"  id="rf_publish_select_from_my_joined_group"  name ="rf_publish">

                                                                                <option>--Select any group--</option>

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

                                                            Are you sure want to submit.

                                                            <div class="col-lg-6 d-flex justify-content-start">

                                                               <button class="btn btn-outline-primary" value="finish" name="finish" title="Save & Publish">Submit</button>

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

         var crNa = $('.cr_na').val();

         var crDa = $('.cr_da').val();

         var crTi = $('.cr_ti').val();

         var crOr = $('.cr_or').val();

         var crSu = $('.cr_su').val();

         var crCon = $('.cr_con').val();

         var crE = $('.cr_e').val();

         var crSup = $('.cr_sup').val();





         if(crNa ==''){

            $("#cr_na_error").text("Please enter name.");

            

        }

        if(crDa ==''){

            $("#cr_da_error").text("Please enter date.");

            

        }

        if(crTi ==''){

            $("#cr_ti_error").text("Please enter time.");

            

        }

        if(crOr ==''){

            $("#cr_or_error").text("Please enter organization.");

            

        }

        if(crSu ==''){

            $("#cr_su_error").text("Please enter submitted information.");

            

        }

        if(crCon ==''){

            $("#cr_con_error").text("Please enter contact no.");

            

        }

        if(crE ==''){

            $("#cr_e_error").text("Please enter email id.");

            

        }

        if(crSup ==''){

            $("#cr_sup_error").text("Please enter supervisor name.");

            

        }

    else{

        $("#step-2").removeClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-3").addClass('d-none');

        $("#step-4").addClass('d-none');

       

        

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

        var crShi = $('.cr_shi').val();

        var crSt = $('.cr_st').val();

        var crEn = $('.cr_en').val();

        var crTime = $('.cr_time').val();

        var crAssi = $('.cr_assi').val();

        var crAdd = $('.cr_add').val();

        var crTe = $('.cr_te').val();

        var ta1 = $('.ta_1').val();

        var ta2 = $('.ta_2').val();

        var ta3 = $('.ta_3').val();

        var wh1 = $('.wh_1').val();

        var wh2 = $('.wh_2').val();

        var wh3 = $('.wh_3').val();

        var afTa = $('.af_ta').val();

        var afSt = $('.af_st').val();

        var taSt = $('.ta_st').val();





        if(crShi ==''){

            $("#cr_shi_error").text("Please enter shift reported.");

            

        }

        if(crSt ==''){

            $("#cr_st_error").text("Please enter start date.");

            

        }

        if(crEn ==''){

            $("#cr_en_error").text("Please enter end date.");

            

        }

        if(crTime ==''){

            $("#cr_time_error").text("Please enter time.");

            

        }

         if(crAssi ==''){

            $("#cr_assi_error").text("Please enter title.");

            

        }

         if(crAdd ==''){

            $("#cr_add_error").text("Please enter address.");

            

        }

         if(crTe ==''){

            $("#cr_te_error").text("Please enter team members.");

            

        }



         if(ta1 ==''){

            $("#ta_1_error").text("Please enter task 1.");

            

        }

        if(ta2 ==''){

            $("#ta_2_error").text("Please enter task 2.");

            

        }

        if(ta3 ==''){

            $("#ta_3_error").text("Please enter task 3.");

            

        }

        if(wh1 ==''){

            $("#wh_1_error").text("Please enter work 1.");

            

        }

        if(wh2 ==''){

            $("#wh_2_error").text("Please enter work 2.");

            

        }

        if(wh3 ==''){

            $("#wh_3_error").text("Please enter work 3.");

            

        }

        if(afTa ==''){

            $("#af_ta_error").text("Please enter option.");

            

        }

        if(afSt ==''){

            $("#af_st_error").text("Please enter option.");

            

        }

        if(taSt ==''){

            $("#ta_st_error").text("Please enter option.");

            

        }

        

        else{

        $("#step-3").removeClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-2").addClass('d-none');

        $("#step-4").addClass('d-none');

       



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

        var publishFrom = document.getElementsByName('rf_publish');

        for (let i of publishFrom) {

    if(i.checked) {

         $("#step-4").removeClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-2").addClass('d-none');

        $("#step-3").addClass('d-none');

        



        // for circle color

        $("#bd-3").addClass('orange-bd');

        $("#red-4").addClass('circle-red');

        $("#red-3").addClass('circle-orange');

        $("#red-3").removeClass('circle-red');



        $("#back-3").addClass('d-none');

        $("#back-4").removeClass('d-none');

    }

    

    else{

         $("#publish_error").text("Please select any group.");

         var nE1 = $('.ne_1').val();

         var nE2 = $('.ne_2').val();

         var nE3 = $('.ne_3').val();

         var fO1 = $('.fo_1').val();

         var fO2 = $('.fo_2').val();

         var fO3 = $('.fo_3').val();

         var taBe = $('.ta_be').val();

         var atWi= $('.at_wi').val();

         var acTa = $('.ac_ta').val();

         var suNee = $('.su_nee').val();



          if(taBe ==''){

            $("#ta_be_error").text("Please enter option.");

            

        }

         if(atWi ==''){

            $("#at_wi_error").text("Please enter option.");

            

        }

         if(acTa ==''){

            $("#ne_1_error").text("Please enter option.");

            

        }

         if(suNee ==''){

            $("#su_nee_error").text("Please enter option.");

            

        }

         

          if(nE1 ==''){

            $("#ne_1_error").text("Please enter task 1.");

            

        }

        if(nE2 ==''){

            $("#ne_2_error").text("Please enter task 2.");

            

        }

        if(nE3 ==''){

            $("#ne_3_error").text("Please enter task 3.");

            

        }

         if(fO1 ==''){

            $("#fo_1_error").text("Please enter task 1.");

            

        }

         if(fO2 ==''){

            $("#fo_2_error").text("Please enter task 2.");

            

        }

         if(fO3 ==''){

            $("#fo_3_error").text("Please enter task 3.");

        }

        

    }

        }

        

    



    });

    // $("#step-btn-4").click(function(){

    //     $("#step-4").removeClass('d-none');

    //     $("#step-1").addClass('d-none');

    //     $("#step-2").addClass('d-none');

    //     $("#step-3").addClass('d-none');

        

        

        

    //     // for circle color

    //     $("#bd-4").addClass('orange-bd');

    //     $("#red-5").addClass('circle-red');

    //     $("#red-4").addClass('circle-orange');

    //     $("#red-4").removeClass('circle-red');

    // });

    var rf_id="<?php echo $_GET['rf_id']?>";



    if(rf_id){

        $("#step-2").addClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-3").addClass('d-none');

        $("#step-4").removeClass('d-none');

        

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

 <script type="text/javascript">

     

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

<?php get_footer('new'); } ?>