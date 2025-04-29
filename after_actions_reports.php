<?php 



/* Template Name: After Action Reports*/
die("hi");
get_header('new'); ?>

<style>

    .donation_tab_pills{

        background: unset;

        box-shadow: none;

    }

    table, td, th{

        border: 0px;

    }

     .modal{

        visibility: unset;

    }

    .modal-groups{

        border-radius: 1.5rem;



    }

    .modal-groups .form-control{

        height: 55px; 

        background: #f5f5f5;       

    }

</style>

<div class="col-xl-12 ">

    <div class="row justify-content-end mt-3">



         <?php include('user_topbar.php')?>



        <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap my-4">

            <div class="col-xl-8 col-lg-7 col-md-8 col-12">

                <div class="notification_Sec_main">

                    <h5>After Action Reports</h5>

                    <p>This report details the disaster relief tasks completed and provides additional information.

                    </p>                            

                </div>                    

            </div>

            <div class="col-xl-3 col-lg-4 col-md-4 col-12" >

                <div class="back_btn">

                    <a href="<?php echo get_site_url(); ?>/dashboard-reports-and-forms">Back</a>

                </div>

            </div>

        </div> 



        <div class="col-xl-11 col-lg-11 col-md-11 col-10 mb-4">

            <div class="btn_list_blog ">

              <!--  <a href="<//?php echo site_url('after-action-reports-forms'); ?>" class="mr-4">

                    <img src="<?//php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">

                    Create New Request

                </a>-->

                

                <a id= "cgr" href=":;" class="mr-4" data-toggle="modal" data-target="#selectGroupModal">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">

                    Create a New

                </a> 

                

                <a href="javascript:void(0);" data-toggle="modal" data-target="#filterModal">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/group_icon.png" class="img-fluid mr-2">

                    Filter By

                </a>

            </div>



             

        </div>





        <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-2 mb-4 donation_tab_pills ">

            <div class="main_table_sec">

                    <?php 

                          if(isset($_GET['submit']))

                            {

                                $current_user_id = get_current_user_id();

                                $Q_name  =  $_GET['q_name'];

                                $Q_date  =  $_GET['q_date'];

                                $Q_city  =  $_GET['q_city'];

                               $sql = "SELECT * FROM wp_posts WHERE post_title LIKE '%$Q_name%' AND post_date LIKE '%$Q_date%' AND post_type = 'afterActionReport'";

                                $reportData = $wpdb->get_results($sql);     

                            }

                            else

                            {

                                 $current_user_id = get_current_user_id();

                                 $reportData = get_posts( array(

                                     'post_type'      => 'afterActionReport',

                                     'post_status'    => 'publish',

                                     'post_author'    =>  $current_user_id,

                                     'numberposts' => 1000

                                ));       

                            }

                    ?>

                <div class="global-table">

                    <div class="table-responsive">

                        <table class="table table-hover">

                            <thead>

                                <tr>

                                     <th>Report No.</th>

                                        <th>Date</th>

                                        <th>Event</th>

                                        <th> Group</th>

                                        <th>Country</th>

                                        <th>State</th>

                                        <th>City</th>

                                         <th>Client Needs</th>

                                        <th>Contact Person</th>

                                         <th>Organization</th>

                                        <th>&nbsp;</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php if(!empty($reportData)){

                                 foreach($reportData as $report){

                                        $reportAuthor = $report->post_author;

                                        $rid = $report->ID;

                                        $postMeta = get_post_meta($rid);

                                        $gid = get_post_meta($report->ID, 'group_id', true );

                                        $args = array(

                                                        'post_type' => 'groups',

                                                        'post__in' => array($gid)

                                                    );

                                        $groupData = get_posts($args);

                                        $groupData = $groupData[0];

                                        

                                        $reportGroupID = $groupData->ID;

                                        $ralatedMembers = learndash_get_groups_user_ids($reportGroupID);

                                        if(in_array($current_user_id, $ralatedMembers) || $current_user_id == $reportAuthor ){

                                ?>

                                    <tr class="bg-color">

                                         <td><?php echo get_post_meta($rid,'report_id',true)?></td>

                                          <td><?php echo $report->post_date; ?></td>

                                           <td><?php echo $report->post_title; ?><?//php echo get_post_meta($rid,'action_disaster',true)?></td>

                                          <td><?php echo @$groupData->post_title;?></td>

                                           <td><?php echo get_user_meta($reportAuthor,'country',true)?></td>

                                           <td><?php echo get_user_meta($reportAuthor,'state',true)?></td>

                                           <td><?php echo get_user_meta($reportAuthor,'city',true)?></td>

                                          <td><?php echo get_post_meta($rid,'task1',true)?>,<?php echo get_post_meta($rid,'task2',true)?>,<?php echo get_post_meta($rid,'task3',true)?></td>

                                          <td><?php echo get_post_meta($rid,'action_supervisor',true)?></td>

                                          <td><?php echo get_post_meta($rid,'action_org_name',true)?></td>

                                            

                                      

                                        <td style="width:12%;">

                                           <a href="<?php echo site_url('after-action-report')."?id=".$rid; ?>" class="d-block">

                                                <div class="orange-box report-btn">

                                                    <p>View</p>

                                                </div>

                                            </a>

                                        </td>

                                    </tr>

                                <?php } 

                            }

                            }?>                                                  

                            </tbody>

                            

                        </table>

                    </div>

                </div>

               

            </div>

        </div>

      <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered create_tickit" role="document">

        <div class="modal-content">

            <div class="modal-header ">

                <h5 class="modal-title" id="exampleModalLongTitle">Filter by</h5>          

            </div>

            

            <form method="get" action="">

               <!-- <input type="hidden" name="search_DisasterReport" value="search_DisasterReport"/>

                 <input type="hidden" name="reportsforms_nonce" value="<?//php echo wp_create_nonce('reportsforms_nonce'); ?>" />-->

                <div class="modal-body main_profile_form">

                    <div class="form-group select_sec date_sec">

                        <label for="exampleFormControlSelect1">Filter by Date</label>                      

                        <div class="md-form md-outline input-with-post-icon datepicker" id="accLabels">

                            <input placeholder="Select date" type="date" name="q_date" id="groupDate" class="form-control">

                        </div>

                    </div>

                    <!--<div class="form-group select_sec">

                        <label for="exampleFormControlSelect1">Filter by City</label>

                        <select class="form-control" id="groupcity" name="q_city">

                            <option value="">Select</option>

                                         <?//php 

                                          //  foreach($allCities as $Cities){ 

                                               

                                           //  ?>

                                            <option value="<?//php echo $Cities->city; ?>" > <//?php echo $Cities->city; ?></option>

                                         <?//php }?>                                                    

                        </select>

                    </div>-->

                    <div class="form-group">

                        <label for="exampleInputPassword1">Filter by Name</label>

                        <input type="text" class="form-control" name="q_name" id="groupName" placeholder="Type here">

                    </div>

                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-6">

                            <div class="apply_btn ">

                                <button class="btn btn_apply"  data-dismiss="modal" aria-label="Close">Cancel</button>

                            </div>   

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-6">

                            <div class="apply_btn active">

                                <button type="submit" name ="submit" class="btn btn_apply">Apply filter</button>

                            </div>

                        </div>

                    </div>            

                </div>  

            </form>

        </div>

    </div>

</div>

        <?php include('common_user_footer.php')?>

    </div>        

</div>

<!-- Modal -->

<div class="modal fade" id="selectGroupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">

  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content modal-groups">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Published From:</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body mt-2 mb-2">

            <select class="form-control" name ="group_id" id="myGroup" required>

                <?php

                    $current_user_id = get_current_user_id();  

                      $args = array(

                        'numberposts'   => -1,

                        'post_type'     => 'groups',

                        'post_status'   => 'publish',

                        'author'        =>  $current_user_id,

                        /*'meta_query'   =>   array(

                                                'relation' => 'AND',

                                                array(

                                                        'key' => 'group_type',

                                                        'value'   => 'closed',

                                                        'compare' => '!='

                                                    )

                                                )*/

                            );

                        $all_groups = get_posts( $args );          

                        ?>  

                        <option>-- Select Group --</option>

                        <?php foreach($all_groups as $value){?>

                         <option value = "<?php echo $value->ID ?>" ><?php echo $value->post_title ?> - <?php echo get_post_meta($value->ID,'group_type',true)?> <?php echo 'group'?>

                        </option>

                <?php } ?>  

            </select>              

      </div>

       <div class="modal-footer">

         <button id="" onclick="updateLocationLink()">Start</button>

      </div>

    </div>

  </div>

</div>







<script>

function updateLocationLink() {

  var groupID = myGroup.value;

   window.open( 'after-action-reports-forms?gid=' + groupID );

}

</script>

