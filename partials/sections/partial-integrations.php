<?php
$section_integrations = get_field($args['field_name']);
$class_container = $args['class_container'] ?? 'mb-24';

if ($section_integrations): ?>
    <div class="main-width <?= esc_attr($class_container); ?>">
        <!--Section Heading -->
        <?= get_template_part('partials/core/partial', 'section_heading_1', [
            'class_container' => 'mb-15 lg:mb-24',
            'icon' => $section_integrations['icon']['url'],
            'icon_heading' => $section_integrations['icon_heading'],
            'heading' => $section_integrations['heading'],
            'heading_desc' => $section_integrations['heading_desc'],
        ]); ?>
        <div class="flex flex-col lg:flex-row items-center justify-between lg:gap-20 3xl:gap-12">

            <?php
            if ($section_integrations['cards'] && is_array($section_integrations['cards'])):
                $delay = 100;
                foreach ($section_integrations['cards'] as $card):
                    $card_image = $card['image'] ?? '';
                    $card_heading = $card['heading'] ?? '';
                    $card_description = $card['description'] ?? '';

                    echo get_template_part('partials/core/partial', 'card_1', [
                        'class_container' => 'mb-10 lg:mb-0',
                        'image' => $card_image,
                        'heading' => $card_heading,
                        'description' => $card_description,
                        'aos_attributes' => 'data-cursor="inverse" data-aos="fade-down" data-aos-delay="' . esc_attr($delay) . '" data-aos-anchor-placement="top-bottom"',
                    ]);
                    $delay += 100;
                endforeach;
            endif; ?>
        </div>
    </div>
<?php endif; ?>