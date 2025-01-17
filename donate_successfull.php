<?php
/* Template Name: Donate Successfull */
if ( is_user_logged_in() ) {
get_header('new'); ?>
<style type="text/css">
    .donate-page-success .image img{
        max-height: 314px;
        min-height: 314px;
        border-radius: 9px;
        width: 100%;
    }
    .donate-page-success .main-title h5{
        font-size: 26px;
        color: #242424;
    }
    .donate-page-success .main-title p{
        color: #71706F;
        opacity: 1;
        font-size: 16px;
    }
    .donate-page-success .email a span i{
        color: #F96703;
        opacity: 0.4;
        font-size: 22px;
    }  
    .donate-page-success .email a{
        color: #71706F;
        opacity: 1;
        font-size: 16px;
    }
    .donate-page-success .number a span i{
        color: #F96703;
        opacity: 0.4;
        font-size: 22px;
    }  
    .donate-page-success .number a{
        color: #71706F;
        opacity: 1;
        font-size: 16px;
    }
    .donate-page-success .address i{
       color: #F96703;
        opacity: 0.4;
        font-size: 22px;
    }
    .donate-page-success .address p{
        color: #71706F;
        opacity: 1;
        font-size: 16px;
    }
    .donate-page-success .donation_tab_pills{
        padding: 30px 30px; 

    }
    .donate-page-success .grey_bg_Sec h3{
        text-align: center;
        font-size: 34px;
        color: #242424;
        margin-top: 40px;
    }
    .donate-page-success .grey_bg_Sec p{
        font-size: 16px;
        color: #242424;
        margin-top: 15px;
        text-align: center;
    }
    .donate-page-success .grey_bg_Sec .btn-primary{
        color: #FFFFFF;
        text-transform: uppercase;
        font-size: 18px;
        height: 50px;
        width: 100%;
        background: #F96703 0% 0% no-repeat padding-box;
        border-radius: 12px;
        margin-top: 60px;
        border: 0;
    }
    .donate-page-success .grey_bg_Sec .btn-primary .active{
        color: #FFFFFF;
        text-transform: uppercase;
        font-size: 18px;
        height: 50px;
        width: 100%;
        background: #F96703 0% 0% no-repeat padding-box!important;
        border-radius: 12px;
        margin-top: 60px;
        border: 0;
    }

</style>
<div class="col-xl-12 donate-page-success">
    <div class="row justify-content-end mt-3">
        <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-4">
            <div class="donation_tab_pills">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="image">
                            <img src="https://via.placeholder.com/593x314" class="img-fluid donate_img-view" alt="image">
                        </div>
                        <div class="main-title">
                            <h3 class="py-3">Cause Name</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                        </div>
                        <div class="questions_sec">
                            <h5>Questions?</h5>
                            <h3>Contact us at:</h3>
                        </div>
                        <div class="d-flex justify-content-between w-100 mt-3">
                            <div class="email">
                                <a href="mailto:lorloff@worldcares.org" title="lorloff@worldcares.org"><span><i class="fa fa-envelope mr-2" aria-hidden="true"></i></span>lorloff@worldcares.org</a>
                            </div>
                            <div class="number">
                                <a href="tel:212-563-7570" title="212-563-7570"><span><i class="fa fa-phone mr-2" aria-hidden="true"></i></span>212-563-7570</a>
                            </div>
                        </div>
                        <div class="d-flex w-100 mt-3">
                            <div class="address">
                                <i class="fa fa-building mr-2" aria-hidden="true"></i>
                            </div>
                            <div class="address">
                                <p>World Cares Center <br>520 8th Avenue<br> Suite 201B<br> New York, NY 10018</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <fieldset id="step0" class="grey_bg_Sec">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="title_details">
                                        <h5>World Cares Center</h5>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/donate-vector.png" class="img-fluid">
                                </div>
                                <div class="col-md-12">
                                    <h3>Congratulation, Your Donation <br> Is Successfully</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary">
                                        DONATE MORE
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>
<?php get_footer('new'); ?>
<script src="https://js.stripe.com/v3/" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<?php } ?>