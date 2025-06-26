<?php
$icon = $args['icon'] ?? '';
$icon_alt = $args['icon_alt'] ?? '';
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
$permalink = $args['permalink'] ?? '#';

$class_container = $args['class_container'] ?? '';
$aos_attributes = $args['aos_attributes'] ?? '';
?>

<div class="card_4">
    <div class="card_4_cont">
        <?php if (!empty($icon)) : ?>
            <!-- Product Image -->
            <div class="card_4_img_cont">
                <img src="<?= esc_url($icon); ?>" alt="<?= esc_attr($icon_alt); ?>" class="card_4_icon  max-w-[30%] lg:max-w-full">
            </div>
        <?php endif; ?>

        <?php if (!empty($title)) : ?>
            <!-- Product Title -->
            <h3 class="card_4_title"><?= esc_html($title); ?></h3>
        <?php endif; ?>

        <?php if (!empty($description)) : ?>
            <!-- Product Description -->
            <p class="card_4_des text-md lg:text-lg text-nitsDarkGray"><?= esc_html($description); ?></p>
        <?php endif; ?>
    </div>

    <!-- Button -->
    <a href="<?= esc_url($permalink); ?>" class="card_4_btn btn-bgBlueGrad">
        View Solutions
        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.16602 10.5H15.8327" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M10 4.66666L15.8333 10.5L10 16.3333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </a>
</div>