<style type="text/css">

   .user-dashboard-tab .top-title .bottom-card .msg-bx .text .time {

    position: absolute;

    top: -32px;

    right: 0px;

}

.pro-per h5{

    color:#F96703;

    font-size: 15px;

}

.pro-per .complete_pro{

    color:#4ABE2B;

    font-size: 13px;  

}

.user-dashboard-tab .top-title .bottom-card .msg-bx .text .time {

    border-radius: 6px;

    opacity: 1;

    padding: 3px 10px;

}

.my-course-ap-profile .top-title .bottom-card .msg-bx{

   padding: 30px 15px;

}

.user-dashboard-tab .top-title .bottom-card .know-center .text h2{

   padding-top: 5px;

}

.pro-per .complete_pro {

    color: #4ABE2B;

    font-size: 13px;

}

.progress {

    width: 100%;

    border-radius: 50px;

    background-color: #ffffff;

    position: relative;

    cursor: pointer;

    margin: 8px 0px 5px 0px;

}

.progress-bar {

    display: flex;

    flex-direction: column;

    justify-content: center;

    color: #fff;

    text-align: center;

    transition: width .6s ease;

    border-radius: 50px;

}

.right_side_know h3 {

    font-size: 16px;

    color: #242424;

    margin: 0.5rem 0rem;

    font-weight: 550;

}

.right_side_know h3 a {

    color: #000;

    font-weight: 550;

}

</style>

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

   <li class="nav-item">

      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">My Courses</a>

   </li>

   <li class="nav-item">

      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">My Certificates</a>

   </li>

</ul>

<div class="tab-content" id="pills-tabContent">

   <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

      <div class="row user-dashboard-tab mt-4 my-course-ap-profile">

         <?php 

                                //ld_update_course_access( $user_id, $course_id, $remove = false );

                                $user = new WP_User(get_current_user_id());

                                        $arrays = learndash_get_user_courses_from_meta(get_current_user_id());

                                        foreach($arrays as $arr1){

                                        $arr2 = learndash_course_status($arr1);

                                        

                                        $course = get_post($arr1);

                                        

                                         $progress= learndash_user_get_course_progress(get_current_user_id(),  $course->ID, $type = 'summary' );



                                       

                                              if($progress['total'] == 0)

                                                 { 

                                                   $percentage = 0;

                                                 }

                                                 else

                                                 {

                                                     $percentage = $progress['completed'] / $progress['total'];   

                                                 }

                                         

                                        $id = $user->ID;

                                        $name = get_user_meta( $id, 'up_update_user_firstname', true);

                                       

                                        if($arr2 !='Completed') {  

                                       ?>

                                    <div class="col-xl-6 pt-4">

                                        <div class="white_bg">

                                            <div class="main_course_box">

                                                <div class="row">

                                                    <div class="col-xl-4">

                                                        <div class="left_know_img">

                                                             <?php 



                                                            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($course->ID) );

                                                            if(empty($feat_image)){                                                        

                                                          $feat_image= get_template_directory_uri()."/assets/images/range_1.png";

                                                            }

                                                            ?>

                                                            <img src="<?php echo $feat_image; ?>" style="width: 212px ;height: 110px;" class="img-fluid" alt="image">

                                                        </div>

                                                    </div>

                                                    <div class="col-xl-8">

                                                        <div class="right_side_know">

                                                            <h3><a class="umlink" href="<?php echo get_permalink( $course->ID )?>"><?php echo mb_strimwidth($course->post_title, 0, 30, '...'); ?></a></h3>

                                                            <div class="d-flex align-items-center mb-2">

                                                                <?php if(get_field('course_hour',$course->ID)) { ?>

                                                            <p class="mr-3">

                                                                <?php

                                                                    if(get_field('course_hour',$course->ID)>1){ ?>

                                                                       <?php echo get_field('course_hour',$course->ID);?>  hours 

                                                                     <?php } else {  ?>

                                                                      <?php echo get_field('course_hour',$course->ID); ?> hour 

                                                                    <?php }

                                                                ?>

                                                               

                                                            </p>



                                                              <span class="items_circle"></span>



                                                                <?php } ?>

                                                                <p class="ml-3">All Levels</p>

                                                            </div>

                                                           <h5><?php echo wp_trim_words(get_field('course_description',$course->ID),13); ?></h5>

                                                            

                                                            <div class="row mt-2">

                                                                <div class="d-flex justify-content-start pro-per align-items-center">

                                                                    <div class="mx-2"><strong>Status</strong></div>
                                                                    <div><h5>
                                                                        <?php
                                                                            if ($percentage == 0) {
                                                                                echo "Not Taken";
                                                                            } elseif ($percentage < 1) {
                                                                                echo "In Progress";
                                                                            } else {
                                                                                echo "Completed";
                                                                            }
                                                                        ?>
                                                                    </h5></div>
                                                                </div>

                                                            </div>

                                                            

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                 </div>

                                <?php }  } ?>

      </div>

   </div>

   <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

      <div class="row user-dashboard-tab mt-4 my-course-ap-profile">

         <?php   $user = new WP_User(get_current_user_id());

                                        $arrays = learndash_get_user_courses_from_meta($user->ID);

                                        foreach($arrays as $arr1){

                                        $arr2 = learndash_course_status($arr1);

                                        $course = get_post($arr1);

                                        //$progress= learndash_user_get_course_progress(get_current_user_id(),  $course->ID, $type = 'summary' );

                                        //$percentage = $progress['completed'] / $progress['total'];

                                $progress= learndash_user_get_course_progress(get_current_user_id(),  $course->ID, $type = 'summary' );



                                       

                                            if($progress['total'] == 0)

                                                { 

                                                   $percentage = 0;

                                                }

                                            else

                                                {

                                                     $percentage = $progress['completed'] / $progress['total'];   

                                                }

                                        

                                       // $progress = learndash_course_progress($course->ID,$user->ID);



                                       // print_r($user);



                                      //  print_r($progress);







                                        $certificate = learndash_get_course_certificate_link($course->ID);

                                        $id = $user->ID;

                                        $name = get_user_meta( $id, 'up_update_user_firstname', true);



                                        $certificate_id = learndash_get_setting( $course->ID, 'certificate' );

                                        $certificate_timestamp =  learndash_user_get_course_completed_date($user->ID,$course->ID);

                                        if(!empty($certificate_timestamp)){

                                            $certificate_date = date('Y-m-d H:IA',$certificate_timestamp);

                                        }else{

                                          $certificate_date =   date('Y-m-d H:IA',strtotime(get_post_field('post_date', $certificate_id)));

                                        }

                                        

                                        if($arr2 =='Completed') { ?>

         <div class="col-lg-6">

            <div class="top-title">

               <div class="bottom-card">

                  <div class="message-box know-center">

                    <div class="main_course_box">

                                                    <div class="row">

                                                        <div class="col-xl-4">

                                                            <div class="left_know_img">

                                                                 <?php 



                                                                $feat_image1 = wp_get_attachment_url( get_post_thumbnail_id($course->ID) );

                                                                if(empty($feat_image1)){                                                        

                                                              $feat_image1= get_template_directory_uri()."/assets/images/range_1.png";

                                                                }

                                                                ?>

                                                                <img src="<?php echo $feat_image1; ?>"  style="width: 212px ;height: 110px;" class="img-fluid" alt="image">

                                                            </div>

                                                        </div>

                                                        <div class="col-xl-8">

                                                            <div class="right_side_know">

                                                                <h3>

                                                                    <?php if($course->post_status =='publish'){?>

                                                                     <a class="umlink" href="<?php echo get_permalink( $course->ID )?>"><?php echo mb_strimwidth($course->post_title, 0, 30, '...'); ?></a>

                                                                <?php } else { ?>

                                                                     <a class="umlink" href="javascript:void(0);" onclick="showAlert()"><?php echo mb_strimwidth($course->post_title, 0, 30, '...'); ?></a>

                                                                     

                                                                <?php  } ?>

                                                                    

                                                                </h3>

                                                               

                                                               

                                                                <div class="d-flex align-items-center mb-2">

                                                                    <p class="mr-3">

                                                                    <?php

                                                                        if(get_field('course_hour',$course->ID)>1){ ?>

                                                                           <?php echo get_field('course_hour',$course->ID);?>  hours 

                                                                         <?php } else {  ?>

                                                                          <?php echo get_field('course_hour',$course->ID); ?> hour 

                                                                        <?php }

                                                                    ?>

                                                                       

                                                                        

                                                                        </p>

                                                                     <span class="items_circle"></span>

                                                                    <p class="ml-3">All Levels</p>

                                                                </div>

                                                                 <h5><?php echo wp_trim_words(get_field('course_description',$course->ID),13); ?></h5>

                                                                

                                                              <div class="row mt-2">

                                                                <div class="d-flex justify-content-start pro-per align-items-center">

                                                                    <div class="mx-2"><strong>Status</strong></div>

                                                                    <div><h5>
                                                                        <?php
                                                                            if ($percentage == 0) {
                                                                                echo "Not Taken";
                                                                            } elseif ($percentage < 1) {
                                                                                echo "In Progress";
                                                                            } else {
                                                                                echo "Completed";
                                                                            }
                                                                        ?>
                                                                    </h5></div>

                                                                </div>

                                                            </div>

                                                                



                                                            </div>

                                                        </div>

                                                    </div>

                                                  </div>

                     <div class="row certificate-section no-gutters">

                        <div class="col-lg-4">

                           <div class="certificate-title">

                              <h3>Certificate Title</h3>

                              <p><?php echo mb_strimwidth(get_post_field('post_title', $certificate_id), 0, 25, '...');?></p> 

                           </div>

                        </div>

                        <div class="col-lg-3">

                           <div class="certificate-title">

                              <h3>Earned on</h3>

                              <p><?php echo $certificate_date;?></p>

                           </div>

                        </div>

                        <div class="col-lg-5">

                           <div class="certificate-btn">

                              <a href="javascript:void(0);" onclick="window.location='<?php echo $certificate; ?>';" title="Download Certificate" class="btn btn-primary">Download Certificate</a>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <?php }

            }

         ?>

      </div>

   </div>

</div>

<script>

    function showAlert() {

      alert("Admin has deleted or disabled this course, so you can not access this course right now.");

    }

</script>