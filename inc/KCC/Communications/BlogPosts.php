<?php

namespace KCC\Communications;

use \KCC\FlashMessages\FlashMessages;

class BlogPosts extends \jwc\Wordpress\WPCollection
{



    public function init()
    {
        parent::init();
        $this->create_blog_post();
        $this->update_blog_post();
        $this->delete_blog_post();
    }

    public function admin_init()
    {
        add_action('publish_post', array($this, 'send_blog_post_notification'), 10, 2);
    }

    // save an blog_post
    public function create_blog_post()
    {


        if (!empty($_POST['create_blog'])) {


            $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";
            $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";
            $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";
            $audience = ($_POST['audience']) ? sanitize_text_field($_POST['audience']) : "";

            $current_user_id = get_current_user_id();

            $group = new \KCC\Group($group_id);



            if (empty($group)) {
                FlashMessages::add('Group not found', 'error');
                return;
            }
            if (!$group->userCanPost($current_user_id)) {
                FlashMessages::add('You are not a member of this group', 'error');
                return;
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
            add_post_meta($post_id, 'group_id', $group_id);

            // handle image upload
            $uploaddir = wp_upload_dir();


            if (!empty($_FILES["group_image"])) {
                //FlashMessages::add( 'No image uploaded', 'error' );
                //return;

                $file = $_FILES["group_image"]["name"];
                $uploadfile = $uploaddir['path'] . '/' . basename($file);

                if (move_uploaded_file($_FILES["group_image"]["tmp_name"], $uploadfile)) {

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


                
                // set a flash notification
                FlashMessages::add('Blog post created successfully', 'success');
                $notification = new \KCC\Notifications\GroupBlogPostNotification(

                    [
                        'group_id' => $group_id,
                        'post_id' => $post_id
                    ]

                );

                $notification->send();

                //header('Location: '.$_SERVER["HTTP_REFERER"]);
            }







            //add_post_meta( $blog_id, 'ugroup_id', $ugroup_id);
            // M016: Blog Creation Notification to All Users
            // if ($audience == 'all_users') {
            //     die("now we are doing the system-wide blog post");

            //     $all_users = get_users();

            //     foreach ($all_users as $value) {

            //         $group_title  = get_the_title($group_id);

            //         $subject = "Blog Notification";

            //         $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@worldcares.org>' . "\r\n";

            //         $message = "
            //              Hi " . $value->display_name . ",\n
            //              A user has created a blog titled $post_title in the group $group_title.\n
            //              View Blog: " . get_permalink($blog_id) . "\n
            //              Thank You, Admin";
            //         $params = array(
            //             'subject' => $subject,
            //             'body' => $message,
            //             'to' => $value->user_email,
            //             'action_link' => get_permalink($blog_id),
            //             'user_id' => $value->ID,
            //             'post_id' => $blog_id
            //         );
            //         emailHandler($params);
            //         // wp_mail($value->user_email, $subject, $message, $headers);
            //     }





            //     add_post_meta($blog_id, 'blog_group_id', @$_POST['blog_group_id']);

            //     add_post_meta($blog_id, 'ugroup_id', $ugroup_id);
            // } else {
            //     $notification = new \KCC\Notifications\GroupBlogPostNotification([
            //         'group_id' => $group_id,
            //         'post_id' => $post_id
            //     ]);

            //     $notification->send();


            // }


            // THIS IS THE APPROVAL PROCESS

            // send email to admin
            //M017: Blog Approval Request to Admin
            // $adminUsers = get_users('role=Administrator');

            // foreach ($adminUsers as $value) {

            //     $adminEmail  = $value->user_email;
            //     $userInfo  =  get_userdata($value->ID);
            //     $message =  "A new blog titled $post_title has been created in the group $group_title. Please approve it from your admin dashboard.\n
            //     View Blog: " . site_url('my-dashboard') . "";
            //     $subject = 'Blog Notification';
            //     $header = "From:noreply@knowledge.communication.worldcares.org \r\n";

            //     $header .= "MIME-Version: 1.0\r\n";

            //     $header .= "Content-type: text/html\r\n";
            //     $params = array(
            //         'subject' => $subject,
            //         'body' => $message,
            //         'to' => $adminEmail,
            //         'action_link' => site_url('my-dashboard'),
            //         'user_id' => $value->ID
            //     );
            //     emailHandler($params);
            //     // wp_mail($adminEmail, $subject, $message, $header);
            // }
            // //  send email to blog user
            // // M018: Blog Submission Confirmation to User
            // $userDetail  =  get_userdata($current_user_id);
            // $userEmail  = $userDetail->user_email;
            // $message = "Your blog post titled $post_title has been submitted for approval. Once approved, it will be visible on your dashboard.";
            // $subject = 'Blog Notification';

            // $header = "From:noreply@knowledge.communication.worldcares.org \r\n";

            // $header .= "MIME-Version: 1.0\r\n";

            // $header .= "Content-type: text/html\r\n";
            // $params = array(
            //     'subject' => $subject,
            //     'body' => $message,
            //     'to' => $userEmail,
            //     'user_id' => $userDetail->ID
            // );
            // emailHandler($params);
            // // wp_mail($userEmail, $subject, $message, $header);
            // // Set thumbnail image
            // // header('Location: '.$_SERVER["HTTP_REFERER"]);

            // echo "<script>

            //         alert('Blog created successfully and sent to admin for approval !');

            //         window.location.href='" . site_url() . "/groups';

            //         </script>";

            
        }
    }


    public function update_blog_post()
    {
        if (!empty($_POST['update_blog_post'])) {

            $blog_post_id = ($_POST['edit_blog_id']) ? sanitize_text_field($_POST['edit_blog_id']) : "";

            $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

            $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

            $current_user_id = get_current_user_id();

            $updatePostData = array(

                'ID' => $blog_post_id,

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'blog_post'

            );

            wp_update_post($updatePostData);

            update_post_meta($blog_post_id, 'blog_post_group_id', @$_POST['ugroup_id']);



            //Set thumbnail image



            $uploaddir = wp_upload_dir();

            $file = $_FILES["group_image"]["name"];

            $uploadfile = $uploaddir['path'] . '/' . basename($file);



            if (move_uploaded_file($_FILES["group_image"]["tmp_name"], $uploadfile)) {

                $filename = basename($uploadfile);

                $wp_filetype = wp_check_filetype(basename($filename), null);

                $attachment = array(

                    'post_mime_type' => $wp_filetype['type'],

                    'post_title' => preg_replace('/\.[^.]+$/', '', $filename),

                    'post_content' => '',

                    'post_status' => 'inherit',

                    'menu_order' => $_i + 1000

                );

                $delete = wp_delete_attachment($blog_post_id, true);

                $attach_id = wp_insert_attachment($attachment, $uploadfile);

                set_post_thumbnail($blog_post_id, $attach_id);
            }


            // add flash message saying blog post updated successfully


            header('Location: ' . $_SERVER["HTTP_REFERER"]);

            exit;
        }
    }

    public function delete_blog_post()
    {
        if (!empty($_POST['delete_blog_post'])) {

            $post_id  =  $_POST['blog_id'];

            wp_delete_post($post_id);

            add_action('form_message', "blog_post Deleted Successfully");
        }
    }

    public function send_blog_post_notification($post_id)
    {

        $group_id = get_post_meta($post_id, 'group_id', true);

        $notification = new \KCC\Notifications\GroupBlogPostNotification([
            'group_id' => $group_id,
            'blog_post_id' => $post_id
        ]);
        $notification->send();
    }
}
