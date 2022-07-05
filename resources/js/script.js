const buttons  = document.querySelectorAll('.sidebar__button')

buttons.forEach(button => {
    button.addEventListener('click', function() {
        buttons.forEach(button => button.classList.remove('active-btn'))
        this.classList.add('active-btn');
    })
})