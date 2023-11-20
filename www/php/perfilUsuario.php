<?php

require "./php/comprobarSesion.php";
$cliente = comprobarSesion();
require("php/views/partials/headUsuario.php");

switch ($uri[2]) {
    case '/info':
        require "views/info.view.php";
        break;
    case '/favorites':
        require "views/favorites.view.php";
        break;
    case '/config':
        require "views/config.view.php";
        break;
    default:
        require "views/info.view.php";
        break;
}

require("views/perfilUsuario.view.php");