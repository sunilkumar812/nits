<?php

/**
 * The template for displaying single solution
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nits
 */
get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Hero Section -->
        <?= get_template_part('partials/sections/hero/partial', 'hero_5', [
            'field_name' => 'Hero',
        ]); ?>

        <!--solution Highlights Section -->
        <?= get_template_part('partials/single-solution/partial', 'solution_highlights', [
            'class_container' => 'bg-nitsSoftBlue py-8 lg:py-24',
            'field_name' => 'solution_highlights',
        ]); ?>

        <!-- Video Section -->
        <?= get_template_part('partials/sections/partial', 'video_2', [
            'field_name' => 'video_section',
            'class_container' => ' py-8 lg:py-24',
        ]); ?>

        <!-- solution Features Section -->
        <?= get_template_part('partials/single-solution/partial', 'solution_features', [
            'class_container' => ' py-8 lg:py-24',
            'field_name' => 'solution_features',
        ]); ?>

        <!-- Split Content Section -->
        <?= get_template_part('partials/sections/partial', 'split_content', [
            'field_name' => 'split_content',
            'class_container' => ' py-8 lg:py-24',
        ]); ?>

        <!-- CTA Section -->
        <?= get_template_part('partials/sections/cta/partial', 'cta', [
            'field_name' => 'cta_section',
            'class_container' => 'bg-nitsDarkBlue text-white py-8 lg:py-24',
        ]); ?>

<?php endwhile;
endif;
get_footer(); ?>