<?php
/**
 * The content page.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
    <header class="content-header">
        <h1 class="content-title">
            <?php the_title(); ?>
        </h1>
        <div class="content-meta"></div>
        <?php if ( has_post_thumbnail() ) : ?>
            <img class="content-thumbnail" src="<?php the_post_thumbnail_url('content-featured'); ?>" alt="<?php the_title(); ?>"> 
        <?php endif; ?>
    </header>

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

    <footer class="content-footer">

    </footer>
    

</article>