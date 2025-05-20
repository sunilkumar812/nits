<?php

$section_video = get_field($args['field_name']);
$video_url = $section_video['video_url'] ?? '';
$thumbnail_url = $section_video['thumbnail'] ?? '';
$class_container = $args['class_container'] ?? '';
?>
<?php if (!empty(array_filter($section_video))): ?>
    <div class="main-width relative<?= $class_container; ?>">
        <div class="relative aspect-video overflow-hidden group h-[200px] lg:h-[500px] 3xl:h-[727px] mx-auto">
            <?php if ($thumbnail_url): ?>
                <img id="thumbnail" src="<?= esc_url($thumbnail_url['url']); ?>" alt="<?= esc_html($thumbnail_url['alt']) ?>" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-300">
            <?php endif;
            if ($video_url): ?>
                <video id="myVideo" class="w-full h-full object-cover">
                    <source src="<?= esc_url($video_url); ?>" type="video/mp4">
                </video>
            <?php endif;
            ?>
            <div id="playButton" class="absolute inset-0 flex items-center justify-center bg-opacity-40 group-hover:bg-opacity-30 transition-all duration-300">
                <button class="w-20 h-20 bg-white bg-opacity-90 rounded-full flex items-center justify-center transform hover:scale-105 transition-transform duration-200 group-hover:bg-opacity-100 cursor-pointer">
                    <svg class="w-10 h-10 text-gray-900" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M6.3 2.841A1.5 1.5 0 004 4.11v11.78a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <script>
        const video = document.getElementById('myVideo');
        const playButton = document.getElementById('playButton');
        const thumbnail = document.getElementById('thumbnail');

        playButton.addEventListener('click', () => {
            if (video.paused) {
                video.play();
                playButton.style.opacity = '0';
                thumbnail.style.opacity = '0';
            } else {
                video.pause();
                playButton.style.opacity = '1';
                thumbnail.style.opacity = '1';
            }
        });

        // Show thumbnail and play button initially
        thumbnail.style.opacity = '1';
        playButton.style.opacity = '1';

        video.addEventListener('pause', () => {
            playButton.style.opacity = '1';
            thumbnail.style.opacity = '1';
        });

        video.addEventListener('play', () => {
            playButton.style.opacity = '0';
            thumbnail.style.opacity = '0';
        });
    </script>
<?php endif; ?>