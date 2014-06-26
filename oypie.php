<?php
/*
Plugin Name: OYPie
Plugin URI: http://sanderonlinemedia.nl/oypie;
Description: This plugin is for photographers who use the service 'OYPO'. In this plugin you can generate shortcodes for your pages and posts. The shortcode generator can you find under 'Tools' > 'SanderOnline'.
Version: 0.11b
Author: SanderOnline Media / Sander Dijkstra
Author URI: http://sander-dijkstra.nl/
License: Commercial use
*/

include("shortcode.php");

// Add OYPO


// Add options page
//add_action('admin_menu', 'oypie_home');
add_action( 'admin_menu', 'oypie_menu' );



wp_enqueue_script('jquery');

function oypie_menu() {
    add_menu_page("", "OYPie", 'oypie', "oypie", "oypie_home_page",'dashicons-camera', 76 );
	add_submenu_page("oypie", "OYPie - Album", "Albumgenerator", 0, "oypie_album", "oypie_album_page");
    add_submenu_page("oypie", "OYPie - Prijslijst", "Prijslijstgenerator", 0, "oypie_price", "oypie_price_page");
    add_submenu_page("oypie", "OYPie - Help", "Help", 0, "oypie_help", "oypie_help_page");
    remove_submenu_page( 'oypie', 'oypie' );
}


// Admin Pages
    
function oypie_price_page() {
    require_once("price_page.php");
    }
    
function oypie_help_page() {
    require_once("help_page.php");
    }

function oypie_album_page() {
    require_once("album_page.php");
}?>