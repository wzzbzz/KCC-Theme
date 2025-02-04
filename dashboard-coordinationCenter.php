<?php 
/* Template Name: Coordination center */
if ( is_user_logged_in() ) {
get_header('dashboard'); ?>
<div class="col-xl-12">
        <div class="row justify-content-end mt-3">   

        <div class="row justify-content-end mt-3 Coordination_row">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10  ">
                <div class=" col-xl-11 top_center_main d-flex flex-wrap">
                    <div class="col-xl-5 col-lg-6">
                        <div class="side_left_sec">
                            <h4><?php echo get_field('title'); ?></h4>
                            <?php echo get_the_content(); ?>
                        </div>
                    </div>     
                    <div class="col-xl-7 col-lg-6 px-0">
                        <div class="right_coordination">
                            <img src="<?php echo get_field('section_image')['url']; ?>" class="img-fluid" alt="image">
                        </div>
                    </div>    
                </div>  
            </div>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-4 mb-4">
                <div class=" col-xl-11 d-flex flex-wrap px-0">
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                        <div class="main_box_btm coordination_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/groups_ico.png">
                            <?php echo get_field('groups_description'); ?>
                            <a href="<?php echo get_site_url(); ?>/groups/">View Groups</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                        
                        <div class="main_box_btm parrot_Bg coordination_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/report_forms_ico.png">
                        <?php echo get_field('reports_and_forms_description'); ?>
                            <a href="<?php echo get_site_url(); ?>/dashboard-reports-and-forms/">View Reports & Forms</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                        <div class="main_box_btm yellow_box coordination_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blogs_ico.png">
                        <?php echo get_field('blogs_description'); ?>
                            <a href="<?php echo get_site_url(); ?>/dashboard-blogs/">View Blogs</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-3 ">
                        <div class="main_box_btm purple_box coordination_icon">
                            <img src="<?= get_template_directory_uri();?>/assets/images/trackings_ico.png">
                        <h5 class="purple">Trackings</h5>
                            <p>View a listing of your reports, groups, accepted roles, and blogs</p>
                            <a href="<?= get_template_directory_uri();?>/tracking/">View Trackings</a>
                        </div>
                        
                        
                       <!-- <div class="main_box_btm purple_box coordination_icon">
                            <img src="<//?php echo get_template_directory_uri(); ?>/assets/images/trackings_ico.png">
                        <//?php echo get_field('tracking_description'); ?>
                            <a href="<//?php echo get_site_url(); ?>/tracking/">View Trackings</a>
                        </div>-->
                    </div>
                 
                </div>
            </div>

            
<?php get_footer(); }?>