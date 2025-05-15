<?php

/**
 * Template Name: Home Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nits
 */
get_header();
?>
<main id="primary" class="z-4 relative overflow-hidden">

    <!-- Hero Section -->
    <?= get_template_part('partials/sections/partial', 'hero'); ?>

    <!-- Separator H3 -->
    <?= get_template_part('partials/core/partial', 'separator_h3', [
        'class_container' => 'px-4 max-w-5xl mx-auto mt-15 mb-15 lg:mt-20 lg:mb-16',
        'class_text' => 'text-xl md:text-xl font-semibold text-nitsSteelBlue text-center',
        'text' => 'logo_slider_heading',
    ]); ?>

    <!-- Logos Slider Section -->
    <?= get_template_part('partials/sections/partial', 'logo_slider', [
        'class_container' => 'mx-auto lg:max-w-[1538px] mb-15 lg:mb-[84px]',
        'logo_slider_images' => 'logo_slider',
    ]); ?>

    <!-- Cards Stack Section -->
    <?php echo get_template_part('partials/sections/partial', 'card_stack', [
        'section_stack_cards' => 'section_stack_cards',
    ]);
    ?>

    <!-- Dealership Insights Section -->
    <?= get_template_part('partials/sections/partial', 'dealership_insights', [
        'field_name' => 'section_dealership_insights',
        'class_container' => 'mb-24 py-5 lg:py-10 xl:py-15',
    ]); ?>

    <!--Integrations Section -->
    <?= get_template_part('partials/sections/partial', 'integrations', [
        'field_name' => 'section_integrations',
        'class_container' => 'mb-24 relative z-5',
    ]); ?>

    <!-- Case Studies Section -->
    <?= get_template_part('partials/sections/partial', 'case_studies', [
        'field_name' => 'section_case_studies',
        'class_container' => 'mb-24 lg:mb-32',
    ]); ?>
</main>
<?php
get_footer();
