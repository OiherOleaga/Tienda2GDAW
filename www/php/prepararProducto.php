<?php 

function prepararProductoInsert(&$errorUsuario) {
    require_once "php/methods.php";
    require_once "php/comprobarVacios.php";

    $producto = [
        "titulo" => POST("titulo"),
        "precio" => POST("precio"),
        "descripcion" => POST("descripcion")
    ];

    $fotos = [];

    for ($i = 0; $i < 5; $i++) {
        postAddArray($fotos, "foto$i");
    }

    if (count($fotos) < 1) {
        $errorUsuario = "minimo una foto";
        return null;
    }

    if (!isset($_POST["categorias"])) {
        $errorUsuario = "tiene que tener minimo una categoria";
        return null;
    }
    $categorias = [];
    foreach ($_POST["categorias"] as $categoria) {
        array_push($categorias, $categoria);
    }

    $datos = [
        "fotos" => prepararProducto($errorUsuario, $producto, $fotos),
        "producto" => $producto,
        "categorias" => $categorias
    ];

    return $datos;
}

function prepararProducto(&$errorUsuario, $producto, $fotos) {
    require_once "php/descargarImagen.php";
    require_once "db/productos.php";
    if (isset($producto["titulo"]) && tituloDistinto($producto["titulo"]) != null) {
        $errorUsuario = "el titulo esta ocupado";
        return null;
    }

    if (isset($producto["precio"]) && !is_numeric($producto["precio"])) {
        $errorUsuario = "precio tiene que ser numerico";
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