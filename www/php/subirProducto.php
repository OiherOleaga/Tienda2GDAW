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
    require "db/categoriaProducto.php";

    try {
        $datos = prepararProductoInsert($mensajeUsuario);

        $datos["producto"]["idComerciante"] = $empresa["ID"];
        if ($datos) {
            $idProducto = insertProducto($datos["producto"]);
            insertFotoProducto($datos["fotos"], $idProducto);
            insertCategoriaProducto($datos["categorias"], $idProducto);
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
