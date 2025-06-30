<?php
$video_2 = get_field($args['field_name']);
$video_url_2 = $video_2['video_url'] ?? '';
$video_2_thumbnail_url = $video_2['thumbnail'] ?? '';
$video_2_heading = $video_2['heading'] ?? '';
$video_button = $video_2['button'] ?? '';
$video_button_text = $video_button['title'] ?? '';
$video_button_link = $video_button['url'] ?? '';
$video_button_target = $video_button['target'] ?? '_self';
$class_container = $args['class_container'] ?? '';
if (is_array($video_2) && !empty(array_filter($video_2))): ?>
    <div class="main-width flex flex-col lg:flex-row gap-4 lg:gap-20 relative<?= $class_container; ?>">
        <div class="w-full lg:w-6/10 relative">
            <div class="relative aspect-video overflow-hidden group mx-auto shadow-2xl">

                <?php if ($video_url_2): ?>
                    <video id="myVideo" class="absolute rounded-md inset-0 w-full h-full object-cover z-0">
                        <source src="<?= esc_url($video_url_2); ?>" type="video/mp4">
                    </video>
                <?php endif; ?>

                <?php if ($video_2_thumbnail_url): ?>
                    <img
                        id="thumbnail"
                        src="<?= esc_url($video_2_thumbnail_url['url']); ?>"
                        alt="<?= esc_attr($video_2_thumbnail_url['alt']) ?>"
                        class="absolute inset-0 w-full rounded-md h-full object-cover z-2 transition-opacity duration-300 opacity-100" />
                <?php endif; ?>

                <div id="playButton"
                    class="absolute inset-0 flex items-center justify-center bg-transparent z-3 transition-opacity duration-300 opacity-100">
                    <button class="w-20 h-20 bg-white bg-opacity-90 rounded-full flex items-center justify-center hover:scale-105 transition-transform duration-200 cursor-pointer">
                        <svg class="w-10 h-10 text-gray-900" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6.3 2.841A1.5 1.5 0 004 4.11v11.78a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                        </svg>
                    </button>
                </div>
            </div>


        </div>
        <div class="w-full lg:w-4/10 relative flex items-center">
            <div class="">
                <?php if (!empty($video_2_heading)) : ?>
                    <h2 class="text-nitsDarkBlue text-2xl lg:text-4xl font-bold font-type1 mb-7 lg:mb-12"><?= esc_html($video_2_heading); ?></h2>
                <?php endif; ?>
                <?php if (!empty($video_button_text)) : ?>
                    <div>
                        <!-- CTA Button -->
                        <?= get_template_part('partials/core/partial', 'button_primary', [
                            'class' => 'inline-block btn-primary px-3 py-2 lg:px-[22px] lg:py-[17px] rounded-md text-md lg:text-xl font-bold hover:border-1 hover:boreder-nitsLightBlue',
                            'text' => $video_button_text,
                            'link' => $video_button_link,
                            'target' => $video_button_target,
                            'rel' => '',
                        ]); ?>
                    </div>
                <?php endif; ?>
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