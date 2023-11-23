<?php

require "php/comprobarSesion.php";

if (!comprobarSesion()) {
    header("Location : /");
}

$mensajeUsuairo = "";
$errorDev = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "db/productos.php";
    require "db/fotoProducto.php";
    require "php/prepararProducto.php";
    try {
        $producto = [
            "idComerciante" => $_SESSION["id"]
        ];
        $fotos = prepararProductoInsert($mensajeUsuairo, $producto);

        if ($fotos) {
            insertFotoProducto($fotos, insertProducto($producto));
        }
    } catch (Exection $e) {
        $errorDev = $e->getMessage();
        $mensajeUsuairo = "error al insertar";
    }
}




require("views/partials/headEmpresa.php");
require("php/views/subirProducto.view.php");
