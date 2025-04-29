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
                     $kcc_post->render_cell();
                     }
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


      <?
        $form = new \KCC\Forms\BlogPostForm();
        $form->renderCreateModal();
        $form->renderDeleteModal();
        $form->renderEditModal();
        ?>  

