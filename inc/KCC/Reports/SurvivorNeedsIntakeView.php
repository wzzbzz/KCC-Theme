<?php

namespace KCC\Reports;

class SurvivorNeedsIntakeView extends ReportView
{


   public function disaster_types()
   {
      $disaster_types = $this->report->disaster_types();      
      if (empty($disaster_types)) {
         return array();
      }
      $disasters = [];
      foreach ($disaster_types as $disaster_type) {
         if ($disaster_type->type() == 'checkbox_select') {
            $option = $this->report->meta($disaster_type->select()['id']);
            if (!empty($option)) {
               $disasters[] = $disaster_type->label() . ': ' . $option;
            }
         } else if ($disaster_type->type() == 'checkbox_text') {
            $text = $this->report->meta($disaster_type->id());
            if (!empty($text)) {
               $disasters[] = $disaster_type->label() . ":" . $text;
            }
         } else {
            $disasters[] = $disaster_type->label();
         }
      }
      return $disasters;
   }

   public function client_needs(){
      $client_needs = $this->report->client_needs();
      if (empty($client_needs)) {
         return array();
      }
      $needs = [];
      foreach ($client_needs as $need) {
         if ($need->type() == 'checkbox_select') {
            $option = $this->report->meta($need->select()['id']);
            if (!empty($option)) {
               $needs[] = $need->label() . ': ' . $option;
            }
         } else if ($need->type() == 'checkbox_text') {
            $text = $this->report->meta($need->id());
            if (!empty($text)) {
               $needs[] = $need->label() . ":" . $text;
            }
         } else {
            $needs[] = $need->label();
         }
      }
      return $needs;
   }

   public function client_special_needs(){
      $client_needs = $this->report->client_special_needs();
      
      if (empty($client_needs)) {
         return array();
      }
      $needs = [];
      foreach ($client_needs as $need) {
         if ($need->type() == 'checkbox_select') {
            $option = $this->report->meta($need->select()['id']);
            if (!empty($option)) {
               $needs[] = $need->label() . ': ' . $option;
            }
         } else if ($need->type() == 'checkbox_text') {
            $text = $this->report->meta($need->id());
            if (!empty($text)) {
               $needs[] = $need->label() . ":" . $text;
            }
         } else {
            $needs[] = $need->label();
         }
      }
      return $needs;
   }


   public function render()
   { ?>
   <style>
      .reports_container .section {
         margin: 20px 0;
      }

   
      .reports_container .section table thead th {
         background: darkblue;
         font-weight: 600;
         color: #FFF;   
         
      }
      .reports_container .section table {
         border-collapse: collapse;
         width: 100%;
         border: 1px solid #ddd;
      }

      .reports_container .section table th,
      .reports_container .section table td {
         border: 1px solid #ddd;
         padding: 8px;
      }

      .reports_container .section table tr {
         border-bottom: 1px solid #ddd;
      }

      .reports_container .section table tr:nth-child(even) {
         background-color: #f2f2f2;
      }
   </style>
      <div class="col-xl-12 main_content_disaster">

         <div class="row justify-content-end mt-3 main_content_disaster_row">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap my-4">

               <div class="col-xl-7 col-lg-6 col-md-7 col-12">

                  <div class="notification_Sec_main">

                     <h5><?= $this->report->report_type(); ?></h5>

                  </div>

               </div>

               <div class="col-xl-4 col-lg-5 col-md-4 col-12 d-flex align-items-center justify-content-end">

                  <div class="print_btn">

                     <a href="<?php echo get_site_url(); ?>/message/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chat-icon.png"></a>

                  </div>

                  <div class="print_btn">

                     <a href="" onclick="printDiv('reportPrint')"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/print_icon.png">Print</a>

                  </div>

                  <div class="back_btn">

                     <a href="javascript:history.go(-1)">Back</a>



                  </div>

               </div>

               <!-- pasting in from original -->

               <div class="col-12">

                  <div class="organization-vol">

                     <div class="tab-item">

                        <ul class="nav nav-pills" id="pills-tab" role="tablist">

                           <li class="nav-item">

                              <a class="nav-link active" id="pills-report-tab" data-toggle="pill" href="#pills-report" role="tab" aria-controls="pills-report" aria-selected="true">Report</a>

                           </li>

                           <li class="nav-item">

                              <a class="nav-link" id="pills-members-tab" data-toggle="pill" href="#pills-members" role="tab" aria-controls="pills-members" aria-selected="false">Members Info</a>

                           </li>

                           <li class="nav-item">

                              <a class="nav-link" id="pills-requests-tab" data-toggle="pill" href="#pills-requests" role="tab" aria-controls="pills-requests" aria-selected="false">Requests</a>

                           </li>

                           <li class="nav-item">

                              <a class="nav-link" id="pills-requests-tab" data-toggle="pill" href="#request-status" role="tab" aria-controls="request-status" aria-selected="false">Request Status</a>

                           </li>

                        </ul>

                     </div>

                  </div>

               </div>

               <div class="col-12">

                  <div class="tab-content" id="pills-tabContent">

                     <div class="tab-pane fade show active" id="pills-report" role="tabpanel" aria-labelledby="pills-report-tab">

                        <div class="col-xl-11 col-lg-11 col-md-11 col-12 main_profile_form disaster_p donation_tab_pills  g_donation_tab_pills mb-5" id="reportPrint">
                           <div class="row">
                              <h1 class="text-center mb-4 w-100">Survivor Needs Intake Summary</h1>
                           </div>
                           <div class="reports_container">

                              <div class="section">
                                 <div class="section_title">
                                    <h3>Client Information</h3>
                                 </div>

                                 <table class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th scope="col">Field</th>
                                          <th scope="col">Information</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>Client Name</td>
                                          <td><?= $this->report->client_fullName(); ?></td>
                                       </tr>
                                       <tr>
                                          <td>Address</td>
                                          <td><?= $this->report->client_address(); ?></td>
                                       </tr>
                                       <tr>
                                          <td>City</td>
                                          <td><?= $this->report->client_city(); ?></td>
                                       </tr>
                                       <tr>
                                          <td>State</td>
                                          <td><?= $this->report->client_state(); ?></td>
                                       </tr>
                                       <tr>
                                          <td>Country</td>
                                          <td><?= $this->report->client_country(); ?></td>
                                       </tr>
                                       <tr>
                                          <td>Zip Code</td>
                                          <td><?= $this->report->client_zipcode(); ?></td>
                                       </tr>
                                       <tr>
                                          <td>Phone #</td>
                                          <td><?= $this->report->client_phone(); ?></td>
                                       </tr>
                                       <tr>
                                          <td>Alternative Phone #</td>
                                          <td><?= $this->report->client_phone2(); ?></td>
                                       </tr>
                                       <tr>
                                          <td>Contact Time</td>
                                          <td><?= $this->report->client_preferred_contact_time(); ?></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>

                              <div class="section">
                                 <div class="section_title">
                                    <h5>Disaster Type</h5>
                                 </div>
                                 <table class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th scope="col">Field</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <?php foreach ($this->disaster_types() as $disaster_type): ?>
                                             <td><?= $disaster_type; ?></td>
                                          <?php endforeach; ?>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>

                              <div class="section">
                                 <div class="section_title">
                                    <h5>Client Needs</h5>
                                 </div>

                                 <table class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th scope="col">Field</th>
                                          <th scope="col">Information</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       $client_needs = $this->client_needs();
                                       foreach ($client_needs as $need) {
                                          echo "<tr><td>" . ucfirst($need) . "</td><td>Yes</td></tr>";
                                       }
                                       ?>
                                    </tbody>
                                 </table>
                              </div>

                              <div class="section">
                                 <div class="section_title">
                                    <h5>Client Special Needs</h5>
                                 </div>
                                 <table class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th scope="col">Description</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                       $client_special_needs = $this->client_special_needs();
                                       foreach ($client_special_needs as $need) {
                                          echo "<tr><td>" . ucfirst($need) . "</td><td>Yes</td></tr>";
                                       }
                                       ?>
                                    </tbody>
                                 </table>
                              </div>





                           </div>
                        </div>

                        <div class="row justify-content-center mb-5">

                           <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                              <div class="apply_btn ">

                                 <a href="#" data-toggle="modal" data-target="#disaster_report" onclick='deleteActiondisasterReport("<?php echo $this->report->id() ?>")' ;><button class="btn btn_apply">Delete</button></a>

                              </div>

                           </div>

                           <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                              <div class="apply_btn active">

                                 <a href="<?php echo site_url('edit-survivor-needs-intake') . "?id=" . $this->report->id(); ?>"> <button class="btn btn_apply next" id="next1"><i class="fa fa-pencil"></i> Edit</button></a>

                              </div>

                           </div>

                        </div>


                     </div>

                     <div class="tab-pane fade" id="pills-members" role="tabpanel" aria-labelledby="pills-members-tab">

                        <div class="global-table mt-30">

                           <div class="table-responsive">

                              <table class="table table-hover">

                                 <thead>

                                    <?php

                                    global $wpdb;

                                    $results = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE `post_id`= $report_id AND `meta_value`='approved' ");

                                    if (!empty($results)) { ?>

                                       <tr>

                                          <th>Member Name</th>

                                          <th>Country</th>

                                          <th>State</th>

                                          <th>City</th>

                                          <th>Zip</th>



                                          <th>Email Address</th>

                                          <th>Education</th>



                                          <th>&nbsp;</th>

                                       </tr>

                                 </thead>

                                 <tbody>

                                    <?php foreach ($results as $value) {

                                          $string = $value->meta_key;

                                          $user_id = filter_var($string, FILTER_SANITIZE_NUMBER_INT);

                                          $userInfo =   get_userdata($user_id);

                                          $skillList = $wpdb->get_results("SELECT * FROM user_skills WHERE user_id = '" . $user_id . "' ", ARRAY_A);



                                          $user_other_info = get_user_meta($user_id);

                                          $List = '';

                                          for ($i = 0; $i < count($skillList); $i++) {

                                             $List .= $skillList[$i]['skill_type'] . ",";
                                          }

                                    ?>



                                       <tr class="bg-color">

                                          <td><?php echo $userInfo->display_name ?></td>

                                          <td><?php echo get_user_meta($user_id, 'country', true) ?></td>

                                          <td><?php echo get_user_meta($user_id, 'state', true) ?></td>

                                          <td><?php echo get_user_meta($user_id, 'city', true) ?></td>

                                          <td><?php echo get_user_meta($user_id, 'code', true) ?></td>



                                          <td>

                                             <div class="organization">

                                                <a href="mailto:<?php echo $userInfo->user_email; ?>"><?php echo $userInfo->user_email; ?></a>

                                             </div>

                                          </td>

                                          <td><?php echo get_user_meta($user_id, 'education', true) ?></td>



                                          <td style="width:12%;">

                                             <a href="<?php echo site_url('view-user-profile/') . "?userID=" . $user_id; ?>" class="d-block" target="_blank">

                                                <div class="orange-box report-btn">

                                                   <p>View</p>

                                                </div>

                                             </a>

                                          </td>

                                       </tr>

                                    <?php }
                                    } else { ?>

                                    <span class="text-danger"><?php echo 'There are no members.' ?></span>

                                 <?php } ?>

                                 </tbody>

                              </table>

                           </div>

                        </div>



                     </div>

                     <div class="tab-pane fade" id="pills-requests" role="tabpanel" aria-labelledby="pills-requests-tab">

                        <div class="global-table mt-30">

                           <div class="table-responsive">

                              <table class="table table-hover">

                                 <thead>

                                    <?php

                                    global $wpdb;

                                    $results = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE `post_id`= $report_id AND `meta_value`='applied' ");

                                    if (!empty($results)) { ?>

                                       <tr>

                                          <!-- <th>Date of Submission</th>-->

                                          <th>Contact Person</th>

                                          <th>Country</th>

                                          <th>State</th>

                                          <th>City</th>

                                          <td>Zip</td>

                                          <td>Email</td>

                                          <th>Accept</th>

                                          <th>Reject</th>

                                       </tr>

                                 </thead>

                                 <tbody>



                                    <?php foreach ($results as $value) {



                                          $reportAuthor = $value->post_author;

                                          $string = $value->meta_key;

                                          $user_id = filter_var($string, FILTER_SANITIZE_NUMBER_INT);

                                          $userInfo =   get_userdata($user_id);

                                          $user_other_info = get_user_meta($user_id);

                                    ?>

                                       <tr class="bg-color">



                                          <td><?php echo $userInfo->display_name; ?></td>



                                          <td><?php echo get_user_meta($user_id, 'country', true) ?></td>

                                          <td><?php echo get_user_meta($user_id, 'state', true) ?></td>

                                          <td><?php echo get_user_meta($user_id, 'city', true) ?></td>

                                          <td><?php echo get_user_meta($user_id, 'code', true) ?></td>

                                          <td>

                                             <div class="organization">

                                                <a href="mailto:<?php echo $userInfo->user_email; ?>"><?php echo $userInfo->user_email; ?></a>

                                             </div>

                                          </td>

                                          <td>

                                             <div>



                                                <?php

                                                $redirectedURL = "$current_url/?rid=" . $report_id . " ";

                                                ?>

                                                <form method='POST' action='' class='row mediadoc_form' id='disaster_media' enctype='multipart/form-data'>

                                                   <input type="hidden" name="approve_organizationRequest" value="approve_organizationRequest" />

                                                   <input type="hidden" name="report_id" value="<?php echo $report_id ?>">

                                                   <input type="hidden" name="report_applied_by" value="<?php echo $value->meta_key;  ?>">

                                                   <input type="hidden" name="page_url" value="<?php echo $redirectedURL ?>">

                                                   <input type="hidden" name="uniqueReportID" value="<?php echo get_post_meta($report_id, 'report_id', true) ?>">

                                                   <div class="orange-box report-btn">

                                                      <button type="submit" class="orange-box btn-sm"><i class="fa fa-check"></i></button>

                                                   </div>

                                                </form>

                                             </div>

                                          </td>

                                          <td>

                                             <div class="mx-2">

                                                <form method='POST' action='' class='row mediadoc_form' id='disaster_media' enctype='multipart/form-data'>

                                                   <input type="hidden" name="reject_organizationRequest" value="reject_organizationRequest" />

                                                   <input type="hidden" name="report_id" value="<?php echo $report_id ?>">

                                                   <input type="hidden" name="report_applied_by" value="<?php echo $value->meta_key;  ?>">

                                                   <input type="hidden" name="page_url" value="<?php echo $redirectedURL ?>">

                                                   <input type="hidden" name="uniqueReportID" value="<?php echo get_post_meta($report_id, 'report_id', true) ?>">

                                                   <div class="orange-box report-btn">

                                                      <button type="submit" class="orange-box btn-sm"><i class="fa fa-close"></i></button>

                                                   </div>

                                                </form>

                                             </div>

                                          </td>

                                       </tr>

                                    <?php }
                                    } else { ?>

                                    <span class="text-danger py-2"><?php echo 'There are no requests yet.' ?></span>

                                 <?php } ?>

                                 </tbody>

                              </table>

                           </div>

                        </div>

                     </div>

                     <div class="tab-pane fade" id="request-status" role="tabpanel" aria-labelledby="request-status-tab">

                        <div class="global-table mt-30">

                           <div class="table-responsive">

                              <h5 class="py-2"> Approved Requests</h5>

                              <table class="table table-hover">

                                 <thead>

                                    <?php

                                    global $wpdb;

                                    $results = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE `post_id`= $report_id AND `meta_value`='approved' ");

                                    if (!empty($results)) { ?>

                                       <tr>

                                          <!-- <th>Date of Submission</th>-->

                                          <th>Contact Person</th>

                                          <th>Country</th>

                                          <th>State</th>

                                          <th>City</th>

                                          <th>Zip</th>

                                          <th>Email</th>



                                          <th>Status</th>

                                       </tr>

                                 </thead>

                                 <tbody>



                                    <?php foreach ($results as $value) {

                                          $reportAuthor = $value->post_author;

                                          $string = $value->meta_key;

                                          $user_id = filter_var($string, FILTER_SANITIZE_NUMBER_INT);

                                          $userInfo =   get_userdata($user_id);



                                          // $skillList = $wpdb->get_results( "SELECT * FROM user_skills WHERE user_id = '".$user_id."' ",ARRAY_A); 

                                          $user_other_info = get_user_meta($user_id);

                                    ?>

                                       <tr class="bg-color">

                                          <td><?php echo $userInfo->display_name; ?></td>

                                          <td><?php echo get_user_meta($user_id, 'country', true) ?></td>

                                          <td><?php echo get_user_meta($user_id, 'state', true) ?></td>

                                          <td><?php echo get_user_meta($user_id, 'city', true) ?></td>

                                          <td><?php echo get_user_meta($user_id, 'code', true) ?></td>

                                          <td>

                                             <div class="organization">

                                                <a href="mailto:<?php echo $userInfo->user_email; ?>"><?php echo $userInfo->user_email; ?></a>

                                             </div>

                                          </td>

                                          <td>

                                             <div class="mx-2">

                                                <div class="orange-box report-btn">

                                                   <button type="submit" class="orange-box btn-sm"><?php echo $value->meta_value; ?></button>

                                                </div>

                                             </div>

                                          </td>

                                       </tr>



                                    <?php }
                                    } else { ?>

                                    <span class="text-danger"><?php echo 'There are no approved requests yet.' ?></span>

                                 <?php } ?>



                                 </tbody>

                              </table>

                           </div>



                           <div class="table-responsive">

                              <h5 class="py-2"> Rejected Requests</h5>

                              <table class="table table-hover">

                                 <thead>

                                    <?php

                                    global $wpdb;

                                    $results = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE `post_id`= $report_id AND `meta_value`='rejected' ");

                                    if (!empty($results)) { ?>

                                       <tr>

                                          <!-- <th>Date of Submission</th>-->

                                          <th>Contact Person</th>

                                          <th>Country</th>

                                          <th>State</th>

                                          <th>City</th>

                                          <th>Zip</th>

                                          <th>Email</th>



                                          <th>Status</th>

                                       </tr>

                                 </thead>

                                 <tbody>



                                    <?php foreach ($results as $value) {

                                          $reportAuthor = $value->post_author;



                                          $string = $value->meta_key;

                                          $user_id = filter_var($string, FILTER_SANITIZE_NUMBER_INT);

                                          $userInfo =   get_userdata($user_id);



                                          // $skillList = $wpdb->get_results( "SELECT * FROM user_skills WHERE user_id = '".$user_id."' ",ARRAY_A); 

                                          $user_other_info = get_user_meta($user_id);

                                    ?>

                                       <tr class="bg-color">

                                          <td><?php echo $userInfo->display_name; ?></td>

                                          <td><?php echo get_user_meta($user_id, 'country', true) ?></td>

                                          <td><?php echo get_user_meta($user_id, 'state', true) ?></td>

                                          <td><?php echo get_user_meta($user_id, 'city', true) ?></td>

                                          <td><?php echo get_user_meta($user_id, 'code', true) ?></td>

                                          <td>

                                             <div class="organization">

                                                <a href="mailto:<?php echo $userInfo->user_email; ?>"><?php echo $userInfo->user_email; ?></a>

                                             </div>

                                          </td>



                                          <td>

                                             <div class="mx-2">

                                                <div class="orange-box report-btn">

                                                   <button type="submit" class="orange-box btn-sm"><?php echo $value->meta_value; ?></button>

                                                </div>

                                             </div>

                                          </td>

                                       </tr>

                                    <?php }
                                    } else { ?>

                                    <span class="text-danger"><?php echo 'There are no rejected requests yet.' ?></span>

                                 <?php } ?>

                                 </tbody>

                              </table>



                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

            <!-- end of pasting in from original -->

         </div>

      </div>


   <?php
   }

   public static function tableHeader()
   {
   ?>
      <tr>

         <th scope="col">Report No.</th>

         <th scope="col">Date</th>

         <!--<th scope="col">Event</th>-->

         <th scope="col">Group</th>

         <th scope="col">Country</th>

         <th scope="col">State</th>

         <th scope="col">City</th>

         <th scope="col">Contact Person</th>

         <th scope="col">Action</th>

      </tr>

   <?php
   }

   public function render_table_row()
   {
   ?>
      <tr class="bg-color">

         <td><?= $this->report->slug(); ?></td>

         <td><?= $this->report->date() ?></td>

         <td>
            <?= ($this->report->hasGroup()) ? $this->report->group()->name() : ""; ?>
         </td>

         <td><?= $this->report->country(); ?></td>

         <td><?= $this->report->state(); ?></td>

         <td><?= $this->report->city(); ?></td>

         <td><?= $this->report->client_fullName(); ?></td>

         <td>
            <a href="<?= $this->report->permalink(); ?>" class="d-block">
               <div class="orange-box report-btn">
                  <p>View</p>
               </div>
            </a>
         </td>

         <?php $this->render_applications(); ?>
      </tr>

<?php
   }
}
