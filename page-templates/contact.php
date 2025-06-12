<?php

/**
 * Template Name: Contact Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nits
 */
get_header(); ?>
<main id="primary" class="z-4 relative overflow-hidden">
    <!-- Hero Section -->
    <?= get_template_part('partials/sections/hero/partial', 'hero_3', [
        // 'field_name' => 'section_blog_cards',
        // 'class_container' => 'py-5 lg:py-10 xl:py-25',
    ]); ?>

    <div class="main-width py-5 lg:pt-20 lg:pb-10">
        <div class="contact-page">
            <?php echo do_shortcode('[contact-form-7 id="0a818f1" title="Contact Page"]'); ?>
        </div>
    </div>

    <div class="main-width bg-[#EEF8FF] py-8 lg:py-24">
        <div class="grid lg:grid-cols-2 gap-12 ">
            <!-- Left Column -->
            <div class="space-y-6 max-w-[472px]">
                <h2 class="text-3xl lg:text-5xl font-bold text-nitsPrimary">A copy about FAQs comes here</h2>
                <p class="text-base text-black">
                    Unlock the potential of your dealership with our advanced AI solutions. Transform raw data into strategic insights that drive success.
                </p>
            </div>

            <!-- Right Column - FAQ -->
            <div class="space-y-2" id="faq-container">
                <!-- FAQ Item 1 -->
                <div class="faq-item" onclick="toggleFaq(0)">
                    <div class="flex items-center justify-between">
                        <h3 class="font-medium text-lg text-[#2387FF]">Question 1?</h3>
                        <span class="text-2xl">+</span>
                    </div>
                    <div class="faq-content">
                        <p class="text-[#3B3B3B] mt-2 text-base">
                            Answer to question 1 would go here. This is a sample answer that appears when you click on the question.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item" onclick="toggleFaq(1)">
                    <div class="flex items-center justify-between">
                        <h3 class="font-medium text-lg text-[#2387FF]">Question 2?</h3>
                        <span class="text-2xl">+</span>
                    </div>
                    <div class="faq-content">
                        <p class="text-[#3B3B3B] mt-2 text-base">
                            Answer to question 2 would go here. This is a sample answer that appears when you click on the question.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 (Active by default) -->
                <div class="faq-item active" onclick="toggleFaq(2)">
                    <div class="flex items-center justify-between">
                        <h3 class="font-medium text-lg text-[#2387FF]">Question 3?</h3>
                        <span class="text-2xl">-</span>
                    </div>
                    <div class="faq-content">
                        <p class="text-[#3B3B3B] mt-2 text-base">
                            Unlock the potential of your dealership with our advanced AI solutions. Transform raw data into strategic insights that drive success.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item" onclick="toggleFaq(3)">
                    <div class="flex items-center justify-between">
                        <h3 class="font-medium text-lg text-[#2387FF]">Question 4?</h3>
                        <span class="text-2xl">+</span>
                    </div>
                    <div class="faq-content">
                        <p class="text-[#3B3B3B] mt-2 text-base">
                            Answer to question 4 would go here. This is a sample answer that appears when you click on the question.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item" onclick="toggleFaq(4)">
                    <div class="flex items-center justify-between">
                        <h3 class="font-medium text-lg text-[#2387FF]">Question 5?</h3>
                        <span class="text-2xl">+</span>
                    </div>
                    <div class="faq-content">
                        <p class="text-[#3B3B3B] mt-2 text-base">
                            Answer to question 5 would go here. This is a sample answer that appears when you click on the question.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Testimonial Section -->
    <?= get_template_part('partials/sections/partial', 'testimonial_cards', [
        // 'field_name' => 'section_blog_cards',
        'class_container' => 'py-5 lg:py-10 xl:py-25',
    ]); ?>

    <!-- Newsletter Subscription Section -->
    <div class="main-width bg-nitsBluePlus py-10 lg:py-20">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
            <!-- Text Content -->
            <div class="max-w-xl">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Subscribe to our Newsletter</h2>
                <p class="text-blue-100 text-lg">
                    Subscribe for Updates: Stay informed about the latest investor updates, financial results, and announcements by subscribing to our newsletter.
                </p>
            </div>

            <!-- Subscription Form -->
            <div class="w-full md:w-auto">
                <div class="flex flex-col sm:flex-row gap-4">
                    <input
                        type="email"
                        placeholder="Enter your email"
                        class="px-6 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-white/50 w-full">
                    <button class="bg-white text-custom-blue font-semibold px-8 py-3 rounded-full hover:bg-opacity-90 transition-colors whitespace-nowrap">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

<script>
    function toggleFaq(index) {
        const items = document.querySelectorAll('.faq-item');
        const clickedItem = items[index];
        const isActive = clickedItem.classList.contains('active');


        items.forEach(item => {
            item.classList.remove('active');
            const icon = item.querySelector('span');
            icon.textContent = '+';
        });


        if (!isActive) {
            clickedItem.classList.add('active');
            const icon = clickedItem.querySelector('span');
            icon.textContent = '-';
        }
    }


    document.addEventListener('DOMContentLoaded', () => {
        const firstItem = document.querySelector('.faq-item');
        firstItem.classList.add('active');
        firstItem.querySelector('span').textContent = '-';
    });
</script>