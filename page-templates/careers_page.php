<?php

/**
 * Template Name: Careers Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nits
 */
get_header(); ?>

<main id="primary" class="z-4 relative">
    <!-- Hero Section -->
    <?= get_template_part('partials/sections/hero/partial', 'hero_5', [
        'field_name' => 'Hero',
        'class_container' => ' pt-30 pb-15 lg:pt-40 lg:pb-28',
        'class_image' => '',
    ]); ?>

    <!-- Workplace Highlights Section -->
    <?= get_template_part('partials/pages/careers/partial', 'workplace_highlights', [
        'field_name' => 'workplace_highlights',
    ]); ?>

    <!-- Gallery Section -->
    <?= get_template_part('partials/sections/partial', 'gallery', [
        'field_name' => 'gallery',
        'class_container' => '',
    ]); ?>

    <!-- Jobs Section -->
    <?= get_template_part('partials/sections/partial', 'jobs', [
        'field_name' => 'jobs',
        'class_container' => 'bg-[#F0F9FF] py-16',
    ]); ?>

    <!-- CTA Section -->
    <?= get_template_part('partials/sections/cta/partial', 'cta', [
        'field_name' => 'cta',
        'class_container' => ' text-white px-4 lg:px-16 pb-0 pt-10',
    ]); ?>

</main>

<?php get_footer(); ?>