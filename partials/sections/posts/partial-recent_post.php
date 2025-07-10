<div class="main-width mb-10 lg:mb-30">
    <h2 class="text-xl lg:text-3xl font-bold mb-8 font-type1">Our Recent Post</h2>
    <div class="bg-white overflow-hidden lg:flex gap-8">
        <!-- Image Section -->
        <div class="md:w-1/2">
            <img
                src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1478&q=80"
                alt="Man wearing VR headset"
                class="w-full h-full object-cover md:max-h-96 rounded-lg">
        </div>

        <!-- Content Section -->
        <div class="p-5 md:w-1/2 flex flex-col justify-top">
            <div class="text-xs text-gray-500 uppercase tracking-wide mb-5 lg:mb-10">
                <span class="text-black"><b>DEVELOPMENT</b></span>
                <span class="ml-4">16 March 2023</span>
            </div>
            <h3 class="text-xl lg:text-2xl font-semibold mb-4 lg:mb-5 font-type1">How to make a Game look more attractive with New VR & AI Technology</h3>
            <p class="text-gray-700 text-sm lg:text-base mb-6 lg:mb-12">
                Discover how the latest advancements in VR and AI are revolutionizing game development, creating more immersive and visually stunning gaming experiences than ever before.
            </p>

            <div class="">
                <?= get_template_part('partials/core/partial', 'button_primary', [
                    'class' => 'inline-block btn-primary px-[22px] py-[17px] rounded-md text-xl font-bold border border-1 hover:border-1 hover:boreder-nitsLightBlue',
                    'text' => 'Read More',
                    'link' =>  '#',
                ]); ?>
            </div>
            <!-- <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-gray-300 mr-3 overflow-hidden">
                    <img
                        src="https://randomuser.me/api/portraits/men/32.jpg"
                        alt="Author"
                        class="w-full h-full object-cover">
                </div>
                <div>
                    <p class="text-sm font-medium">John Doe</p>
                    <p class="text-xs text-gray-500">Game Developer</p>
                </div>
            </div> -->
        </div>
    </div>
</div>