<?php 

   /* Template Name: Abhi Knowledge center course details */

   if ( is_user_logged_in() ) {



    get_header('new'); ?>

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
<div class="notification_sec"> <?php echo basename(__FILE__); ?> <!-- Outputs the filename -->
    margin-top: 40px;

    float: right;<div class="notification_sec"> <?php echo basename(__FILE__); ?> <!-- Outputs the filename -->

}

</style>





<div class="col-xl-12 coordination-center-tracking course-details1-temp">

<div class="row justify-content-end mt-3">



            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">

                <div class="col-xl-3 col-lg-3 col-md-4 order-lg-1 order-1">

                    <div class="top_title">

                        <h5>Donate</h5>

                    </div>

                </div>

                <div class="col-xl-5 col-lg-5 col-md-8 order-lg-2 order-3">

                    <div class="serch_sec_top">

                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search for resources, reports, forms etc">

                    </div>

                </div>

                <?php $avatar_url = get_avatar_url(get_avatar( $curauth->ID, 100 ), array("size"=>50)); ?>

                <div class="col-xl-4 col-lg-4 col-md-8 order-lg-3 order-2">

                <div class="right_top_sec">

                        <div class="notification_sec">

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/notifiocation_icon.png" class="img-fluid"></a>

                        </div> 

                        <div class="notification_sec">

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chat_icon.png" class="img-fluid"></a>

                        </div>                         

                        <div class="back_bg">

                            <div class="dropdown right_dropdown">

                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <?php echo $current_user->user_login ?> <img src="<?php echo $avatar_url; ?>" class="img-fluid mr-2 profile_icn"><i class="fas fa-ellipsis-v"></i>

                                </button>

                                <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuButton" >

                                    <button class="dropdown-item profile_main_drop" onclick="window.location.href='<?php echo get_site_url(); ?>/my-profile/';" type="button">

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/my_profile_icon.png" class="img-fluid"> My Profile

                                    </button>

                                    <button class="dropdown-item" type="button">

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logout_icon.png" class="img-fluid"> Logout

                                    </button>                                       

                                </div>

                            </div>

                        </div>                      

                    </div>

                </div>                

            </div>

        </div>



        <!-- Main Contents-->

          <div class="container mt-5">

            <div class="row">

              <div class="col-md-12">

                <div class="knowledge-course-detail p-4">

                  <div class="row">

                    <div class="col-md-8">

                  <div class="course_details_img">

                    <img src="https://knowledge.communication.worldcares.org/wp-content/uploads/2022/12/covid.jpg" class="img-fluid">

                  </div>

                    </div>

                    <div class="col-md-4">

                  <div class="row d-flex align-items-center mb-3">

                    <div class="col-md-6">

                      <div class="course-content">

                        <h3>Course Content Avni</h3>

                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="back_btn mt-0">

                       <a href="<?php echo get_site_url(); ?>/knowledge-center/">Back</a>

                      </div>

                    </div>

                  </div>



              <?php global $post; 

                $user_id = get_current_user_id();

                $course_id = get_queried_object_id();       

                $dd =  ld_update_course_access( $user_id, $course_id);    

                     ld_update_course_access( $user_id, $course_id );

                     ld_course_access_from_update( $course_id, $user_id);

                //echo $course_id."---".$user_id."---"; print_r($dd);   

                $courseList = learndash_get_course_lessons_list($course_id);

              ?>





               <?php        

                  //echo '<pre>'; echo($courseList[1]['permalink']);

                   /*foreach ($lists as $list) {

                   $featured_img_url = get_the_post_thumbnail_url($list['post']->ID);*/

                  $lession_url = "";

                  if(!empty($courseList)){

                     $lession_url = $courseList[1]['permalink'];

                  }else{

                       $lession_url = "#";

                  }

                  if ( !is_user_logged_in() ) {

                     $lession_url = site_url('login');

                  } 

                ?>





                  <div class="row">

                    <div class="col-md-12">

                      <div class="course-detail-item">

                        <div class="accordion-item">

                           <a href="<?php echo $lession_url; ?>">

                              <header class="item-header">

                                 <h4 class="item-question">

                                    Course Content

                                 </h4>

                                 <div class="item-icon">

                                    <i class="fa fa-angle-right" aria-hidden="true"></i>

                                 </div>

                              </header>

                           </a>

                        </div>



                     



                        <div class="accordion-item">

                          <a href="<?php echo $lession_url; ?>">

                              <header class="item-header">

                                 <h4 class="item-question">

                                    Evolution

                                 </h4>

                                 <div class="item-icon">

                                    <i class="fa fa-angle-right" aria-hidden="true"></i>

                                 </div>

                              </header>

                           </a>

                        </div>



                        <div class="accordion-item">

                        <?php

                              function wpse_101072_flatten_hierarchies( $post_link, $post ) {

                              if ( 'sfwd-quiz' != $post->post_type )

                                  return $post_link;



                              $uri = '';

                              foreach ( $post->ancestors as $parent ) {

                                  $uri = get_post( $parent )->post_name . "/" . $uri;

                              }



                              return str_replace( $uri, '', $post_link );

                          }

                          add_filter( 'post_type_link', 'wpse_101072_flatten_hierarchies', 10, 2 ); 



                          $oo =  learndash_get_course_quiz_list(get_the_ID());



                                //echo '<pre>'; print_r($oo);echo '</pre>';

                                    if(!empty($oo)){

                                        foreach($oo as $val){

                        ?>



                          <a href="<?php echo get_permalink($val['id']); ?>">

                            <header class="item-header">

                               <h4 class="item-question">

                                  Knowledge Check

                               </h4>

                               <div class="item-icon">

                                  <i class="fa fa-angle-right" aria-hidden="true"></i>

                               </div>

                            </header>

                          </a>

                           <?php }

                                

                            }else {

                            ?>



                             <a href="<?php echo get_permalink($val['id']); ?>">

                                <header class="item-header">

                                   <h4 class="item-question">

                                      Knowledge Check

                                   </h4>

                                   <div class="item-icon">

                                      <i class="fa fa-angle-right" aria-hidden="true"></i>

                                   </div>

                                </header>

                              </a>



                           <?php }?>



                        </div>

                      </div>

                    </div>

                  </div>

                    </div>

                    <div class="col-md-8">

                      <div>

                        <div class="col-md-12">

                          <div class="d-flex justify-content-between mt-4">

                            <div class="mt-4">

                               <h3>Course Name</h3>

                            </div>

                          </div>

                          <div>

                            <div class="course-meta mt-4">

                              <ul>

                                <li>2 Total hour</li>

                                <li>* All Levels</li>

                              </ul>

                            </div>

                          </div>

                          <div>

                            <p>

                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.

                            </p>

                          </div>

                          

                        </div>

                      </div>

                      <div class="column-course-detail-tab mt-4">

                        <ul class="nav nav-pills mb-3 d-flex align-items-center" id="pills-tab" role="tablist">

                            <li class="nav-item">

                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">About</a>

                            </li>

                            <li class="nav-item">

                              <a class="nav-link" id="pills-pricing-tab" data-toggle="pill" href="#pills-pricing" role="tab" aria-controls="pills-pricing" aria-selected="false">Learning Objectives</a>

                            </li>

                            <li class="nav-item">

                              <a class="nav-link" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-about" aria-selected="false">Agenda</a>

                            </li>

                            <li class="nav-item">

                              <a class="nav-link" id="pills-news-tab" data-toggle="pill" href="#pills-news" role="tab" aria-controls="pills-news" aria-selected="false">Course Details</a>

                            </li>

                          </ul>

                          <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                              <div class="row">

                                <div class="col-md-12">

                                   <?php if(get_field('course_description')) { ?>

                                      <p><?php echo get_field('course_description'); ?></p>

                                  <?php } else { ?>

                                      <p>There is no course content.</p>

                                  <?php } ?>

                                </div>

                              </div>

                            </div>

                            <div class="tab-pane fade" id="pills-pricing" role="tabpanel" aria-labelledby="pills-pricing-tab">

                              <div class="row">

                                <div class="col-md-12">

                                 <?php if(get_field('learning_objectives')) { ?>

                                    <p><?php echo get_field('learning_objectives'); ?></p>

                                <?php }else { ?>

                                    <p>There is no course content.</p>

                                <?php } ?>

                                </div>

                              </div>

                            </div>

                            <div class="tab-pane fade" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">

                              <div class="row">

                                <div class="col-md-12">

                                   <?php if(get_field('agenda')) { ?>

                                        <p><?php echo get_field('agenda'); ?></p>

                                    <?php }else { ?>

                                        <p>There is no course content.</p>

                                    <?php } ?>

                                </div>

                              </div>

                            </div>

                            <div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">

                              <div class="row">

                                <div class="col-md-12">

                                  <table>

                                    <tbody>

                                       <?php if(get_field('course_hour')) { ?>

                                              <tr>

                                                  <td><b>Course Hours : </b></td>

                                                  <td><?php echo get_field('course_hour'); ?></td>

                                              </tr>

                                          <?php } if(get_field('language')) {  ?>

                                          <tr>

                                              <td><b>Language :</b></td>

                                              <td><?php echo get_field('language'); ?></td>

                                          </tr>

                                          <?php } if(get_field('intended_audiance')) { ?>

                                              <tr>

                                                  <td><b>Intended Audiance :</b></td>

                                                  <td><?php echo get_field('intended_audiance'); ?></td>

                                              </tr>

                                          <?php } if(get_field('delivery_method')) { ?>

                                              <tr>

                                                  <td><b>Delivery Method :</b></td>

                                                  <td><?php echo get_field('delivery_method'); ?></td>

                                              </tr>

                                          <?php } ?>  

                                    </tbody>

                                  </table>

                                   <?php if(!get_field('course_hour') || !get_field('language') || !get_field('intended_audiance') || !get_field('delivery_method') ) { 

                                      echo "No data to show";

                                   } ?>

                                </div>

                              </div>

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



<script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/jquery.min.js"></script>

    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/popper.min.js"></script>

    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/bootstrap.min.js"></script>   

    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/owl.carousel.min.js"></script>



    <script>      



<?php get_footer('new'); } ?>