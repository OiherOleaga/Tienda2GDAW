let favoritos = document.getElementsByClassName("link")
for (let link of favoritos) {
    link.addEventListener("click", function (event) {
        event.preventDefault();
        history.pushState(null, null, link.href);
    }
    )
}


let contenido = document.getElementsByClassName("contenido")[0]
fetch("/perfilUsuario/info?peticion=js")
    .then(respuesta => respuesta.text())
    .then(html => contenido.innerHTML = html)
    .catch(error => console.log(error))
