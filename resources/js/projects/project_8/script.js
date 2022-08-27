// slider arrows
const sliderLine = document.querySelector('.slider-arrows__items-wrapper'),
    sliderArrows = document.querySelector('.slider-arrows'),
    slidesArrows = document.querySelectorAll('.slider-arrows__item'),
    prev = document.querySelector('.slider-arrows__arrow_prev'),
    next = document.querySelector('.slider-arrows__arrow_next');

let slideIndex = 0

prev.addEventListener('click', () => showSlideArrows(-1))
next.addEventListener('click', () => showSlideArrows(1))

function showSlideArrows(n) {
    slideIndex += n

    if (slideIndex < 0) {
        slideIndex = slidesArrows.length - 1
    }
    if (slideIndex > slidesArrows.length - 1) {
        slideIndex = 0
    }

    slidesArrows.forEach(item => item.style.display = 'none')
    slidesArrows[slideIndex].style.display = 'block'
}
showSlideArrows(0)

// menu burger
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

// slider reviews
$(document).ready(function() {
    $('.next').on('click', function() {
        var currentReview = $('.review-content.current')
        var currentReviewIndex = $('.review-content.current').index()
        var nextReviewIndex = currentReviewIndex + 0
        var nextReview = $('.review-content').eq(nextReviewIndex)
        console.log(currentReviewIndex);
        console.log(nextReviewIndex);

        currentReview.fadeOut(500)
        currentReview.removeClass('current')

        if(nextReviewIndex == $('.review-content:last').index() + 0) {
            $('.review-content').eq(0).fadeIn(500)
            $('.review-content').eq(0).addClass('current')
        } else {
            nextReview.fadeIn(500)
            nextReview.addClass('current')
        }
    })

    $('.prev').click(function() {
        var currentReview = $('.review-content.current')
        var currentReviewIndex = $('.review-content.current').index()
        var prevReviewIndex = currentReviewIndex - 2
        var prevReview = $('.review-content').eq(prevReviewIndex)

        currentReview.fadeOut(500)
        currentReview.removeClass('current')
        prevReview.fadeIn(500)
        prevReview.addClass('current')
    })
})

// slider dots
const sliderDots = document.querySelector('.slider-dots'),
    slidesDots = sliderDots.querySelectorAll('.slider-dots__item'),
    wrapperDots = sliderDots.querySelector('.slider-dots__nav');
const dots = [];

for (let i = 0; i < slidesDots.length; i++) {
    const dot = document.createElement('button')

    dot.dataset.slideTo = i
    dot.classList.add('slider-dots__nav-item')

    if (i != 0) {
        slidesDots[i].style.display = 'none'
    }
    if (i == 0) {
        dot.classList.add('active')
    }
    dot.addEventListener('click', showSlideDots)
    wrapperDots.append(dot)
    dots.push(dot)
}
function showSlideDots(e) {
    const slideTo = e.target.dataset.slideTo

    slidesDots.forEach(item => item.style.display = 'none')
    slidesDots[slideTo].style.display = 'block'

    dots.forEach(item => item.classList.remove('active'))
    e.target.classList.add('active')
}