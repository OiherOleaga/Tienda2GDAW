<?php

require "php/comprobarSesion.php";
require "php/methods.php";
require "./db/fotosProducto.php";

if (!$cliente = comprobarSesion()) {
    header("Location: /");
    exit;
}

require "db/productos.php";
$mensajeUsuario = "";
$errorDev = "";

/**
 * Handle the update of a product based on POST data.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "php/prepararProducto.php";
    require_once "db/productos.php";
    require "db/categoriaProducto.php";
    try {
        $datos = prepararProductoUpdate($mensajeUsuario);

        if ($datos) {
            $datos["producto"]["id_comerciante"] = $cliente["ID"];
            $idProducto = GET("p");
            $datos["producto"]["id"] = $idProducto;
            //print_r($datos);
            //exit;
            updateProducto($datos["producto"]);
            updateFotoProducto($datos["fotoCambio"], $idProducto);
            insertFotoProducto($datos["fotosInsert"], $idProducto);
            insertCategoriaProducto($datos["categoriasInsert"], $idProducto);
            deleteCategoriaProducto($datos["categoriasDelete"], $idProducto);
            $mensajeUsuario = "producto actuzlizado";
        }
    } catch (Exection $e) {
        $errorDev = $e->getMessage();
        $mensajeUsuario = "error al insertar";
    }
}
require "./db/categorias.php";
$producto = getProducto(GET("p"), $cliente["ID"]);
$categorias = getCategoriasProducto($producto["ID"]);
$categorias = $categorias ? $categorias : [];
$fotos = getFotosProducto($producto["ID"]);


require("views/partials/headEmpresa.php");
require("php/views/editarProducto.view.php");