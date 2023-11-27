document.getElementById("btnAvatar").addEventListener("click", mostrarMenu);
document.getElementById("cerrarSesion").addEventListener("click", cerrarSesion);

/**
 * The function "mostrarMenu" toggles the visibility of a dropdown menu.
 */
function mostrarMenu() {
  let dropdownMenu = document.getElementById("menuDesp");
  dropdownMenu.classList.toggle("show");
}

/**
 * The function "cerrarSesion" clears the PHPSESSID cookie and reloads the page.
 */
function cerrarSesion() {
  document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  document.location.reload();
}