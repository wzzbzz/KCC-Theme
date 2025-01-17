<?php
// Include the WordPress configuration and database connection files
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/wp-config.php';
require_once('bdd.php');

// Get the current logged-in user ID
$user_id = get_current_user_id();
$current_user = get_user_by('id', $user_id); // Get user details by ID

// Check if the required POST variables 'title' and 'start' are set
if (isset($_POST['title']) && isset($_POST['start'])) {

    // Sanitize input values to prevent XSS or SQL injection
    $title = sanitize_text_field($_POST['title']);
    $organization = ($_POST['organization']) ? sanitize_text_field($_POST['organization']) : "";
    $location = ($_POST['location']) ? sanitize_text_field($_POST['location']) : "";
    $details = ($_POST['details']) ? sanitize_text_field($_POST['details']) : "";
    $group_name = ($_POST['group_name']) ? sanitize_text_field($_POST['group_name']) : "";
    $publish_type = ($_POST['publish_type']) ? sanitize_text_field($_POST['publish_type']) : "";
    $rf_check = ($_POST['rf_check']) ? sanitize_text_field($_POST['rf_check']) : "";
    $rf_radio_value = ($_POST['rf_radio_value']) ? sanitize_text_field($_POST['rf_radio_value']) : "";
    $author = get_post($rf_check);
    $author_details = get_user_by('id', $author->post_author); // Get author details
    // Sanitize the start date and time, then calculate the end time (default to 23:59)
    $start = sanitize_text_field($_POST['start']);
    $start_time = sanitize_text_field($_POST['start_time']);
    $end_time = "23:59";

    $groupmember=  learndash_get_groups_users( $rf_check);
   

    $emailArray = []; // Initialize an array to store the email addresses

foreach($groupmember as $member){
    $emailArray[] = $member->data->user_email; // Add each email to the array
}

$emails = implode(',', $emailArray); // Convert the array to a comma-separated string

//echo $emails;; // Output or use the string of emails


    // Convert the start and end time to 'Y-m-d H:i:s' format for insertion into the database
    $end = date('Y-m-d H:i:s', strtotime("$start $end_time"));
    $start = date('Y-m-d H:i:s', strtotime("$start $start_time"));

    // Create a new WordPress post array for the event
    $postData = array(
        'post_title' => $title,
        'post_content' => $details,
        'post_status' => 'draft',
        'post_author' => $user_id,
        'post_type' => 'tribe_events' // Define the post type as 'tribe_events'
    );

    // Add additional event details as post meta data
    $_POST['_EventTimezoneAbbr'] = 'UTC+0';
    $_POST['_EventTimezone'] = 'UTC+0';
    $_POST['_EventURL'] = $location;
    $_POST['_EventDuration'] = strtotime($end) - strtotime($start); // Calculate event duration in seconds
    $_POST['_EventEndDateUTC'] = gmdate('Y-m-d H:i:s', strtotime($end)); // Set UTC end date
    $_POST['_EventStartDateUTC'] = gmdate('Y-m-d H:i:s', strtotime($start)); // Set UTC start date
    $_POST['_EventEndDate'] = $end; // Set end date
    $_POST['_EventStartDate'] = $start; // Set start date
    $_POST['_EventOrganizerID'] = $user_id; // Organizer ID is the current user
    $_POST['_EventVenueID'] = $location; // Event location
    $_POST['_EventShowMap'] = '1'; // Show map
    $_POST['_EventShowMapLink'] = '1'; // Show map link

    // Insert the post into WordPress and get the event ID
    $event_id = wp_insert_post($postData);

    $group_title = get_the_title($rf_check);
    // SQL query to insert the event into a custom 'events_calendar' table
    $sql = "INSERT INTO `events_calendar` (`post_id`,`title`, `start`, `end`, `location`,`group_name` ,`organization`, `details`,`user_id`,`publish_type`) 
            VALUES ('".$event_id."','".$title."', '".$start."', '".$end."', '".$location."','".$group_title."' ,'".$organization."', '".$details."','".$user_id."','".$publish_type."');";
    $query = $bdd->prepare($sql);	
    $query->execute(); // Execute the SQL query
    
    // Generate the event approval action link using site_url() and event ID
    $action_link = site_url('event-approval/?id=') . $event_id; 

    // Loop through POST data and add it as post meta for the event
    foreach ($_POST as $key => $value) {
        add_post_meta($event_id, $key, sanitize_text_field($value));
    }

    // If publishing to a group the user joined (rf_radio_value is 'joined')
    if ($rf_check && $rf_radio_value == 'joined') {
            $group_title = get_the_title($rf_check); // Get group title
            $groupUserEmail = $author_details->user_email; // Get user email
           
            $subject = "Approval Request for new Calendar Event on KCC"; // Email subject
            // Email body 
            $body = "Hi " . $author_details->display_name . ",\n\nKCC user: " . $current_user->display_name . "\n\nHas posted a new calendar event that you need to moderate and approve or decline.\n\nKCC Group: " . $group_title . "\nEvent Title: " . $title . "\nEvent Date/Time: " . $start . "\n\nTo approve or decline the event to be added to the calendar, please click here:\n" . $action_link . "\n\nThank you,\nAdmin";
            // Prepare email parameters
            $params = array(
                'subject' => $subject,
                'body' => $body,
                'to' => $groupUserEmail,
                'action_link' => $action_link,
                'user_id' => $author_details->ID,
                'post_id' => $event_id
            );
            // Call the emailHandler function to send email notifications
            emailHandler($params);
    // If publishing to a group the user created (rf_radio_value is 'created')
    } elseif ($rf_check && $rf_radio_value == 'created') {
    wp_redirect( $action_link );
    exit();
      
    // If publishing site-wide or globally (rf_radio_value is 'all')
    } elseif ($rf_check && $rf_radio_value == 'all') {
        // Get all super admin usernames
        $super_admins = get_super_admins();
        if (!empty($super_admins)) {
            foreach ($super_admins as $admin_username) {
                $value = get_user_by('login', $admin_username); // Get super admin user data
                $group_title = get_the_title($rf_check); // Get group title
                $subject = "Approval Request for new Calendar Event on KCC"; // Email subject
                // Email body
                $body = "Hi " . $value->display_name . ",\n\nKCC user: " . $current_user->display_name . "\n\nHas posted a new calendar event that you need to moderate and approve or decline.\n\nKCC Group: " . $group_title . "\nEvent Title: " . $title . "\nEvent Date/Time: " . $start . "\n\nTo approve or decline the event to be added to the calendar, please click here:\n" . $action_link . "\n\nThank you,\nAdmin";
                // Prepare email parameters
                $to = $value->user_email;
                $params = array(
                    'subject' => $subject,
                    'body' => $body,
                    'to' => $to,
                    'action_link' => $action_link,
                    'user_id' => $value->ID,
                    'post_id' => $event_id
                );
                // Call the emailHandler function to send email notifications
                emailHandler($params);
            }
        }
    }
}

// Redirect back to the referring page after the process is complete
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
