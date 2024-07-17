<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title><?php bloginfo('name') ?> | <?php bloginfo('description') ?></title>


    <!-- yoast seo will overwrite all this things -->
    <!-- Meta Description -->
    <meta name="description" content="كاشف لفحص السيارات | مركز متخصص في فحص السيارات المستعملة، يقدم مفهوم جديداً يواكب أحدث التقنيات ليساعدك في قرار الشراء">

    <!-- Favicon -->
    <?php
    $custom_favicon_url = get_theme_mod('custom_favicon_setting');
    if ($custom_favicon_url) {
        echo '<link href="' . esc_url($custom_favicon_url) . '" rel="icon" />';
    }
    ?>

    <meta name="facebook-domain-verification" content="afn8s5scmy0pcaoswyiz34ncdqymfr" />

    <?php wp_head() ?>
</head>