<?php

$field_name = $args['field_name'] ?? '';
$use_option = isset($args['option']) && $args['option'] === 'yes';

if (isset($args['page_id'])) {
    $section_blog = get_field($field_name, $args['page_id']);
} elseif ($use_option) {
    $section_blog = get_field($field_name, 'option');
} else {
    $section_blog = get_field($field_name);
}

$post_type = $args['post_type'] ?? 'post';
$taxonomy = $args['taxonomy'] ?? 'category';
$sb_icon = $section_blog['icon']['url'] ?? '';
$sb_icon_heading = $section_blog['icon_heading'] ?? '';
$sb_heading = $section_blog['heading'] ?? '';
$sb_heading_desc = $section_blog['heading_desc'] ?? '';
$class_container = $args['class_container'] ?? 'mb-24';
$heading_class = $args['heading_class'] ?? 'mb-5 lg:mb-8 3xl:mb-15';

echo nits_common_post_listing([
    'post_type' => $post_type,
    'posts_per_page' => 9,
    'taxonomy' => $taxonomy,
    'icon' => $sb_icon,
    'icon_heading' => $sb_icon_heading,
    'heading' => $sb_heading,
    'heading_desc' => $sb_heading_desc,
    'class_container' => $class_container,
    'heading_class' => $heading_class,
]);
