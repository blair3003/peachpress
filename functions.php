<?php

// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

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
	add_image_size( 'post-featured', 640, 360, true );
	add_image_size( 'post-archive', 320, 320, true );
}
add_action( 'init', 'peachpress_add_image_sizes' );

// Reduce excerpt length
function peachpress_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'peachpress_custom_excerpt_length', 999 );

?>