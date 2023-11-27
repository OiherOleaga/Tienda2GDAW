<?php

require "php/comprobarSesion.php";
if (!$cliente = comprobarSesion()) {
    header("Location: /");
    exit;
}

$mensajeUsuario = "";
$errorDev = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch ($uri[2]) {
        case "info":
            require "php/infoPost.php";
            break;
    }
}
require "db/productos.php";
$productos = consultarProductoLikes($cliente["ID"]);

/**
 * Processes the request based on the presence of "peticion" in the GET parameters.
 * If "peticion" is set to "js," includes the corresponding JavaScript-related view.
 * Otherwise, includes the user profile view.
 */
if (isset($_GET["peticion"]) && $_GET["peticion"] == "js") {
    switch ($uri[2]) {
        case 'info':
            require "views/info.view.php";
            break;
        case 'favorites':
            require "views/favorites.view.php";
            break;
        case 'ayuda':
            require "views/ayuda.view.php";
            break;
        default:
            require "views/info.view.php";
            break;
    }
} else {
    require("php/views/partials/headUsuario.php");
    require "./php/views/perfilUsuario.view.php";
}