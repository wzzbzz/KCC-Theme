<?php

namespace KCC\Reports;

class DisasterSituationalReportView extends ReportView{

    public function render(){
        ?>
        <div class="col-xl-12 main_content_disaster">

<div class="row justify-content-end mt-3 main_content_disaster_row">

   <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap my-4">

      <div class="col-xl-7 col-lg-6 col-md-7 col-12">

         <div class="notification_Sec_main">

            <h5><?= $this->report->report_type();?></h5>

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



      <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-2">

         <div class="col-xl-11 col-lg-11 col-md-11 col-12 main_profile_form disaster_p donation_tab_pills  g_donation_tab_pills mb-5" id="reportPrint">

            <div class="title_create">

               <h4>Disaster Details</h4>

            </div>

            <div class="col-xl-12 row">

               <div class="main_flow flex-wrap">

                  <div>

                     <h4>Name of the Disaster</h4>

                     <p><?= $this->report->title(); ?>

                     </p>

                  </div>



                  <div>

                     <h4>Street Address</h4>

                     <p><?= $this->report->incident_location(); ?></p>

                  </div>

                  <div>

                     <h4>Country</h4>

                     <p><?= $this->report->incident_country(); ?></p>

                  </div>

                  <div>

                     <h4>State</h4>

                     <p><?= $this->report->incident_state(); ?></p>

                  </div>

                  <div>

                     <h4>City</h4>

                     <p><?= $this->report->incident_city(); ?></p>

                  </div>







                  <div>

                     <h4>Zip Code</h4>

                     <p><?= $this->report->incident_zip(); ?></p>

                  </div>

               </div>

            </div>

            <div class="title_create">

               <h4>Contact Information</h4>

            </div>

            <div class="col-xl-12 row">

               <div class="main_flow flex-wrap">

                  <div>

                     <h4>Name of Organization</h4>

                     <p><?= $this->report->organization(); ?></p>

                  </div>



                  <!--<div>

                        <h4>Street Address</h4>

                        <p><? //php echo get_post_meta($this->report->id(),'incident_location',true)
                           ?></p>

                     </div>-->

                  <div>

                     <h4>Contact Person</h4>

                     <p><?= $this->report->contact_person(); ?></p>

                  </div>



                  <div>

                     <h4>Title</h4>
                     <p><?= $this->report->contact_title(); ?></p>

                  </div>



                  <div>

                     <h4>Email Address</h4>

                     <p><?= $this->report->contact_email(); ?></p>

                  </div>



                  <div>

                     <h4>Phone</h4>

                     <p><?= $this->report->contact_phone(); ?></p>

                  </div>



                  <!--<div>

                        <h4>Country</h4>

                        <p><? //php echo get_post_meta($this->report->id(),'rf_country',true)
                           ?></p>

                     </div>-->

                  <br />



                  <div class="col-xl-12 row">



                     <div>

                        <h4>Address</h4>

                        <p><?= $this->report->contact_address(); ?></p>

                     </div>

                     <div>

                        <h4>Country</h4>

                        <p><?= $this->report->contact_country(); ?></p>

                     </div>

                     <div>



                        <h4>State</h4>

                        <p><?= $this->report->contact_state(); ?></p>

                     </div>





                     <div>

                        <h4>City</h4>

                        <p><?= $this->report->contact_city(); ?></p>

                     </div>



                     <div>

                        <h4>Zip code</h4>

                        <p><?= $this->report->contact_zipcode(); ?></p>

                     </div>



                  </div>









               </div>

            </div>

            <div class="title_create">

               <h4>Official Point Of Contact At The Site If Different From Above</h4>

            </div>

            <div class="col-xl-12 row">

               <div class="main_flow flex-wrap">



                  <div>

                     <h4>Name of Organization</h4>

                     <p><?= $this->report->alternate_contact_organization(); ?></p>

                  </div>

                  <div>

                     <h4>Contact Person</h4>

                     <p><?= $this->report->alternate_contact_person(); ?></p>

                  </div>



                  <div>

                     <h4>Title</h4>

                     <p><?= $this->report->alternate_contact_title(); ?></p>

                  </div>



                  <div>

                     <h4>Email Address</h4>

                     <p><?= $this->report->alternate_contact_email(); ?></p>

                  </div>



                  <div>

                     <h4>Phone</h4>

                     <p><?= $this->report->alternate_contact_phone(); ?></p>

                  </div>

               </div>

            </div>

            <div class="col-xl-12 row">

               <div class="main_flow flex-wrap">

                  <div>

                     <h4>Disaster</h4>
                     <p><?= implode(",",$this->report->disaster_type());?></p>

                  </div>

               </div>

            </div>

            <div class="title_create">

               <h4>Logistics and transportation situation</h4>

            </div>

            <div class="col-xl-12 row">

               <div class="main_flow flex-wrap">

                  <div>

                     <h4>Transportation</h4>

                     <p><?= implode(",",$this->report->logistic_type()) ?></p>

                  </div>

               </div>

            </div>

            <div class="title_create">

               <h4>Description of situation on the ground </h4>

            </div>

            <div class="col-xl-12 row">

               <div class="main_flow flex-wrap">

                  <div>

                     <h4>Security</h4>

                     <p><?= $this->report->security_concern(); ?></p>

                  </div>

                  <div>

                     <h4>Sheltering</h4>

                     <p><?= implode(",",$this->report->sheltering_options()); ?></p>

                  </div>

                  <div>

                     <h4>Utilities</h4>

                     <p><?= implode(",",$this->report->utilities()); ?></p>

                  </div>

                  <div>

                     <h4>Recommended airport of other points of entry</h4>

                     <p><?= $this->report->recommended_point_of_entry() ?></p>

                  </div>

               </div>

            </div>

            <div class="title_create">

               <h4>Additional Comments</h4>

            </div>

            <div class="col-xl-12 row">

               <div class="main_flow flex-wrap">

                  <div>

                     <h4>Comments</h4>

                     <p><?= $this->report->additional_comment(); ?></p>

                  </div>

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

                  <a href="<?php echo site_url('edit-disaster-report') . "?id=" . $this->report->id(); ?>"> <button class="btn btn_apply next" id="next1"><i class="fa fa-pencil"></i> Edit</button></a>

               </div>

            </div>

         </div>

      </div>

   </div>

</div>

</div>
        <?php
    }
}