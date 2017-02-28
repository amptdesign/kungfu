<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
		<div class="homepage-intro-header">Learn the Ancient Art of Shih Shui Kung Fu</div>
			<div class="homepage-intro-text-wrapper">
			<div class="homepage-intro-text">A scientific system of excercise that increases sexual function, improves overall health and promotes longevity.</div>
		</div> 
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
		<div class="navigation-top">
			<div class="wrap">
				<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Top Menu">
					<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><svg class="icon icon-bars" aria-hidden="true" role="img"> <use href="#icon-bars" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-bars"></use> </svg><svg class="icon icon-close" aria-hidden="true" role="img"> <use href="#icon-close" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-close"></use> </svg>Menu</button>
					<div class="menu-main-menu-container"><ul id="top-menu" class="menu">
					<li id="menu-item-137" class="menu-item _menuScrollDown"><a href="http://localhost:20469/#home">What is Shih-Shui?</a></li>
					<li id="menu-item-129" class="menu-item _menuScrollDown"><a href="http://localhost:20469/#health-benefits">Health Benefits</a></li>
					<li id="menu-item-130" class="menu-item _menuScrollDown"><a href="http://localhost:20469/#meet-shifu-baron">Meet Shifu Baron</a></li>
					<li id="menu-item-131" class="menu-item _menuScrollDown"><a href="http://localhost:20469/#look-inside-the-temple">View the Temple</a></li>
					<li id="menu-item-132" class="menu-item _menuScrollDown"><a href="http://localhost:20469/#faq">F.A.Q.</a></li>
					<li id="menu-item-133" class="menu-item _menuScrollDown"><a href="http://localhost:20469/#contact-us">Contact</a></li>
					</ul></div>
					<a href="#content" class="menu-scroll-down"><svg class="icon icon-arrow-right" aria-hidden="true" role="img"> <use href="#icon-arrow-right" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-right"></use> </svg><span class="screen-reader-text">Scroll down to content</span></a>
				</nav><!-- #site-navigation -->
			</div><!-- .wrap -->
		</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php
	// If a regular post or page, and not the front page, show the featured image.
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
		echo '<div class="single-featured-image-header">';
		the_post_thumbnail( 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
