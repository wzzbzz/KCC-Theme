<?php 

/* Template Name: Memeber Listing */

if ( is_user_logged_in() ) {

get_header('new'); ?>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css">

         <link

      rel="shortcut icon"

      type="image/jpg"

      href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"

    />



    <!-- css links -->

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css"

      rel="stylesheet"

    />

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css"

      rel="stylesheet"

    />

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css"

      rel="stylesheet"

    />

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css"

      rel="stylesheet"

    />

    <link

      rel="stylesheet"

      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"

    />

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css"

      rel="stylesheet"

    />

    <link
      href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css"

      rel="stylesheet"

    />

    <link

      href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css"

      rel="stylesheet"

    />

	<style>

		.blog_u {height:30px;}

		.blog_u li a img{margin-right:5px;}

		.blog_u .dropdown-menu { position: absolute; right:0; top:0;}

		.dropdown-menu {

    position: absolute;

    top: 100%;

    left: 0;

    z-index: 1000;

    display: none;

    float: left;

    min-width: 10rem;

    padding: .5rem 0;

    margin: .125rem 0 0;

    font-size: 1rem;

    color: #212529;

    text-align: left;

    list-style: none;

    background-color: #fff;

    background-clip: padding-box;

    border: 1px solid rgba(0,0,0,.15);

    border-radius: .25rem;

}

.modal{

    visibility: unset;

}

	</style>

}

<div class="col-xl-12 ">

        <div class="row justify-content-end mt-3">



             <?php include('user_topbar.php')?>

			<div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">

           <div class="donation_tab_pills ">

                    <div class="donate_detais_main">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/detail_click.png" class="img-fluid membergroup-img" alt="image">

                        <div class="donation_detail">

                            <div class="d-flex align-items-center flex-wrap">

                                <h5>Group Name</h5>

                                <span>Member only</span>

                            </div>

                            <div class="donate_btn_right">

                                <button class="btn now_donate"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png"> Exit Group</button>

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

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.

                        </p>

					</div>

               </div>

            </div> 

            <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">

               <div class="memebr_tab_pills ">

			   <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                    <li class="nav-item">

                      <a class="nav-link" id="pills-feeds-tab" data-toggle="pill" href="#pills-feeds" role="tab" aria-controls="pills-feeds" aria-selected="true">Feeds</a>

                    </li>

                    <li class="nav-item">

                      <a class="nav-link active" id="pills-members-tab" data-toggle="pill" href="#pills-members" role="tab" aria-controls="pills-members" aria-selected="false">Members</a>

                    </li>

                    <li class="nav-item">

                      <a class="nav-link" id="pills-blogs-tab" data-toggle="pill" href="#pills-blogs" role="tab" aria-controls="pills-blogs" aria-selected="false">Blogs</a>

                    </li>

                    <li class="nav-item">

                      <a class="nav-link" id="pills-annoucements-tab" data-toggle="pill" href="#pills-annoucements" role="tab" aria-controls="pills-annoucements" aria-selected="false">Annoucements</a>

                    </li>

                    <li class="nav-item">

                      <a class="nav-link" id="pills-reports-tab" data-toggle="pill" href="#pills-reports" role="tab" aria-controls="pills-reports" aria-selected="false">Reports & Forms</a>

                    </li>

                    <li class="nav-item">

                      <a class="nav-link" id="pills-media-tab" data-toggle="pill" href="#pills-media" role="tab" aria-controls="pills-media" aria-selected="false">Media & Resources</a>

                    </li>

                  </ul>

                  <div class="tab-content abhi" id="pills-tabContent">

						<div class="tab-pane fade " id="pills-feeds" role="tabpanel" aria-labelledby="pills-feeds-tab">...</div>

						<div class="tab-pane fade show active" id="pills-members" role="tabpanel" aria-labelledby="pills-members-tab">					

						<ul class="nav nav-pills nav-pills1 mb-3" id="pills1-tab" role="tablist">

							<li class="nav-item">

							<a class="nav-link active" id="pills-members1-tab" data-toggle="pill" href="#pills-members1" role="tab" aria-controls="pills-members1" aria-selected="true">All Members</a>

							</li>

							<li class="nav-item">

							<a class="nav-link" id="pills-joinmembers-tab" data-toggle="pill" href="#pills-joinmembers" role="tab" aria-controls="pills-joinmembers" aria-selected="false">Join Request</a>

							</li>

						</ul>

						<a class="add-memberbtn" href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png"> Add Member</a>

						<div class="tab-content" id="pills1-tabContent">

						<div class="tab-pane fade show active" id="pills-members1" role="tabpanel" aria-labelledby="pills-members1-tab">

                        <div class="grid-container">

						<div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="#">Remove</a>

							  </div>

							</div>

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</div>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_4_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_2_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_1_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon4.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon3.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/6.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_1_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_2_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_1_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</a>

						</div>

                  </div>

					<div class="tab-pane fade" id="pills-joinmembers" role="tabpanel" aria-labelledby="pills-joinmembers-tab">

                        <div class="grid-container">

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Accept</button>

									<button class="btn btn_white">Decline</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_4_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Accept</button>

									<button class="btn btn_white">Decline</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Accept</button>

									<button class="btn btn_white">Decline</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_2_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Accept</button>

									<button class="btn btn_white">Decline</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_1_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Accept</button>

									<button class="btn btn_white">Decline</button>

								</div>

							</div>

						</a>

						</div>

                    </div>

                    </div>

                    </div>

                    <div class="tab-pane fade" id="pills-blogs" role="tabpanel" aria-labelledby="pills-blogs-tab">

					<ul class="nav nav-pills nav-pills1 mb-3 blog_u" id="pills1-tab" role="tablist">

						<li class="nav-item">

						<a class="add-memberbtn" href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png">Create Blog</a>

						</li>

						

					  </ul>

					  

						<div class="blog_grid abhi34">

						<div class="grid-container">

							<div class="blog_box grid-item">

								<a href="#">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_1.png" class="img-fluid" alt="image"/>

									

								<div>

									<h4>Loremp impsom is simple dummy text is used</h4>

									<small>Aug 29, 2022</small>

								</div>

								<p>

									Lorem Ipsum is simply dummy text of the printing and type

									setting industry. Lorem Ipsum has been the industry....

								</p>

								</a>

								<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="#">Remove</a>

							  </div>

							</div>

							</div>



							<div class="blog_box grid-item">

								<a href="#">

								<img

									src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_1.png"

									class="img-fluid"

									alt="image"

								/>

								<div>

									<h4>Loremp impsom is simple dummy text is used</h4>

									<small>Aug 29, 2022</small>

								</div>

								<p>

									Lorem Ipsum is simply dummy text of the printing and type

									setting industry. Lorem Ipsum has been the industry....

								</p>

								</a>

							</div>

							<div class="blog_box grid-item">

								<a href="#">

								<img

									src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_1.png"

									class="img-fluid"

									alt="image"

								/>

								<div>

									<h4>Loremp impsom is simple dummy text is used</h4>

									<small>Aug 29, 2022</small>

								</div>

								<p>

									Lorem Ipsum is simply dummy text of the printing and type

									setting industry. Lorem Ipsum has been the industry....

								</p>

								</a>

							</div>

							<div class="blog_box grid-item">

								<a href="#">

								<img

									src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_1.png"

									class="img-fluid"

									alt="image"

								/>

								<div>

									<h4>Loremp impsom is simple dummy text is used</h4>

									<small>Aug 29, 2022</small>

								</div>

								<p>

									Lorem Ipsum is simply dummy text of the printing and type

									setting industry. Lorem Ipsum has been the industry....

								</p>

								</a>

							</div>

						</div>

						</div>

					

					</div>

                    <div class="tab-pane fade" id="pills-annoucements" role="tabpanel" aria-labelledby="pills-annoucements-tab">

						<ul class="nav nav-pills nav-pills1 mb-3" id="pills1-tab" role="tablist">

						<li class="nav-item">

						  <a class="nav-link active" id="pills-members1-tab" data-toggle="pill" href="#pills-members1" role="tab" aria-controls="pills-members1" aria-selected="true">All Members</a>

						</li>

						<li class="nav-item">

						  <a class="nav-link" id="pills-joinmembers-tab" data-toggle="pill" href="#pills-joinmembers" role="tab" aria-controls="pills-joinmembers" aria-selected="false">Join Request</a>

						</li>

					  </ul>

					 

					<div class="tab-content" id="pills1-tabContent">

					<div class="tab-pane fade show active" id="pills-members1" role="tabpanel" aria-labelledby="pills-members1-tab">

                        <div class="grid-container">

						<div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>

							  </div>

							</div>

								<img src="images/message_5_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</div><div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>

							  </div>

							</div>

								<img src="images/message_4_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</div><div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>

							  </div>

							</div>

								<img src="images/message_3_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</div><div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>

							  </div>

							</div>

								<img src="images/message_2_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</div><div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>

							  </div>

							</div>

								<img src="images/message_1_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</div><div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>

							  </div>

							</div>

								<img src="images/notification_icon4.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</div><div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>

							  </div>

							</div>

								<img src="images/notification_icon3.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</div><div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>

							  </div>

							</div>

								<img src="images/1.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</div><div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>

							  </div>

							</div>

								<img src="images/message_5_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</div><div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>

							  </div>

							</div>

								<img src="images/message_5_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</div><div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>

							  </div>

							</div>

								<img src="images/message_5_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</div><div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="javascript:" data-toggle="modal" data-target="#removeModal">Remove</a>

							  </div>

							</div>

								<img src="images/message_5_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Follow</button>

								</div>

							</div>

						</div>

						</div>

                    </div>

					<div class="tab-pane fade" id="pills-joinmembers" role="tabpanel" aria-labelledby="pills-joinmembers-tab">

                        <div class="grid-container">

						<div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="images/message_5_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Accept</button>

									<button class="btn btn_white">Decline</button>

								</div>

							</div>

						</div>

						<div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="images/message_4_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Accept</button>

									<button class="btn btn_white">Decline</button>

								</div>

							</div>

						</div>

						<div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="images/message_3_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Accept</button>

									<button class="btn btn_white">Decline</button>

								</div>

							</div>

						</div>

						<div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="images/message_2_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Accept</button>

									<button class="btn btn_white">Decline</button>

								</div>

							</div>

						</div>

						<div href="#" class="mt-1">

							<div class="member_box grid-item text-center">

								<img src="images/message_1_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine <br> Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px">15 connect</h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Accept</button>

									<button class="btn btn_white">Decline</button>

								</div>

							</div>

						</div>

						</div>

                    </div>

                    </div></div>

                    <div class="tab-pane fade" id="pills-reports" role="tabpanel" aria-labelledby="pills-reports-tab">...</div>

                    <div class="tab-pane fade" id="pills-media" role="tabpanel" aria-labelledby="pills-media-tab">...</div>

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

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

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

                    <button type="button" class="close" style="font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%" data-dismiss="modal">&times;</button>  

                </div>

				  <div class="col-xl-12 col-lg-12 col-md-12 col-12">

				  <div class="serch_sec_top">

                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search member here">

                    </div>

				  </div>

            </div>

			

					<br>

           <div class="grid-container">

						<div href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">							

							<div class="dropdown">

							  <a class="btn bg-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<i class="fa-solid fa-ellipsis-vertical"></i>

							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

								<a class="dropdown-item" href="#">Allow Permissiom</a>

								<a class="dropdown-item" href="#">Remove</a>

							  </div>

							</div>

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_5_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Invite</button>

								</div>

							</div>

						</div>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_4_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Invite</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_3_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Invite</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_2_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Invite</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message_1_icon.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2 disabled">Invited</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon4.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Invite</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon3.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2">Invite</button>

								</div>

							</div>

						</a>

						<a href="#" class="mt-1 mr-1">

							<div class="member_box grid-item text-center">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/6.png">

								<div class="">

									<h5 class="mt-2">Josephine Arden</h5>

                                    <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?php echo '15 connects'; ?></h6>

								</div>

								<div class="to_donate">

									<button class="btn btn_donate mt-2 disabled">Invited</button>

								</div>

							</div>

						</a>

					

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

    </div>

    

    <!--  <script src="/js/jquery.min.js"></script>

    <script src="/js/popper.min.js"></script>

    <script src="/js/bootstrap.min.js"></script>   

    <script src="/js/owl.carousel.min.js"></script> -->

     <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/jquery.min.js"></script>

    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/popper.min.js"></script>

    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/bootstrap.min.js"></script>

    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/owl.carousel.min.js"></script>



    <script>      

        $(document).ready(function() {  

       

        $(".next").click(function() {

            let previous = $(this).closest("fieldset").attr('id');

            let next = $('#'+this.id).closest('fieldset').next('fieldset').attr('id');

            if(previous == "step0"){

                console.log(previous);

               $('#'+next).show();

                $('#'+previous).hide();

            } 

            else if(previous == "step1"){

                $('#'+next).show();

                $('#'+previous).hide();

            }      

        }); 

        

    });

    $(".previous").click(function() {

        let current = $(this).closest("fieldset").attr('id');

        let previous = $('#'+this.id).closest('fieldset').prev('fieldset').attr('id');

        $('#'+previous).show();

        $('#'+current).hide();

    }); 

    </script>

<?php get_footer('new'); }?>