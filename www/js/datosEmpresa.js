let inputsDatos = document.getElementsByClassName("datos")

/* The code is adding an event listener to each element with the class "datos". When the input event is
triggered (when the user types or changes the value), the function is executed. */
for (let input of inputsDatos) {
    input.addEventListener("input", function () {
        if (this.getAttribute("value1") === this.value) {
            this.removeAttribute("name")
        } else {
            this.setAttribute("name", this.id);
        }
    })
}
/* The code is adding a click event listener to each element with the class "btBorrar". When the
element is clicked, the function is executed. */

for (let btBorrar of document.getElementsByClassName("btBorrar")) {
    btBorrar.addEventListener("click", () => {
        fetch(location.pathname + "?borrar=" + btBorrar.id)
            .then(res => res.text())
            .then(res => {
                if (res === "ok") {
                    btBorrar.parentNode.parentNode.remove();
                } else {
                    console.log(res)
                }
            })
            .catch(error => console.log(error));
    })
}

let inputFoto = document.getElementById("inputFoto");
let outputFoto = document.getElementById("outputFoto");

document.getElementsByClassName("cambiarFoto")[0].addEventListener("click", () => { inputFoto.click() })

const canvas = document.getElementById('canvasFotoPerfil');
const contexto = canvas.getContext('2d');
let imagen = new Image();
const canvasSize = 100;
let isDragging = false;
let x = (canvasSize - imagen.width) / 2;
let y = (canvasSize - imagen.height) / 2;


imagen.src = canvas.getAttribute("src") ? canvas.getAttribute("src") : '/assets/avatares/fotoPerfil.jpg';

/* The code `imagen.onload = function () { ... }` is assigning an anonymous function to the `onload`
event of the `imagen` object. This function is executed when the image has finished loading. */
imagen.onload = function () {
    canvas.width = canvasSize;
    canvas.height = canvasSize;
    x = (canvasSize - imagen.width) / 2;
    y = (canvasSize - imagen.height) / 2;

    reDrawImg(false);
};

/* The code is adding an event listener to the `inputFoto` element. When the `change` event is
triggered (when the user selects a file), the function is executed. */
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