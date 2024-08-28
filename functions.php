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

    // Additional style for EN and AR page
    // Check if the URL ends with "en" or "en/"
    $current_url = $_SERVER['REQUEST_URI'];
    // $home_page_ar = '';
    // $home_page_en = '';
    // $check_it_page_ar = '';
    // $check_it_page_en = '';
    // $receipt_page_ar = '';
    // $receipt_page_en = '';

    if (preg_match('/\/check-it\/receipt\/en\/\?plan=([^&]+)&model=([^&]+)&price=([^&]*)/', $current_url)) {
        wp_enqueue_style('en-receipt-page-style', get_template_directory_uri() . '/assets/css/en-receipt.css');
    } elseif (preg_match('/\/check-it\/receipt\/\?plan=([^&]+)&model=([^&]+)&price=([^&]*)/', $current_url)) {
        // Apply CSS for the specific receipt page
        wp_enqueue_style('ar-receipt-page-style', get_template_directory_uri() . '/assets/css/ar-receipt.css');
    } elseif (strpos($current_url, '/check-it/en/') !== false) {
        // EN CSS
        wp_enqueue_style('en-check-it-style', get_template_directory_uri() . '/assets/css/en-check-it-page-style.css');
    } elseif (strpos($current_url, '/check-it/') !== false) {
        // AR CSS
        wp_enqueue_style('ar-check-it-style', get_template_directory_uri() . '/assets/css/ar-check-it-page-style.css');
    } elseif (strpos($current_url, '/en/') !== false) {
        // EN CSS
        wp_enqueue_style('en-page-style', get_template_directory_uri() . '/assets/css/en-page-style.css');
    } elseif (strpos($current_url, '/') !== false) {
        // AR CSS
        wp_enqueue_style('ar-page-style', get_template_directory_uri() . '/assets/css/ar-page-style.css');
    }

    // Enqueue Google Fonts
    // wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Alexandria:wght@300;400;500;600;700&display=swap', array(), '1.0.0');

    // Enqueue JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/js/aos.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('plyr-js', get_template_directory_uri() . '/assets/js/plyr.min.js', array('jquery'), '1.0.0', true);

    // Additional JS for EN and AR page

    if (preg_match('/\/check-it\/receipt\/en\/\?plan=([^&]+)&model=([^&]+)&price=([^&]*)/', $current_url)) {
        //
        wp_enqueue_script('en-receipt-js', get_template_directory_uri() . '/assets/js/en-receipt.js', array('jquery'), '1.0.1', true);
    } elseif (preg_match('/\/check-it\/receipt\/\?plan=([^&]+)&model=([^&]+)&price=([^&]*)/', $current_url)) {
        // Apply JS for the specific receipt page
        wp_enqueue_script('ar-receipt-js', get_template_directory_uri() . '/assets/js/ar-receipt.js', array('jquery'), '1.0.1', true);
    } elseif (strpos($current_url, '/check-it/en/') !== false) {
        // EN JS
        wp_enqueue_script('en-check-it-page-js', get_template_directory_uri() . '/assets/js/en-check-it-page.js', array('jquery'), '1.0.1', true);
    } elseif (strpos($current_url, '/check-it/') !== false) {
        // AR JS
        wp_enqueue_script('ar-check-it-page-js', get_template_directory_uri() . '/assets/js/ar-check-it-page.js', array('jquery'), '1.0.1', true);
    } elseif (strpos($current_url, '/en/') !== false) {
        // EN JS
        wp_enqueue_script('en-page-js', get_template_directory_uri() . '/assets/js/en-page.js', array('jquery'), '1.0.1', true);
    } elseif (strpos($current_url, '/') !== false) {
        // AR JS
        wp_enqueue_script('ar-page-js', get_template_directory_uri() . '/assets/js/ar-page.js', array('jquery'), '1.0.1', true);
    }
}
add_action('wp_enqueue_scripts', 'wpdocs_cashif_theme_scripts');




// URL of English page of website (Do NOT forget to flush: go to Settings > Permalinks and click "Save Changes")
function custom_rewrite_rule()
{
    // http://localhost/cashif/en/
    add_rewrite_rule('^en/?$', 'index.php?page_id=30', 'top');

    // http://localhost/cashif/check-it/en/
    add_rewrite_rule('^check-it/en/?$', 'index.php?page_id=36', 'top');

    // http://localhost/cashif/check-it/receipt/
    add_rewrite_rule('^check-it/receipt/?$', 'index.php?page_id=45', 'top');

    // http://localhost/cashif/check-it/receipt/en/
    add_rewrite_rule('^check-it/receipt/en/?$', 'index.php?page_id=47', 'top');
}
add_action('init', 'custom_rewrite_rule');





// // Register a new navigation menu
// function add_Main_Nav()
// {
//     register_nav_menu('header-menu', __('Header Menu'));
// }
// // Hook to the init action hook, run our navigation menu function
// add_action('init', 'add_Main_Nav');
