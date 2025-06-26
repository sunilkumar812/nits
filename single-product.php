<?php

/**
 * The template for displaying single product
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nits
 */

get_header(); ?>

<main class="container single-product">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="product-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="product-content">
                    <?php the_content(); ?>
                </div>
            </article>
    <?php endwhile;
    endif; ?>
</main>


<?php get_footer(); ?>