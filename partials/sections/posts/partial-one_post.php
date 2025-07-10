<div class="main-width mb-10 lg:mb-30">
    <!-- Card Container -->
    <div class="overflow-hidden">
        <!-- Image with Purple Background -->
        <div class="relative">
            <div class="bg-purple-600 h-48 md:h-100" style="box-shadow: 19px 24px 20px 5px rgba(186,221,255,0.98);
-webkit-box-shadow: 19px 24px 20px 5px rgba(186,221,255,0.98);
-moz-box-shadow: 19px 24px 20px 5px rgba(186,221,255,0.98);">
                <img
                    src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1478&q=80"
                    alt="Man wearing VR headset"
                    class="w-full h-full object-cover object-center rounded-lg">
            </div>

            <!-- Content Section (overlaps image) -->
            <div class="relative bg-blue-50 p-8 lg:p-16 -mt-32 rounded-md max-w-[75%] ml-auto">
                <!-- Tags -->
                <div class="text-xs text-gray-500 uppercase tracking-wide mb-5 lg:mb-10">
                    <span class="text-black"><b>DEVELOPMENT</b></span>
                    <span class="ml-4">16 March 2023</span>
                </div>

                <!-- Title -->
                <h2 class="text-xl lg:text-2xl font-bold mb-3 font-type1">How to make a Game look more attractive with New VR & AI Technology</h2>

                <!-- Description -->
                <p class="text-gray-600 text-sm lg:text-base mb-4 lg:mb-8">
                    Google has been investing in AI for many years and bringing its benefits to individuals, businesses and communities. Whether it’s publishing state-of-the-art research, building helpful products or developing tools and resources that enable others, we’re committed to making AI accessible to everyone.

                </p>

                <div class="">
                    <?= get_template_part('partials/core/partial', 'button_primary', [
                        'class' => 'inline-block btn-primary px-[22px] py-[17px] rounded-md text-xl font-bold border border-1 hover:border-1 hover:boreder-nitsLightBlue',
                        'text' => 'Read More',
                        'link' =>  '#',
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>