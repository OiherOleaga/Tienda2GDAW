
let inputFotos;
let canvasFotos;
let outputFotos;
let cambioFoto;

/* The code `document.addEventListener("DOMContentLoaded", function () { ... })` is an event listener
that waits for the DOM (Document Object Model) to be fully loaded before executing the code inside
the function. */
document.addEventListener("DOMContentLoaded", function () {
    inputFotos = document.getElementsByClassName("inputFoto");
    canvasFotos = document.getElementsByClassName("canvasFotoPerfil");
    outputFotos = document.getElementsByClassName("outputFoto");
    cambioFoto = document.getElementsByClassName("cambioFoto");
    for (let i = 0; i < inputFotos.length; i++) {
        initializeCanvas(inputFotos[i], canvasFotos[i], outputFotos[i], cambioFoto[i]);
    }
});

/**
 * The `initializeCanvas` function is a JavaScript function that initializes a canvas element, allows
 * the user to upload an image, and provides functionality for dragging, zooming, and saving the image.
 * @param inputFoto - The input element where the user can select an image file.
 * @param canvas - The canvas parameter is the HTML canvas element on which the image will be displayed
 * and manipulated.
 * @param outputFoto - The `outputFoto` parameter is a reference to an HTML input element that is used
 * to display the output image.
 */

function initializeCanvas(inputFoto, canvas, outputFoto, cambioFoto) {
    const contexto = canvas.getContext('2d');
    let imagen = new Image();
    const canvasSize = 600;
    let isDragging = false;
    let x, y;

    if (canvas.getAttribute("src")) {
        imagen.src = canvas.getAttribute("src");

        imagen.onload = function () {
            canvas.width = canvasSize;
            canvas.height = canvasSize;

            x = (canvasSize - imagen.width) / 2;
            y = (canvasSize - imagen.height) / 2;

            reDrawImg(false);
        };
    }

    inputFoto.addEventListener("change", () => {
        if (inputFoto.files && inputFoto.files[0]) {
            const reader = new FileReader();

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

    inputFoto.addEventListener("change", () => {
        if (inputFoto.files && inputFoto.files[0]) {
            const reader = new FileReader();

            canvas.addEventListener("mousedown", (e) => {
                isDragging = true;
                offsetX = e.clientX - x;
                offsetY = e.clientY - y;
            });

            canvas.addEventListener("mousemove", (e) => {
                if (isDragging) {
                    x = e.clientX - offsetX;
                    y = e.clientY - offsetY;
                    reDrawImg(true);
                }
            });

            canvas.addEventListener("mouseup", () => {
                isDragging = false;
            });

            canvas.addEventListener("mouseleave", () => {
                isDragging = false;
            });

            canvas.addEventListener("wheel", (e) => {
                e.preventDefault();

                const scaleFactor = e.deltaY < 0 ? 1.05 : 0.95;

                imagen.width *= scaleFactor;
                imagen.height *= scaleFactor;

                reDrawImg(true);
            });

            reader.onload = function (e) {
                imagen = new Image();
                imagen.src = e.target.result;

                imagen.onload = function () {
                    canvas.width = canvasSize;
                    canvas.height = canvasSize;
                    reDrawImg(true);
                };
            };

            reader.readAsDataURL(inputFoto.files[0]);
        }

    })

    function reDrawImg(guardar) {
        contexto.clearRect(0, 0, canvas.width, canvas.height);
        contexto.drawImage(imagen, x, y, imagen.width, imagen.height);

        if (guardar) {
            let extension = inputFoto.value.substring(inputFoto.value.lastIndexOf(".") + 1, inputFoto.value.length);
            outputFoto.value = canvas.toDataURL('image/' + extension);
            outputFoto.setAttribute("name", outputFoto.id);
            if (cambioFoto) {
                cambioFoto.setAttribute("name", cambioFoto.id);
            }
        }
    }
}

/**
 * The function "agregarInputBox" adds an input box for uploading photos to a container, with a limit
 * of 5 photos.
 */

function agregarInputBox() {
    var contenedorFotos = document.querySelector('.fotos');
    if (contenedorFotos.children.length < 5) {
        var inputBox = document.createElement('div');
        inputBox.className = 'inputbox';
        let index = contenedorFotos.children.length;
        inputBox.innerHTML = '<canvas class="canvasFotoPerfil"></canvas>' +
            '<input type="hidden" id="foto' + index + '" class="outputFoto">' +
            '<input type="file" class="inputFoto" accept="image/*">';

        contenedorFotos.appendChild(inputBox);

        initializeCanvas(inputFotos[index], canvasFotos[index], outputFotos[index]);
    } else {
        alert('No se pueden agregar más de 5 fotos a un producto.');
    }
}  