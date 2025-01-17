<?php
$joinGrp = learndash_get_users_group_ids( $current_user_id);
if(!empty($joinGrp)){
echo "
<div class='col-lg-12 mb-3'>
<h2 class='title_group'>Groups Joined</h2>
</div>";
 
$joinedArg= array(); 
$joinedArg['post_type'] = 'groups';
$joinedArg['post_status'] = 'publish';
$joinedArg['paged'] = $currentPage;
$joinedArg['posts_per_page'] = 50;
$joinedArg['post__in'] = $joinGrp;

    if(!empty($_GET['groupName'])){                                          
         $joinedArg['s'] = $_GET['groupName'];
    }
    if(!empty($_GET['group_type'])){
        $joinedArg['meta_query'] =   array(
                                            array(
                                            'key' => 'group_type',
                                            'value'   => $_GET['group_type']
                                            
                                            )
                                            );
    }

    if(!empty($_GET['groupDate'])){
        $joinedArg['date_query'] = array(
                                        'after' => date('Y-m-d',strtotime($_GET['groupDate']))
                                        //'before' => date('Y-m-d',strtotime($_GET['groupDate'])),
                                        //'compare' => '>=',
                                    );   
    }

    $myJoinedGroups = get_posts( $joinedArg );
    if(!empty($myJoinedGroups)){
        $j=1;
        foreach($myJoinedGroups as $joinedGrpupVal){
            $author_id=$joinedGrpupVal->post_author;
            if($current_user_id!=$author_id){
                $groupImg = wp_get_attachment_url( get_post_thumbnail_id($joinedGrpupVal->ID) );
                if(empty($groupImg)){                                                        
                    $groupImg= get_template_directory_uri()."/assets/images/range_1.png";
                }

                $author_img = get_avatar_url( $author_id ); 
                if(empty($author_img)){
                $author_img = get_template_directory_uri()."/avatar.png";
                }                   

                $userList = learndash_get_groups_user_ids($joinedGrpupVal->ID);

                $group_type = get_post_meta($joinedGrpupVal->ID,'group_type',true);

    ?>
        <div class="col-lg-3">
            <div class="custom-card">
                 <a href="<?php echo get_permalink($joinedGrpupVal->ID)?>">
             
                    <div class="image">
                        <img src="<?php echo $groupImg ?>" alt="" height="" title="" width="">
                        <div class="public-text">
                            <p><?php echo $group_type?></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="group-title">
                            <h4><?php echo $joinedGrpupVal->post_title?></h4>
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
                       <p><?php echo $joinedGrpupVal->post_content?></p>
                    </div>
                </a>
            </div>
        </div>

     <?php   } 
    }
 }else{
    echo "No any group exists";
 } 
}?>