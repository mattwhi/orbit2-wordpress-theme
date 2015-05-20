<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _mbbasetheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<!--[if lt IE 9]>
	    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_mbbasetheme' ); ?></a>

	<header id="masthead" class="grid" role="banner">
		<nav id="site-navigation" class="main-navigation module col-1-3 no-btm-padding" role="navigation">
			<button class="menu-toggle"><?php _e( 'Menu', '_mbbasetheme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
		<div class="module col-1-3 align-center no-btm-padding">				
					<!--Site Logo -->
					<h1 class="site-title">
						<?php if ( function_exists( 'get_option_tree' ) ) : if ( get_option_tree( 'logo_upload' ) ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php get_option_tree( 'logo_upload', '', 'true' ); ?>" alt="<?php get_option_tree('logo_alt', '', 'true') ?>" 
								title="<?php get_option_tree('logo_title', '', 'true') ?>"/>
						</a> 
						<?php else : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						<?php endif; endif; ?>
					<!--End site logo -->
					</h1>
			</div>
		<div class="module col-1-3 no-btm-padding">			
			<ul class="social-header">
				<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a class="googleplus" href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
				<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a class="digg" href="#"><i class="fa fa-digg"></i></a></li>
				<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
			</ul>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content clear">
