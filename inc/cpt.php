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
        'rewrite'            => ['slug' => 'casestudies', 'with_front' => false],
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_icon'          => 'dashicons-portfolio',
        'capability_type' => 'post',
    ];

    register_post_type('casestudy', $args);
}
add_action('init', 'nits_register_case_studies_post_type');

/**
 * Register Custom Taxonomies
 */
add_action('init', 'casestudy_custom_taxonomy');
function casestudy_custom_taxonomy()
{
    $labels = array(
        'name'              => __('Casestudy Categories'),
        'singular_name'     => __('CasestudyPost'),
        'search_items'      => __('Search CasestudyCategories'),
        'all_items'         => __('All Casestudy Categories'),
        'parent_item'       => __('Parent Casestudy Categories'),
        'edit_item'         => __('Edit Casestudy Categories'),
        'update_item'       => __('Update Casestudy Categories'),
        'add_new_item'      => __('Add New Casestudy Categories'),
        'new_item_name'     => __('New Casestudy Categories Name'),
        'menu_name'         => __('Casestudy Categories'),
    );
    register_taxonomy('casestudy_categories', array('casestudy'), array(
        'hierarchical'  => true,
        'show_admin_column' => true,
        'labels'        => $labels,
        'show_ui'       => true,
        'query_var'     => true,
        // 'rewrite'       => array('slug' => 'casestudy_categories'),
    ));
}

/**
 * Register Custom Post Type for Solution
 */
function register_solution_cpt()
{
    $labels = array(
        'name'               => _x('Solutions', 'post type general name', 'nits'),
        'singular_name'      => _x('Solution', 'post type singular name', 'nits'),
        'menu_name'          => _x('Solutions', 'admin menu', 'nits'),
        'name_admin_bar'     => _x('Solution', 'add new on admin bar', 'nits'),
        'add_new'            => _x('Add New', 'solution', 'nits'),
        'add_new_item'       => __('Add New Solution', 'nits'),
        'new_item'           => __('New Solution', 'nits'),
        'edit_item'          => __('Edit Solution', 'nits'),
        'view_item'          => __('View Solution', 'nits'),
        'all_items'          => __('All Solutions', 'nits'),
        'search_items'       => __('Search Solutions', 'nits'),
        'not_found'          => __('No solutions found.', 'nits'),
        'not_found_in_trash' => __('No solutions found in Trash.', 'nits')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'solutions'),
        'menu_icon'          => 'dashicons-admin-tools',
        'publicly_queryable' => true,
        'show_in_rest'       => true,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
        'show_in_menu'       => true,
        'menu_position'      => 5,
    );

    register_post_type('solution', $args);
}
add_action('init', 'register_solution_cpt');
