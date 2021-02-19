<?php
/**
 * Inkfish Small Business functions and definitions
 *
 * @package inkfishSMB
 */

/**
 * Sets up theme defaults and registers support for WordPress features.
 *
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since 1.0.0
 */
function nkaccelerate_setup() {

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Set default Post Thumbnail size.
	set_post_thumbnail_size( 800, 500, true );
}
add_action( 'after_setup_theme', 'nkaccelerate_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nkaccelerate_content_width() {

	// Default content width.
	$content_width = 800;

	// Set global variable for content width.
	$GLOBALS['content_width'] = apply_filters( 'nkaccelerate_content_width', $content_width );
}
add_action( 'after_setup_theme', 'nkaccelerate_content_width', 0 );

/**
 * Theme support
 */

add_theme_support( 'custom-logo', array(
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
	'height'      => 100,
	'width'       => 400,
) );
add_theme_support( 'title-tag' );

/**
 * Register Menus
 */
function register_primary_nav() {
	register_nav_menu( 'primary-nav', __( 'Primary Nav' ) );
}

add_action( 'init', 'register_primary_nav' );

/**
 * Enqueue theme assets
 */
function nkaccelerate_enqueue_assets() {
	wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/css/main.css', false );
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/js/main.js', [ 'jquery' ] );
}

add_action( 'wp_enqueue_scripts', 'nkaccelerate_enqueue_assets' );

/**
 * Enqueue block styles and scripts for Gutenberg Editor.
 */
function nkaccelerate_block_editor_assets() {
	wp_enqueue_style( 'nkaccelerate-editor-styles', get_theme_file_uri( '/assets/css/editor-styles.css' ), array(), '1.0', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'nkaccelerate_block_editor_assets' );

/**
 * Registers support for various Gutenberg features.
 *
 * @return void
 */
function nkaccelerate_gutenberg_support() {

	// Add theme support for wide and full images.
	add_theme_support( 'align-wide' );

	// Add theme support for block color palette.
	add_theme_support( 'editor-color-palette', apply_filters( 'nkaccelerate_editor_color_palette_args', array(
		array(
			'name'  => esc_html_x( 'Primary', 'block color', 'nkaccelerate' ),
			'slug'  => 'primary',
			'color' => '#003344',
		),
		array(
			'name'  => esc_html_x( 'Secondary', 'block color', 'nkaccelerate' ),
			'slug'  => 'secondary',
			'color' => '#268f97',
		),
		array(
			'name'  => esc_html_x( 'Accent', 'block color', 'nkaccelerate' ),
			'slug'  => 'accent',
			'color' => '#c9493b',
		),
		array(
			'name'  => esc_html_x( 'Highlight', 'block color', 'nkaccelerate' ),
			'slug'  => 'highlight',
			'color' => '#f9d26e',
		),
		array(
			'name'  => esc_html_x( 'White', 'block color', 'nkaccelerate' ),
			'slug'  => 'white',
			'color' => '#ffffff',
		),
		array(
			'name'  => esc_html_x( 'Light Gray', 'block color', 'nkaccelerate' ),
			'slug'  => 'light-gray',
			'color' => '#e4e4e4',
		),
		array(
			'name'  => esc_html_x( 'Gray', 'block color', 'nkaccelerate' ),
			'slug'  => 'gray',
			'color' => '#848484',
		),
		array(
			'name'  => esc_html_x( 'Dark Gray', 'block color', 'nkaccelerate' ),
			'slug'  => 'dark-gray',
			'color' => '#242424',
		),
		array(
			'name'  => esc_html_x( 'Black', 'block color', 'nkaccelerate' ),
			'slug'  => 'black',
			'color' => '#000000',
		),
	) ) );

	// Add theme support for font sizes.
	add_theme_support( 'editor-font-sizes', apply_filters( 'nkaccelerate_editor_font_sizes_args', array(
		array(
			'name' => esc_html_x( 'Small', 'block font size', 'nkaccelerate' ),
			'size' => 16,
			'slug' => 'small',
		),
		array(
			'name' => esc_html_x( 'Medium', 'block font size', 'nkaccelerate' ),
			'size' => 24,
			'slug' => 'medium',
		),
		array(
			'name' => esc_html_x( 'Large', 'block font size', 'nkaccelerate' ),
			'size' => 36,
			'slug' => 'large',
		),
		array(
			'name' => esc_html_x( 'Extra Large', 'block font size', 'nkaccelerate' ),
			'size' => 48,
			'slug' => 'extra-large',
		),
		array(
			'name' => esc_html_x( 'Huge', 'block font size', 'nkaccelerate' ),
			'size' => 64,
			'slug' => 'huge',
		),
	) ) );
}
add_action( 'after_setup_theme', 'nkaccelerate_gutenberg_support' );

/**
 * Theme customizer
 *
 * @param $wp_customize
 */
function nkaccelerate_customize_register( $wp_customize ) {

	$wp_customize->add_setting( 'nkaccelerate_logo', array(
		'default'           => get_theme_file_uri( 'assets/icons/site-logo.svg' ),
		'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'nkaccelerate_logo_control', array(
		'label'         => 'Upload Logo',
		'priority'      => 20,
		'section'       => 'title_tagline',
		'settings'      => 'wp_logo',
		'button_labels' => array( // All These labels are optional
			'select' => 'Select Logo',
			'remove' => 'Remove Logo',
			'change' => 'Change Logo',
		)
	) ) );
}

add_action( 'customize_register', 'nkaccelerate_customize_register' );

/**
 * Initializes theme with post types, block styles, and block templates.
 *
 * @since 1.0.0
 */
function nkaccelerate_init_theme_customizations(){
	// Adds post types.
	require_once get_stylesheet_directory() . '/includes/post-type-landing-page.php';
	add_action( 'init', 'nkaccelerate_post_type_landing' );

	// Adds block styles.
	require_once get_stylesheet_directory() . '/includes/block-button-styles.php';
	add_action( 'init', 'nkaccelerate_add_button_styles' );

	// Adds block templates.
	require_once get_stylesheet_directory() . '/includes/block-template-landing-page.php';
	add_action( 'init', 'nkaccelerate_landing_page_template' );

}

nkaccelerate_init_theme_customizations();
