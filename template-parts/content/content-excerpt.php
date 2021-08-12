<?php
/**
 * The content excerpt.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content-excerpt'); ?>>

    <?php get_template_part( 'template-parts/header/header', 'excerpt' ); ?>

    <section class="content-body-excerpt">
        <?php the_excerpt(); ?>
    </section>    

</article>