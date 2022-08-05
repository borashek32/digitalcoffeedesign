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

// tabs
const tabsBtns = document.querySelectorAll('.item__button')
const tabsItems = document.querySelectorAll('.tab__content')

function hideTabs() {
    tabsItems.forEach(item => item.classList.add('hide'))
    tabsBtns.forEach(item => item.classList.remove('active-btn'))
}
function showTab(index) {
    tabsItems[index].classList.remove('hide')
    tabsBtns[index]. classList.add('active-btn')
}

hideTabs()
showTab(0)

tabsBtns.forEach((btn, index) => btn.addEventListener('click', () => {
    hideTabs()
    showTab(index)
}))

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