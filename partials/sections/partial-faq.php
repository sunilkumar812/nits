<?php
$faqs = $args['field_name'] ?? [];
?>
<?php if (!empty($faqs['faq_list'])): ?>
    <div class="space-y-2" id="faq-container">
        <?php foreach ($faqs['faq_list'] as $index => $faq): ?>
            <div class="faq-item" onclick="toggleFaq(<?php echo esc_attr($index); ?>)">
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


    document.addEventListener('DOMContentLoaded', () => {
        const firstItem = document.querySelector('.faq-item');
        firstItem.classList.add('active');
        firstItem.querySelector('span').textContent = '-';
    });
</script>