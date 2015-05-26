<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _mbbasetheme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="container" role="contentinfo">
	<div class="row">
		<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
	  	<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
	  <!-- Optional: clear the XS cols if their content doesn't match in height -->
	  	<div class="clearfix visible-xs-block"></div>
	  	<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
	  	</div>
	  	<div class="row">
			<div class="site-info">
				<p class="copyright col-md-12">&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?></p>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lib/bootstrap-sprockets.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lib/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dynamic.css" />
</body>
</html>
