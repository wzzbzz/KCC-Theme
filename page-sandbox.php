<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "the sandbox<br>";
// get a user id
pre(learndash_get_user_courses_from_meta(get_current_user_id()));
         