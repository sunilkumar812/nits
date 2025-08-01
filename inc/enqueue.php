<?php
function nits_scripts()
{
    // wp_enqueue_style('nits-style', get_stylesheet_uri(), array(), _S_VERSION);
    // wp_style_add_data('nits-style', 'rtl', 'replace');

    // wp_enqueue_script('nits-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    // if (is_singular() && comments_open() && get_option('thread_comments')) {
    //     wp_enqueue_script('comment-reply');
    // }

    if (is_page_template('page-templates/home_page.php')) {
        wp_enqueue_script(
            'nits-main',
            get_template_directory_uri() . '/js/ajax/home.js',
            array('jquery'),
            filemtime(get_template_directory() . '/js/ajax/home.js'),
            true
        );
    }

    if (is_page_template('page-templates/careers_page.php')) {
        wp_enqueue_script(
            'nits-main',
            get_template_directory_uri() . '/js/ajax/jobs.js',
            array('jquery'),
            filemtime(get_template_directory() . '/js/ajax/jobs.js'),
            true
        );
        wp_enqueue_style('fancybox-css', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css');
        wp_enqueue_script('fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js', [], null, true);
    }

    /**Case study filter pages(Home,) */
    wp_enqueue_script('cs-filter', get_template_directory_uri() . '/js/ajax/home.js', ['jquery'], null, true);
    wp_localize_script('cs-filter', 'nits_ajax_object', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('nits_nonce')
    ]);
}
add_action('wp_enqueue_scripts', 'nits_scripts');
