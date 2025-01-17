<?php
/* Template Name: Super Admin Menu */

// Set timezone
date_default_timezone_set("Asia/Manila");

// Start session and get current user ID
session_start();
$user_id = get_current_user_id();

// Get user's group IDs
$gid = learndash_get_users_group_ids($user_id);

// Prepare arguments for WP query
$currentPage = get_query_var('paged');
$searchArg = [
    'post_type' => 'tribe_events',
];

if (!empty($currentPage)) {
    $searchArg['paged'] = $currentPage;
}

if (!empty($_GET['q'])) {
    $searchArg['s'] = $_GET['q'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">

    <!-- Stylesheets -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href='<?php echo get_template_directory_uri(); ?>/css/fullcalendarxx.min.css' rel='stylesheet' />
    <link href='<?php echo get_template_directory_uri(); ?>/css/AdminLTE.min.css' rel='stylesheet' />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">

    <style>
        .temp-calendar {
            justify-content: flex-end !important;
            display: flex;
        }

        .logout-button {
            width: 100% !important;
            left: -10px !important;
        }

        .dropdown-menu {
            position: absolute;
            top: 47px;
            right: 10px;
            z-index: 1000;
            left: -168px;
            width: 400px;
            padding: .5rem 0;
            font-size: 1rem;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem;
        }

        @media (min-width:768px) and (max-width:992px) {
            .temp-calendar {
                justify-content: flex-end !important;
                display: inline !important;
            }

            .top_title {
                margin-left: 70px !important;
            }

            .serch_sec_top {
                margin-left: 70px !important;
                margin-bottom: 50px !important;
            }

            .right_top_sec {
                display: flex;
                align-items: center;
                justify-content: end;
                margin-top: -115px;
            }
        }

        .modal .modal-dialog {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-floating > .form-control:focus,
        .form-floating > .form-control:not(:placeholder-shown) {
            padding-top: 1.8rem;
            padding-bottom: 0.625rem;
        }

        .form-floating > .form-control:focus ~ label,
        .form-floating > .form-control:not(:placeholder-shown) ~ label,
        .form-floating > .form-select ~ label {
            opacity: 0.55;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
            font-size: 15px;
        }

        .form_time1 {
            margin: 0px 42px;
        }

        .form_time1 .form-floating1 {
            width: 50%;
            float: left;
        }

        .form_time1 .form-floating2 {
            width: 50%;
            float: left;
        }

        .form-check-inline {
            display: inline-flex;
            align-items: center;
            margin-right: .75rem;
        }

        .modal-footer {
            display: flex;
            justify-content: center;
            border: none;
        }

        .modal-footer button {
            background: #F96703;
            border-radius: 9px;
            padding: 10px 20px;
            color: #ffffff;
            font-size: 17px;
            width: 300px;
        }

        .fc-day {
            text-align: center;
            margin-bottom: 5px;
            padding: 4px;
            color: #000;
            width: 20px;
            border-radius: 50%;
            align-self: flex-end;
        }

        .fc-event {
            display: block;
            font-size: .85em;
            line-height: 1.3;
            border-radius: 3px;
            border: 1px solid #FFC489;
        }

        .fc-day-grid-event .fc-time {
            font-weight: 700;
            display: none !important;
        }

        .fc-toolbar h2 {
            color: #0E559F;
            font-weight: 700;
            padding-left: 10px;
        }

        .fc-button-group button {
            background: #0E559F;
            color: #fff;
            margin: 0px !important;
        }

        .fc-widget-header th {
            border-color: #ddd;
            color: #71706F;
            font-size: 16px;
            font-family: 'Poppins';
            font-weight: 200;
            padding: 4px 5px;
            border: none;
            text-align: left;
            padding-left: 10px;
        }

        .fc-event,
        .fc-event-dot {
            background-color: #FFC489;
        }
        .links{
            margin-left: 40px;
            font-weight: bold;
        }
        .linklist{
            margin-left: 30px;
        }
    </style>
</head>

<body class="main_all_bg_Sec remove-page-space">
    <?php include('user-sidebar.php'); ?>
    <div class="row justify-content-end temp-calendar">
        <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
            <?php include('user_topbar.php'); ?>                
        </div>
    </div>

    <div class=" col-xl-12">
        <div class="row justify-content-end d-flex" style="display: flex; justify-content: end;">
            <div class="col-xl-11 col-lg-11 col-md-10 col-10 d-flex align-items-center mt-0 flex-wrap">


                <div class="row linklist">
                    <h3>Super Admin Utilities</h3>
                </div>
                <hr>
                <div class="row links">
                    <a href="/learndash-course-report/">
                        <i class="fas fa-file-alt"></i> Learn Dash Completion Report
                    </a>
                </div>
                <div class="row links">
                    <a href="/learndash-quiz-reports/">
                        <i class="fas fa-file-alt"></i> Learn Dash Quiz Report
                    </a>
                </div>

                <div class="row links">
                    <a href="/email-log/">
                        <i class="fas fa-file-alt"></i> Email Log
                    </a>
                </div>
                <div class="row links">
                    <a href="/user-demographic-report/">
                        <i class="fas fa-file-alt"></i> User Demographics
                    </a>
                </div>

    
            </div>
    </div>

    <?php include('user-footer.php'); ?>

    <script>
        $(document).ready(function() {
           
        });
    </script>


</body>
</html>
