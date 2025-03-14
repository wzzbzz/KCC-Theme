<?php
$current_user_id = get_current_user_id();
$user = new \KCC\User($current_user_id);


?>

<ul class="nav nav-pills nav-pills1 mb-3" id="pills1-tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="pills-membersvinay-tab" data-toggle="pill" href="#pills-membersvinay" role="tab" aria-controls="pills-membersvinay" aria-selected="true">
            My Groups
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-joinmembers-tab21" data-toggle="pill" href="#pills-joinmembers21" role="tab" aria-controls="pills-joinmembers" aria-selected="false"> Requests </a>
    </li>

</ul>
<div class="btn_list_blog">
    <a href="<?php echo site_url('group-create') ?>" class="mr-4 add-memberbtn mt-30">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">
        Create New
    </a>
</div>
<div class="tab-content" id="pills1-tabContent">
    <div class="tab-pane fade show active" id="pills-membersvinay" role="tabpanel" aria-labelledby="pills-membersvinay-tab">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h3>Groups Created</h3>
            </div>
        </div>
        <div class="row">
            <?php
            
            $groups = $user->groupsILead();

            if (!empty($groups)) {
                $j = 1;
                foreach ($groups as $group) {
                    $group->render_cell();
                }
            ?>
        </div>
        <div class="row">
            <div class="col-md-12 mb-4">
                <h3>Groups Joined</h3>
            </div>
        </div>


        <div class="row">
            <?php

            //  $myGroupList112  = learndash_get_users_group_ids($current_user_id);

            $groups = $user->myGroups();


            if (!empty($groups)) {
                if (!empty($groups)) {
                    $j = 1;
                    foreach ($groups as $group) {
                        $group->render_cell();
                    }
                }
            } else {
                echo '<h6 class="text-danger mx-5 pb-3">You have joined no groups. </h6><p>visit the <a href="' . site_url('groups') . '">groups page</a> to join or create a group.</p>';
            }

                   
            }
            ?>
        </div>



    </div>


    <div class="tab-pane fade" id="pills-joinmembers21" role="tabpanel" aria-labelledby="pills-joinmembers-tab21">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h3>Received Request</h3>
            </div>
        </div>
        <div class="row">
            <?php
            global $wpdb;

            //   echo $sql = "SELECT * FROM `group_invite` WHERE  status='pending' AND  (`invited_from` = '".$current_user_id."' OR invited_to =  '".$current_user_id."')" ;
            $sql = " SELECT group_id,MAX(id) as id ,MAX(invited_to) as invited_to ,MAX(invited_from) as invited_from ,MAX(created_at) as created_at FROM `group_invite` WHERE status='pending' AND `invited_to` =  '" . $current_user_id . "' GROUP BY group_id";
            $allInvitedUsers = $wpdb->get_results($sql);
            $sendHtml = '';
            $receivedHtml = '';
            $html = '';
            if (!empty($allInvitedUsers)) {
                $j = 1;

                foreach ($allInvitedUsers as $grpRequestVal) {
                    $grpupVal = get_post($grpRequestVal->group_id);
                    $groupImg = wp_get_attachment_url(get_post_thumbnail_id($grpupVal->ID));
                    if (empty($groupImg)) {
                        $groupImg = get_template_directory_uri() . "/assets/images/range_1.png";
                    }

                    $author_id =  $grpupVal->post_author;

                    $groupOwner = "";

                    if ($author_id == $current_user_id) {
                        $groupOwner = "groupOwner";
                    }

                    $author_img = get_avatar_url($author_id);

                    if (empty($author_img)) {
                        $author_img = get_template_directory_uri() . "/avatar.png";
                    }

                    $userInfo  = get_userdata($author_id);
                    $autherName = $userInfo->user_nicename;
                    $userList = learndash_get_groups_user_ids($grpupVal->ID);
                    $group_type = get_post_meta($grpupVal->ID, 'group_type', true);


                    /* if ($author_id==$current_user_id)
          {  */
                    $html = '<div class="col-lg-3">
                    <div class="custom-card">';
                    if ($grpRequestVal->invited_to ==  $current_user_id) {
                        //   $html.= '<a class="acceptInvitation"  href="javascript:void(0)" data-toggle="modal" data-target11="#GroupeModalCenter" data-gid="'.$grpRequestVal->group_id.'" data-invited_to="'.$grpRequestVal->invited_to.'" data-invited_from="'.$grpRequestVal->invited_from.'">';
                    } else {
                        $html .= '<a href="' . get_permalink($grpupVal->ID) . '">';
                    }


                    $html .= '<div class="image">
                                <img src="' . $groupImg . '" alt="" height="" title="" width="">
                                <div class="public-text">
                                    <p>' . $group_type . '</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="group-title">
                                    <h4>' . $grpupVal->post_title . '</h4>
                                </div>
                                <div class="total-member">
                                    <p>' . count($userList) . ' Member</p>
                                </div>
                            </div>
                            <div class="d-flex main-content  align-items-center">
                                <div class="left-text">
                                    Manager4
                                </div>
                                <div class="member-image">
                                    <img src="' . $author_img . '" alt="" height="" title="" width="">
                                </div>
                                <div class="right-text">
                                    ' . $autherName . '
                                </div>
                            </div>
                            <div class="d-flex">
                               <div class="main-group-image">';
                    if (!empty($userList)) {
                        foreach ($userList as $key => $member_id) {
                            $member_img = get_avatar_url($member_id);
                            if (empty($member_img)) {
                                $member_img = get_template_directory_uri() . "/avatar.png";
                            }
                            if ($j > 3 && count($userList) > 3) {
                                $html .= "+" . (count($userList) - 3);
                                break;
                            } else {
                                $html .= '<div class="mem-image">
                                            <img src="' . $member_img . '" alt="" height="" title="" width=""></div>';
                            }
                            $j++;
                        }
                    }

                    $html .= '</div>
                            </div>
                            <div class="card-text">
                               <p>' . $grpupVal->post_content . '</p>
                            </div>
                        </a>
                         <div class="col-md-12 text-center ">
                            <a target="_blank" href="https://knowledge.communication.worldcares.org/group-members?group_id=' . $grpupVal->ID . '"><button class="btn btn-primary mb-3"> Members </button></a>
                        </div>
                        
                        
                    </div>
                </div>';
                    /* }*/

                    if ($grpRequestVal->invited_to ==  $current_user_id) {
                        $receivedHtml .= $html;
                    } else if ($grpRequestVal->invited_from ==  $current_user_id) {
                        $sendHtml .= $html;
                    }
                }

                echo $receivedHtml;
            } else {   ?>
                <?php echo '<h6 class="text-danger mx-5 pb-3">There is no requests received to join the group. </h6>'; ?>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Request Sent</h3>
            </div>
        </div>

        <div class="row">
            <?php
            global $wpdb;

            // $sql = " SELECT * FROM `group_invite` WHERE status='pending' AND  (`invited_from` = '".$current_user_id."' OR invited_to =  '".$current_user_id."')" ;
            $sql = " SELECT group_id,MAX(id) as id ,MAX(invited_to) as invited_to ,MAX(invited_from) as invited_from ,MAX(created_at) as created_at, MAX(status) as status FROM `group_invite` WHERE status='pending' AND `invited_from` =  '" . $current_user_id . "' GROUP BY group_id";

            $allInvitedUsers = $wpdb->get_results($sql);

            /*   echo "<pre>";
            print_r($allInvitedUsers);*/


            $sendHtml = '';
            $receivedHtml = '';
            $html = '';
            if (!empty($allInvitedUsers)) {
                $j = 1;

                foreach ($allInvitedUsers as $grpRequestVal) {

                    $grpupVal = get_post($grpRequestVal->group_id);

                    $groupImg = wp_get_attachment_url(get_post_thumbnail_id($grpupVal->ID));

                    if (empty($groupImg)) {
                        $groupImg = get_template_directory_uri() . "/assets/images/range_1.png";
                    }

                    $author_id = $grpupVal->post_author;

                    $groupOwner = "";

                    if ($author_id == $current_user_id) {
                        $groupOwner = "groupOwner";
                    }

                    $author_img = get_avatar_url($author_id);

                    if (empty($author_img)) {
                        $author_img = get_template_directory_uri() . "/avatar.png";
                    }

                    $userInfo  = get_userdata($author_id);

                    $autherName = $userInfo->user_nicename;

                    $userList = learndash_get_groups_user_ids($grpupVal->ID);

                    $group_type = get_post_meta($grpupVal->ID, 'group_type', true);

                    /*  if($author_id==$current_user_id){ */
                    $html = '<div class="col-lg-3">
                    <div class="custom-card">';
                    if ($grpRequestVal->invited_from ==  $current_user_id) {
                        /*$html.= '<a class="acceptInvitation"  href="javascript:void(0)" data-toggle="modal" data-target11="#GroupeModalCenter" data-gid="'.$grpRequestVal->group_id.'" data-invited_to="'.$grpRequestVal->invited_to.'" data-invited_from="'.$grpRequestVal->invited_from.'">';*/
                    } else {
                        $html .= '<a href="' . get_permalink($grpupVal->ID) . '">';
                    }


                    $html .= '<div class="image">
                                <img src="' . $groupImg . '" alt="" height="" title="" width="">
                                <div class="public-text">
                                    <p>' . $group_type . '</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="group-title">
                                    <h4>' . $grpupVal->post_title . '</h4>
                                </div>
                                <div class="total-member">
                                    <p>' . count($userList) . ' Member</p>
                                </div>
                            </div>
                            <div class="d-flex main-content  align-items-center">
                                <div class="left-text">
                                    Manager1
                                </div>
                                <div class="member-image">
                                    <img src="' . $author_img . '" alt="" height="" title="" width="">
                                </div>
                                <div class="right-text">
                                    ' . $autherName . '
                                </div>
                            </div>
                            <div class="d-flex">
                               <div class="main-group-image">';
                    if (!empty($userList)) {
                        foreach ($userList as $key => $member_id) {
                            $member_img = get_avatar_url($member_id);
                            if (empty($member_img)) {
                                $member_img = get_template_directory_uri() . "/avatar.png";
                            }
                            if ($j > 3 && count($userList) > 3) {
                                $html .= "+" . (count($userList) - 3);
                                break;
                            } else {
                                $html .= '<div class="mem-image">
                                            <img src="' . $member_img . '" alt="" height="" title="" width=""></div>';
                            }
                            $j++;
                        }
                    }

                    $html .= '</div>
                            </div>
                            <div class="card-text">
                               <p>' . $grpupVal->post_content . '</p>
                            </div>
                        </a>
                         <div class="col-md-12 text-center ">
                            <a target="_blank" href="https://knowledge.communication.worldcares.org/invited-group-members?group_id=' . $grpupVal->ID . '"><button class="btn btn-primary mb-3"> Members </button></a>
                        </div>
                    </div>
                        
                </div>';
                }

                if ($grpRequestVal->invited_to ==  $current_user_id) {
                    $receivedHtml .= $html;
                } else if ($grpRequestVal->invited_from ==  $current_user_id) {
                    $sendHtml .= $html;
                }
                /*  }*/

                echo $sendHtml;
            } else {   ?>
                <?php echo '<h6 class="text-danger mx-5 pt-3">There is no sent request to join the group. </h6>'; ?>
            <?php } ?>
        </div>

    </div>
</div>
<!-- modal -->
<!-- The Modal -->
<div class="modal fade group-modal fade bd-example-modal-lg user_information " id="GroupeModalCenter" style=" padding-right: 5px;" aria-modal="true">
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