<?php 
function my_scripts_and_styles(){

$cache_buster = date("YmdHi", filemtime( get_stylesheet_directory() . '/css/main.css'));
wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css', array(), $cache_buster, 'all' );

}

add_action( 'wp_enqueue_scripts', 'my_scripts_and_styles', 99);
 ?>
