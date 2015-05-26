<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Orbit2Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<?php get_template_part( 'custom', 'styles' ); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'Orbit2Theme' ); ?></a>
<header id="masthead" role="banner">
	<div class="navbar navbar navbar-static-top">
	<div class="container">
	<div class="social-header navbar-text">			
<ul class="social-header">
<?php
if ( function_exists( 'ot_get_option' ) ) {
$socialIcons = ot_get_option( 'social_icons', array() );
if ( ! empty( $socialIcons ) ) {
foreach( $socialIcons as $socialIcon ) {
echo '<li><a class="' . $socialIcon['socialClass'] . '" href="' . $socialIcon['socialUrl'] . '"><i class="' . $socialIcon['socialFontAwesome'] . '"></i></a></li>';
		}
	}
}
?>
</ul>
</div>
<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>	
</button>
		<div class="collapse navbar-collapse navHeaderCollapse">
			<?php
		        wp_nav_menu( array(
		            'menu'              => 'primary',
		            'theme_location'    => 'primary',
		            'depth'             => 2,
		            'menu_class'        => 'nav navbar-nav navbar-right',
		            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		            'walker'            => new wp_bootstrap_navwalker())
		        );
			?>
		</div>
	</div>
</div>		
</header><!-- #masthead -->
	<div id="content">