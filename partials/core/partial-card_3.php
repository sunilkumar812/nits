<?php
$image = $args['image'] ?? '';
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
$name = $args['name'] ?? '';
$designation = $args['designation'] ?? '';
$class_container = $args['class_container'] ?? '';
$aos_attributes = $args['aos_attributes'] ?? '';
?>
<div class="transition-transform duration-300 hover:transform hover:scale-105<?= esc_attr($class_container); ?>" <?= $aos_attributes; ?>>
    <?php if (!empty($image)): ?>
        <img src="<?= esc_url($image); ?>" alt="<?= esc_attr($title); ?>" class="">
    <?php endif; ?>
    <div class="py-6 flex flex-col justify-between gap-5 lg:gap-7 3xl:gap-10">
        <div class="">
            <h3 class="mb-2 text-xl 3xl:text-2xl font-bold text-black font-type2 leading-8">
                <?= esc_html($title); ?>
            </h3>
            <p class="text-black font-roboto text-sm lg:text-base 3xl:text-base"><?= esc_html($description); ?></p>
        </div>
        <div class="flex items-center">
            <div class="">
                <p class="text-sm font-semibold text-black font-roboto"><?= esc_html(ucwords($name)); ?></p>
                <p class="text-sm text-gray-500"> <?= esc_html($designation); ?></p>
            </div>
        </div>
    </div>
</div>