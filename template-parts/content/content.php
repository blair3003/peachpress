<?php
/**
 * The content.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="content-header">
        <h2 class="content-title">
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
        </h2>
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