<?php
$faq = get_field($args['field_name']);
$heading_1 = $faq['heading'] ?? '';
$description = $faq['description'] ?? '';
?>
<div class="bg-[#EEF8FF] py-8 lg:py-24">
    <div class="main-width">
        <div class="grid lg:grid-cols-2 gap-12 ">
            <!-- Left Column -->
            <div class="space-y-6 max-w-[472px]">
                <?php echo get_template_part('partials/core/partial', 'section_heading_2', [
                    'class_container' => '3xl:max-w-[520px] lg:max-w-[471px]',
                    'heading_1' => '',
                    'class_heading_1' => '3xl:text-xl font-semibold text-nitsSteelBlue mb-2 lg:mb-3 3xl:mb-3.5',
                    'heading_2' => $heading_1,
                    'class_heading_2' => '3xl:text-[45px] lg:text-4xl text-xl font-bold text-nitsPrimary mb-2 lg:mb-4 3xl:mb-5',
                    'heading_desc' => $description,
                    'class_heading_desc' => '',
                ]); ?>
            </div>
            <!-- Right Column -->
            <?= get_template_part('partials/sections/partial', 'faq', [
                'field_name' => $faq,
                'class_container' => '',
            ]);
            ?>

        </div>
    </div>
</div>