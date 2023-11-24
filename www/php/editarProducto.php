<?php

require "php/comprobarSesion.php";
require "php/methods.php";

if (!comprobarSesion()) {
    header("Location: /");
    exit;
}

require "db/productos.php";
$mensajeUsuario = "";
$errorDev = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "db/fotosProducto.php";
    require "php/prepararProducto.php";
    try {
        $producto = [
            "idComerciante" => $_SESSION["id"]
        ];
        //$fotos = prepararProductoUpdate($mensajeUsuario, $producto);

        if ($fotos) {
            //updateFotoProducto($fotos, updateProducto($producto));
            $mensajeUsuario = "producto añadido";
        }
    } catch (Exection $e) {
        $errorDev = $e->getMessage();
        $mensajeUsuario = "error al insertar";
    }
}

$producto = getProducto(GET("p"), $_SESSION["id"]);


require("views/partials/headEmpresa.php");
require("php/views/editarProducto.view.php");