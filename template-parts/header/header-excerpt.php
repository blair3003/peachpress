<?php
/**
 * The excerpt header template part.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<header class="content-header">
    <h2 class="content-title">
        <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
    </h2>
    <div class="content-meta">
        <div class="content-info">
            <span class="content-date"><?php echo get_the_date(); ?></span>
            <span class="content-author">
                by <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author"><?php echo get_the_author(); ?></a>
            </span>
            <span class="content-cats"><?php echo get_the_category_list(', '); ?></span>         
        </div>
        <div class="content-comments">
            <a class="comments-link" href="<?php echo esc_url(get_permalink() . '#comments'); ?>" title="
                <?php
                if (get_comments_number() == 1) :
                    echo '1 Comment';
                else :
                    echo get_comments_number() . ' Comments';
                endif;
                ?>">
                <span class="comments-number"><?php echo get_comments_number(); ?></span>
                <img class="comments-icon" src="<?php echo get_template_directory_uri() . '/assets/images/peach-icon.png' ?>">
            </a>
        </div>
    </div>
</header>
