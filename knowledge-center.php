<?php
/* Template Name: Knowledge Center */
if (is_user_logged_in()) {
    include 'aq_resizer.php';
    get_header('dashboard');
    ?>
    
    <div class="col-xl-12 ">
        <div class="row justify-content-end mt-3 footer_f2">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10  ">
                <div class=" col-xl-11 top_center_main d-flex flex-wrap">
                    <div class="col-xl-5 col-lg-6">
                        <div class="side_left_sec">
                            <h4><?php echo get_field('page_title'); ?></h4>
                            <?php echo get_field('page_description'); ?>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 px-0">
                        <div class="right_coordination">
                            <img src="<?php echo get_field('page_image')['url'] ?>" class="img-fluid" alt="image">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">
                <div class="donation_tab_pills mian_knowlage_top">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                aria-controls="pills-home" aria-selected="true">All Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                                aria-controls="pills-profile" aria-selected="false">My Courses</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row d-flex flex-wrap px-0">
                                <!--  <//?php 
                            $args = array(
                                'numberposts' => -1,
                                'post_type'   => 'sfwd-courses',
                                'order'     => 'ASC'
                              );
                              
                              $courses = get_posts( $args );
                              
                              foreach($courses as $course){
                                
                        ?>
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                            <div class="main_box_btm">
                                <//?php
                                    $img = get_the_post_thumbnail_url($course->ID,'thumbnail');
                                    
                                if($img) { ?>
                                    <img src="<?//php echo aq_resize($img, 343, 373, true); ?>" alt="">
                                <//?php } else { ?>
                                    <img src="<?//php echo get_template_directory_uri(); ?>/assets/images/knowlage-1.png" class="img-fluid" alt="image">
                                <//?php } ?>
                            <h5> <//?php  echo mb_strimwidth($course->post_title, 0, 40, '...');?>
                            </h5>
                                <p><//?php echo  wp_trim_words(get_field('course_description', $course->ID),15);?></p>           
                                <a href="<//?php the_permalink($course->ID); ?>" >
                                    <button class="btn btn_view">
                                        View Courses                                   
                                    </button>                 
                              </a>
                            </div>
                        </div>
                        <?//php } ?>  -->
                                <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                                    <div class="main_box_btm course-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cource_list.png"
                                            alt="">
                                        <h5>Collaborative Disaster Volunteer Credential</h5>
                                        <p>This training program prepares volunteers to work safely by providing a common
                                            approach to volunteering in disaster environments</p>
                                        <a href="<?php echo site_url('collaborative-disaster-volunteer/'); ?>">
                                            <button class="btn btn_view">
                                                View Courses
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                                    <div class="main_box_btm course-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/knowledge-center-standalone.png"
                                            alt="">
                                        <h5>Stand-alone or Elective Training</h5>
                                        <p>One-time trainings that can be taken alone or in conjunction with other available
                                            courses</p>
                                        <a href="<?php echo site_url('standalone-or-elective-training/'); ?>" >
                                            <button class="btn btn_view">
                                                View Courses
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                                    <div class="main_box_btm course-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/knowledge-center-covid19.png"
                                            alt="">
                                        <h5>Covid-19 Trainings</h5>
                                        <p>New safety trainings for individuals, disaster volunteers & managers</p>
                                        <a href="<?php echo site_url('covid-19-training-list/'); ?>">
                                            <button class="btn btn_view">
                                                View Courses
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                                    <div class="main_box_btm course-4">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/knowledge-center-standalone.png"
                                            alt="">
                                        <h5>Other Languages</h5>
                                        <p>Selection trainings available in Spanish, French, and Ukrainian</p>
                                        <a href="<?php echo site_url('other-languages-list/'); ?>">
                                            <button class="btn btn_view">
                                                View Courses
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="title_course">
                                <h5 class="start_course">Courses Started</h5>
                            </div>
                            <div class="row">
                                <?php
                                $user = new WP_User(get_current_user_id());
                                $arrays = learndash_get_user_courses_from_meta(get_current_user_id());
                                foreach ($arrays as $arr1) {
                                    $arr2 = learndash_course_status($arr1);
                                    $course = get_post($arr1);
                                    $post_count++;
                                }
                                ?>
                                <?php if ($post_count == 0) { ?>
                                    <div class="col-xl-12"><br>
                                        <p>You are not enrolled in any courses. Please enroll in a course.</p>
                                        <a href="<?php echo site_url("level-one-course-list"); ?>" class="nav-link">Click
                                            here to Enroll</a>
                                    </div>
                                <?php } ?>
                                <?php
                                //ld_update_course_access( $user_id, $course_id, $remove = false );
                                $user = new WP_User(get_current_user_id());
                                $arrays = learndash_get_user_courses_from_meta(get_current_user_id());
                                foreach ($arrays as $arr1) {
                                    $arr2 = learndash_course_status($arr1);

                                    $course = get_post($arr1);
                                    $progress = learndash_user_get_course_progress(get_current_user_id(), $course->ID, $type = 'summary');

                                    if ($progress['total'] == 0) {
                                        $percentage = 0;
                                    } else {
                                        $percentage = $progress['completed'] / $progress['total'];
                                    }

                                    $id = $user->ID;
                                    $name = get_user_meta($id, 'up_update_user_firstname', true);

                                    if ($arr2 != 'Completed') {
                                        ?>
                                        <div class="col-xl-6 pt-4">
                                            <div class="white_bg">
                                                <div class="main_course_box">
                                                    <div class="row">

                                                        <div class="col-xl-4">
                                                            <div class="left_know_img">
                                                                <?php
                                                                $feat_image = wp_get_attachment_url(get_post_thumbnail_id($course->ID));
                                                                if (empty($feat_image)) {
                                                                    $feat_image = get_template_directory_uri() . "/assets/images/range_1.png";
                                                                }
                                                                ?>
                                                                <img src="<?php echo $feat_image; ?>"
                                                                    style="width: 212px ;height: 110px;" class="img-fluid"
                                                                    alt="image">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-8">
                                                            <div class="right_side_know">

                                                                <h3>
                                                                <?php if ($course->post_status == 'publish') { ?>
                                                                    <a class="umlink" href="<?php echo get_permalink($course->ID); ?>"><?php echo $course->post_title; ?></a>
                                                                <?php } else { ?>
                                                                    <a class="umlink" href="javascript:void(0);" onclick="showAlert()"><?php echo $course->post_title; ?></a>
                                                                <?php } ?>

                                                                </h3>

                                                                <div class="d-flex align-items-center mb-2">
                                                                    <?php if (get_field('course_hour', $course->ID)) { ?>

                                                                        <p class="mr-3">


                                                                            <?php
                                                                            if (get_field('course_hour', $course->ID) > 1) { ?>
                                                                                <?php echo get_field('course_hour', $course->ID); ?> hours
                                                                            <?php } else { ?>
                                                                                <?php echo get_field('course_hour', $course->ID); ?> hour
                                                                            <?php }
                                                                            ?>


                                                                        </p>
                                                                        <span class="items_circle"></span>
                                                                    <?php } ?>
                                                                    <p class="ml-3">All Levels <?php echo $course->ID; ?></p>
                                                                </div>

                                                                <h5><?php echo get_field('course_description', $course->ID); ?></h5>


                                                                <div class="row mt-2">
                                                                    <div
                                                                        class="d-flex justify-content-start pro-per align-items-center">
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
                                    <?php }
                                } ?>


                            </div>
                            <div class="title_course completed">
                                <h5>Courses Completed</h5>
                            </div>
                            <div class="row">

                                <?php $user = new WP_User(get_current_user_id());
                                $arrays = learndash_get_user_courses_from_meta($user->ID);
                                foreach ($arrays as $arr1) {
                                    $arr2 = learndash_course_status($arr1);

                                    $course = get_post($arr1);
                                    //$progress= learndash_user_get_course_progress(get_current_user_id(),  $course->ID, $type = 'summary' );
                                    //$percentage = $progress['completed'] / $progress['total'];
                                    $progress = learndash_user_get_course_progress(get_current_user_id(), $course->ID, $type = 'summary');
                                    if ($progress['total'] == 0) {
                                        $percentage = 0;
                                    } else {
                                        $percentage = $progress['completed'] / $progress['total'];
                                    }
                                    $certificate = learndash_get_course_certificate_link($course->ID);
                                    $id = $user->ID;
                                    $name = get_user_meta($id, 'up_update_user_firstname', true);

                                    $certificate_id = learndash_get_setting($course->ID, 'certificate');
                                    $certificate_timestamp = learndash_user_get_course_completed_date($user->ID, $course->ID);
                                    if (!empty($certificate_timestamp)) {
                                        $certificate_date = date('Y-m-d H:IA', $certificate_timestamp);
                                    } else {
                                        $certificate_date = date('Y-m-d H:IA', strtotime(get_post_field('post_date', $certificate_id)));
                                    }

                                    if ($arr2 == 'Completed') { ?>
                                        <div class="col-xl-6">

                                            <div class="white_bg mb-3">
                                                <div class="main_course_box">
                                                    <div class="row">
                                                        <div class="col-xl-4">
                                                            <div class="left_know_img">
                                                                <?php
                                                                $feat_image1 = wp_get_attachment_url(get_post_thumbnail_id($course->ID));
                                                                if (empty($feat_image1)) {
                                                                    $feat_image1 = get_template_directory_uri() . "/assets/images/range_1.png";
                                                                }
                                                                ?>
                                                                <img src="<?php echo $feat_image1; ?>"
                                                                    style="width: 212px ;height: 110px;" class="img-fluid"
                                                                    alt="image">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-8">
                                                            <div class="right_side_know">
                                                                <h3>
                                                                    <?php if ($course->post_status == 'publish') { ?>
                                                                        <a class="umlink"
                                                                            href="<?php echo get_permalink($course->ID) ?>"><?php echo mb_strimwidth($course->post_title, 0, 30, '...'); ?></a>
                                                                    <?php } else { ?>
                                                                        <a class="umlink" href="javascript:void(0);"
                                                                            onclick="showAlert()"><?php echo mb_strimwidth($course->post_title, 0, 30, '...'); ?></a>
                                                                    <?php } ?>
                                                                </h3>
                                                                <div class="d-flex align-items-center mb-2">
                                                                    <p class="mr-3"> <?php
                                                                    if (get_field('course_hour', $course->ID) > 1) { ?>
                                                                            <?php echo get_field('course_hour', $course->ID); ?> hours
                                                                        <?php } else { ?>
                                                                            <?php echo get_field('course_hour', $course->ID); ?> hour
                                                                        <?php }
                                                                    ?>
                                                                    </p>
                                                                    <span class="items_circle"></span>
                                                                    <p class="ml-3">All Levels</p>
                                                                </div>
                                                                <h5><?php echo wp_trim_words(get_field('course_description', $course->ID), 13); ?>
                                                                </h5>

                                                                <div class="row mt-2">
                                                                    <div
                                                                        class="d-flex justify-content-start pro-per align-items-center">
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

                                                <div class="card-box">
                                                    <div class="justify-content-between align-items-center inner-card-box">
                                                        <div class="title py-3">
                                                            <h3>Certificate Title</h3>
                                                            <p><?php echo mb_strimwidth(get_post_field('post_title', $certificate_id), 0, 25, '...'); ?>
                                                            </p>
                                                        </div>
                                                        <div class="py-3 align-items-center earned-box">
                                                            <div class="title left-side">
                                                                <h3>Earned on</h3>
                                                                <p><?php echo $certificate_date; ?></p>
                                                            </div>
                                                            <div>
                                                                <button class="certificate-btn"
                                                                    onclick="window.location='<?php echo $certificate; ?>';">Download
                                                                    Certificate</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php get_footer('new');
} else {

    header("Location:/login/");

} ?>
    <script>
        function showAlert() {
            alert("Admin has deleted or disabled this course, so you can not access this course right now.");
        }
    </script>