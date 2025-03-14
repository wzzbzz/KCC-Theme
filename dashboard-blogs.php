<?php 

/* Template Name: Blogs */

if ( is_user_logged_in() ) {

get_header('dashboard'); //include 'aq_resizer.php';?>

<div class="col-xl-12 ">

        <div class="row justify-content-end mt-3">



            <?php include('user_topbar.php')?>





            <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">

               <div class="d-flex align-items-center justify-content-between">

                   <div class="linked_blog">

                        <a href="" class="active mr-3">All</a>

                        <a href="<?php echo get_site_url(); ?>/blog-created-by-me/">Created by Me</a>

                   </div>

                   <div class="back_btn">

                        <a href="<?php echo get_site_url(); ?>/dashboard-coordination-center/">Back</a>

                    </div>

                </div>

            </div> 

            <?php 

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(

                    'post_type'  => 'post',                    

                    'paged' => $paged,

                    'orderby' => 'date',

                    'order' => 'ASC',

                    'posts_per_page' => -1,

                    'post_status' => 'publish',

                );

             

                $loop = new WP_Query( $args );   

            ?>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">

               <div class="donation_tab_pills ">

                  <div class="btn_list">

                    <a href="#" class="mr-4">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">

                        Create a New

                    </a>

                    <a href="#">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/group_icon.png" class="img-fluid mr-2">

                        Filter By

                    </a>

                  </div>

                  <div class="blog_grid">

                    <div class="grid-container">

                        <?php if ( $loop->have_posts() ) {

                        while ( $loop->have_posts() ) : $loop->the_post();

                        

                        $title = get_the_title();

                        $text = str_replace("<br>", " ", $title);

                        $img = get_the_post_thumbnail_url(get_the_ID(),'full');

                        ?>

                        <div class="blog_box  grid-item"  >

                            <a href="<?php the_permalink(); ?>">

                                <img src="<?php echo aq_resize($img, 368, 178, true); ?>" class="img-fluid" alt="image">

                                <div>

                                    <h4><?php echo $text; ?></h4>

                                    <small><?php echo get_the_date(); ?></small>

                                </div>

                                <p><?php echo wp_trim_words( get_the_content($mypost->ID), 20, '' ); ?></p>

                            </a>

                        </div>

                        <?php endwhile;} ?>

                    </div>

                  </div>

                </div>

                <?php 

                

                ?>





                <div class="btm_pagination_sec">

                    <nav aria-label="Page navigation example">

                        <ul class="pagination justify-content-end">

                            

                          <?php 

                            $big = 999999999; // need an unlikely integer

                            echo paginate_links( array(

                               'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),

                               'format' => '<li>?paged=%#%</li>',

                               'current' => max( 1, get_query_var('paged') ),

                               'total' => $loop->max_num_pages ) );

                          ?>

                        

                        </ul>

                      </nav>

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

<?php get_footer('new'); }?>