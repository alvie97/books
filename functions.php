<?php

function add_assets() {
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/main.css', array() );
}
add_action('wp_enqueue_scripts', 'add_assets');