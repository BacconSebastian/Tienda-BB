const nav = document.querySelector('.nav');
const corrector = document.querySelector('.corrector')

window.addEventListener('scroll', () =>{
    nav.classList.toggle('active', window.scrollY > 65)
    corrector.classList.toggle('active', window.scrollY > 65)
})
