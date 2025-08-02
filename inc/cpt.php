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


// Register Custom Post Type: Jobs
function nits_register_jobs_post_type()
{

    $labels = array(
        'name'               => _x('Jobs', 'Post Type General Name', 'nits'),
        'singular_name'      => _x('Job', 'Post Type Singular Name', 'nits'),
        'menu_name'          => __('Jobs', 'nits'),
        'name_admin_bar'     => __('Job', 'nits'),
        'add_new'            => __('Add New', 'nits'),
        'add_new_item'       => __('Add New Job', 'nits'),
        'new_item'           => __('New Job', 'nits'),
        'edit_item'          => __('Edit Job', 'nits'),
        'view_item'          => __('View Job', 'nits'),
        'all_items'          => __('All Jobs', 'nits'),
        'search_items'       => __('Search Jobs', 'nits'),
        'not_found'          => __('No jobs found', 'nits'),
        'not_found_in_trash' => __('No jobs found in Trash', 'nits'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_admin_bar'  => true,
        'publicly_queryable' => false,
        'show_in_rest'       => true,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-clipboard',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'taxonomies'         => array('post_tag'), // Support for tags
        'has_archive'        => false,
        'rewrite'            => false,
        'capability_type'    => 'post',
    );

    register_post_type('jobs', $args);
}
add_action('init', 'nits_register_jobs_post_type');

// Register Custom Taxonomy: Job Category
function nits_register_job_category_taxonomy()
{

    $labels = array(
        'name'              => _x('Job Categories', 'taxonomy general name', 'nits'),
        'singular_name'     => _x('Job Category', 'taxonomy singular name', 'nits'),
        'search_items'      => __('Search Job Categories', 'nits'),
        'all_items'         => __('All Job Categories', 'nits'),
        'parent_item'       => __('Parent Category', 'nits'),
        'parent_item_colon' => __('Parent Category:', 'nits'),
        'edit_item'         => __('Edit Job Category', 'nits'),
        'update_item'       => __('Update Job Category', 'nits'),
        'add_new_item'      => __('Add New Job Category', 'nits'),
        'new_item_name'     => __('New Job Category Name', 'nits'),
        'menu_name'         => __('Job Categories', 'nits'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => false,
        'public'            => false,
        'show_in_rest'      => true,
    );

    register_taxonomy('job_category', array('jobs'), $args);
}
add_action('init', 'nits_register_job_category_taxonomy');


/**
 * Register Custom Post Type for News
 */
function nits_register_news_post_type()
{
    $labels = [
        'name'               => __('News', 'nits'),
        'singular_name'      => __('News', 'nits'),
        'menu_name'          => __('News', 'nits'),
        'name_admin_bar'     => __('News', 'nits'),
        'add_new'            => __('Add New', 'nits'),
        'add_new_item'       => __('Add New News Item', 'nits'),
        'new_item'           => __('New News Item', 'nits'),
        'edit_item'          => __('Edit News Item', 'nits'),
        'view_item'          => __('View News Item', 'nits'),
        'all_items'          => __('All News', 'nits'),
        'search_items'       => __('Search News', 'nits'),
        'parent_item_colon'  => __('Parent News:', 'nits'),
        'not_found'          => __('No news items found.', 'nits'),
        'not_found_in_trash' => __('No news items found in Trash.', 'nits'),
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'show_in_rest'       => true,
        'has_archive'        => true,
        'rewrite'            => ['slug' => 'news', 'with_front' => false],
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_icon'          => 'dashicons-megaphone',
        'capability_type'    => 'post',
    ];

    register_post_type('news', $args);
}
add_action('init', 'nits_register_news_post_type');

/**
 * Register Custom Taxonomy for News Categories
 */
function nits_register_news_categories_taxonomy()
{
    $labels = [
        'name'              => __('News Categories', 'nits'),
        'singular_name'     => __('News Category', 'nits'),
        'search_items'      => __('Search News Categories', 'nits'),
        'all_items'         => __('All News Categories', 'nits'),
        'parent_item'       => __('Parent News Category', 'nits'),
        'edit_item'         => __('Edit News Category', 'nits'),
        'update_item'       => __('Update News Category', 'nits'),
        'add_new_item'      => __('Add New News Category', 'nits'),
        'new_item_name'     => __('New News Category Name', 'nits'),
        'menu_name'         => __('News Categories', 'nits'),
    ];

    register_taxonomy('news_categories', ['news'], [
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        // 'rewrite'        => ['slug' => 'news-categories'], // optional
    ]);
}
add_action('init', 'nits_register_news_categories_taxonomy');
