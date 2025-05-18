<?php
$class_container = $args['class_container'] ? $args['class_container'] : '';
$class_text = $args['class_text'] ? $args['class_text'] : '';
$text = $args['field_name'] ? $args['field_name'] : '';

if (!empty($text)):
?>
    <div class="main-width relative z-4<?= $class_container ?>">
        <div class="flex items-center justify-center gap-4 lg:gap-16">
            <div class="min-w-4 lg:min-w-[103px] h-px bg-nitsBluePlus"></div>
            <h3 class="<?= $class_text ?> font-type2"><?= esc_html($text); ?></h3>
            <div class="min-w-4 lg:min-w-[103px] h-px bg-nitsBluePlus"></div>
        </div>
    </div>
<?php endif; ?>