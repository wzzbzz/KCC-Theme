<?php 
global $wpdb;
$current_user_id = get_current_user_id();
$group_id  =  $post->ID;
$sqlQuery = " SELECT invited_to, id,group_id,invited_from,status,request_type FROM `group_invite` WHERE request_type = 'invite_request' AND status = 'pending' AND invited_to= '".$current_user_id."' ";

$allInvitedUsers = $wpdb->get_results( $sqlQuery );

///echo "<pre>";print_r($allInvitedUsers);echo "</pre>";

$contactArg= array(); 
$contactArg['post_type'] = 'groups';
$contactArg['post_status'] = 'publish';
$contactArg['numberposts'] = 10000000;
$contactArg['author'] = $current_user_id;
$contactArg['paged'] = $currentPage;
$contactList = array();
$groupContacts = get_posts($contactArg);
if(count($groupContacts)>0){
	foreach($groupContacts as $contactVal){
		$userList = learndash_get_groups_user_ids($contactVal->ID);
		foreach ($userList as $key => $member_id) {
       $contactList[] = $member_id;
    }

	}
}

$contactList = array_unique($contactList);
 ?>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
   <li class="nav-item">
      <a class="nav-link active" id="pills-home-contact-tab" data-toggle="pill" href="#pills-home-contact" role="tab" aria-controls="pills-home-contact" aria-selected="true">All Connections</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="pills-profile-contact-tab" data-toggle="pill" href="#pills-profile-contact" role="tab" aria-controls="pills-profile-contact" aria-selected="false">Requests <span><?php echo (count($allInvitedUsers))?count($allInvitedUsers):0;?></span></a>
   </li>
</ul>
<div class="tab-content all-connection" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home-contact" role="tabpanel" aria-labelledby="pills-home-contact-tab">
        <div class="row mt-5">
            <?php if (count($contactList) > 0) { 
                foreach ($contactList as $memberId) {
                    $userInfo = get_userdata($memberId);
                    $user_img = get_avatar_url($memberId, array("size" => 50));
                    if (empty($user_img)) {
                        $user_img = get_template_directory_uri() . "/avatar.png";
                    }
            ?>
            <div class="col-lg-2">
                <div class="main-card">
                    <?php 
                    $member_id=  $userInfo->ID;
                    $memberdetails = "https://knowledge.communication.worldcares.org/member-profile/?id=$member_id";?>

                    <a href="<?php echo $memberdetails;?>" title="<?php echo esc_attr($userInfo->display_name); ?>">
                        <div class="image">
                            <img src="<?php echo esc_url($user_img); ?>" alt="<?php echo esc_attr($userInfo->display_name); ?>" height="" width="">
                        </div>
                        <div class="card-title">
                            <h6><?php echo wp_trim_words($userInfo->display_name, 10); ?></h6>
                            <!-- <span><?php echo getFollowers($memberId) . ' connects'; ?></span> -->
                        </div>
                    </a>
                    <div class="card-btn">
                        <div class="w-100 d-flex">
                            <div class="follow btn-1">
                                <?php if (checkMemberFollowing($memberId)) { ?>
                                    <a href="javascript:void(0);" class="btn btn-primary unFollwMember ums_btn<?php echo $memberId; ?>" data-uid="<?php echo $memberId; ?>" data-id="<?php echo $memberId; ?>" title="Un-follow">Un-follow</a>
                                <?php } else { ?>
                                    <a href="javascript:void(0);" class="btn btn-primary follwMember ums_btn<?php echo $memberId; ?>" data-uid="<?php echo $memberId; ?>" data-id="<?php echo $memberId; ?>" title="Follow">Follow</a>
                                <?php } ?>
                            </div>
                            <div class="follow ml-2 btn-2">
                                <a href="javascript:void(0);" class="btn btn-primary" title="Message">
                                    <i class="far fa-comments" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
            } ?>
        </div>
    </div>
    
    <div class="tab-pane fade" id="pills-profile-contact" role="tabpanel" aria-labelledby="pills-profile-contact-tab">
        <div class="row user-dashboard-tab mt-5 my-course-ap-profile">
            <?php if (!empty($allInvitedUsers)) {
                foreach ($allInvitedUsers as $value) {
                    $requestbyUserId = ($value->invited_to == $current_user_id) ? $value->invited_from : $value->invited_to;
                    $userInfo = get_userdata($requestbyUserId);
                    $grp_user_img = get_user_meta($requestbyUserId, 'profile_photo', true);
                    if (empty($grp_user_img)) {
                        $grp_user_img = get_template_directory_uri() . "/avatar.png";
                    }
            ?>
            <div class="col-lg-2">
                <div class="main-card">
                    <a href="javascript:void(0);" title="<?php echo esc_attr($userInfo->display_name); ?>">
                        <div class="image">
                            <img src="<?php echo esc_url($grp_user_img); ?>" alt="<?php echo esc_attr($userInfo->display_name); ?>" height="" width="">
                        </div>
                        <div class="card-title">
                            <h6><?php echo $userInfo->display_name; ?></h6>
                            <span><?php echo '0 connects'; ?></span>
                        </div>
                    </a>
                    <div class="card-btn accept-btn">
                        <div class="w-100">
                            <div class="follow btn-1">
                                <a href="javascript:void(0);" class="btn btn-primary acceptUser ums_btn<?php echo $value->id; ?>" data-uid="<?php echo $value->invited_to; ?>" data-id="<?php echo $value->id; ?>" data-groupid="<?php echo $value->group_id; ?>" title="Accept">Accept</a>
                            </div>
                            <div class="follow btn-2">
                                <a href="javascript:void(0);" class="rejectUser" data-uid="<?php echo $value->invited_to; ?>" data-id="<?php echo $value->id; ?>" data-groupid="<?php echo $value->group_id; ?>" title="Decline">Decline</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
            } ?>
        </div>
    </div>
</div>
