<?php 



/* Template Name: Disaster Situational Report*/

get_header('new'); ?>





<?php 

   global $wpdb; 

    $allCities = $wpdb->get_results("SELECT * FROM `wp_cities`");     
    
    $current_user_id = get_current_user_id();
    
    $post_details = $wpdb->get_results( 
        $wpdb->prepare(
            "
            SELECT * 
            FROM {$wpdb->posts} 
            WHERE post_author = %d
            AND post_type = 'groups'
            ",
            $current_user_id
        )
    );
   echo $group_result= count($post_details);
    // Check if any posts were found
    if ( !empty($post_details) ) {
        foreach ( $post_details as $post ) {
            // echo 'Post Title: ' . $post->post_title . '<br>';
            // echo 'Post Content: ' . $post->post_content . '<br>';
            // echo 'Post Date: ' . $post->post_date . '<br>';
            // echo '<hr>';
        }
    } else {
        // echo 'No posts found for this user.';
    }

    ?>

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

        <div class="col-xl-12 col-lg-11 col-md-11 col-10 d-flex align-items-center justify-content-end text-align-end flex-wrap my-4">

            <div class="col-xl-8 col-lg-7 col-md-8 col-12">

                <div class="notification_Sec_main">

                    <h5>Disaster Situational Report</h5>

                    

                    <p>These reports detail the location, type, and severity of disasters as well as critical logistics and transportation information.

                    </p>                            

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

                       // $myResults = search_DisasterReport();

                          if(isset($_GET['submit']))

                            {

                               

                                $current_user_id = get_current_user_id();

                                $Q_name  =  $_GET['q_name'];

                                $Q_date  =  $_GET['q_date'];

                                $Q_city  =  $_GET['q_city'];

                                $sql = "SELECT * FROM wp_posts WHERE post_title LIKE '%$Q_name%' AND post_date LIKE '%$Q_date%' AND post_type ='reportsforms'";

                                $reportData = $wpdb->get_results($sql);     

                            }

                            else

                            {

                                 $current_user_id = get_current_user_id();

                                 $reportData = get_posts( array(

                                     'post_type'      => 'reportsforms',

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

                                                    <td><?php echo get_the_time('m-d-Y', $rid) ?></td>

                                                    <td><?php echo $report->post_title;?></td>

                                                    <td><?php echo @$groupData->post_title;?></td>

                                                    <td><?php echo get_user_meta($reportAuthor,'country',true)?></td>

                                                    <td><?php echo get_user_meta($reportAuthor,'state',true)?></td>

                                                    <td><?php echo get_user_meta($reportAuthor,'city',true)?></td>

                                                    <td><?php echo get_post_meta($rid,'rf_contact_person',true)?></td>

                                                    <td style="width:12%;">

                                                        <a href="<?php echo site_url('disaster-situational-report')."?id=".$rid; ?>" class="d-block">

                                                            <div class="orange-box report-btn">

                                                                <p>View</p>

                                                            </div>

                                                        </a>

                                                    </td>

                                                </tr>

                                          <?php }}

                                        }?>                            

                                                        

                        </tbody>

                            

                        </table>

                    </div>

                </div>

            </div>

        

        </div>

      <?php include('common_user_footer.php')?>

      <!-- <script>

            function goToGroup()

            {

                 const href = document.getElementById('cgr');

                  //  var hash = location.hash.replace( /^#/, '' ); 

                  //$('div.tab-pane.active').removeClass('active');

                



                   $(#pills-profile).tab('show');

                    $(#pills-profile).addClass('active');

                  

            }

            window.addEventListener("hashchange", goToGroup, false);



      </script> -->



      <script type="text/javascript">

        $(function() {

          // Javascript to enable link to tab

          var hash = document.location.hash;

          if (hash) {

            console.log(hash);

            $('.nav-link a[href='+hash+']').tab('show');

          }



          // Change hash for page-reload

          $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            window.location.hash = e.target.hash;

          });

        });

    </script>



    </div>        

</div>





<!-- Modal -->
<?php if($group_result==0){ ?>
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

      <h5 class="modal-title" id="exampleModalLabel">Published From:</h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

    </div>

    <div class="modal-body mt-2 mb-2">
  <select class="form-control" name="group_id" id="myGroup" required>
      <?php
      $current_user_id = get_current_user_id();  

      $args = array(
          'numberposts'   => -1,
          'post_type'     => 'groups',
          'post_status'   => 'publish',
          'author'        => $current_user_id,
          'meta_query'    => array(
              'relation' => 'AND',
              array(
                  'key'     => 'group_type',
                  'value'   => 'closed',
                  'compare' => '!='
              )
          )
      );

      $all_groups = get_posts($args);
      $group_count = count($all_groups);

      if ($group_count > 1) {
          echo '<option>-- Select any group --</option>';
      }

      foreach ($all_groups as $value) {
          $selected = ($group_count == 1) ? 'selected' : '';
          echo '<option value="' . $value->ID . '" ' . $selected . '>' . $value->post_title . ' - ' . get_post_meta($value->ID, 'group_type', true) . ' group</option>';
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





<script>

//  var urlmenu = document.getElementById( 'myGroup' );

 // urlmenu.onchange = function() {

 //     window.open( 'create-disaster-report?gid=' + this.options[ this.selectedIndex ].value );

 //};

</script>





<script>

function updateLocationLink() {

  var groupID = myGroup.value;

   window.open( 'create-disaster-report?gid=' + groupID );

}

</script>









