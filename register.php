<?php

/* Template Name: Register */
$path = preg_replace('/wp-content(?!.*wp-content).*/', '', __DIR__);
require_once($path . 'wp-load.php');
global $current_user;
$current_user = wp_get_current_user();
$first_name = $current_user->user_login;
$email = $current_user->user_email;
if (!empty($email)) {
  header("Location:/dashboard-home/");
}

/*if(!empty($email)){
    header("Location:/account-successfully-created/");
}*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php get_header('register'); ?>

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
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">
  <script type="text/javascript">
    function preventBack() {
      window.history.forward();
      //alert('You can not go back, Please enter OTP first.');
    }
    setTimeout("preventBack()", 0);
    window.onunload = function() {
      null
    };
  </script>
</head>
<style>
  /*pasword validate CSS*/
  /* Style all input fields */
  input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
  }

  /* Style the submit button */
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
  }

  /* Style the container for inputs */
  .container {
    background-color: #f1f1f1;
    padding: 20px;
  }

  /* The message box is shown when the user clicks on the password field */
  #message {
    display: none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
  }

  #message p {
    padding: 0px 35px;
    font-size: 18px;
  }

  /* Add a green text color and a checkmark when the requirements are right */
  .valid {
    color: green !important;
  }

  .valid:before {
    position: relative;
    left: -35px;
    content: "✔";
  }

  /* Add a red text color and an "x" when the requirements are wrong */
  .invalid {
    color: red !important;
  }

  .invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
  }

  /*Password Validate CSS*/




  .rigt_side_mrb {
    margin-bottom: 4rem;
  }

  .rigt_side_text p {
    font-size: 14px;
  }

  .social_image a img {
    height: 30px;
    width: 30px;
  }

  .copy_right {
    margin-top: 40px !important;
  }

  /* .col-xl-4.col-lg-6.col-md-6.left-side {
    width: 48%;
}
.col-xl-4.col-lg-6.col-md-6.text-right.right-side {
    width: 51%;
    color: #000;
} */
  .rigt_side_text h5 {
    font-size: 32px;
  }

  div#um_field_206_0 {
    display: none;
  }

  .page-id-4598 {
    background: #F5F9FA;
  }

  .um-field-error {
    display: none;
  }

  .page-id-4598.main_login_img-1 {
    background-image: unset;
    height: unset;
    position: relative;
    min-height: unset;
  }

  .main_login_img-1:before {
    position: absolute;
    content: "";
    height: 100%;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Group 78196.png');
    right: 0;
    top: 0;
    background-size: cover;
    z-index: 0;
    width: 50%;
    background-repeat: no-repeat;
  }

  .page-id-4598 .um-center .um-button {
    min-width: 100% !important
  }


  .social_image {
    height: 50px;
    width: 50px;
    box-shadow: 0px 3px 6px #00000029;
    border-radius: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .login_social a img {
    box-shadow: none !important;
    border-radius: 0 !important;
  }

  /* 	Responsive */

  @media (max-width: 1440px) and (min-width: 1200px) {
    .main_login_img-1 section {
      padding-top: 20px !important;
    }
  }

  .main_profile_form.mt-4 {
    margin-top: 0px !important;
  }

  .register_section {

    padding-top: 0;
  }

  @media (max-width:1024px) {

    .rigt_side_text h5,
    .rigt_side_text p {
      text-align: center;
    }

    .main_login_img-1:before {
      background-size: 100% 100%;
      display: none;
    }

    .login_left_text {
      text-align: center;
    }

    .login_social {
      justify-content: space-evenly;
    }

    .um-206.um {
      max-width: 50%;
      margin-right: auto;
    }

    .rigt_side_text h5 {
      color: #000;
    }

    .rigt_side_text p {
      color: #000;
    }

    .copy_right a {
      color: #000;
    }
  }

  @media only screen and (max-width: 1023px) {
    .main_login_img-1:before {
      display: none;
    }
  }

  @media (max-width:768px) {
    .main_login_img-1:before {
      background-image: unset;
    }

    form.form-inline {
      width: 40%;
    }

  }

  @media only screen and (max-width: 767px) {
    .rigt_side_text h5 {
      font-size: 24px;
    }

    .um-206.um {
      max-width: 100% !important;
    }

    .rigt_side_text h5,
    .rigt_side_text p {
      color: #000;
    }

    .rigt_side_text h5 {
      font-size: 25px;

      margin: 40px 0px 15px 0px;
    }

    .rigt_side_text p {
      font-size: 14px;

    }
  }

  @media only screen and (max-width: 374px) {
    .rigt_side_text h5 {
      font-size: 18px !important;
    }

    .social_image a img {
      height: 20px !important;
      width: 20px !important;
    }

    .social_image {
      height: 35px;
      width: 35px;
    }
  }


  .form-floating {
    position: relative;
    margin-bottom: 25px;
  }

  .um-form .form-floating .form-control {
    background: #fff;
    box-shadow: 0px 10px 20px #00000029 !important;
    border-radius: 9px;
    opacity: 1;
    height: 60px !important;
    color: #000 !important;
  }

  .um-form .um-button {
    background-color: #F96703;
    color: #fff;
    max-height: 60px;
    border-radius: 9px !important;
  }

  .form-floating>.form-control,
  .form-floating>.form-select {
    height: calc(3.5rem + 2px);
    line-height: 1.25;
  }

  .form-floating>label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    padding: 2rem 0.75rem;
    pointer-events: none;
    border: 1px solid transparent;
    transform-origin: 0 0;
    transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
    font-size: 16px;
    border: 3px solid transparent !important;
  }

  .form-floating>.form-control {
    padding: 1rem 0.75rem;
  }

  .form-floating>.form-control::-moz-placeholder {
    color: transparent;
  }

  .form-floating>.form-control::placeholder {
    color: transparent;
  }

  .form-floating>.form-control:not(:-moz-placeholder-shown) {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem;
  }

  .form-floating>.form-control:focus,
  .form-floating>.form-control:not(:placeholder-shown) {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem;
    border: 2px solid #0E559F !important;
  }

  .form-floating>.form-control:-webkit-autofill {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem;
  }

  .form-floating>.form-select {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem;
  }

  .form-floating>.form-control:not(:-moz-placeholder-shown)~label {
    opacity: 0.65;
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
  }

  .form-floating>.form-control:focus~label,
  .form-floating>.form-control:not(:placeholder-shown)~label,
  .form-floating>.form-select~label {
    opacity: 0.65;
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
  }

  .form-floating>.form-control:-webkit-autofill~label {
    opacity: 0.65;
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
  }

  .input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%;
  }

  .input-group>.form-control,
  .input-group>.form-select {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0;
  }

  .input-group>.form-control:focus,
  .input-group>.form-select:focus {
    z-index: 3;
  }

  .input-group .btn {
    position: relative;
    z-index: 2;
  }

  .input-group .btn:focus {
    z-index: 3;
  }

  .input-group-text {
    display: flex;
    align-items: center;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: center;
    white-space: nowrap;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
  }

  .input-group-lg>.form-control,
  .input-group-lg>.form-select,
  .input-group-lg>.input-group-text,
  .input-group-lg>.btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    border-radius: 0.3rem;
  }

  .input-group-sm>.form-control,
  .input-group-sm>.form-select,
  .input-group-sm>.input-group-text,
  .input-group-sm>.btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    border-radius: 0.2rem;
  }

  .input-group-lg>.form-select,
  .input-group-sm>.form-select {
    padding-right: 3rem;
  }

  .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
  .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n + 3) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }

  .input-group.has-validation> :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu),
  .input-group.has-validation>.dropdown-toggle:nth-last-child(n + 4) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }

  .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    margin-left: -1px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }

  element.style {}

  .form-floating>label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    padding: 1rem 0.75rem;
    pointer-events: none;
    border: 1px solid transparent;
    transform-origin: 0 0;
    transition: opacity .1s ease-in-out, transform .1s ease-in-out;
  }

  label {
    display: inline-block;
  }

  .container-fluid {
    background-color: #F5F9FA;
  }

  .login_left_text .login_with {
    min-width: 100%;
  }

  .container-fluid .copy_right {
    margin: 0 30px;
  }
</style>

<body>

  <div class="container-fluid">
    <div class="login_nav">
      <nav class="navbar  justify-content-between">
        <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/login_logo.png" class="img-fluid" alt="img">
        </a>
        <form class="form-inline">
          <button class="btn btn_account active">
            <a href="/login/" color="#fff">Login</a>
          </button>
        </form>
      </nav>
    </div>

    <section class="register_section">
      <div class="row justify-content-between align-items-end center-text_sec">
        <div class="col-xl-6 col-lg-12 col-md-12">
          <div class="col-xl-9 mx-auto">
            <div class="login_left_text">
              <h4><span>Hello,</span> <br> Create an Account</h4>
              <br>
              <div class="main_profile_form mt-4">
                <div class="um-form" data-mode="register">
                  <div style="color:red" id="error"></div>
                  <form method="post" action="" id="regFrm">

                    <div class="um-row _um_row_1" style="margin: 0 0 30px 0;">
                      <div class="um-col-1">
                        <div id="um_field_206_user_email" class="um-field um-field-text  um-field-user_email um-field-text um-field-type_text" data-key="user_email">
                          <div class="form-floating">
                            <input autocomplete="off" class="um-form-field valid not-required  form-control" type="email" name="user_email" id="user_email" value="" placeholder="Enter your email" data-validate="unique_email" required="" data-key="user_email">
                          </div>
                        </div>
                        <div id="um_field_206_user_password" class="um-field um-field-password  um-field-user_password um-field-password um-field-type_password">

                          <div class="form-floating">
                            <input autocomplete="off" onfocusout="checkPassword()" class="um-form-field valid not-required  form-control" type="password" name="user_password" id="user_password" value="" placeholder="Enter Password" data-validate="unique_email" required="" data-key="user_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                          </div>
                        </div>

                        <div id="message">
                          <h5 class="mb-2">Password must contain the following:</h5>
                          <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                          <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                          <p id="number" class="invalid">A <b>number</b></p>
                          <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                        </div>


                        <div id="um_field_206_confirm_user_password" class="um-field um-field-password  um-field-user_password um-field-password um-field-type_password" data-key="confirm_user_password">
                          <div class="form-floating">
                            <input onChange="checkPassword()" autocomplete="off" class="um-form-field valid not-required  form-control" type="password" name="confirm" value="" placeholder="Retype Password" required="">
                          </div>
                        </div>





                        <div class="um-field d-flex ">
                          <div><input class="mr-2" id="acceptPrivacy" type="checkbox" required /></div>
                          <div><label for="checkbox"> I agree to these <a href="<?php echo site_url('privacy-policy') ?>" target="_blank">Privacy Policy</a>.</label></div>
                        </div>
                        <div id="um_field_206_0" class="um-field um-field-checkbox  um-field-0 um-field-checkbox um-field-type_checkbox" data-key="0">
                          <div class="um-field-label">
                            <label for="0-206">Keep me Logged in</label>
                            <div class="um-clear"></div>
                          </div>
                          <div class="um-field-area">
                            <label class="um-field-checkbox  um-field-half "><input type="checkbox" name="0[]" value="Keep me Logged in"><span class="um-field-checkbox-state"><i class="um-icon-android-checkbox-outline-blank"></i></span><span class="um-field-checkbox-option">Keep me Logged in</span></label>
                            <div class="um-clear"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="hidden" name="form_id" id="form_id_206" value="206">
                    <p class="um_request_name">
                      <label for="um_request_206">Only fill in if you are not human</label>
                      <input type="hidden" name="um_request" id="um_request_206" class="input" value="" size="25" autocomplete="off">
                    </p>
                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="4279de4593"><input type="hidden" name="_wp_http_referer" value="/wcc/registration/">
                    <div class="um-col-alt">
                      <div class="um-center">
                        <input type="submit" value="Create Account" class="um-button" id="um-submit-btn">
                      </div>
                      <div class="um-clear"></div>
                    </div>
                  </form>






                </div>
              </div>
              <!-- <div class="login_with">
                                <p>Or login with</p>
                            </div>-->
              <!--<div class="login_social">
								<div class="social_image">
									<a href="#"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/02/google.png" alt="google-image"></a>
								</div>
								<div class="social_image">
									<a href="#">
										<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/02/circle-facebook_-512.png" alt="facebook"></a>
								</div>
								<div class="social_image">
									<a href="#">
									<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/02/Instagram_icon.png.png" alt="instagram"></a>
								</div>
								<div class="social_image">
									<a href="#">
									<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/02/linked.png"></a>
								</div>
                                <div class="social_image">
									<a href="#">
									<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/02/icons8-twitter-circled-48.png"></a>
								</div>
							</div>-->

            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-8 col-md-8 mx-lg-auto mt-lg-5 rigt_side_mrb">
          <div class="rigt_side_text">
            <h5>DEVELOP CRITICAL SKILLS, GET CREDENTIALED, AND CONNECT WITH THE PEOPLE YOU NEED</h5>
            <p>to prepare for, respond to, and recover from a disaster safely.</p>
          </div>
        </div>
      </div>
    </section>


    <div class="copy_right mt-5">
      <div class="row justify-content-between flex-md-row flex-column align-items-center">
        <div class="col-xl-4 col-lg-6 col-md-6">
          <p class="text-md-left text-center">Copyright © <?php echo date('Y'); ?> All Rights Reserved</p>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 text-md-right text-center">
          <a href="<?php echo get_site_url(); ?>/terms-of-use/">Terms of Use </a>
          <a href="<?php echo get_site_url(); ?>/privacy-policy/">Privacy Policy </a>
          <a href="#">Sitemap </a>
        </div>
      </div>
    </div>

  </div>



  <!-- js links -->

  <script>
    var myInput = document.getElementById("user_password");


    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
      document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
      document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
      // Validate lowercase letters
      var lowerCaseLetters = /[a-z]/g;
      if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }

      // Validate capital letters
      var upperCaseLetters = /[A-Z]/g;
      if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }

      // Validate numbers
      var numbers = /[0-9]/g;
      if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }

      // Validate length
      if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }
  </script>
  <script type="text/javascript">
    const form = document.querySelector('#regFrm');
    // Add a submit event listener to the form
    form.addEventListener('submit', function(event) {
      document.querySelector('#um-submit-btn').value = "Checking..";
      // Prevent the default form submission behavior
      event.preventDefault();

      // Create a new XMLHttpRequest object
      const xhr = new XMLHttpRequest();

      // Open a connection to the server
      xhr.open('POST', '/wp-json/user/v1/register/');

      // Set the appropriate headers and request method
      xhr.setRequestHeader('Content-Type', 'application/json');
      xhr.setRequestHeader('Accept', 'application/json');

      // Create a callback function to handle the server's response
      xhr.onload = function() {
        document.querySelector('#um-submit-btn').value = "Signup";
        if (xhr.status === 200) {
          const obj = JSON.parse(this.responseText);
          console.log('ums', obj);
          if (obj['success']) {
            window.location.href = "/confirmation/?email=" + obj['email'];
          } else {
            document.querySelector("#error").innerHTML = obj['message'];
          }
        } else {
          const obj = JSON.parse(this.responseText);
          console.error('Form submission failed!');
          document.querySelector("#error").innerHTML = obj['message'];
        }
      };

      // Extract the form data
      const formData = new FormData(form);

      // Convert the form data to JSON format
      const jsonData = {};
      formData.forEach(function(value, key) {
        jsonData[key] = value;
      });

      // Send the form data to the server
      xhr.send(JSON.stringify(jsonData));
    });
  </script>

  <script>
    function checkPassword() {
      const password = document.querySelector('input[name=user_password]');
      const confirm = document.querySelector('input[name=confirm]');
      if (confirm.value === password.value) {
        confirm.setCustomValidity('');
      } else {
        confirm.setCustomValidity('Passwords do not match');
      }

    }
  </script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>

  <?php get_footer('general');  ?>
</body>

</html>