const sections = document.querySelectorAll('.section')
const sectBtns = document.querySelectorAll('.controls')
const sectBtn  = document.querySelector('.control')
const allSections = document.querySelector('.main-content')

function pageTransition() {
    allSections.addEventListener('click', (e) => {
        const id = e.target.dataset.id
        if (id) {
            sections.forEach((section) => {
                section.classList.remove('active')
                // section.style.display = "none"
            })
            const element = document.getElementById(id)
            element.classList.add('active')
            element.style.display = "block"
        }
    })
}

pageTransition()

const buttons  = document.querySelectorAll('.control')

buttons.forEach(button => {
    button.addEventListener('click', function() {
        buttons.forEach(btn => btn.classList.remove('active-btn'))
        this.classList.add('active-btn');
    })
})
