<?php
$hero = get_field($args['field_name']) ?? [];
$hero_button = $hero['button'] ?? [];
$hero_button_text = $hero_button['title'] ?? '';
$hero_button_link = $hero_button['url'] ?? '';
$hero_button_target = $hero_button['target'] ?? '_self';
$right_image = $hero['right_image'] ?? '';
?>
<div class="relative bg-primary overflow-hidden" style="background: radial-gradient(125.79% 125.79% at 70.2% 100%, #284C88 0%, #14294C 100%)">
    <div class="main-width pt-30 pb-15 lg:pt-52 lg:pb-28">
        <div class="flex flex-col lg:flex-row items-center">
            <!-- Left Column - Text Content -->
            <div class="lg:w-1/2 text-white mb-15 lg:mb-0 lg:pr-12">
                <?php if (!empty($hero['heading'])) : ?>
                    <h1 class="text-2xl lg:text-4xl font-bold text-white font-type1 mb-4 lg:mb-6" data-aos="fade-up">
                        <?= esc_html($hero['heading']); ?>
                    </h1>
                <?php endif; ?>
                <?php if (!empty($hero['description'])) : ?>
                    <p class="text-sm lg:text-base font-roboto 3xl:text-lg text-white mb-5 lg:mb-8 max-w-full lg:max-w-[80%]" data-aos="fade-up" data-aos-delay="200">
                        <?= $hero['description']; ?>
                    </p>
                <?php endif; ?>
                <?php if (!empty($hero_button)) : ?>
                    <div class="min-w-fit" data-aos="fade-up" data-aos-delay="300" `>
                        <?=
                        get_template_part('partials/core/partial', 'button_2', [
                            'class' => '',
                            'text' => $hero_button_text,
                            'link' => $hero_button_link,
                            'target' => $hero_button_target,
                            'rel' => '',
                        ]);
                        ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Right Column - Image -->
            <div class="lg:w-1/2 relative">
                <!-- Main Image Container -->
                <div class="relative">
                    <?php if (!empty($right_image)) : ?>
                        <img
                            src="<?= esc_url($right_image['url']); ?>"
                            alt="<?= esc_attr($right_image['alt']); ?>"
                            class="rounded-lg shadow-2xl w-full max-w-md mx-auto img_anim">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>