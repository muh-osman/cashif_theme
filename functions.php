<?php

/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_cashif_theme_scripts()
{
    // CSS
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('aos_css', get_template_directory_uri() . '/assets/css/aos.css');
    wp_enqueue_style('plyr_css', 'https://cdn.plyr.io/3.6.8/plyr.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    // Font
    wp_enqueue_style('font', 'https://fonts.googleapis.com');
    wp_enqueue_style('font_two', 'https://fonts.gstatic.com');
    wp_enqueue_style('font_three', 'https://fonts.googleapis.com/css2?family=Alexandria:wght@300;400;500;600;700&display=swap');



    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('aos_js', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('plyr_js', 'https://cdn.plyr.io/3.6.8/plyr.js', array('jquery'), '3.6.8', true);
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wpdocs_cashif_theme_scripts');





// Register a new sidebar simply named 'sidebar'
function add_widget_support()
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}
// Hook the widget initiation and run our function
add_action('widgets_init', 'add_widget_support');





// Register a new navigation menu
function add_Main_Nav()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
// Hook to the init action hook, run our navigation menu function
add_action('init', 'add_Main_Nav');
