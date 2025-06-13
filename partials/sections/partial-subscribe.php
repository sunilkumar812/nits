<?php
$heading = get_field('subscribe_heading');
$description = get_field('subscribe_description');
$form_shortcode = get_field('subscribe_form');
$class_container = $args['class_container'] ?? 'bg-nitsBluePlus py-10 lg:py-20';
?>
<div class="<?= esc_attr($class_container); ?> relative overflow-hidden">
    <div class="main-width">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
            <!-- Text Content -->
            <div class="max-w-xl">
                <?php if ($heading): ?>
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4"><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>

                <?php if ($description): ?>
                    <p class="text-blue-100 text-lg">
                        <?php echo esc_html($description); ?>
                    </p>
                <?php endif; ?>
            </div>

            <!-- Subscription Form -->
            <div class="w-full md:w-auto">
                <?php if ($form_shortcode): ?>
                    <?php echo do_shortcode($form_shortcode); ?>
                <?php else: ?>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <input
                            type="email"
                            placeholder="Enter your email"
                            class="px-6 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-white/50 w-full">
                        <button class="bg-white text-custom-blue font-semibold px-8 py-3 rounded-full hover:bg-opacity-90 transition-colors whitespace-nowrap">
                            Subscribe
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>