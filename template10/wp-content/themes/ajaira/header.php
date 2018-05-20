<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ajaira
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ajaira' ); ?></a>

		<?php if ( get_header_image() ) : ?>

		<header id="masthead" class="site-header" style="background-image: url(<?php header_image(); ?>);background-repeat: no-repeat;background-size: cover;" role="banner">

		<?php else: // End header image check. ?>

		<header id="masthead" class="site-header" role="banner">

		<?php endif; ?>
		<div class="container">
			<div class="site-branding  row text-center">
				
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<!--ADSENSE-->
				<?php
				endif; ?>


				<?php
					$hideSocialMenu = get_theme_mod( 'hide_social_menu', '1');
					$hideSearchBar = get_theme_mod( 'hide_search_bar', '1');
					$facebookURL = get_theme_mod('ajaira_theme_options_facebookurl', '#');
					$twitterURL = get_theme_mod('ajaira_theme_options_twitterurl', '#');
					$googleplusURL = get_theme_mod('ajaira_theme_options_googleplusurl', '#');
					$linkedinURL = get_theme_mod('ajaira_theme_options_linkedinurl', '#');
					$instagramURL = get_theme_mod('ajaira_theme_options_instagramurl', '#');
					$youtubeURL = get_theme_mod('ajaira_theme_options_youtubeurl', '#');
					$pinterestURL = get_theme_mod('ajaira_theme_options_pinteresturl', '#');
					$tumblrURL = get_theme_mod('ajaira_theme_options_tumblrurl', '#');
					$githubURL = get_theme_mod('ajaira_theme_options_githuburl', '');
					$emailURL = get_theme_mod('ajaira_theme_options_emailurl', '#');
				?>
		



			</div><!-- .site-branding -->
		</div>

		<div class="menu-wrapper">
			<div class="container test-menu">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="menu">
						<?php wp_nav_menu( array( 
						'theme_location' => 'primary',
						'container'  => 'ul',
						'menu_id' => 'primary-menu',
						'menu_class' => 'nav-menu'
						 ) ); ?>
					</div>
				</nav><!-- #site-navigation -->
				<div class="menu-mobile"></div> <!--  .mobile menu -->


			</div> <!--  .container -->
		</div><!--  .menu-wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
