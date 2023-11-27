/* The code is adding an event listener to the `DOMContentLoaded` event of the document. This event is
fired when the initial HTML document has been completely loaded and parsed, without waiting for
stylesheets, images, and subframes to finish loading. */
document.addEventListener("DOMContentLoaded", function () {

    if (document.cookie.indexOf("aceptarCookies=true") === -1) {
        setTimeout(function () {
            document.getElementById("cookies").style.display = "flex";
            document.body.style.pointerEvents = "none";
        }, 500);
    }
});

/**
 * The above JavaScript code adds an event listener to a button with the id "aceptarCookies" that, when
 * clicked, sets a cookie named "aceptarCookies" to true and hides an element with the id "cookies".
 */
/**
 * El código JavaScript anterior agrega un detector de eventos a un botón con la identificación
 * "aceptarCookies" que, cuando se hace clic, establece una cookie llamada "aceptarCookies" en
 * verdadero y oculta un elemento con la identificación "cookies".
 */
document.getElementById("aceptarCookies").addEventListener("click", aceptarCookies)
function aceptarCookies() {
    document.cookie = "aceptarCookies=true; expires=" + new Date(new Date().getTime() + 365 * 24 * 60 * 60 * 1000).toUTCString();
    document.getElementById("cookies").style.display = "none";
    document.body.style.pointerEvents = "all";
}