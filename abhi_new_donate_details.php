<?php 
   /* Template Name: Abhi New Donate Details */
    ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css">
<link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"/>
<!-- css links -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet"/>

<style>
.donate-temp .main_footer_sec {
    background: #134793 0% 0% no-repeat padding-box;
    border-radius: 50px 0px 0px 0px;
    padding: 1rem 0rem 2rem 0rem;
    margin-top: 40px;
    float: right;
}
.donate-temp .left_donate_Sec img { min-height:314px;}
.donate_det{max-width:100%;}
.donate_det .donation_tab_pills{margin:0px;}
.donate_det .left_donate_Sec h5{font-family:'poppins'; font-weight:500; margin-bottom:10px;}
.donate_det .left_donate_Sec p { font-size: 16px; color: #71706F; font-weight: 400; line-height: normal; font-family: 'poppins';}
.donate_det .donation_list ul{margin:15px 0px 0 1px; padding:0px;}
.donate_det .donation_list ul li label{display: flex;}
.donate_det .donation_list ul li label span{display: contents;}
.donate_det .donation_list ul li label input[type=checkbox], input[type=radio]{margin-right:10px;}
.donate_det .donation_list ul li label span:before {display:none;}
.donate_det .title_details .back_btn{margin-top:0px;}
.donate_det .donation_list{margin-top:35px; margin-bottom:20px;}
.contact_donate .col-6 {padding:0px;  margin-bottom: 10px;}
.contact_donate .col-6 img {margin-right:5px;}
.elementor-10 .elementor-element.elementor-element-afa06fc{padding:0px;}
.elementor-location-header .elementor-element-e2b59b3 .elementor-container{background:#a1a1a1;}
</style>
<div>
<?php get_header(); ?>

</div>
<div class="col-xl-12 coordination-center-tracking donate-temp">
<div class="row justify-content-end mt-3">

            
        </div>

        <!--Main Contents-->
        <div class="col-xl-11 col-lg-11 col-md-10 col-10 d-flex donate_det justify-content-between  flex-wrap">

        <div class="col-xl-12 ">
    <div class="row justify-content-end mt-3">

       

        <?php $val = $_POST['suburb']; 
            $args = array(
                'post_type' => 'donations',
                'meta_key' => 'custom-meta-key',
                'meta_query' => array(
                    array(
                        'key' => 'post_title',
                        'value' => $val,
                        'compare' => '=',
                    )
                )
            );
            $query = new WP_Query($args);
         $args = 
                array(
                    'post_type' => 'donations',
                    'posts_per_page' => 1,
                    'orderby' => 'title',
                    's' => $val
                ) ;

        $posts = get_posts($args);
        foreach ($posts as $post) {       
            ?>
        <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">
            <div class="donation_tab_pills ">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="left_donate_Sec">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/donate_detail_view.png" class="img-fluid donate_img-view" alt="image">
                               
                                <h5>Cause Name</h5>
                            
                                <p>World Cares Center is supporting teams on the ground in Ukraine who are evacuating orphans and providing medical assistance. We are also coordinating, training and matching medical volunteers to groups on the ground. Your funds go directly to support activities on the ground in the Ukraine. Follow our blog updates for updates from Ukraine. Here is the latest from Allison Thompson with the Third Wave as of March 23, 2022

                                    "Collectively with our ground teams, Exitus, Salam, Sam Medical and local friends we have evacuated 15,000 people including orphans from Kherson and no, that is not an exaggeration. We are also providing food, medical care and support establishing an aid distribution center in Moldova running into Odessa. This is a large, collaborative effort."

                                    Another great group is lead by Dr. Muni Tahzib. Muni and I met in Haiti and she continues to lead team of doctors to disaster zones. She is scheduling rotating teams on the Poland-Ukraine Boarder. Her first team was 40 doctors and support volunteers to the Ukrainian border with literally a ton of medical supplies and cared for injured patients.

                                    The last group we are supporting is a Russian Orthodox Church in Maine that has sent funds to Ukraine and is deploying nurses. They are in desperate need of tactical tourniquets. These can be found on Amazon and shipped to World Cares Center, 520 8th Avenue, Suite 201B, NYC. NY 10018. We are collecting the tourniquets and will send them with the Nurses to hand carry and deliver them where needed. All donations collected will support these on the ground relief efforts and more local group efforts as we connect with them.
                                </p>
                        </div>
                        <div class="questions_sec">
                            <h5>Questions?</h5>
                            <h3>Contact us at:</h3>
                            <div class="contact_donate">
                                <div class=" d-flex col-12">
                                    <div class="col-6">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png" class="img-fluid">
                                    <span>lorloff@worldcares.org</span>
                                    </div>
                                    <div class="col-6">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact.png" class="img-fluid">
                                    <span>212-563-7570</span>
                                    </div>
                                </div>
                                <div class=" d-flex col-12">
                                    <div class="col-6">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/add.png" class="img-fluid">
                                    <span>World Cares Center 520 8th Avenue Suite 201B New York, NY 10018
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <?php 
                        $lname = get_user_meta( $current_user_id, 'lname' , true );
                        $state = get_user_meta( $current_user_id, 'state' , true );
                        $ethnicity = get_user_meta( $current_user_id, 'ethnicity' , true );
                        $gender = get_user_meta( $current_user_id, 'gender' , true );
                        $zipcode = get_user_meta( $current_user_id, 'zipcode' , true );
                        $current_user = wp_get_current_user();
                        $email = $current_user->user_login;
                        
                    ?>
                    <div class="col-xl-7 col-lg-7">
                        <fieldset id="step0" class="grey_bg_Sec">
                            <form>
                                <div class="title_details">
                                    <h5>World Cares Center</h5>
                                    <div class="back_btn">
                                        <a href="<?php echo get_site_url(); ?>/dashboard-donate/">Back</a>
                                    </div>
                                </div>
                                <div class="donation_list">
                                    <h4>Donation</h4>
                                    <ul>
                                        <li><label><input type="checkbox"><span> $25.00 - Provides 1 responder with training and PPE</span></label></li>
                                        <li><label><input type="checkbox"><span> $100.00 - Provides 1 responder with training and PPE</span></label></li>
                                        <li><label><input type="checkbox"><span> $250.00 - Provides 1 responder with training and PPE</span></label></li>
                                        <li><label><input type="checkbox"><span> $500.00 - Provides 1 responder with training and PPE</span></label></li>
                                        <li><label><input type="checkbox"><span> $1000.00 - Provides 1 responder with training and PPE</span></label></li>
                                        <li><label><input type="checkbox"><span> $5000.00 - Provides 1 responder with training and PPE</span></label></li>
                                        
                                        
                                    </ul>
                                </div>
                                <div class="form-check mb-3 deatil_form d-flex " >
                                    <input type="checkbox" class="form-check-input mt-2" id="exampleCheck1">
                                    <div class="main_profile_form ml-2">                                                                                 
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Other</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="<?php echo $fname; ?>">
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="form-check mb-3 deatil_form">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Show my support by making this a recurring donation</label>
                                </div>
                                <div class="main_profile_form">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-10">
                                            <div class="form-group select_sec">
                                                <label for="exampleFormControlSelect1">My donation is for</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                  <option>Select</option>
                                                  <option><?php echo $val; ?></option>                             
                                                </select>
                                              </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="donation_list mb-3">
                                    <h4>Contact Information</h4>
                                </div>
                                <div class="main_profile_form">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-10 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">First Name</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="<?php echo $fname; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-10 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Last Name</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="<?php echo $lname; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-10 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email</label>
                                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="<?php echo $email; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-10 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phone</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="123456789">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="donation_list mb-3">
                                    <h4>Billing Address</h4>
                                </div>
                                <div class="main_profile_form">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-10 col-md-6">
                                            <div class="form-group select_sec">
                                                <label for="exampleFormControlSelect1">Country</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                  <option><?php echo $ethnicity; ?></option>
                                                  <option>India</option>
                                                  <option>USA</option>
                                                  <option>Australia</option>                                                      
                                                </select>
                                              </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-10 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Doe">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-10 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">City</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="New York">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-10 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">State</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="<?php echo $state; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-10 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Zip Code</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="<?php echo $zipcode; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="donation_list mb-3">
                                    <h4>Payment Information</h4>
                                    <br>
                                    <p>Bloomerang</p>
                                </div>
                                <div class="donation_list mb-3">
                                    <h4>Increase My Impact</h4>
                                </div>
                                <div class="form-check mb-3 deatil_form">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Yes! Add $0.31 to help offset bank fees</label>
                                </div>
                                <a style="color:#fff;" href="https://checkout.stripe.com/c/pay/cs_test_a1qzMt46mq8BDQZq1YfeqlH8M8znSt5M8vO3h52qTjBjcaybI8I8JNLGnK#fidkdWxOYHwnPyd1blpxYHZxWmQyT21cbnFjMH83aWZGf0JIZmxIUVFMQzU1UjF8MDJCUm4nKSd1aWxrbkB9dWp2YGFMYSc%2FJ3FgdnFaYVczM2pdM2swMGM3YEJ2MG5uJyknd2BjYHd3YHdKd2xibGsnPydtcXF1dj8qKmZtYGZuanBxK3Zxd2x1YCtmamgqJ3gl"  >
                                    <div class="to_donate" style="font-size:14px; text-align:center; background: #F96703 0% 0% no-repeat padding-box; border-radius: 12px; width: 100%; padding: 0.8rem 1rem;  ">DONATE NOW</div>
                                </a>
                            </form>
                        </fieldset>
                            <fieldset id="step1"> 
                                <div class="title_details">
                                    <h5>World Cares Center</h5>
                                </div>
                                <div class="congrates_img text-center">
                                    <img src="images/congress_img.png" class="img-fluid" alt="image">
                                    <h5>Congratulation, Your Donation Is Successfully</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                </div>
                                <div class="to_donate">
                                    <button class="btn btn_donate" >DONATE NOW</button>
                                </div>
                            </fieldset> 
                        </div>
            </div>
                </div>
            </div>
        </div> 
        <?php    }
        ?>

    </div>        
</div>

     <!-- Footer-->
     <div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex justify-content-between  flex-wrap">
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
</div>

        

   

<script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/jquery.min.js"></script>
    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/popper.min.js"></script>
    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/bootstrap.min.js"></script>   
    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/owl.carousel.min.js"></script>

    <script>      

<?php get_footer(); ?>