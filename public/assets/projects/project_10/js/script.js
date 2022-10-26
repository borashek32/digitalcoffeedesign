/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************************!*\
  !*** ./resources/js/projects/project_10/script.js ***!
  \****************************************************/
// menu burger
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
}); // animations wow.js animate.css

document.addEventListener('DOMContentLoaded', function () {
  var scrollItems = document.querySelectorAll('.anim-js-down');

  var scrollAnimation = function scrollAnimation() {
    if (window.innerWidth >= 767.9) {
      var windowCenter = window.innerHeight + window.scrollY;
      scrollItems.forEach(function (el) {
        var scrollTop = el.offsetTop,
            scrollOffset = scrollTop + el.offsetHeight / 2;

        if (windowCenter >= scrollOffset) {
          el.classList.add('animate__animated', 'animate__fadeInDown');
        } else {
          el.classList.remove('animate__animated', 'animate__fadeInDown');
        }
      });
    }

    ;
  };

  scrollAnimation();
  window.addEventListener('scroll', function () {
    scrollAnimation();
  });
});
/******/ })()
;