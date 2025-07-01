<?php
$split_content = get_field($args['field_name']);

$sc_image = $split_content['image'] ?? '';

$sc_heading = $split_content['heading'] ?? '';
$sc_description = $split_content['description'] ?? '';

$sc_button = $split_content['button'] ?? '';
$sc_button_text = $sc_button['title'] ?? '';
$sc_button_link = $sc_button['url'] ?? '';
$sc_button_target = $sc_button['target'] ?? '_self';

$class_container = $args['class_container'] ?? '';

if (is_array($split_content) && !empty(array_filter($split_content))): ?>
    <div class="main-width flex flex-col lg:flex-row gap-4 lg:gap-20 relative<?= $class_container; ?>">
        <div class="w-full lg:w-6/10 relative">
            <?php if (!empty($sc_image)) : ?>
                <img
                    src="<?= esc_url($sc_image['url']); ?>"
                    alt="<?= esc_attr($sc_image['alt']); ?>"
                    class="rounded-lg shadow-2xl w-full max-w-full mx-auto">
            <?php endif; ?>
        </div>
        <div class="w-full lg:w-4/10 relative flex items-center">
            <div class="">
                <?php if (!empty($sc_heading)) : ?>
                    <h2 class="text-nitsDarkBlue text-2xl lg:text-4xl font-bold font-type1 mb-7 lg:mb-12"><?= esc_html($sc_heading); ?></h2>
                <?php endif; ?>
                <?php if (!empty($sc_description)) : ?>
                    <div class="card_6_description">
                        <?= $sc_description; ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($sc_button_text)) : ?>
                    <div class="mt-10">
                        <!-- CTA Button -->
                        <?= get_template_part('partials/core/partial', 'button_primary', [
                            'class' => 'inline-block btn-primary px-3 py-2 lg:px-[22px] lg:py-[17px] rounded-md text-md lg:text-xl font-bold border-1 hover:border-1 hover:boreder-nitsLightBlue',
                            'text' => $sc_button_text,
                            'link' => $sc_button_link,
                            'target' => $sc_button_target,
                            'rel' => '',
                        ]); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>