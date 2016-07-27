<?php

// Delcare Header/Footer compatibility
define( 'DS_LIVE_COMPOSER_HF', true );
define( 'DS_LIVE_COMPOSER_HF_AUTO', false );

// Content Width ( WP requires it and LC uses is to figure out the wrapper width )
if ( ! isset( $content_width ) )
	$content_width = 1180;

// Basic theme setup
if ( ! function_exists( 'lct_theme_setup' ) ) {

	function lct_theme_setup() {

		// Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

		// Enable Post Thumbnails ( Featured Image )
		add_theme_support( 'post-thumbnails' );

		// Enable support for HTML5 markup.
		add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form' ) );

		add_theme_support( 'woocommerce' );

	}

} add_action( 'after_setup_theme', 'lct_theme_setup' );

// Load JS and CSS files
function lct_load_scripts() {

	wp_enqueue_style( 'lct-base-style', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_style( 'main.css', get_template_directory_uri().'/main.css', false );
	wp_enqueue_style( 'blog.css', get_template_directory_uri().'/blog.css', false );
	wp_enqueue_style( 'single-post.css', get_template_directory_uri().'/single-post.css', false );
	wp_enqueue_style( 'general.css', get_template_directory_uri().'/general.css', false );
	wp_enqueue_style( 'donation.css', get_template_directory_uri().'/donation.css', false );
	wp_enqueue_style( 'header.css', get_template_directory_uri().'/header.css', false );
	wp_enqueue_style( 'footer.css', get_template_directory_uri().'/footer.css', false );
	wp_enqueue_style( 'flag-icon.css', get_template_directory_uri().'/flag-icon.css', false );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main.js', get_template_directory_uri().'/main.js', false);
	
} add_action( 'wp_enqueue_scripts', 'lct_load_scripts' );

function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

function myInit() {
    register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu' ),
          'extra-menu' => __( 'Extra Menu' ),
          'footer-menu' => __('Footer Menu'),
          'mobile-menu' => __('Mobile Menu')
        )
    );
    register_post_type(
        'newsletter',
        array(
            'label' => __("Newsletters"),
            'labels' => array(
                'name' => __("Newsletters"),
                'singular_name' => __("Newsletters"),
                'all_items' => __("All the newsletters"),
                'add_new_item' => __("Add a newsletter"),
                'edit_item' => __("Edit the newsletter"),
                'new_item' => __("New newsletter"),
                'view_item' => __("View newsletter"),
                'search_items' => __("Search in the newsletters"),
                'not_found' => __("No newsletter found"),
                'not_found_in_trash'=> __("No newsletter in the trash")
            ),
            'public' => true,
            'capability_type' => 'post',
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'author',
                'custom-fields',
                'revisions'
            ),
            'has_archive' => true
        )
    );
    register_post_type(
        'testimony',
        array(
            'label' => __("Testimonies"),
            'labels' => array(
                'name' => __("Testimonies"),
                'singular_name' => __("Testimony"),
                'all_items' => __("All the testimonies"),
                'add_new_item' => __("Add a testimony"),
                'edit_item' => __("Edit the testimony"),
                'new_item' => __("New testimony"),
                'view_item' => __("View testimony"),
                'search_items' => __("Search in the testimonies"),
                'not_found' => __("No testimony found"),
                'not_found_in_trash'=> __("No testimony in the trash")
            ),
            'public' => true,
            'capability_type' => 'post',
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'author',
                'custom-fields',
                'revisions'
            ),
            'has_archive' => true
        )
    );
    register_post_type(
        'intern',
        array(
            'label' => __("Interns"),
            'labels' => array(
                'name' => __("Interns"),
                'singular_name' => __("Intern"),
                'all_items' => __("All the interns"),
                'add_new_item' => __("Add an intern"),
                'edit_item' => __("Edit the intern"),
                'new_item' => __("New intern"),
                'view_item' => __("View intern"),
                'search_items' => __("Search in the interns"),
                'not_found' => __("No intern found"),
                'not_found_in_trash'=> __("No intern in the trash")
            ),
            'public' => true,
            'capability_type' => 'post',
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'author',
                'custom-fields',
                'revisions'
            ),
            'has_archive' => true
        )
    );
}
add_action( 'init', 'myInit' );
