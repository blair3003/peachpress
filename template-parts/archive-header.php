<section class="archive">

	<header class="archive-header">
		<h1 class="archive-title">
			<?php if ( single_cat_title('', false) ) : single_cat_title(); ?>
			<?php else : the_archive_title(); ?>
			<?php endif; ?>
				
		</h1>
	</header>

	<div class="archive-content">