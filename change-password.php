<?php
/* Template Name: Change Password */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>change-password_help-support</title>

    <!-- Favicon -->
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
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet"/>
  </head>
	<style>
		button.btn_update:hover {
    box-shadow: unset;
			 background: #F96703 0% 0% no-repeat padding-box !important;
}
	@media (max-width: 768px){
.dropdown.right_dropdown .dropdown-toggle img {
    max-width: unset !important;
}	
	}
	@media (max-width:600px){
		.side_profile_view{
			border-right:none;
			    margin-bottom: 50px;
}
	.profile_sec_top img {
    max-width: 120px;
}
	.profile_upload .avatar-upload_1 .avatar-preview {
    width: 120px;
    height: 120px;
}
	.profile_upload .avatar-upload_1 .avatar-edit {
    right: 50px;
}
		.main_footer_sec {
    position: relative;
    bottom: 0;
    width: 100%;
}
a{color:#F96703!important;}
a.display_n {
    font-weight: bold;
    color: #555;
    text-decoration: none !important;
    font-size: 18px;
    line-height: 1.4em;
}

  
</style>
  <body class="main_all_bg_Sec">
    <div class="main_side_bar_left">
      <div class="main_menu_sec">
        <div class="top_logo_sec">
          <a href="#" class="d-flex align-items-center">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/small_logo.png"
              class="img-fluid small_logo"
            />
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/opn_menu_logo.png"
              class="img-fluid side_open_logo"
            />
          </a>
        </div>
        <div class="center_logo_sec">
          <div class="main_menu_Sec">
            <a href="home.html">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/home_icon.png"
                  class="img-fluid normal_icon"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_home_icon.png"
                  class="img-fluid active_icon"
                />
              </div>
              <div class="side_text_view">
                <p>Home</p>
              </div>
            </a>
          </div>
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/dashboard_icon.png"
                  class="img-fluid normal_icon"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_dashboard_icon.png"
                  class="img-fluid active_icon"
                />
              </div>
              <div class="side_text_view">
                <p>My Dashboard</p>
              </div>
            </a>
          </div>

          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/knowlage_icon.png"
                  class="img-fluid normal_icon"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_knowlage_icon.png"
                  class="img-fluid active_icon"
                />
              </div>
              <div class="side_text_view">
                <p>Knowledge Center</p>
              </div>
            </a>
          </div>
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/coordination_icon.png"
                  class="img-fluid normal_icon"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_coordination_icon.png"
                  class="img-fluid active_icon"
                />
              </div>
              <div class="side_text_view">
                <p>Coordination Center</p>
              </div>
            </a>
          </div>
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/calender_icon.png"
                  class="img-fluid normal_icon"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_calender_icon.png"
                  class="img-fluid active_icon"
                />
              </div>
              <div class="side_text_view">
                <p>Calendar</p>
              </div>
            </a>
          </div>
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/resources_icon.png"
                  class="img-fluid normal_icon"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/active_resources_icon.png"
                  class="img-fluid active_icon"
                />
              </div>
              <div class="side_text_view">
                <p>My Resources</p>
              </div>
            </a>
          </div>
        </div>
        <div class="bottom_logo_sec">
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/donate_icon.png"
                  class="img-fluid"
                />
              </div>
              <div class="side_text_view">
                <p>Donate</p>
              </div>
            </a>
          </div>
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/help_support_icon.png"
                  class="img-fluid"
                />
              </div>
              <div class="side_text_view">
                <p>Help & Support</p>
              </div>
            </a>
          </div>
          <div class="main_menu_Sec">
            <a href="#">
              <div class="menu_icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/setting_icon.png"
                  class="img-fluid"
                />
              </div>
              <div class="side_text_view">
                <p>Settings</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-12">
      <div class="row justify-content-end mt-3">
        <?php include('user_topbar.php')?>

        <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-3 profile-setting-page">
          <div class="main_box_center_tickit col-xl-11 donation_tab_pills">
            <div class="row">
              <div class="col-md-4">
                <div class="side_profile_view text-center">
                  <div class="profile_sec_top">
                      <a href="<?php echo esc_url( um_user_profile_url() ); ?>"><?php echo get_avatar( um_user( 'ID' ), 120 ); ?></a>
                  </div>
                  <div class="um-account-name">
                      <a href="<?php echo esc_url( um_user_profile_url() ); ?>"><?php echo esc_html( um_user( 'display_name' ) ); ?></a>
                    <div class="um-account-profile-link">
                      <a href="<?php echo esc_url( um_user_profile_url() ); ?>" class="um-link"><?php _e( 'View profile', 'ultimate-member' ); ?></a>
                  </div>
                </div>
                <div class="linked_page_left">
                  <a href="<?php echo esc_url( UM()->page($id) ); ?>/profile-setting">Profile Setting</a>
                    <a href="<?php echo esc_url( UM()->page($id) ); ?>/change-password" class="active">Change Password</a>
                    <a href="<?php echo esc_url( UM()->page($id) ); ?>/help-support">Help & Support</a>
                  </div>
                </div>
              </div>


              <div class="col-md-8">
                <div class="title_profile">
                  <div class="top_profile">
                    <div class="d-flex align-items-center">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/change_password.png"
                        class="img-fluid mr-2"
                      />
                      <h4>Change Password</h4>
                    </div>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry.
                    </p>
                  </div>
                </div>
                <div class="profile_upload mt-3">
                  <div class="main_profile_form mt-4">
                    <form>
                      <div class="col-xl-5 col-lg-10 px-0">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Old Password</label>
                          <input
                            type="text"
                            class="form-control"
                            id="exampleInputPassword1"
                            placeholder="*************"
                          />
                        </div>
                      </div>
                      <div class="col-xl-5 col-lg-10 px-0">
                        <div class="form-group">
                          <label for="exampleInputPassword1">New Password</label>
                          <input
                            type="text"
                            class="form-control"
                            id="exampleInputPassword1"
                            placeholder="*************"
                          />
                        </div>
                      </div>
                      <div class="col-xl-5 col-lg-10 px-0">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Retype Password</label>
                          <input
                            type="text"
                            class="form-control"
                            id="exampleInputPassword1"
                            placeholder="*************"
                          />
                        </div>
                      </div>
                      <div class="col-xl-5 col-lg-10 px-0">
                        <div class="update_btn">
                          <button class="btn btn_update">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              
              
              
              
              
              </div>
            </div>
          </div>
        </div>
      
        <div
          class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex align-items-center flex-wrap"
        >
          <div class="col-xl-3 col-lg-3 col-md-3 col-12">
            <div class="footer_logo">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.png"
                class="img-fluid"
              />
            </div>
          </div>
          <div class="col-xl-8 col-lg-9 col-md-9 col-12">
            <div class="side_right_footer">
              <div class="social_icon_sec">
                <a href="#"
                  ><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_linkdin.png"
                    class="img-fluid"
                /></a>
                <a href="#"
                  ><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_fb.png"
                    class="img-fluid"
                /></a>
                <a href="#"
                  ><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_twitter.png"
                    class="img-fluid"
                /></a>
                <a href="#"
                  ><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_instra.png"
                    class="img-fluid"
                /></a>
              </div>
              <div class="linked_pages">
                <a href="#">HOME</a>
                <a href="#">WHAT WE DO</a>
                <a href="#">WORLD CARES CENTER</a>
                <a href="#">TRAINING</a>
                <a href="#">COORDINATION</a>
                <a href="#">BLOG</a>
                <a href="#">CONTACT US</a>
                <a href="#">DONATE</a>
              </div>
              <div class="privercy_pag">
                <a href="#">TERMS OF USE</a>
                <a href="#">PRIVACY POLICY </a>
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

    <!-- js links -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script>
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $("#imagePreview").css(
              "background-image",
              "url(" + e.target.result + ")"
            );
            $("#imagePreview").hide();
            $("#imagePreview").fadeIn(650);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
      $("#imageUpload").change(function () {
        readURL(this);
      });
    </script>
  </body>
</html>
