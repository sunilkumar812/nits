<?php

$section_case = get_field($args['field_name'], 'option');
$class_container = $args['class_container'] ?? 'mb-24';

// Get News Categories
$news_categories = get_terms([
    'taxonomy' => 'news_categories',
    'hide_empty' => true,
]);

if (!empty($section_case)) :
    $icon = $section_case['icon']['url'] ?? '';
    $icon_heading = $section_case['icon_heading'] ?? '';
    $heading = $section_case['heading'] ?? '';
    $heading_desc = $section_case['heading_desc'] ?? '';

    // Dynamic News Query
    $args_news = [
        'post_type' => 'news',
        'posts_per_page' => 6,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    ];

    $case_query = new WP_Query($args_news);
?>
    <div class="main-width <?= esc_attr($class_container); ?>">

        <!-- Section Heading -->
        <?= get_template_part('partials/core/partial', 'section_heading_1', [
            'class_container' => 'mb-5 lg:mb-8 3xl:mb-15',
            'icon' => $icon,
            'icon_heading' => $icon_heading,
            'heading' => $heading,
            'heading_desc' => $heading_desc,
        ]); ?>

        <?php if (!empty($news_categories)) : ?>
            <div class="flex justify-center items-center gap-4 mb-15">
                <div class="min-w-4 lg:min-w-[103px] h-px bg-nitsBluePlus"></div>

                <?php foreach ($news_categories as $cat) : ?>
                    <a href="<?= esc_url(get_term_link($cat)); ?>" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600">
                        <?= esc_html($cat->name); ?>
                    </a>
                <?php endforeach; ?>

                <div class="min-w-4 lg:min-w-[103px] h-px bg-nitsBluePlus"></div>
            </div>
        <?php endif; ?>

        <div id="case-loader" class="w-full text-center mb-4 hidden">
            <img src="<?= esc_url(get_template_directory_uri() . '/assets/src/images/blue_loading.gif'); ?>" alt="Loading..." class="inline-block w-30 h-30" />
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-16" id="case-post-results">
            <?php
            if ($case_query->have_posts()) :
                $delay = 100;
                while ($case_query->have_posts()) :
                    $case_query->the_post();
                    $author_id = get_the_author_meta('ID');
                    echo get_template_part('partials/core/partial', 'card_2', [
                        'post' => get_post(),
                        'author_id' => $author_id,
                        'read_time' => ceil(str_word_count(strip_tags(get_the_content())) / 200),
                        'title' => get_the_title(),
                        'permalink' => get_permalink(),
                        'excerpt' => wp_trim_words(get_the_excerpt(), 25, '...'),
                        'thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'medium_large'),
                        'categories' => get_the_terms(get_the_ID(), 'news_categories'),
                        'date' => get_the_date('d M Y'),
                        'author_name' => get_the_author_meta('display_name', $author_id),
                        'avatar' => get_avatar_url($author_id),
                        'class_container' => 'bg-white overflow-hidden max-w-[416px]',
                        'aos_attributes' => 'data-cursor="inverse" data-aos="fade-down" data-aos-delay="' . esc_attr($delay) . '" data-aos-anchor-placement="top-bottom"',
                    ]);
                    $delay += 100;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
<?php endif; ?>