<?php
$image = $args['image'] ?? '';
$image_url = $image['url'] ?? '';
$image_alt = $image['alt'] ?? 'Product image';
$title = $args['title'] ?? '';

$description = $args['description'] ?? '';
$permalink = $args['permalink'] ?? '#';

$class_container = $args['class_container'] ?? '';
$aos_attributes = $args['aos_attributes'] ?? '';
?>

<div class="px-6 py-8 lg:px-12 lg:py-20 bg-[#f6fbffa6] rounded border border-[#B2D9FF]<?= esc_attr($class_container); ?>" <?= $aos_attributes; ?>>
    <div class="flex flex-col lg:flex-row gap-6 lg:gap-15 ">
        <?php if (!empty($image)) : ?>
            <div class="">
                <img src="<?= esc_url($image_url); ?>" alt="<?= esc_attr($image_alt); ?>" class="max-w-[100px] lg:max-w-[170px]">
            </div>
        <?php endif; ?>
        <div class="flex flex-col justify-center gap-5.5">
            <div>
                <?php if (!empty($title)) : ?>
                    <h3 class="text-nitsDarkBlue text-2xl mb-3"><?= esc_html($title); ?></h3>
                <?php endif; ?>

                <?php if (!empty($description)) : ?>
                    <div class="card_6_description">
                        <?= $description; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>