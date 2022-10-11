/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
// const buttons  = document.querySelectorAll('.sidebar__button')
// buttons.forEach(button => {
//     button.addEventListener('click', function() {
//         buttons.forEach(button => button.classList.remove('active-btn'))
//         this.classList.add('active-btn');
//     })
// })
// animation on scroll
AOS.init({
  once: true,
  disable: 'mobile'
}); // show hide burger menu

$(document).ready(function () {
  $('.header__burger').click(function (event) {
    $('.header__burger, .header__menu').toggleClass('active');
    $('body').toggleClass('lock');
  });
  $('.header__link').click(function (event) {
    $('.header__burger, .header__menu').toggleClass('active');
    $('body').toggleClass('lock');
  });
}); // to upload images in admin panel

function elFinderBrowser(callback, value, meta) {
  tinymce.activeEditor.windowManager.openUrl({
    title: 'File Manager',
    url: '/elfinder/tinymce5',
    onMessage: function onMessage(dialogApi, details) {
      if (details.mceAction === 'fileSelected') {
        var file = details.data.file; // Make file info

        var info = file.name; // Provide file and text for the link dialog

        if (meta.filetype === 'file') {
          callback(file.url, {
            text: info,
            title: info
          });
        } // Provide image and alt text for the image dialog


        if (meta.filetype === 'image') {
          callback(file.url, {
            alt: info
          });
        } // Provide alternative source and posted for the media dialog


        if (meta.filetype === 'media') {
          callback(file.url);
        }

        dialogApi.close();
      }
    }
  });
} // anchors


var anchors = document.querySelectorAll('.header__link, .about-link');
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
}); // digital clock

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

updateClock(); // animation scroll

document.addEventListener('DOMContentLoaded', function () {
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

  scrollAnimation();
  window.addEventListener('scroll', function () {
    scrollAnimation();
  });
}); // editor on admin panel
// tinymce.init({
//     selector: 'textarea',
//     plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
//     toolbar_mode: 'floating',
//     forced_root_block : "",
// });
/******/ })()
;