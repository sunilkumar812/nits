<?php
$class_container = $args['class_container'];
$class_text = $args['class_text'];
$text = isset($args['text']) ? $args['text'] : 'Headline Text';
?>
<div class="main-width relative z-4 <?= $class_container ?>">
    <div class="flex items-center justify-center gap-4 lg:gap-16">
        <div class="min-w-4 lg:min-w-[103px] h-px bg-nitsBluePlus"></div>
        <h3 class="<?= $class_text ?>"><?= get_field($text); ?></h3>
        <div class="min-w-4 lg:min-w-[103px] h-px bg-nitsBluePlus"></div>
    </div>
</div>