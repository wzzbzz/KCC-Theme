<?php

/* Template Name: Donate */

if ( is_user_logged_in() ) {



get_header('new'); ?>

<!-- CSS Start -->

<style>

.main_dsh_text h6 {

    margin: 1rem 0;

}

	.main_dsh_text p {

    font-size: 12px;

}

	.side_main_img img {

    max-width: 400px;

}

	

/* 	Responsive */

	@media (max-width:1440px){

	.side_main_img img {

    max-width: 350px;

}

	}

</style>



<!-- CSS End -->

    <div class="col-xl-12 ">

        <div class="row justify-content-end mt-3">

            <?php $pagename = get_query_var('pagename'); ?>



            <?php include('user_topbar.php')?>

            

            <?php global $current_user; wp_get_current_user(); 

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

                        <p><span>Hello,</span> <?php echo $fname ?></p>

                        <?php if($welcome_text) { ?>

                            <small><?php echo $welcome_text; ?></small>

                        <?php } ?>

                    </div>

                </div>



                <div class="col-xl-11 col-lg-12 col-md-12 mt-3">

                    <div class="center_dsh_box d-flex align-items-start flex-wrap">

                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">

                            <div class="main_dsh_text">

                               <?php if($disaster_title) { ?>

                                    <h6><?php echo $disaster_title; ?></h6>

                                <?php } if($disaster_sub_title) {  ?>

                                    <p><?php echo $disaster_sub_title; ?></p>

                                <?php } if($disaster_pic) { ?>

                                    <img src="<?php echo $disaster_pic['url']; ?>" class="img-fluid" alt="image">

                                <?php } if($disaster_description) { ?>

                                    <p><?php echo $disaster_description; ?></p>

                                <?php } ?>

                            </div>

                        </div>                        

                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">

                            <div class="main_dsh_text before_Sec">

                               <?php if($responders_title) { ?>

                                    <h6><?php echo $responders_title; ?></h6>

                                <?php } if($responders_sub_title) { ?>

                                    <p><?php echo $responders_sub_title; ?></p>

                                <?php } if($responders_pic) { ?>

                                    <img src="<?php echo $responders_pic['url']; ?>" class="img-fluid" alt="image">

                                <?php } if($responders_description) { ?>

                                    <p><?php echo $responders_description; ?></p>

                                <?php } ?>

                            </div>

                        </div>   

                        <?php if($side_pic) { ?>   

                            <div class="side_main_img">

                                <img src="<?php echo $side_pic['url']; ?>" class="img-fluid top_img" alt="image">

                            </div>   

                        <?php } ?>   

                    </div>

                </div>



                <div class="col-xl-11 mt-3 d-flex align-items-center flex-wrap px-0">

                    <div class="col-xl-4 col-lg-4 col-md-6">

                       <div class="mian_box_btm">

                            <div class="d-flex align-items-center justify-content-between top_lay">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calender.png" class="img-fluid" alt="image">

                                <div class="text-right">

                                    <h5>5</h5>

                                    <p>Event</p>

                                </div>

                            </div>

                            <h4>Calendar</h4>

                            <p>Visit the site calendar to view all events posted by your fellow members</p>

                            <a href="<?php echo get_site_url(); ?>/event-calendar/">View Calendar</a>

                       </div> 

                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">

                       <div class="mian_box_btm bg_green">

                            <div class="d-flex align-items-center justify-content-between top_lay">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources.png" class="img-fluid" alt="image">

                                <div class="text-right">

                                    <h5 class="green">15</h5>

                                    <p class="green">Resources</p>

                                </div>

                            </div>

                            <h4 class="green">Resources</h4>

                            <p>Click below to view all the resources available and to post the resources you can offer.</p>

                            <a href="<?php echo get_site_url(); ?>/my-resources/">View Resources</a>

                       </div> 

                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">

                       <div class="mian_box_btm bg_yellow">

                            <div class="d-flex align-items-center justify-content-between top_lay">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification.png" class="img-fluid" alt="image">

                                <div class="text-right">

                                    <h5 class="yellow">6</h5>

                                    <p class="yellow">New Notifications</p>

                                </div>

                            </div>

                            <h4 class="yellow">Notifications</h4>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s.</p>

                            <a href="#">View Notifications</a>

                       </div> 

                    </div>                    

                </div>

                <?php 

                    $args = array(

                        'post_type'  => 'knowledge_center',

                        'post_status' =>'publish'

                    );

                    $postslist = get_posts( $args );

                ?>

                <div class="col-xl-11  mt-3 d-flex align-items-center flex-wrap justify-content-center px-0">

                     <div class="col-xl-6 col-lg-10 col-md-12">

                        <div class="main_box_center">

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="knowlage_box d-flex align-items-center">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/my_knowlage.png" class="img-fluid mr-2" alt="image">

                                    <h5>Knowledge Center</h5>

                                </div>

                                <div class="view_all">

                                    <a href="<?php echo get_site_url(); ?>/knowledge-center/">View All</a>

                                </div>

                            </div>

                            <?php foreach($postslist as $post) { 

                                    $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full' );

                                    if($image_attributes){

                            ?>

                                <div class="credential_sec">

                                    <img src="<?php echo $image_attributes[0]; ?>" class="img-fluid knowlage_img" alt="image">

                                    <div>

                                        <h5><?php echo get_the_title(); ?></h5>

                                        <p><?php echo get_the_content(); ?></p>

                                    </div>

                                    <div class="arrow_sec">

                                        <i class="fas fa-caret-right"></i>

                                    </div>

                                </div>

                            <?php } } ?>

                        </div>

                    </div>

                    <div class="col-xl-6 col-lg-10 col-md-12">

                        <div class="main_box_center">

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="knowlage_box d-flex align-items-center">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/my_coordination.png" class="img-fluid mr-2" alt="image">

                                    <h5>Coordination Center</h5>

                                </div>

                                <div class="view_all">

                                    <a href="<?php echo get_site_url(); ?>/dashboard-coordination-center/">View All</a>

                                </div>

                            </div>

                            <div class="credential_sec">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/group.png" class="img-fluid coordination-img" alt="image">

                                <div>

                                    <h5>Group</h5>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s.</p>

                                </div>

                                <div class="arrow_sec">

                                    <i class="fas fa-caret-right"></i>

                                </div>

                            </div>

                            <div class="credential_sec">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/report.png" class="img-fluid coordination-img" alt="image">

                                <div>

                                    <h5>Report & Froms</h5>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s.</p>

                                </div>

                                <div class="arrow_sec">

                                    <i class="fas fa-caret-right"></i>

                                </div>

                            </div>

                            <div class="credential_sec">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog.png" class="img-fluid coordination-img" alt="image">

                                <div>

                                    <h5>Blogs</h5>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s.</p>

                                </div>

                                <div class="arrow_sec">

                                    <i class="fas fa-caret-right"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>               



            </div>



            

            <div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex align-items-center  flex-wrap">

                <div class="col-xl-2 col-lg-3 col-md-3 col-12">

                    <div class="footer_logo">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.png" class="img-fluid logos">

                    </div>

                </div>

                <div class="col-xl-8 col-lg-9 col-md-9 col-12">

                    <div class="side_right_footer ">

                        <div class="social_icon_sec">

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_linkdin.png" class="img-fluid social"></a>

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_fb.png" class="img-fluid social"></a>

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_twitter.png" class="img-fluid social"></a>

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_instra.png" class="img-fluid social"></a>

                        </div>

                        <div class="linked_pages">

                             <a href="<?php echo get_site_url(); ?>">HOME</a>

                            <a href="<?php echo get_site_url(); ?>/what-we-do">WHAT WE DO</a>

                            <a href="<?php echo get_site_url(); ?>/world-cares-center">WORLD CARES CENTER</a>

                            <a href="<?php echo get_site_url(); ?>/training">TRAINING</a>

                            <a href="<?php echo get_site_url(); ?>/cordination">COORDINATION</a>

                            <a href="<?php echo get_site_url(); ?>/blogs">BLOG</a>

                            <a href="<?php echo get_site_url(); ?>/contact-us">CONTACT US</a>

                            <a href="<?php echo get_site_url(); ?>/donation-drive">DONATE</a>

                        </div>

                        <div class="privercy_pag">

                            <a href="<?php echo get_site_url(); ?>/terms-of-use">TERMS OF USE</a>

                            <a href="<?php echo get_site_url(); ?>/privacy-policy">PRIVACY POLICY  </a>

                            <a href="#">SITEMAP</a>      

                    </div>

                    <div class="copy_right_Sec">

                        <p>COPYRIGHT © 2020 ALL RIGHTS RESERVED</p>

                    </div>

                </div>

            </div>

            



          





        </div>        

    </div>





<?php get_footer('new'); } ?>