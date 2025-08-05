<?php

/**
 * Template Name: Industries Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nits
 */
get_header(); ?>


<!-- Hero Section -->
<?= get_template_part('partials/sections/hero/partial', 'hero_6', [
    'field_name' => 'hero',
    'class_container' => ' pt-30 pb-15 lg:pt-40 lg:pb-28 mb-15',
    'class_image' => 'rounded-lg shadow-2xl img_anim',
]); ?>

<!-- Industries Section -->
<?= get_template_part('partials/pages/industries/partial', 'industires', [
    'field_name' => 'industries',
    'class_container' => '',
]); ?>

<!-- Why Choose Section -->
<?= get_template_part('partials/sections/partial', 'why_choose', [
    'field_name' => 'why_choose',
    'class_container' => 'mt-15 lg:mt-30',
]); ?>

<!-- Solutions CTA Section -->
<?= get_template_part('partials/sections/cta/partial', 'cta_2', [
    'field_name' => 'cta_solutions',
    'class_container' => '',
]); ?>

<!-- CTA Section -->
<?= get_template_part('partials/sections/cta/partial', 'cta', [
    'field_name' => 'cta',
    'class_container' => ' text-white px-4 lg:px-16 pb-0 pt-10',
]); ?>

<!-- FAQ Section -->
<?= get_template_part('partials/pages/industries/partial', 'section_faq', [
    'field_name' => 'faqs',
    'class_container' => '',
]); ?>


<?php
get_footer(); ?>