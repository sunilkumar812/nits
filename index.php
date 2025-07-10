<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nits
 */

get_header();
$page = get_page_by_path('blogs');
$page_id = $page ? $page->ID : null;
?>

<main id="primary" class="z-4 relative overflow-hidden">

	<!-- Hero Setion -->
	<?= get_template_part('partials/pages/blogs/partial', 'hero', [
		'class_container' => 'text-white mb-30',
		'field_name' => 'hero',
		'page_id' => $page_id,
	]); ?>

	<!-- Blog Cards Section -->
	<?= get_template_part('partials/pages/blogs/partial', 'blog_cards', [
		'field_name' => 'section_blog_cards',
		'class_container' => '3xl:mb-60 lg:mb-40 mb-20 relative z-5',
		'page_id' => $page_id,
	]); ?>

	<!-- Subscribe Section -->
	<?= get_template_part('partials/sections/partial', 'subscribe', [
		'field_name' => 'subscribe',
		'class_container' => 'bg-nitsBluePlus py-10 lg:py-20',
		'page_id' => $page_id,
	]); ?>

</main><!-- #main -->

<?php
get_footer();
