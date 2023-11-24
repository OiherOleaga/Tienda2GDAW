<?php

require "php/comprobarSesion.php";

if (!$empresa = comprobarSesion()) {
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
            "idComerciante" => $empresa["ID"]
        ];
        $fotos = prepararProductoInsert($mensajeUsuario, $producto);

        if ($fotos) {
            insertFotoProducto($fotos, insertProducto($producto));
            $mensajeUsuario = "producto añadido";
        }
    } catch (Exception $e) {
        $errorDev = $e->getMessage();
        $mensajeUsuario = "error al insertar";
    }
}

require "./db/categorias.php";

$categorias = getCategorias();
$categorias = $categorias ? $categorias : [];


require("views/partials/headEmpresa.php");
require("php/views/subirProducto.view.php");
