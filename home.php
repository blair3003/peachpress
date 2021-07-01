<?php get_header(); ?>

<?php get_template_part( 'template-parts/home', 'header' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/archive', 'post' ); ?>

<?php endwhile; endif; ?> 

<?php get_template_part( 'template-parts/archive', 'footer' ); ?>

<?php get_footer(); ?>