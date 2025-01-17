    <style type="text/css">
        .hides{
            display: none;
        }
    </style>
    <div class="d-lg-flex justify-content-lg-end w-100">
        <div class="donate_btn_right  member-btn">
            <button class="add-memberbtn upload-btn" type="button" data-toggle="modal" data-target="#modalupload"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="img-fluid mr-2">Upload New File</button>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane active" id="all-media-docuent" role="tabpanel">
            <div class="global-table">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Document Name</th>
                                <th scope="col">Media and Document</th>
                                <th scope="col">Tags</th>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                                <th scope="col">Group</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <?php
                            $allResourceImg = get_posts( array(
                                                         'post_type'      => 'resourcemedia',
                                                         'post_status'    => 'publish',
                                                          'post_author'        =>  $current_user_id,
                                                          'numberposts' => 1000,
                                                          'meta_query' =>   array(
                                                                            'relation' => 'AND',
                                                                            array(
                                                                            'key' => 'ugroup_id',
                                                                            'value'   => $post->ID,
                                                                            'type'=> 'CHAR',
                                                                            'compare' => '='
                                                                            )
                                                                        )
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
                                <td><?php echo @$resourceImgVal->post_title;?></td>
                                <td>
                                    <div class="image-card">
                                         <img src="<?php echo $feat_image; ?>" alt="" width="" height="" title="">
                                    </div>
                                </td>
                                <td><div class="tag">

                                    <?php

                                    $tags = get_post_meta($resourceImgVal->ID, 'resource_ld_group_tag');
                                   
                                    if(!empty($tags[0])){
                                        foreach($tags[0] as $tag){?>
                                        <div class="badge">
                                            <span><?php echo $tag?></span>
                                        </div>
                                    <?php }
                                    }
                                    ?>
                                </div>

                                </td>
                                <td>
                                    <?php echo date('Y-m-d',strtotime($resourceImgVal->post_date))?>
                                </td>
                                <td><?php  echo mb_strimwidth($resourceImgVal->post_content, 0, 60, '...');?></td>
                                <td><?php echo @$groupData->post_title;?></td>
                                <td>
                                    <div class="table-btn">
                                        <button class="btn btn-primary save saveMedia" data-id="<?php echo $resourceImgVal->ID?>" data-img=""><i class="fa fa-bookmark" aria-hidden="true"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-btn">
                                        <button class="btn btn-primary downloadF" data-img="<?php echo $feat_image ?>"><i class="fa fa-download" aria-hidden="true"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-btn">
                                        <button class="btn btn-primary viewDetails" type="button"
                                            data-toggle="modal"
                                            data-target="#modaldocumentview" 
                                            data-title="<?php echo $resourceImgVal->post_title; ?>" 
                                            data-img="<?php echo $feat_image ?>" 

                                            data-tag="<?php echo get_post_meta($resourceImgVal->ID, 'resource_ld_group_tag'); ?>"  
                                            data-desc="<?php echo $resourceImgVal->post_content; ?>" 
                                            data-group="<?php echo @$groupData->post_title; ?>" 
                                            data-date="<?php echo date('Y-m-d',strtotime($resourceImgVal->post_date)); ?>" >
                                            View</button>
                                        </div>
                                </td>
                                <td>
                                    <div class="dropdown delete-menu">
                                        <a href="javascript:void(0);"  id="dropdownMenuButton-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-1">
                                            <a class="dropdown-item" href="#">Save to my Resources</a>
                                            <a class="dropdown-item" href="#">Delete Document</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php }
                            }else{ ?>
                            <tr><td colspan="15">No Record found</td></tr>
                            <?php } ?>
                        
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

            // echo "<pre>"; print_r($allGroups);die;


    ?>





<div class="modal fade document-upload" id="modalupload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Upload Media & Document</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/close_modal.png" alt="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" class="form-upload resources-modal-page float" enctype="multipart/form-data">
                    <input type="hidden" name="ugroup_id" value="<?php echo esc_attr($post->ID); ?>" />
                    <input type="hidden" name="ums_create_media" value="ums_create_media" />
                    <input type="hidden" name="resource_image_nonce" value="<?php echo wp_create_nonce('resource_image_nonce'); ?>" />

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <div class="drag-drop-images text-center image-upload-box">
                                    <div class="avatar-edit">
                                        <input type="file" id="resource_media_img" name="resource_media_img" accept=".png, .jpg, .jpeg, .mp4">
                                        <label for="resource_media_img" class="d-flex align-items-center justify-content-center">
                                            <div>
                                                <div class="icon">
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                </div>
                                                <p class="pt-4">Drop your Image here, or <b>Browse</b></p>
                                                <span class="d-block pt-1">Support JPG, JPEG, PNG, MP4</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <div class="avatar-upload">
                                <div class="avatar-preview">
                                    <div id="imagePreviewFile" class="imagePreview" style="background-image: url('https://via.placeholder.com/120x88');"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                                <label for="title">Document Title</label>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <div class="mb-3">
                                <select class="js-example-placeholder-multiple js-states form-control" name="tags[]" multiple="multiple" required>
                                    <?php foreach ($tagList as $tag): ?>
                                        <option value="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" id="floatingTextarea2" name="mr_description" placeholder="Enter here" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Media / Document Description</label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <div class="form-check d-flex align-items-center">
                                        <input type="radio" id="selectMyGroup" name="rf_publish" value="SelectFromMyGroup" onclick="show33();" <?php checked(get_post_meta($rf_id, 'rf_publish', true), 'Select From My Group'); ?> class="form-check-input">
                                        <label class="form-check-label" for="selectMyGroup">Select From My Joined Group</label>
                                    </div>
                                    <div id="div551" class="hides">
                                        <select class="form-control mt-3 border" name="rf_publish">
                                            <?php foreach ($myJoinedGroups as $joinedGrpupVal): ?>
                                                <?php if ($current_user_id != $joinedGrpupVal->post_author): ?>
                                                    <option><?php echo esc_html($joinedGrpupVal->post_title); ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="form-check d-flex align-items-center">
                                        <input type="radio" id="selectMyGroup" name="rf_publish" value="SelectFromMyGroup" onclick="show22();" <?php checked(get_post_meta($rf_id, 'rf_publish', true), 'Select From My Group'); ?> class="form-check-input">
                                        <label class="form-check-label" for="selectMyGroup">Select From My Group</label>
                                    </div>
                                    <div id="div441" class="hides">
                                        <select class="form-select w-100" name="mr_group" id="floatingSelect" aria-label="Select group" required>
                                            <option selected>Select group</option>
                                            <?php foreach ($allGroups as $grp): ?>
                                                <option value="<?php echo esc_attr($grp->ID); ?>"><?php echo esc_html($grp->post_title); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="form-check d-flex align-items-center">
                                        <input type="radio" id="allRrnUsers" name="rf_publish" value="all_rrn_users" onclick="show11();" <?php checked(get_post_meta($rf_id, 'rf_publish', true), 'all_rrn_users'); ?> class="form-check-input">
                                        <label class="form-check-label" for="allRrnUsers">All RRN Users</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" title="Upload" id="Upload">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    
    <!--media and document view modal-->
    <div class="modal fade document-view" id="modaldocumentview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered create_tickit" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="blog_grid">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
                                <h5 class="modal-title " style="display:inline-block" id="exampleModalLongTitle">Media & Document</h5>
                                <button type="button" class="close"  data-dismiss="modal">&times;</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 mb-3">
                                <div class="main-title">
                                    <h3 id="mtitle">File Title Here</h3>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 mb-3">
                                <div class="box">
                                    <div class="modal-head mb-3">
                                        <h4>Images</h4>
                                    </div>
                                    <div class="text-value image">
                                        <img id="mimg" src="<?php echo get_template_directory_uri(); ?>/assets/images/knowlage_2.png" alt="" height="" width="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 mb-3">
                                <div class="box">
                                    <div class="modal-head mb-3">
                                        <h4>Date & Time</h4>
                                    </div>
                                    <div class="text-value">
                                        <p id="mdate"></p>
                                    </div>
                                </div>
                            </div>
                           <!--  <div class="col-12 col-lg-3 mb-3">
                                <div class="box">
                                    <div class="modal-head mb-3">
                                        <h4>Tags</h4>
                                    </div>
                                    <div class="text-value">
                                        <p>
                                            <span class="table-tag d-inline px-3" id="mtag"></span>
                                        </p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-12 col-lg-3 mb-3">
                                <div class="box">
                                    <div class="modal-head mb-3">
                                        <h4>Group Name</h4>
                                    </div>
                                    <div class="text-value">
                                        <p>
                                            <span class="table-tag d-inline px-3" id="mgroup"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="box">
                                    <div class="modal-head mb-3">
                                        <h4>Details</h4>
                                    </div>
                                    <div class="text-value">
                                         <p class="" id="mdesc"></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-3">
                                <div class="apply_btn active">
                                    <button class="btn btn_apply" style="color: blue;background: #fff;border-color:blue;"> Delete</button>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="apply_btn active">
                                    <button class="btn btn_apply" data-toggle="modal" data-target="#editModal" data-dismiss="modal"><i class="fa fa-edit"></i> Edit</button>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <h4 id="mtitle">File Title Here</h4><br>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-xs-12">
                                        <h6 class="mb-2">Images</h6>
                                      <img id="mimg" src="<?php echo get_template_directory_uri(); ?>/assets/images/knowlage_2.png"
                                            style="display:inline;width:70px;">
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-xs-12">
                                        <h6 class="mb-2"> Date & Time</h6>
                                        <p id="mdate">></p>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-xs-12">
                                        <h6 class="mb-2 pb-2" >Tags</h6>
                                        <p><span class="table-tag d-inline" id="mtag"></span></p>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-xs-12">
                                        <h6 class="mb-2">Group Name</h6>
                                        <p  id="mgroup"></p>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                        <h6 class="mb-2">Details</h6>
                                        <p class="mb-5" id="mdesc"></p>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-6 delbtn" style="display: none;">
                                        <div class="apply_btn active">
                                            <button class="btn btn_apply"
                                                style="color: blue;background: #fff;border-color:blue;"> Delete</button>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-6 delbtn" style="display: none;">
                                        <div class="apply_btn active">
                                            <button class="btn btn_apply" data-toggle="modal" data-target="#editModal"
                                                data-dismiss="modal"><i class="fa fa-edit"></i> Edit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--media and document edit  modal stage 1-->
    <!--media and document edit  modal stage 2 -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered create_tickit modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="exampleModalCenterTitle">Edit Media & Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="created-resource-form">
                        <form  method="POST" action="" class="row mediadoc_form" enctype="multipart/form-data">
                            <input type="hidden" name="ums_create_media" value="ums_update_media" />
                            <input type="hidden" name="mresource_id" value="" />
                            <input type="hidden" name="resource_image_nonce" value="<?php echo wp_create_nonce('resource_image_nonce'); ?>" />
                            <input type="hidden" name="ugroup_id" value="<?php echo $post->ID?>" />
                            <div class="col-xl-12 col-lg-10 file-upload-field">
                                <div class="form-group d-flex justify-content-center text-center">
                                    <label for="exampleInputPassword1" class="position-relative"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group74513.png">
                                        
                                        Drop your image here, or <span class="text-primary">Browse</span><br>
                                        <span class="text-secondary">Support JPG, JPEG, PNG, MP4</span>
                                        <input type="file" class="form-control position-absolute"
                                            id="resource_media_img" name="resource_media_img">
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-10">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Document Title</label>
                                    <input type="text" class="form-control" id="title1" name="title" 
                                        placeholder="Enter Here">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-10">
                                <div class="form-group select_sec">
                                    <label for="exampleFormControlSelect1">Tags</label>
                                    <select class="form-control" id="tags1" name="tags[]">
                                        <?php 
                                            foreach($tagList as $tag){  ?>
                                                  <option value="<?php echo $tag->name;?>" > <?php echo $tag->name;?></option>
                                    
                                         <?php }?>
                                    </select>
                                    <span class="table-tag">tag</span> <span class="table-tag">tag</span>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-10">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Media & Document Description</label>
                                    <input type="text" class="form-control" id="mr_description1" name="mr_description" 
                                        placeholder="Enter here">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-10">
                                <div class="form-group select_sec">
                                    <label for="exampleFormControlSelect1">Select Group</label>
                                    <select class="form-control" id="mr_group1" name="mr_group">
                                        <option value="">Select</option>
                                         <?php 
                                            foreach($allGroups as $grp){  ?>
                                                  <option value="<?php echo $grp->ID;?>" > <?php echo $grp->post_title;?></option>
                                    
                                         <?php }?>
                                    </select>
                                </div>
                            </div>
                       
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-xl-4 col-lg-10">
                                <div class="update_btn">
                                    <button type="submit" class="btn btn_update">Update</button>
                                </div>
                            </div>
                        </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    function show11(){
        $("#div551").addClass("hides");
        $("#div441").addClass("hides");
    }
    
    function show22(){
      $("#div441").removeClass("hides");
      $("#div551").addClass("hides");
    }
     function show33(){
      $("#div441").addClass("hides");
      $("#div551").removeClass("hides");
    }
</script>

