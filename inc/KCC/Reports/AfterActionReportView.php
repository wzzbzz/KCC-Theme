<?php

namespace KCC\Reports;

class AfterActionReportView extends ReportView
{

    public function render()
    { ?>
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



                    <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-2">

                        <div class="col-xl-11 col-lg-11 col-md-11 col-12 main_profile_form disaster_p donation_tab_pills  g_donation_tab_pills mb-5" id="reportPrint">

                            <div class="title_create">

                                <h4>General information</h4>

                            </div>

                            <div class="col-xl-12 row">

                                <div class="main_flow flex-wrap">

                                    <div>

                                        <h4>Name of the Disaster</h4>

                                        <p><?= $this->report->disaster_name(); ?>

                                        </p>

                                    </div>


                                    <div>
                                        <h4>Organization Name</h4>
                                        <p><?= $this->report->organization_name(); ?></p>
                                    </div>
                                    <div>

                                        <h4>Submitter Name</h4>

                                        <p><?= $this->report->submitter_name(); ?></p>

                                    </div>

                                    <div>

                                        <h4>Phone</h4>

                                        <p><?= $this->report->contact_phone(); ?></p>

                                    </div>

                                    <div>

                                        <h4>Email</h4>

                                        <p><?= $this->report->contact_email(); ?></p>

                                    </div>

                                    <div>

                                        <h4>Supervisor Name</h4>

                                        <p><?= $this->report->supervisor_name(); ?></p>

                                    </div>


                                </div>

                            </div>

                            <div class="title_create">

                                <h4>Report Details</h4>

                            </div>

                            <div class="col-xl-12 row">

                                <div class="main_flow flex-wrap">

                                    <div>

                                        <h4>Shift Reported Covers</h4>

                                        <p><?= $this->report->shift_reported_covers(); ?></p>

                                    </div>

                                    <div>

                                        <h4>Shift Start Date</h4>

                                        <p><?= $this->report->shift_start_date(); ?></p>

                                    </div>


                                    <div>

                                        <h4>Shift End Date</h4>

                                        <p><?= $this->report->shift_end_date(); ?></p>
                                    </div>

                                    <div>

                                        <h4>Assignment Title</h4>

                                        <p><?= $this->report->assignment_title(); ?></p>
                                    </div>

                                    <div>

                                        <h4>Incident Location</h4>

                                        <p><?= $this->report->print_assignment_address(); ?></p>

                                    </div>




                                    <div>

                                        <h4>Email Address</h4>

                                        <p><?= $this->report->contact_email(); ?></p>

                                    </div>



                                    <div>

                                        <h4>Phone</h4>

                                        <p><?= $this->report->contact_phone(); ?></p>

                                    </div>

                                    <div>

                                        <h4>Team Members</h4>

                                        <p><?= $this->report->team_members(); ?></p>
                                    </div>

                                </div>

                            </div>

                            <div class="title_create">

                                <h4>Tasks</h4>

                            </div>

                            <div class="col-xl-12 row">

                                <div class="main_flow w-100 flex-wrap">

                                    <?php foreach($this->report->tasks() as $task):?>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">

                                            <p><?= $task['task'];?> : <?= $task['task_status'] ?></p>

                                        </div>
                                    <?php endforeach;?>

                                </div>

                            </div>


                            <div class="title_create">

                                <h4>Feedback and Follow-up</h4>

                            </div>

                            <div class="col-xl-12 row">

                                <div class="main_flow flex-wrap">
                                    <?php foreach($this->report->what_worked() as $worked):?>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">

                                            

                                        </div>
                                    <?php endforeach;?>

                                   

                                </div>

                            </div>

                            <div class="col-xl-12 row">

                                <div class="main_flow flex-wrap">


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
                <?php
            }


            public function render_table_row()
            { 
                ?>
                    <tr class="bg-color">

                        <td><?= $this->report->slug(); ?></td>

                        <td><?= $this->report->date(); ?></td>

                        <td><?= $this->report->disaster_name(); ?></td>

                        <td>
                            <?php if ($this->report->group()): ?>
                                <a href="<?= $this->report->group()->permalink(); ?>"><?= $this->report->group()->name(); ?></a>
                            <?php endif; ?>
                        </td>

                        <td><?= $this->report->country() ?></td>

                        <td><?= $this->report->state() ?></td>

                        <td><?= $this->report->city() ?></td>

                        <td><?= $this->report->submitter_name() ?></td>

                        <td style="width:12%;">

                            <a href="<?= $this->report->permalink(); ?>" class="d-block">

                                <div class="orange-box report-btn">

                                    <p>View</p>

                                </div>

                            </a>

                        </td>

                    </tr>
                <?php
            }


            public static function tableHeader()
            { ?>
                    <th scope="col">Report No.</th>

                    <th scope="col">Date</th>

                    <th scope="col">Event</th>

                    <th scope="col">Group</th>

                    <th scope="col">Country</th>

                    <th scope="col">State</th>

                    <th scope="col">City</th>

                    <th scope="col">Submitter</th>
                    <th scope="col"></th>
            <?php
            }
        }
