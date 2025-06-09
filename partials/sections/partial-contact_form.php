<?php
$section_contact_form = get_field($args['field_name']);
$class_container = $args['class_container'] ?? '';
$heading_1 = $section_contact_form['heading_1'] ?? '';
$heading_2 = $section_contact_form['heading_2'] ?? '';
$image = $section_contact_form['image'] ?? '';
$form = $section_contact_form['form'] ?? '';

if (is_array($section_contact_form) && !empty(array_filter($section_contact_form))):
    $heading_1_esc = esc_html($heading_1);
    $heading_2_esc = esc_html($heading_2);
?>

    <div class="main-width<?= $class_container; ?>">
        <div class="lg:flex 3xl:flex flex-row gap-20">
            <div class="w-full max-w-[739px]">
                <?php echo get_template_part('partials/core/partial', 'section_heading_2', [
                    'class_container' => '3xl:max-w-[520px] lg:max-w-[471px]',
                    'heading_1' => $heading_1_esc ?? 'CONTACT',
                    'class_heading_1' => '3xl:text-xl font-semibold text-nitsSteelBlue mb-2 lg:mb-3 3xl:mb-3.5',
                    'heading_2' => $heading_2_esc ?? "Get in touch with us We're here to assist you.",
                    'class_heading_2' => '3xl:text-[45px] lg:text-4xl text-xl font-bold text-nitsDarkBlue mb-2 lg:mb-3 3xl:mb-3.5',
                    'heading_desc' => '',
                    'class_heading_desc' => '',
                ]); ?>
                <div class="w-full 3xl:mt-14 lg:mt-12 mt-6">
                    <?php if (!empty($image) && !empty($image['url'])): ?>
                        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_html($image['alt']); ?>" class="w-full mb-4">
                    <?php endif; ?>
                </div>
            </div>
            <div class="w-full max-w-[653px]">
                <div class="contact-page">
                    <?php if (!empty($form)):
                        echo  do_shortcode($form);
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif;
?>