<?php
// Get the WordPress header
get_header('new');

// Custom header logic for a specific lesson
if ( strpos($_SERVER['REQUEST_URI'], 'course-content-128') !== false ) {
    echo '<h1>Custom Header for This Lesson</h1>';
} else {
    echo '<h1>Default Lesson Header</h1>';
}

// Main lesson content
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
endif;

// Get the WordPress footer
get_footer();
