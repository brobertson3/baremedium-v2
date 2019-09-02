jQuery(document).ready(function( $ ) {
    var bioHTML = '<p>Hmmm…where to start? I’m a freelance web developer and designer from Baltimore, Maryland - but I currently reside in Brea, \
    CA. I’ve always had ambitions to create, probably because I have two insanely talented, creative, and artistic parents. That passion led me to \
    Front End Web Development, since it bridges the gap between my creative and technical skills. I have 6 years overall experience in development, \
    two of which have been dedicated to Front End Web Development. I currently work full-time as a PHP Wordpress Developer, but am always accepting \
    freelance projects on the side. If you want to work together then <a href="../contact">send me a message</a>.</p>';
    var hobbyHTML = '<p>I\'m interested in anything related to the arts. That includes drawing, design, writing, coding (yes coding is an art), \
    or anything else that involves working with my hands. You can check out some of my artwork <a href="https://www.instagram.com/bare.line/">here</a>.  \
    I\'m also really into anime, video games, and working out. I also like to travel - Japan and Europe are the next on the list.</p>';
    var skillsHTML = '<p>React.js  &middot;  Wordpress  &middot;  Squarespace  &middot;  PHP  &middot;  HTML5  &middot;  CSS3  &middot;  JavaScript  &middot;  Gulp ' +
        ' &middot;  Abobe Illustrator  &middot;  Photoshop  &middot;  Illustration  &middot;  Wireframing</p>';
    // var skillsHTML = '<ul class="baremedium-skills-html">' +
    //     '               <li>Wordpress</li>' +
    //     '               <li>Squarespace</li>' +
    //     '               <li>PHP</li>' +
    //     '               <li>HTML5</li>' +
    //     '               <li>CSS3</li>' +
    //     '               <li>JavaScript</li>' +
    //     '               <li>Gulp</li>' +
    //     '               <li>Abobe Illustrator</li>' +
    //     '               <li>Photoshop</li>' +
    //     '               <li>Illustration</li>' +
    //     '               <li>Wireframing</li>' +
    //     '</ul>';

    $(".text-wheel-container span a").click(function () {
        if ($(this).parent().hasClass('bio')) {
            //Display the bio section at the bottom
            $('#about-me-container').html(bioHTML);
        } else if ($(this).parent().hasClass('hobby')) {
            // Display the hobby section at the bottom
            $('#about-me-container').html(hobbyHTML);
        } else {
            //Display the skills section at the bottom
            $('#about-me-container').html(skillsHTML);
        }
    });

    $(".text-wheel-container span.bio a").hover(function () {
        $('span.bio a').toggleClass('orange');
    });

    $(".text-wheel-container span.hobby a").hover(function () {
        $('span.hobby a').toggleClass('orange');
    });

    $(".text-wheel-container span.skills a").hover(function () {
        $('span.skills a').toggleClass('orange');
    });

});


