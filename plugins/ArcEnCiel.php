<?php

/**
 * @package ArcEnCiel
 * @version 0.1
 */
/*
6
Plugin Name: Arc En Ciel
Plugin URI:
http://wordpress.accentnet.ca/plugins/arcenciel/
Description: Plugin qui colore le site avec des couleurs de l'arc en
ciel
Author: Bruno Harrisson
Version: 0.1
Author URI:
*/
//https: //codex.wordpress.org/Plugin_API/Action_Reference/wp_head


function arcenciel_styliser()
{
    echo
    '<style>';
    include
        "style.css";
    echo
    '</style>';
}
add_action(
    '
wp_head',
    'arcenciel_styliser'
);