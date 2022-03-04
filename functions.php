<?php 

// Load style
function load_stylesheets() {
    wp_register_style('fontawesome', get_template_directory_uri() . '/Assets/css/all.min.css', array(), 1, 'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('style', get_template_directory_uri() . '/Assets/css/master.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('normalize', get_template_directory_uri() . '/Assets/css/normalize.css', array(), 1, 'all');
    wp_enqueue_style('normalize');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');




// Load script
function addJs() {
    wp_register_script('js', get_template_directory_uri() . '/Assets/js/index.js', '', 1, 1, 1);
    wp_enqueue_script('js');
}

add_action('wp_enqueue_scripts', 'addJs');

// Adding navigation menu
function fn_theme_supports() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
    add_theme_support('custom-logo');  
}

add_action('after_setup_theme', 'fn_theme_supports');

function fn_custom_excerpt_length($length) {
    return 25;
}

add_filter('excerpt_length', 'fn_custom_excerpt_length')
?>