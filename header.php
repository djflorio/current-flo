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

  <header class="home-header primary-color-background">
    <svg class="home-header__graphic" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="0 0 800 700" width="800" height="700"><defs><path d="M400 265.18L315.18 307.59L315.18 392.41L400 434.82L484.82 392.41L484.82 307.59L400 265.18Z" id="b2J74RvbUn"></path><path d="M484.82 392.07L400 434.49L400 519.31L484.82 561.72L569.64 519.31L569.64 434.49L484.82 392.07Z" id="i3u9PnJgN"></path><path d="M315.18 392.07L230.36 434.49L230.36 519.31L315.18 561.72L400 519.31L400 434.49L315.18 392.07Z" id="g277YFBI4T"></path><path d="M654.47 138.28L569.64 180.69L569.64 265.51L654.47 307.93L739.29 265.51L739.29 180.69L654.47 138.28Z" id="b1P3AnTuob"></path><path d="M569.64 265.18L484.82 307.59L484.82 392.41L569.64 434.82L654.47 392.41L654.47 307.59L569.64 265.18Z" id="b61cw35zuD"></path><path d="M145.53 138.28L60.71 180.69L60.71 265.51L145.53 307.93L230.36 265.51L230.36 180.69L145.53 138.28Z" id="d1yEhA8XjH"></path><path d="M230.36 265.18L145.53 307.59L145.53 392.41L230.36 434.82L315.18 392.41L315.18 307.59L230.36 265.18Z" id="cpkFUcOm"></path><path d="M400 11.39L315.18 53.8L315.18 138.62L400 181.03L484.82 138.62L484.82 53.8L400 11.39Z" id="b3nZ6cKlA"></path><path d="M484.82 138.28L400 180.69L400 265.51L484.82 307.93L569.64 265.51L569.64 180.69L484.82 138.28Z" id="e1EW4WSVnd"></path><path d="M315.18 138.28L230.36 180.69L230.36 265.51L315.18 307.93L400 265.51L400 180.69L315.18 138.28Z" id="a3ojUZFlM"></path><path d="M654.47 392.07L569.64 434.49L569.64 519.31L654.47 561.72L739.29 519.31L739.29 434.49L654.47 392.07Z" id="a1qwNMm2yF"></path><path d="M400 518.97L315.18 561.38L315.18 646.2L400 688.61L484.82 646.2L484.82 561.38L400 518.97Z" id="f4lUwlTfMj"></path><path d="M145.53 392.07L60.71 434.49L60.71 519.31L145.53 561.72L230.36 519.31L230.36 434.49L145.53 392.07Z" id="apkNEhiKJ"></path></defs><g><g><g><use xlink:href="#b2J74RvbUn" opacity="1" fill="#414141" fill-opacity="1"></use></g><g><use xlink:href="#i3u9PnJgN" opacity="1" fill="#6f6f6f" fill-opacity="1"></use></g><g><use xlink:href="#g277YFBI4T" opacity="1" fill="#8d8d8d" fill-opacity="1"></use></g><g><use xlink:href="#b1P3AnTuob" opacity="1" fill="#414141" fill-opacity="1"></use></g><g><use xlink:href="#b61cw35zuD" opacity="1" fill="#8d8d8d" fill-opacity="1"></use></g><g><use xlink:href="#d1yEhA8XjH" opacity="1" fill="#414141" fill-opacity="1"></use></g><g><use xlink:href="#cpkFUcOm" opacity="1" fill="#6f6f6f" fill-opacity="1"></use></g><g><use xlink:href="#b3nZ6cKlA" opacity="1" fill="#414141" fill-opacity="1"></use></g><g><use xlink:href="#e1EW4WSVnd" opacity="1" fill="#6f6f6f" fill-opacity="1"></use></g><g><use xlink:href="#a3ojUZFlM" opacity="1" fill="#8d8d8d" fill-opacity="1"></use></g><g><use xlink:href="#a1qwNMm2yF" opacity="1" fill="#414141" fill-opacity="1"></use></g><g><use xlink:href="#f4lUwlTfMj" opacity="1" fill="#414141" fill-opacity="1"></use></g><g><use xlink:href="#apkNEhiKJ" opacity="1" fill="#414141" fill-opacity="1"></use></g><g id="e4jffsUp9K"></g></g></g></svg>
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
