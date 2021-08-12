<?php
/**
 * The header nav template part.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>		

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