let favoritos = document.getElementsByClassName("link")
for(let link of favoritos){
    link.addEventListener("click", function (event) {
        event.preventDefault();
        history.pushState(null, null, link.href);
        }
    )
}

fetch("/perfilUsuario/info");
let contenido= document.getElementsByClassName("contenido");
contenido.innerHTML=""