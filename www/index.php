<?php
require("php/baseDeDatos.php");
if (isset($_COOKIE[session_name()])) {
    session_start();
    $id = $_SESSION["id"];
    $cliente = getCliente($id);
    require("php/views/partials/headUsuario.php");
} else require("php/views/partials/headInicio.php");

$productos = consultarProductos();
require("php/views/index.viewUsuario.php");
