<?php
/**
 * The header template part.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>		

<header class="site-header">

	<a class="site-branding" href="<?php echo esc_url( home_url('/') ); ?>">
		<img class="site-logo" src="<?php echo get_template_directory_uri() . '/assets/images/peach-icon.png' ?>">
		<span class="site-title"><?php echo esc_html( get_bloginfo('name') ); ?></span>
	</a>
	
	<button id="mobile-menu-toggle" class="mobile-menu-toggle">
		<i class="fas fa-bars"></i>
		<i class="fas fa-times toggle"></i>
	</button>

	<?php get_template_part( 'template-parts/nav/nav', 'header' ); ?>		

</header>