<div class="main-width pt-28 lg:mt-44 mb-8 lg:mb-16">
    <div class="flex items-center text-sm text-gray-500 mb-2">

        <?php
        $categories = get_the_category();
        if (!empty($categories)) {
            echo '<span class="mr-4 text-black"><b>' . esc_html($categories[0]->name) . '</b></span>';
        }
        ?>
        <span><?php echo get_the_date('j F Y'); ?></span>
    </div>

    <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
        <?php the_title(); ?>
    </h1>

    <?php if (has_post_thumbnail()) : ?>
        <img
            src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
            alt="<?php echo esc_attr(get_the_title()); ?>"
            class="w-full h-auto rounded-lg shadow-md object-cover max-h-[550px] mx-auto">
    <?php endif; ?>
</div>