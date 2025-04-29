 <?php 



/* Template Name: Survivors Received Requests*/

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

</style>

<div class="col-xl-12 ">

    <div class="row justify-content-end mt-3">



         <?php include('user_topbar.php')?>



        <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap my-4">

            <div class="col-xl-8 col-lg-7 col-md-8 col-12">

                <div class="notification_Sec_main">

                    <h5>Survivors Needs Intake Form</h5>

                </div>                    

            </div>

        </div> 



        <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-2 mb-4 donation_tab_pills ">

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

                    

                    

                    

                 <div class="global-table">

                    <div class="table-responsive">

                        <table class="table table-hover">

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

                                        <th><?php echo get_post_meta($rid,'report_id',true)?></th>

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

        <script>

        function notApplied(){

            alert("Sorry, No one has applied on this report yet, So you can not access it right now.");

        }

        </script>

        <?php include('common_user_footer.php')?>   

    </div>        

</div>