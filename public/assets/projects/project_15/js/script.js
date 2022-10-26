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
}); // animation scroll

document.addEventListener('DOMContentLoaded', function () {
  var scrollItems = document.querySelectorAll('.scroll-item');

  var scrollAnimation = function scrollAnimation() {
    if (window.innerWidth >= 767.9) {
      var windowCenter = window.innerHeight + window.scrollY;
      scrollItems.forEach(function (el) {
        var scrollTop = el.offsetTop,
            scrollOffset = scrollTop + el.offsetHeight / 2;

        if (windowCenter >= scrollOffset) {
          el.classList.add('animate__animated', 'animate__fadeInUp');
        } else {
          el.classList.remove('animate__animated', 'animate__fadeInUp'); // el.classList.add('animate__animated', 'animate__fadeOutUp');
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