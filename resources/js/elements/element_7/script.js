document.addEventListener('DOMContentLoaded', () => {
    const promo = document.querySelector('.promo');
    const header = document.querySelector('.header');
    const scrollItems = document.querySelectorAll('.scroll-item');

    const scrollAnimation = () => {
        let windowCenter = (window.innerHeight / 2) + scrollY;
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