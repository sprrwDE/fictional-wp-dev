<?php
function fictional_files() {
    wp_enqueue_style('fictional_main_styles', get_stylesheet_uri());
};

add_action('wp_enqueue_scripts', 'fictional_files');
?>