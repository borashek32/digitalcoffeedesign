/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************************!*\
  !*** ./resources/js/elements/element_7/script.js ***!
  \***************************************************/
// animation scroll
document.addEventListener('DOMContentLoaded', function () {
  var promo = document.querySelector('.promo');
  var header = document.querySelector('.header');
  var scrollItems = document.querySelectorAll('.scroll-item');

  var scrollAnimation = function scrollAnimation() {
    var windowCenter = window.innerHeight + scrollY;
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
}); // menu burger

$(document).ready(function () {
  $('.header__burger').click(function (event) {
    $('.header__burger, .header__list').toggleClass('active');
    $('body').toggleClass('lock');
  });
  $('.header__item').click(function (event) {
    $('.header__burger, .header__list').toggleClass('active');
    $('body').toggleClass('lock');
  });
});
var isMobile = {
  Android: function Android() {
    return navigator.userAgent.match(/Android/i);
  },
  BlackBerry: function BlackBerry() {
    return navigator.userAgent.match(/BlackBerry/i);
  },
  iOS: function iOS() {
    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
  },
  Opera: function Opera() {
    return navigator.userAgent.match(/Opera Mini/i);
  },
  Windows: function Windows() {
    return navigator.userAgent.match(/IEMobile/i);
  },
  any: function any() {
    return isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows();
  }
};

if (isMobile.any()) {
  document.body.classList.add('_touch');
} else {
  document.body.classList.add('_pc');
}
/******/ })()
;