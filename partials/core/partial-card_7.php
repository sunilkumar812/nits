<?php
$image = $args['image'] ?? '';
$image_url = $image['url'] ?? '';
$image_alt = $image['alt'] ?? 'Product image';
$heading = $args['heading'] ?? '';
$description = $args['description'] ?? '';
$permalink = $args['permalink'] ?? '#';
$class_container = $args['class_container'] ?? '';
$aos_attributes = $args['aos_attributes'] ?? '';
?>

<div class="bg-white flex-1 max-w-sm flex flex-col border <?= esc_attr($class_container); ?>" <?= $aos_attributes; ?> style="background: linear-gradient(180deg, #FFFFFF 0%, #F8FBFF 100%);border-color: #B2D9FF;">
    <?php if ($image_url): ?>
        <img src="<?= esc_url($image_url); ?>" alt="<?= esc_attr($image_alt); ?>" class="h-32 w-full object-cover rounded-t-lg">
    <?php endif; ?>

    <div class="p-10 flex flex-col flex-1">
        <?php if ($heading): ?>
            <h2 class="text-2xl lg:text-3xl font-bold text-blue-900 mb-2 mb-4"><?= esc_html($heading); ?></h2>
        <?php endif; ?>

        <?php if ($description): ?>
            <div class="card_7_description"><?= $description; ?></div>
        <?php endif; ?>
    </div>
</div>