<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

if ($uri != "/") {
    $path = "./php$uri.php";
    if (file_exists($path)) {
        require "$path";
    } else {
        require "./html/error-404.html";
    }
    exit;
}

require "./db/productos.php";
if (isset($_COOKIE[session_name()])) {
    require "./db/clientes.php";
    session_start();
    if (!isset($_SESSION["id"])) {
        setcookie("PHPSESSID", "", time() - 3600); 
    }

    $cliente = getCliente($_SESSION["id"]);
    if ($cliente == null) {
        setcookie("PHPSESSID", "", time() - 3600); 
        require("php/views/partials/headInicio.php");
    } else {
        require("php/views/partials/headUsuario.php");
    }
} else require("php/views/partials/headInicio.php");

$productos = consultarProductos();
require("php/views/index.viewUsuario.php");
