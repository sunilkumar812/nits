<?php
$awards = get_field($args['field_name']);
if (!empty($awards)) :
    $heading = $awards['heading'] ?? '';
?>
    <!-- Separator H3 -->
    <?= get_template_part('partials/core/partial', 'separator_h3', [
        'class_container' => ' px-4 max-w-5xl mx-auto mt-15 mb-15 lg:mt-20 lg:mb-10',
        'class_text' => 'text-xl md:text-xl font-semibold text-nitsSteelBlue text-center',
        'field_name' => $heading,
    ]); ?>
    <?php if (!empty($awards['icons'])) : ?>
        <div class="main-width mx-auto mb-15 lg:mb-[84px]">
            <div class="flex items-center mx-auto w-fit">
                <?php foreach ($awards['icons'] as $icon) :
                    $image = $icon['icon_image'] ?? '';
                ?>
                    <div class="aspect-[1/1]">
                        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="object-cover w-full h-full">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
<?php endif;
endif; ?>