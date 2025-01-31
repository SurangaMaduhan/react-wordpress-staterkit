<?php
function enqueue_react_app() {
    // Load React App Scripts
    wp_enqueue_script('react-app', get_template_directory_uri() . '/react-app/build/static/js/main.js', array(), null, true);

    // Load React App Styles
    wp_enqueue_style('react-app-style', get_template_directory_uri() . '/react-app/build/static/css/main.css', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_react_app');
function add_acf_to_rest_api() {
    // Expose ACF fields for pages in REST API
    register_rest_field('page', 'acf', array(
        'get_callback'    => function() {
            return get_fields(); // This will return all ACF fields as an array
        },
        'update_callback' => null,
        'schema'          => null,
    ));
}

add_action('rest_api_init', 'add_acf_to_rest_api');
