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
  <?php if ( is_front_page() && is_home() ) : ?>

  <header class="home-header">
    <div class="home-header__branding">
			<h1 class="home-header__title"><?php bloginfo( 'name' ); ?></h1>
			<p class="home-header__description">
        <?php echo get_bloginfo( 'description', 'display' ); ?>
      </p>
			<ul class="home-header__cogs">
				<li class="home-header__cog">
					<i class="home-header__cog--right fas fa-cog"></i>
				</li>
				<li class="home-header__cog">
					<i class="home-header__cog--left fas fa-cog"></i>
				</li>
				<li class="home-header__cog">
					<i class="home-header__cog--right fas fa-cog"></i>
				</li>
			</ul>
    </div><!-- .site-branding -->
  </header>

  <?php else : ?>
				
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			
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
