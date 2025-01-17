<?php
/* Template Name: Forgot Password – OTP Verification */ ?>
<?php

$args = array(
  'role'         => 'subscriber', // authors only
  'orderby'      => 'registered', // registered date
  'order'        => 'DESC', // last registered goes first
  'number'       => 1 // limit to the last one, not required
);

$users = get_users($args);

$last_user_registered = $users[0]; // the first user from the list

// echo $last_user_registered->ID; 
$user_id = $last_user_registered->ID;
$to = $_POST['user_email'];
$pswd = $_POST['user_password'];
echo $to;
echo $pswd;
$meta1 = get_user_meta($user_id, 'user_reg_otp_setup', true);
$meta = get_user_meta($last_user_registered->ID, 'user_reg_otp_setup', true);

if (isset($_POST['number1'])) {
  // echo ($_POST['number1']);
  $number1 = strval($_POST['number1']);
  $number2 = strval($_POST['number2']);
  $number3 = strval($_POST['number3']);
  $number4 = strval($_POST['number4']);
  $number5 = strval($_POST['number5']);
  $number6 = strval($_POST['number6']);

  $add = $number1 . $number2 . $number3 . $number4 . $number5 . $number6;
  echo $add;


  if ($meta == $add || $meta1 == $add) {

    //update_user_meta( $user_id, 'account_status', 'um_approve_membership');

    // add_action('um_user_edit_profile', 'um_post_edit_pending_hook');
    // function um_post_edit_pending_hook( $args ){
    //     // $user_id =  $args['user_id'];
    //     if ( is_super_admin() ) {
    //         return;
    // }
    // }

    um_fetch_user($user_id);
    UM()->user()->approve();

    // TODO: If the user doesn't exist, create them or generate an error message and exit.

    // If the user exists, then set an auth cookie.
    wp_clear_auth_cookie();
    wp_set_current_user($user_id);
    wp_set_auth_cookie($user_id);

    // Now redirect to the administration area.
    wp_safe_redirect(admin_url(), 302, 'Third-Party SDK');

    header('Location: <?php echo get_site_url(); ?>/profile/');
  }
}
//resend OTP
if (isset($_POST['resend'])) {

  $to = $_POST['user_email'];
  $pswd = $_POST['user_password'];
  $message = "welcome";
  $otp = rand(111111, 999999);
  $subject = 'The subject';
  $body = 'The email body content <br> Your  verification Number is:' . $otp;
  $message = "OTP send to ypur mail successfully";

  echo $user_id;
  echo $otp;
  update_user_meta($user_id, 'user_reg_otp_setup', $otp);
  wp_mail($to, $subject, $body);
}


?>

<style>
  .copy_right{
    margin-top: 30px;
  }
  .body-bg{
    background:#f5f9fa;
  }
  .verification-code {
    max-width: 450px;
    position: relative;
    /* margin: 50px auto; */
    text-align: center;
    padding: 20px;
  }

  .control-label {
    display: block;
    margin: 40px auto;
    font-weight: 900;
  }

  .verification-code--inputs input[type=text] {
    border: 2px solid #e1e1e1;
    width: 46px;
    height: 46px;
    padding: 10px;
    text-align: center;
    display: inline-block;
    box-sizing: border-box;
  }

  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php get_header('register'); ?>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/jpg" href="images/favicon.png">

  <!-- css links -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">

</head>

<style>
	.verification-code--inputs input[type=number] {
    margin: 10px 20px !important;
}
	.main_login_img-1{
		position: relative;
		background-image: unset;
	}
	.main_login_img-1:before{
		content: '';
		position: absolute;
		background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/Group-78157-3.png');
		right: 0;
		top: 0;
		background-size: cover;
		height: 100%;
		width: 45%;
		
	}
  .verification-code--inputs input[type=number] {
    width: 65px;
    height: 65px;
    padding: 5px;
    text-align: center;
    display: inline-block;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    box-shadow: 0px 10px 20px #00000029;
    border-radius: 9px;
    margin: 1rem 0.2rem;
  }

  .verification-code {
    max-width: unset;
    position: relative;
   
    padding: 0px;
    text-align: unset;
    ;
  }

  .resend_code {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  .resend_code p {
    font-size: 14px;
    color: #242424;
    font-weight: 500;
  }

  .resend_code p a {
    font-size: 14px;
    color: #F96703;
  }

  .otp_sec_mian {
/*     height: calc(100vh - 270px); */
    padding: 0;
    display: grid;
    align-items: center;
    justify-content: center;
  }
  .verification-code .submit_varification{
  width:100%;
  }

  @media (max-width:1440px) and (min-width:1200px) {

    /* knowledge list */
    .verification-code--inputs input[type=number] {
      width: 45px;
      height: 45px;
      border-radius: 9px;
      margin: 0.5rem 0.2rem;
    }

    .otp_sec_mian {
/*       height: calc(100vh - 200px); */
    }
  }
	@media only screen and (max-width: 1023px){
		.main_login_img-1:before{
		  display: none;
	  }
	}

  @media (max-width:1199px) and (min-width:992px) {

    /* knowledge list */
    .verification-code--inputs input[type=number] {
      width: 45px;
      height: 45px;
      border-radius: 9px;
      margin: 0.5rem 0.2rem;
    }

    .otp_sec_mian {
/*       height: calc(100vh - 200px); */
    }
    .login_left_text{
    text-align:center;
    }
    .verification-code .submit_varification{
  width:60%;
  }
  .login_left_text p{
  color:#fff;
  }
  .critical_skill{
  margin-left:auto;
  margin-right:auto;
  }
  }

  @media (max-width:991px) and (min-width:768px) {

    /* knowledge list */
    .verification-code--inputs input[type=number] {
      width: 45px;
      height: 45px;
      border-radius: 9px;
      margin: 0.5rem 0.2rem;
    }

    .otp_sec_mian {
/*       height: auto; */
      padding: 50px 0;
    }
  }
   @media (max-width:600px){
   .copy_right p{
   text-align:center;
   }
   .sitemap{
   text-align:center!important;
   }
   button.btn_account.active{
   width:95px;
   }
   }

  @media (max-width:575px) and (min-width:320px) {

    /* knowledge list */
    .verification-code--inputs input[type=number] {
      width: 45px;
      height: 45px;
      border-radius: 9px;
      margin: 0.5rem 0.2rem;
    }

    .otp_sec_mian {
/*       height: auto; */
      padding: 50px 0;
    }
  .verification-code--inputs input[type=number] {
    margin: 7px 20px !important;
}

  }

</style>

<body class="body-bg">

  <div class="container-fluid avni Singh">
    <div class="login_nav">
      <nav class="navbar  justify-content-between">
        <a class="navbar-brand">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/login_logo.png" class="img-fluid" alt="img">
        </a>
        <form class="form-inline">
          <button class="btn btn_account active"><a href="<?php echo get_site_url(); ?>/registration/" color="#fff">Back</a></button>
        </form>
      </nav>
    </div>

    <section class="otp_sec_mian">
      <div class="row justify-content-between align-items-end center-text_sec">
        <div class="col-xl-6 col-lg-12 col-md-8">
          <div class="col-xl-9 mx-auto">
            <div class="login_left_text">
              <h4>Account Verification</h4>
              <p class="mt-3">Lorem Ipsum is simply dummy text of the printing.</p>
              <div class="main_profile_form mt-4">
                <div class="verification-code">
                  <form action="" method="POST">
                    <div class="verification-code--inputs">
                      <input type="number" name="number1" class="otp__digit otp__field__1" maxlength="1" />
                      <input type="number" name="number2" class="otp__digit otp__field__2" maxlength="1" />
                      <input type="number" name="number3" class="otp__digit otp__field__3" maxlength="1" />
                      <input type="number" name="number4" class="otp__digit otp__field__4" maxlength="1" />

                      <div class="resend_code mt-4">
                        <p>Didn’t Receive the code? <button style="background-color:transparent; color:#F96703; margin-left:-25px;" name="resend">Resend</a></button>
                      </div>
                      <p class="w3-center"><button class="w3-btn w3-green w3-round submit_varification" style="height:60px;background-color:#F96703;color:#fff;margin-top:20px;border-radius: 10px" name="submit">Submit</button></p>
                      <!-- <p class="w3-center"><button class="w3-btn w3-green w3-round" style="width:100%;height:60px;background-color:#F96703;color:#fff;border-radius: 10px;" name="resend">Resend</button></p>   -->
                    </div>
                  </form>

                  <input type="hidden" id="verificationCode" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-8 critical_skill">
          <div class="rigt_side_text">
            <h5>DEVELOP CRITICAL SKILLS, GET CREDENTIALED, AND CONNECT WITH THE PEOPLE YOU NEED</h5>
            <p>to prepare for, respond to, and recover from a disaster safely.</p>
          </div>
        </div>
      </div>
    </section>


    <div class="copy_right mt-5">
      <div class="row justify-content-between">
        <div class="col-xl-4 col-lg-6 col-md-6">
          <p>Copyright © 2020 All Rights Reserved</p>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 text-right sitemap">
          <a href="<?php echo get_site_url(); ?>/terms-of-use/">Terms of Use </a>
          <a href="<?php echo get_site_url(); ?>/privacy-policy/">Privacy Policy </a>
          <a href="#">Sitemap </a>
        </div>
      </div>
    </div>

  </div>













  <?php get_footer('general');  ?>

  <!-- js links -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>



</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
  //Code Verification
  jQuery(document).ready(function() {
    var verificationCode = [];
    jQuery(".verification-code input[type=text]").keyup(function(e) {

      // Get Input for Hidden Field
      jQuery(".verification-code input[type=text]").each(function(i) {
        verificationCode[i] = jQuery(".verification-code input[type=text]")[i].value;
        jQuery('#verificationCode').val(Number(verificationCode.join('')));
        //console.log( $('#verificationCode').val() );
        i.preventDefault();
      });

      //console.log(event.key, event.which);

      if (jQuery(this).val() > 0) {
        if (event.key == 1 || event.key == 2 || event.key == 3 || event.key == 4 || event.key == 5 || event.key == 6) {
          jQuery(this).next().focus();
        }
      } else {
        if (event.key == 'Backspace') {
          jQuery(this).prev().focus();
        }
      }
      e.preventDefault();
    }); // keyup
  });
  jQuery('.verification-code input').on("paste", function(event, pastedValue) {
    console.log(event)
    jQuery('#txt').val($content)
    console.log($content)
    //console.log(values)
    event.preventDefault();
  });

  // $editor.on('paste, keydown', function() {http://jsfiddle.net/5bNx4/#run
  // var $self = $(this);            
  //               setTimeout(function(){ 
  //                 var $content = $self.html();             
  //                 $clipboard.val($content);
  //             },100);
  //      });
</script>

<script>
  jQuery(document).ready(function() {
    var otp_inputs = document.querySelectorAll(".otp__digit")
    var mykey = "0123456789".split("")
    otp_inputs.forEach((_) => {
      _.addEventListener("keyup", handle_next_input)
    })

    function handle_next_input(event) {
      let current = event.target
      let index = parseInt(current.classList[1].split("__")[2])
      current.value = event.key

      if (event.keyCode == 8 && index > 1) {
        current.previousElementSibling.focus()
      }
      if (index < 6 && mykey.indexOf("" + event.key + "") != -1) {
        var next = current.nextElementSibling;
        next.focus()
      }
      var _finalKey = ""
      for (let {
          value
        }
        of otp_inputs) {
        _finalKey += value
      }
      if (_finalKey.length == 6) {
        document.querySelector("#_otp").classList.replace("_notok", "_ok")
        document.querySelector("#_otp").innerText = _finalKey
      } else {
        document.querySelector("#_otp").classList.replace("_ok", "_notok")
        document.querySelector("#_otp").innerText = _finalKey
      }
      event.preventDefault();
    }
  });
</script>