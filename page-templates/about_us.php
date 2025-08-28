<?php

/**
 * Template Name: About Us Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nits
 */
get_header();
$hero = get_field('hero');
$hero_heading = $hero['heading'] ?? '';
$hero_description = $hero['description'] ?? '';

$section_1 = get_field('section_1');
$s1_blinker_text  = $section_1['blinker_text'] ?? '';
$s1_heading       = $section_1['heading'] ?? '';
$s1_description   = $section_1['description'] ?? '';
$s1_button        = $section_1['button'] ?? '';
$s1_icons         = $section_1['icons'] ?? [];

$section_2 = get_field('section_2');
$s2_blinker_text = $section_2['blinker_text'] ?? '';
$s2_heading      = $section_2['heading'] ?? '';
$s2_description  = $section_2['description'] ?? '';
$s2_image        = $section_2['image'] ?? '';

$section_3 = get_field('section_3');
$s3_blinker_text = $section_3['blinker_text'] ?? '';
$s3_heading      = $section_3['heading'] ?? '';
$s3_description  = $section_3['description'] ?? '';
$s3_slider       = $section_3['slider'] ?? [];

$section_4 = get_field('section_4');
$s4_blinker_text = $section_4['blinker_text'] ?? '';
$s4_heading      = $section_4['heading'] ?? '';
$s4_slider       = $section_4['slider'] ?? [];

$gallery_tabs = get_field('gallery_tabs');
$gallery_images = get_field('gallery_images');

$final_cta = get_field('final_cta');
?>
<style>
    /* @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }

    .blink {
        animation: blink 1s infinite;
    } */
    @keyframes wave {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.5);
        }

        50% {
            box-shadow: 0 0 25px 20px rgba(59, 130, 246, 0.2);
        }
    }

    .blink {
        animation: wave 1.5s infinite;
    }

    .scroller {
        /* display: flex;
        overflow: hidden; */
        /* hides extra slides */
        /* width: 80%; */
        /* only show what's inside */
    }

    /* .scroller .panel {
        flex: 0 0 calc(100% / 3);
    } */

    /* show 3 panels per screen */
    .intro_slide {
        width: 300px;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: white;
        background-color: #D9D9D9;
        /* Example background color */
    }

    .founder {
        max-width: 900px;
    }
</style>
<main id="primary" class="z-4 relative">

    <div class="mx-auto relative">
        <!-- Timeline Line -->
        <div class="absolute left-[96px] top-[280px] bottom-[40.7%] w-[3px] bg-gray-300 hidden md:block">
            <div id="timeline-progress" class="w-[3px] bg-blue-500 absolute top-0 h-0 "></div>
        </div>

        <!-- Hero -->
        <div class="bg-black text-white h-[380px] md:h-[680px] section" data-index="0">
            <div class="main-width flex relative md:ml-24 flex-col justify-center h-full relative">
                <div class="relative">
                    <div class="absolute -left-20 top-2 w-5 h-5 bg-blue-500 rounded-sm z-1 blink dot hidden md:block"></div>
                    <div class="items-center relative">
                        <?php if ($hero_heading): ?>
                            <h1 class="text-3xl lg:text-5xl 3xl:text-7xl font-light text-white font-type1 mb-4">
                                <?= $hero_heading; ?>
                            </h1>
                        <?php endif; ?>

                        <?php if ($hero_description): ?>
                            <p class="text-white font-dmsans text-xl 3xl:text-xl font-light">
                                <?= $hero_description; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sec 1 -->
        <div class="section" data-index="1">
            <div class="main-width flex md:ml-24 flex-col justify-center h-full relative py-10 md:py-20">
                <div class="relative">

                    <!-- Blinker Dot -->
                    <div class="absolute -left-20 top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 blink dot hidden md:block"></div>

                    <div class="flex flex-col md:flex-row gap-5">

                        <!-- Blinker Text -->
                        <?php if ($s1_blinker_text): ?>
                            <h4 class="uppercase text-xl text-gray-500 mb-1 font-type2 tracking-widest w-[250px]">
                                <?= esc_html($s1_blinker_text); ?>
                            </h4>
                        <?php endif; ?>

                        <div>
                            <div class="mb-20">

                                <!-- Heading -->
                                <?php if ($s1_heading): ?>
                                    <h3 class="text-nitsDarkBlue font-semibold mb-10 font-type1 text-3xl">
                                        <?= esc_html($s1_heading); ?>
                                    </h3>
                                <?php endif; ?>

                                <!-- Description -->
                                <?php if ($s1_description): ?>
                                    <p class="text-base mb-10 text-black max-w-[742px]">
                                        <?= esc_html($s1_description); ?>
                                    </p>
                                <?php endif; ?>

                                <!-- Button -->
                                <?php if (!empty($s1_button['url']) && !empty($s1_button['title'])): ?>
                                    <a href="<?= esc_url($s1_button['url']); ?>"
                                        class="btn btn-fill font-type2 text-base lg:text-lg btn-primary px-[22px] py-[17px] mt-5 lg:mt-10 3xl:mt-15 rounded-md text-xl font-bold border border-1 hover:border-1 hover:border-nitsLightBlue"
                                        target="<?= esc_attr($s1_button['target'] ?: '_self'); ?>">
                                        <?= esc_html($s1_button['title']); ?>
                                    </a>
                                <?php endif; ?>
                            </div>

                            <!-- Icons Repeater -->
                            <?php if (!empty($s1_icons)): ?>
                                <div class="flex flex-col md:flex-row gap-20">
                                    <?php foreach ($s1_icons as $icon):
                                        $icon_img = $icon['image'] ?? '';
                                        $icon_text = $icon['text'] ?? '';
                                    ?>
                                        <div>
                                            <?php if (!empty($icon_img['url'])): ?>
                                                <img class="mb-4 w-[175px] h-[175px] ml-auto mr-auto"
                                                    src="<?= esc_url($icon_img['url']); ?>"
                                                    alt="<?= esc_attr($icon_img['alt'] ?? $icon_text); ?>" />
                                            <?php endif; ?>
                                            <?php if ($icon_text): ?>
                                                <p class="text-center"><?= esc_html($icon_text); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Sec 2 -->
        <div class="section" data-index="2">
            <div class="main-width flex relative md:ml-24 flex-col justify-center relative py-10 md:py-20">
                <div class="relative">

                    <!-- Blinker Dot -->
                    <div class="absolute -left-20 top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 blink dot hidden md:block"></div>

                    <div class="flex flex-col md:flex-row gap-5">

                        <!-- Blinker Text -->
                        <?php if ($s2_blinker_text): ?>
                            <h4 class="uppercase text-xl text-gray-500 mb-1 font-type2 tracking-widest w-[250px]">
                                <?= esc_html($s2_blinker_text); ?>
                            </h4>
                        <?php endif; ?>

                        <div class="md:mb-20">

                            <!-- Heading -->
                            <?php if ($s2_heading): ?>
                                <h3 class="text-nitsDarkBlue font-semibold mb-10 font-type1 text-3xl">
                                    <?= esc_html($s2_heading); ?>
                                </h3>
                            <?php endif; ?>

                            <!-- Description -->
                            <?php if ($s2_description): ?>
                                <p class="text-base mb-10 text-black max-w-[742px]">
                                    <?= esc_html($s2_description); ?>
                                </p>
                            <?php endif; ?>

                            <!-- Image -->
                            <?php if (!empty($s2_image['url'])): ?>
                                <img src="<?= esc_url($s2_image['url']); ?>"
                                    alt="<?= esc_attr($s2_image['alt'] ?? $s2_heading); ?>"
                                    class="max-w-full h-auto" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sec 3 -->
        <div class="section" data-index="3">
            <div class="main-width flex relative md:ml-24 flex-col justify-center relative mt-10 md:mt-20">
                <div class="relative">

                    <!-- Blinker Dot -->
                    <div class="absolute -left-20 top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 blink dot hidden md:block"></div>

                    <div class="flex flex-col md:flex-row gap-5">

                        <!-- Blinker Text -->
                        <?php if ($s3_blinker_text): ?>
                            <h4 class="uppercase text-xl text-gray-500 mb-1 font-type2 tracking-widest w-[250px]">
                                <?= esc_html($s3_blinker_text); ?>
                            </h4>
                        <?php endif; ?>

                        <div class="md:mb-20">

                            <!-- Heading -->
                            <?php if ($s3_heading): ?>
                                <h3 class="text-nitsDarkBlue font-semibold mb-10 font-type1 text-3xl">
                                    <?= esc_html($s3_heading); ?>
                                </h3>
                            <?php endif; ?>

                            <!-- Description -->
                            <?php if ($s3_description): ?>
                                <p class="text-base mb-10 text-black max-w-[742px]">
                                    <?= esc_html($s3_description); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Swiper Slider -->
        <?php if (!empty($s3_slider)): ?>
            <div class="w-[80%] md:px-10 mx-auto md:mb-15">
                <div class="swiper about_us_intro">
                    <div class="swiper-wrapper">
                        <?php foreach ($s3_slider as $slide):
                            $slide_img = $slide['slide'] ?? '';
                        ?>
                            <?php if (!empty($slide_img['url'])): ?>
                                <div class="intro_slide swiper-slide">
                                    <img src="<?= esc_url($slide_img['url']); ?>"
                                        alt="<?= esc_attr($slide_img['alt'] ?? $heading); ?>"
                                        class="w-full h-auto" />
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Sec 4 -->
        <div class="section mb-20" data-index="4">
            <div class="main-width flex relative md:ml-24 flex-col justify-center relative py-10 md:py-20">
                <div class="relative">

                    <!-- Blinker Dot -->
                    <div class="absolute -left-20 top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 blink dot hidden md:block"></div>

                    <div class="flex flex-col md:flex-row gap-5">

                        <!-- Left Side -->
                        <div class="max-w-[350px]">
                            <?php if ($s4_blinker_text): ?>
                                <h4 class="uppercase text-xl text-gray-500 mb-1 font-type2 tracking-widest mb-10 w-[250px]">
                                    <?= esc_html($s4_blinker_text); ?>
                                </h4>
                            <?php endif; ?>

                            <?php if ($s4_heading): ?>
                                <h3 class="text-nitsDarkBlue font-semibold mb-10 font-type1 text-3xl">
                                    <?= esc_html($s4_heading); ?>
                                </h3>
                            <?php endif; ?>
                        </div>

                        <!-- Swiper Slider -->
                        <?php if (!empty($s4_slider)): ?>
                            <div class="swiper founder sm:px-10">
                                <div class="swiper-wrapper">
                                    <?php foreach ($s4_slider as $s4_slide):
                                        $s4_slide_img = $s4_slide['slide'] ?? '';
                                        $s4_title = $s4_slide['title'] ?? '';
                                        $s4_description = $s4_slide['description'] ?? '';
                                        $s4_award_image = $s4_slide['award_image'] ?? '';

                                    ?>
                                        <?php if (!empty($s4_slide_img['url'])): ?>
                                            <div class="founder-slide swiper-slide">
                                                <div class="w-full">
                                                    <img src="<?= esc_url($s4_slide_img['url']); ?>"
                                                        alt="<?= esc_attr($s4_slide_img['alt'] ?? $s4_heading); ?>"
                                                        class="max-w-[400px] object-contain" />
                                                    <div class="p-4 max-w-[350px]">
                                                        <p class="text-nitsPrimary text-xl font-semibold mb-2 font-type1"><?= esc_html($s4_title); ?></p>
                                                        <p class="text-base text-gray-500 font-type2 mb-2"><?= esc_html($s4_description); ?></p>
                                                        <img src="<?= esc_url($s4_award_image['url']); ?>" alt="<?= esc_attr($s4_award_image['alt'] ?? $s4_heading); ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part('partials/pages/about-us/partial', 'global_presence', [
            'field_name' => 'our_approach',
        ]); ?>
        <?php
        if ($gallery_tabs && isset($gallery_tabs['tabs']) && is_array($gallery_tabs['tabs'])) :
        ?>
            <div class=" main-width flex flex-col items-center my-10 md:my-28">

                <!-- Tabs -->
                <div class="flex justify-center items-center gap-8 mb-12">
                    <?php foreach ($gallery_tabs['tabs'] as $index => $tab) :
                        $tab_id = $tab['tab_id'] ?? 'tab' . ($index + 1);
                        $tab_heading = $tab['tab_heading'] ?? '';
                    ?>
                        <button
                            id="<?php echo esc_attr($tab_id); ?>-btn"
                            class="tab-btn px-4 py-1 rounded transition cursor-pointer <?php echo $index === 0 ? 'active' : ''; ?>">
                            <?php echo esc_html($tab_heading); ?>
                        </button>
                    <?php endforeach; ?>
                </div>

                <!-- Tab Content -->
                <div class="w-full mx-auto">
                    <?php if ($gallery_images && isset($gallery_images['tab_images'])) : ?>
                        <?php foreach ($gallery_tabs['tabs'] as $index => $tab) :
                            $tab_id = $tab['tab_id'] ?? 'tab' . ($index + 1);

                            // Find matching tab images
                            $matched_images = array_filter($gallery_images['tab_images'], function ($img) use ($tab_id) {
                                return isset($img['tab_id']) && $img['tab_id'] === $tab_id;
                            });

                            $matched_images = reset($matched_images); // get first match
                        ?>
                            <div
                                id="<?php echo esc_attr($tab_id); ?>"
                                class="tab-content flex flex-wrap gap-6 justify-center <?php echo $index !== 0 ? 'hidden' : ''; ?>">

                                <?php if ($matched_images) : ?>
                                    <div class="bg-gray-200 w-[100%] md:w-[60%] aspect-[4/3] flex items-center justify-center overflow-hidden">
                                        <?php if (!empty($matched_images['image_1'])) : ?>
                                            <img src="<?php echo esc_url($matched_images['image_1']['url']); ?>"
                                                alt=""
                                                class="object-cover w-full h-full" />
                                        <?php endif; ?>
                                    </div>

                                    <div class="flex flex-col gap-6 w-[100%] md:w-[35%]">
                                        <div class="bg-gray-200 aspect-[4/3] flex items-center justify-center overflow-hidden">
                                            <?php if (!empty($matched_images['image_2'])) : ?>
                                                <img src="<?php echo esc_url($matched_images['image_2']['url']); ?>"
                                                    alt=""
                                                    class="object-cover w-full h-full" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="bg-gray-200 aspect-[4/3] flex items-center justify-center overflow-hidden">
                                            <?php if (!empty($matched_images['image_3'])) : ?>
                                                <img src="<?php echo esc_url($matched_images['image_3']['url']); ?>"
                                                    alt=""
                                                    class="object-cover w-full h-full" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <!-- CTA -->
            <?php if ($final_cta) : ?>
                <a class="btn btn-fill font-type2 text-base lg:text-lg btn-primary px-[22px] py-[17px] mt-5 lg:mt-10 3xl:mt-15 rounded-md text-xl font-bold hover:border-1 hover:border-nitsLightBlue"
                    href="<?php echo esc_url($final_cta['url']); ?>"
                    target="<?php echo esc_attr($final_cta['target'] ?: '_self'); ?>">
                    <?php echo esc_html($final_cta['title']); ?>
                </a>
            <?php endif; ?>
            </div>

    </div>
</main>

<?php get_footer(); ?>

<script>
    const timelineProgress = document.getElementById('timeline-progress');
    const sections = document.querySelectorAll('.section');
    const dots = document.querySelectorAll('.dot');

    // get the last section with data-index="5"
    const lastSection = document.querySelector('.section[data-index="5"]');

    function updateTimeline() {
        const scrollY = window.scrollY + window.innerHeight / 2;
        const timelineTop = document.querySelector('.section').getBoundingClientRect().top + window.scrollY + 200;

        const timelineBottom = document.body.scrollHeight;
        const totalHeight = timelineBottom - timelineTop;
        let scrolled = Math.min(Math.max(scrollY - timelineTop, 0), totalHeight) - 170;

        // get bottom position of the lastSection
        if (lastSection) {
            const lastSectionBottom = lastSection.getBoundingClientRect().bottom + window.scrollY;

            // max progress = distance between timelineTop and lastSectionBottom
            const maxProgress = lastSectionBottom - timelineTop;

            scrolled = Math.min(scrolled, maxProgress);
        }

        timelineProgress.style.height = `${scrolled}px`;

        sections.forEach((section, index) => {
            const rect = section.getBoundingClientRect();
            const dot = dots[index];
            if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                dot.classList.add('blink');
            } else {
                dot.classList.remove('blink');
            }
        });
    }

    window.addEventListener('scroll', updateTimeline);
    window.addEventListener('load', updateTimeline);

    // Tab switching logic
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    function activateTab(idx) {
        tabBtns.forEach((btn, i) => {
            if (i === idx) {
                btn.classList.add('bg-blue-100');
            } else {
                btn.classList.remove('bg-blue-100');
            }
        });
        tabContents.forEach((tab, i) => {
            tab.classList.toggle('hidden', i !== idx);
        });
    }
    tabBtns.forEach((btn, i) => {
        btn.addEventListener('click', () => activateTab(i));
    });
    // Set default tab (Culture, index 1)
    activateTab(1);
</script>