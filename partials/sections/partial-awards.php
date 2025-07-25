<?php
$awards = get_field($args['field_name']);
$class_container = $args['class_container'] ? $args['class_container'] : '';
if (!empty($awards)) :
    $heading = $awards['heading'] ?? '';
?>
    <!-- Separator H3 -->
    <?= get_template_part('partials/core/partial', 'separator_h3', [
        'class_container' => ' px-4 max-w-5xl mx-auto mb-15',
        'class_text' => 'text-xl md:text-xl font-semibold text-nitsSteelBlue text-center',
        'field_name' => $heading,
    ]); ?>
    <!-- <?php // if (!empty($awards['icons'])) : 
            ?>
        <div class="main-width mx-auto mb-15 lg:mb-[84px]">
            <div class="flex items-center mx-auto w-fit">
                <?php // foreach ($awards['icons'] as $icon) :
                // $image = $icon['icon_image'] ?? '';
                ?>
                    <div class="aspect-[1/1]">
                        <img src="<?php // echo esc_url($image['url']); 
                                    ?>" alt="<?php // echo esc_attr($image['alt']); 
                                                ?>" class="object-cover w-full h-full">
                    </div>
                <?php //endforeach; 
                ?>
            </div>
        </div> -->
    <?php // endif; 
    ?>


    <?php
    if (!empty($awards['icons'])) :  ?>
        <div class="main-width <?= $class_container; ?>">
            <div class="marquee3k" data-speed="0.9">
                <div class="whitespace-nowrap">
                    <div class="flex items-center w-max">
                        <?php foreach ($awards['icons'] as $icon) :
                            $image = $icon['icon_image'] ?? '';
                        ?>
                            <div class="flex-auto mx-2.5 lg:mx-10">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="object-contain scale-75 lg:scale-90">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
<?php endif;
endif; ?>