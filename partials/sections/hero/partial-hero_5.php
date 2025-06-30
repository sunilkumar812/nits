<?php
$product_archive_hero = get_field($args['field_name']);
$product_archive_hero_button = $product_archive_hero['button'] ?? [];
$product_archive_hero_button_text = $product_archive_hero_button['title'] ?? '';
$product_archive_hero_button_link = $product_archive_hero_button['url'] ?? '';
$product_archive_hero_button_target = $product_archive_hero_button['target'] ?? '_self';
$product_archive_right_image = $product_archive_hero['right_image'] ?? '';
?>
<div class="relative bg-primary overflow-hidden">
    <div class="main-width pt-30 pb-15 lg:pt-40 lg:pb-28">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs" class="text-nitsBluePlus mb-7 lg:mb-10">', '</p>');
        } ?>
        <div class="flex flex-col lg:flex-row items-center">
            <!-- Left Column - Text Content -->
            <div class="lg:w-1/2 mb-15 lg:mb-0 lg:pr-12">
                <?php if (!empty($product_archive_hero['heading'])) : ?>
                    <h1 class="text-2xl lg:text-4xl font-bold text-nitsDarkBlue font-type1 mb-3 lg:mb-4" data-aos="fade-up">
                        <?= esc_html($product_archive_hero['heading']); ?>
                    </h1>
                <?php endif; ?>
                <?php if (!empty($product_archive_hero['sub_heading'])) : ?>
                    <h2 class="text-lg lg:text-2xl font-bold text-nitsDarkBlue font-type2 mb-4 lg:mb-8" data-aos="fade-up">
                        <?= esc_html($product_archive_hero['sub_heading']); ?>
                    </h2>
                <?php endif; ?>
                <?php if (!empty($product_archive_hero['description'])) : ?>
                    <p class="text-sm lg:text-base font-roboto 3xl:text-lg text-nitsDarkBlue mb-5 lg:mb-12 max-w-full lg:max-w-[80%]" data-aos="fade-up" data-aos-delay="200">
                        <?= esc_html($product_archive_hero['description']); ?>
                    </p>
                <?php endif; ?>
                <?php if (!empty($product_archive_hero_button)) : ?>
                    <div class="min-w-fit" data-aos="fade-up" data-aos-delay="300" `>
                        <!-- CTA Button -->
                        <?= get_template_part('partials/core/partial', 'button_primary', [
                            'class' => 'btn-primary px-3 py-2 lg:px-[22px] lg:py-[17px] rounded-md text-md lg:text-xl font-bold hover:border-1 hover:boreder-nitsLightBlue',
                            'text' => $product_archive_hero_button_text,
                            'link' => $product_archive_hero_button_link,
                            'target' => $product_archive_hero_button_target,
                            'rel' => '',
                        ]); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Right Column - Image -->
            <div class="lg:w-1/2 relative">
                <!-- Main Image Container -->
                <div class="relative">
                    <?php if (!empty($product_archive_right_image)) : ?>
                        <img
                            src="<?= esc_url($product_archive_right_image['url']); ?>"
                            alt="<?= esc_attr($product_archive_right_image['alt']); ?>"
                            class="rounded-lg shadow-2xl w-full max-w-full mx-auto img_anim">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>