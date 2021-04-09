document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
});

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    console.log('desde navegacion responsive');

    const navegacion = document.querySelector('.navegacion');

    // navegacion.classList.toggle('mostrar');  -->hace los mismo que el if pero una sola linea

    if (navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    } else {

        navegacion.classList.add('mostrar');
    }
}