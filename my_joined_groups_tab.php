<?php
/* Template Name: Tab My Joined Groups */
$current_user_id = get_current_user_id();

if (is_user_logged_in()) {
    get_header('dashboard');
?>
    <?php include('user-sidebar.php') ?>

    <div class="col-xl-12 ">
        <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
                <?php include('user_topbar.php') ?>
            </div>
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
                                        <a href="<?php echo site_url() ?>/groups/" class="nav-link">All</a>
                                    </li>
                                    <li class="nav-item group_btn">
                                        <a href="<?php echo site_url() ?>/tab-my-groups/" class="nav-link">My Groups</a>
                                    </li>

                                    <li class="nav-item group_btn">
                                        <a href="<?php echo site_url() ?>/my-joined-groups//" class="nav-link active"> Groups Joined</a>
                                    </li>

                                    <li class="nav-item group_btn">
                                        <a href="<?php echo site_url() ?>/tab-my-group-requests/" class="nav-link" id="pills-Request-tab">My Groups Requests</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="back_btn">
                                <a href="<?php echo site_url('groups') ?>">Back</a>
                            </div>
                        </div>

                        <div class="btn_list_blog my-lg-5 my-3">
                            <a href="<?php echo site_url('group-create') ?>" class="mr-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">
                                Create New
                            </a>
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/group_icon.png" class="img-fluid mr-2">
                                Filter By
                            </a>

                        </div>

                        <div class="row mt-5 mx-1 profile_row">
                            <?php

                            $joinGrp = learndash_get_users_group_ids($current_user_id);


                            if (!empty($joinGrp)) {
                                echo "
                                <div class='col-lg-12 mb-3'>
                                <h2 class='title_group'>Groups Joined</h2>
                                </div>";

                                $joinedArg = array();
                                $joinedArg['post_type'] = 'groups';
                                $joinedArg['post_status'] = 'publish';
                                $joinedArg['paged'] = $currentPage;
                                $joinedArg['posts_per_page'] = 50;
                                $joinedArg['post__in'] = $joinGrp;

                                if (!empty($_GET['q_name'])) {
                                    $joinedArg['s'] = $_GET['q_name'];
                                }
                                if (!empty($_GET['q_group_type'])) {
                                    $joinedArg['meta_query'] =   array(
                                        array(
                                            'key' => 'group_type',
                                            'value'   => $_GET['q_group_type']

                                        )
                                    );
                                }

                                if (!empty($_GET['q_date'])) {

                                    $joinedArg['date_query'] = array(
                                        'after' => date('Y-m-d', strtotime($_GET['q_date'])),
                                        'before' => date('Y-m-d', strtotime($_GET['q_date'])),
                                        'inclusive' => 'true'
                                    );
                                }

                                $myJoinedGroups = get_posts($joinedArg);
                                if (!empty($myJoinedGroups)) {
                                    $j = 1;
                                    foreach ($myJoinedGroups as $joinedGrpupVal) {
                                        $author_id = $joinedGrpupVal->post_author;
                                        if ($current_user_id != $author_id) {
                                            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($joinedGrpupVal->ID));
                                            if (empty($groupImg)) {
                                                $groupImg = get_template_directory_uri() . "/assets/images/range_1.png";
                                            }

                                            $author_img = get_avatar_url($author_id);
                                            if (empty($author_img)) {
                                                $author_img = get_template_directory_uri() . "/avatar.png";
                                            }

                                            $userList = learndash_get_groups_user_ids($joinedGrpupVal->ID);

                                            $group_type = get_post_meta($joinedGrpupVal->ID, 'group_type', true);

                            ?>
                                            <div class="col-lg-3">
                                                <div class="custom-card">
                                                    <a href="<?php echo get_permalink($joinedGrpupVal->ID) ?>">

                                                        <div class="image">
                                                            <img src="<?php echo $groupImg ?>" alt="" height="" title="" width="">
                                                            <div class="public-text">
                                                                <p><?php echo $group_type ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="group-title">
                                                                <h4><?php echo $joinedGrpupVal->post_title ?></h4>
                                                                <h6 class="mt-2" style="font-size:12px;"><?php echo date("m-d-Y", strtotime($joinedGrpupVal->post_date)); ?></h6>
                                                            </div>
                                                            <div class="total-member">
                                                                <p><?php echo count($userList) ?> Member</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex main-content  align-items-center">
                                                            <div class="left-text">
                                                                Manager
                                                            </div>
                                                            <div class="member-image">
                                                                <img src="<?php echo $author_img; ?>" alt="<? //php echo the_author_meta( 'display_name' , $author_id ); 
                                                                                                            ?>" height="" title="" width="">
                                                            </div>
                                                            <div class="right-text">
                                                                <?php echo the_author_meta('user_nicename', $author_id) ?>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">

                                                            <div class="main-group-image">
                                                                <?php if (!empty($userList)) { ?>
                                                                <?php
                                                                    $i = 1;
                                                                    foreach ($userList as $key => $member_id) {

                                                                        $member_img = get_avatar_url($member_id);
                                                                        if (empty($member_img)) {
                                                                            $member_img = get_template_directory_uri() . "/avatar.png";
                                                                        }
                                                                        if ($j > 3) {
                                                                            echo "+" . (count($userList) - 3);
                                                                            break;
                                                                        } else {
                                                                            echo '<div class="mem-image">
                                                    <img src="' . $member_img . '" alt="" height="" title="" width="">
                                                </div>';
                                                                        }
                                                                        $j++;
                                                                    }
                                                                } ?>

                                                            </div>

                                                        </div>
                                                        <div class="card-text">
                                                            <p><?php echo $joinedGrpupVal->post_content ?></p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                            <?php   }
                                    }
                                } else {
                                    echo "No any group exists";
                                }
                            } ?>
                            <div class="col-lg-12 mt-3">
                                <nav aria-label="...">
                                    <?php
                                    echo "<div class='page-nav-container pagination'>" . paginate_links(array(
                                        'total' => $posts->max_num_pages,
                                        'prev_text' => __('Previous'),
                                        'next_text' => __('Next')
                                    )) . "</div>";
                                    ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4 pt-2 justify-content-end d-flex">
                <?php include('common_user_footer.php') ?>
            </div>
        </div>

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
                                    <input placeholder="Select date" type="date" name="q_date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group select_sec">
                                <label for="exampleFormControlSelect1">Filter by Group Type</label>
                                <select class="form-control" name="q_group_type">
                                    <option value="">Select</option>
                                    <?php
                                    $args = array(
                                        'Open' => 'Open',
                                        'Close' => 'Closed',
                                        'Private' => 'Private'
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
        </div>
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
        <!--<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered create_tickit" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLongTitle">Filter by-2</h5>          
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
                            <//?php foreach($city_list  as $cityVal){
                              //  echo " <option value='".$cityVal['meta_value']."'>".$cityVal['meta_value']."</option>";
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
                                <button class="btn btn_apply"  data-dismiss="modal" aria-label="Close">Cancal</button>
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
</div>-->
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
    <?php
    get_footer('new');
} else {
    wp_redirect('login');
    exit();
}
