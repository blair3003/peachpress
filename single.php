<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/single', 'post' ); ?>

<?php if ( comments_open() || get_comments_number() ) : comments_template(); ?>
<?php endif; ?>

<?php endwhile; endif; ?> 


<?php get_footer(); ?>