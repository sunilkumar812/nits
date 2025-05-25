<?php
$class_container = $args['class_container'];
$logo_slider_images = $args['field_name'];
$logo_slider_heading = get_field('logo_slider_heading');
?>
<!-- Separator H3 -->
<?= get_template_part('partials/core/partial', 'separator_h3', [
    'class_container' => 'px-4 max-w-5xl mx-auto my-15 lg:mt-16 lg:mb-12 3xl:mt-20 3xl:mb-18',
    'class_text' => 'text-xl md:text-xl font-semibold text-nitsSteelBlue text-center',
    'field_name' => $logo_slider_heading,
]); ?>
<?php
if (have_rows($logo_slider_images)): ?>
    <div class="main-width <?= $class_container; ?>">
        <div class="swiper brand-slider">
            <div class="swiper-wrapper">
                <?php while (have_rows($logo_slider_images)) : the_row();
                    $image = get_sub_field('image'); ?>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center bg-white ">
                            <img src="<?php echo esc_url($image); ?>" alt="" class="grayscale hover:grayscale-0 transition-all h-[45px]">
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>