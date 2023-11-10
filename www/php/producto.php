<?php
$imagen = "https://i.ytimg.com/vi/vbpRiBK12Xg/maxresdefault.jpg";
$precio = 499.99;
$empresa = "GAME";
$logoEmpresa = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE3eEsHBXKH9ZVgPg5if1hJo4CKktP5emOG5ZKBX4&s";
$titulo = "PlayStation 5 Black Box";
$desc = "oña Uzeada de Ribera Maldonado de Bracamonte y Anaya era baja, rechoncha, abigotada. Ya no existia razon para llamar talle al suyo. Sus colores vivos, sanos, podian mas que el albayalde y el soliman del afeite, con que se blanqueaba por simular melancolias. Gastaba dos parches oscuros, adheridos a las sienes y que fingian medicamentos. Tenia los ojitos ratoniles, maliciosos. Sabia dilatarlos duramente o des";
$ubi = "Zaramaga Kalea, 1, 01013 Gasteiz, Araba";
$imgLike = "/assets/amor.png";
require("baseDeDatos.php");
if (isset($_COOKIE[session_name()])) {
    session_start();
    $id = $_SESSION["id"];
    $data = ['id' => $id];
    $cliente = getCliente($data);
    require("views/partials/headUsuario.php");
} else require("views/partials/headInicio.php");

require("views/producto.view.php");
