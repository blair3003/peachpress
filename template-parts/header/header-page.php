<?php
/**
 * The page header template part.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<header class="content-header">

    <h1 class="content-title">
        <?php the_title(); ?>
    </h1>

    <div class="content-meta"></div>

    <?php if ( has_post_thumbnail() ) : ?>
        <img class="content-thumbnail" src="<?php the_post_thumbnail_url('content-featured'); ?>" alt="<?php the_title(); ?>"> 
    <?php endif; ?>
    
</header>
