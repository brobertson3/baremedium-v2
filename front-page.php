<?php
/**
 * Agency Pro.
 *
 * This file adds the front page to the Agency Pro Theme.
 *
 * @package Agency
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    https://my.studiopress.com/themes/agency/
 */

add_action( 'wp_enqueue_scripts', 'agency_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'baremedium_enqueue_scripts' );
/**
 * Enqueue Scripts.
 */
function agency_enqueue_scripts() {

	if ( is_active_sidebar( 'home-top' ) || is_active_sidebar( 'home-middle' ) || is_active_sidebar( 'home-bottom' ) ) {

		wp_enqueue_script( 'scrollTo', get_stylesheet_directory_uri() . '/js/jquery.scrollTo.min.js', array( 'jquery' ), '2.1.2', true );
		wp_enqueue_script( 'localScroll', get_stylesheet_directory_uri() . '/js/jquery.localScroll.min.js', array( 'scrollTo' ), '2.0.0', true );
		wp_enqueue_script( 'home', get_stylesheet_directory_uri() . '/js/home.js', array( 'localScroll' ), '', true );

	} else {
        wp_enqueue_script( 'scrollTo', get_stylesheet_directory_uri() . '/js/jquery.scrollTo.min.js', array( 'jquery' ), '2.1.2', true );
        wp_enqueue_script( 'localScroll', get_stylesheet_directory_uri() . '/js/jquery.localScroll.min.js', array( 'scrollTo' ), '2.0.0', true );
        wp_enqueue_script( 'home', get_stylesheet_directory_uri() . '/js/home.js', array( 'localScroll' ), '', true );
    }

}

add_action( 'genesis_meta', 'agency_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function agency_home_genesis_meta() {

	if ( is_active_sidebar( 'home-top' ) || is_active_sidebar( 'home-middle' ) || is_active_sidebar( 'home-bottom' ) ) {

		// Force content-sidebar layout setting.
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

		// Add agency-pro-home body class.
		add_filter( 'body_class', 'agency_body_class' );

		// Remove breadcrumbs.
		remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

		// Remove the default Genesis loop.
		remove_action( 'genesis_loop', 'genesis_do_loop' );

		// Add homepage home-top.
		add_action( 'genesis_after_header', 'agency_homepage_top' );

		// Add homepage widgets.
		add_action( 'genesis_loop', 'agency_homepage_widgets' );

		// Modify length of post excerpts.
		add_filter( 'excerpt_length', 'agency_home_excerpt_length' );

	}

}

function agency_body_class( $classes ) {

	$classes[] = 'agency-pro-home';

	return $classes;

}

function agency_homepage_top() {

	genesis_widget_area( 'home-top', array(
		'before' => '<div id="home-top" class="home-top widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );

}

function agency_homepage_widgets() {

	genesis_widget_area( 'home-middle', array(
		'before' => '<div id="home-middle" class="home-middle widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );

	genesis_widget_area( 'home-bottom', array(
		'before' => '<div id="home-bottom" class="home-bottom widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );

}

function agency_home_excerpt_length( $length ) {

	return 35;

}

// Run the Genesis loop.
//genesis();
get_header();

//do_action('genesis_entry_header');
//do_action('genesis_entry_footer');
?>
<div class="baremedium-home-panel">
    <div id="home-panel-designer" class="">
        <a class="button button-hero button-designer" href="contact">CONTACT</a>
<!--        <a class="button button-inverse button-hero button-developer">DEVELOPER</a>-->
    </div><div id="home-panel-developer">
        <a class="button button-inverse button-hero button-developer" href="portfolio">
            <p>I'm your next</p>
            <span id="first-letter">D</span><span id="second-letter">E</span><span id="third-letter">V</span><span id="fourth-letter">E</span><span id="fifth-letter">L</span><span id="sixth-letter">O</span><span id="seventh-letter">P</span><span id="eighth-letter">E</span><span id="ninth-letter">R</span>
            <p>See why</p>
        </a>
    </div>
</div>



<!--<div class="glasses-holder">-->
<!--    <div class="home-panel">-->
<!--        <img id="black-glasses" src="--><?php //echo get_stylesheet_directory_uri() . '/images/blackGlasses.svg'; ?><!--">-->
<!--        <img class="home-letters" src="--><?php //echo get_stylesheet_directory_uri() . '/images/designer_text.svg'; ?><!--">-->
<!--    </div><div class="home-panel">-->
<!--        <img id="red-glasses" src="--><?php //echo get_stylesheet_directory_uri() . '/images/redGlasses.svg'; ?><!--">-->
<!--        <img class="home-letters" src="--><?php //echo get_stylesheet_directory_uri() . '/images/developer_text.svg'; ?><!--">-->
<!--    </div>-->
<!--</div>-->

<?php get_footer(); ?>

<?php function baremedium_enqueue_scripts () {
    wp_register_style('home_css', get_stylesheet_directory_uri(). '/css/home.css');
    wp_enqueue_style('home_css');
}
?>
