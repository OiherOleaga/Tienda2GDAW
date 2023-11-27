let datos = window.location.href.split("?")
let formLogin = document.getElementById("formLogin");
let linkRegistro = document.getElementById("linkRegistro");

/* This code block is checking if the length of the `datos` array is greater than 1. If it is, it means
that there is a query string present in the URL. */
if (datos.length > 1) {
    let dato = "?" + datos[1];
    formLogin.setAttribute("action", "/login" + dato);
    linkRegistro.href = "/registro" + dato;
    let input = document.getElementById("otraRedirecion");
    input.setAttribute("name", "otraRedirecion");
    let pathname = "error";   
    switch (dato.split("=")[0]) {
        case "?idProducto":
            pathname = "/producto";
            break;
    }
    input.value = pathname + dato;
}