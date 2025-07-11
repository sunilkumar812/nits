<?php
// Get the latest post
$recent_post = get_posts([
    'numberposts' => 1,
    'post_status' => 'publish',
])[0] ?? null;

if ($recent_post) :
    setup_postdata($recent_post);

    $title = get_the_title($recent_post);
    $permalink = get_permalink($recent_post);
    $excerpt = wp_trim_words(get_the_excerpt($recent_post), 40, '...');
    $thumbnail = get_the_post_thumbnail_url($recent_post, 'large');
    $date = get_the_date('d F Y', $recent_post);
    $categories = get_the_category($recent_post);
    $first_category = !empty($categories) ? $categories[0]->name : '';
    $author_id = $recent_post->post_author;
    $author_name = get_the_author_meta('display_name', $author_id);
    $author_avatar = get_avatar_url($author_id);

    wp_reset_postdata();
?>

    <div class="main-width mb-10 lg:mb-30">
        <h2 class="text-xl lg:text-3xl font-bold mb-8 font-type1">Our Recent Post</h2>
        <div class="bg-white overflow-hidden lg:flex gap-8">
            <!-- Image Section -->
            <div class="md:w-1/2">
                <img
                    src="<?= esc_url($thumbnail); ?>"
                    alt="<?= esc_attr($title); ?>"
                    class="w-full h-full object-cover md:max-h-96 rounded-lg">
            </div>

            <!-- Content Section -->
            <div class="p-5 md:w-1/2 flex flex-col justify-top">
                <div class="text-xs text-gray-500 uppercase tracking-wide mb-5 lg:mb-10">
                    <?php if (!empty($first_category)) : ?>
                        <span class="text-black"><b><?= esc_html($first_category); ?></b></span>
                    <?php endif; ?>
                    <span class="ml-4"><?= esc_html($date); ?></span>
                </div>
                <h3 class="text-xl lg:text-2xl font-semibold mb-4 lg:mb-5 font-type1"><?= esc_html($title); ?></h3>
                <p class="text-gray-700 text-sm lg:text-base mb-6 lg:mb-12">
                    <?= esc_html($excerpt); ?>
                </p>

                <div class="">
                    <?= get_template_part('partials/core/partial', 'button_primary', [
                        'class' => 'inline-block btn-primary px-[22px] py-[17px] rounded-md text-xl font-bold border border-1 hover:border-1 hover:boreder-nitsLightBlue',
                        'text' => 'Read More',
                        'link' => esc_url($permalink),
                    ]); ?>
                </div>

                <!-- <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-gray-300 mr-3 overflow-hidden">
                    <img
                        src="<?php // echo esc_url($author_avatar); 
                                ?>"
                        alt="<?php // echo esc_attr($author_name); 
                                ?>"
                        class="w-full h-full object-cover">
                </div>
                <div>
                    <p class="text-sm font-medium"><?php //echo esc_html($author_name); 
                                                    ?></p>
                    <p class="text-xs text-gray-500">Game Developer</p>
                </div>
            </div> -->
            </div>
        </div>
    </div>

<?php endif; ?>