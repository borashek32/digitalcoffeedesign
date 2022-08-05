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

// anchors
const anchors = document.querySelectorAll('.header__link')

anchors.forEach(anc => {
    anc.addEventListener('click', function(event) {
        event.preventDefault()
        const id = anc.getAttribute('href')
        const elem = document.querySelector(id)
        window.scroll({
            top: elem.offsetTop,
            behavior: 'smooth'
        })
    })
})