<?php
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) . '/wp-config.php'; 
require_once('bdd.php');
$user_id = get_current_user_id();

//echo '<pre>';print_r($_POST); die;
//if (isset($_POST['delete']) && isset($_POST['id'])){

	/*$id = $_POST['id'];
	$sql = "DELETE FROM events_calendar WHERE post_id = '".$id."' and user_id = ".$user_id;
	$query = $bdd->prepare( $sql );	
	$res = $query->execute();
	wp_delete_post($id);*/

//}
if (isset($_POST['title']) && isset($_POST['id'])){
 /* echo "<pre>";
	print_r($_POST);die();*/

	$id = $_POST['id'];
	$title = sanitize_text_field($_POST['title']);	
	$organization = ($_POST['organization'])?sanitize_text_field($_POST['organization']):"";
	$location = ($_POST['location'])?sanitize_text_field($_POST['location']):"";
	$details = ($_POST['details'])?sanitize_text_field($_POST['details']):"";	
	$group_name =($_POST['group_name'])?sanitize_text_field($_POST['group_name']):"";
	$publish_type =($_POST['publish_type'])?sanitize_text_field($_POST['publish_type']):"";
	$start = sanitize_text_field($_POST['start']);
	$start_time = sanitize_text_field($_POST['start_time']);
	$end_time = "23:59";
	$end = date('Y-m-d H:i:s', strtotime("$start $end_time"));
	$start = date('Y-m-d H:i:s', strtotime("$start $start_time"));

	$sql = "UPDATE events_calendar SET  `title` = '$title',`start` = '$start',`end` = '$end',`organization` = '$organization',`location`= '$location',`details`='$details', `publish_type` = '$publish_type' , `group_name` = '$group_name' WHERE post_id = '".$id."' and user_id = ".$user_id;
	$req = $bdd->prepare($sql);	
	$sth = $req->execute();
	$postData = array(
			'ID' => $id,
            'post_title' => $title,
            'post_content' => $details,
            'post_status' => 'draft',
            'post_author' => $user_id,
            'post_type' => 'tribe_events'
            );

         $_POST['_EventTimezoneAbbr'] = 'UTC+0';
         $_POST['_EventTimezone'] = 'UTC+0';
         $_POST['_EventURL'] = $location;
         $_POST['_EventDuration'] = strtotime($end)-strtotime($start);
         $_POST['_EventEndDateUTC'] = gmdate('Y-m-d H:i:s', strtotime($end));
         $_POST['_EventStartDateUTC'] = gmdate('Y-m-d H:i:s', strtotime($start));
         $_POST['_EventEndDate'] = $end;
         $_POST['_EventStartDate'] = $start;
         $_POST['_EventOrganizerID'] = $user_id;
         $_POST['_EventVenueID'] = $location;
         $_POST['_EventShowMap'] = '1';
         $_POST['_EventShowMapLink'] = '1';         
        $event_id =     wp_update_post( $postData );
        foreach($_POST as $key=>$value){
            update_post_meta( $event_id, $key, sanitize_text_field($value));
        }  
}
header('Location: '.$_SERVER['HTTP_REFERER']);
?>
