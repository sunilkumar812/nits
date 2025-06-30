<?php
$card_image = $args['image'] ?? '';
$card_heading = $args['heading'] ?? '';
$card_description = $args['description'] ?? '';
$class_container = $args['class_container'] ?? '';
$aos_attributes = $args['aos_attributes'] ?? '';
?>
<div class="mb-12 lg:mb-0<?= esc_attr($class_container); ?>">
    <div class="" <?= $aos_attributes; ?>>
        <?php if ($card_image): ?>
            <div class="mb-6 lg:mb-10">
                <img class="" src="<?= esc_url($card_image['url']); ?>" alt="<?= esc_attr($card_image['alt']) ?>">
            </div>
        <?php endif; ?>

        <div class="lg:max-w-[360px] align-middle mx-auto">
            <h3 class="text-lg lg:text-xl 3xl:text-2xl text-nitsDarkBlue font-type2 mb-4 lg:mb-6"><?= $card_heading; ?></h3>
            <p class="text-sm lg:text-base text-black"><?= $card_description; ?></p>
        </div>
    </div>
</div>