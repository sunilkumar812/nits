<?php
$class_container =  isset($args['class_container']) ? $args['class_container'] : 'mb-24';
$icon = isset($args['icon']) ? $args['icon'] : '';
$icon_heading = isset($args['icon_heading']) ? $args['icon_heading'] : '';
$heading = isset($args['heading']) ? $args['heading'] : '';
$heading_desc = isset($args['heading_desc']) ? $args['heading_desc'] : '';
?>
<div class="main-width <?= $class_container; ?>">
    <div class="mx-auto flex flex-col gap-4 items-center text-center">
        <?php if ($icon != '' || $icon_heading != ''): ?>
            <div class="flex justify-center flex-col gap-6 items-center">
                <?php if ($icon != ''): ?>
                    <img src="<?= $icon; ?>" alt="<?= $icon_heading; ?>" class="max-w-[85px] max-h-[85px]">
                <?php endif; ?>
                <?php if ($icon_heading != ''): ?>
                    <p class="text-nitsSteelBlue font-semibold text-xl uppercase tracking-05em"><?= $icon_heading; ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($heading != '' || $heading_desc != ''): ?>
            <div class="flex flex-col gap-4 items-center">
                <?php if ($heading != ''): ?>
                    <h2 class="text-3xl lg:text-5xl/15 font-bold text-nitsDarkBlue mx-auto lg:max-w-[663px]"><?= $heading; ?></h2>
                <?php endif; ?>
                <?php if ($heading_desc != ''): ?>
                    <p class="text-md mx-auto lg:max-w-[949px] lg:text-lg/7 text-black font-roboto"><?= $heading_desc; ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>