jQuery(document).ready(function( $ ) {

    $('input, textarea').focus(function() {
        $(this).addClass('focused-input');
    });

    $('input, textarea').focusout(function() {
        $(this).removeClass('focused-input');
    });

});