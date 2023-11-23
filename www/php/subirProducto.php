<?php

require "php/comprobarSesion.php";

if (!comprobarSesion()) {
    header("Location: /");
    exit;
}

$mensajeUsuario = "";
$errorDev = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "db/productos.php";
    require "db/fotosProducto.php";
    require "php/prepararProducto.php";
    try {
        $producto = [
            "idComerciante" => $_SESSION["id"]
        ];
        $fotos = prepararProductoInsert($mensajeUsuario, $producto);

        if ($fotos) {
            insertFotoProducto($fotos, insertProducto($producto));
            $mensajeUsuario = "producto añadido";
        }
    } catch (Exection $e) {
        $errorDev = $e->getMessage();
        $mensajeUsuario = "error al insertar";
    }
}




require("views/partials/headEmpresa.php");
require("php/views/subirProducto.view.php");
