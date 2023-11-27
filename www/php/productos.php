<?php

/**
 * Handle HTTP GET and POST requests for product-related actions.
 */
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require "./php/comprobarSesion.php";
    require "./db/categorias.php";

    if (($cliente = comprobarSesion())) {
        if ($_SESSION["tipo"]=="cliente") {
            require("php/views/partials/headUsuario.php");
        }else{
            require("php/views/partials/headEmpresa.php");
        }
    } else {
        require("php/views/partials/headInicio.php");
    }

    $categorias = getCategorias();
    $categorias = $categorias? $categorias : [];

    $search = isset($_GET["search"])? $_GET["search"] : "";
    require("views/productos.view.php");
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "./db/productos.php";
    require "./php/methods.php";
    try {
        $producto = filtrado(POST_J("partida"), POST_J("search"), POST_J("idCategorias"), POST_J("precioMin"), POST_J("precioMax"));
        header('Content-Type: application/json');
        echo $producto? json_encode($producto) : "[false]";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    closeCon();
}