let tipo = document.getElementById("tipo");
let inputBoxNombre = document.getElementById("inputBoxNombre");
let inputBoxApellidos = document.getElementById("inputBoxApellidos");
let inputBoxUsername = document.getElementById("inputBoxUsername");
let formRegistro = document.getElementById("formRegistro");
let inputFoto = document.getElementById("inputFoto");
let outputFoto = document.getElementById("outputFoto");
let passwords = document.getElementsByClassName("password");



tipo.addEventListener("change", () => {
    switch (tipo.value) {
        case "cliente":
            formRegistro.insertBefore(inputBoxNombre, inputBoxUsername);
            formRegistro.insertBefore(inputBoxApellidos, inputBoxUsername);
            inputBoxUsername.querySelector("label").innerText = "Nombre de usuario";
            break;
        case "comerciante":
            formRegistro.removeChild(inputBoxNombre);
            formRegistro.removeChild(inputBoxApellidos);
            inputBoxUsername.querySelector("label").innerText = "Nombre de empresa";
            break;
    }
});

formRegistro.addEventListener("submit", (e) => {
    if (passwords[0].value !== passwords[1].value) {
        e.preventDefault();
        passwords[1].setAttribute("style", "background-color: #fc0324");
        document.getElementById("errorUsuario").innerText = "las contraseñas no coinciden";
    }
})

passwords[1].addEventListener("input", () => {
    passwords[1].removeAttribute("style");
})


// codigo para foto de perfil 

const canvas = document.getElementById('canvasFotoPerfil');
const contexto = canvas.getContext('2d');
let imagen = new Image();
const canvasSize = 600;
let isDragging = false;
let x = (canvasSize - imagen.width) / 2;
let y = (canvasSize - imagen.height) / 2;

imagen.src = '/assets/avatares/fotoPerfil.jpg';

imagen.onload = function () {
    canvas.width = canvasSize;
    canvas.height = canvasSize;
    x = (canvasSize - imagen.width) / 2;
    y = (canvasSize - imagen.height) / 2;

    reDrawImg(false);
};

inputFoto.addEventListener("change", () => {
    if (inputFoto.files && inputFoto.files[0]) {
        const reader = new FileReader();

        canvas.addEventListener("mousedown", (e) => {
            isDragging = true;
            offsetX = e.clientX - x;
            offsetY = e.clientY - y;
        })

        canvas.addEventListener("mousemove", (e) => {
            if (isDragging) {
                x = e.clientX - offsetX;
                y = e.clientY - offsetY;
                reDrawImg(true);
            }
        })

        canvas.addEventListener("mouseup", () => {
            isDragging = false;
        })

        canvas.addEventListener("mouseleave", () => {
            isDragging = false;
        })

        canvas.addEventListener("wheel", (e) => {
            e.preventDefault();

            const scaleFactor = e.deltaY < 0 ? 1.05 : 0.95;

            imagen.width *= scaleFactor;
            imagen.height *= scaleFactor;

            reDrawImg(true);
        })

        reader.onload = function (e) {
            imagen = new Image();
            imagen.src = e.target.result;

            imagen.onload = function () {
                canvas.width = canvasSize;
                canvas.height = canvasSize;
                x = (canvasSize - imagen.width) / 2;
                y = (canvasSize - imagen.height) / 2;

                reDrawImg(true);
            };
        };

        reader.readAsDataURL(inputFoto.files[0]);
    }
});

function reDrawImg(guardar) {
    contexto.clearRect(0, 0, canvas.width, canvas.height);
    contexto.drawImage(imagen, x, y, imagen.width, imagen.height);
    if (guardar) {
        let extension = inputFoto.value.substring(inputFoto.value.lastIndexOf(".") + 1, inputFoto.value.length)
        outputFoto.value = canvas.toDataURL('image/' + extension);
    }
}