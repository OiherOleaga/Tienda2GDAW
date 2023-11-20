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


require "./php/comprobarSesion.php";
require "./db/productos.php";

if (($cliente = comprobarSesion())) {
    switch ($_SESSION["tipo"]) {
        case "cliente":
            require("php/views/partials/headUsuario.php");
            break;
            /*
        case "comerciante":
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                require "php/methods.php";
                $datos = [
                    "nombre" => 
                    "correo" =>
                    "telefono" =>
                    "direccin" =>
                ]
                updateProduco(POST("nombre"), POST(""));
            }
            */
            $productos = getProductosComerciante($cliente["ID"]);
            closeCon();
            require("php/views/partials/headUsuario.php");
            require "php/views/index.viewEmpresa.php";
            exit;
    }
} else {
    require("php/views/partials/headInicio.php");
}

$productos = consultarProductos();
closeCon();
require("php/views/index.viewUsuario.php");
