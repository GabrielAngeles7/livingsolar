$('#blueimp-gallery').data('useBootstrapModal', 0);
$('#blueimp-gallery').toggleClass('blueimp-gallery-controls', 1);

$(window).load(function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({
        'overflow': 'visible'
    });
})