<?php
$card_image = $args['image'] ?? '';
$card_heading = $args['heading'] ?? '';
$card_description = $args['description'] ?? '';
$class_container = $args['class_container'] ?? '';
?>

<div class="flex flex-col gap-12 <?= esc_attr($class_container); ?>">
    <div class="w-full flex justify-center">
        <?php if ($card_image): ?>
            <img src="<?= esc_url($card_image['url']); ?>" alt="<?= esc_attr($card_image['alt']) ?>" class="w-full h-auto">
        <?php endif; ?>
    </div>
    <div class="flex flex-col gap-3.5">
        <h3 class="text-2xl text-nitsDarkGray"><?= $card_heading; ?></h3>
        <p class="text-base text-black"><?= $card_description; ?></p>
    </div>
</div>