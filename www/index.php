<?php
require("php/baseDeDatos.php");
if (isset($_COOKIE[session_name()])) {
    session_start();
    $id = $_SESSION["id"];
    $data = ['id' => $id];
    $cliente = getCliente($data);
    require("php/views/partials/headUsuario.php");
} else require("php/views/partials/headInicio.php");

$productos = consultarProductos();
require("php/views/index.viewUsuario.php");
