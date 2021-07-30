<?php
/**
 * The custom template tags.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;

if ( ! function_exists('peachpress_comment') ) {

    /**
     * Template used for comments
     * 
     * @param object $comment The comment object
     * @param array $args The existing args
     * @param int  $depth The thread depth
     */
    function peachpress_comment( $comment, $args, $depth ) {

        ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class( $args['has_children'] ? 'parent' : '' ); ?>>
            <div class="comment-thumbnail"><?php echo get_avatar($comment) ?></div>
            <div class="comment-body">
                <div class="comment-meta">
                    <cite itemprop="name" class="fn"><?php echo get_comment_author_link(); ?></cite>
                    <time datetime="<?php comment_time('c'); ?>" itemprop="datePublished">
                        <?php echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . ' ago'; ?>
                    </time>
                </div>
                <div class="comment-content"><?php comment_text(); ?></div>
                <div class="comment-footer">
                    <?php
                    edit_comment_link( 'Edit', '<span class="edit-link">', '</span>' );
                    comment_reply_link(
                        array_merge(
                            $args,
                            array(
                                'depth'     => $depth,
                                'max_depth' => $args['max_depth'],
                                'before'    => '<span class="reply">',
                                'after'     => '</span>',
                            )
                        )
                    );
                    ?>
                </div>
            </div>

        <?php

    }

}