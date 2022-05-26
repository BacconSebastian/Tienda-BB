
/*********************** Buscador ***********************/

const header = document.querySelector('header')
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


/*********************** Imagenes corredizas ***********************/

const imagen_uno = document.querySelector('.imagen_uno')
const imagen_dos = document.querySelector('.imagen_dos')


window.setInterval(() => {
    imagen_uno.classList.toggle('active')
    imagen_dos.classList.toggle('active')
    setTimeout
}, 5000)

/******************************************************************/


/*********************** Puntos kits ***********************/

const punto_uno = document.querySelector('.punto_uno')
const punto_dos = document.querySelector('.punto_dos')
const punto_tres = document.querySelector('.punto_tres')

const kitPrimero = document.querySelector('.kit.primero')
const kitSegundo = document.querySelector('.kit.segundo')
const kitTercero = document.querySelector('.kit.tercero')

function toggleUno(){
    punto_uno.className = 'punto_uno active'
    punto_dos.className = 'punto_dos'
    punto_tres.className = 'punto_tres'

    kitPrimero.className = 'kit primero'
    kitSegundo.className = 'kit segundo inactive'
    kitTercero.className = 'kit tercero inactive'
}
function toggleDos(){
    punto_uno.className = 'punto_uno'
    punto_dos.className = 'punto_dos active'
    punto_tres.className = 'punto_tres'

    kitPrimero.className = 'kit primero inactive'
    kitSegundo.className = 'kit segundo'
    kitTercero.className = 'kit tercero inactive'
}
function toggleTres(){
    punto_uno.className = 'punto_uno'
    punto_dos.className = 'punto_dos'
    punto_tres.className = 'punto_tres active'

    kitPrimero.className = 'kit primero inactive'
    kitSegundo.className = 'kit segundo inactive'
    kitTercero.className = 'kit tercero'
}

/***********************************************************/

const nav_inicio = document.querySelector('.nav_inicio')

function toggleInicio(){

}