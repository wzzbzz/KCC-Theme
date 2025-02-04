<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "the sandbox<br>";
// get a user id


$_POST['action']='join_closed_group';
$_POST['group_id']=33868;
$_POST['nonce']=wp_create_nonce('join_closed_group_request');

 $groups = new KCC\Groups();
 $groups->ajaxJoinOpenGroup();

