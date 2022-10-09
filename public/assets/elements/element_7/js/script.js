/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************************!*\
  !*** ./resources/js/elements/element_7/script.js ***!
  \***************************************************/
document.addEventListener('DOMContentLoaded', function () {
  var promo = document.querySelector('.promo');
  var header = document.querySelector('.header');
  var scrollItems = document.querySelectorAll('.scroll-item');

  var scrollAnimation = function scrollAnimation() {
    var windowCenter = window.innerHeight / 2 + scrollY;
    scrollItems.forEach(function (el) {
      var scrollOffset = el.offsetTop + el.offsetHeight / 2;

      if (windowCenter >= scrollOffset) {
        el.classList.add('animation-class');
      } else {
        el.classList.remove('animation-class');
      }
    });
  };

  var headerFixed = function headerFixed() {
    var scrollTop = window.scrollY;
    var promoCenter = promo.offsetHeight / 2;

    if (scrollTop >= promoCenter) {
      header.classList.add('fixed');
      promo.style.marginTop = "".concat(header.offsetHeight, "px");
    } else {
      header.classList.remove('fixed');
      promo.style.marginTop = "0px";
    }
  };

  headerFixed();
  scrollAnimation();
  window.addEventListener('scroll', function () {
    headerFixed();
    scrollAnimation();
  });
});
/******/ })()
;