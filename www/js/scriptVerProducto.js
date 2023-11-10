document.getElementById('corazon').addEventListener('click', activarAnimacion);

function activarAnimacion() {
    if (document.getElementById('corazon').src === "http://localhost/assets/amor.png") {
        ponerLike();
    } else {
        eliminarLike();
    }
}

async function eliminarLike() {
    let imgLike = document.getElementById('corazon');
    imgLike.classList.remove('aumentar');
    setTimeout(() => { document.getElementById('corazon').src = "/assets/amor.png"; }, 200);
    imgLike.classList.add('reducir');

}

function ponerLike() {
    let imgLike = document.getElementById('corazon');
    imgLike.classList.remove('reducir');
    setTimeout(() => { document.getElementById('corazon').src = "/assets/corazon.png"; }, 100);
    imgLike.classList.add('aumentar');

}
