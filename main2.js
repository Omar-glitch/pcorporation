const leer_mas = document.querySelector('.read-more');
const section2 = document.querySelector('.section2');
const just = document.querySelector('#justing');
let anti = true;

leer_mas.addEventListener('click', () => {
    const top = section2.offsetTop;
    const { height } = section2.getBoundingClientRect();
    
    if (anti) {
        just.style.display = 'flex';
        leer_mas.innerHTML = 'Leer menos...';
        window.scroll(0, top + height);
    } else {
        just.style.display = 'none';
        leer_mas.innerHTML = 'Leer más'
    }
    anti = !anti;
})


// Button Header
const button1 = document.querySelector('.moverI');
const button2 = document.querySelector('.moverR');
const sections_container = document.querySelector('.sections-container');

let moving = false;
let translating = false;
let translated = 0;
let moved = null;
let initial_point = null;
let current_slide = 2;
let current_translate = 0;
let w = document.documentElement.clientWidth;

const resizing = () => {
    if (current_slide === 2) return;
    w = document.documentElement.clientWidth;
    translated = Math.sign(translated) * (w / 16);
    sections_container.style.transform = `translateX(${translated}rem)`;
}

window.addEventListener('resize', resizing);

const get_x = (e) => {
    return e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
}

const mousedown = (e) => {
    if (translating) return;
    sections_container.style.transition = "none";
    moving = true;
    moved = get_x(e);
    initial_point = get_x(e);
}

const mousemove = (e) => {
    if (!moving) return;
    moved = get_x(e);
    sections_container.style.cursor = `grabbing`;
    sections_container.style.transform = `translateX(${translated + current_translate + (moved - initial_point) / 16}rem)`;
}

const send_to_back = () => {
    sections_container.style.transform = `translateX(${translated}rem)`
}

const mouseup = () => {
    if (!moving) return;
    sections_container.style.cursor = `grab`;
    moving = false;
    sections_container.style.transition = "transform .5s";
    if (moved - initial_point > 75) {
        if (current_slide <= 1) return send_to_back();
        translated += w / 16;
        sections_container.style.transform = `translateX(${translated}rem)`;
        current_slide--;
    } else if (moved - initial_point < -75) {
        if (current_slide >= 3) return send_to_back();
        translated -= w / 16;
        sections_container.style.transform = `translateX(${translated}rem)`;
        current_slide++;
    } else {
        send_to_back()
    } 
}

const transition_end = () => {
    sections_container.style.transition = "none";
    translating = false;
}


sections_container.addEventListener('touchstart', mousedown);
sections_container.addEventListener('touchmove', mousemove);
sections_container.addEventListener('touchend', mouseup);

sections_container.addEventListener('mousedown', mousedown);
sections_container.addEventListener('mousemove', mousemove);
sections_container.addEventListener('mouseleave', mouseup);
sections_container.addEventListener('mouseup', mouseup);
sections_container.addEventListener('transitionend', transition_end);

// Boton Izquierda
const slide_left = () => {
    if (current_slide <= 1) return send_to_back();
    translating = true;
    sections_container.style.transition = "transform .5s";
    translated += w / 16;
    sections_container.style.transform = `translateX(${translated}rem)`;
    current_slide--;
}

const slide_right = () => {
    if (current_slide >= 3) return send_to_back();
    translating = true;
    sections_container.style.transition = "transform .5s";
    translated -= w / 16;
    sections_container.style.transform = `translateX(${translated}rem)`;
    current_slide++;
}

button1.addEventListener('click', slide_left);
button2.addEventListener('click', slide_right);