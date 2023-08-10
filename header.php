<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cloudsdale_Theme
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cloudsdale-master' ); ?></a>

	

	<header id="masthead" class="site-header">

			<div class="cm-nav shadow">
				<div class="container cm-nav-inner">
					<a class="menu-toggle " aria-controls="primary-menu" aria-expanded="false" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
					<div class="menu-icon shadow"></div></a>
					<a class="navbar-brand shadow" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/logos/vanguard-logo-text.svg" alt="Vanguard Logo" style>
					</a>
					<div class="social-icons">
						<a class="instagram-icon shadow" target="_blank" href=""></a>
						<a class="twitter-icon shadow"  target="_blank" href=""></a>
						<a class="facebook-icon shadow"  target="_blank" href=""></a>
					</div>
				</div>
			</div>


		<nav id="site-navigation" class="main-navigation">

			<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNav" aria-labelledby="offcanvasNavLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavLabel"><?php esc_html_e( 'Menu', 'cloudsdale-master' ); ?></h5>
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'      => false,
							'menu_class'     => 'navbar-nav',
						)
					);
					?>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
