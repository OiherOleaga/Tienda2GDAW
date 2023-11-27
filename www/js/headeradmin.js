document.getElementById("cerrarSesion").addEventListener("click", cerrarSesion);


function cerrarSesion() {
    document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    document.location.reload();
}