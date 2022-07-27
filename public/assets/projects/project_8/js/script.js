/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************************!*\
  !*** ./resources/js/projects/project_8/script.js ***!
  \***************************************************/
var button = document.querySelector('.menu');
var background = document.querySelector('.header');
var body = document.querySelector('body');
var mobile = document.querySelector('.mobile');
button.addEventListener('click', function () {
  button.classList.toggle('active');
  background.classList.toggle('mobile');
  body.classList.toggle('lock');
  mobile.classList.toggle('active');
});
var offset = 0;
var sliderLine = document.querySelector('.slider-arrows__items-wrapper');
document.querySelector('.slider-arrows__arrow_next').addEventListener('click', function () {
  offset = offset + 800;

  if (offset > 1500) {
    offset = 0;
  }

  sliderLine.style.left = -offset + 'px';
});
document.querySelector('.slider-arrows__arrow_prev').addEventListener('click', function () {
  offset = offset - 700;

  if (offset < 0) {
    offset = 1500;
  }

  sliderLine.style.left = -offset + 'px';
});
/******/ })()
;