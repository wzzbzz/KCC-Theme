<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "the sandbox<br>";
// get a user id
$sql = "select id from wp_posts WHERE post_status='publish' AND post_type='groups'";
global $wpdb;

$group_ids = $wpdb->get_results($sql);
foreach($group_ids as $group_id) {
    $group_ids[] = $group_id->id;
}
pre($group_ids);
$sql = "select distinct(group_id) from users_groups";

$users_groups_ids = $wpdb->get_results($sql);

foreach($users_groups_ids as $group_id){
    if(!in_array($group_id->group_id, $group_ids)){
        $sql = "delete from users_groups where group_id = ".$group_id->group_id;
        $wpdb->query($sql);
        echo "deleted group id: ".$group_id->group_id."<br>";
    }
}
die;
         