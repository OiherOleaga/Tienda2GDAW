<?php

require "php/comprobarSesion.php";
require "php/methods.php";

if (!$empresa = comprobarSesion()) {
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
    require "db/fotosProducto.php";
    require "php/prepararProducto.php";
    try {
        $datos = prepararProductoUpdate($mensajeUsuario);

        $datos["producto"]["idComerciante"] = $empresa["ID"];
        if ($fotos) {
            updateProducto($producto);
            updateFotoProducto($fotos, GET("p"));
            updateCategorias($categorias, GET("p"));
            $mensajeUsuario = "producto actuzlizado";
        }
    } catch (Exection $e) {
        $errorDev = $e->getMessage();
        $mensajeUsuario = "error al insertar";
    }
}
require "./db/categorias.php";
require "./db/fotosProducto.php";
$producto = getProducto(GET("p"), $empresa["ID"]);
$categorias = getCategoriasProducto($producto["ID"]);
$categorias = $categorias ? $categorias : [];
$fotos = getFotosProducto($producto["ID"]);


require("views/partials/headEmpresa.php");
require("php/views/editarProducto.view.php");