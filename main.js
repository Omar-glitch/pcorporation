const header = document.querySelector('#header');
const lista = document.querySelector('#lista');
const body = document.querySelector('body');
const arriba = document.querySelector('.up');
const loader = document.querySelector('.loader-css');
header.style.background = window.scrollY > 40 ? "var(--light)" : "transparent";
header.style.boxShadow = window.scrollY > 40 ? "0 0 0.3125rem rgba(0, 0, 0, .2)" : "none";

window.addEventListener('load', () => {
    loader.style.visibility = 'hidden';
    loader.style.opacity = 0;
})

let posicionA = window.scrollY;
window.addEventListener('scroll', () => {
    let posicionB = window.scrollY;
    
    if (posicionA < posicionB) header.style.top = `-3.4375rem`;
    else header.style.top = '0';
    
    if (posicionB > 350) arriba.style.right = "1.25rem";
    else arriba.style.right = '-6.25rem';
    
    header.style.background = posicionB > 40 ? "var(--light)" : "transparent";
    header.style.boxShadow = posicionB > 40 ? "0 0 0.3125rem rgba(0, 0, 0, .2)" : "none";
    posicionA = posicionB;
});

const button_menu = document.querySelector('#header > i');
let ant = true;
button_menu.addEventListener('click', () => {
    button_menu.classList.toggle('fa-times');
    if (ant) lista.style.left = '0';
    else lista.style.left = '-20rem';
    ant = !ant;
})

arriba.addEventListener('click', () => {
    window.scroll(0, 0);
})
