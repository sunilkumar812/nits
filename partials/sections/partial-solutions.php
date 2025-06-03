<?php
$solutions = get_field($args['field_name']);
$class_container = $args['class_container'] ?? 'mb-24';
$button = $solutions['button'] ?? '';
?>
<!--Heading -->
<?= get_template_part('partials/core/partial', 'section_heading_1', [
    'class_container' => 'lg:mb-12 3xl:mb-24',
    'icon' => $solutions['icon']['url'],
    'icon_alt' => $solutions['icon']['alt'],
    'icon_heading' => $solutions['icon_heading'],
    'heading' => $solutions['heading'],
    'heading_desc' => $solutions['heading_desc'],
]); ?>


<?php if (is_array($solutions['cards']) && !empty(array_filter($solutions['cards']))):
?>
    <div class="main-width <?= esc_attr($class_container); ?>">
        <!-- <div class="flex flex-col lg:flex-row items-center justify-between lg:gap-20 3xl:gap-12"> -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 grid-flow-row justify-between gap-5.5 md:gap-13">
            <?php
            $delay = 100;
            foreach ($solutions['cards'] as $card):
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
            ?>
        </div>
        <?php if (is_array($button) && !empty($button['url']) && !empty($button['title'])): ?>
            <!-- CTA Button -->
            <div class="flex justify-center">
                <?= get_template_part('partials/core/partial', 'button_primary', [
                    'class' => 'btn-primary px-[22px] py-[17px] mt-5 lg:mt-10 3xl:mt-15 rounded-md text-xl font-bold border border-1 hover:border-1 hover:boreder-nitsLightBlue',
                    'text' => $button['title'],
                    'link' =>  $button['url'],
                ]); ?>
            </div>
        <?php endif; ?>
    </div>

<?php endif;
?>