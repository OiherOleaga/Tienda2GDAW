let favoritos = document.getElementsByClassName("link")
let contenido = document.getElementsByClassName("contenido")[0]
for (let link of favoritos) {
    link.addEventListener("click", function (event) {
        event.preventDefault();
        history.pushState(null, null, link.href);
        fetch(link.href + "?peticion=js")
            .then(respuesta => respuesta.text())
            .then(html => contenido.innerHTML = html)
            .catch(error => console.log(error))
    }
    )
}

