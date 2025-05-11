<?php
$background_type = get_field('background_type');
$background_video = get_field('background_video');
$background_image = get_field('background_image');
$heading = get_field('heading') ?: 'AI-Driven Dealership Analytics for Your Success';
$description = get_field('description') ?: 'Unlock the power of your dealership data with our innovative AI solutions. Transform insights into actionable strategies that drive growth and enhance customer experiences.';
?>
<div class=" relative min-h-screen flex items-center justify-center overflow-hidden z-[4]">
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
    <div class="main-width">
        <div class=" relative z-20 text-center px-4 max-w-[800px] mx-auto">
            <h1 class="text-4xl lg:text-3xl 2xl:text-5xl 3xl:text-6xl font-bold text-white mb-10" data-aos="flip-down">
                <?php echo esc_html($heading); ?>
            </h1>
            <p class="text-lg lg:text-lg 3xl:text-xl text-white/90 mb-12 max-w-3xl mx-auto">
                <?php echo esc_html($description); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <?= get_template_part('partials/core/partial', 'button_primary', [
                    'class' => 'btn-primary px-[22px] py-[17px] rounded-md lg:text-lg 3xl:text-xl',
                    'text' => 'Explore Solutions',
                    'link' =>  '/explore-solutions',
                ]); ?>
                <?= get_template_part('partials/core/partial', 'button_primary', [
                    'class' => 'btn-white px-[22px] py-[17px] rounded-md lg:text-lg 3xl:text-xl',
                    'text' => 'Get a Demo',
                    'link' =>  '/get-a-demo',
                ]); ?>
            </div>
        </div>
    </div>
</div>