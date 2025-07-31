<?php
$section_blog = get_field($args['field_name']);
$class_container = $args['class_container'] ?? 'mb-24';

$blog_categories = get_terms([
    'taxonomy' => 'category',
    'hide_empty' => true,
]);

if (!empty($section_blog)): ?>
    <div class="main-width <?= esc_attr($class_container); ?>">
        <!--Section Heading -->
        <?= get_template_part('partials/core/partial', 'section_heading_1', [
            'class_container' => 'mb-5 lg:mb-8 3xl:mb-15',
            'icon' => $section_blog['icon']['url'],
            'icon_heading' => $section_blog['icon_heading'],
            'heading' => $section_blog['heading'],
            'heading_desc' => $section_blog['heading_desc'],
        ]); ?>
        <div class="flex flex-wrap justify-center items-center gap-4 mb-15 px-4">
            <!-- Left Line -->
            <div class="hidden lg:block min-w-4 lg:min-w-[103px] h-px bg-nitsBluePlus"></div>

            <!-- Blog Category Buttons -->
            <div class="flex flex-wrap justify-center gap-2">
                <?php foreach ($blog_categories as $blog_category) : ?>
                    <button
                        class="blog-filter px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 border border-gray-200 rounded-md cursor-pointer transition-colors"
                        data-id="<?= esc_attr($blog_category->term_id); ?>">
                        <?= esc_html($blog_category->name); ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <!-- Right Line -->
            <div class="hidden lg:block min-w-4 lg:min-w-[103px] h-px bg-nitsBluePlus"></div>
        </div>

        <div id="blog-loader" class="w-full text-center mb-4 hidden">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/src/images/blue_loading.gif'); ?>" alt="Loading..." class="inline-block w-30 h-30" />
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-16" id="blog-post-results">

            <?php
            if ($section_blog['nits_blog_posts'] && is_array($section_blog['nits_blog_posts'])):
                $delay = 100;
                foreach ($section_blog['nits_blog_posts'] as $post):
                    setup_postdata($post);
                    $author_id = get_the_author_meta('ID');
                    echo get_template_part('partials/core/partial', 'card_2', [
                        'post' => $post,
                        'author_id' => get_the_author_meta('ID'),
                        'read_time' => ceil(str_word_count(strip_tags(get_the_content())) / 200),
                        'title' => get_the_title($post),
                        'permalink' => get_permalink($post),
                        'excerpt' => wp_trim_words(get_the_excerpt($post), 25, '...'),
                        'thumbnail' => get_the_post_thumbnail_url($post, 'medium_large'),
                        'categories' => get_the_category($post),
                        'date' => get_the_date('d M Y', $post),
                        'author_name' => get_the_author_meta('display_name', $author_id),
                        'avatar' => get_avatar_url($author_id),
                        'class_container' => ' bg-white overflow-hidden max-w-[416px]',
                        'aos_attributes' => 'data-cursor="inverse" data-aos="fade-down" data-aos-delay="' . esc_attr($delay) . '" data-aos-anchor-placement="top-bottom"',
                    ]);
                    $delay += 100;
                endforeach;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
<?php endif; ?>