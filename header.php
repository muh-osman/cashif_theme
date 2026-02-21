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


    <!-- Moyasar Styles -->
    <!-- <link rel="stylesheet" href="https://cdn.moyasar.com/mpf/1.14.0/moyasar.css" /> -->
    <!-- Moyasar Scripts -->
    <!-- <script src="https://cdnjs.cloudflare.com/polyfill/v3/polyfill.min.js?version=4.8.0&features=fetch"></script> -->
    <!-- <script src="https://cdn.moyasar.com/mpf/1.14.0/moyasar.js"></script> -->

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/moyasar-payment-form@2.0.18/dist/moyasar.css" /> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/moyasar-payment-form@2.0.18/dist/moyasar.umd.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/moyasar-payment-form@2.1.1/dist/moyasar.css" /> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/moyasar-payment-form@2.1.1/dist/moyasar.umd.min.js"></script> -->


    <!-- QrCode -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script> -->


</head>