
const carrusel1 = document.querySelector(".carrusel-items1");

let maxScrollLeft = carrusel1.scrollWidth - carrusel1.clientWidth;
let intervalo = null;
let step = 1;


const start = () => {
    intervalo = setInterval(function (){
        carrusel1.scrollLeft = carrusel1.scrollLeft + step;
        if (carrusel1.scrollLeft === maxScrollLeft) {
            step = step * -1;
        } else if (carrusel1.scrollLeft === 0) {
            step = step * -1;
        }
    }, 10);
};

const stop = () => {
    clearInterval(intervalo);
};

carrusel1.addEventListener('mouseover', () => {
    stop();
});

carrusel1.addEventListener('mouseout', () => {
    start();
})

start();
