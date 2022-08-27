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

// slider one
$(document).ready(function() {
    let position = 0
    const slidesToShow = 2
    const slidesToScroll = 2
    const container = $('.slider-container')
    const track = $('.slider-track')
    const item = $('.slide')
    const itemsCount = item.length
    const btnPrev = $('.projects__slider__btn_left')
    const btnNext = $('.projects__slider__btn_right')
    const itemWidth = container.width() / slidesToShow
    const movePosition = slidesToScroll * itemWidth

    item.each(function(index, item) {
        $(item).css({
            minWidth: itemWidth
        })
    })

    btnNext.click(function() {
        position -= movePosition
        setPosition()
        checkBtns()
    })
    btnPrev.click(function() {
        position += movePosition
        setPosition()
        checkBtns()
    })

    const setPosition = () => {
        track.css({
            transform: `translateX(${position}px)`
        })
    }
    const checkBtns = () => {
        btnNext.prop(
            'disabled',
            position <= -(itemsCount - slidesToShow) * itemWidth
        )
        btnPrev.prop('disabled', position === 0)
    }
    checkBtns()
})