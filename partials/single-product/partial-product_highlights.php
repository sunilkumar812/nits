<?php
$product_higlights = get_field($args['field_name']);
$ph_heading = $product_higlights['heading'] ?? '';
$ph_cards = $product_higlights['card'] ?? [];
$class_container = $args['class_container'] ?? '';
?>

<div class="<?= esc_attr($class_container); ?>">
    <?php if (!empty($ph_heading)): ?>
        <div class="main-width mb-8 lg:mb-20">
            <h2 class="text-nitsDarkBlue text-2xl lg:text-4xl lg:max-w-[25%] font-bold"><?= esc_html($ph_heading); ?></h2>
        </div>
    <?php endif; ?>
    <div class="main-width flex flex-row justify-between flex-wrap">
        <?php
        $delay = 100;
        foreach ($ph_cards as $card):
            $card_image = $card['image'] ?? '';
            $card_heading = $card['heading'] ?? '';
            $card_description = $card['description'] ?? '';
            echo get_template_part('partials/core/partial', 'card_5', [
                'image' => $card_image,
                'heading' => $card_heading,
                'description' => $card_description,
                'class_container' => '',
                'aos_attributes' => 'data-cursor="inverse" data-aos="fade-down" data-aos-delay="' . esc_attr($delay) . '" data-aos-anchor-placement="top-bottom"',
            ]);
            $delay += 100;
        endforeach;
        ?>
    </div>
</div>