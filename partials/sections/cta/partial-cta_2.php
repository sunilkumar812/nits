<?php
$cta_solutions = get_field($args['field_name']);
$sc_image = $cta_solutions['image'] ?? '';
$sc_image_url = $sc_image['url'] ?? '';
$sc_image_alt = $sc_image['alt'] ?? 'Solutions Image';

$cs_heading = $cta_solutions['heading'] ?? '';
$cs_description = $cta_solutions['description'] ?? '';

$cs_button = $cta_solutions['button'] ?? [];
$cs_button_text = $cs_button['title'] ?? '';
$cs_button_link = $cs_button['url'] ?? '#';
$cs_button_target = $cs_button['target'] ?? '_self';
?>

<?php if ($cta_solutions) : ?>
    <div class="bg-[#F0F9FF]">
        <div class="main-width lg:flex items-center justify-between px-6 md:px-24 py-16 w-full gap-8">
            <div class="flex items-start space-x-6 mb-8 lg:mb-0">
                <?php if ($sc_image_url) : ?>
                    <img src="<?= esc_url($sc_image_url); ?>" alt="<?= esc_attr($sc_image_alt); ?>" class="w-16 h-16 object-contain rounded-md shadow-lg" />
                <?php endif; ?>

                <div>
                    <?php if ($cs_heading) : ?>
                        <h2 class="text-2xl lg:text-4xl font-bold text-nitsDarkBlue leading-tight mb-3 lg:mb-4 max-w-full lg:max-w-[345px] uppercase">
                            <?= esc_html($cs_heading); ?>
                        </h2>
                    <?php endif; ?>

                    <?php if ($cs_description) : ?>
                        <p class="mt-2 text-base text-[#1E1E1E] max-w-md">
                            <?= esc_html($cs_description); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <?php if (!empty($cs_button_text)) : ?>
                <div class="text-center lg:text-left">
                    <?= get_template_part('partials/core/partial', 'button_primary', [
                        'class' => 'inline-block btn-primary px-3 py-2 lg:px-[22px] lg:py-[17px] rounded-md text-md lg:text-xl font-bold hover:border-1 hover:boreder-nitsLightBlue',
                        'text' => esc_html($cs_button_text),
                        'link' => esc_url($cs_button_link),
                        'target' => esc_attr($cs_button_target),
                        'rel' => '',
                    ]); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>