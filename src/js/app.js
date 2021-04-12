document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
    darkMode();
});

function darkMode() {

    const prefierDarkMode = window.matchMedia('(prefers-color-scheme:dark)');
    // console.log(prefierDarkMode.matches);
    if (prefierDarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else {

        document.body.classList.remove('dark-mode');
    }

    prefierDarkMode.addEventListener('change', function() {
        if (prefierDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {

            document.body.classList.remove('dark-mode');
        }
    });


    const botonDarkMode = document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
    });
}

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