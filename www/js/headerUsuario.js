document.getElementById("btnAvatar").addEventListener("click", mostrarMenu);
document.getElementById("cerrarSesion").addEventListener("click", cerrarSesion);

function mostrarMenu() {
  let dropdownMenu = document.getElementById("menuDesp");
  dropdownMenu.classList.toggle("show");
}

function cerrarSesion() {
  document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  document.location.reload();
}