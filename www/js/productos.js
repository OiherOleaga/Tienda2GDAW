let search = document.getElementById("search");
let divProductos = document.getElementById("productos");
let inputPrecioMin = document.getElementById("precioMin");
let inputPrecioMax = document.getElementById("precioMax");
inputPrecioMin.addEventListener("input", () => filtrar(divProductos, search.value, idCategorias, inputPrecioMin.value, inputPrecioMax.value));
inputPrecioMax.addEventListener("input", () => filtrar(divProductos, search.value, idCategorias, inputPrecioMin.value, inputPrecioMax.value));
search.addEventListener("input", () => filtrar(divProductos, search.value, idCategorias, inputPrecioMin.value, inputPrecioMax.value));
let idCategorias = new Set();

/* The code is adding event listeners to each element with the class "categoria". When one of these
elements is clicked, the code checks if it is checked or not. If it is checked, it adds the
element's id to the idCategorias set. If it is not checked, it removes the element's id from the
idCategorias set. After updating the idCategorias set, it calls the filtrar function with the
updated values. Additionally, if an element is already checked when the code runs, it adds its id to
the idCategorias set. */
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
/**
 * The function `filtrar` is used to filter and display products based on search criteria such as
 * search value, categories, and price range.
 * @param divProductos - The divProductos parameter is the HTML element where the filtered products
 * will be displayed. It is typically a container element such as a div or ul.
 * @param searchValue - The search value is the keyword or phrase that the user wants to search for in
 * the products. It is used to filter the products based on their titles or descriptions.
 * @param idCategorias - The parameter "idCategorias" is an array of category IDs. It is used to filter
 * the products based on their category.
 * @param precioMin - The parameter "precioMin" represents the minimum price value for filtering the
 * products.
 * @param precioMax - The `precioMax` parameter represents the maximum price for filtering products. It
 * is used in the `filtrar` function to specify the maximum price range for the products to be
 * displayed.
 */

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
                }
            }
            if (!productos[0]) {
                divProductos.innerHTML = '<div id="nada"><img src="https://es.wallapop.com/assets/images/commons/pop-no-results.svg" alt="orewingoer"><br/><p>Nada por aqui...</div>';
            }
        })
        .catch(error => console.log(error))
}