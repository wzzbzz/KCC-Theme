<?php
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) . '/wp-config.php'; 
require_once('bdd.php');
$user_id = get_current_user_id();

$requestData = json_decode(file_get_contents('php://input'), true);
$jsonResponse = array();

if(!empty($requestData['request_type'])){
    $title = isset($requestData['event_data'][0]) ? $requestData['event_data'][0] : "";
    $details = isset($requestData['event_data'][1]) ? $requestData['event_data'][1] : "";
    $details = isset($requestData['event_data'][1]) ? $requestData['event_data'][1] : "";
    $location = isset($requestData['event_data'][2]) ? $requestData['event_data'][2] : "";
    $color = isset($requestData['event_data'][2]) ? $requestData['event_data'][2] : "";
    $start = isset($requestData['event_data'][2]) ? $requestData['event_data'][2] : "";
    $end = isset($requestData['event_data'][2]) ? $requestData['event_data'][2] : "";


    $organization = $_POST['organization'];
    $location = $_POST['location'];
    $details = $_POST['details'];
    $end = $_POST['end'];
    $color = $_POST['color'];


        $start = isset($requestData['start']) ? $requestData['start'] : "";
        $end = isset($requestData['end']) ? $requestData['end'] : "";

        $updateSql = "UPDATE tbl_events SET title = '".$title."',description = '".$description."',url = '".$even_url."',start = '".date('Y-m-d H:i:s',strtotime($start))."',end = '".date('Y-m-d H:i:s',strtotime($end)) ."' WHERE id= '".$requestData['event_id']."' ";


    if($requestData['request_type']=='editEvent'){
       
        $query = $bdd->prepare( $updateSql ); 
        $query->execute();  

        $jsonResponse['status'] = 1;
      
    }else if($requestData['request_type']=='deleteEvent'){
        $deleteSql = "DELETE  FROM tbl_events WHERE id= '".$requestData['event_id']."' ";
         $query = $bdd->prepare( $deleteSql ); 
         $query->execute(); 
        $jsonResponse['status'] = 1;
    }else{
        $sqlInsert = "INSERT INTO tbl_events (title,description,url,start,end) VALUES ('".$title."','".$description."','".$even_url."','".date('Y-m-d H:i:s',strtotime($start))."','".date('Y-m-d H:i:s',strtotime($end)) ."')";
        $query = $bdd->prepare( $sqlInsert ); 
         $query->execute(); 
        $jsonResponse['status'] = 1;
    }
      echo json_encode($jsonResponse);die;
}



?>