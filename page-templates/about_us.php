<?php

/**
 * Template Name: About Us Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nits
 */
get_header(); ?>

<main id="primary" class="z-4 relative overflow-hidden">

    <!-- Hero 2 Section -->
    <?= get_template_part('partials/sections/hero/partial', 'hero_2', [
        'field_name' => 'logo_slider',
        'class_container' => 'mx-auto lg:max-w-[1538px] mb-15 lg:mb-[84px]',
    ]); ?>

</main>

<?php get_footer();
