<div class="main-width py-15 lg:py-30">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php
                $icon = get_field('icon');
                $title = get_the_title();
                $description = get_the_excerpt();
                $permalink = get_permalink();
                ?>

                <?php echo get_template_part('partials/core/partial', 'card_4', [
                    'icon' => $icon['url'] ?? '',
                    'title' => $title,
                    'description' => $description,
                    'icon_alt' => $icon['alt'] ?? '',
                    'permalink' => $permalink,
                    'class_container' => '',
                    'aos_attributes' => 'data-aos="fade-up"',
                ]); ?>

            <?php endwhile;
        else : ?>
            <p>No products found.</p>
        <?php endif; ?>
    </div>
</div>