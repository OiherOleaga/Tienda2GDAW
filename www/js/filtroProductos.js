document.getElementById("btnFiltro").addEventListener("click", mostrarFiltros);

/**
 * The function "mostrarFiltros" toggles the visibility of an element by changing its transform
 * property.
 */
function mostrarFiltros() {
    var bloque = document.getElementById("bloque");
    if (bloque.style.transform === "translateX(-600px)") {
        bloque.style.transform = "translateX(0px)";
        document.addEventListener('click', cerrarSiClicFuera);
    } else {
        bloque.style.transform = "translateX(-600px)";
        document.removeEventListener('click', cerrarSiClicFuera);
    }
}

/**
 * The function "cerrarSiClicFuera" closes a block element if a click event occurs outside of it.
 * @param event - The event parameter represents the event object that is passed to the function when
 * the event occurs. In this case, it is used to determine if the click event occurred outside the
 * "bloque" element.
 */
function cerrarSiClicFuera(event) {
    var bloque = document.getElementById("bloque");
    if (!bloque.contains(event.target) && event.target.id !== 'btnFiltro') {
        bloque.style.transform = "translateX(-600px)";
        document.removeEventListener('click', cerrarSiClicFuera);
    }
}

/* The code snippet is adding an event listener to the window object for the 'resize' event. When the
window is resized, the function inside the event listener is executed. */
window.addEventListener('resize', function() {
    var bloque = document.getElementById("bloque");
    if (window.innerWidth > 900) {
        bloque.style.removeProperty("transform");
    }else{
        document.getElementById("bloque").style.transform = "translateX(-600px)";
    }
});