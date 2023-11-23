document.addEventListener('DOMContentLoaded', function () {
    // Obtén el botón de insertar categorías
    var btnInsertarCategoria = document.getElementById('btnInsertarCategoria');

    // Obtén el div que contiene el formulario de inserción
    var divInsercionCategoria = document.getElementById('divInsercionCategoria');

    // Agrega un evento click al botón de insertar categorías
    btnInsertarCategoria.addEventListener('click', function () {
        // Muestra u oculta el div según su estado actual
        divInsercionCategoria.style.display = (divInsercionCategoria.style.display === 'none' || divInsercionCategoria.style.display === '') ? 'block' : 'none';
    });
});
