<?php 

function prepararProductoInsert(&$errorUsuairo, &$producto) {
    require_once "php/methods.php";
    require_once "php/comprobarVacios.php";

    $producto["titulo"] = POST("titulo");
    $producto["precio"] = POST("precio");
    $producto["descripcion"] = POST("descripcion");

    $fotos = [];

    for ($i = 0; $i < 5; $i++) {
        postAddArray($fotos, "foto$i");
    }

    if (count($fotos) < 1) {
        $errorUsuairo = "minimo una foto";
        return null;
    }

    return prepararProducto($errorUsuairo, $producto, $fotos);
}

function prepararProducto(&$errorUsuairo, &$producto, $fotos) {
    require_once "php/descargarImagen.php";
    require_once "db/productos.php";
    if (isset($producto["titulo"]) && tituloDistinto($producto["titulo"]) != null) {
        $errorUsuairo = "el titulo esta ocupado";
        return null;
    }

    if (isset($producto["precio"]) && !is_numeric($producto["precio"])) {
        $errorUsuairo = "precio tiene que ser numerico";
        return null;
    }

    if (!comprobarVacios($producto)) {
        $errorUsuario = "No puede haber ningun campo vacio";
        return null;
    }

    return descargarFotoProducto($fotos, getMaxIdProducto(), $_SESSION["id"]);
}

function prepararProductoUpdate() {

}