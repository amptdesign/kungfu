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

<body <?php body_class(); ?>  data-scrolleffect="linear" data-scrollspeed="650">
<div id="page" class="site">
		<div class="homepage-intro-header">Learn the Ancient Art of Shih Shui Kung Fu</div>
			<div class="homepage-intro-text-wrapper">
			<div class="homepage-intro-text">A scientific system of excercise that increases sexual function, improves overall health and promotes longevity.</div>
		</div> 
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

	<div class="custom-header">

	<div class="custom-header-media">
		<div id="wp-custom-header" class="wp-custom-header"><img src="/wp-content/uploads/2017/02/cropped-red-fire-god-p1.jpg" width="2000" height="1200" alt="Shih Shui Kung Fu" srcset="/wp-content/uploads/2017/02/cropped-red-fire-god-p1.jpg 2000w, /wp-content/uploads/2017/02/cropped-red-fire-god-p1-300x180.jpg 300w, /wp-content/uploads/2017/02/cropped-red-fire-god-p1-768x461.jpg 768w, /wp-content/uploads/2017/02/cropped-red-fire-god-p1-1024x614.jpg 1024w" sizes="100vw">
		</div>	
	</div>

		<div class="site-branding">
			<div class="wrap">
				<div class="site-branding-text">
					<h1 class="site-title"><a href="#home" rel="home">Shih Shui Kung Fu</a></h1>
					<p class="site-description">YOUR PATH TO LONGEVITY</p>
				</div><!-- .site-branding-text -->
			</div><!-- .wrap -->
		</div><!-- .site-branding -->
	</div><!-- .custom-header -->

		<div class="navigation-top">
			<div class="wrap">
				<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Top Menu">
					<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><svg class="icon icon-bars" aria-hidden="true" role="img"> <use href="#icon-bars" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-bars"></use> </svg><svg class="icon icon-close" aria-hidden="true" role="img"> <use href="#icon-close" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-close"></use> </svg>Menu</button>
					<div class="menu-main-menu-container"><ul id="top-menu" class="menu">
					<li id="menu-item-999" class="menu-item"><a href="/#home"><img src="/wp-content/themes/twentyseventeen/genital-weightlifting.jpg" class="main-logo"></a></li>
					<li id="menu-item-137" class="menu-item _menuScrollDown menu-item-has-children"><a href="/#home">What is Shih Shui?<svg class="icon icon-angle-down" aria-hidden="true" role="img"> <use href="#icon-angle-down" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-angle-down"></use> </svg></a><button class="dropdown-toggle" aria-expanded="false"><svg class="icon icon-angle-down" aria-hidden="true" role="img"> <use href="#icon-angle-down" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-angle-down"></use> </svg>
					<span class="svg-fallback icon-angle-down"></span><span class="screen-reader-text">Expand child menu</span></button></a>
						<ul class="sub-menu">
							<li id="menu-item-129" class="menu-item _menuScrollDown"><a href="/#health-benefits">Health Benefits</a></li>
							<li id="menu-item-132" class="menu-item _menuScrollDown"><a href="/#faq">F.A.Q.</a></li>
						</ul>
					</li>
					<li id="menu-item-998" class="menu-item _menuScrollDown menu-item-has-children"><a href="/#lesson-plan">Lesson Plan<svg class="icon icon-angle-down" aria-hidden="true" role="img"> <use href="#icon-angle-down" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-angle-down"></use> </svg></a><button class="dropdown-toggle" aria-expanded="false"><svg class="icon icon-angle-down" aria-hidden="true" role="img"> <use href="#icon-angle-down" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-angle-down"></use> </svg>
					<span class="svg-fallback icon-angle-down"></span><span class="screen-reader-text">Expand child menu</span></button></a>
						<ul class="sub-menu">
							<li id="menu-item-998" class="menu-item _menuScrollDown"><a href="/#lesson-plan">View Bone Marrow Washing Lesson Plan</a></li>
							<li id="menu-item-130" class="menu-item _menuScrollDown"><a href="/#meet-shifu-baron">Learn about the Instructor</a></li>
							<li id="menu-item-131" class="menu-item _menuScrollDown"><a href="/#look-inside-the-temple">View the Temple</a></li>
						</ul>
					</li>

					
					<li id="menu-item-133" class="menu-item _menuScrollDown"><a href="/#contact-us">Contact Us</a></li>
					<li id="menu-item-997" class="menu-item _menuScrollDown"><a href="/#colophon">Directions &amp; Hours</a></li>
					</ul></div>
					<!-- <a href="/#home" class="menu-scroll-down"><svg class="icon icon-arrow-right" aria-hidden="true" role="img"> <use href="#icon-arrow-right" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-right"></use> </svg><span class="screen-reader-text">Scroll down to content</span></a> -->
				</nav><!-- #site-navigation -->
			</div><!-- .wrap -->
		</div><!-- .navigation-top -->

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
