<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package puzzle-agency
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

<body id="page-top" <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- Start: Preloader -->
    <section id="preloader-section">
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">

                    <!-- Spinner -->
                    <div class="spinner">
                        <img width="100%" src="/wp-content/uploads/2021/02/logo-kodred.png" alt="">
                    </div>

                    <!-- Start: Text Loading -->
                    <div class="txt-loading">
                        <span data-text-preloader="P" class="letters-loading">P</span>
                        <span data-text-preloader="U" class="letters-loading">U</span>
                        <span data-text-preloader="Z" class="letters-loading">Z</span>
                        <span data-text-preloader="Z" class="letters-loading">Z</span>
                        <span data-text-preloader="L" class="letters-loading">L</span>
                        <span data-text-preloader="E" class="letters-loading">E</span>

                    </div>
                    <!-- End: Text Loading -->

                </div>

                <!-- Start: Preloader sides - Model 1 -->
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
                <!-- End: Preloader sides - Model 1 -->

            </div>
        </div>
    </section>
	<div id="page" class="site">
		
		<a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e( 'Skip to content', 'puzzle-agency' ); ?></a>
			<main>
<!-- #header-start -->

		<header>
			<div class="header transparent-header">
				<div class="header-container">
					<div class="left-side-block">
						<a style="<?php echo esc_url( home_url( '/' ) ); ?>"
							href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo-wrapper">
							
							<?php if( get_field('logo_additional', 'option') ): ?>
						

							<img alt="<?php echo (bloginfo( 'name' ).' - '.get_bloginfo( 'description', 'display' )) ?>" src="<?= get_field('logo_additional', 'option'); ?>" 
							class="header-logo">

							<?php endif; ?>

						</a>
					</div>
					<div class="center-side-block">
						<?php wp_nav_menu([
                        'theme_location' => 'main-menu',
                        'container' => 'false',
                        'menu_class'      => 'main-menu',  
                        'walker'=> new Main_Nav_Menu()
                    ]); ?>


						<div class="close-button-mobile-menu">
							<span class="left-side-close-button"></span>
							<span class="right-side-close-button"></span>
						</div>
						<div class="prev-button-mobile-menu">
							<span class="left-side-prev-button"></span>
							<span class="right-side-prev-button"></span>
						</div>
					</div>
					<div class="right-side-block">
						<div class="right-side-block-wrapper">
							<div class="icon-phone-wrapper">
								<a href="tel:+375(29)-845-45-99" class="icon-phone"></a>
							</div>
							<div class="phone-number">
								<a href="tel:+375(29)-845-45-99">+375 (29) 845-45-99</a>
							</div>
							<div class="icon-menu-wrapper">
								<i class="icon-menu"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
<!-- #header-end -->