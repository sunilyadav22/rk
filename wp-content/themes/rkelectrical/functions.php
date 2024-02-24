<?php
/**
 * rkelectrical functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rkelectrical
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rkelectrical_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on rkelectrical, use a find and replace
		* to change 'rkelectrical' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'rkelectrical', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'rkelectrical' ),
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
			'comment-form',
			'comment-list',
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
			'rkelectrical_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'rkelectrical_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rkelectrical_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rkelectrical_content_width', 640 );
}
add_action( 'after_setup_theme', 'rkelectrical_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rkelectrical_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rkelectrical' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rkelectrical' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rkelectrical_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rkelectrical_scripts() {
	wp_enqueue_style( 'rkelectrical-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'rkelectrical-style', 'rtl', 'replace' );

	wp_enqueue_script( 'rkelectrical-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rkelectrical_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function enqueue_custom_styles() {
    $page_id = get_the_ID();
    $template_filename = get_page_template_slug( $page_id );
    if ( 'templates/template-home.php' === $template_filename ) {
        wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' );
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
        wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
        wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
        wp_enqueue_style( 'courses', get_template_directory_uri() . '/assets/css/courses.css' );
        wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css' );
        wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css' );
        wp_enqueue_style( 'homepage', get_template_directory_uri() . '/assets/css/homepag.css' );
        wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css' );
  
		// Enqueue jQuery

        
        // Enqueue other scripts
        wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.7.1.min.js');
        wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js' );
        wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
        wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/custom-script.js' );
	}
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );



// secondary logo 
function your_theme_customizer_setting($wp_customize) {
	// add a setting 
		$wp_customize->add_setting('your_theme_hover_logo');
	// Add a control to upload the hover logo
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'your_theme_hover_logo', array(
			'label' => 'Sticky header logo',
			'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
			'settings' => 'your_theme_hover_logo',
			'priority' => 8 // show it just below the custom-logo
		)));
	}
	
	add_action('customize_register', 'your_theme_customizer_setting');