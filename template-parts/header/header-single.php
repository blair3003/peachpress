<?php
/**
 * The post header template part.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<header class="content-header">
    <h1 class="content-title">
        <?php the_title(); ?>
    </h1>
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
    <?php if ( has_post_thumbnail() ) : ?>
        <img class="content-thumbnail" src="<?php the_post_thumbnail_url('content-featured'); ?>" alt="<?php the_title(); ?>"> 
    <?php endif; ?>
</header>
