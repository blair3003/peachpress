<?php
/**
 * The search results.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<?php get_header(); ?>

<main class="site-main">

    <?php
    if ( have_posts() ) :
    ?>
    <header class="page-header">
        <h1 class="page-title">
            Search results for: <?php echo esc_html( the_search_query() ); ?>
        </h1>    
    </header>

    <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content/content', 'excerpt' );
        endwhile;
        the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => '← Previous',
            'next_text' => 'Next →',
        ) );
    else :
        get_template_part( 'template-parts/content/content', 'none' );
    endif;
    ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>