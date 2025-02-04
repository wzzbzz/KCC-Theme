<?php

/* Template Name: User Dashboard */

if (is_user_logged_in()) {

   $current_page = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
  // $id = $_GET['id'];

   global $wpdb;

   if (isset($_POST['profle_update'])) {

      $userData = $_POST;

      $userData['ID'] = $current_user->ID;

      $userData['user_nicename'] = $_POST['first_name'];

      $userData['display_name'] =  $_POST['first_name'] . " " . $_POST['last_name'];

      $userData['nickname']  =     $_POST['first_name'];

      foreach ($userData as $key => $value) {

         update_user_meta($current_user->ID, $key, esc_attr(esc_attr($value)));
      }

      wp_update_user($userData);

      wp_redirect(get_permalink());
   }



   if (isset($_POST['exp_update'])) {

      $expData = array(

         'user_id' =>  $current_user->ID,

         'disaster_type' => esc_attr($_POST['disaster_type']),

         'role_type' => esc_attr($_POST['role_type']),

         'exp_date' => esc_attr($_POST['exp_date']),

         'disaster_desc' => esc_attr($_POST['disaster_desc'])

      );



      $wpdb->insert('user_experience', $expData);

      wp_redirect(get_permalink());
   }



   if (isset($_POST['skill_update'])) {

      $expData = array(

         'user_id' =>  $current_user->ID,

         'skill_type' => esc_attr($_POST['skill_type'])

      );

      $wpdb->insert('user_skills', $expData);

      wp_redirect(get_permalink());
   }



   if (isset($_POST['delete_account'])) {

      $expData = array(

         'user_id' =>  $current_user->ID,

      );

      $table = "wp_users";

      $wpdb->delete($table, array('ID' => $current_user->ID));

      wp_redirect('https://knowledge.communication.worldcares.org/');
   }



   if (isset($_GET['mode']) && $_GET['mode'] == 'skill' && !empty($_GET['skill_id'])) {

      $id = $_GET['skill_id'];

      $table = 'user_skills';

      $dd =  $wpdb->delete($table, array('id' => $id, 'user_id' => $current_user->ID));

      wp_redirect(get_permalink());
   }



   if (isset($_GET['mode']) && !empty($_GET['id'])) {



      $id = $_GET['id'];

      $table = 'user_experience';

      $dd =  $wpdb->delete($table, array('id' => $id, 'user_id' => $current_user->ID));

      wp_redirect(get_permalink());
   }

   $userDetails1 =   get_user_meta($current_user->ID);

   $expList = $wpdb->get_results("SELECT * FROM user_experience WHERE user_id = '" . $current_user->ID . "' ", ARRAY_A);

   $skillList = $wpdb->get_results("SELECT * FROM user_skills WHERE user_id = '" . $current_user->ID . "' ", ARRAY_A);

   get_header('dashboard');
?>



   <div class="profile-page-main">

      <div class="row justify-content-end mt-3">

         <div class="col-xl-11 col-lg-11 col-md-11 col-10 ">

            <div class="donation_tab_pills">

               <div class="donate_detais_main profile_img">

                  <!-- <img src="<?php //echo get_template_directory_uri(); 
                                 ?>/assets/images/detail_click.png" class="img-fluid membergroup-img pro_img1" alt="image"> -->

                  <?php

                  $cover_img = get_user_meta($current_user->ID, 'cover_photo', true);

                  if (empty($cover_img)) {

                     $cover_img = "https://via.placeholder.com/1920x318";
                  }

                  ?>

                  <div class="avatar-preview">

                     <div id="imagePreview" class="profile-cover-image" style="background-image: url('<?php echo $cover_img; ?>');">

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

                        <span class="display_pic"><img class="image1" src="<?php echo $avatar_url; ?>"> </span>

                     </div>

                     <div class="profile_user_details2 align-self-end">

                        <span class="display_name d-block"><?php echo  $current_user->first_name ?> <?php echo  $current_user->last_name ?></span>

                        <span class="display_email d-block"><?php echo  $current_user->user_email ?></span>

                     </div>

                     <div class=" profile_count d-lg-flex d-md-flex align-self-end">

                        <div class="profile_count_main d-lg-flex d-md-flex justify-content-between px-2 align-items-center">

                           <div class="profile_count1 d-flex justify-content-start align-items-center">

                              <div class="px-2"><span><?php echo myFollowing() ?></span></div>

                              <div class="">

                                 <p>Connects</p>

                              </div>

                           </div>

                           <div class=" profile_count2 d-flex justify-content-start align-items-center">

                              <div class="px-3"><span><?php echo count_user_posts($current_user->ID, 'groups') ?></span></div>

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

                     <?php include('dashboard_tab_inc.php') ?>

                  </div>

                  <div class="tab-pane" id="pills-members" role="tabpanel" aria-labelledby="pills-members-tab">

                     <?php include('dashboard_courses_inc.php') ?>

                  </div>

                  <div class="tab-pane fade" id="pills-my_profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                     <?php
                     // Check if the user ID is passed via query string, otherwise default to the logged-in user
                     $user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : get_current_user_id();
                     ?>

                     <!-- Profile Display: Personal Information -->
                     <br><br><br><br>
                     <hr>
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

                     <?php include('dashboard_reports_inc.php'); ?>

                  </div>

                  <div class="tab-pane fade" id="pills-blogs" role="tabpanel" aria-labelledby="pills-blog-tab">

                     <?php include('dashboard_blogs_inc.php'); ?>

                  </div>

               </div>

            </div>

            <?php  ?>

            <div class="btm_pagination_sec">

               <nav aria-label="Page navigation example">

                  <ul class="pagination justify-content-end">

                     <?php

                     $big = 999999999; // need an unlikely integer

                     echo paginate_links(array(

                        'base' => str_replace($big, '%#%', get_pagenum_link($big)),

                        'format' => '<li>?paged=%#%</li>',

                        'current' => max(1, get_query_var('paged')),

                        'total' => $loop->max_num_pages
                     ));

                     ?>

                  </ul>

               </nav>

            </div>

         </div>

      </div>

   <?php
} else {

   header("Location:/login/");
} ?>

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

                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="<?php echo  get_user_meta($current_user->ID, 'first_name', true) ?>" required>

                     </div>

                     <div class="col-md-4 mb-3">

                        <label for="validationDefault02">Last name</label>

                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="<?php echo  get_user_meta($current_user->ID, 'last_name', true) ?>" required>

                     </div>

                     <div class="col-md-4 mb-3">

                        <label for="validationDefaultUsername">Birth year</label>

                        <input type="number" class="form-control" name="dob" id="dob" value="<?php echo  get_user_meta($current_user->ID, 'dob', true) ?>" placeholder="DOB" required>

                     </div>

                  </div>

                  <div class="form-row">

                     <div class="col-md-6 mb-3">

                        <label for="validationDefault04">Gender</label>

                        <div class="form-check">

                           <!--<input class="form-check-input" type="checkbox" name="gendar"  id="gendar" value="Male" <?php //echo (get_user_meta($current_user->ID,'gendar',true)=="Male")?"CHECKED='CHECKED'":"" 
                                                                                                                        ?>>

                        <label class="form-check-label" for="defaultCheck1">Male</label>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <input class="form-check-input" type="checkbox" name="gendar"  id="gendar1" value="Female"  <?php //echo (get_user_meta($current_user->ID,'gendar',true)=="Female")?"CHECKED='CHECKED'":"" 
                                                                                                                     ?>>

                        <label class="form-check-label" for="defaultCheck1">Female</label>-->



                           <select name="gender">

                              <option value="none" selected>Gender</option>

                              <option id="gendar" value="male" <?php echo (get_user_meta($current_user->ID, 'gendar', true) == "Male") ? "SELECT='SELECT'" : "" ?>>Male</option>

                              <option id="gendar1" value="female" <?php echo (get_user_meta($current_user->ID, 'gendar', true) == "Female") ? "SELECT='SELECT'" : "" ?>>Female</option>



                           </select>

                        </div>

                     </div>

                     <div class="col-md-3 mb-3">

                        <label for="validationDefault04">State</label>

                        <input type="text" class="form-control" name="state" id="state" value="<?php echo  get_user_meta($current_user->ID, 'state', true) ?>" placeholder="State" required>

                     </div>

                     <div class="col-md-3 mb-3">

                        <label for="validationDefault05">Zip Code</label>

                        <input type="text" class="form-control" name="code" id="code" value="<?php echo  get_user_meta($current_user->ID, 'code', true) ?>" placeholder="Code" required>

                     </div>

                  </div>

                  <div class="form-row">

                     <div class="col-md-6 mb-3">

                        <label for="validationDefault03">Race/Ethnicity</label>

                        <input type="text" class="form-control" name="race" id="race" value="<?php echo $race; ?>" placeholder="Race/Ethnicity" required>

                     </div>

                     <div class="col-md-6 mb-3">

                        <label for="validationDefault04">Language</label>

                        <input type="text" class="form-control" name="language" id="language" value="<?php echo  get_user_meta($current_user->ID, 'language', true) ?>" placeholder="Language" required>

                     </div>

                  </div>

                  <div class="form-row">

                     <div class="col-md-6 mb-3">

                        <label for="validationDefault03">Have you worked on a hazardous waste site in the past year?</label>

                        <input type="text" class="form-control" name="desc" id="desc" value="<?php echo  get_user_meta($current_user->ID, 'desc', true) ?>" placeholder="Have you worked on a hazardous waste site in the past year?" required>

                     </div>

                     <div class="col-md-6 mb-3">

                        <label for="validationDefault05" style="margin-bottom: 29px;">Highest Education level</label>

                        <input type="text" class="form-control" name="education" id="education" value="<?php echo  get_user_meta($current_user->ID, 'education', true) ?>" placeholder="Education" required>

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

<?php get_footer(); ?>