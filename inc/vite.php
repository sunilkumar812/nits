<?php
if (!defined('ABSPATH')) exit;


define('DIST_DEF', 'assets/dist');
define('DIST_URI', get_template_directory_uri() . '/' . DIST_DEF);
define('DIST_PATH', get_template_directory() . '/' . DIST_DEF);


$theme_data = wp_get_theme();
define('VITE_SERVER', 'http://localhost:3200');
define('VITE_ENTRY_POINT', 'js/main.js');


// Enqueue Assets
add_action('wp_enqueue_scripts', function () {
    if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT) {
        add_action('wp_head', function () {
            echo '<script type="module" src="' . VITE_SERVER . '/@vite/client"></script>' . "\n";
            echo '<script type="module" src="' . VITE_SERVER . '/' . VITE_ENTRY_POINT . '"></script>' . "\n";
        });
    } else {
        if (file_exists(DIST_PATH . '/.vite/manifest.json')) {
            $manifest = json_decode(file_get_contents(DIST_PATH . '/.vite/manifest.json'), true);

            if (is_array($manifest)) {

                $entry = current($manifest);

                if (!empty($entry['css'])) {
                    foreach ($entry['css'] as $css) {
                        $path = DIST_PATH . '/' . $css;
                        $uri  = DIST_URI . '/' . $css;
                        $ver  = file_exists($path) ? filemtime($path) : null; // cache busting

                        $handle = 'theme-style-' . sanitize_title(basename($css, '.css'));

                        wp_enqueue_style($handle, $uri, [], $ver);
                    }
                }

                if (!empty($entry['file'])) {
                    $path = DIST_PATH . '/' . $entry['file'];
                    $uri  = DIST_URI . '/' . $entry['file'];
                    $ver  = file_exists($path) ? filemtime($path) : null; // cache busting

                    $handle = 'theme-script-' . sanitize_title(basename($entry['file'], '.js'));
                    wp_enqueue_script($handle, $uri, [], $ver, true);
                }
            }
        }
    }
});
