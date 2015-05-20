<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Options', 'theme-text-domain' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'theme-text-domain' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'theme-text-domain' ) . '</p>'
    ),
    'sections'        => array( 
      array(
        'id'          => 'basic_options',
        'title'       => __( 'Basic Options', 'theme-text-domain' )
      ),
      array(
        'id'          => 'typography',
        'title'       => __( 'Typography', 'theme-text-domain' )
      ),
      array(
        'id'          => 'home_page',
        'title'       => __( 'Home Page', 'theme-text-domain' )
      ),
      array(
        'id'          => 'social_settings',
        'title'       => __( 'Social Settings', 'theme-text-domain' )
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'logo_upload',
        'label'       => __( 'Logo Upload', 'theme-text-domain' ),
        'desc'        => 'Upload your Site Logo',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'basic_options'
      ),
      array(
        'id'          => 'logo_title',
        'label'       => __( 'Logo Title', 'theme-text-domain' ),
        'desc'        => 'Set your logo title',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'basic_options'
      ),
      array(
        'id'          => 'logo_alt',
        'label'       => __( 'Logo Alt', 'theme-text-domain' ),
        'desc'        => 'Set your logo Alt Text',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'basic_options'
      ),
      array(
        'id'          => 'google_fonts',
        'label'       => __( 'Google Fonts', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => array( 
          array(
            'family'    => 'opensans',
            'variants'  => array( '300', '300italic', 'regular', 'italic', '600', '600italic' ),
            'subsets'   => array( 'latin' )
          )
        ),
        'type'        => 'google-fonts',
        'section'     => 'typography'
      ),
      array(
        'id'          => 'hero_background',
        'label'       => __( 'Hero Background', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'background',
        'section'     => 'home_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'hero_title',
        'label'       => __( 'Hero Title', 'theme-text-domain' ),
        'desc'        => 'Set your hero title',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'home_page'
      ),
      array(
        'id'          => 'facebook',
        'label'       => __( 'Facebook', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_settings'
      ),
      array(
        'id'          => 'twitter',
        'label'       => __( 'Twitter', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_settings'
      ),
      array(
        'id'          => 'google_plus',
        'label'       => __( 'Google+', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_settings'
      ),
      array(
        'id'          => 'tumblr',
        'label'       => __( 'Tumblr', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_settings'
      ),
      array(
        'id'          => 'linkedin',
        'label'       => __( 'LinkedIn', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_settings'
      ),
      array(
        'id'          => 'rss',
        'label'       => __( 'RSS', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_settings'
      ),
      array(
        'id'          => 'digg',
        'label'       => __( 'Digg', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_settings'
      ),
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}