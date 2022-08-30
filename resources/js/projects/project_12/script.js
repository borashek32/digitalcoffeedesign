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

// slider projects
$(document).ready(function() {
    let position = 0
    const slidesToShow = 2
    const slidesToScroll = 1
    const container = $('#slider-container_projects')
    const track = $('#slider-track_projects')
    const item = $('.slide_projects')
    const itemsCount = item.length
    const btnPrev = $('#slider__btn_left_projects')
    const btnNext = $('#slider__btn_right_projects')
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

// slider testimonials
$(document).ready(function() {
    let position = 0
    const slidesToShow = 1
    const slidesToScroll = 1
    const container = $('#slider-container_testimonials')
    const track = $('#slider-track_testimonials')
    const item = $('.slide-testimonials')
    const itemsCount = item.length
    const btnPrev = $('#slider__btn_left_testimonials')
    const btnNext = $('#slider__btn_right_testimonials')
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