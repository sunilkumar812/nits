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
}
add_action('wp_enqueue_scripts', 'nits_scripts');
