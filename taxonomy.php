<?php

/**
 * Template for displaying any taxonomy archive (category, tag, custom taxonomies)
 *
 * @package nits
 */

get_header();

$term = get_queried_object(); // Current taxonomy term
$paged = get_query_var('paged') ?: 1;

// WP_Query for current taxonomy term
$args = [
    'post_type' => ['post', 'casestudy', 'solution'], // Add your post types here
    'posts_per_page' => 3,
    'paged' => $paged,
    'tax_query' => [
        [
            'taxonomy' => $term->taxonomy,
            'field' => 'slug',
            'terms' => $term->slug,
        ],
    ],
];

$tax_query = new WP_Query($args);
?>

<main id="primary" class="site-main">

    <div class="pt-28 lg:pt-52 pb-12 lg:pb-28 mb-8 lg:mb-16" style="background: radial-gradient(156.77% 163.63% at 72.98% 137.84%, #284C88 0%, #14294C 100%);">
        <div class="main-width">
            <!-- Breadcrumb -->
            <!-- <nav class="text-white text-sm mb-4">
                <a href="<?php //echo  esc_url(home_url()); 
                            ?>" class="hover:underline">Home</a> /
                <?php // echo esc_html(single_term_title('', false)); 
                ?>
            </nav> -->

            <!-- Taxonomy Title -->
            <h1 class="text-2xl lg:text-5xl text-white font-type1">
                <?= esc_html(single_term_title('', false)); ?>
            </h1>

            <?php if (term_description()) : ?>
                <p class="text-white mt-4 max-w-3xl"><?= term_description(); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <div class="main-width mb-20 lg:mb-40">

        <?php if ($tax_query->have_posts()) : ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16" id="taxonomy-post-results">
                <?php
                $delay = 100;
                while ($tax_query->have_posts()) :
                    $tax_query->the_post();
                    $author_id = get_the_author_meta('ID');

                    echo get_template_part('partials/core/partial', 'card_2', [
                        'post' => get_post(),
                        'author_id' => $author_id,
                        'read_time' => ceil(str_word_count(strip_tags(get_the_content())) / 200),
                        'title' => get_the_title(),
                        'permalink' => get_permalink(),
                        'excerpt' => wp_trim_words(get_the_excerpt(), 25, '...'),
                        'thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'medium_large'),
                        'categories' => get_the_terms(get_the_ID(), $term->taxonomy),
                        'date' => get_the_date('d M Y'),
                        'author_name' => get_the_author_meta('display_name', $author_id),
                        'avatar' => get_avatar_url($author_id),
                        'class_container' => 'bg-white overflow-hidden max-w-[416px]',
                        'aos_attributes' => 'data-cursor="inverse" data-aos="fade-down" data-aos-delay="' . esc_attr($delay) . '" data-aos-anchor-placement="top-bottom"',
                    ]);

                    $delay += 100;
                endwhile; ?>
                <div class='page-nav-container'>
                    <?php wp_pagenavi(array('query' => $tax_query)); ?>
                </div>
                <?php
                wp_reset_postdata();
                ?>
            </div>

            <div class="mt-12 text-center">
                <?php
                echo paginate_links([
                    'total' => $tax_query->max_num_pages,
                    'prev_text' => '« Prev',
                    'next_text' => 'Next »',
                ]);
                ?>
            </div>

        <?php else : ?>
            <p class="text-center text-gray-500">No posts found in this category.</p>
        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>