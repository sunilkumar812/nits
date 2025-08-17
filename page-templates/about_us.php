<?php

/**
 * Template Name: About Us Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nits
 */
get_header(); ?>
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
        max-width: 500px;
    }
</style>
<main id="primary" class="z-4 relative">

    <div class="mx-auto relative">
        <!-- Hero -->
        <div class="bg-black text-white h-[680px] section" data-index="0">
            <div class="main-width flex relative ml-24 flex-col justify-center h-full relative">
                <div class="relative">
                    <div class="absolute -left-20 top-2 w-5 h-5 bg-blue-500 rounded-sm z-1 blink dot"></div>
                    <!-- <div class="absolute -left-20 top-1 w-6 h-6 bg-white border-2 border-blue-500 rounded-full dot"></div> -->
                    <div class="items-center relative">
                        <h1 class="text:3xl lg:text-5xl 3xl:text-7xl font-light text-white font-type1 mb-4">WHO <br>ARE WE?</h1>
                        <p class="text-white font-dmsans text-xl 3xl:text-xl font-light">Scroll to find out</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Timeline Line -->
        <div class="absolute left-[96px] top-[280px] bottom-[45%] w-[3px] bg-gray-300">
            <div id="timeline-progress" class="w-[3px] bg-blue-500 absolute top-0 h-0 "></div>
        </div>

        <!-- Sec 1 -->
        <div class="section" data-index="1">
            <div class="main-width flex ml-24 flex-col justify-center h-full relative py-20">
                <div class="relative">
                    <div class=" absolute -left-20 top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 blink dot"></div>
                    <div class="flex flex-row gap-10">
                        <h4 class="uppercase text-xl text-gray-500 mb-1 font-type2 tracking-widest w-[250px]">Inception</h4>
                        <div>
                            <div class="mb-20">
                                <h3 class="text-nitsDarkBlue font-semibold mb-10 font-type1 text-3xl">Core values & Mission Copy here</h3>
                                <p class="text-base mb-10 text-black max-w-[742px]">Our platform integrates with leading CRM and marketing solutions, ensuring a streamlined workflow. Connect effortlessly with financial systems and inventory management tools to optimize your dealership operations.</p>
                                <a href="#" class="btn btn-fill font-type2 text-base lg:text-lg btn-primary px-[22px] py-[17px] mt-5 lg:mt-10 3xl:mt-15 rounded-md text-xl font-bold border border-1 hover:border-1 hover:boreder-nitsLightBlue" href="#">
                                    Know Our Story</a>
                            </div>
                            <div class="flex flex-row gap-20">
                                <div>
                                    <img class="mb-4 w-[175px] h-[175px]" src="https://nits.webknitter.in/wp-content/uploads/2025/08/image-15.png" alt="" />
                                    <p class="text-center">COLLABORATION</p>
                                </div>
                                <div>
                                    <img class="mb-4 w-[175px] h-[175px]" src="https://nits.webknitter.in/wp-content/uploads/2025/08/image-16-1.png" alt="" />
                                    <p class="text-center">INNOVATION</p>
                                </div>
                                <div>
                                    <img class="mb-4 w-[175px] h-[175px]" src="https://nits.webknitter.in/wp-content/uploads/2025/08/image-17.png" alt="" />
                                    <p class="text-center">RESILIENCE</p>
                                </div>
                                <div>
                                    <img class="mb-4 w-[175px] h-[175px]" src="https://nits.webknitter.in/wp-content/uploads/2025/08/Isolation_Mode.png" alt="" />
                                    <p class="text-center">DIVERSITY</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- 2010 -->
        <div class="section" data-index="2">
            <div class="main-width flex relative ml-24 flex-col justify-centerrelative py-20">
                <div class="relative">
                    <div class=" absolute -left-20 top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 blink dot"></div>
                    <div class="flex flex-row gap-10">
                        <h4 class="uppercase text-xl text-gray-500 mb-1 font-type2 tracking-widest w-[250px]">2010</h4>
                        <div class="mb-20">

                            <h3 class="text-nitsDarkBlue font-semibold mb-10 font-type1 text-3xl">Intro copy here</h3>
                            <p class="text-base mb-10 text-black max-w-[742px]">Our platform integrates with leading CRM and marketing solutions, ensuring a streamlined workflow. Connect effortlessly with financial systems and inventory management tools to optimize your dealership operations.</p>
                            <img src="https://placehold.co/400x200" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- 2010 -->
        <div class="section" data-index="3">
            <div class="main-width flex relative ml-24 flex-col justify-centerrelative mt-20">
                <div class="relative">
                    <div class=" absolute -left-20 top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 blink dot"></div>
                    <div class="flex flex-row gap-10">
                        <h4 class="uppercase text-xl text-gray-500 mb-1 font-type2 tracking-widest w-[250px]">2010</h4>
                        <div class="mb-20">

                            <h3 class="text-nitsDarkBlue font-semibold mb-10 font-type1 text-3xl">Intro copy here</h3>
                            <p class="text-base mb-10 text-black max-w-[742px]">Our platform integrates with leading CRM and marketing solutions, ensuring a streamlined workflow. Connect effortlessly with financial systems and inventory management tools to optimize your dealership operations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 
        <div class="mr-auto">
            <div id="horizontal-scroll" class="relative overflow-hidden bg-white mx-19">
                <div class="scroller flex space-x-6 w-max items-center">
                   
                    <div class="min-w-[350px] h-[200px] bg-blue-500 text-white text-xl flex items-center justify-center rounded">1</div>
                    <div class="min-w-[350px] h-[200px] bg-blue-500 text-white text-xl flex items-center justify-center rounded">2</div>
                    <div class="min-w-[350px] h-[200px] bg-blue-500 text-white text-xl flex items-center justify-center rounded">3</div>
                    <div class="min-w-[350px] h-[200px] bg-blue-500 text-white text-xl flex items-center justify-center rounded">4</div>
                    <div class="min-w-[350px] h-[200px] bg-blue-500 text-white text-xl flex items-center justify-center rounded">5</div>
                    <div class="min-w-[350px] h-[200px] bg-blue-500 text-white text-xl flex items-center justify-center rounded">6</div>
                </div>
            </div>
        </div> -->
        <div class="w-[80%] px-10 mx-auto mb-15">
            <div class="swiper about_us_intro">

                <div class="swiper-wrapper">
                    <div class="intro_slide swiper-slide">1</div>
                    <div class="intro_slide swiper-slide">2</div>
                    <div class="intro_slide swiper-slide">3</div>
                    <div class="intro_slide swiper-slide">4</div>
                    <div class="intro_slide swiper-slide">5</div>
                    <div class="intro_slide swiper-slide">6</div>
                </div>

            </div>
        </div>

        <!-- Our Founders -->
        <div class="section mb-20" data-index="4">
            <div class="main-width flex relative ml-24 flex-col justify-centerrelative py-20">
                <div class="relative">
                    <div class="absolute -left-20 top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 blink dot"></div>
                    <div class="flex flex-row gap-10">
                        <div class="max-w-[350px]">
                            <h4 class="uppercase text-xl text-gray-500 mb-1 font-type2 tracking-widest mb-10 w-[250px]">OUR FOUNDERS</h4>
                            <h3 class="text-nitsDarkBlue font-semibold mb-10 font-type1 text-3xl">“An insipration quote to come here in three
                                lines”</h3>
                        </div>
                        <div class="swiper founder">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="founder-slide swiper-slide">
                                    <img src="https://placehold.co/500x200" alt="slide1" />
                                </div>
                                <div class="founder-slide swiper-slide">
                                    <img src="https://placehold.co/500x200" alt="slide2" />
                                </div>
                                <div class="founder-slide swiper-slide">
                                    <img src="https://placehold.co/500x200" alt="slide3" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part('partials/pages/about-us/partial', 'global_presence'); ?>

        <div class="main-width flex flex-col items-center my-28">
            <!-- Tabs -->
            <div class="flex justify-center items-center gap-8 mb-12">
                <button id="tab1-btn" class="tab-btn px-4 py-1 rounded transition cursor-pointer">Festive Celebrations</button>
                <button id="tab2-btn" class="tab-btn px-4 py-1 rounded transition cursor-pointer">Culture</button>
                <button id="tab3-btn" class="tab-btn px-4 py-1 rounded transition cursor-pointer">Events & Expo</button>
            </div>
            <!-- Tab content -->
            <div class="w-full mx-auto">
                <!-- Festive Celebrations -->
                <div id="tab1" class="tab-content flex flex-wrap gap-6 justify-center">
                    <div class="bg-gray-200 w-[60%] aspect-[4/3]">1</div>
                    <div class="flex flex-col gap-6 w-[35%]">
                        <div class="bg-gray-200 aspect-[4/3]">2</div>
                        <div class="bg-gray-200 aspect-[4/3]">3</div>
                    </div>
                </div>
                <!-- Culture -->
                <div id="tab2" class="tab-content hidden flex flex-wrap gap-6 justify-center">
                    <div class="bg-gray-200 w-[60%] aspect-[4/3]">4</div>
                    <div class="flex flex-col gap-6 w-[35%]">
                        <div class="bg-gray-200 aspect-[4/3]">5</div>
                        <div class="bg-gray-200 aspect-[4/3]">6</div>

                    </div>
                </div>
                <!-- Events & Expo -->
                <div id="tab3" class="tab-content hidden flex flex-wrap gap-6 justify-center">
                    <div class="bg-gray-200 w-[60%] aspect-[4/3]">9</div>
                    <div class="flex flex-col gap-6 w-[35%]">
                        <div class="bg-gray-200 aspect-[4/3]">10</div>
                        <div class="bg-gray-200 aspect-[4/3]">11</div>
                    </div>
                </div>
            </div>
            <a class="btn btn-fill font-type2 text-base lg:text-lg btn-primary px-[22px] py-[17px] mt-5 lg:mt-10 3xl:mt-15 rounded-md text-xl font-bold  hover:border-1 hover:boreder-nitsLightBlue" href="#">
                Explore Solution</a>
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