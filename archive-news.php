<?php

/**
 * The Caswe Studies Archive Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nits
 */

get_header();
?>

<main id="primary" class="z-4 relative overflow-hidden">

    <!-- Hero Setion -->
    <?= get_template_part('partials/archive-news/partial', 'hero', [
        'class_container' => 'text-white mb-30',
        'field_name' => 'news_archive_hero',
    ]); ?>

    <!-- One Case Study -->
    <?= get_template_part('partials/archive-news/partial', 'one_news', [
        'class_container' => '',
        'field_name' => 'one_news',
    ]); ?>

    <!-- Recent News -->
    <?= get_template_part('partials/archive-news/partial', 'recent_news', [
        'class_container' => '',
        'field_name' => 'recent_news',
    ]); ?>

    <!-- Common Post Filter Section -->
    <?= get_template_part('partials/sections/partial', 'common_post_filter', [
        'class_container' => 'lg:mb-30 mb-10 relative z-5',
        'field_name' => 'section_news_cards',
        'post_type' => 'news',
        'taxonomy' => 'news_categories',
        'heading_class' => 'mb-5 lg:mb-16 3xl:mb-15',
        'option' => 'yes',
    ]); ?>

    <!-- CTA Section -->
    <?= get_template_part('partials/sections/cta/partial', 'cta', [
        'field_name' => 'cta',
        'class_container' => ' text-white px-4 lg:px-16 pb-0 pt-10',
        'option' => 'yes',
    ]); ?>
</main><!-- #main -->

<?php
get_footer();
