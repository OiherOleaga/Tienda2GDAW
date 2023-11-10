let tipo = document.getElementById("tipo");
let inputFoto = document.getElementById("inputFoto");
let fotoPerfil = document.getElementById("fotoPerfil");
const canvas = document.getElementById('canvasFotoPerfil');
const contexto = canvas.getContext('2d');
const imagen = new Image();
const canvasSize = 200;
let isDragging = false;
let x;
let y;

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
    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            imagen.src = e.target.result;

            imagen.onload = function () {

                contexto.clearRect(0, 0, canvas.width, canvas.height);

                canvas.width = canvasSize;
                canvas.height = canvasSize;

                x = (canvasSize - imagen.width) / 2;
                y = (canvasSize - imagen.height) / 2;

                contexto.drawImage(imagen, x, y);

                circular();
            };
        };

        reader.readAsDataURL(inputFoto.files[0]);
    }
});

function ponerPredeterminado(img) {
    img.src = '/assets/fotoPerfil.jpg';
}

canvas.addEventListener("mousedown", (e) => {
    isDragging = true;
    offsetX = e.clientX - x;
    offsetY = e.clientY - y;
})

canvas.addEventListener("mouseup", () => {
    isDragging = false;
})

canvas.addEventListener("mousemove", (e) => {
    if (isDragging) {
        contexto.clearRect(0, 0, canvas.width, canvas.height);
        x = e.clientX - offsetX;
        y = e.clientY - offsetY;
        contexto.drawImage(imagen, x, y, imagen.width, imagen.height);
        circular();
    }
})

canvas.addEventListener("mouseleave", () => {
    isDragging = false;
})

canvas.addEventListener("wheel", (e) => {
    e.preventDefault();

    const scaleFactor = e.deltaY < 0 ? 1.05 : 0.95;

    imagen.width *= scaleFactor;
    imagen.height *= scaleFactor;

    contexto.clearRect(0, 0, canvas.width, canvas.height);
    contexto.drawImage(imagen, x, y, imagen.width, imagen.height);

    circular();
})



function circular() {
    contexto.globalCompositeOperation = 'destination-in';
    contexto.beginPath();
    contexto.arc(canvasSize / 2, canvasSize / 2, canvasSize / 2, 0, 2 * Math.PI, false);
    contexto.fill();
    contexto.globalCompositeOperation = 'source-over';
}