<?php
$solution_archive_why_choose = get_field($args['field_name'], 'option');

$sw_left_image = $solution_archive_why_choose['left_image'] ?? '';
$sw_left_image_alt = $sw_left_image['alt'] ?? 'Why Choose Us';
$sw_left_image_url = $sw_left_image['url'] ?? '';

$sw_right_section = $solution_archive_why_choose['right_section'] ?? [];
$sw_right_heading = $sw_right_section['heading'] ?? '';
$sw_right_features = $sw_right_section['features'] ?? [];
?>

<?php if (!empty($solution_archive_why_choose)) : ?>
    <div class="main-width mb-15 lg:mb-30">
        <div class="flex flex-col lg:flex-row gap-10 items-center">
            <!-- Left Image -->
            <?php if (!empty($sw_left_image_url)) : ?>
                <div class="w-full lg:w-1/2 flex justify-center">
                    <img src="<?= esc_url($sw_left_image_url); ?>"
                        alt="<?= esc_attr($sw_left_image_alt); ?>"
                        class="max-w-[500px] max-h-[500px] w-full h-auto object-contain">
                </div>
            <?php endif; ?>

            <!-- Right Content -->
            <div class="w-full lg:w-1/2">
                <?php if (!empty($sw_right_heading)) : ?>
                    <h2 class="text-3xl lg:text-5xl font-bold text-nitsBluePlus mb-6 lg:mb-16 font-type1 max-w-[280px] leading-[3.5rem]">
                        <?= esc_html($sw_right_heading); ?>
                    </h2>
                <?php endif; ?>

                <?php if (!empty($sw_right_features) && is_array($sw_right_features)) : ?>
                    <div class="flex flex-col lg:flex-row flex-wrap gap-10 lg:gap-15">
                        <?php foreach ($sw_right_features as $feature) :
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