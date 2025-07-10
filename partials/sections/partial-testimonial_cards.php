<?php
$testimonials = get_field($args['field_name']);
$cards = $testimonials['card'] ?? [];
$class_container = $args['class_container'] ?? '';

if (!empty($cards)) :
    $delay = 100; // initialize delay
?>
    <div class="main-width <?= esc_attr($class_container); ?>">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-16 lg:gap-32" id="blog-post-results">

            <?php foreach ($cards as $card) :
                $user_name = $card['user_name'] ?? '';
                $user_image = $card['user_image'] ?? '';
                $user_image_url = $user_image['url'] ?? '';
                $user_image_alt = $user_image['alt'] ?? '';
                $title = $card['title'] ?? '';
                $description = $card['description'] ?? '';
                $designation = $card['designation'] ?? '';

                echo get_template_part('partials/core/partial', 'card_3', [
                    'image' => $user_image_url,
                    'image_alt' => $user_image_alt,
                    'title' => $title,
                    'description' => $description,
                    'name' => $user_name,
                    'designation' => $designation,
                    'class_container' => 'bg-white overflow-hidden max-w-[416px]',
                    'aos_attributes' => 'data-cursor="inverse" data-aos="fade-down" data-aos-delay="' . esc_attr($delay) . '" data-aos-anchor-placement="top-bottom"',
                ]);

                $delay += 100;
            endforeach; ?>
        </div>
    </div>
<?php endif; ?>