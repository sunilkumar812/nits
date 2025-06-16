<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nits
 */
$lang = apply_filters('wpml_current_language', null);
?>

<footer id="colophon" class="site-footer bg-black relative py-[60px] md:py-[130px]">

	<div class="main-width relative">
		<div class="flex flex-col lg:flex-row justify-between lg:items-top gap-10 xl:gap-24 z-1 relative text-nitsPrimary">
			<div class="lg:w-2.2/5">
				<div class="mb-8">
					<svg width="126" height="35" viewBox="0 0 126 35" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.79376 0.418266H0.699554C0.313201 0.418266 0 0.731467 0 1.11782V10.212C0 10.5984 0.313201 10.9116 0.699554 10.9116H9.79376C10.1801 10.9116 10.4933 10.5984 10.4933 10.212V1.11782C10.4933 0.731467 10.1801 0.418266 9.79376 0.418266Z" fill="#2387FF" />
						<path d="M125.53 27.6091H119.429C119.169 27.6091 118.959 27.8196 118.959 28.0793V34.1804C118.959 34.44 119.169 34.6505 119.429 34.6505H125.53C125.789 34.6505 126 34.44 126 34.1804V28.0793C126 27.8196 125.789 27.6091 125.53 27.6091Z" fill="#2387FF" />
						<path d="M23.3605 0.326523H22.271C22.0646 0.326523 21.8697 0.4068 21.732 0.555885L0.229362 22.9531C0.0802767 23.1022 0 23.2971 0 23.5035V33.8822C0 34.3065 0.344043 34.6505 0.768363 34.6505H9.72495C10.1493 34.6505 10.4933 34.3065 10.4933 33.8822V17.3681C10.4933 16.7947 10.7112 16.2442 11.1011 15.8314L13.8879 12.8153C14.3122 12.3566 14.9085 12.0928 15.5393 12.0928L21.1701 12.0699C21.5944 12.0699 21.9385 12.4139 21.9385 12.8382V33.8936C21.9385 34.318 22.2825 34.662 22.7068 34.662H31.6978C32.1221 34.662 32.4662 34.318 32.4662 33.8936V9.44366C32.4662 4.40917 28.3835 0.326523 23.349 0.326523H23.3605Z" fill="#F5F5F5" />
						<path d="M50.6775 0.418266H41.7209C41.2966 0.418266 40.9526 0.762309 40.9526 1.18663V33.9051C40.9526 34.3294 41.2966 34.6735 41.7209 34.6735H50.6775C51.1018 34.6735 51.4459 34.3294 51.4459 33.9051V1.18663C51.4459 0.762309 51.1018 0.418266 50.6775 0.418266Z" fill="#F5F5F5" />
						<path d="M80.8845 25.6481H78.178C76.8707 25.6481 75.9417 25.3843 75.3913 24.8568C74.8408 24.3178 74.5656 23.3889 74.5656 22.0356V9.87945C74.5656 9.54688 74.8408 9.27164 75.1734 9.27164H80.8272C81.1597 9.27164 81.435 8.99641 81.435 8.66383V1.03755C81.435 0.704971 81.1597 0.429737 80.8272 0.429737H65.3911C65.2305 0.429737 65.07 0.498546 64.9553 0.613227L57.5928 8.22804C57.2029 8.61796 57.4781 9.27164 58.0286 9.27164H63.453C63.7856 9.27164 64.0608 9.54688 64.0608 9.87945V21.8521C64.0608 26.4394 65.1732 29.7193 67.4095 31.7032C69.6458 33.6872 72.7536 34.6735 76.7675 34.6735H80.8845C81.2171 34.6735 81.4923 34.3982 81.4923 34.0657V26.2674C81.4923 25.9348 81.2171 25.6596 80.8845 25.6596V25.6481Z" fill="#F5F5F5" />
						<path d="M103.282 14.1456L100.461 13.813C97.0316 13.4804 96.3549 12.1272 96.3549 10.5217C96.3549 8.91613 97.3641 7.82666 99.6463 7.82666H102.41C104.738 7.82666 105.816 8.81292 106.172 10.4643C106.172 10.4987 106.172 10.5331 106.172 10.579V11.1753C106.172 11.4506 106.39 11.6685 106.665 11.6685H114.234C114.509 11.6685 114.727 11.4506 114.727 11.1753V10.5217C114.727 4.13393 110.289 0.429737 103.419 0.429737H99.3825C92.3182 0.429737 87.6736 3.3197 87.6736 10.7969C87.6736 16.6456 90.3686 20.0172 99.6463 21.0264L102.467 21.2902C106.103 21.6916 106.768 22.7696 106.768 24.4554C106.768 26.1412 105.828 27.2766 102.8 27.2766H100.449C98.1325 27.2766 96.9169 26.6917 96.3664 24.9256C96.3549 24.8797 96.3435 24.8224 96.3435 24.7765V24.4669C96.3435 24.1916 96.1256 23.9737 95.8504 23.9737H88.1438C87.8686 23.9737 87.6507 24.1916 87.6507 24.4669V25.327C87.6507 31.5886 91.9512 34.6849 99.8298 34.6849H102.789C111.332 34.6849 115.438 31.5886 115.438 24.1916C115.438 17.3337 112.273 15.1089 103.259 14.1685L103.282 14.1456Z" fill="#F5F5F5" />
					</svg>
				</div>
				<p class="text-base text-white mb-6 max-w-[330px]">
					<?php echo esc_html(get_field('footer_description', 'option'));  ?>
				</p>
				<?php
				$client_logos = get_field('client_logo', 'option');
				if ($client_logos) : ?>
					<div class="client-logos flex flex-wrap gap-2 mb-8 lg:mb-[90px]">
						<?php foreach ($client_logos as $row) :
							$image = $row['image'];
							if ($image) : ?>
								<img
									src="<?php echo esc_url($image['url']); ?>"
									alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<div class="flex flex-row gap-5 lg:-mt-8 aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
					<a class="btn-icon social-icon-btn p-0 group" href="https://www.facebook.com/#/" target="_blank">
						<svg class="w-12 h-12 lg:w-14 lg:h-14 fill-white hover:fill-nitsPrimary group-hover:rotate-0 group-hover:fill-white !stroke-none" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M29 28.5H31.5L32.5 24.5H29V22.5C29 21.47 29 20.5 31 20.5H32.5V17.14C32.174 17.097 30.943 17 29.643 17C26.928 17 25 18.657 25 21.7V24.5H22V28.5H25V37H29V28.5Z"></path>
						</svg>
					</a>
					<a class="btn-icon social-icon-btn p-0 group" href="https://x.com/#" target="_blank">
						<svg class="w-12 h-12 lg:w-14 lg:h-14 fill-white hover:fill-nitsPrimary group-hover:rotate-0 group-hover:fill-white !stroke-none" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M25.488 29.651L30.25 36H37.25L29.392 25.522L35.93 18H33.28L28.163 23.886L23.75 18H16.75L24.26 28.015L17.32 36H19.97L25.488 29.651ZM31.25 34L20.75 20H22.75L33.25 34H31.25Z"></path>
						</svg>
					</a>
					<a class="btn-icon social-icon-btn p-0 group" href="https://www.linkedin.com/company/#" target="_blank">
						<svg class="w-12 h-12 lg:w-14 lg:h-14 fill-white hover:fill-nitsPrimary group-hover:rotate-0 group-hover:fill-white !stroke-none" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19.75 16.875C19.1864 16.875 18.6459 17.0989 18.2474 17.4974C17.8489 17.8959 17.625 18.4364 17.625 19C17.625 19.5636 17.8489 20.1041 18.2474 20.5026C18.6459 20.9011 19.1864 21.125 19.75 21.125C20.3136 21.125 20.8541 20.9011 21.2526 20.5026C21.6511 20.1041 21.875 19.5636 21.875 19C21.875 18.4364 21.6511 17.8959 21.2526 17.4974C20.8541 17.0989 20.3136 16.875 19.75 16.875ZM17.75 22.875C17.7168 22.875 17.6851 22.8882 17.6616 22.9116C17.6382 22.9351 17.625 22.9668 17.625 23V36C17.625 36.069 17.681 36.125 17.75 36.125H21.75C21.7832 36.125 21.8149 36.1118 21.8384 36.0884C21.8618 36.0649 21.875 36.0332 21.875 36V23C21.875 22.9668 21.8618 22.9351 21.8384 22.9116C21.8149 22.8882 21.7832 22.875 21.75 22.875H17.75ZM24.25 22.875C24.2168 22.875 24.1851 22.8882 24.1616 22.9116C24.1382 22.9351 24.125 22.9668 24.125 23V36C24.125 36.069 24.181 36.125 24.25 36.125H28.25C28.2832 36.125 28.3149 36.1118 28.3384 36.0884C28.3618 36.0649 28.375 36.0332 28.375 36V29C28.375 28.5027 28.5725 28.0258 28.9242 27.6742C29.2758 27.3225 29.7527 27.125 30.25 27.125C30.7473 27.125 31.2242 27.3225 31.5758 27.6742C31.9275 28.0258 32.125 28.5027 32.125 29V36C32.125 36.069 32.181 36.125 32.25 36.125H36.25C36.2832 36.125 36.3149 36.1118 36.3384 36.0884C36.3618 36.0649 36.375 36.0332 36.375 36V27.38C36.375 24.953 34.265 23.055 31.85 23.274C31.1029 23.3425 30.371 23.5274 29.681 23.822L28.375 24.382V23C28.375 22.9668 28.3618 22.9351 28.3384 22.9116C28.3149 22.8882 28.2832 22.875 28.25 22.875H24.25Z"></path>
						</svg>
					</a>
				</div>
			</div>
			<div class="lg:w-2.2/5">

				<div class="flex flex-col lg:flex-row gap-10 md:gap-[105px]">
					<div class="min-w-[120px]">
						<h3 class="font-dmsans text-nitsLightBlue font-medium text-xl mb-4 lg:mb-10">Quick Links</h3>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_id' => 'footer_menu',
								'container' => false,
								'menu_class' => 'inline-flex flex-col gap-5 text-white font-normal text-base font-dmsans',
							)
						);
						?>
					</div>
					<div>
						<h3 class="font-dmsans text-nitsLightBlue font-medium text-xl mb-4 lg:mb-10">Contact Us</h3>
						<div class="flex flex-row gap-2 items-center mb-4 font-dmsans">
							<svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M13.6667 0.166992H0.333374V10.8337H13.6667V0.166992ZM12.3334 2.83366L7.00004 6.16699L1.66671 2.83366V1.50033L7.00004 4.83366L12.3334 1.50033V2.83366Z" fill="#2387FF" />
							</svg>
							<a href="mailto:<?php echo esc_html(get_field('email_address', 'option')); ?>" class="text-white text-base">
								<?php echo esc_html(get_field('email_address', 'option')); ?>
							</a>
						</div>
						<div class="flex flex-row gap-2 items-baseline mb-4 font-dmsans">
							<div class="min-w-[16px]">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.00004 1.33301C5.42004 1.33301 3.33337 3.41967 3.33337 5.99967C3.33337 9.49967 8.00004 14.6663 8.00004 14.6663C8.00004 14.6663 12.6667 9.49967 12.6667 5.99967C12.6667 3.41967 10.58 1.33301 8.00004 1.33301ZM8.00004 7.66634C7.08004 7.66634 6.33337 6.91967 6.33337 5.99967C6.33337 5.07967 7.08004 4.33301 8.00004 4.33301C8.92004 4.33301 9.66671 5.07967 9.66671 5.99967C9.66671 6.91967 8.92004 7.66634 8.00004 7.66634Z" fill="#2387FF" />
								</svg>
							</div>
							<div class="flex flex-col">
								<h3 class="text-nitsLightBlue font-medium text-xl mb-1">Company HQ</h3>
								<p class="text-white text-base">
									<?php echo esc_html(get_field('address_1', 'option')); ?>
								</p>
							</div>
						</div>
						<div class="flex flex-row gap-2 items-baseline mb-4 font-dmsans">
							<div class="min-w-[16px]">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.00004 1.33301C5.42004 1.33301 3.33337 3.41967 3.33337 5.99967C3.33337 9.49967 8.00004 14.6663 8.00004 14.6663C8.00004 14.6663 12.6667 9.49967 12.6667 5.99967C12.6667 3.41967 10.58 1.33301 8.00004 1.33301ZM8.00004 7.66634C7.08004 7.66634 6.33337 6.91967 6.33337 5.99967C6.33337 5.07967 7.08004 4.33301 8.00004 4.33301C8.92004 4.33301 9.66671 5.07967 9.66671 5.99967C9.66671 6.91967 8.92004 7.66634 8.00004 7.66634Z" fill="#2387FF" />
								</svg>
							</div>
							<div>
								<h3 class="text-nitsLightBlue font-medium text-xl mb-1">India Location</h3>
								<p class="text-white text-base">
									<?php echo esc_html(get_field('address_2', 'option')); ?>
								</p>
							</div>
						</div>
						<div class="flex flex-row gap-2 items-center mb-0 lg:mb-4 font-dmsans">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.0001 10.3067L10.4867 9.9L8.80672 11.58C6.92006 10.62 5.37339 9.08 4.41339 7.18667L6.10006 5.5L5.69339 2H2.02006C1.63339 8.78667 7.21339 14.3667 14.0001 13.98V10.3067Z" fill="#2387FF" />
							</svg>
							<div>
								<p class="text-white text-base">
									<?php echo esc_html(get_field('phone_1', 'option')); ?>
								</p>
								<p class="text-white text-base">
									<?php echo esc_html(get_field('phone_2', 'option')); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="lg:w-0.6/5">
				<img class="lg:absolute lg:top-[-130px] lg:right-0" src="https://nits.webknitter.in/wp-content/uploads/2025/06/Certification-Badge-01.png" alt="Map" />
			</div>
		</div><!-- .site-info -->
		<button id="back-to-top-btn" class="absolute right-0 lg:top-[-165px] lg:left-1/2 transform -translate-x-1/2 z-40 w-[80px] focus:outline-none cursor-pointer" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">
			<img src=" <?php echo esc_url(get_template_directory_uri() . '/assets/src/images/back-to-top-btn.png'); ?>" alt="Back to top" />
		</button>
</footer><!-- #colophon -->
<div class="bg-nitsBlue py-5">
	<div class="main-width">
		<p class="text-white text-xs font-dmsans text-center"><?php echo esc_html(get_field('bottom_bar_text', 'option')); ?></p>
	</div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>