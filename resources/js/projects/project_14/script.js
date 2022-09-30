$(document).ready(function() {
    // burger
    $('.header__burger').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('active')
        $('body').toggleClass('lock')
    })
    $('.header__link').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('active')
        $('body').toggleClass('lock')
    })

    // slider
    $('.nav__point1').click(function(event) {
        $('.nav__point1').addClass('nav__point_active')
        $('.nav__point2').removeClass('nav__point_active')
        $('.review__slide1').removeClass('review__slide_none')
        $('.review__slide2').addClass('review__slide_none')
    })
    $('.nav__point2').click(function(event) {
        $('.nav__point2').addClass('nav__point_active')
        $('.nav__point1').removeClass('nav__point_active')
        $('.review__slide2').removeClass('review__slide_none')
        $('.review__slide1').addClass('review__slide_none')
    })
})