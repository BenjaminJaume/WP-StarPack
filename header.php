<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>

    <!-- Favicons
    From https://favicon.io/ -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/medias/favicons/apple-touch-icon.png'; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/medias/favicons/favicon-32x32.png'; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/medias/favicons/favicon-16x16.png'; ?>">
    <link rel="manifest" href="<?php echo get_template_directory_uri() . '/medias/favicons/site.webmanifest'; ?>">

    <?php wp_head(); ?>
</head>

<?php

// global $global_variable;
// $global_variable = 0;

?>

<body <?php body_class('main'); ?>>

    <header class="sticky-top" role="banner">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
            <div class="container-fluid">
                <a class="mx-auto" href=<?php bloginfo('url'); ?>>
                    <img src="<?php echo wp_get_attachment_url(19); ?>" alt="" class="navbar-logo" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbar',
                    'menu_class'        => 'nav navbar-nav mx-auto text-center',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>

                <div class="d-flex mt-4 mt-sm-0 mx-auto">
                    <?php echo do_shortcode('[gtranslate]'); ?>
                </div>
        </nav>
    </header>

    <main role="main">