<?php

/**
 * Template Name: Contact Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nits
 */
get_header(); ?>

<main id="primary" class="z-4 relative">

    <!-- Hero Section -->
    <?= get_template_part('partials/sections/hero/partial', 'hero_3', [
        'class_container' => 'text-white pt-30 pb-15 lg:pt-55 lg:pb-50 ',
    ]); ?>

    <!-- Contact Form Section -->
    <?= get_template_part('partials/pages/contact/partial', 'form', [
        'field_name' => 'contact_form_7_shortcode',
        'class_container' => '',
    ]); ?>
    <!-- FAQ Section -->
    <?= get_template_part('partials/pages/contact/partial', 'section_faq', [
        'field_name' => 'faqs',
        'class_container' => '',
    ]); ?>

    <!--Testimonial Section -->
    <?= get_template_part('partials/sections/partial', 'testimonial_cards', [
        'field_name' => 'testimonials',
        'class_container' => 'py-5 lg:py-10 xl:py-25',
    ]); ?>

    <!-- Subscribe Section -->
    <?= get_template_part('partials/sections/partial', 'subscribe', [
        'field_name' => 'subscribe',
        'class_container' => 'bg-nitsBluePlus py-10 lg:py-20',
    ]); ?>
</main>

<?php get_footer(); ?>