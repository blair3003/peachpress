<?php

// Theme options
add_theme_support('menus');

// Load css
function peachpress_enqueue_styles() {
	//wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', false, '5.0.2', 'all');
	//wp_enqueue_style('bootstrap');
	wp_register_style('main', get_template_directory_uri() . '/assets/css/main.min.css', false, '0.1', 'all');
	wp_enqueue_style('main');
}
add_action( 'wp_enqueue_scripts', 'peachpress_enqueue_styles' );

// Load js
function peachpress_enqueue_scripts() {
	//wp_enqueue_script('jquery');
	//wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array('jquery'), '5.0.2', true);
	//wp_enqueue_script('bootstrap');
}
add_action( 'wp_enqueue_scripts', 'peachpress_enqueue_scripts' );

// Register menus
function peachpress_register_nav_menus() {
	register_nav_menus(
		array(
			'header-menu' => 'Header'
		)
	);
}
add_action( 'init', 'peachpress_register_nav_menus' );

?>