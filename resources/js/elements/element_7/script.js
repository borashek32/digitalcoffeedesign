// animation scroll
document.addEventListener('DOMContentLoaded', () => {
    const promo = document.querySelector('.promo');
    const header = document.querySelector('.header');
    const scrollItems = document.querySelectorAll('.scroll-item');

    const scrollAnimation = () => {
        let windowCenter = window.innerHeight + scrollY;
        scrollItems.forEach(el => {
            let scrollOffset = el.offsetTop + (el.offsetHeight / 2);

            if (windowCenter >= scrollOffset) {
                el.classList.add('animation-class');
            } else {
                el.classList.remove('animation-class');
            }
        });
    };

    const headerFixed = () => {
        let scrollTop = window.scrollY;
        let promoCenter = promo.offsetHeight / 2;

        if (scrollTop >=  promoCenter) {
            header.classList.add('fixed');
            promo.style.marginTop = `${header.offsetHeight}px`;
        } else {
            header.classList.remove('fixed');
            promo.style.marginTop = `0px`;
        }
    };

    headerFixed();
    scrollAnimation();
    window.addEventListener('scroll', () => {
        headerFixed();
        scrollAnimation();
    });
});

// menu burger
$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger, .header__list').toggleClass('active');
        $('body').toggleClass('lock');
    });
    $('.header__item').click(function(event) {
        $('.header__burger, .header__list').toggleClass('active');
        $('body').toggleClass('lock');
    });
});





const isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (
            isMobile.Android() ||
            isMobile.BlackBerry() ||
            isMobile.iOS() ||
            isMobile.Opera() ||
            isMobile.Windows()
        );
    }
};

if (isMobile.any()) {
    document.body.classList.add('_touch');
} else {
    document.body.classList.add('_pc');
}