document.addEventListener('DOMContentLoaded', function () {
    var btnInsertarCategoria = document.getElementById('btnInsertarCategoria');

    var divInsercionCategoria = document.getElementById('divInsercionCategoria');

    // Agrega un evento click al botón de insertar categorías
    btnInsertarCategoria.addEventListener('click', function () {
        divInsercionCategoria.style.display = (divInsercionCategoria.style.display === 'none' || divInsercionCategoria.style.display === '') ? 'block' : 'none';
    });
});
