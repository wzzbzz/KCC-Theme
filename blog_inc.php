      <?php
       $posts_per_page = 10;
        $user = new KCC\User(get_current_user_id());

        //print_r($grp_id);
        ?>
      <div class="d-flex justify-content-end">
          <div class="donate_btn_right">
              <button class="btn now_donate" data-toggle="modal" data-target="#createBlog" title="Create Blog">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png"> Create Blog</button>
          </div>
      </div>
      <div claas="row">
          <h2> My Blogs</h2>
      </div>
      <div class="row blog-card-box mt-4">

          <?php
            if ( !empty( $posts = $group->blogPosts() ) ) {
                foreach ( $posts as $kcc_post ) {
            ?>
                      <div class="col-lg-3 col-12">
                          <div class="blog-card">
                              <div class="image d-flex justify-content-center">
                                  <a href="<?= $kcc_post->permalink(); ?>">
                                      <?= $kcc_post->thumbnail(); ?>
                                  </a>
                                  <?php

                                    if ($current_user_id == $kcc_post->author()->id()) {

                                    ?>
                                      <div class="blog-dropdown">
                                          <div class="dropdown">
                                              <a id="dropdownMenuButtonap" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonap">
                                                  <a class="dropdown-item" href="javascript:void(0)" onclick='editBlog("<?= $kcc_post->id(); ?>","<?= $kcc_post->content(); ?>","<?php echo $kcc_post->thumbnail_url(); ?>","<?php echo $kcc_post->title(); ?>");'>Edit Post</a>
                                                  <a href="javascript:void(0)" class="dropdown-item" onclick='deleteBlog("<?php echo $kcc_post->id(); ?>")'>Delete</a>
                                              </div>
                                          </div>
                                      </div>
                                  <?php
                                    }
                                    ?>
                              </div>
                              <div class="card-title">
                                  <div class="d-flex justify-content-between w-100">
                                      <div class="title">
                                          <a href="<?= $kcc_post->permalink(); ?>">
                                              <h6><?php echo $kcc_post->title(); ?> </h6>
                                          </a>
                                      </div>
                                      <div class="blog-date">
                                          <p><?php echo $kcc_post->date(); ?></p>
                                      </div>
                                  </div>
                                  <div class="blog-description">
                                      <a href="<?= $kcc_post->permalink(); ?>">
                                          <p> <?php echo  wp_trim_words($kcc_post->content(), 15); ?></p>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
              <?php }
                }
            else { ?>
              <?php echo 'There is no blog.'; ?>
          <?php } ?>

          <?php if (count($posts) > $posts_per_page) {

                echo '<div class="page-nav-container pagination">
                <ul>';

                if ($paged > 1) {
                    echo '<li><a class="first" href="?pag=1">&laquo;</a></li>';
                } else {
                    echo '<li><span class="first">&laquo;</span></li>';
                }

                for ($p = 1; $p <= $num_pages; $p++) {
                    if ($paged == $p) {
                        echo '<li><span class="current">' . $p . '</span></li>';
                    } else {
                        echo '<li><a href="?pag=' . $p . '">' . $p . '</a></li>';
                    }
                }

                if ($paged < $num_pages) {
                    echo '<li><a class="last" href="?pag=' . $num_pages . '">&raquo;</a></li>';
                } else {
                    echo '<li><span class="last">&raquo;</span></li>';
                }

                echo '</ul></div>';
            } ?>
      </div>
      <!-- Avantika  -->



      <!-- Avantika -->

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

                              <form method="post" class="form-upload  resources-modal-page float" id="" enctype="multipart/form-data">
                                  <input type="hidden" name="audience" value="group" />
                                  <input type="hidden" name="group_id" value="<?php echo $group->id(); ?>" />
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
                                              <input type="text" name="post_title" class="form-control" id="floatingInput" placeholder="Enter hereaa">
                                              <label for="floatingInput">Blog title</label>
                                          </div>
                                      </div>

                                      <div class="col-lg-12 col-12">
                                          <div class="form-floating mb-3">
                                              <textarea class="form-control mytextarea" name="post_content" placeholder="Enter here" id="floatingTextarea2" style="height: 100px"></textarea>
                                          </div>
                                      </div>


                                      <div class="col-lg-12 mb-3" style="display:none";>
                                          <div class="form-title">
                                              <h6><b>Publish Form to</b></h6>
                                          </div>
                                      </div>
                                      <!--  <div class="col-lg-12 mb-3"> -->
                                      <!--  <div class="row"> -->

                                      <div class="col-12 col-lg-12 mb-3"  style="display:none";>
                                          <div class="form-check d-flex align-items-center">
                                              <label class="form-check-label">
                                                  <input onclick="show3();" type="radio" <?php echo (get_post_meta($rf_id, 'rf_publish', true) == "Select From My Group") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input" name="rf_publish">Select From My Joined Group
                                              </label>
                                          </div>
                                          <!--  <div class="form-check d-flex align-items-center"> -->
                                          <?php $joinGrp = learndash_get_users_group_ids($current_user_id);
                                            $joinedArg = array();
                                            $joinedArg['post_type'] = 'groups';
                                            $joinedArg['post_status'] = 'publish';
                                            $joinedArg['paged'] = $currentPage;
                                            $joinedArg['posts_per_page'] = 50;
                                            $joinedArg['post__in'] = $joinGrp;
                                            $myJoinedGroups = get_posts($joinedArg);
                                            ?>
                                          <div id="div55" class="hides">
                                              <select class="form-control mt-3 border" name="rf_publish">

                                                  <?php foreach ($myJoinedGroups as $joinedGrpupVal) {
                                                        $author_id = $joinedGrpupVal->post_author;
                                                        if ($current_user_id != $author_id) {
                                                    ?>

                                                          <option> <?php echo $joinedGrpupVal->post_title ?></option>
                                                  <?php }
                                                    } ?>

                                              </select>
                                              <!--    </div>  -->
                                          </div>
                                      </div>
                                      <div class="col-12 col-lg-12 mb-3"  style="display:none";>
                                          <div class="form-check d-flex align-items-center">
                                              <label class="form-check-label">
                                                  <input onclick="show2();" type="radio" <?php echo (get_post_meta($rf_id, 'rf_publish', true) == "Select From My Group") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input" name="rf_publish">Select From My Group
                                              </label>
                                          </div>
                                          <div id="div44" class="hides">
                                              <select class="form-control mt-3 border" name="rf_publish">
                                                  <option>--Select any group--</option>
                                                  <?php
                                                    $current_user_id = get_current_user_id();
                                                    $args = array(
                                                        'numberposts'   => -1,
                                                        'post_type'     => 'groups',
                                                        'post_status'   => 'publish',
                                                        'author'       =>  $current_user_id
                                                    );

                                                    //$all_groups = learndash_get_users_group_ids($current_user_id);
                                                    $all_groups = get_posts($args);


                                                    // echo "<pre>";
                                                    //print_r($all_groups);       
                                                    ?>

                                                  <?php foreach ($all_groups as $value) { ?>
                                                      <option value="<?php echo $value->ID ?>"><?php echo $value->post_title ?></option>
                                                  <?php } ?>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-12 col-lg-12 mb-3"  style="display:none";>
                                          <div class="form-check d-flex align-items-center">
                                              <label class="form-check-label">
                                                  <input onclick="show1();" type="radio" <?php echo (get_post_meta($rf_id, 'rf_publish', true) == "all_users") ? "CHECKED='CHECKED'" : "" ?> class="form-check-input" name="rf_publish" value="all_rrn_users">All RRN Users
                                              </label>
                                          </div>
                                      </div>
                                      <!--  </div> -->
                                      <!-- </div> -->

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



      <div class="modal editBlogfade document-upload" id="editBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title text-center">Edit Blog</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png">
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12">

                              <form method="post" class="form-upload  resources-modal-page float" id="blog_edit_imagefrm" enctype="multipart/form-data">
                                  <input type="hidden" name="ugroup_id" value="<?php echo $kcc_post->ID ?>" />
                                  <input type="hidden" name="blog_edit_id" id="blog_edit_id" value="">
                                  <input type="hidden" name="update_blog" value="update_blog">
                                  <input type="hidden" name="update_blog_nonce" value="<?php echo wp_create_nonce('update_blog_nonce'); ?>" />
                                  <div class="row">
                                      <div class="col-lg-12 col-12">
                                          <div class="mb-3">
                                              <div class="drag-drop-images text-center image-upload-box">
                                                  <div class="avatar-edit">
                                                      <input type="file" id="blog_edit_image" name="blog_edit_image" accept=".png, .jpg, .jpeg">
                                                      <label for="blog_edit_image" class="d-flex align-items-center justify-content-center">
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
                                                  <div id="blogEditImage" class="blogEditImage" style="background-image: url(https://via.placeholder.com/120x88);"></div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-12 col-12">
                                          <div class="form-floating mb-3">
                                              <input type="text" name="post_title" class="form-control" id="blog_title" placeholder="Enter here" value="">
                                              <label for="floatingInput">Blog title</label>
                                          </div>
                                      </div>


                                      <div class="col-lg-12 col-12">
                                          <div class="form-floating mb-3">
                                              <textarea class="form-control" name="post_content" placeholder="Enter here" id="blog_content" style="height: 100px"></textarea>
                                              <label for="floatingInput">Description</label>
                                          </div>
                                      </div>

                                      <div class="col-lg-12 col-12 d-flex justify-content-center">
                                          <button class="btn btn-primary" type="submit" title="Update Blog" id="Upload">Update Blog</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="modal fade deleteModal" id="blogDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                  <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to Delete</h5>
                <button type="button" class="close closeBtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
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

                          <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry simply dummy text of the printing and type setting industry. Lorem Ipsum has been to end.</p>
                      </div>


                      <!--  <div class="text text-center">
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry simply dummy text of the printing and type setting industry. Lorem Ipsum has been to end.</p>
                </div>  -->
                      <div class="d-flex modal-btn-delete">
                          <div class="w-50">
                              <button type="button" class="btn btn-outline-primary" data-dismiss="modal" title="Cancel">Cancel</button>
                          </div>
                          <div class="mx-2"></div>

                          <div class="w-50">
                              <form method="POST" action="" class="mediadoc_form" enctype="multipart/form-data">
                                  <input type="hidden" name="blog_id" id="blog_id" value="<?= $value->ID; ?>">
                                  <input type="hidden" name="delete_blog" value="delete_blog" />
                                  <input type="hidden" name="group_image_nonce" value="<//?php echo wp_create_nonce('group_image_nonce'); ?>" />
                                  <button class="btn btn-primary" title="Delete">Delete</button>

                              </form>


                          </div>

                      </div>

                  </div>
              </div>
          </div>
      </div>


      <script>
          function editBlog(id, content, img, title) {
              $("#img_new").attr("src", img);
              $('#blogEditImage').css('background-image', 'url(' + img + ')');
              $('#blog_edit_id').val(id);
              $('#blog_title').val(title);
              $("#blog_content").val(content);
              $('#editBlog').modal('show');
          }
      </script>


      <script>
          function deleteBlog(id) {
              $('#blog_id').val(id);
              $('#blogDelete').modal('show');
          }
      </script>

      <!--  <script>
    
    function show1(){
      document.getElementById('div1').style.display ='none';
    }
    
    function show2(){
      document.getElementById('div1').style.display = 'block';
    }
 </script> -->
      <script>
          function show1() {
              $("#div55").addClass("hides");
              $("#div44").addClass("hides");
          }

          function show2() {
              $("#div44").removeClass("hides");
              $("#div55").addClass("hides");
          }

          function show3() {
              $("#div44").addClass("hides");
              $("#div55").removeClass("hides");
          }
      </script>