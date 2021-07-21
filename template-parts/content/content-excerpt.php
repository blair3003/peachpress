<?php
/**
 * The content excerpt.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content-excerpt'); ?>>
    <header class="entry-header">
        <h2 class="entry-title">
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="entry-meta">
        	<span class="entry-date"><?php echo get_the_date(); ?></span>
        	<span class="entry-author">
                by <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author"><?php echo get_the_author(); ?></a>
            </span>
            <span class="entry-comments">
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
        	<span class="entry-cats"><?php echo get_the_category_list(', '); ?></span>
        </div>
    </header>

    <div class="entry-excerpt">
        <?php the_excerpt(); ?>
    </div>
    

</article>