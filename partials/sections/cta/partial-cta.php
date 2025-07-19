<?php
$field_name = $args['field_name'];
$class_container = $args['class_container'] ?? '';
$use_option = isset($args['option']) && $args['option'] === 'yes';

$cta = $use_option ? get_field($field_name, 'option') : get_field($field_name);

$heading = $cta['heading'] ?? '';
$description = $cta['description'] ?? '';
$button_1 = $cta['button_1'] ?? [];
$button_2 = $cta['button_2'] ?? [];
$right_image = $cta['right_image'] ?? '';
$class_container = $args['class_container'] ?? '';
?>
<?php if (!empty($heading)) : ?>
    <div class="hero-section flex items-center<?= $class_container; ?>"
        style="background: radial-gradient(163.95% 163.95% at 38.75% -26.63%, #2387FF 51.42%, #155199 100%);">
        <div class="container mx-auto flex flex-col md:flex-row items-center">

            <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                <?php if (!empty($heading)) : ?>
                    <h1 class="text-2xl lg:text-5xl font-semibold mb-6 font-type1">
                        <?= esc_html($heading); ?>
                    </h1>
                <?php endif; ?>

                <?php if (!empty($description)) : ?>
                    <p class="text-xl mb-8 text-gray-200">
                        <?= esc_html($description); ?>
                    </p>
                <?php endif; ?>

                <div class="flex flex-row gap-4">
                    <?php if (!empty($button_1['title']) && !empty($button_1['url'])) : ?>
                        <?= get_template_part('partials/core/partial', 'button_primary', [
                            'class' => 'inline-block bg-gradient-277 px-3 py-2 lg:px-[22px] lg:py-[17px] rounded-md text-md lg:text-lg font-semibold',
                            'text' => $button_1['title'],
                            'link' => $button_1['url'],
                            'target' => $button_1['target'] ?? '',
                            'rel' => '',
                        ]); ?>
                    <?php endif; ?>

                    <?php if (!empty($button_2['title']) && !empty($button_2['url'])) : ?>
                        <?= get_template_part('partials/core/partial', 'button_primary', [
                            'class' => 'inline-block bg-white text-nitsDarkBlue px-3 py-2 lg:px-[22px] lg:py-[17px] rounded-md text-md lg:text-lg font-semibold',
                            'text' => $button_2['title'],
                            'link' => $button_2['url'],
                            'target' => $button_2['target'] ?? '',
                            'rel' => '',
                        ]); ?>
                    <?php endif; ?>
                </div>
            </div>

            <?php if (!empty($right_image['url'])) : ?>
                <div class="md:w-1/2 flex justify-center">
                    <img
                        src="<?= esc_url($right_image['url']); ?>"
                        alt="<?= esc_attr($right_image['alt'] ?? 'CTA image'); ?>"
                        class="max-w-full md:max-w-md lg:max-w-lg">
                </div>
            <?php endif; ?>

        </div>
    </div>
<?php endif; ?>