<?php
// Get the current page URL
$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Check if the URL ends with '/en/' for English or '/ar/' for Arabic
if (preg_match('/\/en\/?$/', $current_url)) {
    $lang = 'en';
    $title = 'Cashif for Car Inspection | Comprehensive and Accurate Inspection with the Latest Technologies';
} else {
    $lang = 'ar';
    $title = 'كاشف لفحص السيارات | فحص شامل ودقيق بأحدث التقنيات';
}
?>



<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title><?php echo $title; ?></title>


    <!-- yoast seo will overwrite all meta -->

    <?php wp_head() ?>
</head>