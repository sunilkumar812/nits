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
<main id="primary" class="site-main z-4 relative overflow-hidden">
    <!-- Hero Section -->
    <?= get_template_part('partials/sections/partial', 'hero'); ?>

    <!-- Separator H3 -->
    <?= get_template_part('partials/core/partial', 'separator_h3', [
        'class_container' => 'px-4 max-w-5xl mx-auto mt-20 mb-16',
        'class_text' => 'text-xl md:text-xl font-semibold text-nitsSteelBlue text-center',
        'text' => 'Trusted by the top automotive brands',
    ]); ?>
</main>
<?php
get_footer();
