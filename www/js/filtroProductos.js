document.getElementById("btnFiltro").addEventListener("click", mostrarFiltros);

function mostrarFiltros() {
    var bloque = document.getElementById("bloque");
    if (bloque.style.transform === "translateX(-600px)") {
        bloque.style.transform = "translateX(0px)";
        // Agrega un event listener para cerrar el contenido cuando se hace clic fuera
        document.addEventListener('click', cerrarSiClicFuera);
    } else {
        bloque.style.transform = "translateX(-600px)";
        // Elimina el event listener cuando se cierra el contenido
        document.removeEventListener('click', cerrarSiClicFuera);
    }
}

function cerrarSiClicFuera(event) {
    var bloque = document.getElementById("bloque");
    if (!bloque.contains(event.target) && event.target.id !== 'btnFiltro') {
        bloque.style.transform = "translateX(-600px)";
        document.removeEventListener('click', cerrarSiClicFuera);
    }
}

window.addEventListener('resize', function() {
    var bloque = document.getElementById("bloque");
    if (window.innerWidth > 900) {
        bloque.style.removeProperty("transform");
    }else{
        document.getElementById("bloque").style.transform = "translateX(-600px)";
    }
});