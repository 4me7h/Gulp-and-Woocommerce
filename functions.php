<?php 

require 'inc/storefront-template-functions.php';

//Styles from the theme core
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

//Css libraries
function styles() {
    //bootstrap
    wp_enqueue_style('bootstrap_css', get_stylesheet_directory_uri() . '/dist/bootstrap/bootstrap.min.css', array(), '5.0.0');
}

//Custom styles
function css() {
    wp_enqueue_style('style_css', get_stylesheet_directory_uri() . '/dist/css/bundle.css', array(), '1.0.0');
}

//Incluir Scripts JS
function scripts() {
    //bootstrap
    wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . '/dist/bootstrap/bootstrap.min.js', array('jquery'), '5.0.0');
    wp_enqueue_script('js', get_stylesheet_directory_uri() . '/dist/js/bundle.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'styles');
add_action( 'wp_enqueue_scripts', 'css', 300);
add_action( 'wp_enqueue_scripts', 'scripts');

