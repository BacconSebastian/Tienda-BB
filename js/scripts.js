const nav = document.querySelector('.nav');
const corrector = document.querySelector('.corrector')

window.addEventListener('scroll', () =>{
    nav.classList.toggle('active', window.scrollY > 65)
    corrector.classList.toggle('active', window.scrollY > 65)
})

const imagen_uno = document.querySelector('.imagen_uno');
const imagen_dos = document.querySelector('.imagen_dos');


window.setInterval(() => {
    imagen_uno.classList.toggle('active')
    imagen_dos.classList.toggle('active')
    setTimeout
}, 5000);
