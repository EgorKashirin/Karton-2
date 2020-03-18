<?php 
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() .'/css/animate.css' );
    wp_enqueue_style( 'fotorama', 'https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
function theme_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js' );
    wp_enqueue_script( 'jquery');
    wp_deregister_script( 'jquery-slim' );
    wp_register_script( 'jquery-slim', 'https://code.jquery.com/jquery-3.4.1.slim.js' );
    wp_enqueue_script( 'jquery-slim');

    // wp_enqueue_script( 'wow', get_template_directory_uri() .'/js/wow.min.js', array('jquery') , null , true);

}