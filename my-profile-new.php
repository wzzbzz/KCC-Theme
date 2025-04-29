<?php 
/* Template Name: My Profile */ 
die("hi");
 if ( is_user_logged_in() ) {
get_header('new'); ?>

<style type="text/css">
    
    .main_box_center_tickit {
    background: #FFFFFF 0% 0% no-repeat padding-box;
    box-shadow: 0px 10px 20px #00000029;
    border-radius: 20px;
    padding: 3rem 1.5rem 4rem 1.5rem;
}

.side_profile_view {
    border-right: 1px solid #DDDDDD;
}

.top_profile {
    border-bottom: 1px solid #DDDDDD;
}   

.top_profile h4 {
    font-size: 20px;
    color: #000;
    font-weight: 600;
}

.top_profile p {
    font-size: 12px;
    color: #71706F;
    padding: 0.5rem 0 0.8rem 0;
}

.nav-pills .nav-link {
    border-radius: 0.25rem;
}

.faq_tab_pills .nav-pills .nav-item a.nav-link {
    font-size: 15px;
    color: #242424;
    font-weight: 500;
    padding: 0 2rem 1rem 0;
}

.faq_tab_pills .nav-pills .nav-item a.nav-link.active {
    background: unset;
    color: #F96703;
    font-weight: 600;
}

.accordian_Sec #accordion .card {
    border: transparent;
    box-shadow: 30px 30px 60px #0000010d;
    background: hsl(0, 0%, 97%) 0% 0% no-repeat padding-box;
    border-radius: 8px;
    margin-bottom: 1.5rem;
}

.accordian_Sec #accordion .card-header {
    background-color: transparent;
    border: unset;
    padding: 0.8rem 1rem;
}

.accordian_Sec #accordion .card .btn.btn-link {
    color: #242424;
    font-size: 14px;
    font-weight: 600;
    text-decoration: unset;
    text-align: left;
    width: 100%;
    padding: 0;
}

.panel-title > .btn-link.collapsed:before {
    float: right !important;
    content: "\f067";
    color: #132843;
}

.panel-title > .btn-link:before {
    float: right !important;
    font-family: FontAwesome;
    content: "\f068";
    padding-right: 5px;
    color: #132843;
    padding: 0 1rem;
}

.accordian_Sec #accordion .card-body {
    font-size: 13px;
    color: #222222;
    line-height: normal;
    padding: 1rem 1rem;
}

.still_have {
    background: #F7F7F7 0% 0% no-repeat padding-box;
    border-radius: 17px;
    padding: 1rem 1rem;
    display: flex;
    align-items: center;
    margin: 1rem 0;
    max-width: 60%;
    margin-left: auto;
    margin-right: 60px;
}

.still_have_ques {
    display: flex;
    align-items: center;
}

.still_have_ques h5 {
    font-size: 18px;
    color: #242424;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.still_have_ques p {
    font-size: 12px;
    color: #71706F;
}


.update_btn button.btn_update {
    background: #F96703 0% 0% no-repeat padding-box;
    border-radius: 9px;
    text-align: center;
    padding: 1.2rem;
    font-size: 16px;
    color: #FFFFFF;
    width: 100%;
    transition: 0.32s all;
}

.update_btn button.btn_update:hover {
    box-shadow: 0px 10px 20px #00000029;
}

.main_box_center_tickit p.um_request_name {
    display: none;
}

.main_box_center_tickit .um-account-side ul li a.current span {
    color: #fff;
}

.main_box_center_tickit .um-account-side ul li {
    background: transparent;
    padding-bottom: 5px !important;
}

.main_box_center_tickit .um-account-side ul li a.current {
    color: #fff;
    background: #F96703 0% 0% no-repeat padding-box;
    box-shadow: 0px 10px 20px #00000029;
    border-radius: 9px;
}
.main_box_center_tickit .um-account-side ul {
    background: #F8F8F8 0% 0% no-repeat padding-box;
    border: 1px solid #E8E8E8;
    border-radius: 15px;
    margin: 1rem auto;
    padding: 0.5rem 0.5rem !important;
    width: 100%;
    max-width: 270px;
    margin: auto !important;
}

.main_box_center_tickit .um-account-side ul li a.current:hover span {
    color: #fff;
}

.main_box_center_tickit .um-account-side ul li a:hover span {
    color: #fff;
    font-weight: 600;
}

.main_box_center_tickit .um-account-side ul li a:hover {
    color: #fff;
    background: #F96703 0% 0% no-repeat padding-box;
    box-shadow: 0px 10px 20px #00000029;
    border-radius: 9px;
}

div#pills-tabContent .col-xl-5 {
    padding-left: 0;
    padding-right: 0;
}

div#pills-tabContent .row {
    gap: 0 10px;
}

.main_box_center_tickit .um-account-profile-link a {
    font-size: 13px;
    color: #f96703;
    font-weight: 600;
}

.main_box_center_tickit .um-account-name a:hover {
    color: #f96703;
}

.main_box_center_tickit .um-account-profile-link a:hover {
    color: #f96703;
}


ul#pills-tab li h3 {
    font-size: 15px;
    color: #242424;
    font-weight: 500;
    padding: 0 2rem 1rem 0;
    cursor: pointer;
}


ul#pills-tab li.active h3 {
    background: unset;
    color: #F96703;
    font-weight: 600;
}


.mian_faq_sec ul li a {
    font-size: 15px;
    color: #242424;
    font-weight: 500;
    padding: 0 2rem 1rem 0;
}

.mian_faq_sec ul li a.active {
    background-color: transparent !important;
    color: #F96703 !important;
    font-weight: 600;
}

.mian_faq_sec ul li a:hover {
    color: #F96703 !important;
}

.accordian_Sec .card-header {
    background-color: transparent;
    border: unset;
    padding: 0.8rem 1rem;
}

.accordian_Sec .card-header .btn.btn-link {
    color: #242424;
    font-size: 14px;
    font-weight: 600;
    text-decoration: unset;
    text-align: left;
    width: 100%;
    padding: 0;
}

.accordian_Sec .card-body p {
    font-size: 13px;
    color: #222222;
    line-height: normal;
        padding: 2px;
}

.accordian_Sec .card-body  {
  padding: 1rem 1rem;
}

.mian_faq_sec .accordian_Sec .card {
    margin-bottom: 10px;
     /*max-width: 500px;*/
}

#serch_sec_top .form-control {
    font-size: 22px !important;
    color: #3D62A9 !important;
    background: transparent !important;
    border: transparent !important;
    border-left: 4px solid #F96703 !important;
    height: 50px !important;
    box-shadow: unset !important;
    border-radius: 5px;
    padding: 0.375rem 0.75rem !important;
}

#serch_sec_top .form-control::placeholder {
    font-weight: 400;
    color: #3d62a95c;
}

.um-account-tab-helpSupport .um-account-heading.uimob340-hide {
    display: none;
}

.um-account-tab-helpSupport .um-col-alt.um-col-alt-b {
    display: none;
}

.um-account-side ul li:nth-child(3) {
    display: none;
}

.hide-accordian-cls {
    display: none;
}


.um-profile-edit ul {
    top: 0px;
    width: auto;
    left: 0px;
    right: auto;
    text-align: right;
    position: relative;
    font-size: 17px;
}

</style>

    <div class="col-xl-12 ">
        <div class="row justify-content-end mt-3">
            <?php include('user_topbar.php');?> 
			
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
                <div class="main_box_center_tickit  col-xl-11 my_pro_head">
                    <div class="row">

                        <div class="col-xl-12">

                            <div class="support-dashboard-user mypro">

                                <?php the_content(); ?> 

                            </div>

                        </div>
                       
                        
                    </div>

                    <div class="row">
                        <div class="col-xl-10 still_have flex-wrap justify-content-center">
                                <div class="col-xl-9 col-lg-9 col-md-12">
                                    <div class="still_have_ques">
                                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/question_still.png" class="img-fluid mr-2">
                                            <div>
                                                <h5>Still have questions?</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                    </div>
                                 </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 px-0">
                                    <div class="update_btn">
                                        <a href="<?php echo get_site_url(); ?>/my-tickets-support/"><button class="btn btn_update">Get in touch</button></a>
                                    </div>
                            </div>
                        </div>
                </div>


                <div class="faq_tab_pills hide-accordian-cls mt-4">
                                        
                                        <div class="tab-pane fade accordian_Sec" id="pills-know" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                <div class="row " id="accordion">                                                   
                                                    <div class="col-xl-6">
                                                        <div class="card">
                                                            <div class="card-header" id="heading3">
                                                                <h5 class="mb-0 panel-title">
                                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseTwo">
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod.
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                                                <div class="card-body">
                                                                   Vitae suscipit tellus mauris a diam maecenas. Netus et malesuada fames ac turpis egestas integer. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Magna fringilla urna porttitor rhoncus dolor purus.
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                        
                                                    </div>    
                                                </div>                                                
                                            </div>
                                        </div>            

                </div> 
            </div>

            
            <div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex align-items-center  flex-wrap">
                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                    <div class="footer_logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.png" class="img-fluid logos">
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
                        <p>COPYRIGHT © 202333 ALL RIGHTS RESERVED</p>
                    </div>
                </div>
            </div>

        </div>        
    </div>

 <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/jquery.min.js"></script>
    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/popper.min.js"></script>
    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/bootstrap.min.js"></script>
    <script src="https://knowledge.communication.worldcares.org//wp-content/themes/astra/assets/js/owl.carousel.min.js"></script>

<?php get_footer('new'); } ?>