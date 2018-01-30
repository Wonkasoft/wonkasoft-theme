<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WonkasoftTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wonkasoft-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="row">
			<div class="site-branding col-3">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<div class="col-6 social-icons">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-twitter"></i>
				<i class="fa fa-instagram"></i>
				<i class="fa fa-yelp"></i>
				<i class="fa fa-git"></i>
				<i class="fa fa-wordpress"></i>
			</div> <!-- /social-icons -->

			<div class="col-sm contact-info">
				<div class="col-sm col-12 contact-message">
					Questions? Contact Support:
				</div> <!-- /contact-message -->
				<div class="col-sm col-12 contact-links">
					<i class="fa fa-commenting">Support Chat</i> <i class="fa fa-phone">951-201-6639</i>
				</div> <!-- /contact-links -->
			</div> <!-- /contact-info -->
		</div> <!-- /row -->
		<div class="row">
			<nav id="site-navigation" class="col-sm-9 main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'wonkasoft-theme' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
			<div class="col-sm-3 account-links">
				<a href="#" class="btn btn-light">Login</a>
				<a href="#" class="btn btn-light">Sign-Up</a>
				<?php get_search_form(); ?>
			</div> <!-- /account-links -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">