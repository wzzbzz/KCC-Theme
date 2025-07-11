<?php
$current_user = wp_get_current_user();
?>
<style>
   .dropdown.right_dropdown button.dropdown-toggle {
      background: transparent;
   }

   .top_title h5 {
      font-size: 27px;
   }

   .top_center_main {
      margin-left: 15px;
   }

   /*.align-items-center {align-items: Center; display:flex;top: 10px; margin-bottom: 30px; margin-right: 20px;}*/
   .dropdown.right_dropdown .dropdown-toggle img {
      margin-right: 3px;
   }

   .dropdown-item {
      background: none;
   }

   .dropdown-item a {
      color: #F92903;
   }
</style>

<!--<div class="col-2 d-none">
            <div>
               <a href="javascript:void(0);"  id="show-icon"><i class="fa fa-bars"></i></a>
            </div>
         </div>-->
<div class="col-xl-3 col-lg-3 col-md-4 order-lg-1 order-1 col-12">
   <div class="top_title">
      <h5><?php the_title() ?></h5>
   </div>
</div>
<div class="col-xl-5 col-lg-5 col-md-8 order-lg-2 order-3 col-12">
   <div class="serch_sec_top">
      <form method="get" action="<?php echo site_url('search-results') ?>" name="frmSearch" id="frmSearch">
         <input type="text" class="form-control" name="q" id="q" aria-describedby="emailHelp" placeholder="Search for resources, reports, forms, etc.">
      </form>
   </div>
</div>
<div class="col-xl-4 col-lg-4 col-md-8 order-lg-3 order-2 col-12">
   <div class="right_top_sec">
      <?php include(__DIR__ . '/user_notification_icons.php'); ?>

      <div class="back_bg">
         <?php
         $avatar_url = get_avatar_url($current_user->ID,   array("size" => 50));
         ?>
         <div class="dropdown right_dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <?php echo  $current_user->first_name ?> <?php echo  $current_user->last_name ?>
               <img src="<?php echo $avatar_url; ?>" class="img-fluid mr-2 profile_icn"><i class="fas fa-ellipsis-v"></i>


            </button>
            <div class="dropdown-menu text-right logout-button" aria-labelledby="dropdownMenuButton">
               <button class="dropdown-item profile_main_drop" type="button" onclick="window.location.href='<?php echo get_site_url(); ?>/my-profile/';">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/my_profile_icon.png" class="img-fluid"> My Profile
               </button>
               <button class="dropdown-item" type="button">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logout_icon.png" class="img-fluid"> <a href="<?php echo wp_logout_url('login'); ?>">Logout</a>
               </button>
            </div>
         </div>
      </div>
   </div>
</div>



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->