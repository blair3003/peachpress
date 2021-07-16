<?php
/**
 * The index.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="search"></label>
    <input type="search" class="search-field" placeholder="Search &hellip;" value="<?php echo esc_attr( get_search_query() ); ?>" name="search" title="Search for something!">
    <button class="search-submit" aria-label="Search">Go</button>
</form>

