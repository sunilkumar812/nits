<?php
$section_case_studies = get_field($args['field_name']);
if (!empty($section_case_studies)):
    $background_image = $section_case_studies['background_image'] ?? '';
    $heading_1 = $section_case_studies['heading_1'] ?? '';
    $heading_2 = $section_case_studies['heading_2'] ?? '';
    $heading_desc = $section_case_studies['heading_desc'] ?? '';
?>
    <div class="py-10 lg:pt-20 lg:pb-28 3xl:pt-[105px] 3xl:pb-[103px] relative overflow-hidden" style="background-image:linear-gradient(289.33deg, #2287FF -2.16%, #012C79 108.05%);">
        <div class="absolute -bottom-10 right-20 h-full"><img class="h-full" src="<?= esc_url($background_image['url']);  ?>"> </div>
        <?php echo get_template_part('partials/core/partial', 'section_heading_2', [
            'class_container' => '',
            'heading_1' => $heading_1 ?? 'Insights',
            'class_heading_1' => '3xl:text-xl font-semibold text-white mb-2 lg:mb-3 3xl:mb-3.5',
            'heading_2' => $heading_2 ?? 'Client Success Stories',
            'class_heading_2' => '3xl:text-[40px] font-bold text-white mb-2 lg:mb-3 3xl:mb-3.5',
            'heading_desc' => $heading_desc ?? 'Discover how we drive results for our clients.',
            'class_heading_desc' => '3xl:text-lg text-white',
        ]); ?>
    </div>

    <div class="main-width relative -mt-15">
        <div class="swiper caseStudySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="lg:flex flex-row lg:gap-16 3xl:gap-20">
                        <div class="max-w-[643px] 3xl:max-w-[743px] aspect-[3/2]">
                            <img src="http://localhost/nits/wp-content/uploads/2025/05/Rectangle-18.jpg" alt="" class="object-cover w-full">
                        </div>
                        <div class="flex flex-col gap-10 justify-end py-10 max-w-[500px]">
                            <div class="flex flex-col gap-5">
                                <div class="flex flex-row gap-5">
                                    <span>SUCCESS</span> <span>5 min read</span>
                                </div>
                                <div class="">
                                    <h3 class="font-type1 text-xl lg:text-2xl 3xl:text-3xl text-nitsBlue mb-2">Transorming Dealership Performance with Data</h3>
                                    <p class="text-base text-black">See how our solutons have impacted dealership operations and porfitability</p>
                                </div>
                            </div>
                            <!-- CTA Button -->
                            <div class="flex">
                                <?= get_template_part('partials/core/partial', 'button_primary', [
                                    'class' => 'btn-primary px-[22px] py-[17px] rounded-md 3xl:text-xl font-bold border border-1 hover:border-1 hover:boreder-nitsLightBlue',
                                    'text' => 'Read more',
                                    'link' =>  '/contact',
                                ]); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="lg:flex flex-row lg:gap-16 3xl:gap-20">
                        <div class="max-w-[643px] 3xl:max-w-[743px] aspect-[3/2]">
                            <img src="http://localhost/nits/wp-content/uploads/2025/05/Rectangle-18.jpg" alt="" class="object-cover w-full">
                        </div>
                        <div class="flex flex-col gap-10 justify-end py-10 max-w-[500px]">
                            <div class="flex flex-col gap-5">
                                <div class="flex flex-row gap-5">
                                    <span>SUCCESS</span> <span>5 min read</span>
                                </div>
                                <div class="">
                                    <h3 class="font-type1 text-xl lg:text-2xl 3xl:text-3xl text-nitsBlue mb-2">Transorming Dealership Performance with Data</h3>
                                    <p class="text-base text-black">See how our solutons have impacted dealership operations and porfitability</p>
                                </div>
                            </div>
                            <!-- CTA Button -->
                            <div class="flex">
                                <?= get_template_part('partials/core/partial', 'button_primary', [
                                    'class' => 'btn-primary px-[22px] py-[17px] rounded-md 3xl:text-xl font-bold border border-1 hover:border-1 hover:boreder-nitsLightBlue',
                                    'text' => 'Read more',
                                    'link' =>  '/contact',
                                ]); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="lg:flex flex-row lg:gap-16 3xl:gap-20">
                        <div class="max-w-[643px] 3xl:max-w-[743px] aspect-[3/2]">
                            <img src="http://localhost/nits/wp-content/uploads/2025/05/Rectangle-18.jpg" alt="" class="object-cover w-full">
                        </div>
                        <div class="flex flex-col gap-10 justify-end py-10 max-w-[500px]">
                            <div class="flex flex-col gap-5">
                                <div class="flex flex-row gap-5">
                                    <span>SUCCESS</span> <span>5 min read</span>
                                </div>
                                <div class="">
                                    <h3 class="font-type1 text-xl lg:text-2xl 3xl:text-3xl text-nitsBlue mb-2">Transorming Dealership Performance with Data</h3>
                                    <p class="text-base text-black">See how our solutons have impacted dealership operations and porfitability</p>
                                </div>
                            </div>
                            <!-- CTA Button -->
                            <div class="flex">
                                <?= get_template_part('partials/core/partial', 'button_primary', [
                                    'class' => 'btn-primary px-[22px] py-[17px] rounded-md 3xl:text-xl font-bold border border-1 hover:border-1 hover:boreder-nitsLightBlue',
                                    'text' => 'Read more',
                                    'link' =>  '/contact',
                                ]); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <div class="main-width mb-25">
        <!-- Category Navigation -->

        <div class="flex justify-center items-center gap-4 mt-12">
            <div class="min-w-4 lg:min-w-[103px] h-px bg-nitsBluePlus"></div>
            <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 cursor-pointer">Automotive Analytics</button>
            <button class="px-4 py-2 text-sm font-medium text-gray-700 bg-blue-50 rounded-md cursor-pointer">Performance Metrics</button>
            <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 cursor-pointer">Client Testimonials</button>
            <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 cursor-pointer">Case Studies</button>
            <div class="min-w-4 lg:min-w-[103px] h-px bg-nitsBluePlus"></div>
        </div>

    </div>
<?php endif; ?>