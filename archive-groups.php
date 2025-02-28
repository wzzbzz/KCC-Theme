<?php

/* Template Name: Group ums */
$current_user_id = get_current_user_id();
$user = new KCC\User($current_user_id);

if (!is_user_logged_in()) {
    header('Location: ' . site_url('login'));
    exit;
}

get_header('dashboard'); ?>

<div id="group_container" class="col-xl-11 col-lg-11 col-md-11 col-10  mt-4 px-0">
    <div class="col-xl-12 col-lg-11 col-md-11 col-12  my-4">
        <div class="group_box g_group_box">
            <div class="d-lg-flex d-md-flex align-items-center justify-content-between grp_box">
                <div class="g_group_box_new">
                    <ul class="groups-nav nav nav-pills mb-3 linked_blog" id="pills-tab" role="tablist">
                        <li class="nav-item group_btn">
                            <a href="#" data-filter='all' id="all" class="nav-link active">All</a>
                        </li>
                        <li class="nav-item group_btn">
                            <a href="#" data-filter='mine' id="my-groups" class="nav-link ">My Groups</a>
                        </li>
                        <li class="nav-item group_btn">
                            <a href="#" data-filter='joined' id="joined" class="nav-link">Groups Joined</a>
                        </li>
                        <li class="nav-item group_btn">
                            <a href="#" data-filter='requests' class="nav-link <?php echo ($user->hasAnyInvitationsOrRequests())?" has-request ":"";?>" id="requests">Invitations / Requests</a>
                        </li>
                    </ul>
                </div>

                <!--<div class="back_btn">
                    <a href="<?php echo site_url('groups') ?>">Back</a>
                </div>-->
            </div>

            <div class="btn_list_blog my-lg-5 my-3">
                <a href="<?php echo site_url('group-create') ?>" class="mr-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">
                    Create New
                </a>
                <!--<a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/group_icon.png" class="img-fluid mr-2">
                    Filter By
                </a>-->

            </div>

            <div class="row mt-5">
                <?php
                $currentPage = get_query_var('paged');
                $searchArg = array();
                $searchArg['post_type'] = 'groups';
                $searchArg['post_status'] = 'publish';
                $searchArg['paged'] = $currentPage;
                $searchArg['posts_per_page'] = 50;

                if (isset($_GET['submit'])) {
                    $Q_group_type  =  $_GET['q_group_type'];
                    if (!empty($Q_group_type)) {
                        $searchArg['post_status'] = 'publish';
                        $searchArg['meta_query'] =   array(
                            'relation' => 'AND',
                            array(
                                'key'     => 'group_type',
                                'value'   => $Q_group_type,
                                'compare' => '='
                            )
                        );
                        $allGroups = get_posts($searchArg);
                    } elseif (!empty($_GET['q_date'])) {

                        $searchArg['date_query'] = array(
                            'after' => date('Y-m-d', strtotime($_GET['q_date'])),
                            'before' => date('Y-m-d', strtotime($_GET['q_date'])),
                            'inclusive' => 'true'
                        );

                        $searchArg['meta_query'] =   array(
                            'relation' => 'AND',
                            array(
                                'key'     => 'group_type',
                                'value'   => "Private",
                                'type'    => 'CHAR',
                                'compare' => '!='
                            )
                        );
                        $allGroups = get_posts($searchArg);
                    } else {

                        $Q_name  =  $_GET['q_name'];
                        $Q_date  =  $_GET['q_date'];
                        $Q_city  =  $_GET['q_city'];
                        $sql = "SELECT * FROM wp_posts WHERE post_title LIKE '%$Q_name%' AND post_type ='groups' AND post_status ='publish' ";
                        $allGroups = $wpdb->get_results($sql);
                        $group_type = get_post_meta($grpupVal->ID, 'group_type', true);
                    }
                } else {
                    $searchArg['meta_query'] =   array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'group_type',
                            'value'   => "Private",
                            'type'    => 'CHAR',
                            'compare' => '!='
                        )
                    );
                    $allGroups = get_posts($searchArg);
                }

                if (!empty($allGroups)) {

                    foreach ($allGroups as $grpupVal) {

                        $group = new KCC\Group($grpupVal->ID);
                        $group->render_cell();
                
                  }
                } ?>

                <div class="col-lg-12 mt-3">
                    <nav aria-label="...">
                        <?php
                        // echo "<div class='page-nav-container pagination'>" . paginate_links(array(
                        //     'total' => $posts->max_num_pages,
                        //     'prev_text' => __('Previous'),
                        //     'next_text' => __('Next')
                        // )) . "</div>";
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modals$ -->
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
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            <input placeholder="Select date" type="date" name="q_date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group select_sec">
                        <label for="exampleFormControlSelect1">Filter by group type</label>
                        <select class="form-control" name="q_group_type">
                            <option value="">Select</option>
                            <?php
                            $args = array(
                                'Open' => 'Open',
                                'Close' => 'Closed',
                                // 'Private' => 'Private'
                            );
                            foreach ($args as $value) {  ?>
                                <option value="<?php echo $value; ?>"> <?php echo $value; ?></option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Filter by Name</label>
                        <input type="text" class="form-control" name="q_name" placeholder="Type here">
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                            <div class="apply_btn ">
                                <button class="btn btn_apply" data-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                            <div class="apply_btn active">
                                <button type="submit" name="submit" class="btn btn_apply">Apply filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->
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
                                    <img src="<?= get_template_directory_uri(); ?>/avatar.png" alt="Abhishek Rajput" height="150" title="" width="150" class="rounded-circle userImg">
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
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cdvc_1.png" class="img-fluid" alt="image">
                                        <p>CDVC Level 1</p>
                                    </div>
                                    <div class="text-center">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cdvc_2.png" class="img-fluid" alt="image">
                                        <p>CDVC Level 2</p>
                                    </div>
                                    <div class="text-center">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cdvc_3.png" class="img-fluid" alt="image">
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
                                <button type="button" class="btn btn-secondary" id="requestAccept" data-nonce="<?php echo @$nonce; ?>" data-gid="" data-invited_to="" data-invited_from="">Accept Request</button>
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