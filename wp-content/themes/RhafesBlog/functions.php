<?php 

// Load style
function load_stylesheets() {
    // wp_register_style('googleapis', get_template_directory_uri() . 'https://fonts.googleapis.com', array(), 1, 'all');
    // wp_enqueue_style('googleapis');

    // wp_register_style('gstatic', get_template_directory_uri() . 'https://fonts.gstatic.com', array(), 1, 'all');
    // wp_enqueue_style('gstatic');

    // wp_register_style('font', get_template_directory_uri() . 'https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;700&display=swap', array(), 1, 'all');
    // wp_enqueue_style('font');

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
?>