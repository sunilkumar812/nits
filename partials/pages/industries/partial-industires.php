<?php
$industires = get_field($args['field_name']);
$heading = $industires['heading'] ?? '';
$in_cards = $industires['cards'] ?? [];
$class_container = $args['class_container'] ? '' : ' mb-16 lg:mb-24 mt-10 lg:mt-24';
?>

<div class="main-width relative <?= esc_attr($class_container); ?>">
    <!-- Separator H4 -->
    <?= get_template_part('partials/core/partial', 'separator_h4', [
        'class_container' => ' px-4 mb-10 lg:mb-15',
        'class_text' => 'text-2xl lg:text-4xl font-semibold text-nitsSteelBlue',
        'field_name' => $heading,
    ]); ?>

    <div class="grid grid-cols-1 lg:grid-cols-3 grid-flow-row justify-between gap-5.5 md:gap-13">
        <?php
        $delay = 100;
        foreach ($in_cards as $card):
            $card_image = $card['image'] ?? '';
            $card_heading = $card['heading'] ?? '';
            $card_description = $card['description'] ?? '';
        ?>
        <?= get_template_part('partials/core/partial', 'card_7', [
                'image' => $card_image,
                'heading' => $card_heading,
                'description' => $card_description,
                'class_container' => 'rounded-lg',
                'aos_attributes' => 'data-cursor="inverse" data-aos="fade-down" data-aos-delay="' . esc_attr($delay) . '" data-aos-anchor-placement="top-bottom"',
            ]);
            $delay += 100;
        endforeach;
        ?>
    </div>
</div>