<?php
use KCC\Groups;
/* Template Name: Group Members */
global $wpdb;

$current_user_id = get_current_user_id();
$group_slug =  get_query_var('group_slug');

$group = Groups::getGroupBySlug($group_slug);

$groupId = $group->id();
$group_type = $group->type();
//$allMemnbersID = learndash_get_groups_user_ids($groupId);
//$userList = learndash_get_groups_user_ids($grpupVal->ID);
get_header('dashboard');
?>

<div class="col-xl-12 ">
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
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                        <?php if ($group_type == 'Closed') { ?>
                                            <?php echo 'All Requests' ?>
                                        <?php } else { ?>
                                            <?php echo 'All Invited' ?>
                                        <?php } ?>
                                    </a>
                                </li>
                                <li class="nav-item group_btn">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Accepted</a>
                                </li>
                                <li class="nav-item group_btn">
                                    <a class="nav-link" id="pills-Request-tab" data-toggle="pill" href="#pills-Request" role="tab" aria-controls="pills-Request" aria-selected="false">Rejected</a>
                                </li>
                            </ul>
                        </div>
                        <div class="back_btn">
                            <a href="<?php echo site_url('groups') ?>">Back</a>
                        </div>
                    </div>
                    <div class="groups_tabs">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row mt-4">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="title_group"><?php echo get_the_title($groupId) ?> (<?php echo get_post_meta($groupId, 'group_type', true) ?> Group)</h3>
                                    </div>

                                    <?php
                                    if(!empty($group->pendingRequests())){
                                        foreach ($group->pendingRequests() as $request) {
                                            $user = new \KCC\User($request->user_id);
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
                                                            <p><small>Requested on <?= date('m-d-Y', strtotime($request->created_at)) ?></small></p>
                                                        </div>

                                                        <div class="col-md-12 text-center requests-btn mt-3">
                                                            <div class="d-flex justify-content-between">

                                                                <div class="action-button">
                                                                    <?php if (get_post_meta($groupId, 'group_type', true) == 'Private') { ?>
                                                                        <div class="follow btn-1">
                                                                            <button type="button" class="btn btn-primary acceptMemberRequest ums_btn<?php echo $user->id() ?>" data-uid="<?php echo $user->id() ?>" data-groupid="<?php echo $group->id() ?>" data-rid=<?= $request->id ?> title="Accept">Accept</button>
                                                                        </div>

                                                                    <?php } elseif (get_post_meta($groupId, 'group_type', true) == 'Closed') { ?>
                                                                        <div class="follow btn-1">
                                                                            <button type="button" class="btn btn-primary acceptMemberRequest ums_btn<?php echo $user->id() ?>" data-uid="<?php echo $user->id() ?>" data-groupid="<?php echo $group->id() ?>" data-rid=<?= $request->id ?> title="Accept">Accept</button>
                                                                        </div>

                                                                    <?php } else { ?>

                                                                        <form method="POST" action="">
                                                                            <input type="hidden" name="group_id" value=<?php echo $groupId ?>>
                                                                            <input type="hidden" name="user_id" value="<?php echo $value->user_id ?>">
                                                                            <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />
                                                                            <input type="hidden" name="acceptMemberRequest" value="acceptMemberRequest">
                                                                            <button class="btn btn-primary mx-2">Accept</button>
                                                                            <input type="hidden" name="request_id" value="<?= $request->id ?>">
                                                                        </form>

                                                                    <?php } ?>


                                                                </div>
                                                                <div class="action-button">
                                                                    <form method="POST">
                                                                        <input type="hidden" name="group_id" value=<?php echo $group->id() ?>>
                                                                        <input type="hidden" name="user_id" value="<?php echo $user->id() ?>">
                                                                        <input type="hidden" name="request_id" value="<?= $request->id ?>">
                                                                        <input type="hidden" name="reportsforms_nonce" value="<?php echo wp_create_nonce('reportsforms_nonce'); ?>" />
                                                                        <input type="hidden" name="declineMemberRequest" value="declineMemberRequest">
                                                                        <button type="button" class="btn btn-primary declineMemberRequest ums_btn<?php echo $user->id() ?>" data-uid="<?php echo $user->id() ?>" data-groupid="<?php echo $group->id() ?>" data-rid=<?= $request->id ?> title="Decline">Decline</button> 
                                                                    </form>
                                                                    
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    } else { ?>

                                        <span class="text-danger mx-3"> <?php echo 'There are no pending requests/ invitations.' ?> </span>

                                    <?php } ?>



                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row mt-4">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="title_group"><?php echo get_the_title($groupId) ?> (<?php echo get_post_meta($groupId, 'group_type', true) ?> Group)</h3>
                                    </div>

                                    <?php
                                    $result = $wpdb->get_results("SELECT * FROM group_invite WHERE `group_id` = $groupId AND `invited_to` = $current_user_id  AND `status` = 'accepted'");
                                    // echo "<pre>";

                                    // print_r($result);


                                    if (!empty($result))
                                        foreach ($result as $value) {

                                            $userInfo  =  get_userdata($value->user_id);
                                            // print_r($userInfo);

                                    ?>
                                        <div class="col-lg-3">
                                            <div class="custom-card d-flex align-items-center justify-content-center">
                                                <div class="close-group">
                                                    <div class="text-center">
                                                        <!--<img src="https://picsum.photos/150/150?grayscale">-->
                                                        <img src="<?php echo get_avatar_url($value->user_id); ?>">
                                                    </div>
                                                    <div class="text-center mt-3">
                                                        <h5><?php echo $userInfo->display_name; ?></h5>
                                                        <p><?php echo $userInfo->user_email ?></p>

                                                        <!--<? //php echo get_the_time('m-d-Y', $rid) 
                                                            ?>-->
                                                        <p><small>Accepted on <?php echo date('m-d-Y', strtotime($value->created_at)) ?></small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                    else { ?>

                                        <span class="text-danger mx-3"> <?php echo 'There is no members.' ?> </span>

                                    <?php } ?>



                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-Request" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row mt-4">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="title_group"><?php echo get_the_title($groupId) ?> (<?php echo get_post_meta($groupId, 'group_type', true) ?> Group)</h3>
                                    </div>

                                    <?php
                                    //$result = $wpdb->get_results("SELECT * FROM group_invite WHERE `group_id` = $groupId  AND  (`user_id` = '".$current_user_id."' OR invited_to =  '".$current_user_id."') AND `status` = 'rejected'");
                                    $result = $wpdb->get_results("SELECT * FROM group_invite WHERE `group_id` = $groupId AND `status` = 'rejected'");

                                    if (!empty($result))
                                        foreach ($result as $value) {
                                            $userInfo  =  get_userdata($value->user_id);
                                            // print_r($userInfo);

                                    ?>
                                        <div class="col-lg-3">
                                            <div class="custom-card d-flex align-items-center justify-content-center">
                                                <div class="close-group">
                                                    <div class="text-center">
                                                        <!--<img src="https://picsum.photos/150/150?grayscale">-->
                                                        <img src="<?php echo get_avatar_url($value->user_id); ?>">
                                                    </div>
                                                    <div class="text-center mt-3">
                                                        <h5><?php echo $userInfo->display_name; ?></h5>
                                                        <p><?php echo $userInfo->user_email ?></p>

                                                        <!--<? //php echo get_the_time('m-d-Y', $rid) 
                                                            ?>-->
                                                        <p><small>Rejected on <?php echo date('m-d-Y', strtotime($value->created_at)) ?></small></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                    else { ?>

                                        <span class="text-danger mx-3"> <?php echo 'There is no members.' ?></span>

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

    <!-- Modal -->
    <div class="modal fade group-modal fade bd-example-modal-lg" id="GroupeModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Group Information</h5>
                </div>

                <div class="umsjee"></div>


                <div class="modal-footer d-flex">
                    <div>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" title="Cancel">Cancel</button>
                    </div>
                    <div class="mx-1">

                    </div>
                    <div>
                        <button type="button" class="btn btn-secondary" id="requestaccess" data-nonce="<?php echo $nonce; ?>" data-gid="">Request Access</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade group-modal fade bd-example-modal-lg" id="joinGroupeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Group Information</h5>
                </div>
                <div class="umsjee"></div>
                <div class="modal-footer d-flex">
                    <div>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" title="Cancel">Cancel</button>
                    </div>
                    <div class="mx-1"></div>
                    <div>
                        <button type="button" class="btn btn-secondary" id="joinGroupeAccess" data-nonce="<?php echo $nonce; ?>" data-gid="">Join Group</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade group-modal fade bd-example-modal-lg" id="ownerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>You are the owner of this group, So can not send request from here.</p>
                </div>


            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered create_tickit" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLongTitle">Filter by</h5>
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
                            <label for="exampleFormControlSelect1">Filter by City</label>
                            <select class="form-control" id="postCity" name="postCity">
                                <option>Select City</option>
                                <?php foreach ($city_list  as $cityVal) {
                                    echo " <option value='" . $cityVal['meta_value'] . "'>" . $cityVal['meta_value'] . "</option>";
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Filter by Name</label>
                            <input type="text" class="form-control" name="groupName" id="groupName" placeholder="Type here">
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                                <div class="apply_btn ">
                                    <button class="btn btn_apply" data-dismiss="modal" aria-label="Close">Cancal</button>
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

    <!--Request access modal-->
    <div class="modal fade group-modal fade bd-example-modal-lg user_information " id="GroupeModalCenter99" style=" padding-right: 5px;" aria-modal="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="modal-header">
                        <h5 class="modal-title">User Information</h5>
                    </div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row m-0">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <div>
                                        <img src="https://knowledge.communication.worldcares.org/wp-content/themes/astra/avatar.png" alt="Abhishek Rajput" height="150" title="" width="150" class="rounded-circle userImg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center">
                                <div class="text-center">
                                    <h4 class="userName">Jane Doe</h4>
                                    <p class="UserEmail">jane.doe@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact-group d-flex justify-content-between align-items-center px-2">
                                <div class="contact d-flex align-items-center">
                                    <span class="userConnection">26</span> &nbsp; Contact
                                </div>
                                <div class="group d-flex align-items-center">
                                    <span class="userGroup">26</span> &nbsp; Groups
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row d-flex justify-content-center ml-0 mr-0 mt-3">
                                <div class=" col-md-10">
                                    <div class="d-flex justify-content-between">
                                        <div class="text-center">
                                            <img src="https://knowledge.communication.worldcares.org/wp-content/themes/astra/assets/images/cdvc_1.png" class="img-fluid" alt="image">
                                            <p>CDVC Level 1</p>
                                        </div>
                                        <div class="text-center">
                                            <img src="https://knowledge.communication.worldcares.org/wp-content/themes/astra/assets/images/cdvc_2.png" class="img-fluid" alt="image">
                                            <p>CDVC Level 2</p>
                                        </div>
                                        <div class="text-center">
                                            <img src="https://knowledge.communication.worldcares.org/wp-content/themes/astra/assets/images/cdvc_3.png" class="img-fluid" alt="image">
                                            <p>CDVC Level 3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="modal-footer d-flex mx-4">
                                <div>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" title="Cancel">Cancel</button>
                                </div>
                                <div class="mx-1">
                                </div>
                                <div>
                                    <button type="button" class="btn btn-secondary" id="requestAccept" data-nonce="<?php echo @$nonce; ?>" data-gid="<?= $group->id();?>" data-invited_to="" data-user_id="">Accept Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
            </div>
        </div>
    </div>

<?php get_footer(); ?>