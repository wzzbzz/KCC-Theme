<?php 
/* Template Name: Request Sent Group Members */ 
 global $wpdb;  

 $current_user_id = get_current_user_id();
 $groupId =  $_GET['group_id']; 
  $group_type = get_post_meta($groupId,'group_type',true);
 //$allMemnbersID = learndash_get_groups_user_ids($groupId);
 //$userList = learndash_get_groups_user_ids($grpupVal->ID);
 
 $AllMembers = learndash_get_groups_user_ids(27651);
 //print_r($AllMembers);
 
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Private Group Members</title>
    <!-- Favicon -->    
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"> 

    <!-- css links -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">
</head>
<body class="main_all_bg_Sec">
    <style type="text/css">
    .title_group 
    {
    font-size: 25px;
    }
    .close-group img{
        width: 150px;
        height: 150px;
        border-radius: 100%;
    }
    
    </style>
    <?php include('usermenucommon.php')?>

    <div class="col-xl-12 ">
        <div class="row justify-content-end mt-3">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
                <?php include('user_topbar.php')?>                
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
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                        <?php if($group_type =='Closed'){?>
                                           <?php echo 'All Requests'?>
                                        <?php } else {?>
                                           <?php echo 'All Invited'?>
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
                        <a href="<?php echo site_url('groups')?>">Back</a>
                    </div>
                    </div>
                <div class="groups_tabs">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">                        
                                <div class="row mt-4">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="title_group"><?php echo get_the_title($groupId)?> (<?php echo get_post_meta($groupId,'group_type',true)?> Group)</h3>
                                    </div>
                                    
                                <?php
                                $result = $wpdb->get_results("SELECT * FROM group_invite WHERE `group_id` = $groupId AND `invited_from` = $current_user_id  AND `status` = 'pending'");
                                if(!empty($result))
                                 foreach($result as $value) {
                                 $userInfo  =  get_userdata($value->invited_to);
                                 ?>
                                    <div class="col-lg-3">
                                        <div class="custom-card d-flex align-items-center justify-content-center">
                                            <div class="close-group">
                                                <div class="text-center">
                                                    <img src ="<?php echo get_avatar_url($value->invited_to); ?>">
                                                </div>
                                                <div class="text-center mt-3">
                                                    <h5><?php echo $userInfo->display_name;?></h5>
                                                    <p><?php echo $userInfo->user_email?></p>
                                                    
                                                    <!--<?//php echo get_the_time('m-d-Y', $rid) ?>-->
                                                    <p><small>Requested on <?php echo date("m-d-Y",strtotime($value->created_at)); ?></small></p>
                                                </div>
                                                
                                                <!--<div class="col-md-12 text-center requests-btn mt-3">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="">
                                                            <form method="POST">
                                                                 <input type ="hidden" name ="group_id" value =<//?php echo $groupId ?>>
                                                                 <input type ="hidden" name ="invited_from" value ="<//?php echo $value->invited_from ?>">
                                                                  <input type ="hidden" name ="invited_to" value ="<//?php echo $value->invited_to ?>">
                                                                 <input type="hidden" name="reportsforms_nonce" value="<//?php echo wp_create_nonce('reportsforms_nonce'); ?>" />
                                                                  <input type="hidden" name ="RequestSentcancelMemberRequest" value="RequestSentcancelMemberRequest">
                                                                <button class="btn btn-outline-primary"> Cancel </button>
                                                            </form>           
                                                        </div>
                                                        
                                                        <div class="">
                                                            <form method="POST" action ="">
                                                                <input type ="hidden" name ="group_id" value =<//?php echo $groupId ?>>
                                                                <input type ="hidden" name ="invited_from" value ="<//?php echo $value->invited_from ?>">
                                                                 <input type ="hidden" name ="invited_to" value ="<//?php echo $value->invited_to ?>">
                                                                <input type="hidden" name="reportsforms_nonce" value="<//?php echo wp_create_nonce('reportsforms_nonce'); ?>" />
                                                                   <input type="hidden" name ="RequestSentacceptMemberRequest" value="RequestSentacceptMemberRequest">
                                                                <button class="btn btn-primary mx-2">Accept</button>
                                                            </form>       
                                                        </div>
                                                    </div>    
                                                    
                                                </div>-->
                                               
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                
                                 <span class="text-danger mx-3"> <?php echo 'There is no members.'?> </span>
                                
                                <?php } ?>
                                    
                                   
                                   
                                </div>
                            </div>
                            
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-home-tab">                        
                                <div class="row mt-4">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="title_group"><?php echo get_the_title($groupId)?> (<?php echo get_post_meta($groupId,'group_type',true)?> Group)</h3>
                                    </div>
                                    
                                <?php
                                $result = $wpdb->get_results("SELECT * FROM group_invite WHERE `group_id` = $groupId AND `invited_from` = $current_user_id  AND `status` = 'accepted'");
                               // echo "<pre>";
                                
                               // print_r($result);
                                
                                
                                if(!empty($result))
                                 foreach($result as $value) {
                                     
                                 $userInfo  =  get_userdata($value->invited_to);
                                // print_r($userInfo);
                                 
                                 ?>
                                    <div class="col-lg-3">
                                        <div class="custom-card d-flex align-items-center justify-content-center">
                                            <div class="close-group">
                                                <div class="text-center">
                                                    <!--<img src="https://picsum.photos/150/150?grayscale">-->
                                                    <img src ="<?php echo get_avatar_url($value->invited_to); ?>">
                                                </div>
                                                <div class="text-center mt-3">
                                                    <h5><?php echo $userInfo->display_name;?></h5>
                                                    <p><?php echo $userInfo->user_email?></p>
                                                    
                                                    <!--<?//php echo get_the_time('m-d-Y', $rid) ?>-->  
                                                   
                                                    <p><small>Accepted on <?php echo date('m-d-Y',strtotime($value->created_at)) ?></small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                
                                 <span class="text-danger mx-3"> <?php echo 'There is no members.'?> </span>
                                
                                <?php } ?>
                                    
                                   
                                   
                                </div>
                            </div>
                            
                        <div class="tab-pane fade" id="pills-Request" role="tabpanel" aria-labelledby="pills-home-tab">                        
                                <div class="row mt-4">
                                    <div class="col-md-12 mb-4">
                                        <h3 class="title_group"><?php echo get_the_title($groupId)?> (<?php echo get_post_meta($groupId,'group_type',true)?> Group)</h3>
                                    </div>
                                    
                                <?php
                                $result = $wpdb->get_results("SELECT * FROM group_invite WHERE `group_id` = $groupId  AND  `invited_from` = $current_user_id AND `status` = 'rejected'");
                                if(!empty($result))
                                 foreach($result as $value) {
                                 $userInfo  =  get_userdata($value->invited_to);
                                // print_r($userInfo);
                                 
                                 ?>
                                    <div class="col-lg-3">
                                        <div class="custom-card d-flex align-items-center justify-content-center">
                                            <div class="close-group">
                                                <div class="text-center">
                                                    <!--<img src="https://picsum.photos/150/150?grayscale">-->
                                                    <img src ="<?php echo get_avatar_url($value->invited_to); ?>">
                                                </div>
                                                <div class="text-center mt-3">
                                                    <h5><?php echo $userInfo->display_name;?></h5>
                                                    <p><?php echo $userInfo->user_email?></p>  
                                                    
                                                    <!--<?//php echo get_the_time('m-d-Y', $rid) ?>-->
                                                    <p><small>Rejected on <?php echo date('m-d-Y',strtotime($value->created_at)) ?></small></p>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                
                                 <span class="text-danger mx-3"> <?php echo 'There is no members.'?></span>
                                
                                <?php } ?>
                                    
                                   
                                   
                                </div>
                            </div>
                          
                    </div>
               </div>
              
            </div>
              
            </div> 
            <div class="col-md-12 mt-4 pt-2 pr-0 d-flex">
            <?php include('common_user_footer.php')?>
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
                                foreach($args as $value){  ?>
                                <option value="<?php echo $value;?>" > <?php echo $value;?></option>
                                    
                            <?php }?>                                                    
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Filter by Name</label>
                        <input type="text" class="form-control" name="groupName" id="groupName" placeholder="Type here">
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                            <div class="apply_btn ">
                                <button class="btn btn_apply"  data-dismiss="modal" aria-label="Close">Cancel</button>
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

<?php

$nonce = wp_create_nonce("send_group__nonce");
$ajaxUrl = admin_url('admin-ajax.php?action=send_group_reques&nonce='.$nonce);
?>


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
                    <button type="button" class="btn btn-secondary" id="requestaccess" data-nonce="<?php echo $nonce;?>" data-gid="">Request Access</button>
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
                    <button type="button" class="btn btn-secondary" id="joinGroupeAccess" data-nonce="<?php echo $nonce;?>" data-gid="">Join Group</button>
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
                            <?php foreach($city_list  as $cityVal){
                                echo " <option value='".$cityVal['meta_value']."'>".$cityVal['meta_value']."</option>";
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
                        <button type="button" class="btn btn-secondary" id="requestAccept" data-nonce="<?php echo @$nonce;?>" data-gid=""  data-invited_to="" data-invited_from="">Accept Request</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal footer -->   
      </div>
   </div>
</div>

<script>     
     var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
     
    $(document).ready(function() {
        
        $(".GroupeModalCenter").click(function() {
            var mthtml = $(this).html();
            var gid = $(this).attr('data-gid');
            $('#requestaccess').attr('data-gid',gid);
            $('.umsjee').html(mthtml);
            $('#GroupeModalCenter').modal('show');
        });        

        $("#requestaccess").click( function(e) {
          e.preventDefault(); 
          var group_id = $(this).data("gid");
          var nonce = $(this).attr("data-nonce");
          $.ajax({
             type : "post",
             dataType : "json",
             url :ajaxurl,
             data : {"action": "send_group_request", "group_id" : group_id, "nonce": nonce},
             success: function(response) {  
                  console.log(response);          
                  alert(response.msg);
                 $('#GroupeModalCenter').modal('hide');
                
             }
          });
       });
        ////
        $(".joinGroupeModal").click(function() {
            var mthtml = $(this).html();
            var gid = $(this).attr('data-gid');
            $('#joinGroupeAccess').attr('data-gid',gid);
            $('.umsjee').html(mthtml);
            $('#joinGroupeModal').modal('show');
        });
        
         $(".ownerModal").click(function() {
            var mthtml = $(this).html();
            var gid = $(this).attr('data-gid');
            $('#ownerModal').attr('data-gid',gid);
            $('.umsjee').html(mthtml);
            $('#ownerModal').modal('show');
        });

          $("#joinGroupeAccess").click( function(e) {
          e.preventDefault(); 
          var group_id = $(this).data("gid");
          var nonce = $(this).attr("data-nonce");
          $.ajax({
             type : "post",
             dataType : "json",
             url :ajaxurl,
             data : {"action": "join_open_group", "group_id" : group_id, "nonce": nonce},
             success: function(response) {  
                 $('#joinGroupeModal').modal('hide');      
                 window.location =   response.group_url;                
             }
          });
       });

});
</script>

</body>
</html>