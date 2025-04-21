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
        $post = new KCC\Communications\BlogPost($value->ID);
        $post->render_cell();
       
     } } 
/*} */
    else { ?>
        <?php echo 'There is no blog.';?>
    <?php } ?>  
</div>
<?php
      $form = new \KCC\Forms\BlogPostForm();
      $form->renderCreateModal();
      $form->renderDeleteModal();
      $form->renderEditModal();      
      $form->renderFilterModal();    
