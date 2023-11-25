document.addEventListener("DOMContentLoaded", function () {
    if (document.cookie.indexOf("aceptarCookies=true") === -1) {
        setTimeout(function () {
            document.getElementById("cookies").style.display = "flex";
        }, 1000); // Cambia esto según tus necesidades
    }else document.getElementById("cookies").style.display = "none";

});

document.getElementById("aceptarCookies").addEventListener("click", aceptarCookies)
function aceptarCookies() {
    document.cookie = "aceptarCookies=true; expires=" + new Date(new Date().getTime() + 365 * 24 * 60 * 60 * 1000).toUTCString();
    document.getElementById("cookies").style.display = "none";
}