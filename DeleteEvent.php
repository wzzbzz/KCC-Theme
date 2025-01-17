<?php
 echo 'vinaysingh';

echo $_POST['id'];
 echo $_GET['id'];
die; 

require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) . '/wp-config.php'; 
require_once('bdd.php');
$user_id = get_current_user_id();

 if (isset($_POST['id']) && isset($_POST['id'])){
	echo $sql = "DELETE FROM `events_calendar` WHERE id= '".$_POST['id']."' and user_id = '".$user_id."' ";	
	$query = $bdd->prepare( $sql );	
	$query->execute();	
	
}
echo "success";

/*die;*/
?>
