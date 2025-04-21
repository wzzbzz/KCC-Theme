<?php

namespace KCC\Communications;

use \KCC\FlashMessages\FlashMessages;

class BlogPosts extends \jwc\Wordpress\WPController
{



    public function init()
    {
        parent::init();
        $this->create_blog_post();
        $this->update_blog_post();
        $this->delete_blog_post();
        $this->add_rewrites();
        $this->template_redirect();
    }

    public function admin_init()
    {
        add_action('draft_to_publish', array($this, 'send_blog_post_notification'), 10, 2);
    }

    // save an blog_post
    public function create_blog_post()
    {

        if (!empty($_POST['create_blog'])) {


            $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";
            $post_content = ($_POST['post_content']) ? $_POST['post_content'] : "";
            $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";
            $audience = ($_POST['audience']) ? sanitize_text_field($_POST['audience']) : "";

            $current_user_id = get_current_user_id();


            switch ($audience) {

                case 'group':
                    $audience = 'group';
                    if (empty($group_id)) {
                        FlashMessages::add('Group ID not submitted', 'error');
                        return;
                    }
                    $group = new \KCC\Group($group_id);
                    if (empty($group)) {
                        FlashMessages::add('Group not found', 'error');
                        return;
                    }

                    if (!$group->userCanPost($current_user_id)) {
                        FlashMessages::add('You are not a member of this group', 'error');
                        return;
                    }
                    break;
                case 'all-rnn-users':
                default:
                    break;
            }



            $args = array(
                'post_title' => $post_title,
                'post_content' => $post_content,
                'post_status' => 'publish',
                'post_author' => $current_user_id,
                'post_type' => 'post'
            );

            $post_id  =  wp_insert_post($args);

            // set post meta
            add_post_meta($post_id, 'audience', $audience);

            if ($audience == 'group') {
                add_post_meta($post_id, 'group_id', $group_id);
            }

            // handle image upload
            $uploaddir = wp_upload_dir();


            if (!empty($_FILES["post_image"])) {
                //FlashMessages::add( 'No image uploaded', 'error' );
                //return;

                $file = $_FILES["post_image"]["name"];
                $uploadfile = $uploaddir['path'] . '/' . basename($file);

                if (move_uploaded_file($_FILES["post_image"]["tmp_name"], $uploadfile)) {

                    $filename = basename($uploadfile);

                    $wp_filetype = wp_check_filetype(basename($filename), null);

                    $attachment = array(

                        'post_mime_type' => $wp_filetype['type'],
                        'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
                        'post_content' => '',
                        'post_status' => 'inherit',
                        //'menu_order' => $_i + 1000

                    );

                    $attach_id = wp_insert_attachment($attachment, $uploadfile);

                    set_post_thumbnail($post_id, $attach_id);
                }


                switch ($audience) {
                    case 'group':
                        // set a flash notification
                        
                        $notification = new \KCC\Notifications\GroupBlogPostNotification(
                            [
                                'group_id' => $group_id,
                                'post_id' => $post_id
                            ]
                        );

                        $notification->send();
                        break;
                    case 'all-rnn-users':
                        $notification = new \KCC\Notifications\PublicBlogPostNotification(
                            [
                                'post_id' => $post_id
                            ]
                        );

                        $notification->send();
                    default:
                        break;
                }

                FlashMessages::add('Blog post created successfully', 'success');
                header('Location: ' . $_SERVER["HTTP_REFERER"]);
                exit;
            }
        }
    }


    public function update_blog_post()
    {
        if (!empty($_POST['update_blog'])) {

            $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";
            $post_content = ($_POST['post_content']) ? $_POST['post_content'] : "";
            $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";
            $audience = ($_POST['audience']) ? sanitize_text_field($_POST['audience']) : "";
            $post_id = $_POST['post_id'];

            $current_user_id = get_current_user_id();


            switch ($audience) {

                case 'group':
                    $audience = 'group';
                    if (empty($group_id)) {
                        FlashMessages::add('Group ID not submitted', 'error');
                        return;
                    }
                    $group = new \KCC\Group($group_id);
                    if (empty($group)) {
                        FlashMessages::add('Group not found', 'error');
                        return;
                    }

                    if (!$group->userCanPost($current_user_id)) {
                        FlashMessages::add('You are not a member of this group', 'error');
                        return;
                    }
                    break;
                case 'all-rnn-users':
                default:
                    break;
            }



            $updatePostData = array(

                'ID' => $post_id,
                'post_title' => $post_title,
                'post_content' => $post_content,
                'post_status' => 'publish',
                'post_author' => $current_user_id,
            );

            wp_update_post($updatePostData);

            update_post_meta($post_id, 'audience', $audience);
            if($audience == 'group'){
                update_post_meta($post_id, 'group_id', $group_id);
            }
            



            //Set thumbnail image



            $uploaddir = wp_upload_dir();
            $file = $_FILES["blog_image"]["name"];
            $uploadfile = $uploaddir['path'] . '/' . basename($file);

            if (move_uploaded_file($_FILES["blog_image"]["tmp_name"], $uploadfile)) {
                $filename = basename($uploadfile);
                $wp_filetype = wp_check_filetype(basename($filename), null);
                $attachment = array(
                    'post_mime_type' => $wp_filetype['type'],
                    'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
                    'post_content' => '',
                    'post_status' => 'inherit',
                    'menu_order' => $_i + 1000
                );

                $delete = wp_delete_attachment($post_id, true);
                $attach_id = wp_insert_attachment($attachment, $uploadfile);
                set_post_thumbnail($post_id, $attach_id);
            }

            // add flash message saying blog post updated successfully
            FlashMessages::add('Blog post updated successfully', 'success');

            header('Location: ' . $_SERVER["HTTP_REFERER"]);

            exit;
        }
    }

    public function delete_blog_post()
    {
        if (!empty($_POST['delete_blog'])) {

            $post_id  =  $_POST['post_id'];

            wp_delete_post($post_id);

            // add flash message saying blog post deleted successfully
            FlashMessages::add('Blog post deleted successfully', 'success');

            header('Location: ' . $_SERVER["HTTP_REFERER"]);
            exit();
        }
    }

    public function send_blog_post_notification($post_id)
    {

        $group_id = get_post_meta($post_id, 'group_id', true);

        $notification = new \KCC\Notifications\GroupBlogPostNotification([
            'group_id' => $group_id,
            'post_id' => $post_id
        ]);
        $notification->send();
    }

    public function add_rewrites()
    {

        // make "blogs" go to the "post" post type archive page, i.e. the basic blog page
        add_rewrite_rule('^blogs/?$', 'index.php?post_type=post', 'top');
        add_rewrite_rule('^blogs/create/?$', 'index.php?pagename=blog-create', 'top');
        add_rewrite_rule('^blogs/([^/]+)/?$', 'index.php?pagename=blogs&name=$matches[1]', 'top');
        add_rewrite_rule('^blogs/([^/]+)/edit/?$', 'index.php?pagename=blog-edit&name=$matches[1]', 'top');
    }


    public function add_filters()
    {
        add_action('template_redirect', array($this, 'template_redirect'));
    }

    public function template_redirect()
    {

        if (is_page('blog-create')) {

            pre("hi");
            die;
            exit;
        }
    }
}
