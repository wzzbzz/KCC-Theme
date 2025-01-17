<?php 

   /* Template Name: User Dashboard */
   


   if ( is_user_logged_in() ) {

      $current_page = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
      $id = $_GET['id'];

     global $wpdb;

   if(isset($_POST['profle_update']))

   {

       $userData = $_POST;

       $userData['ID'] = $current_user->ID;

       $userData['user_nicename'] = $_POST['first_name'];

       $userData['display_name'] =  $_POST['first_name']." ".$_POST['last_name'];

       $userData['nickname']  =     $_POST['first_name'];

       foreach($userData as $key=>$value){

           update_user_meta($current_user->ID, $key, esc_attr(esc_attr($value )) );

       }

       wp_update_user( $userData );

       wp_redirect( get_permalink() );

   }

   

   if(isset($_POST['exp_update']))

   {

       $expData = array(

                       'user_id' =>  $current_user->ID,

                       'disaster_type' => esc_attr($_POST['disaster_type']),

                       'role_type' => esc_attr($_POST['role_type']),

                       'exp_date' => esc_attr($_POST['exp_date']),

                       'disaster_desc' => esc_attr($_POST['disaster_desc'])

                       );  

   

       $wpdb->insert('user_experience',$expData);

       wp_redirect( get_permalink() );

   }

   

   if(isset($_POST['skill_update']))

   {

       $expData = array(

                       'user_id' =>  $current_user->ID,

                       'skill_type' => esc_attr($_POST['skill_type'])

                       );  

       $wpdb->insert('user_skills',$expData);

       wp_redirect( get_permalink() );

   }



   if(isset($_POST['delete_account']))

   {

       $expData = array(

                        'user_id' =>  $current_user->ID,

                       );  

       $table = "wp_users";

       $wpdb->delete( $table, array('ID' => $current_user->ID ) );

       wp_redirect('https://knowledge.communication.worldcares.org/');

   }



   if(isset($_GET['mode']) && $_GET['mode']=='skill' && !empty($_GET['skill_id']))

   {

       $id = $_GET['skill_id'];

       $table = 'user_skills';

       $dd =  $wpdb->delete( $table, array( 'id' => $id ,'user_id' => $current_user->ID ) );

       wp_redirect( get_permalink() );

   }

   

   if(isset($_GET['mode']) && !empty($_GET['id']))

   {

     

       $id = $_GET['id'];

       $table = 'user_experience';

       $dd =  $wpdb->delete( $table, array( 'id' => $id ,'user_id' => $current_user->ID ) );

       wp_redirect( get_permalink() );

   }

       $userDetails1 =   get_user_meta($current_user->ID);

       $expList = $wpdb->get_results( "SELECT * FROM user_experience WHERE user_id = '".$current_user->ID."' ",ARRAY_A); 

       $skillList = $wpdb->get_results( "SELECT * FROM user_skills WHERE user_id = '".$current_user->ID."' ",ARRAY_A);  

   get_header('new'); 

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

<!-- <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet"/> -->

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

/*.profile_count_main{

   min-height: 100px;

}*/

.skills_add_b{border: 1px dashed #D3D3D3; background:none; width: 100px; justify-content: center;border-radius: 15px;}

.skills_add_b a{background:none;padding:10px;font-size: 16px; color:#242424;}



.skill_add1 .skill-box{ background:none!important;}



.input_main1 .skill-box{height:45px; text-align: center; align-items: center;}



.skills_add_b button:hover {

    color: #242424;

    background: transparent;

}



.check-boxess .btn-primary {

    background: #F96703 0% 0% no-repeat padding-box;

    box-shadow: 0px 10px 20px #00000029;

    border-radius: 9px;

    opacity: 1;

    width: 200px;

    height: 60px;

    border: 0;

    

}

.check-boxess h4{

   font-size: 16px;

   font-weight: 600;

}

</style>



<?php ?>

   

<div class="profile-page-main">

   <div class="row justify-content-end mt-3">

        <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">

               <?php include('user_topbar.php')?>

            </div>

        <div class="col-xl-11 col-lg-11 col-md-11 col-10 ">

            <div class="donation_tab_pills">

                <div class="donate_detais_main profile_img">

                   <!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/detail_click.png" class="img-fluid membergroup-img pro_img1" alt="image"> -->

                      <?php 

                         $cover_img = get_user_meta( $current_user->ID,'cover_photo',true);

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

                   <div class="d-lg-flex align-items-center profile_user_details justify-content-between">

                      <div class="profile_user_details1 ml-4">

                         <span class="display_pic"><img class="image1" src="<?php echo $avatar_url; ?>">    </span>

                      </div>

                      <div class="profile_user_details2 align-self-end">

                         <span class="display_name d-block"><?php echo  $current_user->first_name ?> <?php echo  $current_user->last_name ?></span>

                         <span class="display_email d-block"><?php echo  $current_user->user_email?></span>

                      </div>

                      <div class=" profile_count d-lg-flex d-md-flex align-self-end">

                         <div class="profile_count_main d-lg-flex d-md-flex justify-content-between px-2 align-items-center">

                            <div class="profile_count1 d-flex justify-content-start align-items-center">

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
                                    <?php echo do_shortcode('[user_badges]'); ?>
                                </div>
                      </div>

                   </div>

                </div>

             </div>

          </div>

        <div class="col-xl-11 col-lg-11 col-md-11 col-10 mb-4 pb-4">

            <div class="memebr_tab_pills profil_1">

                <ul class="nav nav-pills mb-4 mt-4" id="pills-tab" role="tablist">

                   <li class="nav-item">

                      <a class="nav-link active" id="pills-dashboard-tab" data-toggle="pill" href="#pills-dashboard" role="tab" aria-controls="pills-feeds" aria-selected="true">My Dashboard</a>

                   </li>

                   <li class="nav-item">

                      <a class="nav-link" id="pills-members-tab" data-toggle="pill" href="#pills-members" role="tab" aria-controls="pills-members" aria-selected="false">My Courses</a>

                   </li>

                   <li class="nav-item">

                      <a class="pills-profile-tab nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-my_profile" role="tab" aria-controls="pills-profile" aria-selected="false">My Profile</a>

                   </li>

                   <li class="nav-item">

                      <a class="nav-link" id="pills-annoucements-tab" data-toggle="pill" href="#pills-annoucements" role="tab" aria-controls="pills-annoucements" aria-selected="false">My Contacts</a>

                   </li>

                   <li class="nav-item">

                      <a class="nav-link" id="pills-reports-tab" data-toggle="pill" href="#pills-reports" role="tab" aria-controls="pills-reports" aria-selected="false">My Groups</a>

                   </li>

                   <li class="nav-item">

                      <a class="nav-link" id="pills-media-tab" data-toggle="pill" href="#pills-media" role="tab" aria-controls="pills-media" aria-selected="false">My Report & Forms</a>

                   </li>

                   <li class="nav-item">

                      <a class="nav-link" id="pills-blogs-tab" data-toggle="pill" href="#pills-blogs" role="tab" aria-controls="pills-blogs" aria-selected="false">My Blogs</a>

                   </li>

                </ul>

          <div class="tab-content" id="pills-tabContent">

              

                   <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel" aria-labelledby="pills-dashboard-tab">

                      <?php include('dashboard_tab_inc.php')?>  

                   </div>

                   <div class="tab-pane" id="pills-members" role="tabpanel" aria-labelledby="pills-members-tab">                    

                      <?php include('dashboard_courses_inc.php')?>

                   </div>

                  <div class="tab-pane fade" id="pills-my_profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                          <?php
                                          // Check if the user ID is passed via query string, otherwise default to the logged-in user
                                          $user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : get_current_user_id();
                                          ?>

                                       <!-- Profile Display: Personal Information -->
                                       <br><br><br><br><hr>
                                    <div class="profile-section" style="margin-bottom: 40px;">
                                          <?php
                                          // Include the profile display template from the Astra theme directory
                                          include get_template_directory() . '/profile_display_personal_info.php';
                                          echo "<br>";                                        
                                          // include get_template_directory() . '/profile_display_experience.php';


                                          ?>
                                    </div>

                                       <!-- Profile Display: Skills -->
                                       <div class="profile-section" id="skills-section" style="margin-bottom: 40px;">
                                          <?php
                                          // Include the profile display template from the Astra theme directory
                                          include get_template_directory() . '/profile_display_skills.php';
                                          ?>
                                    </div>
                                    <!-- Profile Display: Experience -->
                                       <div class="experience-section profile-section" style="margin-bottom: 40px;">
                                          <?php
                                          // Include the profile display template from the Astra theme directory
                                          include get_template_directory() . '/profile_display_experience.php';
                                          ?>
                                       </div>




                         


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

            <?php  ?>

            <div class="btm_pagination_sec">

                <nav aria-label="Page navigation example">

                   <ul class="pagination justify-content-end">

                      <?php 

                         $big = 999999999; // need an unlikely integer

                         echo paginate_links( array(

                            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),

                            'format' => '<li>?paged=%#%</li>',

                            'current' => max( 1, get_query_var('paged') ),

                            'total' => $loop->max_num_pages ) );

                         ?>

                   </ul>

                </nav>

             </div>

        </div>

   </div>

   <?php include('common_user_footer.php'); } else {

        header("Location:/login/");} ?>

</div>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

      <div class="modal-dialog  modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

         <div class="modal-content">

            <div class="modal-body">

               <div class="blog_grid">

                  <div class="row">

                     <div class="col-xl-4 col-lg-4 col-md-4 col-4">

                     </div>

                     <div class="col-xl-4 col-lg-4 col-md-4 col-4 text-center">

                        <h5 class="modal-title " id="exampleModalLongTitle">Add Member</h5>

                     </div>

                     <div class="col-xl-4 col-lg-4 col-md-4 col-4">

                        <button type="button" class="close" style="font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%" data-dismiss="modal">&times;</button>  

                     </div>

                     <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                        <div class="serch_sec_top">

                           <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search member here">

                        </div>

                     </div>

                  </div>

                  <br>

                  <div class="grid-container">

                     <div href="#" class="mt-1 mr-1">

                        <div class="member_box grid-item text-center">

                           <div class="dropdown">

                              <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                              <i class="fa-solid fa-ellipsis-vertical"></i>

                              </a>

                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                 <a class="dropdown-item" href="#">Allow Permissiom</a>

                                 <a class="dropdown-item" href="#">Remove</a>

                              </div>

                           </div>

                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png">

                           <div class="">

                              <h5 class="mt-2">Josephine Arden</h5>

                              <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

                           </div>

                           <div class="to_donate">

                              <button class="btn btn_donate mt-2">Invite</button>

                           </div>

                        </div>

                     </div>

                     <a href="#" class="mt-1 mr-1">

                        <div class="member_box grid-item text-center">

                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_4_icon.png">

                           <div class="">

                              <h5 class="mt-2">Josephine Arden</h5>

                              <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

                           </div>

                           <div class="to_donate">

                              <button class="btn btn_donate mt-2">Invite</button>

                           </div>

                        </div>

                     </a>

                     <a href="#" class="mt-1 mr-1">

                        <div class="member_box grid-item text-center">

                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png">

                           <div class="">

                              <h5 class="mt-2">Josephine Arden</h5>

                              <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

                           </div>

                           <div class="to_donate">

                              <button class="btn btn_donate mt-2">Invite</button>

                           </div>

                        </div>

                     </a>

                     <a href="#" class="mt-1 mr-1">

                        <div class="member_box grid-item text-center">

                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_2_icon.png">

                           <div class="">

                              <h5 class="mt-2">Josephine Arden</h5>

                              <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

                           </div>

                           <div class="to_donate">

                              <button class="btn btn_donate mt-2">Invite</button>

                           </div>

                        </div>

                     </a>

                     <a href="#" class="mt-1">

                        <div class="member_box grid-item text-center">

                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_1_icon.png">

                           <div class="">

                              <h5 class="mt-2">Josephine Arden</h5>

                              <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

                           </div>

                           <div class="to_donate">

                              <button class="btn btn_donate mt-2 disabled">Invited</button>

                           </div>

                        </div>

                     </a>

                     <a href="#" class="mt-1 mr-1">

                        <div class="member_box grid-item text-center">

                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon4.png">

                           <div class="">

                              <h5 class="mt-2">Josephine Arden</h5>

                              <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

                           </div>

                           <div class="to_donate">

                              <button class="btn btn_donate mt-2">Invite</button>

                           </div>

                        </div>

                     </a>

                     <a href="#" class="mt-1 mr-1">

                        <div class="member_box grid-item text-center">

                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon3.png">

                           <div class="">

                              <h5 class="mt-2">Josephine Arden</h5>

                              <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

                           </div>

                           <div class="to_donate">

                              <button class="btn btn_donate mt-2">Invite</button>

                           </div>

                        </div>

                     </a>

                     <a href="#" class="mt-1 mr-1">

                        <div class="member_box grid-item text-center">

                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/6.png">

                           <div class="">

                              <h5 class="mt-2">Josephine Arden</h5>

                              <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

                           </div>

                           <div class="to_donate">

                              <button class="btn btn_donate mt-2 disabled">Invited</button>

                           </div>

                        </div>

                     </a>

                  </div>

                  <div class="row">

                     <div class="col-xl-4 col-lg-4 col-md-4 col-4">

                     </div>

                     <div class="col-xl-4 col-lg-4 col-md-4 col-4">

                        <br>

                        <div class="apply_btn active">

                           <button class="btn btn_apply">Done</button>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

<div class="modal fade" id="myedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

   <div class="modal-dialog modal-lg modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

      <div class="modal-content">

         <div class="modal-body">

            <form class="personal_info" name="userfrm" method="post" action="" enctype="multipart/form-data">

               <input type="hidden" name="profle_update" value="profle_update">

               <h3>Personal Information</h3>

               <div class="form-row">

                  <div class="col-md-4 mb-3">

                     <label for="validationDefault01">First name</label>

                     <input type="text" class="form-control" id="first_name" name="first_name"  placeholder="First name" value="<?php echo  get_user_meta($current_user->ID,'first_name',true)?>" required>

                  </div>

                  <div class="col-md-4 mb-3">

                     <label for="validationDefault02">Last name</label>

                     <input type="text" class="form-control" id="last_name" name="last_name"   placeholder="Last name" value="<?php echo  get_user_meta($current_user->ID,'last_name',true)?>" required>

                  </div>

                  <div class="col-md-4 mb-3">

                     <label for="validationDefaultUsername">Birth year</label>

                     <input type="number" class="form-control"  name="dob"  id="dob" value="<?php echo  get_user_meta($current_user->ID,'dob',true)?>"  placeholder="DOB" required>

                  </div>

               </div>

               <div class="form-row">

                  <div class="col-md-6 mb-3">

                     <label for="validationDefault04">Gender</label>

                     <div class="form-check">

                        <!--<input class="form-check-input" type="checkbox" name="gendar"  id="gendar" value="Male" <?php //echo (get_user_meta($current_user->ID,'gendar',true)=="Male")?"CHECKED='CHECKED'":"" ?>>

                        <label class="form-check-label" for="defaultCheck1">Male</label>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <input class="form-check-input" type="checkbox" name="gendar"  id="gendar1" value="Female"  <?php //echo (get_user_meta($current_user->ID,'gendar',true)=="Female")?"CHECKED='CHECKED'":"" ?>>

                        <label class="form-check-label" for="defaultCheck1">Female</label>-->



                        <select name="gender">

                        <option value="none" selected>Gender</option>

                        <option id="gendar" value="male"  <?php echo (get_user_meta($current_user->ID,'gendar',true)=="Male")?"SELECT='SELECT'":"" ?>>Male</option>

                        <option id="gendar1" value="female" <?php echo (get_user_meta($current_user->ID,'gendar',true)=="Female")?"SELECT='SELECT'":"" ?>>Female</option>

                        

                     </select>

                     </div>

                  </div>

                  <div class="col-md-3 mb-3">

                     <label for="validationDefault04">State</label>

                     <input type="text" class="form-control"  name="state"  id="state" value="<?php echo  get_user_meta($current_user->ID,'state',true)?>" placeholder="State" required>

                  </div>

                  <div class="col-md-3 mb-3">

                     <label for="validationDefault05">Zip Code</label>

                     <input type="text" class="form-control"  name="code"  id="code" value="<?php echo  get_user_meta($current_user->ID,'code',true)?>" placeholder="Code" required>

                  </div>

               </div>

               <div class="form-row">

                  <div class="col-md-6 mb-3">

                     <label for="validationDefault03">Race/Ethnicity</label>

                     <input type="text" class="form-control"  name="race"  id="race" value="<?php echo $race;?>" placeholder="Race/Ethnicity" required>

                  </div>

                  <div class="col-md-6 mb-3">

                     <label for="validationDefault04">Language</label>

                     <input type="text" class="form-control"  name="language"  id="language" value="<?php echo  get_user_meta($current_user->ID,'language',true)?>" placeholder="Language" required>

                  </div>

               </div>

               <div class="form-row">

                  <div class="col-md-6 mb-3">

                     <label for="validationDefault03">Have you worked on a hazardous waste site in the past year?</label>

                     <input type="text" class="form-control"  name="desc"  id="desc" value="<?php echo  get_user_meta($current_user->ID,'desc',true)?>" placeholder="Have you worked on a hazardous waste site in the past year?" required>

                  </div>

                  <div class="col-md-6 mb-3">

                     <label for="validationDefault05" style="margin-bottom: 29px;">Highest Education level</label>

                     <input type="text" class="form-control"  name="education"  id="education" value="<?php echo  get_user_meta($current_user->ID,'education',true)?>" placeholder="Education" required>

                  </div>

               </div>

               <button class="btn btn-primary" type="submit">Submit</button>

            </form>

         </div>

      </div>

   </div>

</div>

<div class="modal fade" id="skillsedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

   <div class="modal-dialog modal-lg modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

      <div class="modal-content">

         <div class="modal-body">

            <form class="personal_info" name="userfrm" method="post" action="" enctype="multipart/form-data">

               <input type="hidden" name="skill_update" value="skill_update">

               <h3>Skills</h3>

               <div class="form-row">

                  <div class="col-md-4 mb-3">

                     <input type="text" class="form-control" id="skill_type" name="skill_type" placeholder="Skills" value="" required>

                  </div>

               </div>

               <button class="btn btn-primary" type="submit">ADD</button>

            </form>

         </div>

      </div>

   </div>

</div>



<script>

var curtab = window.location.href; // Get the url

    curtab = curtab.split("#"); // Split the url at #

    curtab = "#" + curtab[1]; // Put the info after the # in a variable



    $("a.tab").each(function(i){ // Loop through all links and compare tab from url with value in link

        if(curtab == $(this).attr("href")){

            $(this).addClass("active"); // If they are the same, set that tab's class to active

        }

    });



$("a.tab").click(function(){ // Select tab

        $(".active").removeClass("active"); // Select the a, remove class for every link

        $(this).addClass("active"); // Select the clicked tab and add an active class

        var tabtocall = $(this).children().attr("href"); // Var to select current clicked tab

        $(".content").slideUp; // Slide up all content

        $(tabtocall).slideDown("normal"); // Slide down the selected content

    });



</script>

<script>

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





      /*$(".acceptInvitation").click(function() {

        

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

             // data : {"action": "lmuser_add_in_group", "uid" :invited_from,"nonce": "<?php echo $nonce?>"},

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



        });*/

        

        

        

        $(".acceptInvitation").click( function(e) {

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

                 $('#GroupeModalCenter').modal('show');



                

             }

          })   



       })

        

        

        







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

<script>

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

    document.addEventListener('DOMContentLoaded', function() {
    var currentPage = "<?php echo $current_page; ?>";

    if (currentPage === 'my-profile') {
        // Simulate a click on the tab element
        var profileTab = document.getElementById('pills-profile-tab');
        if (profileTab) {
            profileTab.click();
        }

        // Wait for 1 second (1000 milliseconds) before scrolling
        setTimeout(function() {
            // Scroll to #skills-section and position it in the middle of the viewport
            

            // Get query parameter by name (id)
            var id = getParameterByName('id');
            if (id === 'skills' && id !== null) {
               console.log('skills');
               if ($('#skills-section').length) {
                var sectionOffset = $('#skills-section').offset().top;
                var middleOfViewport = $(window).height() / 2;

                $('html, body').animate({
                    scrollTop: sectionOffset - middleOfViewport + ($('#skills-section').outerHeight() / 2)
                }, 500);
               }

               
            }
        }, 500); // Delay of 1 second
    }
});


document.addEventListener('DOMContentLoaded', function() {
    var currentPage = "<?php echo $current_page; ?>";

    if (currentPage === 'my-profile') {
        // Simulate a click on the tab element
        var profileTab = document.getElementsByClassName('pills-profile-tab')[0]; // [0] for the first element with this class

        if (profileTab) {
            profileTab.click();
        }

        // Wait for 0.5 seconds (500 milliseconds) before scrolling
        setTimeout(function() {
            // Get query parameter by name (for example, "class")
            var queryParamClass = getParameterByName('id');
            
            if (queryParamClass === 'experience') {
                console.log('experience');
                if ($('.experience-section').length) {
                    var sectionOffset = $('.experience-section').offset().top;
                    var middleOfViewport = $(window).height() / 2;

                    $('html, body').animate({
                        scrollTop: sectionOffset - middleOfViewport + ($('.experience-section').outerHeight() / 2)
                    }, 500);
                }
            }
        }, 500); // Delay of 0.5 seconds
    }
});

// Function to get query parameter by name
function getParameterByName(name) {
    var url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}




// Function to get query parameter by name
function getParameterByName(name) {
    name = name.replace(/[\[\]]/g, "\\$&");
    var url = window.location.href;
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)");
    var results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}




</script>
