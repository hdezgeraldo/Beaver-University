<?php

function beaver_files(){
    // looking for 2 arguments
    // (1) name for the
    wp_enqueue_style('beaver_main_styles', get_stylesheet_uri());
}

// WP function
// (1) hook name used to load CSS/JS files
// (2) name of function to run
add_action('wp_enqueue_scripts', 'beaver_files');