<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); 
    require_login_for_protected_pages();
    ?>

    <!-- Favicon -->   
    
    <link rel="shortcut icon" type="image/jpg" href="<?php echo site_url()?>/wp-content/uploads/2023/12/wcc_favicon.png"> 

    <!-- css links -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/evolution.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">  
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">  
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/css/style_new.min.css"/>
    <!-- <link rel='stylesheet' id='elementor-icons-css' href='<?= wp_plugin_dir();?>/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.25.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='<?= wp_plugin_dir();?>/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='<?= wp_plugin_dir();?>/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' type='text/css' media='all' />
    <script src="<?= wp_plugin_dir();?>/addon-elements-for-elementor-page-builder/assets/js/iconHelper.js?ver=1.0" id="eae-iconHelper-js"></script>
     <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/css/style_new.min.css"/> -->
	
</head>
<body class="main_all_bg_Sec">
    
    <div class="main_side_bar_left abhi">
        <?php include('sidebar_menu.php');?>
    </div>
    