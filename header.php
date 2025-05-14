<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nits
 */

use Detection\Exception\MobileDetectException;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


	<?php wp_head();

	global $mobileDetect;
	// try {
	// 	if ($mobileDetect->isMobile()) {
	// 		echo 'Mobile Device';
	// 	} else {
	// 		echo 'Not a Mobile Device';
	// 	}
	// } catch (MobileDetectException $e) {
	// 	echo 'Error: ' . $e->getMessage();
	// }
	// 
	?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'nits'); ?></a>
		<header id="masthead" class="site-header fixed inset-x-0 text-white z-6 bg-nitsPrimary lg:z-5" data-aos="fade-down" data-aos-duration="500">
			<div class="main-width flex items-center justify-between 2xl:py-[20px] 3xl:py-[44px] lg:py-6 py-5">
				<div class="site-branding z-[1] relative">
					<a href="<?= esc_url(home_url('/')); ?>" rel="home">
						<svg width="126" height="35" viewBox="0 0 126 35" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.79376 0.418266H0.699554C0.313201 0.418266 0 0.731467 0 1.11782V10.212C0 10.5984 0.313201 10.9116 0.699554 10.9116H9.79376C10.1801 10.9116 10.4933 10.5984 10.4933 10.212V1.11782C10.4933 0.731467 10.1801 0.418266 9.79376 0.418266Z" fill="#2387FF" />
							<path d="M125.53 27.6091H119.429C119.169 27.6091 118.959 27.8196 118.959 28.0793V34.1804C118.959 34.44 119.169 34.6505 119.429 34.6505H125.53C125.789 34.6505 126 34.44 126 34.1804V28.0793C126 27.8196 125.789 27.6091 125.53 27.6091Z" fill="#2387FF" />
							<path d="M23.3605 0.326523H22.271C22.0646 0.326523 21.8697 0.4068 21.732 0.555885L0.229362 22.9531C0.0802767 23.1022 0 23.2971 0 23.5035V33.8822C0 34.3065 0.344043 34.6505 0.768363 34.6505H9.72495C10.1493 34.6505 10.4933 34.3065 10.4933 33.8822V17.3681C10.4933 16.7947 10.7112 16.2442 11.1011 15.8314L13.8879 12.8153C14.3122 12.3566 14.9085 12.0928 15.5393 12.0928L21.1701 12.0699C21.5944 12.0699 21.9385 12.4139 21.9385 12.8382V33.8936C21.9385 34.318 22.2825 34.662 22.7068 34.662H31.6978C32.1221 34.662 32.4662 34.318 32.4662 33.8936V9.44366C32.4662 4.40917 28.3835 0.326523 23.349 0.326523H23.3605Z" fill="#F5F5F5" />
							<path d="M50.6775 0.418266H41.7209C41.2966 0.418266 40.9526 0.762309 40.9526 1.18663V33.9051C40.9526 34.3294 41.2966 34.6735 41.7209 34.6735H50.6775C51.1018 34.6735 51.4459 34.3294 51.4459 33.9051V1.18663C51.4459 0.762309 51.1018 0.418266 50.6775 0.418266Z" fill="#F5F5F5" />
							<path d="M80.8845 25.6481H78.178C76.8707 25.6481 75.9417 25.3843 75.3913 24.8568C74.8408 24.3178 74.5656 23.3889 74.5656 22.0356V9.87945C74.5656 9.54688 74.8408 9.27164 75.1734 9.27164H80.8272C81.1597 9.27164 81.435 8.99641 81.435 8.66383V1.03755C81.435 0.704971 81.1597 0.429737 80.8272 0.429737H65.3911C65.2305 0.429737 65.07 0.498546 64.9553 0.613227L57.5928 8.22804C57.2029 8.61796 57.4781 9.27164 58.0286 9.27164H63.453C63.7856 9.27164 64.0608 9.54688 64.0608 9.87945V21.8521C64.0608 26.4394 65.1732 29.7193 67.4095 31.7032C69.6458 33.6872 72.7536 34.6735 76.7675 34.6735H80.8845C81.2171 34.6735 81.4923 34.3982 81.4923 34.0657V26.2674C81.4923 25.9348 81.2171 25.6596 80.8845 25.6596V25.6481Z" fill="#F5F5F5" />
							<path d="M103.282 14.1456L100.461 13.813C97.0316 13.4804 96.3549 12.1272 96.3549 10.5217C96.3549 8.91613 97.3641 7.82666 99.6463 7.82666H102.41C104.738 7.82666 105.816 8.81292 106.172 10.4643C106.172 10.4987 106.172 10.5331 106.172 10.579V11.1753C106.172 11.4506 106.39 11.6685 106.665 11.6685H114.234C114.509 11.6685 114.727 11.4506 114.727 11.1753V10.5217C114.727 4.13393 110.289 0.429737 103.419 0.429737H99.3825C92.3182 0.429737 87.6736 3.3197 87.6736 10.7969C87.6736 16.6456 90.3686 20.0172 99.6463 21.0264L102.467 21.2902C106.103 21.6916 106.768 22.7696 106.768 24.4554C106.768 26.1412 105.828 27.2766 102.8 27.2766H100.449C98.1325 27.2766 96.9169 26.6917 96.3664 24.9256C96.3549 24.8797 96.3435 24.8224 96.3435 24.7765V24.4669C96.3435 24.1916 96.1256 23.9737 95.8504 23.9737H88.1438C87.8686 23.9737 87.6507 24.1916 87.6507 24.4669V25.327C87.6507 31.5886 91.9512 34.6849 99.8298 34.6849H102.789C111.332 34.6849 115.438 31.5886 115.438 24.1916C115.438 17.3337 112.273 15.1089 103.259 14.1685L103.282 14.1456Z" fill="#F5F5F5" />
						</svg>
					</a>
				</div>
				<nav id="site-navigation" class="main-navigation md:ml-auto lg:mr-12 xl:mr-14 overflow-hidden">
					<button class="menu-toggle lg:hidden w-6 h-6" aria-controls="primary-menu" aria-expanded="false">
						<span class="menu-toggle-open">
							<svg class="stroke-white" width="21" height="10" viewBox="0 0 21 10" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 9.44946C8.20101 9.44946 12.799 9.44946 21 9.44946" />
								<path d="M0 0.556641C8.20101 0.556641 12.799 0.556641 21 0.556641" />
							</svg>
						</span>
						<span class="menu-toggle-close hidden">
							<svg class="stroke-white" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.00392 1.00587L22 22.002" stroke-width="1.5" />
								<path d="M1.00392 21.9961L22 1" stroke-width="1.5" />
							</svg>
						</span>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container' => false,
							'menu_class'		 => 'hidden lg:flex lg:gap-[48px] xl:gap-[48px]',
							'walker' => new MegaMenuWalker()
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<div class="hidden lg:flex lg:gap-3 xl:gap-3 md:gap-3 gap-3 z-1">
					<?= get_template_part('partials/core/partial', 'button_primary', [
						'class' => 'btn-primary px-[16px] py-[10px] rounded-md',
						'text' => 'Get a Demo',
						'link' =>  '/contact',
					]); ?>
					<?= get_template_part('partials/core/partial', 'button_primary', [
						'class' => 'btn-white px-[16px] py-[10px] rounded-md',
						'text' => 'Get Started',
						'link' =>  '/contact',
					]); ?>
				</div>
			</div>
		</header><!-- #masthead -->
		<?php if ($mobileDetect->isMobile()) : ?>
			<div class="main-mobile-nav fixed inset-0 bg-nitsPrimary w-full h-full z-5 pt-[130px] md:pt-36 opacity-0 overflow-hidden transition-opacity duration-500 pointer-events-auto">
				<div class="main-width h-full opacity-100 relative">
					<div class="h-[1px] bg-nitsBluePlus absolute top-[-25px] left-0 right-0 w-[85%] mx-auto"></div>
					<div class="overflow-y-auto h-full flex flex-col gap-10">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id' => 'primary-menu-mobile',
								'container' => false,
								'menu_class' => 'mobile-nav inline-flex flex-col lg:hidden gap-6 text-white font-normal text-lg',
							)
						);
						?>
						<div class="">
							<?= get_template_part('partials/core/partial', 'button_primary', [
								'class' => 'btn-primary px-[16px] py-[10px] rounded-md w-full block text-center mb-6',
								'text' => 'Get Started',
								'link' =>  '/contact',
							]); ?>
							<?= get_template_part('partials/core/partial', 'button_primary', [
								'class' => 'btn-white px-[16px] py-[10px] rounded-md w-full block text-center',
								'text' => 'Get Started',
								'link' =>  '/contact',
							]); ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>