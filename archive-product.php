<?php

/**
 * The template for displaying archive Products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nits
 */
get_header(); ?>
<main id="primary" class="z-4 relative overflow-hidden">

    <!-- Hero Setion -->
    <?= get_template_part('partials/archive/partial', 'hero_4', [
        'class_container' => 'text-white pt-30 pb-15 lg:pt-55 lg:pb-50',
        'field_name' => 'product_archive_hero',
    ]); ?>

    <!-- Cards Grid Section -->
    <?= get_template_part('partials/archive/partial', 'cards_grid', [
        'class_container' => '',
    ]); ?>

    <!-- FAQ Section -->
    <?= get_template_part('partials/archive/partial', 'section_faq', [
        'field_name' => 'product_archive_faq',
        'class_container' => 'bg-[#EEF8FF] py-8 lg:py-24',
    ]); ?>

</main>
<?php get_footer(); ?>