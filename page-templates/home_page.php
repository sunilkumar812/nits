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
<main id="primary" class="site-main">
    <!-- Hero Section -->
    <?= get_template_part('partials/sections/partial', 'hero'); ?>
</main>
<?php
get_footer();
