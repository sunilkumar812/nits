<?php
$card_image = $args['image'] ?? '';
$card_heading = $args['heading'] ?? '';
$card_description = $args['description'] ?? '';
$class_container = $args['class_container'] ?? '';
?>

<div class="flex flex-col gap-8 lg:gap-10 3xl:gap-12 <?= esc_attr($class_container); ?>">
    <div class="w-full flex justify-center">
        <?php if ($card_image): ?>
            <img src="<?= esc_url($card_image['url']); ?>" alt="<?= esc_attr($card_image['alt']) ?>" class="w-full h-auto">
        <?php endif; ?>
    </div>
    <div class="flex flex-col gap-3.5 lg:max-w-[310px] align-middle items-center mx-auto">
        <h3 class="text-lg lg:text-xl 3xl:text-2xl text-nitsDarkGray text-center"><?= $card_heading; ?></h3>
        <p class="text-sm lg:text-base text-black text-center"><?= $card_description; ?></p>
    </div>
</div>