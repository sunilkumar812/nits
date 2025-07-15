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