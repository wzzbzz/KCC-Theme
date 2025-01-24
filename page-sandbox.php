<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "the sandbox<br>";
// get a user id
$group_id = 33777;
$user_id = 849;

$group_submission = new \KCC\Notifications\GroupApprovalRequestNotification(['group_id' => $group_id]);
$group_submission->send();

$group_submission_requested = new \KCC\Notifications\GroupApprovalRequestSubmissionNotification(['group_id' => $group_id]);
$group_submission_requested->send();