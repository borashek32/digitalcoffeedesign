/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./resources/js/project_7/script.js ***!
  \******************************************/
$(document).ready(function () {
  $('.nav__burger').click(function (event) {
    $('.nav__burger, .nav__list').toggleClass('active');
    $('body').toggleClass('lock');
  });
  $('.nav__list').click(function (event) {
    $('.nav__burger, .nav__list').toggleClass('active');
    $('body').toggleClass('lock');
  });
});
/******/ })()
;