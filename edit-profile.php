<?php
/* Template Name: Edit Profile */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>profile-setting_help-support</title>

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
  </head>

  <style>
	  button.btn_update:hover {
    box-shadow: unset;
			 background: #F96703 0% 0% no-repeat padding-box !important;
}
    .top_profile {
      border-bottom: none;
    }
    .top_profile h4 {
      font-size: 36px;
      color: #242424;
      font-weight: 400;
    }
    .main_box_center_tickit {
      background: unset;
      box-shadow: unset;
      border-radius: unset;
      padding: 3rem 1.5rem 4rem 1.5rem;
    }
    .main_all_bg_Sec {
      background-image: unset;
      background-color: #f5f9fa;
    }
    .profile_upload .avatar-upload_1 {
      margin: auto;
    }
    button.btn.btn_logout {
      background: #f96703 0% 0% no-repeat padding-box;
      border-radius: 9px;
      text-align: center;
      padding: 1.2rem;
      font-size: 16px;
      color: #ffffff;
      width: 100%;
      transition: 0.32s all;
    }
	  .copy_right a {
    font-size: 13px;
    color: #707070;
}
	  .copy_right {
    width: 90%;
}
    @media (max-width: 768px) {
      .dropdown.right_dropdown .dropdown-toggle img {
        max-width: unset !important;
      }
    }
    @media (max-width: 600px) {
		.copy_right p {
    text-align: center;
}
		.top_profile h4 {
    font-size: 24px;
}
		.top_title img{
		  width:100%;
	  }
		button.btn.btn_logout {
    padding: 0.8rem 16px;
}
      .side_profile_view {
        border-right: none;
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
		.selector-item_label {
    height: 40px;
    width: 40px;
    font-size: 10px!important;
}
    }
  </style>
  <body class="main_all_bg_Sec">
    <div class="col-xl-12">
      <div class="row justify-content-center mt-3">
        <div
          class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap justify-content-between"
        >
          <div class="col-xl-3 col-lg-3 col-md-4 col-4 order-lg-1 order-1">
            <div class="top_title">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/login_logo.png" alt="" />
            </div>
          </div>

          <div class="col-xl-2 col-lg-3 col-5 order-lg-3 order-2">
            <div class="right_top_sec">
              <button class="btn btn_logout">Logout</button>
            </div>
          </div>
        </div>

        <div class="col-xl-11 col-lg-11 col-md-11 col-11 mt-3">
          <div class="main_box_center_tickit">
            <div class="row justify-content-center align-items-center">
              <div class="col-xl-9 col-lg-10 col-md-10">
                <div class="title_profile">
                  <div class="top_profile">
                    <div class="text-center">
                      <h4>Complete your Profile</h4>
                    </div>
                    <p class="text-center">
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry.
                    </p>
                  </div>
                </div>
                <div class="profile_upload mt-3">
                  <div class="avatar-upload_1">
                    <div class="avatar-edit">
                      <input
                        type="file"
                        id="imageUpload"
                        accept=".png, .jpg, .jpeg"
                      />
                      <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                      <div
                        id="imagePreview"
                        style="
                          background-image: url(' <?php echo get_template_directory_uri(); ?>/assets/images/main_top_profile.png');
                        "
                      ></div>
                    </div>
                  </div>
                  <div class="mt-5">
                    <div class="main_profile_form">
                      <form class="row justify-content-center">
                        <div class="col-xl-6 col-lg-10">
                          <div class="form-group">
                            <label for="exampleInputPassword1"
                              >First name</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="exampleInputPassword1"
                              placeholder="Enter here"
                            />
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                          <div class="form-group">
                            <label for="exampleInputPassword1">Last name</label>
                            <input
                              type="text"
                              class="form-control"
                              id="exampleInputPassword1"
                              placeholder="Enter here"
                            />
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                          <div class="form-group">
                            <label for="exampleInputPassword1">Username</label>
                            <input
                              type="text"
                              class="form-control"
                              id="exampleInputPassword1"
                              placeholder="Enter here"
                            />
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                          <div class="form-group">
                            <label for="exampleInputPassword1"
                              >Birth year</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="exampleInputPassword1"
                              placeholder="Enter here"
                            />
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                          <div class="form-group select_sec">
                            <label for="exampleFormControlSelect1"
                              >Gender</label
                            >
                            <select
                              class="form-control"
                              id="exampleFormControlSelect1"
                            >
                              <option>Select</option>
                              <option>Male</option>
                              <option>Female</option>
                              <option>Other</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                          <div class="form-group select_sec">
                            <label for="exampleFormControlSelect1">State</label>
                            <select
                              class="form-control"
                              id="exampleFormControlSelect1"
                            >
                              <option>Enter here</option>
                              <option>Male</option>
                              <option>Female</option>
                              <option>Other</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1"
                              >Zipcode</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="exampleInputPassword1"
                              placeholder="Enter here"
                            />
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                          <div class="form-group select_sec">
                            <label for="exampleFormControlSelect1"
                              >Race/Ethnicity</label
                            >
                            <select
                              class="form-control"
                              id="exampleFormControlSelect1"
                            >
                              <option>Select</option>
                              <option>Male</option>
                              <option>Female</option>
                              <option>Other</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                          <div class="form-group select_sec">
                            <label for="exampleFormControlSelect1"
                              >Primary language</label
                            >
                            <select
                              class="form-control"
                              id="exampleFormControlSelect1"
                            >
                              <option>Enter here</option>
                              <option>Male</option>
                              <option>Female</option>
                              <option>Other</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                          <div class="form-group select_sec">
                            <label for="exampleFormControlSelect1"
                              >Highest Education Level</label
                            >
                            <select
                              class="form-control"
                              id="exampleFormControlSelect1"
                            >
                              <option>Graduate Degree</option>
                              <option>Male</option>
                              <option>Female</option>
                              <option>Other</option>
                            </select>
                          </div>
                        </div>
                      </form>
                      <div
                        class="row selection_yes justify-content-lg-between justify-content-center align-items-center"
                      >
                        <p>
                          Have you worked on a hazardous waste site in the past
                          year?
                        </p>
                        <div class="select_yes">
                          <div class="selector">
                            <div class="selecotr-item">
                              <input
                                type="radio"
                                id="radio1"
                                name="selector"
                                class="selector-item_radio"
                                checked
                              />
                              <label for="radio1" class="selector-item_label"
                                >Yes</label
                              >
                            </div>
                            <div class="selecotr-item">
                              <input
                                type="radio"
                                id="radio2"
                                name="selector"
                                class="selector-item_radio"
                              />
                              <label for="radio2" class="selector-item_label"
                                >No</label
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-center mt-4">
                        <div class="col-xl-6 col-lg-10">
                          <div class="update_btn">
                            <button class="btn btn_update">Update</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copy_right mt-5">
          <div class="row justify-content-md-between justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-6 left-side">
              <p>Copyright © 2020 All Rights Reserved</p>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 text-md-right text-center right-side">
              <a href="<?php echo get_site_url(); ?>/terms-of-use/"
                >Terms of Use
              </a>
              <a href="<?php echo get_site_url(); ?>/privacy-policy/"
                >Privacy Policy
              </a>
              <a href="#">Sitemap </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- js links -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

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
