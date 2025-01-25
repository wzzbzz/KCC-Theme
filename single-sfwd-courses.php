<style>
    .site-content {
        flex-grow: 1;
    }

    .elementor-element-2157a0068 {
        background-color: #000000DE;
        background-image: url(<?= wp_upload_dir();?>/2022/12/thought-catalog-505eectW54k-unsplash.png);
        background-position: center center;
        min-height: 678px;
    }

    .course-inner {
        margin-bottom: 30px;
    }

    .course-inner .nav-pills .nav-link {
        cursor: pointer;
        padding: 10px;
        width: 175px;
        font-size: 14px;
        text-align: center;
        margin-left: 10px;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .hero_text h2 {
        font-size: 36px;
        color: #fff;
        font-weight: 600;
        box-shadow: 4px 2px 15px #9b9797;
        z-index: 1;
        position: absolute;
        width: 100%;
        top: -382px;
        right: 0;
    }

    .hero_image {
        width: 100%;
    }


    .course-inner .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #f96703;
        color: #fff;
        font-weight: 600;
        border-radius: 10px;
        width: 100px;
        text-align: center;
        width: 175px;
        font-size: 14px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .course-inner .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link:hover {
        background-color: #f96703;
        color: #fff;
        font-weight: 600;
        border-radius: 10px;
        width: 175px;
        font-size: 14px;
        text-align: center;
    }

    .course-inner .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link:active {
        background-color: #f96703;
        color: #fff;
        font-weight: 600;
        border-radius: 10px;
        width: 175px;
        font-size: 14px;
        text-align: center;
        padding: 27px 0;
    }

    .course-inner .nav-pills .nav-link {
        color: #444;
        font-weight: 600;
        border-radius: 10px;
        width: 175px;
        font-size: 14px;
        text-align: center;
        padding: 16px 0;
    }

    .course-inner .item-question {
        font-size: 1em;
        line-height: 3;
        font-weight: 500;
        padding: 3px 15px;
        color: #fff;
        width: 90%;
    }

    .item-header {
        background-color: #f96703;
        margin-bottom: 10px;
        border-radius: 9px;
    }

    .hero_image-II img {
        border-radius: 0px;
    }

    .back_btn a {
        background: #f96703;
        padding: 10px 40px;
        border-radius: 9px;
        color: #fff;
    }

    .banner-course {
        width: 100%;
        height: 600px;
    }

    .for-course i {
        color: #fff;
    }

    .elementor {
        margin-top: 0px !important;
    }

    i.fa.fa-chevron-right {
        color: #fff;
    }

    .hero_image-II img {
        border-radius: 0px;
        height: 500px;
        object-fit: cover;
        width: 100%;
    }

    .marker {
        float: right;
        color: red;
    }
</style>

<?php
global $post;
$post_slug = $post->post_name;
if (is_user_logged_in()) { ?>

    <?php
    include 'aq_resizer.php';
    get_header('new'); ?>
    <div class="col-xl-12 profile-page-main">
        <div class="row justify-content-end mt-3">
            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap abhi">
                <?php include ('user_topbar.php') ?>
            </div>


            <div class=" col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
                <div class="hero_image w-100 hero_image-II" style="text-align: center;">
                    <?php
                    $featured_img_url = get_the_post_thumbnail_url();

                    if ($featured_img_url) { ?>
                        <img src="<?php echo $featured_img_url; ?>">
                    <?php } else { ?>
                        <!-- <img src="https://images.unsplash.com/photo-1517698799921-960dd00d9072?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=512&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=1024">-->
                    <?php } ?>
                </div>
                <!--<div class="hero_text d-flex text-align-center w-100"> 
                <h2><?//php echo get_the_title(); ?></h2>
            </div>-->
            </div>


            <div class=" mt-4 col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
                <div class="container-row course-inner w-100 mt-2">
                    <div class="row w-100">
                        <div class="col-md-8">
                            <ul class="nav nav-pills tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#home">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#menu1">Learning Objective</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#menu2">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#menu3">Course Details</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="home" class="container tab-pane active"><br>
                                    <?php if (get_field('course_description')) { ?>
                                        <p><?php echo get_field('course_description'); ?></p>
                                    <?php } else { ?>
                                        <p>This is the home</p>
                                    <?php } ?>
                                </div>
                                <div id="menu1" class="container tab-pane fade"><br>
                                    <?php if (get_field('learning_objectives')) { ?>
                                        <p><?php echo get_field('learning_objectives'); ?></p>
                                    <?php } else { ?>
                                        <p>Some information on learning objectives</p>
                                    <?php } ?>
                                </div>
                                <div id="menu2" class="container tab-pane fade"><br>
                                    <?php if (get_field('agenda')) { ?>
                                        <p><?php echo get_field('agenda'); ?></p>
                                    <?php } else { ?>
                                        <p>here it is your agenda</p>
                                    <?php } ?>
                                </div>
                                <div id="menu3" class="container tab-pane fade"><br>
                                    <table>
                                        <?php if (get_field('course_hour')) { ?>
                                            <tr>
                                                <td><b>Course Hours : </b></td>
                                                <td><?php echo get_field('course_hour'); ?></td>
                                            </tr>
                                        <?php }
                                        if (get_field('language')) { ?>
                                            <tr>
                                                <td><b>Language :</b></td>
                                                <td><?php echo get_field('language'); ?></td>
                                            </tr>
                                        <?php }
                                        if (get_field('intended_audiance')) { ?>
                                            <tr>
                                                <td><b>Intended Audience :</b></td>
                                                <td><?php echo get_field('intended_audiance'); ?></td>
                                            </tr>
                                        <?php }
                                        if (get_field('delivery_method')) { ?>
                                            <tr>
                                                <td><b>Delivery Method :</b></td>
                                                <td><?php echo get_field('delivery_method'); ?></td>
                                            </tr>
                                        <?php } ?>
                                    </table>


                                    <?php if (!get_field('course_hour') || !get_field('language') || !get_field('intended_audiance') || !get_field('delivery_method')) { ?>

                                    <?php } else { ?>
                                        </ /?php echo 'There is no data;' ?>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                        <?php global $post;
                        $user_id = get_current_user_id();
                        $course_id = get_queried_object_id();
                        $dd = ld_update_course_access($user_id, $course_id);
                        ld_update_course_access($user_id, $course_id);
                        ld_course_access_from_update($course_id, $user_id);
                        //echo $course_id."---".$user_id."---"; print_r($dd);                       
                        $courseList = learndash_get_course_lessons_list($course_id);

                        ?>

                        <div class="col-md-4 d-flex text-align-end">
                            <div class="row">
                                <div class="col-md-12 m-0 p-0">
                                    <div class="row d-flex align-items-center justify-content-between">
                                        <div class="col-md-7">
                                            <div class="course-content">
                                                <!--<h5>Course Content</h5>-->
                                            </div>
                                        </div>
                                        <div class="col-md-4 mr-2 mb-2">
                                            <div class="back_btn mb-3">
                                                <a href="<?php echo get_site_url(); ?>/knowledge-center/">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
// Get the current user ID
$user_id = get_current_user_id();

// Get the current course ID
$course_id = get_queried_object_id();

// Query the wp_learndash_user_activity table
global $wpdb;
$activity_conditions = $wpdb->get_results($wpdb->prepare("
    SELECT activity_type, activity_status 
    FROM wp_learndash_user_activity 
    WHERE user_id = %d AND course_id = %d
", $user_id, $course_id));

    // echo "<pre>";
    // print_r($activity_conditions);
// Initialize flags to control the disabling of buttons
$disable_evaluation = false;
$disable_knowledge_check = false;

if ($activity_conditions) {
    foreach ($activity_conditions as $activity) {
        // If this code is inside a loop, use `break` only if you want to stop the loop after setting the variables.
        if ($activity->activity_type == 'access' && $activity->activity_status == 0) {
            $disable_evaluation = true;
            $disable_knowledge_check = true;
            // No need to check further, so we use break if this is in a loop.
        } elseif ($activity->activity_type == 'course' && $activity->activity_status == 0) {
            $disable_evaluation = true;
            // No need to check further, so we use break if this is in a loop.
        } elseif ($activity->activity_type == 'quiz' && $activity->activity_status == 1) {
            $disable_evaluation = false;
            // No need to check further, so we use break if this is in a loop.
        } elseif ($activity->activity_type == 'lesson' && $activity->activity_status == 1) {
            $disable_evaluation = true;
        }  
    }
}
?>

<div class="col-md-12 mt-2">
    <div class="accordion-content">
        <?php $lession_url = !empty($courseList) ? $courseList[1]['permalink'] : "#"; ?>
        <?php if (!is_user_logged_in()) { $lession_url = site_url('login'); } ?>

        <?php if (!empty($course_id)) { ?>
            <!-- Course Content Button -->
            <div class="accordion-item">
                <a href="<?php echo $lession_url; ?>">
                    <header class="item-header d-flex align-items-center">
                        <h4 class="item-question cou_con">
                            Course Content
                        </h4>
                        <div class="item-icon m-0">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <div class="marker" id="cou_con_error"></div>
                        </div>
                    </header>
                </a>
            </div>

            <!-- Knowledge Check Button -->
            <div class="accordion-item">
                <?php
                $oo = learndash_get_course_quiz_list(get_the_ID());
                if (!empty($oo)) {
                    foreach ($oo as $val) { ?>
                        <a href="<?php echo get_permalink($val['id']); ?>" <?php if ($disable_knowledge_check) echo 'style="pointer-events: none; opacity: 0.5;"'; ?>>
                            <header class="item-header d-flex align-items-center">
                                <h4 class="item-question kno_ch">
                                    Knowledge Check
                                </h4>
                                <div class="item-icon">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                                <div class="marker" id="kno_ch_error"></div>
                            </header>
                        </a>
                    <?php }
                } else { ?>
                    <a href="<?php echo $lession_url; ?>" <?php if ($disable_knowledge_check) echo 'style="pointer-events: none; opacity: 0.5;"'; ?>>
                        <header class="item-header d-flex align-items-center">
                            <h4 class="item-question">
                                Knowledge Check
                            </h4>
                            <div class="item-icon">
                                <iconify-icon icon="ic:round-keyboard-arrow-right"></iconify-icon>
                            </div>
                        </header>
                    </a>
                <?php } ?>
            </div>

            <!-- Evaluation Button -->
            <div class="accordion-item">
                <a href="<?php echo $lession_url; ?>" <?php if ($disable_evaluation) echo 'style="pointer-events: none; opacity: 0.5;"'; ?>>
                    <header class="item-header d-flex align-items-center">
                        <h4 class="item-question eva_form">
                            Evaluation
                        </h4>
                        <div class="item-icon">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                        <div class="marker" id="eva_form_error"></div>
                    </header>
                </a>
            </div>
        <?php } ?>
    </div>
</div>


                            </div>
                            <div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    <?php } else { ?>

        <?php
        include 'aq_resizer.php';
        get_header();
        ?>


        <div id="content" class="site-content">
            <div class="ast-container-fluid p-0">
                <div class="elementor-element-2157a0068">

                </div>
            </div>
        </div>



        <div class="col-xl-12 profile-page-main">
            <div class="row justify-content-end">
                <div class=" col-xl-12 col-lg-12 col-md-12 col-12 p-0">

                    <div class="hero_text d-flex text-align-center w-100">
                        <h2><?php echo get_the_title(); ?></h2>
                    </div>
                </div>

                <div class=" mt-4 col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap mb-lg-5">
                    <div class="container-row course-inner w-100" style="margin-top: 100px;">
                        <div class="row w-100">
                            <div class="col-md-8">
                                <ul class="nav nav-pills tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#home">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#menu1">Learning Objective</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#menu2">Agenda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#menu3">Course Details</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="home" class="container tab-pane active"><br>
                                        <?php if (get_field('course_description')) { ?>
                                            <p><?php echo get_field('course_description'); ?></p>
                                        <?php } else { ?>
                                            <p>This is the home</p>
                                        <?php } ?>
                                    </div>
                                    <div id="menu1" class="container tab-pane fade"><br>
                                        <?php if (get_field('learning_objectives')) { ?>
                                            <p><?php echo get_field('learning_objectives'); ?></p>
                                        <?php } else { ?>
                                            <p>Some information on learning objectives</p>
                                        <?php } ?>
                                    </div>
                                    <div id="menu2" class="container tab-pane fade"><br>
                                        <?php if (get_field('agenda')) { ?>
                                            <p><?php echo get_field('agenda'); ?></p>
                                        <?php } else { ?>
                                            <p>here it is your agenda</p>
                                        <?php } ?>
                                    </div>
                                    <div id="menu3" class="container tab-pane fade"><br>
                                        <table>
                                            <?php if (get_field('course_hour')) { ?>
                                                <tr>
                                                    <td><b>Course Hours : </b></td>
                                                    <td><?php echo get_field('course_hour'); ?></td>
                                                </tr>
                                            <?php }
                                            if (get_field('language')) { ?>
                                                <tr>
                                                    <td><b>Language :</b></td>
                                                    <td><?php echo get_field('language'); ?></td>
                                                </tr>
                                            <?php }
                                            if (get_field('intended_audiance')) { ?>
                                                <tr>
                                                    <td><b>Intended Audience :</b></td>
                                                    <td><?php echo get_field('intended_audiance'); ?></td>
                                                </tr>
                                            <?php }
                                            if (get_field('delivery_method')) { ?>
                                                <tr>
                                                    <td><b>Delivery Method :</b></td>
                                                    <td><?php echo get_field('delivery_method'); ?></td>
                                                </tr>
                                            <?php } ?>
                                        </table>
                                        <?php if (!get_field('course_hour') || !get_field('language') || !get_field('intended_audiance') || !get_field('delivery_method')) {
                                            echo "No data to show";
                                        } ?>
                                    </div>
                                </div>

                            </div>
                            <?php global $post;

                            $user_id = get_current_user_id();
                            $course_id = get_queried_object_id();
                            $dd = ld_update_course_access($user_id, $course_id);
                            ld_update_course_access($user_id, $course_id);
                            ld_course_access_from_update($course_id, $user_id);
                            //echo $course_id."---".$user_id."---"; print_r($dd);   
                        
                            $courseList = learndash_get_course_lessons_list($course_id);
                            ?>

                            <div class="col-md-4 d-flex text-align-end">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row d-flex align-items-center justify-content-between">
                                            <div class="col-md-7">
                                                <div class="course-content mb-4">
                                                    <h5>Course Content</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mr-0">
                                                <div class="back_btn mb-4">
                                                    <a href="<?php echo get_site_url(); ?>/knowledge-center/">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="accordion-content for-course">

                                            <?php

                                            //echo '<pre>'; echo($courseList[1]['permalink']);
                                            /*foreach ($lists as $list) {
                       
                                               
                                               
                                               $featured_img_url = get_the_post_thumbnail_url($list['post']->ID);*/
                                            $lession_url = "";
                                            if (!empty($courseList)) {
                                                $lession_url = $courseList[1]['permalink'];
                                            } else {
                                                $lession_url = "#";
                                            }

                                            if (!is_user_logged_in()) {
                                                $lession_url = site_url('login');
                                            }
                                            ?>
                                            <div class="accordion-item">
                                                <a href="<?php echo $lession_url; ?>">
                                                    <header class="item-header d-flex align-items-center">
                                                        <h4 class="item-question">
                                                            Course Content
                                                        </h4>
                                                        <div class="item-icon m-0">
                                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>

                                                        </div>
                                                    </header>
                                                </a>
                                            </div>
                                            <!--   <div class="accordion-item">
                                        <a href="<?//php echo $lession_url; ?>">
                                            <header class="item-header d-flex align-items-center">
                                                <h4 class="item-question">
                                                     Evolution
                                                </h4>
                                                <div class="item-icon m-0">
                                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                    
                                                </div>
                                            </header>
                                        </a>
                                    </div>-->
                                            <div class="accordion-item">
                                                <a href="<?php echo $lession_url; ?>">
                                                    <header class="item-header d-flex align-items-center">
                                                        <h4 class="item-question">
                                                            Knowledge Check
                                                        </h4>
                                                        <div class="item-icon m-0">
                                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>

                                                        </div>
                                                    </header>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    <?php } ?>


    <?php
    if (is_user_logged_in()) {
        get_footer('new');
    } else {
        get_footer();
    }
    ?>

    <!-- All Script here  -->
    <script>
        const hamburger = document.querySelector(".hamburger");
        const navLinks = document.querySelector(".nav-links");
        const links = document.querySelectorAll(".nav-links li");

        hamburger.addEventListener('click', () => {
            //Animate Links
            navLinks.classList.toggle("open");
            links.forEach(link => {
                link.classList.toggle("fade");
            });

            //Hamburger Animation
            hamburger.classList.toggle("toggle");
        });








        const tabs = document.querySelectorAll('[data-tab-target]')
        const tabContents = document.querySelectorAll('[data-tab-content]')

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = document.querySelector(tab.dataset.tabTarget)
                tabContents.forEach(tabContent => {
                    tabContent.classList.remove('active')
                })
                tabs.forEach(tab => {
                    tab.classList.remove('active')
                })
                tab.classList.add('active')
                target.classList.add('active')
            })
        })

        const accordionBtns = document.querySelectorAll(".item-header");

        accordionBtns.forEach((accordion) => {
            accordion.onclick = function () {
                this.classList.toggle("active");

                let content = this.nextElementSibling;
                console.log(content);

                if (content.style.maxHeight) {
                    //this is if the accordion is open
                    content.style.maxHeight = null;
                } else {
                    //if the accordion is currently closed
                    content.style.maxHeight = content.scrollHeight + "px";
                    console.log(content.style.maxHeight);
                }
            };
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>