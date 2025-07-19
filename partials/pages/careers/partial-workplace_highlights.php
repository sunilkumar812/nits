<?php
$workplace_highlights = get_field($args['field_name']);
$wh_heading = $workplace_highlights['heading'] ?? '';
$cards = $workplace_highlights['cards'] ?? [];
$class_container = $args['class_container'] ?? 'py-16';
?>

<div class="<?= esc_attr($class_container); ?>">
    <div class="max-w-7xl mx-auto px-4">
        <?php if (!empty($wh_heading)) : ?>
            <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-14 font-type1 max-w-md mx-auto">
                <?= esc_html($wh_heading); ?>
            </h2>
        <?php endif; ?>

        <?php if (!empty($cards)) : ?>
            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">

                <?php foreach ($cards as $card) :
                    $image = $card['image'] ?? null;
                    $card_heading = $card['heading'] ?? '';
                    $description = $card['description'] ?? '';
                ?>

                    <div>
                        <?php if (!empty($image)) : ?>
                            <img
                                src="<?= esc_url($image['url']); ?>"
                                alt="<?= esc_attr($image['alt'] ?? $card_heading); ?>"
                                class="w-full h-48 object-cover rounded-lg mb-6 shadow-md" />
                        <?php endif; ?>

                        <?php if (!empty($card_heading)) : ?>
                            <h3 class="text-lg lg:text-2xl font-normal mb-4">
                                <?= esc_html($card_heading); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if (!empty($description)) : ?>
                            <p class="text-[#1E1E1E] text-sm lg:text-base">
                                <?= esc_html($description); ?>
                            </p>
                        <?php endif; ?>
                    </div>

                <?php endforeach; ?>

            </div>
        <?php endif; ?>
    </div>
</div>
<h1 class="text-3xl md:text-4xl font-semibold mb-12 text-center max-w-screen-md px-4">
    Take a peep at what goes on at NITS
</h1>

<!-- Gallery Grid -->
<section id="gallery" class="grid grid-cols-6 grid-rows-6 gap-4 w-full max-w-5xl px-4">
    <!-- Big Image -->
    <button class="col-span-3 row-span-3 focus:outline-none" onclick="openModal(this)" data-full="https://picsum.photos/id/1011/1200/800">
        <img src="https://picsum.photos/id/1011/600/400" alt="Gallery image" class="w-full h-full object-cover rounded-lg">
    </button>
    <!-- Top Right Two small images -->
    <button class="col-span-2 row-span-2 focus:outline-none" onclick="openModal(this)" data-full="https://picsum.photos/id/1025/800/1000">
        <img src="https://picsum.photos/id/1025/400/500" alt="Gallery image" class="w-full h-full object-cover rounded-lg">
    </button>
    <button class="col-span-1 row-span-2 focus:outline-none" onclick="openModal(this)" data-full="https://picsum.photos/id/1005/800/1000">
        <img src="https://picsum.photos/id/1005/400/500" alt="Gallery image" class="w-full h-full object-cover rounded-lg">
    </button>
    <!-- Center Right Tall image -->
    <button class="col-span-1 row-span-2 focus:outline-none" onclick="openModal(this)" data-full="https://picsum.photos/id/1041/800/1000">
        <img src="https://picsum.photos/id/1041/400/500" alt="Gallery image" class="w-full h-full object-cover rounded-lg">
    </button>
    <!-- Bottom Row three small images -->
    <button class="col-span-2 row-span-2 focus:outline-none" onclick="openModal(this)" data-full="https://picsum.photos/id/1021/1000/800">
        <img src="https://picsum.photos/id/1021/500/400" alt="Gallery image" class="w-full h-full object-cover rounded-lg">
    </button>
    <button class="col-span-2 row-span-2 focus:outline-none" onclick="openModal(this)" data-full="https://picsum.photos/id/1024/1000/800">
        <img src="https://picsum.photos/id/1024/500/400" alt="Gallery image" class="w-full h-full object-cover rounded-lg">
    </button>
    <button class="col-span-2 row-span-2 focus:outline-none bg-blue-600 hover:bg-blue-700 rounded-lg flex items-center justify-center text-lg font-medium text-white" onclick="document.location='#'">
        Explore more →
    </button>
</section>

<!-- Modal Overlay -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-80 hidden items-center justify-center z-50">
    <div class="relative">
        <button id="closeModalBtn" class="absolute top-2 right-2 text-white text-3xl font-bold hover:text-gray-300" aria-label="Close">&times;</button>
        <img id="modalImg" src="" alt="Full size image" class="max-h-[90vh] max-w-[90vw] rounded-lg shadow-lg">
    </div>
</div>

<script>
    // Opens the modal and sets the full-size image
    function openModal(btn) {
        const fullSrc = btn.getAttribute('data-full');
        const modal = document.getElementById('modal');
        const modalImg = document.getElementById('modalImg');
        modalImg.src = fullSrc;
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    // Close the modal
    function closeModal() {
        const modal = document.getElementById('modal');
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    // Close when clicking outside the image
    document.getElementById('modal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });

    // Close on ESC key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            const modal = document.getElementById('modal');
            if (!modal.classList.contains('hidden')) {
                closeModal();
            }
        }
    });

    // Close on Close Button
    document.getElementById('closeModalBtn').addEventListener('click', closeModal);
</script>