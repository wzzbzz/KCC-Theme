<?php /* Template Name: den */date_default_timezone_set("Asia/Manila"); 
    global $wpdb;
    $user_id = get_current_user_id();
    $events = $wpdb->get_results( "SELECT * FROM events_calendar WHERE user_id = '".$user_id."'",ARRAY_A); ?>

<!DOCTYPE html>
    <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!--<meta http-equiv="refresh" content="60"> -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
            <!-- Bootstrap Core CSS -->
            <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
      
            <link href='<?php echo get_template_directory_uri(); ?>/css/fullcalendarxx.min.css' rel='stylesheet' />
            <link href='<?php echo get_template_directory_uri(); ?>/css/AdminLTE.min.css' rel='stylesheet' />
            <link href='<?php echo get_template_directory_uri(); ?>/assets/css/style.css' rel='stylesheet' />
            <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
            <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
            <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
            <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
            <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
            <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">

            <style>.container {min-height:240px;}</style>
        </head>

        <body class="main_all_bg_Sec" style="background: #ECF0F5;">
        <?php astra_entry_top(); ?>
        <header class="entry-header <?php astra_entry_header_class(); ?>">
        

	</header>

            <?php include('user-sidebar.php');?>

             <?php include('user_topbar.php');?>

                <div class="container">Abhishek</div>



             <?php include('user-footer.php');?>