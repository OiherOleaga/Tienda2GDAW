<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

/*
"\n" .
"\n" .
"\n" .
"\n" .
"\n" .
*/