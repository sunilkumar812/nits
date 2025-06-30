<?php

/**
 * The template for displaying single product
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nits
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <!-- Hero Section -->
        <?= get_template_part('partials/sections/hero/partial', 'hero_5', [
            'field_name' => 'Hero',
        ]); ?>

        <!--Product Highlights Section -->
        <?= get_template_part('partials/single-product/partial', 'product_highlights', [
            'class_container' => 'bg-nitsSoftBlue py-8 lg:py-24',
            'field_name' => 'product_highlights',
        ]); ?>

        <!-- Video Section -->
        <?= get_template_part('partials/sections/partial', 'video_2', [
            'field_name' => 'video_section',
            'class_container' => ' py-8 lg:py-24',
        ]); ?>


<?php endwhile;
endif; ?>
<?php get_footer(); ?>