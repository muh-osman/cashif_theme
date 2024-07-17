<?php

/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_cashif_theme_scripts()
{
    // Enqueue CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/css/aos.min.css');
    wp_enqueue_style('plyr-css', get_template_directory_uri() . '/assets/css/plyr.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css');

    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Alexandria:wght@300;400;500;600;700&display=swap', array(), '1.0.0');

    // Enqueue JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/js/aos.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('plyr-js', get_template_directory_uri() . '/assets/js/plyr.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wpdocs_cashif_theme_scripts');




// // Register a new navigation menu
// function add_Main_Nav()
// {
//     register_nav_menu('header-menu', __('Header Menu'));
// }
// // Hook to the init action hook, run our navigation menu function
// add_action('init', 'add_Main_Nav');
