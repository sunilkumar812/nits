<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Nits
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function nits_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (! is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (! is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'nits_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function nits_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'nits_pingback_header');


/**
 * Save ACF files as json
 */
add_filter('acf/settings/save_json', function ($path) {
	$path = get_stylesheet_directory() . '/acf-json';
	return $path;
});

/**
 * Classic Editor should be enabled for specific post types
 */
// add_filter('use_block_editor_for_post_type', function ($use_block_editor, $post_type) {
// 	// Post types for which Classic Editor should be enabled
// 	$classic_editor_post_types = ['page', 'solution'];

// 	if (in_array($post_type, $classic_editor_post_types, true)) {
// 		return false; // Disable Gutenberg (use Classic)
// 	}

// 	return true; // Enable Gutenberg for all others
// }, 10, 2);
add_filter('use_block_editor_for_post', function ($use_block_editor, $post) {
	// Post types for which Gutenberg is disabled by default
	$classic_editor_post_types = ['page', 'solution'];

	// Page templates where Gutenberg should be enabled, even for 'page' post type
	$gutenberg_allowed_templates = [
		'page-templates/gut_page.php',
	];

	// Check post type
	if (in_array($post->post_type, $classic_editor_post_types, true)) {
		// Check if it's a page template override
		if ($post->post_type === 'page') {
			$template = get_page_template_slug($post);
			if (in_array($template, $gutenberg_allowed_templates, true)) {
				return true; // Enable Gutenberg for specific templates
			}
		}

		return false; // Otherwise disable Gutenberg (Classic Editor)
	}

	return $use_block_editor; // Keep default behavior for other post types
}, 10, 2);


/**
 * Enqueue Gutenberg assets for specific post types
 *
 */
add_action('wp_enqueue_scripts', function () {
	// Remove default Gutenberg block styles
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('wc-block-style'); // If using WooCommerce
}, 100);


add_action('wp_enqueue_scripts', function () {
	$allowed_templates = ['page-templates/gut_page.php'];
	if (
		is_singular(['post'])
		||
		(is_page() && is_page_template($allowed_templates))
	) {
		wp_enqueue_style('wp-block-library');
		wp_enqueue_style('wp-block-library-theme');
	}
}, 101);

/** Home Case study ajax filter functions */
function ajax_filter_casestudies()
{
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'nits_nonce')) {
		wp_send_json_error('Invalid nonce');
		wp_die();
	}

	$cat_id = intval($_POST['category_id']);

	$args = [
		'post_type' => 'casestudy',
		'posts_per_page' => 4,
		'tax_query' => [
			[
				'taxonomy' => 'casestudy_categories', // Your custom taxonomy
				'field' => 'term_id',
				'terms' => $cat_id
			]
		]
	];

	$query = new WP_Query($args);

	if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post();
			$image = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
			<div class="swiper-slide">
				<div class="lg:flex flex-row lg:gap-16 3xl:gap-20">
					<div class="max-w-[550px] 3xl:max-w-[743px] aspect-[3/2]">
						<img src="<?= esc_url($image); ?>" alt="<?= esc_attr(get_the_title()); ?>" class="object-cover w-full">
					</div>
					<div class="flex flex-col gap-10 justify-end py-10 max-w-[500px]">
						<div class="flex flex-col gap-5">
							<div class="flex flex-row gap-5">
								<span><?= esc_html(get_the_terms(get_the_ID(), 'casestudy_categories')[0]->name); ?></span>
								<span> min read</span>
							</div>
							<div>
								<h3 class="font-type1 text-xl lg:text-2xl 3xl:text-3xl text-nitsBlue mb-2"><?= esc_html(get_the_title()); ?></h3>
								<p class="text-base text-black"><?= esc_html(get_the_excerpt()); ?></p>
							</div>
						</div>
						<div class="flex">
							<a href="<?= esc_url(get_permalink()); ?>" class="btn-primary px-[22px] py-[17px] rounded-md 3xl:text-xl font-bold border border-1 hover:border-1 hover:boreder-nitsLightBlue">Read More</a>
						</div>
					</div>
				</div>
			</div>
<?php
		endwhile;
		wp_reset_postdata();
	else :
		echo '<div class="swiper-slide text-center p-10">No case studies found.</div>';
	endif;

	wp_die();
}
add_action('wp_ajax_filter_casestudies', 'ajax_filter_casestudies');
add_action('wp_ajax_nopriv_filter_casestudies', 'ajax_filter_casestudies');

/** Home Blog ajax filter functions */
function nits_filter_blog_posts()
{
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'nits_nonce')) {
		wp_send_json_error('Invalid nonce');
		wp_die();
	}


	$category_id = intval($_POST['category_id']);

	$args = [
		'post_type' => 'post',
		'posts_per_page' => 3,
		'tax_query' => [[
			'taxonomy' => 'category',
			'field' => 'term_id',
			'terms' => $category_id,
		]]
	];

	$query = new WP_Query($args);

	if ($query->have_posts()) {

		while ($query->have_posts()) {
			$query->the_post();
			$author_id = get_the_author_meta('ID');
			echo get_template_part('partials/core/partial', 'card_2', [
				'post' => get_post(),
				'author_id' => $author_id,
				'read_time' => ceil(str_word_count(strip_tags(get_the_content())) / 200),
				'title' => get_the_title(),
				'permalink' => get_permalink(),
				'excerpt' => wp_trim_words(get_the_excerpt(), 25, '...'),
				'thumbnail' => get_the_post_thumbnail_url(null, 'medium_large'),
				'categories' => get_the_category(),
				'date' => get_the_date('d M Y'),
				'author_name' => get_the_author_meta('display_name', $author_id),
				'avatar' => get_avatar_url($author_id),
				'class_container' => ' bg-white overflow-hidden max-w-[416px]',
				'aos_attributes' => 'data-cursor="inverse" data-aos="fade-down" data-aos-delay="" data-aos-anchor-placement="top-bottom"',
			]);
		}
		wp_reset_postdata();
	} else {
		echo '<div class="col-span-3 text-center">No posts found.</div>';
	}

	wp_die();
}
add_action('wp_ajax_filter_blog_posts', 'nits_filter_blog_posts');
add_action('wp_ajax_nopriv_filter_blog_posts', 'nits_filter_blog_posts');


add_action('pre_get_posts', 'order_solutions_by_menu_order');
function order_solutions_by_menu_order($query)
{
	if (!is_admin() && $query->is_main_query() && is_post_type_archive('solution')) {
		$query->set('orderby', 'menu_order');
		$query->set('order', 'ASC');
		$query->set('posts_per_page', -1); // Optional: show all solutions
	}
}

add_filter('wpseo_breadcrumb_links', 'remove_home_from_yoast_breadcrumb');
function remove_home_from_yoast_breadcrumb($links)
{
	array_shift($links);
	return $links;
}
