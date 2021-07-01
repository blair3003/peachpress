<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<span class="entry-author"><?php echo get_the_author_meta('first_name') . " " . get_the_author_meta('last_name'); ?></span>
			<span class="entry-date"><?php echo get_the_date(); ?></span>			
		</div>
		<?php if ( has_post_thumbnail() ) : ?>
			<img class="entry-thumbnail" src="<?php the_post_thumbnail_url('post-featured'); ?>" alt="<?php the_title(); ?>"> 
		<?php endif; ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<footer class="entry-footer">

	</footer>

</article>