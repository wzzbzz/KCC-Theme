<style type="text/css">
      .my_resources_table{ width: 100%; }
      .modal{
            overflow: scroll;
      }
      .hides{
        display: none;
      }
</style>
<div class=" col-xl-12 d-flex align-items-center justify-content-between flex-wrap px-0">
    <div class="linked_blog linked_blog_nobg mb-4 vinay">

        <ul class="nav nav-pills justify-content-center" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#all-media-docuent"
                    role="tab">
                    <i class="now-ui-icons objects_umbrella-13"></i> All
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#uploaded-by-me" role="tab">
                    <i class="now-ui-icons shopping_cart-simple"></i> Uploaded by Me
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#saved" role="tab">
                    <i class="now-ui-icons shopping_shop"></i> Saved
                </a>
            </li>
        </ul>

    </div>
    <div class="btn_list_blog btn_short_list my-lg-4 my-2 mr-lg-4 mr-2">
        <button class="btn_short_list" type="button" data-toggle="modal"
            data-target="#modalupload">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png"
                class="img-fluid mr-2">Upload New File
        </button>
    </div>


    <div class="tab-content w-100">
        <div class="tab-pane active" id="all-media-docuent" role="tabpanel">
            <div class="global-table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Media or Document</th>
                                <th>Tags</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Group</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                            <?php 
                             $current_user_id = get_current_user_id();
                             $allResourceImg = get_posts( array(
                                                             'post_type'      => 'resourcemedia',
                                                             'post_status'    => 'publish',
                                                              'numberposts' => 1000
                                                        ) );   




                            if(!empty($allResourceImg)){
                            foreach($allResourceImg as $resourceImgVal){

                            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($resourceImgVal->ID) );
                            if(empty($feat_image)){                                                        
                                $feat_image= get_template_directory_uri()."/assets/images/range_1.png";
                            }                                            
                         
                            $member_id = $resourceImgVal->post_author;
                            $gid = get_post_meta($resourceImgVal->ID, 'resourcemedia_group_id', true );
                            $args = array(
                                                'post_type' => 'groups',
                                                'post__in' => array($gid)
                                            );

                            $groupData = get_posts($args);
                            $groupData =$groupData[0];
                            $otherDetails =  get_post_meta($resourceImgVal->ID,'rf_publish',true);
                       

                            ?>
                            <tr class="bg-color">
                                <td style="width:10%"><?php echo @$resourceImgVal->post_title;?></td>
                                <td style="width:16%">
                                    <div class="images">
                                        <img src="<?php echo $feat_image; ?>" title="" width="" height="" alt="">
                                    </div>
                                </td>
                                <td style="width:21%">
                                    <div class="tag">
                                        <?php
                                        $tags = get_post_meta($resourceImgVal->ID, 'resource_ld_group_tag');
                                        $tagHtml = '';
                                        $tagHtml1 = '';
                                        if(!empty($tags[0])){
                                            foreach($tags[0] as $tag){
                                                $tagHtml1 .='<div class="badge"><span>'.$tag.'</span></div>';
                                                $tagHtml .=$tag.',';
                                            }
                                        }
                                        echo $tagHtml1;
                                        ?>
                                    </div>
                                    
                                </td>
                                <td style="width:15%">
                                    <span><?php echo date('Y-m-d',strtotime($resourceImgVal->post_date))?></span>
                                </td>
                                <td>
                                    <p> <?php  echo mb_strimwidth($resourceImgVal->post_content, 0, 60, '...');?></p>
                                </td>
                                <td>
                                    
                                    <?php if(!empty(otherDetails)){?>
                                        
                                          <?php echo get_the_title($otherDetails); ?>
                                      <?php } else { ?> 
                                        
                                         <?php echo 'All RRN Users'; ?>
                                        
                                   <?php } ?>
                                
                                <td>
                                    <div class="d-flex w-100">
                                        <div>
                                           <!--  <a href="javascript:void(0);" class="d-block saveMedia" data-id="<?//php echo $resourceImgVal->ID?>" data-gid="<?//php echo $gid?>">
                                                <div class="orange-box">
                                                   <i class="fa fa-bookmark" aria-hidden="true"></i>
                                                </div>
                                            </a>  -->      
                                            <button class="btn btn-primary save saveMedia" data-id="<?php echo $resourceImgVal->ID?>" data-img=""><i class="fa fa-bookmark" aria-hidden="true"></i></button> 
                                        </div>
                                        <div class="mx-3">
                                            <a href="javascript:void(0);" class="d-block downloadF" data-img="<?php echo $feat_image ?>">
                                                <div class="orange-box">
                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                </div>
                                            </a>        
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="d-block viewDetails" type="button"
                                            data-toggle="modal"
                                            data-target="#modaldocumentview" 
                                            data-title="<?php echo $resourceImgVal->post_title; ?>" 
                                            data-img="<?php echo $feat_image ?>" 
                                            data-tag="<?php echo rtrim($tagHtml, ','); ?>"  
                                            data-desc="<?php echo $resourceImgVal->post_content; ?>" 
                                            data-group="<?php echo @$groupData->post_title; ?>" 
                                            data-date="<?php echo date('Y-m-d',strtotime($resourceImgVal->post_date)); ?>" >
                                                <div class="orange-box view-box">
                                                    <p>View</p>
                                                </div>
                                            </a>        
                                        </div>
                                    </div>
                                </td>
                            </tr>


                             <?php }
                            } else { ?>
                            <tr class="bg-color my-3">
                               <td  colspan="8" class="text-center">No Record found</td> 
                            </tr>
                            <?php } ?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="uploaded-by-me" role="tabpanel">
            <div class="global-table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Media or Document</th>
                                <th>Tags</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Group</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                 $current_user_id = get_current_user_id();
                                 $allResourceImg = get_posts( array(
                                                                 'post_type'      => 'resourcemedia',
                                                                 'post_status'    => 'publish',
                                                                  'numberposts' => 1000,
                                                                   'author'        =>  $current_user_id,
                                                            ) );                      

                            if(!empty($allResourceImg)){
                            foreach($allResourceImg as $resourceImgVal){

                            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($resourceImgVal->ID) );
                            if(empty($feat_image)){                                                        
                                $feat_image= get_template_directory_uri()."/assets/images/range_1.png";
                            }                                            
                         
                            $member_id=$resourceImgVal->post_author;
                            $gid = get_post_meta($resourceImgVal->ID, 'resourcemedia_group_id', true );
                            $args = array(
                                                'post_type' => 'groups',
                                                'post__in' => array($gid)
                                            );

                            $groupData = get_posts($args);
                            $groupData =$groupData[0];
                        
                            ?>
                            <tr class="bg-color">
                                <td style="width:10%"><?php echo $resourceImgVal->post_title?></td>
                                <td style="width:16%">
                                    <div class="images">
                                        <img src="<?php echo $feat_image; ?>" title="" width="" height="" alt="">
                                    </div>
                                </td>
                                <td style="width:15%">
                                    <div class="tag">
                                        <?php

                                        $tags = get_post_meta($resourceImgVal->ID, 'resource_ld_group_tag');
                                        $tagHtml = '';
                                        $tagHtml1 = '';
                                        if(!empty($tags[0])){
                                            foreach($tags[0] as $tag){
                                                $tagHtml1 .='<div class="badge"><span>'.$tag.'</span></div>';
                                                $tagHtml .=$tag.',';
                                            }
                                        }
                                        echo $tagHtml1;
                                        ?>
                                    </div>
                                    
                                </td>
                                <td>
                                    <span><?php echo date('Y-m-d',strtotime($resourceImgVal->post_date))?></span>
                                </td>
                                <td>
                                    <p> <?php  echo mb_strimwidth($resourceImgVal->post_content, 0, 60, '...');?></p>
                                </td>
                                <td><?php echo @$groupData->post_title;?></td>
                                <td>
                                    <div class="d-flex w-100">
                                        <div>
                                          <!--   <a href="javascript:void(0);" class="d-block saveMedia" data-id="<?//php echo $resourceImgVal->ID?>" data-gid="<?//php echo $gid?>">
                                                <div class="orange-box">
                                                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                                                </div>
                                            </a>  -->   
                                            <button class="btn btn-primary save saveMedia" data-id="<?php echo $resourceImgVal->ID?>" data-img=""><i class="fa fa-bookmark" aria-hidden="true"></i></button>    
                                        </div>
                                        <div class="mx-3">
                                            <a href="javascript:void(0);" class="d-block downloadF" data-img="<?php echo $feat_image ?>">
                                                <div class="orange-box">
                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                </div>
                                            </a>        
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="d-block viewDetails" data-toggle="modal"
                                            data-target="#modaldocumentview" data-id="<?php echo $resourceImgVal->ID?>"

                                            data-title="<?php echo $resourceImgVal->post_title; ?>" 
                                            data-img="<?php echo $feat_image ?>" 
                                            data-tag="<?php echo rtrim($tagHtml, ','); ?>"  
                                            data-desc="<?php  echo mb_strimwidth($resourceImgVal->post_content, 0, 60, '...');?>" 
                                            data-group="<?php echo @$groupData->post_title; ?>" 
                                            data-date="<?php echo date('Y-m-d',strtotime($resourceImgVal->post_date)); ?>" >
                                                <div class="orange-box view-box">
                                                    <p>View</p>
                                                </div>
                                            </a>        
                                        </div>
                                        <div class="custom-dropdown d-flex align-items-center ml-3">
                                            <div class="dropdown">
                                                <a  href="javascript:void(0);" class="" type="button" id="dropdownMenuButtons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtons">
                                                    <a class="dropdown-item editResource" href="javascript:void(0)" data-toggle="modal"
                                                            data-target="#editModal" data-id="<?php echo $resourceImgVal->ID?>"
                                                             data-title="<?php echo $resourceImgVal->post_title; ?>" 
                                                            data-img="<?php echo $feat_image ?>" 
                                                            data-tag="<?php echo rtrim($tagHtml, ','); ?>"  
                                                            data-desc="<?php echo $resourceImgVal->post_content; ?>" 
                                                            data-group="<?php echo @$groupData->post_title; ?>" 
                                                            data-date="<?php echo date('Y-m-d',strtotime($resourceImgVal->post_date)); ?>">Edit Document</a>
                                                    <a class="dropdown-item editResource deleteMedia" href="javascript:void(0)"
                                                            data-toggle="modal" 
                                                            data-id="<?php echo $resourceImgVal->ID?>"
                                                             data-title="<?php echo $resourceImgVal->post_title; ?>" 
                                                            data-img="<?php echo $feat_image ?>" 
                                                            data-tag="<?php echo rtrim($tagHtml, ','); ?>"  
                                                            data-desc="<?php echo $resourceImgVal->post_content; ?>" 
                                                            data-group="<?php echo @$groupData->post_title; ?>" 
                                                            data-date="<?php echo date('Y-m-d',strtotime($resourceImgVal->post_date)); ?>">Delete Document</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <?php  }
                            } else{ ?>
                                <tr><td colspan="15">No Record found</td></tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="saved" role="tabpanel">
            <div class="global-table">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Media or Document</th>
                                    <th>Tags</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Group</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                global $wpdb;
                                $current_user_id = get_current_user_id();
                                $sql = "SELECT resource_id FROM wp_saved_resources WHERE user_id = '".$current_user_id."'";
                                $saveResourceMedia = $wpdb->get_results( $sql,ARRAY_A); 


                                if(!empty($saveResourceMedia)){
                                foreach($saveResourceMedia as $resource){

                                    $rid = $resource['resource_id'];

                      
                                    $resourceImgVal = get_post( $rid ); 
                                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($resourceImgVal->ID) );
                                    if(empty($feat_image)){                                                        
                                        $feat_image= get_template_directory_uri()."/assets/images/range_1.png";
                                    }                                            

                                    $member_id=$resourceImgVal->post_author;
                                    $gid = get_post_meta($resourceImgVal->ID, 'resourcemedia_group_id', true );

                                    $args = array(
                                    'post_type' => 'groups',
                                    'post__in' => array($gid)
                                    );

                                    $groupData = get_posts($args);
                                    $groupData =$groupData[0];

                                ?>
                                <tr class="bg-color">
                                    <td style="width:10%"><?php echo $resourceImgVal->post_title?></td>
                                    <td style="width:16%">
                                        <div class="images">
                                            <img src="<?php echo $feat_image; ?>" title="" width="" height="" alt="">
                                        </div>
                                    </td>
                                    <td style="width:15%">
                                        <div class="tag">

                                            <?php

                                            $tags = get_post_meta($resourceImgVal->ID, 'resource_ld_group_tag');
                                            $tagHtml = '';
                                            $tagHtml1 = '';
                                            if(!empty($tags[0])){
                                                foreach($tags[0] as $tag){
                                                    $tagHtml1 .='<div class="badge"><span>'.$tag.'</span></div>';
                                                    $tagHtml .=$tag.',';
                                                }
                                            }
                                            echo $tagHtml1;
                                            ?>
                                        </div>
                                        
                                    </td>
                                    <td>
                                        <span><?php echo date('Y-m-d',strtotime($resourceImgVal->post_date))?></span>
                                    </td>
                                    <td>
                                        <p> <?php  echo mb_strimwidth($resourceImgVal->post_content, 0, 60, '...');?></p>
                                    </td>
                                    <td><?php echo @$groupData->post_title;?></td>
                                    <td>
                                        <div class="d-flex w-100">
                                            
                                            <div class="mx-3">
                                                <a href="javascript:void(0);" class="d-block downloadF" data-img="<?php echo $feat_image ?>">
                                                    <div class="orange-box">
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                    </div>
                                                </a>        
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="d-block viewDetails" data-toggle="modal"
                                                data-target="#modaldocumentview" data-title="<?php echo $resourceImgVal->post_title; ?>" 
                                                data-img="<?php echo $feat_image ?>" 
                                                data-tag="<?php echo rtrim($tagHtml, ','); ?>"  
                                                data-desc="<?php  echo mb_strimwidth($resourceImgVal->post_content, 0, 60, '...');?>" 
                                                data-group="<?php echo @$groupData->post_title; ?>" 
                                                data-date="<?php echo date('Y-m-d',strtotime($resourceImgVal->post_date)); ?>" >
                                                    <div class="orange-box view-box">
                                                        <p>View</p>
                                                    </div>
                                                </a>        
                                            </div>
                                            
                                        </div>
                                    </td>
                                </tr>
                                <?php  }
                                } else { ?>
                                <tr>
                                    <td colspan="15">No Record found</td></tr>
                                <?php  }
                                ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>

    <?php 
    $tagList = get_terms(array('taxonomy' => 'ld_group_tag','hide_empty' => false));

    

     $searchArg= array(); 
                        $searchArg['post_type'] = 'groups';
                        $searchArg['post_status'] = 'publish';
                        $searchArg['numberposts'] = 1000;
     $allGroups = get_posts($searchArg);
    ?>

    <!-- Create new Modal  -->
        <div class="modal fade document-upload" id="modalupload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center w-100">Upload Media or Document-99</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">  
                                <form method="POST" class="form-upload  resources-modal-page float" enctype="multipart/form-data">
                                    <input type="hidden" name="ugroup_id" value="<?php echo $post->ID?>" />
                                    <input type="hidden" name="ums_create_media" value="ums_create_media" />
                                    <input type="hidden" name="resource_image_nonce" value="<?php echo wp_create_nonce('resource_image_nonce'); ?>" />
                                    <div class="row">
                                        <div class="col-lg-12 col-12">
                                            <div class="mb-3">
                                                <div class="drag-drop-images text-center image-upload-box"> 
                                                    <div class="avatar-edit">
                                                        <input type="file" id="fileUpload" name="resource_media_img" accept=".png, .jpg, .jpeg" required>
                                                        <label for="fileUpload" class="d-flex align-items-center justify-content-center">
                                                            <div>
                                                                <div class="icon">
                                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                                </div>
                                                                <p class="pt-4">Drop your Image here, or <b>Browse</b></p>
                                                                <span class="d-block pt-1">Support JPG, JPEG, Png, MP4</span>    
                                                            </div>
                                                            
                                                        </label>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                           <div class="avatar-upload mb-3">
                                                <div class="avatar-preview">
                                                    <div id="imagePreviewFile" class="imagePreviewFile" style="background-image: url(https://via.placeholder.com/120x88);"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="title" name="title"  placeholder="Enter here" id="title" name="title"  required >
                                                <label for="floatingInput">Document title</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <div class="mb-3">
                                                   <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                                        <option value="AL">Alabama</option>
                                                        ...
                                                        <option value="WY">Wyoming</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" placeholder="Enter here" id="mr_description" name="mr_description"  style="height: 100px" required></textarea>
                                                <label for="floatingInput">Media / Document Description</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                                <div class="row">
                                                    <div class="col-12 col-lg-12 mb-3">
                                                        <div class="form-check d-flex align-items-center">
                                                            <label class="form-check-label">
                                                                <input onclick="show32();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Groups I Created")?"CHECKED='CHECKED'":""?> class="form-check-input">A Group I am a Member In
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center">
                                                           
                                                            <div id="div51" class="hides"> 
                                                                <select class="form-control mt-3 border" name ="rf_publish2">
                                                                    <option value='' selected>--Select any group--</option>
                                                                     <?php $joinGrp = learndash_get_users_group_ids( $current_user_id);
                                                                          $joinedArg= array(); 
                                                                            $joinedArg['post_type'] = 'groups';
                                                                            $joinedArg['post_status'] = 'publish';
                                                                            $joinedArg['paged'] = $currentPage;
                                                                            $joinedArg['posts_per_page'] = 50;
                                                                            $joinedArg['post__in'] = $joinGrp;
                                                                            $myJoinedGroups = get_posts( $joinedArg );

                                                                    ?>

                                                                     <?php foreach($myJoinedGroups as $joinedGrpupVal){
                                                                           $author_id=$joinedGrpupVal->post_author;
                                                                            if($current_user_id!=$author_id){ ?>
                                                                          <option value = "<?php echo $joinedGrpupVal->ID ?>" ><?php echo $joinedGrpupVal->post_title ?></option>
                                                                    <?php }} ?>     


                                                              
                                                                </select>
                                                            </div>    
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-12 mb-3">
                                                        <div class="form-check d-flex align-items-center">
                                                            <label class="form-check-label">
                                                                <input onclick="show21();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="Groups I Created")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish">Groups I Created
                                                            </label>
                                                        </div>
                                                        <div id="div41" class="hides">
                                                        <select class="form-control mt-3 border" name ="rf_publish">
                                                            <option value='' selected>--Select any group--</option>
                                                            <?php
                                                                $current_user_id = get_current_user_id();  
                                                                $args = array(
                                                                        'numberposts'   => -1,
                                                                        'post_type'     => 'groups',
                                                                        'post_status'   => 'publish',
                                                                         'author'       =>  $current_user_id
                                                                    );
                                                                   //$all_groups = learndash_get_users_group_ids($current_user_id);
                                                                    $all_groups = get_posts( $args );
                                                                   // echo "<pre>";
                                                                    //print_r($all_groups);       
                                                            ?>
                                                            <?php foreach($all_groups as $value){ ?>
                                                              <option value = "<?php echo $value->ID ?>" ><?php echo $value->post_title ?></option>
                                                            <?php } ?>      
                                                        </select>    
                                                    </div>
                                                    </div>
                                                    <div class="col-12 col-lg-12 mb-3">
                                                        <div class="form-check d-flex align-items-center">
                                                            <label class="form-check-label">
                                                                <input  onclick="show12();" type="radio" <?php echo (get_post_meta($rf_id,'rf_publish',true)=="all_users")?"CHECKED='CHECKED'":""?> class="form-check-input" name="rf_publish" value="all_rrn_users">All RRN Users
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                        <div class="col-lg-12 col-12 d-flex justify-content-center">
                                            <button class="btn btn-primary btn_update" title="Upload" id="Upload" type="submit">Upload</button>
                                        </div>
                                </form> 
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<!--media and document view modal-->

        <div class="modal fade" id="modaldocumentview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
           aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered create_tickit" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
                                <h5 class="modal-title " style="display:inline-block" id="exampleModalLongTitle">Media or Document
                                 </h5>
                            <button type="button" class="close"
                                style="float:right;font-weight:unset;font-size:unset;width:25px;height:25px;background:grey;color:white;border-radius:50%"
                                data-dismiss="modal">&times;</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-4 mb-4">
                                <h4 id="">File Title Here</h4>
                            </div>
                           
                            <div class="col-xl-3 col-lg-3 col-md-12 col-xs-12">
                                <h6 class="mb-2">Images</h6>
                                <img id="mimg" src="<?php echo get_template_directory_uri(); ?>/assets/images/knowlage_2.png"
                                  style="display:inline;width:70px;">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-xs-12">
                                <h6 class="mb-2"> Date & Time</h6>
                                <p id="mdate"></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-xs-12">
                               <h6 class="mb-2 pb-2" >Tags</h6>
                               <p><span class="table-tag d-inline" id="mtag"></span></p>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-xs-12">
                                <h6 class="mb-2">Group Name</h6>
                                <p  id="mgroup"></p>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-4">
                               <h6 class="mb-2">Details</h6>
                               <p class="mb-5" id="mdesc"></p>
                            </div>
                          <!--  <div class="col-xl-6 col-lg-6 col-md-6 col-6" >
                                <div class="">
                                  <button type="button" class="btn btn-outline-primary deleteMedia" data-id=""> Delete </button>
                                    
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                                <div class="">
                                  <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"
                                     data-dismiss="modal"><i class="fa fa-edit"></i> Edit</button>
                                </div>
                            </div>--->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="modal fade document-upload" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center w-100">Edit Media & Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action=""  class="form-upload  resources-modal-page float mediadoc_form" enctype="multipart/form-data">
                                <input type="hidden" name="ugroup_id" value="<?php echo $post->ID?>" />
                                 <input type="hidden" name="mresource_id" id="mresource_id1" value="" />
                                <input type="hidden" name="ums_update_media" value="ums_update_media" />
                                <input type="hidden" name="resource_image_nonce" value="<?php echo wp_create_nonce('resource_image_nonce'); ?>" />
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="mb-3">
                                            <div class="drag-drop-images text-center image-upload-box"> 
                                                <div class="avatar-edit">
                                                    <input type="file" class="form-control position-absolute"  id="resource_media_img_edit" name="resource_media_img_edit">
                                                    <label for="resource_media_img_edit" class="d-flex align-items-center justify-content-center">
                                                        <div>
                                                            <div class="icon">
                                                                <i class="fa fa-upload" aria-hidden="true"></i>
                                                            </div>
                                                            <p class="pt-4">Drop your Image here, or <b>Browse</b></p>
                                                            <span class="d-block pt-1">Support JPG, JPEG, Png, MP4</span>    
                                                        </div>
                                                        
                                                    </label>
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                       <div class="avatar-upload mb-3">
                                            <div class="avatar-preview">
                                                <div class="imagePreviewFile" id="imagePreviewFile" style="background-image: url(https://via.placeholder.com/120x88);"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="title1" name="title"  placeholder="Enter Here">
                                            <label for="floatingInput">Document title</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="mb-3">
                                            <select class="js-select2 js-states form-control" multiple="multiple"   id="tags1" name="tags[]">
                                                <option selected>Tags</option>
                                                <?php 
                                                    foreach($tagList as $tag){  ?>
                                                            <option value="<?php echo $tag->name;?>" > <?php echo $tag->name;?></option>
                                                <?php }?>
                                            </select>    
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating mb-3">
                                            <textarea style="height: 100%;" type="text" class="form-control" id="mr_description1" name="mr_description"  placeholder="Enter here"></textarea>
                                            <label for="floatingInput">Media / Document Description</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating mb-5">
                                            <select class="form-select w-100 form-control"  id="mr_group1" name="mr_group" aria-label="Floating label select example">
                                                <option selected>Select </option>
                                                <?php 
                                                    foreach($allGroups as $grp){  ?>
                                                          <option value="<?php echo $grp->ID;?>" > <?php echo $grp->post_title;?></option>
                                                 <?php }?>
                                            </select>
                                            <label for="floatingSelect">Select here</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12 d-flex justify-content-center">
                                        <button class="btn btn-primary btn_update" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    function show12(){
        $("#div51").addClass("hides");
        $("#div41").addClass("hides");
    }
    
    function show21(){
      $("#div41").removeClass("hides");
      $("#div51").addClass("hides");
    }
     function show32(){
      $("#div41").addClass("hides");
      $("#div51").removeClass("hides");
    }
</script>

<script>
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>

