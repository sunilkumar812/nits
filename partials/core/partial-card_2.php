<?php
$title = $args['title'] ?? '';
$permalink = $args['permalink'] ?? '';
$excerpt = $args['excerpt'] ?? '';
$thumbnail = $args['thumbnail'] ?? '';
$categories = $args['categories'] ?? [];
$date = $args['date'] ?? '';
$author_name = $args['author_name'] ?? '';
$avatar = $args['avatar'] ?? '';
$read_time = $args['read_time'] ?? 1;
$class_container = $args['class_container'] ?? '';
$aos_attributes = $args['aos_attributes'] ?? '';
?>

<div class="transition-transform duration-300 hover:transform hover:scale-105<?= esc_attr($class_container); ?>" <?= $aos_attributes; ?>>
    <?php if (!empty($thumbnail)): ?>
        <img src="<?= esc_url($thumbnail); ?>" alt="<?= esc_attr($title); ?>" class="w-full h-48 object-cover">
    <?php endif; ?>

    <div class="p-6">
        <div class="text-sm font-semibold text-blue-600 uppercase tracking-wide">
            <?= !empty($categories) ? esc_html($categories[0]->name) : ''; ?>
        </div>

        <h3 class="mt-2 text-xl font-semibold text-gray-900">
            <a href="<?= esc_url($permalink); ?>"><?= esc_html($title); ?></a>
        </h3>

        <p class="mt-3 text-gray-600"><?= esc_html($excerpt); ?></p>

        <div class="mt-4 flex items-center">
            <?php if (!empty($avatar)): ?>
                <img src="<?= esc_url($avatar); ?>" alt="<?= esc_attr($author_name); ?>" class="h-8 w-8 rounded-full">
            <?php endif; ?>
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-900"><?= esc_html($author_name); ?></p>
                <p class="text-sm text-gray-500"><?= esc_html($date); ?> · <?= esc_html($read_time); ?> min read</p>
            </div>
        </div>
    </div>
</div>