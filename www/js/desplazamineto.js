document.querySelectorAll('.btnIzquierda, .btnDerecha').forEach(function(boton) {
    boton.addEventListener('click', function() {
        var IdContenedor = this.getAttribute('data-container');
        mover(this.classList.contains('btnIzquierda'), IdContenedor);
    });
});

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