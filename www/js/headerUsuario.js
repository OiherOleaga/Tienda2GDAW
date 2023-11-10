document.getElementById("btnAvatar").addEventListener("click", mostrarMenu);

function mostrarMenu() {
  let dropdownMenu = document.getElementById("menuDesp");
  dropdownMenu.classList.toggle("show");
}