document.addEventListener("DOMContentLoaded", function () {

    if (document.cookie.indexOf("aceptarCookies=true") === -1) {
        setTimeout(function () {
            document.getElementById("cookies").style.display = "flex";
            document.body.style.pointerEvents = "none";
        }, 500);
    }
});

document.getElementById("aceptarCookies").addEventListener("click", aceptarCookies)
function aceptarCookies() {
    document.cookie = "aceptarCookies=true; expires=" + new Date(new Date().getTime() + 365 * 24 * 60 * 60 * 1000).toUTCString();
    document.getElementById("cookies").style.display = "none";
    document.body.style.pointerEvents = "all";
}