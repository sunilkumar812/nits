<?php
$section_case_studies = get_field($args['field_name']);
$background_image = $section_case_studies['background_image'] ?? '';
$heading_1 = $section_case_studies['heading_1'] ?? '';
$heading_2 = $section_case_studies['heading_2'] ?? '';
$heading_desc = $section_case_studies['heading_desc'] ?? '';

$casestudy_categories = get_terms([
    'taxonomy' => 'casestudy_categories',
    'hide_empty' => true,
]);

$args = [
    'post_type' => 'casestudy',
    'posts_per_page' => 5,
];

$query = new WP_Query($args);


if (is_array($section_case_studies) && !empty(array_filter($section_case_studies))): ?>
    <div class="py-10 lg:pt-16 lg:pb-23 3xl:pt-[105px] 3xl:pb-[103px] relative overflow-hidden" style="background-image:linear-gradient(289.33deg, #2287FF -2.16%, #012C79 108.05%);">
        <div class="absolute -bottom-10 right-20 h-full"><img class="h-full" src="<?= esc_url($background_image['url']);  ?>"> </div>
        <?php echo get_template_part('partials/core/partial', 'section_heading_2', [
            'class_container' => 'main-width',
            'heading_1' => $heading_1 ?? 'Insights',
            'class_heading_1' => '3xl:text-xl font-semibold text-white mb-2 lg:mb-3 3xl:mb-3.5',
            'heading_2' => $heading_2 ?? 'Client Success Stories',
            'class_heading_2' => '3xl:text-[40px] font-bold text-white mb-2 lg:mb-3 3xl:mb-3.5',
            'heading_desc' => $heading_desc ?? 'Discover how we drive results for our clients.',
            'class_heading_desc' => '3xl:text-lg text-white',
        ]); ?>
    </div>

    <div class="main-width relative -mt-15">
        <div class="swiper caseStudySwiper">
            <div id="casestudy-loader" class="w-full text-center mb-4 hidden">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/src/images/blue_loading.gif'); ?>" alt="Loading..." class="inline-block w-30 h-30" />
            </div>

            <div class="swiper-wrapper" id="casestudy-results">
                <?php
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
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <div class="main-width mb-25">
        <!-- Category Navigation -->

        <div class="flex justify-center items-center gap-4 mt-8">
            <div class="min-w-4 lg:min-w-[103px] h-px bg-nitsBluePlus"></div>

            <?php foreach ($casestudy_categories as $casestudy_category) : ?>
                <button
                    class="casestudy-filter px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 cursor-pointer"
                    data-id="<?= esc_attr($casestudy_category->term_id); ?>">
                    <?= esc_html($casestudy_category->name); ?>
                </button>
            <?php endforeach; ?>

            <div class="min-w-4 lg:min-w-[103px] h-px bg-nitsBluePlus"></div>
        </div>

    </div>
<?php endif; ?>