<style>
    .hides {
         display: none;
    }
</style>

<div class="row blog-card-box">
    <div class="col-12 col-lg-12 dash-title d-flex justify-content-between align-items-center">
        <div>
            <h3>My Published Blogs</h3>
        </div>
        <div class="">
            <div class="donate_btn_right">        
                <button class="btn now_donate" data-toggle="modal" data-target="#createBlog" title="Create Blog">
                <img src="https://knowledge.communication.worldcares.org/wp-content/themes/astra/assets/images/plus_icon.png"> Create Blog</button>
            </div>
        </div>
    </div>
    <?php 
        $current_user_id = get_current_user_id();  
        $args = array(
        'numberposts'   => -1,
        'post_type'     => 'groups',
        'post_status'   => 'publish',
        'author'       =>  $current_user_id
        );
        $all_groups = get_posts( $args );  
        foreach($all_groups as $value){
                          
        $grp_id[]=$value->ID;
        }  
        //print_r($grp_id);
        ?>
     <?php 

       $current_user_id = get_current_user_id();
         $args = array(
                'numberposts'   => 20,
                'author'    =>  $current_user_id,
                'order'     => 'ASC',
                'post_type'      => 'post'
            );

       $my_posts = get_posts( $args );
      
       if(!empty($my_posts)) {

       foreach($my_posts as $value) {
       /*$gid = get_post_meta($report->ID, 'group_id', true ); 
          $allRnnUser= get_post_meta($value,'rf_publish',true);
          if (in_array($gid, $grp_id) || $allRnnUser == "all_rrn_users"){*/
        ?>

    <div class="col-12 col-lg-3 ">
        <div class="blog-card">
            <div class="image">
                <a href="<?php echo get_permalink( $value->ID )?>">
                    <?php echo get_the_post_thumbnail($value->ID)?>
                </a>
                <div class="blog-dropdown">
                    <div class="dropdown">
                        <a class="btn bg-transparent" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Allow Permissiom</a>
                            <a class="dropdown-item" href="#">Remove</a>
                        </div>
                     </div>
                </div>
                
            </div>
            <div class="card-title">
                <div class="d-flex justify-content-between w-100">
                    <div class="title">
                        <h6><?php echo $value->post_title; ?></h6>
                    </div>
                    <div class="blog-date">
                        <p><?php echo date("F jS, Y", strtotime($value->post_date)); ?></p>
                    </div>
                </div>
                <div class="blog-description">
                    <p> <?php echo  wp_trim_words($value->post_content,15);?></p>
                </div>
            </div>
        </div>
    </div>
    <?php } } 
/*} */
    else { ?>
        <?php echo 'There is no blog.';?>
    <?php } ?>  
</div>
<div class="modal fade document-upload" id="createBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Create Blog</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        
                        <form method ="post"class="form-upload  resources-modal-page float" id="" enctype="multipart/form-data">
                            <input type="hidden" name="ugroup_id" value="<?php echo $post->ID?>" />
                            <input type="hidden" name="create_blog" value="create_blog">
                            <input type="hidden" name="create_blog_nonce" value="<?php echo wp_create_nonce('create_blog'); ?>" />
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="mb-3">
                                        <div class="drag-drop-images text-center image-upload-box"> 
                                            <div class="avatar-edit">
                                                <input type="file" id="fileUpload" name="group_image" accept=".png, .jpg, .jpeg">
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
                                            <div class="imagePreviewFileCreate" id="imagePreviewFile" style="background-image: url(https://via.placeholder.com/120x88);"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" name= "post_title" class="form-control" id="floatingInput" placeholder="Enter hereaa">
                                        <label for="floatingInput">Blog title</label>
                                    </div>
                                </div>
                               

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control mytextarea" name="post_content" placeholder="Enter here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                 <div class="col-lg-12 col-12">
                                    <div class="form-floating mb-3">
                                        <label for="floatingInput">Publish Blog To</label><br/><br/>
                                        <!--Show hide section-->
                                          <!--  <div class="row"> -->
                                                           
                                                                <div class="col-12 col-lg-12 mb-3">
                                                                    <div class="form-check d-flex align-items-center">
                                                                        <label class="form-check-label">
                                                                            <input onclick="show3();" type="radio" <?php echo (get_post_meta($rf_id,'blog_group_id',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input" name="blog_group_id">Select From My Joined Group
                                                                        </label>
                                                                    </div>
                                                                   <!--  <div class="form-check d-flex align-items-center"> -->
                                                                        <?php $joinGrp = learndash_get_users_group_ids( $current_user_id);
                                                                              $joinedArg= array(); 
                                                                                $joinedArg['post_type'] = 'groups';
                                                                                $joinedArg['post_status'] = 'publish';
                                                                                $joinedArg['paged'] = $currentPage;
                                                                                $joinedArg['posts_per_page'] = 50;
                                                                                $joinedArg['post__in'] = $joinGrp;
                                                                                $myJoinedGroups = get_posts( $joinedArg );
                                                                        ?>  
                                                                        <div id="div55" class="hides"> 
                                                                            <select class="form-control mt-3 border" name ="blog_group_id">
                                                                                
                                                                                <?php  foreach($myJoinedGroups as $joinedGrpupVal){
                                                                                       $author_id=$joinedGrpupVal->post_author;
                                                                                        if($current_user_id!=$author_id){
                                                                                ?>
                                                                                   
                                                                                   <option> <?php echo $joinedGrpupVal->post_title?></option>
                                                                                <?php }} ?>
                                                                          
                                                                            </select>
                                                                     <!--    </div>  -->   
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-12 mb-3">
                                                                    <div class="form-check d-flex align-items-center">
                                                                        <label class="form-check-label">
                                                                            <input onclick="show2();" type="radio" <?php echo (get_post_meta($rf_id,'blog_group_id',true)=="Select From My Group")?"CHECKED='CHECKED'":""?> class="form-check-input" name="blog_group_id">Select From My Group
                                                                        </label>
                                                                    </div>
                                                                    <div id="div44" class="hides">
                                                                    <select class="form-control" name ="blog_groups">
                                                                    <?php
                                                                        $args = array(
                                                                                'numberposts'   => -1,
                                                                                'post_type'     => 'groups',
                                                                                'post_status'   => 'publish'
                                                                            );
                                                                            $all_groups = get_posts( $args );
                                                                    ?>
                                                                    <?php   foreach($all_groups as $value){ ?>
                                                                      <option value = "<?php echo $value->ID ?>" ><?php echo $value->post_title ?></option>
                                                                    <?php } ?>
                                                                       
                                                                </select> 
                                                                </div>
                                                                </div>
                                                                <div class="col-12 col-lg-12 mb-3">
                                                                    <div class="form-check d-flex align-items-center">
                                                                        <label class="form-check-label">
                                                                            <input  onclick="show1();" type="radio" <?php echo (get_post_meta($rf_id,'blog_group_id',true)=="all_users")?"CHECKED='CHECKED'":""?> class="form-check-input" name="blog_group_id" value="all_rrn_users">All RRN Users
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                           <!--  </div> -->
                                        
                                        <!--Show hide section-->
                                        
                                        
                                        
                                        <!--Inline radio buttons-->
                                        
                                           <!-- <div class="form-check-inline">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio">Option 1
                                              </label>
                                            </div>
                                            
                                            <div class="form-check-inline">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio">Option 2
                                              </label>
                                            </div>-->
                                            
                                        <!--Inline radio buttons-->
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary" title="Create Blog" id="Upload">Create Blog</button>
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
    
    function show1(){
        $("#div55").addClass("hides");
        $("#div44").addClass("hides");
    }
    
    function show2(){
      $("#div44").removeClass("hides");
      $("#div55").addClass("hides");
    }
     function show3(){
      $("#div44").addClass("hides");
      $("#div55").removeClass("hides");
    }


 </script>