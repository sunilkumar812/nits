<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nits
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- Blog Hero -->
	<?= get_template_part('partials/single-blog/partial', 'hero'); ?>

	<!-- Blog Content -->
	<div class="entry-content main-width mb-20 lg:mb-40">
		<div class="nits-gutenberg">
			<?php
			while (have_posts()) :
				the_post();

				the_content();

			endwhile; // End of the loop.
			?>
		</div>
	</div>

	<!-- Related Posts -->
	<?= get_template_part('partials/single-blog/partial', 'related_post'); ?>

	<?= get_template_part('partials/sections/cta/partial', 'cta', [
		'field_name' => 'cta',
		'class_container' => ' text-white px-4 lg:px-16 pb-0 pt-10',
		'option' => 'yes',
	]); ?>

</main><!-- #main -->

<?php
get_footer();
