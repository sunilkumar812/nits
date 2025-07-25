<?php
$faqs = $args['field_name'] ?? [];
$show_limit = $args['show_limit'] ?? 3; // Default to showing 3 FAQs initially
?>
<?php if (!empty($faqs['faq_list'])): ?>
    <div class="space-y-2" id="faq-container">
        <?php foreach ($faqs['faq_list'] as $index => $faq): ?>
            <div class="faq-item <?php echo $index >= $show_limit ? 'hidden' : ''; ?>"
                onclick="toggleFaq(<?php echo esc_attr($index); ?>)">
                <div class="flex items-center justify-between">
                    <h3 class="font-medium text-lg text-[#2387FF]">
                        <?php echo esc_html($faq['question']); ?>
                    </h3>
                    <span class="text-2xl">+</span>
                </div>
                <div class="faq-content">
                    <p class="text-[#3B3B3B] mt-2 text-base">
                        <?php echo esc_html($faq['answer']); ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>

        <?php if (count($faqs['faq_list']) > $show_limit): ?>
            <div class="relative pt-4">
                <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-white to-transparent opacity-80 pointer-events-none"></div>
                <button
                    id="show-more-faqs"
                    class="w-full py-3 px-4 bg-[#2387FF] border border-[#2387FF] text-white rounded-lg font-medium hover:bg-white hover:text-[#2387FF] transition-all duration-300"
                    onclick="toggleAllFaqs()">
                    Show More FAQs
                </button>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>


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

    function toggleAllFaqs() {
        const container = document.getElementById('faq-container');
        const hiddenItems = container.querySelectorAll('.faq-item.hidden');
        const showMoreBtn = document.getElementById('show-more-faqs');

        if (hiddenItems.length > 0) {
            // Show all FAQs
            hiddenItems.forEach(item => {
                item.classList.remove('hidden');
            });
            showMoreBtn.textContent = 'Show Less';

            // Add blur removal
            container.querySelector('.bg-gradient-to-t').classList.add('hidden');
        } else {
            // Hide FAQs beyond limit
            const allItems = container.querySelectorAll('.faq-item');
            allItems.forEach((item, index) => {
                if (index >= <?php echo $show_limit; ?>) {
                    item.classList.add('hidden');
                }
            });
            showMoreBtn.textContent = 'Show More FAQs';

            // Restore blur effect
            container.querySelector('.bg-gradient-to-t').classList.remove('hidden');

            // Scroll to top of FAQs if many were shown
            container.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        const firstItem = document.querySelector('.faq-item');
        if (firstItem) {
            firstItem.classList.add('active');
            firstItem.querySelector('span').textContent = '-';
        }
    });
</script>