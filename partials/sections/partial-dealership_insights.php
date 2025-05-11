<?php
$dealership_insights = get_field($args['field_name']);
$class_container = $args['class_container'] ?? 'mb-24';
if ($dealership_insights):
    $background_image = $dealership_insights['background_image'] ?? '';
    $heading = $dealership_insights['heading'] ?? '';
    $description = $dealership_insights['description'] ?? '';
    $avatar_1 = $dealership_insights['avatar_1'] ?? null;
    $avatar_2 = $dealership_insights['avatar_2'] ?? null;
    $avatar_3 = $dealership_insights['avatar_3'] ?? null;
    $stat_1_number = $dealership_insights['stat_1_number'] ?? '';
    $stat_1_text = $dealership_insights['stat_1_text'] ?? '';
    $stat_2_number = $dealership_insights['stat_2_number'] ?? '';
    $stat_2_text = $dealership_insights['stat_2_text'] ?? '';
    $button_text = $dealership_insights['button']['title'] ?? '';
    $button_link = $dealership_insights['button']['url'] ?? '';
?>
    <div class="main-width <?= $class_container; ?>" style="background-image: url('<?= esc_url($background_image['url']); ?>'); background-repeat: no-repeat; background-size: cover;">
        <div class="absolute top-0 left-0 w-full h-16 bg-white blur-md z-10"></div>

        <!-- Bottom Blur -->
        <div class="absolute bottom-0 left-0 w-full h-16 bg-white blur-md z-10"></div>
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
            <!-- Left Content Section -->
            <div class="lg:w-1/2 space-y-8">
                <h2 class="text-3xl lg:text-4xl 3xl:text-5xl/15 font-bold text-nitsDarkBlue mb-[17px]"><?= esc_html($heading); ?></h2>
                <p class="text-sm lg:text-base 3xl:text-lg/7 text-black font-roboto mb-11"><?= esc_html($description); ?></p>

                <!-- Team/Avatar Section -->
                <div class="flex items-center gap-2 mb-6">
                    <div class="flex -space-x-2">
                        <?php if ($avatar_1): ?>
                            <img src="<?= esc_url($avatar_1['url']); ?>" alt="<?= esc_attr($avatar_1['alt']); ?>" class="w-[65px] h-[65px] rounded-full border-2 border-[#FFB525]">
                        <?php endif; ?>
                        <?php if ($avatar_2): ?>
                            <img src="<?= esc_url($avatar_2['url']); ?>" alt="<?= esc_attr($avatar_2['alt']); ?>" class="w-[65px] h-[65px] rounded-full border-2 border-[#FFB525]">
                        <?php endif; ?>
                        <?php if ($avatar_3): ?>
                            <img src="<?= esc_url($avatar_3['url']); ?>" alt="<?= esc_attr($avatar_3['alt']); ?>" class="w-[65px] h-[65px] rounded-full border-2 border-[#FFB525]">
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Stats Section -->
                <div class="flex gap-12 mb-12 lg:mb-15 3xl:mb-20">
                    <div class="">
                        <h3 class="text-base lg:text-3xl 3xl:text-5xl/11 font-bold text-nitsDarkBlue"><?= esc_html($stat_1_number)  ?></h3>
                        <p class="text-base lg:text-lg 3xl:text-xl text-black font-roboto"><?= esc_html($stat_1_text)  ?></p>
                    </div>
                    <div class="">
                        <h3 class="text-base lg:text-3xl 3xl:text-5xl/11 font-bold text-nitsDarkBlue"><?= esc_html($stat_2_number)  ?></h3>
                        <p class="text-base lg:text-lg 3xl:text-xl text-black font-roboto"><?= esc_html($stat_2_text)  ?></p>
                    </div>
                </div>

                <!-- CTA Button -->
                <?= get_template_part('partials/core/partial', 'button_primary', [
                    'class' => 'btn-primary px-[22px] py-[17px] rounded-md text-xl font-bold hover:border-1 hover:boreder-nitsLightBlue',
                    'text' => $button_text,
                    'link' =>  $button_link,
                ]); ?>
            </div>
        </div>
    </div>
<?php endif; ?>