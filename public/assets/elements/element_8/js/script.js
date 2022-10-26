/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************************!*\
  !*** ./resources/js/elements/element_8/script.js ***!
  \***************************************************/
window.addEventListener('scroll', function (e) {
  document.body.style.cssText += "--scrollTop: ".concat(this.scrollY, "px");
});
gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
ScrollSmoother.create({
  wrapper: '.wrapper',
  content: '.content'
});
/******/ })()
;