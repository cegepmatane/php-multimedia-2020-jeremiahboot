<?php

/**
 * @package monplugin
 * @version 0.1
 */
/*
Plugin Name: Mon Plugin
Plugin URI:
Description: Test
Author: Jeremiah Botrel
Version: 0.1
Author URI:
*/


function monplugin_ajouter_fioritures($contenu)
{
    return '~~~~~~~~~~~~~~~~~~~~~~~~~' . $contenu . '~~~~~~~~~~~~~~~~~~~~~~~~~';
}
add_filter('the_content', 'monplugin_ajouter_fioritures');