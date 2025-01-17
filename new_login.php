<?php 
   /* Template Name: Login Page Updated */

if(is_user_logged_in())
    {
       header("Location:/dashboard-home");
    }
else{
}
// Display file path for debugging
display_file_path();
 ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" type="image/jpg" href="/wp-content/themes/astra/assets/images/favicon.png">
    <!-- Links -->    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<style type="text/css">
     .login-header-page .login-form-section .social-icon .icon {
        height: 24px;
        width: 24px;
    }
    .icon img {
        width: 48px;
        height: 48px;
    }

@media screen and (max-width: 768px){
    .login-header-page .right-section .login-btn-part .text p {
    color: #000;
    font-size: 14px;
    }
    .login-header-page .right-section .login-btn-part .create-btn .btn-primary {
        font-size: 11px;
        padding: 5px 13px;
        min-height: 44px;
    }
    .login-header-page .left-section .image img {
        height: 48px;
        width: 48px;
        border-radius: 50%;
    }
    .login-header-page .login-form-section .forgot {
        background: none;
        box-shadow: none;
        min-height: 0px;
        margin-top: -85px;
        float: right;
    }

    .login-header-page {
        padding: 30px 15px 0px 15px;
        background: #F5F9FA;
        height: 100%;
        position: relative;
    }
    .login-header-page .left-section .image img {
        height: 90px;
        width: 90px;
        border-radius: 50%;
        margin-right: 20px;
    }
    .login-header-page .left-section .image .logo-title span {
        font-size: 14px;
        color: #242424;
        text-align: center;
        padding-top: 10px;
    }
    .login-header-page .footer-links ul li {
        color: #000;
    }
    .login-header-page .footer-links ul li a {
        text-decoration: none;
        font-size: 14px;
        color: #000;
    }
    .login-header-page .copy-right p {
        font-size: 14px;
        text-align: center;
    }
}
</style>
</head>
<section class="login-header-page">
    <div class="container-fluid">
        <div class="images d-none d-lg-block d-md-block d-xl-block" style="background: url('https://knowledge.communication.worldcares.org/wp-content/uploads/2022/12/Group-78157-2-1.png');">
            <div class="right-section">
                <div class="banner-content">
                    <h3>Develop Critical Skills, Get Credentialed, And Connect With The People You Need</h3>
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
                            <a href="<?php echo get_site_url(); ?>/">
                            <img src="https://knowledge.communication.worldcares.org/wp-content/uploads/elementor/thumbs/logo-q56sxant9dmy3yqysgcyvcdmog1qaj1qbxoqv2nm70.png" alt="" title="WCC" height="" width="">
                            </a>
                            <div class="logo-title">
                                <span>World Cares</span>
                            </div>
                        </div>
                       
                    </div>
                    <div class="right-section">
                        <div class="login-btn-part">
                            <div class="d-flex align-items-center">
                                <div class="text mr-4">
                                    <p>Not registered yet? </p>
                                </div>
                                <div class="create-btn">
                                    <a class="btn btn-primary" href="/registration/" title="Create an Account">Create an Account</a>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">  
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-9">
                                <div class="login-title">
                                    <h1>Hello, <span>Welcome Back</span></h1>
                                </div>
                                    
                                <div class="login-form-section">

                                    <form method = "POST" action ="" class="row mediadoc_form" enctype="multipart/form-data">       
                                    <input type="hidden" name="loginUsers" value="reportsforms"/>
                                    <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />


                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="form-group">
                                                    <label>Enter your email </label>
                                                    <input type="email" name ="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="john.doe@gmail.com" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name ="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="********" required>
                                                </div>
                                            </div>
                                               <div class="col-12 col-lg-12 d-lg-flex justify-content-end">
                                                <div class="form-group forgot">
                                                    <span><a href="<?php echo site_url('forgot-password');?>">Forgot Password</a></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label">Keep me Logged in</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12 sub-btn">
                                                <button class="btn btn-primary" title="Login">Login</button>                                            
                                            </div>
                                        </div>
                                    </form>
                                    <!--<div class="or text-center">
                                        <span>Or Login With</span>
                                    </div>
                                    <div class="social-icon">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-xl-12">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-xl-2 col-2">
                                                        <a href="javascript:void(0);" class="d-block">
                                                            <div class="icon">
                                                                <img src="https://knowledge.communication.worldcares.org/wp-content/uploads/2023/04/google.png">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-2 col-2">
                                                        <a href="javascript:void(0);" class="d-block">
                                                            <div class="icon">
                                                                <img src="https://knowledge.communication.worldcares.org/wp-content/uploads/2023/04/facebook.png">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-2 col-2">
                                                        <a href="javascript:void(0);" class="d-block">
                                                            <div class="icon">
                                                                <img src="https://knowledge.communication.worldcares.org/wp-content/uploads/2023/04/instagram.png">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-2 col-2">
                                                        <a href="javascript:void(0);" class="d-block">
                                                            <div class="icon">
                                                                 <img src="https://knowledge.communication.worldcares.org/wp-content/uploads/2023/04/linkdin.png">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-2 col-2">
                                                        <a href="javascript:void(0);" class="d-block">
                                                            <div class="icon">
                                                                 <img src="https://knowledge.communication.worldcares.org/wp-content/uploads/2023/04/twitter.png">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-4">
            <div class="col-md-6 col-12"> 
                <div class="copy-right">
                    <p>
                        Copyright © <?php echo date('Y');?> All Rights Reserved
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-sm-center justify-content-end"> 
                <div class="footer-links">
                    <ul>
                    <li><a href="<?php echo site_url('/terms-of-use/'); ?>" title="Terms of Use">Terms of Use</a></li>
                    <li>|</li>
                    <li><a href="<?php echo site_url('/privacy-policy/'); ?>" title="Privacy Policy">Privacy Policy</a></li>
                    <li>|</li>
                    <li><a href="<?php echo site_url('/sitemap'); ?>" title="Sitemap">Sitemap</a></li>


                    </ul>
                </div>
            </div>
        </div> 
    </div>
</section>
<script>swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)</script>

<?php //get_footer('new'); ?>