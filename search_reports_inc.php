<div class="tab-pane fade" id="pills-reports-froms" role="tabpanel" aria-labelledby="pills-reports-froms-tab">
                        <div class="row memebr_tab_pills reports-forms">
                            <div class="col-lg-12">
                                <div class="report-media-tab">
                                    <ul class="nav nav-pills report-media-tab bg-remove" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-disaster-tab" data-toggle="pill" href="#pills-disaster" role="tab" aria-controls="pills-disaster" aria-selected="true">Disaster Situational Report</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-organization-tab" data-toggle="pill" href="#pills-organization" role="tab" aria-controls="pills-organization" aria-selected="false">Organization Volunteer Request</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-survivors-tab" data-toggle="pill" href="#pills-survivors" role="tab" aria-controls="pills-survivors" aria-selected="false">Survivors Needs Intake form</a>
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
                                        <!-- Tab   1  -->
                                        <div class="tab-pane fade show active" id="pills-disaster" role="tabpanel" aria-labelledby="pills-disaster-tab">
                                            <!-- <div class="d-flex justify-content-end">
                                                <div class="donate_btn_right">        
                                                    <button class="btn now_donate">
                                                    <img src="<//?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="pr-2">Create a New</button>
                                                </div>
                                            </div> -->
                                             <?php 
                                                 $current_user_id = get_current_user_id();
                                                 $reportData = get_posts( array(
                                                                                 'post_type'      => 'reportsforms',
                                                                                 'post_status'    => 'publish',
                                                                                 'post_author'    =>  $current_user_id,
                                                                                  'numberposts' => 1000
                                                                            ) );
                                            ?>

                                            <div class="global-table">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                             <tr>
                                                                <th>Date</th>
                                                                <th>Event</th>
                                                                <th>City</th>
                                                                <th>State</th>
                                                                <th>Country</th>
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

                                                                        $postMeta = get_post_meta($rid);
                                                                  ?>
                                                            <tr class="bg-color">
                                                                 <td><?php echo get_post_meta($rid,'rf_date',true)?></td>
                                                                <td><?php echo get_post_meta($rid,'organization',true)?></td>
                                                                <td><?php echo get_post_meta($rid,'rf_city',true)?></td>
                                                                <td><?php echo get_post_meta($rid,'rf_statue',true)?></td>
                                                                <td><?php echo get_post_meta($rid,'rf_country',true)?></td>
                                                                <td><?php echo get_post_meta($rid,'contact_person',true)?></td>
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
                                                                        <a href="<?php echo site_url('disaster-situational-report')."?id=".$rid; ?>" class="d-block" target="_blank">
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
                                        <div class="tab-pane fade" id="pills-organization" role="tabpanel" aria-labelledby="pills-organization-tab">
                                            <!-- <div class="d-flex justify-content-end">
                                                <div class="donate_btn_right">        
                                                    <button class="btn now_donate">
                                                    <img src="<?//php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="pr-2">Create a New</button>
                                                </div>
                                            </div> -->
                                            <!-- Tab  2  -->
                                             <?php 
                                                     $current_user_id = get_current_user_id();
                                                     $reportData = get_posts( array(
                                                                                     'post_type'      => 'volunteer_request',
                                                                                     'post_status'    => 'publish',
                                                                                     'post_author'    =>  $current_user_id,
                                                                                      'numberposts' => 1000
                                                                                ) );
                                                ?>
                                            <div class="global-table">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                    <th>Contact Person</th>
                                                                    
                                                                    <th>Email Address</th>
                                                                    <th>Phone</th>
                                                                    <th>Skills Needed</th>
                                                                    <th>&nbsp;</th>
                                        
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                             <?php if(!empty($reportData)){
                                                                     foreach($reportData as $report){
                                                                     $rid = $report->ID;
                                                                     $postMeta = get_post_meta($rid);
                                                                //echo '<pre>'; print_r($postMeta);echo '</pre>';
                                                                     ?>
                                                           <tr class="bg-color">
                                                                <td><?php echo get_post_meta($rid,'post_date',true)?></td>
                                                                <td><?php echo get_post_meta($rid,'vol_person',true)?></td>
                                                              
                                                                <td>
                                                                   <div class="organization">
                                                                        <a href="javascript:void(0);" title="<?php echo get_post_meta($rid,'vol_email',true)?>@gmail.com"><?php echo get_post_meta($rid,'vol_email',true)?></a>
                                                                    </div>
                                                                </td>
                                                                <td style="width:15%;">
                                                                    <div class="mail-section">
                                                                        <div>
                                                                            <a href="tel:3479614321" title="<?php echo get_post_meta($rid,'vol_phone',true)?>"><?php echo get_post_meta($rid,'vol_phone',true)?></a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo get_post_meta($rid,'vol_skills',true)?></td>
                                                                <td style="width:12%;">
                                                                    <a href="<?php echo site_url('track-request')?>" class="d-block">
                                                                        <div class="orange-box report-btn">
                                                                            <p>Apply</p>
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
                                        <div class="tab-pane fade" id="pills-survivors" role="tabpanel" aria-labelledby="pills-survivors-tab">
                                            <!-- <div class="d-flex justify-content-end">
                                                <div class="donate_btn_right">        
                                                    <button class="btn now_donate">
                                                    <img src="<?//php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="pr-2">Create a New</button>
                                                </div>
                                            </div> -->
                                            <!-- Tab 3  -->

                                                    <?php 
                                                         $current_user_id = get_current_user_id();
                                                         $reportData = get_posts( array(
                                                                                         'post_type'      => 'supplierNeedIntake',
                                                                                         'post_status'    => 'publish',
                                                                                         'post_author'    =>  $current_user_id,
                                                                                          'numberposts' => 1000
                                                                                    ) );
                                                    ?>
                                            <div class="global-table">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                               <th>Date</th>
                                                                <!-- <th>Event</th> -->
                                                                <th>City</th>
                                                                <th>States</th>
                                                                <th>Country</th>
                                                                <th>Client Needs</th>
                                                                <th>Contact Person</th>
                                                                <th>&nbsp;</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php if(!empty($reportData)){
                                                                foreach($reportData as $report){
                                                                    $rid = $report->ID;
                                                                    $postMeta = get_post_meta($rid);
                                                                     ?>
                                                                <tr class="bg-color">
                                                                    <td><?php echo get_post_meta($rid,'intake_date',true)?></td>
                                                                     <!-- <td><?//php echo get_post_meta($rid,'intake_city',true)?></td> -->
                                                                    <td><?php echo get_post_meta($rid,'intake_city',true)?></td>
                                                                    <td><?php echo get_post_meta($rid,'intake_state',true)?></td>
                                                                    <td><?php echo get_post_meta($rid,'intake_country',true)?></td>
                                                                    <td><?php echo get_post_meta($rid,'client_need',true)?></td>
                                                                    <td><?php echo get_post_meta($rid,'intake_firstName',true)?> <?php echo get_post_meta($rid,'intake_lastName',true)?></td>
                                                                    <td><?php echo get_post_meta($rid,'rf_date',true)?></td>
                                                                    <td style="width:12%;">
                                                                        <a href="<?php echo site_url('track-request')?>" class="d-block">
                                                                            <div class="orange-box report-btn">
                                                                                <p>Track</p>
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
                                        <div class="tab-pane fade" id="pills-after" role="tabpanel" aria-labelledby="pills-after-tab">
                                            <!-- <div class="d-flex justify-content-end">
                                                <div class="donate_btn_right">        
                                                    <button class="btn now_donate">
                                                    <img src="<//?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="pr-2">Create a New</button>
                                                </div>
                                            </div> -->
                                            <!-- Tab 4 -->
                                            <?php 
                                                 $current_user_id = get_current_user_id();
                                                 $reportData = get_posts( array(
                                                                                 'post_type'      => 'afterActionReport',
                                                                                 'post_status'    => 'publish',
                                                                                 'post_author'    =>  $current_user_id,
                                                                                  'numberposts' => 1000
                                                                            ) );
                                            ?>
                                            <div class="global-table">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                               <th>Date</th>
                                                                <th>Event</th>
                                                               
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

                                                                    $postMeta = get_post_meta($rid);
                                                                 ?>
                                                            <tr class="bg-color">
                                                                    <td><?php echo get_post_meta($rid,'action_date',true)?></td>
                                                                    <td><?php echo get_post_meta($rid,'action_disaster',true)?></td>
                                                                
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
                                                                       <a href="<?php echo site_url('after-action-report')."?id=".$rid; ?>" class="d-block" target="_blank">
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
                        </div>

                    </div>