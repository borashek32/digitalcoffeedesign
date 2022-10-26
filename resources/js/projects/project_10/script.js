// menu burger
$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
    $('.header__link').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
});

// anchors
const anchors = document.querySelectorAll('.header__link')

anchors.forEach(anc => {
    anc.addEventListener('click', function(event) {
        event.preventDefault();
        const id = anc.getAttribute('href');
        const elem = document.querySelector(id);
        window.scroll({
            top: elem.offsetTop,
            behavior: 'smooth'
        });
    });
});

// animations wow.js animate.css
document.addEventListener('DOMContentLoaded', () => {
    const scrollItems = document.querySelectorAll('.anim-js-down');

    const scrollAnimation = () => {
        if (window.innerWidth >= 767.9) {
            let windowCenter = window.innerHeight + window.scrollY;
            scrollItems.forEach(el => {
                let scrollTop = el.offsetTop,
                    scrollOffset = scrollTop + (el.offsetHeight / 2);

                if (windowCenter >= scrollOffset) {
                    el.classList.add('animate__animated', 'animate__fadeInDown');
                } else {
                    el.classList.remove('animate__animated', 'animate__fadeInDown');
                }
            });
        };
    };

    scrollAnimation();
    window.addEventListener('scroll', () => {
        scrollAnimation();
    });
});