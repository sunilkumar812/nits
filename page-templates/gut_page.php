<?php

/**
 * Template Name: Gutenger Page 1
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nits
 */
get_header();
?>

<main id="primary" class="site-main">
	<div class="pt-28 lg:pt-52 pb-12 lg:pb-28 mb-8 lg:mb-16" style="background: radial-gradient(156.77% 163.63% at 72.98% 137.84%, #284C88 0%, #14294C 100%) /* warning: gradient uses a rotation that is not supported by CSS and may not behave as expected */;
;">
		<div class="main-width">
			<h1 class="text-2xl lg:text-5xl text-white font-type1"><?php the_title(); ?></h1>
		</div>
	</div>

	<div class="main-width nits-gutenberg mb-20 lg:mb-40">
		<?php
		while (have_posts()) :
			the_post();

			the_content();

		endwhile; // End of the loop.
		?>
	</div>
</main><!-- #main -->

<?php
get_footer();
