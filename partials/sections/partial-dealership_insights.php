<div class="main-width mb-24" style="background-image: url('http://localhost/nits/wp-content/uploads/2025/05/kklcf-1.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="absolute top-0 left-0 w-full h-16 bg-white blur-md z-10"></div>

    <!-- Bottom Blur -->
    <div class="absolute bottom-0 left-0 w-full h-16 bg-white blur-md z-10"></div>
    <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
        <!-- Left Content Section -->
        <div class="lg:w-1/2 space-y-8">
            <h1 class="text-3xl lg:text-5xl/15 font-bold text-nitsDarkBlue mb-[17px]">
                Empowering Dealerships with<br>
                AI-Driven Insights for Enhanced<br>
                Performance
            </h1>

            <p class="text-md lg:text-lg/7 text-black font-roboto mb-11">
                Unlock the potential of your dealership with our advanced AI solutions.
                Transform raw data into strategic insights that drive success.
            </p>

            <!-- Team/Avatar Section -->
            <div class="flex items-center gap-2 mb-5">
                <div class="flex -space-x-2">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Team member" class="w-[65px] h-[65px] rounded-full border-2 border-[#FFB525]">
                    <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Team member" class="w-[65px] h-[65px] rounded-full border-2 border-[#FFB525]">
                    <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Team member" class="w-[65px] h-[65px] rounded-full border-2 border-[#FFB525]">
                </div>
            </div>

            <!-- Stats Section -->
            <div class="flex gap-12 mb-20">
                <div class="">
                    <h3 class="text-3xl lg:text-5xl/11 font-bold text-nitsDarkBlue">5K+</h3>
                    <p class="text-xl text-black font-roboto">Dealerships Worldwide</p>
                </div>
                <div class="">
                    <h3 class="text-3xl lg:text-5xl/11 font-bold text-nitsDarkBlue">5Mn+</h3>
                    <p class="text-xl text-black font-roboto">Reports Generated</p>
                </div>
            </div>

            <!-- CTA Button -->
            <?= get_template_part('partials/core/partial', 'button_primary', [
                'class' => 'btn-primary px-[22px] py-[17px] rounded-md text-xl font-bold hover:border-1 hover:boreder-nitsLightBlue',
                'text' => 'Learn More',
                'link' =>  '/explore-solutions',
            ]); ?>
        </div>

        <!-- Right Image Section -->
        <!-- <div class="lg:w-1/2 relative">
            <div class="relative">
                <div class="absolute inset-0 bg-blue-100 opacity-20 rounded-3xl transform rotate-3"></div>
                <img src="http://localhost/nits/wp-content/uploads/2025/05/img-09.jpg"
                    alt="Modern car visualization"
                    class="relative z-10 rounded-2xl shadow-lg max-w-full h-auto">
            </div>
            Floating Elements -->
        <!-- <div class="absolute -top-4 -right-4 w-20 h-20 bg-blue-500 rounded-xl transform rotate-12 opacity-20"></div>
            <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-blue-700 rounded-xl transform -rotate-12 opacity-20"></div> 
        </div> -->
    </div>
</div>