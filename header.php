<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?> <?php wp_title(' - '); ?> <?php the_field('title_seo'); ?></title>
		<meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title(' - '); ?> <?php the_field('description_seo'); ?>">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title(' - '); ?> <?php the_field('title_seo'); ?>"/>
		<meta property="og:description" content="<?php bloginfo('name'); ?> <?php wp_title(' - '); ?> <?php the_field('description_seo'); ?>"/>
		<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

		<!-- Início WordPress Header -->
		<?php wp_head(); ?>
		<!-- Final WordPress Header -->

	</head>
	<body>

		<header class="header">
			<div class="menu-hamburguer">
				<a href="/home" class="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/pawheaven.png" alt="Paw Heaven">
				</a>
				<nav id="nav" class="header_menu">
				<button id="btn-mobile">
				<span id="hamburger"></span>
				</button>
				<?php
					$args = array(
						'menu' => 'principal',
						'theme_location' => 'menu-principal',
						'container' => false
					);
					wp_nav_menu( $args );
				?>
				</nav>
			</div>
		</header>