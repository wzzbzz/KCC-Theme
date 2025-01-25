<?php

/**

 * Developed By : AlexaGlobal SoftTech Pvt. Ltd.

 * URL : http://alexaglobalsofttech.com 

 *

 * @link https://developer.wordpress.org/themes/basics/theme-functions/

 *

 * @package Astra

 * @since 1.0.0

 */



if (! defined('ABSPATH')) {

    exit; // Exit if accessed directly.

}



/**

 * Define Constants

 */

define('ASTRA_THEME_VERSION', '3.9.4');

define('ASTRA_THEME_SETTINGS', 'astra-settings');

define('ASTRA_THEME_DIR', trailingslashit(get_template_directory()));

define('ASTRA_THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));

define('ASTRA_PRO_UPGRADE_URL', 'https://wpastra.com/pro/');



/**

 * Minimum Version requirement of the Astra Pro addon.

 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.

 */

define('ASTRA_EXT_MIN_VER', '3.9.2');



/**

 * Setup helper functions of Astra.

 */

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';

require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';

require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';



/**

 * Update theme

 */

require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';

require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';



/**

 * Fonts Files

 */

require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';

if (is_admin()) {

    require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}



require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';

require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';



require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';

require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';

require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';

require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';



/**

 * Custom template tags for this theme.

 */

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';

require_once ASTRA_THEME_DIR . 'inc/template-tags.php';



require_once ASTRA_THEME_DIR . 'inc/widgets.php';

require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';

require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';

require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';



/**

 * Markup Functions

 */

require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';

require_once ASTRA_THEME_DIR . 'inc/extras.php';

require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';

require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';

require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';



/**

 * Markup Files

 */

require_once ASTRA_THEME_DIR . 'inc/template-parts.php';

require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';

require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';



/**

 * Functions and definitions.

 */

require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';



// Required files.

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';



require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';



if (is_admin()) {

    /**

     * Admin Menu Settings

     */

    require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';

    require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}



/**

 * Metabox additions.

 */

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';



require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';



/**

 * Customizer additions.

 */

require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';



/**

 * Astra Modules.

 */

require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';



/**

 * Compatibility

 */

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';

require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';

require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';

require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';

require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';



// Elementor Compatibility requires PHP 5.4 for namespaces.

if (version_compare(PHP_VERSION, '5.4', '>=')) {

    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';

    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';

    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}



// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.

if (version_compare(PHP_VERSION, '5.3', '>=')) {

    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}



require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';



/**

 * Load deprecated functions

 */

require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';

require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';

require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';



// add_action( 'wp_enqueue_scripts',  'ioh_enqueue_scripts', 999);

// function ioh_enqueue_scripts()

// {

//     wp_deregister_script('um_conditional');

//     wp_register_script('um_conditional', get_template_directory() . '/js/um-conditional.min.js', array('jquery', 'jquery-masonry'), 1, true);

// }


/* Utility code to display the name of the PHP file and path */
function display_file_path() {
    if (defined('SHOW_FILE_PATH') && SHOW_FILE_PATH) {
        // Use debug_backtrace to get the correct file if called from another function
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
        $current_file = $backtrace[0]['file'];

        echo '<div style="background-color: #fdd; color: #900; padding: 6px; font-family: monospace; z-index: 9999; position: absolute; top: 0; left: 0; padding: 5px;">';
        echo 'Current File: ' . $current_file;
        echo '</div>';
    }
}

if (defined('SHOW_FILE_PATH') && SHOW_FILE_PATH) {
    add_filter('template_directory_uri', function($uri) {
        return str_replace('https://knowledge.communication.worldcares.org', 'https://localhost', $uri);
    }, 1); // Set priority to 1, higher priority
}







function custom_post_type()
{



    // Set UI labels for Custom Post Type

    $labels = array(

        'name'                => _x('Announcement', 'Post Type General Name', 'twentythirteen'),

        'singular_name'       => _x('Announcement', 'Post Type Singular Name', 'twentythirteen'),

        'menu_name'           => __('Announcement', 'twentythirteen'),

        'parent_item_colon'   => __('Parent Announcement', 'twentythirteen'),

        'all_items'           => __('All Announcement', 'twentythirteen'),

        'view_item'           => __('View Announcement', 'twentythirteen'),

        'add_new_item'        => __('Add New Announcement', 'twentythirteen'),

        'add_new'             => __('Add New', 'twentythirteen'),

        'edit_item'           => __('Edit Announcement', 'twentythirteen'),

        'update_item'         => __('Update Announcement', 'twentythirteen'),

        'search_items'        => __('Search Announcement', 'twentythirteen'),

        'not_found'           => __('Not Found', 'twentythirteen'),

        'not_found_in_trash'  => __('Not found in Trash', 'twentythirteen'),

    );



    // Set other options for Custom Post Type



    $args = array(

        'label'               => __('Announcement', 'twentythirteen'),

        'description'         => __('Announcement', 'twentythirteen'),

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



/* Hook into the 'init' action so that the function

* Containing our post type registration is not 

* unnecessarily executed. 

*/



add_action('init', 'custom_post_type', 0);

// add_action( 'um_registration_complete', 'um_registration_complete_custom', 10, 2 );



// function um_registration_complete_custom( $user_id, $args ) {



//     $url = 'http://159.65.151.159/wcc/signup/login/';

//     exit( wp_redirect( $url ) );

// }







//--------------------new tab ultimate member--------------- 





/* add new tab called "mytab" */



add_filter('um_account_page_default_tabs_hook', 'my_custom_tab_in_um', 100);

function my_custom_tab_in_um($tabs)
{

    $tabs[800]['helpSupport']['icon'] = 'um-faicon-pencil';

    $tabs[800]['helpSupport']['title'] = 'Help & Support';

    $tabs[800]['helpSupport']['custom'] = true;

    return $tabs;
}



/* make our new tab hookable */



add_action('um_account_tab__helpSupport', 'um_account_tab__helpSupport');

function um_account_tab__helpSupport($info)
{

    global $ultimatemember;

    extract($info);



    $output = $ultimatemember->account->get_tab_output('helpSupport');

    if ($output) {
        echo $output;
    }
}





function send_group_request_callback_function()
{

    global $wpdb;



    $group_id = $_POST['group_id'];

    $current_user_id = get_current_user_id();

    $groupDetail = get_post($group_id);

    $member_id = $groupDetail->post_author;



    // echo 'vinay'; 

    $user = get_user_by('ID', $member_id);

    $groupOwnerEmail = $user->user_email;

    $requestedFrom  = get_user_by('ID', $current_user_id);

    $myArr = array();

    $sql = "SELECT * FROM group_invite WHERE group_id = '" . $group_id . "' AND invited_to = '" . $member_id . "' AND invited_from ='" . $current_user_id . "' ";

    $check = $wpdb->get_results($sql, ARRAY_A);

    $myArr['sql'] = $sql;

    $myArr['ums'] = $check;

    if (count($check) > 0) {

        $myArr['msg'] = "Already Requested";

        $myJSON = json_encode($myArr);

        echo $myJSON;

        die();
    }



    $tablename =  'group_invite';

    $current_user_id = get_current_user_id();

    $group_id = ($_POST['group_id']) ? $group_id : "";

    $insertData = array(

        'invited_to' => $member_id,

        'invited_from' => $current_user_id,

        'status' => 'pending',

        'request_type' => 'join_request',

        'group_id' => $group_id

    );



    $dd = $wpdb->insert('group_invite', $insertData);



    /*email to group owner*/

    $subject = "User Join Notification";

    $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@worldcares.org>' . "\r\n";

    $message = "

                    Hi " . $user->display_name . ",

                    A user $requestedFrom->display_name has requested to join your group $groupDetail->post_title.Please accept/reject user invitation from your My Dashboard section.

                    View Invitation: " . site_url('my-dashboard') . "

                    Thank You, Admin";

    wp_mail($groupOwnerEmail, $subject, $message, $headers);



    /*email to group owner*/



    $myArr['sql'] = $dd;

    $myArr['msg'] = "Request sent successfully";

    $myJSON = json_encode($myArr);

    echo $myJSON;

    die();
}

add_action('wp_ajax_send_group_request', 'send_group_request_callback_function');    // If called from admin panel

add_action('wp_ajax_nopriv_send_group_request', 'send_group_request_callback_function');    // If called from front end









function accept_group_request_callback_function()
{

    global $wpdb;

    $group_id = $_POST['group_id'];

    $member_id = $_POST['uid'];

    $id = $_POST['id'];

    $myArr = array();

    $responseData = $wpdb->update('group_invite', array('status' => 'accepted'), array('id' => $id, 'group_id' => $group_id));

    if (isset($member_id)) {

        if (! empty($group_id)) {

            ld_update_group_access($member_id, $group_id);

            //  $deleteData = $wpdb->delete('group_invite', array('id' => $id,'group_id'=>$group_id));

            //  $myArr['deleteData'] = $deleteData;



        }
    }

    $myArr['responseData'] = $responseData;

    $myArr['msg'] = "Accepted";

    $myJSON = json_encode($myArr);

    echo $myJSON;

    die();

    // Implement ajax function here

}

add_action('wp_ajax_accept_group_request', 'accept_group_request_callback_function');

add_action('wp_ajax_nopriv_accept_group_request', 'accept_group_request_callback_function');







function reject_group_request_callback_function()
{

    global $wpdb;

    $group_id = $_POST['group_id'];

    $current_user_id = get_current_user_id();

    $member_id = $_POST['uid'];

    $id = $_POST['id'];

    $myArr = array();

    $responseData = $wpdb->delete('group_invite', array('id' => $id, 'group_id' => $group_id));

    $myArr['responseData'] = $responseData;

    $myArr['msg'] = "Deleted";

    $myJSON = json_encode($myArr);

    echo $myJSON;

    die();

    // Implement ajax function here

}

add_action('wp_ajax_reject_group_request', 'reject_group_request_callback_function');

add_action('wp_ajax_nopriv_reject_group_request', 'reject_group_request_callback_function');





function join_open_group()
{

    /*  global $wpdb; 

        $tablename = 'group_invite';*/

    $current_date = date('Y-m-d');



    $group_id = $_POST['group_id'];

    $current_user_id = get_current_user_id();

    $responseData = array();

    $responseData['joinedStatus'] = ld_update_group_access($current_user_id, $group_id);

    /*$data = array(

              'group_id' => $group_id,

              'joined_open_user' => $current_user_id,

              'status'  => 'joined',

              'created_at'  => $current_date

            );

          $wpdb->insert( $tablename, $data);*/



    update_user_meta($current_user_id, 'joining_date', $current_date);

    $responseData['msg'] = "joined";

    $responseData['group_url'] =  get_permalink($group_id);



    $response = json_encode($responseData);

    echo $response;

    die();
}

add_action('wp_ajax_join_open_group', 'join_open_group');

add_action('wp_ajax_nopriv_join_open_group', 'join_open_group');











function invite_group_request_callback_function()
{

    global $wpdb;

    $responseData = array();

    $group_id = sanitize_text_field($_POST['group_id']);

    $member_id = sanitize_text_field($_POST['mid']);

    $current_user_id = get_current_user_id();

    $group_title  = get_the_title($group_id);



    $sql = "SELECT * FROM group_invite WHERE group_id = '" . $group_id . "' AND invited_to = '" . $member_id . "' AND invited_from ='" . $current_user_id . "' ";



    $check = $wpdb->get_results($sql, ARRAY_A);

    $responseData['sql'] = $sql;

    $responseData['ums'] = $check;

    if (count($check) > 0) {

        $responseData['msg'] = "Already Requested";

        $responseJson = json_encode($responseData);

        echo $responseJson;

        die();
    }





    $postData = array(

        'invited_to' => $member_id,

        'invited_from' => $current_user_id,

        'status' => 'pending',

        'group_id' => $group_id,





    );



    $wpdb->insert('group_invite', $postData);

    $responseData['responseData'] = $responseData;

    $responseData['msg'] = "Invited";

    $responseData['success'] = "User Invited Successfully.";

    $responseJson = json_encode($responseData);



    /*send email to invited user*/



    $user = get_user_by('id', $member_id);

    $userEmail = $user->user_email;

    $subject = "Group Member Invitation  Notification";

    $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";

    $message = "

                Hi " . $user->display_name . ",

                

                You are invited in the group $group_title. Please accept/reject invitation from My Contacts in My Dashboard section. 



                View Invitation: " . site_url('my-dashboard') . "

                

                Thank You, Admin";

    wp_mail($userEmail, $subject, $message, $headers);



    /*send email too invited user*/



    echo $responseJson;



    die();
}

add_action('wp_ajax_invite_group_request', 'invite_group_request_callback_function');

add_action('wp_ajax_nopriv_invite_group_request', 'invite_group_request_callback_function');





function follow_member_callback_function()
{

    global $wpdb;

    $responseData = array();

    $group_id = sanitize_text_field($_POST['group_id']);

    $member_id = sanitize_text_field($_POST['mid']);

    $current_user_id = get_current_user_id();



    $sql = "SELECT * FROM member_follow WHERE group_id = '" . $group_id . "' AND invited_to = '" . $member_id . "' AND invited_from ='" . $current_user_id . "' ";

    $check = $wpdb->get_results($sql, ARRAY_A);

    $responseData['sql'] = $sql;

    $responseData['ums'] = $check;

    if (count($check) > 0) {

        $responseData['msg'] = "Following";

        $responseJson = json_encode($responseData);

        echo $responseJson;

        die();
    }



    $insertData = array(

        'invited_to' => $member_id,

        'invited_from' => $current_user_id,

        'status' => 'pending',

        'group_id' => $group_id

    );

    $wpdb->insert('member_follow', $insertData);

    $responseData['responseData'] = $responseData;

    $responseData['msg'] = "Following";

    $responseJson = json_encode($responseData);

    echo $responseJson;

    die();
}

add_action('wp_ajax_follow_member', 'follow_member_callback_function');

add_action('wp_ajax_nopriv_follow_member', 'follow_member_callback_function');





function remove_member_callback_function()
{

    global $wpdb;

    $responseData = array();

    $group_id = sanitize_text_field($_POST['group_id']);

    $member_id = sanitize_text_field($_POST['mid']);

    $current_user_id = get_current_user_id();



    ld_update_group_access($member_id, $group_id, true);

    $uu = $wpdb->delete('member_follow', array('invited_to' => $member_id, 'group_id' => $group_id));





    $responseData['responseData'] = $uu;

    $responseData['msg'] = "Removed";

    $responseJson = json_encode($responseData);

    echo $responseJson;

    die();
}

add_action('wp_ajax_remove_member', 'remove_member_callback_function');

add_action('wp_ajax_nopriv_remove_member', 'remove_member_callback_function');









function lmuser_add_in_group_callback_function()
{

    global $wpdb;



    $group_id = $_POST['group_id'];

    $invited_to = $_POST['invited_to'];

    $invited_from = $_POST['invited_from'];

    $group_title  = get_the_title($group_id);



    $current_user_id = get_current_user_id();

    $member_id = $_POST['invited_to'];

    $id = $_POST['id'];

    $myArr = array();

    $responseData = $wpdb->update('group_invite', array('status' => 'accepted'), array('invited_from' => $invited_from, 'invited_to' => $invited_to, 'group_id' => $group_id));



    /*send email to invited from user for accept or reject*/



    $invitedUser = get_user_by('id', $invited_to);

    $user = get_user_by('id', $invited_from);

    $invitedFromEmail = $user->user_email;



    $subject = "Group Invitation Request Notification";

    $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";

    $message = "

                Hi " . $user->display_name . ",

                

                User $invitedUser->display_name, has accepted the request for the group $group_title.You can see under My Group section in user dashboard.

                

                View Report: " . site_url('my-dashboard') . "

                

                Thank You, Admin";

    wp_mail($invitedFromEmail, $subject, $message, $headers);



    /*send email to invited from user for accept or reject*/









    if (isset($member_id)) {

        $group_id = absint($group_id);

        if (! empty($group_id)) {

            ld_update_group_access($member_id, $group_id);

            //$wpdb->delete('group_invite', array('invited_to' => $invited_from,'group_id'=>$group_id));



            $deleteData = $wpdb->delete('group_invite', array('id' => $id, 'group_id' => $group_id));

            $myArr['deleteData'] = $deleteData;
        }
    }

    $myArr['responseData'] = $responseData;

    $myArr['msg'] = "Accepted";

    $myJSON = json_encode($myArr);

    echo $myJSON;

    die();
}

add_action('wp_ajax_lmuser_add_in_group', 'lmuser_add_in_group_callback_function');

add_action('wp_ajax_nopriv_lmuser_add_in_group', 'lmuser_add_in_group_callback_function');







function lmuser_detail()
{

    global $wpdb;

    $responseData = array();

    $uid = sanitize_text_field($_POST['uid']);

    $groupList = learndash_get_users_group_ids($uid);

    $responseData['groupList'] = count($groupList);

    $responseData['ownerInfo']  = get_userdata($uid);

    $responseData['avatar_url'] = get_avatar_url($uid,   array("size" => 50));

    $responseData['msg'] = "Removed";

    $responseJson = json_encode($responseData);

    echo $responseJson;

    die();
}

add_action('wp_ajax_lmuser_detail', 'lmuser_detail');

add_action('wp_ajax_nopriv_lmuser_detail', 'lmuser_detail');





function dashboard_image_upload()
{

    global $wpdb;

    if (!empty($_POST['action']) && $_POST['action'] == 'dashboard_image_upload') {

        $responseData = array();

        $responseData['msg'] = $_FILES;

        $uploaddir = wp_upload_dir();



        if (is_array($_FILES)) {

            if (is_uploaded_file($_FILES['imageUpload']['tmp_name'])) {

                $sourcePath = $_FILES['imageUpload']['tmp_name'];

                $targetPath = $uploaddir['path'] . '/' . $_FILES['imageUpload']['name'];

                if (move_uploaded_file($sourcePath, $targetPath)) {

                    $responseData['msg'] = $targetPath;
                }
            }
        }



        $responseJson = json_encode($responseData);

        echo $responseJson;

        die();
    }
}

add_action('wp_ajax_dashboard_image_upload', 'dashboard_image_upload');

add_action('wp_ajax_nopriv_dashboard_image_upload', 'dashboard_image_upload');

add_action('ini', 'dashboard_image_upload');



function checkUserFollowing($group_id, $member_id)
{

    global $wpdb;

    $current_user_id = get_current_user_id();

    $sql = "SELECT id FROM member_follow WHERE group_id = '" . $group_id . "' AND invited_to = '" . $member_id . "' AND invited_from ='" . $current_user_id . "' ";

    $check = $wpdb->get_results($sql, ARRAY_A);

    if (count($check) > 0) {

        return true;
    } else {

        return false;
    }
}



function checkMemberFollowing($member_id)
{

    global $wpdb;

    $current_user_id = get_current_user_id();

    $sql = "SELECT id FROM member_follow WHERE invited_to = '" . $member_id . "' AND invited_from ='" . $current_user_id . "' ";

    $check = $wpdb->get_results($sql, ARRAY_A);

    if (count($check) > 0) {

        return true;
    } else {

        return false;
    }
}



function myFollowing()
{

    global $wpdb;

    $current_user_id = get_current_user_id();

    $sql = "SELECT id FROM member_follow WHERE invited_from ='" . $current_user_id . "' ";

    $check = $wpdb->get_results($sql, ARRAY_A);

    if (count($check) > 0) {

        return count($check);
    } else {

        return 0;
    }
}





function getFollowers($member_id)
{

    global $wpdb;

    $sql = "SELECT id FROM member_follow WHERE (invited_to = '" . $member_id . "' OR invited_from ='" . $member_id . "') ";

    $check = $wpdb->get_results($sql, ARRAY_A);

    echo count($check);
}



/* Finally we add some content in the tab */



add_filter('um_account_content_hook_helpSupport', 'um_account_content_hook_helpSupport');

function um_account_content_hook_helpSupport($output)
{

    ob_start();

?>



    <div class="um-field">



        <div class="col-xl-11 col-lg-11 col-md-11">

            <div class="title_profile">

                <div class="top_profile">

                    <div class="d-flex align-items-center">

                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/help_support.png" class="img-fluid mr-2">

                        <h4>Help &amp; Support test</h4>

                    </div>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                </div>

                <div class="mian_faq_sec mt-4">

                    <div class="serch_sec_top" id="serch_sec_top">

                        <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search for your questions">

                    </div>



                    <?php

                    $post_type = 'faqs';



                    // Get all the taxonomies for this post type

                    $taxonomies = get_object_taxonomies(array('post_type' => $post_type));



                    foreach ($taxonomies as $taxonomy) :



                        // Gets every "category" (term) in this taxonomy to get the respective posts

                        $terms = get_terms($taxonomy); ?>



                        <ul class="nav nav-pills mt-3 mb-3" id="pills-tab" role="tablist">



                            <?php foreach ($terms as $iterm => $term) : ?>

                                <li class=" nav-item post-loop postcls-trigger <?= $iterm == 0 ? 'active' : '' ?>" data-id="pills-<?php echo $term->slug; ?>">

                                    <a class="nav-link <?= $iterm == 0 ? 'active' : '' ?>" id="pills-<?php echo $term->slug; ?>-tab" data-toggle="pill" href="#pills-<?php echo $term->slug; ?>" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo $term->name; ?></a>

                                </li>

                            <?php endforeach; ?>



                        </ul>





                        <div class="tab-content" id="pills-tabContent">





                            <?php foreach ($terms as $iterm => $term) : ?>

                                <?php

                                $args = array(

                                    'post_type' => $post_type,

                                    'posts_per_page' => -1,  //show all posts

                                    'tax_query' => array(

                                        array(

                                            'taxonomy' => $taxonomy,

                                            'field' => 'slug',

                                            'terms' => $term->slug,

                                        )

                                    )



                                );

                                $posts = new WP_Query($args);



                                if ($posts->have_posts()): ?>



                                    <div class="tab-pane fade show <?= $iterm == 0 ? 'active' : '' ?> accordian_Sec" role="tabpanel" id="pills-<?php echo $term->slug; ?>">

                                        <div class="row">

                                            <?php while ($posts->have_posts()) : $posts->the_post(); ?>



                                                <div class="col-xl-5">

                                                    <div class="card ">

                                                        <?php $collapseid = get_field('collapse_id'); ?>

                                                        <div class="card-header" id="heading4">

                                                            <h5 class="mb-0 panel-title">

                                                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#<?php echo $collapseid; ?>" aria-expanded="false" aria-controls="collapseTwo">

                                                                    <?php the_title(); ?>

                                                                </button>

                                                            </h5>

                                                        </div>

                                                        <div id="<?php echo $collapseid; ?>" class="collapse" aria-labelledby="heading4" data-parent="#accordion">

                                                            <div class="card-body">

                                                                <?php the_content(); ?>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>



                                            <?php endwhile; ?>

                                        </div>

                                    </div>



                                <?php endif; ?>

                            <?php endforeach; ?>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>



        </div>

    </div>



<?php



    $output .= ob_get_contents();

    ob_end_clean();

    return $output;
}



function searchfilter($query)
{

    if ($query->is_search && !is_admin()) {

        if (isset($_GET['post_type'])) {

            $type = $_GET['post_type'];

            if ($type == 'Announcement') {

                $query->set('post_type', array('Announcement'));
            }
        }
    }

    return $query;
}

add_filter('pre_get_posts', 'searchfilter');





add_action('um_after_form', 'my_after_form', 10, 1);

function my_after_form($args) {}

// Register a new user via REST API

add_action('rest_api_init', function () {

    register_rest_route('user/v1', '/register', array(

        'methods' => 'POST',

        'callback' => 'myplugin_register_user',

    ));
});



function myplugin_register_user($request)
{

    global $wpdb;

    session_start();

    $params = $request->get_params();



    $uarr = explode("@", $params['user_email']);



    $username = $uarr[0];

    $email = $params['user_email'];

    //$password = md5($params['user_password']);

    $password =  $params['user_password'];





    // Generate OTP and send email

    $otp = generate_otp();

    $message = 'Your verification code is: ' . $otp;

    $subject = 'OTP Verification';

    $header = "From:noreply@thatappdev.space \r\n";

    $header .= "MIME-Version: 1.0\r\n";

    $header .= "Content-type: text/html\r\n";

    wp_mail($email, $subject, $message, $header);



    $wpdb->insert('temp_users', array(

        'user_email' => $email,

        // 'user_pass'  => $password,

        'user_otp'  => $otp,

    ));

    $user_id = $wpdb->insert_id;

    $_SESSION['userID'] = $user_id;

    $_SESSION['user_email'] = $email;

    $_SESSION['password']   = $password;

    $_SESSION['otp']   = $otp;





    if (is_wp_error($user_id)) {

        return new WP_Error('registration_failed', $user_id->get_error_message(), array('status' => 200));
    }





    return array('success' => true, 'email' => $email);
}



// Verify OTP via REST API

add_action('rest_api_init', function () {

    register_rest_route('user/v1', '/verify', array(

        'methods' => 'POST',

        'callback' => 'myplugin_verify_otp',

    ));
});



function myplugin_verify_otp($request)
{

    session_start();

    global $wpdb;



    $params = $request->get_params();

    $email = $params['email'];

    $uarr = explode("@", $email);

    $username = $uarr[0];

    $otp = $params['number1'] . $params['number2'] . $params['number3'] . $params['number4'];

    $myUserID = $_SESSION['userID'];

    $myEmail  = $_SESSION['user_email'];

    $myPassword = $_SESSION['password'];

    $myOTP = $_SESSION['otp'];



    if ($otp != $myOTP) {

        echo "<script>alert('Sorry! Invalid OTP.')</script>";

        return new WP_Error('invalid_otp', 'Invalid OTP.', array('status' => 200));
    }

    // OTP verified, log user in



    $user_id = wp_create_user($username, $myPassword, $myEmail);



    /*$wpdb->insert('wp_users', array(

                'user_email' => $myEmail,

                'user_pass'  => $myPassword, 

                'user_nicename' => $username,

                'display_name'  => $username,

            ));

        */



    $user = get_user_by('email', $email);

    wp_set_current_user($user->ID);

    wp_set_auth_cookie($user->ID);

    return array('success' => true);
}



// Helper function to generate OTP

function generate_otp()
{

    $otp = rand(1000, 9999);

    return $otp;
}



/*resend OTP */



function resend_OTP($query)
{

    global $wpdb;

    session_start();

    if (!empty($_POST['resend_OTP'])) {

        $email  =  $_POST['email'];

        $email1 = $_GET['email'];

        $user = get_user_by('email', $email);

        $userId = $user->ID;

        $otp = generate_otp();

        $message = 'Your verification code is: ' . $otp;

        $subject = 'OTP Verification';

        $header = "From:noreply@thatappdev.space \r\n";

        $header .= "MIME-Version: 1.0\r\n";

        $header .= "Content-type: text/html\r\n";

        wp_mail($email, $subject, $message, $header);

        $_SESSION['otp'] = $otp;

        $wpdb->update('temp_users', array('user_otp' => $otp), array('user_email' => $email));

        // update_user_meta($userId, 'user_otp', $otp);

    }
}

add_action('init', 'resend_OTP');





function forgot_OTP($query)
{

    if (!empty($_POST['forgot_OTP'])) {

        $email  =  $_POST['email'];

        $user = get_user_by('email', $email);

        $userId = $user->ID;

        $otp = generate_otp();

        $message = '<b> Forgot Password OTP </b><br/>';

        $message = 'Your verification code is: ' . $otp;

        $subject = 'OTP Verification';

        $header = "From:noreply@thatappdev.space \r\n";

        $header .= "MIME-Version: 1.0\r\n";

        $header .= "Content-type: text/html\r\n";

        wp_mail($email, $subject, $message, $header);

        update_user_meta($userId, 'user_otp', $otp);

        header('Location: ' . site_url('verify-otp') . "?email=" . $email);

        // header('Location: '.site_url('verify-otp'));

        exit;
    }
}

add_action('init', 'forgot_OTP');







function verify_OTP($query)
{

    if (!empty($_POST['verify_OTP'])) {



        $email = $_POST['email'];

        $otp = $_POST['number1'] . $_POST['number2'] . $_POST['number3'] . $_POST['number4'];

        // Get OTP from user meta data

        $stored_otp = get_user_meta(get_user_by('email', $email)->ID, 'user_otp', true);

        if ($otp != $stored_otp) {

            return new WP_Error('invalid_otp', 'Invalid OTP-1.', array('status' => 200));
        } else {

            header('Location: ' . site_url('password-reset') . "?email=" . $email);

            exit;
        }
    }
}

add_action('init', 'verify_OTP');



function update_Password($query)
{

    if (!empty($_POST['update_Password'])) {



        $email  =  $_POST['email'];

        $user = get_user_by('email', $email);

        $userId = $user->ID;

        $user_pass = $_POST['password'];



        $userdata = [

            'ID'        => $userId,

            'user_pass' => $user_pass

        ];

        wp_update_user($userdata);

        header('Location: ' . site_url('login'));

        exit;
    }
}

add_action('init', 'update_Password');











//add_filter("views_users", "dt_list_table_views");

function dt_list_table_views($views)
{

    $users = count_users();

    $admins_num = $users['avail_roles']['administrator'] - 1;

    $all_num = $users['total_users'] - 1;

    $class_adm = (strpos($views['administrator'], 'current') === false) ? "" : "current";

    $class_all = (strpos($views['all'], 'current') === false) ? "" : "current";

    $views['administrator'] = '<a href="users.php?role=administrator" class="' . $class_adm . '">' . translate_user_role('Administrator') . ' <span class="count">(' . $admins_num . ')</span></a>';

    $views['all'] = '<a href="users.php" class="' . $class_all . '">' . __('All') . ' <span class="count">(' . $all_num . ')</span></a>';

    return $views;
}



function get_courses($atts)
{

    ob_start();

    get_template_part('block-my-courses');

    return ob_get_clean();
}

add_shortcode('courses', 'get_courses');



function get_dashboard($atts)
{

    ob_start();

    get_template_part('user_dashboard');

    return ob_get_clean();
}

add_shortcode('get_dashboard', 'get_dashboard');



wp_enqueue_style('custom_css_file', get_template_directory_uri() . '/css/custom.css', false, '1.1', 'all');

wp_enqueue_style('custom_css_file', get_template_directory_uri() . '/css/wcc_custom_style.css', false, 'all');





//wp_enqueue_style( 'custom_css_file', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

function wpCustomStyleSheet()
{



    wp_register_style('adminCustomStyle', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '1.0.0');

    wp_enqueue_style('adminCustomStyle');
}

add_action('admin_enqueue_scripts', 'wpCustomStyleSheet');





function ums_create_group()
{

    if (!empty($_POST['ums_create_group'])) {

        global $wpdb;

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $sql =  "SELECT * FROM wp_posts WHERE post_type ='groups' AND post_status ='publish'";

        //$allGroups = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_type ='groups' AND post_status ='publish'" );

        $allGroups = $wpdb->get_results($sql);



        /*Start loop*/

        foreach ($allGroups as $value) {

            $oldGroup  = $value->post_title;



            if ($post_title == $oldGroup) {

                echo "<script>

                alert('This group name has been already taken, Please try with other name. ');

                window.location.href='https://knowledge.communication.worldcares.org/wccgroups';

                </script>";
            }
        }



        /*end loop*/



        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $post_type   =  'groups';

        $post_status  =  'pending';

        $group_type   =  ($_POST['group_type']) ? sanitize_text_field($_POST['group_type']) : "";

        $taxonomy    =   'ld_group_category';

        $current_user_id = get_current_user_id();

        $wordpress_post = array(

            'post_title' => $post_title,

            'post_content' => $post_content,

            'post_status' => 'pending',

            'post_author' => $current_user_id,

            'post_type' => 'groups',

            'post_category' => array($group_type)

        );

        $group_id =     wp_insert_post($wordpress_post);



        //ld_update_group_access( $current_user_id, $group_id );

        add_post_meta($group_id, 'group_type', $group_type);

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

            set_post_thumbnail($group_id, $attach_id);
        }



        // send email to admin 

        $adminUsers = get_users('role=Administrator');


/*
        foreach ($adminUsers as $value) {
            $subject = "Group Approval Request Notification";
            $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";
            $message = "
                Hi " . $value->display_name . ",
        
                A user has created the group with title, <strong>$post_title</strong>. Please approve it from your admin dashboard.
        
                You can approve the group directly here: " . site_url('wp-admin/edit.php?post_type=groups') . "  
        
                Thank You, Admin";
        
            wp_mail($value->user_email, $subject, $message, $headers);
        }
        */
        

        foreach ($adminUsers as $value) {
            $subject = "Group Approval Request Notification";
            $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";
            $headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
            
            $message = "
                <p>Hi " . $value->display_name . ",</p>
                <p>A user has created the group with title, <strong>$post_title</strong>. Please approve it from your admin dashboard.</p>
                <p>You can approve the group directly here: <a href=\"" . site_url('wp-admin/edit.php?post_type=groups') . "\">Go to Admin Dashboard</a></p>
                <p>To <i>approve</i> it you need to select 'Edit' and from the Edit page select to 'Publish'. A Published group means it was approved. </p>
               <p>Thank You, Admin</p>";
        
            wp_mail($value->user_email, $subject, $message, $headers);
        }
        

        //  send email to group user

        $userDetail  =  get_userdata($current_user_id);

        $userEmail  = $userDetail->user_email;

        $group_title  = get_the_title($group_id);

        $subject = "Group Notification";

        $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@worldcares.org>' . "\r\n";

        $message = "

                    Hi " . $userDetail->display_name . ",

                    Your $group_type Group $post_title has been submitted for approval. Once approved, you will see the group on your dashboard.

                    View Report: " . site_url('wccgroups') . "

                    Thank You.";

        wp_mail($userEmail, $subject, $message, $headers);



        echo "<script>

                alert('Group created successfully and sent to admin for approval !');

                window.location.href='https://knowledge.communication.worldcares.org/wccgroups';

                </script>";

        exit;
    }
}

add_action('init', 'ums_create_group');



function ums_update_group()
{

    if (!empty($_POST['ums_update_group'])) {

        $group_id = $_POST['group_id'];

        $current_user_id = get_current_user_id();

        $groupDetail = get_post($group_id);

        if ($current_user_id != $groupDetail->post_author) {

            add_action('flash_msg', "You can only update created by your group");

            header('Location: ' . $_SERVER["HTTP_REFERER"]);

            exit;
        }



        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $post_type   =  'groups';

        $post_status  =  'publish';

        $group_type   =  ($_POST['group_type']) ? sanitize_text_field($_POST['group_type']) : "";

        $taxonomy    =   'ld_group_category';



        $updateData = array(

            'ID' => $group_id,

            'post_title' => $post_title,

            'post_content' => $post_content,

            'post_status' => 'publish',

            'post_author' => $current_user_id,

            'post_type' => 'groups',

            'post_category' => array($group_type)

        );



        wp_update_post($updateData);

        update_post_meta($group_id, 'group_type', $group_type);



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

            set_post_thumbnail($group_id, $attach_id);
        }

        header('Location: ' . site_url('wccgroups'));

        exit;
    }
}

add_action('init', 'ums_update_group');





function ums_create_resource()
{

    //print_r($_POST);die();

    if (!empty($_POST['ums_create_resource']) && !empty($_POST['title'])) {



        $post_title = ($_POST['title']) ? sanitize_text_field($_POST['title']) : "";

        $post_content = ($_POST['organization']) ? sanitize_text_field($_POST['organization']) : "";

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        $rf_publish = ($_POST['rf_publish']) ? sanitize_text_field($_POST['rf_publish']) : "";



        $current_user_id = get_current_user_id();

        $postData = array(

            'post_title' => $post_title,

            'post_content' => $post_content,

            'post_status' => 'publish',

            'post_author' => $current_user_id,

            'post_type' => 'resources'

        );



        if ($_POST['ums_create_resource'] == "ums_create_resource") {

            $resource_id =     wp_insert_post($postData);





            if ($rf_publish == 'all_rrn_users') {

                //$groupDetail = get_posts( $group_id );

                $all_users = get_users();



                foreach ($all_users as $value) {

                    $group_title  = get_the_title($group_id);

                    $subject = "Resource Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@worldcares.org>' . "\r\n";

                    $message = "

                    Hi " . $value->display_name . ",

                    A new resource, $post_title has just been published  to, $group_title group you are a member of.

                    Thank You, Admin";

                    wp_mail($value->user_email, $subject, $message, $headers);
                }

                add_post_meta($resource_id, 'rf_publish', @$_POST['$rf_publish']);
            } else {

                $allGroupUserID  = learndash_get_groups_user_ids($rf_publish);

                foreach ($allGroupUserID as $USERID) {

                    $user = get_user_by('id', $USERID);

                    $groupUserEmail = $user->user_email;



                    $subject = "Resource Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";

                    $message = "

                    Hi " . $user->display_name . ",

                    A new resource, $post_title has just been published to $group_title group you are a member of.

                    Thank You, Admin";

                    wp_mail($groupUserEmail, $subject, $message, $headers);
                }

                add_post_meta($resource_id, 'rf_publish', @$_POST['$rf_publish']);
            }







            foreach ($_POST as $key => $value) {

                add_post_meta($resource_id, $key, sanitize_text_field($value));
            }

            add_action('form_message', "resources created Successfully");
        } else if ($_POST['ums_create_resource'] == "ums_update_resource") {

            $resource_id = ($_POST['resource_id']) ? sanitize_text_field($_POST['resource_id']) : "";

            $postData['ID'] = $resource_id;

            $dd  = wp_update_post($postData);

            foreach ($_POST as $key => $value) {

                update_post_meta($resource_id, $key, sanitize_text_field($value));
            }
        }

        header('Location: ' . site_url('my-resources'));

        exit;
    }
}

add_action('init', 'ums_create_resource');



function ums_delete_resource()
{

    if ((!empty($_GET['mode']) && $_GET['mode'] == "resource") && !empty($_GET['ID'])) {



        global $wpdb;

        $current_user_id = get_current_user_id();



        $post =  $wpdb->get_results("SELECT ID FROM $wpdb->posts WHERE ID = '" . $_GET['ID'] . "'  AND post_author=  '" . $current_user_id . "' ", ARRAY_A);

        if (! $post) {

            return;
        }

        wp_delete_post($_GET['ID']);



        header('Location: ' . $_SERVER["HTTP_REFERER"]);

        exit;
    }
}

add_action('init', 'ums_delete_resource');



function create_feed()
{



    if (!empty($_POST['create_feed'])) {

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $current_user_id = get_current_user_id();

        $wordpress_post = array(

            'post_content' => $post_content,

            'post_status' => 'publish',

            'post_author' => $current_user_id,

            'post_type' => 'feeds'

        );



        $feed_id =     wp_insert_post($wordpress_post);

        add_post_meta($feed_id, 'feed_group_id', $_POST['ugroup_id']);



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

            set_post_thumbnail($feed_id, $attach_id);
        }

        header('Location: ' . $_SERVER["HTTP_REFERER"]);

        exit;
    }
}

add_action('init', 'create_feed');



function update_feed($query)
{

    if (!empty($_POST['update_feed'])) {

        $post_id  =  $_POST['feed_id'];

        $post = get_post($post_id);

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $current_user_id = get_current_user_id();



        $wordpress_post = array(

            'ID' => $post_id,

            'post_content' => $post_content,

            'post_status' => 'publish',

            'post_author' => $current_user_id,

            'post_type' => 'feeds'

        );



        // $feed_id =     wp_insert_post( $wordpress_post );

        $feed_id  =  wp_update_post($wordpress_post);





        //Set thumbnail image   



        $uploaddir = wp_upload_dir();

        $file = $_FILES["feed_edit_image"]["name"];

        $uploadfile = $uploaddir['path'] . '/' . basename($file);

        $mv = move_uploaded_file($_FILES["feed_edit_image"]["tmp_name"], $uploadfile);

        /*if(!$mv){

        echo "image not uploaded";

    }

    echo '<pre>'.$uploadfile;print_r($mv); print_r($_FILES); die;*/

        if ($mv) {

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



        header('Location: ' . $_SERVER["HTTP_REFERER"]);

        exit;
    }
}

add_action('init', 'update_feed');









function create_reportsforms()
{



    if (!empty($_POST['create_reportsforms'])) {

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";



        if (empty($group_id)) {

            header('Location: ' . site_url('wccgroups'));
        }





        $rf_id = ($_POST['rf_id']) ? sanitize_text_field($_POST['rf_id']) : "";

        $rf_publish = ($_POST['rf_publish']) ? sanitize_text_field($_POST['rf_publish']) : "";

        $rf_private = ($_POST['rf_private']) ? sanitize_text_field($_POST['rf_private']) : "";

        $report_id = ($_POST['report_id']) ? sanitize_text_field($_POST['report_id']) : "";

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $current_user_id = get_current_user_id();

        $group_title  = get_the_title($group_id);







        if (empty($rf_id)) {

            $reportsformsData = array(

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'reportsforms',

            );





            $rf_id = wp_insert_post($reportsformsData);



            if ($rf_private == 'keep_private') {

                add_post_meta($rf_id, 'rf_publish', @$_POST['rf_publish']);
            } elseif ($rf_publish == 'all_rrn_users') {

                //$groupDetail = get_posts( $group_id );

                $all_users = get_users();



                foreach ($all_users as $value) {

                    $group_title  = get_the_title($group_id);

                    $subject = "Disaster Report Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@worldcares.org>' . "\r\n";

                    $message = "

                    Hi " . $value->display_name . ",

                    A new Disaster Situational Report, $post_title has just been published  to, $group_title group you are a member of.

                    View Report: " . site_url('disaster-situational-report/?id=' . $rf_id) . "

                    Thank You, Admin";

                    wp_mail($value->user_email, $subject, $message, $headers);
                }

                add_post_meta($rf_id, 'rf_publish', @$_POST['$rf_publish']);
            } else {

                $allGroupUserID  = learndash_get_groups_user_ids($rf_publish);

                foreach ($allGroupUserID as $USERID) {

                    $user = get_user_by('id', $USERID);

                    $groupUserEmail = $user->user_email;



                    $subject = "Disaster Situational Report Request  Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";

                    $message = "

                    Hi " . $user->display_name . ",

                    A new Disaster Situational Report, $post_title has just been published to $group_title group you are a member of.

                    View Report: " . site_url('disaster-situational-report/?id=' . $rf_id) . "

                    Thank You, Admin";

                    wp_mail($groupUserEmail, $subject, $message, $headers);
                }

                add_post_meta($rf_id, 'rf_publish', @$_POST['$rf_publish']);
            }



            // unset($_POST['post_title'],$_POST['create_reportsforms'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    add_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }

            // Store Multiple disaster type in database



            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $vpn1 = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $vpn1);
        } else {



            $reportsformsData = array(

                'ID' => $rf_id,

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'reportsforms'

            );





            $rf_id = wp_insert_post($reportsformsData);

            unset($_POST['post_title'], $_POST['create_reportsforms'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $vpn1 = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $vpn1);
        }



        if ($submitType = "save") {

            /* header('Location: '.site_url('create-new-report')."?gid=".$group_id."&rf_id=".$rf_id);  */

            header('Location: ' . site_url('create-new-report') . "?gid=" . $group_id . "");
        } else {

            $pp = get_post_permalink($group_id);

            header('Location: ' . $pp);
        }

        exit;
    }
}

add_action('init', 'create_reportsforms');















function create_disasterReportsforms()
{



    if (!empty($_POST['create_disasterReportsforms'])) {

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";



        /*if(empty($group_id)){

            header('Location: '.site_url('wccgroups'));   

        }*/



        $rf_publish = ($_POST['rf_publish']) ? sanitize_text_field($_POST['rf_publish']) : "";

        $rf_id = ($_POST['rf_id']) ? sanitize_text_field($_POST['rf_id']) : "";

        $report_id = ($_POST['report_id']) ? sanitize_text_field($_POST['report_id']) : "";

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $current_user_id = get_current_user_id();

        $group_title  = get_the_title($group_id);



        if (empty($rf_id)) {

            $reportsformsData = array(

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'reportsforms',

            );





            $rf_id = wp_insert_post($reportsformsData);



            if ($rf_publish == 'keep_private') {

                add_post_meta($rf_id, 'rf_publish', @$_POST['rf_publish']);
            } elseif ($rf_publish == 'all_rrn_users') {

                //$groupDetail = get_posts( $group_id );

                $all_users = get_users();



                foreach ($all_users as $value) {

                    $group_title  = get_the_title($group_id);

                    $subject = "Disaster Report Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@worldcares.org>' . "\r\n";

                    $message = "

                    Hi " . $value->display_name . ",

                    A new Disaster Situational Report, $post_title has just been published  to, $group_title group you are a member of.

                    View Report: " . site_url('disaster-situational-report/?id=' . $rf_id) . "

                    Thank You, Admin";

                    wp_mail($value->user_email, $subject, $message, $headers);
                }

                add_post_meta($rf_id, 'rf_publish', @$_POST['$rf_publish']);
            } else {

                $allGroupUserID  = learndash_get_groups_user_ids($rf_publish);

                foreach ($allGroupUserID as $USERID) {

                    $user = get_user_by('id', $USERID);

                    $groupUserEmail = $user->user_email;

                    //echo $groupUserEmail;

                    $subject = "Disaster Situational Report Request  Notification  vinay";

                    $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";

                    $message = "

                    Hi " . $user->display_name . ",

                    A new Disaster Situational Report, $post_title has just been published to $group_title group you are a member of.

                    View Report: " . site_url('disaster-situational-report/?id=' . $rf_id) . "

                    Thank You, Admin";

                    wp_mail($groupUserEmail, $subject, $message, $headers);
                }

                add_post_meta($rf_id, 'rf_publish', @$_POST['$rf_publish']);
            }



            // unset($_POST['post_title'],$_POST['create_reportsforms'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    add_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }

            // Store Multiple disaster type in database



            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $vpn1 = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $vpn1);
        } else {



            $reportsformsData = array(

                'ID' => $rf_id,

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'reportsforms'

            );





            $rf_id = wp_insert_post($reportsformsData);

            unset($_POST['post_title'], $_POST['create_reportsforms'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $vpn1 = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $vpn1);
        }



        if ($submitType = "save") {

            header('Location: ' . site_url('disaster-situational-reports'));
        } else {

            $pp = get_post_permalink($group_id);

            header('Location: ' . site_url('disaster-situational-reports'));
        }

        exit;
    }
}

add_action('init', 'create_disasterReportsforms');







function orgnaizationReport_alert()
{

    global $wpdb;



    $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

    $report_alert_id = ($_POST['rid']) ? sanitize_text_field($_POST['rid']) : "";

    $post_author = ($_POST['post_author']) ? sanitize_text_field($_POST['post_author']) : "";

    $page_url = ($_POST['page_url']) ? sanitize_text_field($_POST['page_url']) : "";

    $uniqueReportID = ($_POST['uniqueReportID']) ? sanitize_text_field($_POST['uniqueReportID']) : "";

    $current_user_id = get_current_user_id();

    $current_date   =  date('Y/m/d');



    if (!empty($_POST['orgnaizationReport_alert'])) {



        if (empty($report_alert_id)) {

            $reportsformsData = array(

                'report_alert_id'    => $report_alert_id,

                'report_post_author'  => $post_author,

                'report_applied_by_' . $current_user_id   => $current_user_id,

                'report_status_' . $current_user_id   => 'applied',

                'report_status_for_' . $report_alert_id   => 'report_applied',

                //  'report_status_for_'.$report_alert_id ='applied',

                'report_applied_date_' . $current_user_id  => $current_date

            );



            /*Send email to post author*/

            $report_title = get_the_title($report_alert_id);

            $user = get_user_by('id', $post_author);

            $subject = "Organization Report Notification";

            $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@wordcares.org>' . "\r\n";

            $message = "

                Hi " . $user->display_name . ",

                User has Requested to Help Has been published to, $report_title($uniqueReportID) .

                View Report: " . site_url('view-organization-request-form/?id=' . $report_alert_id) . "

                Thank You, Admin";

            wp_mail($user->user_email, $subject, $message, $headers);



            /*Send email to author */



            foreach ($reportsformsData as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($report_alert_id, $key, sanitize_text_field($value));
                }
            }
        } else {

            $reportsformsData = array(

                'report_alert_id'    => $report_alert_id,

                'report_post_author'  => $post_author,

                'report_applied_by_' . $current_user_id   => $current_user_id,

                'report_status_' . $current_user_id   => 'applied',

                'report_status_for_' . $report_alert_id   => 'report_applied',

                //  'report_status_for_'.$report_alert_id ='applied',

                'report_applied_date_' . $current_user_id  => $current_date

            );







            /*Send email to post author*/

            $report_title = get_the_title($report_alert_id);

            $user = get_user_by('id', $post_author);

            $subject = "Organization Report Notification";

            $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@wordcares.org>' . "\r\n";

            $message = "

                Hi " . $user->display_name . ",

                User has Requested to Help Has been published to , \"" . $report_title . "\" .

                View Report: " . site_url('view-organization-request-form/?id=' . $report_alert_id) . "

                Thank You, Admin";

            wp_mail($user->user_email, $subject, $message, $headers);



            /*Send email to author */



            foreach ($reportsformsData as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($report_alert_id, $key, sanitize_text_field($value));
                }
            }
        }

        echo "<script>

                alert('You have applied on report successfully.');

                </script>";

        $pp = $page_url;

        header('Location: ' . $pp);



        exit;
    }
}

add_action('init', 'orgnaizationReport_alert');







function approve_organizationRequest()
{

    global $wpdb;

    if (!empty($_POST['approve_organizationRequest'])) {

        $report_alert_id = ($_POST['report_id']) ? sanitize_text_field($_POST['report_id']) : "";

        $report_applied_by = ($_POST['report_applied_by']) ? sanitize_text_field($_POST['report_applied_by']) : "";

        $page_url1 = ($_POST['page_url']) ? sanitize_text_field($_POST['page_url']) : "";

        $uniqueReportID = ($_POST['uniqueReportID']) ? sanitize_text_field($_POST['uniqueReportID']) : "";

        $current_user_id = get_current_user_id();

        $current_date   =  date('Y/m/d');

        $report_status = 'approved';



        update_post_meta($report_alert_id, $report_applied_by, $report_status);



        $string = $report_applied_by;

        $user_id = filter_var($string, FILTER_SANITIZE_NUMBER_INT);

        $user = get_user_by('id', $user_id);

        $report_title = get_the_title($report_alert_id);



        //View Report: $page_url/?rid=$report_alert_id 



        $subject = "Request Status Notification";

        $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@wcc.com>' . "\r\n";

        $message = "

            Hi " . $user->first_name . ",

            

            Your application for $report_title($uniqueReportID) has been approved. The $report_title($uniqueReportID) will  appear under My Forms in your Dashboard.

            You may communicate with the author via the message board in your Dashboard

            

             View Report: " . site_url('view-organization-request-form/?id=' . $report_alert_id) . "

             Thank You, Admin";

        wp_mail($user->user_email, $subject, $message, $headers);



        // send email to user who applied  



        echo "<script>

                    alert('Report request approved successfully.');

                </script>";

        $pp = $page_url;

        header('Location: ' . $pp);

        // exit;

    }
}

add_action('init', 'approve_organizationRequest');





function reject_organizationRequest()
{

    global $wpdb;

    if (!empty($_POST['reject_organizationRequest'])) {

        $report_alert_id = ($_POST['report_id']) ? sanitize_text_field($_POST['report_id']) : "";

        $page_url = ($_POST['page_url']) ? sanitize_text_field($_POST['page_url']) : "";

        $report_applied_by = ($_POST['report_applied_by']) ? sanitize_text_field($_POST['report_applied_by']) : "";

        $uniqueReportID = ($_POST['uniqueReportID']) ? sanitize_text_field($_POST['uniqueReportID']) : "";



        $current_user_id = get_current_user_id();

        $current_date   =  date('Y/m/d');

        $report_status = 'rejected';

        update_post_meta($report_alert_id, $report_applied_by, $report_status);



        $string = $report_applied_by;

        $user_id = filter_var($string, FILTER_SANITIZE_NUMBER_INT);

        $user = get_user_by('id', $user_id);

        $report_title = get_the_title($report_alert_id);



        // $userInfo =  get_user_meta($user_id);



        // View Report: $page_url/?rid=$report_alert_id send email to user who applied    



        $subject = "Request Status Notification";

        $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@wcc.com>' . "\r\n";

        $message = "

            Hi " . $user->first_name . ",



            Thank you for your interest in $report_title ($uniqueReportID) at this time your application has been declined.

            

            View Report: " . site_url('view-organization-request-form/?id=' . $report_alert_id) . "

            

            Thank You";

        wp_mail($user->user_email, $subject, $message, $headers);



        // send email to user who applied  

        echo "<script>

                    alert('Report request rejected .');

                </script>";

        $pp = $page_url;

        header('Location: ' . $pp);

        exit;
    }
}

add_action('init', 'reject_organizationRequest');





function survivorNeedIntakeReport_alert()
{

    // print_r($_POST);

    global $wpdb;



    $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

    $report_alert_id = ($_POST['rid']) ? sanitize_text_field($_POST['rid']) : "";

    $post_author = ($_POST['post_author']) ? sanitize_text_field($_POST['post_author']) : "";

    $page_url = ($_POST['page_url']) ? sanitize_text_field($_POST['page_url']) : "";

    $uniqueReportID = ($_POST['uniqueReportID']) ? sanitize_text_field($_POST['uniqueReportID']) : "";

    $current_user_id = get_current_user_id();

    $current_date   =  date('Y/m/d');



    if (!empty($_POST['survivorNeedIntakeReport_alert'])) {





        if (empty($report_alert_id)) {

            $reportsformsData = array(

                'report_alert_id'    => $report_alert_id,

                'report_post_author'  => $post_author,

                'report_applied_by_' . $current_user_id   => $current_user_id,

                'report_status_' . $current_user_id   => 'applied',

                'report_status_for_' . $report_alert_id   => 'report_applied',

                //  'report_status_for_'.$report_alert_id ='applied',

                'report_applied_date_' . $current_user_id  => $current_date

            );



            /*Send email to post author*/

            $report_title = get_the_title($report_alert_id);

            $user = get_user_by('id', $post_author);

            $subject = "Survivor Need Intake Report Notification";

            $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@wordcares.org>' . "\r\n";

            $message = "

                Hi " . $user->display_name . ",

                User has Requested to Help Has been published to, $report_title($uniqueReportID) .

                View Report: " . site_url('survivors-needs-intake-form/?id=' . $report_alert_id) . "

                Thank You, Admin";

            wp_mail($user->user_email, $subject, $message, $headers);



            /*Send email to author */



            foreach ($reportsformsData as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($report_alert_id, $key, sanitize_text_field($value));
                }
            }
        } else {

            $reportsformsData = array(

                'report_alert_id'    => $report_alert_id,

                'report_post_author'  => $post_author,

                'report_applied_by_' . $current_user_id   => $current_user_id,

                'report_status_' . $current_user_id   => 'applied',

                'report_status_for_' . $report_alert_id   => 'report_applied',

                //  'report_status_for_'.$report_alert_id ='applied',

                'report_applied_date_' . $current_user_id  => $current_date

            );







            /*Send email to post author*/

            $report_title = get_the_title($report_alert_id);

            $user = get_user_by('id', $post_author);

            $subject = "Survivor Need Intake Report Notification";

            $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@wordcares.org>' . "\r\n";

            $message = "

                Hi " . $user->display_name . ",

                User has Requested to Help Has been published to , \"" . $report_title . "\" .

                View Report: " . site_url('survivors-needs-intake-form/?id=' . $report_alert_id) . "

                Thank You, Admin";

            wp_mail($user->user_email, $subject, $message, $headers);



            /*Send email to author */



            foreach ($reportsformsData as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($report_alert_id, $key, sanitize_text_field($value));
                }
            }
        }

        echo "<script>

                alert('You have applied on report successfully.');

                </script>";

        $pp = $page_url;

        header('Location: ' . $pp);
    }
}

add_action('init', 'survivorNeedIntakeReport_alert');



















// Survivor need intake form report apply



function intakeFormReport_alert()
{

    /* echo "<pre>";

    print_r($_POST);die();*/

    global $wpdb;



    if (!empty($_POST['intakeFormReport_alert'])) {

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        $report_alert_id = ($_POST['rid']) ? sanitize_text_field($_POST['rid']) : "";

        $post_author = ($_POST['post_author']) ? sanitize_text_field($_POST['post_author']) : "";

        $page_url = ($_POST['page_url']) ? sanitize_text_field($_POST['page_url']) : "";

        $current_user_id = get_current_user_id();

        $current_date   =  date('Y/m/d');



        /*$meta = get_post_meta($report_alert_id);

    print_r($meta);

    die;*/



        if (empty($report_alert_id)) {

            $reportsformsData = array(

                'report_alert_id'    => $report_alert_id,

                'report_post_author'  => $post_author,

                'report_applied_by_' . $current_user_id   => $current_user_id,

                'report_status_' . $current_user_id   => 'applied',

                'report_status_for_' . $report_alert_id   => 'report_applied',

                //  'report_status_for_'.$report_alert_id ='applied',

                'report_applied_date_' . $current_user_id  => $current_date

            );



            /*echo 'vinay1';

            print_r($reportsformsData);

            die;*/



            foreach ($reportsformsData as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($report_alert_id, $key, sanitize_text_field($value));
                }
            }

            //wc_print_notices('message success', "Applied-1 success!");

        } else {

            $reportsformsData = array(

                'report_alert_id'    => $report_alert_id,

                'report_post_author'  => $post_author,

                'report_applied_by_' . $current_user_id   => $current_user_id,

                'report_status_' . $current_user_id   => 'applied',

                'report_status_for_' . $report_alert_id   => 'report_applied',

                //  'report_status_for_'.$report_alert_id ='applied',

                'report_applied_date_' . $current_user_id  => $current_date

            );





            foreach ($reportsformsData as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($report_alert_id, $key, sanitize_text_field($value));
                }
            }
        }

        echo "<script>

                alert('You have applied on report successfully.');

                </script>";

        $pp = $page_url;

        header('Location: ' . $pp);
    }
}

add_action('init', 'intakeFormReport_alert');



// Survivor need intake form apply 







/*Show custom data in admin dashboard  for Disaster Situational Report*/



add_action('admin_menu', 'my_admin_menu');



function customerview_admin_page()
{

?>

    <div class="wrap">

        <h2>Disaster Situational Reports</h2>

        <?php

        global $wpdb;



        $reportData = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_type = 'reportsforms' ORDER BY ID DESC;");

        //	echo "<pre>";

        //	print_r($reportData);

        //	die;



        echo "<table class='widefat fixed'>";

        echo "<th>Report ID</th>";

        echo "<th>Date</th>";

        echo "<th>Event</th>";

        echo "<th>Org.</th>";

        echo "<th>City</th>";

        echo "<th>State</th>";

        echo "<th>Country</th>";

        echo "<th>Contact Person</th>";

        echo "<th>Email</th>";

        echo "<th>Phone</th>";



        if (!empty($reportData)) {

            foreach ($reportData as $report) {

                $rid = $report->ID;

                $postMeta = get_post_meta($rid);



                echo "<tr>";

                //	echo "<td><input type='text' name='ID' value=".$report->ID." size='1' readonly></input></td>";

                echo "<td>" . $report->ID . "</td>";

                $CusID = $reportData->ID;



                echo "<td>" . get_post_meta($rid, 'rf_date', true) . "</td>";

                echo "<td>" . $report->post_title . "</td>";



                echo "<td>" . get_post_meta($rid, 'rf_org', true) . "</td>";

                echo "<td>" . get_post_meta($rid, 'rf_city', true) . "</td>";

                echo "<td>" . get_post_meta($rid, 'rf_statue', true) . "</td>";

                echo "<td>" . get_post_meta($rid, 'rf_country', true) . "</td>";

                echo "<td>" . get_post_meta($rid, 'rf_contact_person', true) . "</td>";

                echo "<td>" . get_post_meta($rid, 'rf_email', true) . "</td>";

                echo "<td>" . get_post_meta($rid, 'rf_phone', true) . "</td>";

                echo "</tr>";
            }
        }

        echo "</table>";

        ?>

    </div>

<?php

}



function my_admin_menu()
{

    add_menu_page('Customer Request View', 'Disaster Situational Reports', 'manage_options', 'myplugin/view_disaster_situational_report.php', 'customerview_admin_page', 'dashicons-tag', 6);
}





/*Show custom data in admin dashboard Disaster Situational Report*/





/*update disaster reports*/



function update_reportsforms()
{



    //print_r($_POST['update_reportsforms']);

    //die;



    if (!empty($_POST['update_reportsforms'])) {





        echo  $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        /* if(empty($group_id)){

            header('Location: '.site_url('wccgroups'));   

        }*/

        $rf_id = ($_POST['rf_id']) ? sanitize_text_field($_POST['rf_id']) : "";

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $current_user_id = get_current_user_id();



        if (empty($rf_id)) {



            $reportsformsData = array(

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'reportsforms'

            );



            //$rf_id =     wp_insert_post( $reportsformsData );

            $rf_id =     wp_update_post($reportsformsData);



            unset($_POST['post_title'], $_POST['update_reportsforms'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    add_post_meta($rf_id, $key, sanitize_text_field($value));
                }

                // Store Multiple disaster type in database



                $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

                $vpn1 = implode(',', $multiapply);

                update_post_meta($rf_id, 'rf_apply', $vpn1);
            }
        } else {



            $reportsformsData = array(

                'ID' => $rf_id,

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'reportsforms'

            );



            $rf_id =     wp_update_post($reportsformsData);

            unset($_POST['post_title'], $_POST['update_reportsforms'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }



            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $vpn1 = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $vpn1);
        }

        if ($submitType = "save") {

            header('Location: ' . site_url('disaster-situational-report/?id=' . $rf_id));
        } else {

            $pp = get_post_permalink($group_id);

            header('Location: ' . $pp);
        }

        exit;
    }
}

add_action('init', 'update_reportsforms');







/*update after action report*/



function update_ActionReport()
{



    if (!empty($_POST['update_ActionReport'])) {



        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        /* if(empty($group_id)){

            header('Location: '.site_url('wccgroups'));   

        }*/

        $rf_id = ($_POST['rf_id']) ? sanitize_text_field($_POST['rf_id']) : "";

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $current_user_id = get_current_user_id();



        if (empty($rf_id)) {

            $reportsformsData = array(

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'afterActionReport'

            );



            //$rf_id =     wp_insert_post( $reportsformsData );

            $rf_id =     wp_update_post($reportsformsData);

            unset($_POST['post_title'], $_POST['update_ActionReport'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    add_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }
        } else {



            $reportsformsData = array(

                'ID' => $rf_id,

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'afterActionReport'

            );



            $rf_id =     wp_update_post($reportsformsData);

            unset($_POST['post_title'], $_POST['update_ActionReport'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }
        }



        if ($submitType = "save") {

            header('Location: ' . site_url('after-action-report/?id=' . $rf_id));
        } else {

            $pp = get_post_permalink($group_id);

            header('Location: ' . $pp);
        }

        exit;
    }
}

add_action('init', 'update_ActionReport');







function create_volunteerReq()
{



    if (!empty($_POST['create_volunteerReq'])) {



        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        if (empty($group_id)) {

            header('Location: ' . site_url('wccgroups'));
        }

        $rf_id = ($_POST['rf_id']) ? sanitize_text_field($_POST['rf_id']) : "";

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $rf_publish = ($_POST['rf_publish']) ? sanitize_text_field($_POST['rf_publish']) : "";

        $current_user_id = get_current_user_id();



        if (empty($rf_id)) {

            $reportsformsData = array(

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'volunteer_request'

            );



            $rf_id = wp_insert_post($reportsformsData);





            //unset($_POST['post_title'],$_POST['create_volunteerReq'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);



            if ($rf_publish == 'keep_private') {

                add_post_meta($rf_publish, 'rf_publish', @$_POST['rf_publish']);
            } elseif ($rf_publish == 'all_rrn_users') {

                $all_users = get_users();

                foreach ($all_users as $value) {

                    $group_title  = get_the_title($group_id);

                    $subject = "Organization Volunteer Request Report Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <my_email@gmail.com>' . "\r\n";

                    $message = "

                    Hi " . $author->display_name . ",

                    A new Organization Volunteer Request, $post_title has just been published  to, $group_title group you are a member of.

                    View Report: " . site_url('view-organization-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";

                    wp_mail($value->user_email, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            } else {

                $allGroupUserID  = learndash_get_groups_user_ids($rf_publish);



                foreach ($allGroupUserID as $USERID) {

                    $user = get_user_by('id', $USERID);



                    $groupUserEmail = $user->user_email;

                    $subject = "Organization Volunteer Request  Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <my_email@gmail.com>' . "\r\n";

                    $message = "

                    Hi " . $user->display_name . ",

                    A new Organization Volunteer Request, $post_title has just been published  to, $group_title group you are a member of.

                     View Report: " . site_url('view-organization-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";

                    wp_mail($groupUserEmail, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            }



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    add_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }



            // Store Multiple disaster type in database

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $all_disasters = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $all_disasters);
        } else {

            $reportsformsData = array(

                'ID' => $rf_id,

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'volunteer_request'

            );

            $rf_id =     wp_insert_post($reportsformsData);

            //  unset($_POST['post_title'],$_POST['create_volunteerReq'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }

            // Store Multiple disaster type in database

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $all_disasters = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $all_disasters);
        }



        if ($submitType = "save") {

            /* header('Location: '.site_url('create-organization-volunteer-request')."?gid=".$group_id."&rf_id=".$rf_id);*/

            header('Location: ' . site_url('create-organization-volunteer-request') . "?gid=" . $group_id . "");
        } else {

            $pp = get_post_permalink($group_id);

            header('Location: ' . $pp);
        }

        exit;
    }
}

add_action('init', 'create_volunteerReq');





/*update organization report form*/

function update_volunteerReq()
{



    /* echo "hlw";die;*/



    if (!empty($_POST['update_volunteerReq'])) {



        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        if (empty($group_id)) {

            header('Location: ' . site_url('wccgroups'));
        }

        $rf_id = ($_POST['rf_id']) ? sanitize_text_field($_POST['rf_id']) : "";

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $rf_publish = ($_POST['rf_publish']) ? sanitize_text_field($_POST['rf_publish']) : "";

        $current_user_id = get_current_user_id();



        if (empty($rf_id)) {

            $reportsformsData = array(

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'volunteer_request'

            );



            /*$rf_id = wp_insert_post( $reportsformsData );*/

            $rf_id = wp_update_post($reportsformsData);





            //unset($_POST['post_title'],$_POST['create_volunteerReq'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);



            if ($rf_publish == 'keep_private') {

                add_post_meta($rf_publish, 'rf_publish', @$_POST['rf_publish']);
            } elseif ($rf_publish == 'all_rrn_users') {

                $all_users = get_users();

                foreach ($all_users as $value) {

                    $group_title  = get_the_title($group_id);

                    $subject = "Organization Volunteer Request Report Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <my_email@gmail.com>' . "\r\n";

                    $message = "

                    Hi " . $author->display_name . ",

                    A new Organization Volunteer Request, $post_title has just been published  to, $group_title group you are a member of.

                    View Report: " . site_url('view-organization-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";

                    wp_mail($value->user_email, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            } else {

                $allGroupUserID  = learndash_get_groups_user_ids($rf_publish);



                foreach ($allGroupUserID as $USERID) {

                    $user = get_user_by('id', $USERID);



                    $groupUserEmail = $user->user_email;

                    $subject = "Organization Volunteer Request  Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <my_email@gmail.com>' . "\r\n";

                    $message = "

                    Hi " . $user->display_name . ",

                    A new Organization Volunteer Request, $post_title has just been published  to, $group_title group you are a member of.

                     View Report: " . site_url('view-organization-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";

                    wp_mail($groupUserEmail, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            }



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    add_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }



            // Store Multiple disaster type in database

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $all_disasters = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $all_disasters);
        } else {

            $reportsformsData = array(

                'ID' => $rf_id,

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'volunteer_request'

            );

            /*$rf_id =     wp_insert_post( $reportsformsData );*/

            $rf_id =     wp_update_post($reportsformsData);

            //  unset($_POST['post_title'],$_POST['create_volunteerReq'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }

            // Store Multiple disaster type in database

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $all_disasters = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $all_disasters);
        }



        if ($submitType = "save") {

            /* header('Location: '.site_url('create-organization-volunteer-request')."?gid=".$group_id."&rf_id=".$rf_id);*/

            echo "<script>alert('Organization Volunteer Request Updated Successfully!')</script>";

            header('Location: ' . site_url('view-organization-request-form/?id=') . $rf_id);
        } else {

            $pp = get_post_permalink($group_id);

            header('Location: ' . $pp);
        }

        exit;
    }
}

add_action('init', 'update_volunteerReq');





function create_organizationVolunteerReq()
{



    if (!empty($_POST['create_organizationVolunteerReq'])) {



        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";



        $rf_id = ($_POST['rf_id']) ? sanitize_text_field($_POST['rf_id']) : "";

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $rf_publish = ($_POST['rf_publish']) ? sanitize_text_field($_POST['rf_publish']) : "";

        $current_user_id = get_current_user_id();

        $group_title  = get_the_title($group_id);



        if (empty($rf_id)) {

            $reportsformsData = array(

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'volunteer_request'

            );



            $rf_id = wp_insert_post($reportsformsData);





            //unset($_POST['post_title'],$_POST['create_volunteerReq'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);



            if ($rf_publish == 'keep_private') {

                add_post_meta($rf_publish, 'rf_publish', @$_POST['rf_publish']);
            } elseif ($rf_publish == 'all_rrn_users') {

                $all_users = get_users();

                foreach ($all_users as $value) {

                    $group_title  = get_the_title($group_id);

                    $subject = "Organization Volunteer Request Report Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <my_email@gmail.com>' . "\r\n";

                    $message = "

                    Hi " . $author->display_name . ",

                    A new Organization Volunteer Request, $post_title has just been published  to, $group_title group you are a member of.

                    View Report: " . site_url('view-organization-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";

                    wp_mail($value->user_email, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            } else {

                $allGroupUserID  = learndash_get_groups_user_ids($rf_publish);



                foreach ($allGroupUserID as $USERID) {

                    $user = get_user_by('id', $USERID);



                    $groupUserEmail = $user->user_email;

                    $subject = "Organization Volunteer Request  Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <my_email@gmail.com>' . "\r\n";

                    $message = "

                    Hi " . $user->display_name . ",

                    A new Organization Volunteer Request, $post_title has just been published  to, $group_title group you are a member of.

                     View Report: " . site_url('view-organization-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";

                    wp_mail($groupUserEmail, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            }



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    add_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }



            // Store Multiple disaster type in database

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $all_disasters = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $all_disasters);
        } else {

            $reportsformsData = array(

                'ID' => $rf_id,

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'volunteer_request'

            );

            $rf_id =     wp_insert_post($reportsformsData);

            //  unset($_POST['post_title'],$_POST['create_volunteerReq'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }

            // Store Multiple disaster type in database

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $all_disasters = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $all_disasters);
        }



        if ($submitType = "save") {

            //  header('Location: '.site_url('create-organization-volunteer-request')."?gid=".$group_id."&rf_id=".$rf_id); 

            header('Location: ' . site_url('organization-volunteer-requests'));
        } else {

            $pp = 'organization-volunteer-requests';

            //$pp = get_post_permalink($group_id);

            //header('Location: '.$pp);   

            header('Location: ' . site_url('organization-volunteer-requests'));
        }

        exit;
    }
}

add_action('init', 'create_organizationVolunteerReq');









function create_needIntakeForm()
{



    if (!empty($_POST['create_needIntakeForm'])) {

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        $group_title  = get_the_title($group_id);

        if (empty($group_id)) {

            header('Location: ' . site_url('wccgroups'));
        }

        $rf_id = ($_POST['rf_id']) ? sanitize_text_field($_POST['rf_id']) : "";

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $rf_publish = ($_POST['rf_publish']) ? sanitize_text_field($_POST['rf_publish']) : "";

        $current_user_id = get_current_user_id();



        if (empty($rf_id)) {

            $reportsformsData = array(

                'post_title' => 'supplier_need_intake_form',

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'supplierNeedIntake'

            );



            $rf_id =  wp_insert_post($reportsformsData);

            // unset($_POST['post_title'],$_POST['create_needIntakeForm'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);



            if ($rf_publish == 'keep_private') {

                add_post_meta($rf_publish, 'rf_publish', @$_POST['rf_publish']);
            } elseif ($rf_publish == 'All RRN Users') {

                //$groupDetail = get_posts( $group_id );

                $all_users = get_users();

                foreach ($all_users as $value) {

                    $group_title  = get_the_title($group_id);

                    $subject = "Survivor Need Intake Request";

                    $headers = 'From: ' . get_bloginfo('name') . ' <my_email@gmail.com>' . "\r\n";

                    $message = "

                    Hi " . $author->display_name . ",

                    A new Survivor Need Intake Request, $post_title has just been published  to, $group_title group you are a member of.

                    View Report: " . site_url('view-survivor-need-intake-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";



                    wp_mail($value->user_email, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            } else {

                $allGroupUserID  = learndash_get_groups_user_ids($rf_publish);



                foreach ($allGroupUserID as $USERID) {

                    $user = get_user_by('id', $USERID);

                    $groupUserEmail = $user->user_email;

                    echo $groupUserEmail;

                    $subject = "Survivor Need Intake Request Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";

                    $message = "

                    Hi " . $user->display_name . ",

                     A new Survivor Need Intake Request, $post_title has just been published  to, $group_title group you are a member of.

                     View Report: " . site_url('view-survivor-need-intake-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";



                    wp_mail($groupUserEmail, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            }

            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    add_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }



            // Store Multiple disaster type in database

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $all_disasters = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $all_disasters);
        } else {



            $reportsformsData = array(

                'ID' => $rf_id,

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'supplierNeedIntake'

            );



            $rf_id =     wp_insert_post($reportsformsData);

            unset($_POST['post_title'], $_POST['create_needIntakeForm'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }

            // Store Multiple disaster type in database

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $all_disasters = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $all_disasters);
        }



        if ($submitType = "save") {

            /*header('Location: '.site_url('create-survivor-need-intake-form')."?gid=".$group_id."&rf_id=".$rf_id);*/

            header('Location: ' . site_url('create-survivor-need-intake-form') . "?gid=" . $group_id . "");
        } else {

            $pp = get_post_permalink($group_id);

            header('Location: ' . $pp);
        }

        exit;
    }
}

add_action('init', 'create_needIntakeForm');







function create_SurvivorNeedIntakeForm()
{



    //print_r($_POST);die();



    if (!empty($_POST['create_SurvivorNeedIntakeForm'])) {

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        $group_title  = get_the_title($group_id);



        $rf_id = ($_POST['rf_id']) ? sanitize_text_field($_POST['rf_id']) : "";

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $rf_publish = ($_POST['rf_publish']) ? sanitize_text_field($_POST['rf_publish']) : "";

        $current_user_id = get_current_user_id();



        if (empty($rf_id)) {

            $reportsformsData = array(

                'post_title' => 'supplier_need_intake_form',

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'supplierNeedIntake'

            );



            $rf_id =  wp_insert_post($reportsformsData);

            // unset($_POST['post_title'],$_POST['create_needIntakeForm'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);



            if ($rf_publish == 'keep_private') {

                add_post_meta($rf_publish, 'rf_publish', @$_POST['rf_publish']);
            } elseif ($rf_publish == 'All RRN Users') {

                //$groupDetail = get_posts( $group_id );

                $all_users = get_users();

                foreach ($all_users as $value) {

                    $group_title  = get_the_title($group_id);

                    $subject = "Survivor Need Intake Request";

                    $headers = 'From: ' . get_bloginfo('name') . ' <my_email@gmail.com>' . "\r\n";

                    $message = "

                    Hi " . $author->display_name . ",

                    A new Survivor Need Intake Request, $post_title has just been published  to, $group_title group you are a member of.

                    View Report: " . site_url('view-survivor-need-intake-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";



                    wp_mail($value->user_email, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            } else {

                $allGroupUserID  = learndash_get_groups_user_ids($rf_publish);



                foreach ($allGroupUserID as $USERID) {

                    $user = get_user_by('id', $USERID);

                    $groupUserEmail = $user->user_email;

                    echo $groupUserEmail;

                    $subject = "Survivor Need Intake Request Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";

                    $message = "

                    Hi " . $user->display_name . ",

                     A new Survivor Need Intake Request, $post_title has just been published  to, $group_title group you are a member of.

                     View Report: " . site_url('view-survivor-need-intake-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";



                    wp_mail($groupUserEmail, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            }





            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    add_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }



            // Store Multiple disaster type in database

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $all_disasters = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $all_disasters);
        } else {



            $reportsformsData = array(

                'ID' => $rf_id,

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'supplierNeedIntake'

            );



            $rf_id =     wp_insert_post($reportsformsData);

            unset($_POST['post_title'], $_POST['create_needIntakeForm'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }

            // Store Multiple disaster type in database

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $all_disasters = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $all_disasters);
        }



        if ($submitType = "save") {

            header('Location: ' . site_url('survivors-needs-intake-form'));
        } else {

            header('Location: ' . site_url('survivors-needs-intake-form'));
        }

        exit;
    }
}

add_action('init', 'create_SurvivorNeedIntakeForm');





function update_SurvivorNeedIntakeForm()
{

    // print_r($_POST);die();



    if (!empty($_POST['update_SurvivorNeedIntakeForm'])) {

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        $group_title  = get_the_title($group_id);



        $rf_id = ($_POST['rf_id']) ? sanitize_text_field($_POST['rf_id']) : "";

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $rf_publish = ($_POST['rf_publish']) ? sanitize_text_field($_POST['rf_publish']) : "";

        $current_user_id = get_current_user_id();



        if (empty($rf_id)) {

            $reportsformsData = array(

                'post_title' => 'supplier_need_intake_form',

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'supplierNeedIntake'

            );



            $rf_id =  wp_update_post($reportsformsData);

            // unset($_POST['post_title'],$_POST['create_needIntakeForm'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);



            if ($rf_publish == 'keep_private') {

                add_post_meta($rf_publish, 'rf_publish', @$_POST['rf_publish']);
            } elseif ($rf_publish == 'All RRN Users') {

                //$groupDetail = get_posts( $group_id );

                $all_users = get_users();

                foreach ($all_users as $value) {

                    $group_title  = get_the_title($group_id);

                    $subject = "Survivor Need Intake Request";

                    $headers = 'From: ' . get_bloginfo('name') . ' <my_email@gmail.com>' . "\r\n";

                    $message = "

                    Hi " . $author->display_name . ",

                    A new Survivor Need Intake Request, $post_title has just been published  to, $group_title group you are a member of.

                    View Report: " . site_url('view-survivor-need-intake-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";



                    wp_mail($value->user_email, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            } else {

                $allGroupUserID  = learndash_get_groups_user_ids($rf_publish);



                foreach ($allGroupUserID as $USERID) {

                    $user = get_user_by('id', $USERID);

                    $groupUserEmail = $user->user_email;

                    echo $groupUserEmail;

                    $subject = "Survivor Need Intake Request Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";

                    $message = "

                    Hi " . $user->display_name . ",

                     A new Survivor Need Intake Request, $post_title has just been published  to, $group_title group you are a member of.

                     View Report: " . site_url('view-survivor-need-intake-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";



                    wp_mail($groupUserEmail, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            }





            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    add_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }



            // Store Multiple disaster type in database

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $all_disasters = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $all_disasters);
        } else {



            $reportsformsData = array(

                'ID' => $rf_id,

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'supplierNeedIntake'

            );



            $rf_id =     wp_update_post($reportsformsData);

            unset($_POST['post_title'], $_POST['create_needIntakeForm'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }

            // Store Multiple disaster type in database

            $multiapply = isset($_POST['rf_apply']) && is_array($_POST['rf_apply']) ? $_POST['rf_apply'] : [];

            $all_disasters = implode(',', $multiapply);

            update_post_meta($rf_id, 'rf_apply', $all_disasters);
        }



        if ($submitType = "save") {

            header('Location: ' . site_url('view-survivor-need-intake-request-form/?id=' . $rf_id));
        } else {

            header('Location: ' . site_url('survivors-needs-intake-form'));
        }

        exit;
    }
}

add_action('init', 'update_SurvivorNeedIntakeForm');





function after_ActionReport()
{



    if (!empty($_POST['after_ActionReport'])) {



        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        if (empty($group_id)) {

            header('Location: ' . site_url('wccgroups'));
        }

        $rf_id = ($_POST['rf_id']) ? sanitize_text_field($_POST['rf_id']) : "";

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $rf_publish = ($_POST['rf_publish']) ? sanitize_text_field($_POST['rf_publish']) : "";

        $current_user_id = get_current_user_id();

        $group_title  = get_the_title($group_id);



        if (empty($rf_id)) {

            $reportsformsData = array(

                'post_title'   =>  $post_title,

                'post_content' =>  $post_content,

                'post_status'  =>  'publish',

                'post_author'  =>  $current_user_id,

                'post_type'    =>  'afterActionReport'

            );



            $rf_id =     wp_insert_post($reportsformsData);

            if ($rf_publish == 'keep_private') {

                add_post_meta($rf_publish, 'rf_publish', @$_POST['rf_publish']);
            } elseif ($rf_publish == 'All RRN Users') {

                //$groupDetail = get_posts( $group_id );

                $all_users = get_users();

                foreach ($all_users as $value) {

                    $group_title  = get_the_title($group_id);

                    $subject = "Survivor Need Intake Request";

                    $headers = 'From: ' . get_bloginfo('name') . ' <my_email@gmail.com>' . "\r\n";

                    $message = "

                    Hi " . $author->display_name . ",

                    A new Survivor Need Intake Request, $post_title has just been published  to, $group_title group you are a member of.

                    View Report: " . site_url('view-survivor-need-intake-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";



                    wp_mail($value->user_email, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            } else {

                $allGroupUserID  = learndash_get_groups_user_ids($rf_publish);



                foreach ($allGroupUserID as $USERID) {

                    $user = get_user_by('id', $USERID);

                    $groupUserEmail = $user->user_email;

                    echo $groupUserEmail;

                    $subject = "Survivor Need Intake Request Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";

                    $message = "

                    Hi " . $user->display_name . ",

                     A new Survivor Need Intake Request, $post_title has just been published  to, $group_title group you are a member of.

                     View Report: " . site_url('view-survivor-need-intake-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";



                    wp_mail($groupUserEmail, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            }





            unset($_POST['post_title'], $_POST['after_ActionReport'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    add_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }
        } else {





            $reportsformsData = array(

                'ID' => $rf_id,

                'post_title' => 'after_action_report',

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'afterActionReport'

            );



            $rf_id =     wp_insert_post($reportsformsData);

            unset($_POST['post_title'], $_POST['after_ActionReport'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }
        }



        if ($submitType = "save") {

            /*header('Location: '.site_url('create-after-action-report')."?gid=".$group_id."&rf_id=".$rf_id);*/

            header('Location: ' . site_url('create-after-action-report') . "?gid=" . $group_id . "");
        } else {

            $pp = get_post_permalink($group_id);

            header('Location: ' . $pp);
        }

        exit;
    }
}

add_action('init', 'after_ActionReport');











function after_ActionReportForms()
{



    if (!empty($_POST['after_ActionReportForms'])) {

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        $rf_id = ($_POST['rf_id']) ? sanitize_text_field($_POST['rf_id']) : "";

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $rf_publish = ($_POST['rf_publish']) ? sanitize_text_field($_POST['rf_publish']) : "";

        $current_user_id = get_current_user_id();

        $group_title  = get_the_title($group_id);



        if (empty($rf_id)) {

            $reportsformsData = array(

                'post_title' => $post_title,

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'afterActionReport'

            );



            $rf_id =     wp_insert_post($reportsformsData);



            if ($rf_publish == 'keep_private') {

                add_post_meta($rf_publish, 'rf_publish', @$_POST['rf_publish']);
            } elseif ($rf_publish == 'All RRN Users') {

                //$groupDetail = get_posts( $group_id );

                $all_users = get_users();

                foreach ($all_users as $value) {

                    $group_title  = get_the_title($group_id);

                    $subject = "After Action Report";

                    $headers = 'From: ' . get_bloginfo('name') . ' <my_email@gmail.com>' . "\r\n";

                    $message = "

                    Hi " . $author->display_name . ",

                    A new After Action Report, $post_title has just been published  to, $group_title group you are a member of.

                    View Report: " . site_url('view-survivor-need-intake-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";



                    wp_mail($value->user_email, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            } else {

                $allGroupUserID  = learndash_get_groups_user_ids($rf_publish);



                foreach ($allGroupUserID as $USERID) {

                    $user = get_user_by('id', $USERID);

                    $groupUserEmail = $user->user_email;

                    echo $groupUserEmail;

                    $subject = "After Action Report Notification";

                    $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";

                    $message = "

                    Hi " . $user->display_name . ",

                     A new After Action Report, $post_title has just been published  to, $group_title group you are a member of.

                     View Report: " . site_url('view-survivor-need-intake-request-form/?id=' . $rf_id) . "

                    Thank You, Admin";



                    wp_mail($groupUserEmail, $subject, $message, $headers);
                }

                add_post_meta($rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            }









            //unset($_POST['post_title'],$_POST['after_ActionReport'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    add_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }
        } else {





            $reportsformsData = array(

                'ID' => $rf_id,

                'post_title' => 'after_action_report',

                'post_content' => $post_content,

                'post_status' => 'publish',

                'post_author' => $current_user_id,

                'post_type' => 'afterActionReport'

            );



            $rf_id =     wp_insert_post($reportsformsData);

            unset($_POST['post_title'], $_POST['after_ActionReport'], $_POST['reportsforms_nonce'], $_POST['save'], $_POST['finish']);



            foreach ($_POST as $key => $value) {

                if (!empty($value)) {

                    update_post_meta($rf_id, $key, sanitize_text_field($value));
                }
            }
        }



        if ($submitType = "save") {

            header('Location: ' . site_url('after-action-reports'));
        } else {

            $pp = get_post_permalink($group_id);

            header('Location: ' . site_url('after-action-reports'));
        }

        exit;
    }
}

add_action('init', 'after_ActionReportForms');







function delete_afterActionReport($query)
{

    if (!empty($_POST['delete_afterActionReport'])) {

        $report_id  =  $_POST['report_id'];

        wp_delete_post($report_id);

        add_action('form_message', "After Action Report Deleted Successfully.");



        //$pp = get_post_permalink($report_id); 

        header('Location: ' . site_url('wccgroups'));
    }
}

add_action('init', 'delete_afterActionReport');







function delete_my_account($query)
{

    if (!empty($_POST['delete_my_account'])) {

        $userID  =  $_POST['user_id'];

        wp_delete_user($userID);

        add_action('form_message', "User Deleted Successfully.");

        header('Location: ' . site_url(''));
    }
}

add_action('init', 'delete_my_account');









function delete_disasterReport($query)
{

    if (!empty($_POST['delete_disasterReport'])) {

        $report_id  =  $_POST['report_id'];

        wp_delete_post($report_id);

        add_action('form_message', "Disaster  Action Report Deleted Successfully.");

        header('Location: ' . site_url('wccgroups'));

        // exit;   

    }
}

add_action('init', 'delete_disasterReport');



function delete_organizationReport($query)
{

    if (!empty($_POST['delete_organizationReport'])) {



        $report_id  =  $_POST['report_id'];

        wp_delete_post($report_id);

        add_action('form_message', "Organization  Action Report Deleted Successfully.");

        header('Location: ' . site_url('organization-volunteer-requests'));

        exit;
    }
}

add_action('init', 'delete_organizationReport');



function delete_survivorReport($query)
{

    if (!empty($_POST['delete_survivorReport'])) {



        $report_id  =  $_POST['report_id'];

        wp_delete_post($report_id);

        add_action('form_message', "Survivor Need Intake Request Deleted Successfully.");

        header('Location: ' . site_url('survivors-needs-intake-form'));

        exit;
    }
}

add_action('init', 'delete_survivorReport');



function update_blog($query)
{

    if (!empty($_POST['update_blog'])) {

        // echo '<pre>'; print_r($_FILES); die;



        $post_id  =  $_POST['blog_edit_id'];

        $post = get_post($post_id);

        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $current_user_id = get_current_user_id();



        $updatePostData = array(

            'ID' => $post_id,

            'post_title' => $post_title,

            'post_content' => $post_content,

            'post_status' => 'publish',

            'post_author' => $current_user_id,

            'post_type' => 'post'

        );



        $blogID =     wp_update_post($updatePostData);





        //Set thumbnail image   



        $uploaddir = wp_upload_dir();

        $file = $_FILES["blog_edit_image"]["name"];

        $uploadfile = $uploaddir['path'] . '/' . basename($file);



        $mv = move_uploaded_file($_FILES["blog_edit_image"]["tmp_name"], $uploadfile);



        if (!$mv) {

            // echo "image not uploaded";

        }

        //echo '<pre>'.$uploadfile;print_r($mv); print_r($_FILES); die;



        if ($mv) {

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

        header('Location: ' . $_SERVER["HTTP_REFERER"]);

        exit;
    }
}

add_action('init', 'update_blog');



function delete_feed($query)
{

    if (!empty($_POST['delete_feed'])) {

        $post_id  =  $_POST['feed_id'];

        wp_delete_post($post_id);

        add_action('form_message', "Feed Deleted Successfully");
    }
}

add_action('init', 'delete_feed');













/**

 * LearnDash - Example kook into WordPress 'register_new_user' action 

 * to enroll user into a course or group.

 */

function ums_enroll_user_in_group()
{

    if (! empty($_GET['user_id']) && ! empty($_GET['group_id'])) {

        // Do something with the new user ID. 



        //Maybe call the LD function to enroll them into a course.  

        //$course_id = 123; // Dummy course ID for new registrations.

        //ld_update_course_access( $user_id, $course_id );



        // Or add them to a Group

        $group_id = $_GET['group_id'];

        //ld_update_group_access( $user_id, $group_id );

        /* if ( isset( $_GET['course_id'] ) ) {

            $course_id = absint( $_GET['course_id'] );

            if ( ! empty( $course_id ) ) {

                ld_update_course_access( $user_id, $course_id );

            }

        }*/



        if (isset($_GET['group_id'])) {

            $group_id = absint($_GET['group_id']);

            if (! empty($group_id)) {

                ld_update_group_access($_GET['user_id'], $_GET['group_id']);
            }
        }
    }
}





add_action('init', 'ums_enroll_user_in_group');







function invite_member($query)
{

    global $wpdb;

    $tablename =  'group_invite';

    if (!empty($_POST['invite_member'])) {



        $member_id = ($_POST['member_id']) ? sanitize_text_field($_POST['member_id']) : "";

        $current_user_id = get_current_user_id();

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        $wordpress_post = array(

            'invited_to' => $member_id,

            'invited_from' => $current_user_id,

            'status' => 'pending',

            'group_id' => $group_id

        );



        $wpdb->insert('group_invite', $wordpress_post);



        add_action('form_message', "Member Invited  Successfully");
    }
}

add_action('init', 'invite_member');



function ums($va)
{

    // echo "<pre>"; print_r($val);die;

}



add_action('init', 'my_custom_init');

function my_custom_init()
{

    add_post_type_support('resourcemedia', 'thumbnail');
}



function reg_tag()
{

    register_taxonomy_for_object_type('post_tag', 'resourcemedia');

    register_taxonomy_for_object_type('category', 'resourcemedia');

    register_taxonomy_for_object_type('ld_group_tag', 'resourcemedia');
}

add_action('init', 'reg_tag');





add_action('init', function () {

    register_taxonomy('donation_category', ['donation'], [

        'label' => __('Donation Category', 'txtdomain'),

        'hierarchical' => false,

        'rewrite' => ['slug' => 'donation_category'],

        'show_admin_column' => true,

        'show_in_rest' => true,

        'labels' => [

            'singular_name' => __('Donation Category', 'txtdomain'),

            'all_items' => __('All Donation Category', 'txtdomain'),

            'edit_item' => __('Edit Donation Category', 'txtdomain'),

            'view_item' => __('View Donation Category', 'txtdomain'),

            'update_item' => __('Update Donation Category', 'txtdomain'),

            'add_new_item' => __('Add New Donation Category', 'txtdomain'),

            'new_item_name' => __('New Donation Category', 'txtdomain'),

            'search_items' => __('Search Donation Category', 'txtdomain'),

            'popular_items' => __('Popular Donation Category', 'txtdomain'),

            'separate_items_with_commas' => __('Separate Category with comma', 'txtdomain'),

            'choose_from_most_used' => __('Choose from most used Category', 'txtdomain'),

            'not_found' => __('No Category found', 'txtdomain'),

        ]

    ]);
});









function delete_resource_media()
{

    $jsonResponseData = array();

    $post_id  =  $_POST['media_id'];

    wp_delete_post($post_id);

    $jsonResponseData['msg'] = "Media deleted successfully";

    $jsonResponse = json_encode($jsonResponseData);

    echo $jsonResponse;

    die();
}

add_action('wp_ajax_delete_resource_media', 'delete_resource_media');

add_action('wp_ajax_nopriv_delete_resource_media', 'delete_resource_media');





function ums_update_resourcemedia()
{

    if (!empty($_POST['ums_update_media'])) {



        $media_post_id = ($_POST['mresource_id']) ? sanitize_text_field($_POST['mresource_id']) : "";

        $post_title = ($_POST['title']) ? sanitize_text_field($_POST['title']) : "";

        $post_content = ($_POST['mr_description']) ? sanitize_text_field($_POST['mr_description']) : "";

        $post_type   =  'resourcemedia';

        $post_status  =  'publish';

        $tags   =  ($_POST['tags']) ? $_POST['tags'] : "";

        $taxonomy    =   'ld_group_category';

        $mr_group = ($_POST['mr_group']) ? sanitize_text_field($_POST['mr_group']) : "";

        $current_user_id = get_current_user_id();

        $updatePostData = array(

            'ID' => $media_post_id,

            'post_title' => $post_title,

            'post_content' => $post_content,

            'post_status' => 'publish',

            'post_author' => $current_user_id,

            'post_type' => $post_type,

            //'post_parent' => sanitize_text_field($mr_group)

        );

        wp_update_post($updatePostData);

        update_post_meta($media_post_id, 'resourcemedia_group_id', $mr_group);

        update_post_meta($media_post_id, 'resource_media_group_id', $mr_group);

        if (!empty($tags)) {

            update_post_meta($media_post_id, 'resource_ld_group_tag', $tags);
        }











        $uploaddir = wp_upload_dir();

        $file = $_FILES["resource_media_img_edit"]["name"];

        $uploadfile = $uploaddir['path'] . '/' . basename($file);



        if (move_uploaded_file($_FILES["resource_media_img_edit"]["tmp_name"], $uploadfile)) {

            $filename = basename($uploadfile);

            $wp_filetype = wp_check_filetype(basename($filename), null);

            $attachment = array(

                'post_mime_type' => $wp_filetype['type'],

                'post_title' => preg_replace('/\.[^.]+$/', '', $filename),

                'post_content' => '',

                'post_status' => 'inherit',

                'menu_order' => $_i + 1000

            );

            $delete = wp_delete_attachment($media_post_id, true);

            $attach_id = wp_insert_attachment($attachment, $uploadfile);

            set_post_thumbnail($media_post_id, $attach_id);
        }







        header('Location: ' . $_SERVER["HTTP_REFERER"]);

        exit;
    }
}



add_action('init', 'ums_update_resourcemedia');



function ums_create_resourcemedia()
{

    if (!empty($_POST['ums_create_media'])) {

        $post_title = ($_POST['title']) ? sanitize_text_field($_POST['title']) : "";

        $post_content = ($_POST['mr_description']) ? sanitize_text_field($_POST['mr_description']) : "";

        $ugroup_id = ($_POST['ugroup_id']) ? sanitize_text_field($_POST['ugroup_id']) : "";

        $rf_publish = ($_POST['rf_publish']) ? sanitize_text_field($_POST['rf_publish']) : "";





        $rf_publish2 = ($_POST['rf_publish2']) ? sanitize_text_field($_POST['rf_publish2']) : "";

        $post_type   =  'resourcemedia';

        $post_status  =  'publish';

        $tags   =  ($_POST['tags']) ? $_POST['tags'] : "";

        $taxonomy    =   'ld_group_category';

        $mr_group = ($_POST['mr_group']) ? $_POST['mr_group'] : "";

        $current_user_id = get_current_user_id();





        $wordpress_post = array(

            'post_title' => $post_title,

            'post_content' => $post_content,

            'post_status' => 'publish',

            'post_author' => $current_user_id,

            'post_type' => $post_type,

            'post_parent' => $mr_group,



            //'post_category'=>array( $term_id )

        );



        $media_post_id = wp_insert_post($wordpress_post);





        add_post_meta($media_post_id, 'ugroup_id', $ugroup_id);



        if (!empty($rf_publish)) {

            update_post_meta($media_post_id, 'rf_publish', $rf_publish);
        } else {

            update_post_meta($media_post_id, 'rf_publish', $rf_publish2);
        }











        /*  $myUsers = learndash_get_groups_user_ids($rf_publish);

      echo 'Header part'; 

       print_r($myUsers);

       die ;*/

        //  update_post_meta($media_post_id, 'rf_publish',$rf_publish);



        /*Group code starts*/

        /* if($rf_private == 'keep_private')

          {

            add_post_meta( $media_post_id, 'rf_publish', @$_POST['rf_publish']);

          }*/



        if ($rf_publish == 'all_rrn_users') {

            $all_users = get_users();

            foreach ($all_users as $value) {

                $group_title  = get_the_title($group_id);

                $subject = "Resource Media Upload  Notification";

                $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@worldcares.org>' . "\r\n";

                $message = "

                    Hi " . $value->display_name . ",

                    A new reource media, $post_title has just been published  to, $group_title group you are a member of.

                    Thank You, Admin";

                wp_mail($value->user_email, $subject, $message, $headers);
            }

            // update_post_meta($media_post_id, 'rf_publish', $rf_publish);

        } else {





            $GroupUserID  = learndash_get_groups_user_ids($rf_publish);



            foreach ($allGroupUserID as $USERID) {

                $user = get_user_by('id', $USERID);

                $groupUserEmail = $user->user_email;



                $subject = "Disaster Situational Report Request  Notification";

                $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";

                $message = "

                    Hi " . $user->display_name . ",

                    A new Disaster Situational Report, $post_title has just been published to $group_title group you are a member of.

                    View Report: " . site_url('disaster-situational-report/?id=' . $rf_id) . "

                    Thank You, Admin";

                wp_mail($groupUserEmail, $subject, $message, $headers);
            }

            //update_post_meta( $media_post_id, 'rf_publish',$rf_publish);

        }



        /*Group code ends*/



        add_post_meta($media_post_id, 'resourcemedia_group_id', $mr_group);



        if (!empty($tags)) {

            add_post_meta($media_post_id, 'resource_ld_group_tag', $tags);
        }



        // add_post_meta( $media_post_id, 'resource_group_id', @$mr_group);

        //add_post_meta( $media_post_id, 'resource_media_group_id', @$mr_group);





        $uploaddir = wp_upload_dir();

        $file = $_FILES["resource_media_img"]["name"];

        $uploadfile = $uploaddir['path'] . '/' . basename($file);



        if (move_uploaded_file($_FILES["resource_media_img"]["tmp_name"], $uploadfile)) {

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

            set_post_thumbnail($media_post_id, $attach_id);
        }



        //echo "<pre>".$media_post_id; print_r($_POST); print_r($_FILES); die;



        header('Location: ' . $_SERVER["HTTP_REFERER"]);

        exit;
    }
}

add_action('init', 'ums_create_resourcemedia');



// Start the download if there is a request for that

function ibenic_download_file()
{



    if (isset($_GET["download_file"]) && isset($_GET['download_file'])) {

        ibenic_send_file();
    }
}

add_action('init', 'ibenic_download_file');





function ibenic_send_file()
{

    //get filedata

    $file = $_GET['download_file'];

    //$theFile = $download_file;



    if (! $file) {

        return;
    }



    header('Content-Description: File Transfer');

    header('Content-Type: application/octet-stream');

    header('Content-Disposition: attachment; filename=' . basename($file));

    header('Content-Transfer-Encoding: binary');

    header('Expires: 0');

    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

    header('Pragma: public');

    header('Content-Length: ' . filesize($file));

    ob_clean();

    flush();

    readfile($file);

    exit;
}





function follow_member($query)
{

    global $wpdb;

    $tablename =  'member_follow';

    if (!empty($_POST['follow_member'])) {



        $member_id = ($_POST['member_id']) ? sanitize_text_field($_POST['member_id']) : "";

        $current_user_id = get_current_user_id();

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        $wordpress_post = array(

            'invited_to' => $member_id,

            'invited_from' => $current_user_id,

            'status' => 'pending',

            'group_id' => $group_id

        );



        $wpdb->insert('member_follow', $wordpress_post);



        add_action('form_message', "Member followed  Successfully");
    }
}

add_action('init', 'follow_member');







function follow_member1()
{

    global $wpdb;

    $responseData = array();

    //$group_id = sanitize_text_field($_POST['group_id']);

    $member_id = sanitize_text_field($_POST['mid']);

    $current_user_id = get_current_user_id();



    $sql = "SELECT * FROM member_follow WHERE invited_to = '" . $member_id . "' AND invited_from ='" . $current_user_id . "' ";

    $check = $wpdb->get_results($sql, ARRAY_A);

    $responseData['sql'] = $sql;

    $responseData['ums'] = $check;

    if (count($check) > 0) {

        $responseData['msg'] = "Un Follow";

        $responseJson = json_encode($responseData);

        echo $responseJson;

        die();
    }



    $insertData = array(

        'invited_to' => $member_id,

        'invited_from' => $current_user_id,

        'status' => 'pending',

        //'group_id' => $group_id

    );

    $wpdb->insert('member_follow', $insertData);

    $responseData['responseData'] = $responseData;

    $responseData['sql'] = $sql;

    $responseData['msg'] = "Un Follow";

    $responseJson = json_encode($responseData);

    echo $responseJson;

    die();
}





add_action('wp_ajax_follow_member1', 'follow_member1');

add_action('wp_ajax_nopriv_follow_member1', 'follow_member1');





function unfollow_member()
{

    global $wpdb;

    $responseData = array();

    //$group_id = sanitize_text_field($_POST['group_id']);

    $member_id = sanitize_text_field($_POST['mid']);

    $current_user_id = get_current_user_id();



    //ld_update_group_access( $member_id, $group_id,true );

    $uu = $wpdb->delete('member_follow', array('invited_to' => $member_id, 'invited_from' => $current_user_id));





    $responseData['sql'] = $uu;

    $responseData['msg'] = "Follow";

    $responseJson = json_encode($responseData);

    echo $responseJson;

    die();
}

add_action('wp_ajax_unfollow_member', 'unfollow_member');

add_action('wp_ajax_nopriv_unfollow_member', 'unfollow_member');









function save_resource_media()
{

    global $wpdb;

    $responseData = array();

    $rmid = $_POST['rmid'];

    $current_user_id = get_current_user_id();

    $sql = "SELECT * FROM wp_saved_resources WHERE resource_id = '" . $rmid . "' 

                AND user_id = '" . $current_user_id . "'";

    $check = $wpdb->get_results($sql, ARRAY_A);

    $myArr['sql'] = $sql;

    $myArr['ums'] = $check;

    if (count($check) > 0) {

        $myArr['msg'] = "Resource media already saved";

        $myJSON = json_encode($myArr);

        echo $myJSON;

        die();
    }



    $group_id = ($_POST['group_id']) ? $_POST['group_id'] : "";

    $insertData = array(

        'resource_id' => $rmid,

        'user_id' => $current_user_id,

        'group_id' => $group_id

    );



    $dd = $wpdb->insert('wp_saved_resources', $insertData);

    $myArr['sql'] = $dd;

    $myArr['msg'] = "Resource media saved successfully";

    $myJSON = json_encode($myArr);

    echo $myJSON;

    die();
}

add_action('wp_ajax_save_resource_media', 'save_resource_media');

add_action('wp_ajax_nopriv_save_resource_media', 'save_resource_media');













function create_announcement()
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



        $announcement_id =     wp_insert_post($wordpress_post);

        add_post_meta($announcement_id, 'announcement_group_id', @$_POST['ugroup_id']);





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



        header('Location: ' . $_SERVER["HTTP_REFERER"]);

        exit;
    }
}

add_action('init', 'create_announcement');





function update_announcement()
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

add_action('init', 'update_announcement');







function delete_announcement($query)
{

    if (!empty($_POST['delete_announcement'])) {

        $post_id  =  $_POST['ann_id'];

        wp_delete_post($post_id);

        add_action('form_message', "Announcement Deleted Successfully");
    }
}

add_action('init', 'delete_announcement');







function create_blog()
{



    if (!empty($_POST['create_blog'])) {



        $post_title = ($_POST['post_title']) ? sanitize_text_field($_POST['post_title']) : "";

        $post_content = ($_POST['post_content']) ? sanitize_text_field($_POST['post_content']) : "";

        $blog_group_id = ($_POST['blog_group_id']) ? sanitize_text_field($_POST['blog_group_id']) : "";

        $ugroup_id = ($_POST['ugroup_id']) ? sanitize_text_field($_POST['ugroup_id']) : "";

        $blog_groups = ($_POST['blog_groups']) ? sanitize_text_field($_POST['blog_groups']) : "";

        $current_user_id = get_current_user_id();



        $wordpress_post = array(

            'post_title' => $post_title,

            'post_content' => $post_content,

            'post_status' => 'pending',

            'post_author' => $current_user_id,

            'post_type' => 'post'

        );



        $blog_id  =  wp_insert_post($wordpress_post);

        //add_post_meta( $blog_id, 'ugroup_id', $ugroup_id);



        if ($blog_group_id == 'all_users') {

            $all_users = get_users();

            foreach ($all_users as $value) {

                $group_title  = get_the_title($blog_group_id);

                $subject = "Blog Notification";

                $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@worldcares.org>' . "\r\n";

                $message = "

                    Hi " . $value->display_name . ",

                     A user has created the blog $post_title in group $group_title.

                     View Blog: " . get_permalink($blog_id) . "

                     Thank You, Admin";

                wp_mail($value->user_email, $subject, $message, $headers);
            }





            add_post_meta($blog_id, 'blog_group_id', @$_POST['blog_group_id']);

            add_post_meta($blog_id, 'ugroup_id', $ugroup_id);
        } else {

            $allGroupUserID  = learndash_get_groups_user_ids($blog_groups);



            foreach ($allGroupUserID as $USERID) {

                $group_title  = get_the_title($blog_group_id);

                $user = get_user_by('id', $USERID);

                $groupUserEmail = $user->user_email;



                $subject = "Blog Notification";

                $headers = 'From: ' . get_bloginfo('name') . ' <no_reply@worldcares.org>' . "\r\n";

                $message = "

                    Hi " . $user->display_name . ",

                     user has created the blog $post_title in group $group_title.

                    View Blog: " . get_permalink($blog_id) . "

                    Thank You, Admin";

                wp_mail($groupUserEmail, $subject, $message, $headers);
            }

            add_post_meta($blog_id, 'blog_group_id', @$_POST['blog_groups']);

            add_post_meta($blog_id, 'ugroup_id', $ugroup_id);
        }



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

            set_post_thumbnail($blog_id, $attach_id);
        }



        // send email to admin 

        $adminUsers = get_users('role=Administrator');

        foreach ($adminUsers as $value) {

            $adminEmail  = $value->user_email;

            $userInfo  =  get_userdata($value->ID);

            $message = 'A user has created the blog with title ' . '<strong>'  . $post_title .  '</strong>' .

                '. Please approve it from your admin dashboard.' .

                '<a href="https://knowledge.communication.worldcares.org/wp-login.php"><button type="button" class="btn btn-danger">' . 'Go to Admin Dashboard' . '</button></a>';

            $subject = 'Blog Notification';

            $header = "From:noreply@knowledge.communication.worldcares.org \r\n";

            $header .= "MIME-Version: 1.0\r\n";

            $header .= "Content-type: text/html\r\n";

            wp_mail($adminEmail, $subject, $message, $header);
        }



        //  send email to blog user

        $userDetail  =  get_userdata($current_user_id);

        $userEmail  = $userDetail->user_email;

        $message = 'Your blog with title ' . '<strong>'  . $post_title .  '</strong>' .

            '. has been submitted to admin for aproval.Once approved , it will get visible on your dashboard.';



        $subject = 'Blog Notification';

        $header = "From:noreply@knowledge.communication.worldcares.org \r\n";

        $header .= "MIME-Version: 1.0\r\n";

        $header .= "Content-type: text/html\r\n";

        wp_mail($userEmail, $subject, $message, $header);



        // Set thumbnail image    



        // header('Location: '.$_SERVER["HTTP_REFERER"]);

        echo "<script>

                alert('Blog created successfully and sent to admin for approval !');

                window.location.href='https://knowledge.communication.worldcares.org/wccgroups';

                </script>";

        exit;
    }
}

add_action('init', 'create_blog');





function loginUsers($query)

{

    global $wpdb;

    if (!empty($_POST['loginUsers'])) {



        $email = ($_POST['email']) ? sanitize_text_field($_POST['email']) : "";

        $password = ($_POST['password']) ? sanitize_text_field($_POST['password']) : "";



        $user =  wp_login($email, $password);

        if ($user) {

            $user = get_user_by('email', $email);

            wp_set_current_user($user->ID);

            wp_set_auth_cookie($user->ID);

            if (!empty($_GET['url'])) {



                wp_redirect($_GET['url']);

                exit;
            }



            $my_url  = $_GET['redirect_to'];



            if ($my_url === 'general-donation') {

                $concat1 =  'https://knowledge.communication.worldcares.org/dev/dontaion/' . $my_url;

                wp_redirect($concat1);

                exit;
            } elseif ($my_url === 'disaster-response-fund') {

                $concat2 =  'https://knowledge.communication.worldcares.org/dev/dontaion/disaster-response-fund';

                wp_redirect($concat2);

                exit;
            } elseif ($my_url == 'ppe-for-ready-responders/') {

                $concat3 =  'https://knowledge.communication.worldcares.org/dev/dontaion/ppe-for-ready-responders/';

                wp_redirect($concat3);

                exit;
            } elseif ($my_url == 'help-haiti') {

                $concat4 =  'https://knowledge.communication.worldcares.org/dev/dontaion/help-haiti';

                wp_redirect($concat4);

                exit;
            } elseif ($my_url == 'help-ukraine') {

                $concat5 =  'https://knowledge.communication.worldcares.org/dev/dontaion/help-ukraine';

                wp_redirect($concat5);

                exit;
            } else {

                wp_redirect(site_url('dashboard-home'));

                exit;
            }
        } else {



            // return new WP_Error( 'Error', 'Invalid Email or Password, Please try again !' );

            echo "<script>alert('Sorry! Invalid login credentials.')</script>";

            return new WP_Error('invalid_user', 'Invalid User.', array('status' => 200));
        }

        add_action('form_message', "User login  Successfully");
    }
}

add_action('init', 'loginUsers');













function delete_blog($query)
{

    if (!empty($_POST['delete_blog'])) {

        $post_id  =  $_POST['blog_id'];

        wp_delete_post($post_id);

        add_action('form_message', "Blog Deleted Successfully");
    }
}

add_action('init', 'delete_blog');





add_action('wp_ajax_delete_record', 'delete_record_callback');

function delete_record_callback()
{



    echo 'ajaxreq';

    die;

    // Check nonce for security

    check_ajax_referer('delete_record_nonce', 'security');



    // Get the post ID from AJAX request

    $post_id = $_POST['post_id'];



    // Check if user has permission to delete the post

    if (current_user_can('delete_post', $post_id)) {

        // Delete the post

        wp_delete_post($post_id, true);



        // Send a success response

        echo 'Record deleted successfully.';
    } else {

        // Send an error response if user doesn't have permission

        wp_send_json_error('Permission denied to delete this record.');
    }



    // Always die at the end of AJAX actions

    wp_die();
}











function delete_calendarEvent($query)
{

    global $wpdb;

    if (!empty($_POST['delete_calendarEvent'])) {

        echo $eventID  =  $_POST['calender_event_id'];

        $wpdb->delete('events_calendar', array('post_id' => $eventID));

        wp_delete_post($eventID);

        header('Location: ' . site_url('event-calendar'));

        exit;
    }
}

add_action('init', 'delete_calendarEvent');





function ums_elementor_shortcode($atts)
{



    $cat_id = 40;

    $args = array(

        'posts_per_page' => 50,

        'post_type' => 'sfwd-courses',

        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),

        ),

    );



    $ums = get_posts($args);





    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

          </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">

            <div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';

    if (count($ums) > 0) {

        foreach ($ums as $val) {

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }



            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }





            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                           

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . get_field("course_description", $val->ID) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;
}

add_shortcode('ums_elementor_php_output', 'ums_elementor_shortcode');









/*Standalone training*/

function ums_elementor_standalone_shortcode($atts)
{



    $cat_id = 41;

    $args = array(

        'posts_per_page' => 10,

        'posts_total' => 50,

        'post_type' => 'sfwd-courses',

        'mid_size'  => 2,



        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),



        ),

    );



    $ums = get_posts($args);





    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">

            <div class="course-result abhi">

                <span>' . count($ums) . ' Result</span>

            </div>';

    if (count($ums) > 0) {

        foreach ($ums as $val) {

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }



            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }



            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                        

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . '</li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . get_field("course_description", $val->ID) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;
}

add_shortcode('ums_elementor_standalone_traing', 'ums_elementor_standalone_shortcode');



/*Standalone training*/





/*Just in time training*/



function justInTime_standalone_shortcode($atts)
{



    $cat_id = 49;

    $args = array(

        'posts_per_page' => 5,

        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),

        /*'posts_total' => 50, */

        'post_type' => 'sfwd-courses',

        'mid_size'  => 2,



        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),



        ),

    );

    $query = new WP_Query($args);

    $max_num_pages = $query->max_num_pages;

    $ums = get_posts($args);





    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';

    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        $count_the_posts = 0;

        foreach ($ums as $val) {

            $count_the_posts++;

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }



            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                            

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . wp_trim_words(get_field("course_description", $val->ID), 25) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;





    echo "<div class='page-nav-container'>" . paginate_links(array(

        //'total' => $count_the_posts,        

        'total' => $max_num_pages,

        'prev_text' => __('<'),

        'next_text' => __('>')

    )) . "</div>";
}

add_shortcode('just_in_time_training', 'justInTime_standalone_shortcode');

/*Just in time training */

/* Disaster Volunteer credentials*/



function disaster_volunteer_shortcode($atts)
{



    $cat_id = 40;

    $args = array(

        'post_type' => 'sfwd-courses',

        'mid_size'  => 2,

        'posts_per_page' => 5,

        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),



        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category',

                'field'    => 'id',

                'terms'    => $cat_id,

            ),

        ),

    );







    $query = new WP_Query($args);

    $max_num_pages = $query->max_num_pages;

    $ums = get_posts($args);



    //   echo '<pre>';

    //  print_r($ums);



    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">

            <div class="course-result abhi">

                <span>' . count($ums) . ' Results</span>

            </div>';

    if (count($ums) > 0) {

        $count_the_posts = 0;

        foreach ($ums as $val) {

            $count_the_posts++;

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                            

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . wp_trim_words(get_field("course_description", $val->ID), 25) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }

    $str .= '</div>

            </div>';

    echo  $str;



    echo "<div class='page-nav-container'>" . paginate_links(array(

        //'total' => $count_the_posts,

        'total' => $max_num_pages,

        'prev_text' => __('<'),

        'next_text' => __('>')

    )) . "</div>";
}

add_shortcode('disaster_volunteer_credentials', 'disaster_volunteer_shortcode');





/* Disaster Volunteer credentials*/



function level_one_shortcode($atts)
{



    $cat_id = 89;

    $args = array(

        /*'posts_per_page' => 10,*/

        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),

        /*'posts_total' => 50,*/

        'post_type' => 'sfwd-courses',

        'mid_size'  => 2,



        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),



        ),

    );



    $ums = get_posts($args);



    /* echo '<pre>';

     print_r($ums);*/



    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';

    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        $count_the_posts = 0;

        foreach ($ums as $val) {

            $count_the_posts++;

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                            

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . wp_trim_words(get_field("course_description", $val->ID), 25) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;



    echo "<div class='page-nav-container'>" . paginate_links(array(

        'total' => $count_the_posts,

        'prev_text' => __('<'),

        'next_text' => __('>')

    )) . "</div>";
}

add_shortcode('level_one', 'level_one_shortcode');



function level_two_shortcode($atts)
{



    $cat_id = 90;

    $args = array(

        'posts_per_page' => 5,

        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),

        /*'posts_total' => 50,*/

        'post_type' => 'sfwd-courses',

        'mid_size'  => 2,



        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),



        ),

    );

    $query = new WP_Query($args);

    $max_num_pages = $query->max_num_pages;

    $ums = get_posts($args);



    /* echo '<pre>';

     print_r($ums);*/



    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';

    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        $count_the_posts = 0;

        foreach ($ums as $val) {

            $count_the_posts++;

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                            

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . wp_trim_words(get_field("course_description", $val->ID), 25) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }

    $str .= '</div>

            </div>';

    echo  $str;



    echo "<div class='page-nav-container'>" . paginate_links(array(

        //'total' => $count_the_posts,

        'total' => $max_num_pages,

        'prev_text' => __('<'),

        'next_text' => __('>')

    )) . "</div>";
}

add_shortcode('level_two', 'level_two_shortcode');





function level_three_shortcode($atts)
{



    $cat_id = 91;

    $args = array(

        'posts_per_page' => 5,

        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),

        /*'posts_total' => 50,*/

        'post_type' => 'sfwd-courses',

        'mid_size'  => 2,



        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),



        ),

    );

    $query = new WP_Query($args);

    $max_num_pages = $query->max_num_pages;

    $ums = get_posts($args);



    /* echo '<pre>';

     print_r($ums);*/



    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';

    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        $count_the_posts = 0;

        foreach ($ums as $val) {

            $count_the_posts++;

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                            

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . wp_trim_words(get_field("course_description", $val->ID), 25) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }









    $str .= '</div>

            </div>';

    echo  $str;



    echo "<div class='page-nav-container'>" . paginate_links(array(

        //'total' => $count_the_posts,

        'total' => $max_num_pages,

        'prev_text' => __('<'),

        'next_text' => __('>')

    )) . "</div>";
}

add_shortcode('level_three', 'level_three_shortcode');





/*General Readiness course list*/



function genearlReadiness_standalone_shortcode($atts)
{



    $cat_id = 75;

    $args = array(

        'posts_per_page' => 5,

        'posts_total' => 50,

        'post_type' => 'sfwd-courses',

        'mid_size'  => 2,



        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),



        ),

    );

    $query = new WP_Query($args);

    $max_num_pages = $query->max_num_pages;

    $ums = get_posts($args);





    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';

    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        foreach ($ums as $val) {

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                           

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . get_field("course_description", $val->ID) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;

    echo "<div class='page-nav-container'>" . paginate_links(array(

        'total' => $max_num_pages,

        'prev_text' => __('<'),

        'next_text' => __('>')

    )) . "</div>";
}

add_shortcode('general_readiness_course', 'genearlReadiness_standalone_shortcode');





/*Genearl Readiness course list*/



/*DV 101 course*/

function DV103_standalone_shortcode($atts)
{



    $cat_id = 79;

    $args = array(

        'posts_per_page' => 10,

        'posts_total' => 50,

        'post_type' => 'sfwd-courses',

        'mid_size'  => 2,



        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),



        ),

    );



    $ums = get_posts($args);

    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">

            <div class="course-result abhi">

                <span>' . count($ums) . ' Result</span>

            </div>';

    if (count($ums) > 0) {

        foreach ($ums as $val) {

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                            

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . '</li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . get_field("course_description", $val->ID) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;
}

add_shortcode('dv103_course', 'DV103_standalone_shortcode');



/*DV Introductory Level Training*/

function DV_Introductory_Level_Training($atts)
{

    $cat_id = 81;

    $args = array(

        'posts_per_page' => 5,

        'posts_total' => 50,

        'post_type' => 'sfwd-courses',

        'mid_size'  => 2,



        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),



        ),

    );

    $query = new WP_Query($args);

    $max_num_pages = $query->max_num_pages;

    $ums = get_posts($args);

    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';

    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        foreach ($ums as $val) {

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }



            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                            

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . get_field("course_description", $val->ID) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }

    $str .= '</div>

            </div>';

    echo  $str;

    /*  echo "<div class='page-nav-container'>" . paginate_links(array(

    'total' => $max_num_pages,

    'prev_text' => __('<'),

    'next_text' => __('>')

)) . "</div>";*/
}

add_shortcode('dv_Introductory_course', 'DV_Introductory_Level_Training');



/*DV 102 course*/

function DV102_standalone_shortcode($atts)
{



    $cat_id = 77;

    $args = array(

        'posts_per_page' => 5,

        'posts_total' => 50,

        'post_type' => 'sfwd-courses',

        'mid_size'  => 2,



        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),



        ),

    );

    $query = new WP_Query($args);

    $max_num_pages = $query->max_num_pages;

    $ums = get_posts($args);

    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';

    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        foreach ($ums as $val) {

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                            

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . get_field("course_description", $val->ID) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;

    /*  echo "<div class='page-nav-container'>" . paginate_links(array(

    'total' => $max_num_pages,

    'prev_text' => __('<'),

    'next_text' => __('>')

)) . "</div>";*/
}

add_shortcode('dv102_course', 'DV102_standalone_shortcode');



/*DV 102 Course*/







/*leadeship*/

function leadership_standalone_shortcode($atts)
{



    $cat_id = 44;

    $args = array(

        'posts_per_page' => 5,

        'posts_total' => 50,

        'post_type' => 'sfwd-courses',

        'mid_size'  => 2,



        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),



        ),

    );

    $query = new WP_Query($args);

    $max_num_pages = $query->max_num_pages;

    $ums = get_posts($args);

    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';

    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        foreach ($ums as $val) {

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                            

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . '</li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . get_field("course_description", $val->ID) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;



    /* echo "<div class='page-nav-container'>" . paginate_links(array(

    'total' => $max_num_pages,

    'prev_text' => __('<'),

    'next_text' => __('>')

)) . "</div>";*/
}

add_shortcode('leadership_course_list', 'leadership_standalone_shortcode');



/*leadership*/







function ums_covid_training_elementor_shortcode($atts)
{



    $cat_id = 38;

    $args = array(

        /*'posts_per_page' => 50,  */

        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),

        'post_type' => 'sfwd-courses',

        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),

        ),

    );



    $ums = get_posts($args);





    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">

            <div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';

    if (count($ums) > 0) {

        $count_the_posts = 0;

        foreach ($ums as $val) {

            $count_the_posts++;

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                           

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . '</li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . wp_trim_words(get_field("course_description", $val->ID), 25) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;



    echo "<div class='page-nav-container'>" . paginate_links(array(

        'total' => $count_the_posts,

        'prev_text' => __('<'),

        'next_text' => __('>')

    )) . "</div>";
}

add_shortcode('ums_covid_training', 'ums_covid_training_elementor_shortcode');



function general_Safety_elementor_shortcode($atts)
{



    $cat_id = 84;

    $args = array(

        /*'posts_per_page' => 50,  */

        'post_type' => 'sfwd-courses',

        'mid_size'  => 2,

        'posts_per_page' => 5,

        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),



        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),

        ),

    );

    $query = new WP_Query($args);

    $max_num_pages = $query->max_num_pages;

    $ums = get_posts($args);

    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';

    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        $count_the_posts = 0;

        foreach ($ums as $val) {

            $count_the_posts++;

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }



            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }



            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                           

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . wp_trim_words(get_field("course_description", $val->ID), 25) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;



    echo "<div class='page-nav-container'>" . paginate_links(array(

        'total' => $max_num_pages,

        'prev_text' => __('<'),

        'next_text' => __('>')

    )) . "</div>";
}

add_shortcode('general_Safety', 'general_Safety_elementor_shortcode');





function disaster_volunteer_training_elementor_shortcode($atts)
{



    $cat_id = 85;

    $args = array(

        'posts_per_page' => 5,

        'mid_size'  => 2,

        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),

        'post_type' => 'sfwd-courses',

        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),

        ),

    );

    $query = new WP_Query($args);

    $max_num_pages = $query->max_num_pages;

    $ums = get_posts($args);

    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';

    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        $count_the_posts = 0;

        foreach ($ums as $val) {

            $count_the_posts++;

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                           

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . wp_trim_words(get_field("course_description", $val->ID), 25) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;



    echo "<div class='page-nav-container'>" . paginate_links(array(

        'total' => $max_num_pages,

        'prev_text' => __('<'),

        'next_text' => __('>')

    )) . "</div>";
}

add_shortcode('disaster_volunteer_training', 'disaster_volunteer_training_elementor_shortcode');



/*Level 3 course*/



function level_3_shortcode_management_course($atts)
{



    $cat_id = 91;

    $args = array(

        /*'posts_per_page' => 10,*/

        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),

        /*'posts_total' => 50,*/

        'post_type' => 'sfwd-courses',

        'mid_size'  => 2,



        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),



        ),

    );



    $ums = get_posts($args);



    /* echo '<pre>';

     print_r($ums);*/



    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';

    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        $count_the_posts = 0;

        foreach ($ums as $val) {

            $count_the_posts++;

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                            

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . wp_trim_words(get_field("course_description", $val->ID), 25) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;



    echo "<div class='page-nav-container'>" . paginate_links(array(

        'total' => $count_the_posts,

        'prev_text' => __('<'),

        'next_text' => __('>')

    )) . "</div>";
}

add_shortcode('disaster_volunteer_training_level3', 'level_3_shortcode_management_course');







/*Level 3 course*/











function managers_training_elementor_shortcode($atts)
{



    $cat_id = 86;

    $args = array(

        'mid_size'  => 2,

        'posts_per_page' => 5,

        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),

        'post_type' => 'sfwd-courses',

        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),

        ),

    );

    $query = new WP_Query($args);

    $max_num_pages = $query->max_num_pages;

    $ums = get_posts($args);





    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';

    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        $count_the_posts = 0;

        foreach ($ums as $val) {

            $count_the_posts++;

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                           

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . '</li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . wp_trim_words(get_field("course_description", $val->ID), 25) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;



    echo "<div class='page-nav-container'>" . paginate_links(array(

        'total' => $max_num_pages,

        'prev_text' => __('<'),

        'next_text' => __('>')

    )) . "</div>";
}

add_shortcode('managers_training', 'managers_training_elementor_shortcode');









function ums_language_training_elementor_shortcode($atts)
{



    $cat_id = 47;

    //$cat_id = 51;

    $args11 = array(

        'taxonomy' => 'ld_course_category',

        'orderby' => 'name',

        'order'   => 'ASC',

        'parent' => $cat_id

    );

    $cats2 = get_categories($args11);



    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

    <div class="tab">';



    $j = 1;

    foreach ($cats2 as $cat) {

        $active = '';

        if ($j === 1) {

            $active =  'active';
        }



        $tabs = "'tab-" . $cat->term_id . "'";





        $str .= '<button class="tablinks ' . $active . '" onclick="openCity(event, ' . $tabs . ')">' . $cat->name . '</button>';



        $j++;
    }

    $str .= '</div>';

    $i = 1;

    foreach ($cats2 as $cat1) {



        $args = array(

            'posts_per_page' => 5,

            'mid_size'  => 2,

            'post_type' => 'sfwd-courses',

            'tax_query' => array(

                array(

                    'taxonomy' => 'ld_course_category',

                    'field'    => 'id',

                    'terms'    => $cat1->term_id,

                ),

            ),

        );

        $query = new WP_Query($args);

        $max_num_pages = $query->max_num_pages;

        $ums = get_posts($args);

        $style = 'display:none';

        if ($i === 1) {

            $style = 'display:block !important';
        }







        $str .= '<div id="tab-' . $cat1->term_id . '" class="tabcontent" style=' . $style . '">';

        if (count($ums) > 1) {

            $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
        } else {

            $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
        }

        $i++;

        if (count($ums) > 0) {

            foreach ($ums as $val) {

                $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

                if (empty($groupImg)) {

                    $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
                }

                if (get_field('course_hour', $val->ID) > 1) {

                    $TotalTime = get_field('course_hour', $val->ID) . ' hours';
                } else {

                    $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
                }

                $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                            

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . get_field("course_description", $val->ID) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
            }
        }



        $str .= '</div>';
    }

    $str .= '</div></div><script><script>

function openCity(evt, cityName) {

  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");

  for (i = 0; i < tabcontent.length; i++) {

    tabcontent[i].style.display = "none";

  }

  tablinks = document.getElementsByClassName("tablinks");

  for (i = 0; i < tablinks.length; i++) {

    tablinks[i].className = tablinks[i].className.replace(" active", "");

  }

  document.getElementById(cityName).style.display = "block";

  evt.currentTarget.className += " active";

}

</script></script>';



    echo  $str;
}

add_shortcode('ums_language_training', 'ums_language_training_elementor_shortcode');



function spanish_training_elementor_shortcode($atts)
{



    $cat_id = 52;

    $args = array(

        'mid_size'  => 2,

        'posts_per_page' => 5,

        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),

        'post_type' => 'sfwd-courses',

        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),

        ),

    );

    $query = new WP_Query($args);

    $max_num_pages = $query->max_num_pages;

    $ums = get_posts($args);





    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';

    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        $count_the_posts = 0;

        foreach ($ums as $val) {

            $count_the_posts++;

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                           

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . wp_trim_words(get_field("course_description", $val->ID), 25) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;



    echo "<div class='page-nav-container'>" . paginate_links(array(

        'total' => $max_num_pages,

        'prev_text' => __('<'),

        'next_text' => __('>')

    )) . "</div>";
}

add_shortcode('spanish_training', 'spanish_training_elementor_shortcode');



function ukrainian_training_elementor_shortcode($atts)
{



    $cat_id = 53;

    $args = array(

        'mid_size'  => 2,

        'posts_per_page' => 5,

        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),

        'post_type' => 'sfwd-courses',

        'tax_query' => array(

            array(

                'taxonomy' => 'ld_course_category', //double check your taxonomy name in you dd 

                'field'    => 'id',

                'terms'    => $cat_id,

            ),

        ),

    );

    $query = new WP_Query($args);

    $max_num_pages = $query->max_num_pages;

    $ums = get_posts($args);

    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

        <div id="tab-1" class="tabcontent" style="display:block;">';



    if (count($ums) > 1) {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Results</span>

            </div>';
    } else {

        $str .= '<div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';
    }

    if (count($ums) > 0) {

        $count_the_posts = 0;

        foreach ($ums as $val) {

            $count_the_posts++;

            $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

            if (empty($groupImg)) {

                $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
            }

            if (get_field('course_hour', $val->ID) > 1) {

                $TotalTime = get_field('course_hour', $val->ID) . ' hours';
            } else {

                $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
            }

            $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                           

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . '</li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . wp_trim_words(get_field("course_description", $val->ID), 25) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
        }
    }



    $str .= '</div>

            </div>';

    echo  $str;



    echo "<div class='page-nav-container'>" . paginate_links(array(

        'total' => $max_num_pages,

        'prev_text' => __('<'),

        'next_text' => __('>')

    )) . "</div>";
}

add_shortcode('ukrainian_training', 'ukrainian_training_elementor_shortcode');



/*Standalone training page*/



function standalone_trainig_shortcode($atts)
{



    $cat_id = 74;



    $args11 = array(

        'taxonomy' => 'ld_course_category',

        'orderby' => 'name',

        'order'   => 'ASC',

        'parent' => $cat_id

    );

    $cats2 = get_categories($args11);



    $str = '<div class="container training">

    <div class="section-title">

        <h2>Courses List</h2>

    </div>

    <div class="tab-section">

    <div class="tab">';



    $j = 1;

    foreach ($cats2 as $cat) {

        $active = '';

        if ($j === 1) {

            $active =  'active';
        }



        $tabs = "'tab-" . $cat->term_id . "'";





        $str .= '<button class="tablinks ' . $active . '" onclick="openCity(event, ' . $tabs . ')">' . $cat->name . '</button>';



        $j++;
    }

    $str .= '</div>';

    $i = 1;

    foreach ($cats2 as $cat1) {



        $args = array(

            'posts_per_page' => 50,

            'post_type' => 'sfwd-courses',

            'tax_query' => array(

                array(

                    'taxonomy' => 'ld_course_category',

                    'field'    => 'id',

                    'terms'    => $cat1->term_id,

                ),

            ),

        );

        $ums = get_posts($args);

        $style = 'display:none';

        if ($i === 1) {

            $style = 'display:block !important';
        }







        $str .= '<div id="tab-' . $cat1->term_id . '" class="tabcontent" style=' . $style . '">

            <div class="course-result">

                <span>' . count($ums) . ' Result</span>

            </div>';

        $i++;

        if (count($ums) > 0) {

            foreach ($ums as $val) {

                $groupImg = wp_get_attachment_url(get_post_thumbnail_id($val->ID));

                if (empty($groupImg)) {

                    $groupImg = site_url('wp-content/uploads/2022/12/dva-logo.png');
                }

                if (get_field('course_hour', $val->ID) > 1) {

                    $TotalTime = get_field('course_hour', $val->ID) . ' hours';
                } else {

                    $TotalTime =   get_field('course_hour', $val->ID) . ' hour';
                }

                $str .= '<div class="mb-3">

                <div class="course-wrapper mb-3">

                    <div class="course-row">

                        <div class="course-image d-flex align-items-center">

                            <img src="' . $groupImg . '" alt="" height="365" width="260">

                        </div>

                        <div class="course-content">

                            <h3>' . $val->post_title . '</h3>

                            

                            <div class="course-meta">

                                <ul>

                                    <li>' . $TotalTime . ' </li>

                                    <li>All Levels</li>

                                </ul>

                            </div>

                            <p>' . get_field("course_description", $val->ID) . '</p>

                            <div class="custom-btn">

                                <a href="' . get_permalink($val->ID) . '" class="btn btn-primary">Get Started</a>   

                            </div>

                        </div>

                    </div>

                </div>

            </div>';
            }
        }



        $str .= '</div>';
    }

    $str .= '</div></div><script><script>

function openCity(evt, cityName) {

  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");

  for (i = 0; i < tabcontent.length; i++) {

    tabcontent[i].style.display = "none";

  }

  tablinks = document.getElementsByClassName("tablinks");

  for (i = 0; i < tablinks.length; i++) {

    tablinks[i].className = tablinks[i].className.replace(" active", "");

  }

  document.getElementById(cityName).style.display = "block";

  evt.currentTarget.className += " active";

}

</script></script>';



    echo  $str;
}

add_shortcode('standalone_training', 'standalone_trainig_shortcode');





/*Standalone training page*/











function ums_get_related_posts($post_id, $related_count, $args = array())
{

    $terms = get_the_terms($post_id, 'category');



    if (empty($terms)) $terms = array();



    $term_list = wp_list_pluck($terms, 'slug');



    $related_args = array(

        'post_type' => 'post',

        'posts_per_page' => $related_count,

        'post_status' => 'publish',

        'post__not_in' => array($post_id),

        'orderby' => 'rand',

        'tax_query' => array(

            array(

                'taxonomy' => 'category',

                'field' => 'slug',

                'terms' => $term_list

            )

        )

    );



    return new WP_Query($related_args);
}









function update_feed_like_count()
{



    $post_id = intval($_POST['post_id']);

    $cuid = get_current_user_id();





    if (filter_var($post_id, FILTER_VALIDATE_INT)) {



        $article = get_post($post_id);

        $output_count = 0;



        if (!is_null($article)) {

            $count = get_post_meta($post_id, 'feed_likes', true);

            $feed_like_by = get_post_meta($post_id, 'feed_like_by_' . $cuid, $cuid);

            if ($feed_like_by) {

                $n = intval($count);

                $output_count = $n;
            } else {



                if ($count == '') {

                    update_post_meta($post_id, 'feed_likes', '1');

                    update_post_meta($post_id, 'feed_like_by_' . $cuid, $cuid);

                    $output_count = 1;
                } else {

                    $n = intval($count);

                    $n++;

                    update_post_meta($post_id, 'feed_likes', $n);

                    update_post_meta($post_id, 'feed_like_by_' . $cuid, $cuid);

                    $output_count = $n;
                }
            }
        }
    }

    $output = array('count' => $output_count);

    echo json_encode($output);

    exit();
}



add_action('wp_ajax_update_feed_like', 'update_feed_like_count');

add_action('wp_ajax_nopriv_update_feed_like', 'update_feed_like_count');





function display_feed_likes($post_id = null)
{

    $value = '';

    if (is_null($post_id)) {

        global $post;

        $value = get_post_meta($post->ID, 'feed_likes', true);
    } else {

        $value = get_post_meta($post_id, 'feed_likes', true);
    }



    echo $value;
}





function addFeedComment()
{

    $current_user = wp_get_current_user();

    $post_id = intval($_POST['post_id']);

    $feedComment =  $_POST['feedComment'];



    $time = current_time('mysql');



    $data = array(

        'comment_post_ID' => $post_id,

        'comment_author' => $current_user->user_login,

        'comment_author_email' => $current_user->user_email,

        'comment_content' => $feedComment,

        'user_id' => $current_user->ID,

        'comment_date' => $time,

        'comment_approved' => 1,

        'comment_type' => 'custom-comment-class'

    );

    wp_insert_comment($data);



    $user_img = get_avatar_url($current_user->ID,   array("size" => 50));

    if (empty($user_img)) {

        $user_img = get_template_directory_uri() . "/avatar.png";
    }





    $html = '<div class="part-1 d-flex align-items-center">';

    $html .= '<div class="image"><img src="' . $user_img . '">';

    $html .= '</div>';

    $html .= '<div class="post-content ml-3">';

    $html .= '<div class="username">' . $current_user->user_login . '</div>';

    $html .= ' <div class="time">' . $time . '</div>';

    $html .= '</div>';

    $html .= '</div>';

    $html .= '<div class="comment-box">';

    $html .= '<p>' . $feedComment . '</p></div>';





    $output = array('success' => "Feed has been added", 'comment' => $html);

    echo json_encode($output);

    exit();
}



add_action('wp_ajax_add_feed_comment', 'addFeedComment');

add_action('wp_ajax_nopriv_add_feed_comment', 'addFeedComment');







function getFeedCommentByID()
{

    $current_user = wp_get_current_user();

    $post_id = intval($_POST['post_id']);



    $html = '';

    $comments = get_comments(array(

        'post_id' => $post_id,

        'number' => '2'
    ));



    if (count($comments)) {

        foreach ($comments as $comment) {

            $user_img = get_avatar_url($comment->user_id,   array("size" => 50));

            if (empty($user_img)) {

                $user_img = get_template_directory_uri() . "/avatar.png";
            }





            $html .= '<div class="part-1 d-flex align-items-center">';

            $html .= '<div class="image"><img src="' . $user_img . '">';

            $html .= '</div>';

            $html .= '<div class="post-content ml-3">';

            $html .= '<div class="username">' . $comment->comment_author . '</div>';

            $html .= ' <div class="time">' . $comment->comment_date . '</div>';

            $html .= '</div>';

            $html .= '</div>';

            $html .= '<div class="comment-box">';

            $html .= '<p>' . $comment->comment_content . '</p></div>';
        }
    }





    $output = array('success' => "CommentList", 'comment' => $html);

    echo json_encode($output);

    exit();
}



add_action('wp_ajax_get_feed_comment', 'getFeedCommentByID');

add_action('wp_ajax_nopriv_get_feed_comment', 'getFeedCommentByID');



add_filter('avatar_defaults', 'wpb_new_gravatar');

function wpb_new_gravatar($avatar_defaults)
{

    $myavatar = get_template_directory_uri() . '/assets/images/opn_menu_logo.png';

    $avatar_defaults[$myavatar] = "Default Gravatar";

    return $avatar_defaults;
}





/*function modify_jquery() {

if (!is_admin()) {

    wp_deregister_script('jquery');

    wp_register_script('jquery', 'https://code.jquery.com/jquery-1.11.3.min.js');

    wp_enqueue_script('jquery');

}

}

add_action('init', 'modify_jquery');*/





function notifyauthor($post_id)
{

    if (is_admin() && !(metadata_exists('post', $post_id, 'sent_notification_email'))) {

        $post = get_post($post_id);

        $author = get_userdata($post->post_author);

        $subject = "Post Approval  Notification";

        $headers = 'From: ' . get_bloginfo('name') . ' <my_email@gmail.com>' . "\r\n";

        $message = "

            Hi " . $author->display_name . ",

            

            Your post, \"" . $post->post_title . "\" has just been published.

            

            View post: " . get_permalink($post_id) . "

            

            Thank You, Admin";



        wp_mail($author->user_email, $subject, $message, $headers);

        // Set a meta key as a counter

        update_post_meta($post_id, 'sent_notification_email', '1');
    }
}

add_action('publish_post', 'notifyauthor');





add_action('wpcf7_init', 'wpcf7_add_form_tag_current_url');

function wpcf7_add_form_tag_current_url()
{

    // Add shortcode for the form [current_url]

    wpcf7_add_form_tag(
        'current_url',

        'wpcf7_current_url_form_tag_handler',

        array(

            'name-attr' => true

        )

    );
}



// Parse the shortcode in the frontend

function wpcf7_current_url_form_tag_handler($tag)
{

    global $wp;

    $url = home_url($wp->request);

    return '<input type="hidden" name="' . $tag['name'] . '" value="' . $url . '" />';
}



// Autocomplete function hookup

add_action("wp", "custom_learndash_automatically_mark_complete");

//function for Mark Complete Button Removal

function custom_learndash_automatically_mark_complete()
{

    global $post, $current_user;

    $excluded_courses = array(1234, 5674, 6785);



    $course_id = learndash_get_course_id();

    if (empty($course_id) || in_array($course_id, $excluded_courses))

        return;



    if (!empty($current_user->ID) && !empty($post->post_type) && $post->post_type == "sfwd-lessons") {

        learndash_process_mark_complete($current_user->ID, $post->ID);
    }



    if (!empty($current_user->ID) && !empty($post->post_type) && $post->post_type == "sfwd-topic") {

        learndash_process_mark_complete($current_user->ID, $post->ID);
    }
}





add_action("wp", "custom_learndash_automatically_mark_incomplete");

//function for Mark inComplete Button Removal

function custom_learndash_automatically_mark_incomplete()
{

    global $post, $current_user;

    $excluded_courses = array(1234, 5674, 6785);



    $course_id = learndash_get_course_id();

    if (empty($course_id) || in_array($course_id, $excluded_courses))

        return;



    if (!empty($current_user->ID) && !empty($post->post_type) && $post->post_type == "sfwd-lessons") {

        learndash_process_mark_incomplete($current_user->ID, $post->ID);
    }



    if (!empty($current_user->ID) && !empty($post->post_type) && $post->post_type == "sfwd-topic") {

        learndash_process_mark_incomplete($current_user->ID, $post->ID);
    }
}













// Filter & Function to rename Lost Password URL

/*add_filter( 'lostpassword_url', 'my_lost_password_page', 10, 2 );

function my_lost_password_page( $lostpassword_url ) {

    return home_url( '/wcc.php?action=lostpassword');   // The name of your new login file

}*/







add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar()
{

    if (!current_user_can('administrator') && !is_admin()) {

        show_admin_bar(false);
    }
}



add_action('check_admin_referer', 'logout_without_confirm', 10, 2);

function logout_without_confirm($action, $result)

{

    /**

     * Allow logout without confirmation

     */

    if ($action == "log-out" && !isset($_GET['_wpnonce'])) {

        $redirect_to = isset($_REQUEST['redirect_to']) ? $_REQUEST['redirect_to'] : 'wp-login.php';

        $location = str_replace('&amp;', '&', wp_logout_url($redirect_to));

        header("Location: $location");

        die;
    }
}



function add_user_skills()
{

    global $wpdb;

    if (!empty($_POST['add_user_skills'])) {

        $multiapply = isset($_POST['skills']) && is_array($_POST['skills']) ? $_POST['skills'] : [];

        $current_user_id = get_current_user_id();

        $chkUser =  $wpdb->get_results("SELECT user_id FROM user_skills WHERE user_id = '" . $current_user_id . "' ", ARRAY_A);

        if (!empty($chkUser)) {

            // $skill_comment = ($_POST['skills'])?sanitize_text_field($_POST['skills']):"";

            $emergency_other = ($_POST['emergency_other']) ? sanitize_text_field($_POST['emergency_other']) : "";

            $general_other = ($_POST['general_other']) ? sanitize_text_field($_POST['general_other']) : "";

            $repair_other = ($_POST['repair_other']) ? sanitize_text_field($_POST['repair_other']) : "";

            $property_other = ($_POST['property_other']) ? sanitize_text_field($_POST['property_other']) : "";

            $health_other = ($_POST['health_other']) ? sanitize_text_field($_POST['property_other']) : "";

            $food_other = ($_POST['food_other']) ? sanitize_text_field($_POST['food_other']) : "";

            $volunteer_other = ($_POST['volunteer_other']) ? sanitize_text_field($_POST['volunteer_other']) : "";

            $additional_info = ($_POST['additional_info']) ? sanitize_text_field($_POST['additional_info']) : "";

            $all_skills = implode(',', $multiapply);



            if (!empty($all_skills) || !empty($general_other) || !empty($emergency_other) || !empty($repair_other)) {

                $wpdb->update('user_skills', array('emergency_other' => $emergency_other, 'general_other' => $general_other, 'repair_other' => $repair_other, 'skill_type' => $all_skills, 'property_other' => $property_other, 'health_other' => $health_other, 'food_other' => $food_other, 'volunteer_other' => $volunteer_other, 'additional_info' => $additional_info), array('user_id' => $current_user_id));
            }
        } else {

            $emergency_other = ($_POST['emergency_other']) ? sanitize_text_field($_POST['emergency_other']) : "";

            $general_other = ($_POST['general_other']) ? sanitize_text_field($_POST['general_other']) : "";

            $repair_other = ($_POST['repair_other']) ? sanitize_text_field($_POST['repair_other']) : "";

            $property_other = ($_POST['property_other']) ? sanitize_text_field($_POST['property_other']) : "";

            $health_other = ($_POST['health_other']) ? sanitize_text_field($_POST['property_other']) : "";

            $food_other = ($_POST['food_other']) ? sanitize_text_field($_POST['food_other']) : "";

            $volunteer_other = ($_POST['volunteer_other']) ? sanitize_text_field($_POST['volunteer_other']) : "";

            $additional_info = ($_POST['additional_info']) ? sanitize_text_field($_POST['additional_info']) : "";

            $all_skills = implode(',', $multiapply);



            $wpdb->insert('user_skills', array('user_id' => $current_user_id, 'emergency_other' => $emergency_other, 'general_other' => $general_other, 'repair_other' => $repair_other, 'skill_type' => $all_skills, 'property_other' => $property_other, 'health_other' => $health_other, 'food_other' => $food_other, 'volunteer_other' => $volunteer_other, 'additional_info' => $additional_info));
        }

        wp_redirect(get_permalink());
    } else {

        //echo "data not inserted";

    }
}

add_action('init', 'add_user_skills');













/**

 * Send an email when the submitted post status changes from "draft" to "publish". i.e. when admin approves the post.

 *

 * @param string $new_status New Status.

 * @param string $old_status Old Status.

 * @param object $post       The WP_Post Object.

 */

function sa_send_email($new_status, $old_status, $post)
{



    if ($old_status === 'draft' && $new_status === 'publish' && $post->post_type === 'site') {



        $author_id           = $post->post_author;

        $author_display_name = get_the_author_meta('display_name', $author_id);



        if (empty($author_display_name)) {

            $author_display_name = get_the_author_meta('user_login', $author_id);
        }



        $author_email = get_the_author_meta('user_email', $author_id);

        $post_title   = $post->post_title;

        $post_link    = get_permalink($post->ID);



        $subject = esc_html__('Review Outcome for Your Post Submission', 'text-domain');



        $message = "Dear {$author_display_name},



            I hope this email finds you well. We wanted to update you on the status of your post submission for {$post_title} on our website.

            

            After a thorough review by our team, we have the following update:

            

            We are pleased to inform you that your post, {$post_title}, has been approved and is now live on our platform's listings. You can view your listing here: {$post_link}.

            

            Congratulations! Your post is now visible to potential buyers, and we look forward to helping you find the right match.



            Regards,";



        wp_mail($author_email, $subject, $message);
    }
}

add_action("transition_post_status", "sa_send_email", 10, 3);





function search_DisasterReport()
{

    global $wpdb;

    session_start();





    /*  if (isset($_POST['submit']))

    { 

        $_SESSION['postdata'] = $_POST;

        unset($_POST);

        echo "GeeksforGeeks"; 

    } 

    

    else {

        echo 'form value not set'; 

    }*/



    if (isset($_POST['submit']) && !empty($_POST['search_DisasterReport'])) {

        $Q_name = ($_POST['q_name']) ? sanitize_text_field($_POST['q_name']) : "";

        $Q_date = ($_POST['q_date']) ? sanitize_text_field($_POST['q_date']) : "";

        $sql = "SELECT * FROM wp_posts WHERE post_title LIKE '%$Q_name%' AND post_date LIKE '%$Q_date%' AND post_type LIKE '%reportsforms%'";

        $reportData = $wpdb->get_results($sql);



        return apply_filters('collections_menu', $reportData);
    }
}



//add_filter( 'filter_disasterReports', 'search_DisasterReport');

add_action('init', 'search_DisasterReport');





/*function search_DisasterReport($atts) 

  {

      global $wpdb;

      

    

          $Q_name = ($_POST['q_name'])?sanitize_text_field($_POST['q_name']):"";

          $Q_date = ($_POST['q_date'])?sanitize_text_field($_POST['q_date']):"";

          $sql = "SELECT * FROM wp_posts WHERE post_title LIKE '%$Q_name%' AND post_date LIKE '%$Q_date%' AND post_type LIKE '%reportsforms%'";

          $results = $wpdb->get_results($sql); 

           

           

           

             if(isset($Q_date))

      {

          echo 'search is set';

      }

      

      else

      {

          echo 'search is not set3';

      }

        $str = '<tr class="bg-color">

                <td>gfg</td>

                <td>fg</td>

                <td>gf</td>

                <td>fg</td>

                <td>gr</td>

                <td>rg</td>

                <td>gr</td>

                <td>vfvb</td>

               

                <td style="width:12%;">

                    <a href="" class="d-block">

                        <div class="orange-box report-btn">

                            <p>View</p>

                        </div>

                    </a>

                </td>

            </tr>';

            echo $str; 

      

 }

add_shortcode('myDisaster', 'search_DisasterReport');*/









//add_filter( 'filter_disasterReports', 'search_DisasterReport');

//add_action('init', 'search_DisasterReport');





function add_user_experience()
{

    global $wpdb;

    if (!empty($_POST['add_user_experience'])) {

        $current_user_id = get_current_user_id();

        $multiapply = isset($_POST['experience']) && is_array($_POST['experience']) ? $_POST['experience'] : [];

        $other_info = ($_POST['other_info']) ? sanitize_text_field($_POST['other_info']) : "";

        $chkUser =  $wpdb->get_results("SELECT user_id FROM user_experience WHERE user_id = '" . $current_user_id . "' ", ARRAY_A);



        if (!empty($chkUser)) {

            $all_experience = implode(',', $multiapply);

            $wpdb->update('user_experience', array('disaster_type' => $all_experience, 'other_info' => $other_info), array('user_id' => $current_user_id));
        } else {

            $all_experience = implode(',', $multiapply);

            $wpdb->insert('user_experience', array('user_id' => $current_user_id, 'disaster_type' => $all_experience, 'other_info' => $other_info));
        }

        wp_redirect(get_permalink());
    } else {
    }
}

add_action('init', 'add_user_experience');



function acceptMemberRequest()
{

    global $wpdb;



    if (!empty($_POST['acceptMemberRequest'])) {



        $current_date = current_datetime()->format('Y-m-d H:i:s');

        $current_user_id = get_current_user_id();

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";



        $invited_from = ($_POST['invited_from']) ? sanitize_text_field($_POST['invited_from']) : "";



        $invited_to = ($_POST['invited_to']) ? sanitize_text_field($_POST['invited_to']) : "";



        $user  =  get_userdata($invited_from);

        $invitedToUser  =  get_userdata($invited_to);

        $group_name = get_the_title($group_id);

        $wpdb->update('group_invite', array('status' => 'accepted', 'created_at' => $current_date), array('invited_from' => $invited_from, 'invited_to' => $current_user_id));

        // ld_update_group_access($invited_from, $group_id);



        //ld_update_group_access($invited_from,$group_id);



        /*Send email */

        $subject = "Group Accept Notification";

        $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@worldcares.org>' . "\r\n";

        $message = "

                    Hi " . $user->display_name . ",

                   $invitedToUser->display_name  has accepted your request to join the group $group_name.

                    View Member: " . site_url('my-dashboard') . "

                    Thank You, Admin";

        wp_mail($user->user_email, $subject, $message, $headers);

        /*send email*/



        if (isset($group_id)) {

            $group_id = absint($group_id);

            if (!empty($group_id)) {

                $check = ld_update_group_access($invited_from, $group_id);
            }
        }
    } else {
    }
}

add_action('init', 'acceptMemberRequest');





function cancelMemberRequest()
{

    global $wpdb;



    if (!empty($_POST['cancelMemberRequest'])) {

        $current_date = current_datetime()->format('Y-m-d H:i:s');

        $current_user_id = get_current_user_id();

        $user  =  get_userdata($current_user_id);

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        $group_name = get_the_title($group_id);

        $invited_from = ($_POST['invited_from']) ? sanitize_text_field($_POST['invited_from']) : "";

        $invited_to = ($_POST['invited_to']) ? sanitize_text_field($_POST['invited_to']) : "";

        $user  =  get_userdata($invited_from);

        $invitedToUser  =  get_userdata($invited_to);

        $wpdb->update('group_invite', array('status' => 'rejected', 'created_at' => $current_date), array('invited_from' => $invited_from, 'invited_to' => $current_user_id));

        /*Send email */

        $subject = "Group Reject Notification";

        $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@worldcares.org>' . "\r\n";

        $message = "

                    Hi " . $user->display_name . ",

                    $invitedToUser->display_name has rejected your request to join the group $group_name.

                    View Member: " . site_url('my-dashboard') . "

                    Thank You, Admin";

        wp_mail($user->user_email, $subject, $message, $headers);

        /*send email*/
    } else {
    }
}

add_action('init', 'cancelMemberRequest');





function RequestSentacceptMemberRequest()
{

    global $wpdb;



    if (!empty($_POST['RequestSentacceptMemberRequest'])) {



        $current_date = current_datetime()->format('Y-m-d H:i:s');

        $current_user_id = get_current_user_id();

        //  $user  =  get_userdata($current_user_id);

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        $group_name = get_the_title($group_id);

        $invited_from = ($_POST['invited_from']) ? sanitize_text_field($_POST['invited_from']) : "";

        $invited_to = ($_POST['invited_to']) ? sanitize_text_field($_POST['invited_to']) : "";

        $user  =  get_userdata($invited_from);

        $invitedToUser  =  get_userdata($invited_to);

        $wpdb->update('group_invite', array('status' => 'accepted', 'created_at' => $current_date), array('invited_from' => $current_user_id, 'invited_to' => $invited_to));





        /*Send email */

        $subject = "Group Accept Notification";

        $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@worldcares.org>' . "\r\n";

        $message = "

                    Hi " . $user->display_name . ",

                    $invitedToUser->display_name has accepted your request to join the group $group_name.

                    View Member: " . site_url('my-dashboard') . "

                    Thank You, Admin";

        wp_mail($user->user_email, $subject, $message, $headers);

        /*send email*/



        if (isset($group_id)) {

            $group_id = absint($group_id);

            if (! empty($group_id)) {

                $check = ld_update_group_access($invited_from, $group_id);
            }
        }
    } else {
    }
}

add_action('init', 'RequestSentacceptMemberRequest');





function RequestSentcancelMemberRequest()
{

    global $wpdb;



    if (!empty($_POST['RequestSentcancelMemberRequest'])) {

        $current_date = current_datetime()->format('Y-m-d H:i:s');

        $current_user_id = get_current_user_id();

        //$user  =  get_userdata($current_user_id);

        $group_id = ($_POST['group_id']) ? sanitize_text_field($_POST['group_id']) : "";

        $group_name = get_the_title($group_id);

        $invited_from = ($_POST['invited_from']) ? sanitize_text_field($_POST['invited_from']) : "";

        $user  =  get_userdata($invited_from);

        $invited_to = ($_POST['invited_to']) ? sanitize_text_field($_POST['invited_to']) : "";

        $invitedToUser  =  get_userdata($invited_to);

        $wpdb->update('group_invite', array('status' => 'rejected', 'created_at' => $current_date), array('invited_from' => $current_user_id, 'invited_to' => $invited_to));





        /*Send email */

        $subject = "Group Reject Notification";

        $headers = 'From: ' . get_bloginfo('name') . ' <no-reply@worldcares.org>' . "\r\n";

        $message = "

                    Hi " . $user->display_name . ",

                    $invitedToUser->display_name has rejected your request to join the group $group_name.

                    View Member: " . site_url('my-dashboard') . "

                   

                    Thank You, Admin";

        wp_mail($user->user_email, $subject, $message, $headers);

        /*send email*/
    } else {
    }
}

add_action('init', 'RequestSentcancelMemberRequest');





add_filter('generate_sidebar_layout', 'tu_custom_events_sidebar_layout');

function tu_custom_events_sidebar_layout($layout)
{

    // If we are on a tribe events page, set the sidebar

    if ('tribe_events' == get_post_type() || is_post_type_archive('tribe_events')) {

        return 'no-sidebar';
    }



    // Or else, set the regular layout

    return $layout;
}





add_filter('comment_form_defaults', function ($fields) {

    $fields['must_log_in'] = sprintf(

        __(
            '<p class="must-log-in">

                 You must

                 <a href="https://knowledge.communication.worldcares.org/login">Login</a> to post a comment.</p>'

        ),

        wp_registration_url(),

        wp_login_url(apply_filters('the_permalink', get_permalink()))

    );

    return $fields;
});









/* Show User's Additional Information */



add_action('show_user_profile', 'shhow_user_additional_info');

add_action('edit_user_profile', 'shhow_user_additional_info');



function shhow_user_additional_info($user)
{

    global $wpdb;

    $DisasterReportCount = "SELECT COUNT(ID) FROM wp_posts WHERE post_type = 'reportsforms' AND post_status ='publish' AND post_author = $user->ID ";

    $Disasternum = $wpdb->get_var($DisasterReportCount);



    $VolunteerCount = "SELECT COUNT(ID) FROM wp_posts WHERE post_type = 'volunteer_request' AND post_status ='publish' AND post_author = $user->ID ";

    $Volunteernum = $wpdb->get_var($VolunteerCount);



    $SurvivorCount = "SELECT COUNT(ID) FROM wp_posts WHERE post_type = 'supplierNeedIntake' AND post_status ='publish' AND post_author = $user->ID ";

    $Survivornum = $wpdb->get_var($SurvivorCount);



    $AfterCount = "SELECT COUNT(ID) FROM wp_posts WHERE post_type = 'afterActionReport' AND post_status ='publish' AND post_author = $user->ID ";

    $Afternum = $wpdb->get_var($SurvivorCount);



    $GroupCount = "SELECT COUNT(ID) FROM wp_posts WHERE post_type = 'groups' AND post_status ='publish' AND post_author = $user->ID ";

    $Groupnum = $wpdb->get_var($GroupCount);



    $ResourceCount = "SELECT COUNT(ID) FROM wp_posts WHERE post_type = 'resources' AND post_status ='publish' AND post_author = $user->ID ";

    $Resourcenum = $wpdb->get_var($ResourceCount);



    $PostCount = "SELECT COUNT(ID) FROM wp_posts WHERE post_type = 'post' AND post_status ='publish' AND post_author = $user->ID ";

    $Postnum = $wpdb->get_var($PostCount);

?>

    <h3><?php _e('Additional Information'); ?></h3>



    <style>
        .admin-box1 {
            background: #F96703;
            padding: 20px 10px;
            border-radius: 10px;
        }

        .admin-box1 h2 {
            font-size: 22px;
            color: #fff;
            font-weight: 600;
        }

        .admin-box1 p {
            font-size: 14px;
            color: #fff;
            font-weight: 600;
        }
    </style>

    <div class="row">

        <div class="col-lg-2 col-md-2 col-12 text-center">

            <div class="admin-box1">

                <h2><?php echo $Disasternum ?></h2>

                <p>Disaster Situational Reports</p>

            </div>

        </div>



        <div class="col-lg-2 col-md-2 col-12 text-center">

            <div class="admin-box1">

                <h2><?php echo $Volunteernum ?></h2>

                <p>Organization Volunteer Request</p>

            </div>

        </div>



        <div class="col-lg-2 col-md-2 col-12 text-center">

            <div class="admin-box1">

                <h2><?php echo $Survivornum ?></h2>

                <p>Survivor Need Intake Form</p>

            </div>

        </div>



        <div class="col-lg-2 col-md-2 col-12 text-center">

            <div class="admin-box1">

                <h2><?php echo $Afternum ?></h2>

                <p>After Action Report</p>

            </div>

        </div>



        <div class="col-lg-2 col-md-2 col-12 text-center ">

            <div class="admin-box1">

                <h2><?php echo $Postnum ?></h2>

                <p>Groups</p>

            </div>

        </div>



        <div class="col-lg-2 col-md-2 col-12 text-center">

            <div class="admin-box1">

                <h2><?php echo $Resourcenum ?></h2>

                <p>Resources</p>

            </div>

        </div>



        <div class="col-lg-2 col-md-2 col-12 text-center pt-2">

            <div class="admin-box1">

                <h2><?php echo $Resourcenum ?></h2>

                <p>Blogs</p>

            </div>

        </div>



    </div>

<?php }



/* Show User'ss Additional Information */

/* Remove color panel from admin dashboard */

/*add_action( 'admin_init', function () {
    global $_wp_admin_css_colors;
    $_wp_admin_css_colors = [];
} );*/




?>