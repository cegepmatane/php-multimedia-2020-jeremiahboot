<!DOCTYPE html>
<html <?php language_attributes(); ?>>




<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-  fit=no" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header">
        <a href="<?php echo home_url('/'); ?>">
            <?php the_custom_logo(); ?>
        </a>
        <nav id="menu" class="menu">
            <?php wp_nav_menu(array('theme_location' => 'header')); ?>
        </nav>
    </header> <?php wp_body_open(); ?>