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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<nav id="site-navigation" class="main-navigation">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav><!-- #site-navigation -->
	
  <?php if ( is_front_page() && is_home() ) : ?>

  <header class="home-header primary-color-background">
    <svg class="home-header__graphic" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 348.62 402.67"><defs><style>.cls-1{fill:#4d4d4d;}.cls-2{fill:#666;}.cls-3{fill:#999;}</style></defs><title>Asset 5</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="217.88 75.48 217.88 25.16 174.31 0 130.73 25.16 130.73 75.48 174.31 100.64 217.88 75.48"/><polygon class="cls-2" points="261.46 151.01 261.46 100.7 217.88 75.54 174.31 100.7 174.31 151.01 217.88 176.17 261.46 151.01"/><polygon class="cls-3" points="174.31 151.01 174.31 100.7 130.73 75.54 87.15 100.7 87.15 151.01 130.73 176.17 174.31 151.01"/><polygon class="cls-1" points="348.62 151.01 348.62 100.7 305.04 75.54 261.46 100.7 261.46 151.01 305.04 176.17 348.62 151.01"/><polygon class="cls-3" points="305.04 226.5 305.04 176.18 261.46 151.02 217.88 176.18 217.88 226.5 261.46 251.65 305.04 226.5"/><polygon class="cls-1" points="217.88 226.5 217.88 176.18 174.31 151.02 130.73 176.18 130.73 226.5 174.31 251.65 217.88 226.5"/><polygon class="cls-2" points="261.46 302 261.46 251.69 217.88 226.53 174.31 251.69 174.31 302 217.88 327.16 261.46 302"/><polygon class="cls-3" points="174.31 302 174.31 251.69 130.73 226.53 87.15 251.69 87.15 302 130.73 327.16 174.31 302"/><polygon class="cls-1" points="87.15 151.01 87.15 100.7 43.58 75.54 0 100.7 0 151.01 43.58 176.17 87.15 151.01"/><polygon class="cls-2" points="130.73 226.5 130.73 176.18 87.15 151.02 43.58 176.18 43.58 226.5 87.15 251.65 130.73 226.5"/><polygon class="cls-1" points="348.62 302 348.62 251.69 305.04 226.53 261.46 251.69 261.46 302 305.04 327.16 348.62 302"/><polygon class="cls-1" points="87.15 302 87.15 251.69 43.58 226.53 0 251.69 0 302 43.58 327.16 87.15 302"/><polygon class="cls-1" points="217.88 377.51 217.88 327.19 174.31 302.04 130.73 327.19 130.73 377.51 174.31 402.67 217.88 377.51"/></g></g></svg>
    <div class="home-header__branding">
			<h1 class="home-header__title"><?php bloginfo( 'name' ); ?></h1>
			<p class="home-header__description secondary-color-text">
        <?php echo get_bloginfo( 'description', 'display' ); ?>
      </p>
    </div><!-- .site-branding -->
  </header>

  <?php else : ?>
				
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			
	<?php endif; ?>
	
	<div id="content" class="site-content">
