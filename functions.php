<?php
function cosmicenergy_enqueue_styles() {
    wp_enqueue_style( 'cosmicenergy-style', get_stylesheet_uri() );
    wp_enqueue_style( 'cosmicenergy-css', get_template_directory_uri() . '/assets/css/cosmic.css' );
    wp_enqueue_script( 'cosmicenergy-js', get_template_directory_uri() . '/assets/js/cosmic.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'cosmicenergy_enqueue_styles' );

function cosmicenergy_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'cosmicenergy_theme_setup' );
