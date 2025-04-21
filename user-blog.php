<?php

   /* Template Name: User Blog */ 

   

   $current_user_id = get_current_user_id();
   $user = new KCC\User($current_user_id); 
    
   get_header('dashboard'); 
   
   ?>
      <style>

/* Left Sidebar */

.main_side_bar_left {

height: 100%;

}

/* Right Body */

/* .main_footer_sec {

position: fixed;

bottom: 0;

} */

.btn_list {

padding: 0 0rem;

margin: 0 0 30px;

}

.back_btn {

margin-right: 10%;

}

.btn_list a {

background: #f9671d 0% 0% no-repeat padding-box;

box-shadow: 0px 3px 99px #ccd6ff3e;

border-radius: 9px;

font-size: 13px;

color: #ffffff;

padding: 1rem 2rem;

}

.btn_list {

position: relative;

top: unset;

right: unset;

padding: 0;

padding: 0 0rem;

}

.donation_tab_pills {

background: unset;

box-shadow: unset;

border-radius: unset;

padding: unset;

}

.create_by_me_tabs_main .nav-link.active{

background: #f9671d 0% 0% no-repeat padding-box;

box-shadow: 0px 3px 99px #ccd6ff3e;

border-radius: 9px;

font-size: 13px;

color: #ffffff;

padding: 1rem 2rem;

}

.linked_blog ul{

margin-bottom:0;

}

.linked_blog a{

padding:1rem 0.8rem

}

.donation_tab_pills .grid-container{

padding-left:0;

}

.blog_box:first-child{

margin-left:0;

}

/* Responsive */

@media (max-width: 1024px) {

/* Left Sidebar */

.main_side_bar_left:hover .side_text_view p,

.main_side_bar_left:hover .side_open_logo {

margin-left: 2.5rem;

}

}

@media (max-width: 600px) {

.main_footer_sec {

position: relative;

bottom: 0;

}

.btn_list {

justify-content: start;

margin-left: 0;

margin-right: 0;

margin-bottom:0;

}

.btn_list a {

margin: 10px 0;

font-size: 10px;

}

.back_btn a {

width: 65%;

margin-left: 50px;

}

.back_btn {

margin-right: 10%;

}

.btn_list a {

padding: 0.6rem 0.7rem;

}

.btn_list_blog a{

padding: 0.4rem 0.5rem;

font-size: 10px;

}

.btn_list_blog{

justify-content: center;

display: flex;

}

.right_top_sec {

justify-content: flex-start;

}

.create_by_me_tabs_main .nav-link.active{

padding:9.6px 11.2px;

}

}

.row{
   width:100%;
}

</style>

         <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 my-4 px-4 create_by_me_tabs_main">

               <div class="d-flex align-items-center justify-content-between">

                  <div class="linked_blog">

                     <ul class="nav nav-pills" id="pills-tab" role="tablist">

                        <li class="nav-item">

                           <a class="nav-link active" id="all_tab_content" data-toggle="pill" href="#all_tab" role="tab" aria-controls="all_tab" aria-selected="true">All</a>

                        </li>

                        <li class="nav-item">

                           <a class="nav-link" id="create_by_me_tab" data-toggle="pill" href="#createbyme" role="tab" aria-controls="createbyme" aria-selected="false">Created By Me</a>

                        </li>

                     </ul>

                  </div>

                  <div class="back_btn">

                     <a href="<?php echo site_url('dashboard-home')?>">Back</a>

                  </div>

               </div>

               <div class="tab-content" id="tab_group">

                  <div class="tab-pane fade" id="createbyme" role="tabpanel" aria-labelledby="create_be_me_tab">

                     <div class="col-xl-12 col-lg-12 col-md-12 col-12 my-4 pl-0">

                        <div class="donation_tab_pills">

                           <div class="btn_list mt-5">

                              <a href="javascript:void(0)" class="mr-4" data-toggle="modal" data-target="#createBlog">

                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">

                              Create a New

                              </a>

                              <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">

                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/group_icon.png" class="img-fluid mr-2">

                              Filter By

                              </a>

                           </div>

                           <div class="row blog-card-box">

                                <?php 

                           
                              $kcc_posts = $user->myBlogPosts();
                              if(empty($kcc_posts)){
                                 ?>
                              <div class="col-lg-12 col-12">
                                 <div class="alert alert-warning text-center" role="alert">
                                    There are no blog posts created by you.
                                 </div>
                              </div>
                              <?php
                              }

                              foreach($kcc_posts as $kcc_post):

                                 $editArgs = 
                                 json_encode([
                                    "post_id" => $kcc_post->id(),
                                    "post_title" => $kcc_post->title(),
                                    "post_content" => htmlentities($kcc_post->content(), ENT_QUOTES, 'UTF-8'),
                                    "post_thumbnail" => $kcc_post->thumbnail_url()
                                 ]);

                                 $kcc_post->render_cell();
                                 continue;
                                 
                               ?>

                            

                                   <div class="col-lg-3 col-12">

                                    <div class="blog-card">

                                        <div class="image">

                                            <a href="<?= $kcc_post->permalink(); ?>">

                                             <?= $kcc_post->thumbnail(); ?>

                                            </a> 
                                            <?php if(get_current_user_id() == $kcc_post->author_id()): ?>
                                            <div class="blog-dropdown">

                                                <div class="dropdown">

                                                    <a  id="dropdownMenuButtonap" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>

                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonap">
                                                      
                                                      <a class="dropdown-item" href="javascript:void(0)"   onclick ='editBlog(<?= $edit_args?>);'>Edit Post</a>
                                                      



                                                        <form method = "POST" action ="" class="mediadoc_form" enctype="multipart/form-data">

                                                            <input type ="hidden" name ="blog_id"  id="blog_id"  value ="<?=$kcc_post->id(); ?>">

                                                            <input type="hidden" name="delete_blog" value="delete_blog"/>

                                                            <input type="hidden" name="group_image_nonce" value="" /> 

                                                            <input type="submit" value="Delete" class="dropdown-item" onclick="return confirm('Do you really want to delete this blog ?')" /> 

                                                        </form>
                                                        

                                                    </div>

                                                </div>

                                            </div>
                                            <?php endif; ?>

                                        </div>

                                    <div class="card-title">

                                        <div class="d-flex justify-content-between w-100">

                                            <div class="title">

                                                <h6><?php echo mb_strimwidth($kcc_post->title(), 0, 30, '...'); ?></h6>

                                            </div>

                                            <div class="blog-date">

                                                <p><?= $kcc_post->date('F jS, Y'); ?></p>

                                            </div>

                                        </div>

                                           <div class="blog-description">

                                                    <p><?php echo mb_strimwidth($kcc_post->content(false), 0, 50, '...'); ?></p>

                                            </div>

                                    </div>

                                    </div>

                                </div>

                           <?php



                            endforeach; 



                            ?>

                                    

                         



                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="tab-pane fade show active " id="all_tab" role="tabpanel" aria-labelledby="all_tab_content">

                     <div class="col-xl-12 col-lg-11 col-md-11 col-12 my-4">

                        <div class="donation_tab_pills">

                           <div class="btn_list mt-5">

                              <a href="javascript:void(0)" class="mr-4" data-toggle="modal" data-target="#createBlog">

                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">

                              Create a New

                              </a>

                              <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">

                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/group_icon.png" class="img-fluid mr-2">

                              Filter By

                              </a>

                           </div>

                           <div class="row blog-card-box">

                               <?php 

                                    $currentPage = get_query_var('paged');

                                    $current_user_id = get_current_user_id();

                                     $kcc_posts = new WP_Query(array(

                                                    'post_type' => 'post',

                                                    'posts_per_page' => 200,

                                                    'paged' => @$currentPage,

                                                    's' => @$_GET['btitle']

                                                ));

                                             // echo "<pre>";

                                             // print_r($kcc_posts);

                                     $args = array(

                                            'numberposts'   => 200,

                                            'order'     => 'DESC',

                                            'post_type' => 'post'

                                        );

                                    

                                     if(!empty($_GET['btitle'])){                                          

                                        $args['s'] = $_GET['btitle'];

                                      }

                                      if(!empty($_GET['bDate'])){

                                        $args['date_query'] =      array(

                                        'after' => date('Y-m-d',strtotime($_GET['bDate']))

                                        );   

                                      }

                                      $my_posts = get_posts( $args );

                                         

                                       if(!empty($my_posts)) {

                                           

                                           foreach($my_posts as $value) {

                                             $kcc_post = new KCC\Communications\BlogPost($value->ID);

                                             $editArgs = 
                                             json_encode([
                                                "post_id" => $value->ID,
                                                "post_title" => $value->post_title,
                                                "post_content" => htmlentities($value->post_content, ENT_QUOTES, 'UTF-8'),
                                                "post_thumbnail" => wp_get_attachment_url( get_post_thumbnail_id($value->ID))
                                             ]);

                                             $kcc_post->render_cell();
                                             continue;
                                               $blogImg = wp_get_attachment_url( get_post_thumbnail_id($value->ID) );

                                               if(empty($blogImg)){                                                        

                                                   $blogImg= get_template_directory_uri()."/assets/images/range_1.png";

                                               }

                                     ?>





                                <div class="col-lg-3 col-12">

                                    <div class="blog-card">

                                        <div class="image">

                                            <a href="<?php echo  get_post_permalink($value->ID);?>">

                                             <?php echo get_the_post_thumbnail($value->ID)?>

                                            </a> 
                                             <?php if(get_current_user_id() == $value->post_author): ?>
                                            <div class="blog-dropdown">

                                                <div class="dropdown">

                                                    <a  id="dropdownMenuButtonap" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>

                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonap">
                                                      
                                                      <a class="dropdown-item" href="javascript:void(0)"   onclick ='editBlog(<?= $editArgs;?>);'>Edit Post</a>
    

                                                        <form method = "POST" action ="" class="mediadoc_form" enctype="multipart/form-data">

                                                            <input type ="hidden" name ="blog_id"  id="blog_id"  value ="<?=$value->ID; ?>">

                                                            <input type="hidden" name="delete_blog" value="delete_blog"/>

                                                            <input type="hidden" name="group_image_nonce" value="" /> 

                                                            <input type="submit" value="Delete" class="dropdown-item" onclick="return confirm('Do you really want to delete this blog ?')" /> 

                                                        </form>
                                                    </div>

                                                </div>

                                            </div>
                                           <?php endif; ?>


                                        </div>

                                    <div class="card-title">

                                        <div class="d-flex justify-content-between w-100">

                                            <div class="title">

                                                <h6><?php echo mb_strimwidth($value->post_title, 0, 20, '...'); ?></h6>

                                            </div>

                                            <div class="blog-date">

                                                <p><?php echo date("F jS, Y", strtotime($value->post_date)); ?></p>

                                            </div>

                                        </div>

                                   

                                    </div>

                                    </div>

                                </div>

                              <?php } } else { ?>

                               <?php echo 'There is no blog.';?>

                           <?php } ?>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

            <div class="btm_pagination_sec">

               <nav aria-label="Page navigation example">

                  <?php  echo "<div class='page-nav-container pagination'>" . paginate_links(array(

                     'total' => $kcc_posts->max_num_pages,

                     'prev_text' => __('Previous'),

                     'next_text' => __('Next')

                     )) . "</div>";

                     ?>

               </nav>

            </div>

         </div>

      </div>


      </div>

      </div>

     

      <?php
      $form = new \KCC\Forms\BlogPostForm();
      $form->renderCreateModal();
      $form->renderDeleteModal();
      $form->renderEditModal();      
      $form->renderFilterModal();    
      ?>
      

<?php
get_footer();
?>