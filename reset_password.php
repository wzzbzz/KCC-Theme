<?php 
   /* Template Name: Password Reset */

if(is_user_logged_in())
    {
       header("Location:/dashboard-home");
    }
else{
      //header("Location:/new-login/");
}



 ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset  Password</title>
    <link rel="shortcut icon" type="image/jpg" href="<?= get_template_directory_uri();?>/assets/images/favicon.png"> 
    <!-- Links -->    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">

</head>
<body class="bg-color-login">
<section class="login-header-page">
    <div class="container-fluid">
        <div class="images" style="background: url('<?= wp_upload_dir();?>/2022/12/Group-78157-2-1.png');">
            <div class="right-section">
                <div class="banner-content">
                    <h3 class="text-uppercase">Develop Critical Skills, Get Credentialed, Aand Connect With The People You Need</h3>
                    <p>to prepare for, respond to, and recover from a disaster safely.</p>                                                             
                </div>                        
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="left-section">
                        <div class="image">
                            <img src="<?= wp_upload_dir();?>/elementor/thumbs/logo-q56sxant9dmy3yqysgcyvcdmog1qaj1qbxoqv2nm70.png" alt="" title="WCC" height="" width="">
                            <div class="logo-title">
                                <span>World Cares</span>
                            </div>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="login-btn-part">
                            <div class="d-flex align-items-center">
                                <div class="back">
                                    <a class="btn btn-primary" href="<?php echo get_site_url(); ?>/forgot-password/" title="back">Back</a>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6">  
                <div class="row mt-5">
                    <div class="col-12 col-lg-12">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-9">
                                <div class="login-title">
                                    <h1><span>Set New Password</span></h1>
                                </div>
<?php 
if (is_wp_error($result)) {
    wp_die($result-> get_error_message());
}
 
?>

                                <div class="login-form-section">

                                    <?//php echo do_shortcode( '[ultimatemember form_id="207"]' ); ?>
                                    <form method = "POST" action ="" class="row mediadoc_form" enctype="multipart/form-data">       
                                        <input type="hidden" name="update_Password" value="update_Password"/>
                                         <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
                                        <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />


                                            <div class="row">
                                                <div class="col-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" name ="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="********" required onChange="onChange()">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Retype Password</label>
                                                        <input type="password" name ="confirm" class="form-control" id="RetypePassword" aria-describedby="emailHelp" placeholder="********" required onChange="onChange()">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-12 sub-btn">
                                                    <button class="btn btn-primary" title="submit">Submit</button>                                            
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

        <div class="row mt-lg-5 mt-2 pt-lg-4 pt-2">
            <div class="col-md-12 col-lg-6"> 
                <div class="copy-right">
                    <p>
                        Copyright © <?php echo date('Y');?> All Rights Reserved
                    </p>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 d-lg-flex justify-content-lg-end"> 
                <div class="footer-links">
                    <ul>
                        <li><a href="<?= site_url();?>/terms-of-use/" title="Terms of Use">Terms of Use</a></li>
                        <li>|</li>
                        <li><a href="<?= site_url();?>/privacy-policy/" title="Privacy Policy">Privacy Policy</a></li>
                        <li>|</li>
                        <li><a href="<?= site_url();?>/sitemap" title="Sitemap">Sitemap</a></li>

                    </ul>
                </div>
            </div>
        </div> 
    </div>
</section>
</body>

<script>

function onChange() {
  const password = document.querySelector('input[name=password]');
  const confirm = document.querySelector('input[name=confirm]');
  if (confirm.value === password.value) {
    confirm.setCustomValidity('');
  } else {
    confirm.setCustomValidity('Passwords do not match');
  }
}
</script>

<?php //get_footer('new'); ?>