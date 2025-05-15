<?php
$class_container =  isset($args['class_container']) ? $args['class_container'] : '';
$heading_1 = isset($args['heading_1']) ? $args['heading_1'] : '';
$class_heading_1 = isset($args['class_heading_1']) ? $args['class_heading_1'] : '';
$heading_2 = isset($args['heading_2']) ? $args['heading_2'] : '';
$class_heading_2 = isset($args['class_heading_2']) ? $args['class_heading_2'] : '';
$heading_desc = isset($args['heading_desc']) ? $args['heading_desc'] : '';
$class_heading_desc = isset($args['class_heading_desc']) ? $args['class_heading_desc'] : '';

?>
<div class="main-width <?= $class_container; ?>">
    <div class="mx-auto">
        <?php if ($heading_1): ?>
            <h3 class="text-sm lg:text-lg uppercase tracking-[0.3em] font-type2 <?= $class_heading_1; ?>"><?= esc_html($heading_1); ?></h3>
        <?php endif;
        if ($heading_2): ?>
            <h2 class="text-2xl lg:text-3xl font-type1 <?= $class_heading_2; ?>"><?= esc_html($heading_2); ?></h2>
        <?php endif;
        if ($heading_desc): ?>
            <p class="text-sm lg:text-base font-roboto <?= $class_heading_desc; ?>"><?= esc_html($heading_desc); ?></p>
        <?php endif; ?>
    </div>
</div>