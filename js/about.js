jQuery(document).ready(function( $ ) {
    var bioHTML = '<h4>Who I Am</h4></h4><p>Hmmm…where to start? I’m a freelance web developer and designer from Baltimore, Maryland - but I currently reside in Brea, \
    CA. I’ve always had ambitions to create, probably because I have two insanely talented, creative, and artistic parents. That passion led me to \
    Front End Web Development, since it bridges the gap between my creative and technical skills. I have 6 years overall experience in development, \
    two of which have been dedicated to Front End Web Development. I currently work full-time as a PHP Wordpress Developer, but am always accepting \
    freelance projects on the side. If you want to work together then <a href="../contact">send me a message</a>.</p>';
    var hobbyHTML = '<h4>What I Like</h4><p>I\'m interested in anything related to the arts. That includes drawing, design, writing, coding (yes coding is an art), \
    or anything else that involves working with my hands. You can check out some of my artwork <a href="https://www.instagram.com/bare.line/">here</a>.  \
    I\'m also really into anime, video games, and working out. I also like to travel - Japan and Europe are the next on the list.</p>';
    var skillsHTML = '<h4>What I Do</h4><p>React.js  &middot;  Wordpress  &middot;  Squarespace  &middot;  PHP  &middot;  HTML5  &middot;  CSS3  &middot;  JavaScript  &middot;  Gulp ' +
        ' &middot;  Abobe Illustrator  &middot;  Photoshop  &middot;  Illustration  &middot;  Wireframing</p>';

    document.querySelector(".text-wheel-container ul").addEventListener("click", function(e) {
        e.preventDefault();
        let wheelTarget = e.target.parentElement.className;
        let activeElement = document.querySelector('li.active');
        if (wheelTarget === 'segment1') {
            activeElement.style.transform = "rotate(0deg) skew(30deg)";
            //Display the bio section
            $('#about-me-container #desktop-section').html(bioHTML);
            // $(".text-wheel-container span a").removeClass('active');
            // $('span.bio a').addClass('active');
        } else if (wheelTarget === 'segment2') {
            activeElement.style.transform = "rotate(60deg) skew(30deg)";
            // Display the hobby section
            $('#about-me-container #desktop-section').html(hobbyHTML);
        } else if (wheelTarget === 'segment3') {
            activeElement.style.transform = "rotate(120deg) skew(30deg)";
            //Display the skills section
            $('#about-me-container #desktop-section').html(skillsHTML);
        }

    });
});


