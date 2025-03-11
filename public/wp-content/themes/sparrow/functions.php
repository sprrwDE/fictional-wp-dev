<?php
function fictional_files() {
    wp_enqueue_style('fictional_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('fictional_extra_styles', get_theme_file_uri('/build/index.css'));
};

add_action('wp_enqueue_scripts', 'fictional_files');
?>