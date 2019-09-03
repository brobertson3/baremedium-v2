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

        <span class="char1 bio"><a class="active" href="#">W</a></span>
        <span class="char2 bio"><a class="active" href="#">h</a></span>
        <span class="char3 bio"><a class="active" href="#">o</a></span>
        <span class="char4">&nbsp;</span>
        <span class="char5 bio"><a class="active" href="#">I</a></span>
        <span class="char6">&nbsp;</span>
        <span class="char7 bio"><a class="active" href="#">A</a></span>
        <span class="char8 bio"><a class="active" href="#">m</a></span>
        <span class="char9">&nbsp;</span>


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
            <p>React.js  &middot;  Wordpress  &middot;  Squarespace  &middot;  PHP  &middot;  HTML5  &middot;  CSS3  &middot;  JavaScript  &middot;  Gulp ' +
                ' &middot;  Abobe Illustrator  &middot;  Photoshop  &middot;  Illustration  &middot;  Wireframing
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
