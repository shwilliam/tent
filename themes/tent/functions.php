<?php
/**
 * tent theme-related fns
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tent
 */

if ( ! function_exists( 'tent_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function tent_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // tent_setup
add_action( 'after_setup_theme', 'tent_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function tent_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tent_content_width', 640 );
}
add_action( 'after_setup_theme', 'tent_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tent_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar__side',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html( 'Footer' ),
		'id'            => 'sidebar__footer',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'tent_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function tent_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'tent_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function tent_scripts() {
	wp_enqueue_style( 'tent-style', get_stylesheet_uri() );

	wp_enqueue_script( 'tent-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tent_scripts' );

/*
 * Hide "Editor" links from sub-menus
 */
function tent_remove_submenus() {
  remove_submenu_page( 'themes.php', 'theme-editor.php'  );
  remove_submenu_page( 'plugins.php', 'plugin-editor.php'  );
}
add_action( 'admin_menu', 'tent_remove_submenus', 110  );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
