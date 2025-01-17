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
     <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/um-fonticons-ii.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/um-fonticons-fa.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/um-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/um-profile.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/um-crop.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/um-modal.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/um-account.css">
    <link rel='stylesheet'  href='<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/um-fileupload.css' />
    <link rel='stylesheet'  href='<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/um-misc.css' />
    <link rel='stylesheet'  href='<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/pickadate/default.css' />
    <link rel='stylesheet'  href='<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/pickadate/default.date.css'  />
    <link rel='stylesheet'  href='<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/pickadate/default.time.css'/>
    <link rel='stylesheet'  href='<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/um-raty.css'  />
    <link rel='stylesheet' href='<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/simplebar.css' />
    <link rel='stylesheet' href='<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/um-tipsy.css'  />
    <link rel='stylesheet' href='<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/um-responsive.css' />
    <link rel='stylesheet' href='<?php echo get_site_url(); ?>/wp-content/plugins/ultimate-member/assets/css/um-old-default.css' /> -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">  
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">  
    <link rel="stylesheet" type="text/css" href="https://knowledge.communication.worldcares.org/wp-content/themes/astra/assets/css/style_new.min.css"/>
	
</head>
<body class="main_all_bg_Sec">
    
    <div class="main_side_bar_left abhi">
        <?php include('sidebar_menu.php');?>
    </div>
    