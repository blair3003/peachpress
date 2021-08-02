<?php

// Includes
require get_template_directory() . '/inc/template-tags.php';

// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Load css
function peachpress_enqueue_styles() {
	wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), false, 'all');
	wp_enqueue_style('font-awesome');
	wp_register_style('main', get_template_directory_uri() . '/assets/css/main.min.css', array(), '0.1', 'all');
	wp_enqueue_style('main');
}
add_action( 'wp_enqueue_scripts', 'peachpress_enqueue_styles' );

// Load js
function peachpress_enqueue_scripts() {
	wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
	wp_enqueue_script('main');
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

// Register sidebars
function peachpress_register_sidebars() {
	register_sidebar(
		array(
	        'name' => 'Sidebar',
	        'id' => 'sidebar-default',
	        'description' => 'The default sidebar',
	        'before_widget' => '<section id="%1$s" class="widget %2$s">',
	        'after_widget' => '</section>',
	        'before_title' => '<h4 class="widget-title">',
	        'after_title' => '</h4>',
	    )
	);
}
add_action( 'widgets_init', 'peachpress_register_sidebars');

// Add image sizes
function peachpress_add_image_sizes() {
	add_image_size( 'content-featured', 720, 405, true );
	//add_image_size( 'post-archive', 320, 320, true );
}
add_action( 'init', 'peachpress_add_image_sizes' );

// Reduce excerpt length
function peachpress_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'peachpress_custom_excerpt_length', 999 );

?>