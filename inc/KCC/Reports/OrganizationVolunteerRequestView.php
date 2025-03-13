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

                            <p><?= implode(',', $this->report->disaster_type()); ?></p>

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

    public static function tableHeader()
    {
    ?>
        <tr>

            <th scope="col">Report No.</th>

            <th scope="col">Date</th>

            <th scope="col">Event</th>

            <th scope="col">Group</th>

            <th scope="col">Country</th>

            <th scope="col">State</th>

            <th scope="col">City</th>

            <th scope="col">Contact Person</th>

            <th scope="col">Organization</th>

            <th scope="col">&nbsp;</th>

        </tr>
    <?php
    }

    public function render_table_row()
    {
    ?>

        <tr class="bg-color">

            <td><?= $this->report->id(); ?></td>

            <td><?= $this->report->date(); ?></td>

            <td><?= $this->report->title(); ?></td>

            <td>
                <?php if ($this->report->group()): ?>
                    <a href="<?= $this->report->group()->permalink(); ?>"><?= $this->report->group()->name(); ?></a>
                <?php endif; ?>
            </td>

            <td><?= $this->report->country(); ?></td>

            <td><?= $this->report->state(); ?></td>

            <td><?= $this->report->city(); ?></td>

            <td><?= $this->report->contact_name(); ?></td>

            <td><?= $this->report->event_organizer(); ?></td>

            <td>
                    <a href="<?= $this->report->permalink(); ?>" class="d-block">
                        <div class="orange-box report-btn">
                            <p>View</p>
                        </div>
                    </a>
                </td>

            <?php
            $user_id = get_current_user_id();
            if ($user_id != $this->report->author_id()) { ?>

               
                <td style="width:12%;">

                    <?php if ($this->report->user_has_applied($user_id)) { ?>
                        <div class="">
                            <button class="report-btn" type="submit" disabled>
                                <p>Applied</p>
                            </button>

                        </div>'



                    <?php } elseif ($this->report->user_has_been_declined($user_id)) { ?>
                        <div class="orange-box report-btn rejected_btn">

                            <button type="submit" class="rejected_btn" disabled>
                                <p>Declined</p>
                            </button>

                        </div>



                    <?php } elseif ($this->report->user_has_been_approved($user_id)) { ?>
                        <div class=" report-btn approved_btn">
                            <button type="submit" class="approved_btn " disabled>
                                <p>Approved</p>
                            </button>
                        </div>
                    <?php } else { ?>
                        <form method='POST' action='' class='row mediadoc_form' id='disaster_media' enctype='multipart/form-data'>
                            <div class='orange-box report-btn'>
                                <input type="hidden" name="action" value="ovr_apply" />
                                <input type='hidden' name='user_id' value='<?= $user_id; ?>'>
                                <input type='hidden' name='report_id' value='<?= $this->report->id(); ?>'>
                                <button type="submit" class="orange-box">
                                    <p>Apply</p>
                                </button>
                            </div>
                        </form>
                    <?php } ?>



                </td>

            <?php } else { ?>

                <td>

                    <?php if ($this->report->has_applications()) { ?>
                        <a href="<?= $this->report->permalink(); ?>/applications" class="d-block">

                            <div class="orange-box report-btn">

                                <p>View Applications</p>

                            </div>
                        </a>
                    <?php } else { ?>
                        <button class="report-btn" type="submit" disabled>
                                <p>No Applications</p>
                            </button>
                    <?php
                    } ?>


                </td>

            <?php } ?>

        </tr>


<?php
    }
}
