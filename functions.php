<?php
/* ----------------------------------------
 * Child Theme Functions
 * ---------------------------------------- */

// Add Parent Styles (CSS)
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// Custom functions Below This Line



// No Code Below This Line
?>