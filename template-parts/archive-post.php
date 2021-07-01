<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<img class="entry-thumbnail" src="<?php the_post_thumbnail_url('post-archive'); ?>" alt="<?php the_title(); ?>"> 
	<?php endif; ?>

	<div class="entry-content">
		<h5 class="entry-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h5>
		<span class="entry-date"><?php echo get_the_date(); ?></span>
		<?php the_excerpt(); ?>
		
	</div>

</article>