<?php
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) . '/wp-config.php'; 
require_once('bdd.php');
$user_id = get_current_user_id();
 if (isset($_POST['ticket_title'])){

	$ticket_title = $_POST['ticket_title'];
	$description = $_POST['description'];
	$ticket_category = $_POST['ticket_category'];	
	$status  =  '1';
	$sql = "INSERT INTO `wp_tickets` (`ticket_title`, `description`, `ticket_category`, `user_id`,`status`) VALUES ('".$ticket_title."', '".$description."', '".$ticket_category."', '".$user_id."', '".$status."');";	
	$query = $bdd->prepare( $sql );	
	$query->execute();	
	session_start();
	$_SESSION['ticked_added'] = "Ticket has been added Successfully";
}
header('Location: '.$_SERVER['HTTP_REFERER']);
?>
