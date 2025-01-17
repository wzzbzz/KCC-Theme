<?php 
/* Template Name: Annoucement Detail */
if ( is_user_logged_in() ) {
get_header('new'); ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css">
         <link
      rel="shortcut icon"
      type="image/jpg"
      href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"
    />

    <!-- css links -->
    <link
      href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css"
      rel="stylesheet"
    />
    <link
      href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css"
      rel="stylesheet"
    />
    <link
      href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css"
      rel="stylesheet"
    />
    <link
      href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css"
      rel="stylesheet"
    />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annoucement Detail</title>

    <!-- Favicon -->    
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png"> 

    <!-- css links -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.4.1.1/animate.min.css"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">


    <style>
       .annoucement_detail_main_banner .blog_detail_box img{
width: 100%;
        }
       .annoucement_detail_main_content .top_title h5{
            font-size: 35px;
        }
        @media only screen and (max-width:1027px){
            .annoucement_detail_main_content .top_title h5{
                font-size: 22px;
            }
        }
    </style>
</head>
<body class="main_all_bg_Sec">
    
       <?php include('usermenucommon.php')?>


    <div class="col-xl-12 annoucement_detail_main_content">
        <div class="row justify-content-end mt-3">
            <?php include('user_topbar.php')?>
        </div>        
         <?php $img = get_the_post_thumbnail_url(get_the_ID(),'large'); 
            
            ?>
        <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex flex-wrap">
                <div class="col-xl-12 col-lg-812 col-md-12 annoucement_detail_main_banner">
                    <div class="blog_detail_box">
                        <img src="<?php echo $img; ?>" class="img-fluid" alt="image">
                        <div class="btn_list">
                            <button class="btn btn_front_page">
                                Publish to Front page
                            </button>
                            <button class="btn btn_front_page">
                                Edit Annoucement
                            </button>
                            <button class="btn btn_front_page" href="javascript:" data-toggle="modal" data-target="#deleteannoucement">
                                Delete
                            </button>
                        </div>
                    </div>
                    <div class="all_about_blog ">
                        <div class="row">
                            <div class="col-xl-7 col-lg-8 col-md-8">
                                <h4><?php echo get_the_title(); ?></h4>                            
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-4 text-right">
                                <small>Aug 29, 2022</small>
                            </div>
                        </div>
                        <p><?php echo get_the_content(); ?></p>
                      

                    </div>
                </div>
                             
            </div>

           <?php include('common_user_footer.php')?>

        </div>



    </div>


<?php get_footer('new'); }?>