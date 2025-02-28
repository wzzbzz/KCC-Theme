<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "the sandbox<br>";
// get a user id

$group = KCC\Groups::getGroupBySlug("sallys-second-group");
pre(get_the_post_thumbnail_url( $group->id(), 'thumbnail'));
die;
pre($group->image());
pre($group->image_url());
pre($group->thumbnail());
pre($group->thumbnail_url());
pre($group->thumbnail_alt());
die;



$_POST['action']='accept_group_join_request';
$_POST['uid']=849;
$_POST['group_id']=33762;
$_POST['id']=84;

$groups = new KCC\Groups();
$groups->ajaxAcceptGroupJoinRequest($_POST);

