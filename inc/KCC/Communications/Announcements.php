<?php

namespace KCC\Communications;

use KCC\FlashMessages\FlashMessages;

class Announcements extends \jwc\Wordpress\WPCollection
{



    public function init()
    {
        parent::init();
        $this->create_announcement();
        $this->update_announcement();
        $this->delete_announcement();

        add_action('publish_announcement', array($this, 'send_announcement_notification'), 10, 2);



    }

    public function admin_init() {}

    public function register()
    {

        // Set UI labels for Custom Post Typ
        $labels = array(

            'name'                => _x('Announcements', 'Post Type General Name', 'kcc'),
            'singular_name'       => _x('Announcement', 'Post Type Singular Name', 'kcc'),
            'menu_name'           => __('Announcements', 'kcc'),
            'parent_item_colon'   => __('Parent Announcement', 'kcc'),
            'all_items'           => __('All Announcements', 'kcc'),
            'view_item'           => __('View Announcement', 'kcc'),
            'add_new_item'        => __('Add New Announcement', 'kcc'),
            'add_new'             => __('Add New', 'kcc'),
            'edit_item'           => __('Edit Announcement', 'kcc'),
            'update_item'         => __('Update Announcement', 'kcc'),
            'search_items'        => __('Search Announcements', 'kcc'),
            'not_found'           => __('Not Found', 'kcc'),
            'not_found_in_trash'  => __('Not found in Trash', 'kcc'),
        );



        // Set other options for Custom Post Type
        $args = array(
            'label'               => __('Announcement', 'kcc'),
            'description'         => __('Announcement', 'kcc'),
            'labels'              => $labels,
            'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'show_in_rest'        => true,
            // This is where we add taxonomies to our CPT

            'taxonomies'          => array('category'),

        );

        // Registering your Custom Post Type

        register_post_type('Announcement', $args);
    }

    // save an announcement
    public function create_announcement()
    {

        if (!empty($_POST['create_announcement'])) {

            $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

            $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

            $current_user_id = get_current_user_id();

            $wordpress_post = array(

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'announcement'

            );



            $announcement_id = wp_insert_post($wordpress_post);

            // validate $announcement_id
            if(!$announcement_id){
                FlashMessages::add('Announcement Creation Failed', 'error');
                header('Location: ' . $_SERVER["HTTP_REFERER"]);
                exit;
            }

    
            add_post_meta($announcement_id, 'announcement_group_id', $_POST['group_id']);

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

                $attach_id = wp_insert_attachment($attachment, $uploadfile);

                set_post_thumbnail($announcement_id, $attach_id);
            }

            
            $notification = new \KCC\Notifications\GroupAnnouncementNotification([
                'group_id' => $_POST['group_id'],
                'announcement_id' => $announcement_id
            ]);

            $notification->send();

            FlashMessages::add('Announcement Created Successfully', 'success');

            header('Location: ' . $_SERVER["HTTP_REFERER"]);

            exit;
        }
    }

    public function update_announcement()
    {
        if (!empty($_POST['update_announcement'])) {
    
            $announcement_id = ($_POST['edit_ann_id']) ? sanitize_text_field($_POST['edit_ann_id']) : "";
    
            $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";
    
            $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";
    
            $current_user_id = get_current_user_id();
    
            $updatePostData = array(
    
                'ID' => $announcement_id,
    
                'post_title' => $post_title,
    
                'post_content' => $post_content,
    
                'post_status' => 'publish',
    
                'post_author' => $current_user_id,
    
                'post_type' => 'announcement'
    
            );
    
            wp_update_post($updatePostData);
    
            update_post_meta($announcement_id, 'announcement_group_id', @$_POST['ugroup_id']);
    
    
    
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
    
                $delete = wp_delete_attachment($announcement_id, true);
    
                $attach_id = wp_insert_attachment($attachment, $uploadfile);
    
                set_post_thumbnail($announcement_id, $attach_id);
            }
    
    
    
            header('Location: ' . $_SERVER["HTTP_REFERER"]);
    
            exit;
        }
    }

    public function delete_announcement()
    {
    
        if (!empty($_POST['delete_announcement'])) {
    
            $post_id  =  $_POST['ann_id'];
    
            wp_delete_post($post_id);
    
            add_action('form_message', "Announcement Deleted Successfully");
        }
    }

    public function send_announcement_notification($post_id){

        $group_id = get_post_meta($post_id, 'announcement_group_id', true);

        $notification = new \KCC\Notifications\GroupAnnouncementNotification([
            'group_id' => $group_id,
            'announcement_id' => $post_id
        ]);
        $notification->send();

    }

}
