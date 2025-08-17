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
</style>

<div class="mx-auto relative">

    <!-- Hero -->
    <div class="bg-black text-white h-[680px] section" data-index="0">
        <div class="main-width flex relative ml-19 flex-col justify-center h-full relative">
            <div class="relative">
                <div class=" absolute -left-20 top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 blink dot"></div>
                <!-- <div class="absolute -left-20 top-1 w-6 h-6 bg-white border-2 border-blue-500 rounded-full dot"></div> -->
                <div class="items-center relative">
                    <h1 class="text:3xl lg:text-5xl 3xl:text-7xl font-light text-white font-type1 mb-4">WHO <br>ARE WE?</h1>
                    <p class="text-white font-dmsans text-xl 3xl:text-xl font-light">Scroll to find out</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Timeline Line -->
    <div class="absolute left-19 top-[280px] bottom-0 w-[3px] bg-gray-300">
        <div id="timeline-progress" class="w-[3px] bg-blue-500 absolute top-0 h-0 "></div>
    </div>

    <!-- Sec 1 -->
    <div class="section" data-index="1">
        <div class="main-width flex relative ml-19 flex-col justify-center h-full relative py-20">
            <div class="relative">
                <div class=" absolute -left-20 top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 blink dot"></div>
                <h4 class="uppercase text-xs text-gray-500 mb-1">Inception</h4>
                <h3 class="text-[#11386E] font-semibold mb-2">Core values & Mission Copy here</h3>
                <p class="text-sm mb-3 text-[#333]">Our efforts encompass our Mission, Vision and Values and every decision we make helps to build our inclusive and diverse workplace...</p>
                <button class="text-xs text-white bg-[#0077FF] px-3 py-1 rounded">View More</button>

            </div>
        </div>
    </div>





    <!-- Timeline Section -->
    <section class="main-width relative py-16">

        <!-- Inception -->
        <div class="relative section" data-index="2">
            <div>
                <div class="absolute top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 dot"></div>
                <span>INCEPTION</span>
            </div>
            <!-- <div class="absolute -left-20 top-1 w-6 h-6 bg-white border-2 border-blue-500 rounded-full dot"></div> -->
            <div class="main-width">
                <h4 class="uppercase text-xs text-gray-500 mb-1">Inception</h4>
                <h3 class="text-[#11386E] font-semibold mb-2">Core values & Mission Copy here</h3>
                <p class="text-sm mb-3 text-[#333]">Our efforts encompass our Mission, Vision and Values and every decision we make helps to build our inclusive and diverse workplace...</p>
                <button class="text-xs text-white bg-[#0077FF] px-3 py-1 rounded">View More</button>

            </div>
        </div>

        <!-- 2010 -->
        <div class="relative section py-16" data-index="3">
            <div class="absolute top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 dot"></div>
            <!-- <div class="absolute -left-20 top-1 w-6 h-6 bg-white border-2 border-blue-500 rounded-full dot"></div> -->
            <div>
                <h4 class="uppercase text-xs text-gray-500 mb-1">2010</h4>
                <h3 class="text-[#11386E] font-semibold mb-2">Intro copy here</h3>
                <p class="text-sm text-[#333] mb-4">Our efforts encompass our Mission, Vision and Values...</p>
                <img src="https://placehold.co/400x200" alt="" />
            </div>
            <div id="horizontal-scroll" class="relative h-screen overflow-hidden bg-white">
                <div class="scroller flex space-x-6 w-max h-full items-center px-20">
                    <!-- Slides -->
                    <div class="w-[300px] h-[200px] bg-blue-500 text-white text-xl flex items-center justify-center rounded">1</div>
                    <div class="w-[300px] h-[200px] bg-blue-500 text-white text-xl flex items-center justify-center rounded">2</div>
                    <div class="w-[300px] h-[200px] bg-blue-500 text-white text-xl flex items-center justify-center rounded">3</div>
                    <div class="w-[300px] h-[200px] bg-blue-500 text-white text-xl flex items-center justify-center rounded">4</div>
                    <div class="w-[300px] h-[200px] bg-blue-500 text-white text-xl flex items-center justify-center rounded">5</div>
                    <div class="w-[300px] h-[200px] bg-blue-500 text-white text-xl flex items-center justify-center rounded">6</div>
                    <div class="w-[300px] h-[200px] bg-blue-500 text-white text-xl flex items-center justify-center rounded">7</div>
                </div>
            </div>
        </div>

        <!-- 2015 -->
        <div class="relative section py-16" data-index="4">
            <div class="absolute top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 dot"></div>
            <!-- <div class="absolute -left-20 top-1 w-6 h-6 bg-white border-2 border-blue-500 rounded-full dot"></div> -->
            <div>
                <h4 class="uppercase text-xs text-gray-500 mb-1">2015</h4>
                <h3 class="text-[#11386E] font-semibold mb-2">Intro copy comes here about CSR</h3>
                <p class="text-sm text-[#333] mb-4">Here’s a snippet showcasing the major evolution and growing outreach...</p>
                <div class="flex gap-4">
                    <img src="https://placehold.co/120x80" alt="" />
                    <img src="https://placehold.co/120x80" alt="" />
                    <img src="https://placehold.co/120x80" alt="" />
                </div>
            </div>
        </div>

        <!-- Our Founders -->
        <div class="relative section py-16" data-index="5">
            <div class="absolute top-1 w-5 h-5 bg-blue-500 rounded-sm z-10 dot"></div>
            <!-- <div class="absolute -left-20 top-1 w-6 h-6 bg-white border-2 border-blue-500 rounded-full dot"></div> -->
            <div>
                <h4 class="uppercase text-xs text-gray-500 mb-1">Our Founders</h4>
                <h3 class="text-[#11386E] font-semibold mb-4">“An inspiration quote to come here in three lines”</h3>
                <div class="flex items-center gap-6">
                    <img src="https://placehold.co/200x250" alt="" />
                    <img src="https://placehold.co/200x250" alt="" />
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Scroll Interaction Script -->
<script>
    const timelineProgress = document.getElementById('timeline-progress');
    const sections = document.querySelectorAll('.section');
    const dots = document.querySelectorAll('.dot');

    function updateTimeline() {
        const scrollY = window.scrollY + window.innerHeight / 2;
        const timelineTop = document.querySelector('.section').getBoundingClientRect().top + window.scrollY + 200;

        const timelineBottom = document.body.scrollHeight;
        const totalHeight = timelineBottom - timelineTop;
        const scrolled = Math.min(Math.max(scrollY - timelineTop, 0), totalHeight) - 170;
        //console.log(scrolled);
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
</script>