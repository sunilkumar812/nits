<?php

/**
 * CPTs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nits
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Custom Post Type for Case Studies
 */
function nits_register_case_studies_post_type()
{
    $labels = [
        'name'               => __('Case Studies', 'nits'),
        'singular_name'      => __('Case Study', 'nits'),
        'menu_name'          => __('Case Studies', 'nits'),
        'name_admin_bar'     => __('Case Study', 'nits'),
        'add_new'            => __('Add New', 'nits'),
        'add_new_item'       => __('Add New Case Study', 'nits'),
        'new_item'           => __('New Case Study', 'nits'),
        'edit_item'          => __('Edit Case Study', 'nits'),
        'view_item'          => __('View Case Study', 'nits'),
        'all_items'          => __('All Case Studies', 'nits'),
        'search_items'       => __('Search Case Studies', 'nits'),
        'parent_item_colon'  => __('Parent Case Studies:', 'nits'),
        'not_found'          => __('No case studies found.', 'nits'),
        'not_found_in_trash' => __('No case studies found in Trash.', 'nits'),
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'show_in_rest'       => true,
        'has_archive'        => true,
        'rewrite'            => ['slug' => 'case-studies'],
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_icon'          => 'dashicons-portfolio',
    ];

    register_post_type('case_study', $args);
}
add_action('init', 'nits_register_case_studies_post_type');
