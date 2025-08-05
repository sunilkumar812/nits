<?php
$why_choose = get_field($args['field_name']) ?? [];

$wy_left_image = $why_choose['left_image'] ?? '';
$wy_left_image_alt = $wy_left_image['alt'] ?? 'Why Choose Us';
$wy_left_image_url = $wy_left_image['url'] ?? '';

$wy_right_section = $why_choose['right_section'] ?? [];
$wy_right_heading = $wy_right_section['heading'] ?? '';
$wy_right_description = $wy_right_section['description'] ?? '';
$wy_right_features = $wy_right_section['features'] ?? [];
$class_container = $args['class_container'] ?? '';
?>

<?php if (!empty($why_choose)) : ?>
    <div class="main-width mb-15 lg:mb-30 <?= esc_attr($class_container); ?>">
        <div class="flex flex-col lg:flex-row gap-10 items-center">
            <!-- Left Image -->
            <?php if (!empty($wy_left_image_url)) : ?>
                <div class="w-full lg:w-1/2 flex justify-center">
                    <img src="<?= esc_url($wy_left_image_url); ?>"
                        alt="<?= esc_attr($wy_left_image_alt); ?>"
                        class="max-w-[500px] max-h-[500px] w-full h-auto object-contain">
                </div>
            <?php endif; ?>

            <!-- Right Content -->
            <div class="w-full lg:w-1/2">
                <?php if (!empty($wy_right_heading)) : ?>
                    <h2 class="text-3xl lg:text-5xl font-bold text-nitsBluePlus mb-6 lg:mb-8 font-type1 max-w-[583px] lg:leading-[3.5rem]">
                        <?= esc_html($wy_right_heading); ?>
                    </h2>
                <?php endif; ?>
                <?php if (!empty($wy_right_heading)) : ?>
                    <p class="mb-6 lg:mb-14 text-base text-[#1E1E1E] max-w-[583px]">
                        <?= esc_html($wy_right_description); ?>
                    </p>
                <?php endif; ?>
                <?php if (!empty($wy_right_features) && is_array($wy_right_features)) : ?>
                    <div class="flex flex-row flex-wrap gap-10 lg:gap-15">
                        <?php foreach ($wy_right_features as $feature) :
                            $icon = $feature['icon'] ?? [];
                            $icon_url = $icon['url'] ?? '';
                            $icon_alt = $icon['alt'] ?? 'Feature Icon';
                            $text = $feature['text'] ?? '';
                        ?>
                            <?php if (!empty($icon_url) || !empty($text)) : ?>
                                <div class="flex flex-col items-start gap-3">
                                    <?php if (!empty($icon_url)) : ?>
                                        <img src="<?= esc_url($icon_url); ?>" alt="<?= esc_attr($icon_alt); ?>" class="w-6 h-6">
                                    <?php endif; ?>
                                    <?php if (!empty($text)) : ?>
                                        <span class="text-lg lg:text-xl font-medium text-nitsDarkBlue max-w-[140px]"><?= esc_html($text); ?></span>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>