<?php 



  $current_slug = add_query_arg( array(), $wp->request );
  $current_url =  home_url( $wp->request );
  $current_user_id = get_current_user_id();

  $user = new KCC\User($current_user_id);
  $group = new KCC\Group($post->ID);


  //echo $groupId =  $_GET['group_id'];
  //$group_type = get_post_meta($groupId,'group_type',true);
// $all_member_ids = learndash_get_groups_user_ids($groupId);
//$userList = learndash_get_groups_user_ids($grpupVal->ID);

  $all_member_ids = $group->getMemberIds();

  //print_r($all_member_ids);
?>
<div class="row">
	<div class="col-lg-12">
		<div class="report-media-tab">
			<ul class="nav nav-pills report-media-tab" id="pills-tab" role="tablist">
			  	<li class="nav-item">
			    	<a class="nav-link active" id="pills-disaster-tab" data-toggle="pill" href="#pills-disaster" role="tab" aria-controls="pills-disaster" aria-selected="true">Disaster Situational Report</a>
			  	</li>
			  	<li class="nav-item">
			    	<a class="nav-link" id="pills-organization-tab" data-toggle="pill" href="#pills-organization" role="tab" aria-controls="pills-organization" aria-selected="false">Organization Volunteer Request</a>
			  	</li>
			  	<li class="nav-item">
			    	<a class="nav-link" id="pills-survivors-tab" data-toggle="pill" href="#pills-survivors" role="tab" aria-controls="pills-survivors" aria-selected="false">Survivors Needs Intake Form</a>
			  	</li>
			  	<li class="nav-item">
			    	<a class="nav-link" id="pills-after-tab" data-toggle="pill" href="#pills-after" role="tab" aria-controls="pills-after" aria-selected="false">After Action Report</a>
			  	</li>
			</ul>
		</div>
	</div>
	<div class="col-xl-12 btn-set">
		<div class="tab-table">
			<div class="tab-content" id="pills-tabContent">
				<!-- Tab 1 -->
			  	<div class="tab-pane fade show active" id="pills-disaster" role="tabpanel" aria-labelledby="pills-disaster-tab">
                    <div class="d-lg-flex justify-content-lg-end">
                        <div class="donate_btn_right">        
                            <button class="btn now_donate" onclick="location.href='<?php echo site_url('create-new-report?gid='.$post->ID)?>'">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="pr-2">Create a New</button>
                        </div>
                    </div>

                    <?php 

                     $reports = $group->reports("disaster-situational-report");

                     
                    

                    ?>
			  		<div class="global-table">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <?= KCC\Reports\DisasterSituationalReportView::tableHeader(); ?>
                                </thead>
                                <tbody>
                                <?php if(!empty($reports)){
                                    foreach($reports as $report){
                                        $view = new KCC\Reports\DisasterSituationalReportView($report);
                                        $view->render_table_row();
                                   }
                            } else{ ?><tr><td style="color:#FF0000;"><?php echo "There are no reports" ?></td></tr><?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
			  	</div>
			  	<div class="tab-pane fade" id="pills-organization" role="tabpanel" aria-labelledby="pills-organization-tab">
                    <div class="d-flex justify-content-end">
                        <div class="donate_btn_right d-flex">   
                            
                            <button class="btn now_donate" onclick="location.href='<?php echo site_url('create-organization-volunteer-request?gid='.$post->ID)?>'">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="pr-2">Create a New</button>
                            <div class="btn_list_blog mt-5 ml-2">
                                <a href="<?php echo site_url('received-request')?>">
                                    Requests Received
                                </a>
                            </div>
                        </div>
                    </div>
                     
			  		<!-- Tab  2  -->

                    <?php 
                          $reports = $group->reports("organization-volunteer-request");
                    ?>
			  		<div class="global-table">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <?= KCC\Reports\OrganizationVolunteerRequestView::tableHeader(); ?>
                                </thead>
                                <tbody>
                                
                                 <?php 
                                 $current_user_id = get_current_user_id();
                                 if(!empty($reports)){

                                    foreach($reports as $report){
                                        $view = new KCC\Reports\OrganizationVolunteerRequestView($report);
                                        $view->render_table_row();
                                        
                                     }} else{?>
                                        <tr>
                                            <td style="color:#FF0000;"><?php echo "There are no reports" ?></td>
                                        </tr>
                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
			  	</div>
			  	<div class="tab-pane fade" id="pills-survivors" role="tabpanel" aria-labelledby="pills-survivors-tab">
                    <div class="d-flex justify-content-end">
                        <div class="donate_btn_right d-flex">        
                            <button class="btn now_donate" onclick="location.href='<?php echo site_url('create-survivor-need-intake-form?gid='.$post->ID)?>'">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="pr-2">Create a New</button>
                              <div class="btn_list_blog mt-5 ml-2">
                                <a href="<?php echo site_url('survivors-received-request')?>">
                                    Requests Received
                                </a>
                            </div>
                        </div>
                    </div>
                    
			  		
                <!-- Tab 3  -->

                    <?php 
                         $current_user_id = get_current_user_id();
                         /*get post for current user*/
                            $reportData = get_posts( array(
                                                         'post_type'      => 'supplierNeedIntake',
                                                         'post_status'    => 'publish',
                                                        // 'author'         =>  $current_user_id,
                                                         'post__not_in'   => array($currentID),
                                                         'numberposts' => 1000,
                                                          'meta_query'    => array(
                                                                    'relation'      => 'AND',
                                                                    array(
                                                                    'key' => 'group_id',
                                                                    'value'   => $post->ID,
                                                                    'compare' => '='
                                                                    )
                                                                    )
                                                    ) ); 
                                     /*   $post_ids = array();
                                        foreach($currentUserPosts2 as $data2) {
                                         $post_ids[] = $data2->ID;
                                        }*/
                                     
                         /*get post for current user*/
                         
                         // now exclude current user's post from all posts
                           /*  $reportData = get_posts( array(
                                                         'post_type'      => 'supplierNeedIntake',
                                                         'post_status'    => 'publish',
                                                         'post__not_in'   => $post_ids,
                                                          'numberposts' => 1000
                                                    ) );*/
                    ?>
			  		<div class="global-table">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Report No.</th>
                                        <th>Date</th>
                                        <!--<th>Event</th>-->
                                        <th>Client Needs</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Contact Person</th>
                                        <th>&nbsp;</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php if(!empty($reportData)){
                                    foreach($reportData as $report){
                                        $rid = $report->ID;
                                        
                                        $postMeta = get_post_meta($rid);
                                        $postauthor = $report->post_author;
                                        $all_member_ids = learndash_get_groups_user_ids($post->ID);
                                        $reportID = get_post_meta($rid,'report_id',true);
                                         if($current_user_id == $postauthor || in_array($current_user_id, $all_member_ids)){
                                         ?>


                                    <tr class="bg-color">
                                         <th><?php echo get_post_meta($rid,'report_id',true)?></th>
                                          <td><?php echo date("m-d-Y",strtotime($report->post_date)); ?></td>
                                        <!-- <td><?//php echo $report->post_title;?></td>-->
                                         
                                         <td><?php echo get_post_meta($rid,'client_need',true)?></td>
                                        <td><?php echo get_user_meta($postauthor,'country',true)?></td>
                                        <td><?php echo get_user_meta($postauthor,'state',true)?></td>
                                        <td><?php echo get_user_meta($postauthor,'city',true)?></td>
                                        
                                        <td><?php echo get_post_meta($rid,'intake_firstName',true)?> <?php echo get_post_meta($rid,'intake_lastName',true)?></td>
                                      <?php if($current_user_id != $report->post_author){ ?>
                                        <td style="width:12%;">
                                          <?php if( (get_post_meta($rid,'report_status_'.$current_user_id,true) == 'applied') && (get_post_meta($rid,'report_applied_by_'.$current_user_id,true) == $current_user_id)){ ?>
                                               
                                               <?php 
                        
                                               echo '<div class="orange-box report-btn">
                                                              <button type ="submit" class="orange-box"  disabled><p>Applied</p></button>
                                                     </div>' ?> 
                                                
                                             <?php } else { ?>
                                             
                                         <?php 
                                              //echo $rid;
                                               echo   "<form method = 'POST' action ='' class='row mediadoc_form' id='disaster_media' enctype='multipart/form-data'>";
                                               echo   "<div class='orange-box report-btn'>";
                                               echo   "<input type='hidden' name ='page_url'  value= '$current_url'>";
                                               echo   "<input type='hidden' name='survivorNeedIntakeReport_alert' value='survivorNeedIntakeReport_alert'/>";
                                               echo   "<input type ='hidden' name ='post_author'  id='post_author'  value ='$report->post_author'>";
                                               echo   "<input type= 'hidden' name = 'uniqueReportID' value= '$reportID'>";
                                               echo   "<input type ='hidden' name ='rid'  id='rid'  value ='$rid'>";
                                                echo  '<button type ="submit" class="orange-box"><p>Apply</p></button>';
                                                echo  '</div>'; 
                                                echo  '</form>';
                                        ?>
                                             
                                        <?php } ?>
                                        </td>
                                        <td>
                                           <a href="<?php echo site_url('view-survivor-need-intake-request-form')."?id=".$rid; ?>" class="d-block" target="_blank">
                                                <div class="orange-box report-btn">
                                                    <p>View</p>
                                                </div>
                                            </a>
                                        </td>
                                        <?php } else{ ?>
                                            <td>
                                           <a href="<?php echo site_url('view-survivor-need-intake-request-form')."?id=".$rid; ?>" class="d-block" target="_blank">
                                                <div class="orange-box report-btn">
                                                    <p>View</p>
                                                </div>
                                            </a>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                <?php }
                                 }}else{?><tr><td style="color:#FF0000;"><?php echo "There are no reports" ?></td></tr><?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
			  	</div>
			  	<div class="tab-pane fade" id="pills-after" role="tabpanel" aria-labelledby="pills-after-tab">
                    <div class="d-flex justify-content-end">
                        <div class="donate_btn_right">        
                            <button class="btn now_donate" onclick="location.href='<?php echo site_url('create-after-action-report?gid='.$post->ID)?>'">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="pr-2">Create a New</button>
                        </div>
                    </div>
			  		<!-- Tab 4 -->
                     <?php 
                         $current_user_id = get_current_user_id();
                         $reportData = get_posts( array(
                                                         'post_type'      => 'afterActionReport',
                                                         'post_status'    => 'publish',
                                                         'post_author'    =>  $current_user_id,
                                                          'numberposts' => 1000,
                                                          'meta_query'    => array(
                                                                    'relation'      => 'AND',
                                                                    array(
                                                                    'key' => 'group_id',
                                                                    'value'   => $post->ID,
                                                                    'compare' => '='
                                                                    )
                                                                )
                                                    ) );
                    ?>
			  		<div class="global-table">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                   
                                    <tr>
                                        <th>Report No.</th>
                                        <th>Date</th>
                                        <th>Event</th>
                                         <th>Client Needs</th>
                                        <!--<th>City</th>
                                        <th>State</th>
                                        <th>Country</th>-->
                                        <th>Contact Person</th>
                                         <th>Organization</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php if(!empty($reportData)){
                                    foreach($reportData as $report){
                                        $rid = $report->ID;
                                        $postauthor = $report->post_author;
                                        $all_member_ids = learndash_get_groups_user_ids($post->ID);
                                        $postMeta = get_post_meta($rid);
                                        if($current_user_id == $postauthor || in_array($current_user_id, $all_member_ids)){
                                         ?>
                                    <tr class="bg-color">
                                         <td><?php echo get_post_meta($rid,'report_id',true)?></td>
                                           <td><?php echo date("m-d-Y",strtotime($report->post_date)); ?></td>
                                          <td><?php echo $report->post_title?><//?php echo get_post_meta($rid,'action_disaster',true)?></td>
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
                            } } else{ ?><tr><td style="color:#FF0000;"><?php echo "There are no reports" ?></td></tr><?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
			  	</div>
			</div>
		</div>
	</div>
</div>
