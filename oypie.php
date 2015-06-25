<?php
/*
Plugin Name: OYPie
Plugin URI: http://sanderonlinemedia.nl/oypie;
Description: This plugin is for photographers who use the service 'OYPO'. In this plugin you can generate shortcodes for your pages and posts. The shortcode generator can you find under 'Tools' > 'SanderOnline'.
Version: 1.1.2
Author: SanderOnline Media / Sander Dijkstra
Author URI: http://sander-dijkstra.nl/
License: Commercial use
*/

// Load shortcodes and widget
require_once("shortcode.php");
require_once("widget.php");

// Add options page
add_action( 'admin_menu', 'oypie_menu' );

wp_enqueue_script('jquery');

function oypie_menu() {
    add_menu_page("", "OYPie", 'oypie', "oypie", "oypie_home_page",'dashicons-camera', 76 );
    add_submenu_page("oypie", "OYPie - Help", "Informatie", 0, "oypie_help", "oypie_help_page");
    add_submenu_page("oypie", "OYPie - Albumgenerator", "Albumgenerator", 0, "oypie_album", "oypie_album_page");
    add_submenu_page("oypie", "OYPie - Prijslijstgenerator", "Prijslijstgenerator", 0, "oypie_price", "oypie_price_page");
    add_submenu_page("oypie", "OYPie - Voorkeuren", "Voorkeuren", 0, "oypie_preference", "oypie_preference_page");
    remove_submenu_page( 'oypie', 'oypie' );
}


// Admin Pages
    
function oypie_price_page() {
    require_once("pages/price.php");
    }
    
function oypie_help_page() {
    require_once("pages/help.php");
    }

function oypie_album_page() {
    require_once("pages/album.php");
}
function oypie_preference_page() {
    require_once("pages/preference.php");
}

// MCE Button
add_action('admin_head', 'oypie_add_button');

function oypie_add_button() {
    global $typenow;
    if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
    return;
    }
    if ( get_user_option('rich_editing') == 'true') {
        add_filter("mce_external_plugins", "oypie_add_tinymce_plugin");
        add_filter('mce_buttons', 'oypie_register_my_tc_button');
    }
}

function oypie_add_tinymce_plugin($plugin_array) {
    $plugin_array['oypie_tc_button'] = plugins_url( 'js/text-button.js', __FILE__ ); // CHANGE THE BUTTON SCRIPT HERE
    return $plugin_array;
}

function oypie_register_my_tc_button($buttons) {
   array_push($buttons, "oypie_tc_button");
   return $buttons;
}

function oypie_tc_css() {
    wp_enqueue_style('oypie-tc', plugins_url('css/btn.css', __FILE__));
}
 
add_action('admin_enqueue_scripts', 'oypie_tc_css');

function oypie_admin_css() {
    wp_enqueue_style('oypie', plugins_url('css/admin.css', __FILE__));
}
 
add_action('admin_enqueue_scripts', 'oypie_admin_css');
?>