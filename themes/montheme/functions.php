<?php
function montheme_supports()
{
    // Ajouter la prise en charge des images mises en avant
    add_theme_support('post-thumbnails');
    // Définir la taille des images mises en avant
    set_post_thumbnail_size(400, 400, true);
    // Définir d'autres tailles d'images
    add_image_size(
        'products',
        400,
        400,
        false
    );
    add_image_size('square', 200, 200, false);
    add_theme_support('title-tag');

    //dans admin fait apparaitre le menu
    add_theme_support('menus');

    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');



    add_theme_support('custom-logo', array(
        'height' => 400,
        'width' => 400,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}


function montheme_document_title_parts($title)
{
    unset($title['tagline']);
    return $title;
}


function montheme_stylesheet()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

function register_my_sidebar()
{
    register_sidebar(
        array(
            'name' => "Sidebar principale",
            'id' => 'main-sidebar',
            'description' => "La sidebar
    principale",
            'before_widget' => '<div id="%1$s"
    class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2
    class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    // pour ajouter une autre sidebar
    register_sidebar(
        array(
            'name' => "Sidebar du footer",
            'id' => 'footer-sidebar',
            'description' => "La sidebar
    Du footer",
            'before_widget' => '<div id="%1$s"
    class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2
    class="widget-title">',
            'after_title' => '</h2>'
        )
    );
}

add_action('after_setup_theme', 'montheme_supports');
add_filter('document_title_parts', 'montheme_document_title_parts');
add_action('widgets_init', 'register_my_sidebar');
add_action('wp_enqueue_scripts', 'montheme_stylesheet');