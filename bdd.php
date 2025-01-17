<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=cpwcckandc_wccdev;charset=utf8mb4', 'cpwcckandc_worldcares', '$p}cE6oci6^&');
 
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}

?>
