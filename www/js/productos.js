let search = document.getElementById("search");
let divProductos = document.getElementById("productos");
let inputPrecioMin = document.getElementById("precioMin");
let inputPrecioMax = document.getElementById("precioMax");
inputPrecioMin.addEventListener("input", () => filtrar(divProductos, search.value, idCategorias, inputPrecioMin.value, inputPrecioMax.value));
inputPrecioMax.addEventListener("input", () => filtrar(divProductos, search.value, idCategorias, inputPrecioMin.value, inputPrecioMax.value));
search.addEventListener("input", () => filtrar(divProductos, search.value, idCategorias, inputPrecioMin.value, inputPrecioMax.value));
let idCategorias = new Set();

for (let categoria of document.getElementsByClassName("categoria")) {
    categoria.addEventListener("click", () => {
        if (categoria.checked) {
            //history.pushState(null, null, location.pathname + "?search=" + search.value);
            idCategorias.add(categoria.id);
        } else {
            //history.pushState(null, null, location.pathname + "?search=" + search.value);
            idCategorias.delete(categoria.id);
        }
        filtrar(divProductos, search.value, idCategorias, inputPrecioMin.value, inputPrecioMax.value)
    })
    if (categoria.checked) {
        idCategorias.add(categoria.id);
    }
}

filtrar(divProductos, search.value, idCategorias, inputPrecioMin.value, inputPrecioMax.value)
function filtrar(divProductos, searchValue, idCategorias, precioMin, precioMax) {
    history.pushState(null, null, location.pathname + "?search=" + search.value);
    let filtro = {
        partida: "todos",
        search: searchValue,
        idCategorias: Array.from(idCategorias),
        precioMin: precioMin,
        precioMax: precioMax
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

                for (let producto of productos) {
                    divProductos.innerHTML +=
                        `<a href=/producto?idProducto=${producto.ID}">
                        <div class="caja">
                            <div class="img"><img src=${producto.foto}></div>
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
                    /*
                    <a href="/producto?idProducto=<?= $productos[$i]["ID"] ?>">
                <div class="caja">
                    <div class="img"><img src=<?= $productos[$i]["Foto"] ?>></div>
                    <div class="bottom">
                        <h5>
                            <?= $productos[$i]["Precio"] . "€" ?>
                        </h5>
                    </div>
                    <div class="top">
                        <p>
                            <?= $productos[$i]["Titulo"] ?>
                        </p>
                    </div>
                </div>
            </a>
                    */
                }
            }
            if (!productos[0]) {
                divProductos.innerHTML = '<div id="nada"><img src="https://es.wallapop.com/assets/images/commons/pop-no-results.svg" alt="orewingoer"><br/><p>Aqui no hay nada</p></div>';
            }
        })
        .catch(error => console.log(error))
}