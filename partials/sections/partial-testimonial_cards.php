<?php
// $section_blog = get_field($args['field_name']);
$class_container = $args['class_container'] ?? '';
?>

<div class="main-width <?= esc_attr($class_container); ?>">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-16 lg:gap-32" id="blog-post-results">

        <?php
        echo get_template_part('partials/core/partial', 'card_3', [
            'image' => 'http://localhost/nits/wp-content/uploads/2025/06/Ellipse-16.png',
            'title' => 'NITS has completely transformed how we manage our fixed ops strategy ',
            'description' => 'Their analytics driven approach has helped us streamline our wholesale parts distribution and significantly boost revenue The level of detail in their insights is unparalleled allowing us to make informed decisions faster than ever Theyre not just a vendor theyre a true partner in our success',
            'name' => 'Jim Reynolds',
            'designation' => 'VP of Fixed Operations, Ford - North America',
            'class_container' => ' bg-white overflow-hidden max-w-[416px]',
            //'aos_attributes' => 'data-cursor="inverse" data-aos="fade-down" data-aos-delay="' . esc_attr($delay) . '" data-aos-anchor-placement="top-bottom"',
        ]);
        echo get_template_part('partials/core/partial', 'card_3', [
            'image' => 'http://localhost/nits/wp-content/uploads/2025/06/Ellipse-16.png',
            'title' => 'NITS has completely transformed how we manage our fixed ops strategy ',
            'description' => 'Their analytics driven approach has helped us streamline our wholesale parts distribution and significantly boost revenue The level of detail in their insights is unparalleled allowing us to make informed decisions faster than ever Theyre not just a vendor theyre a true partner in our success',
            'name' => 'Jim Reynolds',
            'designation' => 'VP of Fixed Operations, Ford - North America',
            'class_container' => ' bg-white overflow-hidden max-w-[416px]',
            //'aos_attributes' => 'data-cursor="inverse" data-aos="fade-down" data-aos-delay="' . esc_attr($delay) . '" data-aos-anchor-placement="top-bottom"',
        ]);
        echo get_template_part('partials/core/partial', 'card_3', [
            'image' => 'http://localhost/nits/wp-content/uploads/2025/06/Ellipse-16.png',
            'title' => 'NITS has completely transformed how we manage our fixed ops strategy ',
            'description' => 'Their analytics driven approach has helped us streamline our wholesale parts distribution and significantly boost revenue The level of detail in their insights is unparalleled allowing us to make informed decisions faster than ever Theyre not just a vendor theyre a true partner in our success',
            'name' => 'Jim Reynolds',
            'designation' => 'VP of Fixed Operations, Ford - North America',
            'class_container' => ' bg-white overflow-hidden max-w-[416px]',
            //'aos_attributes' => 'data-cursor="inverse" data-aos="fade-down" data-aos-delay="' . esc_attr($delay) . '" data-aos-anchor-placement="top-bottom"',
        ]);
        ?>
    </div>
</div>