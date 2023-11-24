<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require "comprobarSesion.php";
    require "../db/categorias.php";

    if (($cliente = comprobarSesion())) {
        if ($_SESSION["tipo"] == "cliente") {
            require("views/partials/headUsuario.php");
        } else {
            require("views/partials/headEmpresa.php");
        }
    } else {
        require("views/partials/headInicio.php");
    }

    $categorias = getCategorias();
    $categorias = $categorias ? $categorias : [];
    require("views/subirProductoView.php");
}
