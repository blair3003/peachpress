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

			<div class="site-branding">
				<div class="site-logo">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/peach-icon.png' ?>">
				</div>
				<h1 class="site-title">PeachPress</h1>
			</div>

			<nav id="site-navigation" class="primary-navigation" role="navigation">
				<ul>
					<li>
						<a href="#">Hello</a>
					</li>
					<li>
						<a href="#">How are you?</a>
					</li>
					<li>
						<a href="#">Goodbye</a>
					</li>
				</ul>				
			</nav>

			<div class="site-buttons">
				<a href="#">Contact</a>
				<a href="#">Donate</a>		
			</div>

		</header>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">