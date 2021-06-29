<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PeachPress</title>
	<?php wp_head(); ?>
</head>
<body>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead" class="site-header" role="banner">

			<a class="site-branding" href="/">
				<img class="site-branding__logo" src="<?php echo get_template_directory_uri() . '/assets/images/peach-icon.png' ?>">
				<span class="site-branding__title"><?php echo get_bloginfo('name'); ?></span>
			</a>			

			<nav class="site-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>		
			</nav>

			<div class="site-buttons">
				<a class="btn btn--peach" href="#">Contact</a>
				<a class="btn btn--salmon" href="#">Donate</a>		
			</div>

		</header>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">