<?php
$uri = $_SERVER["REQUEST_URI"];

if ($uri != "/") {
    $path = "./php$uri.php";
    if (file_exists($path)) {
        require "$path";
    } else {
        require "/php/error-404.php";
    }
    exit;
}

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
