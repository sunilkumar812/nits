<?php
$blog_listing_hero = get_field($args['field_name'], 'option') ?: [];
$heading = $blog_listing_hero['heading'] ?? '';
$description = $blog_listing_hero['description'] ?? '';
$button = $blog_listing_hero['button'] ?? [];
$button_text = $button['title'] ?? '';
$button_link = $button['url'] ?? '';
$button_target = $button['target'] ?? '_self';
$right_image = $blog_listing_hero['right_image'] ?? [];
$class_container = $args['class_container'] ?? '';
?>
<?php if (!empty($heading)) : ?>
    <div class="relative bg-primary overflow-hidden<?= $class_container; ?>" style="background: radial-gradient(125.79% 125.79% at 70.2% 100%, #284C88 0%, #14294C 100%)">
        <div class="main-width pt-30 pb-15 lg:pt-52 lg:pb-28">
            <div class="flex flex-col lg:flex-row items-center">
                <!-- Left Column -->
                <div class="lg:w-1/2 text-white mb-15 lg:mb-0 lg:pr-12">
                    <?php if (!empty($heading)) : ?>
                        <h1 class="text-2xl lg:text-4xl font-bold text-white font-type1 mb-4 lg:mb-6" data-aos="fade-up">
                            <?= esc_html($heading); ?>
                        </h1>
                    <?php endif; ?>

                    <?php if (!empty($description)) : ?>
                        <p class="text-sm lg:text-base font-roboto 3xl:text-lg text-white mb-5 lg:mb-8 max-w-full lg:max-w-[80%]" data-aos="fade-up" data-aos-delay="200">
                            <?= esc_html($description); ?>
                        </p>
                    <?php endif; ?>

                    <?php if (!empty($button_text) && !empty($button_link)) : ?>
                        <div class="min-w-fit" data-aos="fade-up" data-aos-delay="300">
                            <?= get_template_part('partials/core/partial', 'button_2', [
                                'class' => '',
                                'text' => $button_text,
                                'link' => $button_link,
                                'target' => $button_target,
                                'rel' => '',
                            ]); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Right Column -->
                <div class="lg:w-1/2 relative">
                    <?php if (!empty($right_image['url'])) : ?>
                        <div class="relative z-10">
                            <img
                                src="<?= esc_url($right_image['url']); ?>"
                                alt="<?= esc_attr($right_image['alt'] ?? 'Blog Hero Image'); ?>"
                                class="rounded-lg shadow-2xl w-full max-w-md mx-auto img_anim">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>