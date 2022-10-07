// burger menu
$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('active')
        $('body').toggleClass('lock')
    })
    $('.header__link').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('active')
        $('body').toggleClass('lock')
    })
})

// close banner
$(document).ready(function() {
    $('.banner__close').click(function(event) {
        $('.banner').addClass('closed')
    })
})

// header dropdown
$(document).ready(function() {
    // cars
    $('#auto').hover(function() {
        $('.auto-dropdown').toggleClass('closed')
    });

    $('.menu__link-auto').hover(function() {
        $('.menu__link-auto').css('color', 'var(--color-blue-light)')
    });

    $('.auto-dropdown').mouseover(function() {
        $('.menu__link-auto').css('color', 'var(--color-blue-light)')
    });

    $('.auto-dropdown').mouseout(function() {
        $('.menu__link-auto').css('color', 'var(--color-grey)')
    });

    // service-autoparts
    $('#service-autoparts').hover(function() {
        $('.service-autoparts-dropdown').toggleClass('closed')
    });

    $('.menu__link-service-autoparts').hover(function() {
        $('.menu__link-service-autoparts').css('color', 'var(--color-blue-light)')
    });

    $('.service-autoparts-dropdown').mouseover(function() {
        $('.menu__link-service-autoparts').css('color', 'var(--color-blue-light)')
    });

    $('.service-autoparts-dropdown').mouseout(function() {
        $('.menu__link-service-autoparts').css('color', 'var(--color-grey)')
    });

    // tires
    $('#tires').hover(function() {
        $('.tires-dropdown').toggleClass('closed')
    });
    
    $('.menu__link-tires').hover(function() {
        $('.menu__link-tires').css('color', 'var(--color-blue-light)')
    });    

    $('.tires-dropdown').mouseover(function() {
        $('.menu__link-tires').css('color', 'var(--color-blue-light)')
    });

    $('.tires-dropdown').mouseout(function() {
        $('.menu__link-tires').css('color', 'var(--color-grey)')
    });

    // promotions
    $('#promotions').hover(function() {
        $('.promotions-dropdown').toggleClass('closed')
    });

    $('.menu__link-promotions').hover(function() {
        $('.menu__link-promotions').css('color', 'var(--color-blue-light)')
    });  

    $('.promotions-dropdown').mouseover(function() {
        $('.menu__link-promotions').css('color', 'var(--color-blue-light)')
    });

    $('.promotions-dropdown').mouseout(function() {
        $('.menu__link-promotions').css('color', 'var(--color-grey)')
    });

    // services
    $('#services').hover(function() {
        $('.services-dropdown').toggleClass('closed')
    });

    $('.menu__link-services').mouseout(function() {
        $('.menu__link-services').css('color', 'var(--color-grey)')
    });

    $('.menu__link-services').hover(function() {
        $('.menu__link-services').css('color', 'var(--color-blue-light)')
    });  

    $('.services-dropdown').mouseover(function() {
        $('.menu__link-services').css('color', 'var(--color-blue-light)')
    });

    $('.services-dropdown').mouseout(function() {
        $('.menu__link-services').css('color', 'var(--color-grey)')
    }); 
})