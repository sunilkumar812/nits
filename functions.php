<?php

/**
 * Nits functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nits
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nits_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Nits, use a find and replace
		* to change 'nits' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('nits', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'nits'),
			'menu-2' => esc_html__('Footer', 'nits'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			// 'comment-form',
			// 'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'nits_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'nits_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nits_content_width()
{
	$GLOBALS['content_width'] = apply_filters('nits_content_width', 640);
}
add_action('after_setup_theme', 'nits_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nits_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'nits'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'nits'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'nits_widgets_init');


/**
 * Submits Contact Form 7 data to an external API.
 *
 * @param WPCF7_ContactForm $contact_form The Contact Form 7 instance.
 */




add_action('wp_ajax_my_custom_ajax_action', 'my_custom_php_function');
add_action('wp_ajax_nopriv_my_custom_ajax_action', 'my_custom_php_function');

function my_custom_php_function() {
    $name = sanitize_text_field($_POST['name']);
	$email = sanitize_text_field($_POST['email']);
	$phone = sanitize_text_field($_POST['phoneNumber']);
	$message = sanitize_text_field($_POST['message']);
	$company = sanitize_text_field($_POST['company']);
	$jobTitle = sanitize_text_field($_POST['jobTitle']);
	$interestedProduct = sanitize_text_field($_POST['interestedProduct']);
	$dealerName = sanitize_text_field($_POST['dealerName']);
	$api_key = '1129188-4062545251366749954890331440401-6XEY7AVh3ZJNmL9Nj7WIdPTFPIgBChrMD5c0hDrOcL1W3RpcAy'; // Replace with your actual API key
        $api_url = 'https://api.lessannoyingcrm.com/v2/';
	$api_user_key = "1129188";//user id in LA CRM

	// Send the email
	
	// $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>');
	// Email details
	
	// $from = 'no-reply@nitssolutions.com';
	// $to = 'gpatra@nitssolutions.com'; // Replace with the recipient email address
	// $subject = 'New Contact Form Submission from ' . $name;
	// $body = "Name: " . $name . "\n";
	// $body .= "Email: " . $email . "\n";
	// $body .= "Message: " . $message . "\n";
	// $body .= "Phone: " . $phone . "\n";
	// $body .= "Company: " . $company . "\n";
	// $body .= "Dealer Name: " . $dealerName . "\n";
	// $body .= "Product Of Interest: " . $interestedProduct . "\n";
	// $body .= '-- This is a notification that a contact form was submitted on your website.';

	// $headers[] = 'MIME-Version: 1.0';
    // $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    // $headers[] .= "Organization: Sender Organization";
    // $headers[] .= "X-Priority: 3";
    // $headers[] .= "X-Mailer: PHP". phpversion();
	// $headers[] = 'From: ' . $name . ' <' . $email . '>';
	// // $headers = array('Content-Type: text/html; charset=iso-8859-1','X-Priority: 3', 'Organization: Sender Organization', 'MIME-Version: 1.0', 'From: ' . $name . ' <' . $email . '>');
    // // $sent = wp_mail($to, $subject, $body, implode("\r\n", $headers));
	// $sent = mail($to, $subject, $body, implode("\r\n", $headers),"-f$from");





	// Step 2: Create Contact linked to Company
	$contact_response = wp_remote_post($api_url, [
		'headers' => [
			'Authorization' => $api_key,
			'Content-Type'  => 'application/json',
		],
		'body' => json_encode([
			'Function' => 'CreateContact',
			'Parameters' => [
				'FullName' => $name,
				'Name' => $name,
				'Email'     => $email,
				'Phone'		=> $phone,
				'AssignedTo' => $api_user_key,//user id in LA CRM
				'BackgroundInfo' => $message,
				'Background Info' => $message,
				// 'CompanyId'   => $company_id,
				'CompanyName' => $company,
				'Company Name' => $company,
				'IsCompany'   => false,
				'Job Title'	  => $jobTitle,
				'Dealer Name'   => $dealerName
				// 'Tags'        => ['Lead'],
				// 'CustomFields' => [
				// 	'JobTitle'		=> $jobTitle,
				// 	'InterestedProduct' => $interestedProduct,
				// 	'LeadSource' => 'Pipeline B'
				// ]
			]
		])
	]);


	$contact_data = json_decode(wp_remote_retrieve_body($contact_response), true);
	$contact_id = $contact_data['ContactId'] ?? null;

	if ($contact_id) {
		$pipeline_response = wp_remote_post($api_url, [
			'headers' => [
				'Authorization' => $api_key,
				'Content-Type'  => 'application/json'
			],
			'body' => json_encode([
			'Function' => 'CreatePipelineItem',
			'Parameters' => [
				'ContactId'     => $contact_id,
				'PipelineName'  => 'Pipeline B', // Must match an existing pipeline name
				'Status'        => 'New Lead',       // Must match a valid status in that pipeline
				'AssignedTo'    => $api_user_key,
				'Note'          => 'Lead submitted via WordPress form',
				'PipelineId'	=> '4052181071723722874856587814908',
				'StatusId'		=> '4052181072549214672155091252321',
				'Calendar Year' => '2025',
				'Opportunity'	=> '',
				'Description'	=> '',
				'Probability'	=> '',
				'Product'		=> $interestedProduct,
				'Expected Landing Date'	=> '',
				'PO / Line Number'	=> '',
				'Dealer Name'   => $dealerName
			]
			])
		]);

		$pipeline_data = json_decode(wp_remote_retrieve_body($pipeline_response), true);
	}




	if (is_wp_error($response)) {
		error_log('LACRM API error: ' . $response->get_error_message());
	}
    $contact_data = json_decode(wp_remote_retrieve_body($contact_response), true);
    error_log('LACRM Contact created: ' . print_r($contact_data, true));

    // Your custom logic here
    error_log("Button clicked by: $name");

    echo "Hello, $name,$contact_id, $pipeline_data!";
    wp_die(); // Required to terminate AJAX call
}
/**
*LA CRM Form Integration End
**/



/** Captcha Code Integration Start **/
add_action('init', function() {
    if (!session_id()) {
        session_start();
    }
    if (empty($_SESSION['captcha_code'])) {
        $_SESSION['captcha_code'] = substr(str_shuffle("ABCDEFGHJKLMNPQRSTUVWXYZ23456789"), 0, 6);
    }
});

function show_captcha_code() {
    return '<div style="font-size:20px; font-weight:bold;">' . $_SESSION['captcha_code'] . '</div>';
}
add_shortcode('captcha_code', 'show_captcha_code');


/** Captcha Code Integration End **/



/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Nits CPT
 */
require get_template_directory() . '/inc/cpt.php';

/**
 * Mega menu walker
 */
require get_template_directory() . '/inc/walker-nav-mega-menu.php';



/**
 * Load the Mobile Detect library.
 */
require get_template_directory() . '/inc/Mobile-Detect/standalone/autoloader.php';
require get_template_directory() . '/inc/Mobile-Detect/src/MobileDetectStandalone.php';

use Detection\MobileDetectStandalone;

function init_mobile_detect()
{
	global $mobileDetect;
	$mobileDetect = new MobileDetectStandalone();
	$mobileDetect->setUserAgent($_SERVER['HTTP_USER_AGENT']);
}
add_action('init', 'init_mobile_detect');

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Vite.
 */
include 'inc/vite.php';
