<?php
/**
 * No content.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<section class="no-content">
    <header class="page-header">
        <h1 class="page-title">Nothing to see here</h1>        
    </header>
    <div class="page-content">

        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p>Ready to publish your first post? <a href="<?php echo esc_url(admin_url('post-new.php')); ?>">Get started here</a>.</p>

        <?php elseif ( is_search() ) : ?>

            <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
            <?php get_search_form(); ?>

        <?php else : ?>

            <p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
            <?php get_search_form(); ?>

        <?php endif; ?>
        
    </div>
</section>