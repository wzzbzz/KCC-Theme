<?php

?>
<ul class="nav nav-pills nav-pills1 member-tab" id="pills1-tab" role="tablist">
  <!--  <li class="nav-item">
        <a class="nav-link active" id="pills-members1-tab" data-toggle="pill" href="#pills-members1" role="tab" aria-controls="pills-members1" aria-selected="true">All Members</a>
    </li>-->
    <?php if($group->type() == 'Open' ){ ?>
              <!-- Join request button will not visible -->

    <?php } else { ?>
        <?php if($current_user_id == $group->leaderId()){?>
            <li class="nav-item">
                <a class="nav-link active" id="pills-joinmembers-tab" data-toggle="pill" href="#pills-joinmembers" role="tab" aria-controls="pills-joinmembers" aria-selected="false">Join Requests</a>
            </li>
   <?php } ?>
    <?php }  ?>
</ul>
<?php if($current_user_id == $group->leaderId()){?>
<div class="d-flex justify-content-end w-100">
    <div class="donate_btn_right member-btn">
         <a class="add-memberbtn" href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="px-2"> Invite Member</a>
    </div>
</div>
<?php } ?>

<div class="tab-content member-list-page" id="pills1-tabContent">
    <div class="tab-pane fade show active " id="pills-members1" role="tabpanel" aria-labelledby="pills-members1-tab">
        <div class="row ">
            <?php
             
            
         if(!empty($group->getMembers())){
            foreach ($group->getMembers() as $member) {

                if($current_user_id == $member->id()){
                    //continue;
                }


                    $grp_user_img = get_user_meta($member->id(),'profile_photo',true);
                    if(empty($grp_user_img)){
                        $grp_user_img = get_template_directory_uri()."/avatar.png";
                    }
                    $userInfo  = get_userdata($member->id());
                    $checkFollowing = checkUserFollowing($post->ID,$member->id());

                //print_r($userInfo);
            ?>
            <div class="col-md-3 followMember_<?php echo $member->id(); ?>">
                <div class="member_box grid-item text-center member-item-box">
                    <div class="">
                        <div>
                            <?php if($group->currentUserIsLeader()){?>
                            <div class="dropdown ">
                                <a class="btn bg-transparent dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </a>
                                <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item allowMember allowMember_<?php echo $member->id(); ?>" data-mid="<?php echo $member->id(); ?>"href="javascript:void(0)">Allow Permission</a>
                                    <a class="dropdown-item removeMember removeMember_<?php echo $member->id(); ?>" data-mid="<?php echo $member->id(); ?>" href="javascript:void(0)">Remove</a>
                                </div>
                            </div>
                        <?php } ?>
                            <div class="member-images">
                                <a href="<?= $member->profile_link();?>"><?= $member->image();?></a>
                            </div>
                            <div class="member-name">
                                <h3><?php echo $member->name(); ?></h3>
                                <h6><?php echo $member->email();?></h6>
                            </div>
                            <div class="member-connect">
                                <h6><?php echo getFollowers($member->id()).' connects'; ?></h6>
                            </div>

                            <div class="to_donate">
                            <?php if ($current_user_id == $member->id()) { ?>

                                    <button type="button" class="btn btn_donate mt-2 followMemberBtn_<?php echo $member->id(); ?>" data-mid="<?php echo $member->id(); ?>" disabled>You</button>
                                
                            <?php } else{
                                if(!$checkFollowing){?>
                            <button type="button" class="btn btn_donate mt-2 followMember followMemberBtn_<?php echo $member->id(); ?>" data-mid="<?php echo $member->id(); ?>">Follow</button>
                            <?php }else{ ?>
                                <button type="button" class="btn btn_donate mt-2 followMemberBtn_<?php echo $member->id(); ?>" data-mid="<?php echo $member->id(); ?>">Following</button>
                            <?php }
                                }  ?>

                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <?php 
             }
           }
        ?>
         </div>
    </div>
    <?php if($current_user_id==$group->leaderId()){?>
    <div class="tab-pane fade" id="pills-joinmembers" role="tabpanel" aria-labelledby="pills-joinmembers-tab">
      
        <div class="row">
        <?php
        
    
     //echo "<pre>";
     //print_r($sqlQuery);
     
        $allInvitedUsers = $group->invitedUsers();
        if(!empty($allInvitedUsers)){
           foreach($allInvitedUsers as $user)
           {
            
           ?>              

                   <div class="col-md-3 ums_<?php echo $user->id()?>">
                        <div class="member_box grid-item text-center member-item-box">
                            <div class="">
                                <div>
                                   <div class="member-images">
                                        <img src="<?= $user->user_avatar_url();?>"/>   
                                    </div>
                                    <div class="member-name">
                                        <h3><?= $user->display_name();?></h3>
                                    </div>
                                    <div class="member-connect">
                                        <h6><?php echo '0 connects'; ?></h6>
                                    </div>
                                    <div class="to_donate">
                                        <div class="w-100">
                                            <div class='action-button'>
                                                <button class="btn btn_donate mt-2 w-100 acceptUser ums_btn<?= $user->id();?>" data-uid="<?php echo $value->invited_to?>" data-id="<?= $user->id();?>">Accept</button>
                                            </div>
                                            <div class='action-button'>
                                                <button class="btn btn_white w-100 rejectUser" data-uid="<?php echo $value->invited_to?>"  data-id="<?= $user->id();?>">Decline</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
            <?php } }  else { ?>
                <?php echo "No records found." ;?>
            <?php } ?>
         </div>
   </div>
<?php } ?>
</div>
<!-- Invite member modal -->
<div class="modal fade invite-member" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-xl modal-dialog-centered create_tickit" role="document">
        <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Members</h5>
                <button type="button" class="close closeBtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="search-box-modal mb-3">
                            <div class="serch_sec_top">
                                <input type="text" class="form-control" id="search_user" name="search_user" aria-describedby="emailHelp" placeholder="Search member here">
                            </div>
                        </div>        
                    </div> 
                </div>
                <div class="row add-mem-list">
                  <?php
                  
                    $users = $group->uninvitedUsers();

                    foreach ($users as $user) {  
                    ?>  
                      <div class="col-lg-3 col-12 inviteMember_<?= $user->id();?>">
                         <div class="member_box grid-item text-center">
                           <a target = "_blank" href="<?= $user->profile_link();?>"> <img src="<?= $user->user_avatar_url ();?>" height="159" width="159">   </a>
                            <div class="">
                               <h5 class="mt-2"><a target = "_blank" href="<?= $user->profile_link();?>"><?= !empty($user->display_name())?$user->display_name():$user->user_login();?></a></h5>
                               <!-- <h6 class="mt-2" style="font-weight:normal;font-size:11px"><?//php echo '15 connects'; ?></h6> -->
                            </div>
                            <div class="to_donate action-button">
                                  <button type ="button" class="btn btn_donate mt-2 inviteMember inviteMemberBtn_<?= $user->id();?>"  data-mid ="<?= $user->id();?>">Invite</button>
                            </div>
                         </div>
                      </div>
                  <?php } ?>
               </div>
                
            </div>
        </div>
    </div>
</div>
