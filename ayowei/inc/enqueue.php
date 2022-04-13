<?php

function ayowei_scripts(){
	wp_enqueue_style( 'ayowei-style', get_stylesheet_uri(), array(), '1.0', 'all' );
	// wp_enqueue_style( 'ayowei-main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all' );
	wp_enqueue_script( 'ayowei-js', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'ayowei_scripts' );

