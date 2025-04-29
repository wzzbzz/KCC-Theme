<?php 

if ( is_user_logged_in() ) {

get_header('dashboard');


global $post;
?>


    <div class="col-xl-12 annoucement_detail_main_content">   

         <?php $img = get_the_post_thumbnail_url(get_the_ID(),'large'); 





            $current_user_id = get_current_user_id();



           //echo "<pre>"; print_r($post); echo "</pre>"; 

            

            ?>

        <div class="row justify-content-end  top-title-II">

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex justify-content-center mt-5">

                <div class="d-flex justify-content-between w-100">

                    <div class="title-II">

                        <h3>Announcement Detail</h3>

                    </div>

                    <div class="detail-btn">

                        <a href="javascript:void(0);" class="btn btn-outline-primary" title="Back">Back</a>

                    </div>

                </div>

            </div>

            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex justify-content-center">

                <div class="row d-flex justify-content-center w-100">

                    <div class="col-xl-12">

                        <div class="announcement-bg">

                            <div class="image d-flex justify-content-center">

                                <img src="<?php echo $img; ?>" alt="" height="" title="">

                            </div>

                            <div class="announcement-desc">

                                <div class="d-flex justify-content-between align-items-center w-100">

                                    <div class="main-title">

                                        <h3><?php echo get_the_title(); ?></h3>

                                    </div>

                                    <div class="date">

                                        <p><?php echo get_the_date()?></p>

                                    </div>

                                </div>

                                <div class="description-sec">

                                    <p><?php echo get_the_content(); ?></p>

                                </div>

                            </div>

                        </div>        

                    </div>

                </div>

            </div>

        </div>

    </div>



    <!-- Edit Announcement Modal -->



<div class="modal fade document-upload" id="editAnnouncement" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

    <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title text-center">Edit Announcement</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png">

                </button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-12">

                        <form method ="post"class="form-upload  resources-modal-page float" id="" enctype="multipart/form-data">

                            <input type="hidden" name="ugroup_id" value="<?php echo $post->ID?>" />

                            <input type="hidden" id="edit_ann_id" name="edit_ann_id" value="" />

                            <input type="hidden" name="update_announcement" value="update_announcement">

                             <input type="hidden" name="group_image_nonce" value="<?php echo wp_create_nonce('group_image_nonce'); ?>" />



                            <div class="row">

                                <div class="col-lg-12 col-12">

                                    <div class="mb-3">

                                        <div class="drag-drop-images text-center image-upload-box"> 

                                            <div class="avatar-edit">

                                                <input type="file" id="edit_fileUploadannouncement" name="group_image" accept=".png, .jpg, .jpeg">

                                                <label for="edit_fileUploadannouncement" class="d-flex align-items-center justify-content-center">

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

                                            <div id="edit_imagePreviewFileannouncement" style="background-image: url(https://via.placeholder.com/120x88);"></div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-12 col-12">

                                    <div class="form-floating mb-3">

                                        <input type="text" name ="post_title"  class="form-control" id="post_title1" placeholder="Enter Here">

                                        <label for="floatingInput">Announcementbtn title</label>

                                    </div>

                                </div>

                               



                                <div class="col-lg-12 col-12">

                                    <div class="form-floating mb-3">

                                        <textarea class="form-control" name="post_content" placeholder="Enter here" id="post_content1" style="height: 100px"></textarea>

                                        <label for="floatingInput">Description</label>

                                    </div>

                                </div>

                                

                                <div class="col-lg-12 col-12 d-flex justify-content-center">

                                    <button class="btn btn-primary" title="Create Announcement" id="Upload">Update Announcement</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



<?php get_footer(); }?>
