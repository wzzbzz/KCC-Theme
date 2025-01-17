<?php
/* Template Name: Event Approval */
session_start();
get_header();

$user_id = get_current_user_id();
$current_user = wp_get_current_user();
$email = $current_user->user_email;
$post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
global $wpdb;
// Recreate action link for security
$actionlink = "https://knowledge.communication.worldcares.org/event-approval/?id=$post_id";

// Check if user is logged in and post ID is valid
if (is_user_logged_in() && $post_id) {
    $event_link = tribe_get_event_link($post_id);
    // Fetch post data
    $post = get_post($post_id); 
    $post_content = '';
    $post_title = '';
    $author_name = '';
    $author_email = '';

    if ($post) {
        $post_content = $post->post_content;
        $post_title = $post->post_title;
        $author_id = $post->post_author;
        $author_name = get_the_author_meta('display_name', $author_id);
        $author_email = get_the_author_meta('user_email', $author_id);
    }

    // Check if there's a matching email log entry
    $email_log_query = $wpdb->get_row(
        $wpdb->prepare(
            "SELECT to_email, bcc_email, actionLink FROM emailLog WHERE actionlink = %s",
            $actionlink
        )
    );

    $event_group_id = get_post_meta($post_id, 'rf_check', true);

    // Initialize $group_admin_id to prevent undefined variable errors
    $group_admin_id = null;
    
    if (!empty($event_group_id)) {
        $group_admin = get_post($event_group_id);
    
        if ($group_admin) {
            $group_admin_details = get_user_by('id', $group_admin->post_author);
    
            if ($group_admin_details) {
                $group_admin_id = $group_admin_details->ID;
            }
        }
    }
    // Check if user is authorized
    if (!is_super_admin() && $group_admin_id != $user_id) {
        if ($email_log_query) {
            $to_email_list = $email_log_query->to_email;
            $bcc = $email_log_query->bcc_email;
            
            // Split and trim email lists
            $authorized_emails = array_map('trim', explode(',', $to_email_list));
            
            if (!empty($bcc)) {
                $bcc_emails = array_map('trim', explode(',', $bcc));
                $authorized_emails = array_merge($authorized_emails, $bcc_emails);
            }
            
            echo '<style>.movdown { top: 120px !important; }</style>';
            
            if (in_array($email, $authorized_emails)) {
                // User is authorized
            } else {
                $feedback_message = 'Unauthorized access - only [' . esc_html($to_email_list) . '] can approve this calendar event.';
                echo '<div class="alert alert-danger movdown">' . $feedback_message . '</div>';
                exit;
            }
        } else {
            echo '<style>.movdown { top: 100px !important; }</style>';
            echo '<div class="alert alert-danger movdown">No authorization record found for this event.</div>';
            exit;
        }
    }

    $enentInfo = $wpdb->get_row(
        $wpdb->prepare(
            "SELECT * FROM events_calendar WHERE post_id = %d",
            $post_id
        )
    );
    $start_time = get_post_meta($post_id, 'start_time', true);
    $group_name = $enentInfo->group_name;
    $event_status = $enentInfo->event_status;
    if($event_status != 'In Review'){
        echo '<style>.movdown { top: 100px !important; }</style>';
        echo '<div class="alert alert-danger movdown">This event has already been processed. Changes cannot be made at this time.</div>';
        exit;
    }

    $event_group_type = get_post_meta($post_id, 'rf_radio_value', true);

    

    // Handle form submission to approve or deny the event
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $event_id = intval($_POST['event_id']);

        $bcc_emails = '';
        if($event_group_type == 'created' || $event_group_type == 'joined'){
            $groupmember=  learndash_get_groups_users($event_group_id);
            $emailArray = []; // Initialize an array to store the email addresses
            if($groupmember){
                foreach($groupmember as $member){
                    $emailArray[] = $member->data->user_email; // Add each email to the array
                }
                $bcc_emails = implode(',', $emailArray);
            }
        }
        if($event_group_type == 'all'){
            $users = get_users();
            $user_emails = array_map(function($user) {
                return $user->user_email;
            }, $users);
            $bcc_emails = implode(', ', $user_emails);
        }


        if (isset($_POST['approve'])) {
            $wpdb->update(
                'events_calendar',
                array('event_status' => 'Active'),
                array('post_id' => $post_id),
                array('%s'),
                array('%d')
            );

            $post_data = array(
                'ID'          => $post_id,
                'post_status' => 'publish'
            );
            
            // Update the post into the database
            wp_update_post($post_data);

            // Format the event date (assuming $enentInfo->start contains the event's start date)
            $event_date = date('d/m/Y', strtotime($enentInfo->start));

            // Set the subject with placeholders
            $subject = "KCC Event Added - Date: $event_date Title: $post_title";

            // Set the body with placeholders
            $body = "A new event has been added in KCC group: " . esc_html($group_name) . "\n";
            $body .= "Event Date: $event_date " ."\n";
            $body .= "For more info ". esc_html($event_link) . "\n";
            // Email parameters
            $params = array(
                'subject' => $subject,
                'body' => $body,
                'to' => $author_email,
                'bcc' => $bcc_emails,
                'action_link' => $event_link
            );

            // Call the email handler
            emailHandler($params);

            // Output success message and redirect
            echo '<div class="alert alert-success">Event has been approved successfully.</div>';
            $event_calendar = site_url('event-calendar'); 
            wp_redirect($event_calendar);
            exit;

        }

        if (isset($_POST['deny'])) {
            $wpdb->update(
                'events_calendar',
                array('event_status' => 'Deleted'),
                array('post_id' => $post_id),
                array('%s'),
                array('%d')
            );
        
            // Format the event date
            $event_date = date('m/d/Y', strtotime($enentInfo->start));
        
            // Get the comment from the form input
            $comment = isset($_POST['comment']) ? sanitize_text_field($_POST['comment']) : 'No comment provided.';
        
            // Set the subject with placeholders
            $subject = "Event Publish Request for $event_date is Declined";
        
            // Set the body with placeholders
            $body = "Event has been declined for your group: " . esc_html($group_name) . "\n";
            $body .= "Comment made: " . esc_html($comment) . "\n";
            $body .= "For more info ".$event_link;
        
            // Email parameters
            $params = array(
                'subject' => $subject,
                'body' => $body,
                'to' => $author_email,
                'bcc' => $bcc_emails,
                'action_link' => $event_link
            );
        
            // Call the email handler
            emailHandler($params);
        
            // Output success message and redirect
            echo '<div class="alert alert-danger">Event has been denied and marked as deleted.</div>';
            $event_calendar = site_url('event-calendar'); 
            wp_redirect($event_calendar);
            exit;
        }
        
        
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href='<?php echo get_template_directory_uri(); ?>/css/fullcalendarxx.min.css' rel='stylesheet' />
        <link href='<?php echo get_template_directory_uri(); ?>/css/AdminLTE.min.css' rel='stylesheet' />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet"/>
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/wcc_custom_style.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet">
        <style>
            .alert {
                padding: 20px;
                background-color: #f44336;
                color: white;
                margin-bottom: 15px;
                position: relative;
                border-radius: 4px;
            }
            .movdown{
                top: 100px !important;
            }
            .alert.alert-danger {
                background-color: #f44336;
            }
            .alert.alert-success {
                background-color: #4CAF50;
            }
            .alert .close {
                margin-left: 15px;
                color: white;
                font-weight: bold;
                float: right;
                font-size: 22px;
                line-height: 20px;
                cursor: pointer;
            }
            .alert .close:hover {
                color: #000;
            }
            .notreallyanalertsoredisodd{

                background-color: #d2e8ff !important;
                color:#000 !important;
            }
        </style>
    </head>
    <body class="main_all_bg_Sec remove-page-space">
        <?php include('user-sidebar.php'); ?>
        <div class="row justify-content-end temp-calendar">
            <div class="col-xl-11 col-lg-11 col-md-11 col-10 d-flex align-items-center flex-wrap">
                <?php include('user_topbar.php'); ?>                
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Calendar Event</h3>
                        <form method="POST" action="" class="calendar-event-approval-form">
                            <div class="form-group">
                                <label>Approval Request</label>
                                <div class="alert alert-secondary notreallyanalertsoredisodd">
                                    User <strong><?php echo esc_html($author_name); ?></strong>
                                    (<a href="mailto:<?php echo esc_html($author_email); ?>" style="color: black;"><?php echo esc_html($author_email);?></a>
                                    ) has submitted a calendar event.
                                    <?php if ($group_name) { ?>
                                        The event is to be published with a scope of <strong><?php echo esc_html($group_name); ?></strong>.
                                    <?php } ?>
                                    <br><br>
                                    <p><strong>Submitted on:</strong> <?php echo date('F j, Y, g:i A', strtotime($enentInfo->created_at)); ?></p>
                                    <p><strong>Event Title:</strong> <?php echo esc_html($enentInfo->title); ?></p>
                                    <p><strong>Start Date:</strong> <?php echo date('F j, Y', strtotime($enentInfo->start)); ?></p>
                                    <p><strong>Time:</strong> <?php echo $start_time; ?></p>
                                    <p><strong>Location:</strong> <?php echo esc_html($enentInfo->location); ?></p>
                                    <p><strong>Organization:</strong> <?php echo esc_html($enentInfo->organization); ?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="calEventDetails">The Calendar Event Body</label>
                                <textarea class="form-control" id="calEventDetails" rows="3" readonly><?php echo esc_html($post_content); ?></textarea>
                            </div>
                            <input type="hidden" name="event_id" value="<?php echo esc_attr($post_id); ?>" />
                            <div class="form-group">
                                <label for="comment">Comment (optional)</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" name="approve" class="btn btn-success">Approve</button>
                                <button type="submit" name="deny" class="btn btn-danger">Deny</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php include('common_user_footer.php'); ?>
    </body>
    </html>
<?php
} else {
    wp_redirect(home_url('/login/'));
    exit;
}
?>
