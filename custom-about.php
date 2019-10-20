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
    <div class="text-wheel-section">
      <div class="text-wheel-container">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/ProfessionalProfileImage.jpg'; ?>" height="200">

        <ul class="remove-mobile">
            <li class="segment1"><a href="#"></a></li>
            <li class="segment2"><a href="#"></a></li>
            <li class="segment3"><a href="#"></a></li>
            <li class="active"><a href="#"></a></li>
        </ul>
        <span class="char1 remove-mobile">W</span>
        <span class="char2 remove-mobile">h</span>
        <span class="char3 remove-mobile">o</span>
        <span class="char4 remove-mobile">&nbsp;</span>
        <span class="char5 remove-mobile">I</span>
        <span class="char6 remove-mobile">&nbsp;</span>
        <span class="char7 remove-mobile">A</span>
        <span class="char8 remove-mobile">m</span>
        <span class="char12 remove-mobile">W</span>
        <span class="char13 remove-mobile">h</span>
        <span class="char14 remove-mobile">a</span>
        <span class="char15 remove-mobile">t</span>
        <span class="char16 remove-mobile">&nbsp;</span>
        <span class="char17 remove-mobile">I</span>
        <span class="char18 remove-mobile">&nbsp;</span>
        <span class="char19 remove-mobile">L</span>
        <span class="char20 remove-mobile">i</span>
        <span class="char21 remove-mobile">k</span>
        <span class="char22 remove-mobile">e</span>
        <span class="char26 remove-mobile">W</span>
        <span class="char27 remove-mobile">h</span>
        <span class="char28 remove-mobile">a</span>
        <span class="char29 remove-mobile">t</span>
        <span class="char30 remove-mobile">&nbsp;</span>
        <span class="char31 remove-mobile">I</span>
        <span class="char32 remove-mobile">&nbsp;</span>
        <span class="char33 remove-mobile">D</span>
        <span class="char34 remove-mobile">o</span>
      </div>
    </div>
    <div id="about-me-container">
        <h4>Who I Am</h4>
        <p>Hmmm…where to start? I’m a freelance web developer and designer from Baltimore, Maryland - but I currently reside in Brea,
            CA. I’ve always had ambitions to create, probably because I have two insanely talented, creative, and artistic parents. That passion led me to
            Front End Web Development, since it bridges the gap between my creative and technical skills. I have 6 years overall experience in development,
            two of which have been dedicated to Front End Web Development. I currently work full-time as a PHP Wordpress Developer, but am always accepting
            freelance projects on the side. If you want to work together then <a href="../contact">send me a message</a>.
        </p>
        <div class="hidden-section">
            <h4>What I Like</h4>
            <p>I'm interested in anything related to the arts. That includes drawing, design, writing, coding (yes coding is an art),
                or anything else that involves working with my hands. You can check out some of my artwork <a href="https://www.instagram.com/bare.line/">here</a>.
                I'm also really into anime, video games, and working out. I also like to travel - Japan and Europe are the next on the list.
            </p>
            <h4>What I Do</h4>
            <p class="about-skills">React.js  &middot;  Wordpress  &middot;  Squarespace  &middot;  PHP  &middot;  HTML5  &middot;  CSS3  &middot;  JavaScript  &middot;  Gulp  &middot;  Abobe Illustrator  &middot;  Photoshop  &middot;  Illustration  &middot;  Wireframing
            </p>
        </div>

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
