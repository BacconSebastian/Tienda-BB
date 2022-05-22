
/*********************** Buscador ***********************/

const header = document.querySelector('.individual')
const busqueda_desplegada = document.querySelector('.busqueda_desplegada')
const corrector_header = document.querySelector('.corrector_header')

function desplegar(){
    header.classList.toggle('inactive')
    busqueda_desplegada.classList.toggle('active')
    corrector_header.classList.toggle('active')
}
window.addEventListener('scroll', () =>{
    busqueda_desplegada.classList.toggle('none', window.scrollY > 65)
})

/*******************************************************/


/*********************** Nav ***********************/

const nav = document.querySelector('.nav')
const corrector_nav = document.querySelector('.corrector_nav')

window.addEventListener('scroll', () =>{
    nav.classList.toggle('active', window.scrollY > 65)
    corrector_nav.classList.toggle('active', window.scrollY > 65)
})

/**************************************************/