<?php
require "./php/comprobarSesion.php";
require "./db/categorias.php";

if (($cliente = comprobarSesion())) {
    require("php/views/partials/headUsuario.php");
} else {
    require("php/views/partials/headInicio.php");
}

$categorias = getCategorias();
$categorias = $categorias? $categorias : [];


$search = isset($_GET["search"])? $_GET["search"] : "";
require("views/productos.view.php");