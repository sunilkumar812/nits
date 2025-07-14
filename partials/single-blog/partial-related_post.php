<?php
// Get current post categories
$current_categories = wp_get_post_categories(get_the_ID());

if (!empty($current_categories)) :

    $related_args = [
        'post__not_in' => [get_the_ID()],
        'posts_per_page' => 3,
        'category__in' => $current_categories,
        'orderby' => 'date',
    ];

    $related_query = new WP_Query($related_args);

    if ($related_query->have_posts()) :
?>
        <div class="main-width mb-24">
            <h2 class="text-nitsSteelBlue font-semibold text-base lg:text-lg 3xl:text-xl uppercase tracking-05em font-type2 mb-10 lg:mb-20 text-center">Related Posts</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-16" id="related-posts">
                <?php
                $delay = 100;
                while ($related_query->have_posts()) : $related_query->the_post();
                    $author_id = get_the_author_meta('ID');

                    echo get_template_part('partials/core/partial', 'card_2', [
                        'post' => get_post(),
                        'author_id' => $author_id,
                        'read_time' => ceil(str_word_count(strip_tags(get_the_content())) / 200),
                        'title' => get_the_title(),
                        'permalink' => get_permalink(),
                        'excerpt' => wp_trim_words(get_the_excerpt(), 25, '...'),
                        'thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'medium_large'),
                        'categories' => get_the_category(),
                        'date' => get_the_date('d M Y'),
                        'author_name' => get_the_author_meta('display_name'),
                        'avatar' => get_avatar_url($author_id),
                        'class_container' => 'bg-white overflow-hidden max-w-[416px]',
                        'aos_attributes' => 'data-cursor="inverse" data-aos="fade-up" data-aos-delay="' . esc_attr($delay) . '" data-aos-anchor-placement="top-bottom"',
                    ]);

                    $delay += 100;
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
<?php
    endif;
endif;
?>