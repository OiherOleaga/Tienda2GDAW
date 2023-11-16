let imgLike = document.getElementById('corazon');

imgLike.addEventListener('click', activarAnimacion);

function activarAnimacion() {
    if (imgLike.src === "http://localhost/assets/amor.png") {
        manejarLike("add", () => {
            imgLike.classList.remove('reducir');
            setTimeout(() => { imgLike.src = "/assets/corazon.png"; }, 100);
            imgLike.classList.add('aumentar');
        })
    } else {
        manejarLike("remove", () => {
            imgLike.classList.remove('aumentar');
            setTimeout(() => { imgLike.src = "/assets/amor.png"; }, 200);
            imgLike.classList.add('reducir');
        })
    }
}

async function manejarLike(action, callback) {
    let res = await (await fetch(window.location.href + "&like=" + action)).json()
    switch (res.error) {
        case "redirigir":
            window.location.href = res.uri;
            break;
        case "ok":
            callback();
            break;
        default:
            console.log(res.error);
    }
}