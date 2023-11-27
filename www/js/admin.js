/* This code is adding an event listener to the `DOMContentLoaded` event of the `document` object. When
the DOM content has finished loading, the function inside the event listener will be executed. */
document.addEventListener('DOMContentLoaded', function () {
    var btnInsertarCategoria = document.getElementById('btnInsertarCategoria');

    var divInsercionCategoria = document.getElementById('divInsercionCategoria');

    btnInsertarCategoria.addEventListener('click', function () {
        divInsercionCategoria.style.display = (divInsercionCategoria.style.display === 'none' || divInsercionCategoria.style.display === '') ? 'block' : 'none';
    });
});
