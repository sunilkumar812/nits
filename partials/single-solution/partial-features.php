<?php
$solution_features = get_field($args['field_name']);
$sf_heading = $solution_features['heading'] ?? '';
$sf_cards = $solution_features['cards'] ?? [];
$class_container = $args['class_container'] ?? '';
if (!empty($sf_cards)):
?>

    <div class="<?= esc_attr($class_container); ?>">
        <?php if (!empty($sf_heading)): ?>
            <div class="main-width mb-8 lg:mb-20">
                <h2 class="text-nitsDarkBlue text-2xl lg:text-4xl lg:max-w-[25%] font-bold"><?= esc_html($sf_heading); ?></h2>
            </div>
        <?php endif; ?>
        <div class="main-width grid grid-cols-1 lg:grid-cols-2 grid-flow-row justify-between gap-5.5 md:gap-13">
            <?php

            $delay = 100;
            foreach ($sf_cards as $card):
                $card_image = $card['image'] ?? '';
                $card_title = $card['title'] ?? '';
                $card_description = $card['description'] ?? '';
                echo get_template_part('partials/core/partial', 'card_6', [
                    'image' => $card_image,
                    'title' => $card_title,
                    'description' => $card_description,
                    'class_container' => '',
                    'aos_attributes' => 'data-cursor="inverse" data-aos="fade-down" data-aos-delay="' . esc_attr($delay) . '" data-aos-anchor-placement="top-bottom"',
                ]);
                $delay += 100;
            endforeach;
            ?>
        </div>
    </div>
<?php
endif; ?>