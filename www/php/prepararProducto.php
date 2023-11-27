<?php 

/**
 * Prepares product data for insertion and performs necessary checks.
 *
 * @param string $errorUsuario The error message for user feedback (passed by reference).
 *
 * @return array|null The prepared product data if successful, or null on failure.
 */
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

/**
 * Prepares product details and photos for insertion and performs necessary checks.
 *
 * @param string $errorUsuario The error message for user feedback (passed by reference).
 * @param array $producto The product details to be prepared.
 * @param array $fotos The product photos to be prepared.
 *
 * @return array|null The prepared product photos if successful, or null on failure.
 */
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

    if (count($fotos) > 0) {
        return descargarFotoProducto($fotos, getMaxIdProducto(), $_SESSION["id"]);
    }
}

/**
 * Prepares product data for update and performs necessary checks.
 *
 * @param string $errorUsuario The error message for user feedback (passed by reference).
 *
 * @return array|null The prepared product data if successful, or null on failure.
 */
function prepararProductoUpdate(&$errorUsuario) {
    require "php/methods.php";
    $producto = [];
    postAddArray($producto, "titulo");
    postAddArray($producto, "direccion");
    postAddArray($producto, "precio");
    $fotos = [];

    for ($i = 0; $i < 5; $i++) {
        postAddArray($fotos, "foto$i");
    }

    $categorias = [];
    if (isset($_POST["categorias"]) && isset($_POST["categoriasTodas"])) {
        foreach ($_POST["categoriasTodas"] as $categoria) {
            $marcado = false;
            if ($categoria == "true") {
                $marcado = true;
            }
            if (!$marcado) {
                $errorUsuario = "tiene que tener minimo una categoria";
                return null;
            }
        }

        foreach ($_POST["categorias"] as $categoria) {
            array_push($categorias, $categoria);
        }
    }

    $datos = [
        "fotos" => prepararProducto($errorUsuario, $producto, $fotos),
        "producto" => $producto,
        "categorias" => $categorias
    ];

    return $datos;
}