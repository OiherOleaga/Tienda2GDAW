let tipo = document.getElementById("tipo");
let inputFoto = document.getElementById("inputFoto");
let fotoPerfil = document.getElementById("fotoPerfil");

ponerPredeterminado(fotoPerfil);

tipo.addEventListener("change", () => {
    switch (tipo.value) {
        case "cliente":

            break;
        case "comerciante":

            break;
    }
});

fotoPerfil.addEventListener("click", () => {
    inputFoto.click();
})

inputFoto.addEventListener("change", () => {
    if (!inputFoto.files[0].type.startsWith('image/')) {
        console.log(inputFoto)
        console.log()
        alert("eso no es una foto")// mostrar error de otra manera
    } else {
        const reader = new FileReader();
        reader.onload = (event) => {
            fotoPerfil.src = event.target.result;
        };

        reader.readAsDataURL(inputFoto.files[0]);
    }
});

function ponerPredeterminado(img) {
    img.src = '/assets/fotoPerfil.jpg';
}

