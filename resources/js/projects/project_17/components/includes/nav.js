const burger = document.querySelector('#burger');
const popup = document.querySelector('#popup');
const menu = document.querySelector('#menu').cloneNode(1);
const body = document.body;

burger.addEventListener('click', handlerBurger);

function handlerBurger(event) {
    event.preventDefault();
    popup.classList.toggle('active');
    burger.classList.toggle('active');
    body.classList.toggle('lock')
    renderPopup();
}

function renderPopup() {
    popup.appendChild(menu);
}

export {
    handlerBurger
}