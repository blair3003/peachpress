<?php
/**
 * The header.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<div id="page" class="site">

		<header class="site-header">

			<a class="site-branding" href="<?php echo esc_url( home_url('/') ); ?>">
				<img class="site-logo" src="<?php echo get_template_directory_uri() . '/assets/images/peach-icon.png' ?>">
				<span class="site-title"><?php echo esc_html( get_bloginfo('name') ); ?></span>
			</a>

			<button id="mobile-menu-toggle" class="mobile-menu-toggle">
				<i class="fas fa-bars"></i>
				<i class="fas fa-times toggle"></i>
			</button>		

			<nav id="site-navigation" class="site-navigation toggle">
				<?php
				wp_nav_menu(
					array(
						'menu' => 'Header',
						'theme_location' => 'header-menu',
						'fallback_cb' => false
					)
				);
				?>		
			</nav>

		</header>

		