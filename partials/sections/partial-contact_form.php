<div class="main-width">
    <div class="flex flex-row gap-20">
        <div class="w-full max-w-[739px]">
            <?php echo get_template_part('partials/core/partial', 'section_heading_2', [
                'class_container' => '3xl:max-w-[520px] lg:max-w-[471px]',
                'heading_1' => $heading_1 ?? 'CONTACT',
                'class_heading_1' => '3xl:text-xl font-semibold text-nitsSteelBlue mb-2 lg:mb-3 3xl:mb-3.5',
                'heading_2' => $heading_2 ?? "Get in touch with us We're here to assist you.",
                'class_heading_2' => '3xl:text-[45px] lg:text-4xl text-xl font-bold text-nitsDarkBlue mb-2 lg:mb-3 3xl:mb-3.5',
                'heading_desc' => $heading_desc ?? '',
                'class_heading_desc' => '',
            ]); ?>
            <div class="w-full">
                <img src="http://localhost/nits/wp-content/uploads/2025/05/Group-64.png" alt="" class="w-full mb-4">
            </div>
        </div>
        <div class="w-full max-w-[653px]">
            <?= do_shortcode('[contact-form-7 id="1bc3521" title="Home Page"]'); ?>
        </div>
    </div>
</div>