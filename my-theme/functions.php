<?php

function myTheme_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri()); 
}
add_action( 'wp_enqueue_scripts', 'myTheme_stylesheets' );