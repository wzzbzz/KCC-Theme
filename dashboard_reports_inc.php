<style>
a.disabled {
  pointer-events: none;
  cursor: default;
}
</style>
      <?php 
        $current_user_id = get_current_user_id();  
        $args = array(
        'numberposts'   => -1,
        'post_type'     => 'groups',
        'post_status'   => 'publish',
        'author'       =>  $current_user_id
        );
        $all_groups = get_posts( $args );
      
        foreach($all_groups as $value){
                          
        $grp_id[]=$value->ID;
        }  
      // print_r($grp_id);
    ?>
<div class="tab-content" id="pills-tabContent">
   <div class="tab-pane fade show active" id="pills-reports" role="tabpanel" aria-labelledby="pills-reports-tab">
      <ul class="nav nav-pills nav-pills1 mb-3"  id="pills1-tab" role="tablist">
             <li class="nav-item">
                <a class="nav-link nav2-link active"
                   id="pills-disater-tab"
                   data-toggle="pill"
                   href="#pills-disater"
                   role="tab"
                   aria-controls="pills-disater"
                   aria-selected="true"
                   >Disaster Situational Report</a>
             </li>

             <li class="nav-item">
                <a
                   class="nav-link nav2-link"
                   id="pills-org-tab"
                   data-toggle="pill"
                   href="#pills-org"
                   role="tab"
                   aria-controls="pills-org"
                   aria-selected="false"
                   >Organization Volunteer Request</a
                   >
             </li>
             <li class="nav-item">
                <a
                   class="nav-link nav2-link"
                   id="pills-intake-tab"
                   data-toggle="pill"
                   href="#pills-intake"
                   role="tab"
                   aria-controls="pills-intake"
                   aria-selected="false"
                   >Survivors Needs intake form</a
                   >
             </li>
             <li class="nav-item">
                <a
                   class="nav-link nav2-link"
                   id="pills-afteraction-tab"
                   data-toggle="pill"
                   href="#pills-afteraction"
                   role="tab"
                   aria-controls="pills-afteraction"
                   aria-selected="false"
                   >After Action Report</a
                   >
             </li>
      </ul>
	<div class="col-xl-12 btn-set">
	   <div class="tab-table">
          <div class="tab-content" id="pills1-tabContent">
            <div class="tab-pane fade show active" id="pills-disater" role="tabpanel" aria-labelledby="pills-disater-tab">
                <div class="d-lg-flex justify-content-lg-end">
                    <div class="donate_btn_right1">  
                        <a id= "cgr" href=":;" class="mr-4" data-toggle="modal" data-target="#disasterModal">
                            <button class="btn now_donate">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">
                            Create a New</button>
                        </a> 
                    </div>
                </div>
                  <?php 
                      $current_user_id = get_current_user_id();
                      $reportData = get_posts( array(
                                                      'post_type'      => 'reportsforms',
                                                      'post_status'    => 'publish',
                                                      'post_author'    =>  $current_user_id,
                                                       'numberposts' => 1000
                                                 ) );
                 ?>


               <div class="global-table d-board w-100">
                  <div class="table-responsive">
                  <table class="table table-hover">
                     <thead>
                        <tr>
                            <th>Report No.</th>
                            <th>Date</th>
                            <th>Event</th>
                            <th>Group</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Contact person</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>&nbsp;</th>
                        </tr>
                     </thead>
                     <tbody>

                      
                           <?php if(!empty($reportData)){
                              foreach($reportData as $report){
                                  $rid = $report->ID;
                                  $postAuthor = $report->post_author;
                                  $postMeta = get_post_meta($rid);
                                  $gid = get_post_meta($report->ID, 'group_id', true );
                                  $allRnnUser= get_post_meta($rid,'rf_publish',true);
                                   $gid = get_post_meta($report->ID, 'group_id', true );
                                        $args = array(
                                                        'post_type' => 'groups',
                                                        'post__in' => array($gid)
                                                    );

                                $groupData = get_posts($args);
                                $groupData =$groupData[0];
                                 $reportGroupID = $groupData->ID;
                                 $ralatedMembers = learndash_get_groups_user_ids($reportGroupID);
                                  if(in_array($current_user_id, $ralatedMembers) || $current_user_id == $postAuthor ){
                               
                           ?>
                                 <tr class="bg-color">
                                     <td><?php echo get_post_meta($rid,'report_id',true)?></td>
                                     <td><?php echo get_post_meta($rid,'rf_date',true)?></td>
                                     <td><?php echo $report->post_title;?></td>
                                     <td><?php echo @$groupData->post_title;?></td>
                                     <!--<td><//?php echo get_post_meta($rid,'rf_org',true)?></td>-->
                                     <td><?php echo get_user_meta($postAuthor,'country',true)?></td>
                                     <td><?php echo get_user_meta($postAuthor,'state',true)?></td>
                                     <td><?php echo get_user_meta($postAuthor,'city',true)?></td>
                                     <td><?php echo get_post_meta($rid,'rf_contact_person',true)?></td>
                                      <td>
                                           <div class="organization">
                                                <a href="javascript:void(0);" title="<?php echo get_post_meta($rid,'rf_email',true)?>"><?php echo get_post_meta($rid,'rf_email',true)?></a>
                                            </div>
                                        </td>
                                        <td style="width:15%;">
                                            <div class="mail-section">
                                                <div>
                                                    <a href="tel:<?php echo get_post_meta($rid,'rf_phone',true)?>" title="<?php echo get_post_meta($rid,'rf_phone',true)?>"><?php echo get_post_meta($rid,'rf_phone',true)?></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:12%;">
                                            <a href="<?php echo site_url('disaster-situational-report')."?id=".$rid; ?>" class="d-block">
                                                <div class="orange-box report-btn">
                                                    <p>View</p>
                                                </div>
                                            </a>
                                        </td>
                                 </tr>

                         <?php } }
                      }?>

                     </tbody>
                  </table>
                  </div>
               </div>
           
         </div>
             <div class="tab-pane fade" id="pills-org" role="tabpanel" aria-labelledby="pills-org-tab">
                 <div class="d-lg-flex justify-content-lg-end">
                    <div class="donate_btn_right1">        
                         <a id= "cgr" href=":;" class="mr-4" data-toggle="modal" data-target="#organizationModal">
                            <button class="btn now_donate">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">
                            Create a New</button>
                        </a> 
                        <div class="btn_list_blog mt-3">
                            <a href="<?php echo site_url('received-request')?>">
                                Requests Received
                            </a>
                        </div>
                    </div>
                 </div>
             <?php 
                   $current_user_id = get_current_user_id();
                   $reportData = get_posts( array(
                                                'post_type'      => 'volunteer_request',
                                                'post_status'    => 'publish',
                                                'author'    =>  $current_user_id,
                                                 'numberposts' => 1000
                                           ) );
              ?>
            <div class="global-table d-board w-100">
               <div class="table-responsive">
                  <table class="table table-hover">
                     <thead>
                         <tr>
                             <th>Report No.</th>
                             <th>Date</th>
                             <th>Event</th>
                             <th>Group</th>
                             <th>Country</th>
                             <th>State</th>
                             <th>city</th>
                             <th>Contact Person</th>
                             <th>Organization</th>
                             <th>&nbsp;</th>
                            
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(!empty($reportData)){
                           foreach($reportData as $report){
                               $reportAuthor =  $report->post_author;
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
                                 $reportGroupID = $groupData->ID;
                                 $ralatedMembers = learndash_get_groups_user_ids($reportGroupID);
                                  if(in_array($current_user_id, $ralatedMembers) || $current_user_id == $reportAuthor ){
                        ?>
                              <tr class="bg-color">
                                          <td><?php echo get_post_meta($rid,'report_id',true)?></td>
                                        <td><?php echo $report->post_date; ?></td>
                                        <td><?php echo $report->post_title;?>
                                          <td><?php echo @$groupData->post_title;?></td>
                                        <td><?php echo get_user_meta($reportAuthor,'country',true)?></td>
                                        <td><?php echo get_user_meta($reportAuthor,'state',true)?></td>
                                        <td><?php echo get_user_meta($reportAuthor,'city',true)?></td>
                                         <td><?php echo get_post_meta($rid,'vol_person',true)?></td>
                                         <td><?php echo get_post_meta($rid,'vol_org',true)?></td>
                                        
                                        
                                        <?//php echo get_post_meta($rid,'report_status',true)?>
                                        <?php if($current_user_id != $report->post_author){ ?>
                                        <td>
                                            <a href="<?php echo site_url('view-organization-request-form')."?id=".$rid; ?>" class="d-block" target="_blank">
                                                <div class="orange-box report-btn">
                                                    <p>View</p>
                                                </div>
                                            </a>
                                        </td>
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
                                        <?php } else{ ?>
                                          <td>
                                            <a href="<?php echo site_url('view-organization-request-form')."?id=".$rid; ?>" class="d-block" target="_blank">
                                                <div class="orange-box report-btn">
                                                    <p>View</p>
                                                </div>
                                            </a>
                                        </td>
                                        <?php } }?>     
                                    </tr>
                       
                           <?php } }?>
                               
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="pills-intake" role="tabpanel" aria-labelledby="pills-intake-tab">
             <div class="d-lg-flex justify-content-lg-end">
                <div class="donate_btn_right1">        
                    <a id= "cgr" href=":;" class="mr-4" data-toggle="modal" data-target="#survivorModal">
                        <button class="btn now_donate">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">
                        Create a New</button>
                    </a> 
                    <div class="btn_list_blog mt-3">
                        <a href="<?php echo site_url('survivors-received-request')?>">
                            Requests Received
                        </a>
                   </div>
                </div>
            </div>

            <?php 
                $current_user_id = get_current_user_id();
                $reportData = get_posts( array(
                                                'post_type'      => 'supplierNeedIntake',
                                                'post_status'    => 'publish',
                                                'author'         =>  $current_user_id,
                                                 'numberposts' => 1000
                                           ) );
             ?>
            <div class="global-table d-board w-100">
               <div class="table-responsive">
                  <table class="table table-hover">
                     <thead>
                        <tr>
                            <th>Report No.</th>
                            <th>Date</th>
                            <th>Event</th>
                            <th>Group</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Contact Person</th>
                            <th>Organization</th>
                            <th>&nbsp;</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(!empty($reportData)){
                           foreach($reportData as $report){
                               $rid = $report->ID;
                               $reportAuthor =  $report->post_author;
                               $postMeta = get_post_meta($rid);
                               $track_url  = site_url('track-intake-form-request');
                               $gid = get_post_meta($report->ID, 'group_id', true );
                               $allRnnUser= get_post_meta($rid,'rf_publish',true);
                                $gid = get_post_meta($report->ID, 'group_id', true );
                                        $args = array(
                                                        'post_type' => 'groups',
                                                        'post__in' => array($gid)
                                                    );

                                $groupData = get_posts($args);
                                $groupData =$groupData[0];
                               $reportGroupID = $groupData->ID;
                                $ralatedMembers = learndash_get_groups_user_ids($reportGroupID);
                                if(in_array($current_user_id, $ralatedMembers) || $current_user_id == $reportAuthor ){
                        ?>
                             <tr class="bg-color">
                                 <td><?php echo get_post_meta($rid,'report_id',true)?></td>
                                        <td><?php echo $report->post_date; ?></td>
                                        <td><?php echo $report->post_title;?></td>
                                        <td><?php echo @$groupData->post_title;?></td>
                                       <td><?php echo get_user_meta($reportAuthor,'country',true)?></td>
                                        <td><?php echo get_user_meta($reportAuthor,'state',true)?></td>
                                         <td><?php echo get_user_meta($reportAuthor,'city',true)?></td>
                                         <td><?php echo get_post_meta($rid,'intake_firstName',true)?></td>
                                          <td><?php echo get_post_meta($rid,'vol_org',true)?></td>
                                         <?php if($current_user_id != $report->post_author){ ?>
                                         <td><a href="<?php echo site_url('view-survivor-need-intake-request-form')."?id=".$rid; ?>" class="d-block" target="_blank">
                                                <div class="orange-box report-btn">
                                                    <p>View</p>
                                                </div>
                                            </a>
                                        </td>
                                         
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
                                        <?php } else{ ?>
                                        <td><a href="<?php echo site_url('view-survivor-need-intake-request-form')."?id=".$rid; ?>" class="d-block" target="_blank">
                                                <div class="orange-box report-btn">
                                                    <p>View</p>
                                                </div>
                                            </a>
                                        </td>
                                        <?php } ?>     
                              </tr>
                        <?php }} } ?>
                              
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="pills-afteraction" role="tabpanel" aria-labelledby="pills-afteraction-tab">
              <div class="d-lg-flex justify-content-lg-end">
                    <div class="donate_btn_right1">        
                       <a id= "cgr" href=":;" class="mr-4" data-toggle="modal" data-target="#afterActionModal">
                            <button class="btn now_donate">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">
                            Create a New</button>
                       </a>
                    </div>
                 </div>
             <?php 
                $current_user_id = get_current_user_id();
                $reportData = get_posts( array(
                                          'post_type'      => 'afterActionReport',
                                          'post_status'    => 'publish',
                                          'post_author'    =>  $current_user_id,
                                           'numberposts' => 1000
                                     ) );
              ?>
            <div class="global-table d-board w-100">
               <div class="table-responsive">
                  <table class="table table-hover">
                     <thead>
                           <tr>
                               <th>Report No.</th>
                            <th>Date</th>
                            <th>Event</th>
                            <th>Group</th>
                            <th>Contact person</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>&nbsp;</th>
                           </tr>
                     </thead>
                     <tbody>
                        <?php if(!empty($reportData)){
                                          foreach($reportData as $report){
                                          $rid = $report->ID;
                                          $postAuthor = $report->post_author;
                                          $postMeta = get_post_meta($rid);
                                          $gid = get_post_meta($report->ID, 'group_id', true );
                                          $allRnnUser= get_post_meta($rid,'rf_publish',true);
                                            $gid = get_post_meta($report->ID, 'group_id', true );
                                            $args = array(
                                                            'post_type' => 'groups',
                                                            'post__in' => array($gid)
                                                        );
    
                                            $groupData = get_posts($args);
                                            $groupData =$groupData[0];
                                          $reportGroupID = $groupData->ID;
                                            $ralatedMembers = learndash_get_groups_user_ids($reportGroupID);
                                            if(in_array($current_user_id, $ralatedMembers) || $current_user_id == $reportAuthor ){
                        ?>
                                 <tr class="bg-color">
                                        <td><?php echo get_post_meta($rid,'report_id',true)?></td>
                                        <td><?php echo get_post_meta($rid,'action_date',true)?></td>
                                        <td><?php echo get_post_meta($rid,'action_disaster',true)?></td>
                                        <td><?php echo @$groupData->post_title;?></td>
                                    
                                        <td><?php echo get_post_meta($rid,'action_supervisor',true)?></td>
                                        <td>
                                           <div class="organization">
                                                <a href="javascript:void(0);" title="<?php echo get_post_meta($rid,'action_email',true)?>"><?php echo get_post_meta($rid,'action_email',true)?></a>
                                            </div>
                                        </td>
                                        <td style="width:15%;">
                                            <div class="mail-section">
                                                <div>
                                                    <a href="tel:<?php echo get_post_meta($rid,'action_phone',true)?>" title="<?php echo get_post_meta($rid,'action_phone',true)?>"><?php echo get_post_meta($rid,'action_phone',true)?></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:12%;">
                                            <a href="<?php echo site_url('after-action-report')."?id=".$rid; ?>" class="d-block">
                                                <div class="orange-box report-btn">
                                                    <p>View</p>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                    <?php } } } ?>
                            
                     </tbody>
                  </table>
               </div>
            </div>
         </div>


      </div>
        </div>
    </div>    
   
   </div>

</div>

<script>
function notApplied() {
  alert("Sorry! Nobody applied on this report yet, so you can not track this request.");
}
</script>
<!-- Disaster Modal starts -->
<div class="modal fade" id="disasterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content modal-groups">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Published From:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mt-2 mb-2">
            <select class="form-control" name ="group_id" id="disaster" required>
                <?php
                    $current_user_id = get_current_user_id();  
                      $args = array(
                        'numberposts'   => -1,
                        'post_type'     => 'groups',
                        'post_status'   => 'publish',
                        'author'       =>  $current_user_id,
                         /*'meta_query' =>   array(
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
                        <option>-- Select any group --</option>
                        <?php foreach($all_groups as $value){?>
                         <option value = "<?php echo $value->ID ?>" ><?php echo $value->post_title ?> - <?php echo get_post_meta($value->ID,'group_type',true)?> <?php echo 'group'?>
                        </option>
                <?php } ?>  
            </select>              
      </div>
      
       <div class="modal-footer">
          <button id="" onclick="updatedisasterLocationLink()">Start</button>
        </div>
    </div>
  </div>
</div>

<script>
function updatedisasterLocationLink() {
  var groupID = disaster.value;
   window.open( 'create-disaster-report?gid=' + groupID );
}
</script>
<!-- Disaster Modal Ends -->


<!-- Organization Modal starts -->
<div class="modal fade" id="organizationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content modal-groups">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Published From:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mt-2 mb-2">
            <select class="form-control" name ="group_id" id="organization" required>
                <?php
                    $current_user_id = get_current_user_id();  
                      $args = array(
                        'numberposts'   => -1,
                        'post_type'     => 'groups',
                        'post_status'   => 'publish',
                        'author'       =>  $current_user_id,
                         'meta_query' =>   array(
                                                'relation' => 'AND',
                                                array(
                                                        'key' => 'group_type',
                                                        'value'   => 'closed',
                                                        'compare' => '!='
                                                    )
                                                )
                            );
                        $all_groups = get_posts( $args );          
                        ?>     
                        <option>-- Select any group --</option>
                        <?php foreach($all_groups as $value){?>
                         <option value = "<?php echo $value->ID ?>" ><?php echo $value->post_title ?> - <?php echo get_post_meta($value->ID,'group_type',true)?> <?php echo 'group'?>
                        </option>
                <?php } ?>  
            </select>              
      </div>
        <div class="modal-footer">
          <button id="" onclick="updateLocationorganizationLink()">Start</button>
        </div>
    </div>
  </div>
</div>

<script>
function updateLocationorganizationLink() {
  var groupID = organization.value;
   window.open( 'create-organization-report-form?gid=' + groupID );
}
</script>
<!-- Organization Modal Ends -->


<!-- Survivor Modal starts -->
<div class="modal fade" id="survivorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content modal-groups">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Published From:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mt-2 mb-2">
            <select class="form-control" name ="group_id" id="survivor" required>
                <?php
                    $current_user_id = get_current_user_id();  
                      $args = array(
                        'numberposts'   => -1,
                        'post_type'     => 'groups',
                        'post_status'   => 'publish',
                        'author'       =>  $current_user_id,
                         'meta_query' =>   array(
                                                'relation' => 'AND',
                                                array(
                                                        'key' => 'group_type',
                                                        'value'   => 'closed',
                                                        'compare' => '!='
                                                    )
                                                )
                            );
                        $all_groups = get_posts( $args );          
                        ?>     
                        <option>-- Select any group --</option>
                        <?php foreach($all_groups as $value){?>
                         <option value = "<?php echo $value->ID ?>" ><?php echo $value->post_title ?> - <?php echo get_post_meta($value->ID,'group_type',true)?> <?php echo 'group'?>
                        </option>
                <?php } ?>  
            </select>              
      </div>
         <div class="modal-footer">
          <button id="" onclick="updateLocationsurvivorLink()">Start</button>
        </div>
    </div>
  </div>
</div>

<script>
function updateLocationsurvivorLink() {
  var groupID = survivor.value;
   window.open( 'survivor-need-intake-form?gid=' + groupID );
}
</script>
<!-- Survivor Modal Ends -->


<!-- After Action Modal starts -->
<div class="modal fade" id="afterActionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content modal-groups">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Published From:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mt-2 mb-2">
            <select class="form-control" name ="group_id" id="afterAction" required>
                <?php
                    $current_user_id = get_current_user_id();  
                      $args = array(
                        'numberposts'   => -1,
                        'post_type'     => 'groups',
                        'post_status'   => 'publish',
                        'author'       =>  $current_user_id,
                         'meta_query' =>   array(
                                                'relation' => 'AND',
                                                array(
                                                        'key' => 'group_type',
                                                        'value'   => 'closed',
                                                        'compare' => '!='
                                                    )
                                                )
                            );
                        $all_groups = get_posts( $args );          
                        ?>     
                        <option>-- Select any group --</option>
                        <?php foreach($all_groups as $value){?>
                         <option value = "<?php echo $value->ID ?>" ><?php echo $value->post_title ?> - <?php echo get_post_meta($value->ID,'group_type',true)?> <?php echo 'group'?>
                        </option>
                <?php } ?>  
            </select>              
      </div>
      <div class="modal-footer">
          <button id="" onclick="updateLocationafterActionLink()">Start</button>
        </div>
    </div>
  </div>
</div>



<script>
function updateLocationafterActionLink() {
  var groupID = afterAction.value;
   window.open( 'after-action-reports-forms?gid=' + groupID );
}
</script>
<!-- After Action Modal Ends -->




