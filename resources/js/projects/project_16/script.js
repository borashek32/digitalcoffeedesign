$(document).ready(function() {
// menu burger
    $('.header__burger').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
    $('.header__link').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
// arrow dropdown
    $('.header__arrow').click(function(event) {
        $('.header__dropdown').toggleClass('active');
        $('body').toggleClass('lock');
    });
// arrow dropdown
    $('.header__search').click(function(event) {
        $('.header__search-field').toggleClass('active');
        $('body').toggleClass('lock');
    });
});
