/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************************!*\
  !*** ./resources/js/elements/element_6/script.js ***!
  \***************************************************/
var hours = document.getElementById("hours");
var minutes = document.getElementById("minutes");
var seconds = document.getElementById("seconds");
var ampm = document.getElementById("ampm");

function updateClock() {
  var h = new Date().getHours();
  var m = new Date().getMinutes();
  var s = new Date().getSeconds();
  var ap = "AM";

  if (h > 12) {
    h = h - 12;
    ap = "PM";
  }

  h = h < 10 ? "0" + h : h;
  m = m < 10 ? "0" + m : m;
  s = s < 10 ? "0" + s : s;
  hours.innerText = h;
  minutes.innerText = m;
  seconds.innerText = s;
  ampm.innerText = ap;
  setTimeout(function () {
    updateClock();
  }, 1000);
}

updateClock();
/******/ })()
;