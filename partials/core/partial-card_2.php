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

    <div class="p-6 flex flex-col justify-between gap-5 lg:gap-7 3xl:gap-10">
        <div class="">
            <div class="text-sm 3xl:text-medium font-semibold text-nitsBlue uppercase tracking-[0.3em] font-type2 mb-2">
                <?= !empty($categories) ? esc_html($categories[0]->name) : ''; ?>
            </div>

            <h3 class="mb-2 text-xl 3xl:text-2xl font-bold text-black font-type2 leading-8">
                <a href="<?= esc_url($permalink); ?>"><?= esc_html($title); ?></a>
            </h3>
            <p class="text-black font-roboto text-sm lg:text-base 3xl:text-base"><?= esc_html($excerpt); ?></p>
        </div>
        <div class="flex items-center">
            <?php if (!empty($avatar)): ?>
                <img src="<?= esc_url($avatar); ?>" alt="<?= esc_attr($author_name); ?>" class="h-8 w-8 rounded-full">
            <?php endif; ?>
            <div class="ml-3">
                <p class="text-sm font-semibold text-black font-roboto"><?= esc_html(ucwords($author_name)); ?></p>
                <p class="text-sm text-gray-500"><?= esc_html($date); ?> · <?= esc_html($read_time); ?> min read</p>
            </div>
        </div>
    </div>
</div>