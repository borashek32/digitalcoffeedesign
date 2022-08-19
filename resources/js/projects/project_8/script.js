// const button = document.querySelector('.menu')
// const background = document.querySelector('.header')
// const body = document.querySelector('body')
// const mobile = document.querySelector('.mobile')

// button.addEventListener('click', () => {
//     button.classList.toggle('active')
//     background.classList.toggle('mobile')
//     body.classList.toggle('lock')
//     mobile.classList.toggle('active')
// })

// let offset = 0;
// const sliderLine = document.querySelector('.slider-arrows__items-wrapper');

// document.querySelector('.slider-arrows__arrow_next').addEventListener('click', function(){
//     offset = offset + 735;
//     if (offset > 1500) {
//         offset = 0;
//     }
//     sliderLine.style.left = -offset + 'px';
// });

// document.querySelector('.slider-arrows__arrow_prev').addEventListener('click', function () {
//     offset = offset - 700;
//     if (offset < 0) {
//         offset = 1500;
//     }
//     sliderLine.style.left = -offset + 'px';
// });

$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger, .header__nav, .header').toggleClass('active')
        $('body').toggleClass('lock')
    })
    $('.header__link').click(function(event) {
        $('.header__burger, .header__nav').toggleClass('active')
        $('body').toggleClass('lock')
    })
})