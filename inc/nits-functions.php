<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package nits
 */

/**
 * Save ACF files as json
 */
add_filter('acf/settings/save_json', function ($path) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
});
