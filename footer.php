<?php
/**
 * The footer.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>	
	
		<footer class="site-footer">
			<div class="copyright-bar">
				<a href="<?php echo esc_url( home_url('/') ); ?>">&copy; <?php echo date('Y'); ?> <?php echo esc_html( get_bloginfo('name') ); ?> </a>
			</div>			
		</footer>
	</div>

	<?php wp_footer(); ?>

</body>

</html>