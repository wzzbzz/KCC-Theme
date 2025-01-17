<?php

/* Template Name: Event Detail Page  */



use Tribe\Events\Views\V2\Template_Bootstrap;

// Call the display_file_path function
display_file_path();


if ( is_user_logged_in() ) {



include('user_topbar.php');?>





<?php echo tribe( Template_Bootstrap::class )->get_view_html();?>



<?php include('footer-new.php'); } else {



header("Location:/login/");



} ?>