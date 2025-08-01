<?php
$class_container = !empty($args['class_container']) ? $args['class_container'] : 'mb-24';
$icon = $args['icon'] ?? '';
$icon_alt = $args['icon_alt'] ?? '';
$icon_heading = $args['icon_heading'] ?? '';
$heading = $args['heading'] ?? '';
$heading_desc = $args['heading_desc'] ?? '';
?>

<div class="main-width <?= esc_attr($class_container); ?>">
    <div class="mx-auto flex flex-col gap-3 3xl:gap-4 items-center text-center">

        <?php if (!empty($icon) || !empty($icon_heading)) : ?>
            <div class="flex justify-center flex-col gap-3 3xl:gap-6 items-center">
                <?php if (!empty($icon)) : ?>
                    <img src="<?= esc_url($icon); ?>" alt="<?= esc_attr($icon_alt); ?>" class="3xl:max-w-[85px] 3xl:max-h-[85px] ld:max-w-[45px] lg:max-h-[45px]" data-aos="fade-up">
                <?php endif; ?>

                <?php if (!empty($icon_heading)) : ?>
                    <p class="text-nitsSteelBlue font-semibold text-base lg:text-lg 3xl:text-xl uppercase tracking-05em font-type2" data-aos="fade-up">
                        <?= esc_html($icon_heading); ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($heading) || !empty($heading_desc)) : ?>
            <div class="flex flex-col gap-4 items-center">
                <?php if (!empty($heading)) : ?>
                    <h2 class="text-3xl lg:text-4xl/10 3xl:text-5xl/15 font-bold text-nitsDarkBlue mx-auto lg:max-w-[663px] font-type1" data-aos="fade-up">
                        <?= esc_html($heading); ?>
                    </h2>
                <?php endif; ?>

                <?php if (!empty($heading_desc)) : ?>
                    <p class="text-base lg:text-base/6 3xl:text-lg/7 mx-auto lg:max-w-[949px] text-black font-roboto" data-aos="fade-up">
                        <?= esc_html($heading_desc); ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
</div>