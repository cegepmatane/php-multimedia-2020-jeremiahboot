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

    function licence()
    {
        return '<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Licence Creative Commons"
            style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />Ce(tte) œuvre est
    mise à disposition selon les termes de la <a rel="license"
        href="http://creativecommons.org/licenses/by/4.0/">Licence Creative Commons Attribution 4.0 International</a>';
    }

    function copyrightDate()
    {
        return date("Y");
    }

    // On commence par définir la fonction
    function portefolio_baliser_extrait($extrait)
    {
        return ('<blockquote>' . $extrait . '</blockquote>');
    }
    //Connecter avec le filtre

    function wpdocs_excerpt_more($more)
    {
        if (!is_single()) {
            $more = sprintf(
                '<a class="read-more" href="%1$s">%2$s</a>',
                get_permalink(get_the_ID()),
                __('Read More', 'textdomain')
            );
        }

        return $more;
    }
}







add_action('after_setup_theme', 'montheme_supports');
add_filter('excerpt_more', 'wpdocs_excerpt_more');
add_filter('the_excerpt', 'portefolio_baliser_extrait');
add_filter('document_title_parts', 'montheme_document_title_parts');
add_action('widgets_init', 'register_my_sidebar');
add_action('wp_enqueue_scripts', 'montheme_stylesheet');