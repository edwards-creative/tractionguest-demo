//JQUERY
(function($){

$(document).ready(function() {
// NAV MENU SCROLL-TO SECTIONS
    $(".about-link").click(function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 1000);
    });
    $(".benefits-link").click(function() {
        $('html, body').animate({
            scrollTop: $("#benefits-section").offset().top
        }, 1000);
    });
    $(".contact-us").click(function() {
        $('html, body').animate({
            scrollTop: $("#contact-form").offset().top
        }, 1000);
    });
// INTRO BUTTONS
    $(".benefits-button").click(function() {
        $('html, body').animate({
            scrollTop: $("#benefits-section").offset().top
        }, 1000);
    });
    $(".purchase-button").click(function() {
        $('html, body').animate({
            scrollTop: $("#contact-form").offset().top
        }, 1000);
    });
//FEATURE TILES
    $(".portable-card").click(function() {
        $('html, body').animate({
            scrollTop: $("#portable-feature").offset().top
        }, 1000);
    });
    $(".lightning-card").click(function() {
        $('html, body').animate({
            scrollTop: $("#lightning-feature").offset().top
        }, 1000);
    });
    $(".solar-card").click(function() {
        $('html, åbody').animate({
            scrollTop: $("#solar-feature").offset().top
        }, 1000);
    });

//DROPDOWN NAV MENU
    $("#nav-toggle").click(function() {
        $("#drop-down-nav").slideToggle("fast");
    });
});
}(jQuery));
