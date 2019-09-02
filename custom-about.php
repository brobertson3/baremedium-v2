<?php
/**
 * Agency Pro.
 *
 * This file adds the landing page template to the Agency Pro Theme.
 *
 * Template Name: About Me
 *
 * @package Agency
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    https://my.studiopress.com/themes/agency/
 */

add_action( 'wp_enqueue_scripts', 'baremedium_enqueue_scripts' );

get_header();

?>

<h1 class="entry-content">About Me</h1>

<div class="about-me-section-container">
    <div class="text-wheel-container">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/ProfessionalProfileImage.jpg'; ?>" height="200">
        <div class="title-wheel-background">
            <span class="char1 bio"><a href="#">W</a></span>
            <span class="char2 bio"><a href="#">h</a></span>
            <span class="char3 bio"><a href="#">o</a></span>
            <span class="char4">&nbsp;</span>
            <span class="char5 bio"><a href="#">I</a></span>
            <span class="char6">&nbsp;</span>
            <span class="char7 bio"><a href="#">A</a></span>
            <span class="char8 bio"><a href="#">m</a></span>
            <span class="char9">&nbsp;</span>
        </div>

        <span class="char10">&nbsp;</span>
        <span class="char11">&nbsp;</span>
        <span class="char12 hobby"><a href="#">W</a></span>
        <span class="char13 hobby"><a href="#">h</a></span>
        <span class="char14 hobby"><a href="#">a</a></span>
        <span class="char15 hobby"><a href="#">t</a></span>
        <span class="char16">&nbsp;</span>
        <span class="char17 hobby"><a href="#">I</a></span>
        <span class="char18">&nbsp;</span>
        <span class="char19 hobby"><a href="#">L</a></span>
        <span class="char20 hobby"><a href="#">i</a></span>
        <span class="char21 hobby"><a href="#">k</a></span>
        <span class="char22 hobby"><a href="#">e</a></span>
        <span class="char23">&nbsp;</span>
        <span class="char24">&nbsp;</span>
        <span class="char25">&nbsp;</span>
        <span class="char26 skills"><a href="#">W</a></span>
        <span class="char27 skills"><a href="#">h</a></span>
        <span class="char28 skills"><a href="#">a</a></span>
        <span class="char29 skills"><a href="#">t</a></span>
        <span class="char30">&nbsp;</span>
        <span class="char31 skills"><a href="#">I</a></span>
        <span class="char32">&nbsp;</span>
        <span class="char33 skills"><a href="#">D</a></span>
        <span class="char34 skills"><a href="#">o</a></span>
    </div>
    <div id="about-me-container">

    </div>
</div>

<?php get_footer(); ?>

<?php function baremedium_enqueue_scripts () {
    wp_enqueue_script('jquery');
    wp_enqueue_script('about_js', get_stylesheet_directory_uri() . '/js/about.js', array('jquery'));

    wp_register_style('about_css', get_stylesheet_directory_uri(). '/css/about.css');
    wp_register_style('home_css', get_stylesheet_directory_uri(). '/css/home.css');
    wp_enqueue_style('about_css');
    wp_enqueue_style('home_css');

}
?>
