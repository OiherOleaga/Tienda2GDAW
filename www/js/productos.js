let search = document.getElementById("search");
let todosLos
let divProductos = document.getElementById("productos");
filtrar(divProductos);
search.addEventListener("input", () => filtrar(divProductos));

function filtrar(divProductos) {
    history.pushState(null, null, location.pathname + "?search=" + search.value);
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
        .then(async res => {
            const contentType = res.headers.get('content-type');
            if (!contentType || !contentType.includes('application/json')) {
                console.log(await res.text());
                throw new Error("texto");
            } else {
                return res.json()
            }
        })
        .then(productos => {
            divProductos.innerHTML = "";
            if (productos[0]) {
                console.log(productos)
                for (let producto of productos) {
                    divProductos.innerHTML +=
                        `<a href=/producto?idProducto=${producto.ID}">
                        <div class="caja">
                            <div class="img"><img src=${producto.Foto}></div>
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
}