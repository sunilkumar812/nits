<?php
$page_id = $args['page_id'] ?? null;
$field_name = $args['field_name'] ?? '';
$subscribe = !empty($page_id)
    ? get_field($field_name, $page_id)
    : get_field($field_name);

$subscribe = is_array($subscribe) ? $subscribe : [];
$heading         = $subscribe['heading'] ?? '';
$description     = $subscribe['description'] ?? '';
$form_shortcode  = $subscribe['form_shortcode'] ?? '';
$class_container = $args['class_container'] ?? 'bg-nitsBluePlus py-10 lg:py-20';
?>

<?php if (!empty($heading) || !empty($description)) : ?>
    <div class="<?= esc_attr($class_container); ?> relative overflow-hidden">
        <div class="main-width">
            <div class="flex flex-col md:flex-row items-center gap-16">

                <!-- Text Content -->
                <?php if (!empty($heading) || !empty($description)) : ?>
                    <div class="w-full md:w-1/2">
                        <?php if (!empty($heading)) : ?>
                            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 font-type1">
                                <?= esc_html($heading); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if (!empty($description)) : ?>
                            <p class="text-blue-100 text-lg">
                                <?= esc_html($description); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <!-- Subscription Form -->
                <div class="w-full md:w-1/2">
                    <?php if (!empty($form_shortcode)) : ?>
                        <?= do_shortcode($form_shortcode); ?>
                    <?php else : ?>
                        <div class="flex flex-col sm:flex-row">
                            <input
                                type="email"
                                placeholder="Enter your email"
                                class="px-6 py-5 focus:outline-none text-white focus:ring-2 focus:ring-white/50 w-full bg-[#ffffff42]">
                            <button class="bg-white text-custom-blue font-semibold px-8 py-5 hover:bg-opacity-90 transition-colors whitespace-nowrap cursor-pointer">
                                Subscribe
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>