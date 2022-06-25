/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./resources/js/project_3/script.js ***!
  \******************************************/
var sections = document.querySelectorAll('.section');
var sectBtns = document.querySelectorAll('.controls');
var sectBtn = document.querySelector('.control');
var allSections = document.querySelector('.main-content');

function pageTransition() {
  allSections.addEventListener('click', function (e) {
    var id = e.target.dataset.id;

    if (id) {
      sections.forEach(function (section) {
        section.classList.remove('active'); // section.style.display = "none"
      });
      var element = document.getElementById(id);
      element.classList.add('active');
      element.style.display = "block";
    }
  });
}

pageTransition();
var buttons = document.querySelectorAll('.control');
buttons.forEach(function (button) {
  button.addEventListener('click', function () {
    buttons.forEach(function (btn) {
      return btn.classList.remove('active-btn');
    });
    this.classList.add('active-btn');
  });
});
/******/ })()
;