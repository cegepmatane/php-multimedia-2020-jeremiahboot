<?php

/**
 * @package Verdisseur
 * @version 0.1
 */
/*
Plugin Name: Verdisseur
Plugin URI:
Description: Test de couleurs
Author: Bruno Harrisson
Version: 0.1
Author URI:
*/
function verdisseur_decorer_site_en_vert()
{
    echo "<style>";
    include "style.css";
    echo "</style>";
}

add_filter(
    'wp_head',
    'verdisseur_decorer_site_en_vert'
);