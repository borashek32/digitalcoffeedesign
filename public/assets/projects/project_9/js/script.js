/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************************!*\
  !*** ./resources/js/projects/project_9/script.js ***!
  \***************************************************/
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
}); // tabs

var tabsBtns = document.querySelectorAll('.item__button');
var tabsItems = document.querySelectorAll('.tab__content');

function hideTabs() {
  tabsItems.forEach(function (item) {
    return item.classList.add('hide');
  });
  tabsBtns.forEach(function (item) {
    return item.classList.remove('active-btn');
  });
}

function showTab(index) {
  tabsItems[index].classList.remove('hide');
  tabsBtns[index].classList.add('active-btn');
}

hideTabs();
showTab(0);
tabsBtns.forEach(function (btn, index) {
  return btn.addEventListener('click', function () {
    hideTabs();
    showTab(index);
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