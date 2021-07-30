<?php
/**
 * The comments template.
 *
 * @package PeachPress
 */

if ( ! defined( 'ABSPATH' ) ) : exit; endif;
?>

<section id="comments" class="comments">
	<h2 class="comments-title">Comments</h2>

	<?php if ( have_comments() ) : ?>
	    <ol class="comments-list">
	    	<?php
	    	wp_list_comments(
	    		array(
	    			'callback' => 'peachpress_comment',
	    			'reverse_top_level' => true
	    		)
	    	);
	    	?>
		</ol>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'fields' => array(
				'author' => '<p class="comment-form-author"><label for="author" class="offscreen">Name *</label><input id="author" name="author" type="text" size="30" maxlength="245" placeholder="Name *"/></p>',
				'email' => '<p class="comment-form-email"><label for="email" class="offscreen">Email *</label><input id="email" name="email" type="text" size="30" maxlength="245" placeholder="Email *"/></p>',
				'url' => '<p class="comment-form-url"><label for="url" class="offscreen">Website</label><input id="url" name="url" type="text" size="30" maxlength="200" placeholder="Website"/></p>',
			),
			'title_reply' => 'Leave a Comment',
			'comment_notes_before' => null,
			'class_container' => 'comments-form'
		)
	);
	?>		


</section>