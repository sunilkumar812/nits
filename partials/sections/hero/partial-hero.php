<?php
$background_type = get_field('background_type');
$background_video = get_field('background_video');
$background_image = get_field('background_image');
$heading = get_field('heading') ?: '';
$description = get_field('description') ?: '';
$cta_1 = get_field('cta_1') ?: [];
$cta_2 = get_field('cta_2') ?: [];
?>
<?php if (!empty($background_image) || !empty($heading) || !empty($description)): ?>
    <style>
        .main-width {
            max-width: 1200px;
        }
    </style>
    <div class="relative min-h-screen flex items-center justify-center overflow-hidden z-[4]">
        <!-- Dynamic Background -->
        <?php if ($background_type === 'video' && $background_video): ?>
            <video
                class="absolute top-0 left-0 w-full h-full object-cover z-0"
                autoplay
                loop
                muted
                playsinline>
                <source src="<?php echo esc_url($background_video); ?>" type="video/mp4">
            </video>
        <?php elseif ($background_type === 'image' || $background_image): ?>
            <div
                class="absolute top-0 left-0 w-full h-full bg-cover bg-center z-0"
                style="background-image: url('<?php echo esc_url($background_image); ?>')"></div>
        <?php endif; ?>

        <!-- Overlay -->
        <div class="absolute top-0 left-0 w-full h-full bg-blue-900/40 z-10"></div>

        <!-- Content -->
        <?php if (!empty($heading) || !empty($description)): ?>
            <div class="main-width">
                <div class=" relative z-20 text-center px-4 max-w-[800px] mx-auto">
                    <?php if (!empty($heading)): ?>
                        <h1 class="text-4xl lg:text-4xl 2xl:text-5xl 3xl:text-6xl font-semibold text-white mb-10 font-type1" data-aos="flip-down">
                            <?php echo esc_html($heading); ?>
                        </h1>
                    <?php endif; ?>
                    <?php if (!empty($description)): ?>
                        <p class="text-lg lg:text-lg 3xl:text-xl text-white/90 mb-12 max-w-3xl mx-auto font-type2" data-aos="fade-up">
                            <?php echo esc_html($description); ?>
                        </p>
                    <?php endif; ?>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <?php if (!empty($cta_1['title'])): ?>
                            <?= get_template_part('partials/core/partial', 'button_primary', [
                                'class' => 'btn-primary font-bold px-[22px] py-[17px] rounded-md text-lg 3xl:text-xl',
                                'text' => $cta_1['title'] ?: 'Learn More',
                                'link' =>  $cta_1['url'] ?: '#',
                            ]); ?>
                        <?php endif; ?>
                        <?php if (!empty($cta_2['title'])): ?>
                            <?= get_template_part('partials/core/partial', 'button_primary', [
                                'class' => 'btn-white font-bold px-[22px] py-[17px] rounded-md lg:text-lg 3xl:text-xl',
                                'text' => $cta_2['title'] ?: 'Get Started',
                                'link' =>  $cta_2['url'] ?: '#',
                            ]); ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>