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
        'id'          => 'homepage_settings',
        'title'       => __( 'Home Page Settings', 'theme-text-domain' )
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
        'id'          => 'background_color',
        'label'       => __( 'Background Color', 'theme-text-domain' ),
        'desc'        => 'Set your background',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'basic_options'
      ),
      array(
        'id'          => 'css',
        'label'       => 'Custom CSS',
        'desc'        => '',
        'std'         => '',
        'type'        => 'css',
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
        'id'          => 'my_slider',
        'label'       => 'Slider Settings',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'homepage_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array(),
        'settings'    => array(
          array(
            'id'      => 'slider_image',
            'label'   => 'Image',
            'desc'    => '',
            'std'     => '',
            'type'    => 'upload',
            'class'   => '',
            'choices' => array()
          ),
          array(
            'id'      => 'slider_link',
            'label'   => 'Link to Post',
            'desc'    => 'Enter the posts url.',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
          ),
          array(
            'id'      => 'slider_active',
            'label'   => 'Active Slide',
            'desc'    => 'Enter Active',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
          ),
          array(
            'id'      => 'slider_header',
            'label'   => 'Header',
            'desc'    => '',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
            ),
          array(
            'id'      => 'slider_description',
            'label'   => 'Description',
            'desc'    => 'This text is used to add fancy captions in the slider.',
            'std'     => '',
            'type'    => 'textarea',
            'class'   => '',
            'choices' => array()
            )
          )
      ),
        array(
        'id'          => '3_col',
        'label'       => '3 Column Options',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'homepage_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array(),
        'settings'    => array(
          array(
            'id'      => '3_col_image',
            'label'   => 'Image',
            'desc'    => '',
            'std'     => '',
            'type'    => 'upload',
            'class'   => '',
            'choices' => array()
          ),
          array(
            'id'      => '3_col_link',
            'label'   => 'Link to Post',
            'desc'    => 'Enter the posts url.',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
          ),
          array(
            'id'      => '3_col_button',
            'label'   => 'Button Text',
            'desc'    => 'Enter the button Text.',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
          ),
          array(
            'id'      => '3_col_header',
            'label'   => 'Header',
            'desc'    => '',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
            ),
          array(
            'id'      => '3_col_description',
            'label'   => 'Description',
            'desc'    => 'This text is used to add fancy captions in the slider.',
            'std'     => '',
            'type'    => 'textarea',
            'class'   => '',
            'choices' => array()
            )
          )
      ),
      array(
        'id'          => 'features',
        'label'       => 'Features',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'homepage_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array(),
        'settings'    => array(
          array(
            'id'      => 'feature_image',
            'label'   => 'Image',
            'desc'    => '',
            'std'     => '',
            'type'    => 'upload',
            'class'   => '',
            'choices' => array()
          ),
          array(
            'id'      => 'feature_header',
            'label'   => 'Heading',
            'desc'    => '',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
            ),
          array(
            'id'      => 'feature_sub_header',
            'label'   => 'Sub Heading',
            'desc'    => '',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
            ),
          array(
            'id'      => 'feature_description',
            'label'   => 'Description',
            'desc'    => 'This text is used to add fancy captions in the slider.',
            'std'     => '',
            'type'    => 'textarea',
            'class'   => '',
            'choices' => array()
            )
          )
      ),
      array(
        'id'          => 'social_icons',
        'label'       => 'Social Icons',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'social_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array(),
        'settings'    => array(
          array(
            'id'      => 'social_class',
            'label'   => 'Name',
            'desc'    => '',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
          ),
          array(
            'id'      => 'socialUrl',
            'label'   => 'Social Url',
            'desc'    => '',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
          ),
          array(
            'id'      => 'socialFontAwesome',
            'label'   => 'Social Icon',
            'desc'    => '',
            'std'     => '',
            'type'    => 'select',
            'class'   => '',
            'choices' => array(
              array(
                'value' => '', 
                'label' => 'Select an Icon'
                ),
              array(
                'value' => 'fa fa-twitter', 
                'label' => 'Twitter'
                ),
              array(
                'value' => 'fa fa-facebook', 
                'label' => 'Facebook'
                ),
              array(
                'value' => 'fa fa-google-plus', 
                'label' => 'Google Plus'
                ),
              array(
                'value' => 'fa tumblr', 
                'label' => 'Tumblr'
                ),
              array(
                'value' => 'fa fa-stumbleupon', 
                'label' => 'Stumbleupon'
                ),
              array(
                'value' => 'fa fa-rss', 
                'label' => 'RSS'
                )
              )
            ),
          )
        )
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