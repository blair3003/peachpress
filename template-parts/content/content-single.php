<?php
/**
 * The content single.
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
        <div class="content-meta">
            <span class="content-date"><?php echo get_the_date(); ?></span>
            <span class="content-author">
                by <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author"><?php echo get_the_author(); ?></a>
            </span>
            <span class="content-cats"><?php echo get_the_category_list(', '); ?></span>
            <span class="content-comments">
                <a href="<?php echo esc_url(get_permalink() . '#comments'); ?>">
                    <?php
                    if (get_comments_number() == 1) :
                        echo '1 Comment';
                    else :
                        echo get_comments_number() . ' Comments';
                    endif;
                    ?>
                </a>
            </span>
        </div>
        <?php if ( has_post_thumbnail() ) : ?>
            <img class="content-thumbnail" src="<?php the_post_thumbnail_url('content-featured'); ?>" alt="<?php the_title(); ?>"> 
        <?php endif; ?>
    </header>

    <section class="content-body" id="content">
        <?php the_content(); ?>

        <hr class="content-separator">

        <?php
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