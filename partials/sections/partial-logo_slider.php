<?php
$class_container = $args['class_container'];
$logo_slider_images = $args['logo_slider_images'];

if (have_rows($logo_slider_images)): ?>
    <div class="main-width <?= $class_container; ?>">
        <div class="swiper brand-slider">
            <div class="swiper-wrapper">
                <?php while (have_rows($logo_slider_images)) : the_row();
                    $image = get_sub_field('image'); ?>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center bg-white ">
                            <img src="<?php echo $image; ?>" alt="" class="grayscale hover:grayscale-0 transition-all h-[45px]">
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>