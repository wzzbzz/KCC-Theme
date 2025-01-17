<?php 
   /* Template Name: User Edit Skills */
   if ( is_user_logged_in() ) {
     global $wpdb;
   if(isset($_POST['profle_update']))
   {
   
       $userData = $_POST;
       $userData['ID'] = $current_user->ID;
       $userData['user_nicename'] = $_POST['first_name'];
       $userData['display_name'] =$_POST['first_name']." ".$_POST['last_name'];
       $userData['nickname']  =  $_POST['first_name'];
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
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">     
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">     
<style>

.skills_add_b{border: 1px dashed #D3D3D3; background:none;height: 45px; width: 100px; justify-content: center;border-radius: 15px;}
.skills_add_b button{background:none;padding: 0px 10px;font-size: 16px; color:#242424;}
.skill_add1 .col-md-4{ background:none!important;}
.input_main1 .row .col-md-3{max-height:45px;}

.skills_add_b button:hover {
    color: #242424;
    background: transparent;
}
.input_main1 .skill {
    margin: 0px 8px;
    padding: 4px 5px;
    background: #f8f8f8;
    border-radius: 10px;
    height: 50px;
}

.skill_add1 input{
  background: #f8f8f8; 
}
.close {
    opacity: 1;
}
</style>

<?php  
   ?>






<div class="col-xl-12 profile-page-main">
        <div class="row justify-content-end mt-3">
            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
               <?php include('user_topbar.php')?>
            </div>
                    <div class="row second_input w-100 justify-content-end">
                        <div class=" col-md-11 m-3">
                        <div class="d-flex align-items-center justify-content-between grp_box">
                        <div class="g_group_box_new">
                            <!--<ul class="nav nav-pills mb-3 linked_blog" id="pills-tab" role="tablist">
                                <li class="nav-item group_btn">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All</a>
                                </li>
                                <li class="nav-item group_btn">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">My Groups</a>
                                </li>
                            </ul>-->
                        </div>
                    <div class="back_btn">
                        <a href="<?php echo site_url('my-profile')?>">Back</a>
                    </div>
                    </div>
                            <div class="input_main1 mt-4">
                               <div class="input_hed mt-3 nav nav-pills nav-pills1 mb-3 blog_u justify-content-between">
                                  <div class="align-items-center pro_img"><!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/profile_settting.png"> --><span>Edit Skills</span></div>
                                  <!-- <div class="align-items-center pro_ico"><img src="<?php //echo get_template_directory_uri(); ?>/assets/images/Union 4.png"><span><a href="#" data-toggle="modal" data-target="#skillsedit">Edit Skills</a></span></div> -->
                               </div>
                               <div class="row">
                                  <?php if(!empty($skillList)){
                                     foreach ($skillList as $key => $skill) {?>  
                                    <div class="d-flex justify-content-between col-md-2 align-items-center mb-3 skill">
                                        
                                            <div class="col-md-9"><?php echo $skill['skill_type']?>
                                            </div>
                                            <div class="col-md-3">
                                                <a  href="<?php echo site_url("my-profile?mode=skill&skill_id=".$skill['id'])?>" class="close" style=" data-dismiss="modal"><i class="fa fa-trash-o" style="color:#F96703;" aria-hidden="true"></i></a>
                                            </div>
                                        
                                    </div>
                                    <?php }
                                     }?>
                                    <div class="col-md-12">
                                      <div class="skill_add align-items-center">
                                        <form class="personal_info" name="userfrm" method="post" action="" enctype="multipart/form-data">
                                        <input type="hidden" name="skill_update" value="skill_update">
                                            <div class="form-row skill_add1">
                                                <div class="col-md-2 mb-3">
                                                    <input type="text" class="form-control" id="skill_type" name="skill_type" placeholder="Skills" value="" required>
                                                </div>
                                                <div class="pro_ico skills_add_b">
                                                    <button class="" type="submit">ADD</button>
                                                </div>
                                            </div>
                                        
                                        </form>
                                      </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
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
</div>
<?php

$nonce = wp_create_nonce("send_group__nonce");
$ajaxUrl = admin_url('admin-ajax.php?action=send_group_reques&nonce='.$nonce);
?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

<?php get_footer('new'); } else {

header("Location:/login/");

} ?>