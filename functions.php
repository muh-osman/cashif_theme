<?php

/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_cashif_theme_scripts()
{

    $version = '1.1.3';

    // Enqueue CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/css/aos.min.css');
    wp_enqueue_style('plyr-css', get_template_directory_uri() . '/assets/css/plyr.min.css');

    // Additional style for EN and AR page
    // Check if the URL ends with "en" or "en/"
    $current_url = $_SERVER['REQUEST_URI'];

    // Define an array of styles to enqueue based on URL patterns
    //  ex: https://cashif.cc/check-it/receipt/en/?plan=Basic&model=Camry&price=430 => en-receipt-page-style.css
    $styles = [
        '/\/check-it\/receipt\/en\/\?plan=([^&]+)&year_id=([^&]+)&car_model_id=([^&]+)&price_id=([^&]*)/' => 'en-receipt',
        '/\/check-it\/receipt\/\?plan=([^&]+)&year_id=([^&]+)&car_model_id=([^&]+)&price_id=([^&]*)/' => 'ar-receipt',
        '/\/check-it\/en/' => 'en-check-it',
        '/\/check-it/' => 'ar-check-it',
        '/\/privacy-policy/' => 'ar-en-privacy-policy',
        '/\/return-policy/' => 'ar-en-return-policy',
        '/\/terms-of-service/' => 'ar-en-terms-of-service',
        '/\/pay/' => 'ar-en-pay',

        '/\/terms-and-privacy-policy/' => 'ar-en-privacy-policy',
        '/\/thanks/' => 'ar-en-thanks',
        '/\/thankyou/' => 'ar-en-thanks',
        '/\/en/' => 'en',
        '/\//' => 'ar'
    ];

    // Loop through the styles array and enqueue the appropriate style
    foreach ($styles as $pattern => $style) {
        if (preg_match($pattern, $current_url)) {
            wp_enqueue_style("{$style}-style", get_template_directory_uri() . "/assets/css/{$style}-page-style.css", array(), $version);
            break; // Exit the loop once a match is found
        }
    }


    // Enqueue JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), $version, true);
    wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/js/aos.min.js', array('jquery'), $version, true);
    wp_enqueue_script('plyr-js', get_template_directory_uri() . '/assets/js/plyr.min.js', array('jquery'), $version, true);

    // Additional JS for EN and AR page

    // Define an array of scripts to enqueue based on URL patterns
    $scripts = [
        '/\/check-it\/receipt\/en\/\?plan=([^&]+)&year_id=([^&]+)&car_model_id=([^&]+)&price_id=([^&]*)/' => 'en-receipt',
        '/\/check-it\/receipt\/\?plan=([^&]+)&year_id=([^&]+)&car_model_id=([^&]+)&price_id=([^&]*)/' => 'ar-receipt',
        '/\/check-it\/en/' => 'en-check-it',
        '/\/check-it/' => 'ar-check-it',
        '/\/thanks\/en/' => 'thanks',
        '/\/thanks/' => 'thanks',
        '/\/thankyou/' => 'thankyou',
        '/\/pay\/en/' => 'en-pay',
        '/\/pay/' => 'ar-pay',
        '/\/en/' => 'en',
        '/\//' => 'ar'
    ];

    // Loop through the scripts array and enqueue the appropriate script
    foreach ($scripts as $pattern => $script) {
        if (preg_match($pattern, $current_url)) {
            wp_enqueue_script("{$script}-script", get_template_directory_uri() . "/assets/js/{$script}-page.js", array('jquery'), $version, true);
            break; // Exit the loop once a match is found
        }
    }
}
add_action('wp_enqueue_scripts', 'wpdocs_cashif_theme_scripts');




// URL of English page of website (Do NOT forget to flush: go to Settings > Permalinks and click "Save Changes")
function custom_rewrite_rule()
{
    // Define an array of rewrite rules
    $rewrite_rules = [
        'en' => 30,
        'check-it/en' => 36,

        'check-it/receipt' => 45,
        'check-it/receipt/en' => 47,
        'thanks/en' => 70,

        'privacy-policy/en' => 57,
        'return-policy/en' => 59,
        'terms-of-service/en' => 61,

        'terms-and-privacy-policy/en' => 65,

        'pay/en' => 74,
        'thankyou/en' => 78,

    ];

    // Loop through the rewrite rules and add them
    foreach ($rewrite_rules as $slug => $page_id) {
        add_rewrite_rule('^' . $slug . '/?$', 'index.php?page_id=' . $page_id, 'top');
    }
}
add_action('init', 'custom_rewrite_rule');





// // Register a new navigation menu
// function add_Main_Nav()
// {
//     register_nav_menu('header-menu', __('Header Menu'));
// }
// // Hook to the init action hook, run our navigation menu function
// add_action('init', 'add_Main_Nav');
