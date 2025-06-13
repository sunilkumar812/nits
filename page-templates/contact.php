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
        'class_container' => 'text-white pt-30 pb-15 lg:pt-55 lg:pb-50 ',
    ]); ?>

    <!-- Contact Form Section -->
    <?= get_template_part('partials/pages/contact/partial', 'form', [
        'field_name' => 'contact_form_7_shortcode',
        'class_container' => '',
    ]); ?>
    <!-- FAQ Section -->
    <?= get_template_part('partials/pages/contact/partial', 'section_faq', [
        'field_name' => 'faqs',
        'class_container' => '',
    ]); ?>

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