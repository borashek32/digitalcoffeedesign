/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************************!*\
  !*** ./resources/js/elements/element_4/script.js ***!
  \***************************************************/
var offset = 0;
var sliderLine = document.querySelector('.slider_1__line');
document.querySelector('.slider_1__button_next').addEventListener('click', function () {
  offset = offset + 256;

  if (offset > 768) {
    offset = 0;
  }

  sliderLine.style.left = -offset + 'px';
});
document.querySelector('.slider_1__button_prev').addEventListener('click', function () {
  offset = offset - 256;

  if (offset < 0) {
    offset = 768;
  }

  sliderLine.style.left = -offset + 'px';
});
/******/ })()
;