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
	<div class="main-width pt-28 lg:pt-44 mb-8 lg:mb-16">
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="main-width nits-gutenberg">
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
