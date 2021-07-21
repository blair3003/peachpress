<?php
/**
 * The index.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<?php get_header(); ?>

<main class="site-main">

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content/content', 'excerpt' );
        endwhile;
    else :
        get_template_part( 'template-parts/content/content', 'none' );
    endif;
    ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>