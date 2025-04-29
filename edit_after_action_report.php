   <?php 

   /* Template Name: Create After Action Report */

   if ( is_user_logged_in() ) {



    get_header('new'); ?>



    <?php 



     $rf_id = $_GET['id'];

    //  $rf_id = $_GET['rf_id'];

    $gid   =  $group_id;

    
    $rdData = get_post($rf_id);



    $postMeta = get_post_meta($rf_id);

    //echo "<pre>";

    // print_r($postMeta);



    //echo '<pre>';print_r($_GET); print_r($rdData);echo '</pre>';die;

    $current_user_id = get_current_user_id();

    $ownerInfo  = get_userdata($author_id);

    $owner_name =$ownerInfo->display_name;

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

    .hides{

        display: none;

    }

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

                                                <input type ="hidden" name ="group_id"  id="group_id"  value ="<?php echo get_post_meta($rf_id,'group_id',true)?>">

                                                <input type ="hidden" name ="rf_id"  id="rf_id"  value ="<?php echo $rf_id;?>">

                                                <input type="hidden" name="update_ActionReport" value="reportsforms"/>

                                                <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />





                                                <div id="step-1" class="main-form-section w-100">

                                                    <div>

                                                        <div class="row">

                                                            <div class="col-lg-12 mb-3">

                                                                <div class="form-title">

                                                                    <h3>Contact Information </h3>

                                                                </div>        

                                                            </div>

                                                            <div class="col-lg-4 mb-3 ">

                                                                <div class="form-group">

                                                                    <label>Name of Disaster *</label>

                                                                    <input type="text" class="form-control"  name="action_disaster" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'action_disaster',true)?>" >

                                                                </div>

                                                            </div>

                                                           <!--  <div class="col-lg-12 mb-3">

                                                                <div class="form-title">

                                                                    <h3>Location of the Incident</h3>

                                                                </div>        

                                                            </div> -->

                                                            <div class="col-lg-4 mb-3 ">

                                                                <div class="form-group">

                                                                    <label>Date Submitted*</label>

                                                                    <input type="date" class="form-control" name="action_date" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'action_date',true)?>">

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4 mb-3 ">

                                                                <div class="form-group">

                                                                    <label>Time Submitted *</label>

                                                                    <input type="time" class="form-control"  name="action_time" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'action_time',true)?>">

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4 mb-3 ">

                                                                <div class="form-group">

                                                                    <label>Name of Organization *</label>

                                                                    <input type="text" class="form-control" name="action_org_name" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'action_org_name',true)?>">

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4 mb-3 ">

                                                                <div class="form-group">

                                                                    <label>Submitted By *</label>

                                                                    <input type="text" class="form-control"  name="action_submit_by" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'action_submit_by',true)?>">

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4 mb-3 ">

                                                                <div class="form-group">

                                                                    <label>Contact phone *</label>

                                                                    <input type="text" class="form-control" name="action_phone" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'action_phone',true)?>">

                                                                </div>

                                                            </div>

                                                             <div class="col-lg-4 mb-3">

                                                                <div class="form-group">

                                                                    <label>Contact E-mail *</label>

                                                                    <input type="text" class="form-control" name="action_email" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'action_email',true)?>">

                                                                </div>

                                                            </div>

                                                             <div class="col-lg-4 mb-3">

                                                                <div class="form-group">

                                                                    <label>Supervisor Name *</label>

                                                                    <input type="text" class="form-control"  name="action_supervisor" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'action_supervisor',true)?>">

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="row">

                                                           <!--   <div class="col-lg-6 d-flex justify-content-end">

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

                                                                <input type="text" class="form-control" id="shift_reported" name="shift_reported" placeholder="Enter here " value="<?php echo get_post_meta($rf_id,'shift_reported',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Start Date *</label>

                                                                <input type="date" class="form-control" id="action_start_date" name="action_start_date" placeholder="Enter here " value="<?php echo get_post_meta($rf_id,'action_start_date',true)?>" >

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>End Date *</label>

                                                                <input type="date" class="form-control" id="action_end_date" name="action_end_date" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'action_end_date',true)?>" >

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Time Submitted *</label>

                                                                <input type="time" class="form-control" id="action_submit_time" name="action_submit_time" placeholder="Enter here " value="<?php echo get_post_meta($rf_id,'action_submit_time',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Assignment Title *</label>

                                                                <input type="text" class="form-control" id="assignment_title" name="assignment_title" placeholder="Enter here " value="<?php echo get_post_meta($rf_id,'assignment_title',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4 mb-3">

                                                            <div class="form-group">

                                                                <label>Address where work was conducted</label>

                                                                <input type="text" class="form-control" id="work_address" name="work_address" placeholder="Enter here " value="<?php echo get_post_meta($rf_id,'work_address',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-group">

                                                                <label>Team Members *</label>

                                                                <input type="text" class="form-control" id="team_members" name="team_members" placeholder="Enter here " value="<?php echo get_post_meta($rf_id,'team_members',true)?>">

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>Tasks</h3>

                                                            </div>        

                                                        </div>





                                                        <div class="col-lg-6 mb-5">

                                                            <div class="form-group">

                                                                <label>1 *</label>

                                                                <textarea type="text" rows="4" class="form-control" id="task1" name="task1" placeholder="Enter here" ><?php echo get_post_meta($rf_id,'task1',true)?></textarea>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group select-form-height">

                                                                <label>Task Status</label>

                                                                <select class="form-control set-postion" name="task_status1">

                                                                    <option>Select Status</option>

                                                                    <option value="Completed" <?php echo (get_post_meta($rf_id,'task_status1',true)=="Completed")?"selected='selected'":""?> >Completed</option>

                                                                     <option value="Incomplete" <?php echo (get_post_meta($rf_id,'task_status1',true)=="Incomplete")?"selected='selected'":""?> >Incomplete</option>

                                                                      <option value="Need Attention" <?php echo (get_post_meta($rf_id,'task_status1',true)=="Need Attention")?"selected='selected'":""?> >Need Attention</option>

                                                                  

                                                                </select>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-5">

                                                            <div class="form-group">

                                                                <label>2 *</label>

                                                                <textarea type="text" rows="4" class="form-control" id="task2" name="task2" placeholder="Enter here " ><?php echo get_post_meta($rf_id,'task2',true)?></textarea>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group select-form-height">

                                                                <label>Task Status</label>

                                                                <select class="form-control set-postion" name="task_status2">

                                                                 <option>Select Status</option>

                                                                    <option value="Completed" <?php echo (get_post_meta($rf_id,'task_status2',true)=="Completed")?"selected='selected'":""?> >Completed</option>

                                                                     <option value="Incomplete" <?php echo (get_post_meta($rf_id,'task_status2',true)=="Incomplete")?"selected='selected'":""?> >Incomplete</option>

                                                                      <option value="Need Attention" <?php echo (get_post_meta($rf_id,'task_status2',true)=="Need Attention")?"selected='selected'":""?> >Need Attention</option>

                                                                </select>

                                                            </div>

                                                        </div>

                                                        

                                                        <div class="col-lg-6 mb-5">

                                                            <div class="form-group">

                                                                <label>3 *</label>

                                                                <textarea type="text" rows="4" class="form-control" id="task3" name="task3" placeholder="Enter here " ><?php echo get_post_meta($rf_id,'task3',true)?></textarea>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 mb-3">

                                                            <div class="form-group select-form-height">

                                                                <label>Task Status</label>

                                                                <select class="form-control set-postion" name="task_status3">

                                                                   <option>Select Status</option>

                                                                    <option value="Completed" <?php echo (get_post_meta($rf_id,'task_status3',true)=="Completed")?"selected='selected'":""?> >Completed</option>

                                                                     <option value="Incomplete" <?php echo (get_post_meta($rf_id,'task_status3',true)=="Incomplete")?"selected='selected'":""?> >Incomplete</option>

                                                                      <option value="Need Attention" <?php echo (get_post_meta($rf_id,'task_status3',true)=="Need Attention")?"selected='selected'":""?> >Need Attention</option>

                                                                </select>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h3>What worked *</h3>

                                                            </div>        

                                                        </div>

                                                        

                                                        <div class="col-lg-12 mb-3 ">

                                                            <div class="form-group">

                                                                <label>1 *</label>

                                                                <textarea type="text" rows="4" class="form-control" id="what_worked1" name="what_worked1" placeholder="Enter here"><?php echo get_post_meta($rf_id,'what_worked1',true)?></textarea>

                                                            </div>

                                                        </div>

                                                         <div class="col-lg-12 mb-3 ">

                                                            <div class="form-group">

                                                                <label>2 *</label>

                                                                <textarea type="text" rows="4" class="form-control" id="what_worked2" name="what_worked2" placeholder="Enter here "><?php echo get_post_meta($rf_id,'what_worked2',true)?></textarea>

                                                            </div>

                                                        </div>

                                                         <div class="col-lg-12 mb-3 ">

                                                            <div class="form-group">

                                                                <label>3 *</label>

                                                                <textarea type="text" rows="4" class="form-control" id="what_worked3" name="what_worked3" placeholder="Enter here "><?php echo get_post_meta($rf_id,'what_worked3',true)?></textarea>

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

                                                                  <textarea type="text" rows="4" class="form-control" id="improve1" name="improve1" placeholder="Enter here "><?php echo get_post_meta($rf_id,'improve1',true)?></textarea>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-12 mb-5">

                                                                <div class="form-group">

                                                                    <label>2 *</label>

                                                                    <textarea type="text" rows="4" class="form-control" id="improve2" name="improve2" placeholder="Enter here "><?php echo get_post_meta($rf_id,'improve2',true)?></textarea>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-12 mb-5">

                                                                <div class="form-group">

                                                                    <label>3 *</label>

                                                                    <textarea type="text" rows="4" class="form-control" id="improve3" name="improve3" placeholder="Enter here "><?php echo get_post_meta($rf_id,'improve3',true)?></textarea>

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

                                                                    <textarea type="text" rows="4" class="form-control" id="follow_up_action1" name="follow_up_action1" placeholder="Enter here "><?php echo get_post_meta($rf_id,'follow_up_action1',true)?></textarea>

                                                                </div>

                                                            </div>

                                                            

                                                            <div class="col-lg-6 mb-3">

                                                                <div class="form-group select-form-height">

                                                                    <label>Action will be taken by *</label>

                                                                    <select class="form-control set-postion" name="taken_by1">

                                                                        <option>Select Action </option>

                                                                         <option value="My team will complete this action" <?php echo (get_post_meta($rf_id,'taken_by1',true)=="My team will complete this action")?"selected='selected'":""?> >My team will complete this action</option>

                                                                          <option value="Another team needs to complete this action" <?php echo (get_post_meta($rf_id,'taken_by1',true)=="Another team needs to complete this action")?"selected='selected'":""?> >Another team needs to complete this action</option>





                                                                        

                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-6 mb-5">

                                                                <div class="form-group">

                                                                    <label>2 *</label>

                                                                    <textarea type="text" rows="4" class="form-control" id="follow_up_action2" name="follow_up_action2" placeholder="Enter here " ><?php echo get_post_meta($rf_id,'follow_up_action2',true)?></textarea>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-6 mb-3">

                                                                <div class="form-group select-form-height">

                                                                    <label>Action will be taken by *</label>

                                                                    <select class="form-control set-postion" name="taken_by2">

                                                                         <option>Select Action </option>

                                                                         <option value="My team will complete this action" <?php echo (get_post_meta($rf_id,'taken_by2',true)=="My team will complete this action")?"selected='selected'":""?> >My team will complete this action</option>

                                                                          <option value="Another team needs to complete this action" <?php echo (get_post_meta($rf_id,'taken_by2',true)=="Another team needs to complete this action")?"selected='selected'":""?> >Another team needs to complete this action</option>

                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-6 mb-5">

                                                                <div class="form-group">

                                                                    <label>3 *</label>

                                                                    <textarea type="text" rows="4" class="form-control" id="follow_up_action3" name="follow_up_action3" placeholder="Enter here " ><?php echo get_post_meta($rf_id,'follow_up_action3',true)?></textarea>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-6 mb-3">

                                                                <div class="form-group select-form-height">

                                                                    <label>Action will be taken by *</label>

                                                                    <select class="form-control set-postion" name="taken_by3">

                                                                         <option value="My team will complete this action">My team will complete this <option>Select Action </option>

                                                                         <option value="My team will complete this action" <?php echo (get_post_meta($rf_id,'taken_by3',true)=="My team will complete this action")?"selected='selected'":""?> >My team will complete this action</option>

                                                                          <option value="Another team needs to complete this action" <?php echo (get_post_meta($rf_id,'taken_by3',true)=="Another team needs to complete this action")?"selected='selected'":""?> >Another team needs to complete this action</option>

                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-12 mb-5">

                                                                <div class="form-group">

                                                                    <label>Supplies needed to complete the work *</label>

                                                                    <textarea type="text" rows="4" class="form-control" id="supplies_needed" name="supplies_needed" placeholder="Enter here "><?php echo get_post_meta($rf_id,'supplies_needed',true)?></textarea>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-12 mb-5">

                                                                <div class="form-group">

                                                                    <label>Additional Information</label>

                                                                    <textarea type="text" rows="4" class="form-control" id="add_info" name="add_info" placeholder="Enter here " ><?php echo get_post_meta($rf_id,'add_info',true)?></textarea>

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

                                                                            <input onclick="show33();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish">Select From My Joined Group

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

                                                                            <input onclick="show2();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish">Select From My Group

                                                                        </label>

                                                                    </div>

                                                                    <div id="div44" class="hides">

                                                                    <select class="form-control mt-3 border" name ="rf_publish">

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

                                                                <button class="btn btn-primary" title="Next" name="save"  value="update" >Next</a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div id="step-4" class="main-form-section d-none w-100">

                                                    <div>

                                                       <div class="row">

                                                            <div class="col-lg-12 mb-3">

                                                                <div class="bg-ligt-color">

                                                                    <div class="form-title">

                                                                        <h3>Contact Information <?php echo get_post_meta($rf_id,'action_date',true)?></h3>

                                                                    </div>            

                                                                </div>

                                                            </div>

                                                            

                                                            <div class="col-lg-12 mb-3">

                                                                <div class="d-flex">

                                                                    <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>Date Submitted</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                              <input type="text" class="form-control" name="action_org_name" placeholder="Enter here" value="<?php echo get_post_meta($rf_id,'action_org_name',true)?>">

                                                                            <p>vinay 123<?php echo get_post_meta($rf_id,'action_date',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                    <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>Time Submitted</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($rf_id,'action_time',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                    <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>Name of organization</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($rf_id,'action_org_name',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                    <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>Submitted by</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($rf_id,'action_submit_by',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                    <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>Contact phone</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($rf_id,'action_phone',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                    <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>Contact email</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($rf_id,'action_email',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                    <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>Supervisor Name</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($rf_id,'action_supervisor',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-12 mb-3">

                                                                <div class="bg-ligt-color">

                                                                    <div class="form-title">

                                                                        <h3>Report Details</h3>

                                                                    </div>            

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-12 mb-3">

                                                                <div class="d-flex">

                                                                    <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>Shift Reported Covers</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($rf_id,'shift_reported',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                    <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>Start Date</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($rf_id,'action_start_date',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                     <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>End Date</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($rf_id,'action_end_date',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                    <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>Time Submitted</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($rf_id,'action_submit_time',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                   

                                                                    <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>Assignment Title</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($rf_id,'assignment_title',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                    <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>Address where work was conducted</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($rf_id,'work_address',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                    <div class="box-area">

                                                                        <div class="title">

                                                                            <h3>Team Members</h3>

                                                                        </div>

                                                                        <div class="content-para">

                                                                            <p><?php echo get_post_meta($rf_id,'team_members',true)?></p>

                                                                        </div>    

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-12 mb-3">

                                                                <div class="bg-ligt-color">

                                                                    <div class="form-title">

                                                                        <h3>Task</h3>

                                                                    </div>            

                                                                </div>

                                                            </div>

                                                            

                                                             <?php 

                                                                $task1  = get_post_meta($rf_id,'task1',true);                  

                                                                if(!empty($task1)){ ?>

                                                                        <div class="col-lg-12 mb-3">

                                                                            <div class="d-flex">

                                                                                <div class="box-area">

                                                                                    <div class="title">

                                                                                        <h3>Task 1</h3>

                                                                                    </div>

                                                                                </div>

                                                                                <div class="box-area">

                                                                                    <div class="content-para">

                                                                                        <p><?php echo get_post_meta($rf_id,'task1',true)?></p>

                                                                                    </div>    

                                                                                </div>

                                                                                <div class="box-area">

                                                                                    <div class="content-para">

                                                                                        <p><?php echo get_post_meta($rf_id,'task_status1',true)?></p>

                                                                                    </div>    

                                                                                </div>

                                                                            </div>

                                                                        </div>



                                                             <?php } else { ?>

                                                                  

                                                                  <?php } ?> 





                                                             <?php 

                                                                $task2  = get_post_meta($rf_id,'task2',true);                  

                                                                if(!empty($task2)){ ?>

                                                                        <div class="col-lg-12 mb-3">

                                                                            <div class="d-flex">

                                                                                <div class="box-area">

                                                                                    <div class="title">

                                                                                        <h3>Task 2</h3>

                                                                                    </div>

                                                                                </div>

                                                                                <div class="box-area">

                                                                                    <div class="content-para">

                                                                                        <p><?php echo get_post_meta($rf_id,'task2',true)?></p>

                                                                                    </div>    

                                                                                </div>

                                                                                <div class="box-area">

                                                                                    <div class="content-para">

                                                                                        <p><?php echo get_post_meta($rf_id,'task_status2',true)?></p>

                                                                                    </div>    

                                                                                </div>

                                                                            </div>

                                                                        </div>



                                                             <?php } else { ?>

                                                                  

                                                                  <?php } ?>  





                                                             <?php 

                                                                $task3  = get_post_meta($rf_id,'task3',true);                  

                                                                if(!empty($task3)){ ?>

                                                                        <div class="col-lg-12 mb-3">

                                                                            <div class="d-flex">

                                                                                <div class="box-area">

                                                                                    <div class="title">

                                                                                        <h3>Task 3</h3>

                                                                                    </div>

                                                                                </div>

                                                                                <div class="box-area">

                                                                                    <div class="content-para">

                                                                                        <p><?php echo get_post_meta($rf_id,'task3',true)?></p>

                                                                                    </div>    

                                                                                </div>

                                                                                <div class="box-area">

                                                                                    <div class="content-para">

                                                                                        <p><?php echo get_post_meta($rf_id,'task_status3',true)?></p>

                                                                                    </div>    

                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                             <?php } else { ?>

                                                                  <?php } ?>    

                                                          

                                                           

                                                            <div class="col-lg-12 mb-3">

                                                                <div class="bg-ligt-color">

                                                                    <div class="form-title">

                                                                        <h3>What worked</h3>

                                                                    </div>            

                                                                </div>

                                                            </div>

                                                           

                                                           <?php $what_worked1 = get_post_meta($rf_id,'what_worked1',true);

                                                            if(!empty($what_worked1)){?>

                                                                <div class="col-lg-12 mb-3">

                                                                    <div class="d-flex">

                                                                        <div class="box-area">

                                                                            <div class="title">

                                                                                <h3>1</h3>

                                                                            </div>

                                                                        </div>

                                                                        <div class="box-area">

                                                                            <div class="content-para">

                                                                                <p><?php echo get_post_meta($rf_id,'what_worked1',true)?></p>

                                                                            </div>    

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            <?php } else { ?>

                                                              <?php } ?>



                                                            <?php $what_worked2 = get_post_meta($rf_id,'what_worked2',true);

                                                            if(!empty($what_worked2)){?>

                                                                <div class="col-lg-12 mb-3">

                                                                    <div class="d-flex">

                                                                        <div class="box-area">

                                                                            <div class="title">

                                                                                <h3>2</h3>

                                                                            </div>

                                                                        </div>

                                                                        <div class="box-area">

                                                                            <div class="content-para">

                                                                                <p><?php echo get_post_meta($rf_id,'what_worked2',true)?></p>

                                                                            </div>    

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            <?php } else { ?>

                                                              <?php } ?>



                                                            <?php $what_worked3 = get_post_meta($rf_id,'what_worked3',true);

                                                            if(!empty($what_worked3)){?>

                                                                <div class="col-lg-12 mb-3">

                                                                    <div class="d-flex">

                                                                        <div class="box-area">

                                                                            <div class="title">

                                                                                <h3>3</h3>

                                                                            </div>

                                                                        </div>

                                                                        <div class="box-area">

                                                                            <div class="content-para">

                                                                                <p><?php echo get_post_meta($rf_id,'what_worked3',true)?></p>

                                                                            </div>    

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            <?php } else { ?>

                                                              <?php } ?>

                                                          

                                                           

                                                        </div>

                                                        <div class="row">

                                                            <div class="col-lg-6 d-flex justify-content-start">

                                                               <button class="btn btn-outline-primary" value="finish" name="finish" title="Save & Publish">Save & Publish</button>

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



<!-- Validation script starts -->







<!-- <script>

        $(document).ready(function(){



            $("#step-btn-1").click(function(){

                var formvin = $("#afterActionForm");

                formvin.validate({

                   

                    errorElement: 'span',

                    errorClass: 'help-block',

                    highlight: function(element, errorClass, validClass) {

                        $(element).closest('.form-group').addClass("has-error");

                    },

                    unhighlight: function(element, errorClass, validClass) {

                        $(element).closest('.form-group').removeClass("has-error");

                    },

                    rules: {

                        action_disaster: {

                            required: true,

                          

                        },

                        action_date : {

                            required: true,

                        },

                        action_time : {

                            required: true,

                           

                        },

                        action_org_name:{

                            required: true,

                        },

                        action_submit_by:{

                            required: true,

                        },

                        action_phone: {

                            required: true,

                            maxlength: 10,

                        },

                        action_email: {

                            required: true,

                            minlength: 3,

                        },



                        action_supervisor: {

                            required: true,

                           

                        },

                        

                    },

                    messages: {

                        action_disaster: {

                            required: "Disaster name required",

                        },

                        action_date : {

                            required: "Date  required",

                        },

                        action_time : {

                            required: "Time required",

                        

                        },

                        action_org_name: {

                            required: "Organization name required",

                        },

                        action_submit_by: {

                            required: "Submit Buy  required",

                        },



                        action_phone: {

                            required: "Phone  required",

                        },



                        action_email: {

                            required: "Email  required",

                        },



                        action_supervisor: {

                            required: "Supervisor  required",

                        },

                    }

                });

                if (formvin.valid() === true){

                    if ($('#step-1').is(":visible")){

                        current_fs = $('#step-1');

                        next_fs = $('#step-2');

                    }else if($('#step-2').is(":visible")){

                        current_fs = $('#step-2');

                        next_fs = $('#step-3');

                    }

                    

                    next_fs.show(); 

                    current_fs.hide();

                }

            });



            $('#previous').click(function(){

                if($('#company_information').is(":visible")){

                    current_fs = $('#company_information');

                    next_fs = $('#account_information');

                }else if ($('#personal_information').is(":visible")){

                    current_fs = $('#personal_information');

                    next_fs = $('#company_information');

                }

                next_fs.show(); 

                current_fs.hide();

            });

            

    

    

            

        });



</script>

 -->

















<!-- Validation script ends  -->







<

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

        



        // for circle color

        $("#bd-3").addClass('orange-bd');

        $("#red-4").addClass('circle-red');

        $("#red-3").addClass('circle-orange');

        $("#red-3").removeClass('circle-red');



        $("#back-3").addClass('d-none');

        $("#back-4").removeClass('d-none');

    });

    $("#step-btn-4").click(function(){

        $("#step-4").removeClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-2").addClass('d-none');

        $("#step-3").addClass('d-none');

        

        

        

        // for circle color

        $("#bd-4").addClass('orange-bd');

        $("#red-5").addClass('circle-red');

        $("#red-4").addClass('circle-orange');

        $("#red-4").removeClass('circle-red');



        $("#back-4").addClass('d-none');

        $("#back-5").removeClass('d-none');

    });

    var rf_id="<?php echo $_GET['rf_id']?>";



    if(rf_id){

        $("#step-2").addClass('d-none');

        $("#step-1").addClass('d-none');

        $("#step-3").addClass('d-none');

        $("#step-4").removeClass('d-none');

        

        // $("#bd-4").addClass('orange-bd');

        // $("#red-4").addClass('circle-red');

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





        // $("#bd-5").addClass('orange-bd');

        // $("#red-5").addClass('circle-red');

        // $("#red-5").addClass('circle-orange');









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

<?php get_footer('new'); } ?>