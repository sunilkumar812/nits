<?php
$form_shortcode = get_field($args['field_name']);
$class_container = $args['class_container'];

if (!empty($form_shortcode)): ?>
    <div class="main-width py-5 lg:pt-20 lg:pb-10<?= esc_attr($class_container); ?>">
        <div class="contact-page">
            <?php
            echo do_shortcode($form_shortcode);
            ?>
        </div>
    </div>
<?php endif; ?>