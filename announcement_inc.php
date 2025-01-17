<div class="d-lg-flex justify-content-lg-between w-100 align-items-lg-center">
	<div class="text width-change">
		<!--<p class="title-text">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
	</div>
    <div class="donate_btn_right">        
        <button class="btn now_donate" type="button" data-toggle="modal" data-target="#announcementbtn">
        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus_icon.png" class="mr-2">Add Announcement
        </button>
    </div>
</div>

<div class="row blog-card-box">
<?php 
$current_user_id = get_current_user_id();

if(! empty($_GET['pag']) && is_numeric($_GET['pag']) ){
    $paged = $_GET['pag'];
}else{
    $paged = 1;
}

$posts_per_page = (get_option('posts_per_page')) ? get_option('posts_per_page') : 5;

$args = array(
  'posts_per_page' =>-1,
    'post_type' => 'announcement',
    'post_status'    => 'publish',
    'author'        =>  $current_user_id,
    'tax_query' => array(
        array(
            'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 
            'field'    => 'id',
            'terms'    => $cat_id,
        ),
       ),
     );
 $all_posts = get_posts($args);
 $post_count = count($all_posts);
$num_pages = ceil($post_count / $posts_per_page);
if($paged > $num_pages || $paged < 1){
    $paged = $num_pages;
}


$allAnnoncements = get_posts( array(
                            'post_type'      => 'announcement',
                            'post_status'    => 'publish',
                            'author'        =>  $current_user_id,
                           'posts_per_page'   => $posts_per_page,
                            'paged'        => $paged,
                            'meta_query' =>   array(
                                                    'relation' => 'AND',
                                                    array(
                                                    'key' => 'announcement_group_id',
                                                    'value'   => $post->ID,
                                                    'type'=> 'CHAR',
                                                    'compare' => '='
                                                    )
                                                                                    )
                            ) );		
foreach($allAnnoncements as $value)
{
$annoncementImg = wp_get_attachment_url( get_post_thumbnail_id($value->ID) );
if(empty($annoncementImg)){                                                        
    $annoncementImg= "https://via.placeholder.com/120x88";
}

 ?>
	<div class="col-lg-3 col-12">
        <div class="blog-card">
            <div class="image">
                <a href="<?php echo get_permalink( $value->ID )?>">
                    
                <?php echo get_the_post_thumbnail($value->ID)?>
            </a>
                <div class="blog-dropdown">
                    <div class="dropdown">
                        <a  id="dropdownMenuButtonap" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="dropdownMenuButtonap">
                            <a class="dropdown-item editAnnouncement" href="javascript:void(0)" data-toggle="modal" data-target="#editAnnouncement"

                            data-id="<?php echo $value->ID; ?>"
                             data-title="<?php echo $value->post_title; ?>"
                              data-desc="<?php echo $value->post_content; ?>"
                               data-img="<?php echo $annoncementImg; ?>"


                            >Edit</a>

                             <a href="javascript:void(0)" class="dropdown-item" onclick ='deleteAnnouncement("<?php echo $value->ID?>")'>Delete</a>
                            <!-- <form method = "POST" action ="" class="mediadoc_form" enctype="multipart/form-data">
                            <input type ="hidden" name ="ann_id"  id="ann_id"  value ="<?=$value->ID; ?>">
                            <input type="hidden" name="delete_announcement" value="delete_announcement"/>
                            <input type="hidden" name="group_image_nonce" value="<?//php echo wp_create_nonce('group_image_nonce'); ?>" />



                        <input type="submit" value="Delete" class="dropdown-item" onclick="return confirm('Do you really want to delete this announcement ?')" />

                        </form> -->

                            <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteAnnoucementModal">Delete</a> -->
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

    <?php } ?> 

    <?php    if($post_count > $posts_per_page ){

        echo '<div class="pagination">
                <ul>';

        if($paged > 1){
            echo '<li><a class="first" href="?pag=1">&laquo;</a></li>';
        }else{
            echo '<li><span class="first">&laquo;</span></li>';
        }

        for($p = 1; $p <= $num_pages; $p++){
            if ($paged == $p) {
                echo '<li><span class="current">'.$p.'</span></li>';
            }else{
                echo '<li><a href="?pag='.$p.'">'.$p.'</a></li>';
            }
        }

        if($paged < $num_pages){
            echo '<li><a class="last" href="?pag='.$num_pages.'">&raquo;</a></li>';
        }else{
            echo '<li><span class="last">&raquo;</span></li>';
        }

        echo '</ul></div>';
    } ?>

	</div>


<!-- Delete Modal  -->
<div class="modal fade deleteModal" id="deleteAnnoucementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to Delete</h5>
                <button type="button" class="close closeBtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---<div class="text text-center">
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry simply dummy text of the printing and type setting industry. Lorem Ipsum has been to end.</p>
                </div>--->
                <div class="d-flex modal-btn-delete">
                    <div class="w-50">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal" title="Cancel">Cancel</button>
                    </div>
                    <div class="mx-2"></div>
                    <div class="w-50">
                        <form method = "POST" action ="" class="mediadoc_form" enctype="multipart/form-data">
                            <input type="hidden" id = "ann_id" name="ann_id"  value= "">
                            <input type="hidden" name="delete_announcement" value="delete_announcement"/>
                            <button  class="btn btn-primary" title="Delete">Delete</button>
                        </form>        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


<div class="modal fade document-upload" id="announcementbtn" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog mr-short-by modal-xl modal-dialog-centered create_tickit" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Create Announcement</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method ="post"class="form-upload  resources-modal-page float" id="" enctype="multipart/form-data">
                            <input type="hidden" name="ugroup_id" value="<?php echo $post->ID?>" />
                            <input type="hidden" name="create_announcement" value="create_announcement">
                             <input type="hidden" name="group_image_nonce" value="<?php echo wp_create_nonce('group_image_nonce'); ?>" />

                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="mb-3">
                                        <div class="drag-drop-images text-center image-upload-box"> 
                                            <div class="avatar-edit">
                                                <input type="file" id="fileUploadannouncement" name="group_image" accept=".png, .jpg, .jpeg">
                                                <label for="fileUploadannouncement" class="d-flex align-items-center justify-content-center">
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
                                            <div id="imagePreviewFileannouncement" style="background-image: url(https://via.placeholder.com/120x88);"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" name ="post_title"  class="form-control" id="floatingInput" placeholder="Enter Here">
                                        <label for="floatingInput">Announcement Title</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control mytextarea" name="post_content" placeholder="Enter here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingInput">Description</label>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-12 d-flex justify-content-center">
                                    <button class="btn btn-primary" title="Create Announcement" id="Upload">Create Announcement</button>
                                </div>
                            </div>
                        </form>
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
                                        <label for="floatingInput">Announcement Title</label>
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


