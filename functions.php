<?php
/**
 * File: functions.php
 * (the file is optional and works like a plugin)
 *
 * Package: @WordPress
 * Subpackage: @petj-mvp
 *
 * This file is optional.
 * However these settings are required in order to pass validation.
 */


/**
 * Set content width (media)
 */
if ( ! isset( $content_width ) ) $content_width = 600;

/**
 * Enqueue scripts (e.g. Bootstrap Jquery)
 */


/**
 * Enqueue styles
 * tip: let style.css be the last one.
 */
function themeslug_enqueue_style() {
	wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css', 
  false );
}
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );

/**
 * Title tag
 */
/**
 * Title-tag
 **/
function theme_slug_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );

/**
 * Automatic feed links
 */
add_theme_support( 'automatic-feed-links' );

/**
 * wp link pages
 */
$defaults = array(
	'before'           => '<p>' . __( 'Pages:' , "petj-mvp"),
	'after'            => '</p>',
	'link_before'      => '',
	'link_after'       => '',
	'next_or_number'   => 'number',
	'separator'        => ' ',
	'nextpagelink'     => __( 'Next page', "petj-mvp" ),
	'previouspagelink' => __( 'Previous page' , "petj-mvp"),
	'pagelink'         => '%',
	'echo'             => 1
);
wp_link_pages( $defaults );

/**
 * A menu
 */
function register_my_menu() {
  register_nav_menu('sidebar-menu',__( 'Sidebar Menu' ));
}
add_action( 'init', 'register_my_menu' );

/**
 * Widget area
 */
function maat_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'maat_widgets_init' );

/**
 * Costum header
 */

/**
 * Costum background
 */
$args = array(
	'default-color' => '000000',
	'default-image' => '%1$s/images/background.jpg',
);
add_theme_support( 'custom-background', $args );

/**
 * Add editor styles
 */
add_editor_style();

/**
 * Theme thumbnails
 */
add_theme_support( "post-thumbnails" );

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );
?>
