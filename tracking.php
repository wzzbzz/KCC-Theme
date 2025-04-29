<?php 

   /* Template Name: Cooordination Center Tracking */

   if ( is_user_logged_in() ) {



    get_header('new'); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleen.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lavleenres.css">

<link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"/>

<!-- css links -->

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet"/>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet"/>

<style>

    .my_resources_table .table{border:none;}

    .tracking-temp .main_footer_sec {

    background: #134793 0% 0% no-repeat padding-box;

    border-radius: 50px 0px 0px 0px;

   /* padding: 1rem 0rem 2rem 0rem;*/

    margin-top: 40px;

    float: right;

}

.tracking-temp .tab-content>.active {

    margin-bottom: 25px;

}

.my_resources_table .table tr td{color: #242424;

    font-size: 14px;

    font-family: 'Poppins';

    font-weight: 400;}

    .nav{margin:0px;}

    .linked_blog{margin-left:12px;}

    .tracking_head{margin:0px!important;}

    img.manager_img{

        min-height: unset;

    }

span.group_info {

    top: 5%;

}

.blog_box p{

    padding-top: 7px;

}

.report-btn{

    padding: 0.4rem 2rem;

    background: #F9671D 0% 0% no-repeat padding-box;

    border-radius: 9px;

    text-align: center;

}

.report-btn p{

    color:#fff;

    font-size: 12px;

    }

    .report-btn-2 p{

    color:#fff;

    font-size: 12px;

    }

.report-btn-2:hover {

    padding: 0.8rem 2rem;

    background: #F9671D 0% 0% no-repeat padding-box;

    border-radius: 9px;

    text-align: center;

}

.report-btn-2 {

    padding: 0.8rem 2rem;

    background: #F9671D 0% 0% no-repeat padding-box;

    border-radius: 9px;

    text-align: center;

}

.report-btn:hover {

    padding: 0.4rem 2rem;

    background: #F9671D 0% 0% no-repeat padding-box;

    border-radius: 9px;

    text-align: center;

}

</style>



    <div class="col-xl-12 coordination-center-tracking tracking-temp">

        <div class="row justify-content-end mt-3">

            <?php include('user_topbar.php')?>

        </div>



        <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 my-4">

                <div class=" col-xl-11 d-flex align-items-center justify-content-between flex-wrap px-0">

                    <div class="col-xl-8 col-lg-7 col-md-8 col-12">

                        <div class="notification_Sec_main">

                            <h5><?php echo the_title()?></h5>

                            <p>Access your reports, groups, accepted roles, and blogs through the tabs below</p>

                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-12" >

                        <div class="back_btn">

                            <a href="<?php echo site_url('tracking')?>">Back</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>





        <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 tracking_head my-4">

                <div class=" col-xl-11 d-flex align-items-center justify-content-between  flex-wrap px-0">

                    <div class="linked_blog">



                        <ul class="nav nav-pills justify-content-center" role="tablist">

                            <li class="nav-item">

                              <a class="nav-link active" data-toggle="tab" href="#my-reports" role="tab">

                                <i class="now-ui-icons objects_umbrella-13"></i> My Reports

                              </a>

                            </li>

                            <li class="nav-item">

                              <a class="nav-link" data-toggle="tab" href="#accepted-roles" role="tab">

                                <i class="now-ui-icons shopping_cart-simple"></i> Accepted Reports

                              </a>

                            </li>

                            <li class="nav-item">

                              <a class="nav-link" data-toggle="tab" href="#my-groups" role="tab">

                                <i class="now-ui-icons shopping_shop"></i> My Groups

                              </a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link" data-toggle="tab" href="#my-blogs" role="tab">

                                  <i class="now-ui-icons shopping_shop"></i> My Blogs

                                </a>

                              </li>

                          </ul>

                   </div>

                </div>

            </div>

        </div>







        <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 my-4">

                <div class=" col-xl-12 d-flex align-items-center justify-content-between flex-wrap px-0">

                    <div class="tab-content col-xl-12">

                        <!--mt reports tabs-->

                        <div class="tab-pane active" id="my-reports" role="tabpanel">



                            <div class="col-xl-12 d-flex align-items-center justify-content-between flex-wrap px-0 mb-4">

                                <h5>Disaster Situation Report</h5>

                            </div>

                          

                            <div class="my_resources_table table-9-col ">

                                <div class="main_table_sec">

                                    <div class="table-responsive">

                                        <table class="table">                            

                                            <thead>

                                                <tr>

                                                    <th>Report No.</th>

                                                    <th>Date</th>

                                                    <th>Event</th>

                                                    <th>City</th>

                                                    <th>State</th>

                                                    <th>Country</th>

                                                    <th>Contact Person</th>

                                                    <th>Organization</th>

                                                    <th>&nbsp;</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                 <?php 

                                                     $current_user_id = get_current_user_id();

                                                     $reportData = get_posts( array(

                                                         'post_type'      => 'reportsforms',

                                                         'post_status'    => 'publish',

                                                         'post_author'    =>  $current_user_id,

                                                          'numberposts' => 1000

                                                    ) );

                                                ?>



                                                <?php if(!empty($reportData)){

                                                    foreach($reportData as $report){

                                                    $rid = $report->ID;

                                                    $postMeta = get_post_meta($rid);

                                                ?>

                                                

                                                <tr class="bg-color">

                                                    <td><?php echo get_post_meta($rid,'report_id',true)?></td>

                                                    <td><?php echo get_post_meta($rid,'rf_date',true)?></td>

                                                    <td><?php echo get_post_meta($rid,'organization',true)?></td>

                                                    <td><?php echo get_post_meta($rid,'rf_city',true)?></td>

                                                    <td><?php echo get_post_meta($rid,'rf_state',true)?></td>

                                                    <td><?php echo get_post_meta($rid,'rf_country',true)?></td>

                                                    <td><?php echo get_post_meta($rid,'contact_person',true)?></td>

                                                    <td>

                                                       <div class="organization">

                                                           <?php echo get_post_meta($rid,'organization',true)?>

                                                        </div>

                                                    </td>

                                                    <!--<td style="width:15%;">

                                                        <div class="mail-section">

                                                            <div>

                                                                <a href="tel:<?php echo get_post_meta($rid,'rf_phone',true)?>" title="<?php echo get_post_meta($rid,'rf_phone',true)?>"><?php echo get_post_meta($rid,'rf_phone',true)?></a>

                                                            </div>

                                                        </div>

                                                    </td>-->

                                                    <td style="width:12%;">

                                                        <a href="<?php echo site_url('disaster-situational-report')."?id=".$rid; ?>" class="d-block">

                                                            <div class="orange-box report-btn">

                                                                <p>View</p>

                                                            </div>

                                                        </a>

                                                    </td>

                                                </tr>

                                                <?php }

                                                }?>

                                                                             

                                                                       

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div> 



                            <div class="col-xl-12 d-flex align-items-center justify-content-between flex-wrap px-0 mb-4 mt-4">

                                <h5 class="mt-4">Organization Volunteer Request</h5>

                            </div>

                            <div class="my_resources_table table-7-col">

                                <div class="main_table_sec">

                                    <div class="table-responsive">

                                        <table class="table">                            

                                            <thead>

                                              <tr>

                                                <th>Report No.</th>

                                                <th>Date</th>

                                                <th>Event</th>

                                                <th>City</th>

                                                <th>State</th>

                                                <th>Contact Person</th>

                                                <th>Organization</th>

                                                <th>&nbsp;</th>

                                              </tr>

                                            </thead>

                                            <tbody>

                                                <?php 

                                                     $current_user_id = get_current_user_id();

                                                     

                                                     /*get post for current user*/

                                                        $currentUserPosts = get_posts( array(

                                                     'post_type'      => 'volunteer_request',

                                                     'post_status'    => 'publish',

                                                     'author'         =>  $current_user_id,

                                                     'post__not_in'   => array($currentID),

                                                     'numberposts' => 1000

                                                ) ); 

                                                    $post_ids = array();

                                                    foreach($currentUserPosts as $data1) {

                                                     $post_ids[] = $data1->ID;

                                                    }

                                                             

                                                 /*get post for current user*/

                                                 

                                                 // now exclude current user's post from all posts

                                                    $reportData = get_posts( array(

                                                     'post_type'      => 'volunteer_request',

                                                     'post_status'    => 'publish',

                                                     //'post_author'   =>  $current_user_id,

                                                     'post__not_in'   => $post_ids,

                                                      'numberposts' => 1000

                                                ) );

                                                ?>

                                                <?php if(!empty($reportData)){

                                                    foreach($reportData as $report){

                                                        $rid = $report->ID;

                                                        $postMeta = get_post_meta($rid);

                                                        $reportID = get_post_meta($rid,'report_id',true);

                                                  

                                                ?>

                                                <tr class="bg-color">

                                                    <td><?php echo get_post_meta($rid,'report_id',true)?></td>

                                                    <td><?php echo $report->post_date; ?></td>

                                                    <td><?php echo $report->post_title;?></td>

                                                    <td><?php echo get_post_meta($rid,'vol_city2',true)?></td>

                                                    <td><?php echo get_post_meta($rid,'vol_state2',true)?></td>

                                                    <!-- <td><?//php echo get_post_meta($rid,'vol_country',true)?></td>-->

                                                    <td><?php echo get_post_meta($rid,'vol_person',true)?></td>

                                                    <td><?php echo get_post_meta($rid,'vol_org',true)?></td>

                                                    <td style="width:12%;">

                                                      <?php if( (get_post_meta($rid,'report_status_'.$current_user_id,true) == 'applied') && (get_post_meta($rid,'report_applied_by_'.$current_user_id,true) == $current_user_id)){ ?>

                                                           

                                                           <?php 

                                    

                                                           echo '<div class="orange-box report-btn">

                                                                          <div type ="submit" class="orange-box report-btn"

                                                                     disabled><p>Applied</p></div>

                                                                 </div>' ?> 

                                                            

                                                            <?php } else { ?>

                                                         

                                                            <?php 

                                                            //echo $rid;

                                                                echo   "<form method = 'POST' action ='' class=' mediadoc_form' id='disaster_media' enctype='multipart/form-data'>";

                                                                echo   "<div class='orange-box report-btn'>";

                                                                echo   "<input type='hidden' name ='page_url'  value= '$current_url'>";

                                                                echo   "<input type='hidden' name='orgnaizationReport_alert' value='orgnaizationReport_alert'/>";

                                                                echo   "<input type ='hidden' name ='post_author'  id='post_author'  value ='$report->post_author'>";

                                                                echo   "<input type= 'hidden' name = 'uniqueReportID' value= '$reportID'>";

                                                                echo   "<input type ='hidden' name ='rid'  id='rid'  value ='$rid'>";

                                                                echo  '<div type ="submit" class="orange-box report-btn"><p>Apply</p></div>';

                                                                echo  '</div>'; 

                                                                echo  '</form>';

                                                            ?>

                                                         

                                                            <?php } ?>

                                                       

                                                    </td>

                                                </tr>

                                                <?php } 

                                                }?>                                                        

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>  

        

                            <div class=" col-xl-11 d-flex align-items-center justify-content-between flex-wrap px-0 mb-4 mt-4">

                                <h5 class="mt-4">Survivors Needs Intake Form</h5>

                            </div>

                            <div class="my_resources_table ">

                                <div class="main_table_sec">

                                    <div class="table-responsive">

                                        <table class="table">                            

                                            <thead>

                                              <tr>

                                                <th>Report No.</th>

                                                <th>Date</th>

                                                <!--<th>Event</th>-->

                                                <th>Client Needs</th>

                                                <th>City</th>

                                                <th>State</th>

                                                <th>Country</th>

                                                <th>Contact Person</th>

                                               

                                                <th>&nbsp;</th>

                                              </tr>

                                            </thead>

                                            <tbody>

                                                <?php 

                                                     $current_user_id = get_current_user_id();

                                                     /*get post for current user*/

                                                        $currentUserPosts2 = get_posts( array(

                                                         'post_type'      => 'supplierNeedIntake',

                                                         'post_status'    => 'publish',

                                                         'author'         =>  $current_user_id,

                                                         'post__not_in'   => array($currentID),

                                                         'numberposts' => 1000

                                                    ) ); 

                                                    $post_ids = array();

                                                    foreach($currentUserPosts2 as $data2) {

                                                     $post_ids[] = $data2->ID;

                                                    }

                                                                 

                                                     /*get post for current user*/

                                                     

                                                     // now exclude current user's post from all posts

                                                         $reportData = get_posts( array(

                                                     'post_type'      => 'supplierNeedIntake',

                                                     'post_status'    => 'publish',

                                                     'post__not_in'   => $post_ids,

                                                      'numberposts' => 1000

                                                    ) );

                                                ?> 

                                                         

                                                <?php if(!empty($reportData)){

                                                    foreach($reportData as $report){

                                                    $rid = $report->ID;

                                                    $postMeta = get_post_meta($rid);

                                                     $reportID = get_post_meta($rid,'report_id',true);

                                                 ?>





                                                <tr class="bg-color">

                                                     <td><?php echo get_post_meta($rid,'report_id',true)?></td>

                                                     <td><?php echo $report->post_date; ?></td>

                                                     <td><?php echo $report->post_title;?></td>

                                                     

                                                     <td><?php echo get_post_meta($rid,'client_need',true)?></td>

                                                    <td><?php echo get_post_meta($rid,'intake_city',true)?></td>

                                                    <td><?php echo get_post_meta($rid,'intake_state',true)?></td>

                                                    <td><?php echo get_post_meta($rid,'intake_country',true)?></td>

                                                    

                                                    <td><?php echo get_post_meta($rid,'client_firstName',true)?> <?php echo get_post_meta($rid,'client_lastName',true)?></td>

                                                  

                                                    <td style="width:12%;">

                                                      <?php if( (get_post_meta($rid,'report_status_'.$current_user_id,true) == 'applied') && (get_post_meta($rid,'report_applied_by_'.$current_user_id,true) == $current_user_id)){ ?>

                                                           

                                                           <?php 

                                    

                                                           echo '<div class="orange-box report-btn">

                                                                          <button type ="submit" class="orange-box"  disabled><p>Applied</p></button>

                                                                 </div>' ?> 

                                                            

                                                         <?php } else { ?>

                                                         

                                                     <?php 

                                                          //echo $rid;

                                                           echo   "<form method = 'POST' action ='' class=' mediadoc_form' id='disaster_media' enctype='multipart/form-data'>";

                                                           echo   "<div class='orange-box report-btn'>";

                                                           echo   "<input type='hidden' name ='page_url'  value= '$current_url'>";

                                                           echo   "<input type='hidden' name='orgnaizationReport_alert' value='orgnaizationReport_alert'/>";

                                                           echo   "<input type ='hidden' name ='post_author'  id='post_author'  value ='$report->post_author'>";

                                                           echo   "<input type= 'hidden' name = 'uniqueReportID' value= '$reportID'>";

                                                           echo   "<input type ='hidden' name ='rid'  id='rid'  value ='$rid'>";

                                                            echo  '<div type ="submit" class="orange-box report-btn"><p>Apply</p></div>';

                                                            echo  '</div>'; 

                                                            echo  '</form>';

                                                    ?>

                                                         

                                                    <?php } ?>

                                                       

                                                    </td>

                                                </tr>

                                                    <?php }

                                                     }?>

                                                                           

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>  

                            



                            <div class=" col-xl-11 d-flex align-items-center justify-content-between flex-wrap px-0 mb-4 mt-4">

                                <h5 class="mt-4">Disaster Situation Report</h5>

                            </div>

                            <div class="my_resources_table table-9-col">

                                <div class="main_table_sec">

                                    <div class="table-responsive">

                                        <table class="table">                            

                                            <thead>

                                              <tr>

                                                 <th>Report No.</th>

                                                 <th>Date</th>

                                                 <th>Event</th>

                                                 <th>Client Needs</th>

                                                 <th>Contact Person</th>

                                                 <th>Organization</th>

                                                 <th>&nbsp;</th>

                                              </tr>

                                            </thead>

                                            <tbody>

                                                <?php 

                                                     $current_user_id = get_current_user_id();

                                                     $reportData = get_posts( array(

                                                     'post_type'      => 'afterActionReport',

                                                     'post_status'    => 'publish',

                                                     'post_author'    =>  $current_user_id,

                                                      'numberposts' => 1000

                                                ) );

                                                ?>  

                                                    

                                                <?php if(!empty($reportData)){

                                                    foreach($reportData as $report){

                                                    $rid = $report->ID;

                                                    $postMeta = get_post_meta($rid);

                                                ?>

                                                <tr class="bg-color">

                                                     <td><?php echo get_post_meta($rid,'report_id',true)?></td>

                                                      <td><?php echo $report->post_date; ?></td>

                                                      <td><?php echo get_post_meta($rid,'action_disaster',true)?></td>

                                                      <td><?php echo get_post_meta($rid,'task1',true)?>,<?php echo get_post_meta($rid,'task2',true)?>,<?php echo get_post_meta($rid,'task3',true)?></td>

                                                      <td><?php echo get_post_meta($rid,'action_supervisor',true)?></td>

                                                      <td><?php echo get_post_meta($rid,'action_org_name',true)?></td>

                                                        

                                                  

                                                    <td style="width:12%;">

                                                       <a href="<?php echo site_url('after-action-report')."?id=".$rid; ?>" class="d-block orange-box report-btn" target="_blank">

                                                            <div class="orange-box report-btn-2">

                                                                <p>View</p>

                                                            </div>

                                                        </a>

                                                    </td>

                                                </tr>

                                                <?php } 

                                                }?>

                                                                           

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>                      

                        </div>



                        <!--accepted roles tabs-->

                        <div class="tab-pane" id="accepted-roles" role="tabpanel">

                            <div class="col-xl-12 d-flex align-items-center justify-content-between flex-wrap px-0 mb-4">

                                <h5>Organization Volunteer Request</h5>

                            </div>

                                          

                            <div class="my_resources_table table-7-col">

                                <div class="main_table_sec">

                                    <?php 

                                         $current_user_id = get_current_user_id();

                                         $reportData = get_posts( array(

                                         'post_type'      => 'volunteer_request',

                                         'post_status'    => 'publish',

                                         'author'    =>  $current_user_id,

                                          // 'post__not_in'   => array( $post->ID )

                                          'numberposts' => 1000

                                    ) );

                                    ?>

                                    <div class="table-responsive">

                                        <table class="table">                            

                                            <thead>

                                                <tr>

                                                    <th scope="col">Report No.</th>

                                                    <th scope="col">Date</th>

                                                    <th scope="col">Event</th>

                                                    <th scope ="col">Group</th>

                                                    <th scope="col">Country</th>

                                                    <th scope="col">State</th>

                                                    <th scope="col">City</th>

                                                    <th scope="col">Organization</th>

                                                    <th scope="col">&nbsp;</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <?php if(!empty($reportData)){

                                                   foreach($reportData as $report){

                                                       $postAuthor =  $report->post_author;

                                                       $rid = $report->ID;

                                                       $postMeta = get_post_meta($rid);

                                                       $track_url  =    site_url('track-request');

                                                        $gid = get_post_meta($report->ID, 'group_id', true );

                                                            $args = array(

                                                                            'post_type' => 'groups',

                                                                            'post__in' => array($gid)

                                                                        );



                                                        $groupData = get_posts($args);

                                                        $groupData =$groupData[0];

                                                ?>

                                                <tr class="bg-color">

                                                    <td><?php echo get_post_meta($rid,'report_id',true)?></td>

                                                    <td><?php echo $report->post_date; ?></td>

                                                    <td><?php echo $report->post_title;?></td>

                                                    <td><?php echo @$groupData->post_title;?></td>

                                                    <td><?php echo get_user_meta($postAuthor,'country',true)?></td>

                                                    <td><?php echo get_user_meta($postAuthor,'state',true)?></td>

                                                    <td><?php echo get_user_meta($postAuthor,'city',true)?></td>

                                                   

                                                    <td><?php echo get_post_meta($rid,'vol_org',true)?></td>

                                                    <td style="width:12%;">

                                                      

                                                      <?php  if(get_post_meta($rid,'report_status_for_'.$rid,true) == 'report_applied')  { ?>

                                                      

                                                       <?php 

                                                           echo "<a href='$track_url/?rid=$rid' class='d-block'>";

                                                           echo "<div class='orange-box report-btn'>";     

                                                           echo "<p>Track</p>";        

                                                           echo "</div>";

                                                           echo "</a>";

                                                       ?>

                                                      

                                                       <?php }  else { ?>

                                                       

                                                          <?php 

                                                            echo "<a href='javascript::void(0)' class='d-block' onclick= 'notApplied()'>";

                                                            echo "<div class='orange-box report-btn disabled'>";     

                                                            echo "<p>Track</p>";        

                                                            echo "</div>";

                                                            echo "</a>";

                                                          ?>

                                                        <?php }  ?>

                                                    </td>

                                                </tr>

                       

                                                   <?php } }?>                                         

                                                                       

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>  



                            <div class="col-xl-12 d-flex align-items-center justify-content-between flex-wrap px-0 mb-4 mt-4">

                                <h5 class="mt-4">Survivors Needs Intake Form</h5>

                            </div>

                            <div class="my_resources_table ">

                                <div class="main_table_sec">

                                    <?php 

                                         $current_user_id = get_current_user_id();

                                         $reportData = get_posts( array(

                                         'post_type'      => 'supplierNeedIntake',

                                         'post_status'    => 'publish',

                                         'author'    =>  $current_user_id,

                                          // 'post__not_in'   => array( $post->ID )

                                          'numberposts' => 1000

                                    ) );

                                    ?>

                                    <div class="table-responsive">

                                        <table class="table">                            

                                            <thead>

                                               <tr>

                                                    <th scope="col">Report No.</th>

                                                    <th scope="col">Date</th>

                                                    <th scope ="col">Group</th>

                                                    <!--<th scope="col">Event</th>-->

                                                    <th scope="col">Client Needs</th>

                                                    <th scope="col">City</th>

                                                    <th scope="col">State</th>

                                                    <th scope="col">Country</th>

                                                    <th scope="col">Contact Person</th>

                                                    <th scope="col">&nbsp;</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <?php if(!empty($reportData)){

                                                   foreach($reportData as $report){

                                                       $rid = $report->ID;

                                                       $reportAuthor =  $report->post_author;

                                                       $postMeta = get_post_meta($rid);

                                                       $gid = get_post_meta($report->ID, 'group_id', true );

                                                        $args = array(

                                                                        'post_type' => 'groups',

                                                                        'post__in' => array($gid)

                                                                    );

                                                        $groupData = get_posts($args);

                                                        $groupData =$groupData[0];

                                                       $track_url  = site_url('track-intake-form-request');

                                                    ?>

                                                    <tr class="bg-color">

                                                        <td><?php echo get_post_meta($rid,'report_id',true)?></td>

                                                        <td><?php echo $report->post_date; ?></td>

                                                       <!-- <td><?//php echo $report->post_title; ?></td>-->

                                                       <td><?php echo @$groupData->post_title;?></td>

                                                        <td><?php echo get_post_meta($rid,'client_need',true)?></td>

                                                        <td><?php echo get_user_meta($reportAuthor,'country',true)?></td>

                                                        <td><?php echo get_user_meta($reportAuthor,'state',true)?></td>

                                                        <td><?php echo get_user_meta($reportAuthor,'city',true)?></td>

                                                        <td><?php echo get_post_meta($rid,'client_firstName',true)?> <?php echo get_post_meta($rid,'client_lastName',true)?></td>

                                                        <td style="width:12%;">

                                          

                                                      <?php  if(get_post_meta($rid,'report_status_for_'.$rid,true) == 'report_applied')  { ?>

                                                      

                                                       <?php 

                                                           echo "<a href='$track_url/?rid=$rid' class='d-block'>";

                                                           echo "<div class='orange-box report-btn'>";     

                                                           echo "<p>Track</p>";        

                                                           echo "</div>";

                                                           echo "</a>";

                                                       ?>

                                          

                                                       <?php }  else { ?>

                                                       

                                                          <?php 

                                                            echo "<a href='javascript::void(0)' class='d-block' onclick= 'notApplied()'>";

                                                            echo "<div class='orange-box report-btn disabled'>";     

                                                            echo "<p>Track</p>";        

                                                            echo "</div>";

                                                            echo "</a>";

                                                          

                                                          ?>

                                                        <?php }  ?>

                                                        </td>

                                                    </tr>

                       

                                             <?php } }?>    

                                                                       

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>  

                        </div>  





                        <!--my groups tab-->

                        <div class="tab-pane" id="my-groups" role="tabpanel">



                            <div class=" col-xl-11 d-flex align-items-center justify-content-between flex-wrap px-0">

                                <!-- <h5>All Groups My Created & Joined</h5> -->

                            </div>

                            <div class="groups_tabs">

                                <div class="tab-content" id="pills-tabContent">

                                    <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">                  

                                        <div class="row">  

                                            <?php

                                                $posts = new WP_Query(array(

                                                'post_type' => 'groups',

                                                'posts_per_page' => 50,

                                                'paged' => $currentPage,

                                                's' => @$_GET['groupName'],

                                                'meta_query' =>   array(

                                                'relation' => 'AND',

                                                array(

                                                        'key' => 'group_type',

                                                        'value'   => @$_GET['group_type'],

                                                        'compare' => '='

                                                    )

                                                )

                                            ));



                                            //echo '<pre>';print_r($posts);echo '</pre>';

                                            $searchArg= array(); 

                                            $searchArg['post_type'] = 'groups';

                                            $searchArg['post_status'] = 'publish';

                                            //$searchArg['numberposts'] = 1000;

                                            $searchArg['author'] = $current_user_id;

                                            $searchArg['paged'] = $currentPage;

                                             $searchArg['posts_per_page'] = 50;



                                            if(!empty($_GET['groupName'])){                                          

                                                 $searchArg['s'] = $_GET['groupName'];

                                            }

                                            if(!empty($_GET['group_type'])){

                                                $searchArg['meta_query'] =   array(

                                                array(

                                                'key' => 'group_type',

                                                'value'   => $_GET['group_type']

                                                

                                                )

                                                );

                                            }

                                            if(!empty($_GET['groupDate'])){

                                                $searchArg['date_query'] = array(

                                                    'after' => date('Y-m-d',strtotime($_GET['groupDate']))

                                                    //'before' => date('Y-m-d',strtotime($_GET['groupDate'])),

                                                    //'compare' => '>=',

                                                );   

                                            }

                                            $myGroups = get_posts( $searchArg );



                                            if(!empty($myGroups)){

                                                echo "

                                                <div class='col-lg-12 mb-3'>

                                                    <h5 class ='title_group'>Groups Created</h5>

                                                </div>

                                                ";



                                                $j=1;

                                                foreach($myGroups as $grpupVal){



                                                    $groupImg = wp_get_attachment_url( get_post_thumbnail_id($grpupVal->ID) );

                                                    if(empty($groupImg)){                                                        

                                                        $groupImg= get_template_directory_uri()."/assets/images/range_1.png";

                                                    }

                                             

                                                $author_id=$grpupVal->post_author;

                                                $author_img = get_avatar_url( $author_id ); 

                                                if(empty($author_img)){

                                                    $author_img = get_template_directory_uri()."/avatar.png";

                                                }                   

                                           

                                                $userList = learndash_get_groups_user_ids($grpupVal->ID);



                                                $group_type = get_post_meta($grpupVal->ID,'group_type',true);

                                                                        

                                            ?>

                                                <div class="col-lg-3">

                                                    <div class="custom-card">

                                                         <a href="<?php echo get_permalink($grpupVal->ID)?>">

                                                       <!--  <a href="javascript:void(0);" data-toggle="modal" data-target="#group-modal"> -->

                                                            <div class="image">

                                                                <img src="<?php echo $groupImg ?>" alt="" height="" title="" width="">

                                                                <div class="public-text">

                                                                    <p><?php echo $group_type?></p>

                                                                </div>

                                                            </div>

                                                            <div class="d-flex justify-content-between">

                                                                <div class="group-title">

                                                                    <h4><?php echo $grpupVal->post_title?></h4>

                                                                </div>

                                                                <div class="total-member">

                                                                    <p><?php echo count($userList)?> Member</p>

                                                                </div>

                                                            </div>

                                                            <div class="d-flex main-content  align-items-center">

                                                                <div class="left-text">

                                                                    Manager

                                                                </div>

                                                                <div class="member-image">

                                                                    <img src="<?php echo $author_img; ?>" alt="<?php echo the_author_meta( 'display_name' , $author_id ); ?>" height="" title="" width="">

                                                                </div>

                                                                <div class="right-text">

                                                                    <?php echo the_author_meta( 'user_nicename' , $author_id )?>

                                                                </div>

                                                            </div>

                                                            <div class="d-flex">



                                                               <div class="main-group-image">

                                                                    <?php if(!empty( $userList)){?>

                                                                        <?php

                                                                            $i=1;

                                                                             foreach ($userList as $key => $member_id) {

                                                       

                                                                            $member_img = get_avatar_url( $member_id ); 

                                                                            if(empty($member_img)){

                                                                                $member_img = get_template_directory_uri()."/avatar.png";

                                                                            }

                                                                         if($j>3){

                                                                echo "+".(count($userList)-3);

                                                                break;

                                                                }else{

                                                                 echo '<div class="mem-image">

                                                                <img src="'.$member_img.'" alt="" height="" title="" width="">

                                                            </div>';   

                                                                }

                                                             $j++; 

                                                            

                                                              } 

                                                                 } ?>

                                                        

                                                                </div>



                                                               <!--  <div class="blue-circle">

                                                                    <div class="circle-text">

                                                                        <p>+25K</p>

                                                                    </div>

                                                                </div> -->

                                                            </div>

                                                            <div class="card-text">

                                                               <p><?php echo  substr($grpupVal->post_content,0,100)?>...</p>

                                                            </div>

                                                        </a>

                                                    </div>

                                                </div>



                                             <?php   } 

                                         }else{

                                            echo "There are no groups created or joined yet.";

                                         } 

                                         include('group_joined.php');

                                         ?>

                                                

                                        

                                         

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        

                        <!--my blogs tab-->

                        <div class="tab-pane" id="my-blogs" role="tabpanel">

                            <div class=" col-xl-11 d-flex align-items-center justify-content-between flex-wrap px-0">

                                <h5>All My Created Blogs</h5>

                            </div>

                            <div class="blog_grid">

                                <div class="grid-container">

                                     <?php 

                                       $current_user_id = get_current_user_id();

                                         $args = array(

                                                'numberposts'   => 20,

                                                'author'    =>  $current_user_id,

                                                'order'     => 'ASC',

                                                'post_type'      => 'post'

                                            );

                                       $my_posts = get_posts( $args );

                                       if(!empty($my_posts)) {

                                       foreach($my_posts as $value) { ?>

                                           

                                    <div class="blog_box  grid-item"  >

                                        <a href="<?php echo get_permalink( $value->ID )?>">

                                             <?php echo get_the_post_thumbnail($value->ID)?>

                                            <div>

                                                <h4><?php echo $value->post_title; ?></h4>

                                                <small><?php echo date("F jS, Y", strtotime($value->post_date)); ?></small>

                                            </div>

                                            <p><?php echo  wp_trim_words($value->post_content,15);?></p>

                                        </a>

                                    </div>

                                    

                                    <?php } } else { ?>

                                        <?php echo 'There is no blog.';?>

                                    <?php } ?>   

                                </div>

                            </div>   

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <?php include('common_user_footer.php');?>              

    </div>







    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

            <div class="modal-content">

                <div class="modal-body">

                    <div class="blog_grid">

                        <div class=" created-resource-form">

                            <form class="row">

                                <div class="col-xl-12 col-lg-10">

                                    <div class="form-group calendar-sec">

                                        <label for="exampleInputPassword1">Short By Date</label>

                                        <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Select Date">

                                    </div>

                                </div>

                                <div class="col-xl-12 col-lg-10">

                                    <div class="form-group select_sec">

                                        <label for="exampleFormControlSelect1">Short by City</label>

                                        <select class="form-control" id="exampleFormControlSelect1">

                                          <option>Select</option>

                                          <option>Male</option>

                                          <option>Female</option>

                                          <option>Other</option>                                                      

                                        </select>

                                    </div>

                                </div>

                                <div class="col-xl-12 col-lg-10">

                                    <div class="form-group">

                                        <label for="exampleFormControlSelect1">Short by Name</label>

                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter here">

                                      </div>

                                </div>                                                 

                            </form>                                

                            <div class="row mt-4 d-flex justify-content-center">

                                <div class="col-xl-6 col-lg-10">

                                    <div class="cancal_btn">

                                        <button class="btn btn_cancal">Cancal</button>

                                    </div>

                                </div>

                                <div class="col-xl-6 col-lg-10">

                                    <div class="update_btn">

                                        <button class="btn btn_update">Update</button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>             

                </div>

            </div>       

        </div>

    </div>  



    <script>      

        $(document).ready(function() {  

       

        $(".next").click(function() {

            let previous = $(this).closest("fieldset").attr('id');

            let next = $('#'+this.id).closest('fieldset').next('fieldset').attr('id');

            if(previous == "step0"){

                console.log(previous);

               $('#'+next).show();

                $('#'+previous).hide();

            } 

            else if(previous == "step1"){

                $('#'+next).show();

                $('#'+previous).hide();

            }      

        }); 

        

    });

    $(".previous").click(function() {

        let current = $(this).closest("fieldset").attr('id');

        let previous = $('#'+this.id).closest('fieldset').prev('fieldset').attr('id');

        $('#'+previous).show();

        $('#'+current).hide();

    }); 

    </script>



<script>



 function notApplied(){

            alert("Sorry, No one has applied on this report yet, So you can not access it right now.");

        }

        </script>







<?php  } ?>