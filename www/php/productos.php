<?php
require "./php/comprobarSesion.php";

if (($cliente = comprobarSesion())) {
    require("php/views/partials/headUsuario.php");
} else {
    require("php/views/partials/headInicio.php");
}

$search = isset($_GET["search"])? $_GET["search"] : "";
require("views/productos.view.php");