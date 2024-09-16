<?php

/* CSS */
function salient_child_enqueue_styles() {
	$nectar_theme_version = nectar_get_theme_version();
	wp_enqueue_style( 'salient-child-style', get_stylesheet_directory_uri() . '/style.css', '', $nectar_theme_version );

	if ( is_rtl() ) {
		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
	}
}
add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles', 100);

/* JS */
function salient_child_enqueue_scripts() {
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/script.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_scripts' );

?>