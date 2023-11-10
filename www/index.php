<?php
require("php/baseDeDatos.php");
if (isset($_COOKIE[session_name()])) {
    require("php/views/partials/headUsuario.php");
    $cliente= getCliente();
}else require("php/views/partials/headInicio.php");

$productos = consultarProductos();
require("php/views/index.viewUsuario.php");