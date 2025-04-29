<?php

// login redirect

use KCC\FlashMessages\FlashMessages;

if (!is_user_logged_in()) {

    header('Location: ' . site_url('login'));
    exit;
}

global $post;

$group = new KCC\Group($post->ID);


$current_user_id = get_current_user_id();

$member_ids = $group->getMemberIds();
$members = $group->getMembers();


if (!$group->currentUserCanAccessPage($current_user_id) && $group->type() == 'Closed') {

    FlashMessages::add('Closed group, please request access to view.', 'error');

    header('Location: ' . site_url('groups'));

    exit;
}


$headerurl = $_SERVER['REQUEST_URI'];

$baseHref = site_url() . "$headerurl";

get_header('dashboard');

?>


<div class="col-xl-12">

    <div class="row justify-content-end mt-3">

        <div class="col-xl-11 col-lg-11 col-md-11 col-10  my-0">

            <div class="donation_tab_pills ">

                <div id = "group_info" class="donate_details_main">
                    <div class="d-flex justify-content-center">
                        <?= $group->image();?>
                    </div>
                    <div class="donation_detail d-flex justify-content-center">
                        <div class="d-flex justify-content-center w-100">
                            <div class="d-flex align-items-center pt-2 pb-2">
                                <div class="d-flex align-items-center">
                                    <h5 data-id="<?=$group->id(); ?>"><?= $group->title(); ?></h5>
                                        <span data-id="<?php echo $group->id(); ?>"><?= $group->type(); ?></span>
                                </div>

                            </div>

                            <div>

                                <?php if ($group->currentUserIsLeader()) { // if user is leader, show the edit button ?>
                                    <div class="donate_btn_right">

                                        <a href="<?php echo site_url('group-edit?id=' . $group->id()) ?>">
                                            <button class="btn now_donate">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/editImg.png">
                                                Edit Group
                                            </button>

                                        </a>

                                    </div>

                                <?php } ?>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="d-flex justify-content-center">

                    <div class="d-flex justify-content-center">

                        <div class="main-group-image single-group">

                            <?php if (count($member_ids) > 0) { ?>

                                <div class="mem-image">
                                    
                                    <?php

                                    $i = 0;

                                    foreach ($members as $member) {

                                        if ($i == 0) {

                                            echo $member->image();

                                        }

                                        $i++;

                                    }

                                    ?>
                                </div>

                            <?php } ?>



                        </div>

                        <?php if (count($member_ids) > 0) { ?>

                            <div class="single-group-circle blue-circle">

                                <div class="circle-text">

                                    <p>+<?php

                                        echo count($member_ids) ?></p>

                                </div>

                            </div>

                        <?php } ?>

                        <div class="d-flex manager-part w-100 align-items-center">
                            <div class="manager-title">
                                Manager
                            </div>
                            <div class="manger-img mx-2">
                                <?= $group->getLeader()->image();?>

                            </div>
                            <div>
                                <span><?php echo ($group->currentUserIsLeader()) ? "You" : $group->getLeader()->name(); ?></span>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="about_donate d-flex justify-content-center">
                    <div class="group-description">
                        <?php the_content(); ?>
                    </div>

                </div>

            </div>

        </div>

        <div class="col-xl-11 col-lg-11 col-md-11 col-10 mt-3 mb-4 pb-4">

            <div class="memebr_tab_pills reports-forms">

                <ul class="nav nav-pills" id="pills-tab" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link active" id="pills-members-tab" data-toggle="pill" href="#pills-members" role="tab" aria-controls="pills-members" aria-selected="false">Members</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-blogs-tab" data-toggle="pill" href="#pills-blogs" role="tab" aria-controls="pills-blogs" aria-selected="false">Blogs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-announcements-tab" data-toggle="pill" href="#pills-announcements" role="tab" aria-controls="pills-announcements" aria-selected="false">Announcements</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-reports-tab" data-toggle="pill" href="#pills-reports" role="tab" aria-controls="pills-reports" aria-selected="false">Reports & Forms</a>
                        <!-- <a href="<?php // echo $baseHref 
                                        ?>all-reports-forms" class="nav-link">Reports & Forms</a> -->
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-media-tab" data-toggle="pill" href="#pills-media" role="tab" aria-controls="pills-media" aria-selected="false">Media & Resources</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-calendar-tab" data-toggle="pill" href="#pills-calendar" role="tab" aria-controls="pills-calendar" aria-selected="false">Calendar Events</a>
                    </li>

                </ul>


                <div class="tab-content resources-inc remove-space" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-members" role="tabpanel" aria-labelledby="pills-members-tab">
                        <?php include('member_inc.php'); ?>
                    </div>

                    <div class="tab-pane fade" id="pills-blogs" role="tabpanel" aria-labelledby="pills-blogs-tab">
                        <?php include('blog_inc.php'); ?>
                    </div>

                    <div class="tab-pane fade" id="pills-announcements" role="tabpanel" aria-labelledby="pills-announcements-tab">
                        <?php include('announcement_inc.php'); ?>
                    </div>

                    <div class="tab-pane fade" id="pills-reports" role="tabpanel" aria-labelledby="pills-reports-tab">
                        <div class="report-media-tab">
                            <?php include('groups-tab-reports.php'); ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-media" role="tabpanel" aria-labelledby="pills-media-tab">
                        <?php include('resources_inc.php'); ?>
                    </div>

                    <!-- added tab for group calendar 08SEP24  -->
                    <div class="tab-pane fade" id="pills-calendar" role="tabpanel" aria-labelledby="pills-calendar-tab">
                        <?php include('event-calendar_groupFiltered.php'); ?>
                    </div>

                </div>


            </div>

            <div class="btm_pagination_sec">

                <nav aria-label="Page navigation example">

                    <ul class="pagination justify-content-end">



                        <?php

                        // $big = 999999999; // need an unlikely integer

                        // echo paginate_links(array(

                        //     'base' => str_replace($big, '%#%', get_pagenum_link($big)),

                        //     'format' => '<li>?paged=%#%</li>',

                        //     'current' => max(1, get_query_var('paged')),

                        //     'total' => $loop->max_num_pages
                        // ));

                        ?>



                    </ul>

                </nav>

            </div>

        </div>

    </div>

</div>





<!--  Modal Feed Edit  -->

<div class="modal fade feed" id="editFeed" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"

    aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered create_tickit"

        role="document">

        <div class="modal-content">

            <div class="modal-body">

                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">

                        <h5 class="modal-title create_feed_title_modeal " style="display:inline-block" id="exampleModalLongTitle">Update Feed</h5>

                        <button type="button" class="close close-btn" data-dismiss="modal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png"></button>

                    </div>

                </div>

                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                        <form method="POST" action="" class="row mediadoc_form" enctype="multipart/form-data">

                            <input type="hidden" name="feed_id" id="feed_id1" value="">

                            <input type="hidden" name="update_feed" value="update_feed" />

                            <input type="hidden" name="group_image_nonce" value="<?php echo wp_create_nonce('group_image_nonce'); ?>" />



                            <div class="col-lg-12 col-12">

                                <div class="avatar-upload mb-3">

                                    <div class="avatar-preview">

                                        <img class="imagePreview" src="" id="img_new" height="88" width="120">

                                        <div class="imagePreview" id="img_new" style="background-image: url(https://via.placeholder.com/120x88);">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-12 col-lg-12 my-2">

                                <div class="form-group">

                                    <label for="exampleFormControlSelect1">Description</label><br />

                                    <input type="text" name="post_content" value="" id="feed_desc">



                                    <!-- <textarea class="form-control" name ="post_content"  placeholder="Enter here" id="feed_desc" style="height: 100px"> </textarea>-->





                                </div>

                            </div>

                            <div class="col-xl-12 col-lg-12">

                                <div class="avatar-edit">



                                    <input type='file' id="feedimageUpload" name="feed_edit_image" accept=".png, .jpg, .jpeg" />

                                    <label for="feedimageUpload"></label>

                                </div>

                            </div>



                            <div class="col-lg-12 col-12 text-center ">

                                <div class="apply_btn active modal-btn d-flex justify-content-center">

                                    <button class="btn btn_apply d-inline">Update</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>







<!-- Delete Feed Modal -->



<div class="modal fade situation_report" id="track_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">

        <div class="modal-content">

            <div class="modal-body">

                <div class="situation_title d-flex justify-content-between">

                    <div class=" ">

                        <h4 style="color:#132843; font-size:26px; font-family:'poppins';margin-left: 100px;">Are you sure you want to Delete</h4>

                    </div>

                    <div class="">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png"></a>

                    </div>

                </div>

                <div class="situation_contant">

                    <?php echo the_content(); ?>

                </div>

                <div class="row justify-content-center mb-5">

                    <div class="col-lg-3 col-md-4 col-6">

                        <div class="apply_btn ">

                            <a href="#" data-toggle="modal" data-target="#track_delete"><button class="btn btn_apply">Cancle</button></a>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-4 col-6">

                        <div class="apply_btn active">

                            <form method="POST" action="" class="mediadoc_form" enctype="multipart/form-data">

                                <input type="hidden" id="feed_id" name="feed_id" value="">

                                <input type="hidden" name="delete_feed" value="delete_feed" />

                                <button class="btn btn_apply next"></i> Delete</button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>





<?php


get_footer();
?>