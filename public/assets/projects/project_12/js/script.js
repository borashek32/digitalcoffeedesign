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
}); // slider one

$(document).ready(function () {
  var position = 0;
  var slidesToShow = 2;
  var slidesToScroll = 2;
  var container = $('.slider-container');
  var track = $('.slider-track');
  var item = $('.slide');
  var itemsCount = item.length;
  var btnPrev = $('.projects__slider__btn_left');
  var btnNext = $('.projects__slider__btn_right');
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