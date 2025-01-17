<?php 
/* Template Name: Dasboard Donate */
if ( is_user_logged_in() ) {
get_header('new'); ?>
    <div class="col-xl-12 ">
        <div class="row justify-content-end mt-3">

        <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
               <?php include('user_topbar.php')?>
                
            </div>



            <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">
               <div class="donation_tab_pills">
                <ul class="nav nav-pills mb-3 justify-content-between" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All</a>
                    </li>
                    <!--<li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Category Name</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Category Name</a>
                    </li>-->
                    <!-- <div class="serch_sec_top ml-auto">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search for donations">
                    </div> -->
                    <div class="serch_sec_top">
                       <form method="get" action="<?php echo site_url('search-results')?>" name="frmSearch" id="frmSearch">
                       <input type="text" class="form-control" name="q" id="q" aria-describedby="emailHelp" placeholder="Search for donations">
                       </form>
                    </div>
                  </ul>
                    
                 
                  <?php

                $searchArg= array(); 
                $searchArg['post_type'] = 'donation';
                $searchArg['post_status'] = 'publish';
                //$searchArg['paged'] = $currentPage;
                $searchArg['posts_per_page'] =-1;
                if(!empty($_GET['q'])){                                          
                    $searchArg['s'] = $_GET['q'];
                }



                    $lastposts = get_posts( $searchArg);
                    ?>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">                        
                        <div class="grid-container">
                            <?php if ( $lastposts ) {
                        foreach ( $lastposts as $post ) :
                            setup_postdata( $post );

                            $featured_img_url = get_post_meta( get_the_ID(),'feature-image',true );
                            if(empty($featured_img_url)){                                                        
                               $featured_img_url= get_template_directory_uri()."/assets/images/range_1.png";
                            }
                            ?>

                        
                               
                                    <div class="donation_box grid-item ">
                                        <img src="<?php echo $featured_img_url; ?>" class="img-fluid" alt="image" height="153">
                                        <div class="discription_donate">
                                            <h5><?php the_title(); ?></h5>
                                            <p><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
                                        </div>
                                        
                                        
                                       <?php 
                                         $slug = get_post_field( 'post_name', get_post());
                                         if($slug == 'urgent-supply-request') { ?>
                                           
                                            <div class="to_donate">
                                              <a target="_blank" href="https://www.amazon.com/hz/wishlist/ls/3MFI4PTQY6CWW?ref_=wl_fv_le">
                                                  <button class="btn btn_donate">View Wishlist</button>
                                                </a>
                                            </div>

                                         <?php } else { ?>
                                            <div class="to_donate">
                                                <a href="<?php the_permalink(get_the_ID()); ?>">
                                                 <button class="btn btn_donate">DONATE NOW</button>
                                                </a>
                                            </div>
                                         <?php } ?>
                                        
                                        
                                    </div>
                           
                            <?php
                                endforeach; 
                                wp_reset_postdata();
                            } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                  </div>
               </div>
            </div> 
            <div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex align-items-center  flex-wrap">
              <?php include('common_user_footer.php')?>
            </div>              

        </div>        
    </div>
<?php get_footer('new'); } ?>