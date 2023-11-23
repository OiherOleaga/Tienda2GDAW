<?php 

function prepararProductoInsert(&$errorUsuairo, &$producto) {
    require_once "php/methods.php";
    require_once "php/comprobarVacion.php";

    $producto = [
        "titulo" => POST("titulo"),
        "precio" => POST("precio"),
        "descripcion" => POST("descripcion")
    ];
    require_once "methods.php";
    $fotos = [];
    //añadir el name si se pone foto
    for ($i = 0; $i < 5; $i++) {
        postAddArray($fotos, "foto$i", $i);
    }

    if (count($fotos) < 1) {
        $errorUsuairo = "minimo una foto";
        return null;
    }

    return prepararProducto($errorUsuairo, $producto, $fotos);
}

function prepararProducto(&$errorUsuairo, &$producto, $fotos) {
    require_once "php/descargarImagen.php";
    if (isset($producto["titulo"])) {
        // comprobar titulo distinto
    }

    if (!comprobarVacios($producto)) {
        $errorUsuario = "No puede haber ningun campo vacio";
        return null;
    }
    $fotos;
    descargarImagen();
    return $fotos;
}

function prepararProductoUpdate() {

}