<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

if ($uri != "/") {
    $uri = explode("/", $uri);
    $path = "./php/$uri[1].php";
    if (file_exists($path)) {
        require "$path";
    } else {
        require "./html/error-404.html";
    }
    exit;
}


require "./db/productos.php";
require "./php/comprobarSesion.php";

if (($cliente = comprobarSesion())) {
    require("php/views/partials/headUsuario.php");
} else {
    require("php/views/partials/headInicio.php");
}
$productos = consultarProductos();
closeCon();
require("php/views/index.viewUsuario.php");
