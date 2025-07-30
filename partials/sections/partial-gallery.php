<?php
$gallery = get_field('gallery');
$heading = $gallery['heading'] ?? '';
$gallery_images = $gallery['gallery_images'] ?? [];
?>
<?php if ($gallery && !empty($gallery_images)) : ?>
    <section class="bg-gradient-to-b from-[#0052CC] to-[#006AFF] py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12 lg:mb-16">
                <?php if ($heading): ?>
                    <h2 class="text-white text-2xl sm:text-3xl lg:text-4xl font-semibold">
                        <?= esc_html($heading); ?>
                    </h2>
                <?php endif; ?>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Column 1 -->
                <div class="grid grid-rows-[auto_auto] gap-6">
                    <?php if (!empty($gallery_images[0])): ?>
                        <a data-fancybox="gallery" href="<?= esc_url($gallery_images[0]['url']); ?>" class="block h-full">
                            <img src="<?= esc_url($gallery_images[0]['url']); ?>" alt="<?= esc_attr($gallery_images[0]['alt'] ?? ''); ?>" class="rounded-lg object-cover w-full h-[300px] md:h-[360px]" />
                        </a>
                    <?php endif; ?>

                    <div class="grid grid-cols-2 gap-6">
                        <?php if (!empty($gallery_images[1])): ?>
                            <a data-fancybox="gallery" href="<?= esc_url($gallery_images[1]['url']); ?>" class="block h-full">
                                <img src="<?= esc_url($gallery_images[1]['url']); ?>" alt="<?= esc_attr($gallery_images[1]['alt'] ?? ''); ?>" class="rounded-lg object-cover w-full h-[140px] md:h-[180px]" />
                            </a>
                        <?php endif; ?>
                        <?php if (!empty($gallery_images[2])): ?>
                            <a data-fancybox="gallery" href="<?= esc_url($gallery_images[2]['url']); ?>" class="block h-full">
                                <img src="<?= esc_url($gallery_images[2]['url']); ?>" alt="<?= esc_attr($gallery_images[2]['alt'] ?? ''); ?>" class="rounded-lg object-cover w-full h-[140px] md:h-[180px]" />
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="grid grid-rows-3 gap-6">
                    <?php for ($i = 3; $i <= 5; $i++): ?>
                        <?php if (!empty($gallery_images[$i])): ?>
                            <a data-fancybox="gallery" href="<?= esc_url($gallery_images[$i]['url']); ?>" class="block h-full">
                                <img src="<?= esc_url($gallery_images[$i]['url']); ?>" alt="<?= esc_attr($gallery_images[$i]['alt'] ?? ''); ?>" class="rounded-lg object-cover w-full h-[140px] md:h-[180px]" />
                            </a>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>

                <!-- Column 3 -->
                <div class="grid grid-rows-[auto_1fr] gap-6">
                    <?php if (!empty($gallery_images[6])): ?>
                        <a data-fancybox="gallery" href="<?= esc_url($gallery_images[6]['url']); ?>" class="block h-full">
                            <img src="<?= esc_url($gallery_images[6]['url']); ?>" alt="<?= esc_attr($gallery_images[6]['alt'] ?? ''); ?>" class="rounded-lg object-cover w-full h-[140px] md:h-[180px]" />
                        </a>
                    <?php endif; ?>

                    <a href="<?= esc_url($gallery_images[0]['url'] ?? '#'); ?>" data-fancybox="gallery" class="block h-full">
                        <div class="bg-[#0052CC] hover:bg-[#003EA8] transition-all rounded-lg flex items-center justify-center h-full">
                            <span class="text-white text-lg font-medium flex items-center gap-2">
                                Explore more
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>