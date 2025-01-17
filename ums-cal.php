<?php
    /* Template Name: ums-cal */
    require_once('bdd.php');
    include('header_user.php');
    date_default_timezone_set("Asia/Manila");
    $bdd = new PDO('mysql:host=localhost;dbname=rootmrgreen_wcc;charset=utf8mb4', 'wccalexa', 'oIy1m183&');
    $sql = "SELECT id, title, start, end,organization,color,location,details FROM events_calendar ";
    $req = $bdd->prepare($sql);
    $req->execute();
    $events = $req->fetchAll();
    
    ?>
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

            <!-- FullCalendar -->
           

            <!-- FullCalendar -->
            <!-- <link href='css/fullcalendar.css' rel='stylesheet' /> -->
            <link href='<?php echo get_template_directory_uri(); ?>/css/fullcalendarxx.min.css' rel='stylesheet' />
            <link href='<?php echo get_template_directory_uri(); ?>/css/sweetalert.css' rel='stylesheet' />
            <link href='<?php echo get_template_directory_uri(); ?>/css/AdminLTE.min.css' rel='stylesheet' />
            <link href='<?php echo get_template_directory_uri(); ?>/assets/css/style.css' rel='stylesheet' />
            <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
            <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
            <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
            <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
            <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
            <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
            <!-- <link href='css/fullcalendar.css' rel='stylesheet' /> -->


<link href="<?php echo get_template_directory_uri(); ?>/umslib/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/umslib/css/responsive.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/umslib/css/main.css" rel="stylesheet">                

<style type="text/css">

.swal2-input{
    width: 100% !important;
    margin-left: 0 !important;
    height: 2.5em !important;
    margin-right: 0 !important;
}
textarea.swal2-input{
    height: 5em !important;
    padding: 0.5em 0.5em !important;
}
.swal2-close{
    outline: none;
}
</style>


        </head>

        <body class="main_all_bg_Sec" style="background: #ECF0F5;">

            <?php include('user-sidebar.php');?>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap calendar-header">
                <div class="col-xl-3 col-lg-3 col-md-4 order-lg-1 order-1">
                    <div class="top_title">
                        <h5><?php the_title()?></h5>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-8 order-lg-2 order-3">
                    <div class="serch_sec_top">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search for resources, reports, forms etc">
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-8 order-lg-3 order-2">
                    <div class="right_top_sec">
                        <div class="notification_sec btn-group"> <?php echo basename(__FILE__); ?> <!-- Outputs the filename -->
                            <a href="#"  class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/notifiocation_icon.png" class="img-fluid"></a>

                            <div class="dropdown-menu dropdown-menu-right">                                
                                <div class="title_notification">
                                    <div class="col-xl-9 col-lg-8">
                                        <h4>Notifications</h4>
                                        <p>Catch up on updates form all your accounts.</p>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 text-right">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png" class="img-fluid"><br>
                                        <a href="#">View All</a>
                                    </div >
                                </div>
                                <div class="mian_notification_sec">
                                    <img src="images/notification_icon.png" class="img-fluid">
                                    <div class="w-100">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>Notification Title</h5>
                                            <span>2 hrs ago</span>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                </div>
                                <div class="mian_notification_sec">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon4.png" class="img-fluid">
                                    <div class="w-100">  
                                        <div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5>User Name</h5>
                                                <span>2 hrs ago</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p>Requested to join to your <br> <span>Group Name.</span></p>
                                                <div>
                                                    <a href="#" class="mr-2">Approve</a>
                                                    <a href="#" class="red">Deny</a>
                                                </div>
                                            </div>
                                        </div>                           
                                    </div>
                                </div>
                                <div class="mian_notification_sec">
                                    <img src="images/notification_icon3.png" class="img-fluid">
                                    <div class="w-100">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>Notification Title</h5>
                                            <span>2 hrs ago</span>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                </div>
                                <div class="mian_notification_sec">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon4.png" class="img-fluid">
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>Notification Title</h5>
                                            <span>2 hrs ago</span>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                </div>
                                <div class="mian_notification_sec">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon2.png" class="img-fluid">
                                    <div class="w-100">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>Notification Title</h5>
                                            <span>2 hrs ago</span>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                </div>
                                <div class="mian_notification_sec">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/notification_icon3.png" class="img-fluid">
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>Notification Title</h5>
                                            <span>2 hrs ago</span>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                </div>
                            </div>

                        </div> 
                        <div class="notification_sec"> <?php echo basename(__FILE__); ?> <!-- Outputs the filename -->
                        <div>D:\worldcaressvn\wp-content\themes\astra\ums-cal.php</div>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chat_icon.png" class="img-fluid"></a>
                        </div> 
                        <?php $avatar_url = get_avatar_url(get_avatar( $curauth->ID, 100 ),     
                         array("size"=>50)); 
                         $current_user = wp_get_current_user();
                         $current_user_id = $current_user->ID;
                         $fname = get_user_meta( $current_user_id, 'fname' , true );
                         $pic = get_user_meta( $current_user_id, 'file' , true );
                         ?>                        
                         <div class="back_bg">
                             <div class="dropdown right_dropdown">
                                 <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <?php echo $fname; ?> <img src="<?php echo $pic ; ?>" class="img-fluid mr-2 profile_icn"><i class="fas fa-ellipsis-v"></i>
                                 </button>
                                 <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuButton" >
                                     <button class="dropdown-item profile_main_drop" onclick="window.location.href='<?php echo get_site_url(); ?>/account/';" type="button">
                                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/my_profile_icon.png"   class="img-fluid"> My Profile
                                     </button>
                                     <button class="dropdown-item" onclick="window.location.href='<?php echo get_site_url(); ?>';" type="button">
                                         <!-- <img src="<?php /*echo get_template_directory_uri();*/ ?>/assets/images/logout_icon.png" class="img-fluid"> Logout -->
                                         <a href="<?php echo wp_logout_url('<?php echo get_site_url(); ?>/') ?>">Log out</a>
                                     </button>                                       
                                 </div>
                             </div>
                         </div>                      
                    </div>
                </div>
                
            </div>

            <div class="row calendar-row">
                <section class="content">
                    <div class="col-md-10">
                        <div class="box box-success">

                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="example1" class="table table-bordered table-hover"
                                            style="margin-right:-10px">
                                            <div id="calendar" class="col-centered">
                                            </div>


                                        </table>

                                    </div>
                                    <!--col end -->

                                </div>
                                <!--row end-->

                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col (right) -->


                    <?php include('event-calendar_modal.php');?>


            </div>
            <div class="col-xl-11 col-lg-11 col-md-10 col-10 main_footer_sec d-flex align-items-center  flex-wrap calendar-footer">
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
                            <a href="<?php echo get_site_url(); ?>/">HOME</a>
                            <a href="<?php echo get_site_url(); ?>/what-we-do/">WHAT WE DO</a>
                            <a href="<?php echo get_site_url(); ?>/world-cares-center/">WORLD CARES CENTER</a>
                            <a href="<?php echo get_site_url(); ?>/training/">TRAINING</a>
                            <a href="<?php echo get_site_url(); ?>/cordination/">COORDINATION</a>
                            <a href="<?php echo get_site_url(); ?>/blogs/">BLOG</a>
                            <a href="<?php echo get_site_url(); ?>/contact-us/">CONTACT US</a>
                            <a href="#">DONATE</a>
                        </div>
                        <div class="privercy_pag">
                            <a href="<?php echo get_site_url(); ?>/terms-of-use/">TERMS OF USE</a>
                            <a href="<?php echo get_site_url(); ?>/privacy-policy/">PRIVACY POLICY  </a>
                            <a href="#">SITEMAP</a>
                        </div>                            
                    </div>
                    <div class="copy_right_Sec">
                        <p>COPYRIGHT © <?php echo date('Y');?> ALL RIGHTS RESERVED</p>
                    </div>
                </div>
            </div>
            <!-- /.container -->

            <!-- jQuery Version 1.11.1 -->
            <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

            <!-- FullCalendar -->
            <script src='<?php echo get_template_directory_uri(); ?>/js/moment.min.js'></script>
            <!-- <script src='js/fullcalendar.min.js'></script> -->
            <script src="fullcalendar/lib/jquery.min.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/umslib/js/sweetalert2.all.min.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/umslib/js/main.js"></script>   

                               
<script>
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    timeZone: 'UTC',
      headerToolbar: {
        left: 'prev,next',
        center: 'title prev,next',
        right: 'today,prev,next,dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      dayMaxEvents: true, // allow "more" link when too many events

    height: 650,
    events: 'fetch-event.php',
    
    selectable: true,
    dayRender: function(info)
    {
      info.el.innerHTML += "<button class='dayButton' data-date='" + info.date + "'>Click me</button>";
      info.el.style.padding = "20px 0 0 10px";
    },
    select: async function (start, end, allDay) {
      const { value: formValues } = await Swal.fire({
        title: 'Add Event',
        confirmButtonText: 'Submit',
        showCloseButton: true,
            showCancelButton: true,
        html:
          '<input type="datetime-local" id="swalEvtTitle" name="swalEvtTitle" class="swal2-input" placeholder="Enter title">' +
          '<textarea id="swalEvtDesc"  name="swalEvtDesc"  class="swal2-input" placeholder="Enter description"></textarea>' +
          '<input id="swalEvtURL" name="swalEvtURL"  class="swal2-input" placeholder="Enter URL ">',
        focusConfirm: false,
        preConfirm: () => {
          return [
            document.getElementById('swalEvtTitle').value,
            document.getElementById('swalEvtDesc').value,
            document.getElementById('swalEvtURL').value
          ]
        }
      });

      if (formValues) {
        // Add event
        fetch("eventHandler.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ request_type:'addEvent', start:start.startStr, end:start.endStr, event_data: formValues}),
        })
        .then(response => response.json())
        .then(data => {
          if (data.status == 1) {
            Swal.fire('Event added successfully!', '', 'success');
          } else {
            Swal.fire(data.error, '', 'error');
          }

          // Refetch events from all sources and rerender
          calendar.refetchEvents();
        })
        .catch(console.error);
      }
    },

    eventClick: function(info) {
      info.jsEvent.preventDefault();
      
      // change the border color
      info.el.style.borderColor = 'red';
      
      Swal.fire({
        title: info.event.title,
        icon: 'info',
        html:'<p>'+info.event.extendedProps.description+'</p><a href="'+info.event.url+'">Visit event page</a>',
        showCloseButton: true,
        showCancelButton: true,
        showDenyButton: true,
        cancelButtonText: 'Close',
        confirmButtonText: 'Delete',
        denyButtonText: 'Edit',
      }).then((result) => {
        if (result.isConfirmed) {
          // Delete event
          fetch("eventHandler.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ request_type:'deleteEvent', event_id: info.event.id}),
          })
          .then(response => response.json())
          .then(data => {
            if (data.status == 1) {
              Swal.fire('Event deleted successfully!', '', 'success');
            } else {
              Swal.fire(data.error, '', 'error');
            }

            // Refetch events from all sources and rerender
            calendar.refetchEvents();
          })
          .catch(console.error);
        } else if (result.isDenied) {
          // Edit and update event
          Swal.fire({
            title: 'Edit Event',
            html:
              '<input id="swalEvtTitle_edit" name="swalEvtTitle_edit" class="swal2-input" placeholder="Enter title" value="'+info.event.title+'">' +
              '<textarea id="swalEvtDesc_edit" name="swalEvtDesc_edit" class="swal2-input" placeholder="Enter description">'+info.event.extendedProps.description+'</textarea>' +
              '<input id="swalEvtURL_edit" name="swalEvtURL_edit" class="swal2-input" placeholder="Enter URL" value="'+info.event.url+'">',
            focusConfirm: false,
            confirmButtonText: 'Submit',
            preConfirm: () => {
            return [
              document.getElementById('swalEvtTitle_edit').value,
              document.getElementById('swalEvtDesc_edit').value,
              document.getElementById('swalEvtURL_edit').value
            ]
            }
          }).then((result) => {
            if (result.value) {
              // Edit event
              fetch("eventHandler.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ request_type:'editEvent', start:info.event.startStr, end:info.event.endStr, event_id: info.event.id, event_data: result.value})
              })
              .then(response => response.json())
              .then(data => {
                if (data.status == 1) {
                  Swal.fire('Event updated successfully!', '', 'success');
                } else {
                  Swal.fire(data.error, '', 'error');
                }

                // Refetch events from all sources and rerender
                calendar.refetchEvents();
              })
              .catch(console.error);
            }
          });
        } else {
          Swal.close();
        }
      });
    }
  });

  calendar.render();
  var buttons = document.querySelectorAll(".dayButton");
  buttons.forEach(function (btn){
    btn.addEventListener("click", function(e) {
      alert("clicked button on " + this.dataset.date);
    });
  })
});

</script>

        </body>

    </html>