<?php 

if ( is_user_logged_in() ) {

get_header('new');



global $post;



?>

<style type="text/css">

    .announcement-bg{

        background: #FFFFFF 0% 0% no-repeat padding-box;

        box-shadow: 0px 10px 20px #00000029;

        opacity: 1;    

        margin: 50px 0px;

        border-bottom-left-radius:20px;

        border-bottom-right-radius:20px;

        

    }

    .announcement-bg img{

        min-height: 500px;

        height: 499px;

        border-radius: 11px;

        width: 100%;

    }

    .announcement-bg .announcement-desc{

        padding-top: 25px;

        padding-left: 35px;

        padding-right: 35px;

        padding-bottom: 35px;

        opacity: 1;

    }

    .announcement-bg .announcement-desc .date p{

        color: #71706F;

        font-size: 14px;

    }

    .announcement-bg .announcement-desc .main-title h3{

        font-size: 26px;

        color: #242424;

        padding-bottom: 20px;

    }

    .announcement-bg .announcement-desc .description-sec p{

        padding-bottom: 30px;

        color: #71706F;

        font-size: 14px;

    }

    .announcement-bg .announcement-desc .description-sec p:last-child{

        padding-bottom: 0px;

    }

    .top-title-II .title-II h3{

        color: #132843;

        font-size: 26px;

    }

    .top-title-II .detail-btn .btn-outline-primary:hover{

        background: #F96703;

        border: 1px solid #F96703;

        color: #fff;

    }



    .top-title-II .detail-btn .btn-outline-primary{

        width: 202px;

        min-height: 50px;

        background: #FFFFFF 0% 0% no-repeat padding-box;

        box-shadow: 0px 3px 99px #CCD6FF3E;

        border: 1px solid #0E559F;

        border-radius: 9px;

        opacity: 1;

        color: #0E559F;

        display: flex;

        align-items: center;

        justify-content: center;

    }

</style>

</head>



<body class="main_all_bg_Sec">    

       <?php include('usermenucommon.php')?>



    <div class="col-xl-12 annoucement_detail_main_content">

        <div class="row justify-content-end mt-3">

            <?php include('user_topbar.php')?>

        </div>        

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

                            <div class="image">

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

           <?php include('common_user_footer.php')?>

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



<?php get_footer('new'); }?>

<script type="text/javascript">

     $(".editAnnouncement").click(function () {

                let title = $(this).data('title');

                let img = $(this).data('img');

                let desc = $(this).data('desc');

                 let edit_ann_id = $(this).data('id');

                $('#post_title1').val(title);               

                $('#post_content1').html(desc);

                $('#edit_ann_id').val(edit_ann_id);               

            });

</script>