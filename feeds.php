<?php 

/* Template Name: Feeds */

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Feeds</title>



    <!-- Favicon -->

    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">



    <!-- css links -->

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css" rel="stylesheet">

	

	

<style> 

	.image-upload > input

		{

			display: none;

		}



	.image-upload img

		{

			width: 80px;

			cursor: pointer;

		}

	

	.dropdown-item:focus, .dropdown-item:hover {

    color: #16181b;

    text-decoration: none;

     background-color: unset;

}

li.my_feeds a.nav-link{ width:160px; padding:15px 0px;}

.col-xl-11{max-width:100%;}

.my_grp_feed ul.nav{background: #f8f8f8;

    border: 1px solid #e8e8e8;

    border-radius: 15px;

    padding: 10px;}

</style>



</head>



<body class="main_all_bg_Sec">



    <?php include('usermenucommon.php')?>



    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css">

    

    <div class="col-xl-12 ">

        <div class="row justify-content-end mt-3">



           <?php include('user_topbar.php')?>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">

                <div class="donation_tab_pills col-xl-11">

                    <div class="donate_details_main">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail_click.png" class="img-fluid membergroup-img" alt="image">

                        <div class="donation_detail">

                            <div class="d-flex align-items-center flex-wrap">

                                <h5>Group Name</h5>

                                <span>Member only</span>

                            </div>

                            <div class="donate_btn_right">

                                <button class="btn now_donate"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png"> Join Group </button>

                            </div>



                        </div>

                    </div>

                    <div class="d-flex align-items-center flex-wrap">

                        <h5 class="parent-member parent-member col-lg-3 col-md-12 row">

                            <img class="image1" src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png">

                            <img class="image2" src="<?php echo get_template_directory_uri(); ?>/assets/images/message_4_icon.png">

                            <img class="image3" src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png">

                            <img class="image4" src="<?php echo get_template_directory_uri(); ?>/assets/images/message_2_icon.png">

                            <img class="image5" src="<?php echo get_template_directory_uri(); ?>/assets/images/message_1_icon.png">

                            <span class="image6">+25K</span>

                        </h5>

                        <span>

                            <b>Manager</b>

                            <img class="image1" src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png">

                            <span>You</span></span>

                    </div>

                    <div class="about_donate">

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has

                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a

                            galley of type and scrambled it to make a type specimen book. It has survived not only five

                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.

                        </p>

                    </div>

                </div>

            </div>



            <!-- Modal Create Feed -->

            <div class="modal fade" id="createFeed" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"

                aria-hidden="true">

                <div class="modal-dialog modal-lg modal-dialog-centered create_tickit modal-dialog-scrollable"

                    role="document">

                    <div class="modal-content">



                        <div class="modal-body">



                            <div class="blog_grid">

                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">

                                        <h5 class="modal-title create_feed_title_modeal " style="display:inline-block"

                                            id="exampleModalLongTitle">Create Feed</h5>

                                        <button type="button" class="close"

                                            style="float:right;font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%"

                                            data-dismiss="modal">&times;</button>

                                    </div>

                                </div><br>

                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                        <form method = "POST" action ="" class="row mediadoc_form" enctype="multipart/form-data">

											<input type="hidden" name="create_feed" value="create_feed" />

                                            <input type="hidden" name="group_image_nonce" value="<?php echo wp_create_nonce('group_image_nonce'); ?>" />

                                            <div class="col-xl-12 col-lg-12">

                                                <div class="drag-drop-images text-center">

                                                   <div class="image-upload">

														<label for="file-input">

															<img src="<?php echo get_template_directory_uri(); ?>/assets/images/upload.png"/>

															<br><span>Drop your image here, or Browse</span><br>Support JPG, JPEG, PNG, MP4

														</label>



														<input id="file-input" name="group_image" type="file"/>

													</div>

                                                </div>

                                            </div>



                                          

                                            <div class="col-xl-12 col-lg-12 mt-1 mb-1">

                                                <div class="form-group">

                                                    <label for="exampleFormControlSelect1">Description</label>

                                                    <textarea name="post_content" maxlength="2000"

                                                        placeholder="Enter Here" rows="2" cols="100"

                                                        class="form-control" id="exampleInputPassword1"></textarea>

                                                </div>

                                            </div>

                                          

                                        

                                        <div class="row w-100 d-flex justify-content-center">

                                           

                                            <div class="col-lg-6 col-12">

                                                <div class="apply_btn active">

                                                    <button class="btn btn_apply d-inline">Create</button>

                                                </div>

                                            </div>

                                        </div>

											

											</form>

                                    </div>

                                </div>

								

								

								

                            </div>



                        </div>

                    </div>



                </div>

            </div>

			

			<!--  Modal Feed Edit  -->

			<div class="modal fade" id="editFeed" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"

                aria-hidden="true">

                <div class="modal-dialog modal-lg modal-dialog-centered create_tickit modal-dialog-scrollable"

                    role="document">

                    <div class="modal-content">

                        <div class="modal-body">

                            <div class="blog_grid">

                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">

                                        <h5 class="modal-title create_feed_title_modeal " style="display:inline-block"

                                            id="exampleModalLongTitle">Update Feed</h5>

										

                                        <button type="button" class="close"

                                            style="float:right;font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%"

                                            data-dismiss="modal">&times;</button>

                                    </div>

                                </div><br>

                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                        <form method = "POST" action ="" class="row mediadoc_form" enctype="multipart/form-data">

											<input type ="hidden" name ="feed_id"  id="feed_id"  value ="">

											<input type="hidden" name="update_feed" value="update_feed"/>

                                            <input type="hidden" name="group_image_nonce" value="<?php echo wp_create_nonce('group_image_nonce'); ?>" />

											

                                            <div class="col-xl-12 col-lg-12">

                                                <div class="drag-drop-images text-center">

                                                   <div class="image-upload">

														<label for="file-input">

									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/upload.png" id="img_new"/>

															<br><span>Update your image here, or Browse</span><br>Support JPG, JPEG, PNG, MP4

														</label>



														<input id="file-input" name="group_image" type="file"/>

													</div>

                                                </div>

                                            </div>

											

                                            <div class="col-xl-12 col-lg-12 mt-1 mb-1">

                                                <div class="form-group">

                                                    <label for="exampleFormControlSelect1">Description</label>

                                                    <textarea name="post_content" maxlength="2000"

                                                        placeholder="Enter Here" rows="2" cols="100"

                                                        class="form-control"  id="feed_content"></textarea>

                                                </div>

                                            </div>

                                          

                                        <div class="row w-100 d-flex justify-content-center">

                                           

                                            <div class="col-lg-6 col-12">

                                                <div class="apply_btn active">

                                                    <button class="btn btn_apply d-inline">Update</button>

                                                </div>

                                            </div>

                                        </div>		

											</form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

			

			

			<!--  Modal feed Edit -->

			

			

			

			



            <!--- modal edit group end ------>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">

                <!----tab------->

                <div class="group_feeds my_grp_feed col-xl-11">

                    <ul class="nav nav-pills mb-3 justify-content-between feed_tabs_bg" id="pills-tab" role="tablist">

                        <li class="nav-item group_btn_feed my_feeds">

                            <a class="nav-link active" id="pills-feeds-tab" data-toggle="pill" href="#pills-feeds"

                                role="tab" aria-controls="pills-feeds" aria-selected="true">Feeds</a>

                        </li>

                        <li class="nav-item group_btn_feed">

                            <a class="nav-link" id="pills-members-tab" data-toggle="pill" href="#pills-members"

                                role="tab" aria-controls="pills-members" aria-selected="false">Members</a>

                        </li>

                        <li class="nav-item group_btn_feed">

                            <a class="nav-link" id="pills-blogs-tab" data-toggle="pill" href="#pills-blogs" role="tab"

                                aria-controls="pills-blogs" aria-selected="false">Blogs</a>

                        </li>

                        <li class="nav-item group_btn_feed">

                            <a class="nav-link" id="pills-annoucements-tab" data-toggle="pill"

                                href="#pills-annoucements" role="tab" aria-controls="pills-annoucements"

                                aria-selected="false">Annoucements</a>

                        </li>

                        <li class="nav-item group_btn_feed">

                            <a class="nav-link" id="pills-reports-forms-tab" data-toggle="pill"

                                href="#pills-reports-forms" role="tab" aria-controls="pills-reports-forms"

                                aria-selected="false">Reports & Forms</a>

                        </li>

                        <li class="nav-item group_btn_feed">

                            <a class="nav-link" id="pills-media-resources-tab" data-toggle="pill"

                                href="#pills-media-resources" role="tab" aria-controls="pills-media-resources"

                                aria-selected="false">Media & Resources</a>

                        </li>

                    </ul>

					

					 <div class="col-xl-12 col-lg-12 col-md-12 col-10 text-right">

					   <div class="donate_btn_right">

						 

                                <button class="btn now_donate" data-toggle="modal" data-target="#createFeed" ><img src="https://knowledge.communication.worldcares.org/wp-content/themes/astra/assets/images/plus_icon.png"> Create Feed </button>

                            </div>

					 </div>

					

					 <?php echo do_action('success_msg'); ?>





                    <div class="tab-content" id="pills-tabContent">

                        

                        <div class="tab-pane fade show active" id="pills-feeds" role="tabpanel"

                            aria-labelledby="pills-feeds-tab">



                            <div class="blog_grid pt-4">

                                <div class="grid-container">

									   

									<?php 

											$current_user_id = get_current_user_id();

											$allFeeds = get_posts( array(

												'post_type'      => 'feeds',

												'post_status'    => 'publish',

												'author'        =>  $current_user_id,

												'numberposts' => 1000,

											) );

								 foreach($allFeeds as $value)

								 { 

									$author_id = $value->post_author;

									$author_img = the_author_meta( 'avatar' , $author_id ); 

									if(empty($author_img)){

										$author_img = get_template_directory_uri()."/assets/images/message_5_icon.png";

									}

									 

									  $groupImg = wp_get_attachment_url( get_post_thumbnail_id($value->ID) );

										if(empty($groupImg)){                                                        

											$groupImg= get_template_directory_uri()."/assets/images/range_1.png";

										}

									 

									    $author_id = $value->post_author;

										$author_img = the_author_meta( 'avatar' , $author_id ); 

										if(empty($author_img)){

											$author_img = get_template_directory_uri()."/avatar.png";

										}



                                      $userList = learndash_get_groups_user_ids($value->ID);

									

									?>

									

                                    <div class="blog_box grid-item group_title position-relative">

                                       

                                            <div class="group_manager">

                                                <div class="dropdown group_create_gg">

                                                    <a class="btn bg-transparent dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                        <i class="fa-solid fa-ellipsis"></i>

                                                    </a>

													<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

														

														<a href="#" class="dropdown-item getFeedData" data-img = "<?php echo $groupImg ?>" data-id="<?=$value->ID; ?>" onclick ="clickfunction('<?=$value->ID; ?>', '<?=$value->post_content; ?>','<?php echo $groupImg ?>');">Edit</a>

														

														<!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editFeed">Edit <?///php echo $value->ID;?></a>  -->

							<form method = "POST" action ="" class="row mediadoc_form" enctype="multipart/form-data">

											<input type ="hidden" name ="feed_id"  id="feed_id"  value ="<?=$value->ID; ?>">

											<input type="hidden" name="delete_feed" value="delete_feed"/>

                                            <input type="hidden" name="group_image_nonce" value="<?php echo wp_create_nonce('group_image_nonce'); ?>" />

								

								<input type="submit" value="Delete" class="dropdown-item" onclick="return confirm('Do you really want to delete this feed ?')" />

														

								

							</form>

									              



								

													  </div>

                                                </div>

                                                <img src="<?php echo $author_img; ?>" alt="<?php echo the_author_meta( 'display_name' , $author_id ); ?>" class="manager_img">

                                                <div class="user_date">

                                                    <span class="name_user"><?php echo the_author_meta( 'user_nicename' , $author_id )?>	</span>

                                                </div>										

                                            </div>

                                            <img src="<?php echo $groupImg ?>" class="img-fluid pb-1" alt="image" width="300" max-height="300">

                                            <p><?php echo $value->post_content?></p>

                                        <div class="like_comment_box">

                                            <ul class="super_box">

                                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/heart.png" class="">26</li>

                                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/comment.png" class="">12</li>

                                            </ul>

                                        </div>

                                    </div>

									

									<?php } ?>

                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="pills-members" role="tabpanel"

                            aria-labelledby="pills-members-tab">Members</div>

                        <div class="tab-pane fade" id="pills-blogs" role="tabpanel" aria-labelledby="pills-blogs-tab">

                            Blogs</div>

                        <div class="tab-pane fade" id="pills-annoucements" role="tabpanel"

                            aria-labelledby="pills-annoucements-tab">Annoucements</div>

                        <div class="tab-pane fade" id="pills-reports-forms" role="tabpanel"

                            aria-labelledby="pills-reports-forms-tab">Reports & Forms</div>

                        <div class="tab-pane fade" id="pills-media-resources" role="tabpanel"

                            aria-labelledby="pills-media-resources-tab">Media & Resources.</div>

                    </div>

                </div>

                <!-------tabs end------->





            </div>

            <div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex align-items-center  flex-wrap">

                <div class="col-xl-3 col-lg-3 col-md-3 col-12">

                    <div class="footer_logo">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.png" class="img-fluid">

                    </div>

                </div>

                <div class="col-xl-8 col-lg-9 col-md-9 col-12">

                    <div class="side_right_footer ">

                        <div class="social_icon_sec">

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_linkdin.png" class="img-fluid"></a>

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_fb.png" class="img-fluid"></a>

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_twitter.png" class="img-fluid"></a>

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_instra.png" class="img-fluid"></a>

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

                            <a href="<?php echo get_site_url(); ?>/privacy-policy/">PRIVACY POLICY </a>

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



    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"

        aria-hidden="true">

        <div class="modal-dialog  modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

            <div class="modal-content">



                <div class="modal-body">



                    <div class="blog_grid">

                        <div class="row">

                            <div class="col-xl-4 col-lg-4 col-md-4 col-4">



                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-4 text-center">

                                <h5 class="modal-title " id="exampleModalLongTitle">Add Member</h5>

                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-4">

                                <button type="button" class="close"

                                    style="font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%"

                                    data-dismiss="modal">&times;</button>

                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                                <div class="serch_sec_top">

                                    <input type="text" class="form-control" id="exampleInputEmail1"

                                        aria-describedby="emailHelp" placeholder="Search member here">

                                </div>

                            </div>

                        </div>



                        <br>

                        <div class="grid-container">

                            <div href="#" class="mt-1 mr-1">

                                <div class="member_box grid-item text-center">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png">

                                    <div class="">

                                        <h5 class="mt-2">Josephine Arden</h5>

                                        <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>

                                    </div>

                                    <div class="to_donate">

                                        <button class="btn btn_donate mt-2">Invite</button>

                                    </div>

                                </div>

                            </div>

                            <div href="#" class="mt-1 mr-1">

                                <div class="member_box grid-item text-center">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_4_icon.png">

                                    <div class="">

                                        <h5 class="mt-2">Josephine Arden</h5>

                                        <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>

                                    </div>

                                    <div class="to_donate">

                                        <button class="btn btn_donate mt-2">Invite</button>

                                    </div>

                                </div>

                            </div>

                            <div href="#" class="mt-1 mr-1">

                                <div class="member_box grid-item text-center">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png">

                                    <div class="">

                                        <h5 class="mt-2">Josephine Arden</h5>

                                        <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>

                                    </div>

                                    <div class="to_donate">

                                        <button class="btn btn_donate mt-2">Invite</button>

                                    </div>

                                </div>

                            </div>

                            <div href="#" class="mt-1 mr-1">

                                <div class="member_box grid-item text-center">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_2_icon.png">

                                    <div class="">

                                        <h5 class="mt-2">Josephine Arden</h5>

                                        <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>

                                    </div>

                                    <div class="to_donate">

                                        <button class="btn btn_donate mt-2">Invite</button>

                                    </div>

                                </div>

                            </div>

                            <div href="#" class="mt-1 mr-1">

                                <div class="member_box grid-item text-center">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_1_icon.png">

                                    <div class="">

                                        <h5 class="mt-2">Josephine Arden</h5>

                                        <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>

                                    </div>

                                    <div class="to_donate">

                                        <button class="btn btn_donate mt-2">Invite</button>

                                    </div>

                                </div>

                            </div>

                            <div href="#" class="mt-1 mr-1">

                                <div class="member_box grid-item text-center">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png">

                                    <div class="">

                                        <h5 class="mt-2">Josephine Arden</h5>

                                        <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>

                                    </div>

                                    <div class="to_donate">

                                        <button class="btn btn_donate mt-2 disabled">Invited</button>

                                    </div>

                                </div>

                            </div>

                            <div href="#" class="mt-1 mr-1">

                                <div class="member_box grid-item text-center">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png">

                                    <div class="">

                                        <h5 class="mt-2">Josephine Arden</h5>

                                        <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>

                                    </div>

                                    <div class="to_donate">

                                        <button class="btn btn_donate mt-2">Invite</button>

                                    </div>

                                </div>

                            </div>

                            <div href="#" class="mt-1 mr-1">

                                <div class="member_box grid-item text-center">

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png">

                                    <div class="">

                                        <h5 class="mt-2">Josephine Arden</h5>

                                        <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connects</h6>

                                    </div>

                                    <div class="to_donate">

                                        <button class="btn btn_donate mt-2 disabled">Invited</button>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-xl-4 col-lg-4 col-md-4 col-4">



                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-4">

                                <br>

                                <div class="apply_btn active">

                                    <button class="btn btn_apply">Done</button>

                                </div>

                            </div>

                        </div>

                    </div>



                </div>



            </div>



        </div>

    </div>

    <!--------modal--------->



    <!-------modal end----->

    <!-- js links -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>



    <script>

        $(document).ready(function () {



            $(".next").click(function () {

                let previous = $(this).closest("fieldset").attr('id');

                let next = $('#' + this.id).closest('fieldset').next('fieldset').attr('id');

                if (previous == "step0") {

                    console.log(previous);

                    $('#' + next).show();

                    $('#' + previous).hide();

                }

                else if (previous == "step1") {

                    $('#' + next).show();

                    $('#' + previous).hide();

                }

            });



        });

        $(".previous").click(function () {

            let current = $(this).closest("fieldset").attr('id');

            let previous = $('#' + this.id).closest('fieldset').prev('fieldset').attr('id');

            $('#' + previous).show();

            $('#' + current).hide();

        }); 

    </script>

	

	<script>

		function clickfunction(id,content,img){ 

			$("#img_new").attr("src",img);

			

			$('#feed_id').val(''+id);

			 $("#feed_content").val(''+content );

			 $("#feed_img").val(''+img );

			$('#editFeed').modal('show');

		}

	</script>











</body>



</html>