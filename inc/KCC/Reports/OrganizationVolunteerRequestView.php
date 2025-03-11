<?php


namespace KCC\Reports;


class OrganizationVolunteerRequestView extends ReportView
{
    public function render()
    {

?>
        <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-2">

            <div class="col-xl-11 col-lg-11 col-md-11 col-12 main_profile_form disaster_p donation_tab_pills  g_donation_tab_pills mb-5" id="reportPrint">

                <div class="title_create">

                    <h4>Contact Information</h4>

                </div>

                <div class="col-xl-12 row">

                    <div class="main_flow flex-wrap">

                        <div>

                            <h4>Name of Event</h4>

                            <p><?= $this->report->title(); ?>

                            </p>

                        </div>



                        <div>

                            <h4>Name of Organization</h4>

                            <p><?= $this->report->event_organizer(); ?></p>

                        </div>



                        <div>

                            <h4>Contact Person</h4>

                            <p><?= $this->report->event_org_contact_name(); ?></p>

                        </div>



                        <div>

                            <h4>Email Address</h4>

                            <p><?= $this->report->event_org_contact_name(); ?></p>

                        </div>



                        <div>

                            <h4>Address</h4>

                            <p><?= $this->report->event_org_contact_address(); ?></p>

                        </div>



                        <div>

                            <h4>Country</h4>

                            <p><?= $this->report->event_org_contact_country(); ?></p>

                        </div>



                        <div>

                            <h4>State</h4>

                            <p><?= $this->report->event_org_contact_state(); ?></p>

                        </div>



                        <div>

                            <h4>City</h4>

                            <p><?= $this->report->event_org_contact_city(); ?></p>

                        </div>



                        <div>

                            <h4>Zip Code</h4>

                            <p><?= $this->report->event_org_contact_zipcode(); ?></p>

                        </div>









                        <div>

                            <h4>Website</h4>

                            <p><?= $this->report->event_org_website(); ?></p>

                        </div>

                        <div>

                            <h4>Title</h4>

                            <p><?= $this->report->event_org_contact_title(); ?></p>

                        </div>

                        <div>

                            <h4>Phone</h4>

                            <p><?= $this->report->event_org_contact_phone(); ?></p>

                        </div>

                        <!-- <div>

            <h4>City</h4>

            <p><//?php echo get_post_meta($org_id,'rf_city',true)?></p>

         </div>-->

                        <!--  <div>

            <h4>Zip</h4>

            <p><//?php echo get_post_meta($org_id,'vol_zipcode2',true)?></p>

         </div>-->

                        <div>

                            <h4>Mission</h4>

                            <p><?= $this->report->event_org_mission(); ?></p>

                        </div>

                    </div>

                </div>

                <div class="title_create">

                    <h4>Volunteer Service Location and Point Of Contact</h4>

                </div>

                <div class="col-xl-12 row">

                    <div class="main_flow flex-wrap">



                        <div>

                            <h4>Name of Organization</h4>

                            <p><?= $this->report->location_organizer(); ?></p>

                        </div>

                        <div>

                            <h4>Contact Person</h4>

                            <p><?= $this->report->location_contact_name(); ?></p>

                        </div>



                        <div>

                            <h4>Email Address</h4>

                            <p><?= $this->report->location_contact_email(); ?></p>

                        </div>

                        <div>

                            <h4>Title</h4>

                            <p><?= $this->report->location_contact_title(); ?></p>

                        </div>

                        <div>

                            <h4>Phone</h4>

                            <p><?= $this->report->location_contact_phone(); ?></p>

                        </div>

                    </div>

                </div>

                <div class="title_create">

                    <h4>Point of Contact</h4>

                </div>

                <div class="col-xl-12 row">

                    <div class="main_flow flex-wrap">

                        <div>

                            <h4>Name of Organization</h4>

                            <p><?= $this->report->point_of_contact_organization(); ?></p>

                        </div>

                        <div>

                            <h4>Email Address</h4>

                            <p><?= $this->report->point_of_contact_email(); ?></p>

                        </div>

                        <div>

                            <h4>Title</h4>

                            <p><?= $this->report->point_of_contact_title(); ?></p>

                        </div>

                        <div>

                            <h4>Phone</h4>

                            <p><?= $this->report->point_of_contact_phone(); ?></p>

                        </div>

                    </div>

                </div>

                <div class="title_create">

                    <h4>Disaster Type</h4>

                </div>

                <div class="col-xl-12 row">

                    <div class="main_flow flex-wrap">

                        <div>

                            <h4>Type</h4>

                            <p><?= implode(',',$this->report->disaster_type()); ?></p>

                        </div>

                    </div>

                </div>

                <div class="title_create">

                    <h4>Volunteer Project Description</h4>

                </div>

                <div class="col-xl-12 row">

                    <div class="main_flow flex-wrap">

                        <div>

                            <h4>Scope of Work</h4>

                            <p><?= $this->report->scope_of_work(); ?></p>

                        </div>



                    </div>

                </div>

                <div class="title_create">

                    <h4>Volunteer Service Details</h4>

                </div>

                <div class="col-xl-12 row">

                    <div class="main_flow flex-wrap">

                        <div>

                            <h4>Start Date</h4>

                            <p><?= $this->report->start_date(); ?></p>

                        </div>

                        <div>

                            <h4>End Date</h4>

                            <p><?= $this->report->end_date(); ?></p>

                        </div>

                        <div>

                            <h4>Shift Start Date</h4>

                            <p><?= $this->report->shift_start_date(); ?></p>

                        </div>

                        <div>

                            <h4>Shift End Date</h4>

                            <p><?= $this->report->shift_end_date(); ?></p>

                        </div>



                    </div>

                </div>

                <div class="title_create">

                    <h4>Geographic Area Volunteers Will Serve Within</h4>

                </div>

                <div class="col-xl-12 row">

                    <div class="main_flow flex-wrap">

                        <div>

                            <h4>State</h4>

                            <p><?= $this->report->geo_state(); ?></p>

                        </div>

                        <div>

                            <h4>City</h4>

                            <p><?= $this->report->geo_city(); ?></p>

                        </div>

                        <div>

                            <h4>Neighborhood</h4>

                            <p><?= $this->report->geo_neighborhood(); ?></p>

                        </div>

                        <div>

                            <h4>Zip</h4>

                            <p><?= $this->report->geo_zipcode(); ?></p>

                        </div>

                        <div>

                            <h4>Other</h4>

                            <p><?= $this->report->geo_other(); ?></p>

                        </div>

                    </div>

                </div>

                <div class="title_create">

                    <h4>Skills and Disqulaifiers</h4>

                </div>

                <div class="col-xl-12 row">

                    <div class="main_flow flex-wrap">

                        <div>

                            <h4>Disqualifiers</h4>

                            <p><?= $this->report->disqualifiers(); ?></p>

                        </div>



                    </div>

                </div>

                <div class="title_create">

                    <h4>Skills Needed</h4>

                </div>

                <div class="col-xl-12 row">

                    <div class="main_flow flex-wrap">

                        <div>

                            <h4>Skills</h4>

                            <p><?= $this->report->skills_needed(); ?></p>

                        </div>



                    </div>

                </div>

                <div class="row justify-content-center mb-5">

                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                        <div class="apply_btn ">

                            <a href="#" data-toggle="modal" data-target="#organization_report" onclick='deleteActiondisasterReport("<?= $this->report->id(); ?>")' ;><button class="btn btn_apply">Delete</button></a>

                        </div>

                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">

                        <div class="apply_btn active">

                            <a href="<?php echo site_url('edit-organization-report-form') . "?id=" . $this->report->id(); ?>"> <button class="btn btn_apply next" id="next1"><i class="fa fa-pencil"></i> Edit</button></a>

                        </div>

                    </div>

                </div>

            </div>



        </div>

<?php
    }
}
