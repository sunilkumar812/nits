<?php
$card_image = $args['image'] ?? '';
$card_heading = $args['heading'] ?? '';
$card_description = $args['description'] ?? '';
$class_container = $args['class_container'] ?? '';
$aos_attributes = $args['aos_attributes'] ?? '';
?>

<div class="flex flex-col gap-5 lg:gap-5 3xl:gap-5 <?= esc_attr($class_container); ?>">
    <div class="w-full flex justify-center aspect-[5/4] overflow-hidden" <?= $aos_attributes; ?>>
        <?php if ($card_image): ?>
            <div class="nits-scale-110 w-full">
                <img class="w-full object-cover" src="<?= esc_url($card_image['url']); ?>" alt="<?= esc_attr($card_image['alt']) ?>">
            </div>
        <?php endif; ?>
    </div>

    <div class="flex flex-col gap-3.5 lg:max-w-[360px] align-middle items-center mx-auto">
        <h3 class="text-lg lg:text-xl 3xl:text-2xl text-nitsDarkGray text-center font-type2"><?= $card_heading; ?></h3>
        <p class="text-sm lg:text-base text-black text-center"><?= $card_description; ?></p>
    </div>
</div>