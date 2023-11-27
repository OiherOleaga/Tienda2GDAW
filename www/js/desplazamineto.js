/* The code is selecting all elements with the class "btnIzquierda" or "btnDerecha" using the
`document.querySelectorAll` method. It then iterates over each selected element using the `forEach`
method and adds a click event listener to each element. */
document.querySelectorAll('.btnIzquierda, .btnDerecha').forEach(function(boton) {
    boton.addEventListener('click', function() {
        var IdContenedor = this.getAttribute('data-container');
        mover(this.classList.contains('btnIzquierda'), IdContenedor);
    });
});

/**
 * The function `mover` scrolls a container element horizontally by a fixed amount in either direction.
 * @param mover - A boolean value indicating whether to move left or right. If `mover` is `true`, it
 * means move left. If `mover` is `false`, it means move right.
 * @param IdContenedor - The Id of the container element that contains the grid of products.
 */
function mover(mover, IdContenedor) {
    const gridProductos = document.getElementById(IdContenedor);
    let scrollValue = gridProductos.scrollLeft;
    if (mover) {
        scrollValue -= 700;
    } else {
        scrollValue += 700;
    }
    gridProductos.scrollTo({ left: scrollValue, behavior: 'smooth' });
}