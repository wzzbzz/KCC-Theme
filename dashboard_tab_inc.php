<style type="text/css">
   .user-dashboard-tab .carousel-control-prev{
        display: flex;
        justify-content: center; 
        left: unset;
        right: 45px;
   }
   .user-dashboard-tab .carousel-control-next{
        height: unset;
        right: 90px!important;
    }
    .user-dashboard-tab .carousel-control-next, .carousel-control-prev{
        bottom: unset;
        width: 5%;
        top: 78px;
        color:  #4c76ab!important;
        height: 30px;
        opacity: 1px;
        width: 30px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid #4c76ab;
    }
    .user-dashboard-tab .date-part{
        margin-top: 30px;
    }
    .user-dashboard-tab .date-part .date-title{
        font-size:18px;
        color: #000;
    }
    
    .user-dashboard-tab .carousel-control-next, .carousel-control-prev i{
        color:  #4c76ab;
    }
    .user-dashboard-tab .time-section{
        width: 30%;
    }
    .user-dashboard-tab .underline-section{
        width: 70%;
    }
    .user-dashboard-tab .underline-section ul{
        padding: 0px;
        margin: 0px;
    }
    .user-dashboard-tab .underline-section ul li{
        margin-bottom: 15px;
        list-style: none;
        font-size: 14px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.4);
        padding-bottom: 15px;
     
    }
    .user-dashboard-tab .underline-section ul li:first-child{
        margin-top: 15px;
    }
    .user-dashboard-tab .underline-section ul li:last-child{
        margin-bottom: 0px;
    }
    
    
    .user-dashboard-tab .time-section ul{
        padding: 0px;
        margin: 0px;
    }
    .user-dashboard-tab .time-section ul li{
        color: #000;
        font-size: 14px;
        padding-bottom: 15px;
        margin-left: 5px;
        list-style: none;
    }
    .user-dashboard-tab .time-section ul li:first-child{
        margin-top: 15px;

    }
    .user-dashboard-tab .time-section ul li:last-child{
        margin-bottom: 0px;
    }
.user-dashboard-tab .card-box-donation .card-btn .btn-primary {
   min-height: 50px;
   width: 95%;
}
.progress .progress-bar{
    color: #f9671d;
}
</style>

    <div class="row user-dashboard-tab">
       <div class="col-12 col-lg-4 mb-3">
          <div class="top-title">
             <div class="d-flex justify-content-between w-100">
                <div class="title left-box">
                   <div class="d-flex">
                      <div class="icon">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/calenderIcon.png" alt="image" width="" height="" alt="" title="">
                      </div>
                      <div>
                         <h2>My Calender</h2>         
                      </div>
                   </div>
                </div>
                <div class="right-box">
                   <div class="view">
                      <a title="View All" href="<?php echo site_url('event-calendar')?>"><span>View All</span></a>
                   </div>
                </div>
             </div>
             <div class="date-part">
               <div class="d-flex justify-content-between w-100">
                  <?php
                  // Load the Tribe Events functions if not already loaded
                  if ( function_exists( 'tribe_get_events' ) ) {
                        // Define your arguments to check for upcoming public events in a specific group
                        $events_args = array(
                           'posts_per_page' => 1, // We only need to check if at least one event exists
                           'start_date'     => date('Y-m-d H:i:s'), // Only check for upcoming events
                           'eventDisplay'   => 'list', // Display events in list format
                           'post_status'    => 'publish', // Only include public (published) events
                           // 'post_status' => 'private', // Uncomment this line to filter private events
                           'tax_query'      => array(
                              array(
                                    'taxonomy' => 'tribe_events_cat', // Replace with your group taxonomy if different
                                    'field'    => 'slug',
                                    'terms'    => 'my-group-slug', // Replace with the slug of your group/category
                              ),
                           ),
                        );

                        // Query for events
                        $events = tribe_get_events($events_args);

                        // Check if there are any events
                        if ( ! empty( $events ) ) {
                           // If there are events, display the events list
                           echo do_shortcode('[tribe_events_list]');
                        } else {
                           // If no events, display a custom message or alternative content
                           echo '<p>No upcoming events at this time. Please check back later.</p>';
                        }
                  } else {
                        // If the function is not available, display an error message
                        echo '<p>Events functionality is not available.</p>';
                  }
                  ?>
               </div>
            </div>

          </div>
       </div>
       <div class="col-12 col-lg-4 mb-3">
          <div class="top-title">
             <div class="d-flex justify-content-between w-100">
                <div class="title left-box">
                   <div class="d-flex">
                      <div class="icon">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/messages-topImg.png" alt="image" width="" height="" alt="" title="">
                      </div>
                      <div>
                         <h2>My Messages</h2>         
                      </div>
                   </div>
                </div>
                <div class="right-box">
                   <div class="view">
                      <a title="View All" href="javascript:void(0);"><span>View All</span></a>
                   </div>
                </div>
             </div>
             <div class="bottom-card">
                <div class="message-box">
                   <div class="row no-gutters">
                      <div class="col-lg-3">
                         <div class="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/range_1.png" alt="" title="" height="" width="">
                         </div>   
                      </div>
                      <div class="col-lg-9 d-flex align-items-center">
                         <div class="text ml-3">
                            <h2>Josephine Arden</h2>
                            <p>Let have a meeting.. I will be available around 8pm.</p>
                            <div class="time">
                               <span>30 min</span>
                            </div>
                         </div>
                      </div>
    
                   </div>
                </div>
             </div>
             <div class="bottom-card">
                <div class="message-box">
                   <div class="row no-gutters">
                      <div class="col-lg-3">
                         <div class="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/range_1.png" alt="" title="" height="" width="">
                         </div>   
                      </div>
                      <div class="col-lg-9 d-flex align-items-center">
                         <div class="text ml-3">
                            <h2>Josephine Arden</h2>
                            <p>Let have a meeting.. I will be available around 8pm.</p>
                            <div class="time">
                               <span>30 min</span>
                            </div>
                         </div>
                      </div>
    
                   </div>
                </div>
             </div>
             <div class="bottom-card">
                <div class="message-box">
                   <div class="row no-gutters">
                      <div class="col-lg-3">
                         <div class="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/range_1.png" alt="" title="" height="" width="">
                         </div>   
                      </div>
                      <div class="col-lg-9 d-flex align-items-center">
                         <div class="text ml-3">
                            <h2>Josephine Arden</h2>
                            <p>Let have a meeting.. I will be available around 8pm.</p>
                            <div class="time">
                               <span>30 min</span>
                            </div>
                         </div>
                      </div>
    
                   </div>
                </div>
             </div>
             <div class="bottom-card">
                <div class="message-box">
                   <div class="row no-gutters">
                      <div class="col-lg-3">
                         <div class="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/range_1.png" alt="" title="" height="" width="">
                         </div>   
                      </div>
                      <div class="col-lg-9 d-flex align-items-center">
                         <div class="text ml-3">
                            <h2>Josephine Arden</h2>
                            <p>Let have a meeting.. I will be available around 8pm.</p>
                            <div class="time">
                               <span>30 min</span>
                            </div>
                         </div>
                      </div>
    
                   </div>
                </div>
             </div>
    
          </div>
       </div>
       <div class="col-12 col-lg-4 mb-3">
          <div class="top-title">
             <div class="d-flex justify-content-between w-100">
                <div class="title left-box">
                   <div class="d-flex">
                      <div class="icon">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/announcement-topImg.png" alt="image" width="" height="" alt="" title="">
                      </div>
                      <div>
                         <h2>Announcement</h2>         
                      </div>
                   </div>
                </div>
                <div class="right-box">
                   <div class="view">
                      <a title="View All" href="<?php echo site_url()?>/our-announcements"><span>View All</span></a>
                   </div>
                </div>
             </div>
          <?php 
          $current_user_id = get_current_user_id();
          $allAnnoncements = get_posts( array(
          'post_type'      => 'announcement',
          'post_status'    => 'publish',
          'author'        =>  $current_user_id,
          'numberposts' => 2,
          ) );     
          if(count($allAnnoncements)>0){
          foreach($allAnnoncements as $value)
          { 
    
             ?>
             <div class="bottom-card">
                <div class="message-box">
                   <div class="row no-gutters">
                      <div class="col-lg-3">
                         <div class="images announ-img">
                            <a href="<?php echo get_permalink( $value->ID )?>">
                        
                             <?php echo get_the_post_thumbnail($value->ID)?>
                         </a>
                         </div>   
                      </div>
                      <div class="col-lg-9 d-flex align-items-center">
                         <div class="text ml-3">
                            <h2><?php echo $value->post_title; ?></h2>
                            <div class="date">
                               <span>
                                  <?php echo $value->post_date_gmt; ?>
                               </span>
                            </div>
                            <?php echo substr($value->post_content,30); ?>
                         </div>
                      </div>
    
                   </div>
                </div>
             </div>
          <?php }
       }?>
             
          </div>
       </div>
    </div>
    <div class="row user-dashboard-tab mt-4">
        <div class="col-lg-6 mb-3">
            <div class="top-title">
                <div class="d-flex justify-content-between w-100">
                <div class="title left-box">
                   <div class="d-flex">
                      <div class="icon">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/topknowledgeCenter-Img.png" alt="image" width="" height="" alt="" title="">
                      </div>
                      <div>
                         <h2>My Knowledge Center</h2>         
                      </div>
                   </div>
                </div>
                <div class="right-box">
                   <div class="view">
                      <a title="View All" href="<?php echo site_url('knowledge-center')?>"><span>View All</span></a>
                   </div>
                </div>
             </div>
                 <?php 
                     $user = new WP_User(get_current_user_id());
                     $arrays = learndash_get_user_courses_from_meta(get_current_user_id());
                     $um = 0;
                     if(!empty($arrays)){
                     foreach($arrays as $arr1){
                        if($um==2){
                           break;
                        }
                        $um++;
                     $arr2 = learndash_course_status($arr1);
            
                     $course = get_post($arr1);
            
                     $progress= learndash_user_get_course_progress(get_current_user_id(),  $course->ID, $type = 'summary' );
        
                     if($progress['total'] == 0)
                     { 
                       $percentage = 0;
                     }
                     else
                     {
                         $percentage = $progress['completed'] / $progress['total'];   
                     }
            
                     $id = $user->ID;
                     $name = get_user_meta( $id, 'up_update_user_firstname', true);
                     $feat_image = wp_get_attachment_url( get_post_thumbnail_id($course->ID) );
                     if(empty($feat_image)){                                                        
                        $feat_image1= get_template_directory_uri()."/assets/images/range_1.png";
                     }
                 ?>
             
                  <div class="bottom-card">
                  <div class="message-box know-center">
                     <a href="<?php echo site_url('knowledge-center')?>" target="_blank">
                       <div class="row no-gutters">
                      <div class="col-lg-4">
                         <div class="images">
                             <?php if(!empty($feat_image)){ ?>
    
                                  <img src="<?php echo  $feat_image; ?>" alt="" title="" height="" width="">
    
                               <?php }  else { ?>
                               <img src="<?php echo $feat_image1; ?>" alt="" title="" height="" width="">
    
                             <?php } ?>  
                         </div> 
                      </div>
                      <div class="col-lg-8 d-flex align-items-center">
                         <div class="text ml-3">
                            <h2><?php echo mb_strimwidth($course->post_title, 0, 30, '...'); ?></h2>
                            <div class="date">
                               <div class="d-flex">
                                  <div>
                                    <span>
                                        <?php if(get_field('course_hour',$course->ID)>1){ ?>
                                           <?php echo get_field('course_hour',$course->ID);?>  hours
                                              <?php } else {  ?>
                                          <?php echo get_field('course_hour',$course->ID); ?> hour
                                        <?php } ?> 
                                    
                                    </span>
                                  </div>
                                  <div class="ml-2">
                                     <span>All Levels</span>
                                  </div>
                               </div>   
                            </div>
                           <!-- <div class="time rating">
                               <div class="d-flex">
                                  <div class="icon">
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                  </div>
                                  <div class="mx-2">
                                     <b>4.3</b>
                                  </div>
                                  <div class="review">
                                     (40 Reviews)
                                  </div>   
                               </div>
                            </div>-->
                            <?php echo wp_trim_words(get_field('course_description',$course->ID),13); ?>
                           <!-- <div class="progress mt-3">
                               <div class="progress-bar" role="progressbar" style="width: <?//php echo $percentage*100; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?//php echo $percentage*100; ?>%</div>
                            </div>-->
                         </div>
                      </div>
                   </div>
                     </a>
                </div>
                </div>
                <?php } } ?>
          </div>
       </div>
       <div class="col-lg-6">
          <div class="top-title coordin">
             <div class="d-flex justify-content-between w-100">
                <div class="title left-box">
                   <div class="d-flex">
                      <div class="icon">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/coordination-top-icon.png" alt="image" width="" height="" alt="" title="">
                      </div>
                      <div>
                         <h2>My Coordination Center</h2>         
                      </div>
                   </div>
                </div>
                <div class="right-box">
                   <div class="view">
                      <a title="View All" href="<?php echo site_url('dashboard-coordination-center')?>" target="_blank"><span>View All</span></a>
                   </div>
                </div>
             </div>
             <div class="bottom-card coordin-center">
                <div class="know-center">
                   <div class="row no-gutters">
                      <div class="col-lg-4">
                         <a href="<?php echo site_url('disaster-situational-reports')?>" target="_blank">
                            <?php
                                $current_user_id = get_current_user_id();
                                $reportCount = "SELECT COUNT(ID) FROM wp_posts WHERE post_type = 'reportsforms' AND post_status ='publish' AND post_author = $current_user_id " ;
                                $num = $wpdb->get_var($reportCount);
                            ?>
                         <div class="bg-color-box">
                            <div class="d-flex justify-content-between w-100 align-items-center">
                               <div class="circle">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dashCoordination/dash-disaster.png" alt="image" width="" height="" alt="" title="">
                               </div>
                               <div class="repot text-center">
                                  <div class="num"><?php echo $num ;?></div>
                                  <div>
                                     <span>Report</span>
                                  </div>
                               </div>
                            </div>
                             <p>Disaster Situational Report</p>
                         </div>
                      </a>
                      </div>
                      <div class="col-lg-4">
                           <a href="<?php echo site_url('organization-volunteer-requests')?>" target="_blank">
                                    <?php
                                        $current_user_id = get_current_user_id();
                                        $reportCount = "SELECT COUNT(ID) FROM wp_posts WHERE post_type = 'volunteer_request' AND post_author = $current_user_id " ;
                                        $num = $wpdb->get_var($reportCount);
                                    ?>
                                   
                                     
                         <div class="bg-color-box">
                            <div class="d-flex justify-content-between w-100 align-items-center">
                               <div class="circle">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/organizationvolunteer.png" alt="image" width="" height="" alt="" title="">
                               </div>
                               <div class="repot text-center">
                                  <div class="num"> <?php echo $num ;?></div>
                                  <div>
                                     <span>Request</span>
                                  </div>
                               </div>
                            </div>
                            <p>Organization Volunteer Request</p>
                         </div>
                      </a>
                      </div>
                      <div class="col-lg-4">
                         <a href="<?php echo site_url('survivors-needs-intake-form')?>" target="_blank">
                                    <?php
                                        $current_user_id = get_current_user_id();
                                        $reportCount = "SELECT COUNT(ID) FROM wp_posts WHERE post_type = 'supplierNeedIntake' AND post_author = $current_user_id " ;
                                        $num = $wpdb->get_var($reportCount);
                                    ?>                    
                                                 
                         <div class="bg-color-box">
                            <div class="d-flex justify-content-between w-100 align-items-center">
                               <div class="circle">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dashCoordination/dash-survivors.png" alt="image" width="" height="" alt="" title="">
                               </div>
                               <div class="repot text-center">
                                  <div class="num"> <?php echo $num; ?></div>
                                  <div>
                                     <span>Forms</span>
                                  </div>
                               </div>
                            </div>
                            <p>Survivors Needs Intack Form</p>
                         </div>
                      </a>
                      </div>
                      <div class="col-lg-4">
                         <a href="<?php echo site_url('after-action-reports')?>" target="_blank">
                                <?php
                                    $current_user_id = get_current_user_id();
                                     $reportCount = "SELECT COUNT(ID) FROM wp_posts WHERE post_type = 'afterActionReport' AND post_author = $current_user_id " ;
                                    $num = $wpdb->get_var($reportCount);
                                ?>  
                                
                         <div class="bg-color-box">
                            <div class="d-flex justify-content-between w-100 align-items-center">
                               <div class="circle">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dashCoordination/dash-after-action-report.png" alt="image" width="" height="" alt="" title="">
                               </div>
                               <div class="repot text-center">
                                  <div class="num"><?php echo $num;?></div>
                                  <div>
                                     <span>Report</span>
                                  </div>
                               </div>
                            </div>
                             <p>After Action Report</p>
                         </div>
                      </a>
                      </div>
                      <div class="col-lg-4">
                       <a href="<?php echo site_url('wccgroups')?>" target="_blank">
                            <?php
                                    $current_user_id = get_current_user_id();
                                     $reportCount = "SELECT COUNT(ID) FROM wp_posts WHERE post_type = 'groups'  AND post_status = 'publish'  AND post_author = $current_user_id "  ;
                                    $num = $wpdb->get_var($reportCount);
                            ?>  
                           
                        <div class="bg-color-box">
    
                            <div class="d-flex justify-content-between w-100 align-items-center">
                               <div class="circle">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dashCoordination/dash-group.png" alt="image" width="" height="" alt="" title="">
                               </div>
                               <div class="repot text-center">
                                  <div class="num"><?php echo $num;?></div>
                                  <div>
                                     <span>Groups</span>
                                  </div>
                               </div>
                            </div>
                             <p>My Groups</p>
                         </div>
                           </a>
                      </div>
                      <div class="col-lg-4">
                           <a href="<?php echo site_url('my-resources')?>" target="_blank">
                               <?php
                                    $current_user_id = get_current_user_id();
                                     $reportCount = "SELECT COUNT(ID) FROM wp_posts WHERE post_type = 'resources' AND post_author = $current_user_id "  ;
                                    $num = $wpdb->get_var($reportCount);
                                ?>  
                               
                         <div class="bg-color-box">
    
                            <div class="d-flex justify-content-between w-100 align-items-center">
                               <div class="circle">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dashCoordination/dash-resources.png" alt="image" width="" height="" alt="" title="">
                               </div>
                               <div class="repot text-center">
                                  <div class="num"> <?php echo $num;?></div>
                                  <div>
                                     <span>Resources</span>
                                  </div>
                               </div>
                            </div>
                            <p>My Resources</p>
                         </div>
                      </a>
                      </div>
                      
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="row user-dashboard-tab mt-4">
          <div class="col-lg-12 mb-4">
           <div class="top-title">
             <div class="d-flex justify-content-between w-100">
                <div class="title left-box">
                   <div class="d-flex">
                      <div class="icon">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/donateOrenge.png" alt="image" width="" height="" alt="" title="">
                      </div>
                      <div>
                         <h2>My Donations</h2>         
                      </div>
                   </div>
                </div>
                <div class="right-box">
                   <div class="view">
                      <a title="View All" href="<?php echo site_url('dashboard-donate')?>"><span>View All</span></a>
                   </div>
                </div>
             </div>
             <div class="row mt-5 custom-gutters">
             <?php
    
             $current_user_id = get_current_user_id();
             $allDonation = get_posts( array(
             'post_type'      => 'donation',
             'post_status'    => 'publish',
             'orderby' => 'id',
             'order'  => 'ASC',
             'numberposts' => 10,
             ) );     
             if(count($allDonation)>0){
                foreach($allDonation as $donation)
                { 
    
                $donation_img = get_post_meta( $donation->ID,'feature-image',true );
                if(empty($donation_img)){                                                        
                   $donation_img= get_template_directory_uri()."/assets/images/range_1.png";
                }
    
             ?>
                <div class="col-lg-2">
                   <div class="card-box-donation">
                      <div class="image">
                         <img src="<?php echo $donation_img?>" alt="" height="" title="" width="">
                      </div>
                      <div class="card-title">
                         <h3><?php echo $donation->post_title?></h3>
                        <?php echo mb_strimwidth($donation->post_content, 0, 100, '...');?>
                      </div>
                      <div class="card-btn d-flex justify-content-center">
                         <a href="<?php echo get_permalink( $donation->ID )?>" class="btn btn-primary" title="Donate More">Donate More</a>
                         
                      </div>
                   </div>
                </div>
                <?php }
             }?>
             </div>
          </div>
       </div>
        </div>
   
     
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered create_tickit" role="document">
      <div class="modal-content">
         <div class="modal-header ">
            <h5 class="modal-title" id="exampleModalLongTitle">Filter by</h5>
         </div>
         <div class="modal-body main_profile_form">
            <div class="form-group select_sec date_sec">
               <label for="exampleFormControlSelect1">Filter by Date</label>
               <div class="md-form md-outline input-with-post-icon datepicker" id="accLabels">
                  <input placeholder="Select date" type="text" id="accessibility-example" class="form-control">
               </div>
            </div>
            <div class="form-group select_sec">
               <label for="exampleFormControlSelect1">Filter by City</label>
               <select class="form-control" id="exampleFormControlSelect1">
                  <option>Select City</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>
               </select>
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">Filter by Name</label>
               <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type here">
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                  <div class="apply_btn ">
                     <button class="btn btn_apply"  data-dismiss="modal" aria-label="Close">Cancal</button>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                  <div class="apply_btn active">
                     <button class="btn btn_apply">Apply filter</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>