/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************************!*\
  !*** ./resources/js/projects/project_12/script.js ***!
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
}); // slider projects

$(document).ready(function () {
  var position = 0;
  var slidesToShow = 2;
  var slidesToScroll = 1;
  var container = $('#slider-container_projects');
  var track = $('#slider-track_projects');
  var item = $('.slide_projects');
  var itemsCount = item.length;
  var btnPrev = $('#slider__btn_left_projects');
  var btnNext = $('#slider__btn_right_projects');
  var itemWidth = container.width() / slidesToShow;
  var movePosition = slidesToScroll * itemWidth;
  item.each(function (index, item) {
    $(item).css({
      minWidth: itemWidth
    });
  });
  btnNext.click(function () {
    position -= movePosition;
    setPosition();
    checkBtns();
  });
  btnPrev.click(function () {
    position += movePosition;
    setPosition();
    checkBtns();
  });

  var setPosition = function setPosition() {
    track.css({
      transform: "translateX(".concat(position, "px)")
    });
  };

  var checkBtns = function checkBtns() {
    btnNext.prop('disabled', position <= -(itemsCount - slidesToShow) * itemWidth);
    btnPrev.prop('disabled', position === 0);
  };

  checkBtns();
}); // slider testimonials

$(document).ready(function () {
  var position = 0;
  var slidesToShow = 1;
  var slidesToScroll = 1;
  var container = $('#slider-container_testimonials');
  var track = $('#slider-track_testimonials');
  var item = $('.slide-testimonials');
  var itemsCount = item.length;
  var btnPrev = $('#slider__btn_left_testimonials');
  var btnNext = $('#slider__btn_right_testimonials');
  var itemWidth = container.width() / slidesToShow;
  var movePosition = slidesToScroll * itemWidth;
  item.each(function (index, item) {
    $(item).css({
      minWidth: itemWidth
    });
  });
  btnNext.click(function () {
    position -= movePosition;
    setPosition();
    checkBtns();
  });
  btnPrev.click(function () {
    position += movePosition;
    setPosition();
    checkBtns();
  });

  var setPosition = function setPosition() {
    track.css({
      transform: "translateX(".concat(position, "px)")
    });
  };

  var checkBtns = function checkBtns() {
    btnNext.prop('disabled', position <= -(itemsCount - slidesToShow) * itemWidth);
    btnPrev.prop('disabled', position === 0);
  };

  checkBtns();
});
/******/ })()
;