<?php

if( isset($_GET['debug']) && $_GET['debug'] == 'true' ){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
}

if(isset($_GET['delete_applications_from_postmeta'])){
    $args = array(
        'post_type' => 'kcc_report',
        'posts_per_page' => -1,
        'post_status' => 'any'
    );
    $reports = get_posts($args);
    foreach($reports as $report){
        delete_post_meta($report->ID, 'vol_applications');
    }
}

// make an autoload function for the /jwc/Wordpress directory
spl_autoload_register(function ($class) {
    
    // Define the base directory for the namespace prefix
    $baseDir = __DIR__."/";

    // Project-specific namespace prefix
    $prefix = 'KCC\\';

    // Does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // If the class does not use the namespace prefix, move to the next registered autoloader
        return;
    }
    
    // strip jwc
    $class = str_replace('KCC\\', '', $class);
    
    // Replace the namespace prefix with the base directory, replace namespace separators with directory separators
    $file = $baseDir . str_replace('\\', '/', $class) . '.php';
    // If the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

/* function for comments */
//add_filter( 'comment_form_defaults', 'leave_a_comment_title_tag' );
function leave_a_comment_title_tag( $defaults ){
  $user = new KCC\User( get_current_user_id() );
  $defaults['title_reply_before'] = '<p id="reply-title" class="comment-reply-title">';
  $defaults['title_reply_after'] = '</p>';
  return $defaults;
}


new KCC\Users();
// these function calls will set up the hooks
new KCC\Groups();
new KCC\Roles();
new KCC\Communications\Announcements();
new KCC\Communications\BlogPosts();
new KCC\FlashMessages\FlashMessages();

// right now Reports must precede Forms....
new KCC\Reports\Reports();
new KCC\Reports\ReportTypes();
new KCC\Reports\OrganizationVolunteerRequests();
new KCC\Forms\Forms();
