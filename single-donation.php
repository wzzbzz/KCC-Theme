<?php 

  if ( is_user_logged_in() ){

    global $post;

    get_header('new');

 ?>



<style>



.btn-group .btn-submit-donation {

    padding: 10px 20px !important;

    margin-top: 10px !important;

}  

#recurring {

    margin-right: 10px;

}

.section h3 {

    font-size: 20px;

    margin: 10px 0px;

}

#true-impact{

    margin-right: 10px;

}





.section.contact h3 {

    margin: 20px 0px;

    font-size: 20px;

    color: #242424;

}

.donate-temp .main_footer_sec {

    background: #134793 0% 0% no-repeat padding-box;

    border-radius: 50px 0px 0px 0px;

    padding: 1rem 0rem 2rem 0rem;

    margin-top: 40px;

    float: right;

}



.donation-form .field.radio label {

    display: flex!important;

}

.btn-group .btn-submit-donation {

    padding: 10px 13px!important;

}

.donation-form .section.recurring {

    padding-left: 0px!important;

}



 .donation-form .field.checkbox label{display:flex!important;}

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

.donate_det .title_details .back_btn{margin-top:-20px;}

.donate_det .donation_list{margin-top:35px; margin-bottom:20px;}

.contact_donate .col-6 {padding:0px;  margin-bottom: 10px;}

.contact_donate .col-6 img {margin-right:5px;}

</style>



<div class="col-xl-12 coordination-center-tracking donate-temp">

        <div class="row justify-content-end mt-3">

            <?php include('user_topbar.php')?>

        </div>

        <!--Main Contents-->

        <div class="col-xl-11 col-lg-11 col-md-10 col-10 d-flex donate_det justify-content-between  flex-wrap">

            <div class="col-xl-12 ">

               <div class="row justify-content-end mt-3">

                    <?php $val = $_POST['suburb'];  ?>

                    <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">

                        <div class="donation_tab_pills ">

                            <div class="row">

                                <div class="col-xl-5">

                                    <div class="left_donate_Sec">

                                            <img src="<?php echo get_post_meta($post->ID,'feature-image',true)?>" class="img-fluid donate_img-view" alt="image">

                                            <h5><?php echo the_title()?></h5>

                                            <?php echo the_content()?>

                                    </div>

                                    <div class="questions_sec">

                                        <h5>Questions?</h5>

                                        <h3>Contact us at:</h3>

                                        <div class="contact_donate">

                                            <div class="col-12 contact_donate_box">

                                                <div class="col-6">

                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png" class="img-fluid">

                                                <span><?php echo get_post_meta($post->ID,'email',true)?></span>

                                                </div>

                                                <div class="col-6">

                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact.png" class="img-fluid">

                                                <span><?php echo get_post_meta($post->ID,'phone',true)?></span>

                                                </div>

                                            </div>

                                            <div class=" d-flex col-12">

                                                <div class="col-6">

                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/add.png" class="img-fluid">

                                                <!--<span><?//php echo get_post_meta($post->ID,'address',true)?>

                                                    </span>-->

                                                    <span>World Cares Center</span> <br/>

                                                    <span style="padding-left:27px;">520 8th Avenue, Suite 201B </span><br/>

                                                    

                                                    <span style="padding-left:27px;"> New York, NY 10018 </span>

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

                                            <div class="title_details">

                                                <h5>World Cares Center</h5>

                                                <div class="back_btn">

                                                    <a href="<?php echo get_site_url(); ?>/dashboard-donate/">Back</a>

                                                </div>

                                            </div>

                                            

                                            <!--<div class="donation_list">

                                                <h4>Donation</h4>

                                            </div>-->

                                            

                                            <?php 

                                                $slug = get_post_field( 'post_name', get_post());

                                               

                                            if($slug == 'general-donation') { ?>

                                                

                                                <div class="form-check mb-3 deatil_form d-flex " >

                                                  <script src="https://s3-us-west-2.amazonaws.com/bloomerang-public-cdn/worldcarescenter/.widget-js/7301120.js" type="text/javascript"></script>

                                                </div>

                                                    

                                            <?php } elseif(($slug == 'help-ukraine') ) { ?>

                                                    

                                                    <div class="form-check mb-3 deatil_form d-flex " >

                                                      <script src="https://s3-us-west-2.amazonaws.com/bloomerang-public-cdn/worldcarescenter/.widget-js/6850560.js" type="text/javascript"></script>   

                                                    </div>

                                                    

                                            <?php } elseif(($slug == 'help-haiti') ) { ?> 

                                                    

                                                    <div class="form-check mb-3 deatil_form d-flex " >

                                                     <script src="https://s3-us-west-2.amazonaws.com/bloomerang-public-cdn/worldcarescenter/.widget-js/4685824.js" type="text/javascript"></script> 

                                                    </div>

                                                    

                                            <?php } elseif(($slug == 'ppe-for-ready-responders') ) { ?>

                                                   

                                                    <div class="form-check mb-3 deatil_form d-flex " >

                                                     <script src="https://s3-us-west-2.amazonaws.com/bloomerang-public-cdn/worldcarescenter/.widget-js/7301120.js" type="text/javascript"></script>

                                                    </div>

                                            

                                            <?php } elseif(($slug == 'disaster-response-fund') ) { ?>

                                                    

                                                    <div class="form-check mb-3 deatil_form d-flex " >

                                                      <script src="https://s3-us-west-2.amazonaws.com/bloomerang-public-cdn/worldcarescenter/.widget-js/7301120.js" type="text/javascript"></script>

                                                    </div>

                                                    

                                            <?php } ?>

                                            

                                            

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

            </div>        

        </div>



     <!-- Footer-->

     <div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex justify-content-between  flex-wrap">

         <?php include('common_user_footer.php')?>

      </div>

</div>

</div>







<?php 

get_footer('new'); } else {

    global $post;

    $post_slug = $post->post_name; 

    wp_redirect( site_url() . '/login?url=' . site_url('donation') . '/'.$post_slug);

 //wp_redirect( 'login' );

} ?>