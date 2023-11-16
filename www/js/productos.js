let search = document.getElementById("search");

if (search.value !== "") {

}
search.addEventListener("input", () => {
    history.pushState(null, null, location.pathname + "?q=" + search.value);
    let filtro = {
        partida: "todos",
        search: search.value
    }
    filtro = new URLSearchParams(filtro).toString();
    fetch("/filtrado", {
        method: "post",
        headers: { "Content-type": "application/x-www-form-urlencoded" },
        body: filtro
    })
        .then(res => res.json())
        .then(productos => {
            if (productos[0]) {
                let divProductos = document.getElementsByClassName("productos")[0]
                divProductos.innerHTML = "";
                for (let producto of productos) {
                    divProductos.innerHTML +=
                        `<a href=/producto?idProducto=${producto.ID}">
                        <div class="caja">
                            <div class="img"><img src=${producto.Foto} ?>></div>
                            <div class="bottom">
                                <h5>
                                    ${producto.Precio}€
                                </h5>
                            </div>
                            <div class="top">
                                <p>
                                    ${producto.Titulo}
                                </p>
                            </div>
                        </div>
                    </a>`
                }
            }
        })
        .catch(error => console.log(error))
});