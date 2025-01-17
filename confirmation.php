<?php
/* Template Name: Confirmation */ ?>
<?php

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
  .verification-code {
    max-width: 450px;
    position: relative;
   
    text-align: center;
    padding: 20px;
  }
	


  .control-label {
    display: block;
    margin: 40px auto;
    font-weight: 900;
  }
	

  .verification-code--inputs input[type=number] {
    border: 2px solid #e1e1e1;
    width: 46px;
    height: 46px;
    padding: 10px;
    text-align: center;
    display: inline-block;
    box-sizing: border-box;
  }
	.submit_varification{
		margin-top: 0px !important;
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
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">

</head>

<style>
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
	.main_login_img-1{
		background-image: unset;
		position: relative;
	}
	.main_login_img-1:before{
		position: absolute;
		background-image: url("<?php echo get_site_url(); ?>/wp-content/uploads/2023/02/Group-78196.jpg") !important;
		content: '';
		background-repeat: no-repeat;
		height: 100%;
		width: 45%;
		background-size: cover;
		top: 0;
		right:0;
	}
	.verification-code--inputs input[type=number] {
    margin: 7px 20px !important;
}
/* 	.main_login_img-1{
		background-image: url("<?php echo get_site_url(); ?>/wp-content/uploads/2023/02/Group 78196.jpg") !important;
	} */

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
    height: unset;
    padding-bottom: 120px;
    display: grid;
    align-items: center;
    justify-content: center;
  }
.copy_right {
margin-top:30px;
}
.submit_varification{
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
      height: unset;
    }
  }
	@media (max-width: 1440px) and (min-width: 1200px){
.otp_sec_mian {
    height: unset;
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
      height: unset;
    }
    .login_left_text{
    text-align:center;
    }
    .submit_varification{
    width:60%;
    }
    .resend_code p{
/*     color:#fff !important; */
    }
    .critical_skill{
    margin-left:auto;
    margin-right:auto;
    }
	  .main_login_img-1:before{
		  display: none;
	  }
  }

  @media (max-width:991px) and (min-width:768px) {

    /* knowledge list */
    .verification-code--inputs input[type=number] {
      width: 65px;
      height: 65px;
      border-radius: 9px;
      margin: 0.5rem 0.2rem;
    }

    .otp_sec_mian {
      height: auto;
      padding: 50px 0;
    }
    .main_login_img-1{
			background-size: cover;
            
		}
    .resend_code p {
      font-size: 20px!important;
    }
  @media only screen and (max-width: 768px){
  .login_left_text h4{
/*   color:#fff !important; */
  }
  .login_left_text p{
/*   color:#fff !important; */
  }
  .resend_code p{
/*   color:#fff; */
  }
	  
  .rigt_side_text h5 {
   
/*     color: #fff !important; */
  }
   .rigt_side_text p {
   
/*     color: #fff !important; */
  }
  .copy_right a{
/*   color:#fff !important; */
  }
  section.otp_sec_mian .row {
    margin-top: 100px;
}
  }
	@media only screen and (max-width: 767px){
		.main_login_img-1{
			background-image: unset;
            
		}
		.main_login_img-1:before{
			display: none;
		}
		.rigt_side_text p {
    font-size: 18px;
    color: #000;
}
		.rigt_side_text h5 {
    font-size: 25px;
    color: #000;
}
		.col-xl-4.col-lg-6.col-md-6.text-right.right-side {
    width: 51%;
}
		.col-xl-4.col-lg-6.col-md-6.left-side {
    width: 49%;
}
		.copy_right a {
    color: #000;
}
		section.otp_sec_mian .row {
    margin-top: 50px;
    text-align: center;
}
	}
    @media only screen and (max-width: 600px){
  .login_left_text h4{
/*   color:#fff !important; */
  }
  .login_left_text p{
/*   color:#fff !important; */
  }
  .resend_code p{
/*   color:#fff; */
  }
  .rigt_side_text h5 {
   
    color: #000 !important;
  }
   .rigt_side_text p {
   
    color: #000 !important;
  }
  .copy_right a{
  color:#000 !important;
  }
  .copy_right{
  margin-top:50px;
  }
   section.otp_sec_mian .row {
    margin-top: 0;
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
      height: auto;
      padding: 50px 0PX 0PX 0PX;
    }
	  button.btn_account.active {
    width: 125px;
}
	  .verification-code--inputs input[type=number] {
    margin: 7px 7px !important;
}
  }
</style>

<body>

  <div class="container-fluid">
    <div class="login_nav">
      <nav class="navbar  justify-content-between">
        <a class="navbar-brand">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/login_logo.png" class="img-fluid" alt="img">
        </a>
        <form class="form-inline">
          <button class="btn btn_account active"><a href="<?php echo get_site_url(); ?>/login/" color="#fff">Login</a></button>
        </form>
      </nav>
    </div>

    <section class="otp_sec_mian">
      <div class="row justify-content-between align-items-end center-text_sec">
        <div class="col-xl-6 col-lg-12 col-md-8">
          <div class="col-xl-9 mx-auto">
            <div class="login_left_text">
              <h4>Account Verification</h4>
              <p class="mt-0">Enter the code from the email we sent.</p>
              <div class="main_profile_form mt-4">
                <div class="verification-code">
       <!--           <p>Didn’t Receive the code? <button style="background-color:transparent; color:#F96703; margin-left:-25px;" name="resend">Resend</a></button>-->
                     <form action="" method="POST" id="regFrm">
                    <div class="verification-code--inputs">
                       <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
                      <input type="number" name="number1" class="otp__digit otp__field__1" maxlength="1" />
                      <input type="number" name="number2" class="otp__digit otp__field__2" maxlength="1" />
                      <input type="number" name="number3" class="otp__digit otp__field__3" maxlength="1" />
                      <input type="number" name="number4" class="otp__digit otp__field__4" maxlength="1" />

                     
                      <p class="w3-center mt-4"><button class="w3-btn w3-green w3-round submit_varification" style="height:60px;background-color:#F96703;color:#fff;margin-top:20px;border-radius: 10px" name="submit">Submit</button></p>
                      <!-- <p class="w3-center"><button class="w3-btn w3-green w3-round" style="width:100%;height:60px;background-color:#F96703;color:#fff;border-radius: 10px;" name="resend">Resend</button></p>   -->
                    </div>
                  </form>

                   <div class="resend_code mt-2">
                           <form method = "POST" action ="" class="mediadoc_form" enctype="multipart/form-data">
                            <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
                            <input type="hidden" name="resend_OTP" value="resend_OTP"/>
                            <input type="hidden" name="group_image_nonce" value="<//?php echo wp_create_nonce('group_image_nonce'); ?>" />
                         <p>Didn’t Receive the code? <button style="background-color:transparent; color:#F96703; margin-left:-25px;">Resend</button> </p>
                        </form>

                      </div>

                  <input type="hidden" id="verificationCode" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-8 critical_skill">
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
                        <p class="text-md-left text-center">Copyright © <?php echo date('Y');?> All Rights Reserved</p>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 text-md-right text-center">
                        <a href="<?php echo get_site_url(); ?>/terms-of-use/">Terms of Use  </a>
                        <a href="<?php echo get_site_url(); ?>/privacy-policy/">Privacy Policy   </a>
                        <a href="<?php echo get_site_url(); ?>/sitemap/">Sitemap </a>
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
   const form = document.querySelector('#regFrm');
        // Add a submit event listener to the form
            form.addEventListener('submit', function(event) {
              // Prevent the default form submission behavior
              event.preventDefault();

              // Create a new XMLHttpRequest object
              const xhr = new XMLHttpRequest();

              // Open a connection to the server
              xhr.open('POST', '/wp-json/user/v1/verify/');

              // Set the appropriate headers and request method
              xhr.setRequestHeader('Content-Type', 'application/json');
              xhr.setRequestHeader('Accept', 'application/json');

              // Create a callback function to handle the server's response
              xhr.onload = function() {
                if (xhr.status === 200) {
                        const obj = JSON.parse(this.responseText);
                        if(obj['success']){ 
                            window.location.href="/profile";
                        }else{
                          document.querySelector("#error").inHTML=obj['message'];
                        }
                } else {
                  const obj = JSON.parse(this.responseText);
                  console.error('Form submission failed!');
                  document.querySelector("#error").innerHTML=obj['message'];
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