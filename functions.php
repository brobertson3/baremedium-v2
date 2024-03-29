<?php
/**
 * Agency Pro.
 *
 * This file adds the functions to the Agency Pro Theme.
 *
 * @package Agency
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    https://my.studiopress.com/themes/agency/
 */

// Start the engine.
include_once( get_template_directory() . '/lib/init.php' );

// Setup Theme.
include_once( get_stylesheet_directory() . '/lib/theme-defaults.php' );

add_action( 'after_setup_theme', 'agency_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function agency_localization_setup() {
	load_child_theme_textdomain( 'agency-pro', get_stylesheet_directory() . '/languages' );
}

// Add Settings to WordPress Theme Customizer.
require_once( get_stylesheet_directory() . '/lib/customize.php' );

// Child theme (do not remove).
define( 'CHILD_THEME_NAME', __( 'Agency Pro', 'agency-pro' ) );
define( 'CHILD_THEME_URL', 'https://my.studiopress.com/themes/agency/' );
define( 'CHILD_THEME_VERSION', '3.1.5' );

// Add HTML5 markup structure.
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

// Add viewport meta tag for mobile browsers.
add_theme_support( 'genesis-responsive-viewport' );

// Enqueue Scripts.
add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );
function custom_add_google_fonts() {
    wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,600&display=swap', false );
}

add_action( 'wp_enqueue_scripts', 'agency_load_scripts' );
function agency_load_scripts() {

	wp_enqueue_script( 'agency-responsive-menu', get_stylesheet_directory_uri() . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0' );

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=EB+Garamond|Spinnaker', array(), CHILD_THEME_VERSION );

}

// Enqueue Backstretch script and prepare images for loading.
add_action( 'wp_enqueue_scripts', 'agency_enqueue_backstretch_scripts' );
function agency_enqueue_backstretch_scripts() {

	$image = get_option( 'agency-backstretch-image', sprintf( '%s/images/bg.jpg', get_stylesheet_directory_uri() ) );

	// Load scripts only if custom backstretch image is being used.
	if ( ! empty( $image ) ) {

		wp_enqueue_script( 'agency-pro-backstretch', get_stylesheet_directory_uri() . '/js/backstretch.js', array( 'jquery' ), '1.0.0' );
		wp_enqueue_script( 'agency-pro-backstretch-set', get_stylesheet_directory_uri() . '/js/backstretch-set.js' , array( 'jquery', 'agency-pro-backstretch' ), '1.0.0' );

		wp_localize_script( 'agency-pro-backstretch-set', 'BackStretchImg', array( 'src' => str_replace( 'http:', '', $image ) ) );

	}

}
// Custom scripts - start
// Filter the title with a custom function
add_filter('genesis_seo_title', 'baremedium_site_title' );
// Add additional custom style to site header
function baremedium_site_title( $title ) {
    // Change $custom_title text as you wish
    $custom_title = '<img class="site-header-logo-section" src=' . get_stylesheet_directory_uri() . '/images/BareMediumLogoWeb.svg><span class="site-header-title-section"><span class="letter-b">B</span>a<span class="letter-r">r</span>e Medium</span>';
    // Don't change the rest of this on down
    // If we're on the front page or home page, use `h1` heading, otherwise us a `p` tag
    $tag = ( is_home() || is_front_page() ) ? 'h1' : 'p';
    // Compose link with title
    $inside = sprintf( '<a href="%s" title="%s">%s</a>', trailingslashit( home_url() ), esc_attr( get_bloginfo( 'name' ) ), $custom_title );
    // Wrap link and title in semantic markup
    $title = sprintf ( '<%s class="site-title" itemprop="headline">%s</%s>', $tag, $inside, $tag );
    return $title;
}
// Custom scripts - end

// Add new image sizes.
add_image_size( 'home-bottom', 380, 150, TRUE );
add_image_size( 'home-middle', 380, 380, TRUE );

// Add support for custom background.
add_theme_support( 'custom-background' );

// Add support for custom header.
add_theme_support( 'custom-header', array(
	'header_image'    => '',
	'header-selector' => '.site-title a',
	'header-text'     => false,
	'height'          => 60,
	'width'           => 300,
) );

// Add support for additional color style options.
add_theme_support( 'genesis-style-selector', array(
	'agency-pro-blue'   => __( 'Agency Pro Blue', 'agency-pro' ),
	'agency-pro-green'  => __( 'Agency Pro Green', 'agency-pro' ),
	'agency-pro-orange' => __( 'Agency Pro Orange', 'agency-pro' ),
	'agency-pro-red'    => __( 'Agency Pro Red', 'agency-pro' ),
) );

// Add support for 3-column footer widgets.
add_theme_support( 'genesis-footer-widgets', 3 );

// Add support for after entry widget.
add_theme_support( 'genesis-after-entry-widget-area' );

// Reposition the header
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
add_action( 'genesis_before', 'genesis_header_markup_open', 5 );
add_action( 'genesis_before', 'genesis_do_header', 10 );
add_action( 'genesis_before', 'genesis_header_markup_close', 15 );

// Remove the site description.
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );

// Rename Menus based on location.
add_theme_support( 'genesis-menus', array( 'primary' => __( 'After Header Menu', 'agency-pro' ), 'secondary' => __( 'Footer Menu', 'agency-pro' ) ) );

// Reposition the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 7 );

// Reduce the secondary navigation menu to one level depth.
add_filter( 'wp_nav_menu_args', 'agency_secondary_menu_args' );
function agency_secondary_menu_args( $args ) {

	if ( 'secondary' === $args['theme_location'] ) {
		$args['depth'] = 1;
	}

	return $args;

}

// Relocate after entry widget.
remove_action( 'genesis_after_entry', 'genesis_after_entry_widget_area' );
add_action( 'genesis_after_entry', 'genesis_after_entry_widget_area', 5 );

// Register widget areas.
genesis_register_sidebar( array(
	'id'          => 'home-top',
	'name'        => __( 'Home Top', 'agency-pro' ),
	'description' => __( 'This is the top section of the homepage.', 'agency-pro' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-middle',
	'name'        => __( 'Home Middle', 'agency-pro' ),
	'description' => __( 'This is the middle section of the homepage.', 'agency-pro' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-bottom',
	'name'        => __( 'Home Bottom', 'agency-pro' ),
	'description' => __( 'This is the bottom section of the homepage.', 'agency-pro' ),
) );

remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'sp_custom_footer' );
function sp_custom_footer() {
    ?>
    <p>&copy; Copyright 2018 Bare Medium &middot; All Rights Reserved &middot; Powered by <a href="http://wordpress.org/">WordPress</a> on <a href="https://my.studiopress.com/themes/genesis/">Genesis Framework</a></p>
    <?php
}