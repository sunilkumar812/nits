<?php
$class_container =  isset($args['class_container']) ? $args['class_container'] : 'mb-24';
$heading3 = isset($args['heading3']) ? $args['heading3'] : '';
$class_heading3 = isset($args['class_heading3']) ? $args['class_heading3'] : '';
$heading2 = isset($args['heading2']) ? $args['heading2'] : '';
$class_heading2 = isset($args['class_heading2']) ? $args['class_heading2'] : '';
$paragraph = isset($args['paragraph']) ? $args['paragraph'] : '';
$class_paragraph = isset($args['class_paragraph']) ? $args['class_paragraph'] : '';

?>
<div class="main-width <?= $class_container; ?>">
    <div class="mx-auto">
        <?php if ($heading3): ?>
            <h3 class="<?= $class_heading3; ?>"><?= esc_html($heading3); ?></h3>
        <?php endif;
        if ($heading2): ?>
            <h2 class="<?= $class_heading2; ?>"><?= esc_html($heading2); ?></h2>
        <?php endif;
        if ($paragraph): ?>
            <p class="<?= $class_paragraph; ?>"><?= esc_html($paragraph); ?></p>
        <?php endif; ?>
    </div>
</div>