document.addEventListener("DOMContentLoaded", function () {
    const inputFotos = document.getElementsByClassName("inputFoto");
    const canvasFotos = document.getElementsByClassName("canvasFotoPerfil");
    const outputFotos = document.getElementsByClassName("outputFoto");

    for (let i = 0; i < inputFotos.length; i++) {
        initializeCanvas(inputFotos[i], canvasFotos[i], outputFotos[i]);
    }

    function initializeCanvas(inputFoto, canvas, outputFoto) {
        const contexto = canvas.getContext('2d');
        let imagen = new Image();
        const canvasSize = 100;
        let isDragging = false;
        let x = (canvasSize - imagen.width) / 2;
        let y = (canvasSize - imagen.height) / 2;

        imagen.src = '/assets/avatares/fotoPerfil.jpg';

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
        });

        function reDrawImg(guardar) {
            contexto.clearRect(0, 0, canvas.width, canvas.height);
            contexto.drawImage(imagen, x, y, imagen.width, imagen.height);

            if (guardar) {
                let extension = inputFoto.value.substring(inputFoto.value.lastIndexOf(".") + 1, inputFoto.value.length);
                outputFoto.value = canvas.toDataURL('image/' + extension);
            }
        }
    }

    function agregarInputBox() {
        var contenedorFotos = document.getElementById('contenedorFotos');

        if (contenedorFotos.children.length < 5) {
            var inputBox = document.createElement('div');
            inputBox.className = 'inputbox';

            inputBox.innerHTML = '<canvas class="canvasFotoPerfil"></canvas>' +
                '<input type="hidden" name="avatar" class="outputFoto">' +
                '<input type="file" class="inputFoto" accept="image/*">';

            contenedorFotos.appendChild(inputBox);
        } else {
            alert('No se pueden agregar más de 5 fotos a un producto.');
        }
    }

});