<?php

   /* Template Name: User Blog */ 

   

    $current_user_id = get_current_user_id();

   ?>

<!DOCTYPE html>

<html lang="en">

   <head>

      <meta charset="UTF-8" />

      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <title>My Blogs</title>

      <!-- Favicon -->

      <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"/>

      <!-- css links -->

      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet"/>

      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet"/>

      <link href="<?php echo get_template_directory_uri(); ?>/assets/images/css/owl.carousel.min.css" rel="stylesheet"/>

      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet"/>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet"/>

      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet"/>

      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet"/>

      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/css/style_new.min.css"/>

   </head>

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

   </style>

   <body class="main_all_bg_Sec">

      <?php include('user-sidebar.php')?>

      <div class="col-xl-12 mb-2">

         <div class="row justify-content-end mt-3">

            <?php include('user_topbar.php')?>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 my-4 px-4 create_by_me_tabs_main">

               <div class="d-flex align-items-center justify-content-between">

                  <div class="linked_blog">

                     <ul class="nav nav-pills" id="pills-tab" role="tablist">

                        <li class="nav-item">

                           <a class="nav-link" id="all_tab_content" data-toggle="pill" href="#all_tab" role="tab" aria-controls="all_tab" aria-selected="true">All</a>

                        </li>

                        <li class="nav-item">

                           <a class="nav-link active" id="create_by_me_tab" data-toggle="pill" href="#createbyme" role="tab" aria-controls="createbyme" aria-selected="false">Created By Me</a>

                        </li>

                     </ul>

                  </div>

                  <div class="back_btn">

                     <a href="<?php echo site_url('dashboard-blogs')?>">Back</a>

                  </div>

               </div>

               <div class="tab-content" id="tab_group">

                  <div class="tab-pane fade show active" id="createbyme" role="tabpanel" aria-labelledby="create_be_me_tab">

                     <div class="col-xl-12 col-lg-12 col-md-12 col-12 my-4 pl-0">

                        <div class="donation_tab_pills">

                           <div class="btn_list mt-5">

                              <a href="javascript:void(0)" class="mr-4" data-toggle="modal" data-target="#createBlog">

                              <img src="<?= get_template_directory_uri();?>/assets/images/plus_icon.png" class="img-fluid mr-2">

                              Create a New

                              </a>

                              <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">

                              <img src="<?= get_template_directory_uri();?>/assets/images/group_icon.png" class="img-fluid mr-2">

                              Filter By

                              </a>

                           </div>

                           <div class="row blog-card-box">

                                <?php 

                                    

                                    $current_user_id = get_current_user_id();

                                    $args = array(    

                                                'order' => 'DESC',

                                                'post_type'=>'post',

                                                'post_status'=>'publish',

                                                'author' =>  $current_user_id             

                                            );



                                    $posts = get_posts($args);  

                              foreach($posts as $post):

                                $id= $post->ID;

                                $permalink = get_permalink( $id );

                                $title = $post->post_title;

                                $content = $post->post_content;

                                $image = wp_get_attachment_url(get_post_thumbnail_id($id)); 



                               ?>

                            

                                   <div class="col-lg-3 col-12">

                                    <div class="blog-card">

                                        <div class="image">

                                            <a href="<?php echo  get_post_permalink($value->ID);?>">

                                             <?php echo get_the_post_thumbnail($value->ID)?>

                                            </a> 

                                            <div class="blog-dropdown">

                                                <div class="dropdown">

                                                    <a  id="dropdownMenuButtonap" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>

                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonap">

                                                      <a class="dropdown-item" href="javascript:void(0)"   onclick ='editMyBlog("<?=$id; ?>","<?=$content; ?>","<?php echo $image ?>","<?php echo $title; ?>");'>Edit Post</a>



                                                        <form method = "POST" action ="" class="mediadoc_form" enctype="multipart/form-data">

                                                            <input type ="hidden" name ="blog_id"  id="blog_id"  value ="<?=$id; ?>">

                                                            <input type="hidden" name="delete_blog" value="delete_blog"/>

                                                            <input type="hidden" name="group_image_nonce" value="" /> 

                                                            <input type="submit" value="Delete" class="dropdown-item" onclick="return confirm('Do you really want to delete this blog ?')" /> 

                                                        </form>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    <div class="card-title">

                                        <div class="d-flex justify-content-between w-100">

                                            <div class="title">

                                                <h6><?php echo mb_strimwidth($title, 0, 30, '...'); ?></h6>

                                            </div>

                                            <div class="blog-date">

                                                <p><?php echo date("F jS, Y", strtotime($value->post_date)); ?></p>

                                            </div>

                                        </div>

                                           <div class="blog-description">

                                                    <p><?php echo mb_strimwidth($content, 0, 50, '...'); ?></p>

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

                  <div class="tab-pane fade  " id="all_tab" role="tabpanel" aria-labelledby="all_tab_content">

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

                                     $posts = new WP_Query(array(

                                                    'post_type' => 'post',

                                                    'posts_per_page' => 200,

                                                    'paged' => @$currentPage,

                                                    's' => @$_GET['btitle']

                                                ));

                                             // echo "<pre>";

                                             // print_r($posts);

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

                                            <div class="blog-dropdown">

                                                <div class="dropdown">

                                                    <a  id="dropdownMenuButtonap" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>

                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonap">

                                                      <a class="dropdown-item" href="javascript:void(0)"   onclick ='editMyBlog("<?=$value->ID; ?>","<?=$value->post_content; ?>","<?php echo $blogImg ?>","<?php echo $value->post_title; ?>");'>Edit Post</a>



                                                        <form method = "POST" action ="" class="mediadoc_form" enctype="multipart/form-data">

                                                            <input type ="hidden" name ="blog_id"  id="blog_id"  value ="<?=$value->ID; ?>">

                                                            <input type="hidden" name="delete_blog" value="delete_blog"/>

                                                            <input type="hidden" name="group_image_nonce" value="" /> 

                                                            <input type="submit" value="Delete" class="dropdown-item" onclick="return confirm('Do you really want to delete this blog ?')" /> 

                                                        </form>

                                                    </div>

                                                </div>

                                            </div>

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

                     'total' => $posts->max_num_pages,

                     'prev_text' => __('Previous'),

                     'next_text' => __('Next')

                     )) . "</div>";

                     ?>

               </nav>

            </div>

         </div>

      </div>

     <?php include('common_user_footer.php')?>

      </div>

      </div>

     

        <div class="modal fade document-upload" id="createBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

         <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

            <div class="modal-content">

               <div class="modal-header">

                  <h4 class="modal-title text-center">Create Blog</h4>

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png">

                  </button>

               </div>

               <div class="modal-body">

                  <div class="row">

                     <div class="col-md-12">

                        <form method ="post"class="form-upload  resources-modal-page float" id="" enctype="multipart/form-data">

                           <input type="hidden" name="ugroup_id" value="<?php echo $post->ID?>" />

                           <input type="hidden" name="create_blog" value="create_blog">

                           <input type="hidden" name="create_blog_nonce" value="<?php echo wp_create_nonce('create_blog'); ?>" />

                           <div class="row">

                              <div class="col-lg-12 col-12">

                                 <div class="mb-3">

                                    <div class="drag-drop-images text-center image-upload-box">

                                       <div class="avatar-edit">

                                          <input type="file" id="fileUpload" name="group_image" accept=".png, .jpg, .jpeg">

                                          <label for="fileUpload" class="d-flex align-items-center justify-content-center">

                                             <div>

                                                <div class="icon">

                                                   <i class="fa fa-upload" aria-hidden="true"></i>

                                                </div>

                                                <p class="pt-4">Drop your Image here, or <b>Browse</b></p>

                                                <span class="d-block pt-1">Support JPG, JPEG, Png, MP4</span>    

                                             </div>

                                          </label>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <div class="col-lg-12 col-12">

                                 <div class="avatar-upload mb-3">

                                    <div class="avatar-preview">

                                       <div id="imagePreviewFile" style="background-image: url(https://via.placeholder.com/120x88);"></div>

                                    </div>

                                 </div>

                              </div>

                              <div class="col-lg-12 col-12">

                                 <div class="form-floating mb-3">

                                    <input type="text" name= "post_title" class="form-control" id="floatingInput" placeholder="Enter hereaa">

                                    <label for="floatingInput">Blog title</label>

                                 </div>

                              </div>

                              <div class="col-lg-12 col-12">

                                 <div class="form-floating mb-3">

                                    <textarea class="form-control mytextarea" name ="post_content"  placeholder="Enter here" id="floatingTextarea2" style="height: 100px"></textarea>

                                 </div>

                              </div>



                               <div class="col-lg-12 mb-3">

                                                            <div class="form-title">

                                                                <h6><b>Publish Form to</b></h6>

                                                            </div>        

                                                        </div>

                                                       <!--  <div class="col-lg-12 mb-3"> -->

                                                           <!--  <div class="row"> -->

                                                             

                                                                <div class="col-12 col-lg-12 mb-3">

                                                                    <div class="form-check-inline">

                                                                            <input type="radio"  id ="2" name="blog_group_id" onclick="show2();">

                                                                                &nbsp;  Select Group

                                                                        </div>

                                                                                                   <!--  <div class="form-check d-flex align-items-center"> -->

                                                                        <?php $joinGrp = learndash_get_users_group_ids( $current_user_id);

                                                                              $joinedArg= array(); 

                                                                                $joinedArg['post_type'] = 'groups';

                                                                                $joinedArg['post_status'] = 'publish';

                                                                                $joinedArg['paged'] = $currentPage;

                                                                                $joinedArg['posts_per_page'] = 50;

                                                                                $joinedArg['post__in'] = $joinGrp;

                                                                                $myJoinedGroups = get_posts( $joinedArg );

                                                                        ?>  

                                                                         <div id="div1" class="hides">

                                                                            <select class="form-control mt-3 border" name ="rf_publish">

                                                                                

                                                                                <?php  foreach($myJoinedGroups as $joinedGrpupVal){

                                                                                       $author_id=$joinedGrpupVal->post_author;

                                                                                        if($current_user_id!=$author_id){

                                                                                ?>

                                                                                   

                                                                                   <option> <?php echo $joinedGrpupVal->post_title?></option>

                                                                                <?php }} ?>

                                                                          

                                                                            </select>

                                                                     <!--    </div>  -->   

                                                                    </div>

                                                                </div>

                                                                <div class="col-12 col-lg-12 mb-3">

                                                                  <div class="form-check-inline">

                                                                        <input type="radio"  id ="3" name="blog_group_id" onclick="show3();">

                                                                            &nbsp;  Select Group

                                                                    </div>

                                                                   <div id="div2" class="hides">

                                                                        <select class="form-control" name ="blog_groups">

                                                                            <?php

                                                                                $args = array(

                                                                                        'numberposts'   => -1,

                                                                                        'post_type'     => 'groups',

                                                                                        'post_status'   => 'publish'

                                                                                    );

                                                                                    $all_groups = get_posts( $args );

                                                                            ?>

                                                                            <?php   foreach($all_groups as $value){ ?>

                                                                              <option value = "<?php echo $value->ID ?>" ><?php echo $value->post_title ?></option>

                                                                            <?php } ?>

                                                                               

                                                                        </select>     

                                                                </div>

                                                                </div>

                                                             <div class="col-12 col-lg-12 mb-3">

                                                                    <div class="form-check-inline">

                                                                    <input type="radio" name="blog_group_id" id="1" value="all_users" onclick="show1();">

                                                                          &nbsp;  All RRN User

                                                                </div>

                                                                </div>

                                </div>

                              <div class="col-lg-12 col-12 d-flex justify-content-center">

                                 <button class="btn btn-primary" title="Create Blog" id="Upload">Create Blog</button>

                              </div>

                           </div>

                        </form>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

        <div class="modal fade deleteModal" id="blogDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

         <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

               <div class="modal-header">

                  <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to Delete</h5>

                  <button type="button" class="close closeBtn" data-dismiss="modal" aria-label="Close">

                  <span aria-hidden="true">&times;</span>

                  </button>

               </div>

               <div class="modal-body">

                  <div class="d-flex modal-btn-delete">

                     <div class="w-50">

                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal" title="Cancel">Cancel</button>

                     </div>

                     <div class="mx-2"></div>

                     <div class="w-50">

                        <form method = "POST" action ="" class="mediadoc_form" enctype="multipart/form-data">

                           <input type ="hidden" name ="blog_id"  id="blog_id"  value ="<?=$value->ID; ?>">

                           <input type="hidden" name="delete_blog" value="delete_blog"/>

                           <input type="hidden" name="group_image_nonce" value="<//?php echo wp_create_nonce('group_image_nonce'); ?>" />y

                           <button type="button" class="btn btn-primary" title="Delete">Delete</button>    

                        </form>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

        <div class="modal fade" id="exampleModalCenter"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">

         <form method="get" action="">

            <div class="modal-dialog modal-dialog-centered create_tickit" role="document">

               <div class="modal-content">

                  <div class="modal-header">

                     <h5 class="modal-title" id="exampleModalLongTitle">Filter by</h5>

                  </div>

                  <div class="modal-body main_profile_form">

                     <div class="form-group select_sec date_sec">

                        <label for="exampleFormControlSelect1">Filter by Date</label>

                        <input placeholder="Select date" type="date" name="bDate" id="bDate" class="form-control">

                     </div>

                     <div class="form-group">

                        <label for="exampleInputPassword1">Filter by Title</label>

                        <input

                           type="text"

                           class="form-control"

                           id="btitle"

                           name="btitle"

                           placeholder="Type here"

                           />

                     </div>

                     <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-6">

                           <div class="apply_btn">

                              <button

                                 class="btn btn_apply"

                                 data-dismiss="modal"

                                 aria-label="Close"

                                 >

                              Cancel

                              </button>

                           </div>

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-6">

                           <div class="apply_btn active">

                              <button type="submit" class="btn btn_apply">Apply filter</button>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </form>

      </div>

        <div class="modal editBlogfade document-upload" id="editBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

         <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

            <div class="modal-content">

               <div class="modal-header">

                  <h4 class="modal-title text-center">Edit Blog</h4>

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png">

                  </button>

               </div>

               <div class="modal-body">

                  <div class="row">

                     <div class="col-md-12">

                        <form method="post"class="form-upload  resources-modal-page float" id="blog_edit_imagefrm" enctype="multipart/form-data">

                           <input type="hidden" name="ugroup_id" value="<?php echo $post->ID?>" />

                           <input type ="hidden" name ="blog_edit_id"  id="blog_edit_id"  value ="">

                           <input type="hidden" name="update_blog" value="update_blog">

                           <input type="hidden" name="update_blog_nonce" value="<?php echo wp_create_nonce('update_blog_nonce'); ?>" />

                           <div class="row">

                              <div class="col-lg-12 col-12">

                                 <div class="mb-3">

                                    <div class="drag-drop-images text-center image-upload-box">

                                       <div class="avatar-edit">

                                          <input type="file" id="blog_edit_image" name="blog_edit_image" accept=".png, .jpg, .jpeg">

                                          <label for="blog_edit_image" class="d-flex align-items-center justify-content-center">

                                             <div>

                                                <div class="icon">

                                                   <i class="fa fa-upload" aria-hidden="true"></i>

                                                </div>

                                                <p class="pt-4">Drop your Image here, or <b>Browse</b></p>

                                                <span class="d-block pt-1">Support JPG, JPEG, Png, MP4</span>    

                                             </div>

                                          </label>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <div class="col-lg-12 col-12">

                                 <div class="avatar-upload mb-3">

                                    <div class="avatar-preview">

                                       <div id="imagePreviewFile" class="imagePreviewFile2" style="background-image: url(https://via.placeholder.com/120x88);"></div>

                                    </div>

                                 </div>

                              </div>

                              <div class="col-lg-12 col-12">

                                 <div class="form-floating mb-3">

                                    <input type="text" name= "post_title" class="form-control" id="blog_title" placeholder="Enter here" value="">

                                    <label for="floatingInput">Blog title</label>

                                 </div>

                              </div>

                              <div class="col-lg-12 col-12">

                                 <div class="form-floating mb-3">

                                    <textarea class="form-control" name ="post_content"  placeholder="Enter here" id="blog_content" style="height: 100px"></textarea>

                                    <label for="floatingInput">Description</label>

                                 </div>

                              </div>

                              <div class="col-lg-12 col-12 d-flex justify-content-center">

                                 <button class="btn btn-primary" type="submit" title="Update Blog" id="Upload">Update Blog</button>

                              </div>

                           </div>

                        </form>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

      

      <script>

         function editMyBlog(id,content,img,title){ 

             $("#img_new").attr("src",img);  

             $('#blogEditImage').css('background-image', 'url('+img+')');          

             $('#blog_edit_id').val(id);

             $('#blog_title').val(title);

              $("#blog_content").val(content );

             $('#editBlog').modal('show');

         }

          

      </script>

      <script>

         $(document).ready(function () {

           $('#dropdownMenuButtonap').on('click',function(){

           })        

         });  

         

         function readURL(input) {

           if (input.files && input.files[0]) {

               var reader = new FileReader();

               reader.onload = function(e) {

                   $('.imagePreviewFile2').css('background-image', 'url('+e.target.result +')');

                   $('.imagePreviewFile2').hide();

                   $('.imagePreviewFile2').fadeIn(650);

               }

               reader.readAsDataURL(input.files[0]);

           }

         }

         $("#blog_edit_image").change(function() {

           readURL(this);

         });

         

      </script>

      <!--<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

      <script>

         ClassicEditor

                 .create( document.querySelector( '.mytextarea' ) )

                 

      </script>-->

      <script>

    

    function show1(){

      document.getElementById('div1').style.display ='none';

      document.getElementById('div2').style.display ='none';

    }

    

    function show2(){

      document.getElementById('div1').style.display = 'block';

      document.getElementById('div2').style.display ='none';

    }

      function show3(){

      document.getElementById('div2').style.display = 'block';

      document.getElementById('div1').style.display ='none';

    }

 </script>

   </body>

</html>