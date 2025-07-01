<div class="hero-section min-h-screen flex items-center text-white px-4 md:px-8 lg:px-16 xl:px-32 py-16"
    style="background: radial-gradient(163.95% 163.95% at 38.75% -26.63%, #2387FF 51.42%, #155199 100%);">
    <div class="container mx-auto flex flex-col md:flex-row items-center">

        <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight font-type1">
                Ready to Grow Your Parts Business?
            </h1>
            <p class="text-xl mb-8 text-gray-200">
                Let's talk. Our team is here to walk you through how Wholesale Parts Pro can help you hit your goals faster and smarter.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <?= get_template_part('partials/core/partial', 'button_primary', [
                    'class' => 'inline-block bg-gradient-277 px-3 py-2 lg:px-[22px] lg:py-[17px] rounded-md text-md lg:text-xl font-bold',
                    'text' => 'Call Us Directly',
                    'link' => '',
                    'target' => '',
                    'rel' => '',
                ]); ?>
                <?= get_template_part('partials/core/partial', 'button_primary', [
                    'class' => 'inline-block bg-white text-nitsDarkBlue px-3 py-2 lg:px-[22px] lg:py-[17px] rounded-md text-md lg:text-xl font-bold',
                    'text' => 'Leave us a Message ',
                    'link' => '',
                    'target' => '',
                    'rel' => '',
                ]); ?>
            </div>
        </div>

        <div class="md:w-1/2 flex justify-center">
            <img
                src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80"
                alt="Business woman smiling"
                class="rounded-lg shadow-2xl max-w-full h-auto md:max-w-md lg:max-w-lg">
        </div>

    </div>
</div>