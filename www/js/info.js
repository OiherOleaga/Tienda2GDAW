let inputFoto = document.getElementById("inputFoto");
let outputFoto = document.getElementById("outputFoto");

let inputsDatos = document.getElementsByClassName("datoInput")

/* The code is iterating over a collection of input elements with the class "datoInput" and adding an
event listener to each input element. */
for (let input of inputsDatos) {
    console.log(input)
    input.addEventListener("input", function () {
        if (input.getAttribute("value1") === input.value) {
            input.removeAttribute("name")
        } else {
            input.setAttribute("name", input.id);
        }
    })
}

document.getElementsByClassName("cambiarFoto")[0].addEventListener("click", () => {
    inputFoto.click();
})


// codigo para foto de perfil 

const canvas = document.getElementById('canvasFotoPerfil');
const contexto = canvas.getContext('2d');
let imagen = new Image();
const canvasSize = 100;
let isDragging = false;
let x;
let y;

/* This code snippet is setting the source of the `imagen` variable to the value of the `src` attribute
of the `canvas` element. If the `src` attribute is not present or is empty, it sets the source to
'/assets/avatares/fotoPerfil.jpg'. */
imagen.src = canvas.getAttribute("src") ? canvas.getAttribute("src") : '/assets/avatares/fotoPerfil.jpg';

imagen.onload = function () {
    canvas.width = canvasSize;
    canvas.height = canvasSize;
    x = (canvasSize - imagen.width) / 2;
    y = (canvasSize - imagen.height) / 2;

    reDrawImg(false);
};

/* The code snippet is adding an event listener to the `inputFoto` element. This event listener listens
for the "change" event, which is triggered when the user selects a file using the file input field. */
inputFoto.addEventListener("change", () => {
    console.log("ajdslkfa")
    if (inputFoto.files && inputFoto.files[0]) {
        const reader = new FileReader();
        eventosDeMover();
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

/**
 * The function "eventosDeMover" adds event listeners to the canvas element for mouse events such as
 * mousedown, mousemove, mouseup, mouseleave, and wheel, allowing the user to drag and zoom an image on
 * the canvas.
 */
function eventosDeMover() {
    let offsetX;
    let offsetY;
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
}

/**
 * The function reDrawImg clears the canvas, draws an image, applies a circular mask, and saves the
 * resulting image if specified.
 * @param guardar - The "guardar" parameter is a boolean value that determines whether to save the
 * modified image or not. If it is set to true, the function will save the image. If it is set to
 * false, the function will not save the image.
 */
function reDrawImg(guardar) {
    contexto.clearRect(0, 0, canvas.width, canvas.height);
    contexto.drawImage(imagen, x, y, imagen.width, imagen.height);
    contexto.globalCompositeOperation = 'destination-in';
    contexto.beginPath();
    contexto.arc(canvasSize / 2, canvasSize / 2, canvasSize / 2, 0, 2 * Math.PI, false);
    contexto.fill();
    contexto.globalCompositeOperation = 'source-over';
    if (guardar) {
        let extension = inputFoto.value.substring(inputFoto.value.lastIndexOf(".") + 1, inputFoto.value.length)
        outputFoto.setAttribute("name", "avatar");
        outputFoto.value = canvas.toDataURL('image/' + extension);
    }
}