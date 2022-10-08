/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************************!*\
  !*** ./resources/js/projects/project_15/script.js ***!
  \****************************************************/
// burger menu
$(document).ready(function () {
  $('.header__burger').click(function (event) {
    $('.header__burger, .header__menu').toggleClass('active');
    $('body').toggleClass('lock');
  });
  $('.header__link').click(function (event) {
    $('.header__burger, .header__menu').toggleClass('active');
    $('body').toggleClass('lock');
  });
}); // close banner

$(document).ready(function () {
  $('.banner__close').click(function (event) {
    $('.banner').css('display', 'none');
  });
});
/******/ })()
;