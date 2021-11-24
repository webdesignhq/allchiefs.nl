<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Webdesignhq
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>	
	<div class="se-pre-con" style="display: none;"></div>
</head>

<body>
	<header class="header">
			<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-2 col-6 text-center">
					<div class="custom_logo">
						<?php 
							if ( function_exists( 'the_custom_logo' ) ) {
								 the_custom_logo();
								}
							?>
					</div> 
				</div>
				<div class="col-lg-10 col-6 text-right pe-5" id="menu">
					<!-- <button class="menu-toggle btn"><i class="fas fa-bars"></i></button> -->
					<div id="nav-icon1" class="menu-toggle-btn">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<nav id="site-navigation" class="main-navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav>
				</div>
				
			</div>
			</div>
			<div class="mobile__menu--container d-lg-none d-block">
				<div class="relative">
					<nav id="mobile-site-navigation" class="main-navigation absolute d-block d-lg-none">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav>
				</div>
			</div>
			<div class="mobile__menu--container--before d-lg-none d-block">
			</div>		
	</header>
	
	<?php if(!is_page(5) && !is_single()) { ?>
		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
		<div id="bannerindex" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: 100% 30%;">
		<div class="header__overlay"></div>
		<div class="container-xxl">
			<div class="product__container col-12 d-lg-flex d-block flex-row">
				<div class="d-flex flex-column">
					<div class="bannerindexcontent text-left p-4">
						<h1 class="mb-3"><?php echo get_the_title(); ?></h1>
						<span><?php echo the_excerpt(); ?></span>
						<p><?php the_breadcrumb(); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>

	<?php if(is_single()) { ?>
		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
		<div id="bannerindex" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: 100% 30%;">
		<div class="header__overlay"></div>

		<div class="container-xxl" id="single__header">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
	
				/*
				* Include the post format-specific template for the content. If you want to
				* use this in a child theme, then include a file called called content-___.php
				* (where ___ is the post format) and that will be used instead.
				*/
				get_template_part( 'content', get_post_format() );

				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav nav-next-span" aria-hidden="true"><i class="fa fa-chevron-right"></i></span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'hqonline' ) . '</span> ' .
						'<span class="post-title next-title">%title</span>',
					'prev_text' => '<span class="meta-nav nav-prev" aria-hidden="true"><i class="fa fa-chevron-left"></i></span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'hqonline' ) . '</span> ' .
						'<span class="post-title prev-title">%title</span>',
				) );
	
			// End the loop.
			endwhile;
			?>

			<div class="product__container col-12 d-lg-flex d-block flex-row">
				<div class="d-flex flex-column">
					<div class="bannerindexcontent text-left">
						<div class="container-lg">
							<h1 class="mb-3"><?php echo get_the_title(); ?></h1>
							<p><?php the_breadcrumb(); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>




