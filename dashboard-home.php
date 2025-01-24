<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
die("Dashboard Home Template (dashboard-home.php) is being used.");  
/* Template Name: Dashboard Home */

// Display file path for debugging
display_file_path();

if (is_user_logged_in()) { 
    get_header('new');
    echo '<pre style="display:none;">';
    var_dump(get_the_ID());
    echo '</pre>';
?>
    <!-- CSS Start -->
    <style>
        .main_dsh_text h6 {

            margin: 1rem 0;

        }
        .main_dsh_text p {

            font-size: 12px;

        }

        .side_main_img img {

            max-width: 410px;

        }
        .view-notification {
            background:none;
            border:none;
            color:#429FFF;
            padding:0; font:inherit; 
            cursor:pointer; 
            font-size: 16px;
            text-decoration: none;"
       }
        .view-notification:hover {
            text-decoration: none; 
            color: #0056b3;
            background-color: transparent;
        }
        button.view-notification:focus {
            background: transparent;
            color: #0056b3;
        }
        /*  Responsive */

        @media (max-width:1440px) {

            .side_main_img img {

                max-width: 410px;

            }

        }

        .main_dash_1 {
            max-width: 100%;
        }

        .main_dash_1 .mian_box_btm {
            max-height: 250px;
            padding: 1rem;
        }

        .main_dash_1 .mian_box_btm.bg_yellow {
            max-height: 250px;
            padding: 1rem;
        }

        .main_dash_1 .mian_box_btm.bg_green {
            max-height: 250px;
            padding: 1rem;
        }

        .dash_home {
            max-width: 100%;
        }

        .main_home2 {
            max-width: 100%;
        }

        .knowlage_img {
            max-height: 80px;
        }
    </style>



    <!-- CSS End -->



    <div style="display:none;"> <?php the_content(); ?> </div>

    <div class="">

        <div class="row justify-content-end mt-3">

            <? //php $pagename = get_query_var('pagename'); 
            ?>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">

                <?php include('user_topbar.php') ?>

            </div>





            <?php global $current_user;
            wp_get_current_user();

            $welcome_text = get_field('welcome_text');

            $disaster_title = get_field('disaster_title');

            $disaster_sub_title = get_field('disaster_sub_title');

            $disaster_description = get_field('disaster_description');

            $disaster_pic = get_field('disaster_pic');

            $responders_title = get_field('responders_title');

            $responders_sub_title = get_field('responders_sub_title');

            $responders_description = get_field('responders_description');

            $responders_pic = get_field('responders_pic');

            $side_pic = get_field('side_pic');



            ?>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-3">

                <div class="col-xl-7 col-lg-8 col-md-10">

                    <div class="top_heading_sec">

                        <p><span>Hello! </span> <?php echo $current_user->first_name; ?> <?php echo $current_user->last_name; ?> </p>

                        <?php if ($welcome_text) { ?>

                            <small><?php echo $welcome_text; ?></small>

                        <?php } ?>

                    </div>

                </div>



                <div class="col-xl-11 col-lg-12 col-md-12 mt-3 dash_home">

                    <div class="center_dsh_box d-flex align-items-start flex-wrap">

                        <div class="col-xl-4 col-lg-6 col-md-12 col-12">

                            <div class="main_dsh_text">

                                <?php if ($disaster_title) { ?>

                                    <h6><?php echo $disaster_title; ?></h6>

                                <?php }
                                if ($disaster_sub_title) {  ?>

                                    <p><?php echo $disaster_sub_title; ?></p>

                                <?php }
                                if ($disaster_pic) { ?>

                                    <img src="<?php echo $disaster_pic['url']; ?>" class="img-fluid" alt="image">

                                <?php }
                                if ($disaster_description) { ?>

                                    <p><?php echo $disaster_description; ?></p>

                                <?php } ?>

                            </div>

                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-12 col-12">

                            <div class="main_dsh_text before_Sec">

                                <?php if ($responders_title) { ?>

                                    <h6><?php echo $responders_title; ?></h6>

                                <?php }
                                if ($responders_sub_title) { ?>

                                    <p>NO OTHER SITUATION DEPENDS ON PEOPLE PULLING TOGETHER MORE THAN DISASTERS. It’s hard to coordinate without the tools to connect with each other.</ /?php echo $responders_sub_title; ?>
                                    </p>

                                <?php }
                                if ($responders_pic) { ?>

                                    <img src="<?php echo $responders_pic['url']; ?>" class="img-fluid" alt="image">

                                <?php }
                                if ($responders_description) { ?>

                                    <p><?php echo $responders_description; ?></p>

                                <?php } ?>

                            </div>

                        </div>

                        <?php if ($side_pic) { ?>

                            <div class="side_main_img">

                                <img src="<?php echo $side_pic['url']; ?>" class="img-fluid top_img" alt="image">

                            </div>

                        <?php } ?>

                    </div>

                </div>



                <?php

                global $wpdb;

                $current_user_id = get_current_user_id();

                $resourcesCount = count_user_posts($current_user_id, 'resources');

                $eventCount = count_user_posts($current_user_id, 'tribe_events');



                $city_list = $wpdb->get_results("SELECT distinct(meta_value) FROM wp_postmeta WHERE meta_key = 'city'", ARRAY_A);

                ?>



                <div class="col-xl-11 mt-3 d-flex align-items-center flex-wrap px-0 main_dash_1">

                    <div class="col-xl-4 col-lg-4 col-md-12">

                        <div class="mian_box_btm">

                            <div class="d-flex align-items-center justify-content-between top_lay">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calender.png" class="img-fluid" alt="image">

                                <div class="text-right">

                                    <h5><?php echo $eventCount ?></h5>

                                    <p>Event</p>

                                </div>

                            </div>

                            <h4>Calendar</h4>

                            <p>Visit the site calendar to view all events posted by your fellow members</p><br>

                            <a href="<?php echo get_site_url(); ?>/event-calendar/">View Calendar</a>

                        </div>

                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12">

                        <div class="mian_box_btm bg_green">

                            <div class="d-flex align-items-center justify-content-between top_lay">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources.png" class="img-fluid" alt="image">

                                <div class="text-right">

                                    <h5 class="green"><?php echo $resourcesCount ?></h5>

                                    <p class="green">Resources</p>

                                </div>

                            </div>

                            <h4 class="green">Resources</h4>

                            <p>Click below to view all the resources available and to post the resources you can offer</p>

                            <br>

                            <a href="<?php echo get_site_url(); ?>/my-resources/">View Resources</a>

                        </div>

                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="mian_box_btm bg_yellow">
                            <div class="d-flex align-items-center justify-content-between top_lay">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification.png" class="img-fluid" alt="image">
                                <div class="text-right">
                                    <h5 class="yellow"><?php echo get_unread_notification_count(get_current_user_id()); ?></h5>
                                    <p class="yellow">New Notifications</p>
                                </div>
                            </div>
                            <h4 class="yellow">Notifications</h4>
                            <div id="notificationContent"></div>

                            <p>View all notifications and update your notification settings</p>
                            <br>
                        <button class="view-notification" id="viewNotificationsLink" >
                        View Notifications
                        </button>
                        </div>
                    </div>
                </div>
                <?php
                $args = array(

                    'post_type'  => 'knowledge_center',

                    'post_status' => 'publish'

                );

                $postslist = get_posts($args);

                ?>

                <div class="col-xl-11  mt-3 d-flex align-items-center flex-wrap justify-content-center px-0 main_home2">

                    <div class="col-xl-6 col-lg-10 col-md-12">

                        <div class="main_box_center">

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="knowlage_box d-flex align-items-center">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/my_knowlage.png" class="img-fluid mr-2" alt="image">

                                    <h5>Knowledge Center</h5>

                                </div>

                                <!--<div class="view_all">

                                    <a href="<//?php echo get_site_url(); ?>/knowledge-center/">View All</a>

                                </div>-->

                            </div>

                            <a href="<?php echo get_site_url(); ?>/collaborative-disaster-volunteer-credentials/" target="_blank">

                                <div class="credential_sec second d-flex justify-content-between">

                                    <div class="d-flex align-items-center">

                                        <div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cource_list.png" class="img-fluid coordination-img py-2" alt="image">

                                        </div>

                                        <div>

                                            <h5>Collaborative Disaster Volunteer Credential</h5>

                                            <p>This training program prepares volunteers to work safely by providing a common approach to volunteering in disaster environments</p>

                                        </div>

                                    </div>

                                    <div class="arrow_sec">

                                        <i class="fas fa-caret-right"></i>

                                    </div>

                                </div>

                            </a>



                            <a href="<?php echo get_site_url(); ?>/standalone-or-elective-training/" target="_blank">

                                <div class="credential_sec second d-flex justify-content-between">

                                    <div class="d-flex align-items-center">

                                        <div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/knowledge-center-standalone.png" class="img-fluid coordination-img py-2" alt="image">

                                        </div>

                                        <div>

                                            <h5>Standalone or Elective Training</h5>

                                            <p>One-time trainings that can be taken alone or in conjunction with other available courses</p>

                                        </div>

                                    </div>

                                    <div class="arrow_sec">

                                        <i class="fas fa-caret-right"></i>

                                    </div>

                                </div>

                            </a>

                            <a href="<?php echo get_site_url(); ?>/covid-19-training-list/" target="_blank">

                                <div class="credential_sec second d-flex justify-content-between">

                                    <div class="d-flex align-items-center">

                                        <div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/knowledge-center-covid19.png" class="img-fluid coordination-img py-2" alt="image">

                                        </div>

                                        <div>

                                            <h5>Covid-19 Trainings</h5>

                                            <p>New safety trainings for individuals, disaster volunteers & managers</p>

                                        </div>

                                    </div>

                                    <div class="arrow_sec">

                                        <i class="fas fa-caret-right"></i>

                                    </div>

                                </div>

                            </a>

                            <a href="<?php echo get_site_url(); ?>/other-languages-list/" target="_blank">

                                <div class="credential_sec second d-flex justify-content-between">

                                    <div class="d-flex align-items-center">

                                        <div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/knowledge-center-standalone.png" class="img-fluid coordination-img py-2" alt="image">

                                        </div>

                                        <div>

                                            <h5>Other Languages</h5>

                                            <p>This program enhances the knowledge and know-how to work safely by providing a common approach when volunteering in disaster incidents.</p>

                                        </div>

                                    </div>

                                    <div class="arrow_sec">

                                        <i class="fas fa-caret-right"></i>

                                    </div>

                                </div>

                            </a>

                        </div>

                    </div>

                    <div class="col-xl-6 col-lg-10 col-md-12">

                        <div class="main_box_center">

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="knowlage_box d-flex align-items-center">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/my_coordination.png" class="img-fluid mr-2 " alt="image">

                                    <h5>Coordination Center</h5>

                                </div>

                                <!-- <div class="view_all">

                                    <a href="<? //php echo get_site_url(); 
                                                ?>/dashboard-coordination-center/">View All</a>

                                </div> -->

                            </div>

                            <a href="<?php echo get_site_url(); ?>/wccgroups/">

                                <div class="credential_sec second d-flex justify-content-between">

                                    <div class="d-flex align-items-center">

                                        <div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/group.png" class="img-fluid coordination-img py-2" alt="image">

                                        </div>

                                        <div>

                                            <h5>Groups</h5>

                                            <p>Join and create groups to stay informed</p>

                                        </div>

                                    </div>

                                    <div class="arrow_sec">

                                        <i class="fas fa-caret-right"></i>

                                    </div>

                                </div>

                            </a>

                            <a href="<?php echo get_site_url(); ?>/dashboard-reports-and-forms/">

                                <div class="credential_sec second d-flex justify-content-between">

                                    <div class="d-flex align-items-center">

                                        <div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/report.png" class="img-fluid coordination-img py-2" alt="image">

                                        </div>

                                        <div>

                                            <h5>Reports & Forms</h5>

                                            <p>View and submit forms and reports from disaster sites</p>

                                        </div>

                                    </div>

                                    <div class="arrow_sec">

                                        <i class="fas fa-caret-right"></i>

                                    </div>

                                </div>

                            </a>

                            <a href="<?php echo get_site_url(); ?>/dashboard-blogs/">

                                <div class="credential_sec second d-flex justify-content-between">

                                    <div class="d-flex align-items-center">

                                        <div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog.png" class="img-fluid coordination-img py-2" alt="image">

                                        </div>

                                        <div>

                                            <h5>Blogs</h5>

                                            <p>Read blogs from World Cares Center about current disasters, <br>upcoming events, and important information</p>

                                        </div>

                                    </div>

                                    <div class="arrow_sec">

                                        <i class="fas fa-caret-right"></i>

                                    </div>

                                </div>

                            </a>

                            <a href="<?php echo get_site_url(); ?>/tracking/">

                                <div class="credential_sec second d-flex justify-content-between">

                                    <div class="d-flex align-items-center">

                                        <div>

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog.png" class="img-fluid coordination-img py-2" alt="image">

                                        </div>

                                        <div>

                                            <h5>Trackings</h5>

                                            <p>View a listing of your reports, groups, accepted roles, and blogs</p>

                                        </div>

                                    </div>

                                    <div class="arrow_sec">

                                        <i class="fas fa-caret-right"></i>

                                    </div>

                                </div>

                            </a>

                        </div>

                    </div>

                </div>
            </div>
            <div class="col-md-12 mt-4 pt-2 pr-0 d-flex">
                <?php include('common_user_footer.php') ?>
            </div>
        </div>
    <?php get_footer('new');
} else {
    header("Location:/login/");
} ?>

<script>
    function fetchNotifications() {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'fetch_notifications.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById('notificationDropdown').innerHTML = xhr.responseText;
            } else {
                console.error('Error fetching notifications:', xhr.statusText);
            }
        }
    };
    // Replace CURRENT_USER_ID with the actual user's ID
    xhr.send('userid=' + encodeURIComponent(CURRENT_USER_ID));
}

function fetchNotificationslist() {
    fetch('user_notification.php')
        .then(response => response.text())
        .then(data => {
            // Do something with the data, e.g., display notifications
            console.log(data);
            document.getElementById('notifications').innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
}
</script>
<script>
$(document).on('click', function(e) {
        if (!$(e.target).closest('#show-notification').length && 
            !$(e.target).closest('#viewNotificationsLink').length) {
                let rightTopSec = document.querySelector('.right_top_sec');
                let notificationSec = rightTopSec.querySelector('.notification_sec');
                if (notificationSec) {
                    notificationSec.classList.remove('show');
                }
                let notificationButton = document.getElementById('notification_button');
                notificationButton.setAttribute('aria-expanded', 'false');
                $('#show-notification').removeClass('show');
                document.getElementById("show-notification").removeAttribute("style");
        } else {
            let notificationElement = document.getElementById('show-notification');
            let notificationButton = document.getElementById('notification_button');
            let rightTopSec = document.querySelector('.right_top_sec');
            let notificationSec = rightTopSec.querySelector('.notification_sec');
            // Show the notification panel
            notificationElement.classList.add('show');
            notificationButton.setAttribute('aria-expanded', 'true');
            // Add the show class to the notification_sec div if it exists
            if (notificationSec) {
            notificationSec.classList.add('show');
            }
            // Apply the CSS styles
            notificationElement.style.position = 'absolute';
            notificationElement.style.willChange = 'transform';
            notificationElement.style.top = '0px';
            notificationElement.style.left = '0px';
            notificationElement.style.transform = 'translate3d(-458px, 25px, 0px)';
        }
    });
</script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
