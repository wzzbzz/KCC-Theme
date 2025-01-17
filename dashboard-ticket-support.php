<?php 

/* Template Name: Dashboard Ticket */ 

 if ( is_user_logged_in() ) {

get_header('new'); ?>



<style type="text/css">

    

    .main_box_center_tickit {

    background: #FFFFFF 0% 0% no-repeat padding-box;

    box-shadow: 0px 10px 20px #00000029;

    border-radius: 20px;

    padding: 3rem 1.5rem 4rem 1.5rem;

}



.top_profile {

    border-bottom: none !important;

}



.chat_tickit .top_profile h4 {

    font-size: 20px;

    color: #000;

    font-weight: 600;

}



.chat_tickit .top_profile p {

    font-size: 12px;

    color: #71706F;

    padding: 0.5rem 0 0.8rem 0;

}



.create_tickit_Btn button.btn_tickit {

    font-size: 14px;

    color: #0E559F;

    display: flex;

    align-items: center;

    transition: 0.3s all;

    background: #FFFFFF 0% 0% no-repeat padding-box;

    border-radius: 9px;

    padding: 0.8rem 1rem;

    font-weight: 500;

    box-shadow: 0px 3px 6px #00000029;

}



.my-tickets .header {

    display: flex;

    justify-content: space-between;

    align-items: center;

}



button#new_ticket {

    font-size: 14px;

    color: #0E559F;

    display: flex;

    align-items: center;

    transition: 0.3s all;

    background: #FFFFFF 0% 0% no-repeat padding-box;

    border-radius: 9px;

    padding: 0.8rem 1rem;

    font-weight: 500;

    box-shadow: 0px 3px 6px #00000029;

}



.header-left h2 {

    font-size: 20px;

    color: #000;

    font-weight: 600;

}



.modal-dialog.create_tickit .modal-content {

    background: #FFFFFF 0% 0% no-repeat padding-box;

    box-shadow: 0px 10px 20px #0000000d;

    border-radius: 20px;

    padding: 2rem 1rem;

}



.create_tickit .modal-header button.close {

    position: absolute;

    right: 30px;

    opacity: 1;

}



.create_tickit .modal-header button.close img {

    max-width: 25px;

    height: auto;

}



.create_tickit .modal-header h5 {

    font-size: 22px;

    color: #132843;

}



.create_tickit .modal-header {

    border-bottom: unset;

}



.main_profile_form .form-row {

    background: #FFFFFF 0% 0% no-repeat padding-box;

    box-shadow: 0px 10px 20px #00000029;

    border: 2px solid transparent;

    border-radius: 9px;

    padding: 0.3rem 0.5rem;

    position: relative;

    margin-bottom: 1rem;

}



.main_profile_form label {

    font-size: 13px;

    color: rgba(0, 0, 0, 0.5);

    margin-bottom: 0px;

}



.main_profile_form .form-control {

    font-size: 15px;

    color: #242424;

    border: unset;

    padding: 0;

    height: auto;

    box-shadow: unset;

    position: relative;

    background: transparent;

}



.main_profile_form form {

    margin-bottom: 0;

}



.main_profile_form .btn_update {

    background: #F96703 0% 0% no-repeat padding-box;

    border-radius: 9px;

    text-align: center;

    padding: 1.2rem;

    font-size: 16px;

    color: #FFFFFF;

    width: 100%;

    transition: 0.32s all;

    border: none;

}





.main_profile_form .btn_update:hover {

    box-shadow: 0px 10px 20px #00000029;

}



.main_profile_form .form-row textarea {

    height: 70px;

}



</style>





    <div class="col-xl-12 ">

        <div class="row justify-content-end mt-3">



             <?php include('user_topbar.php')?>

            <?php global $current_user; wp_get_current_user(); 

                $welcome_text = get_field('welcome_text');

                $disaster_title = get_field('disaster_title');

                $disaster_sub_title = get_field('disaster_sub_title');

                $disaster_description = get_field('disaster_description');

                $disaster_pic = get_field('disaster_pic');

                $responders_title = get_field('responders_title');

                $responders_sub_title = get_field('responders_sub_title');

                $responders_description = get_field('responders_description');

                $responders_pic = get_field('responders_pic');

                $side_pic = get_field('side_pic');

            ?>



            <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-3">

                <div class="main_box_center_tickit chat_tickit col-xl-11">

                    <div class="col-xl-12">

                        <div class="top_profile d-flex justify-content-between align-items-center pb-3">

                            <?php echo do_shortcode('[my_tickets]'); ?>

                        </div>

                        

                    </div>

                </div> 

            </div>



            <div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex align-items-center  flex-wrap">

                <div class="col-xl-3 col-lg-3 col-md-3 col-12">

                    <div class="footer_logo">

                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.png" class="img-fluid social">

                    </div>

                </div>

                <div class="col-xl-8 col-lg-9 col-md-9 col-12">

                    <div class="side_right_footer ">

                        <div class="social_icon_sec">

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_linkdin.png" class="img-fluid social"></a>

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_fb.png" class="img-fluid social"></a>

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_twitter.png" class="img-fluid social"></a>

                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_instra.png" class="img-fluid social"></a>

                        </div>

                        <div class="linked_pages">

                            <a href="<?php echo get_site_url(); ?>">HOME</a>

                            <a href="<?php echo get_site_url(); ?>/what-we-do">WHAT WE DO</a>

                            <a href="<?php echo get_site_url(); ?>/world-cares-center">WORLD CARES CENTER</a>

                            <a href="<?php echo get_site_url(); ?>/training">TRAINING</a>

                            <a href="<?php echo get_site_url(); ?>/cordination">COORDINATION</a>

                            <a href="<?php echo get_site_url(); ?>/blogs">BLOG</a>

                            <a href="<?php echo get_site_url(); ?>/contact-us">CONTACT US</a>

                            <a href="<?php echo get_site_url(); ?>/donation-drive">DONATE</a>

                        </div>

                        <div class="privercy_pag">

                            <a href="<?php echo get_site_url(); ?>/terms-of-use">TERMS OF USE</a>

                            <a href="<?php echo get_site_url(); ?>/privacy-policy">PRIVACY POLICY  </a>

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

<?php get_footer('new'); } ?>