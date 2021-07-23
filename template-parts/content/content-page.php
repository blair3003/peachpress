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
    </header>

    <section class="content-body">
        <?php
        the_content();

        wp_link_pages(
            array(
                'before'   => '<nav class="content-links">Pages:',
                'after'    => '</nav>'
            )
        );

        ?>
    </section>

    <footer class="content-footer">

    </footer>
    

</article>