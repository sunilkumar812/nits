<?php
$blog_one_post = get_field($args['field_name'], $args['page_id']);

if (!empty($blog_one_post)) :
    $title = get_the_title($blog_one_post);
    $permalink = get_permalink($blog_one_post);
    $excerpt = wp_trim_words(get_the_excerpt($blog_one_post), 40, '...');
    $thumbnail = get_the_post_thumbnail_url($blog_one_post, 'full');
    $date = get_the_date('d F Y', $blog_one_post);
    $categories = get_the_category($blog_one_post);
    $first_category = !empty($categories) ? $categories[0]->name : '';
?>
    <div class="main-width mb-10 lg:mb-30">
        <!-- Card Container -->
        <div class="overflow-hidden">
            <!-- Image with Purple Background -->
            <div class="relative">
                <div class="bg-purple-600 h-48 md:h-100" style="box-shadow: 19px 24px 20px 5px rgba(186,221,255,0.98);
                                -webkit-box-shadow: 19px 24px 20px 5px rgba(186,221,255,0.98);
                                -moz-box-shadow: 19px 24px 20px 5px rgba(186,221,255,0.98);">
                    <?php if (!empty($thumbnail)) : ?>
                        <img src="<?= esc_url($thumbnail); ?>" alt="<?= esc_attr($title); ?>"
                            class="w-full h-full object-cover object-center rounded-lg">
                    <?php endif; ?>
                </div>

                <!-- Content Section (overlaps image) -->
                <div class="relative bg-blue-50 p-8 lg:p-16 -mt-32 rounded-md max-w-[75%] ml-auto">
                    <!-- Tags -->
                    <div class="text-xs text-gray-500 uppercase tracking-wide mb-5 lg:mb-10">
                        <?php if (!empty($first_category)) : ?>
                            <span class="text-black font-bold"><?= esc_html($first_category); ?></span>
                        <?php endif; ?>
                        <span class="ml-4"><?= esc_html($date); ?></span>
                    </div>

                    <!-- Title -->
                    <h2 class="text-xl lg:text-2xl font-bold mb-3 font-type1">
                        <?= esc_html($title); ?>
                    </h2>

                    <!-- Description -->
                    <p class="text-gray-600 text-sm lg:text-base mb-4 lg:mb-8">
                        <?= esc_html($excerpt); ?>
                    </p>

                    <div>
                        <?= get_template_part('partials/core/partial', 'button_primary', [
                            'class' => 'inline-block btn-primary px-[22px] py-[17px] rounded-md text-xl font-bold border border-1 hover:border-1 hover:boreder-nitsLightBlue',
                            'text' => 'Read More',
                            'link' => esc_url($permalink),
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>