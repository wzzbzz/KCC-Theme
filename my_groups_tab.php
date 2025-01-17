<?php 
/* Template Name: Tab My Groups */ 
 $current_user_id = get_current_user_id();
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Groups</title>
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
    <link rel="stylesheet" type="text/css" href="https://knowledge.communication.worldcares.org/wp-content/themes/astra/assets/css/style_new.min.css"/>

</head>
<body class="main_all_bg_Sec">
    <style type="text/css">
    .title_group 
    {
    font-size: 25px;
    }
    .btn-primary {
    background: #F9671D 0% 0% no-repeat padding-box;
    box-shadow: 0px 3px 99px #ccd6ff3e;
    border-radius: 9px;
    font-size: 13px;
    color: #FFFFFF;
    height:50px;
    padding:12px 12px;
    border:1px solid#F9671D;
}
.btn-primary:hover {
    background: #F9671D 0% 0% no-repeat padding-box;
    box-shadow: 0px 3px 99px #ccd6ff3e;
    border-radius: 9px;
    font-size: 13px;
    color: #FFFFFF;
    height:50px;
    padding:12px 12px;
    border:1px solid#F9671D;
}
  
    </style>
    <?php include('user-sidebar.php')?>

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
                    <div class="d-lg-flex d-md-flex align-items-center justify-content-between grp_box">
                        <div class="g_group_box_new">
                            <ul class="nav nav-pills mb-3 linked_blog" id="pills-tab" role="tablist">
                                <li class="nav-item group_btn">
                                <a href="<?php echo site_url()?>/wccgroups/" class="nav-link">All</a>
                                </li>
                                <li class="nav-item group_btn">
                                <a href= "<?php echo site_url()?>/tab-my-groups/"  class="nav-link active">My Groups</a>
                                </li>
                                
                                <li class="nav-item group_btn">
                                  <a href= "<?php echo site_url()?>/my-joined-groups//"  class="nav-link"> Groups Joined</a>
                                </li>
                                
                                <li class="nav-item group_btn">
                                  <a href= "<?php echo site_url()?>/tab-my-group-requests/" class="nav-link" id="pills-Request-tab">My Groups Requests</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="back_btn">
                            <a href="<?php echo site_url('wccgroups')?>">Back</a>
                        </div>
                    </div>

                <div class="btn_list_blog my-lg-5 my-3">
                    <a href="<?php echo site_url('group-create')?>" class="mr-4">
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
                                if(isset($_GET['submit']))
                                    {
                                        $Q_group_type  =  $_GET['q_group_type'];
                                                if(!empty($Q_group_type))
                                                {
                                                    $searchArg= array(); 
                                                    $searchArg['post_type'] = 'groups';
                                                    $searchArg['post_status'] = 'publish';
                                                    $searchArg['paged'] = $currentPage;
                                                    $searchArg['author'] = $current_user_id;
                                                    $searchArg['posts_per_page'] = 50;
                                        
                                                    $searchArg['meta_query'] =   array(
                                                                        'relation' => 'AND',
                                                                        array(
                                                                        'key'     => 'group_type',
                                                                        'value'   => $Q_group_type,
                                                                        'compare' => '='
                                                                        )
                                                                    );
                                                    $myGroups = get_posts($searchArg);
                                                }
                                               
                                                else
                                                {
                                                    $Q_name  =  $_GET['q_name'];
                                                    $Q_date  =  $_GET['q_date']; 
                                                  
                                                    $sql = "SELECT * FROM wp_posts WHERE post_title LIKE '%$Q_name%' AND post_date LIKE '%$Q_date%' AND post_type ='groups' AND post_status ='publish' AND post_author =$current_user_id ";
                                                    $myGroups = $wpdb->get_results($sql);   
                                                    $group_type = get_post_meta($grpupVal->ID,'group_type',true);
                                                }
                                    }
                                    else
                                        { 
                                            $searchArg= array(); 
                                            $searchArg['post_type'] = 'groups';
                                            $searchArg['post_status'] = 'publish';
                                            //$searchArg['numberposts'] = 1000;
                                            $searchArg['author'] = $current_user_id;
                                            $searchArg['paged'] = $currentPage;
                                            $searchArg['posts_per_page'] = 50;
                                            $myGroups = get_posts( $searchArg );
                                            
                                            /*echo "<pre>";
                                            print_r($myGroups);*/
                                            
                                        }
                                        
                                        if(!empty($myGroups)){
                                            echo "
                                            <div class='col-lg-12 mb-3'>
                                                <h2 class ='title_group'>Groups Created</h2>
                                            </div>
                                            ";

                                            $j=1;
                                            foreach($myGroups as $grpupVal){

                                                $groupImg = wp_get_attachment_url( get_post_thumbnail_id($grpupVal->ID) );
                                                if(empty($groupImg)){                                                        
                                                    $groupImg= get_template_directory_uri()."/assets/images/range_1.png";
                                                }
                                         
                                            $author_id=$grpupVal->post_author;
                                            $author_img = get_avatar_url( $author_id ); 
                                            if(empty($author_img)){
                                                $author_img = get_template_directory_uri()."/avatar.png";
                                            }                   
                                       
                                            $userList = learndash_get_groups_user_ids($grpupVal->ID);

                                            $group_type = get_post_meta($grpupVal->ID,'group_type',true);
                                                                    
                                        ?>
                                            <div class="col-lg-3">
                                                <div class="custom-card">
                                                     <a href="<?php echo get_permalink($grpupVal->ID)?>">
                                                   <!--  <a href="javascript:void(0);" data-toggle="modal" data-target="#group-modal"> -->
                                                        <div class="image">
                                                            <img src="<?php echo $groupImg ?>" alt="" height="" title="" width="">
                                                            <div class="public-text">
                                                                <p>
                                                                <?php if($group_type =='Close'){ ?>
                                                                    <?php echo 'Closed'; ?>   
                                                                <?php } else {  ?>
                                                                     <?php echo $group_type ;?>
                                                                <?php } ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="group-title">
                                                                <h4><?php echo $grpupVal->post_title?></h4>
                                                                <h6 class="mt-2" style="font-size:12px;"><?php echo date("m-d-Y",strtotime($grpupVal->post_date)); ?></h6>
                                                            </div>
                                                            <div class="total-member">
                                                                <p><?php echo count($userList)?> Member</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex main-content  align-items-center">
                                                            <div class="left-text">
                                                                Manager
                                                            </div>
                                                            <div class="member-image">
                                                                <img src="<?php echo $author_img; ?>" alt="<?//php echo the_author_meta( 'display_name' , $author_id ); ?>" height="" title="" width="">
                                                            </div>
                                                            <div class="right-text">
                                                                <?php echo the_author_meta( 'user_nicename' , $author_id )?>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">

                                                           <div class="main-group-image">
                                                                <?php if(!empty( $userList)){?>
                                                                    <?php
                                                                        $i=1;
                                                                         foreach ($userList as $key => $member_id) {
                                                   
                                                                        $member_img = get_avatar_url( $member_id ); 
                                                                        if(empty($member_img)){
                                                                            $member_img = get_template_directory_uri()."/avatar.png";
                                                                        }
                                                                     if($j>3){
                                                            echo "+".(count($userList)-3);
                                                            break;
                                                            }else{
                                                             echo '<div class="mem-image">
                                                            <img src="'.$member_img.'" alt="" height="" title="" width="">
                                                        </div>';   
                                                            }
                                                         $j++; 
                                                        
                                                          } 
                                                             } ?>
                                                    
                                                            </div>

                                                           
                                                        </div>
                                                        <div class="card-text">
                                                           <p><?php echo  substr($grpupVal->post_content,0,100)?>...</p>
                                                        </div>
                                                         <div class="col-md-12 text-center ">
                                                             <?php if($group_type == 'Private'){?>
                                                            <a target="_blank" href="https://knowledge.communication.worldcares.org/private-group-members?group_id=<?php echo $grpupVal->ID?>"><button class="btn btn-primary mb-3"> Members </button></a>
                                                            <?php } elseif($group_type == 'Closed') { ?>
                                                            
                                                            <a target="_blank" href="https://knowledge.communication.worldcares.org/closed-group-members?group_id=<?php echo $grpupVal->ID?>"><button class="btn btn-primary mb-3"> Members </button></a>
                                                            
                                                            <?php } else { ?>
                                                             
                                                             <a target="_blank" href="https://knowledge.communication.worldcares.org/all-joined-members?group_id=<?php echo $grpupVal->ID?>"><button class="btn btn-primary mb-3"> Members </button></a> 
                                                             
                                                            <?php } ?>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                         <?php }   
                                     }else {
                                       /* echo "You have not joined any groups.";*/
                                     } 
                                    // include('group_joined.php');
                                     ?>
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
                <?php include('common_user_footer.php')?> 
            </div>
    </div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered create_tickit" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLongTitle">Filter By-1 </h5>          
            </div>
            <form method="get" action="">
                <input type ="hidden" name="tab_type" id ="tab_type" value>
                <div class="modal-body main_profile_form">
                    <div class="form-group select_sec date_sec">
                        <label for="exampleFormControlSelect1">Filter by Date</label>                      
                        <div class="md-form md-outline input-with-post-icon datepicker" id="accLabels">
                            <input placeholder="Select date" type="date" name="q_date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group select_sec">
                        <label for="exampleFormControlSelect1">Filter by Group Type</label>
                        <select class="form-control" id="group_type" name="q_group_type">
                            <option value="">Select</option>
                           <?php  
                                $args = array(
                                         'Open' => 'Open',
                                         'Close' => 'Closed',
                                         'Private' => 'Private'
                                        );
                                foreach($args as $value){  ?>
                                <option value="<?php echo $value;?>" > <?php echo $value;?></option>
                                    
                            <?php }?>                                                    
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Filter by Name</label>
                        <input type="text" class="form-control" name="q_name"  placeholder="Type here">
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                            <div class="apply_btn ">
                                <button class="btn btn_apply"  data-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>   
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                            <div class="apply_btn active">
                                <button type="submit" name ="submit" class="btn btn_apply">Apply filter</button>
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
                            //    echo " <option value='".$cityVal['meta_value']."'>".$cityVal['meta_value']."</option>";
                          //  } ?>                                                    
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
<script> 
        function allGroup(){
           $('#tab_type').val('allGroup');
        }
         function myGroup(){
           $('#tab_type').val('MyGroup');
        }
         function myGroupRequests(){
           $('#tab_type').val('MyGroupRequests');
        }
   </script>
