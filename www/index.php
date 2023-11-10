<?php
require("php/baseDeDatos.php");
if (isset($_COOKIE[session_name()])) {
    $cliente= getCliente();
    require("php/views/partials/headUsuario.php");
}else require("php/views/partials/headInicio.php");

$productos = consultarProductos();
require("php/views/index.viewUsuario.php");