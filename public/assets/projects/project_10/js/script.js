/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************************!*\
  !*** ./resources/js/projects/project_10/script.js ***!
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
}); // anchors

var anchors = document.querySelectorAll('.header__link');
anchors.forEach(function (anc) {
  anc.addEventListener('click', function (event) {
    event.preventDefault();
    var id = anc.getAttribute('href');
    var elem = document.querySelector(id);
    window.scroll({
      top: elem.offsetTop,
      behavior: 'smooth'
    });
  });
});
/******/ })()
;