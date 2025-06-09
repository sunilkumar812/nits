<?php

/**
 * Template Name: Contact Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nits
 */
get_header(); ?>
<style>
    .custom-bg {
        /* A more complex gradient trying to mimic the image a bit more */
        background-image: radial-gradient(ellipse at top left, rgba(20, 80, 180, 0.7) 0%, transparent 50%),
            radial-gradient(ellipse at bottom right, rgba(10, 50, 150, 0.6) 0%, transparent 50%),
            linear-gradient(135deg, #0A2A57 0%, #031A36 100%);
    }
</style>

<main id="primary" class="z-4 relative overflow-hidden">
    <div class="custom-bg text-white pt-30 pb-15 md:pt-55 md:pb-50 relative overflow-hidden">
        <div class="main-width">
            <div class="container mx-auto flex flex-col md:flex-row justify-between items-center relative z-10">

                <div class="md:w-2/3 text-center md:text-left mb-12 md:mb-0">
                    <p class="text-gray-300 text-sm md:text-base uppercase tracking-wider mb-3">Get in touch</p>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight">
                        Let's Connect to Transform<br class="hidden md:block"> Your Automotive Business
                    </h1>
                </div>
                <div class="flex flex-col space-y-4">
                    <a href="#" aria-label="Facebook" class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-opacity-10 hover:bg-opacity-20 text-white flex items-center justify-center transition-colors duration-300 border border-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="LinkedIn" class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-opacity-10 hover:bg-opacity-20 text-white flex items-center justify-center transition-colors duration-300 border border-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.594-11.018-3.714v-2.155z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Twitter" class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-opacity-10 hover:bg-opacity-20 text-white flex items-center justify-center transition-colors duration-300 border border-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-.422.724-.665 1.56-.665 2.454 0 1.717.87 3.228 2.229 4.107-.806-.026-1.566-.247-2.229-.616v.054c0 2.396 1.703 4.382 3.958 4.83-.414.111-.849.171-1.296.171-.317 0-.623-.031-.922-.086.63 1.962 2.445 3.397 4.604 3.437-1.693 1.326-3.825 2.112-6.147 2.112-.4 0-.794-.023-1.179-.069 2.189 1.407 4.795 2.229 7.621 2.229 9.141 0 14.137-7.567 14.001-14.346.969-.691 1.798-1.557 2.457-2.54z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-width">
        <div class="contact-page">
            <?php echo do_shortcode('[contact-form-7 id="0a818f1" title="Contact Page"]'); ?>
        </div>
    </div>

    <div class="main-width">
        <div class="grid md:grid-cols-2 gap-12 py-8 md:py-12">
            <!-- Left Column -->
            <div class="space-y-6">
                <h2 class="text-4xl md:text-5xl font-bold text-dark-blue">A copy about FAQs comes here</h2>
                <p class="text-lg text-gray-600">
                    Unlock the potential of your dealership with our advanced AI solutions. Transform raw data into strategic insights that drive success.
                </p>
            </div>

            <!-- Right Column - FAQ -->
            <div class="space-y-2" id="faq-container">
                <!-- FAQ Item 1 -->
                <div class="faq-item" onclick="toggleFaq(0)">
                    <div class="flex items-center justify-between">
                        <h3 class="font-medium text-lg">Question 1?</h3>
                        <span class="text-2xl">+</span>
                    </div>
                    <div class="faq-content">
                        <p class="text-gray-600 mt-2">
                            Answer to question 1 would go here. This is a sample answer that appears when you click on the question.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item" onclick="toggleFaq(1)">
                    <div class="flex items-center justify-between">
                        <h3 class="font-medium text-lg">Question 2?</h3>
                        <span class="text-2xl">+</span>
                    </div>
                    <div class="faq-content">
                        <p class="text-gray-600 mt-2">
                            Answer to question 2 would go here. This is a sample answer that appears when you click on the question.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 (Active by default) -->
                <div class="faq-item active" onclick="toggleFaq(2)">
                    <div class="flex items-center justify-between">
                        <h3 class="font-medium text-lg">Question 3?</h3>
                        <span class="text-2xl">-</span>
                    </div>
                    <div class="faq-content">
                        <p class="text-gray-600 mt-2">
                            Unlock the potential of your dealership with our advanced AI solutions. Transform raw data into strategic insights that drive success.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item" onclick="toggleFaq(3)">
                    <div class="flex items-center justify-between">
                        <h3 class="font-medium text-lg">Question 4?</h3>
                        <span class="text-2xl">+</span>
                    </div>
                    <div class="faq-content">
                        <p class="text-gray-600 mt-2">
                            Answer to question 4 would go here. This is a sample answer that appears when you click on the question.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item" onclick="toggleFaq(4)">
                    <div class="flex items-center justify-between">
                        <h3 class="font-medium text-lg">Question 5?</h3>
                        <span class="text-2xl">+</span>
                    </div>
                    <div class="faq-content">
                        <p class="text-gray-600 mt-2">
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
        'class_container' => '3xl:mb-60 lg:mb-40 mb-20 relative z-5',
    ]); ?>

</main>

<?php get_footer(); ?>

<script>
    function toggleFaq(index) {
        const items = document.querySelectorAll('.faq-item');
        const clickedItem = items[index];
        const isActive = clickedItem.classList.contains('active');

        // Close all items
        items.forEach(item => {
            item.classList.remove('active');
            const icon = item.querySelector('span');
            icon.textContent = '+';
        });

        // If the clicked item wasn't active, activate it
        if (!isActive) {
            clickedItem.classList.add('active');
            const icon = clickedItem.querySelector('span');
            icon.textContent = '-';
        }
    }

    // Initialize first item as active
    document.addEventListener('DOMContentLoaded', () => {
        const firstItem = document.querySelector('.faq-item');
        firstItem.classList.add('active');
        firstItem.querySelector('span').textContent = '-';
    });
</script>