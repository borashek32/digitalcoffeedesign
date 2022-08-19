/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************************!*\
  !*** ./resources/js/projects/project_11/script.js ***!
  \****************************************************/
$(document).ready(function () {
  $('.header__burger').click(function (event) {
    $('.header__burger, .header__menu').toggleClass('active');
    $('body').toggleClass('lock');
  });
  $('.header__link').click(function (event) {
    $('.header__burger, .header__menu').toggleClass('active');
    $('body').toggleClass('lock');
  });
  $('.send-me-letter').click(function (event) {
    $('body').toggleClass('no-scroll');
    $('.modal').toggleClass('disabled');
  });
  $('.cross, .button_send-message').click(function (event) {
    $('body').toggleClass('no-scroll');
    $('.modal').toggleClass('disabled');
  });
});
/******/ })()
;