<?php

/*
******************************
    INCLUDE DOC SCRIPTS
******************************
*/

function hubbl_script_enqueue() {
//CSS
    wp_enqueue_style('custom_style', get_template_directory_uri().'/assets/css/hubbl.css', array(), '1.0.0', 'all');
//JS
    //DOCUMENT
    wp_enqueue_script('custom_script', get_template_directory_uri().'/assets/js/hubbl.js', array(), '1.0.0', true);
    //JQUERY—WORDPRESS BUILT-IN
    wp_enqueue_script('jquery', true);
}

add_action('wp_enqueue_scripts', 'hubbl_script_enqueue');

/*
******************************
    INCLUDE DOCUMENT FONTS
******************************
*/

function custom_add_google_fonts() {
    wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700', false );
}

add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );

/*
******************************
    THEME SUPPORT
******************************
*/
function hubbl_setup() {

    add_theme_support('menus');
    add_theme_support( 'post-thumbnails' );
}
add_action('init', 'hubbl_setup');
