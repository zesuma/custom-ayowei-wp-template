const hamburger = document.querySelector('.hamburger')
const navbar = document.querySelectorAll('.navbar')

hamburger.addEventListener('click', navToggler )

function navToggler() {
    console.log(navbar)
    for(let i = 0; i < navbar.length; i++) {
        navbar[i].classList.toggle('show')
    }
}