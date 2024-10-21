let slideIndex = 1;
showSlides(slideIndex);

// Controla las diapositivas actuales
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Cambia las diapositivas
function showSlides(n) {
    let slides = document.getElementsByClassName("carousel-slide");
    let dots = document.getElementsByClassName("dot");

    if (n > slides.length) { slideIndex = 1; }
    if (n < 1) { slideIndex = slides.length; }

    // Ocultar todas las diapositivas
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.opacity = "0";
        slides[i].classList.remove("active");
    }

    // Remover clase "active" de todos los puntos
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    // Mostrar la diapositiva actual
    slides[slideIndex - 1].style.opacity = "1";
    slides[slideIndex - 1].classList.add("active");

    // Activar el punto correspondiente
    dots[slideIndex - 1].className += " active";
}

// Autoplay del carrusel
setInterval(function() {
    slideIndex++;
    if (slideIndex > 3) slideIndex = 1;
    showSlides(slideIndex);
}, 5000); // Cambiar la imagen cada 5 segundos

function toggleSubMenu() {
    var submenu = document.getElementById("submenu");
    if (submenu.style.display === "none" || submenu.style.display === "") {
        submenu.style.display = "block"; // Mostrar el submenú
    } else {
        submenu.style.display = "none"; // Ocultar el submenú
    }
}

// Detectar clics fuera del submenú
document.addEventListener("click", function(event) {
    var submenu = document.getElementById("submenu");
    var moreIcon = document.getElementById("more-icon");

    // Si el clic no fue en el ícono de más opciones ni en el submenú, ocultar el submenú
    if (!submenu.contains(event.target) && !moreIcon.contains(event.target)) {
        submenu.style.display = "none"; // Ocultar el submenú
    }
});
// Función para alternar la visibilidad del menú
function toggleMenu() {
    var menu = document.getElementById("floating-menu");
    if (menu.style.display === "none" || menu.style.display === "") {
        menu.style.display = "block"; // Mostrar el menú
    } else {
        menu.style.display = "none"; // Ocultar el menú
    }
}

// Detectar clics fuera del menú y del botón flotante
document.addEventListener("click", function(event) {
    var menu = document.getElementById("floating-menu");
    var button = document.querySelector(".floating-button");

    // Si el clic es fuera del botón y del menú, ocultar el menú
    if (!button.contains(event.target) && !menu.contains(event.target)) {
        menu.style.display = "none"; // Ocultar el menú
    }
});

