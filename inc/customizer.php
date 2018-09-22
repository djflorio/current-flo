<?php
/**
 * Current Flo Theme Customizer
 *
 * @package Current_Flo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function current_flo_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'current_flo_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'current_flo_customize_partial_blogdescription',
		) );
  }
  
  $wp_customize->add_setting( 'primary_color', array (
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_setting( 'secondary_color', array (
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Primary color', 'current_flo' ),
  )));

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Secondary color', 'current_flo' ),
  )));
}
add_action( 'customize_register', 'current_flo_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function current_flo_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function current_flo_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function current_flo_customize_preview_js() {
	wp_enqueue_script( 'current-flo-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'current_flo_customize_preview_js' );

function current_flo_get_customizer_css() {
  ob_start();

  $primary_color = get_theme_mod( 'primary_color', '' );
  if ( ! empty( $primary_color ) ) {
    ?>
    .primary-color-background {
      background-color: <?php echo $primary_color; ?>;
    }
    <?php
  }

  $secondary_color = get_theme_mod( 'secondary_color', '' );
  if ( ! empty( $secondary_color ) ) {
    ?>
    .secondary-color-text {
      color: <?php echo $secondary_color; ?>;
    }
    <?php
  }

  $css = ob_get_clean();
  return $css;
}