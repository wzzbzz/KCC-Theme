<?php

/* Template Name: Donate Detail */

if ( is_user_logged_in() ) {

get_header('new'); ?>

<div class="col-xl-12 ">

    <div class="row justify-content-end mt-3">



         <?php include('user_topbar.php')?>

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

                    'posts_per_page' => 5,

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

                            <img src="<?php echo get_field('donation_banner_image')['url']; ?>" class="img-fluid donate_img-view" alt="image">

                            <?php if($val) { ?>    

                                <h5><?php echo $val; ?></h5>

                            <?php } ?>

                            <p><?php echo $post->post_content; ?></p>

                        </div>

                        <div class="questions_sec">

                            <h5>Questions?</h5>

                            <h3>Contact us at:</h3>

                        </div>

                        <div class="contact_us_sec d-flex ">

                            <div class="col-xl-6">

                                <?php if(get_field('email')) { ?>

                                    <div class="mt-2">

                                        <a href="#">

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png" class="img-fluid">

                                            <?php echo get_field('email');  ?>

                                        </a>

                                    </div>

                                <?php } if(get_field('address')) { ?> 

                                    <div class="d-flex mt-4">                                       

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/add.png" class="img-fluid ">

                                        <address>

                                           <?php echo get_field('address');  ?>

                                        </address>                                    

                                    </div>

                                <?php } ?>

                            </div>

                            <div class="col-xl-6">

                                <?php if(get_field('number')) { ?>

                                    <div class="mt-2">

                                        <a href="#">

                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact.png" class="img-fluid">

                                            <?php echo get_field('number');  ?>

                                        </a>

                                    </div>

                                <?php } ?>

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

                                            <label for="exampleInputPassword1">First Name</label>

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

                                                <label for="exampleInputPassword1">First name</label>

                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="<?php echo $fname; ?>">

                                            </div>

                                        </div>

                                        <div class="col-xl-6 col-lg-10 col-md-6">

                                            <div class="form-group">

                                                <label for="exampleInputPassword1">Last name</label>

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

                                                <label for="exampleInputPassword1">City</label>

                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="<?php echo $zipcode; ?>">

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="donation_list mb-3">

                                    <h4>Payment Information</h4>

                                </div>

                                <div class="donation_list mb-3">

                                    <h4>Increase My Impact</h4>

                                </div>

                                <div class="form-check mb-3 deatil_form">

                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">

                                    <label class="form-check-label" for="exampleCheck1">Yes! Add $0.31 to help offset bank fees</label>

                                </div>

                                <a style="color:#fff;" href="https://checkout.stripe.com/c/pay/cs_test_a1qzMt46mq8BDQZq1YfeqlH8M8znSt5M8vO3h52qTjBjcaybI8I8JNLGnK#fidkdWxOYHwnPyd1blpxYHZxWmQyT21cbnFjMH83aWZGf0JIZmxIUVFMQzU1UjF8MDJCUm4nKSd1aWxrbkB9dWp2YGFMYSc%2FJ3FgdnFaYVczM2pdM2swMGM3YEJ2MG5uJyknd2BjYHd3YHdKd2xibGsnPydtcXF1dj8qKmZtYGZuanBxK3Zxd2x1YCtmamgqJ3gl"  >

                                <div class="to_donate" style="font-size:14px; text-align:center; background: #F96703 0% 0% no-repeat padding-box; border-radius: 12px; width: 100%; padding: 0.8rem 1rem;  ">



            

  DONATE NOW

                        

</div>

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

<?php get_footer('new'); ?>

<script src="https://js.stripe.com/v3/" defer></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

<?php } ?>