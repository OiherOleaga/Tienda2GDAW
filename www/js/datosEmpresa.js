let inputsDatos = document.getElementsByClassName("datos")

for (let input of inputsDatos) {
    input.addEventListener("input", function () {
        if (this.getAttribute("value1") === this.value) {
            this.removeAttribute("name")
        } else {
            this.setAttribute("name", this.id);
        }
    })
}



let inputFoto = document.getElementById("inputFoto");
let outputFoto = document.getElementById("outputFoto");

const canvas = document.getElementById('canvasFotoPerfil');
const contexto = canvas.getContext('2d');
let imagen = new Image();
const canvasSize = 100;
let isDragging = false;
let x = (canvasSize - imagen.width) / 2;
let y = (canvasSize - imagen.height) / 2;


imagen.src = canvas.getAttribute("src") ? canvas.getAttribute("src") : '/assets/avatares/fotoPerfil.jpg';

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