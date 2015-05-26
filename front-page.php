<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package _orbit2
 */

get_header(); ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

	<?php
  if ( function_exists( 'ot_get_option' ) ) {
  
  /* get the slider array */
  $slides = ot_get_option( 'my_slider', array() );
  
  if ( ! empty( $slides ) ) {
    foreach( $slides as $slide ) {
      echo '  <div class="item ' . $slide['slider_active'] . '">
      			<a href="' . $slide['slider_link'] . '">
      			<img src="' . $slide['slider_image'] . '" alt="' . $slide['title'] . '" />
      				<div class="carousel-caption">
      					<h3>' . $slide['slider_header'] . '</h3>
      					<p>' . $slide['slider_description'] . '</p>
      			</div>
      			</a>
      		</div>';
 		 		}
			}
		}
      ?>
</div>
    		
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
	<div id="content" class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
      <?php
  if ( function_exists( 'ot_get_option' ) ) {
  $threecols = ot_get_option( '3_col', array() );
  if ( ! empty( $threecols ) ) {
    foreach( $threecols as $threecol ) {
      echo '<div class="col-lg-4">
      		<img class="img-circle" src="' . $threecol['3_col_image'] . '" alt="' . $threecol['3_col_title'] . '" width="140" height="140">
      			<h2>' . $threecol['3_col_header'] . '</h2>
          <p>' . $threecol['3_col_description'] . '</p>
          <p><a class="btn btn-default" href="' . $threecol['3_col_link'] . '" role="button">' . $threecol['3_col_button'] . ' »</a></p>
        </div>';
 		 		}
			}
		}
      ?>
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
<?php
  if ( function_exists( 'ot_get_option' ) ) {
  $features = ot_get_option( 'features', array() );
  if ( ! empty( $features ) ) {
    foreach( $features as $feature ) {
      echo '
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">' . $feature['feature_header'] . '<span class="text-muted">&#160;' . $feature['feature_sub_header'] . '</span></h2>
          <p class="lead">' . $feature['feature_description'] . '</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="' . $feature['feature_image'] . '" data-holder-rendered="true">
        </div>
      </div>

      <hr class="featurette-divider">';
 		 		}
			}
		}
      ?>

<?php get_footer(); ?>
