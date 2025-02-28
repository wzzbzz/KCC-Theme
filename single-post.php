<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( !is_user_logged_in() ) {

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

    <?php get_sidebar(); ?>

<?php endif ?>

    <div id="primary" <?php astra_primary_class(); ?>>

        <?php astra_primary_content_top(); ?>
        <?php astra_content_loop(); ?>
        <?php astra_primary_content_bottom(); ?>
         
         <?php 
          //comment_form();
          comments_template( '', true );
                      //  if ( is_single() || is_page() ) {
                // If comments are open or we have at least one comment, load up the comment template.
                //comment_form();
                //if ( comments_open() || get_comments_number() ) :
                    //comments_template();
                    
                  //  comment_form();
                //endif;
           // }
            ?>
    </div>

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

    <?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer();
}
else{
    $img = get_the_post_thumbnail_url(get_the_ID(),'large'); 
    $current_user_id = get_current_user_id();
    $kcc_post = new KCC\Communications\BlogPost(get_the_ID());
    get_header('dashboard'); ?>

<div class="col-xl-12 profile-page-main">
   <div class="row  justify-content-end mt-3 create-report blog-detail-page mt-lg-5">
        <div class="col-xl-11 col-lg-11 col-md-10 col-10 d-flex justify-content-between  flex-wrap">
            <div class="row w-100">
                <div class="col-xl-8">
                    <div class="left-image-box">
                        <div class="image d-flex justify-content-center">
                            <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
                        </div>
                        

                        <div class="content-area-box mb-5">
                        <div class="d-flex justify-content-between align-items-center w-100 mb-3">
                            <div class="author">
                                <span>By <?php echo $kcc_post->author()->name(); ?></span>
                            </div>
                            <div class="date">
                                    <span><?php echo get_the_date()?></span>
                                </div>
                            
                        </div>
                            
                            <div class="d-flex justify-content-center align-items-center w-100 mb-3">
                                
                                <div class="title">
                                    <h2><?php echo get_the_title(); ?></h2>
                                </div>
                                
                            </div>
                            <div class="teatx-area">
                                <?php echo get_the_content(); ?>
                            </div>
                            <?php  comments_template( '', true );?>
                        </div>
                    </div>
                </div>
                <?php 
                     $group_id =  get_post_meta( get_the_ID(), 'blog_group_id', true);
                     $related = ums_get_related_posts( get_the_ID(), 3 );
                     if( $related->have_posts() ){
                            add_post_meta( $announcement_id, 'blog_group_id', @$_POST['ugroup_id']);
                ?>
                <div class="col-xl-4">
                    <div class="right-image-box">
                        <div class="d-flex justify-content-between w-100 align-items-center mb-4">
                            <div class="related-blog">
                                <h3>Related Blogs</h3>
                            </div>
                            <div class="back-btn">
                                <a href="<?php echo get_permalink($group_id)?>" title="Back" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                        <?php while( $related->have_posts() ): $related->the_post(); 
                            ?>
                        <div class="box-1">
                            <div class="image d-flex justify-content-center">
                               <a href="<?php echo get_permalink(  get_the_ID() )?>"> <?php the_post_thumbnail( 'single-post-thumbnail' ); ?></a>
                            </div>
                            <div class="box-text mt-2">
                                <div class="justify-content-between w-100">
                                    <div class="title"> 
                                        <h4><a href="<?php echo get_permalink(  get_the_ID() )?>"><?php the_title(); ?></a></h4>
                                    </div>
                                    <div class="date">
                                        <span><?php echo get_the_date()?></span>
                                    </div>
                                </div>
                                <div class="blog-desc">
                                    <?php echo wp_trim_words(get_the_content(),13); ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        
                    </div>
                </div>
            <?php }
            wp_reset_postdata();
            ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); 

} ?>
