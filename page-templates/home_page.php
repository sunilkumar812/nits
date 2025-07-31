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

<main id="primary" class="relative">

    <!-- Hero Section -->
    <?= get_template_part('partials/sections/hero/partial', 'hero'); ?>

    <!-- Logos Slider Section -->
    <?= get_template_part('partials/sections/partial', 'logo_slider', [
        'class_container' => 'mx-auto lg:max-w-[1538px] mb-15 lg:mb-[84px]',
        'field_name' => 'logo_slider',
    ]); ?>

    <!--Solutions Sections -->
    <?= get_template_part('partials/sections/partial', 'solutions', [
        'field_name' => 'section_solutions',
        'class_container' => 'lg:mb-18 3xl:mb-24 relative',
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
        'class_container' => 'mb-24 relative mb-10 lg:mb-16 3xl:mb-20',
    ]); ?>

    <!-- Case Studies Section -->
    <?= get_template_part('partials/sections/partial', 'case_studies', [
        'field_name' => 'section_case_studies',
        'class_container' => 'mb-24 lg:mb-32',
    ]); ?>

    <!-- Video Section -->
    <?= get_template_part('partials/sections/partial', 'video', [
        'field_name' => 'section_video',
        'class_container' => ' mb-12 lg:mb-24 relative',
    ]); ?>

    <!-- Aards Section -->
    <?= get_template_part('partials/sections/partial', 'awards', [
        'field_name' => 'section_awards',
        'class_container' => 'mb-15 lg:mb-24 relative',
    ]); ?>

    <!--Blog Section -->
    <?= get_template_part('partials/sections/partial', 'blog_cards', [
        'field_name' => 'section_blog_cards',
        'class_container' => '3xl:mb-60 lg:mb-40 mb-20 relative',
    ]); ?>

    <!-- Contact Form Section -->
    <?= get_template_part('partials/sections/partial', 'contact_form', [
        'field_name' => 'section_contact',
        'class_container' => ' mb-24',
    ]); ?>

</main>
<?php
get_footer();
