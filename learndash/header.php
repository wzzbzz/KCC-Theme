<?php
// WordPress header content
get_header();

// Conditional header for LearnDash lesson
if ( is_singular('sfwd-lessons') && strpos($_SERVER['REQUEST_URI'], 'course-content-128') !== false ) {
    // Custom header for a specific lesson
    echo '<h1>Custom Header for Course Content 128</h1>';
} else {
    // Default header for other pages
    echo '<h1>Default Header</h1>';
}
?>
