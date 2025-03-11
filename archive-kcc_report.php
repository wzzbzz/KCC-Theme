<?php 

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


get_header('dashboard'); ?>


<?php 

   global $wpdb; 
    
    $current_user_id = get_current_user_id();

    $user = new \KCC\User($current_user_id);

    
    if(empty(get_query_var('kcc_report_type'))){
        $report_type = \KCC\Reports\ReportType::fromSlug('disaster-situational-report');
    }else{
        $report_type = \KCC\Reports\ReportType::fromSlug(get_query_var('kcc_report_type'));
    }
    
   

    ?>


<div class="col-xl-12 ">

    <div class="row justify-content-end mt-3">

        <div class="col-xl-12 col-lg-11 col-md-11 col-10 d-flex align-items-center justify-content-end text-align-end flex-wrap my-4">

            <div class="col-xl-8 col-lg-7 col-md-8 col-12">

                <div class="notification_Sec_main">

                    <h5><?= $report_type->plural_name();?></h5>
                    <p><?= $report_type->description();?></p>                            

                </div>                    

            </div>

            <div class="col-xl-3 col-lg-4 col-md-4 col-12" >

                <div class="back_btn mt-0">

                    <a href="<?php echo get_site_url(); ?>/dashboard-reports-and-forms">Back</a>

                </div>

            </div>

        </div> 



        <div class="col-xl-11 col-lg-11 col-md-11 col-10 mb-4">

            <div class="btn_list_blog ">

                 <a href="<?=$report_type->create_url();?>" class="mr-4" data-toggle1="modal" data-target1="#selectGroupModal">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">
                    Create New
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

                       // $myResults = search_DisasterReport();

                          if(isset($_GET['submit']))
                            {

// this is the filters.  Do later.                               
pre("now implement the filters");
die;
                                $current_user_id = get_current_user_id();

                                $Q_name  =  $_GET['q_name'];

                                $Q_date  =  $_GET['q_date'];

                                $Q_city  =  $_GET['q_city'];

                                $sql = "SELECT * FROM wp_posts WHERE post_title LIKE '%$Q_name%' AND post_date LIKE '%$Q_date%' AND post_type ='reportsforms'";

                                $reportData = $wpdb->get_results($sql);     

                            }

                            else

                            {
                                $reports = $user->reports( $report_type->slug() );

                            }

                    ?>

                <div class="global-table">

                    <div class="table-responsive">

                        <table class="table table-hover">

                            <thead>

                                <tr>

                                    <th scope="col">Report No.</th>

                                    <th scope="col">Date</th>

                                    <th scope="col">Event</th>

                                    <th scope ="col">Group</th>

                                    <th scope="col">Country</th>

                                    <th scope="col">State</th>

                                    <th scope="col">City</th>

                                    <th scope="col">Contact Person</th>

                                  

                                    <th scope="col"></th>

                                </tr>

                            </thead>

                             <tbody>

                             <?php if(!empty($reports)){

                                    foreach($reports as $report){
                                        
                                         ?>

                                                <tr class="bg-color">

                                                    <td><?= $report->slug();?></td>

                                                    <td><?= $report->date(); ?></td>

                                                    <td><?php echo $report->title();?></td>

                                                    <td>
                                                        <?php if($report->group()):?>
                                                        <a href="<?= $report->group()->permalink();?>"><?= $report->group()->name();?></a>
                                                        <?php endif;?>
                                                    </td>

                                                    <td><?= $report->country()?></td>

                                                    <td><?= $report->state()?></td>

                                                    <td><?= $report->city()?></td>

                                                    <td><?= $report->contact_name()?></td>

                                                    <td style="width:12%;">

                                                        <a href="<?= $report->permalink();?>" class="d-block">

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

        

        </div>


    </div>        

</div>





<!-- Modal -->
<?php 
 $all_groups = $user->allMyGroups();

 $group_count = count($all_groups);

if($group_count==0){ ?>
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
   <p>Still groups are not created for this user.</p>
</div>
<?php } else{

   
    ?>
    <div class="modal fade" id="selectGroupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">

<div class="modal-dialog modal-dialog-centered">

  <div class="modal-content modal-groups">

    <div class="modal-header">

      <h5 class="modal-title" id="exampleModalLabel">Select Audience:</h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

    </div>

    <div class="modal-body mt-2 mb-2">
        <input type="hidden" name="report_type" id="report_type" value="<?= $report_type->slug();?>"/>
  <select class="form-control" name="group_id" id="myGroup" required>
      <?php
      
      if ($group_count > 1) {
          echo '<option>-- Select any group --</option>';
      }

      foreach ($all_groups as $group) {
          $selected = (count($all_groups) == 1) ? 'selected' : '';
          echo '<option value="' . $group->id() . '" ' . $selected . '>' . $group->name() . ' - ' . $group->type() . ' group</option>';
     } ?>
     
    </select>
</div>


<div class="modal-footer">
  <button id="" onclick="updateLocationLink()">Start</button>
 </div>

 <?php }?>
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

<?php get_footer(); ?>