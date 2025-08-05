<?php
$class_container = $args['class_container'] ? $args['class_container'] : '';
$class_text = $args['class_text'] ? $args['class_text'] : '';
$text = $args['field_name'] ? $args['field_name'] : '';

if (!empty($text)):
?>
    <div class="relative <?= esc_attr($class_container); ?>">
        <div class="flex items-center gap-4 lg:gap-16">
            <h3 class="<?= esc_attr($class_text); ?> font-type2 whitespace-nowrap">
                <?= esc_html($text); ?>
            </h3>
            <span class="h-px bg-nitsBluePlus flex-1"></span>
        </div>
    </div>
<?php endif; ?>