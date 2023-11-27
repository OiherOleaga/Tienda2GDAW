let imgLike = document.getElementById('corazon');

imgLike.addEventListener('click', activarAnimacion);

/**
 * The function `activarAnimacion` toggles between two images (`amor.png` and `corazon.png`) and
 * applies CSS classes to animate the image.
 */
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

/**
 * The function `manejarLike` is an asynchronous function that handles a like action and calls a
 * callback function if successful.
 * @param action - The "action" parameter is a string that represents the action to be performed. It is
 * used to construct the URL for the fetch request. In this case, it is appended to the current window
 * location URL as a query parameter.
 * @param callback - The `callback` parameter is a function that will be executed if the response from
 * the server is successful (i.e., if `res.error` is equal to "ok").
 */

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