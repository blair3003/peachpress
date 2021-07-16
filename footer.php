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
				<a href="<?php echo esc_url( home_url('/') ); ?>">&copy; <?php echo date('Y'); ?> PeachPress</a>
			</div>			
		</footer>
	</div>

	<?php wp_footer(); ?>

</body>

</html>