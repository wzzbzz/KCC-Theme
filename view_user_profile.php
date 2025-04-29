<?php 
   /* Template Name: User Dashboard */
   if ( is_user_logged_in() ) {
     global $wpdb;
 $_GET['userID']; 
   $userDetails1 =   get_user_meta($current_user->ID);
    $userdata = get_userdata( $_GET['userID'] );
 
   
   $expList = $wpdb->get_results( "SELECT * FROM user_experience WHERE user_id = '".$current_user->ID."' ",ARRAY_A); 
   $skillList = $wpdb->get_results( "SELECT * FROM user_skills WHERE user_id = '".$current_user->ID."' ",ARRAY_A);  
   get_header('dashboard'); 
 
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
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">     
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">     
<style>
 .emergency_textbox { display:none }
 .general_textbox { display:none }
 .repair_textbox { display:none }
 .property_textbox { display:none }
 .health_inputbox { display:none }
 .food_textbox { display:none }
 .volunteer_textbox { display:none }
 .severe_checkbox { display:none }
 .structural_checkbox { display:none }
 .terrorist_checkbox { display:none }
 .disaster_textbox { display:none }

  .modal{
   visibility: unset;
   }
   .profile_medal .profile_count_main img {
    width: auto;
    height: auto;
    min-height: 60px;
}
.profile_count_title{
   font-size: 10px;
}
.profile_medal .col-md-3{
   padding: 0px 7.5px;
}
.profile_count_main{
   min-height: 100px;
}
.skills_add_b{border: 1px dashed #D3D3D3; background:none; width: 100px; justify-content: center;border-radius: 15px;}
.skills_add_b a{background:none;padding:10px;font-size: 16px; color:#242424;}

.skill_add1 .skill-box{ background:none!important;}

.input_main1 .skill-box{height:45px; text-align: center; align-items: center;}

.skills_add_b button:hover {
    color: #242424;
    background: transparent;
}
</style>

<?php  
   ?>
<div class="col-xl-12 profile-page-main">
   <div class="row justify-content-end mt-3">
            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
               <?php include('user_topbar.php')?>
            </div>
      <div class="col-xl-11 col-lg-11 col-md-11 col-10 ">
        <div class="donation_tab_pills">
           <div class="donate_details_main profile_img">
               <!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/detail_click.png" class="img-fluid membergroup-img pro_img1" alt="image"> -->
                  <?php 
                     $cover_img = get_user_meta( $_GET['userID'],'cover_photo',true);
                     if(empty($cover_img)){
                        $cover_img = "https://via.placeholder.com/1920x318";
                     }
                  ?>
               <div class="avatar-preview">
                  <div  id="imagePreview" class="profile-cover-image" style="background-image: url('<?php echo $cover_img;?>');">
                  </div>
               </div>
               <!--<div class="avatar-edit">
                  <form id="imageuploadform" action="" method="post"  enctype="multipart/form-data">
                     <input type="hidden" name="action" value="dashboard_image_upload">
                     <input type='file' id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
                     <label for="imageUpload"></label>
                  </form>
               </div>-->
               <div class="d-flex align-items-center profile_user_details justify-content-between">
                  <div class="profile_user_details1 ml-4">
                     <!--<span class="display_pic"><img class="image1" src="<//?php echo $avatar_url; ?>">    </span>-->
                     <span class ="display_pic"><img class="image1" src ="<?php echo get_avatar_url( $_GET['userID'])?>" ></span>
                  </div>
                  <div class="profile_user_details2 align-self-end">
                     <span class="display_name d-block"><?php echo  get_user_meta($_GET['userID'],'first_name',true)?> <?php echo  get_user_meta($_GET['userID'],'last_name',true)?></span>
                     <span class="display_email d-block"><?php echo  $userdata->user_email?></span>
                  </div>
                  <div class=" profile_count d-lg-flex d-md-flex align-self-end">
                     <div class="profile_count_main d-lg-flex d-md-flex justify-content-between px-2 align-items-center">
                        <div class="profile_count1 d-lg-flex d-md-flex justify-content-start align-items-center">
                           <div class="px-2"><span><?php echo myFollowing()?></span></div>
                           <div class="">
                              <p>Connects</p>
                           </div>
                        </div>
                        <div class=" profile_count2 d-flex justify-content-start align-items-center">
                           <div class="px-3"><span><?php echo count_user_posts($current_user->ID,'groups')?></span></div>
                           <div class="">
                              <p>Groups</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="profile_medal d-lg-flex align-self-end ml-3 mr-3">
                     <div class="row profile_count_main">
                        <div class="col-md-3">
                           <div class="text-center pt-1 pb-2">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cdvc_1.png" class="img-fluid membergroup-img pro_img1" alt="image">
                              <div class="profile_count_title">CDVC Level 1</div> 
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="text-center pt-1 pb-2">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cdvc_2.png" class="img-fluid membergroup-img pro_img1" alt="image">
                              <div class="profile_count_title">CDVC Level 2</div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="text-center pt-1 pb-2">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cdvc_3.png" class="img-fluid membergroup-img pro_img1" alt="image">
                              <div class="profile_count_title">CDVC Level 3</div>
                           </div>   
                        </div>
                        <div class="col-md-3">
                           <div class="text-center pt-1 pb-2">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cdvc_4.png" class="img-fluid membergroup-img pro_img1" alt="image">
                              <div class="profile_count_title">4 Courses Taken</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-4 mb-4 pb-4">
         <div class="memebr_tab_pills profil_1">
            <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-my_profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="main_my_pro p-3">
                     <div class="main_pro_tab nav nav-pills nav-pills1 mb-3 blog_u justify-content-between">
                        <div class="align-items-center pro_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile_settting.png"><span>User  Information</span></div>
                        
                     </div>
                     <div class="my_pro_title">
                       <!-- <h4>User  Information</h4>-->
                     </div>
                     <div class="row">
                        <div class=" col-md-6 mb-3">
                           <div class="input_main">
                              <div class="row">
                                 <div class="col-md-8"><span class="input_b">First Name</span></div>
                                 <div class="col-md-4"><span class="input_r"><?php echo  get_user_meta($_GET['userID'],'first_name',true)?></span></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-8"><span class="input_b">Last Name</span></div>
                                 <div class="col-md-4"><span class="input_r"><?php echo  get_user_meta($_GET['userID'],'last_name',true)?></span></div>
                              </div>
                             
                              <div class="row">
                                 <div class="col-md-8"><span class="input_b">Birth Year</span></div>
                                 <div class="col-md-4"><span class="input_r"><?php echo  get_user_meta($_GET['userID'],'dob',true)?></span></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-8"><span class="input_b">Gender</span></div>
                                 <div class="col-md-4"><span class="input_r"><?php echo  get_user_meta($_GET['userID'],'gendar',true)?></span></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-8"><span class="input_b">State</span></div>
                                 <div class="col-md-4"><span class="input_r"><?php echo  get_user_meta($_GET['userID'],'state',true)?></span></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-8"><span class="input_b">Zip Code</span></div>
                                 <div class="col-md-4"><span class="input_r"><?php echo  get_user_meta($_GET['userID'],'code',true)?></span></div>
                              </div>
                           </div>
                        </div>
                        <div class=" col-md-6 mb-3">
                           <div class="input_main">
                              <div class="row">
                                 <div class="col-md-8"><span class="input_b">Race/Ethnicity</span></div>
                                 <div class="col-md-4"><span class="input_r"><?php echo  get_user_meta($_GET['userID'],'race',true)?></span></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-8"><span class="input_b">Language</span></div>
                                 <div class="col-md-4"><span class="input_r"><?php echo  get_user_meta($_GET['userID'],'language',true)?></span></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-8"><span class="input_b">Highest Education Level</span></div>
                                 <div class="col-md-4"><span class="input_r"><?php echo  get_user_meta($_GET['userID'],'education',true)?></span></div>
                              </div>
                              <div class="row">
                                 <div class="col-md-8"><span class="input_b">Have You Worked On a Hazardous Waste Site In The Past Year?</span></div>
                                 <div class="col-md-4"><span class="input_r"><?php echo  get_user_meta($_GET['userID'],'userWeb',true)?></span></div>
                              </div>
                           </div>
                        </div>
                     </div>
                    </div>
                    
                    
                    <div class="row second_input">
                        <div class=" col-md-12 mb-3">
                           <div class="input_main1">
                              <div class="input_hed nav nav-pills nav-pills1 mb-3 blog_u justify-content-between">
                                  <div class="align-items-center pro_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile_settting.png"><span>Skills</span></div>
                                 <!--  <div class="align-items-center pro_ico"><img src="<?//php echo get_template_directory_uri(); ?>/assets/images/Union 4.png"><span><a href="/edit-skills/">Edit Skills</a></span></div> -->
                              </div>
                              <div class="form check-boxess m-0">
                                 <form method="post">
                                    <input type="hidden" name="add_user_skills" value="add_user_skills"/>
                                                <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />
                                    <div class="row m-0 p-0 mt-4">
                                       <div class="col-md-12 mb-4">
                                          <h4>Emergency Services</h4>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                            <?php
                                                global $wpdb;
                                                $table = 'user_skills';
                                                $user_id = $_GET['userID'];
                                                $query =  $wpdb->get_results("SELECT * FROM user_skills WHERE user_id = '".$user_id."' ",ARRAY_A);
                                                $all_skils = $query[0]['skill_type'];

                                                $emergencyOther = $query[0]['emergency_other'];
                                                $generalOther = $query[0]['general_other'];
                                                $repairOther = $query[0]['repair_other'];
                                                $propertyOther = $query[0]['property_other'];
                                                $healthOther = $query[0]['health_other'];
                                                $foodOther = $query[0]['food_other'];
                                                $volunteerOther = $query[0]['volunteer_other'];
                                                $additionalInfo = $query[0]['additional_info'];
                                                $mySkills  = explode(",",$all_skils);
                                              
                                            ?>
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Emergency',$mySkills)) { echo 'checked'; } ?> value="Emergency" name="skills[]">Emergency Services
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Evacuation',$mySkills)) { echo 'checked'; } ?> value="Evacuation" name="skills[]">Evacuation
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Crowd-control',$mySkills)) { echo 'checked'; } ?> value="Crowd-control" name="skills[]">Crowd Control
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Emergency_N/A',$mySkills)) { echo 'checked'; } ?> value="Emergency_N/A" name="skills[]">N/A
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="emergency_other" <?php if(!empty($emergencyOther)) { echo 'checked'; } ?>>Other
                                             </label>
                                          </div>
                                           <fieldset class="emergency_textbox">
                                           <!-- <input type="text" class="form-control" name="emergency_field" id="emergency_field" />-->
                                            <input type="text" class="form-control" name="emergency_other" id="emergency_field" value="<?php echo $emergencyOther;  ?>">
                                          </fieldset>
                                       </div>
                                    </div>
                                    <div class="row m-0 p-0 mt-4">
                                       <div class="col-md-12 mb-4">
                                          <h4>General Services Needed *</h4>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Animal-services',$mySkills)) { echo 'checked'; } ?> value="Animal-services" name="skills[]">Animal Services
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Canvassing',$mySkills)) { echo 'checked'; } ?> value="Canvassing" name="skills[]">Canvassing
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Communications',$mySkills)) { echo 'checked'; } ?> value="Communications" name="skills[]">Communications
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Collection/Entry',$mySkills)) { echo 'checked'; } ?> value="Collection/Entry" name="skills[]">Data Collection/Entry
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Disaster-child-care',$mySkills)) { echo 'checked'; } ?> value="Disaster-child-care" name="skills[]">Disaster Child Care
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Warehousing',$mySkills)) { echo 'checked'; } ?> value="Warehousing" name="skills[]">Donation Management/Warehousing
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" <?php if (in_array('Logistics',$mySkills)) { echo 'checked'; } ?> class="form-check-input" value="Logistics" 
                                                name="skills[]">Logistics
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Reunification',$mySkills)) { echo 'checked'; } ?>  value="Reunification" name="skills[]">Reunification 
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Traffic-Management',$mySkills)) { echo 'checked'; } ?> value="Traffic-Management" name="skills[]">Traffic Management
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Interpretation/Translation',$mySkills)) { echo 'checked'; } ?> value="Interpretation/Translation" name="skills[]">Interpretation/Translation
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Transportation',$mySkills)) { echo 'checked'; } ?> value="Transportation" name="skills[]"> Transportation
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Coordination',$mySkills)) { echo 'checked'; } ?> value="Coordination" name="skills[]">Coordination
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Shelter-Services',$mySkills)) { echo 'checked'; } ?> value="Shelter-Services" name="skills[]">Shelter Services
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('General_N/A',$mySkills)) { echo 'checked'; } ?> value="General_N/A" name="skills[]">N/A
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if(!empty($generalOther)) { echo 'checked'; } ?> value="" id="general_other">Other
                                             </label>
                                          </div>
                                          <fieldset class="general_textbox">
                                            <input type="text" class="form-control" name="general_other" id="general_field" value="<?php echo $generalOther; ?>" />
                                          </fieldset>
                                       </div>
                                    </div>
                                    <div class="row m-0 p-0 mt-4">
                                       <div class="col-md-12 mb-4">
                                          <h4>Repair And Rebuild *</h4>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Framing',$mySkills)) { echo 'checked'; } ?> value="Framing" name="skills[]">Framing
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Insulation-installation',$mySkills)) { echo 'checked'; } ?> value="Insulation-installation" name="skills[]">Insulation Installation
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Sheetrock',$mySkills)) { echo 'checked'; } ?> value="Sheetrock" name="skills[]">Sheetrock
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Mudding-taping',$mySkills)) { echo 'checked'; } ?> value="Mudding-taping" name="skills[]">Mudding And Taping
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Painting-sanding',$mySkills)) { echo 'checked'; } ?> value="Painting-sanding" name="skills[]">Painting And Sanding
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('repair_N/A',$mySkills)) { echo 'checked'; } ?> value="repair_N/A" name="skills[]">N/A
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                               <input type="checkbox" class="form-check-input" id="repair_other" value="" name="">Other
                                             </label>
                                          </div>
                                          <fieldset class="repair_textbox">
                                          <input type="text" class="form-control" name="repair_other" value="<?php echo $repairOther;?>" id="repair_field" />
                                       </fieldset>
                                       </div>
                                    </div>
                                    <div class="row m-0 p-0 mt-4">
                                       <div class="col-md-12 mb-4">
                                          <h4>Property Preservation *</h4>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Assessments',$mySkills)) { echo 'checked'; } ?> value="Assessments" name="skills[]">Assessments
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Debris-removal',$mySkills)) { echo 'checked'; } ?> value="Debris-removal" name="skills[]">Debris Removal
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Mold-treatment',$mySkills)) { echo 'checked'; } ?> value="Mold-treatment" name="skills[]">Mold Treatment
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Muck-out',$mySkills)) { echo 'checked'; } ?> value="Muck-out" name="skills[]">Muck Out
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Beautification',$mySkills)) { echo 'checked'; } ?> value="Beautification" name="skills[]">Light Clean Up/Beautification
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Property_N/A',$mySkills)) { echo 'checked'; } ?> value="Property_N/A" name="skills[]">N/A
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="property_other" <?php if(!empty($emergencyOther)) { echo 'checked'; } ?>  value="" name="">Other
                                             </label>
                                          </div>
                                          <fieldset class="property_textbox">
                                            <input type="text" class="form-control" name="property_other" value="<?php echo $propertyOther;?>" id="property_field" />
                                       </fieldset>
                                       </div>
                                    </div>
                                    <div class="row m-0 p-0 mt-4">
                                       <div class="col-md-12 mb-4">
                                          <h4>Health Services *</h4>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Licensed',$mySkills)) { echo 'checked'; } ?> value="Licensed" name="skills[]">Physical Health Services: Licensed Doctor
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Registered',$mySkills)) { echo 'checked'; } ?> value="Registered" name="skills[]">Physical Health Services: Registered Nurse
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('EMT/Paramedic',$mySkills)) { echo 'checked'; } ?> value="EMT/Paramedic" name="skills[]">EMT/Paramedic
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('CPR',$mySkills)) { echo 'checked'; } ?> value="CPR" name="skills[]">First Aid And CPR
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Practitioner',$mySkills)) { echo 'checked'; } ?> value="Practitioner" name="skills[]">Mental Health: Licensed Practitioner
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Support',$mySkills)) { echo 'checked'; } ?> value="Support" name="skills[]">Mental Health: Compassionate Support
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Public',$mySkills)) { echo 'checked'; } ?> value="Public" name="skills[]">Public Health
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Spiritual-emotional',$mySkills)) { echo 'checked'; } ?> value="Spiritual-emotional" name="skills[]">Spiritual And Emotional Care
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Medical_data',$mySkills)) { echo 'checked'; } ?> value="Medical_data" name="skills[]">Medical Data Entry
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('POD',$mySkills)) { echo 'checked'; } ?> value="POD" name="skills[]">Medication Dispensing: POD
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Health_N/A',$mySkills)) { echo 'checked'; } ?> value="Health_N/A" name="skills[]">N/A
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-3 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="health_other" value="" name="" <?php if(!empty($healthOther)) { echo 'checked'; } ?>>Other
                                             </label>
                                          </div>
                                          <fieldset class="health_inputbox">
                                            <input type="text" class="form-control" name="health_other" value="<?php echo $healthOther;?>" id="health_field" />
                                          </fieldset>
                                       </div>
                                    </div>
                                    <div class="row m-0 p-0 mt-4">
                                       <div class="col-md-12 mb-4">
                                          <h4>Food Services *</h4>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Food-preparation',$mySkills)) { echo 'checked'; } ?> value="Food-preparation" name="skills[]"> Food Preparation
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Food-service',$mySkills)) { echo 'checked'; } ?> value="Food-service" name="skills[]">Food Service
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Food-distribution',$mySkills)) { echo 'checked'; } ?> value="Food-distribution" name="skills[]">Food Distribution
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Food_N/A',$mySkills)) { echo 'checked'; } ?> value="Food_N/A" name="skills[]">N/A
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                 <input type="checkbox" class="form-check-input" value="" id="food_Other" name="" <?php if(!empty($foodOther)) { echo 'checked'; } ?>>Other
                                             </label>
                                          </div>
                                          <fieldset class="food_textbox">
                                          <input type="text" class="form-control" name="food_other" id="food_field" value="<?php echo $foodOther;  ?>" />
                                       </fieldset>
                                       </div>
                                    </div>
                                    <div class="row m-0 p-0 mt-4">
                                       <div class="col-md-12 mb-4">
                                          <h4>Volunteer Management *</h4>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Feeding',$mySkills)) { echo 'checked'; } ?> value="Feeding" name="skills[]"> Feeding
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Greeters/Receptionists',$mySkills)) { echo 'checked'; } ?> value="Greeters/Receptionists" name="skills[]">Greeters/Receptionists
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Security',$mySkills)) { echo 'checked'; } ?> value="Security" name="skills[]">Security
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Runner',$mySkills)) { echo 'checked'; } ?> value="Runner" name="skills[]">Runner
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Interviewer',$mySkills)) { echo 'checked'; } ?>  value="Interviewer" name="skills[]">Interviewer
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Resource-coordinator',$mySkills)) { echo 'checked'; } ?> value="Resource-coordinator" name="skills[]">Resource Coordinator
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Volunteer-manager',$mySkills)) { echo 'checked'; } ?> value="Volunteer-manager" name="skills[]">Volunteer Manager
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Trainer',$mySkills)) { echo 'checked'; } ?> value="Trainer" name="skills[]">Trainer
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" <?php if (in_array('Volunteer_N/A',$mySkills)) { echo 'checked'; } ?> value="Volunteer_N/A" name="skills[]">N/A
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-12 col-lg-2 mb-3">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="volunteer_other" <?php if(!empty($volunteerOther)) { echo 'checked'; } ?> value="" name="">Other
                                             </label>
                                          </div>
                                          <fieldset class="volunteer_textbox">
                                            <input type="text" class="form-control" name="volunteer_other" id="volunteer_field" value="<?php echo $volunteerOther;  ?>">
                                          </fieldset>
                                       </div>
                                       <div class="col-12 col-lg-6 mb-3">
                                          <div class="form-group">
                                             <label for="exampleFormControlTextarea1">Additional Information</label>
                                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="additional_info"><?php echo $additionalInfo;  ?></textarea>
                                               
                                            
                                          </div>
                                       </div>
                                    <!--   <div class="col-12 col-lg-12 mb-3 text-center">
                                          <button class="btn btn-primary">
                                              Submit
                                          </button>
                                       </div>-->
                                    </div>
                                 </form>
                              </div>
                           </div>
                           
                        </div>
                        <div class=" col-md-12 mb-3">
                           <div class="input_main1">   
                              <div class="input_hed nav nav-pills nav-pills1 mb-3 blog_u justify-content-between">
                                 <div class="align-items-center pro_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile_settting.png">
                                    <span>Experience</span>
                                 </div>
                                 <!--<div class="align-items-center pro_ico">
                                    <img src="<?//php echo get_template_directory_uri(); ?>/assets/images/Union 4.png">
                                    <span><a href="/edit-experience/">Edit Experience</a></span>
                                 </div>-->
                              </div>
                              <form method="post">
                                    <input type="hidden" name="add_user_experience" value="add_user_experience"/>
                                                <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />
                              <div class="form check-boxess m-0">
                                 <div class="row m-0 p-0 mt-4">
                                    <div class="col-md-12 mb-4">
                                       <h4>Disaster Type *</h4>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                       <div class="form-check d-flex align-items-center">
                                          <label class="form-check-label">
                                              <?php
                                                global $wpdb;
                                                $table = 'user_experience';
                                                $user_id = get_current_user_id();
                                                $query =  $wpdb->get_results("SELECT * FROM user_experience WHERE user_id = '".$user_id."' ",ARRAY_A);
                                                $all_experience = $query[0]['disaster_type'];
                                                $otherInfo = $query[0]['other_info'];
                                                $myExperience  = explode(",",$all_experience);
                                            ?>
                                             <input type="checkbox" class="form-check-input" id="severe_type" value="" name="">Severe Weather <small>(Select all that apply)</small>
                                          </label>
                                       </div>

                                       <fieldset class="severe_checkbox">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="Hurricane" <?php if (in_array('Hurricane',$myExperience)) { echo 'checked'; } ?> name="experience[]">Hurricane
                                             </label>
                                          </div>
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="Flooding"  <?php if (in_array('Flooding',$myExperience)) { echo 'checked'; } ?>name="experience[]">Flooding
                                             </label>
                                          </div>
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="Earthquake" <?php if (in_array('Earthquake',$myExperience)) { echo 'checked'; } ?> name="experience[]">Earthquake
                                          </div>
                                           <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="Landslide" <?php if (in_array('Landslide',$myExperience)) { echo 'checked'; } ?> name="experience[]">Landslide
                                             </label>
                                          </div>
                                           <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="Severe Heat" <?php if (in_array('Severe Heat',$myExperience)) { echo 'checked'; } ?> name="experience[]"> Severe Heat
                                             </label>
                                          </div>
                                           <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="Snowstorm"  <?php if (in_array('Snowstorm',$myExperience)) { echo 'checked'; } ?> name="experience[]">Snowstorm
                                             </label>
                                          </div>
                                           <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="Tornado"  <?php if (in_array('Tornado',$myExperience)) { echo 'checked'; } ?> name="experience[]">Tornado
                                             </label>
                                          </div>
                                       </fieldset>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                       <div class="form-check d-flex align-items-center">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" <?php if (in_array('Fire-emergency',$myExperience)) { echo 'checked'; } ?> value="Fire-emergency" name="experience[]">Fire Emergency
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                       <div class="form-check d-flex align-items-center">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" <?php if (in_array('Spill',$myExperience)) { echo 'checked'; } ?> value="Spill" name="experience[]">Hazardous Material/Spill/ Chemical Release
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                       <div class="form-check d-flex align-items-center">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" <?php if (in_array('Casualty',$myExperience)) { echo 'checked'; } ?> value="Casualty" name="experience[]">Medical Emergency/Mass Casualty
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                       <div class="form-check d-flex align-items-center">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" <?php if (in_array('Missing-persons',$myExperience)) { echo 'checked'; } ?> value="Missing-persons" name="experience[]">Missing Persons
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                       <div class="form-check d-flex align-items-center">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" <?php if (in_array('Utility-outage',$myExperience)) { echo 'checked'; } ?> value="Utility-outage" name="experience[]">Utility Outage
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                       <div class="form-check d-flex align-items-center">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" id="structural_type" <?php if (in_array('structural_type',$myExperience)) { echo 'checked'; } ?> value="structural_type" name="experience[]">Structural Disaster <small>(Select all that apply)</small>
                                          </label>
                                       </div>
                                       <fieldset class="structural_checkbox">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="Collapse" <?php if (in_array('Collapse',$myExperience)) { echo 'checked'; } ?> name="experience[]"> Collapse
                                             </label>
                                          </div>
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="Weakened-Structures" <?php if (in_array('Weakened-Structures',$myExperience)) { echo 'checked'; } ?> name="experience[]">Weakened Structures
                                             </label>
                                          </div>
                                       </fieldset>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                       <div class="form-check d-flex align-items-center">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" <?php if (in_array('Violence',$myExperience)) { echo 'checked'; } ?> value="Violence" name="experience[]">Workplace Violence Or Threat Of Violence
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                       <div class="form-check d-flex align-items-center">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" <?php if (in_array('Outbreak',$myExperience)) { echo 'checked'; } ?> value="Outbreak" name="experience[]">Epidemic / Pandemic Outbreak
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                       <div class="form-check d-flex align-items-center">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" id="terrorist_type" value="Attack" <?php if (in_array('Attack',$myExperience)) { echo 'checked'; } ?> name="experience[]">Terrorist Attack <small> (Select all that apply)</small>
                                          </label>
                                       </div>
                                       <fieldset class="terrorist_checkbox">
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="Bomb" <?php if (in_array('Bomb',$myExperience)) { echo 'checked'; } ?> name="experience[]"> Bomb/Explosion
                                             </label>
                                          </div>
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="Shooting"  <?php if (in_array('Shooting',$myExperience)) { echo 'checked'; } ?> name="experience[]">Shooting
                                             </label>
                                          </div>
                                          <div class="form-check d-flex align-items-center">
                                             <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="Biological" <?php if (in_array('Biological',$myExperience)) { echo 'checked'; } ?> name="experience[]">Biological Attack/Chemical Release
                                             </label>
                                          </div>
                                       </fieldset>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                       <div class="form-check d-flex align-items-center">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" <?php if (in_array('Radiological',$myExperience)) { echo 'checked'; } ?> value="Radiological" name="experience[]">Radiological Event
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                       <div class="form-check d-flex align-items-center">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" <?php if (in_array('Disasters',$myExperience)) { echo 'checked'; } ?> value="Disasters" name="experience[]">Nuclear Power Disasters
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-3 mb-3">
                                       <div class="form-check d-flex align-items-center">
                                          <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" id="structural_other" value="Other" name="" <?php if(!empty($otherInfo)) { echo 'checked'; } ?>>Other
                                          </label>
                                       </div>
                                       <fieldset class="disaster_textbox">
                                            <input type="text" class="form-control" name="other_info" id="disaster_field" value="<?php echo $otherInfo;?>" />
                                          </fieldset>
                                    </div>
                                     <!--<div class="col-12 col-lg-12 mb-3 text-center">
                                          <button class="btn btn-primary">
                                              Submit
                                          </button>
                                    </div>-->
                                 </div>
                              </div>
                              </form>
                           </div> 
                           
                        </div> 
                     </div>  
                   
                   
                   <!-- <div class="row second_input">
                        <div class=" col-md-6 mb-3">
                            <div class="input_main1">
                               <div class="input_hed nav nav-pills nav-pills1 mb-3 blog_u justify-content-between">
                                  <div class="align-items-center pro_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile_settting.png"><span>Skills</span></div>
                                 
                               </div>
                                <div class="row">
                                  <?php if(!empty($skillList)){
                                     foreach ($skillList as $key => $skill) {
                                     $user_skills  = explode(',',$skill['skill_type']) ?> 
                                    <?php foreach($user_skills as $SKILLS){?>
                                        <div class="col-md-4 mt-1 mb-1">
                                            <div class="">
                                               <div>
                                                <p class="input_r"><?php echo $SKILLS?></p>
                                               </div>
                                            </div>
                                        </div>
                                    <?php }  ?>
                                </div>
                                  <?php } }?>
                            </div>
                        </div>
                            
                             
                        <div class=" col-md-6 mb-3">
                              <div class="input_main1">
                                 <div class="input_hed nav nav-pills nav-pills1 mb-3 blog_u justify-content-between">
                                     <div class="align-items-center pro_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile_settting.png"><span>Experience</span></div>
                                    
                                  </div>
                                  
                                 
                                  <?php if(!empty($expList)){
                                     foreach ($expList as $key => $exp) {
                                      $user_exp  = explode(',',$exp['disaster_type'])
                                     ?>    
                                  <div class="input_main mb-3 mt-4">
                                     
                                     <div class="row mt-0 ">
                                        
                                     <div class="col-md-4 mx-1 my-1">
                                            <div class="">
                                               <div>
                                                <p class="input_r"><?php echo 'vin';?></p>
                                               </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 mt-1 mb-1">
                                            <div class="">
                                               <div>
                                                <p class="input_r"><?php echo 'vin';?></p>
                                               </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 mt-1 mb-1">
                                            <div class="">
                                               <div>
                                                <p class="input_r"><?php echo 'vin';?></p>
                                               </div>
                                            </div>
                                        </div>
                                       
                                     </div>
                                    
                                 </div>
                                  <?php } 
                                     }?>
                              </div>
                         </div>   
                    </div>-->          
                    
               </div>
               <div class="tab-pane fade" id="pills-annoucements" role="tabpanel" aria-labelledby="pills-annoucements-tab">
                  <?php include('dashboard_contacts_inc.php'); ?>
               </div>
               <div class="tab-pane fade" id="pills-reports" role="tabpanel" aria-labelledby="pills-reports-tab">
                  <?php include('dashboard_groups_inc.php'); ?>
               </div>
               <div class="tab-pane fade" id="pills-media" role="tabpanel" aria-labelledby="pills-media-tab">
                  <?php include('dashboard_reports_inc.php');?>
               </div>
               <div class="tab-pane fade" id="pills-blogs" role="tabpanel" aria-labelledby="pills-blog-tab">
                  <?php include('dashboard_blogs_inc.php');?>
               </div>
            </div>
         </div>
        
       
      </div>
         <div class="col-md-12 mt-4 pt-2 pr-0 d-flex">
            <?php include('common_user_footer.php')?>
         </div>
   </div>
  
</div>


<script type="text/javascript">
   $(function() {
  $("#emergency_other").on("click",function() {
    $(".emergency_textbox").toggle(this.checked);
  });
  $("#general_other").on("click",function() {
    $(".general_textbox").toggle(this.checked);
  });
  $("#repair_other").on("click",function() {
    $(".repair_textbox").toggle(this.checked);
  });
    $("#property_other").on("click",function() {
    $(".property_textbox").toggle(this.checked);
  });
    $("#health_other").on("click",function() {
    $(".health_inputbox").toggle(this.checked);
  });
    $("#food_Other").on("click",function() {
    $(".food_textbox").toggle(this.checked);
  });
    $("#volunteer_other").on("click",function() {
    $(".volunteer_textbox").toggle(this.checked);
  });
    $("#severe_type").on("click",function() {
    $(".severe_checkbox").toggle(this.checked);
  });
  
  $("#structural_type").on("click",function() {
   $(".structural_checkbox").toggle(this.checked);

  });
  
  
  $("#terrorist_type").on("click",function() {
    $(".terrorist_checkbox").toggle(this.checked);
  });
   $("#structural_other").on("click",function() {
    $(".disaster_textbox").toggle(this.checked);
  });
});
</script>

<script>      
   $(document).ready(function() {  
   
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

     $(".follwMember").click( function(e) {
                  e.preventDefault(); 
                  var mid = $(this).data("uid");
                  var nonce = $(this).attr("data-nonce");
                  $.ajax({
                     type : "post",
                     dataType : "json",
                     url :ajaxurl,
                     data : {"action": "follow_member1", "mid" : mid, "nonce": nonce},
                     success: function(response) { 
                       $('.ums_btn'+mid).text(response.msg);
                       //$('.followMember_'+mid).remove();
                        $('.ums_btn'+mid).removeClass('follwMember');
                        $('.ums_btn'+mid).addClass('unFollwMember');
                        
                     }
                  })
               });


               $(".unFollwMember").click( function(e) {
                  e.preventDefault(); 
                  var mid = $(this).data("uid");
                  var nonce = $(this).attr("data-nonce");
                  $.ajax({
                     type : "post",
                     dataType : "json",
                     url :ajaxurl,
                     data : {"action": "unfollow_member", "mid" : mid, "nonce": nonce},
                     success: function(response) { 
                       $('.ums_btn'+mid).text(response.msg);
                       $('.ums_btn'+mid).removeClass('unFollwMember');
                        $('.ums_btn'+mid).addClass('follwMember');
                        
                     }
                  })
               });



     $(".acceptUser").click( function(e) {
                  e.preventDefault(); 
                  var group_id = $(this).data("groupid");
                  var uid = $(this).data("uid");
                  var id = $(this).data("id");
                  var nonce = $(this).attr("data-nonce");
                  $.ajax({
                     type : "post",
                     dataType : "json",
                     url :ajaxurl,
                     data : {"action": "accept_group_request", "uid" : uid, "group_id" : group_id, "id" : id, "nonce": nonce},
                     success: function(response) { 
                       $('.ums_btn'+id).text(response.msg);
                       $('.ums_'+id).remove();
                        
                     }
                  })
               });

              $(".rejectUser").click( function(e) {
                  e.preventDefault(); 
                  var group_id = $(this).data("groupid");
                  var uid = $(this).data("uid");
                  var id = $(this).data("id");
                  var nonce = $(this).attr("data-nonce");
                  $.ajax({
                     type : "post",
                     dataType : "json",
                     url :ajaxurl,
                     data : {"action": "reject_group_request", "uid" : uid, "group_id" : group_id, "id" : id, "nonce": nonce},
                     success: function(response) { 
                       $('.ums_btn'+id).text(response.msg);
                       $('.ums_'+id).remove();
                        
                     }
                  })
               });


      $(".acceptInvitation").click(function() {
         var gid = $(this).attr('data-gid');
         var invited_to = $(this).attr('data-invited_to');
         var invited_from = $(this).attr('data-invited_from');
            $('#requestAccept').attr('data-gid',gid);
            $('#requestAccept').attr('data-invited_to',invited_from);
            $('#requestAccept').attr('data-invited_from',invited_to);

             $.ajax({
             type : "post",
             dataType : "json",
             url :ajaxurl,
             data : {"action": "lmuser_detail", "uid" :invited_from,"nonce": "<?php echo $nonce?>"},
             success: function(response) {  
                  console.log(response);  
                  $('.userImg').attr('src',response.avatar_url);
                  $('.userName').html(response.ownerInfo.data.user_nicename);
                  $('.UserEmail').html(response.ownerInfo.data.user_email);
                  $('.userConnection').html(response.groupList);
                  $('.userGroup').html(response.groupList);
                  $('#requestAccept').data('gid',gid);
                  $('#requestAccept').data('invited_to',invited_from);
                  $('#requestAccept').data('invited_from',invited_to);
                 $('#GroupeModalCenter').modal('show');
                
             }
          })

        });



  $("#requestAccept").click( function(e) {
          e.preventDefault(); 
         var group_id = $(this).data("gid");
         var invited_to = $(this).attr('data-invited_to');
         var invited_from = $(this).attr('data-invited_from');
          var nonce = $(this).attr("data-nonce");
          $.ajax({
             type : "post",
             dataType : "json",
             url :ajaxurl,
             data : {"action": "lmuser_add_in_group", "group_id" : group_id, "invited_to" : invited_to, "invited_from" : invited_from, "nonce": "<?php echo $nonce?>"},
             success: function(response) {  
                  console.log(response);          
                 $('#GroupeModalCenter').modal('hide');

                
             }
          })   

       })


   
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
<script type="text/javascript">
    function readURLprofile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
    }




    $("#imageUpload").change(function() {

      var form = $('imageuploadform')[0]; // You need to use standard javascript object here
      var formData = new FormData(form);


        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

        readURLprofile(this);

 
         $.ajax({
            url :ajaxurl,             
            type: "POST",
            data:  formData,
            contentType: false,
             cache: false,
            processData: false,
            success: function(data)
             {
               console.log(data);
             },
            error: function(data)
            {
              console.log("error");
                  console.log(data);
            }
         });
    });
</script>


<?php get_footer('new'); } else {

header("Location:/login/");

} ?>