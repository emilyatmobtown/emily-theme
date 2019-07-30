<?php
/**
 * The template for displaying the header.
 *
 * @package EmilyTheme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="theme-color" content="#d23226" />
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Comfortaa|Concert+One|Lobster|Merriweather|Montserrat|Righteous&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/9be3d3e084.js"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<div class="site-background"></div>
		<header id="header-main" class="header-main" role="banner">
			<div class="site-wrapper">
				<h1 class="offscreen"><?php bloginfo( 'name' ); ?></h1>
			</div>
		</header>
		<main id="main" class="site-main" role="main">
			<div class="site-wrapper">
