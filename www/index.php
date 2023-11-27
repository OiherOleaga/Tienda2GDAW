<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

/**
 * Check if the URI is not the root ("/") and include the corresponding PHP file.
 */
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


require "./php/comprobarSesion.php";
require "./db/productos.php";

/**
 * Check if a user session is active and include the corresponding files based on user type.
 */
if (($cliente = comprobarSesion())) {
    switch ($_SESSION["tipo"]) {
        case "cliente":
            require("php/views/partials/headUsuario.php");
            break;
        case "comerciante":
            require "php/indexEmpresa.php";
            exit;
        case "administrador":
            require "php/indexAdmin.php";
            exit;
    }
} else {
    require("php/views/partials/headInicio.php");
}

$productos = consultarProductos();

$productosFav = productosMasGustados();

$productosNuevos = consultarProductosNuevos();
closeCon();
require("php/views/index.viewUsuario.php");