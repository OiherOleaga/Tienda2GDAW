let favoritos = document.getElementsByClassName("link")
for(let link of favoritos){
    link.addEventListener("click", function (event) {
        event.preventDefault();
        history.pushState(null, null, link.href);
        }
    )
}


let contenido= document.getElementsByClassName("contenido");
fetch("/perfilUsuario/info?peticion=js").then(respuesta=>);
contenido.innerHTML=``;
