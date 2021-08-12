<?php
/**
 * The post footer template part.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<footer class="content-footer">

    <?php echo get_the_tag_list('<div class="content-tags">', ', ', '</div>'); ?>

</footer>
    
