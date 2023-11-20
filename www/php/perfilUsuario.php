<?php

require "./php/comprobarSesion.php";
$cliente = comprobarSesion();

if (isset($_GET["peticion"]) && $_GET["peticion"] == "js") {
    switch ($uri[2]) {
        case 'info':
            require "./php/views/info.view.php";
            break;
        case 'favorites':
            require "./php/views/favorites.view.php";
            break;
        case 'configuracion':
            require "./php/views/configuracion.view.php";
            break;
        default:
            require "./php/views/info.view.php";
            break;
    }
} else {
    require("php/views/partials/headUsuario.php");
    require "./php/views/perfilUsuario.view.php";
}
