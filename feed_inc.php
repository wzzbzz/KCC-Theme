  <style type="text/css">
    .user-i {
        width: 50px!important;
        height: 50px!important;
        border-radius: 50%!important;
        opacity: 1;
        object-fit: cover;
        margin-bottom: 0!important;
    }
    
  </style>

  <div class="d-flex justify-content-end">
      <div class="donate_btn_right">
            <button class="btn now_donate" data-toggle="modal" data-target="#createFeed" >
            <img src="https://knowledge.communication.worldcares.org/wp-content/themes/astra/assets/images/plus_icon.png"> Create Feed </button>
        </div>
  </div>


<div>
    <div class="row feed-box">
		   
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
                    'post_type' => 'feeds',
                    'post_status'    => 'publish',
                     'meta_query'    => array(
                                    'relation'      => 'AND',array(
                                    'key' => 'feed_group_id',
                                    'value'   => $post->ID,
                                    'compare' => '='
                                    )
                                )
                     );
                 $all_posts = get_posts($args);
                 $post_count = count($all_posts);
                $num_pages = ceil($post_count / $posts_per_page);
                if($paged > $num_pages || $paged < 1){
                    $paged = $num_pages;
                }


    		$allFeeds = get_posts( array(
    			'post_type'      => 'feeds',
    			'post_status'    => 'publish',
    			//'author'        =>  $current_user_id,
    			'posts_per_page'   => $posts_per_page,
                 'paged'        => $paged,
                'meta_query'    => array(
                                    'relation'      => 'AND',array(
                                    'key' => 'feed_group_id',
                                    'value'   => $post->ID,
                                    'compare' => '='
                                    )
                                )
				) );
	 foreach($allFeeds as $value)
	 { 
       
		 
		  $feedImg = wp_get_attachment_url( get_post_thumbnail_id($value->ID) );
			if(empty($feedImg)){                                                        
				$feedImg= get_template_directory_uri()."/assets/images/range_1.png";
			}
		 
		    $author_id = $value->post_author;
			$author_img = the_author_meta( 'avatar' , $author_id ); 
			if(empty($author_img)){
				$author_img = get_template_directory_uri()."/avatar.png";
			}

          $userList = learndash_get_groups_user_ids($value->ID);
           $feedLikeCount = get_post_meta( $value->ID, 'feed_likes', true );
           if(empty( $feedLikeCount)){
             $feedLikeCount = 0;
           }
		
		?>
        <div class="col-lg-3">
           <div class="blog_box grid-item group_title position-relative custom-space">
                <div class="group_manager d-flex align-items-center">
                    <?php 

                    if($current_user_id== $value->post_author){
                    ?>
                    <div class="dropdown group_create_gg">
                        <a class="btn bg-transparent dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            
                            <a href="javascript:void(0)" class="dropdown-item getFeedData" onclick ="clickfunction('<?php echo $value->ID?>', '<?php echo $value->post_content?>','<?php echo $feedImg ?>');">Edit</a>
                            
                            <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editFeed">Edit <?///php echo $value->ID;?></a>  -->
                               
                            <a href="javascript:void(0)" class="dropdown-item getFeedData" onclick ='deleteFeed("<?php echo $value->ID?>")'>Delete</a>


                           <!--  <form method = "POST" action ="" class="mediadoc_form" enctype="multipart/form-data">
                                <input type ="hidden" name ="feed_id"  id="feed_id"  value ="<?=$value->ID; ?>">
                                <input type="hidden" name="delete_feed" value="delete_feed"/>
                                <input type="hidden" name="group_image_nonce" value="<?//php echo wp_create_nonce('group_image_nonce'); ?>" />
                                <input type="submit" value="Delete" class="dropdown-item" onclick="return confirm('Do you really want to delete this feed ?')" />                   
                            </form> -->
                        </div>

                    </div>
                <?php } ?>
                    <img src="<?php echo $author_img; ?>" alt="<?php echo the_author_meta( 'display_name' , $author_id ); ?>" class="ml-0 user-i">
                    <div class="user_date">
                        <span class="name_user"><?php echo the_author_meta( 'user_nicename' , $author_id )?></span>
                    </div>                                      
                </div>
                <a href="javascript:void(0);" class="feedDetail"  data-toggle="modal" data-target="#feed-modal-post"
                data-id="<?php echo $value->ID ?>"
                data-authorimg="<?php echo $author_img ?>"
                data-feeimg="<?php echo $feedImg ?>"
                data-content="<?php echo $value->post_content ?>"
                  data-title="<?php echo $value->post_title ?>"
                     data-like="<?php echo $feedLikeCount ?>"
                        data-comment="<?php echo $value->comment_count ?>"

                >
                    <img src="<?php echo $feedImg ?>" class="group-image" alt="image" >
                </a>
                <p><?php echo $value->post_content?></p>
                <div class="like_comment_box">
                    
                    <div class="d-flex feed-icons align-items-center my-3">
                        <div class="icon">
                            <i class="fa fa-heart-o"></i>
                        </div>
                        <div class="count">
                            <span><?php echo $feedLikeCount?></span>
                        </div>
                        <div class="mx-2"></div>
                        <div class="icon">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                        </div>
                        <div class="count">
                            <span><?php echo $value->comment_count?></span>
                        </div>
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
</div>


<div class="modal fade feed" id="createFeed" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered create_tickit" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center mx-3">
                        <h5 class="modal-title create_feed_title_modeal " style="display:inline-block" id="exampleModalLongTitle">Create Feed</h5>
                        <button type="button" class="close close-btn" data-dismiss="modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_modal.png">
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <form method = "POST" action ="" class="row mediadoc_form" enctype="multipart/form-data">
                            <input type="hidden" name="create_feed" value="create_feed" />
                            <input type="hidden" name="ugroup_id" value="<?php echo $post->ID?>" />
                            <input type="hidden" name="group_image_nonce" value="<?php echo wp_create_nonce('group_image_nonce'); ?>" />
                        
                            <div class="col-xl-12 col-lg-12 mb-3">
                                <div class="avatar-upload">
                                    <div class="avatar-preview">
                                        <div id="imagePreview" style="background-image: url(https://via.placeholder.com/120x88);"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 my-2">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Description</label>
                                    <textarea name="post_content" maxlength="2000" placeholder="Enter Here" rows="3" cols="100" class="form-control"  id="post_content" required></textarea>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" name="group_image" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12 text-center ">
                                <div class="apply_btn active modal-btn d-flex justify-content-center">
                                    <button class="btn btn_apply d-inline">Create</button>
                                </div>
                            </div>      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Post Modal -->
<div class="modal fade feed-post-modal" id="feed-modal-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered bd-example-modal-xl" role="document">
        <div class="modal-content modal-xl">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Feed Detail</h5>
                <button type="button" class="close closeBtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="feed_detail_id" id="feed_detail_id" value="">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="image">
                            <img id="feedimg" src="https://via.placeholder.com/638x643" alt="" title="" width="" height="">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="post-description">
                            <div class="part-1 d-flex align-items-center">
                                <div class="image">
                                    <img id="authorimg" src="https://via.placeholder.com/53x53">
                                </div>
                                <div class="post-content ml-3">
                                    <div class="username" id="feed_title">
                                        Caroline Tan
                                    </div>
                                    <div class="time" id="feed_date">
                                       <?php echo date("F jS, Y", strtotime($value->post_date)); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="desc py-3" id="feed_content"></div>
                            <div class="like-comment">
                                <div class="d-flex feed-icons align-items-center">
                                    <div class="icon fIcon"  data-id="">
                                        <i class="fa fa-heart-o fIcon1"  data-id=""></i>
                                    </div>
                                    <div class="count">
                                        <span id="feed_like">26</span>
                                    </div>
                                    <div class="mx-2"></div>
                                    <div class="icon">
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="count">
                                        <span id="feed_comment">12</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="comment-title">
                                    <h5>Comments</h5>
                                </div>                              
                            </div>
                            <div class="comment-list" id="commentList"></div>
                            
                            <div class="comment-form">
                                <form class="" id="addFeedCommentFrm" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="feedComment" name="feedComment" aria-describedby="emailHelp" placeholder="Type something….">
                                                <div class="comment-btn">
                                                    <button type="button" class="btn btn-primary addFeedCommentBtn" id="sub_btn" title="Submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
           </div>
    </div>
</div>



   
            
            
