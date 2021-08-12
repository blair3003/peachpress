<?php
/**
 * The content page.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
    
    <?php get_template_part( 'template-parts/header/header', 'page' ); ?>

    <section class="content-body" id="content">
        <?php
        the_content();
        
        wp_link_pages(
            array(
                'before' => '<nav class="content-links">',
                'after' => '</nav>',
                'next_or_number' => 'next',
                'nextpagelink' => 'Next →',
                'previouspagelink' => '← Previous'
            )
        );
        ?>

    </section>

    <?php get_template_part( 'template-parts/footer/footer', 'page' ); ?>
    

</article>