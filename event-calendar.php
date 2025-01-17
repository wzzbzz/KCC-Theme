<?php
/* Template Name: Calendar */

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

// Get events
$events = get_posts($searchArg);
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
    </style>
</head>

<body class="main_all_bg_Sec remove-page-space">
    <?php include('user-sidebar.php'); ?>
    <div class="row justify-content-end temp-calendar">
        <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
            <?php include('user_topbar.php'); ?>                
        </div>
    </div>

    <div class="row calendar-row">
        <section class="content">
            <div class="col-md-10">
                <div class="box box-success">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered table-hover" style="margin-right:-10px">
                                    <div id="calendar" class="col-centered"></div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include('user-footer.php'); ?>

    <script>
        $(document).ready(function() {
            $('#event_edit_d').on('click', function() {
                $('#ModalDetail').modal('hide');
                $('#ModalEdit').modal('show');
            });

            $(document).on('click', '#confirm_delete_event', function() {
                var event_id = $(this).attr('data-id');
                $.ajax({
                    type: 'post',
                    url: "<?php echo get_template_directory_uri(); ?>/DeleteEvent.php",
                    data: { id: event_id },
                    success: function(result) {
                        console.log(result);
                        window.location.href = window.location.href;
                    }
                });
                return false;
            });

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'month,listMonth',
                },
                editable: true,
                eventLimit: true,
                selectable: true,
                selectHelper: true,
                timeFormat: "h:mma",
                defaultView: 'month',
                scrollTime: '08:00',
                eventOverlap: false,
                select: function(start, end) {
                    $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD'));
                    $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
                    $('#ModalAdd').modal('show');
                },
                eventRender: function(event, element) {
                    element.bind('click', function() {
                        $('#ModalEdit #id').val(event.id);
                        $('#ModalEdit #post_id').val(event.id);
                        $('#ModalEdit #title_edit').val(event.title);
                        $('#ModalEdit #start_date_edit').val(event.start);
                        $('#ModalEdit #start_time_edit').val(event.start_time);
                        $('#ModalEdit #location_edit').val(event.location);
                        $('#ModalEdit #organization_edit').val(event.organization);
                        $('#ModalEdit #details_edit').val(event.details);
                        $('#ModalEdit #group_name_edit').val(event.group_name);
                        $('#ModalEdit #publish_type_edit').val(event.publish_type);
                        $('#ModalEdit #publish_type_edit1').val(event.publish_type);

                        var event_status = event.event_status === 'draft' ? 'In Review' : event.event_status;

                        $('#event_delete_d').attr('data-id', event.id);
                        $('#val_cal').val(event.id);
                        $('#eventID').attr('data-id', event.id);
                        $('#event_delete_d_ap').attr('data-id', event.id);
                        $('#event_edit_d').attr('data-id', event.id);
                        $('#confirm_delete_event').attr('data-id', event.id);
                        $('#event_title_d').html(event.title);
                        $('#event_location_d').html(event.location);
                        $('#event_organization_d').html(event.organization);
                        $('#event_detail_d').html(event.details);
                        $('#event_group').html(event.group_name);
                        $('#event_status_d').html(event_status);
                        $('#event_start_d').html(moment(event.start).format('YYYY-MM-DD'));

                        if (<?php echo get_current_user_id(); ?> != "" && event._EventOrganizerID != "") {
                            if (parseInt(<?php echo get_current_user_id(); ?>) === parseInt(event._EventOrganizerID)) {
                                $('#navIDDel').show();
                                $('#navIDEdit').show();
                            } else {
                                $('#navIDDel').hide();
                                $('#navIDEdit').hide();
                            }
                        } else {
                            $('#navIDDel').hide();
                            $('#navIDEdit').hide();
                        }
                        var post_id  =  $('#event_edit_d').attr('data-id');
                        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
                        $.ajax({
                            type: "post",
                            dataType: "json",
                            url: ajaxurl,
                            data: { "action": "redirect_event_request", "post_id": post_id },
                            success: function (response) {
                                window.open(response.data, '_blank');
                            }
                        });
                        // $('#ModalDetail').modal('show');
                    });
                },
                events: [
                    <?php foreach ($events as $event):
                        $group_id = get_post_meta($event->ID, 'group_name', true);
                        $group = get_post($group_id);
                        $_EventStartDate = get_post_meta($event->ID, '_EventStartDate', true);
                        $_EventOrganizerID = get_post_meta($event->ID, '_EventOrganizerID', true);
                        $_EventEndDate = get_post_meta($event->ID, '_EventEndDate', true);
                        $publish_type = get_post_meta($event->ID, 'publish_type', true);
                        $location = get_post_meta($event->ID, 'location', true);
                        $organization = get_post_meta($event->ID, 'organization', true);
                        $color = get_post_meta($event->ID, 'color', true);
                        $group_name = get_post_meta($event->ID, 'group_name', true);
                        $group_title = $group->post_title;
                        $start = explode(" ", $_EventStartDate)[0];
                        $end = explode(" ", $_EventEndDate)[0];
                    ?> {
                        id: "<?php echo $event->ID; ?>",
                        title: "<?php echo $event->post_title; ?>",
                        location: "<?php echo $location; ?>",
                        organization: "<?php echo $organization; ?>",
                        details: "<?php echo $event->details; ?>",
                        start: "<?php echo $start; ?>",
                        end: "<?php echo $end; ?>",
                        color: "<?php echo $color; ?>",
                        publish_type: "<?php echo $publish_type; ?>",
                        group_name: "<?php echo $group_name; ?>",
                        group_title: "<?php echo $group_title; ?>",
                        event_status: "<?php echo $event->post_status; ?>",
                        start_time: "<?php echo date("H:i", strtotime($_EventStartDate)); ?>",
                        start_date: "<?php echo date("d/m/Y", strtotime($_EventStartDate)); ?>",
                        _EventOrganizerID: "<?php echo $_EventOrganizerID; ?>",
                        end_time: "<?php echo date("H:i", strtotime($_EventEndDate)); ?>",
                        end_date: "<?php echo date("d/m/Y", strtotime($_EventEndDate)); ?>",
                    },
                    <?php endforeach; ?>
                ]
            });
        });
    </script>

    <?php include('event-calendar_modal.php'); ?>
</body>
</html>
