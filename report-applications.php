<?php

use KCC\Reports\Reports;
use KCC\User;

global $post;
$report =  KCC\Reports\Reports::factory($post->ID);


get_header('dashboard');
?>

<div class="col-xl-12 report-applications">
    <div class="row justify-content-end mt-3">

        <div class="col-xl-11 col-lg-11 col-md-11 col-10  mt-4 px-0">
            <div class="col-xl-12 col-lg-11 col-md-11 col-12  my-4">
                <?php do_action('flash_msg');
                echo @$_SESSION['flash_msg'];
                ?>
                <div class="group_box g_group_box">
                    <div class="d-flex align-items-center justify-content-between grp_box">
                        <div class="g_group_box_new">
                            <ul class="nav nav-pills mb-3 linked_blog" id="pills-tab" role="tablist">
                                <li class="nav-item group_btn">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pills-home" href="#incoming-requests" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Pending
                                    </a>
                                </li>
                                <li class="nav-item group_btn">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#approved-requests" role="tab" aria-controls="pills-profile" aria-selected="false">Accepted</a>
                                </li>
                                <li class="nav-item group_btn">
                                    <a class="nav-link" id="pills-Request-tab" data-toggle="pill" href="#declined-requests" role="tab" aria-controls="delclined-requests" aria-selected="false">Rejected</a>
                                </li>
                            </ul>
                        </div>
                        <div class="back_btn">
                            <a href="<?php echo site_url('reports') ?>">Back</a>
                        </div>
                    </div>
                    <div class="groups_tabs">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="incoming-requests" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row mt-4">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="title_group">Applications for <?= $report->title();?></h3>
                                    </div>

                                    <?php
                                    if( !empty( $report->pending_applications() ) ){
                                        foreach ($report->pending_applications() as $application) {
                                            
                                            $user = new \KCC\User($application['user_id']);
                                    ?>
                                            <div class="col-lg-3">
                                                <div class="custom-card d-flex align-items-center justify-content-center">
                                                    <div class="close-group">
                                                        <div class="text-center">
                                                            <a href="<?= $user->profile_link();?>"><?= $user->image() ?></a>
                                                        </div>
                                                        <div class="text-center mt-3">
                                                            <h5><?= $user->name() ?></h5>
                                                            <p><?= $user->email() ?></p>
                                                        </div>

                                                        <div class="col-md-12 text-center applications-btn mt-3">
                                                            <div class="d-flex justify-content-between">

                                                                <div class="action-button">
                                                                    <form method="POST" action="">
                                                                        <input type="hidden" name="report_id" value=<?php echo $report->id(); ?>>
                                                                        <input type="hidden" name="user_id" value="<?php echo $user->id(); ?>">
                                                                        <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />
                                                                        <input type="hidden" name="action" value="accept_application">
                                                                        <button class="btn btn-primary mx-2">Accept</button>
                                                                    </form>
                                                                </div>
                                                                <div class="action-button">
                                                                    <form method="POST" action="">
                                                                        <input type="hidden" name="report_id" value=<?php echo $report->id(); ?>>
                                                                        <input type="hidden" name="user_id" value="<?php echo $user->id(); ?>">
                                                                        <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />
                                                                        <input type="hidden" name="action" value="decline_application">
                                                                        <button class="btn btn-primary mx-2">Decline</button>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    } else { ?>

                                        <span class="text-danger mx-3"> <?php echo 'There are no pending applications/ invitations.' ?> </span>

                                    <?php } ?>



                                </div>
                            </div>

                            <div class="tab-pane fade" id="approved-requests" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row mt-4">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="title_group">Accepted Applications</h3>
                                    </div>

                                    <?php

                                    if ($report->has_approved_applications())
                                        foreach ( $report->approved_applications() as $application) {

                                            $user = new \KCC\User($application['user_id']);

                                    ?>
                                        <div class="col-lg-3">
                                            <div class="custom-card d-flex align-items-center justify-content-center">
                                                <div class="close-group">
                                                    <div class="text-center">
                                                        <?= $user->image() ?>
                                                    </div>
                                                    <div class="text-center mt-3">
                                                        <h5><?= $user->name() ?></h5>
                                                        <p><?= $user->email() ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                    else { ?>

                                        <span class="text-danger mx-3"> <?php echo 'No approved applications' ?> </span>

                                    <?php } ?>



                                </div>
                            </div>

                            <div class="tab-pane fade" id="declined-requests" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row mt-4">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="title_group">Declined Applications</h3>
                                    </div>

                                    <?php
                                    

                                    if ($report->has_declined_applications())
                                        foreach ( $report->declined_applications() as $application) {    
                                            $user = new \KCC\User($application['user_id']);
                                            
                                    ?>
                                        <div class="col-lg-3">
                                            <div class="custom-card d-flex align-items-center justify-content-center">
                                                <div class="close-group">
                                                    <div class="text-center">
                                                        <!--<img src="https://picsum.photos/150/150?grayscale">-->
                                                        <a href="<?= $user->profile_link();?>"><?= $user->image() ?></a>
                                                    </div>
                                                    <div class="text-center mt-3">
                                                        <h5><?= $user->name() ?></h5>
                                                        <p><?= $user->email() ?></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                    else { ?>

                                        <span class="text-danger mx-3"> <?php echo 'No declined applications' ?></span>

                                    <?php } ?>



                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered create_tickit" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLongTitle">Filter By</h5>
                </div>
                <form method="get" action="">
                    <div class="modal-body main_profile_form">
                        <div class="form-group select_sec date_sec">
                            <label for="exampleFormControlSelect1">Filter by Date</label>
                            <div class="md-form md-outline input-with-post-icon datepicker" id="accLabels">
                                <input placeholder="Select date" type="date" name="groupDate" id="groupDate" class="form-control">
                            </div>
                        </div>
                        <div class="form-group select_sec">
                            <label for="exampleFormControlSelect1">Filter by Group Type</label>
                            <select class="form-control" id="group_type" name="group_type">
                                <option value="">Select</option>
                                <?php
                                $args = array(
                                    'Open' => 'Open',
                                    'Close' => 'Close',
                                    'Private' => 'Private'
                                );
                                foreach ($args as $value) {  ?>
                                    <option value="<?php echo $value; ?>"> <?php echo $value; ?></option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Filter by Name</label>
                            <input type="text" class="form-control" name="groupName" id="groupName" placeholder="Type here">
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                                <div class="apply_btn ">
                                    <button class="btn btn_apply" data-dismiss="modal" aria-label="Close">Cancel</button>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                                <div class="apply_btn active">
                                    <button type="submit" class="btn btn_apply">Apply filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

<?php get_footer(); ?>