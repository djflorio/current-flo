<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Current_Flo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'current-flo' ); ?></a>
  <?php if ( is_front_page() && is_home() ) : ?>

  <header class="home-header" style="background-image:url('<?php echo get_header_image(); ?>');">
    <div class="home-header__branding">
      <h1 class="home-header__title"><?php bloginfo( 'name' ); ?></h1>
      <p class="home-header__description">
        <?php echo get_bloginfo( 'description', 'display' ); ?>
      </p>
    </div><!-- .site-branding -->
  </header>

  <?php else : ?>
				
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$current_flo_description = get_bloginfo( 'description', 'display' );
			if ( $current_flo_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $current_flo_description; /* WPCS: xss ok. */ ?></p>
	<?php endif; ?>
		

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'current-flo' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->


	<div id="content" class="site-content">
