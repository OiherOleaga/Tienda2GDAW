<?php
require "./db/productos.php";
require "./php/comprobarSesion.php";

if (($cliente = comprobarSesion())) {
    require("php/views/partials/headUsuario.php");
} else {
    require("php/views/partials/headInicio.php");
}

$productos = consultarProductos();
closeCon();
require("views/productos.view.php");