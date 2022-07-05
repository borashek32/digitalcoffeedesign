/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
var buttons = document.querySelectorAll('.sidebar__button');
buttons.forEach(function (button) {
  button.addEventListener('click', function () {
    buttons.forEach(function (button) {
      return button.classList.remove('active-btn');
    });
    this.classList.add('active-btn');
  });
});
/******/ })()
;